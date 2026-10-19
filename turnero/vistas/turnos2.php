<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Turnos Cedisalud</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet">
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
    	background: #eaeaea;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size:13px;
   
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
    .load {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../imagine/carga6.gif') 50% 50% no-repeat #ffffff;
    }
    ul li {
        list-style: none;
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
    #box {
      display: flex;
      align-items: center;
      justify-content: center;
      width:100%;
      height:50em!important;
      border-radius:0;
      padding-top:2em!important;
      margin-left:3em!important;
      margin:0;
    }
    #box2 {
      display: flex;
      align-items: center;
      justify-content: center;
      width:92.5%;
      height:auto;
      border-radius:0;
      margin-right:2em!important;
      margin-left:1.7em!important;
      margin:0;
      padding:0.2em;
      font-family:arial;
      font-size:17px;
      color:#ffffff;
    }
    .gradient-border {
      --borderWidth: 8px;
      background: #eaeaea;
      position: relative;
      border-radius:0;
    }
    .gradient-border:after {
      content: '';
      position: absolute;
      top: calc(-1 * var(--borderWidth));
      left: calc(-1 * var(--borderWidth));
      height: calc(100% + var(--borderWidth) * 2);
      width: calc(100% + var(--borderWidth) * 2);
      background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
      border-radius: calc(2 * var(--borderWidth));
      z-index: -1;
      animation: animatedgradient 10s ease alternate infinite;
      background-size: 300% 300%;
      border-radius:0;
    }
    .gradient-border2 {
      --borderWidth: 8px;
      position: relative;
      border-radius:0;
    }
    .gradient-border2:after {
      content: '';
      position: absolute;
      top: calc(-1 * var(--borderWidth));
      left: calc(-1 * var(--borderWidth));
      height: calc(100% + var(--borderWidth) * 2);
      width: calc(100% + var(--borderWidth) * 2);
      background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
      border-radius: calc(2 * var(--borderWidth));
      z-index: -1;
      animation: animatedgradient 13s ease alternate infinite;
      background-size: 300% 300%;
      border-radius:0;
    }
    
    
    @keyframes animatedgradient {
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
    #contenedor-flex {
        background:transparent;
        margin-top:-8px;
    }
    #flex {
        width:100%;
        padding:0!important;
        font-size:18px;
        background:transparent;
    }
    .flexslider{
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 1em!important;
        padding:0!important;
        background:transparent;
    }
    .slides,
    .slides li,
    .slides li img,
    .slides li video {
        width: 100%;  
        z-index: 0!important;
        margin-left:-0.5em!important;
        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0);
    }
      .flex-control-nav.flex-control-paging{
        width: auto;
        height:34px;
        padding: 6px;
        align-content: center;
        align-self:center;
        list-style: none;
        position: absolute;
        bottom:1.5em;
        z-index: 0; 
        background:transparent;
        border-radius:50px!important;
        
    }
    .flex-control-nav li{
        display: inline-block;
        margin:  0 3px;
    }
    .flex-control-nav li a{
        display: block;
        width: 0px;
        height: 0px;
        background: black;    
        border-radius: 50%;
        text-indent: -9999px;
        box-shadow: inset 0px -3px 2px 0px rgba(0,0,0,0.55);
    }
    .flex-control-nav li a.flex-active{
        background: white;
    }
    .flex-direction-nav {
        z-index: 0;
        list-style: none;
    }
    /*.flex-direction-nav a.flex-next::before{
        content: "\f217";
        margin-left:-60px;
    } */   
    .flex-direction-nav .flex-prev{
        left: -15px;
        opacity: 0;
    }
    .flex-direction-nav .flex-next{
        right: -15px;
        opacity: 0;
    }
    .flexslider:hover .flex-direction-nav .flex-prev{
        opacity: 0.7;
        left: 1px;
    }
    .flexslider:hover .flex-direction-nav .flex-next{
        opacity: 0.7;
        right: 30px;
    }
     .blink_me {
      animation: blinker 1s linear infinite;
    }
    @keyframes blinker {  
      50% { opacity: 0; }
    }
    [data-title]:hover:after {
        opacity: 1;
        transition: all 0.1s ease 0.5s;
        visibility: visible;
    }
    [data-title]:after {
        content: attr(data-title);
        width:13em!important;
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
</style>    
</head>
<body>
<section id="container"><br>
<div class="row">
    <div class="col-md-5">
        <div class="gradient-border" id="box">
            <table class="table table-striped" style="width:100%"><br>
                <thead id="turnos0"></thead>
                <tbody id="turnos"></tbody>
            </table>
        </div>
    </div>
    <div class="col-md-7" style="padding-left:2em">
        <!--<div class="gradient-border2" id="box2">A todos los usuarios, les agradecemos su colaboración en el buen manejo de las medidas de bioseguridad, utilizar tapabocas cubriendo naríz y boca, conservar el distanciamiento en las sillas habilitadas, no permanecer de pie durante el tiempo que permanezca en la espera de su atención y modular el tono de la voz.  Su seguridad es importante para nosotros, recuerde no retirarse el tapabocas en ningún momento durante la atención. Muchas gracias por su comprensión. CEDISALUD les desea feliz día.</div>-->
        <div class="flexslider" style="padding-left:3em!important;padding-right:3em!important;margin-top:-0.5em!important">
            <ul class="slides responsive" id="slider">
            </ul>                        
         </div>
    </div>
</div>    
    <div style="border:0;right:2em;bottom:1em;position:fixed"><button class="fa fa-refresh" style="background:transparent;border-radius:0;font-size:23px;color:#000000;width:2em;border: 1px solid #333333 !important;" data-title="Refrescar la página"></button> <button class="fa fa-expand" style="background:transparent;border-radius:0;font-size:23px;color:#000000;width:2em;border: 1px solid #333333 !important;" data-title="Pantalla completa"></button> <!--<button class="fa fa-volume-up" style="border-radius:0;font-size:23px;color:#000000;width:2em;border: 1px solid #333333 !important;" data-title="Activar el audio"></button><button class="fa fa-volume-off" aria-hidden="true" style="border-radius:0;font-size:23px;color:#666666;width:2em;border: 1px solid #333333 !important;" data-title="Activar el audio"></button>--><br></div>
</section>	

<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script>
    $(document).on('click', '.fa-refresh', (e) => {
       location.href="../turnos_medellin";
    });
    $(document).on('click', '.fa-expand', (e) => {
       if ((document.fullScreenElement && document.fullScreenElement !== null) ||    // metodo alternativo
              (!document.mozFullScreen && !document.webkitIsFullScreen)) {               // metodos actuales
            if (document.documentElement.requestFullScreen) {
              document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
              document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
              document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
          } else {
            if (document.cancelFullScreen) {
              document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            }
          }
    });      
   /*$('.flexslider').flexslider({
        prevText: "",
        nextText: "",
        pauseOnAction: false,
        slideshowSpeed: 10000,
        touch: true
    });*/
    $(document).ready(function () {
       setInterval(function(){fetchTasks4();fetchTasks5()},1000);
        fetchTasks5();
        function fetchTasks5() {
            $.ajax({
                type: "post",
                url: "../turnos1_2.inc.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    
                    tasks.forEach(task => {
                        template += `
                            <tr style="font-family:verdanab;font-size:26px;text-align:center;color:#000000;height:5em;"><td style="vertical-align:middle!important">${task.Nombre}<br><p style="color:#666666;font-size:24px;">${task.Dependencia}</p></td></tr>`
                    });
                    $('#turnos').html(template);
                    
                }
            });
        }
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
                url: "../turnos0_2.inc.php",
                data: "fecha=" + fecha,
                success: function(response) {
                    const tasks = JSON.parse(response);
                    var cuenta1 = tasks[1];
                    let template = '';
                    let id = '';
                    let Nombre000 = '';
                    tasks.forEach(task => {
                        template += `<tr class="blink_me" style="font-family:verdanab;font-size:26px;text-align:center;color:#000000;height:5em"><td style="vertical-align: middle!important">${task.Nombre}<br><p style="color:#666666;font-size:24px;">${task.Dependencia}</p></td></tr>`
                        id += `${task.id}`
                        Nombre000 += `${task.Nombre}en${task.Dependencia}`
                    });
                    $('#turnos0').html(template);
                    
                        $.ajax({
                        type: "post",
                        url: "../eliminar_turnero2.php",
                        success: function(response) {
                            const tasks = JSON.parse(response);
                            let id2 = '';
                            let Nombre0002 = '';
                            tasks.forEach(task => {
                                 id2 += `${task.id2}`
                                 Nombre0002 += `${task.Nombre}en${task.Dependencia}`
                            });
                            if (id2 == 1) {
                            var Nombre002 = Nombre0002.toLowerCase();
                            Nombre2= Nombre002.replace(' ', '').replace(' ', '').replace(' ', '').replace(' ', '').replace(' ', '').replace(' ', '').replace(' ', '').replace('jh', 'y').replace('jhon', 'yon').replace('echavarria', 'echavarría').replace('mejia', 'mejía').replace('velez', 'vélez').replace('gonzalez', 'gonzález').replace('sepulveda', 'sepúlveda').replace('mendez', 'méndez').replace('hernandez', 'hernández').replace('leon', 'león').replace('german', 'jermán').replace('ivan', 'iván').replace('jani', 'yani').replace('suarez', 'suárez').replace('jimy', 'yimi');
                            //window.open('https://www.cedisalud.com.co/turno?id='+Nombre2, "width=1, height=1");
                            let textoAEscuchar = Nombre2;
                            let mensaje = new SpeechSynthesisUtterance();
                            mensaje.lang = 'es-ES';
                            mensaje.volume = 1;
                            mensaje.rate = 1;
                            mensaje.text = textoAEscuchar;
                            mensaje.pitch = 1;
                            speechSynthesis.speak(mensaje);
    
                            
                           }
                        }
                    })
                }
            });
        }
        fetchTasks6();
        function fetchTasks6() {
            $.ajax({
                type: "post",
                url: "../slider.inc.php",
                success: function(response) {
                    const tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task => {
                        template += `${task.Codigo}`
                    });
                    const slider = $('#slider');
                    slider.empty().html(template);
                    setTimeout(function() {
                        // Destruir instancia existente
                        if ($('.flexslider').data('flexslider')) {
                            $('.flexslider').flexslider('destroy');
                        }
                        // Reinicializar
                        $('.flexslider').flexslider({
                            animation: "fade",
                            controlNav: true,
                            directionNav: true,
                            slideshow: true,
                            slideshowSpeed: 10000,
                            start: function(slider) {
                                $('body').removeClass('loading');
                            }
                        });
                    }, 100);
                }
            });
        }
 
   });
  /*  setInterval(function(){refrescar();},3600000);
    myDate = new Date();
    año = myDate.getFullYear();
    mes = myDate.getMonth() + 1; 
    day = myDate.getDate();
    hours = myDate.getHours();
    minutes = myDate.getMinutes();
    seconds = myDate.getSeconds();
    fecha = (año+'-'+mes+'-'+day+' '+hours+':'+minutes+':'+seconds)
    function refrescar() {
        $.ajax({
            type: "post",
            url: "../refrescar_turnero.php",
            data: "fecha=" + fecha,
            success: function(response) {
                console.log(response)
                const tasks = JSON.parse(response);
                let Contador = '';
                tasks.forEach(task => {
                    Contador += `${task.Contador}`
                });
                if(Contador == '0') {
                    textoAEscuchar = 'A TODOS LOS USUARIOS LES AGRADECEMOS SU COLABORACION EN EL BUEN MANEJO DE LAS MEDIDAS DE BIOSEGURIDAD,  UTILIZAR TAPABOCAS CUBRIENDO NARIZ Y BOCA,  CONSERVAR EL DISTANCIAMIENTO EN LAS SILLAS HABILITADAS, NO PERMANECER DE PIE DURANTE EL TIEMPO QUE PERMANEZCA EN LA ESPERA DE SU ATENCION Y MODULAR EL TONO DE LA VOZ.   SU SEGURIDAD ES IMPORTANTE PARA NOSOTROS, RECUERDE NO RETIRARSE EL TAPABOCAS EN NINGUN MOMENTO DURANTE LA ATENCION.   MUCHAS GRACIAS POR SU COMPRESION, CEDISALUD LES DESEA FELIZ día';
                    let mensaje = new SpeechSynthesisUtterance();
                    mensaje.voice = speechSynthesis.getVoices()[2];
                    mensaje.volume = 1;
                    mensaje.rate = 0.9;
                    mensaje.text = textoAEscuchar;
                    mensaje.pitch = 0.1;
                    speechSynthesis.speak(mensaje);
                }
            }
        });
    }*/
</script>
</body>
</html>