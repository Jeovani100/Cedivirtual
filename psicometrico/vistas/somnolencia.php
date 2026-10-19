<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Somnolencia</title>
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
    
    $sql = "INSERT INTO formulario_somnolencia (id_admin, Item1, Item2, Item3, Item4, Item5, Item6,Item7,Item8,Items,Codigo,Fecha_registro) VALUES ('$Codigo', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$Codigo2', NOW())"; 
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
    .table2 {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
    }
    .table2 th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:0px solid #71788e!important;
    }
    .table2 td {
        text-align:left;
        padding:1em;
        border:0px solid #71788e!important;
        vertical-align:middle!important;
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
        <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#333333">EVALUACIÓN DE LA SOMNOLENCIA EPWORTH</p><br>
        <p style="text-align:left;font-family:Raleway;font-size:18px;color:#333333">Este cuestionario pretende valorar la facilidad para quedarse dormido en diferentes situaciones. Aunque no haya hecho alguna de estas cosas recientemente, intente imaginar cómo le habría afectado.</p>

            <form name="form1" id="form1">
            <table class="table2" style="width:100%"><br>
                <tr>
                    <td style="font-family:verdanab;background:#e6e6e6;text-align:left">SITUACIÓN:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                    <td style="font-family:verdanab;background:#e6e6e6;text-align:left">Probabilidad de que me coja sueño</td>
                </tr>

                <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">1. Sentado y leyendo:</td>
                    <td style="padding-left:1em" ><select id="Item1" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">2. Viendo la TV:</td>
                    <td style="padding-left:1em" ><select id="Item2" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">3. Sentado, inactivo en un lgar público (cine, teatro, conferencia, etc):</td>
                    <td style="padding-left:1em" ><select id="Item3" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">4. Como pasajero de un coche en un viaje de 1 hora sin paradas:</td>
                    <td style="padding-left:1em" ><select id="Item4" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">5. Estirado para descansar al mediodía cuando las circunstancias lo permiten:</td>
                    <td style="padding-left:1em" ><select id="Item5" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">6. Sentado y hablando con otra persona:</td>
                    <td style="padding-left:1em" ><select id="Item6" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">7. Sentado tranquilamente después de una comida sin alcohol:</td>
                    <td style="padding-left:1em" ><select id="Item7" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td style="font-size:18px;font-family:MyriadPro;letter-spacing:1px">8. En un coche, estando parado por el tránsito unos minutos (ej: semáforo, retención,...):</td>
                    <td style="padding-left:1em" ><select id="Item8" style='text-align:left;color:#000000;background:transparent;border: 1px solid black;padding:6px;width:100%'>
                            <option hidden>. . .</option>
                            <option value="0">Nunca tengo sueño</option>
                            <option value="1">Ligera probabilidad de tener sueño</option>
                            <option value="2">Moderada probabilidad de tener sueño</option>
                            <option value="3">Alta probabilida de tener sueño</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div style="text-align:right!important;margin-right:1em"><br><br>
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
    
    $(document).on('change', '#Item1', function() {
        Item1 = $('#Item1').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item1=" + Item1,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item2', function() {
        Item2 = $('#Item2').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item2=" + Item2,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item3', function() {
        Item3 = $('#Item3').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item3=" + Item3,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item4', function() {
        Item4 = $('#Item4').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item4=" + Item4,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item5', function() {
        Item5 = $('#Item5').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item5=" + Item5,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item6', function() {
        Item6 = $('#Item6').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item6=" + Item6,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item7', function() {
        Item7 = $('#Item7').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item7=" + Item7,
            success: function(response) {
    
            }
        })
    })
    $(document).on('change', '#Item8', function() {
        Item8 = $('#Item8').val();
        $.ajax({
            type: "post",
            url: "../formulario_somnolencia.php",
            data: "Codigo=" + '<?php echo $Codigo2 ?>' + "&Item8=" + Item8,
            success: function(response) {
    
            }
        })
    })
  
    $("#form1").submit(function(event) {
        event.preventDefault();
        
        var Item1 = $('#Item1').val();
        if(Item1 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 1.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item2 = $('#Item2').val();
        if(Item2 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 2.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item3 = $('#Item3').val();
        if(Item3 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 3.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item4 = $('#Item4').val();
        if(Item4 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 4.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item5 = $('#Item5').val();
        if(Item5 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 5.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item6 = $('#Item6').val();
        if(Item6 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 6.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item7 = $('#Item7').val();
        if(Item7 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 7.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        var Item8 = $('#Item8').val();
        if(Item8 >= '0'){}else {swal({
            title: "Alto",
            text: "Te falta seleccionar respuesta en la pregunta 8.",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
       
        if((Item1 >= '0') && (Item2 >= '0') && (Item3 >= '0') && (Item4 >= '0') && (Item5 >= '0') && (Item6 >= '0') && (Item7 >= '0') && (Item8 >= '0')) {
            window.location = "https://www.cedisalud.com.co/resultado-somnolencia?nombre=<?php echo $Codigo2 ?>"
        }
        
        

    })

</script>
</body>
</html>
                                                                   