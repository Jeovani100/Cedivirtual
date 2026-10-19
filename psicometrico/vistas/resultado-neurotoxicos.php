<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultado somnolencia</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    $Codigo = $_SESSION['Codigo'];
    $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $Edad = $row['Edad'];
    $Genero0 = $row['Genero'];
    if ($Genero0 == 1) {
        $Genero = 'M';
        $Etiqueta = ' del Sr. ';
    } elseif ($Genero0 == 2)  {
        $Genero = 'F';
        $Etiqueta = ' de la Sra. ';
    }
    $Estado = $row['Estado'];
    $Empresa = $row['Empresa'];
    $Sede_0 = $row['Sede'];
    if ($Sede_0 == 1) {
        $Sede = "Medellín";
    } elseif ($Sede_0 == 2) {
        $Sede = "Apartadó";
    } elseif ($Sede_0 == 3) {
        $Sede = "Otra sede";
    }
    $Cargo = $row['Cargo'];
    $Fecha0 = $row['Fecha_registro'];
    $Fecha = strtotime($Fecha0);
    $año = date("Y", $Fecha);
    $mes0 = date("m", $Fecha);
    $dia = date("d", $Fecha);
    $hora = date("H:i:s", $Fecha);
    $Sede0 = $row['Sede'];
    
    switch ($mes0) {
    case '01':
        $mes ="Enero";
        break;
    case '02':
        $mes ="Febrero";
        break;
    case '03':
        $mes ="Marzo";
        break;
    case '04':
        $mes ="Abril";
        break;
    case '05':
        $mes ="mayo";
        break;
    case '06':
        $mes ="Junio";
        break;
    case '07':
        $mes ="Julio";
        break;
    case '08':
        $mes ="Agosto";
        break;
    case '09':
        $mes ="Septiembre";
        break;
    case '10':
        $mes ="Octubre";
        break;
    case '11':
        $mes ="Noviembre";
        break;
    case '12':
        $mes ="Diciembre";
        break;
    }
    $Codigo2 = $_GET['nombre'];
    $sql = "SELECT * FROM formulario_neurotoxicos WHERE Codigo = '$Codigo2'";
    $resultado2 = $mysqli->query($sql);
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
    $Items = $row2['Items'];

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
        src: url(../fonts/helvetica.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Romanbd;
        src: url(../fonts/helveticabd.ttf);
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
    .loader2 {
        opacity:0.3;
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
    tbody td {
        text-align:center;
        height:12px;
    }
    .ventana_flotante {
        box-shadow: 0px 4px 10px 0px rgba(0,0,0,8);
        background-color: #ffffff;
        margin-bottom:30px;
        padding:1em;
    }
    .container-fluid li a:link, .container-fluid li a:visited {
        color: #000000!important;
        background-color:transparent!important;
    }
    .container-fluid li a:hover, .container-fluid li a:active {
        color: #333333!important;
    } 
    input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .checkbox label {
        display: inline-block;
        position: relative;
        float:center!important;
        margin-left:24px!important;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#6fc0b2;
        box-shadow:0px 4px 3px rgba(0,0,0,.1);
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 15px;
        height: 15px;
        left: 0;
        margin-left: -20px;
        background-color:#b3c7cc;            
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: -19px;
        top: -6px;
        font-size: 11px;
    }
    #rotar {
        position:relative;
        -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
        -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
        -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
        filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
        -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
    }
    td select,
    td input {
        font-size:18px;
        border-radius:0;
        border-color:#006699;
        text-align:center;
        width:3em;
        height:3em;
        margin-top:0.8em!important;
    }
    #boton {
        width: 270px;
        height: 45px;
        font-size:22px;
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
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    .toggle-custom {
        background:transparent!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
    }
    
    .table {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
    }
    .table th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .table td {
        text-align:center;
        padding:1em;
        border:1px solid #71788e;
        vertical-align:middle!important;
    }
        
    #cognitivo {
        margin-top:-54em;
        margin-left:25.5%;
    }
    #fisiologico {
        margin-top:-54em;
        margin-left:39.6%;
    }
    #motriz {
        margin-top:-54em;
        margin-left:54.2%;
    }
    #total {
        margin-top:-54em;
        margin-left:68.5%;
    } 
     .ctn-preloader {
    	align-items: center;
        cursor: none;
    	display: flex;
        height: 100%;
        justify-content: center;
    	position: fixed;
    	left: 0;
        top: 6em;
    	width: 100%;
        z-index: 900;
    }
    .ctn-preloader .animation-preloader {
    	position: absolute;
        z-index: 100;
    }
    .ctn-preloader .animation-preloader .txt-loading {
        font-size:2em;
        font-family:verdanab;
    	text-align: center;
    	user-select: none;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:before {
        animation: letters-loading 4s infinite;
        color: #000;
        content: attr(data-text-preloader);
        left: 0;
        opacity: 0;
        position: absolute;
        transform: rotateY(-90deg);
        margin-top:1px;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading {
    	color: rgba(0, 0, 0, 0.2);
    	position: relative;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(2):before {
      animation-delay: 0.2s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(3):before {
      animation-delay: 0.4s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(4):before {
      animation-delay: 0.6s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(5):before {
      animation-delay: 0.8s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(6):before {
      animation-delay: 1s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(7):before {
      animation-delay: 1.2s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(8):before {
      animation-delay: 1.4s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(9):before {
      animation-delay: 1.6s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(10):before {
      animation-delay: 1.8s;
    }
    .ctn-preloader .animation-preloader .txt-loading .letters-loading:nth-child(11):before {
      animation-delay: 1.8s;
    }
    .ctn-preloader .loader-section {
        height: 100%;
        position: fixed;
        top: 0;
        width: calc(50% + 1px);
    }
    .ctn-preloader .loader-section.section-left {
      left: 0;
    }
    .ctn-preloader .loader-section.section-right {
      right: 0;
    }
    .loaded .animation-preloader {
      opacity: 0;
      transition: 0.3s ease-out;
    }
    .loaded .loader-section.section-left {
      transform: translateX(-101%);
      transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
    }
    .loaded .loader-section.section-right {
      transform: translateX(101%);
      transition: 0.7s 0.3s all cubic-bezier(0.1, 0.1, 0.1, 1.000);
    }
    @keyframes letters-loading {
      0%,
      75%,
      100% {
      	 opacity: 0;
         transform: rotateY(-90deg);
      }
      25%,
      50% {
         opacity: 1;
         transform: rotateY(0deg);
      }
    }
    @media screen and (max-width: 767px) {
    	.ctn-preloader .animation-preloader .txt-loading {
    	  font: bold 3.5em 'verdanab', sans-serif;
    	}
    }
    @media screen and (max-width: 500px) {
    	.ctn-preloader .animation-preloader .txt-loading {
    	  font: bold 2em 'verdanab', sans-serif;
    	}
    } 
    
</style> 
</head> 
<body>
<div class="loader no-scroll-y">
	<section>
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="animation-preloader">
                <div class="prelogo">
                </div>
					<div class="txt-loading">
						<span data-text-preloader="C" class="letters-loading">C</span>
						<span data-text-preloader="R" class="letters-loading">R</span>
						<span data-text-preloader="E" class="letters-loading">E</span>
						<span data-text-preloader="A" class="letters-loading">A</span>
						<span data-text-preloader="N" class="letters-loading">N</span>
						<span data-text-preloader="D" class="letters-loading">D</span>
						<span data-text-preloader="O" class="letters-loading">O</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span data-text-preloader="." class="letters-loading">.</span>
						<span style="font-family:verdana;font-size:32px;color:#f58634">  PDF</span>
					</div>
				</div>	
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		</div>
	</section>
</div>
<div class="container-fluid loader2" style="background-color:#f1f3f3;font-size:16px;font-family:Moriston;z-index:-1">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#">
                <?php echo ' ' . $Nombre; ?>
            </a>
        </li>                           
        <li>
            <a href=<?php echo RUTA_LOGOUT_TEST ?>>
                <i class="fa fa-share-square-o" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
</div>
<div class="container-fluid loader2" style="padding:0">
    <div class="col-md-12" style="padding:2em"><br><br>
            <p style="color:#5a115b;font-family:MyriadProB;letter-spacing:2px;font-size:30px;text-align:center">ENCUESTA DE SÍNTOMAS NEUROTÓXICOS Q16</p>
            <div class="col-md-6 col-md-offset-3"><br>
                <table style="border:1px solid #71788e!important;padding:0!important;width:100%">
                    <tr style="padding:0important">
                        <td style="padding:0important">
                            <div id="grafica" style="padding:0important"></div>
                        </td>
                    </tr>
                </table>
            </div><br><br>
    </div>
</div>
<div id="grafica2" style="display: none"></div>
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
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
            var o = $(this).attr("data-easein");
            "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $(document).ready(function (){
        //$(".loader").fadeOut("slow");
    });
    
    var input = [<?php echo $Items ?>],
    data = [],
    categories = [];
    $.each(input, function(index, value){
    var color;
    if (value <= 6) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#00ff01'],[1, '#03ca04']]};
    else if (value >= 7 && value <= 8) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fffb1a'],[1, '#eae616']]};
    else if (value >= 9 && value <= 24) color = {radialGradient: { cx: 0.5, cy: 0.5, r: 0.5 },stops: [[0, '#fa0e0e'],[1, '#d60d0d']]};
    data.push({y:value, color: color, url:"https://www.perfilar.com.co"});
    });
    
    Highcharts.chart('grafica', {
    chart: {
    type: 'bar',
    backgroundColor: false,
    height:100,
    padding:0,

    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
        categories: [''],
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:16, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
    });
  
    Highcharts.chart('grafica2', {
    chart: {
    type: 'bar',
    height:200,
    width:200,
    padding:0,
    margin:0
    },
    title: {
            text: ''
    },
    xAxis: {
        title: {
            text: ''
        },
        categories: [''],
    },
    yAxis: {
        title: {
            text: ''
        },
        min:0, minRange:24, maxPadding:0, 
        gridLineWidth: 0, minorGridLineWidth: 0
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
        stacking: 'normal'
        }
    },
    tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color};font-size:20px">\u25CF</span> <b> {point.name}</b>' + ' <b> {point.y}%</b><br/>'
            },
    series: [{
        data: data
        }]
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

    var Item = '<?php echo $Items ?>';
    var texto = '';
    if(Item <= 6) {
        var texto = 'RIESGO BAJO'; 
    }
    if(Item >= 7 && Item <= 8) {
        var texto = 'RIESGO MODERADO';
    }
    if(Item >= 9 && Item <= 24) {
        var texto = 'ALTO RIESGO';
    }

    var doc = new jsPDF('p', 'pt', 'letter');
    
    var img = new Image();
    img.src = '../imagine/logo_v3.jpg';
    doc.addImage(img, 'png', 200, 300, 200, 200);
    
    doc.setFont("helvetica");
    doc.setFontSize(16);
    doc.setFontType("bold");
    doc.setTextColor(90, 17, 91);
    doc.myText('ENCUESTA DE SÍNTOMAS NEUROTÓXICOS Q16',{align: "center"},0,90);
    
    var columns = ['', '','','','',''];
    var data = [['Nombre y Apellidos:','<?php echo $Nombre ?>','Edad:','<?php echo $Edad ?> años','Sexo:','<?php echo $Genero ?>']];
    doc.autoTable(columns,data, {margin:{ top: 125, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor: [255,255,255]}, 
    columnStyles: {0: {columnWidth: 115}, 1: {fontStyle:'normal',columnWidth: 269, fillColor: [239, 237, 247]}, 2: {columnWidth: 40}, 3: {fontStyle:'normal',columnWidth: 58, fillColor: [239, 237, 247]}, 4: {columnWidth: 40}, 5: {fontStyle:'normal',columnWidth: 18, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:9, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    var columns = ['', '','','','',''];
    var data = [['Estado civil:','<?php echo $Estado ?>','Empresa:','<?php echo $Empresa.' - '.$Sede ?>','Cargo:','<?php echo $Cargo ?>']];
    doc.autoTable(columns,data, {margin:{ top: 145, left:40 },  
    styles: {font: 'helvetica', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'left', textColor:[51,51,51], lineWidth:0, lineColor:false, fillColor:false}, 
    columnStyles: {0: {columnWidth: 70}, 1: {fontStyle:'normal',columnWidth: 80, fillColor: [239, 237, 247]}, 2: {columnWidth: 55}, 3: {fontStyle:'normal',columnWidth: 145, fillColor: [239, 237, 247]}, 4: {columnWidth: 45}, 5: {fontStyle:'normal',columnWidth: 145, fillColor: [239, 237, 247]}},
    bodyStyles:{textColor:[0,0,0], fontSize:9, font: 'helvetica', fontStyle:'bold', halign: 'left', valign:'middle', lineColor:[0,0,0], lineWidth:0.5, fillColor:false} });
    doc.setFont("helvetica");
    doc.setFontSize(12);
    doc.setFontType("normal");
    doc.setTextColor(102, 102, 102);
    doc.myText('PERFIL DEL EVALUADO',{align: "center"},0,130);
    doc.myText('RESULTADO',{align: "center"},0,220);
    doc.myText('VALORACIÓN PSICOLÓGICA',{align: "center"},0,310);
    var img = new Image()
    var imageData = $('#grafica2').highcharts().createCanvas();
    doc.addImage(imageData,'PNG', 200, 235, 330, 35);
    var columns = [''];
    var data = [['']];
    doc.autoTable(columns,data, {margin:{ top: 210, left: 190 },  
    styles: {font: 'times', fontStyle:'bold', fontSize:10, overflow: 'linebreak', overflowColumns: 'linebreak', halign: 'center', valign:'middle', textColor:[255,255,255], lineWidth:0, lineColor:false, fillColor: false}, 
    drawRow:function(row,data) {row.height = 50;},
    columnStyles: {0: {columnWidth: 240, lineWidth:0.5, lineColor:[79, 84, 99]}},
    bodyStyles:{textColor:[0,0,0], fontSize:10, font: 'times', fontStyle:'normal', halign: 'center', lineColor:[0,0,0], lineWidth:1, fillColor:false}});
    doc.setFontSize(8);
    doc.setFont("helvetica");
    doc.setTextColor(102, 102, 102);
    doc.text(200, 274, "0    1    2    3    4    5    6    7    8    9   10  11  12   13  14  15  16", {maxWidth: 460,align:'justify', lineHeightFactor: 1.5});
    
    if(Item <= 5) {
    doc.setFont("helvetica");
    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0);
    doc.setFontType("bold");
    doc.myText('RIESGO BAJO',{align: "center"},0,340);
    doc.setFontSize(10);
    doc.text(40,365, "No se evidencia síntomas neurotóxicos significativos en este momento.  El riesgo de afectación neurotóxica se considera bajo; lo cual significa que, en este momento, es poco problable si se presenta algún síntomas, estén relacionados con la exposición a sustancias neurotóxicas.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    }
    if(Item >= 6 && Item <= 10) {
    doc.setFont("helvetica");
    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0);
    doc.setFontType("bold");
    doc.myText('RIESGO MODERADO',{align: "center"},0,340);
    doc.setFontSize(10);
    doc.text(40,365, "Sugieren una posible afectación neurotóxica leve, principalmente en el área de la memoria y la concentración.  Sería recomendable consultar con un médico para una evaluación más exhaustiva y descartar otras posibles causas, realizar rotación en área de trabajo con menor exposición a bencenos y otros aromáticos, revisar condiciones ambientales como intercambio de aire en zonas de trabajo y uso de elementos de protección.                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    }
    if(Item >= 11) {
    doc.setFont("helvetica");
    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0);
    doc.setFontType("bold");
    doc.myText('ALTO RIESGO',{align: "center"},0,340);
    doc.setFontSize(10);
    doc.text(40,365, "Tus respuestas indican la presencia de varios síntomas neurotóxicos con una frecuencia considerable.  Es fundamental en la brevedad pra realizar exámenes complementarios, revisar condiciones ambientales en el intecambio de aire, uso de elementos de protección y realizar pruebas complementarias como: hidrocarburos cuantitativos:FENOL(Benceno); ACIDO HIPURICO(Tolueno); ACIDO METIL HIPURICO(Xileno); P-CRESOL(Complejo BTX).                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ", {maxWidth: 520,align:'justify', lineHeightFactor: 1.5});
    }

    const pageCount = doc.internal.getNumberOfPages();
    for(var i = 1; i <= pageCount; i++) {
    doc.setPage(i);
    var img = new Image();
    img.src = '../imagine/logo.jpg';
    doc.addImage(img, 'png',10,15,60,45);
    doc.setTextColor(153, 153, 153);
    doc.setFontSize(9);
    doc.text('Pág. ' + String(i) + ' de ' + String(pageCount),550,30,null,null,"left");
    doc.myText('CEDISALUD IPS -PBX (574) 444 66 04 - MEDELLIN-APARTADÓ',{align: "center"},-200,780);
    }
    
   // doc.save('sintomas_neurotoxicos.pdf'); 

    var blob = doc.output('blob');
    var fd = new FormData();
    fd.append('data', blob);
    fd.append('Codigo', '<?php echo $Codigo ?>');
    fd.append('Nombre', '<?php echo $Nombre ?>');
    fd.append('Etiqueta', '<?php echo $Etiqueta ?>');
    fd.append('Empresa', '<?php echo $Empresa ?>');
    fd.append('Cargo', '<?php echo $Cargo ?>');
    fd.append('Sede', '<?php echo $Sede ?>');
    fd.append('Sede0', '<?php echo $Sede0 ?>');
    $.ajax({
       type: 'POST',
       url: '../PHPMailer/pdf6.php',
       data: fd,
       processData: false,
       contentType: false
    }).done(function(data) {
        window.location = "inicio_test" 
    });

</script>
</body>
</html>        