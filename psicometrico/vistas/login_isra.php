<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ISRA Inicio</title>
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
if (isset($_GET["nombre"])) {
    $Codigo = $_GET["nombre"];
    controlsesion5::iniciar_sesion($Codigo);
    redireccion::redirigir(RUTA_ISRA);
}
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
    body {
        color: #797979;
        font-family:Verdana;
        line-height:3rem!important;
        padding: 0px !important;
        margin-top: 0px !important;
        text-rendering: optimizeLegibility; 
        overflow-x:hidden; 
        background: url('../imagine/ansiedad4.jpg') 50% 0% no-repeat #ffffff;
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
        width: 30px;
        height: 30px;
        background-color:transparent;
        border:1px solid #333333;
        text-align:center;
        margin-top:-10px;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:40px!important;
        color:#f58634;
         margin-top:-10px;
    }
    .radio input[type="radio"]:checked + label::after {
        position: absolute;
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 500px!important;
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
 <div class="container-fluid" align="center"><br><br>
        <p style="color:#a69dc8;font-family:MyriadProB;letter-spacing:2px;font-size:100px;text-shadow: 0.1em 0.1em 0.05em #333;text-align:center">ISRA</p>
        <div class="panel panel-body" style="width:30em;border:0;background:transparent!important;">
            <form name="form2" id="form2">
            <input type="hidden" name="Codigo" id="Codigo" value="<?php echo $Codigo ?>"></input>
            <div style="padding-left:1em; padding-right:1em">
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Nombre y apellidos:
                    <input type="text" name="Nombre" id="Nombre" class="form-control" style="font-family:verdanab;background:transparent" placeholder=""></input></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Edad (años):
                    <select type="text" class="form-control" name="Edad" id="Edad">
                        <option></option> 
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
                        <option>41</option>
                        <option>42</option>
                        <option>43</option>
                        <option>44</option>
                        <option>45</option>
                        <option>46</option>
                        <option>47</option>
                        <option>48</option>
                        <option>49</option>
                        <option>50</option>
                        <option>51</option>
                        <option>52</option>
                        <option>53</option>
                        <option>54</option>
                        <option>55</option>
                        <option>56</option>
                        <option>57</option>
                        <option>58</option>
                        <option>59</option>
                        <option>60</option>
                        <option>61</option>
                        <option>62</option>
                        <option>63</option>
                        <option>64</option>
                        <option>65</option>
                        <option>66</option>
                        <option>67</option>
                        <option>68</option>
                        <option>69</option>
                        <option>70</option>
                        <option>71</option>
                        <option>72</option>
                        <option>73</option>
                        <option>74</option>
                        <option>75</option>
                        <option>76</option>
                        <option>77</option>
                        <option>78</option>
                        <option>79</option>
                        <option>80</option>
                        <option>81</option>
                        <option>82</option>
                        <option>83</option>
                        <option>84</option>
                        <option>85</option>
                        <option>86</option>
                        <option>87</option>
                        <option>88</option>
                        <option>89</option>
                        <option>90</option>
                    </select></p>
                </div>
                 <div><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Genero:</p>
                    <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
                    <input type="radio" name="Genero" class="Genero" id="Genero_c" value="1"/>&nbspMasculino&nbsp<label id="check1" for="Genero_c"></label>
                    <input type="radio" name="Genero" class="Genero" id="Genero_d" value="2"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemenino&nbsp<label id="check1" for="Genero_d"></label>
                    <input type="hidden" class="Genero" value="3" checked/>
                </p> 
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Estado civil:
                      <select type="text" class="form-control" style="padding-left:6px" name="Estado" id="Estado">
                        <option></option>         
                        <option>Soltero(a)</option>
                        <option>Casado(a)</option>
                        <option>Unión Libre</option> 
                        <option>Separado(a)</option> 
                        <option>Divorciado(a)</option> 
                        <option>Viudo(a)</option> 
                    </select></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Empresa:
                    <input type="text" name="Empresa" id="Empresa" class="form-control" style="font-family:verdanab;background:transparent" placeholder=""></input></p>
                </div>
                 <div><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Sede:</p>
                    <p class="radio" id="" style="color:#000000;font-size:18px;font-family:verdanab;text-align:left;">
                    <input type="radio" name="Sede" class="Sede" id="Sede_c" value="1"/>&nbspMedellín&nbsp<label id="check1" for="Sede_c"></label>
                    <input type="radio" name="Sede" class="Sede" id="Sede_d" value="2"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspApartadó&nbsp<label id="check1" for="Sede_d"></label>
                    <input type="hidden" class="Sede" value="3" checked/>
                </p> 
                </div>   
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:20px;font-family:MyriadPro;letter-spacing:3px">Cargo:
                    <input type="text" name="Cargo" id="Cargo" class="form-control" style="font-family:verdanab;background:transparent" placeholder=""></input></p>
                </div>
                <div id="login"><br>
                    <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="width:100%">Inicio</button>
                </div>
            </div>
            </form>
        </div>
        <div style="text-align:center;z-index:9999!important"><a href="https://www.cedisalud.com"><img src="../imagine/logo_v.png" width="200"></a></div>
        <div>
            <span style="font-family:verdana;color:#333333!important">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href='https://www.perfilar.net/' style="font-family:verdanab;letter-spacing:2px;font-size:15px;color:#3e555b">PERFILAR</a></span><br> 
            <span style="font-family:verdana;color:#333333!important">Copyright © 2020 - Medellín (Colombia)</span>
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
    $(document).ready(function (){
        $(".loader").fadeOut("slow");
    });
    function Radio_Value(ctrl) {
        for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
    }
    $("#form2").submit(function(event) {
        event.preventDefault();
        Nombre= $('#Nombre').val();
        Edad= $('#Edad').val();
        Genero = parseInt(Radio_Value(document.getElementsByClassName('Genero')));
        Estado= $('#Estado').val();
        Empresa= $('#Empresa').val();
        Sede = parseInt(Radio_Value(document.getElementsByClassName('Sede')));
        Cargo= $('#Cargo').val();
        
        if(Nombre != '' ){}else {swal({
            title: "Escriba su nombre",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Edad != '' ){}else {swal({
            title: "Escriba su edad",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if (Genero != 3 ) {}else {swal({
            title: "Seleccione su género",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Estado != '' ){}else {swal({
            title: "Seleccione su estado civil",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Empresa != '' ){}else {swal({
            title: "Escriba la empresa en la que trabaja",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if (Sede != 3 ) {}else {swal({
            title: "Seleccione una sede",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Cargo != '' ){}else {swal({
            title: "Escriba el cargo que ocupa",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if ((Nombre != '') && (Edad != '') && (Genero != 3) && (Estado != '') && (Empresa != '') && (Sede != 3) && (Cargo != '')) {
             $.ajax({
                type: "post",
                url: "../insertar_isra.php",
                data: "Nombre=" + Nombre + "&Edad=" + Edad+ "&Genero=" + Genero+ "&Estado=" + Estado+ "&Empresa=" + Empresa+ "&Sede=" + Sede+ "&Cargo=" + Cargo,
                success: function (response) {
                const tasks = JSON.parse(response);
                    if (tasks) {
                         location.href="../login-isra?nombre="+tasks;
                    }
                },   
            });
        }
    })  
</script>
</body>
</html>
                                                                   