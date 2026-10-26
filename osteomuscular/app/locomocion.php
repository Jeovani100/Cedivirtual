<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Problemas de locomoción</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="//code.jquery.com/jquery-latest.js"></script>
<script src="//rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
<?php
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); ; 
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/controlsesion5.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'contador/usuarios.php';
include_once 'contador/visitas.php';
include_once 'contador/usuarios.php';
include_once 'contador/visitas.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM locomocion WHERE id = $id";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
$id= $row['id'];
$Codigo= $row['Codigo'];
$Nombre= $row['Nombre'];
$Cedula= $row['Cedula'];
$Empresa= $row['Empresa'];
$Edad= $row['Edad'];
$Sede= $row['Sede'];
$Cargo= $row['Cargo'];
$Dominancia= $row['Dominancia'];
$Antiguedad_a= $row['Antiguedad_a'];
$Antiguedad_m= $row['Antiguedad_m'];
$Antiguedad2_a= $row['Antiguedad2_a'];
$Antiguedad2_m= $row['Antiguedad2_m'];
$Horas= $row['Horas'];
$Postura= $row['Postura'];



?>
<style>
    @font-face {
        font-family: MyriadPro;
        src: url(../fonts/MyriadPro-Regular.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadProb;
        src: url(../fonts/MyriadProBold.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: MyriadPro2;
        src: url(../fonts/MyriadPro.ttf);
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
    body {
        font-size:14px!important;
        font-family:MyriadPro;
        background: #ffffff; 
        text-rendering: optimizeLegibility; 
        background-image: url('https://www.cedisalud.com.co/imagine/osteo6.png');
        background-size: 40em;
        background-position:50% 0%;
    }
    .container-fluid li a:link, .container-fluid li a:visited {
        color: #000000;
        background:transparent!important;
    }
    .container-fluid li a:hover, .container-fluid li a:active {
        color:#333333;
    } 
    a, a:hover, a:focus, button, input, textarea, select {
        text-decoration: none;
        outline: none;
        resize: none;
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    input[type="radio"] { 
        display:inline-block;
        -webkit-appearance: none;
        -moz-appearance: none;
        visibility:hidden;
        background:url(imagen_checkbox.png) left top no-repeat;                
        cursor:none!important;
    }
    .radio label {
        position: relative;
        margin:-2em!important;
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
    } 
    .blink_me {
      animation: blinker 2s linear infinite;
    }
    @keyframes blinker {  
      50% { opacity: 0; }
    }
    a:link { 
        text-decoration:none; 
    } 
    @media screen and (max-width: 480px) {
        #costumModal .modal-m,
        #costumModal2 .modal-m,
        #costumModal3 .modal-m {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    .ventana_flotante {
       /* box-shadow: 0px 4px 10px 0px rgba(0,0,0,8);*/
        background-color:transparent;
        margin-bottom:30px;
        padding:1em;
        background-size: 20em 20em;
    }
    input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        visibility:hidden;
        cursor:none!important;
        float:right!important;
    }
    .checkbox label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin:-2em!important;
    }
     #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 25px;
        height: 25px;
        background-color:transparent;
        border:1px solid #004466;
        text-align:center;
        margin-top:-2.2em;
        margin-left:1em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        font-size:28px!important;
        color:#004466;
        margin-top:-48px;
        margin-left:0.6em;
    }
     #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 25px;
        height: 25px;
        background-color:transparent;
        border: 1px solid #742574;
        text-align:center;
        margin-top:-2.2em;
        margin-left:1em;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:28px!important;
        color:#4b1a4c;
        margin-top:-48px;
        margin-left:0.6em;
    }
     #check3::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 24px;
        height: 24px;
        background-color:transparent;
        border:1px solid #999999;
        text-align:center;
        margin-top:-2em;
    }
    #check3::after {
        display: inline-block;
        position: absolute;
        font-size:30px!important;
        color:#4b1a4c;
        margin-top:-1.5em;
    }
    select {
        background-color:transparent;
        border:1px solid #71788e!important; 
        border:0;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
    }
    .table td {
        text-align:center;
        vertical-align:middle!important;
        border:0px solid #611f61!important;
    }
    .table th {
        padding:0.5em!important;
        vertical-align:middle!important;
        font-family:MyriadProb;
    }
    .table td {
        padding:0.2em!important;
        vertical-align:middle!important;
        font-family:MyriadProb;
    }
    #export_all {
        width:100%;
        height: 40px;
        font-size:18px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #export_all:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #666666!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    textarea {
        font-family:MyriadPro;
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        border-radius:0;
        border-bottom: 1px solid #004466!important;
        background:transparent;
        height:auto;
        padding:0;
        margin:0;
    }
    select {
        font-family:MyriadPro;
        font-size:18px!important;
        border-top: 0px!important;
        border-left: 0px!important;
        border-right: 0px!important;
        border-radius:0;
        border-bottom: 1px solid #742574!important;
        background:transparent;
        padding:1px!important;
        height:2em;
    }
    input {
        font-family:MyriadPro;
        font-size:18px!important;
        border-top: 0px!important;
        border-left: 0px!important;
        border-right: 0px!important;
        border-bottom: 1px solid #742574!important;
        border-radius:0;
        background:transparent;
        padding:1px!important;
        height:2em;
    }
    ::-webkit-input-placeholder {color:#a6a6a6!important } 
    :-moz-placeholder {color:#a6a6a6!important } 
    ::-moz-placeholder {color:#a6a6a6!important } 
    :-ms-input-placeholder {color:#a6a6a6!important }
     @media screen and (max-width: 800px) {
        table {
            width:100%; 
        }
        tbody td {
            display: block;
            text-align:center;
            width:100%;
            min-height:3em!important;
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
        .ventana_flotante {
            padding:1em!important;
        }
        .container {
            padding:0.5em!important;
        }
        .etiqueta {
            background:#f9f9f9!important;
            width:100%!important;
            vertical-align: baseline;!important;
            padding-top:1em!important;
            padding-left:0!important;
        }
        .etiqueta2 {
            padding-left:0!important;
            padding-right:0!important;
        }
        #espacio {
            display:none!important;
        }
        #check2::before {
            margin-top:-1.2em!important;
            margin-left:-1em!important;
        }
        #check2::after {
            margin-top:-29px!important;
            margin-left:-0.6em!important;
        }
        .resp1 {
            display:none!important;   
        }
        .resp2 {
            display:block!important;   
        }
        #Modal_7 .modal-m,
        #Modal_6_4_1 .modal-m,
        #Modal_6_4_2 .modal-m,
        #Modal_6_4_3 .modal-m,
        #Modal_6_4_4 .modal-m,
        #Modal_6_4_5 .modal-m,
        #Modal_6_4_6 .modal-m,
        #Modal_6_4_7 .modal-m,
        #Modal_6_4_8 .modal-m,
        #Modal_6_4_9 .modal-m,
        #costumModal .modal-lg {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
        .resp3 {
            display:none!important;
        }
        #segmento {
            margin-left:0!important;
        }

     }
    .resp2 {
        display:none;   
    }
     .etiqueta {
          font-size:18px!important;
          padding-left:2em!important;
     }
     .parpadea {
      animation-name: parpadeo;
      animation-duration:2s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
      -webkit-animation-name:parpadeo;
      -webkit-animation-duration: 2s;
      -webkit-animation-timing-function: linear;
      -webkit-animation-iteration-count: infinite;
    }
    
    @-moz-keyframes parpadeo{  
       0% { opacity: 2.0; }
       50% { opacity: 0.0; }
       100% { opacity: 2.0; }
    }
    @-webkit-keyframes parpadeo {  
       0% { opacity: 2.0; }
       50% { opacity: 0.0; }
       100% { opacity: 2.0; }
    }
    @keyframes parpadeo {  
       0% { opacity: 2.0; }
       50% { opacity: 0.0; }
       100% { opacity: 2.0; }
    } 
    #boton {
        height: 40px;
        font-size:18px;
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
        border: 1px solid #666666!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
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
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
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
    .boton {
        width: 270px;
        height: 35px;
        font-family:verdanab;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    .boton:hover {
        font-family:verdanab;
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #678e98!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    select::-ms-expand {
        display: none!important;
    }
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
    }
</style>
<body>
    <div class="container-fluid" style="background:transparent;font-size:16px;font-family:Moriston;z-index:-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <?php echo ' ' . $Nombre; ?>
                </a>
            </li>                           
            <li>
                <a href="#">
                    <?php echo ' ' . $Empresa; ?>
                </a>
            </li>  
            <li>
                <a href="https://www.cedisalud.com.co/vistas/logout_locomocion.php">
                    <i class="fa fa-share-square-o" aria-hidden="true"></i> SALIR</a>
            </li>
    </div>
<div class="container" style="font-size:18px;padding:1em;margin-top:-1em">
    <div class="ventana_flotante" id="registro" style="padding:2em">
        <!--<p style="font-family:MyriadProb;font-size:25px;text-align:center">CUESTIONARIO DE APTITUD PARA LA ACTIVIDAD FÍSICA</p><br>-->
            <p style="font-family:Moristonb;font-size:23px;color:#6d4660!important;letter-spacing:1px;text-align:center">SINTOMAS DE DESORDENES MUSCULO ESQUELETICOS</p><br>
            <!--<p style="font-family:Narrow;font-size:24px;color:#666666!important;letter-spacing:1px;text-align:center;margin-top:-0.5em">CEDIENCUESTA</p><br>-->
            <form>
            <table class="table table-striped" style="width:100%;border:0px solid #999999;">
                <tr>
                    <td style="text-align:left;background:#f9ecf9">Nombre y apellidos</td>
                    <td style="text-align:left"><input type="text" id="Nombre" style="border:0!important;width:100%;height:100%" value="<?php echo $Nombre ?>" oninput='style.color="#004466"' readonly></td>
                    <td style="background:#f9ecf9;text-align:left">Cédula:</td>
                    <td style="text-align:left"><input type="text" id="Cedula" style="border:0!important;width:100%;height:100%" value="<?php echo $Cedula ?>" oninput='style.color="#004466"' readonly></input></td>
                </tr>
                <tr>
                    <td id="edad" style="background:#f9ecf9;text-align:left">Edad:</td>
                    <td style="text-align:left" ><span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="Edad" style="color:#742574!important;border:0!important;width:6em!important;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected >Seleccione...</option> 
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                            <option value="31" style="color:#000000">31</option>
                            <option value="32" style="color:#000000">32</option>
                            <option value="33" style="color:#000000">33</option>
                            <option value="34" style="color:#000000">34</option>
                            <option value="35" style="color:#000000">35</option>
                            <option value="36" style="color:#000000">36</option>
                            <option value="37" style="color:#000000">37</option>
                            <option value="38" style="color:#000000">38</option>
                            <option value="39" style="color:#000000">39</option>
                            <option value="40" style="color:#000000">40</option>
                            <option value="41" style="color:#000000">41</option>
                            <option value="42" style="color:#000000">42</option>
                            <option value="43" style="color:#000000">43</option>
                            <option value="44" style="color:#000000">44</option>
                            <option value="45" style="color:#000000">45</option>
                            <option value="46" style="color:#000000">46</option>
                            <option value="47" style="color:#000000">47</option>
                            <option value="48" style="color:#000000">48</option>
                            <option value="49" style="color:#000000">49</option>
                            <option value="50" style="color:#000000">50</option>
                            <option value="51" style="color:#000000">51</option>
                            <option value="52" style="color:#000000">52</option>
                            <option value="53" style="color:#000000">53</option>
                            <option value="54" style="color:#000000">54</option>
                            <option value="55" style="color:#000000">55</option>
                            <option value="56" style="color:#000000">56</option>
                            <option value="57" style="color:#000000">57</option>
                            <option value="58" style="color:#000000">58</option>
                            <option value="59" style="color:#000000">59</option>
                            <option value="60" style="color:#000000">60</option>
                            <option value="61" style="color:#000000">61</option>
                            <option value="62" style="color:#000000">62</option>
                            <option value="63" style="color:#000000">63</option>
                            <option value="64" style="color:#000000">64</option>
                            <option value="65" style="color:#000000">65</option>
                            <option value="66" style="color:#000000">66</option>
                            <option value="67" style="color:#000000">67</option>
                            <option value="68" style="color:#000000">68</option>
                            <option value="69" style="color:#000000">69</option>
                            <option value="70" style="color:#000000">70</option>
                        </select>
                    </td>
                    <td style="background:#f9ecf9;text-align:left">Empresa:</td>
                    <td style="text-align:left"><input type="text" id="Empresa" style="border:0!important;width:100%;height:100%" value="<?php echo $Empresa ?>" oninput='style.color="#004466"' readonly></input></td>
                </tr>
                <tr>
                    <td style="background:#f9ecf9;text-align:left">Sede</td>
                    <td style="text-align:left"><input type="text" id="Sede" style="border:0!important;width:100%;height:100%" value="<?php echo $Sede ?>" oninput='style.color="#004466"' readonly></input></td>
                    <td style="background:#f9ecf9;text-align:left">Cargo:</td>
                    <td style="text-align:left"><input type="text" id="Cargo" style="border:0!important;width:100%;height:100%" value="<?php echo $Cargo ?>" oninput='style.color="#004466"' readonly></input></td>
                </tr>
                 <tr>
                    <td id="antiguedad_a" style="background:#f9ecf9;text-align:left">Antigüedad en la empresa:</td>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="Antiguedad_a" style="color:#742574!important;border:0!important;width:6em!important;2em;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option value="1" style="color:#000000">0</option>
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select><br>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="Antiguedad_m" style="color:#742574!important;border:0!important;width:6em!important;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option value="1" style="color:#000000">0</option>
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="8" style="color:#000000">9</option>
                            <option value="8" style="color:#000000">10</option>
                            <option value="8" style="color:#000000">11</option>
                            <option value="8" style="color:#000000">12</option>
                        </select>
                    </td>
                    <td id="antiguedad2_a" style="background:#f9ecf9;text-align:left">Antigüedad en el puesto:</td>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="Antiguedad2_a" style="color:#742574!important;border:0!important;width:6em!important;2em;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option value="1" style="color:#000000">0</option>
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select><br>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="Antiguedad2_m" style="color:#742574!important;border:0!important;width:6em!important;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option value="1" style="color:#000000">0</option>
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="8" style="color:#000000">9</option>
                            <option value="8" style="color:#000000">10</option>
                            <option value="8" style="color:#000000">11</option>
                            <option value="8" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td id="horas" style="background:#f9ecf9;text-align:left">Horas promedio en la semana:</td>
                    <td style="text-align:left"><span style="font-family:MyriadPro;color:#004466">Horas: </span><select type="text" id="Horas" style="color:#742574!important;border:0!important;background:#f9f9f9;width:6em!important;height:2em;color:#000000;" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>         
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>         
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>         
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>         
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>         
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>         
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>         
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>         
                            <option value="18" style="color:#000000">18</option>
                            <option value="19" style="color:#000000">19</option>         
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>         
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>         
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>         
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>         
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>         
                            <option value="30" style="color:#000000">30</option>
                            <option value="31" style="color:#000000">31</option>         
                            <option value="32" style="color:#000000">32</option>
                            <option value="33" style="color:#000000">33</option>         
                            <option value="34" style="color:#000000">34</option>
                            <option value="35" style="color:#000000">35</option>         
                            <option value="36" style="color:#000000">36</option>
                            <option value="37" style="color:#000000">37</option>         
                            <option value="38" style="color:#000000">38</option>
                            <option value="39" style="color:#000000">39</option>         
                            <option value="40" style="color:#000000">40</option>
                            <option value="41" style="color:#000000">41</option>         
                            <option value="42" style="color:#000000">42</option>
                            <option value="43" style="color:#000000">43</option>         
                            <option value="42" style="color:#000000">44</option>
                            <option value="45" style="color:#000000">45</option>         
                            <option value="46" style="color:#000000">46</option>
                            <option value="47" style="color:#000000">47</option>         
                            <option value="48" style="color:#000000">48</option>
                            <option value="49" style="color:#000000">49</option>         
                            <option value="50" style="color:#000000">50</option>
                            <option value="51" style="color:#000000">51</option>         
                            <option value="52" style="color:#000000">52</option>
                            <option value="53" style="color:#000000">53</option>         
                            <option value="54" style="color:#000000">54</option>
                            <option value="55" style="color:#000000">55</option>         
                            <option value="56" style="color:#000000">56</option>
                            <option value="57" style="color:#000000">57</option>         
                            <option value="58" style="color:#000000">58</option>
                            <option value="59" style="color:#000000">59</option>         
                            <option value="60" style="color:#000000">60</option>
                            <option value="61" style="color:#000000">61</option>         
                            <option value="62" style="color:#000000">62</option>
                            <option value="63" style="color:#000000">63</option>         
                            <option value="64" style="color:#000000">64</option>
                            <option value="65" style="color:#000000">65</option>         
                            <option value="66" style="color:#000000">66</option>
                            <option value="67" style="color:#000000">67</option>         
                            <option value="68" style="color:#000000">68</option>
                            <option value="69" style="color:#000000">69</option>         
                            <option value="70" style="color:#000000">70</option>
                            <option value="71" style="color:#000000">71</option>         
                            <option value="72" style="color:#000000">72</option>
                            <option value="73" style="color:#000000">73</option>         
                            <option value="74" style="color:#000000">74</option>
                            <option value="75" style="color:#000000">75</option>         
                            <option value="76" style="color:#000000">76</option>
                            <option value="77" style="color:#000000">77</option>         
                            <option value="78" style="color:#000000">78</option>
                            <option value="79" style="color:#000000">79</option>         
                            <option value="80" style="color:#000000">80</option>
                            <option value="81" style="color:#000000">81</option>         
                            <option value="82" style="color:#000000">82</option>
                            <option value="83" style="color:#000000">83</option>         
                            <option value="84" style="color:#000000">84</option>
                            <option value="85" style="color:#000000">85</option>         
                            <option value="86" style="color:#000000">86</option>
                            <option value="87" style="color:#000000">87</option>         
                            <option value="88" style="color:#000000">88</option>
                            <option value="89" style="color:#000000">89</option>         
                            <option value="90" style="color:#000000">90</option>
                            <option value="91" style="color:#000000">91</option>         
                            <option value="92" style="color:#000000">92</option>
                            <option value="93" style="color:#000000">93</option>         
                            <option value="94" style="color:#000000">94</option>
                            <option value="95" style="color:#000000">95</option>         
                            <option value="96" style="color:#000000">96</option>
                            <option value="97" style="color:#000000">97</option>         
                            <option value="98" style="color:#000000">98</option>
                            <option value="99" style="color:#000000">99</option>         
                            <option value="100" style="color:#000000">100</option>
                        </select>
                    </td>
                    <td id="dominancia" style="background:#f9ecf9;text-align:left">Dominancia:</td>
                    <td style="text-align:left"><span style="font-family:MyriadPro;color:#004466">Lateralidad: </span><select type="text" id="Dominancia" style="color:#742574!important;border:0!important;width:6em!important;height:2em;color:#000000" oninput='style.color="#004466"' required>
                            <option disabled selected>Seleccione...</option> 
                            <option style="color:#000000">Derecho</option>         
                            <option style="color:#000000">Zurdo</option>
                            <option style="color:#000000">Ambos</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p1" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">1. ¿Fuma?</p>
            <table>
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:1em;text-align:left;width:11em">Si</p> 
                        <input type="radio" id="radio550" class ="P1" name ="P1" value="1"/>
                        <label id="check2" for="radio550" style="text-align:right">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:1em;text-align:left;width:11em">No</p>
                        <input type="radio" id="radio551" class ="P1" name ="P1" value="0"/>
                        <label id="check2" for="radio551">
                    </td> 
                </tr>
            </table>
             <p id="p1_1" class="hide1" style="font-family:MyriadPro;color:#004466;">1.1 ¿Cuántos cigarrillos al día?</p>
                <p><select type="text" class="hide1" id="P1_1" style="border:0!important;width:5em!important;2em;height:100%;color:#004466" >
                    <option disabled selected>0</option> 
                    <option style="color:#000000">1</option>         
                    <option style="color:#000000">2</option>
                    <option style="color:#000000">3</option>
                    <option style="color:#000000">4</option>
                    <option style="color:#000000">5</option>
                    <option style="color:#000000">6</option>
                    <option style="color:#000000">7</option>
                    <option style="color:#000000">8</option>
                    <option style="color:#000000">9</option>
                    <option style="color:#000000">10</option>
                    <option style="color:#000000">11</option>
                    <option style="color:#000000">12</option>
                    <option style="color:#000000">13</option>
                    <option style="color:#000000">14</option>
                    <option style="color:#000000">15</option>
                    <option style="color:#000000">16</option>
                    <option style="color:#000000">17</option>
                    <option style="color:#000000">18</option>         
                    <option style="color:#000000">19</option>
                    <option style="color:#000000">20</option>
                    <option style="color:#000000">21</option>
                    <option style="color:#000000">22</option>
                    <option style="color:#000000">23</option>
                    <option style="color:#000000">24</option>
                    <option style="color:#000000">25</option>
                    <option style="color:#000000">26</option>
                    <option style="color:#000000">27</option>
                    <option style="color:#000000">28</option>
                    <option style="color:#000000">29</option>
                    <option style="color:#000000">30</option>
                </select></p>
            <p id="p1_2" class="hide1" style="font-family:MyriadPro;color:#004466">1.2 ¿Hace cuánto tiempo fuma?</p>
            <table class="hide1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P1_2" class="P1_2" style="color:#742574!important;border:0!important;width:3em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                            <option disabled selected>0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P1_3" class="P1_3" style="color:#742574!important;border:0!important;width:3em!important;height:100%;color:#004466" oninput='style.color="#004466"'>
                            <option disabled selected>0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="8" style="color:#000000">9</option>
                            <option value="8" style="color:#000000">10</option>
                            <option value="8" style="color:#000000">11</option>
                            <option value="8" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p2" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">2. ¿Realiza alguna actividad física?</p>
            <table>
                <tr>
                    <td class="resp1"  style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:1em;text-align:left;width:11em">Si</p>  
                        <input type="radio" id="radio552" class ="P2" name ="P2" value="1"/>
                        <label id="check2" for="radio552">
                    </td> 
                    <td class="resp1" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"  style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:1em;text-align:left;width:11em">No</p>  
                        <input type="radio" id="radio553" class ="P2" name ="P2" value="0"/>
                        <label id="check2" for="radio553">
                    </td> 
                </tr>
            </table>
            <p id="p2_1" class="hide2" style="color:#004466">2.1 ¿Cuál?</p>
            <table class="hide2" style="width:100%">
                <tr>
                    <td ><textarea class="note" id="P2_1" class ="P2_1" style="width:100%" rows="1"></textarea></td>
                </tr>
            </table>
            <p id="p2_2" class="hide2" style="color:#004466">2.2 ¿Con qué frecuencia?</p>
            <table class="hide2">
                <tr>
                    <td class="resp1" style="font-size:18px;color:#004466">5-7 días/Sem</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">5-7 días/Sem</p>  
                        <input type="radio" id="radio554" class ="P2_2" name ="P2_2" value="1"/>
                        <label id="check1" for="radio554">
                    </td> 
                </tr>
                <tr>    
                    <td class="resp1" style="font-size:18px;color:#004466">3-4 días/Sem</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">3-4 días/Sem</p>  
                        <input type="radio" id="radio555" class ="P2_2" name ="P2_2" value="2"/>
                        <label id="check1" for="radio555">
                    </td> 
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">1-2 días/Sem</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-2 días/Sem</p> 
                        <input type="radio" id="radio556" class ="P2_2" name ="P2_2" value="3"/>
                        <label id="check1" for="radio556">
                    </td> 
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">Quincenal</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Quincenal</p>  
                        <input type="radio" id="radio557" class ="P2_2" name ="P2_2" value="4"/>
                        <label id="check1" for="radio557">
                    </td>
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">Mensual</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Mensual</p>  
                        <input type="radio" id="radio557_" class ="P2_2" name ="P2_2" value="5"/>
                        <label id="check1" for="radio557_">
                    </td>
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">Ocasional</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Ocasional</p>  
                        <input type="radio" id="radio557__" class ="P2_2" name ="P2_2" value="6"/>
                        <label id="check1" for="radio557__">
                    </td>
                </tr>
            </table>
            <p id="p2_3" class="hide2" style="color:#004466">2.3 ¿Por cuánto tiempo realiza esta actividad?</p>
            <table class="hide2">
                <tr>
                    <td class="resp1" style="font-size:18px;color:#004466">15 min</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">15 min</p>   
                        <input type="radio" id="radio558" class ="P2_3" name ="P2_3" value="1"/>
                        <label id="check1" for="radio558">
                    </td> 
                </tr>
                <tr>    
                    <td class="resp1" style="font-size:18px;color:#004466">30 min</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">30 min</p>  
                        <input type="radio" id="radio559" class ="P2_3" name ="P2_3" value="2"/>
                        <label id="check1" for="radio559">
                    </td> 
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">1 hora</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1 hora</p>   
                        <input type="radio" id="radio560" class ="P2_3" name ="P2_3" value="3"/>
                        <label id="check1" for="radio560">
                    </td> 
                </tr>
                <tr> 
                    <td class="resp1" style="font-size:18px;color:#004466">Más&nbspde&nbspuna&nbsphora&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Más&nbspde&nbspuna&nbsphora&nbsp</p>   
                        <input type="radio" id="radio561" class ="P2_3" name ="P2_3" value="4"/>
                        <label id="check1" for="radio561">
                    </td>
                </tr>
            </table> 
            <p id="p3" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">3. Seleccione las dos principales posturas que adopta durante la jornada laboral y especifique en el porcentaje.</p>
            <table>
                <tr>
                    <td class="checkbox"><p class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">Sentado&nbsp&nbsp</p>  
                        <input type="checkbox" id="P3_1" class ="P3_1" value="1"/>
                        <label id="check2" for="P3_1">
                    </td> 
                    <td id="p3_1" class="etiqueta resp1"><span style="color:#4b1a4c;width:7em">Sentado&nbsp&nbsp</span></td>
                </tr> 
                
                <tr class="hide3">
                    <div >
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0-20%&nbsp&nbsp</p>   
                        <input type="radio" id="radio1" class ="P3_1_1" name="P3_1_1" value="1"/>
                        <label id="check1" for="radio1">
                    </td> 
                    <td  class="etiqueta resp1"><span style="color:#004466!important">0-20%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide3">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">21-40%&nbsp&nbsp</p>  
                        <input type="radio" id="radio2" class ="P3_1_1" name="P3_1_1" value="2"/>
                        <label id="check1" for="radio2">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">21-40%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide3">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">41-60%&nbsp&nbsp</p>  
                        <input type="radio" id="radio3" class ="P3_1_1" name="P3_1_1" value="3"/>
                        <label id="check1" for="radio3">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">41-60%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide3">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">61-80%&nbsp&nbsp</p> 
                        <input type="radio" id="radio4" class ="P3_1_1"  name="P3_1_1" value="4"/>
                        <label id="check1" for="radio4">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">61-80%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide3">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Mayor&nbspdel&nbsp80% </p>  
                        <input type="radio" id="radio5" class ="P3_1_1" name="P3_1_1" value="5"/>
                        <label id="check1" for="radio5">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">Mayor&nbspdel&nbsp80% </span></td>
                </tr> 
                
                <tr>
                    <td class="checkbox"><p class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">De&nbsppié&nbsp&nbsp</p>  
                        <input type="checkbox" id="P3_2" class ="P3_2" name="P3_1_1" value="1"/>
                        <label id="check2" for="P3_2">
                    </td> 
                    <td id="p3_2" class="etiqueta resp1"><span style="color:#4b1a4c;width:7em">De&nbsppié&nbsp&nbsp</span></td>
                </tr> 
                
                <tr class="hide4">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0-20%&nbsp&nbsp</p>  
                        <input type="radio" id="radio6" class ="P3_2_1"  name="P3_1_2" value="1"/>
                        <label id="check1" for="radio6">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">0-20%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide4">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">21-40%&nbsp&nbsp</p>   
                        <input type="radio" id="radio7" class ="P3_2_1" name="P3_1_2" value="2"/>
                        <label id="check1" for="radio7">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">21-40%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide4">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">1-60%&nbsp&nbsp</p>  
                        <input type="radio" id="radio8" class ="P3_2_1" name="P3_1_2" value="3"/>
                        <label id="check1" for="radio8">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">41-60%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide4">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">61-80%&nbsp&nbsp</p> 
                        <input type="radio" id="radio9" class ="P3_2_1" name="P3_1_2" value="4"/>
                        <label id="check1" for="radio9">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">61-80%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide4">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Mayor&nbspdel&nbsp80% </p> 
                        <input type="radio" id="radio10" class ="P3_2_1" name="P3_1_2" value="5"/>
                        <label id="check1" for="radio10">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">Mayor&nbspdel&nbsp80% </span></td>
                </tr> 
                
                <tr>    
                    <td class="checkbox"><p class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">Cunclillas&nbsp&nbsp</p>   
                        <input type="checkbox" id="P3_3" class ="P3_3" name="P3_1_2" value="0"/>
                        <label id="check2" for="P3_3">
                    </td> 
                    <td id="p3_3" class="etiqueta resp1"><span style="color:#4b1a4c;width:7em">Cunclillas&nbsp&nbsp</span></td>
                </tr>    
                
                <tr class="hide5">
                    <div>
                    <td  class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0-20%&nbsp&nbsp</p>  
                        <input type="radio" id="radio11" class ="P3_3_1" name="P3_1_3" value="1"/>
                        <label id="check1" for="radio11">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">0-20%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide5">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">21-40%&nbsp&nbsp</p>  
                        <input type="radio" id="radio12" class ="P3_3_1" name="P3_1_3" value="2"/>
                        <label id="check1" for="radio12">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">21-40%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide5">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">41-60%&nbsp&nbsp</p>  
                        <input type="radio" id="radio13" class ="P3_3_1" name="P3_1_3" value="3"/>
                        <label id="check1" for="radio13">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">41-60%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide5">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">61-80%&nbsp&nbsp</p>  
                        <input type="radio" id="radio14" class ="P3_3_1" name="P3_1_3" value="4"/>
                        <label id="check1" for="radio14">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">61-80%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide5">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Mayor&nbspdel&nbsp80% </p>  
                        <input type="radio" id="radio15" class ="P3_3_1" name="P3_1_3" value="5"/>
                        <label id="check1" for="radio15">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">Mayor&nbspdel&nbsp80% </span></td>
                </tr> 
                
                <tr>
                    <td class="checkbox"><p class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">Dorso&nbspflexionado&nbsp&nbsp</p>   
                        <input type="checkbox" id="P3_4" class ="P3_4" name="P3_1_3" value="0"/>
                        <label id="check2" for="P3_4">
                    </td>
                    <td id="p3_4" class="etiqueta resp1"><span style="color:#4b1a4c;width:7em">Dorso&nbspflexionado&nbsp&nbsp</span></td>
                </tr>  
                
                <tr class="hide6">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0-20%&nbsp&nbsp</p>  
                        <input type="radio" id="radio16" class ="P3_4_1" name="P3_1_4" value="1"/>
                        <label id="check1" for="radio16">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">0-20%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide6">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">21-40%&nbsp&nbsp</p>  
                        <input type="radio" id="radio17" class ="P3_4_1"  name="P3_1_4" value="2"/>
                        <label id="check1" for="radio17">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">21-40%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide6">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">41-60%&nbsp&nbsp</p>  
                        <input type="radio" id="radio18" class ="P3_4_1" name="P3_1_4" value="3"/>
                        <label id="check1" for="radio18">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">41-60%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide6">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">61-80%&nbsp&nbsp</p>  
                        <input type="radio" id="radio19" class ="P3_4_1" name="P3_1_4" value="4"/>
                        <label id="check1" for="radio19">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">61-80%&nbsp&nbsp</span></td>
                </tr> 
                <tr class="hide6">
                    <div>
                    <td  class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Mayor&nbspdel&nbsp80% </p>  
                        <input type="radio" id="radio20" class ="P3_4_1" name="P3_1_4" value="5"/>
                        <label id="check1" for="radio20">
                    </td> 
                    <td class="etiqueta resp1" ><span style="color:#004466!important">Mayor&nbspdel&nbsp80% </span></td>
                </tr> 
                <tr>
                    <td class="checkbox"><p class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">Otra&nbsp&nbsp</p>   
                        <input type="checkbox" id="P3_5" class ="P3_5" name="P3_1_4" value="0"/>
                        <label id="check2" for="P3_5">
                    </td>
                    <td class="etiqueta resp1"><span style="color:#4b1a4c;width:7em">Otra&nbsp&nbsp</span></td>
                </tr>
            </table> 
            <table class="hide7" style="width:100%">
                <tr>
                    <td id="p3_5_1" iclass="resp1" style="color:#004466">¿Cuál?</td> 
                </tr> 
                <tr>
                    <td ><p class="resp2" style="float:left;width:7em;text-align:left;color:#004466">¿Cuál?</p>  <textarea class="note" id="P3_5_1" class ="P3_5_1" style="width:100%" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
            </table>
            <table>
               <tr>  
                    <td class="checkbox"><p  class="resp2" style="float:left;width:11em;text-align:left;color:#4b1a4c">N/A&nbsp&nbsp</p>    
                        <input type="checkbox" id="P3_6" class ="P3_6"/>
                        <label id="check2" for="P3_6">
                    </td> 
                    <td class="etiqueta resp1" style="font-family:elmessiri;font-size:18px;width:5em;color:#4b1a4c">N/A&nbsp&nbsp</td>
                </tr>
            </table><br>
            
            <p id="p4" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">4. ¿Durante la jornada laboral transporta o manipula cargas?</p>
            <table >
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio21" class ="P4" name ="P4" value="1"/>
                        <label id="check2" for="radio21">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio22" class ="P4" name ="P4" value="0"/>
                        <label id="check2" for="radio22">
                    </td> 
                </tr>
            </table>
            
            <table class="hide8" style="margin-top:1em">
                    <tr>
                        <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Menor&nbspde&nbsp12,5&nbspKgs</p>  
                            <input type="radio" id="radio547" class ="P4_1" name ="P4_1" value="1"/>
                            <label id="check1" for="radio547">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466!important">Menor&nbspde&nbsp12,5&nbspKgs</span></td>
                    </tr> 
                    <tr>
                        <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Entre&nbsp12,5&nbspy&nbsp25&nbspKgs</p> 
                            <input type="radio" id="radio548" class ="P4_1" name ="P4_1" value="2"/>
                            <label id="check1" for="radio548">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466!important">Entre&nbsp12,5&nbspy&nbsp25&nbspKgs</span></td>
                    </tr> 
                    <tr>
                        <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Más&nbspde&nbsp25&nbspKgs</p> 
                            <input type="radio" id="radio549" class ="P4_1" name ="P4_1" value="3"/>
                            <label id="check1" for="radio549">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466!important">Más&nbspde&nbsp25&nbspKgs</span></td>
                    </tr> 
            </table><br>
                
            <p id="p5" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">5. ¿En el desarrollo de sus actividades utiliza principalmente la mano?</p>
            <table >
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Derecha&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Derecha&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio23" class ="P5" name ="P5" value="1"/>
                        <label id="check2" for="radio23">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Izquierda&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Izquierda&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio24" class ="P5" name ="P5" value="2"/>
                        <label id="check2" for="radio24">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Ambas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Ambas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio25" class ="P5" name ="P5" value="3"/>
                        <label id="check2" for="radio25">
                    </td> 
                </tr>
            </table><br>
            
            <p id="p6" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">6. Tiene diagnóstico vigente de alguna enfermedad osteomuscular:</p>
            <table>
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>   
                        <input type="radio" id="radio26" class ="P6" name ="P6" value="20"/>
                        <label id="check2" for="radio26">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio27" class ="P6" name ="P6" value="0"/>
                        <label id="check2" for="radio27">
                    </td> 
                </tr>
            </table>

            
            <table class="hide9" style="margin-top:1em">
                <tr>    
                    <td style="color:#004466">Seleccione partes del cuerpo relacionadas con la enfermedad:</td>
                </tr>
            </table>

            <div class="row">
                <div class="col-md-6">
                <table class="hide9" style="margin-top:1em">
                    <tr id="p6_4_1">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Cuello&nbsp&nbsp</p>   
                            <input type="checkbox" id="P6_4_1" class ="P6_4_1"/>
                            <label id="check1" for="P6_4_1" >
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Cuello&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_2">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Hombro&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_2" class ="P6_4_2"/>
                            <label id="check1" for="P6_4_2">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Hombro&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_3">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Codo&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_3" class ="P6_4_3"/>
                            <label id="check1" for="P6_4_3">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Codo&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_4">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Muñeca&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_4" class ="P6_4_4"/>
                            <label id="check1" for="P6_4_4">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Muñeca&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_5">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Espalda&nbspalta(región&nbspdorsal)&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_5" class ="P6_4_5"/>
                            <label id="check1" for="P6_4_5">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espalda&nbspalta(región&nbspdorsal)&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_6">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Espalda&nbspbaja(región&nbsplumbar)&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_6" class ="P6_4_6"/>
                            <label id="check1" for="P6_4_6">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espalda&nbspbaja(región&nbsplumbar)&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_7">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Una&nbspo&nbspambas&nbspcaderas/pierna&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_7" class ="P6_4_7"/>
                            <label id="check1" for="P6_4_7">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Una o ambas caderas/pierna&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_8">
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Una&nbspo&nbspambas&nbsprodillas&nbsp&nbsp</p>  
                            <input type="checkbox" id="P6_4_8" class ="P6_4_8"/>
                            <label id="check1" for="P6_4_8">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Una o ambas rodillas&nbsp&nbsp</span></td>
                    </tr> 
                    <tr id="p6_4_9">
                        <td class="checkbox"> <p class="resp2" style="float:left;width:7em;text-align:left">Uno&nbspo&nbspambos&nbsptobillos/pies&nbsp&nbsp</p> 
                            <input type="checkbox" id="P6_4_9" class ="P6_4_9"/>
                            <label id="check1" for="P6_4_9">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Uno o ambos tobillos/pies&nbsp&nbsp</span></td>
                    </tr> 
                </table>
                </div>
                <div class="col-md-6" >
                    <table style="width:100%!important">
                        <tbody id="diagnostico" style="color:#004466!important"></tbody>
                    </table>
                </div>
                <div class="col-md-12">
                <table class="hide9" style="margin-top:1em">
                <tr>
                    <td id="p6_1" style="color:#004466;color:#004466">¿Cuántos tiempo tiene el diagnóstico?</td> 
                </tr>
                <tr>    
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P6_1" style="color:#742574!important;border:0!important;width:3em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                            <option disabled selected>0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P6_2" style="color:#742574!important;border:0!important;width:3em!important;height:100%;color:#004466" oninput='style.color="#004466"'>
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table><br>
            </div>
            </div>
            
            <p id="p7" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">7. ¿Presenta dolor, molestias o disconfort en alguna parte de su cuerpo en este momento?</p>
            <table>
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio28" class ="P7" name ="P7" value="1"/>
                        <label id="check2" for="radio28">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p> 
                        <input type="radio" id="radio29" class ="P7" name ="P7" value="0"/>
                        <label id="check2" for="radio29">
                    </td> 
                </tr>
            </table><br>
            
            <table class="hide10" style="margin-top:1em">
                <tr>    
                    <td style="color:#004466">Seleccione partes del cuerpo relacionadas con el dolor o molestia:</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-6">
                <table class="hide10" style="margin-top:1em">
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Cuello&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_1" class ="P7_4_1" value="1"/>
                            <label id="check1" for="P7_4_1">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Cuello&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Hombro&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_2" class ="P7_4_2" value="1"/>
                            <label id="check1" for="P7_4_2">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Hombro&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Codo&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_3" class ="P7_4_3" value="1"/>
                            <label id="check1" for="P7_4_3">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Codo&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Muñeca&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_4" class ="P7_4_4" value="1"/>
                            <label id="check1" for="P7_4_4">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Muñeca&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Espalda&nbspalta(región&nbspdorsal)&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_5" class ="P7_4_5" value="1"/>
                            <label id="check1" for="P7_4_5">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espalda alta(región dorsal)&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"> <p class="resp2" style="float:left;width:7em;text-align:left">Espalda&nbspbaja(región&nbsplumbar)&nbsp&nbsp</p>  
                            <input type="checkbox" id="P7_4_6" class ="P7_4_6" value="1"/>
                            <label id="check1" for="P7_4_6">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espalda baja(región lumbar)&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Una&nbspo&nbspambas&nbspcaderas/pierna&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_7" class ="P7_4_7" value="1"/>
                            <label id="check1" for="P7_4_7">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Una o ambas caderas/pierna&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Una&nbspo&nbspambas&nbsprodillas&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_8" class ="P7_4_8" value="1"/>
                            <label id="check1" for="P7_4_8">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Una o ambas rodillas&nbsp&nbsp</span></td>
                    </tr> 
                    <tr>
                        <td class="checkbox"><p class="resp2" style="float:left;width:7em;text-align:left">Uno&nbspo&nbspambos&nbsptobillos/pies&nbsp&nbsp</p>   
                            <input type="checkbox" id="P7_4_9" class ="P7_4_9" value="1"/>
                            <label id="check1" for="P7_4_9">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Uno&nbspo&nbspambos&nbsptobillos/pies&nbsp&nbsp</span></td>
                    </tr> 
                </table>
                </div>
                <div class="col-md-6 hide10">
                    <div id="img1" class="resp3"><img src='https://www.cedisalud.com.co/imagine/muscular20.png' style="width:100%"/></img></div>
                    <div id="img2" class="resp3"><img src='https://www.cedisalud.com.co/imagine/muscular21.png' style="width:100%"/></img></div>
                    <div id="img3" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular24.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img4" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular25.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img5" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular26.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img6" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular27.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img7" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular28.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img8" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular29.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img9" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular30.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img10" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular31.png' class="parpadea" style="width:100%"/></img></div>
                    <div id="img11" class="resp3" style="margin-top:-29em"><img src='https://www.cedisalud.com.co/imagine/muscular32.png' class="parpadea" style="width:100%"/></img></div>
                </div>
            </div>
            
            <p id="p8" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">8. ¿Ha tenido molestias en el cuello?</p>
            <table>
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio30" class ="P8" name ="P8" value="1"/>
                        <label id="check2" for="radio30">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio31" class ="P8" name ="P8" value="0"/>
                        <label id="check2" for="radio31">
                    </td> 
                </tr>
            </table><br>

            <div id="segmento" style="margin-left:2em">
            <p id="p8_1" class="cuello1" style="font-family:MyriadPro;color:#004466">8.1 ¿Desde hace cuánto tiempo?</p>
            <table class="cuello1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P8_1_1" class="P8_1_1" style="color:#742574!important;border:0!important;width:3em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P8_1_2" class="P8_1_2" style="color:#742574!important;border:0!important;width:3em!important;height:100%;color:#004466" oninput='style.color="#004466"' >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            
            <p id="p8_2" class="cuello2" style="font-family:MyriadPro;color:#004466">8.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="cuello2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Si</p>  
                        <input type="radio" id="radio34" class ="P8_2" name ="P8_2" value="1"/>
                        <label id="check1" for="radio34">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">No</p>  
                        <input type="radio" id="radio35" class ="P8_2" name ="P8_2" value="0"/>
                        <label id="check1" for="radio35">
                    </td> 
                </tr>
            </table>
            
            <p id="p8_3" class="cuello3" style="font-family:MyriadPro;color:#004466">8.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="cuello3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Si</p>  
                        <input type="radio" id="radio36" class ="P8_3" name ="P8_3" value="1"/>
                        <label id="check1" for="radio36">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">No</p>   
                        <input type="radio" id="radio37" class ="P8_3" name ="P8_3" value="0"/>
                        <label id="check1" for="radio37">
                    </td> 
                </tr>
            </table>
            <p id="p8_4" class="cuello4" style="font-family:MyriadPro;color:#004466">8.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="cuello4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7&nbspdías&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio38" class ="P8_4" name ="P8_4" value="1"/>
                        <label id="check1" for="radio38">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30&nbspdías&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio39" class ="P8_4" name ="P8_4" value="2"/>
                        <label id="check1" for="radio39">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p>  
                        <input type="radio" id="radio40" class ="P8_4" name ="P8_4" value="3"/>
                        <label id="check1" for="radio40">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p> 
                        <input type="radio" id="radio41" class ="P8_4" name ="P8_4" value="4"/>
                        <label id="check1" for="radio41">
                    </td> 
                </tr>
            </table>
             <p id="p8_5"  class="cuello5" style="font-family:MyriadPro;color:#004466">8.5 ¿Cuánto dura cada episodio?</p>
             <table class="cuello5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p>  
                        <input type="radio" id="radio42" class ="P8_5" name ="P8_5" value="0"/>
                        <label id="check1" for="radio42">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p>  
                        <input type="radio" id="radio43" class ="P8_5" name ="P8_5" value="1"/>
                        <label id="check1" for="radio43">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio44" class ="P8_5" name ="P8_5" value="2"/>
                        <label id="check1" for="radio44">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p>  
                        <input type="radio" id="radio45" class ="P8_5" name ="P8_5" value="3"/>
                        <label id="check1" for="radio45">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>  
                        <input type="radio" id="radio46" class ="P8_5" name ="P8_5" value="4"/>
                        <label id="check1" for="radio46">
                    </td> 
                </tr>
            </table>
            <p id="p8_6" class="cuello6" style="font-family:MyriadPro;color:#004466">8.6 ¿Cuántos días de incapacidad le ha generado esta molestia en los últimos 12 meses?</p>
            <table class="cuello6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio47" class ="P8_6" name ="P8_6" value="0"/>
                        <label id="check1" for="radio47">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">de 1 a 7 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">de&nbsp1&nbspa&nbsp7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio48" class ="P8_6" name ="P8_6" value="1"/>
                        <label id="check1" for="radio48">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">de 8 a 30 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">de&nbsp8&nbspa&nbsp30&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio49" class ="P8_6" name ="P8_6" value="2"/>
                        <label id="check1" for="radio49">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>  
                        <input type="radio" id="radio50" class ="P8_6" name ="P8_6" value="3"/>
                        <label id="check1" for="radio50">
                    </td> 
                </tr>
            </table>
            <p id="p8_7" class="cuello7" style="font-family:MyriadPro;color:#004466">8.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="cuello7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio51" class ="P8_7" name ="P8_7" value="1"/>
                        <label id="check1" for="radio51">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio52" class ="P8_7" name ="P8_7" value="0"/>
                        <label id="check1" for="radio52">
                    </td> 
                </tr>
            </table>
            <p id="p8_8" class="cuello8" style="font-family:MyriadPro;color:#004466">8.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="cuello8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>  
                        <input type="radio" id="radio53" class ="P8_8" name ="P8_8" value="1"/>
                        <label id="check1" for="radio53">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio54" class ="P8_8" name ="P8_8" value="0"/>
                        <label id="check1" for="radio54">
                    </td> 
                </tr>
            </table>
            <p id="p8_9" class="cuello9" style="font-family:MyriadPro;color:#004466">8.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="cuello9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left!important">
                        <select type="text" id="P8_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p8_10" class="cuello10" style="font-family:MyriadPro;color:#004466">8.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="cuello10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left!important"><select type="text" id="P8_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"' oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
          <p id="p9" class="hombros" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">9. ¿Ha tenido molestias en los hombros?</p>
            <table class="hombros">
                <tr>
                    <td class="resp1" class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio55" class ="P9" name ="P9" value="1"/>
                        <label id="check2" for="radio55">
                    </td> 
                    <td class="resp1" class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio56" class ="P9" name ="P9" value="0"/>
                        <label id="check2" for="radio56">
                    </td> 
                </tr>
            </table>

            <div id="segmento" style="margin-left:2em">
            <p id="p9_1" class="hombros1" style="font-family:MyriadPro;color:#004466">9.1 ¿Desde hace cuánto tiempo?</p>
            <table class="hombros1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P9_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P9_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p9_2" class="hombros2" style="font-family:MyriadPro;color:#004466">9.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="hombros2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio57" class ="P9_2" name ="P9_2" value="1"/>
                        <label id="check1" for="radio57">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio58" class ="P9_2" name ="P9_2" value="0"/>
                        <label id="check1" for="radio58">
                    </td> 
                </tr>
            </table>
            <p id="p9_3" class="hombros3" style="font-family:MyriadPro;color:#004466">9.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="hombros3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio59" class ="P9_3" name ="P9_3" value="1"/>
                        <label id="check1" for="radio59">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio60" class ="P9_3" name ="P9_3" value="0"/>
                        <label id="check1" for="radio60">
                    </td> 
                </tr>
            </table>
            <p id="p9_4" class="hombros4" style="font-family:MyriadPro;color:#004466">9.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="hombros4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio61" class ="P9_4" name ="P9_4" value="1"/>
                        <label id="check1" for="radio61">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30&nbspdías&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio62" class ="P9_4" name ="P9_4" value="2"/>
                        <label id="check1" for="radio62">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p>  
                        <input type="radio" id="radio63" class ="P9_4" name ="P9_4" value="3"/>
                        <label id="check1" for="radio63">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>  
                        <input type="radio" id="radio64" class ="P9_4" name ="P9_4" value="4"/>
                        <label id="check1" for="radio64">
                    </td> 
                </tr>
            </table>
             <p id="p9_5" class="hombros5" style="font-family:MyriadPro;color:#004466">9.5 ¿Cuánto dura cada episodio?</p>
             <table class="hombros5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466"><&nbsp1&nbsphora&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p>  
                        <input type="radio" id="radio65" class ="P9_5" name ="P9_5" value="0"/>
                        <label id="check1" for="radio65">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio66" class ="P9_5" name ="P9_5" value="1"/>
                        <label id="check1" for="radio66">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio67" class ="P9_5" name ="P9_5" value="2"/>
                        <label id="check1" for="radio67">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4&nbspsemanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio68" class ="P9_5" name ="P9_5" value="3"/>
                        <label id="check1" for="radio68">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>&nbsp1&nbspmes&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>  
                        <input type="radio" id="radio69" class ="P9_5" name ="P9_5" value="4"/>
                        <label id="check1" for="radio69">
                    </td> 
                </tr>
            </table>
            <p id="p9_6" class="hombros6" style="font-family:MyriadPro;color:#004466">9.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="hombros6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio70" class ="P9_6" name ="P9_6" value="0"/>
                        <label id="check1" for="radio70">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio71" class ="P9_6" name ="P9_6" value="1"/>
                        <label id="check1" for="radio71">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio72" class ="P9_6" name ="P9_6" value="2"/>
                        <label id="check1" for="radio72">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio73" class ="P9_6" name ="P9_6" value="3"/>
                        <label id="check1" for="radio73">
                    </td> 
                </tr>
            </table>
            <p id="p9_7" class="hombros7" style="font-family:MyriadPro;color:#004466">9.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="hombros7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>  
                        <input type="radio" id="radio74" class ="P9_7" name ="P9_7" value="1"/>
                        <label id="check1" for="radio74">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio75" class ="P9_7" name ="P9_7" value="0"/>
                        <label id="check1" for="radio75">
                    </td> 
                </tr>
            </table>
            <p id="p9_8" class="hombros8" style="font-family:MyriadPro;color:#004466">9.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="hombros8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio76" class ="P9_8" name ="P9_8" value="1"/>
                        <label id="check1" for="radio76">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio77" class ="P9_8" name ="P9_8" value="0"/>
                        <label id="check1" for="radio77">
                    </td> 
                </tr>
            </table>
            <p id="p9_9" class="hombros9" style="font-family:MyriadPro;color:#004466">9.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="hombros9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P9_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p9_10" class="hombros10" style="font-family:MyriadPro;color:#004466">9.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="hombros10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"><select type="text" id="P9_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
            <p id="p10" class="codos" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">10. ¿Ha tenido molestias en los codos o antebrazos?</p>
            <table class="codos">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio78" class ="P10" name ="P10" value="1"/>
                        <label id="check2" for="radio78">
                    </td> 
                    <td class="resp1" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">No</p> 
                        <input type="radio" id="radio79" class ="P10" name ="P10" value="0"/>
                        <label id="check2" for="radio79">
                    </td> 
                </tr>
            </table>
            
            <div id="segmento" style="margin-left:2em">
            <p id="p10_1" class="codos1" style="font-family:MyriadPro;color:#004466">10.1 ¿Desde hace cuánto tiempo?</p>
            <table class="codos1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P10_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">9</option>
                            <option value="7" style="color:#000000">9</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P10_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p10_2" class="codos2" style="font-family:MyriadPro;color:#004466">10.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="codos2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio80" class ="P10_2" name ="P10_2" value="1"/>
                        <label id="check1" for="radio80">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <input type="radio" id="radio81" class ="P10_2" name ="P10_2" value="0"/>
                        <label id="check1" for="radio81">
                    </td> 
                </tr>
            </table>
            <p id="p10_3" class="codos3" style="font-family:MyriadPro;color:#004466">10.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="codos3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio82" class ="P10_3" name ="P10_3" value="1"/>
                        <label id="check1" for="radio82">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio83" class ="P10_3" name ="P10_3" value="0"/>
                        <label id="check1" for="radio83">
                    </td> 
                </tr>
            </table>
            <p id="p10_4" class="codos4" style="font-family:MyriadPro;color:#004466">10.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="codos4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio84" class ="P10_4" name ="P10_4" value="1"/>
                        <label id="check1" for="radio84">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio85" class ="P10_4" name ="P10_4" value="2"/>
                        <label id="check1" for="radio85">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p>
                        <input type="radio" id="radio86" class ="P10_4" name ="P10_4" value="3"/>
                        <label id="check1" for="radio86">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>
                        <input type="radio" id="radio87" class ="P10_4" name ="P10_4" value="4"/>
                        <label id="check1" for="radio87">
                    </td> 
                </tr>
            </table>
             <p id="p10_5" class="codos5" style="font-family:MyriadPro;color:#004466">10.5 ¿Cuánto dura cada episodio?</p>
             <table class="codos5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p>
                        <input type="radio" id="radio88" class ="P10_5" name ="P10_5" value="0"/>
                        <label id="check1" for="radio88">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p>
                        <input type="radio" id="radio89" class ="P10_5" name ="P10_5" value="1"/>
                        <label id="check1" for="radio89">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio90" class ="P10_5" name ="P10_5" value="2"/>
                        <label id="check1" for="radio90">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p>
                        <input type="radio" id="radio91" class ="P10_5" name ="P10_5" value="3"/>
                        <label id="check1" for="radio91">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>
                        <input type="radio" id="radio92" class ="P10_5" name ="P10_5" value="4"/>
                        <label id="check1" for="radio92">
                    </td> 
                </tr>
            </table>
            <p id="p10_6" class="codos6" style="font-family:MyriadPro;color:#004466">10.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="codos6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio93" class ="P10_6" name ="P10_6" value="0"/>
                        <label id="check1" for="radio93">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio94" class ="P10_6" name ="P10_6" value="1"/>
                        <label id="check1" for="radio94">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p>
                        <input type="radio" id="radio95" class ="P10_6" name ="P10_6" value="2"/>
                        <label id="check1" for="radio95">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>
                        <input type="radio" id="radio96" class ="P10_6" name ="P10_6" value="3"/>
                        <label id="check1" for="radio96">
                    </td> 
                </tr>
            </table>
            <p id="p10_7" class="codos7" style="font-family:MyriadPro;color:#004466">10.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="codos7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio97" class ="P10_7" name ="P10_7" value="1"/>
                        <label id="check1" for="radio97">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio98" class ="P10_7" name ="P10_7" value="0"/>
                        <label id="check1" for="radio98">
                    </td> 
                </tr>
            </table>
            <p id="p10_8" class="codos8" style="font-family:MyriadPro;color:#004466">10.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="codos8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>
                        <input type="radio" id="radio99" class ="P10_8" name ="P10_8" value="1"/>
                        <label id="check1" for="radio99">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>
                        <input type="radio" id="radio100" class ="P10_8" name ="P10_8" value="0"/>
                        <label id="check1" for="radio100">
                    </td> 
                </tr>
            </table>
            <p id="p10_9" class="codos9" style="font-family:MyriadPro;color:#004466">10.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="codos9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P10_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p10_10" class="codos10" style="font-family:MyriadPro;color:#004466">10.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="codos10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"> <select type="text" id="P10_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
            <p id="p11" class="manos" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">11. ¿Ha tenido molestias en las muñecas o en las manos?</p>
            <table class="manos">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>  
                        <input type="radio" id="radio101" class ="P11" name ="P11" value="1"/>
                        <label id="check2" for="radio101">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio102" class ="P11" name ="P11" value="0"/>
                        <label id="check2" for="radio102">
                    </td> 
                </tr>
            </table>
            
            <div id="segmento" style="margin-left:2em">
            <p id="p11_1" class="manos1" style="font-family:MyriadPro;color:#004466">11.1 ¿Desde hace cuánto tiempo?</p>
            <table class="manos1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P11_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P11_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p11_2" class="manos2" style="font-family:MyriadPro;color:#004466">11.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="manos2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio103" class ="P11_2" name ="P11_2" value="1"/>
                        <label id="check1" for="radio103">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio104" class ="P11_2" name ="P11_2" value="0"/>
                        <label id="check1" for="radio104">
                    </td> 
                </tr>
            </table>
            <p id="p11_3" class="manos3" style="font-family:MyriadPro;color:#004466">11.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="manos3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio105" class ="P11_3" name ="P11_3" value="1"/>
                        <label id="check1" for="radio105">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio106" class ="P11_3" name ="P11_3" value="0"/>
                        <label id="check1" for="radio106">
                    </td> 
                </tr>
            </table>
            <p id="p11_4" class="manos4" style="font-family:MyriadPro;color:#004466">11.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="manos4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio107" class ="P11_4" name ="P11_4" value="1"/>
                        <label id="check1" for="radio107">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio108" class ="P11_4" name ="P11_4" value="2"/>
                        <label id="check1" for="radio108">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p>
                        <input type="radio" id="radio109" class ="P11_4" name ="P11_4" value="3"/>
                        <label id="check1" for="radio109">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>
                        <input type="radio" id="radio110" class ="P11_4" name ="P11_4" value="4"/>
                        <label id="check1" for="radio110">
                    </td> 
                </tr>
            </table>
             <p id="p11_5" class="manos5" style="font-family:MyriadPro;color:#004466">11.5 ¿Cuánto dura cada episodio?</p>
             <table class="manos5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p>
                        <input type="radio" id="radio110_" class ="P11_5" name ="P11_5" value="0"/>
                        <label id="check1" for="radio110_">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio111" class ="P11_5" name ="P11_5" value="1"/>
                        <label id="check1" for="radio111">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio112" class ="P11_5" name ="P11_5" value="2"/>
                        <label id="check1" for="radio112">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p>
                        <input type="radio" id="radio113" class ="P11_5" name ="P11_5" value="3"/>
                        <label id="check1" for="radio113">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>
                        <input type="radio" id="radio114" class ="P11_5" name ="P11_5" value="4"/>
                        <label id="check1" for="radio114">
                    </td> 
                </tr>
            </table>
            <p id="p11_6" class="manos6" style="font-family:MyriadPro;color:#004466">11.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="manos6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio115" class ="P11_6" name ="P11_6" value="0"/>
                        <label id="check1" for="radio115">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio116" class ="P11_6" name ="P11_6" value="1"/>
                        <label id="check1" for="radio116">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p>
                        <input type="radio" id="radio117" class ="P11_6" name ="P11_6" value="2"/>
                        <label id="check1" for="radio117">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">> &nbsp1 &nbspmes&nbsp&nbsp</p>
                        <input type="radio" id="radio118" class ="P11_6" name ="P11_6" value="3"/>
                        <label id="check1" for="radio118">
                    </td> 
                </tr>
            </table>
            <p id="p11_7" class="manos7" style="font-family:MyriadPro;color:#004466">11.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="manos7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>
                        <input type="radio" id="radio119" class ="P11_7" name ="P11_7" value="1"/>
                        <label id="check1" for="radio119">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>
                        <input type="radio" id="radio120" class ="P11_7" name ="P11_7" value="0"/>
                        <label id="check1" for="radio120">
                    </td> 
                </tr>
            </table>
            <p id="p11_8" class="manos8" style="font-family:MyriadPro;color:#004466">11.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="manos8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>
                        <input type="radio" id="radio121" class ="P11_8" name ="P11_8" value="1"/>
                        <label id="check1" for="radio121">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>
                        <input type="radio" id="radio122" class ="P11_8" name ="P11_8" value="0"/>
                        <label id="check1" for="radio122">
                    </td> 
                </tr>
            </table>
            <p id="p11_9" class="manos9" style="font-family:MyriadPro;color:#004466">11.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="manos9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P11_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p11_10" class="manos10" style="font-family:MyriadPro;color:#004466">11.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="manos10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"><select type="text" id="P11_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
            <p id="p12" class="dorsal" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">12. ¿Ha tenido molestias en la espalda alta (dorsal)?</p>
            <table class="dorsal">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>   
                        <input type="radio" id="radio123" class ="P12" name ="P12" value="1"/>
                        <label id="check2" for="radio123">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio124" class ="P12" name ="P12" value="0"/>
                        <label id="check2" for="radio124">
                    </td> 
                </tr>
            </table>
            
            <div id="segmento" style="margin-left:2em">
            <p id="p12_1" class="dorsal1" style="font-family:MyriadPro;color:#004466">12.1 ¿Desde hace cuánto tiempo?</p>
            <table class="dorsal1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P12_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P12_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p12_2" class="dorsal2" style="font-family:MyriadPro;color:#004466">12.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="dorsal2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>   
                        <input type="radio" id="radio125" class ="P12_2" name ="P12_2" value="1"/>
                        <label id="check1" for="radio125">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio126" class ="P12_2" name ="P12_2" value="0"/>
                        <label id="check1" for="radio126">
                    </td> 
                </tr>
            </table>
            <p id="p12_3" class="dorsal3" style="font-family:MyriadPro;color:#004466">12.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="dorsal3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio127" class ="P12_3" name ="P12_3" value="1"/>
                        <label id="check1" for="radio127">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio128" class ="P12_3" name ="P12_3" value="0"/>
                        <label id="check1" for="radio128">
                    </td> 
                </tr>
            </table>
            <p id="p12_4" class="dorsal4" style="font-family:MyriadPro;color:#004466">12.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="dorsal4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio129" class ="P12_4" name ="P12_4" value="1"/>
                        <label id="check1" for="radio129">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio130" class ="P12_4" name ="P12_4" value="2"/>
                        <label id="check1" for="radio130">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p>  
                        <input type="radio" id="radio131" class ="P12_4" name ="P12_4" value="3"/>
                        <label id="check1" for="radio131">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>  
                        <input type="radio" id="radio132" class ="P12_4" name ="P12_4" value="4"/>
                        <label id="check1" for="radio132">
                    </td> 
                </tr>
            </table>
             <p id="p12_5" class="dorsal5" style="font-family:MyriadPro;color:#004466">12.5 ¿Cuánto dura cada episodio?</p>
             <table class="dorsal5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p>  
                        <input type="radio" id="radio133" class ="P12_5" name ="P12_5" value="0"/>
                        <label id="check1" for="radio133">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p>  
                        <input type="radio" id="radio134" class ="P12_5" name ="P12_5" value="1"/>
                        <label id="check1" for="radio134">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio135" class ="P12_5" name ="P12_5" value="2"/>
                        <label id="check1" for="radio135">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p>  
                        <input type="radio" id="radio136" class ="P12_5" name ="P12_5" value="3"/>
                        <label id="check1" for="radio136">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio137" class ="P12_5" name ="P12_5" value="4"/>
                        <label id="check1" for="radio137">
                    </td> 
                </tr>
            </table>
            <p id="p12_6" class="dorsal6" style="font-family:MyriadPro;color:#004466">12.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="dorsal6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio138" class ="P12_6" name ="P12_6" value="1"/>
                        <label id="check1" for="radio138">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio139" class ="P12_6" name ="P12_6" value="2"/>
                        <label id="check1" for="radio139">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio140" class ="P12_6" name ="P12_6" value="3"/>
                        <label id="check1" for="radio140">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>  
                        <input type="radio" id="radio141" class ="P12_6" name ="P12_6" value="4"/>
                        <label id="check1" for="radio141">
                    </td> 
                </tr>
            </table>
            <p id="p12_7" class="dorsal7" style="font-family:MyriadPro;color:#004466">12.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="dorsal7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio142" class ="P12_7" name ="P12_7" value="1"/>
                        <label id="check1" for="radio142">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio143" class ="P12_7" name ="P12_7" value="0"/>
                        <label id="check1" for="radio143">
                    </td> 
                </tr>
            </table>
            <p id="p12_8" class="dorsal8" style="font-family:MyriadPro;color:#004466">12.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="dorsal8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>  
                        <input type="radio" id="radio144" class ="P12_8" name ="P12_8" value="1"/>
                        <label id="check1" for="radio144">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio145" class ="P12_8" name ="P12_8" value="0"/>
                        <label id="check1" for="radio145">
                    </td> 
                </tr>
            </table>
            <p id="p12_9" class="dorsal9" style="font-family:MyriadPro;color:#004466">12.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="dorsal9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P12_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p12_10" class="dorsal10" style="font-family:MyriadPro;color:#004466">12.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="dorsal10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"> <select type="text" id="P12_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
            <p id="p13" class="lumbar" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">13. ¿Ha tenido molestias en la espalda baja (lumbar)?</p>
            <table class="lumbar">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>    
                        <input type="radio" id="radio146" class ="P13" name ="P13" value="1"/>
                        <label id="check2" for="radio146">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio147" class ="P13" name ="P13" value="0"/>
                        <label id="check2" for="radio147">
                    </td> 
                </tr>
            </table>

            <div id="segmento"  style="margin-left:2em">
            <p id="p13_1" class="lumbar1" style="font-family:MyriadPro;color:#004466">13.1 ¿Desde hace cuánto tiempo?</p>
            <table class="lumbar1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P13_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P13_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p13_2" class="lumbar2" style="font-family:MyriadPro;color:#004466">13.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="lumbar2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio148" class ="P13_2" name ="P13_2" value="1"/>
                        <label id="check1" for="radio148">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio149" class ="P13_2" name ="P13_2" value="0"/>
                        <label id="check1" for="radio149">
                    </td> 
                </tr>
            </table>
            <p id="p13_3" class="lumbar3" style="font-family:MyriadPro;color:#004466">13.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="lumbar3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio150" class ="P13_3" name ="P13_3" value="1"/>
                        <label id="check1" for="radio150">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio151" class ="P13_3" name ="P13_3" value="0"/>
                        <label id="check1" for="radio151">
                    </td> 
                </tr>
            </table>
            <p id="p13_4" class="lumbar4" style="font-family:MyriadPro;color:#004466">13.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="lumbar4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio152" class ="P13_4" name ="P13_4" value="1"/>
                        <label id="check1" for="radio152">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio153" class ="P13_4" name ="P13_4" value="2"/>
                        <label id="check1" for="radio153">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p> 
                        <input type="radio" id="radio154" class ="P13_4" name ="P13_4" value="3"/>
                        <label id="check1" for="radio154">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p> 
                        <input type="radio" id="radio155" class ="P13_4" name ="P13_4" value="4"/>
                        <label id="check1" for="radio155">
                    </td> 
                </tr>
            </table>
             <p id="p13_5" class="lumbar5" style="font-family:MyriadPro;color:#004466">13.5 ¿Cuánto dura cada episodio?</p>
             <table class="lumbar5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p> 
                        <input type="radio" id="radio156" class ="P13_5" name ="P13_5" value="0"/>
                        <label id="check1" for="radio156">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio157" class ="P13_5" name ="P13_5" value="1"/>
                        <label id="check1" for="radio157">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio158" class ="P13_5" name ="P13_5" value="2"/>
                        <label id="check1" for="radio158">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio159" class ="P13_5" name ="P13_5" value="3"/>
                        <label id="check1" for="radio159">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio160" class ="P13_5" name ="P13_5" value="4"/>
                        <label id="check1" for="radio160">
                    </td> 
                </tr>
            </table>
            <p id="p13_6" class="lumbar6" style="font-family:MyriadPro;color:#004466">13.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="lumbar6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio161" class ="P13_6" name ="P13_6" value="1"/>
                        <label id="check1" for="radio161">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio162" class ="P13_6" name ="P13_6" value="2"/>
                        <label id="check1" for="radio162">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio163" class ="P13_6" name ="P13_6" value="3"/>
                        <label id="check1" for="radio163">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio164" class ="P13_6" name ="P13_6" value="4"/>
                        <label id="check1" for="radio164">
                    </td> 
                </tr>
            </table>
            <p id="p13_7" class="lumbar7" style="font-family:MyriadPro;color:#004466">13.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="lumbar7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio165" class ="P13_7" name ="P13_7" value="1"/>
                        <label id="check1" for="radio165">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio166" class ="P13_7" name ="P13_7" value="0"/>
                        <label id="check1" for="radio166">
                    </td> 
                </tr>
            </table>
            <p id="p13_8" class="lumbar8" style="font-family:MyriadPro;color:#004466">13.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="lumbar8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio167" class ="P13_8" name ="P13_8" value="1"/>
                        <label id="check1" for="radio167">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio168" class ="P13_8" name ="P13_8" value="0"/>
                        <label id="check1" for="radio168">
                    </td> 
                </tr>
            </table>
            <p id="p13_9" class="lumbar9" style="font-family:MyriadPro;color:#004466">13.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="lumbar9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P13_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p13_10" class="lumbar10" style="font-family:MyriadPro;color:#004466">13.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="lumbar10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"> <select type="text" id="P13_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
           
            <p id="p14" class="piernas" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">14. ¿Ha tenido molestias en una o ambas caderas/pierna?</p>
            <table class="piernas">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">Si</p> 
                        <input type="radio" id="radio169" class ="P14" name ="P14" value="1"/>
                        <label id="check2" for="radio169">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p>  
                        <input type="radio" id="radio170" class ="P14" name ="P14" value="0"/>
                        <label id="check2" for="radio170">
                    </td> 
                </tr>
            </table>

            <div id="segmento" style="margin-left:2em">
            <p id="p14_1" class="piernas1" style="font-family:MyriadPro;color:#004466">14.1 ¿Desde hace cuánto tiempo?</p>
            <table class="piernas1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P14_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P14_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p14_2" class="piernas2" style="font-family:MyriadPro;color:#004466">14.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="piernas2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio171" class ="P14_2" name ="P14_2" value="1"/>
                        <label id="check1" for="radio171">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio172" class ="P14_2" name ="P14_2" value="0"/>
                        <label id="check1" for="radio172">
                    </td> 
                </tr>
            </table>
            <p id="p14_3" class="piernas3" style="font-family:MyriadPro;color:#004466">14.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="piernas3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio173" class ="P14_3" name ="P14_3" value="1"/>
                        <label id="check1" for="radio173">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                        <input type="radio" id="radio174" class ="P14_3" name ="P14_3" value="0"/>
                        <label id="check1" for="radio174">
                    </td> 
                </tr>
            </table>
            <p id="p14_4" class="piernas4" style="font-family:MyriadPro;color:#004466">14.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="piernas4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio175" class ="P14_4" name ="P14_4" value="1"/>
                        <label id="check1" for="radio175">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio176" class ="P14_4" name ="P14_4" value="2"/>
                        <label id="check1" for="radio176">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p> 
                        <input type="radio" id="radio177" class ="P14_4" name ="P14_4" value="3"/>
                        <label id="check1" for="radio177">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>
                        <input type="radio" id="radio178" class ="P14_4" name ="P14_4" value="4"/>
                        <label id="check1" for="radio178">
                    </td> 
                </tr>
            </table>
             <p id="p14_5" class="piernas5" style="font-family:MyriadPro;color:#004466">14.5 ¿Cuánto dura cada episodio?</p>
             <table class="piernas5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p> 
                        <input type="radio" id="radio179" class ="P14_5" name ="P14_5" value="0"/>
                        <label id="check1" for="radio179">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio180" class ="P14_5" name ="P14_5" value="1"/>
                        <label id="check1" for="radio180">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio181" class ="P14_5" name ="P14_5" value="2"/>
                        <label id="check1" for="radio181">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio182" class ="P14_5" name ="P14_5" value="3"/>
                        <label id="check1" for="radio182">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio183" class ="P14_5" name ="P14_5" value="4"/>
                        <label id="check1" for="radio183">
                    </td> 
                </tr>
            </table>
            <p id="p14_6" class="piernas6" style="font-family:MyriadPro;color:#004466">14.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="piernas6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p>
                        <input type="radio" id="radio184" class ="P14_6" name ="P14_6" value="0"/>
                        <label id="check1" for="radio184">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio185" class ="P14_6" name ="P14_6" value="1"/>
                        <label id="check1" for="radio185">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p>
                        <input type="radio" id="radio186" class ="P14_6" name ="P14_6" value="2"/>
                        <label id="check1" for="radio186">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp<</p>
                        <input type="radio" id="radio187" class ="P14_6" name ="P14_6" value="3"/>
                        <label id="check1" for="radio187">
                    </td> 
                </tr>
            </table>
            <p id="p14_7" class="piernas7" style="font-family:MyriadPro;color:#004466">14.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="piernas7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio188" class ="P14_7" name ="P14_7" value="1"/>
                        <label id="check1" for="radio188">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>
                        <input type="radio" id="radio189" class ="P14_7" name ="P14_7" value="0"/>
                        <label id="check1" for="radio189">
                    </td> 
                </tr>
            </table>
            <p id="p14_8" class="piernas8" style="font-family:MyriadPro;color:#004466">14.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="piernas8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio190" class ="P14_8" name ="P14_8" value="1"/>
                        <label id="check1" for="radio190">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio191" class ="P14_8" name ="P14_8" value="0"/>
                        <label id="check1" for="radio191">
                    </td> 
                </tr>
            </table>
            <p id="p14_9" class="piernas9" style="font-family:MyriadPro;color:#004466">14.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="piernas9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P14_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p14_10" class="piernas10" style="font-family:MyriadPro;color:#004466">14.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="piernas10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"><select type="text" id="P14_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            
            <p id="p15" class="rodillas" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">15. ¿Ha tenido molestias en una o ambas rodillas?</p>
            <table class="rodillas">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">Si</p>   
                        <input type="radio" id="radio192" class ="P15" name ="P15" value="1"/>
                        <label id="check2" for="radio192">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:11em;text-align:left">No</p> 
                        <input type="radio" id="radio193" class ="P15" name ="P15" value="0"/>
                        <label id="check2" for="radio193">
                    </td> 
                </tr>
            </table>

            <div id="segmento" style="margin-left:2em">
            <p id="p15_1" class="rodillas1" style="font-family:MyriadPro;color:#004466">15.1 ¿Desde hace cuánto tiempo?</p>
            <table class="rodillas1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P15_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P15_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p15_2" class="rodillas2" style="font-family:MyriadPro;color:#004466">15.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="rodillas2" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Si</p> 
                        <input type="radio" id="radio194" class ="P15_2" name ="P15_2" value="1"/>
                        <label id="check1" for="radio194">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No</p> 
                        <input type="radio" id="radio195" class ="P15_2" name ="P15_2" value="0"/>
                        <label id="check1" for="radio195">
                    </td> 
                </tr>
            </table>
            <p id="p15_3" class="rodillas3" style="font-family:MyriadPro;color:#004466">15.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="rodillas3" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Si</p> 
                        <input type="radio" id="radio196" class ="P15_3" name ="P15_3" value="1"/>
                        <label id="check1" for="radio196">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No</p>  
                        <input type="radio" id="radio197" class ="P15_3" name ="P15_3" value="0"/>
                        <label id="check1" for="radio197">
                    </td> 
                </tr>
            </table>
            <p id="p15_4" class="rodillas4" style="font-family:MyriadPro;color:#004466">15.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="rodillas4" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1-7 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio198" class ="P15_4" name ="P15_4" value="1"/>
                        <label id="check1" for="radio198">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">8‐30 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio199" class ="P15_4" name ="P15_4" value="2"/>
                        <label id="check1" for="radio199">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p> 
                        <input type="radio" id="radio200" class ="P15_4" name ="P15_4" value="3"/>
                        <label id="check1" for="radio200">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p>  
                        <input type="radio" id="radio201" class ="P15_4" name ="P15_4" value="4"/>
                        <label id="check1" for="radio201">
                    </td> 
                </tr>
            </table>
             <p id="p15_5" class="rodillas5" style="font-family:MyriadPro;color:#004466">15.5 ¿Cuánto dura cada episodio?</p>
             <table class="rodillas5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p> 
                        <input type="radio" id="radio202" class ="P15_5" name ="P15_5" value="0"/>
                        <label id="check1" for="radio202">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio203" class ="P15_5" name ="P15_5" value="1"/>
                        <label id="check1" for="radio203">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio204" class ="P15_5" name ="P15_5" value="2"/>
                        <label id="check1" for="radio204">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">4 semanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio205" class ="P15_5" name ="P15_5" value="3"/>
                        <label id="check1" for="radio205">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio206" class ="P15_5" name ="P15_5" value="4"/>
                        <label id="check1" for="radio206">
                    </td> 
                </tr>
            </table>
            <p id="p15_6" class="rodillas6" style="font-family:MyriadPro;color:#004466">15.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="rodillas6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio207" class ="P15_6" name ="P15_6" value="0"/>
                        <label id="check1" for="radio207">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio208" class ="P15_6" name ="P15_6" value="1"/>
                        <label id="check1" for="radio208">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio209" class ="P15_6" name ="P15_6" value="2"/>
                        <label id="check1" for="radio209">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio210" class ="P15_6" name ="P15_6" value="3"/>
                        <label id="check1" for="radio210">
                    </td> 
                </tr>
            </table>
            <p id="p15_7" class="rodillas7" style="font-family:MyriadPro;color:#004466">15.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="rodillas7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio211" class ="P15_7" name ="P15_7" value="1"/>
                        <label id="check1" for="radio211">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>  
                        <input type="radio" id="radio212" class ="P15_7" name ="P15_7" value="0"/>
                        <label id="check1" for="radio212">
                    </td> 
                </tr>
            </table>
            <p id="p15_8" class="rodillas8" style="font-family:MyriadPro;color:#004466">15.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="rodillas8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>  
                        <input type="radio" id="radio213" class ="P15_8" name ="P15_8" value="1"/>
                        <label id="check1" for="radio213">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio214" class ="P15_8" name ="P15_8" value="0"/>
                        <label id="check1" for="radio214">
                    </td> 
                </tr>
            </table>
            <p id="p15_9" class="rodillas9" style="font-family:MyriadPro;color:#004466">15.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="rodillas9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P15_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p15_10" class="rodillas10" style="font-family:MyriadPro;color:#004466">15.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="rodillas10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"><select type="text" id="P15_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>

            <p id="p16" class="pies" style="font-family:MyriadProb;background:#f9ecf9;padding:1em">16. ¿Ha tenido molestias en uno o ambos tobillos o pies?</p>
            <table class="pies">
                <tr>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">Si</p>   
                        <input type="radio" id="radio2015" class ="P16" name ="P16" value="1"/>
                        <label id="check2" for="radio2015">
                    </td> 
                    <td class="resp1" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1" style="font-family:elmessiri;font-size:18px;color:#4b1a4c">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:11em;text-align:left">No</p> 
                        <input type="radio" id="radio216" class ="P16" name ="P16" value="0"/>
                        <label id="check2" for="radio216">
                    </td> 
                </tr>
            </table>

            <div id="segmento" style="margin-left:2em">
            <p id="p16_1" class="pies1" style="font-family:MyriadPro;color:#004466">16.1 ¿Desde hace cuánto tiempo?</p>
            <table class="pies1" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left">
                        <span style="font-family:MyriadPro;color:#004466">Años: </span><select type="text" id="P16_1_1" style="border:0!important;width:3em!important;2em;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                            <option value="13" style="color:#000000">13</option>
                            <option value="14" style="color:#000000">14</option>
                            <option value="15" style="color:#000000">15</option>
                            <option value="16" style="color:#000000">16</option>
                            <option value="17" style="color:#000000">17</option>
                            <option value="18" style="color:#000000">18</option>         
                            <option value="19" style="color:#000000">19</option>
                            <option value="20" style="color:#000000">20</option>
                            <option value="21" style="color:#000000">21</option>
                            <option value="22" style="color:#000000">22</option>
                            <option value="23" style="color:#000000">23</option>
                            <option value="24" style="color:#000000">24</option>
                            <option value="25" style="color:#000000">25</option>
                            <option value="26" style="color:#000000">26</option>
                            <option value="27" style="color:#000000">27</option>
                            <option value="28" style="color:#000000">28</option>
                            <option value="29" style="color:#000000">29</option>
                            <option value="30" style="color:#000000">30</option>
                        </select>
                        <span style="font-family:MyriadPro;color:#004466">Meses: </span><select type="text" id="P16_1_2" style="border:0!important;width:3em!important;height:100%;color:#004466" >
                            <option disabled selected></option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                            <option value="6" style="color:#000000">6</option>
                            <option value="7" style="color:#000000">7</option>
                            <option value="8" style="color:#000000">8</option>
                            <option value="9" style="color:#000000">9</option>
                            <option value="10" style="color:#000000">10</option>
                            <option value="11" style="color:#000000">11</option>
                            <option value="12" style="color:#000000">12</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p16_2" class="pies2" style="font-family:MyriadPro;color:#004466">16.2 ¿Ha necesitado cambiar de puesto de trabajo?</p>
            <table class="pies2" style="margin-bottom:1em">
                <tr>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>  
                        <input type="radio" id="radio217" class ="P16_2" name ="P16_2" value="1"/>
                        <label id="check1" for="radio217">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio2018" class ="P16_2" name ="P16_2" value="0"/>
                        <label id="check1" for="radio2018">
                    </td> 
                </tr>
            </table>
            <p id="p16_3" class="pies3" style="font-family:MyriadPro;color:#004466">16.3 ¿Ha tenido molestias en los últimos 12 meses?</p>
            <table class="pies3" style="margin-bottom:1em">
                <tr>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio">  <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio219" class ="P16_3" name ="P16_3" value="1"/>
                        <label id="check1" for="radio219">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p> 
                        <input type="radio" id="radio220" class ="P16_3" name ="P16_3" value="0"/>
                        <label id="check1" for="radio220">
                    </td> 
                </tr>
            </table>
            <p id="p16_4" class="pies4" style="font-family:MyriadPro;color:#004466">16.4 ¿Cuánto tiempo ha tenido molestias en los últimos 12 meses?</p>
             <table class="pies4" style="margin-bottom:1em">
                <tr>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1-7&nbspdías&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">1-7&nbspdías&nbsp&nbsp</p>  
                        <input type="radio" id="radio221" class ="P16_4" name ="P16_4" value="1"/>
                        <label id="check1" for="radio221">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">8‐30&nbspdías&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">8‐30&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio222" class ="P16_4" name ="P16_4" value="2"/>
                        <label id="check1" for="radio222">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">>30 días, no seguidos&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">>30&nbspdías,&nbspno&nbspseguidos&nbsp&nbsp</p> 
                        <input type="radio" id="radio223" class ="P16_4" name ="P16_4" value="3"/>
                        <label id="check1" for="radio223">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td  class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Siempre&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">Siempre&nbsp&nbsp</p> 
                        <input type="radio" id="radio224" class ="P16_4" name ="P16_4" value="4"/>
                        <label id="check1" for="radio224">
                    </td> 
                </tr>
            </table>

            
             <p id="p16_5" class="pies5" style="font-family:MyriadPro;color:#004466">16.5 ¿Cuánto dura cada episodio?</p>
             <table class="pies5" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">< 1 hora&nbsp&nbsp</td>
                    <td class="radio">  <p class="resp2" style="float:left;width:7em;text-align:left"><&nbsp1&nbsphora&nbsp&nbsp</p> 
                        <input type="radio" id="radio225" class ="P16_5" name ="P16_5" value="0"/>
                        <label id="check1" for="radio225">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 24 horas&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp24&nbsphoras&nbsp&nbsp</p> 
                        <input type="radio" id="radio226" class ="P16_5" name ="P16_5" value="1"/>
                        <label id="check1" for="radio226">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio227" class ="P16_5" name ="P16_5" value="2"/>
                        <label id="check1" for="radio227">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">4 semanas&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio228" class ="P16_5" name ="P16_5" value="3"/>
                        <label id="check1" for="radio228">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" >  <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p> 
                        <input type="radio" id="radio229" class ="P16_5" name ="P16_5" value="4"/>
                        <label id="check1" for="radio229">
                    </td> 
                </tr>
            </table>
            <p id="p16_6" class="pies6" style="font-family:MyriadPro;color:#004466">16.6 ¿Cuánto tiempo estas molestias le han impedido hacer su trabajo en los últimos 12 meses?</p>
            <table class="pies6" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">0 días&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">0&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio230" class ="P16_6" name ="P16_6" value="0"/>
                        <label id="check1" for="radio230">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 15 días&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp15&nbspdías&nbsp&nbsp</p> 
                        <input type="radio" id="radio231" class ="P16_6" name ="P16_6" value="1"/>
                        <label id="check1" for="radio231">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">1 a 4 semanas&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">1&nbspa&nbsp4&nbspsemanas&nbsp&nbsp</p> 
                        <input type="radio" id="radio232" class ="P16_6" name ="P16_6" value="2"/>
                        <label id="check1" for="radio232">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">> 1 mes&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">>&nbsp1&nbspmes&nbsp&nbsp</p>
                        <input type="radio" id="radio233" class ="P16_6" name ="P16_6" value="3"/>
                        <label id="check1" for="radio233">
                    </td> 
                </tr>
            </table>
            <p id="p16_7" class="pies7" style="font-family:MyriadPro;color:#004466">16.7 ¿Ha recibido tratamiento por estas molestias en los últimos 12 meses?</p>
            <table class="pies7" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"><p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p> 
                        <input type="radio" id="radio234" class ="P16_7" name ="P16_7" value="1"/>
                        <label id="check1" for="radio234">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" ><p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p> 
                        <input type="radio" id="radio235" class ="P16_7" name ="P16_7" value="0"/>
                        <label id="check1" for="radio235">
                    </td> 
                </tr>
            </table>
            <p id="p16_8" class="pies8" style="font-family:MyriadPro;color:#004466">16.8 ¿Ha tenido molestias en los últimos 7 días?</p>
            <table class="pies8" style="margin-bottom:1em">
                <tr>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">Sí&nbsp&nbsp</td>
                    <td class="radio"> <p class="resp2" style="float:left;width:7em;text-align:left">Sí&nbsp&nbsp</p>
                        <input type="radio" id="radio236" class ="P16_8" name ="P16_8" value="1"/>
                        <label id="check1" for="radio236">
                    </td> 
                    <td class="resp1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td class="resp1"style="font-family:elmessiri;font-size:18px;color:#004466">No&nbsp&nbsp</td>
                    <td class="radio" > <p class="resp2" style="float:left;width:7em;text-align:left">No&nbsp&nbsp</p>
                        <input type="radio" id="radio237" class ="P16_8" name ="P16_8" value="0"/>
                        <label id="check1" for="radio237">
                    </td> 
                </tr>
            </table>
            <p id="p16_9" class="pies9" style="font-family:MyriadPro;color:#004466">16.9 ¿Seleccione en la siguiente escala, la intensidad actual de dolor o molestia ("0" - no tener molestia; "5" - dolor intolerable):</p>
            <table class="pies9" style="margin-bottom:1em">
                <tr>
                    <td style="font-family:elmessiri;font-size:18px;color:#004466;text-align:left">
                        <select type="text" id="P16_9" style="color:#742574!important;border:0!important;width:7em!important;height:100%" oninput='style.color="#004466"'>
                            <option disabled selected>Seleccione...</option> 
                            <option value="0" style="color:#000000">0</option> 
                            <option value="1" style="color:#000000">1</option>         
                            <option value="2" style="color:#000000">2</option>
                            <option value="3" style="color:#000000">3</option>
                            <option value="4" style="color:#000000">4</option>
                            <option value="5" style="color:#000000">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <p id="p16_10" class="pies10" style="font-family:MyriadPro;color:#004466">16.10 ¿Cuando presenta los síntomas o molestias con mayor frecuencia?</p>
            <table class="pies10" style="width:100%;margin-bottom:1em">
                <tr>
                    <td style="text-align:left"><select type="text" id="P16_10" style="color:#742574!important;border:0!important;width:14em!important;2em;height:100%;color:#004466" oninput='style.color="#004466"'>
                        <option disabled selected>Seleccione...</option> 
                        <option style="color:#000000" value="4">Al finalizar mi trabajo</option>         
                        <option style="color:#000000" value="3">Al finalizar el día</option>
                        <option style="color:#000000" value="1">Al final de la semana laboral</option>
                        <option style="color:#000000" value="0">En otro momento</option>
                    </select>
                    </td>
                </tr>
            </table>
        </div>
        <p><button id="boton" type="submit" name="enviar" style="width:6em!important;float:right">Enviar</button><br><br><br></p>

        </form>

</div>
 <div id="costumModal_final" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Muchas gracias por su colaboración</p>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
 <div id="Modal_6_4_1" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center" style="padding:1em">
                <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con el cuello</p><br>
                <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastorno de disco cervical con radiculopatia</td>
                        <td class="checkbox" style="float:right;width:13em!important">
                            <input type="checkbox" id="M500" class ="M500" name ="M500"/>
                            <label id="check1" for="M500">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastorno de disco cervical con radiculopatia</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastorno de disco cervical con radiculopatia</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M501" class ="M501" name ="M501"/>
                            <label id="check1" for="M501">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastorno de disco cervical con radiculopatia</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros desplazamientos del disco cervical</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M502" class ="M502" name ="M502"/>
                            <label id="check1" for="M502">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros desplazamientos del disco cervical</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras degeneraciones del disco cervical</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M503" class ="M503" name ="M503"/>
                            <label id="check1" for="M503">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras degeneraciones del disco cervical</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros trastornos del disco cervical</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M508" class ="M508" name ="M508"/>
                            <label id="check1" for="M508">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros trastornos del disco cervical</td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastorno de disco cervical, no especificado</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M509" class ="M509" name ="M509"/>
                            <label id="check1" for="M509">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastorno de disco cervical, no especificado</td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Cervicalgia</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M542" class ="M542" name ="M542"/>
                            <label id="check1" for="M542">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Cervicalgia</span></td>
                    </tr> 
                </table>    
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
 <div id="Modal_6_4_2" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
                <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con los hombros</p>
                <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Capsulitis adhesiva del hombro</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M750" class ="M750" name ="M750"/>
                            <label id="check1" for="M750">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Capsulitis adhesiva del hombro</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Síndrome de manguito rotatorio</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M751" class ="M751" name ="M751"/>
                            <label id="check1" for="M751">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Síndrome de manguito rotatorio</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis de biceps</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M752" class ="M752" name ="M752"/>
                            <label id="check1" for="M752">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis de biceps</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis calcificante del hombro</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M753" class ="M753" name ="M753"/>
                            <label id="check1" for="M753">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis calcificante del hombro</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Síndrome de abducción dolorosa del hombro</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M754" class ="M754" name ="M754"/>
                            <label id="check1" for="M754">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Síndrome de abducción dolorosa del hombro</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Bursitis del hombro</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M755" class ="M755" name ="M755"/>
                            <label id="check1" for="M755">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Bursitis del hombro</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras lesiones del hombro</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M758" class ="M758" name ="M758"/>
                            <label id="check1" for="M758">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras lesiones del hombro</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Lesiones del hombro, no especificada</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M759" class ="M759" name ="M759"/>
                            <label id="check1" for="M759">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Lesiones del hombro, no especificada</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
 <div id="Modal_6_4_3" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con los codos</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras sinovitis y tenosinovitis</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M658" class ="M658" name ="M658"/>
                            <label id="check1" for="M658">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras sinovitis y tenosinovitis</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Síndrome de manguito rotatorio</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M702" class ="M702" name ="M702"/>
                            <label id="check1" for="M702">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Síndrome de manguito rotatorio</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras bursitis del codo</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M703" class ="M703" name ="M703"/>
                            <label id="check1" for="M703">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras bursitis del codo</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Epicondilitis media</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M770" class ="M770" name ="M770"/>
                            <label id="check1" for="M770">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Epicondilitis media</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Epicondilitis lateral</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M771" class ="M771" name ="M771"/>
                            <label id="check1" for="M771">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Epicondilitis lateral</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
 <div id="Modal_6_4_4" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con las muñeca/mano</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Sindrome del tunel carpiano</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="G560" class ="G560" name ="G560"/>
                            <label id="check1" for="G560">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Sindrome del tunel carpiano</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Senosinovitis de estiloides radial [de quervain]</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M654" class ="M654" name ="M654"/>
                            <label id="check1" for="M654">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Senosinovitis de estiloides radial [de quervain]</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Sinovitis y tenosinovitis, no especificada</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M659" class ="M659" name ="M659"/>
                            <label id="check1" for="M659">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Sinovitis y tenosinovitis, no especificada</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Ganglion</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M674" class ="M674" name ="M674"/>
                            <label id="check1" for="M674">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Ganglion</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros trastornos especificados de la sinovia y del tendon</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M678" class ="M678" name ="M678"/>
                            <label id="check1" for="M678">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros trastornos especificados de la sinovia y del tendon</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Bursitis de la mano</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M701" class ="M701" name ="M701"/>
                            <label id="check1" for="M701">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Bursitis de la mano</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_6_4_5" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con la espalda alta (región dorsal)</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros desplazamientos especificados de disco intervertebral</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M512" class ="M512" name ="M512"/>
                            <label id="check1" for="M512">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros desplazamientos especificados de disco intervertebral</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros trastornos especificados de los discos intervertebrales</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M518" class ="M518" name ="M518"/>
                            <label id="check1" for="M518">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros trastornos especificados de los discos intervertebrales</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastornos de los discos intervertebrales, no especificado</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M519" class ="M519" name ="M519"/>
                            <label id="check1" for="M519">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastornos de los discos intervertebrales, no especificado</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras dorsopatias especificadas</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M538" class ="M538" name ="5384"/>
                            <label id="check1" for="M538">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras dorsopatias especificadas</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Dorsopatia, no especificada</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M539" class ="M539" name ="M539"/>
                            <label id="check1" for="M539">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Dorsopatia, no especificada</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Radiculopatia</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M541" class ="M541" name ="M541"/>
                            <label id="check1" for="M541">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Radiculopatia</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_6_4_6" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con las espalda baja (región lumbar)</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastornos de discos intervertebrales lumbares y otros, con mielopatia (g99.2*)</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M510" class ="M510" name ="M510"/>
                            <label id="check1" for="M510">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastornos de discos intervertebrales lumbares y otros, con mielopatia (g99.2*)</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Trastorno de disco lumbar y otros, con radiculopatia</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M511" class ="M511" name ="M511"/>
                            <label id="check1" for="M511">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Trastorno de disco lumbar y otros, con radiculopatia</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Ciatica</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M543" class ="M543" name ="M543"/>
                            <label id="check1" for="M543">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Ciatica</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Lumbago con ciatica</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M544" class ="M544" name ="5344"/>
                            <label id="check1" for="M544">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Lumbago con ciatica</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Lumbago no especificado</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M545" class ="M545" name ="M545"/>
                            <label id="check1" for="M545">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Lumbago no especificado</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Dolor en la columna dorsal</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M546" class ="M546" name ="M546"/>
                            <label id="check1" for="M546">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Dolor en la columna dorsal</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras dorsalgias</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M548" class ="M548" name ="M548"/>
                            <label id="check1" for="M548">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras dorsalgias</span></td>
                    </tr>
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Dorsalgia, no especificada</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M549" class ="M549" name ="M549"/>
                            <label id="check1" for="M549">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Dorsalgia, no especificada</span></td>
                    </tr>
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_6_4_7" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con una o ambas caderas/pierna</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Bursitis del trocanter</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M706" class ="M706" name ="M706"/>
                            <label id="check1" for="M706">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Bursitis del trocanter</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras bursitis de la cadera</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M707" class ="M707" name ="M707"/>
                            <label id="check1" for="M707">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras bursitis de la cadera</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otros trastornos de los tejidos blandos relacionados con el uso, el uso excesivo y la presión</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M708" class ="M708" name ="M708"/>
                            <label id="check1" for="M708">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otros trastornos de los tejidos blandos relacionados con el uso, el uso excesivo y la presión</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis del gluteo</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M760" class ="M760" name ="5760"/>
                            <label id="check1" for="M760">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis del gluteo</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis del psoas</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M761" class ="M761" name ="M761"/>
                            <label id="check1" for="M761">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis del psoas</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Espolón de la cresta ilíaca</td>
                        <td class="checkbox"  style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M762" class ="M762" name ="M762"/>
                            <label id="check1" for="M762">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espolón de la cresta ilíaca</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Síndrome del tendon del tensor de la fascia lata</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M763" class ="M763" name ="M763"/>
                            <label id="check1" for="M763">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Síndrome del tendon del tensor de la fascia lata</span></td>
                    </tr>
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Bursitis tibial colateral [pellegrini-stieda]</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M764" class ="M764" name ="M764"/>
                            <label id="check1" for="M764">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Bursitis tibial colateral [pellegrini-stieda]</span></td>
                    </tr>
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">tendinitis aquiliana</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M766" class ="M766" name ="M766"/>
                            <label id="check1" for="M766">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">tendinitis aquiliana</span></td>
                    </tr>
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis peroneal</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M767" class ="M767" name ="M767"/>
                            <label id="check1" for="M767">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis peroneal</span></td>
                    </tr>
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_6_4_8" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con una o ambas rodillas</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras bursitis prerrotulianas</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M704" class ="M704" name ="M704"/>
                            <label id="check1" for="M704">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras bursitis prerrotulianas</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras bursitis de la rodilla</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M705" class ="M705" name ="M705"/>
                            <label id="check1" for="M705">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras bursitis de la rodilla</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Tendinitis rotuliana</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M765" class ="M765" name ="M765"/>
                            <label id="check1" for="M765">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Tendinitis rotuliana</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_6_4_9" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center">
               <p style="font-size:18px;font-family:verdanab">Diagnóstico relacionados con uno o ambos tobillos o pies</p>
               <table style="margin-top:1em;width:100%">
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras entesopatias del miembro inferior, excluido el pie</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M768" class ="M768" name ="M768"/>
                            <label id="check1" for="M768">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras entesopatias del miembro inferior, excluido el pie</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Entesopatia del miembro inferior, no especificada</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M769" class ="M769" name ="M769"/>
                            <label id="check1" for="M769">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Entesopatia del miembro inferior, no especificada</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Espolon calcaneo</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M773" class ="M773" name ="M773"/>
                            <label id="check1" for="M773">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Espolon calcaneo</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Metatarsalgia</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M774" class ="M774" name ="M774"/>
                            <label id="check1" for="M774">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Metatarsalgia</span></td>
                    </tr> 
                    <tr>
                        <td class="resp2" style="color:#004466;text-align:left!important">Otras entesopatias del pie</td>
                        <td class="checkbox" style="float:right;width:13em!important"> 
                            <input type="checkbox" id="M775" class ="M775" name ="M775"/>
                            <label id="check1" for="M775">
                        </td> 
                        <td class="etiqueta resp1"><span style="color:#004466">Otras entesopatias del pie</span></td>
                    </tr> 
                </table>   
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
<div id="Modal_7" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header" style="z-index:9999!important">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center" style="z-index:0!important">
                <p id="img_2"><img src='https://www.cedisalud.com.co/imagine/muscular21.png' style="width:100%"/></img></p>
                <p id="img_3" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular24.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_4" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular25.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_5" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular26.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_6" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular27.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_7" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular28.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_8" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular29.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_9" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular30.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_10" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular31.png' class="parpadea" style="width:100%"/></img></p>
                <p id="img_11" style="margin-top:-19em"><img src='https://www.cedisalud.com.co/imagine/muscular32.png' class="parpadea" style="width:100%"/></img></p>
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

            </div>
            <div class="modal-body" style="font-size:13px;text-align:left;padding:1em;line-height: 2.8rem">
                <div>
                    <p style="text-align:left;font-family:narrow;font-size:20px;letter-spacing:2px">Cordial saludo:</p><br>
                    <p style="font-family:verdana;font-size:14px">Para <?php echo $Empresa ?> es importante su bienestar laboral. Por tal motivo, le solicitamos unos minutos de su tiempo para que diligencie el siguiente cuestionario de síntomas osteomusculares estandarizado para detección y análisis de síntomas músculo esqueléticos, aplicable en el contexto de seguridad y salud en el trabajo.   Esta herramienta nos permitirá conocer a través de un auto reporte los síntomas que se puedan estar presentando, así lograremos realizar medidas de prevención para la aparición o complicaciones de los desórdenes musculoesqueléticos.</p><br>
                    <div>
             
                            <table id="botones" style="border-color:#ffffff;width:100%;background:#fafecd;padding:1em;font-family:verdanab;font-size:14px" class="radio">
                                <tr > 
                                    <td>Declaro que he sido informado(a) y he comprendido satisfactoriamente la naturaleza y propósito de esta encuesta. Por lo anterior, doy mi consentimiento para que la información de la misma sea utilizada para los análisis requeridos dentro del Programa de Vigilancia Epidemiológica en riesgo Biomecánico y  osteomuscular de <?php echo $Empresa ?>.</td> 
                                </tr>
                            </table><br>
                           <div class="row">
                        		<div class="col-md-12" id="area" style="text-align:center">
                        		    <p style="color:#000000;font-family:verdanab;font-size:14px">Escriba su firma usando toda el rectángulo</p>
                        		 	<canvas id="draw-canvas"></canvas>
                        		 </div>
                        	</div>
                        	<div class="row"><br>
                        		<div class="col-md-12" style="text-align:center">
                        			<input type="button" id="draw-clearBtn" style="font-size:14px;width:150px;height:35px" value="Borrar firma"></input>
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
                            <table align="center">
                                <tr>
                                    <td><button class="boton" id="draw-submitBtn" type="submit"  style="font-size:14px;width:150px;height:35px">Continuar</button></td>
                                </tr>
                            </table>
                             <table align="center">
                                <tr>
                                    <td><button class="boton" id="draw-submitBtn2" type="button" style="font-size:14px;width:150px;height:35px">Salir</button></td>
                                </tr>
                            </table>
                    
                    </div>
                </div><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div> 
<div class="container col-md-12"><br>
        <footer class="container" style="margin-bottom:2em">
            <div class="col-lg-6" align="center">
                <div style="margin:-1em;vertical-align: middle"><a href="https://www.cedisalud.com"><img id="logo_v" src="../imagine/logo_v.png" width="120"></div></p>
            </div>
            <div class="col-lg-6" style="vertical-align: middle;text-align:center">
                <p style="font-family:Narrow;font-size:20px;letter-spacing:1px;vertical-align: middle;"><a id="certificado" title="Certificado SSL" href="#costumModal12" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="70" height="68"/></a></p>
                <p style="font-family:Narrow;font-size:20px;letter-spacing:1px;vertical-align: middle;"><span  style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;text-decoration: none!important">Certificado </span><span style="color:#e7744f">SSL &nbsp</span></p>
            </div>
            <div class="col-lg-12" align="center">
                <p style="font-family:verdana;font-size:16px;color:#333333">Copyright © 2020  por <a href="https://www.cedisalud.com" style="letter-spacing:2px;font-size:14px" target="_blank">CEDISALUD IPS</a></p>
                <p style="font-family:verdana;font-size:16px;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="https://www.perfilar.net" style="letter-spacing:2px;font-size:14px" target="_blank">PERFILAR</a></p><br>
            </div>
        </footer>
</div> 
<div id="Modal_item" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header" style="z-index:9999!important">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center" style="z-index:0!important">
                <p>Por favor, complete todos los campos</p>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts2.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts-more.js"></script>
<script src="<?php echo RUTA_JS ?>zlib.js"></script>
<script src="<?php echo RUTA_JS ?>png.js"></script>
<script src="<?php echo RUTA_JS ?>addimage.js"></script>
<script src="<?php echo RUTA_JS ?>filesaver.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.min.js"></script>
<script src="<?php echo RUTA_JS ?>base64.js"></script>
<script src="<?php echo RUTA_JS ?>autotable.js"></script>
<script src="<?php echo RUTA_JS ?>default_vfs.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.customfonts.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="<?php echo RUTA_JS ?>exporting.js"></script>
<script src="<?php echo RUTA_JS ?>canvas.js"></script>
<script src="<?php echo RUTA_JS ?>rgbcolor.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script>
    //autosize(document.getElementsByClassName("note"));
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");"shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function () {
        //$("#costumModal").modal("show")
        $( ".hide1" ).slideUp(1);
        $( ".hide2" ).slideUp(1);
        $( ".hide3" ).slideUp(1);
        $( ".hide4" ).slideUp(1);
        $( ".hide5" ).slideUp(1);
        $( ".hide6" ).slideUp(1);
        $( ".hide7" ).slideUp(1);
        $( ".hide8" ).slideUp(1);
        $( ".hide9" ).slideUp(1);
        $( ".hide10" ).slideUp(1);
        $( ".hide11" ).slideUp(1);
        $( ".hide12" ).slideUp(1);
        $( ".cuello1" ).slideUp(1);
        $( ".cuello2" ).slideUp(1);
        $( ".cuello3" ).slideUp(1);
        $( ".cuello4" ).slideUp(1);
        $( ".cuello5" ).slideUp(1);
        $( ".cuello6" ).slideUp(1);
        $( ".cuello7" ).slideUp(1);
        $( ".cuello8" ).slideUp(1);
        $( ".cuello9" ).slideUp(1);
        $( ".cuello10" ).slideUp(1);
        $( ".hombros" ).slideUp(1);
        $( ".hombros1" ).slideUp(1);
        $( ".hombros2" ).slideUp(1);
        $( ".hombros3" ).slideUp(1);
        $( ".hombros4" ).slideUp(1);
        $( ".hombros5" ).slideUp(1);
        $( ".hombros6" ).slideUp(1);
        $( ".hombros7" ).slideUp(1);
        $( ".hombros8" ).slideUp(1);
        $( ".hombros9" ).slideUp(1);
        $( ".hombros10" ).slideUp(1);
        $( ".dorsal" ).slideUp(1);
        $( ".dorsal1" ).slideUp(1);
        $( ".dorsal2" ).slideUp(1);
        $( ".dorsal3" ).slideUp(1);
        $( ".dorsal4" ).slideUp(1);
        $( ".dorsal5" ).slideUp(1);
        $( ".dorsal6" ).slideUp(1);
        $( ".dorsal7" ).slideUp(1);
        $( ".dorsal8" ).slideUp(1);
        $( ".dorsal9" ).slideUp(1);
        $( ".dorsal10" ).slideUp(1);
        $( ".lumbar" ).slideUp(1);
        $( ".lumbar1" ).slideUp(1);
        $( ".lumbar2" ).slideUp(1);
        $( ".lumbar3" ).slideUp(1);
        $( ".lumbar4" ).slideUp(1);
        $( ".lumbar5" ).slideUp(1);
        $( ".lumbar6" ).slideUp(1);
        $( ".lumbar7" ).slideUp(1);
        $( ".lumbar8" ).slideUp(1);
        $( ".lumbar9" ).slideUp(1);
        $( ".lumbar10" ).slideUp(1);
        $( ".codos" ).slideUp(1);
        $( ".codos1" ).slideUp(1);
        $( ".codos2" ).slideUp(1);
        $( ".codos3" ).slideUp(1);
        $( ".codos4" ).slideUp(1);
        $( ".codos5" ).slideUp(1);
        $( ".codos6" ).slideUp(1);
        $( ".codos7" ).slideUp(1);
        $( ".codos8" ).slideUp(1);
        $( ".codos9" ).slideUp(1);
        $( ".codos10" ).slideUp(1);
        $( ".manos" ).slideUp(1);
        $( ".manos1" ).slideUp(1);
        $( ".manos2" ).slideUp(1);
        $( ".manos3" ).slideUp(1);
        $( ".manos4" ).slideUp(1);
        $( ".manos5" ).slideUp(1);
        $( ".manos6" ).slideUp(1);
        $( ".manos7" ).slideUp(1);
        $( ".manos8" ).slideUp(1);
        $( ".manos9" ).slideUp(1);
        $( ".manos10" ).slideUp(1);
        $( ".piernas" ).slideUp(1);
        $( ".piernas1" ).slideUp(1);
        $( ".piernas2" ).slideUp(1);
        $( ".piernas3" ).slideUp(1);
        $( ".piernas4" ).slideUp(1);
        $( ".piernas5" ).slideUp(1);
        $( ".piernas6" ).slideUp(1);
        $( ".piernas7" ).slideUp(1);
        $( ".piernas8" ).slideUp(1);
        $( ".piernas9" ).slideUp(1);
        $( ".piernas10" ).slideUp(1);
        $( ".rodillas" ).slideUp(1);
        $( ".rodillas1" ).slideUp(1);
        $( ".rodillas2" ).slideUp(1);
        $( ".rodillas3" ).slideUp(1);
        $( ".rodillas4" ).slideUp(1);
        $( ".rodillas5" ).slideUp(1);
        $( ".rodillas6" ).slideUp(1);
        $( ".rodillas7" ).slideUp(1);
        $( ".rodillas8" ).slideUp(1);
        $( ".rodillas9" ).slideUp(1);
        $( ".rodillas10" ).slideUp(1);
        $( ".pies" ).slideUp(1);
        $( ".pies1" ).slideUp(1);
        $( ".pies2" ).slideUp(1);
        $( ".pies3" ).slideUp(1);
        $( ".pies4" ).slideUp(1);
        $( ".pies5" ).slideUp(1);
        $( ".pies6" ).slideUp(1);
        $( ".pies7" ).slideUp(1);
        $( ".pies8" ).slideUp(1);
        $( ".pies9" ).slideUp(1);
        $( ".pies10" ).slideUp(1);
       // $( "#img1" ).slideUp(1);
        $( "#img2" ).slideUp(1);
        $( "#img3" ).slideUp(1);
        $( "#img4" ).slideUp(1);
        $( "#img5" ).slideUp(1);
        $( "#img6" ).slideUp(1);
        $( "#img7" ).slideUp(1);
        $( "#img8" ).slideUp(1);
        $( "#img9" ).slideUp(1);
        $( "#img10" ).slideUp(1);
        $( "#img11" ).slideUp(1);
        
        $( "#img_3" ).slideUp(1);
        $( "#img_4" ).slideUp(1);
        $( "#img_5" ).slideUp(1);
        $( "#img_6" ).slideUp(1);
        $( "#img_7" ).slideUp(1);
        $( "#img_8" ).slideUp(1);
        $( "#img_9" ).slideUp(1);
        $( "#img_10" ).slideUp(1);
        $( "#img_11" ).slideUp(1);
        function Radio_Value(ctrl) {
            for(i=0;i<ctrl.length;i++)
            if(ctrl[i].checked) return ctrl[i].value;
        }
        $('#Nombre').on('change', function() {
            var Nombre = $('#Nombre').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Nombre=" + Nombre,
                success: function (response) {
                },   
            });
        })
        $('#Cedula').on('change', function() {
            var Cedula = $('#Cedula').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Cedula=" + Cedula,
                success: function (response) {
                },   
            });
        })
        $('#Edad').on('change', function() {
            var Edad = $('#Edad').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('edad').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Edad=" + Edad,
                success: function (response) {
                },   
            });
        })
        $('#Empresa').on('change', function() {
            var Empresa = $('#Empresa').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Empresa=" + Empresa,
                success: function (response) {
                },   
            });
        })
        $('#Sede').on('change', function() {
            var Sede = $('#Sede').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Sede=" + Sede,
                success: function (response) {
                },   
            });
        })
        $('#Antiguedad_a').on('change', function() {
            var Antiguedad_a = $('#Antiguedad_a').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('antiguedad_a').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Antiguedad_a=" + Antiguedad_a,
                success: function (response) {
                },   
            });
        })
        $('#Antiguedad_m').on('change', function() {
            var Antiguedad_m = $('#Antiguedad_m').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Antiguedad_m=" + Antiguedad_m,
                success: function (response) {
                },   
            });
        })
         $('#Cargo').on('change', function() {
            var Cargo = $('#Cargo').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Cargo=" + Cargo,
                success: function (response) {
                },   
            });
        })
        $('#Antiguedad2_a').on('change', function() {
            var Antiguedad2_a = $('#Antiguedad2_a').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('antiguedad2_a').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Antiguedad2_a=" + Antiguedad2_a,
                success: function (response) {
                },   
            });
        })
        $('#Antiguedad2_m').on('change', function() {
            var Antiguedad2_m = $('#Antiguedad2_m').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Antiguedad2_m=" + Antiguedad2_m,
                success: function (response) {
                },   
            });
        })
        $('#Horas').on('change', function() {
            var Horas = $('#Horas').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('horas').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Horas=" + Horas,
                success: function (response) {
                },   
            });
        })
        $('#Dominancia').on('change', function() {
            var Dominancia = $('#Dominancia').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('dominancia').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "Codigo=" + Codigo + "&Dominancia=" + Dominancia,
                success: function (response) {
                },   
            });
        })
        $('.P1').on('click', function() {
            var P1_ = Radio_Value(document.getElementsByClassName('P1'));
            if(P1_ >= 1){
                P1 = P1_; 
                $( ".hide1" ).slideDown(1);
            } else {
                P1 = "0"; 
                $( ".hide1" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P1=" + P1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P1_1').on('change', function() {
            var P1_1 = $('#P1_1').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p1_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P1_1=" + P1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                    
                },   
            });
        });
        $('#P1_2').on('change', function() {
            var P1_2 = $('#P1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p1_2').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P1_2=" + P1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P1_3').on('change', function() {
            var P1_3 = $('#P1_3').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p1_3').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P1_3=" + P1_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P2').on('change', function() {
            var P2_ = Radio_Value(document.getElementsByClassName('P2'));
            if(P2_ >= 1){
                P2 = P2_; 
                $( ".hide2" ).slideDown(1);
            } else {
                P2 = "0"; 
                $( ".hide2" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p2').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P2=" + P2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P2_1').on('keyup', function() {
            var P2_1 = $('#P2_1').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p2_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P2_1=" + P2_1 + "&Codigo=" + Codigo,
                success: function (response) {
                    
                },   
            });
        });
        $('.P2_2').on('click', function() {
            var P2_2 = Radio_Value(document.getElementsByClassName('P2_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p2_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P2_2=" + P2_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P2_3').on('click', function() {
            var P2_3 = Radio_Value(document.getElementsByClassName('P2_3'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p2_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P2_3=" + P2_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('#P3_1').on('click', function() {
            var checkbox = document.getElementById("P3_1");
            if(checkbox.checked){
                P3_1 = 1;
                $( ".hide3" ).slideDown(1);
            } else {
                P3_1 = 0;
                $( ".hide3" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_1=" + P3_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P3_1_1').on('click', function() {
            var P3_1_1 = Radio_Value(document.getElementsByClassName('P3_1_1'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_1_1=" + P3_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P3_2').on('click', function() {
            var checkbox = document.getElementById("P3_2");
            if(checkbox.checked){
                P3_2 = 1;
                $( ".hide4" ).slideDown(1);
            } else {
                P3_2 = 0;
                $( ".hide4" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_2=" + P3_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P3_2_1').on('click', function() {
            var P3_2_1 = Radio_Value(document.getElementsByClassName('P3_2_1'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_2_1=" + P3_2_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P3_3').on('click', function() {
            var checkbox = document.getElementById("P3_3");
            if(checkbox.checked){
                P3_3 = 1;
                $( ".hide5" ).slideDown(1);
            } else {
                P3_3 = 0;
                $( ".hide5" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_3=" + P3_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P3_3_1').on('click', function() {
            var P3_3_1 = Radio_Value(document.getElementsByClassName('P3_3_1'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_3_1=" + P3_3_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P3_4').on('click', function() {
            var checkbox = document.getElementById("P3_4");
            if(checkbox.checked){
                P3_4 = 1;
                $( ".hide6" ).slideDown(1);
            } else {
                P3_4 = 0;
                $( ".hide6" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_4=" + P3_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P3_4_1').on('click', function() {
            var P3_4_1 = Radio_Value(document.getElementsByClassName('P3_4_1'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_4_1=" + P3_4_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P3_5').on('click', function() {
            var checkbox = document.getElementById("P3_5");
            if(checkbox.checked){
                P3_5 = 1;
                $( ".hide7" ).slideDown(1);
            } else {
                P3_5 = 0;
                $( ".hide7" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_5').style.backgroundColor='#ccffdd';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_5=" + P3_5 + "&Codigo=" + Codigo,
                success: function (response) {
                    
                },   
            });
        });
        $('#P3_5_1').on('keyup', function() {
            var P3_5_1 = $('#P3_5_1').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3_5_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_5_1=" + P3_5_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P3_6').on('click', function() {
            var checkbox = document.getElementById("P3_6");
            if(checkbox.checked){
                P3_6 = 1;
            } else {
                P3_6 = 0;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p3').style.backgroundColor='#ccffdd';
            document.getElementById('p3_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P3_6=" + P3_6 + "&Codigo=" + Codigo,
                success: function (response) {
                    
                },   
            });
        });
        
        $('.P4').on('click', function() {
            var P4_ = Radio_Value(document.getElementsByClassName('P4'));
            if(P4_ >= 1){
                P4 = P4_; 
                $( ".hide8" ).slideDown(1);
            } else {
                P4 = "0"; 
                $( ".hide8" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P4=" + P4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
         $('.P4_1').on('click', function() {
            var P4_1 = Radio_Value(document.getElementsByClassName('P4_1'));
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P4_1=" + P4_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P4_2').on('click', function() {
            var P4_2 = $('#P4_2').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P4_2=" + P4_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P4_3').on('click', function() {
            var P4_3 = $('#P4_3').val();
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P4_3=" + P4_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        /*$('.P4_1').on('click', function() {
            var P4_1= Radio_Value(document.getElementsByClassName('P4_1'));
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P4_1=" + P4_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });*/
        $('.P5').on('click', function() {
            var P5 = Radio_Value(document.getElementsByClassName('P5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P5=" + P5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P6').on('click', function() {
            var P6_ = Radio_Value(document.getElementsByClassName('P6'));
             if(P6_ == 20){
                $( ".hide9" ).slideDown(1);
            } else {
                $( ".hide9" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6=" + P6_ + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
       
        $('#P6_4_1').on('click', function() {
           var checkbox = document.getElementById("P6_4_1");
           if(checkbox.checked){
                P6_4_1 = 1;
                $("#Modal_6_4_1").modal("show")
            } else {
                P6_4_1 = 0;
         
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_1=" + P6_4_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_2').on('click', function() {
           var checkbox = document.getElementById("P6_4_2");
           if(checkbox.checked){
                P6_4_2 = 1;
                $("#Modal_6_4_2").modal("show")
            } else {
                P6_4_2 = 0;
          
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_2=" + P6_4_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_3').on('click', function() {
           var checkbox = document.getElementById("P6_4_3");
           if(checkbox.checked){
                P6_4_3 = 1;
                $("#Modal_6_4_3").modal("show")
            } else {
                P6_4_3 = 0;
              
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_3=" + P6_4_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_4').on('click', function() {
           var checkbox = document.getElementById("P6_4_4");
           if(checkbox.checked){
                P6_4_4 = 1;
                $("#Modal_6_4_4").modal("show")
            } else {
                P6_4_4 = 0;
            
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_4=" + P6_4_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_5').on('click', function() {
           var checkbox = document.getElementById("P6_4_5");
           if(checkbox.checked){
                P6_4_5 = 1;
                $("#Modal_6_4_5").modal("show")
            } else {
                P6_4_4 = 0;
 
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_5=" + P6_4_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_6').on('click', function() {
           var checkbox = document.getElementById("P6_4_6");
           if(checkbox.checked){
                P6_4_6 = 1;
                $("#Modal_6_4_6").modal("show")
            } else {
                P6_4_4 = 0;
     
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_6=" + P6_4_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_7').on('click', function() {
           var checkbox = document.getElementById("P6_4_7");
           if(checkbox.checked){
                P6_4_7 = 1;
                $("#Modal_6_4_7").modal("show")
            } else {
                P6_4_7 = 0;
    
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_7=" + P6_4_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_8').on('click', function() {
           var checkbox = document.getElementById("P6_4_8");
           if(checkbox.checked){
                P6_4_8 = 1;
                $("#Modal_6_4_8").modal("show")
            } else {
                P6_4_8 = 0;

            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_8=" + P6_4_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_4_9').on('click', function() {
           var checkbox = document.getElementById("P6_4_9");
           if(checkbox.checked){
                P6_4_9 = 1;
                $("#Modal_6_4_9").modal("show")
            } else {
                P6_4_9 = 0;
             
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_4_9=" + P6_4_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#M500').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastorno de disco cervical con mielopatia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M501').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastorno de disco cervical con radiculopatia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M502').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros desplazamientos del disco cervical' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M503').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras degeneraciones del disco cervical' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M508').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros trastornos del disco cervical' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M509').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastorno de disco cervical, no especificado' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M542').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_1').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Cervicalgia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M750').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Capsulitis adhesiva del hombro' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M751').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Síndrome de manguito rotatorio' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M752').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis de biceps' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M753').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis calcificante del hombro' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M754').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Síndrome de abduccion dolorosa del hombro' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M755').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Bursitis del hombro' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M758').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras lesiones del hombro' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M759').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Lesiones del hombro, no especificada' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M658').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras sinovitis y tenosinovitis' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M702').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Bursitis del olecranon' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M703').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras bursitis del codo' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M770').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Epicondilitis media' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M771').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Epicondilitis lateral' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#G560').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
             document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'SÍndrome del tunel carpiano' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M654').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tenosinovitis de estiloides radial [de quervain]' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M659').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Sinovitis y tenosinovitis, no especificada' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M674').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Ganglion' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M678').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros trastornos especificados de la sinovia y del tendon' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M701').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_4').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Bursitis de la mano' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M512').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros desplazamientos especificados de disco intervertebral' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M518').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros trastornos especificados de los discos intervertebrales' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M519').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastornos de los discos intervertebrales, no especificado' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M538').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras dorsopatias especificadas' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M539').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Dorsopatia, no especificada' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M541').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_5').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Radiculopatia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M510').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastornos de discos intervertebrales lumbares y otros, con mielopatia (g99.2*)' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M511').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Trastorno de disco lumbar y otros, con radiculopatia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M543').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Ciatica' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M544').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Lumbago con ciatica' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M545').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Lumbago no especificado' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M546').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Dolor en la columna dorsal' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M548').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras dorsalgias' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M549').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_6').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Dorsalgia, no especificada' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M706').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Bursitis del trocanter' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M707').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otras bursitis de la cadera' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M708').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Otros trastornos de los tejidos blandos relacionados con el uso, el uso excesivo y la presión' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M760').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis del gluteo' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M761').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis del psoas' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M762').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Espolón de la cresta ilíaca' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M763').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Síndrome del tendón del tensor de la fascia lata' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M764').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Bursitis tibial colateral [pellegrini-stieda]' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M766').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis aquiliana' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M767').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_7').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'Tendinitis peroneal' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M704').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_8').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'otras bursitis prerrotulianas' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
         $('#M705').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_8').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'otras bursitis de la rodilla' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
         $('#M765').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_8').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'tendinitis rotuliana' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M768').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'otras entesopatias del miembro inferior, excluido el pie' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M769').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'entesopatia del miembro inferior, no especificada' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M773').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'espolon calcaneo' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M774').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'metatarsalgia' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        $('#M775').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_4_9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "check=" + 'otras entesopatias del pie' + "&Codigo=" + Codigo,
                success: function (response) {
                    fetchTasks4()
                },   
            });
        });
        
        
         $(document).on('click', '.task-delete', (e) => {
            e.preventDefault();
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr('taskId');
            $.ajax({
                type: "post",
                url: "../eliminarbdg.php",
                data: "id_osteo=" + id,
                success: function(response) {
                    fetchTasks4();
                   
                }
            });
        }); 
        function fetchTasks4() {
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../osteo_diagnostico.php",
                data: "Codigo=" + Codigo,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `
                            <tr taskId="${task.id}">
                                <td>${task.Diagnostico}</td>
                                <td id="borderout"><button class="task-delete" data-title="Eliminar" style="background:transparent;border:0;font-size:22px"><span class="fa fa-trash"></span></button></td>
                            </tr>   `
                    });
                    $('#diagnostico').html(template);
                }
            });
        }
        $('#P6_1').on('change', function() {
            var P6_1 = $('#P6_1').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p6_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_1=" + P6_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P6_2').on('change', function() {
            var P6_2 = $('#P6_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P6_2=" + P6_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P7').on('click', function() {
            var P7_ = Radio_Value(document.getElementsByClassName('P7'));
            if(P7_ == 1){
                $( ".hide10" ).slideDown(1);
                var P7 = 6;
            } else {
                $( ".hide10" ).slideUp(1);
                var P7 = '0';
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7=" + P7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });

        $('#P7_4_1').on('click', function() {
            var checkbox = document.getElementById("P7_4_1");
            if(checkbox.checked){
                if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_1 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img3" ).slideDown(1);
                $( "#img_3" ).slideDown(1);
            } else {
                P7_4_1 = -1;
                $( "#img3" ).slideUp(1);
                $( "#img_3" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_1=" + P7_4_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_2').on('click', function() {
           var checkbox = document.getElementById("P7_4_2");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_2 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img4" ).slideDown(1);
                $( "#img_4" ).slideDown(1);
            } else {
                P7_4_2 = -1;
                $( "#img4" ).slideUp(1);
                $( "#img_4" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_2=" + P7_4_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_3').on('click', function() {
           var checkbox = document.getElementById("P7_4_3");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_3 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img5" ).slideDown(1);
                $( "#img_5" ).slideDown(1);
            } else {
                P7_4_3 = -1;
                $( "#img5" ).slideUp(1);
                $( "#img_5" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_3=" + P7_4_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_4').on('click', function() {
           var checkbox = document.getElementById("P7_4_4");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_4 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img6" ).slideDown(1);
                $( "#img_6" ).slideDown(1);
            } else {
                P7_4_4 = -1;
                $( "#img6" ).slideUp(1);
                $( "#img_6" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_4=" + P7_4_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_5').on('click', function() {
           var checkbox = document.getElementById("P7_4_5");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_5 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img7" ).slideDown(1);
                $( "#img_7" ).slideDown(1);
            } else {
                P7_4_4 = -1;
                $( "#img7" ).slideUp(1);
                $( "#img_7" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_5=" + P7_4_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_6').on('click', function() {
           var checkbox = document.getElementById("P7_4_6");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_6 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img8" ).slideDown(1);
                $( "#img_8" ).slideDown(1);
            } else {
                P7_4_4 = -1;
                $( "#img8" ).slideUp(1);
                $( "#img_8" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_6=" + P7_4_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_7').on('click', function() {
           var checkbox = document.getElementById("P7_4_7");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_7 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img9" ).slideDown(1);
                $( "#img_9" ).slideDown(1);
            } else {
                P7_4_7 = -1;
                $( "#img9" ).slideUp(1);
                $( "#img_9" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_7=" + P7_4_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_8').on('click', function() {
           var checkbox = document.getElementById("P7_4_8");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_8 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img10" ).slideDown(1);
                $( "#img_10" ).slideDown(1);
            } else {
                P7_4_8 = -1;
                $( "#img10" ).slideUp(1);
                 $( "#img_10" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_8=" + P7_4_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P7_4_9').on('click', function() {
           var checkbox = document.getElementById("P7_4_9");
           if(checkbox.checked){
               if(window.innerWidth < 0) {
                   $("#Modal_7").modal("show");
                } 
                P7_4_9 = 1;
                $( "#img1" ).slideUp(1);
                $( "#img2" ).slideDown(1);
                $( "#img11" ).slideDown(1);
                $( "#img_11" ).slideDown(1);
            } else {
                P7_4_9 = -1;
                $( "#img11" ).slideUp(1);
                $( "#img_11" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P7_4_9=" + P7_4_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P8').on('click', function() {
            var Codigo = '<?php echo $Codigo ?>';
            var P8 = Radio_Value(document.getElementsByClassName('P8'));
            document.getElementById('p8').style.backgroundColor='#ccffdd';
            if(P8 == 1){
                $( ".cuello1" ).slideDown(1);
                $( ".cuello2" ).slideDown(1);
                $( ".cuello3" ).slideDown(1);
            } else {
                $( ".hombros" ).slideDown(1);
                $( ".cuello1" ).slideUp(1);
                $( ".cuello2" ).slideUp(1);
                $( ".cuello3" ).slideUp(1);
                $( ".cuello4" ).slideUp(1);
                $( ".cuello5" ).slideUp(1);
                $( ".cuello6" ).slideUp(1);
                $( ".cuello7" ).slideUp(1);
                $( ".cuello8" ).slideUp(1);
                $( ".cuello9" ).slideUp(1);
                $( ".cuello10" ).slideUp(1);
                $( ".cuello11" ).slideUp(1);
                $( ".cuello12" ).slideUp(1);
                $.ajax({
                    type: "post",
                    url: "../insertar_locomocion.php",
                    data: "P8=" + P8 + "&Codigo=" + Codigo,
                    success: function (response) {
                    },   
                });
            }

        });
        $('#P8_1_1').on('change', function() {
            var P8_1_1_ = $('#P8_1_1').val();
            var P8_1_1 = "0";
            if(P8_1_1_ < 2) {
                P8_1_1 = 7;
            }
            if(P8_1_1_ >= 2) {
                P8_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_1_1=" + P8_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P8_1_2').on('change', function() {
            var P8_1_2 = $('#P8_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_1_2=" + P8_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_2').on('click', function() {
            var P8_2 = Radio_Value(document.getElementsByClassName('P8_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_2=" + P8_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_3').on('click', function() {
            var P8_3 = Radio_Value(document.getElementsByClassName('P8_3'));
            if(P8_3 == 1){
                $( ".cuello4" ).slideDown(1);
                $( ".cuello5" ).slideDown(1);
                $( ".cuello6" ).slideDown(1);
                $( ".cuello7" ).slideDown(1);
                $( ".cuello8" ).slideDown(1);
                $( ".cuello9" ).slideDown(1);
                $( ".cuello10" ).slideDown(1);
                $( ".cuello11" ).slideDown(1);
                $( ".cuello12" ).slideDown(1);
                $( ".hombros" ).slideDown(1);
            } else {
                $( ".hombros" ).slideDown(1);
                $( ".cuello4" ).slideUp(1);
                $( ".cuello5" ).slideUp(1);
                $( ".cuello6" ).slideUp(1);
                $( ".cuello7" ).slideUp(1);
                $( ".cuello8" ).slideUp(1);
                $( ".cuello9" ).slideUp(1);
                $( ".cuello10" ).slideUp(1);
                $( ".cuello11" ).slideUp(1);
                $( ".cuello12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_3=" + P8_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_4').on('click', function() {
            var P8_4 = Radio_Value(document.getElementsByClassName('P8_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_4=" + P8_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_5').on('click', function() {
            var P8_5 = Radio_Value(document.getElementsByClassName('P8_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_5=" + P8_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_6').on('click', function() {
            var P8_6 = Radio_Value(document.getElementsByClassName('P8_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_6=" + P8_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_7').on('click', function() {
            var P8_7 = Radio_Value(document.getElementsByClassName('P8_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_7=" + P8_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P8_8').on('click', function() {
            var P8_8 = Radio_Value(document.getElementsByClassName('P8_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_8=" + P8_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P8_9').on('change', function() {
            var P8_9 = $('#P8_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_9=" + P8_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P8_10').on('change', function() {
            var P8_10 = $('#P8_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p8_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P8_10=" + P8_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P9').on('click', function() {
            var P9 = Radio_Value(document.getElementsByClassName('P9'));
            if(P9 == 1){
                $( ".hombros1" ).slideDown(1);
                $( ".hombros2" ).slideDown(1);
                $( ".hombros3" ).slideDown(1);
            } else {
                $( ".codos" ).slideDown(1);
                $( ".hombros1" ).slideUp(1);
                $( ".hombros2" ).slideUp(1);
                $( ".hombros3" ).slideUp(1);
                $( ".hombros4" ).slideUp(1);
                $( ".hombros5" ).slideUp(1);
                $( ".hombros6" ).slideUp(1);
                $( ".hombros7" ).slideUp(1);
                $( ".hombros8" ).slideUp(1);
                $( ".hombros9" ).slideUp(1);
                $( ".hombros10" ).slideUp(1);
                $( ".hombros11" ).slideUp(1);
                $( ".hombros12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9=" + P9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P9_1_1').on('change', function() {
            var P9_1_1_ = $('#P9_1_1').val();
            var P9_1_1 = "0";
            if(P9_1_1_ < 2) {
                P9_1_1 = 7;
            }
            if(P9_1_1_ >= 2) {
                P9_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_1_1=" + P9_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P9_1_2').on('change', function() {
            var P9_1_2 = $('#P9_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_1_2=" + P9_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_2').on('click', function() {
            var P9_2 = Radio_Value(document.getElementsByClassName('P9_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_2=" + P9_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_3').on('click', function() {
            var P9_3 = Radio_Value(document.getElementsByClassName('P9_3'));
            if(P9_3 == 1){
                $( ".hombros4" ).slideDown(1);
                $( ".hombros5" ).slideDown(1);
                $( ".hombros6" ).slideDown(1);
                $( ".hombros7" ).slideDown(1);
                $( ".hombros8" ).slideDown(1);
                $( ".hombros9" ).slideDown(1);
                $( ".hombros10" ).slideDown(1);
                $( ".hombros11" ).slideDown(1);
                $( ".hombros12" ).slideDown(1);
                $( ".codos" ).slideDown(1);
            } else {
                $( ".codos" ).slideDown(1);
                $( ".hombros4" ).slideUp(1);
                $( ".hombros5" ).slideUp(1);
                $( ".hombros6" ).slideUp(1);
                $( ".hombros7" ).slideUp(1);
                $( ".hombros8" ).slideUp(1);
                $( ".hombros9" ).slideUp(1);
                $( ".hombros10" ).slideUp(1);
                $( ".hombros11" ).slideUp(1);
                $( ".hombros12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_3=" + P9_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_4').on('click', function() {
            var P9_4 = Radio_Value(document.getElementsByClassName('P9_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_4=" + P9_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_5').on('click', function() {
            var P9_5 = Radio_Value(document.getElementsByClassName('P9_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_5=" + P9_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_6').on('click', function() {
            var P9_6 = Radio_Value(document.getElementsByClassName('P9_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_6=" + P9_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_7').on('click', function() {
            var P9_7 = Radio_Value(document.getElementsByClassName('P9_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_7=" + P9_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P9_8').on('click', function() {
            var P9_8 = Radio_Value(document.getElementsByClassName('P9_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_8=" + P9_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P9_9').on('change', function() {
            var P9_9 = $('#P9_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_9=" + P9_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P9_10').on('change', function() {
            var P9_10 = $('#P9_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p9_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P9_10=" + P9_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P10').on('click', function() {
            var P10 = Radio_Value(document.getElementsByClassName('P10'));
            if(P10 == 1){
                $( ".codos1" ).slideDown(1);
                $( ".codos2" ).slideDown(1);
                $( ".codos3" ).slideDown(1);
            } else {
                $( ".manos" ).slideDown(1);
                $( ".codos1" ).slideUp(1);
                $( ".codos2" ).slideUp(1);
                $( ".codos3" ).slideUp(1);
                $( ".codos4" ).slideUp(1);
                $( ".codos5" ).slideUp(1);
                $( ".codos6" ).slideUp(1);
                $( ".codos7" ).slideUp(1);
                $( ".codos8" ).slideUp(1);
                $( ".codos9" ).slideUp(1);
                $( ".codos10" ).slideUp(1);
                $( ".codos11" ).slideUp(1);
                $( ".codos12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10=" + P10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P10_1_1').on('change', function() {
            var P10_1_1_ = $('#P10_1_1').val();
            var P10_1_1 = "0";
            if(P10_1_1_ < 2) {
                P10_1_1 = 7;
            }
            if(P10_1_1_ >= 2) {
                P10_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_1_1=" + P10_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P10_1_2').on('change', function() {
            var P10_1_2 = $('#P10_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_1_2=" + P10_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_2').on('click', function() {
            var P10_2 = Radio_Value(document.getElementsByClassName('P10_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_2=" + P10_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_3').on('click', function() {
            var P10_3 = Radio_Value(document.getElementsByClassName('P10_3'));
            if(P10_3 == 1){
                $( ".codos4" ).slideDown(1);
                $( ".codos5" ).slideDown(1);
                $( ".codos6" ).slideDown(1);
                $( ".codos7" ).slideDown(1);
                $( ".codos8" ).slideDown(1);
                $( ".codos9" ).slideDown(1);
                $( ".codos10" ).slideDown(1);
                $( ".codos11" ).slideDown(1);
                $( ".codos12" ).slideDown(1);
                $( ".manos" ).slideDown(1);
            } else {
                $( ".manos" ).slideDown(1);
                $( ".codos4" ).slideUp(1);
                $( ".codos5" ).slideUp(1);
                $( ".codos6" ).slideUp(1);
                $( ".codos7" ).slideUp(1);
                $( ".codos8" ).slideUp(1);
                $( ".codos9" ).slideUp(1);
                $( ".codos10" ).slideUp(1);
                $( ".codos11" ).slideUp(1);
                $( ".codos12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_3=" + P10_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_4').on('click', function() {
            var P10_4 = Radio_Value(document.getElementsByClassName('P10_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_4=" + P10_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_5').on('click', function() {
            var P10_5 = Radio_Value(document.getElementsByClassName('P10_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_5=" + P10_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_6').on('click', function() {
            var P10_6 = Radio_Value(document.getElementsByClassName('P10_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_6=" + P10_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_7').on('click', function() {
            var P10_7 = Radio_Value(document.getElementsByClassName('P10_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_7=" + P10_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P10_8').on('click', function() {
            var P10_8 = Radio_Value(document.getElementsByClassName('P10_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_8=" + P10_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P10_9').on('change', function() {
            var P10_9 = $('#P10_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_9=" + P10_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P10_10').on('change', function() {
            var P10_10 = $('#P10_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p10_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P10_10=" + P10_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P11').on('click', function() {
            var P11 = Radio_Value(document.getElementsByClassName('P11'));
            if(P11 == 1){
                $( ".manos1" ).slideDown(1);
                $( ".manos2" ).slideDown(1);
                $( ".manos3" ).slideDown(1);
            } else {
                $( ".dorsal" ).slideDown(1);
                $( ".manos1" ).slideUp(1);
                $( ".manos2" ).slideUp(1);
                $( ".manos3" ).slideUp(1);
                $( ".manos4" ).slideUp(1);
                $( ".manos5" ).slideUp(1);
                $( ".manos6" ).slideUp(1);
                $( ".manos7" ).slideUp(1);
                $( ".manos8" ).slideUp(1);
                $( ".manos9" ).slideUp(1);
                $( ".manos10" ).slideUp(1);
                $( ".manos11" ).slideUp(1);
                $( ".manos12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11=" + P11 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P11_1_1').on('change', function() {
            var P11_1_1_ = $('#P11_1_1').val();
            var P11_1_1 = "0";
            if(P11_1_1_ < 2) {
                P11_1_1 = 7;
            }
            if(P11_1_1_ >= 2) {
                P11_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_1_1=" + P11_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P11_1_2').on('change', function() {
            var P11_1_2 = $('#P11_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_1_2=" + P11_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_2').on('click', function() {
            var P11_2 = Radio_Value(document.getElementsByClassName('P11_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_2=" + P11_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_3').on('click', function() {
            var P11_3 = Radio_Value(document.getElementsByClassName('P11_3'));
            if(P11_3 == 1){
                $( ".manos4" ).slideDown(1);
                $( ".manos5" ).slideDown(1);
                $( ".manos6" ).slideDown(1);
                $( ".manos7" ).slideDown(1);
                $( ".manos8" ).slideDown(1);
                $( ".manos9" ).slideDown(1);
                $( ".manos10" ).slideDown(1);
                $( ".manos11" ).slideDown(1);
                $( ".manos12" ).slideDown(1);
                $( ".dorsal" ).slideDown(1);
            } else {
                $( ".dorsal" ).slideDown(1);
                $( ".manos4" ).slideUp(1);
                $( ".manos5" ).slideUp(1);
                $( ".manos6" ).slideUp(1);
                $( ".manos7" ).slideUp(1);
                $( ".manos8" ).slideUp(1);
                $( ".manos9" ).slideUp(1);
                $( ".manos10" ).slideUp(1);
                $( ".manos11" ).slideUp(1);
                $( ".manos12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_3=" + P11_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_4').on('click', function() {
            var P11_4 = Radio_Value(document.getElementsByClassName('P11_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_4=" + P11_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_5').on('click', function() {
            var P11_5 = Radio_Value(document.getElementsByClassName('P11_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_5=" + P11_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_6').on('click', function() {
            var P11_6 = Radio_Value(document.getElementsByClassName('P11_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_6=" + P11_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_7').on('click', function() {
            var P11_7 = Radio_Value(document.getElementsByClassName('P11_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_7=" + P11_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P11_8').on('click', function() {
            var P11_8 = Radio_Value(document.getElementsByClassName('P11_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_8=" + P11_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P11_9').on('change', function() {
            var P11_9 = $('#P11_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_9=" + P11_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P11_10').on('change', function() {
            var P11_10 = $('#P11_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p11_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P11_10=" + P11_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P12').on('click', function() {
            var P12 = Radio_Value(document.getElementsByClassName('P12'));
            if(P12 == 1){
                $( ".dorsal1" ).slideDown(1);
                $( ".dorsal2" ).slideDown(1);
                $( ".dorsal3" ).slideDown(1);
            } else {
                $( ".lumbar" ).slideDown(1);
                $( ".dorsal1" ).slideUp(1);
                $( ".dorsal2" ).slideUp(1);
                $( ".dorsal3" ).slideUp(1);
                $( ".dorsal4" ).slideUp(1);
                $( ".dorsal5" ).slideUp(1);
                $( ".dorsal6" ).slideUp(1);
                $( ".dorsal7" ).slideUp(1);
                $( ".dorsal8" ).slideUp(1);
                $( ".dorsal9" ).slideUp(1);
                $( ".dorsal10" ).slideUp(1);
                $( ".dorsal11" ).slideUp(1);
                $( ".dorsal12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12=" + P12 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P12_1_1').on('change', function() {
            var P12_1_1_ = $('#P12_1_1').val();
            var P12_1_1 = "0";
            if(P12_1_1_ < 2) {
                P12_1_1 = 7;
            }
            if(P12_1_1_ >= 2) {
                P12_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_1_1=" + P12_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P12_1_2').on('change', function() {
            var P12_1_2 = $('#P12_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_1_2=" + P12_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_2').on('click', function() {
            var P12_2 = Radio_Value(document.getElementsByClassName('P12_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_2=" + P12_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_3').on('click', function() {
            var P12_3 = Radio_Value(document.getElementsByClassName('P12_3'));
            if(P12_3 == 1){
                $( ".dorsal4" ).slideDown(1);
                $( ".dorsal5" ).slideDown(1);
                $( ".dorsal6" ).slideDown(1);
                $( ".dorsal7" ).slideDown(1);
                $( ".dorsal8" ).slideDown(1);
                $( ".dorsal9" ).slideDown(1);
                $( ".dorsal10" ).slideDown(1);
                $( ".dorsal11" ).slideDown(1);
                $( ".dorsal12" ).slideDown(1);
                $( ".lumbar" ).slideDown(1);
            } else {
                $( ".lumbar" ).slideDown(1);
                $( ".dorsal4" ).slideUp(1);
                $( ".dorsal5" ).slideUp(1);
                $( ".dorsal6" ).slideUp(1);
                $( ".dorsal7" ).slideUp(1);
                $( ".dorsal8" ).slideUp(1);
                $( ".dorsal9" ).slideUp(1);
                $( ".dorsal10" ).slideUp(1);
                $( ".dorsal11" ).slideUp(1);
                $( ".dorsal12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_3=" + P12_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_4').on('click', function() {
            var P12_4 = Radio_Value(document.getElementsByClassName('P12_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_4=" + P12_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_5').on('click', function() {
            var P12_5 = Radio_Value(document.getElementsByClassName('P12_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_5=" + P12_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_6').on('click', function() {
            var P12_6 = Radio_Value(document.getElementsByClassName('P12_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_6=" + P12_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_7').on('click', function() {
            var P12_7 = Radio_Value(document.getElementsByClassName('P12_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_7=" + P12_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P12_8').on('click', function() {
            var P12_8 = Radio_Value(document.getElementsByClassName('P12_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_8=" + P12_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P12_9').on('change', function() {
            var P12_9 = $('#P12_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_9=" + P12_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P12_10').on('change', function() {
            var P12_10 = $('#P12_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p12_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P12_10=" + P12_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P13').on('click', function() {
            var P13 = Radio_Value(document.getElementsByClassName('P13'));
            if(P13 == 1){
                $( ".lumbar1" ).slideDown(1);
                $( ".lumbar2" ).slideDown(1);
                $( ".lumbar3" ).slideDown(1);
            } else {
                $( ".piernas" ).slideDown(1);
                $( ".lumbar1" ).slideUp(1);
                $( ".lumbar2" ).slideUp(1);
                $( ".lumbar3" ).slideUp(1);
                $( ".lumbar4" ).slideUp(1);
                $( ".lumbar5" ).slideUp(1);
                $( ".lumbar6" ).slideUp(1);
                $( ".lumbar7" ).slideUp(1);
                $( ".lumbar8" ).slideUp(1);
                $( ".lumbar9" ).slideUp(1);
                $( ".lumbar10" ).slideUp(1);
                $( ".lumbar11" ).slideUp(1);
                $( ".lumbar12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13=" + P13 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P13_1_1').on('change', function() {
            var P13_1_1_ = $('#P13_1_1').val();
            var P13_1_1 = "0";
            if(P13_1_1_ < 2) {
                P13_1_1 = 7;
            }
            if(P13_1_1_ >= 2) {
                P13_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_1_1=" + P13_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P13_1_2').on('change', function() {
            var P13_1_2 = $('#P13_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_1_2=" + P13_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_2').on('click', function() {
            var P13_2 = Radio_Value(document.getElementsByClassName('P13_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_2=" + P13_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_3').on('click', function() {
            var P13_3 = Radio_Value(document.getElementsByClassName('P13_3'));
            if(P13_3 == 1){
                $( ".lumbar4" ).slideDown(1);
                $( ".lumbar5" ).slideDown(1);
                $( ".lumbar6" ).slideDown(1);
                $( ".lumbar7" ).slideDown(1);
                $( ".lumbar8" ).slideDown(1);
                $( ".lumbar9" ).slideDown(1);
                $( ".lumbar10" ).slideDown(1);
                $( ".lumbar11" ).slideDown(1);
                $( ".lumbar12" ).slideDown(1);
                $( ".piernas" ).slideDown(1);
            } else {
                $( ".piernas" ).slideDown(1);
                $( ".lumbar4" ).slideUp(1);
                $( ".lumbar5" ).slideUp(1);
                $( ".lumbar6" ).slideUp(1);
                $( ".lumbar7" ).slideUp(1);
                $( ".lumbar8" ).slideUp(1);
                $( ".lumbar9" ).slideUp(1);
                $( ".lumbar10" ).slideUp(1);
                $( ".lumbar11" ).slideUp(1);
                $( ".lumbar12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_3=" + P13_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_4').on('click', function() {
            var P13_4 = Radio_Value(document.getElementsByClassName('P13_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_4=" + P13_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_5').on('click', function() {
            var P13_5 = Radio_Value(document.getElementsByClassName('P13_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_5=" + P13_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_6').on('click', function() {
            var P13_6 = Radio_Value(document.getElementsByClassName('P13_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_6=" + P13_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_7').on('click', function() {
            var P13_7 = Radio_Value(document.getElementsByClassName('P13_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_7=" + P13_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P13_8').on('click', function() {
            var P13_8 = Radio_Value(document.getElementsByClassName('P13_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_8=" + P13_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P13_9').on('change', function() {
            var P13_9 = $('#P13_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_9=" + P13_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P13_10').on('change', function() {
            var P13_10 = $('#P13_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p13_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P13_10=" + P13_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        
        $('.P14').on('click', function() {
            var P14 = Radio_Value(document.getElementsByClassName('P14'));
            if(P14 == 1){
                $( ".piernas1" ).slideDown(1);
                $( ".piernas2" ).slideDown(1);
                $( ".piernas3" ).slideDown(1);
            } else {
                $( ".rodillas" ).slideDown(1);
                $( ".piernas1" ).slideUp(1);
                $( ".piernas2" ).slideUp(1);
                $( ".piernas3" ).slideUp(1);
                $( ".piernas4" ).slideUp(1);
                $( ".piernas5" ).slideUp(1);
                $( ".piernas6" ).slideUp(1);
                $( ".piernas7" ).slideUp(1);
                $( ".piernas8" ).slideUp(1);
                $( ".piernas9" ).slideUp(1);
                $( ".piernas10" ).slideUp(1);
                $( ".piernas11" ).slideUp(1);
                $( ".piernas12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14=" + P14 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P14_1_1').on('change', function() {
            var P14_1_1_ = $('#P14_1_1').val();
            var P14_1_1 = "0";
            if(P14_1_1_ < 2) {
                P14_1_1 = 7;
            }
            if(P14_1_1_ >= 2) {
                P14_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_1_1=" + P14_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P14_1_2').on('change', function() {
            var P14_1_2 = $('#P14_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_1_2=" + P14_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_2').on('click', function() {
            var P14_2 = Radio_Value(document.getElementsByClassName('P14_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_2=" + P14_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_3').on('click', function() {
            var P14_3 = Radio_Value(document.getElementsByClassName('P14_3'));
            if(P14_3 == 1){
                $( ".piernas4" ).slideDown(1);
                $( ".piernas5" ).slideDown(1);
                $( ".piernas6" ).slideDown(1);
                $( ".piernas7" ).slideDown(1);
                $( ".piernas8" ).slideDown(1);
                $( ".piernas9" ).slideDown(1);
                $( ".piernas10" ).slideDown(1);
                $( ".piernas11" ).slideDown(1);
                $( ".piernas12" ).slideDown(1);
                $( ".rodillas" ).slideDown(1);
            } else {
                $( ".rodillas" ).slideDown(1);
                $( ".piernas4" ).slideUp(1);
                $( ".piernas5" ).slideUp(1);
                $( ".piernas6" ).slideUp(1);
                $( ".piernas7" ).slideUp(1);
                $( ".piernas8" ).slideUp(1);
                $( ".piernas9" ).slideUp(1);
                $( ".piernas10" ).slideUp(1);
                $( ".piernas11" ).slideUp(1);
                $( ".piernas12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_3=" + P14_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_4').on('click', function() {
            var P14_4 = Radio_Value(document.getElementsByClassName('P14_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_4=" + P14_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_5').on('click', function() {
            var P14_5 = Radio_Value(document.getElementsByClassName('P14_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_5=" + P14_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_6').on('click', function() {
            var P14_6 = Radio_Value(document.getElementsByClassName('P14_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_6=" + P14_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_7').on('click', function() {
            var P14_7 = Radio_Value(document.getElementsByClassName('P14_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_7=" + P14_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P14_8').on('click', function() {
            var P14_8 = Radio_Value(document.getElementsByClassName('P14_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_8=" + P14_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P14_9').on('change', function() {
            var P14_9 = $('#P14_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_9=" + P14_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P14_10').on('change', function() {
            var P14_10 = $('#P14_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p14_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P14_10=" + P14_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        }); 
        
        $('.P15').on('click', function() {
            var P15 = Radio_Value(document.getElementsByClassName('P15'));
            if(P15 == 1){
                $( ".rodillas1" ).slideDown(1);
                $( ".rodillas2" ).slideDown(1);
                $( ".rodillas3" ).slideDown(1);
            } else {
                $( ".pies" ).slideDown(1);
                $( ".rodillas1" ).slideUp(1);
                $( ".rodillas2" ).slideUp(1);
                $( ".rodillas3" ).slideUp(1);
                $( ".rodillas4" ).slideUp(1);
                $( ".rodillas5" ).slideUp(1);
                $( ".rodillas6" ).slideUp(1);
                $( ".rodillas7" ).slideUp(1);
                $( ".rodillas8" ).slideUp(1);
                $( ".rodillas9" ).slideUp(1);
                $( ".rodillas10" ).slideUp(1);
                $( ".rodillas11" ).slideUp(1);
                $( ".rodillas12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15=" + P15 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P15_1_1').on('change', function() {
            var P15_1_1_ = $('#P15_1_1').val();
            var P15_1_1 = "0";
            if(P15_1_1_ < 2) {
                P15_1_1 = 7;
            }
            if(P15_1_1_ >= 2) {
                P15_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_1_1=" + P15_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P15_1_2').on('change', function() {
            var P15_1_2 = $('#P15_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_1_2=" + P15_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_2').on('click', function() {
            var P15_2 = Radio_Value(document.getElementsByClassName('P15_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_2=" + P15_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_3').on('click', function() {
            var P15_3 = Radio_Value(document.getElementsByClassName('P15_3'));
            if(P15_3 == 1){
                $( ".rodillas4" ).slideDown(1);
                $( ".rodillas5" ).slideDown(1);
                $( ".rodillas6" ).slideDown(1);
                $( ".rodillas7" ).slideDown(1);
                $( ".rodillas8" ).slideDown(1);
                $( ".rodillas9" ).slideDown(1);
                $( ".rodillas10" ).slideDown(1);
                $( ".rodillas11" ).slideDown(1);
                $( ".rodillas12" ).slideDown(1);
                $( ".pies" ).slideDown(1);
            } else {
                $( ".pies" ).slideDown(1);
                $( ".rodillas4" ).slideUp(1);
                $( ".rodillas5" ).slideUp(1);
                $( ".rodillas6" ).slideUp(1);
                $( ".rodillas7" ).slideUp(1);
                $( ".rodillas8" ).slideUp(1);
                $( ".rodillas9" ).slideUp(1);
                $( ".rodillas10" ).slideUp(1);
                $( ".rodillas11" ).slideUp(1);
                $( ".rodillas12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_3=" + P15_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_4').on('click', function() {
            var P15_4 = Radio_Value(document.getElementsByClassName('P15_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_4=" + P15_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_5').on('click', function() {
            var P15_5 = Radio_Value(document.getElementsByClassName('P15_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_5=" + P15_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_6').on('click', function() {
            var P15_6 = Radio_Value(document.getElementsByClassName('P15_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_6=" + P15_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_7').on('click', function() {
            var P15_7 = Radio_Value(document.getElementsByClassName('P15_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_7=" + P15_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P15_8').on('click', function() {
            var P15_8 = Radio_Value(document.getElementsByClassName('P15_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_8=" + P15_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P15_9').on('change', function() {
            var P15_9 = $('#P15_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_9=" + P15_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P15_10').on('change', function() {
            var P15_10 = $('#P15_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p15_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P15_10=" + P15_10 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        }); 
        
        $('.P16').on('click', function() {
            var P16 = Radio_Value(document.getElementsByClassName('P16'));
            if(P16 == 1){
                $( ".pies1" ).slideDown(1);
                $( ".pies2" ).slideDown(1);
                $( ".pies3" ).slideDown(1);
            } else {
                $( ".pies1" ).slideUp(1);
                $( ".pies2" ).slideUp(1);
                $( ".pies3" ).slideUp(1);
                $( ".pies4" ).slideUp(1);
                $( ".pies5" ).slideUp(1);
                $( ".pies6" ).slideUp(1);
                $( ".pies7" ).slideUp(1);
                $( ".pies8" ).slideUp(1);
                $( ".pies9" ).slideUp(1);
                $( ".pies10" ).slideUp(1);
                $( ".pies11" ).slideUp(1);
                $( ".pies12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16=" + P16 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P16_1_1').on('change', function() {
            var P16_1_1_ = $('#P16_1_1').val();
            var P16_1_1 = "0";
            if(P16_1_1_ < 2) {
                P16_1_1 = 7;
            }
            if(P16_1_1_ >= 2) {
                P16_1_1 = 8;
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_1').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_1_1=" + P16_1_1 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P16_1_2').on('change', function() {
            var P16_1_2 = $('#P16_1_2').val();
            var Codigo = '<?php echo $Codigo ?>';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_1_2=" + P16_1_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_2').on('click', function() {
            var P16_2 = Radio_Value(document.getElementsByClassName('P16_2'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_2').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_2=" + P16_2 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_3').on('click', function() {
            var P16_3 = Radio_Value(document.getElementsByClassName('P16_3'));
            if(P16_3 == 1){
                $( ".pies4" ).slideDown(1);
                $( ".pies5" ).slideDown(1);
                $( ".pies6" ).slideDown(1);
                $( ".pies7" ).slideDown(1);
                $( ".pies8" ).slideDown(1);
                $( ".pies9" ).slideDown(1);
                $( ".pies10" ).slideDown(1);
                $( ".pies11" ).slideDown(1);
                $( ".pies12" ).slideDown(1);
                $( ".pies" ).slideDown(1);
            } else {
                $( ".pies4" ).slideUp(1);
                $( ".pies5" ).slideUp(1);
                $( ".pies6" ).slideUp(1);
                $( ".pies7" ).slideUp(1);
                $( ".pies8" ).slideUp(1);
                $( ".pies9" ).slideUp(1);
                $( ".pies10" ).slideUp(1);
                $( ".pies11" ).slideUp(1);
                $( ".pies12" ).slideUp(1);
            }
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_3').style.backgroundColor='#ccffdd';
            $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_3=" + P16_3 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_4').on('click', function() {
            var P16_4 = Radio_Value(document.getElementsByClassName('P16_4'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_4').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_4=" + P16_4 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_5').on('click', function() {
            var P16_5 = Radio_Value(document.getElementsByClassName('P16_5'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_5').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_5=" + P16_5 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_6').on('click', function() {
            var P16_6 = Radio_Value(document.getElementsByClassName('P16_6'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_6').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_6=" + P16_6 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_7').on('click', function() {
            var P16_7 = Radio_Value(document.getElementsByClassName('P16_7'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_7').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_7=" + P16_7 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('.P16_8').on('click', function() {
            var P16_8 = Radio_Value(document.getElementsByClassName('P16_8'));
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_8').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_8=" + P16_8 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P16_9').on('change', function() {
            var P16_9 = $('#P16_9').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_9').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_9=" + P16_9 + "&Codigo=" + Codigo,
                success: function (response) {
                },   
            });
        });
        $('#P16_10').on('change', function() {
            var P16_10 = $('#P16_10').val();
            var Codigo = '<?php echo $Codigo ?>';
            document.getElementById('p16_10').style.backgroundColor='#ccffdd';
             $.ajax({
                type: "post",
                url: "../insertar_locomocion.php",
                data: "P16_10=" + P16_10 + "&Codigo=" + Codigo,
                success: function (response) {
                    setTimeout(function(){
                       // $("#costumModal_final").modal("show");
                    }, 2000);
                    
                },   
            });
        }); 
  
        $(document).on('click', '#boton', (e) => {
            e.preventDefault();
            var Codigo = '<?php echo $Codigo ?>';
            var Edad = $('#Edad').val();
            var Antiguedad_a = $('#Antiguedad_a').val();
            var Antiguedad_m = $('#Antiguedad_m').val();
            var Antiguedad2_a = $('#Antiguedad_a').val();
            var Antiguedad2_m = $('#Antiguedad_m').val();
            var Horas = $('#Horas').val();
            var Dominancia = $('#Dominancia').val();
            if ( !Edad || !Antiguedad_a || !Antiguedad_m || !Antiguedad_a || !Antiguedad2_m || !Horas || !Dominancia) {
                $("#Modal_item").modal("show")
            } else {  
                $.ajax({
                    type: "post",
                    url: "../insertar_locomocion.php",
                    data: "enviar=" + 1 + "&Codigo=" + Codigo,
                    success: function (response) {
                        setTimeout(function(){
                            $("#costumModal_final").modal("show");
                        }, 2000);
                        setTimeout(function(){
                            location.href="https://cedisalud.com/";
                        }, 5000);
                        
                    },   
                });
            }
        });
        
        /*$(document).on('click', '#boton', (e) => {
            e.preventDefault();
            var Codigo = '<?php echo $Codigo ?>';
            var Nombre = $('#Nombre').val();
            var Cedula = $('#Cedula').val();
            var Edad = $('#Edad').val();
            var Antiguedad_a = $('#Antiguedad_a').val();
            var Antiguedad_m = $('#Antiguedad_m').val();
            var Antiguedad2_a = $('#Antiguedad_a').val();
            var Antiguedad2_m = $('#Antiguedad_m').val();
            var Horas = $('#Horas').val();
            var Dominancia = $('#Dominancia').val();
            if ( !Edad || !Antiguedad_a || !Antiguedad_m || !Antiguedad_a || !Antiguedad2_m || !Horas || !Dominancia) {
                $("#Modal_item").modal("show")
            } else {  
                $.ajax({
                    type: "post",
                    url: "../insertar_locomocion.php",
                    data: "enviar=" + 1 + "&Codigo=" + Codigo,
                    success: function (response) {
                        setTimeout(function(){
                            $("#costumModal_final").modal("show");
                        }, 2000);
                        setTimeout(function(){
                            location.href="https://cedisalud.com/";
                        }, 5000);
                        
                    },   
                });
           // }
        });*/
        
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
    	
    	submitBtn2.addEventListener("click", function (e) {
    	    location.href="https://www.cedisalud.com.co/logout_riesgo";
            e.preventDefault();
    	    var id_terminos = '<?php echo $id ?>';
            const postData = {
                id_terminos: id_terminos,
                terminos_no:0,
            };
            const url = '../consentimiento2.php';
            $.post(url, postData, (response) => {
                location.href="https://www.cedisalud.com.co/vistas/logout_locomocion.php";      
            });    
        });
    	
    	
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
               url: '../guardar_firma.php',
               data: fd,
               processData: false,
               contentType: false
            }).done(function(data) {
                $("#costumModal").modal("hide");
    
            });
        }, false);
        
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
        
        
        
        
        
        
        
        

    })
</script>
