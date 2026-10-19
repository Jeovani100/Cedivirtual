<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio - Test psicológico</title>
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
    //error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion5.inc.php';
    include_once 'app/redireccion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    function generarCodigoAleatorio($longitud = 6) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Codigo2 = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Codigo2 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Codigo2;
    }
    $Codigo2 = generarCodigoAleatorio(6);
    $test = '';
    if (isset($_GET["nombre"])) {
        $Codigo = $_GET["nombre"];
        controlsesion5::iniciar_sesion($Codigo);
        $test = 1;
    }
    if (isset($_GET["id"])) {
        $Codigo = $_GET["id"];
        controlsesion5::iniciar_sesion($Codigo);
        $test = 2;
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
        border-radius: 19px!important;
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
        border-radius:19px;
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
        margin-top:0px;
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
        height: 35px;
        font-family:MyriadPro;
        font-size:16px;
        color:#333333;
        letter-spacing:0.5px!important;
        padding-left:14px;
        margin:0!important;
        background:transparent;
        border-radius:16px;
        border:3px solid #6d4660!important;
        box-shadow:0px 4px 3px rgba(0,0,0,.5);
        border-image-slice: 1;
    }
     #login select {
        width: 100%;
        height: 35px;
        font-family:MyriadPro;
        font-size:16px;
        color:#333333;
        letter-spacing:0.5px!important;
        padding-left:14px;
        margin:0!important;
        background:transparent;
        border-radius:16px;
        border:3px solid #6d4660!important;
        box-shadow:0px 4px 3px rgba(0,0,0,.5);
        border-image-slice: 1;
    }
     #titulo2 {
        position:fixed;
        width:100%!important;
        height:1.5em!important;
        background: -webkit-linear-gradient(to right,#a57396, #3e2837);  
        background: linear-gradient(to right,#a57396, #3e2837);
        color:#ffffff;
        font-family:moriston;
        font-size:24px;
        bottom:0!important;
        padding:0.2em;
        margin:0;
        letter-spacing:1px;
        text-align:center;
    }
</style>      
</head> 
<body>
 <div class="container-fluid" align="center"><br>
     <p style="text-align:center;font-family:Moristonb;font-size:20px;color:#6d4660">REGISTRO DE USUARIOS</p>
    <div class="panel panel-body" style="width:30em;border:0;background:transparent!important;"><br>
        <div class="row">
            <table style="width:100%">
                <tr>
                    <!--<td style="text-align:center"><a href="#" onclick="funcion_core()"><img src="../imagine/Core2.png" width="130" height="130"></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>-->
                    <td style="text-align:center"><a href="#" onclick="funcion_cedi()"><img src="../imagine/Cedi5.png" width="130"></td>
                </tr>
            </table>
        </div>    
        <p id="text" style="font-family:MyriadPro;font-size:20px;color:#000000;text-align:center;padding:1em;letter-spacing:1px!important">Por favor, de clic en una de las imágenes para iniciar</p>
        <div id="form1"><br> 
            <p style="color:#000000;font-size:30px;font-family:Raleway;letter-spacing:1px;text-align:center">Cedisalud</p>
            <form name="form1" id="form1">
            <input type="hidden" name="Codigo" id="Codigo" value=""></input>
            <div style="padding-left:1em; padding-right:1em">
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Documento de identidad:
                    <input type="text" name="Cedula" id="Cedula" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder="" pattern="[0123456789]{6,15}"></input></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Tipo de documento:</p>
                    <select type="text" id="Tipo" required style="border:3px solid #6d4660!important">
                        <option>Seleccione...</option>
                        <option>MS</option>
                        <option>RC</option>
                        <option>TI</option>
                        <option>CC</option>
                        <option>CE</option>
                        <option>PEP</option>
                        <option>PA</option>
                        <option>AS</option>
                        <option>OTRO</option>
                    </select>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Nombre y apellidos:
                    <input type="text" name="Nombre" id="Nombre" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder=""></input></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Edad (años):
                    <select type="text" class="form-control" name="Edad" id="Edad" style="font-family:MyriadPro;background:transparent">
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
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Genero:</p>
                    <p class="radio" id="" style="color:#000000;font-size:16px;font-family:verdanab;text-align:left;">
                    <input type="radio" name="Genero" class="Genero" id="Genero_c" value="1"/>&nbspMasculino&nbsp<label id="check1" for="Genero_c"></label>
                    <input type="radio" name="Genero" class="Genero" id="Genero_d" value="2"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemenino&nbsp<label id="check1" for="Genero_d"></label>
                    <input type="hidden" class="Genero" value="3" checked/>
                </p> 
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Estado civil:
                      <select type="text" class="form-control" style="padding-left:6px" name="Estado" id="Estado" style="font-family:MyriadPro;background:transparent">
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
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Empresa:
                    <input type="text" name="Empresa" id="Empresa" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder=""></input></p>
                </div>
                <div><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Sede:</p>
                    <table style="width:100%">
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdanab;text-align:left">
                            <td style="width:7em">Medellín</td>
                            <td><input type="radio" name="Sede" class="Sede" id="Sede_a" value="1"/><label id="check1" for="Sede_a"></label></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdanab;text-align:left">
                            <td style="width:7em">Apartadó</td>
                            <td><input type="radio" name="Sede" class="Sede" id="Sede_b" value="2"/><label id="check1" for="Sede_b"></label></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdanab;text-align:left">
                            <td style="width:7em">Otras</td>
                            <td><input type="radio" name="Sede" class="Sede" id="Sede_c" value="3"/><label id="check1" for="Sede_c"></label></td>
                        </tr>
                    </table>
                    <input type="hidden" class="Sede" value="0" checked/>
                </p> 
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Cargo:
                    <input type="text" name="Cargo" id="Cargo" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder=""></input></p>
                </div>
                <div id="login"><br>
                    <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="width:100%">Inicio</button>
                </div>
            </div>
            </form>
        </div>       
            
        <div id="form2"><br> 
            <p style="color:#000000;font-size:30px;font-family:Raleway;letter-spacing:1px;text-align:center">Core</p>
            <form name="form2" id="form2">
            <input type="hidden" name="Codigo2" id="Codigo2" value=""></input>
            <div style="padding-left:1em; padding-right:1em">
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Tipo de documento:</p>
                    <select type="text" id="Tipo2" required style="border:3px solid #6d4660!important">
                        <option>Seleccione...</option>
                        <option>MS</option>
                        <option>RC</option>
                        <option>TI</option>
                        <option>CC</option>
                        <option>CE</option>
                        <option>PEP</option>
                        <option>PA</option>
                        <option>AS</option>
                        <option>OTRO</option>
                    </select>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Documento de identidad:
                    <input type="text" name="Cedula2" id="Cedula2" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder="" pattern="[0123456789]{6,15}"></input></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Nombre y apellidos:
                    <input type="text" name="Nombre2" id="Nombre2" class="form-control" style="font-family:MyriadPro;background:transparent" placeholder=""></input></p>
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Edad (años):
                    <select type="text" class="form-control" name="Edad2" id="Edad2" style="font-family:MyriadPro;background:transparent">
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
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Genero:</p>
                    <p class="radio" id="" style="color:#000000;font-size:16px;font-family:verdanab;text-align:left;">
                    <input type="radio" name="Genero2" class="Genero2" id="Genero_e" value="1"/>&nbspMasculino&nbsp<label id="check1" for="Genero_e"></label>
                    <input type="radio" name="Genero2" class="Genero2" id="Genero_f" value="2"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemenino&nbsp<label id="check1" for="Genero_f"></label>
                    <input type="hidden" class="Genero2" value="3" checked/>
                </p> 
                </div>
                <div id="login"><br>
                    <p align="left" style="color:#000000;font-size:18px;font-family:MyriadPro;letter-spacing:2px">Estado civil:
                      <select type="text" class="form-control" style="padding-left:6px" name="Estado2" id="Estado2" style="font-family:MyriadPro;background:transparent">
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
                    <button id="boton" type="submit" name="login" class="btn btn btn-default btn-block" style="width:100%">Inicio</button>
                </div>
            </div>
            </form>
        </div>       
    </div><br><br>         
</div>
<div class="row" id="titulo2">Cedisalud <span style="font-family:moristonb">IPS</span></div>
</form>
<div id="costumModal1" class="modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-m" align="justify" style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center">
           <p style="font-family:MyriadProb;font-size:20px;color:#6d4660!important;letter-spacing:1px">El usuario con el número de cédula <?php echo $Cedula ?> ya se encuentra registrado. <br>Será redireccionado para completar los datos.</p>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div> 
<div id="costumModal2" class="modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-m" align="justify" style="border-radius:0px;background-color:#ffffff">
       <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="costum1"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center">
           <p style="font-family:MyriadProb;font-size:20px;color:#6d4660!important;letter-spacing:1px">El usuario con el número de cédula <?php echo $Cedula ?> ya se encuentra registrado(a) con Historia Clínica y Cuestionario PAR-Q.</p>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div> 
 <div id="costumModal3" class="modal" data-easein="slideRightIn" align="center">  
    <div class="modal-dialog modal-m" style="z-index:9999!important" >
        <div class="modal-content" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">            
                <button type="button" class="close" data-dismiss="modal"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="modal-body" align="center" style="padding:3em">
                    <p align="left" style="color:#6d4660;font-size:20px;font-family:verdanab;letter-spacing:1px;text-align:left">Por favor, seleccione la prueba a realizar</p>
                    <table class="table2" style="width:100%">
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I1" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">1. </span><img src="../imagine/test5.png" width="100" />&nbsp&nbspTamíz Psicológico</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I2" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">2. </span><img src="../imagine/test1.png" width="100" />&nbsp&nbspInventario de Ansiedad ISRA</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I3" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">3. </span><img src="../imagine/test2.png" width="100" />&nbsp&nbspTest de Personalidad de Eysenck</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I4" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">4. </span><img src="../imagine/test3.png" width="100" />&nbsp&nbspEvaluación de la somnolencia Epworth</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I5" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">5. </span><img src="../imagine/test4.png" width="100" />&nbsp&nbspEncuesta síntomas neurotoxicos Q16</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I6" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">6. </span><img src="../imagine/test5.png" width="100" />&nbsp&nbspTest de fobia a la electricidad</button></td>
                        </tr>
                        <tr class="radio" id="" style="color:#000000;font-size:16px;font-family:verdana;text-align:left">
                            <td><button id="I7" style="background:transparent;border:0"><span style="font-family:Moristonb;color:#6d4660;font-size:22px">7. </span><img src="../imagine/test1.png" width="100" />&nbsp&nbspStop-Bang</button></td>
                        </tr>
                    </table>
            </div> 
            <div class="modal-footer">
                <br>
            </div>
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
    $(document).ready(function (){
        $("#text").fadeIn();
        $(".loader").fadeOut("slow");
        $('#Codigo').val('<?php echo $Codigo2 ?>');
        $("#form1").fadeOut();
        $("#form2").fadeOut();
    });
    function Radio_Value(ctrl) {
        for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
    }
    if('<?php echo $test ?>' == 1) {
        $("#costumModal3").modal("show")
    }
    if('<?php echo $test ?>' == 2) {
        $("#costumModal3").modal("show");
        location.href="../practica_pilates?nombre=<?php echo $Codigo2 ?>";
    }
    document.getElementById('I1').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../tamiz?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I2').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../isra?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I3').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../eysenck?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I4').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../somnolencia?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I5').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../neurotoxicos?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I6').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../fobia_electricidad?nombre=<?php echo $Codigo ?>`;
    });
    document.getElementById('I7').addEventListener('click', function(e) {
    e.preventDefault();
    const codigo = document.getElementById('Codigo').value;
    window.location.href = `../stop_bang?nombre=<?php echo $Codigo ?>`;
    });
    function funcion_cedi() {
        $("#form1").fadeIn();
        $("#form2").fadeOut();
        $("#text").fadeOut();
    }
    function funcion_core() {
        $("#form1").fadeOut();
        $("#form2").fadeIn();
        $("#text").fadeOut();
    }
    $("#form1").submit(function(event) {
        event.preventDefault();
        var Codigo = '<?php echo $Codigo2 ?>';
        var Nombre= $('#Nombre').val();
        var Tipo= $('#Tipo').val();
        var Cedula= $('#Cedula').val();
        var Edad= $('#Edad').val();
        var Genero = parseInt(Radio_Value(document.getElementsByClassName('Genero')));
        var Estado= $('#Estado').val();
        var Empresa= $('#Empresa').val();
        var Sede = parseInt(Radio_Value(document.getElementsByClassName('Sede')));
        var Cargo= $('#Cargo').val();
        if(Nombre != '' ){}else {swal({
            title: "Escriba su nombre",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Cedula != '' ){}else {swal({
            title: "Escriba su número de cedula sin punto",
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
        if ((Nombre != '') && (Edad != '') && (Genero != 3) && (Estado != '') && (Empresa != '') && (Sede != 0) && (Cargo != '')) {
             $.ajax({
                type: "post",
                url: "../insertar_test.php",
                data: "Nombre=" + Nombre + "&Codigo=" + Codigo + "&Cedula=" + Cedula + "&Tipo=" + Tipo+ "&Edad=" + Edad+ "&Genero=" + Genero+ "&Estado=" + Estado+ "&Empresa=" + Empresa+ "&Sede=" + Sede+ "&Cargo=" + Cargo,
                success: function (response) {
                    console.log(response)
                    location.href="../inicio_test?nombre="+Codigo;
                },   
            });
        }
    })  
    $("#form2").submit(function(event) {
        event.preventDefault();
        var Codigo = '<?php echo $Codigo2 ?>';
        var Nombre= $('#Nombre2').val();
        var Tipo= $('#Tipo2').val();
        var Cedula= $('#Cedula2').val();
        var Edad= $('#Edad2').val();
        var Genero = parseInt(Radio_Value(document.getElementsByClassName('Genero2')));
        var Estado= $('#Estado2').val();
        var Empresa= 'NA';
        var Sede = 1;
        var Cargo= 'NA';
        if(Nombre != '' ){}else {swal({
            title: "Escriba su nombre",
            type: "warning",
            confirmButtonColor: '#006699',
            confirmButtonText: 'Cerrar',
        });}
        if(Cedula != '' ){}else {swal({
            title: "Escriba su número de cedula sin punto",
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
        if ((Nombre != '') && (Edad != '') && (Genero != 3) && (Estado != '') && (Empresa != '') && (Sede != 0) && (Cargo != '')) {
             $.ajax({
                type: "post",
                url: "../insertar_test.php",
                data: "Nombre=" + Nombre + "&Codigo=" + Codigo + "&Cedula=" + Cedula + "&Tipo=" + Tipo+ "&Edad=" + Edad+ "&Genero=" + Genero+ "&Estado=" + Estado+ "&Empresa=" + Empresa+ "&Sede=" + Sede+ "&Cargo=" + Cargo,
                success: function (response) {
                    location.href="../inicio_test?id="+Codigo;
                },   
            });
        }
    })  
    // Versión compatible con tablets Android
    $(document).on('input', '#Cedula', debounce(function() {
        var cedula = $(this).val().trim();
        var defaultCodigo = '<?php echo $Codigo2 ?>';
        if (!cedula || cedula.length < 1) {
            resetFormFields(defaultCodigo);
            return;
        }
        $.ajax({
            type: "POST",
            url: "../search19.php",
            data: { Cedula: cedula },
            dataType: 'json',
            success: function(tasks) {
                if (tasks && tasks.length > 0) {
                    fillFormFields(tasks[0], defaultCodigo);
                } else {
                    resetFormFields(defaultCodigo);
                }
            },
            error: function(xhr, status, error) {
                console.error("Error en la búsqueda:", error);
                resetFormFields(defaultCodigo);
            }
        });
    }, 500));
    // Función para llenar los campos del formulario
    function fillFormFields(task, defaultCodigo) {
        // Campos básicos
        $('#Codigo').val(task.Codigo || defaultCodigo);
        $('#Tipo').val(task.Tipo || '');
        $('#Nombre').val(task.Nombre || '');
        $('#Edad').val(task.Edad || '');
        $('#Estado').val(task.Estado || '');
        $('#Empresa').val(task.Empresa || '');
        $('#Cargo').val(task.Cargo || '');
        // Radio buttons (compatible con tablets)
        if (task.Genero) {
            $('[name="Genero"][value="' + task.Genero + '"]').prop('checked', true);
            $('[name="Genero2"][value="' + task.Genero + '"]').prop('checked', true);
        }
        // Sede (compatible con tablets)
        if (task.Sede) {
            $('[name="Sede"][value="' + task.Sede + '"]').prop('checked', true);
        }
    }
    // Función para resetear campos
    function resetFormFields(defaultCodigo) {
        // Lista de campos a resetear
        var fields = ['Tipo', 'Nombre', 'Edad', 'Estado', 'Empresa', 'Cargo'];
        $('#Codigo').val(defaultCodigo);
        fields.forEach(function(field) {
            $('#' + field).val('');
        });
        // Resetear radio buttons
        $('[name="Genero"], [name="Genero2"]').prop('checked', false);
        $('[name="Sede"]').prop('checked', false);
    }
    // Función debounce mejorada para tablets
    function debounce(func, wait) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                func.apply(context, args);
            }, wait);
        };
    }
    // Función para manejar la búsqueda por cédula
    function handleCedulaSearch(cedulaInput, isSecondForm) {
        var cedula = $(cedulaInput).val();
        var prefix = isSecondForm ? '2' : '';
        var defaultCodigo = '<?php echo $Codigo2 ?>';
        if (cedula && cedula.length >= 1) {
            $.ajax({
                type: "POST",
                url: "../search19.php",
                data: { Cedula: cedula },
                dataType: 'json',
                success: function(tasks) {
                    if (tasks && tasks.length > 0) {
                        updateFormFields(tasks[0], prefix, defaultCodigo);
                    } else {
                        resetFormFields(prefix, defaultCodigo, isSecondForm);
                    }
                },
                error: function() {
                    resetFormFields(prefix, defaultCodigo, isSecondForm);
                }
            });
        } else {
            resetFormFields(prefix, defaultCodigo, isSecondForm);
        }
    }
    // Función para actualizar los campos del formulario
    function updateFormFields(task, prefix, defaultCodigo) {
        // Campos básicos
        $('#Codigo' + prefix).val(task.Codigo || defaultCodigo);
        $('#Tipo' + prefix).val(task.Tipo || '');
        $('#Nombre' + prefix).val(task.Nombre || '');
        $('#Edad' + prefix).val(task.Edad || '');
        // Radio buttons
        if (task.Genero) {
            $('[name="Genero' + prefix + '"][value="' + task.Genero + '"]').prop('checked', true);
        }
        // Campos específicos
        if (!prefix) {
            // Solo para el primer formulario
            $('#Estado').val(task.Estado || '');
            $('#Empresa').val(task.Empresa || '');
            $('#Cargo').val(task.Cargo || '');
            if (task.Sede) {
                $('[name="Sede"][value="' + task.Sede + '"]').prop('checked', true);
            }
        } else {
            // Solo para el segundo formulario
            $('#Estado2').val(task.Estado || '');
        }
    }
    // Función para resetear campos
    function resetFormFields(prefix, defaultCodigo, isSecondForm) {
        $('#Codigo' + prefix).val(defaultCodigo);
        $('#Tipo' + prefix).val('');
        $('#Nombre' + prefix).val('');
        $('#Edad' + prefix).val('');
        if (!isSecondForm) {
            // Reset para primer formulario
            $('#Estado').val('');
            $('#Empresa').val('');
            $('#Cargo').val('');
            $('[name="Sede"]').prop('checked', false);
        } else {
            // Reset para segundo formulario
            $('#Estado2').val('');
        }
        // Reset radio buttons
        $('[name="Genero' + prefix + '"]').prop('checked', false);
    }
    // Configuración de eventos con debounce
    function setupCedulaEvents() {
        var timer;
        $('#Cedula, #Cedula2').on('input', function() {
            clearTimeout(timer);
            timer = setTimeout(function() {
                var isSecondForm = $(this).attr('id') === 'Cedula2';
                handleCedulaSearch(this, isSecondForm);
            }.bind(this), 500);
        });
    }
    // Inicialización
    $(document).ready(function() {
        setupCedulaEvents();
    });
    // Configuración única para ambos campos de cédula
    function setupCedulaSearch() {
      // Manejador genérico para ambos campos
      function handleCedulaSearch(inputId, isForm2) {
        var cedula = $('#' + inputId).val();
        var prefix = isForm2 ? '2' : '';
        var defaultCodigo = '<?php echo $Codigo2 ?>';
        if (!cedula || cedula.length < 1) {
          resetFormFields(prefix, defaultCodigo, isForm2);
          return;
        }
        $.ajax({
          type: "POST",
          url: "../search19.php",
          data: { Cedula: cedula },
          dataType: 'json',
          success: function(tasks) {
            if (tasks && tasks.length > 0) {
              fillFormData(tasks[0], prefix, defaultCodigo);
            } else {
              resetFormFields(prefix, defaultCodigo, isForm2);
            }
          },
          error: function() {
            resetFormFields(prefix, defaultCodigo, isForm2);
          }
        });
      }
      // Llenar datos del formulario
      function fillFormData(task, prefix, defaultCodigo) {
        $('#Codigo' + prefix).val(task.Codigo || defaultCodigo);
        $('#Tipo' + prefix).val(task.Tipo || '');
        $('#Nombre' + prefix).val(task.Nombre || '');
        $('#Edad' + prefix).val(task.Edad || '');
        if (task.Genero) {
          $('[name="Genero' + prefix + '"][value="' + task.Genero + '"]').prop('checked', true);
        }
        $('#Estado' + prefix).val(task.Estado || '');
        if (!prefix) {
          $('#Empresa').val(task.Empresa || '');
          $('#Cargo').val(task.Cargo || '');
          if (task.Sede) {
            $('[name="Sede"][value="' + task.Sede + '"]').prop('checked', true);
          }
        }
      }
      // Resetear campos
      function resetFormFields(prefix, defaultCodigo, isForm2) {
        $('#Codigo' + prefix).val(defaultCodigo);
        $('#Tipo' + prefix).val('');
        $('#Nombre' + prefix).val('');
        $('#Edad' + prefix).val('');
        $('#Estado' + prefix).val('');
        $('[name="Genero' + prefix + '"]').prop('checked', false);
        if (!isForm2) {
          $('#Empresa').val('');
          $('#Cargo').val('');
          $('[name="Sede"]').prop('checked', false);
        }
      }
      // Configurar eventos con debounce
      var timers = {};
      $('#Cedula, #Cedula2').on('input', function() {
        var inputId = this.id;
        clearTimeout(timers[inputId]);
        timers[inputId] = setTimeout(function() {
          handleCedulaSearch(inputId, inputId === 'Cedula2');
        }, 500);
      });
    }
    // Inicializar cuando el DOM esté listo
    $(document).ready(setupCedulaSearch);     
</script>
</body>
</html>