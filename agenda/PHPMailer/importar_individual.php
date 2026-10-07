<?php
    include_once '../app/config.inc.php';
    include_once '../app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    require_once('../plantillas/ultramsg.class.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    function generarCodigoAleatorio($longitud = 10) {
        $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
        $Clave2 = '';
        for ($i = 0; $i < $longitud; $i++) {
            $Clave2 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $Clave2;
    }
    $Clave2 = generarCodigoAleatorio(6);
    function generarCodigoAleatorio2($longitud = 1) {
        $caracteres = '12345678';
        $N = '';
        for ($i = 0; $i < $longitud; $i++) {
            $N .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $N;
    }
    $N = generarCodigoAleatorio2(1);
    if(isset($_POST['Fecha'])) {
        $Clave=$_POST["Clave"];
        $Email3=$_POST["Email3"];
        $Cliente0=$_POST["Cliente"];
        $Observacionp=$_POST["Observacionp"];
        $Adicionales=$_POST["Adicionales"];
        switch ($Cliente0) {
            case 'Apartadó/Cedisalud IPS':
                $Nombre_sede = 'Cedisalud IPS (Apartadó)';
                $Direccion = 'Calle 98 # 102 – 68 BARRIO ORTIZ';
                $Horario = 'Lunes-Jueves:6:30 A.M. a 12:00 M. y 1:00 P.M. a 4:00 P.M./Viernes:6:30 a 12:00 M. y 1:00 P.M. a 3:30 P.M./Sábado:7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/HN6SVc2DPRq44YG36';
                $ciudad = 'Apartadó';
                $Texto1= '';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '';
                $Texto5= '';
                $Texto6= '';
                break;
             case 'Medellín/Cedisalud IPS':
                $Nombre_sede = 'Cedisalud IPS (Medellín)';
                $Direccion = 'CALLE 31 # 43 -50 Barrio San Diego';
                $Horario = 'Lunes-Jueves: 6:30 A.M. a 4:30 P.M. / Viernes 6:30 A.M. a 4:00 P.M. / Sábado 6:30 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/CBgRmq6wKWx8de5H9';
                $ciudad = 'Medellín';
                $Texto1= '';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                 $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '';
                $Texto6= '';
                break;
            case 'Rionegro/ORIENTESALUD':
                $Nombre_sede = 'ORIENTESALUD (Rionegro)';
                $Direccion = 'Calle 63A # 47-25';
                $Horario = 'L-V:7:00 A.M. a 4:30 P.M. Sábado: 7:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/LFQkXFsyRe5jrbce8';
                $ciudad = 'Medellín';
                $Texto1= '';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
             case 'Aguachica/Capella IPS':
                $Nombre_sede = 'Capella IPS (Aguachica)';
                $Direccion = 'CR 22 N° 6-19';
                $Horario = 'L-V:7:00 A.M. a 12:00 M. 2:00 P.M a 4:00 P.M. sábado: 7:00 A.M. a 12:00 A.M.';
                $mapa = 'https://maps.app.goo.gl/9Vgv3Rqcici91U4u5';
                $ciudad = 'Aguachica';
                $Texto1= '';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
             case 'Armenia/PROENSO':
                $Nombre_sede = 'PROENSO (Armenia)';
                $Direccion = 'CARRERA 14 # 9 -18 Edificio Tarantella';
                $Horario = 'L-V: 6:30 A.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/MheXMfUcDh6CKa757';
                $ciudad = 'Armenia';
                $Texto1= '';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
            /*case 'La Dorada/IPS Fisiohealth':
                $Nombre_sede = 'IPS Fisiohealth (La Dorada)';
                $Direccion = 'CLL 12 N° 2-66, Zona Centro';
                $Horario = 'L-V: 6:40 A.M. a 12:00 M. El sábado no se brinda atención';
                $mapa = 'https://www.google.com/maps/place/FISIOHEALTH/@5.4526278,-74.675344,14z/data=!4m6!3m5!1s0x8e40df3a2bc254c9:0xe37fa9c028b4cbd4!8m2!3d5.4519032!4d-74.6625671!16s%2Fg%2F11kpvb_8h1?entry=ttu';
                $ciudad = 'La Dorada (Caldas)';
                $Texto1= '';
                $Texto2= '';
                break;*/ 
             case 'Barrancabermeja/RVG IPS':
                $Nombre_sede = 'RVG IPS (Barrancabermeja)';
                $Direccion = 'Calle 46 No. 25-25, Barrio El Recreo';
                $Horario = 'L-V: 6:00 A.M. a 12:00 M. / 2:00 P.M. a 6:00 P.M.  S: 6:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/zSZnYFe91uizGMx86';
                $ciudad = 'Barrancabermeja';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Barrancabermeja/RVO IPS S.A.S':
                $Nombre_sede = 'RVO IPS S.A.S (Barrancabermeja)';
                $Direccion = 'Cll 52 #20-04, Barrio Colombia';
                $Horario = 'L-V 7:00 A.M. a 5:30 P.M. S: 6:30 A.M. a 11:30 M.';
                $mapa = 'https://www.google.com/maps/place/RVO+IPS+-+Salud+Ocupacional+y+Laboratorio+Cl%C3%ADnico./@7.0616014,-73.8696373,15z/data=!4m6!3m5!1s0x8e42eca6f2411ecb:0xe52716a5b4ede39f!8m2!3d7.061431!4d-73.8573206!16s%2Fg%2F11f36h53yx?entry=ttu&g_ep=EgoyMDI0MTExMC4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Barrancabermeja';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
             case 'Barranquilla/Medikcorp SAS':
                $Nombre_sede = 'Medikcorp S.A.S.';
                $Direccion = 'CARRERA 47No.76-79 Barrio El Prado';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 1:00 P.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/XGyXCqdMyEebjw8f8';
                $ciudad = 'Barranquilla';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Barranquilla/SSTA Consulting S.A.S':
                $Nombre_sede = 'SSTA Consulting S.A.S. (Barranquilla)';
                $Direccion = 'Cra. 47 #79-129';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 1:30 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com.co/maps/place/Cra.+47+%2379-129,+Barranquilla,+Atl%C3%A1ntico/@10.9989514,-74.8129683,18z/data=!4m5!3m4!1s0x8ef42d084b42e419:0xc4cc8f18d389d38a!8m2!3d10.9989748!4d-74.8127636?hl=es';
                $ciudad = 'Barranquilla';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            /*case 'Bogotá Norte/Human Group Corp IPS VIP':
                $Nombre_sede = 'Human Group Corp IPS VIP (Bogotá Norte)';
                $Direccion = '102 A #45A-03, Bogotá';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/HUMAN+GROUP+corp+IPS/@4.6892967,-74.0578506,15z/data=!4m2!3m1!1s0x0:0x19cf401f019401e?sa=X&ved=2ahUKEwiJ5r79xNr-AhWSg4QIHcEtDtoQ_BJ6BAhQEAg';
                $ciudad = 'Bogotá Norte';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: LA  TOMA DE PRUEBA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES.</b></p><br>';
                break;*/     
             case 'Chía/INSSOMEDIC Ocupacional SAS':
                $Nombre_sede = 'INSSOMEDIC Ocupacional SAS (Chía)';
                $Direccion = 'Cra. 9 #10-74 Piso 2 - oficinas y 3 - atenciones';
                $Horario = 'L-V: 6:30 A.M. a 3:00 P.M.  S: 8:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Inssomedic/@4.8597142,-74.0645988,15z/data=!4m6!3m5!1s0x8e3f870043f3aced:0x2c81627b966cdcc8!8m2!3d4.8601624!4d-74.0590118!16s%2Fg%2F11vplvtbld?entry=ttu';
                $ciudad = 'Chía - Bogotá Norte';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
             case 'Bogotá Norte/Zonamedica IPS':
                $Nombre_sede = 'Zonamedica IPS (Bogotá Norte)';
                $Direccion = 'Autopista Norte No 105 - 21';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/J6ML8xincDVqWudu5';
                $ciudad = 'Bogotá Norte';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break; 
             case 'Bogotá Américas/Zonamedica IPS':
                $Nombre_sede = 'Zonamedica IPS (Bogotá Américas)';
                $Direccion = 'Av. Américas N° 62-84 Local 213 – 214 – 215';
                $Horario = 'L-V: 6:30 A.M. – 16:00 P.M. S: 6:30 A.M. – 12:00 A.M';
                $mapa = 'https://maps.app.goo.gl/qNiu8Jcufu7a4s6h9';
                $ciudad = 'Bogotá Américas';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
             case 'Bogotá Norte/Unimsalud':
                $Nombre_sede = 'Unimsalud (Bogotá Norte)';
                $Direccion = 'CARRERA 23 # 124-87 Edificio Zentai 405'; 
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=4.7022151965176375%2C-74.05030048357544&z=15';
                $ciudad = 'Bogotá Norte';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Bogotá La Soledad/Zonamedica IPS':
                $Nombre_sede = 'Zonamedica IPS (Bogotá La Soledad)';
                $Direccion = 'Ak. 28 #41-36, Teusaquillo, Bogotá, Cundinamarca';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/ukHsePbzJvs2RNZp8';
                $ciudad = 'Bogotá La Soledad';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
             case 'Bogotá Sur/Unimos Salud':
                $Nombre_sede = 'Unimos Salud  (Bogotá)';
                $Direccion = 'CALLE 44 BIS B SUR 68 B 13, Bogotá';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 8:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+Unimos+Salud/@4.5958268,-74.144827,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x5ea2da382c386892!8m2!3d4.5958268!4d-74.1426383';
                $ciudad = 'Bogotá Sur';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Bogotá Sur/Ocupasalud IPS Bogotá':
                $Nombre_sede = 'Ocupasalud IPS Bogotá  (Bogotá Sur)';
                $Direccion = 'CLL 22 sur # 19C - 09, Centro Comercial Nueva Visión, locales 207 y 208';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:30 M.';
                $mapa = 'https://maps.app.goo.gl/ravzdA5Qf3Px7H3o9';
                $ciudad = 'Bogotá Sur';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Bogotá Central-Galerías/Grupo Ocupacional':
                $Nombre_sede = 'Grupo Ocupacional  (Bogotá)';
                $Direccion = 'CARRERA 27 A # 52 -48, Bogotá';
                $Horario = 'L-V: 6:30 A.M. a 3:30 P.M.  S: 6:30 A.M. a 10:00 A.M. Post Incapacidades: 10:00 A.M., L - V con agendamiento previo.';
                $mapa = 'https://maps.app.goo.gl/2whhsskbegj4MNaD9';
                $ciudad = 'Bogotá Central';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
            case 'Bogotá Central/Unimsalud':
                $Nombre_sede = 'Unimsalud (Bogotá Central)';
                $Direccion = 'CALLE 72A # 20C - 55';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=4.661970359168456%2C-74.06379771351699&z=15';
                $ciudad = 'Bogotá Central';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Facatativa/Medical Helsen IPS':
                $Nombre_sede = 'Medical Helsen IPS (Facatativa)';
                $Direccion = 'Calle 4 # 2-15 esquina';
                $Horario = 'L-V: 7:30 A.M. a 16:00 P.M.  S: 8:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/xo4sp7y7tREuFfF89';
                $ciudad = 'Bogotá - Facatativa';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Funza/IPS Sigmedical Funza':
                $Nombre_sede = 'IPS Sigmedical Funza (Funza)';
                $Direccion = 'Calle 14 # 10-64, Centro de Funza';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/IPS+SIGMEDICAL+SEDE+FUNZA/@4.71419,-74.2106839,15z/data=!4m6!3m5!1s0x8e3f830c2e1bd4f9:0x22ae977f8b82169b!8m2!3d4.71419!4d-74.2106839!16s%2Fg%2F11rvd63psg';
                $ciudad = 'Bogotá - Funza';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Madrid/Medical Helsen IPS':
                $Nombre_sede = 'Medical Helsen IPS (Madrid)';
                $Direccion = 'Dg. 6 # 4-51';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 8:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/dy42qtdmH8JtC6vF8';
                $ciudad = 'Bogotá - Madrid';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
               $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Madrid/IPS Sigmedical Madrid':
                $Nombre_sede = 'IPS Sigmedical Madrid (Madrid)';
                $Direccion = 'Carrera 9 # 4-97';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/Ips+Sigmedical+MADRID/@4.7339583,-74.2653513,15z/data=!4m6!3m5!1s0x8e3f79b4d10c11fb:0x4c4676f416198bae!8m2!3d4.7339583!4d-74.2653513!16s%2Fg%2F11h35pks6l';
                $ciudad = 'Bogotá - Madrid';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
               $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Mosquera/IPS Sigmedical Mosquera':
                $Nombre_sede = 'IPS Sigmedical Mosquera (Mosquera)';
                $Direccion = 'Carrera 1 este  # 4-03';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+SIGMEDICAL+MOSQUERA/@4.7047827,-74.2302241,17z/data=!3m1!4b1!4m6!3m5!1s0x8e3f77f9cfa7b561:0xf72abc628379dcac!8m2!3d4.7047774!4d-74.2276492!16s%2Fg%2F11c1rfqj3k';
                $ciudad = 'Bogotá - Mosquera';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Zipaquirá/SANILAB IPS':
                $Nombre_sede = 'SANILAB IPS (Zipaquirá)';
                $Direccion = 'Carrera 10A # 6-90';
                $Horario = 'L-V: 6:30 A.M. a 14:00 P.M.  S: 7:30 A.M. a 11:30 M.';
                $mapa = 'https://maps.app.goo.gl/3NExWvp7goUNfPjZA';
                $ciudad = 'Zipaquirá';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
             case 'Bucaramanga/Ocupasalud IPS':
                $Nombre_sede = 'Ocupasalud IPS (Bucaramanga)';
                $Direccion = 'Avenida Quebrada Seca # 32A-89, Barrio San Alonso';
                $Horario = 'L-V: 6:00 A.M. a 12:00 M. / 2:00 P.M. a 4:30 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/7aSWkHabJBiU5iUn8';
                $ciudad = 'Bucaramanga';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
             case 'Bucaramanga/IPS Prosynergo SAS':
                $Nombre_sede = 'IPS Prosynergo SAS (Bucaramanga)';
                $Direccion = 'Cra. 31 # 49-67';
                $Horario = 'Lunes a Sábado: 6:30 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Prosynergo/@7.114796,-73.1146868,17z/data=!4m5!3m4!1s0x0:0xcd89f59f4f86ca1b!8m2!3d7.114796!4d-73.1124981';
                $ciudad = 'Bucaramanga';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Buga/Laboratorio Clínico López Línea Ocupacional IPS':
                $Nombre_sede = 'Laboratorio Clínico López Línea Ocupacional IPS (Buga)';
                $Direccion = 'Cra. 15 N° 4-61';
                $Horario = 'L-V: de 7:00 A.M. a 12:00 P.M. / 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M';
                $mapa = 'https://www.google.com/maps/place/Laboratorio+Clinico+L%C3%B3pez+S.A.S+L%C3%ADnea+Ocupacional/@3.898404,-76.303178,15z/data=!4m6!3m5!1s0x8e30a7acb14f7653:0x3dff688c3dcff227!8m2!3d3.8984043!4d-76.3031782!16s%2Fg%2F11p4zv8bfw?hl=en';
                $ciudad = 'Buga';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Cali/CEMESST':
                $Nombre_sede = 'CEMESST (Cali)';
                $Direccion = 'Calle 24 A Norte AV 2 BIS - 38, Barrio San Vicente, Cali, Valle';
                $Horario = 'L-V: 6:30 A.M. a 5:30 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Cemesst+%22Centro+Medico+en+Seguridad+y+Salud+en+el+Trabajo/@3.4678573,-76.5240716,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a63e7396d2bd:0x7e4c6fdfe3494af8!8m2!3d3.4678573!4d-76.5240716!16s%2Fg%2F11gfhsdtv8?entry=ttu&g_ep=EgoyMDI1MDIwMy4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Cali';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
             case 'Cali/Salud Ocupacional y Medicinas Alternativas':
                $Nombre_sede = 'Salud Ocupacional y Medicinas Alternativas (Cali)';
                $Direccion = 'AVENIDA 2 E N # 24N – 58. Barrio San vicente';
                $Horario = 'L-V: 6:30 A.M. a 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Salud+Ocupacional+y+Medicinas+Alternativas/@3.4643556,-76.5261547,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x5bcd2ea66113a6fb!8m2!3d3.4643556!4d-76.523966';
                $ciudad = 'Cali';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Cartagena/H&S Occupational':
                $Nombre_sede = 'H&S Occupational (Cartagena)';
                $Direccion = 'Avenida del bosque transversal 54 # 21 A - 91 C.C. Industrial del bosque local 6';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/H%26S+OCCUPATIONAL+S.A.S/@10.3889108,-75.5198965,15z/data=!4m2!3m1!1s0x0:0x4a0924b5e2d5bc95?sa=X&ved=1t:2428&ictx=111';
                $ciudad = 'Cartagena';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Cartagena/GESMED':
                $Nombre_sede = 'GESMED (Cartagena)';
                $Direccion = 'Calle 31 # 69 - 75 Barrio Contadora, Edificio la Caracola Local 1';
                $Horario = 'L-V: 7:00 A.M. a 5:00 P.M.';
                $mapa = 'https://www.google.com.co/maps/place/LA+CARACOLA/@10.3943832,-75.4905047,15z/data=!4m9!1m2!2m1!1sla+Caracola,+Edifici,+Cartagena,+Provincia+de+Cartagena,+Bol%C3%ADvar!3m5!1s0x8ef625ca1914b6d3:0x1ef46abece4fecb1!8m2!3d10.3963506!4d-75.4863414!15sCkFsYSBDYXJhY29sYSwgRWRpZmljaSwgQ2FydGFnZW5hLCBQcm92aW5jaWEgZGUgQ2FydGFnZW5hLCBCb2zDrXZhcpIBEmFwYXJ0bWVudF9idWlsZGluZw?hl=es';
                $ciudad = 'Cartagena';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
             case 'Magangué/UMER IPS Servicios Ocupacionales':
                $Nombre_sede = 'UMER IPS Servicios Ocupacionales (Magangué)';
                $Direccion = 'Calle 15 N° 15 - 36, Barrio Montecarlo';
                $Horario = 'L-V: 6:30 A.M. a 11:30 A.M. y 2:00 P.M. a 4:30 P.M.; Sábado: 6:30 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/UMER+IPS+servicios+Ocupacionales/@9.2440986,-74.7579976,17z/data=!3m1!4b1!4m6!3m5!1s0x8e5ec7e648287fc7:0x1ff18597c0250a1e!8m2!3d9.2440986!4d-74.7579976!16s%2Fg%2F11nmcv1rvm?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Magangué';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Cúcuta/Progresando en Salud IPS':
                $Nombre_sede = 'Progresando en Salud IPS (Cúcuta)';
                $Direccion = 'CALLE 21 A # 0 B - 75, Barrio El Rosal - Barrio Blanco';
                $Horario = 'L-V: 6:00 A.M. a 12:00 M. y 2:00 P.M. a 5:00 P.M.  S: 6:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Ips+Progresando+En+Salud/@7.8758882,-72.5008367,17z/data=!3m1!4b1!4m5!3m4!1s0x8e664598b7e2b963:0x431474e35d1d32ce!8m2!3d7.8759059!4d-72.4986395';
                $ciudad = 'Cúcuta';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Ocaña/Progresando en Salud IPS':
                $Nombre_sede = 'Progresando en Salud IPS (Ocaña)';
                $Direccion = 'CALLE 11 N° 24-65, Barrio Las Llanadas';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. y 2:00 P.M. a 4:30 P.M.  S: 6:00 A.M. a 11:30 A.M.';
                $mapa = "https://www.google.com/maps/place/8%C2%B014'41.3%22N+73%C2%B021'21.2%22W/@8.2446025,-73.3576414,17.5z/data=!4m4!3m3!8m2!3d8.2448056!4d-73.3558889?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D";
                $ciudad = 'Ocaña';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            case 'Ibagué/Servir SAS':
                $Nombre_sede = 'Servir SAS (Ibagué)';
                $Direccion = 'Calle 37 No 4H - 24, Barrio Magisterio ';
                $Horario = 'L-V: 6:30 A.M. a 3:30 P.M. S: 8:00 A.M. a 11:30 M.';
                $mapa = 'https://www.google.com/maps/place/SERVIR+S.A.S./@4.4374243,-75.220913,16z/data=!4m6!3m5!1s0x8e38c4e94ad498c5:0xf08a262e3ae3d979!8m2!3d4.4369536!4d-75.217351!16s%2Fg%2F1tx_7dff?entry=ttu';
                $ciudad = 'Ibagué';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 6:30 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
             case 'La Ceja/IPS Corriente Vital':
                $Nombre_sede = 'IPS Corriente Vital (La Ceja)';
                $Direccion = 'Calle 17 #18-66';
                $Horario = 'L-V: 6:30 A.M. 3:30 P.M. (Jornada Continua)  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Cl.+17+%231866,+La+Ceja,+Antioquia/@6.0281968,-75.431543,18.25z/data=!4m5!3m4!1s0x8e46974d883cce87:0xdea0d46b4e42ac4f!8m2!3d6.0283171!4d-75.430855';
                $ciudad = 'La Ceja';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break; 
            case 'Manizales/UNIRSALUD':
                $Nombre_sede = 'UNIRSALUD (Manizales)';
                $Direccion = 'Carrera 22, Av. del Centro # 26-12, Manizales, Caldas';
                $Horario = 'L-V: 6:30 A.M. A 11:30 A.M. El sábado no hay atención';
                $mapa = 'https://www.google.com/maps/place/Unirsalud/@5.067734,-75.5172618,16.5z/data=!4m5!3m4!1s0x8e476ff0958dcceb:0xbf52a4ddfcc2a814!8m2!3d5.0677526!4d-75.5148217';
                $ciudad = 'Manizales';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Manizales/Eje salud laboral SAS':
                $Nombre_sede = 'Eje salud laboral SAS (Manizales)';
                $Direccion = 'Carrera 23, N° 23-60 Edificio Cuellar, Local 304, Manizales, Caldas';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. - 2:00 P.M a 4:30 P.M. El sábado no hay atención';
                $mapa = 'https://www.google.com/maps/place/EJE+SALUD+LABORAL+S.A.S./@5.0676686,-75.5247181,15z/data=!4m6!3m5!1s0x8e476ffa05f466ab:0x8e277066ec56685!8m2!3d5.0670701!4d-75.5164355!16s%2Fg%2F11fz9x4m0r?entry=ttu&g_ep=EgoyMDI0MDkwOS4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Manizales';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            /*case 'Montería/Fundación Certificar':
                $Nombre_sede = 'Fundación Certificar (Montería)';
                $Direccion = 'Calle 25 # 10-27, Montería';
                $Horario = 'L-V: 7:00 A.M. a 11:30 A:M. No se presta atención en horas de la tarde y ni los sábados';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=8.749031468505883%2C-75.8822251446611&z=16';
                $ciudad = 'Montería';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                break; */
            case 'Montería/Peña Asesores Salud Ocupacional S.A.S. -PASO-':
                $Nombre_sede = 'Peña Asesores Salud Ocupacional S.A.S. -PASO- (Montería)';
                $Direccion = 'CR 14 # 16-28, Montería';
                $Horario = 'L-V: 7:00 A.M. a 11:00 A:M. Y 1:30 P.M. a 4:00 P.M.  S: 7:00 A.M. a 11:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/Pe%C3%B1a+Asesores+En+Salud+Ocupacional+Paso+S.A.S./@8.7445908,-75.8825546,15z/data=!4m6!3m5!1s0x8e5a2fe1ffa55ce1:0x4e543b8ab510c8c!8m2!3d8.7445908!4d-75.8825546!16s%2Fg%2F11c58vthcf?entry=ttu';
                $ciudad = 'Montería';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Montelíbano/Su Salud Integral SAS':
                $Nombre_sede = 'Su Salud Integral SAS (Montelíbano)';
                $Direccion = 'CR 6 # 14-85, Barrio Centro';
                $Horario = 'L-V 6:00 A.M. a 11:30 A.M. y 14:00 P.M. a 15:30 P.M. Sábado 6:00 A.M. a 10:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/584EKAwN6PA834JA8';
                $ciudad = 'Monte Líbano';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
            /*case 'Neiva/IPS Centro de Diagnóstico Ocupacional':
                $Nombre_sede = 'IPS centro de Diagnóstico Ocupacional (Neiva)';
                $Direccion = 'CALLE 14 # 3 - 88, Neiva';
                $Horario = 'L-V: 6:30 A.M. a 5:00 P.M.  S: 6:30 A.M. a 11:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+Centro+de+Diagn%C3%B3stico+Ocupacional+Neiva/@2.9316058,-75.2964137,16z/data=!4m5!3m4!1s0x0:0xfb4f5bc031b5b795!8m2!3d2.9316058!4d-75.2920363';
                $ciudad = 'Neiva';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;*/   
            case 'Neiva/LABORVIDA IPS':
                $Nombre_sede = 'LABORVIDA IPS (Neiva)';
                $Direccion = 'CRA. 8 # 17 - 13, Campo Núñez, Neiva';
                $Horario = 'L-V: 6:30 A.M. a 11:00 A.M y 2:00 P.M. a 4:30 P.M. S: 7:00 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Laborvida+Ips/@2.9356317,-75.287248,17z/data=!3m1!4b1!4m6!3m5!1s0x8e3b7467387723fb:0x47da0db005417ae!8m2!3d2.9356317!4d-75.287248!16s%2Fg%2F11dxskvxc4?entry=ttu&g_ep=EgoyMDI1MDUyNy4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Neiva';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            case 'Palmira/CEMESST':
                $Nombre_sede = 'CEMESST (Palmira)';
                $Direccion = 'CALLE 34 # 27 - 85, Palmira';
                $Horario = 'L-V: 6:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=3.5277510554912745%2C-76.29714526669169&z=15';
                $ciudad = 'Palmira';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Pasto/IPS AM PM 24 SAS':
                $Nombre_sede = 'IPS AM PM 24 SAS (Pasto)';
                $Direccion = 'Cll 20 # 38-15';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 2:00 P.M. a 5:30 P.M.  S: 7:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+Am:Pm+24+SAS/@1.2272216,-77.2906774,15z/data=!4m6!3m5!1s0x8e2ed48712cbeed3:0x60823d1af9d12693!8m2!3d1.2278223!4d-77.2831672!16s%2Fg%2F11g6p4g6yn?entry=ttu';
                $ciudad = 'Pasto';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Pasto/OCUPSALUD SST SAS':
                $Nombre_sede = 'OCUPSALUD SST SAS (Pasto)';
                $Direccion = 'CRA 38 # 20 - 37, Barrio Morasurco';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+OCUPSALUD+SST+SAS/@1.2279676,-77.286086,16z/data=!4m5!3m4!1s0x0:0xa51ca4cc4c61fc45!8m2!3d1.2281714!4d-77.2826068';
                $ciudad = 'Pasto';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            case 'Pereira/Previsión Ocupacional SAS':
                $Nombre_sede = 'Previsión Ocupacional SAS (Pereira)';
                $Direccion = 'Calle 19 # 9-50 Local 18 A, Edificio San Bernardo, Complejo Diario del Otún';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S. 7:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Prevision+IPS+ltda./@4.816042,-75.693899,14z/data=!4m6!3m5!1s0x8e38873f894bf7a3:0xe6db203ad99ebcef!8m2!3d4.8160423!4d-75.693899!16s%2Fg%2F11dfkpnhnf?hl=es-419';
                $ciudad = 'Pereira';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
            case 'Pereira/BIO QUALITY SALUD SAS':
                $Nombre_sede = 'BIO QUALITY SALUD SAS (Pereira)';
                $Direccion = 'Carrera 10 N° 19-66, Centro';
                $Horario = 'L-J: 6:30 A.M. a 12:30 P.M. y 13:30 P.M. a 16:30; Viernes 6:30 A.M. - 4:00 P.M.';
                $mapa = 'https://www.google.com/maps/place/Bio+Quality+Salud+S.A.S./@4.8119141,-75.708144,14.5z/data=!4m6!3m5!1s0x8e3887463bb0c1b9:0x7ad31b6c5ce30681!8m2!3d4.8123389!4d-75.695124!16s%2Fg%2F11fx8hl6s6?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Pereira';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Pereira/Proteccion Integral IPS':
                $Nombre_sede = 'Proteccion Integral IPS (Pereira)';
                $Direccion = 'CALLE 19 #5-13, CLINICA RISARALDA SEGUNDO PISO';
                $Horario = 'L-V: 7:00 A.M. a 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://maps.app.goo.gl/KCeyEuzkyhUBzpvQA';
                $ciudad = 'Pereira';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Popayan/Salud Ocupacional':
                $Nombre_sede = 'Salud Ocupacional (Popayan)';
                $Direccion = 'Carrera 9A # 17AN-41, Barrio Antonio Nariño';
                $Horario = 'L-V: 7:00 A.M. a 1:00 P.M. Y 2:00 P.M. a 4:30 P.M. Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/OCUPACIONAL+SALUD+IPSO/@2.4558211,-76.6012027,15.75z/data=!4m6!3m5!1s0x8e3003d8dca12c33:0x34be92f1ab4973cf!8m2!3d2.4561768!4d-76.5975164!16s%2Fg%2F11s7p4lxql?entry=ttu';
                $ciudad = 'Puerto Berrío';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
             case 'Puerto Berrío/IPS Salud Integral Preventiva SAS':
                $Nombre_sede = 'IPS Salud Integral Preventiva SAS (Puerto Berrío)';
                $Direccion = 'Calle 50 # 6 49 Referencia: sector semáforos';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 1:00 P.M. a 4:30 P.M. Sábado: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/search?rlz=1C1VDKB_esCO1027CO1027&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=AB5stBiBys9AErVPUFDx02lGmCUfLa365g:1688818405211&q=salud+ocupacional+popayan&rflfq=1&num=10&sa=X&ved=2ahUKEwikz4fpiv__AhUVOkQIHUZpCAMQjGp6BAgbEAE&biw=1366&bih=625&dpr=1#rlfi=hd:;si:3800636702205768655,l,ChlzYWx1ZCBvY3VwYWNpb25hbCBwb3BheWFuSNLlpdKeuICACFolEAAQARgAGAEYAiIZc2FsdWQgb2N1cGFjaW9uYWwgcG9wYXlhbpIBHm9jY3VwYXRpb25hbF9zYWZldHlfYW5kX2hlYWx0aKoBYwoIL20vMGt0NTEQASoVIhFzYWx1ZCBvY3VwYWNpb25hbCgOMh8QASIbt_R2tatChGQklIcL6j2g1GFqDODVAEytUPY_Mh0QAiIZc2FsdWQgb2N1cGFjaW9uYWwgcG9wYXlhbg;mv:[[2.456847127438402,-76.59685608137168],[2.455528692984128,-76.59939345109977]]&scso=_BFOpZIL6A62PwbkPp-CBoAo_18:1122';
                $ciudad = 'Puerto Berrío';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Riohacha/APREHSI GROUP':
                $Nombre_sede = 'IPS APREHSI GROUP (Riohacha)';
                $Direccion = 'CARRERA 10 # 14-60';
                $Horario = 'L-V: 7:00 A.M. a 3:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Aprehsi/@11.5439859,-72.9103236,15z/data=!4m5!3m4!1s0x0:0xef1de16ce6d3f227!8m2!3d11.5439859!4d-72.9103236';
                $ciudad = 'Riohacha';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
            case 'Santa Marta/PREVENIR 1-A SA':
                $Nombre_sede = 'PREVENIR 1-A SA (Santa Marta)';
                $Direccion = 'CARRERA 20 # 12-32, Barrio San Francisco, frente al edificio Davinci';
                $Horario = 'L-V 7:00 A.M. - 12:00 M. Y 2:00 P.M. - 6:00 P.M.  S. 7:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Benavides+de+Vega+Jose+Maria+-+Prevenir+1A+S.A./@11.2412698,-74.1932391,17.5z/data=!4m5!3m4!1s0x8ef4f50d715e49f5:0xab17437288d4b2!8m2!3d11.2416604!4d-74.1920277';
                $ciudad = 'Santa Marta';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            case 'Sincelejo/LABORMED':
                $Nombre_sede = 'LABORMED (Sincelejo)';
                $Direccion = 'Carrera 19 # 15-7, Calle de las Flores';
                $Horario = 'L-V 7:00 A.M. - 16: P.M. S. 8:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?ll=9.305017390878527%2C-75.3973915878217&z=15&mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO';
                $ciudad = 'Sincelejo';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Tunja/Carvajal Laboratorios IPS SAS':
                $Nombre_sede = 'Carvajal Laboratorios IPS SAS (Tunja)';
                $Direccion = 'Calle 39 # 40-1';
                $Horario = 'L-V: 6:30 A.M. 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Cl.+39+%2340,+Tunja,+Boyac%C3%A1/@5.5446543,-73.3499404,17z/data=!4m5!3m4!1s0x8e6a7c388e27d5d1:0x7d976dbe387e5e56!8m2!3d5.5447397!4d-73.348138';
                $ciudad = 'Tunja';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Tuluá/IPS Opositiva Salud Integral Tuluá SAS':
                $Nombre_sede = 'IPS Opositiva Salud Integral Tuluá SAS (Tuluá)';
                $Direccion = 'Cra. 37 N° 25-31 B/ Alvernia';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. En horas de la tarde y fines de semana no se presta servicio.';
                $mapa = 'https://www.google.com/maps/place/IPS+O+POSITIVA+SALUD+INTEGRAL+-+Servicio+de+Medico+a+Domicilio+-+Fisioterapia-Toma+de+Pruebas+PCR/@4.0838211,-76.1944547,15z/data=!4m6!3m5!1s0x8e39c541c71efa25:0xd728dc096c68551!8m2!3d4.0841207!4d-76.1884036!16s%2Fg%2F11p0_wnl28';
                $ciudad = 'Tunja';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;
            case 'Puerto Gaitán/Clínica Grupo Sanar':
                $Nombre_sede = 'Clínica Grupo Sanar (Puerto Gaitán)';
                $Direccion = 'Cll. 14 N° 9-87';
                $Horario = 'L-V: 6:30 A.M. a 12:00 M. 2:00 P.M. a 4:30 P.M. Sábado 7:00 A.M. - 11:30 A.M.';
                $mapa = 'https://www.google.com/search?sca_esv=7e5d29643a21257e&rlz=1C1VDKB_esCO1027CO1027&cs=0&tbm=lcl&sxsrf=AM9HkKmKkhv1j2CnfzkDP5PTv6kpC06Qjw:1701997533314&q=Grupo+Preferencial+Sanar&rflfq=1&num=20&stick=H4sIAAAAAAAAAC2QTUoDQRCFyUJx7biQWc0R6v_nBG4FvcAkRAholAm5kDt3gkfIbTyFb8CmF0111Xvfq5vr8Y7DNMNVMkgMbw1H1Zy5uNo5XS3DWschmEiJwruYyaVKxsHMy8Ms09uoCHroJHJPZU1SM06THget7GCWaG-WFDJCMTwdzwp0Vhs-V6iOJJOCmMg6Q5hvNxEqVaUAVWvEOLCHW3chQbBKSzXmxYgrkY0AGv_4ktRkqzliGVJVgrTb2BvmTaBwIK_zIMjWJicqdizIUFVOdSc3SpAaLiN_sZS0EjbVXgQttKYhf0hhLSxwQDAAuDC81m0xpHAKraUQg6ZFCdyVdN1AVjmxVbXKGkUpvzeb383t8_y2PVy-jtNpP23Pp93l5_Pq_mE5f7xPj8v-Zb_sj7vD_Do9zcd5-QO3b_SD4gEAAA&ved=2ahUKEwjyvITz0v6CAxViRzABHXFTAg8QicgKegQIDRAF&rldimm=16437653276024437365#rlfi=hd:;si:;mv:[[4.3172790999999995,-72.0779876],[4.3091468,-72.0895941]]';
                $ciudad = 'Puerto Gaitán';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
               $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
            case 'Mocoa/Diagnostico E.U':
                $Nombre_sede = 'Diagnostico E.U (Mocoa)';
                $Direccion = 'Cll. 12 N° 9-103, barrio Villacolombia';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. 2:00 P.M. a 5:00 P.M. Sábado 7:30 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Diagn%C3%B3stico+Eu/@1.1504497,-76.6555199,15z/data=!4m6!3m5!1s0x8e28b284d0634d39:0xe0e1e18b3d461040!8m2!3d1.1507495!4d-76.649383!16s%2Fg%2F11hbvbw6gp?hl=es-419&entry=ttu';
                $ciudad = 'Mocoa';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break; 
            case 'Puerto Asís/Clínica Salud Center':
                $Nombre_sede = 'Clínica Salud Center (Puerto Asís)';
                $Direccion = 'Cll 9 N° 24-74, Barrio el puerto - Diagonal a la bomba los cristales - Vía a la calle angosta.';
                $Horario = 'L-V 7:00 A.M. a 11:30 A.M. y 14:00 P.M. a 16:30 P.M. Sábado 7:00 A.M. A 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/wPjcSzQwZKSENkUc7';
                $ciudad = 'Puerto Asís';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;    
            case 'Quibdó/BIOLABORAL IPS':
                $Nombre_sede = 'BIOLABORAL IPS (Quibdó)';
                $Direccion = 'Cra. 8 Calle 30 - 31 Atrás de la bomba de Abdo, Quibdó';
                $Horario = 'L-V: 7:00 A.M. 5:00 P.M. (Jornada Continua)  S: 7:00 A.M. a 12:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/BIOLABORAL+IPS/@5.693548,-76.6585219,17z/data=!4m6!3m5!1s0x8e488fc240cba415:0x9a7a8876a3795446!8m2!3d5.693722!4d-76.6565028!16s%2Fg%2F11qn_x_f2m';
                $ciudad = 'Quibdó';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;   
            case 'Villavicencio/ASEINCAP':
                $Nombre_sede = 'ASEINCAP (Villavicencio)';
                $Direccion = 'Cra 38 N. 33a38 Barzal – Felaifel IPS / Asesorias Integrales';
                $Horario = 'L-V: 6:30 A.M. 4:00 P.M. (Jornada Continua)  S: 7:00 A.M. a 11:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/Asesorias+integrales+ASEINCAP/@4.1449471,-73.6404889,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x25e46b336df988c2!8m2!3d4.1449471!4d-73.6383002';
                $ciudad = 'Villavicencio';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;  
             case 'Valledupar/APREHSI GROUP':
                $Nombre_sede = 'APREHSI GROUP (Valledupar)';
                $Direccion = 'Transv. 18b #20-32, Las Delicias';
                $Horario = 'L-V 7:00 A.M. a 12 M. 2:00 P.M. a 5:00 P.M. S: 8:00 A.M. a 12 M.';
                $mapa = 'https://www.google.com/maps/dir/6.2999416,-75.5626034/aprehsi+valledupar/@10.466275,-73.2614809,14.75z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8e8ab9c74abc69e3:0xa0282450cff7644d!2m2!1d-73.2544176!2d10.4660976';
                $ciudad = 'Valledupar';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;     
            case 'Caucasia/Nueva ASC en Salud Total SAS':
                $Nombre_sede = 'Nueva ASC en Salud Total SAS (Caucasia)';
                $Direccion = 'Cll 18 N° 12 - 04, Barrio el Centenario';
                $Horario = 'L-V 7:00 A.M. a 12:00 M. - 2:00 P.M a 3:00 P.M.; Sábado 7:00 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Nueva+ASC+en+Salud+Ocupacional+IPS/@7.9877552,-75.2026775,16z/data=!4m6!3m5!1s0x8e5b6fa53e776d3d:0x25928f90ce174f2a!8m2!3d7.9873089!4d-75.198107!16s%2Fg%2F11qg_yw7tv?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D';
                $ciudad = 'Caucasia';
                $Texto1= '<p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p><br>';
                $Texto2= '';
                $Texto3= '<p style="font-family:arial;font-size:18px;color:#e60000"><b>RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.</b></p><br>';
                $Texto4= '<p style="font-family:arial;font-size:18px;color:#e60000;text-align:center"><a href="https://www.cedisalud.com.co/orden_de_servicio?i='.$Clave2.'"><img src="https://www.cedisalud.com.co/imagine/orden.jpg" style="width:15em"></img></a><p>';
                $Texto5= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden5.jpg" style="width:100%"></a></p>';
                $Texto6= '<p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/orden6.jpg" style="width:100%"></a></p>';
                break;      
        }
       $Fecha=$_POST["Fecha"];
       $dia = strftime("%e", strtotime($Fecha));
       $mes0 = strftime("%m", strtotime($Fecha));
       $ano = strftime("%Y", strtotime($Fecha));
       $fecha_actual = date("d-m-Y ");
       $Fecha_notificacion = date("Y-m-d ",strtotime($fecha_actual."+ 1 days")); 
       switch ($mes0) {
            case 1:
                $mes = 'enero';
                break;
            case 2:
                $mes = 'febrero';
                break;
            case 3:
                $mes = 'marzo';
                break;
            case 4:
                $mes = 'abril';
                break;
            case 5:
                $mes = 'mayo';
                break;
            case 6:
                $mes = 'junio';
                break;
            case 7:
                $mes = 'julio';
                break;
            case 8:
                $mes = 'agosto';
                break;
            case 9:
                $mes = 'septiembre';
                break;
            case 10:
                $mes = 'octubre';
                break;
            case 11:
                $mes = 'noviembre';
                break;
            case 12:
                $mes = 'diciembre';
                break;
        }
        $Nombre=$_POST["Nombre"];
        $Apellidos=$_POST["Apellidos"];
        $Tipo=$_POST["Tipo"];
        $Documento=$_POST["Documento"];
        $Nacimiento=$_POST["Nacimiento"];
        $Fecha_actual = date('Y-m-d H:i:s');
        $fecha1 = new DateTime("$Fecha_actual");
        $fecha2 = new DateTime("$Nacimiento");
        $diferencia = $fecha1->diff($fecha2);
        $Edad = $diferencia->y;
        $Genero=$_POST["Genero"];
        $Cargo=$_POST["Cargo"];
        $Celular=$_POST["Celular"];
        $Email=$_POST["Email"];
        $Email2=$_POST["Email2"];
        $Examen=$_POST["Examen"];
        $Especifico=$_POST["Especifico"];
        $P=$_POST["P"];
        $Cargo2=$_POST["Cargo2"];
        $Codigo=$_POST["Codigo"];
        $lumbosacra ='';
        $lumbosacra2 ='';
        $Recomencaciones = 'recomendaciones_general';
        if($P == 1) {
        switch ($Especifico) {
            case 'Ingreso para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura (realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Evaluación psicológica espacios confinados<br>Concepto aptitud laboral trabajo en alturas y espacios confinados<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';
                break;
            case 'Ingreso para conductores':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Concepto aptitud laboral conducción';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Concepto aptitud laboral conducción</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_conductores';
                break;   
            case 'Ingreso manipulador de alimentos':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, KOH en uñas, Coprológico, Frotis faríngeo, Concepto aptitud laboral manipulación de alimentos';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>KOH en uñas<br>Coprológico<br>Frotis faríngeo<br>Concepto aptitud laboral manipulación de alimentos</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_manipulacion';
                break;  
            case 'Ingreso seguridad vial y énfasis en alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral conducción y trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_vial_alturas';
                break;  
            case 'Ingreso seguridad vial y énfasis espacios confinados y alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia <i>(marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral conducción y trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_vial_alturas';
                break;      
            case 'Ingreso con énfasis en alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado).';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i>.</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';
                break; 
            case 'Periódico seguridad vial y énfasis en alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado).';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral conducción y trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i>.</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_vial_alturas';
                break;  
            case 'Periódico seguridad vial y énfasis espacios confinados y alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia <i>(marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i>, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral conducción y trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral conducción y trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i>.</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_vial_alturas';
                break;     
            case 'Periódico de alturas':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Concepto aptitud laboral trabajo en alturas, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Concepto aptitud laboral trabajo en alturas<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i>.</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';
                break;  
            case 'Periódico manipulador de alimentos':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, KOH en uñas, Coprológico, Frotis faríngeo, Concepto aptitud laboral manipulación de alimentos';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>KOH en uñas<br>Coprológico<br>Frotis faríngeo<br>Concepto aptitud laboral manipulación de alimentos</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_manipulacion';
                break;  
            case 'Periódico para conductores':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Colesterol total, Trigliceridos, Glicemia en ayunas, Prueba de sustancia (marihuana y cocaína), Psocosensométrico (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.), Concepto aptitud laboral conducción.';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Prueba de sustancia <i>(marihuana y cocaína)</i><br>Psocosensométrico<i> (1. Test de atención concentrada y resistencia a la monotonía, 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. Test de personalidad.)</i><br>Concepto aptitud laboral conducción.</td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_conductores';
                break;  
            case 'Postincapacidad':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 10:00 A.M. A 3:00 P.M';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b></td>
                        <td style="font-family:arial;font-size:20px">Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.<br><span style="color:#cc0000">HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 10:00 A.M. A 3:00 P.M</span></td>
                    </tr>';
                break; 
            case 'Retorno laboral':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.</td>
                    </tr>';
                break;  
            case 'Seguimiento, recomendaciones y/o restricciones médicas':
                $descripcion2 = 'Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica.<br><span style="color:#cc0000">HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00</span></td>
                    </tr>';
                break;
            case 'Periódico para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Evaluación psicológica espacios confinados<br>Concepto aptitud laboral trabajo en alturas y espacios confinados<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';
                break;  
            case 'Periódico para alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Concepto aptitud laboral trabajo en alturas y espacios confinados, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Evaluación psicológica espacios confinados<br>Concepto aptitud laboral trabajo en alturas y espacios confinados<br>Prueba de embarazo <i>(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</i></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';
                break;     
            case 'PRUEBA PSICOSENSOMETRICA O PSICOMOTRIZ PARA CONDUCTOR':
                $descripcion2 = 'Exámen médico con énfasis osteomuscular, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Trigliceridos, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologicas), Evaluación psicológica espacios confinados, Prueba de sustancia MD2 (marihuana y cocaina), Concepto aptitud laboral trabajo en alturas y espacios confinados y conduccion, Todos los concepto en el mismo certificado de aptitud laboral, Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Trigliceridos<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologicas)<br>Evaluación psicológica espacios confinados<br>Prueba de sustancia MD2 (marihuana y cocaina)<br>Concepto aptitud laboral trabajo en alturas y espacios confinados y conduccion<br>Todos los concepto en el mismo certificado de aptitud laboral<br>Prueba de embarazo (Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)</p></td>
                    </tr>';
                    $Recomencaciones = 'recomendaciones_conductores';
                break;  
            case 'INGRESO TIPO 2':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE) , Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE) <br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                    </tr>';
                break;   
            case '3A: INGRESO CON ENFASIS EN ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma, Cuestionario de alturas, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>Laboratorio:<br>glucemia en ayunas, perfil lipìdico, hemoleucograma<br>Cuestionario de alturas<br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                        $Recomencaciones = 'recomendaciones_alturas';
                break;  
            case '3B: INGRESO CONDUCTORES SEGURIDAD VIAL Y ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br>glucemia en ayunas, perfil lipìdico, hemoleucograma
                         Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más<br>
                         Radiografía de columna lumbo-sacra:<br>(para conductores de vehículos u operadores de maquinaria amarilla)<br>
                         Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                         Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                         Vacunación:Tetano</span><br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                $Recomencaciones = 'recomendaciones_vial_alturas';        
                $lumbosacra ='<p style="font-family:arial;font-size:20px!important"><b>EL DÍA ANTERIOR AL EXAMEN:</b></p>
                    <p style="font-family:arial;font-size:20px!important"><b>1.</b>	Hacer dieta blanda: sopas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>2.</b>	No comer ni tomar carne, derivados de la leche, grasas o bebidas con gas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>3.</b>	30 minutos después de la última comida se toma la mitad del contenido de un frasco de Citromel, o de Aceite de Recino o Travad oral.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>4.</b>	A las 10:00 P.M. el otro medio frasco.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>5.</b>	Después de la ingesta de Citromel o Travad Oral, no consumir alimentos, no fumar, no tomar café, no tomar líquidos que tenga gas, no lácteos, no grasas, no carnes rojas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>6.</b>	Ayuno mínimo de 8 horas.</p>'; 
                $lumbosacra2 ='*
                PREPARACION RADIOGRAFIA LUMBOSACRA:*
                
1.	HACER DIETA BLANDA: SOPAS.
2.	NO COMER NI TOMAR: CARNE DERIVADOS DE LA LECHE GRASAS, BEBIDAS CON GAS.
3.	30 MINUTOS DESPUÉS DE LA ÚLTIMA COMIDA SE TOMA LA MITAD DEL CONTENIDO DE UN FRASCO DE CITROMEL O DE ACEITE DE RICINO O TRAVAD ORAL.
4.	A LAS 10:00 P.M. EL OTRO MEDIO FRASCO.
5.	DESPUÉS DE LA INGESTA DEL CITROMEL, O TRAVAD ORAL NO CONSUMIR ALIMENTOS,NO FUMAR, NO TOMAR CAFÉ, NO TOMAR LÍQUIDOS QUE CONTENGAN GAS, NO LÁCTEOS, NO GRASAS, NO CARNES ROJAS.
6.	AYUNO MINIMO DE 8 HORAS.
';       
                break;
             case '3C: INGRESO CONDUCTORES SEGURIDAD VIAL':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico, Laboratorio:, glucemia en ayunas, perfil lipídico, hemoleucograma,  Electrocardiograma (EKG):, a personas de 45 años o más,  Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla),  adiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px"><p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br>glucemia en ayunas, perfil lipídico, hemoleucograma<br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de columna lumbo-sacra:<br>(para conductores de vehículos u operadores de maquinaria amarilla)<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</span>
                        </tr>';
                $Recomencaciones = 'recomendaciones_conductores';        
                $lumbosacra ='<p style="font-family:arial;font-size:20px!important"><b>EL DÍA ANTERIOR AL EXAMEN:</b></p>
                    <p style="font-family:arial;font-size:20px!important"><b>1.</b>	Hacer dieta blanda: sopas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>2.</b>	No comer ni tomar carne, derivados de la leche, grasas o bebidas con gas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>3.</b>	30 minutos después de la última comida se toma la mitad del contenido de un frasco de Citromel, o de Aceite de Recino o Travad oral.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>4.</b>	A las 10:00 P.M. el otro medio frasco.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>5.</b>	Después de la ingesta de Citromel o Travad Oral, no consumir alimentos, no fumar, no tomar café, no tomar líquidos que tenga gas, no lácteos, no grasas, no carnes rojas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>6.</b>	Ayuno mínimo de 8 horas.</p>';     
                $lumbosacra2 ='
                *PREPARACION RADIOGRAFIA LUMBOSACRA:*
                
1.	HACER DIETA BLANDA: SOPAS.
2.	NO COMER NI TOMAR: CARNE DERIVADOS DE LA LECHE GRASAS, BEBIDAS CON GAS.
3.	30 MINUTOS DESPUÉS DE LA ÚLTIMA COMIDA SE TOMA LA MITAD DEL CONTENIDO DE UN FRASCO DE CITROMEL O DE ACEITE DE RICINO O TRAVAD ORAL.
4.	A LAS 10:00 P.M. EL OTRO MEDIO FRASCO.
5.	DESPUÉS DE LA INGESTA DEL CITROMEL, O TRAVAD ORAL NO CONSUMIR ALIMENTOS,NO FUMAR, NO TOMAR CAFÉ, NO TOMAR LÍQUIDOS QUE CONTENGAN GAS, NO LÁCTEOS, NO GRASAS, NO CARNES ROJAS.
6.	AYUNO MINIMO DE 8 HORAS.
'; 
                break;  
            case 'PERIÓDICO TIPO 1':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Optometría<br>Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</p></td>
                    </tr>';
                break;     
            case 'PERIÓDICO TIPO 2':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE) <br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                    </tr>';
                break;   
            case '3A: PERIÓDICO CON ENFASIS EN ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucograma, Cuestionario de alturas, Electrocardiograma (EKG):, a personas de 45 años o más,  Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Optometría<br>Audiometría<br>Espirometría<br>Laboratorio:<br>glucemia en ayunas, perfil lipìdico, hemoleucograma<br>Cuestionario de alturas<br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                    $Recomencaciones = 'recomendaciones_alturas';    
                break;  
            case '3B: PERIÓDICO CONDUCTORES SEGURIDAD VIAL Y ALTURAS':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,, Laboratorio:, glucemia en ayunas, perfil lipìdico, hemoleucogramaElectrocardiograma (EKG): a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Cuestionario de alturas, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br>glucemia en ayunas, perfil lipìdico, hemoleucograma
                         Electrocardiograma (EKG):<br></span><span style="font-family:verdana">a personas de 45 años o más<br>
                         Radiografía de columna lumbo-sacra:<br>(para conductores de vehículos u operadores de maquinaria amarilla)<br>
                         Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                         Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                         Vacunación:Tetano</span><br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                $Recomencaciones = 'recomendaciones_vial_alturas';        
                $lumbosacra ='<p style="font-family:arial;font-size:20px!important"><b>EL DÍA ANTERIOR AL EXAMEN:</b></p>
                    <p style="font-family:arial;font-size:20px!important"><b>1.</b>	Hacer dieta blanda: sopas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>2.</b>	No comer ni tomar carne, derivados de la leche, grasas o bebidas con gas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>3.</b>	30 minutos después de la última comida se toma la mitad del contenido de un frasco de Citromel, o de Aceite de Recino o Travad oral.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>4.</b>	A las 10:00 P.M. el otro medio frasco.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>5.</b>	Después de la ingesta de Citromel o Travad Oral, no consumir alimentos, no fumar, no tomar café, no tomar líquidos que tenga gas, no lácteos, no grasas, no carnes rojas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>6.</b>	Ayuno mínimo de 8 horas.</p>';   
                $lumbosacra2 ='
                *PREPARACION RADIOGRAFIA LUMBOSACRA:*
                
1.	HACER DIETA BLANDA: SOPAS.
2.	NO COMER NI TOMAR: CARNE DERIVADOS DE LA LECHE GRASAS, BEBIDAS CON GAS.
3.	30 MINUTOS DESPUÉS DE LA ÚLTIMA COMIDA SE TOMA LA MITAD DEL CONTENIDO DE UN FRASCO DE CITROMEL O DE ACEITE DE RICINO O TRAVAD ORAL.
4.	A LAS 10:00 P.M. EL OTRO MEDIO FRASCO.
5.	DESPUÉS DE LA INGESTA DEL CITROMEL, O TRAVAD ORAL NO CONSUMIR ALIMENTOS,NO FUMAR, NO TOMAR CAFÉ, NO TOMAR LÍQUIDOS QUE CONTENGAN GAS, NO LÁCTEOS, NO GRASAS, NO CARNES ROJAS.
6.	AYUNO MINIMO DE 8 HORAS.
'; 
                break;
             case '3C: PERIÓDICO CONDUCTORES SEGURIDAD VIAL':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,, Laboratorio:, glucemia en ayunas, perfil lipídico, hemoleucograma, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla), Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico),  Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px"><p>Examen médico con énfasis osteomuscular, Optometría, Audiometría, Espirometría, Psicosensométrico, Test de psicología psicométrico,<br>Laboratorio:<br>glucemia en ayunas, perfil lipídico, hemoleucograma<br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de columna lumbo-sacra:<br>(para conductores de vehículos u operadores de maquinaria amarilla)<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                $Recomencaciones = 'recomendaciones_conductores';       
                $lumbosacra ='<p style="font-family:arial;font-size:20px!important"><b>EL DÍA ANTERIOR AL EXAMEN:</b></p>
                    <p style="font-family:arial;font-size:20px!important"><b>1.</b>	Hacer dieta blanda: sopas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>2.</b>	No comer ni tomar carne, derivados de la leche, grasas o bebidas con gas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>3.</b>	30 minutos después de la última comida se toma la mitad del contenido de un frasco de Citromel, o de Aceite de Recino o Travad oral.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>4.</b>	A las 10:00 P.M. el otro medio frasco.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>5.</b>	Después de la ingesta de Citromel o Travad Oral, no consumir alimentos, no fumar, no tomar café, no tomar líquidos que tenga gas, no lácteos, no grasas, no carnes rojas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>6.</b>	Ayuno mínimo de 8 horas.</p>';   
                $lumbosacra2 ='*
                PREPARACION RADIOGRAFIA LUMBOSACRA:*
                
1.	HACER DIETA BLANDA: SOPAS.
2.	NO COMER NI TOMAR: CARNE DERIVADOS DE LA LECHE GRASAS, BEBIDAS CON GAS.
3.	30 MINUTOS DESPUÉS DE LA ÚLTIMA COMIDA SE TOMA LA MITAD DEL CONTENIDO DE UN FRASCO DE CITROMEL O DE ACEITE DE RICINO O TRAVAD ORAL.
4.	A LAS 10:00 P.M. EL OTRO MEDIO FRASCO.
5.	DESPUÉS DE LA INGESTA DEL CITROMEL, O TRAVAD ORAL NO CONSUMIR ALIMENTOS,NO FUMAR, NO TOMAR CAFÉ, NO TOMAR LÍQUIDOS QUE CONTENGAN GAS, NO LÁCTEOS, NO GRASAS, NO CARNES ROJAS.
6.	AYUNO MINIMO DE 8 HORAS.
';     
                break;  
            case 'EGRESO TIPO 1':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría (no realizar la tamización visual si lleva menos de un año de realizada), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Visiometría (no realizar la tamización visual si lleva menos de un año de realizada)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                    </tr>';
                break; 
            case 'EGRESO TIPO 2':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px"><p>Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                break;  
             case '3A: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más<br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                break; 
            case '3B: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):,  a personas de 45 años o más, Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:, Tetano, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más<br>
                        Electrocardiograma (EKG):<br> a personas de 45 años o más<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:<br>Tetano<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                break;   
            case '3C: EGRESO':
                $descripcion2 = 'Examen médico con énfasis osteomuscular, Visiometría, Audiometría, Espirometría, NOTA: Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más, Electrocardiograma (EKG):, a personas de 45 años o más, Radiografía de columna lumbo-sacra:, (para conductores de vehículos u operadores de maquinaria amarilla),  Radiografía de tórax PA y lateral:, (si y solo si, sale la espirometría alterada al ingreso o periódico), Radiografía de tórax PA y lateral:, (PARA SOLDADORES O TRABAJO EN CALIENTE), Vacunación:Tetano<, Hepatitis B (Solo para Relleno Sanitario Pradera)';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Examen médico con énfasis osteomuscular<br>Visiometría<br>Audiometría<br>Espirometría<br>NOTA: <span style="font-family:verdana">Estos últimos tres exámenes complementarios, solo se realizarán si tienen un año o más</span><br>
                        Electrocardiograma (EKG):<br>a personas de 45 años o más<br>
                        Radiografía de columna lumbo-sacra:<br>(para conductores de vehículos u operadores de maquinaria amarilla)<br>
                        Radiografía de tórax PA y lateral:<br>(si y solo si, sale la espirometría alterada al ingreso o periódico)<br>
                        Radiografía de tórax PA y lateral:<br>(PARA SOLDADORES O TRABAJO EN CALIENTE)<br>
                        Vacunación:Tetano<<br>Hepatitis B (Solo para Relleno Sanitario Pradera)</td>
                        </tr>';
                $lumbosacra ='<p style="font-family:arial;font-size:20px!important"><b>EL DÍA ANTERIOR AL EXAMEN:</b></p>
                    <p style="font-family:arial;font-size:20px!important"><b>1.</b>	Hacer dieta blanda: sopas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>2.</b>	No comer ni tomar carne, derivados de la leche, grasas o bebidas con gas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>3.</b>	30 minutos después de la última comida se toma la mitad del contenido de un frasco de Citromel, o de Aceite de Recino o Travad oral.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>4.</b>	A las 10:00 P.M. el otro medio frasco.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>5.</b>	Después de la ingesta de Citromel o Travad Oral, no consumir alimentos, no fumar, no tomar café, no tomar líquidos que tenga gas, no lácteos, no grasas, no carnes rojas.</p>
                    <p style="font-family:arial;font-size:20px!important"><b>6.</b>	Ayuno mínimo de 8 horas.</p>';   
                $lumbosacra2 ='
                *PREPARACION RADIOGRAFIA LUMBOSACRA:*
                
1.	HACER DIETA BLANDA: SOPAS.
2.	NO COMER NI TOMAR: CARNE DERIVADOS DE LA LECHE GRASAS, BEBIDAS CON GAS.
3.	30 MINUTOS DESPUÉS DE LA ÚLTIMA COMIDA SE TOMA LA MITAD DEL CONTENIDO DE UN FRASCO DE CITROMEL O DE ACEITE DE RICINO O TRAVAD ORAL.
4.	A LAS 10:00 P.M. EL OTRO MEDIO FRASCO.
5.	DESPUÉS DE LA INGESTA DEL CITROMEL, O TRAVAD ORAL NO CONSUMIR ALIMENTOS,NO FUMAR, NO TOMAR CAFÉ, NO TOMAR LÍQUIDOS QUE CONTENGAN GAS, NO LÁCTEOS, NO GRASAS, NO CARNES ROJAS.
6.	AYUNO MINIMO DE 8 HORAS.
';     
                break;  
            case 'Ingreso seguridad vial, énfasis en alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscularr, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Triglicerido, Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),, Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones.  6. prueba de personalidad-test para conductor.), Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados., NOTA: En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscularr<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Triglicerido<br>Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),<br>Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones.  6. prueba de personalidad-test para conductor.)<br>Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados.<br>NOTA: <span style="font-family:verdana">En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.</span>
                        </tr>';
                $Recomencaciones = 'recomendaciones_vial_alturas';        
                break;  
            case 'Periódico seguridad vial, énfasis en alturas y espacios confinados':
                $descripcion2 = 'Exámen médico con énfasis osteomuscularr, Visiometría tamíz, Audiometría tamíz, Espirometría, Colesterol total, Triglicerido, Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),, Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. prueba de personalidad-test para conductor.), Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados., NOTA: En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.';
                $descripcion = '<tr>
                        <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                        <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscularr<br>Visiometría tamíz<br>Audiometría tamíz<br>Espirometría<br>Colesterol total<br>Triglicerido<br>Glicemia en ayunas, prueba de sustancia (marihuana y cocaína),<br>Psicosensométrico (1. Test de atención concentrada y resistencia a la monotonía. 2. Test de reacciones múltiples discriminativas. 3. test de velocidad anticipada. 4.Test de coordinación bimanual. 5. Test de toma de decisiones. 6. prueba de personalidad-test para conductor.)<br>Evaluación psicológica y concepto aptitud laboral trabajo en alturas y espacios confinados.<br>NOTA: <span style="font-family:verdana">En caso de de requerir examenes adicionales, por favor escribirlos en el campo observaciones.</span>
                        </tr>';
                $Recomencaciones = 'recomendaciones_vial_alturas';        
                break;     
            case 'Ingreso con énfasis osteomuscular':
                $descripcion2 = 'Ingreso con énfasis osteomuscular';
                $descripcion = 'Ingreso con énfasis osteomuscular';
                break;  
            case 'Ingreso con énfasis osteomuscular, visiometría tamíz':
                $descripcion2 = 'Ingreso con énfasis osteomuscular, visiometría tamíz';
                $descripcion = 'Ingreso con énfasis osteomuscular, visiometría tamíz';
                break; 
            case 'Ingreso con énfasis osteomuscular, audiometría tamíz':
                $descripcion2 = 'Ingreso con énfasis osteomuscular, audiometría tamíz';
                $descripcion = 'Ingreso con énfasis osteomuscular, audiometría tamíz';
                break; 
            case 'Ingreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz':
                $descripcion2 = 'Ingreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                $descripcion = 'Ingreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                break;     
            case 'Egreso con énfasis osteomuscular':
                $descripcion2 = 'Egreso con énfasis osteomuscular';
                $descripcion = 'Egreso con énfasis osteomuscular';
                break;  
            case 'Egreso con énfasis osteomuscular, visiometría tamíz':
                $descripcion2 = 'Egreso con énfasis osteomuscular, visiometría tamíz';
                $descripcion = 'Egreso con énfasis osteomuscular, visiometría tamíz';
                break; 
            case 'Egreso con énfasis osteomuscular, audiometría tamíz':
                $descripcion2 = 'Egreso con énfasis osteomuscular, audiometría tamíz';
                $descripcion = 'Egreso con énfasis osteomuscular, audiometría tamíz';
                break; 
            case 'Egreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz':
                $descripcion2 = 'Egreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                $descripcion = 'Egreso con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                break; 
            case 'Periódico con énfasis osteomuscular':
                $descripcion2 = 'Periódico con énfasis osteomuscular';
                $descripcion = 'Periódico con énfasis osteomuscular';
                break;  
            case 'Periódico con énfasis osteomuscular, visiometría tamíz':
                $descripcion2 = 'Periódico con énfasis osteomuscular, visiometría tamíz';
                $descripcion = 'Periódico con énfasis osteomuscular, visiometría tamíz';
                break; 
            case 'Periódico con énfasis osteomuscular, audiometría tamíz':
                $descripcion2 = 'Periódico con énfasis osteomuscular, audiometría tamíz';
                $descripcion = 'Periódico con énfasis osteomuscular, audiometría tamíz';
                break; 
            case 'Periódico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz':
                $descripcion2 = 'Periódico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                $descripcion = 'Periódico con énfasis osteomuscular, visiometría tamíz, audiometría tamíz';
                break; 
            default:
                $descripcion2 = $Especifico;
                $descripcion = $Especifico;
                break;    
        } 
        if($Especifico == 'Postincapacidad' && $Cliente0 == 'Bogotá Central-Galerías/Grupo Ocupacional') {
            $descripcion2 = 'Debe de haber terminado completamente la incapacidad., Presentar su historia clínica reciente, con la información pertinente de la patología a revisar., Este examen es con cita previa a la atención debe ser solicitada con anterioridad, el horario para la toma del examen es a las 10:00 am únicamente, Presentar su historia clínica impresa preferiblemente, o en medio electrónico que pueda ser cargada por correo electrónico. Por whatsapp no se recibe esta información, tampoco será leída del celular del paciente., Tener disponibilidad de tiempo para la consulta.';
            $descripcion = '<tr>
                <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b></td>
                <td style="font-family:arial;font-size:20px">Debe de haber terminado completamente la incapacidad.<br>Presentar su historia clínica reciente, con la información pertinente de la patología a revisar.<br>Este examen es con cita previa a la atención debe ser solicitada con anterioridad, el horario para la toma del examen es a las 10:00 am únicamente<br>Presentar su historia clínica impresa preferiblemente, o en medio electrónico que pueda ser cargada por correo electrónico. Por whatsapp no se recibe esta información, tampoco será leída del celular del paciente.<br>Tener disponibilidad de tiempo para la consulta.</td>
            </tr>';
        }
        if($Especifico == 'Ingreso para alturas y espacios confinados' && ($Clave == 'jqrzwxrt' || $Clave == 'xfzvszmg' || $Clave == 't7as5tia' || $Clave == 'hwd0qnaq' || $Clave == 'u8v7p2yc' || $Clave == 'rin7eqbp' || $Clave == 'zqi2t04e' || $Clave == 't94d6ari' || $Clave == 'y4a76rj2' || $Clave == '8pqbdm1g' || $Clave == '8jbkihk0' || $Clave == 'v7eillm5')) {
    	    $descripcion2 = 'Exámen médico con énfasis osteomuscular, Optometria, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), , Evaluación psicológica espacios confinados , Concepto aptitud laboral trabajo en alturas y espacios confinados , Hemograma , Radiografia columna lumbosacra , Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado), Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)';
    	    $descripcion = '<tr>
                <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Optometria, Audiometría tamíz<br>Espirometría<br>Perfil Lipidico<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologica), <br>Evaluación psicológica espacios confinados <br>Concepto aptitud laboral trabajo en alturas y espacios confinados <br>Hemograma <br>Radiografia columna lumbosacra <br>Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)<br>Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</span>
                </tr>';
            $Recomencaciones = 'recomendaciones_alturas';  
    	}
    	if($Especifico == 'Periódico para alturas y espacios confinados' && ($Clave == 'jqrzwxrt' || $Clave == 'xfzvszmg' || $Clave == 't7as5tia' || $Clave == 'hwd0qnaq' || $Clave == 'u8v7p2yc' || $Clave == 'rin7eqbp' || $Clave == 'zqi2t04e' || $Clave == 't94d6ari' || $Clave == 'y4a76rj2' || $Clave == '8pqbdm1g' || $Clave == '8jbkihk0' || $Clave == 'v7eillm5')) {
    	    $descripcion2 = 'Exámen médico con énfasis osteomuscular, Optometria, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), , Evaluación psicológica espacios confinados , Concepto aptitud laboral trabajo en alturas y espacios confinados , Hemograma , Radiografia columna lumbosacra , Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado), Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)';
    	    $descripcion = '<tr>
                <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Optometria, Audiometría tamíz<br>Espirometría<br>Perfil Lipidico<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologica), <br>Evaluación psicológica espacios confinados <br>Concepto aptitud laboral trabajo en alturas y espacios confinados <br>Hemograma <br>Radiografia columna lumbosacra <br>Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)<br>Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</span>
                </tr>';
            $Recomencaciones = 'recomendaciones_alturas';  
    	}
    	if($Especifico == 'Ingreso con énfasis en alturas' && ($Clave == 'jqrzwxrt' || $Clave == 'xfzvszmg' || $Clave == 't7as5tia' || $Clave == 'hwd0qnaq' || $Clave == 'u8v7p2yc' || $Clave == 'rin7eqbp' || $Clave == 'zqi2t04e' || $Clave == 't94d6ari' || $Clave == 'y4a76rj2' || $Clave == '8pqbdm1g' || $Clave == '8jbkihk0' || $Clave == 'v7eillm5')) {
    	    $descripcion2 = 'Exámen médico con énfasis osteomuscular, Optometria, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), , Hemograma , Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado) , Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)';
    	    $descripcion = '<tr>
                <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Optometria, Audiometría tamíz<br>Espirometría<br>Perfil Lipidico<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologica), <br>Hemograma <br>Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado) <br>Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</span>
                </tr>';
            $Recomencaciones = 'recomendaciones_alturas';    
    	}
    	if($Especifico == 'Periódico de alturas' && ($Clave == 'jqrzwxrt' || $Clave == 'xfzvszmg' || $Clave == 't7as5tia' || $Clave == 'hwd0qnaq' || $Clave == 'u8v7p2yc' || $Clave == 'rin7eqbp' || $Clave == 'zqi2t04e' || $Clave == 't94d6ari' || $Clave == 'y4a76rj2' || $Clave == '8pqbdm1g' || $Clave == '8jbkihk0' || $Clave == 'v7eillm5')) {
    	    $descripcion2 = 'Exámen médico con énfasis osteomuscular, Optometria, Audiometría tamíz, Espirometría, Perfil Lipidico, Glicemia en ayunas, Cuestionario anexo altura(realizado por médico, no es prueba psicologica), , Hemograma , Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado), Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)';
    	    $descripcion = '<tr>
                <td style="color:#660066;font-family:arial;font-size:20px!important;vertical-align:super"><b>Descripción de exámenes:</b>  </td>
                <td style="font-family:arial;font-size:20px">Exámen médico con énfasis osteomuscular<br>Optometria, Audiometría tamíz<br>Espirometría<br>Perfil Lipidico<br>Glicemia en ayunas<br>Cuestionario anexo altura(realizado por médico, no es prueba psicologica), <br>Hemograma <br>Prueba de embarazo(Aplica sólo para mujeres. La prueba y su resultado deben quedar descritos en el certificado)<br>Electrocardiograma a mayores de 45 AÑOS, (DEBE TENER APLICADA LAS VACUNAS TETANO, FIEBRE AMARILLA, SOLO VERIFICAR ESQUEMA VACUNACION NO APLICAR)</span>
                </tr>';
            $Recomencaciones = 'recomendaciones_alturas';    
    	}
        }
        $Empresa=$_POST["Empresa"];
        $Sector=$_POST["Sector"];
        function obtenerDescripcionSector($Sector) { switch ($Sector) { 
            case "0111": return "Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas"; case "0112": return "Cultivo de arroz"; case "0113": return "Cultivo de hortalizas, raíces y tubérculos"; case "0114": return "Cultivo de tabaco"; case "0115": return "Cultivo de plantas textiles"; case "0119": return "Otros cultivos transitorios n.c.p."; case "0121": return "Cultivo de frutas tropicales y subtropicales"; case "0122": return "Cultivo de plátano y banano"; case "0123": return "Cultivo de café"; case "0124": return "Cultivo de caña de azúcar"; case "0125": return "Cultivo de flor de corte"; case "0126": return "Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos"; case "0127": return "Cultivo de plantas con las que se preparan bebidas"; case "0128": return "Cultivo de especias y de plantas aromáticas y medicinales"; case "0129": return "Otros cultivos permanentes n.c.p."; case "0130": return "Propagación de plantas (actividades de los viveros, excepto viveros forestales)"; case "0141": return "Cría de ganado bovino y bufalino"; case "0142": return "Cría de caballos y otros equinos"; case "0143": return "Cría de ovejas y cabras"; case "0144": return "Cría de ganado porcino"; case "0145": return "Cría de aves de corral"; case "0149": return "Cría de otros animales n.c.p."; case "0150": return "Explotación mixta (agrícola y pecuaria)"; case "0161": return "Actividades de apoyo a la agricultura"; case "0162": return "Actividades de apoyo a la ganadería"; case "0163": return "Actividades posteriores a la cosecha"; case "0164": return "Tratamiento de semillas para propagación"; case "0170": return "Caza ordinaria y mediante trampas y actividades de servicios conexas"; case "0210": return "Silvicultura y otras actividades forestales"; case "0220": return "Extracción de madera"; case "0230": return "Recolección de productos forestales diferentes a la madera"; case "0240": return "Servicios de apoyo a la silvicultura"; case "0311": return "Pesca marítima"; case "0312": return "Pesca de agua dulce"; case "0321": return "Acuicultura marítima"; case "0322": return "Acuicultura de agua dulce"; case "0510": return "Extracción de hulla (carbón de piedra)"; case "0520": return "Extracción de carbón lignito"; case "0610": return "Extracción de petróleo crudo"; case "0620": return "Extracción de gas natural"; case "0710": return "Extracción de minerales de hierro"; case "0721": return "Extracción de minerales de uranio y de torio"; case "0722": return "Extracción de oro y otros metales preciosos"; case "0723": return "Extracción de minerales de níquel"; case "0729": return "Extracción de otros minerales metalíferos no ferrosos n.c.p."; case "0811": return "Extracción de piedra, arena, arcillas comunes, yeso y anhidrita"; case "0812": return "Extracción de arcillas de uso industrial, caliza, caolín y bentonitas"; case "0820": return "Extracción de esmeraldas, piedras preciosas y semipreciosas"; case "0891": return "Extracción de minerales para la fabricación de abonos y productos químicos"; case "0892": return "Extracción de halita (sal)"; case "0899": return "Extracción de otros minerales no metálicos n.c.p."; case "0910": return "Actividades de apoyo para la extracción de petróleo y de gas natural"; case "0990": return "Actividades de apoyo para otras actividades de explotación de minas y canteras"; case "1011": return "Procesamiento y conservación de carne y productos cárnicos"; case "1012": return "Procesamiento y conservación de pescados, crustáceos y moluscos"; case "1020": return "Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos"; case "1030": return "Elaboración de aceites y grasas de origen vegetal y animal"; case "1040": return "Elaboración de productos lácteos"; case "1051": return "Elaboración de productos de molinería"; case "1052": return "Elaboración de almidones y productos derivados del almidón"; case "1061": return "Trilla de café"; case "1062": return "Descafeinado, tostión y molienda del café"; case "1063": return "Otros derivados del café"; case "1071": return "Elaboración y refinación de azúcar"; case "1072": return "Elaboración de panela"; case "1081": return "Elaboración de productos de panadería"; case "1082": return "Elaboración de cacao, chocolate y productos de confitería"; case "1083": return "Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares"; case "1084": return "Elaboración de comidas y platos preparados"; case "1089": return "Elaboración de otros productos alimenticios n.c.p."; case "1090": return "Elaboración de alimentos preparados para animales"; case "1101": return "Destilación, rectificación y mezcla de bebidas alcohólicas"; case "1102": return "Elaboración de bebidas fermentadas no destiladas"; case "1103": return "Producción de malta, elaboración de cervezas y otras bebidas malteadas"; case "1104": return "Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas"; case "1200": return "Elaboración de productos de tabaco"; case "1311": return "Preparación e hilatura de fibras textiles"; case "1312": return "Tejeduría de productos textiles"; case "1313": return "Acabado de productos textiles"; case "1391": return "Fabricación de tejidos de punto y ganchillo"; case "1392": return "Confección de artículos con materiales textiles, excepto prendas de vestir"; case "1393": return "Fabricación de tapetes y alfombras para pisos"; case "1394": return "Fabricación de cuerdas, cordeles, cables, bramantes y redes"; case "1399": return "Fabricación de otros artículos textiles n.c.p."; case "1410": return "Confección de prendas de vestir, excepto prendas de piel"; case "1420": return "Fabricación de artículos de piel"; case "1430": return "Fabricación de artículos de punto y ganchillo"; case "1511": return "Curtido y recurtido de cueros; recurtido y teñido de pieles"; case "1512": return "Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería"; case "1513": return "Fabricación de artículos de viaje, bolsos de mano y artículos similares; artículos de talabartería y guarnicionería elaborados en otros materiales"; case "1521": return "Fabricación de calzado de cuero y piel, con cualquier tipo de suela"; case "1522": return "Fabricación de otros tipos de calzado, excepto calzado de cuero y piel"; case "1523": return "Fabricación de partes del calzado"; case "1610": return "Aserrado, acepillado e impregnación de la madera"; case "1620": return "Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles"; case "1630": return "Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción"; case "1640": return "Fabricación de recipientes de madera"; case "1690": return "Fabricación de otros productos de madera; fabricación de artículos de corcho, cestería y espartería"; case "1701": return "Fabricación de pulpas (pastas) celulósicas; papel y cartón"; case "1702": return "Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón."; case "1709": return "Fabricación de otros artículos de papel y cartón"; case "1811": return "Actividades de impresión"; case "1812": return "Actividades de servicios relacionados con la impresión"; case "1820": return "Producción de copias a partir de grabaciones originales"; case "1910": return "Fabricación de productos de hornos de coque"; case "1921": return "Fabricación de productos de la refinación del petróleo"; case "1922": return "Actividad de mezcla de combustibles"; case "2011": return "Fabricación de sustancias y productos químicos básicos"; case "2012": return "Fabricación de abonos y compuestos inorgánicos nitrogenados"; case "2013": return "Fabricación de plásticos en formas primarias"; case "2014": return "Fabricación de caucho sintético en formas primarias"; case "2021": return "Fabricación de plaguicidas y otros productos químicos de uso agropecuario"; case "2022": return "Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas"; case "2023": return "Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador"; case "2029": return "Fabricación de otros productos químicos n.c.p."; case "2030": return "Fabricación de fibras sintéticas y artificiales"; case "2100": return "Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico"; case "2211": return "Fabricación de llantas y neumáticos de caucho"; case "2212": return "Reencauche de llantas usadas"; case "2219": return "Fabricación de formas básicas de caucho y otros productos de caucho n.c.p."; case "2221": return "Fabricación de formas básicas de plástico"; case "2229": return "Fabricación de artículos de plástico n.c.p."; case "2310": return "Fabricación de vidrio y productos de vidrio"; case "2391": return "Fabricación de productos refractarios"; case "2392": return "Fabricación de materiales de arcilla para la construcción"; case "2393": return "Fabricación de otros productos de cerámica y porcelana"; case "2394": return "Fabricación de cemento, cal y yeso"; case "2395": return "Fabricación de artículos de hormigón, cemento y yeso"; case "2396": return "Corte, tallado y acabado de la piedra"; case "2399": return "Fabricación de otros productos minerales no metálicos n.c.p."; case "2410": return "Industrias básicas de hierro y de acero"; case "2421": return "Industrias básicas de metales preciosos"; case "2429": return "Industrias básicas de otros metales no ferrosos"; case "2431": return "Fundición de hierro y de acero"; case "2432": return "Fundición de metales no ferrosos"; case "2511": return "Fabricación de productos metálicos para uso estructural"; case "2512": return "Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías"; case "2513": return "Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central"; case "2520": return "Fabricación de armas y municiones"; case "2591": return "Forja, prensado, estampado y laminado de metal; pulvimetalurgia"; case "2592": return "Tratamiento y revestimiento de metales; mecanizado"; case "2593": return "Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería"; case "2599": return "Fabricación de otros productos elaborados de metal n.c.p."; case "2610": return "Fabricación de componentes y tableros electrónicos"; case "2620": return "Fabricación de computadoras y de equipo periférico"; case "2630": return "Fabricación de equipos de comunicación"; case "2640": return "Fabricación de aparatos electrónicos de consumo"; case "2651": return "Fabricación de equipo de medición, prueba, navegación y control"; case "2652": return "Fabricación de relojes"; case "2660": return "Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico"; case "2670": return "Fabricación de instrumentos ópticos y equipo fotográfico"; case "2680": return "Fabricación de medios magnéticos y ópticos para almacenamiento de datos"; case "2711": return "Fabricación de motores, generadores y transformadores eléctricos"; case "2712": return "Fabricación de aparatos de distribución y control de la energía eléctrica"; case "2720": return "Fabricación de pilas, baterías y acumuladores eléctricos"; case "2731": return "Fabricación de hilos y cables eléctricos y de fibra óptica"; case "2732": return "Fabricación de dispositivos de cableado"; case "2740": return "Fabricación de equipos eléctricos de iluminación"; case "2750": return "Fabricación de aparatos de uso doméstico"; case "2790": return "Fabricación de otros tipos de equipo eléctrico n.c.p."; case "2811": return "Fabricación de motores, turbinas, y partes para motores de combustión interna"; case "2812": return "Fabricación de equipos de potencia hidráulica y neumática"; case "2813": return "Fabricación de otras bombas, compresores, grifos y válvulas"; case "2814": return "Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión"; case "2815": return "Fabricación de hornos, hogares y quemadores industriales"; case "2816": return "Fabricación de equipo de elevación y manipulación"; case "2817": return "Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico)"; case "2818": return "Fabricación de herramientas manuales con motor"; case "2819": return "Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p."; case "2821": return "Fabricación de maquinaria agropecuaria y forestal"; case "2822": return "Fabricación de máquinas formadoras de metal y de máquinas herramienta"; case "2823": return "Fabricación de maquinaria para la metalurgia"; case "2824": return "Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción"; case "2825": return "Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco"; case "2826": return "Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros"; case "2829": return "Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p."; case "2910": return "Fabricación de vehículos automotores y sus motores"; case "2920": return "Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques"; case "2930": return "Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores"; case "3011": return "Construcción de barcos y de estructuras flotantes"; case "3012": return "Construcción de embarcaciones de recreo y deporte"; case "3020": return "Fabricación de locomotoras y de material rodante para ferrocarriles"; case "3030": return "Fabricación de aeronaves, naves espaciales y de maquinaria conexa"; case "3040": return "Fabricación de vehículos militares de combate"; case "3091": return "Fabricación de motocicletas"; case "3092": return "Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad"; case "3099": return "Fabricación de otros tipos de equipo de transporte n.c.p."; case "3110": return "Fabricación de muebles"; case "3120": return "Fabricación de colchones y somieres"; case "3210": return "Fabricación de joyas, bisutería y artículos conexos"; case "3220": return "Fabricación de instrumentos musicales"; case "3230": return "Fabricación de artículos y equipo para la práctica del deporte"; case "3240": return "Fabricación de juegos, juguetes y rompecabezas"; case "3250": return "Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario)"; case "3290": return "Otras industrias manufactureras n.c.p."; case "3311": return "Mantenimiento y reparación especializado de productos elaborados en metal"; case "3312": return "Mantenimiento y reparación especializado de maquinaria y equipo"; case "3313": return "Mantenimiento y reparación especializado de equipo electrónico y óptico"; 
            case "3314": return "Mantenimiento y reparación especializado de equipo eléctrico"; case "3315": return "Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas"; case "3319": return "Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p."; case "3320": return "Instalación especializada de maquinaria y equipo industrial"; case "3511": return "Generación de energía eléctrica"; case "3512": return "Transmisión de energía eléctrica"; case "3513": return "Distribución de energía eléctrica"; case "3514": return "Comercialización de energía eléctrica"; case "3520": return "Producción de gas; distribución de combustibles gaseosos por tuberías"; case "3530": return "Suministro de vapor y aire acondicionado"; case "3600": return "Captación, tratamiento y distribución de agua"; case "3700": return "Evacuación y tratamiento de aguas residuales"; case "3811": return "Recolección de desechos no peligrosos"; case "3812": return "Recolección de desechos peligrosos"; case "3821": return "Tratamiento y disposición de desechos no peligrosos"; case "3822": return "Tratamiento y disposición de desechos peligrosos"; case "3830": return "Recuperación de materiales"; case "3900": return "Actividades de saneamiento ambiental y otros servicios de gestión de desechos"; case "4111": return "Construcción de edificios residenciales"; case "4112": return "Construcción de edificios no residenciales"; case "4210": return "Construcción de carreteras y vías de ferrocarril"; case "4220": return "Construcción de proyectos de servicio público"; case "4290": return "Construcción de otras obras de ingeniería civil"; case "4311": return "Demolición"; case "4312": return "Preparación del terreno"; case "4321": return "Instalaciones eléctricas"; case "4322": return "Instalaciones de fontanería, calefacción y aire acondicionado"; case "4329": return "Otras instalaciones especializadas"; case "4330": return "Terminación y acabado de edificios y obras de ingeniería civil"; case "4390": return "Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil"; case "4511": return "Comercio de vehículos automotores nuevos"; case "4512": return "Comercio de vehículos automotores usados"; case "4520": return "Mantenimiento y reparación de vehículos automotores"; case "4530": return "Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores"; case "4541": return "Comercio de motocicletas y de sus partes, piezas y accesorios"; case "4542": return "Mantenimiento y reparación de motocicletas y de sus partes y piezas"; case "4610": return "Comercio al por mayor a cambio de una retribución o por contrata"; case "4620": return "Comercio al por mayor de materias primas agropecuarias; animales vivos"; case "4631": return "Comercio al por mayor de productos alimenticios"; case "4632": return "Comercio al por mayor de bebidas y tabaco"; case "4641": return "Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico"; case "4642": return "Comercio al por mayor de prendas de vestir"; case "4643": return "Comercio al por mayor de calzado"; case "4644": return "Comercio al por mayor de aparatos y equipo de uso doméstico"; case "4645": return "Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador"; case "4649": return "Comercio al por mayor de otros utensilios domésticos n.c.p."; case "4651": return "Comercio al por mayor de computadores, equipo periférico y programas de informática"; case "4652": return "Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones"; case "4653": return "Comercio al por mayor de maquinaria y equipo agropecuarios"; case "4659": return "Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p."; case "4661": return "Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos"; case "4662": return "Comercio al por mayor de metales y productos metalíferos"; case "4663": return "Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción"; case "4664": return "Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario"; case "4665": return "Comercio al por mayor de desperdicios, desechos y chatarra"; case "4669": return "Comercio al por mayor de otros productos n.c.p."; case "4690": return "Comercio al por mayor no especializado"; case "4711": return "Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco"; case "4719": return "Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco"; case "4721": return "Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados"; case "4722": return "Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados"; case "4723": return "Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados"; case "4724": return "Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados"; case "4729": return "Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados"; case "4731": return "Comercio al por menor de combustible para automotores"; case "4732": return "Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores"; case "4741": return "Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados"; case "4742": return "Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados"; case "4751": return "Comercio al por menor de productos textiles en establecimientos especializados"; case "4752": return "Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados"; case "4753": return "Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados"; case "4754": return "Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación"; case "4755": return "Comercio al por menor de artículos y utensilios de uso doméstico"; case "4759": return "Comercio al por menor de otros artículos domésticos en establecimientos especializados"; case "4761": return "Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados"; case "4762": return "Comercio al por menor de artículos deportivos, en establecimientos especializados"; case "4769": return "Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados"; case "4771": return "Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados"; case "4772": return "Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados."; case "4773": return "Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados"; case "4774": return "Comercio al por menor de otros productos nuevos en establecimientos especializados"; case "4775": return "Comercio al por menor de artículos de segunda mano"; case "4781": return "Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles"; case "4782": return "Comercio al por menor de productos textiles, prendas de vestir y calzado, en puestos de venta móviles"; case "4789": return "Comercio al por menor de otros productos en puestos de venta móviles"; case "4791": return "Comercio al por menor realizado a través de Internet"; case "4792": return "Comercio al por menor realizado a través de casas de venta o por correo"; case "4799": return "Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados."; case "4911": return "Transporte férreo de pasajeros"; case "4912": return "Transporte férreo de carga"; case "4921": return "Transporte de pasajeros"; case "4922": return "Transporte mixto"; case "4923": return "Transporte de carga por carretera"; case "4930": return "Transporte por tuberías"; case "5011": return "Transporte de pasajeros marítimo y de cabotaje"; case "5012": return "Transporte de carga marítimo y de cabotaje"; case "5021": return "Transporte fluvial de pasajeros"; case "5022": return "Transporte fluvial de carga"; case "5111": return "Transporte aéreo nacional de pasajeros"; case "5112": return "Transporte aéreo internacional de pasajeros"; case "5121": return "Transporte aéreo nacional de carga"; case "5122": return "Transporte aéreo internacional de carga"; case "5210": return "Almacenamiento y depósito"; case "5221": return "Actividades de estaciones, vías y servicios complementarios para el transporte terrestre"; case "5222": return "Actividades de puertos y servicios complementarios para el transporte acuático"; case "5223": return "Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo"; case "5224": return "Manipulación de carga"; case "5229": return "Otras actividades complementarias al transporte"; case "5310": return "Actividades postales nacionales"; case "5320": return "Actividades de mensajería"; case "5511": return "Alojamiento en hoteles"; case "5512": return "Alojamiento en apartahoteles"; case "5513": return "Alojamiento en centros vacacionales"; case "5514": return "Alojamiento rural"; case "5519": return "Otros tipos de alojamientos para visitantes"; case "5520": return "Actividades de zonas de camping y parques para vehículos recreacionales"; case "5530": return "Servicio por horas"; case "5590": return "Otros tipos de alojamiento n.c.p."; case "5611": return "Expendio a la mesa de comidas preparadas"; case "5612": return "Expendio por autoservicio de comidas preparadas"; case "5613": return "Expendio de comidas preparadas en cafeterías"; case "5619": return "Otros tipos de expendio de comidas preparadas n.c.p."; case "5621": return "Catering para eventos"; case "5629": return "Actividades de otros servicios de comidas"; case "5630": return "Expendio de bebidas alcohólicas para el consumo dentro del establecimiento"; case "5811": return "Edición de libros"; case "5812": return "Edición de directorios y listas de correo"; case "5813": return "Edición de periódicos, revistas y otras publicaciones periódicas"; case "5819": return "Otros trabajos de edición"; case "5820": return "Edición de programas de informática (software)"; case "5911": return "Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión"; case "5912": return "Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión"; case "5913": return "Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión"; case "5914": return "Actividades de exhibición de películas cinematográficas y videos"; case "5920": return "Actividades de grabación de sonido y edición de música"; case "6010": return "Actividades de programación y transmisión en el servicio de radiodifusión sonora"; case "6020": return "Actividades de programación y transmisión de televisión"; case "6110": return "Actividades de telecomunicaciones alámbricas"; case "6120": return "Actividades de telecomunicaciones inalámbricas"; case "6130": return "Actividades de telecomunicación satelital"; case "6190": return "Otras actividades de telecomunicaciones"; case "6201": return "Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas)"; case "6202": return "Actividades de consultoría informática y actividades de administración de instalaciones informáticas"; case "6209": return "Otras actividades de tecnologías de información y actividades de servicios informáticos"; case "6311": return "Procesamiento de datos, alojamiento (hosting) y actividades relacionadas"; case "6312": return "Portales web"; case "6391": return "Actividades de agencias de noticias"; case "6399": return "Otras actividades de servicio de información n.c.p."; case "6411": return "Banco Central"; case "6412": return "Bancos comerciales"; case "6421": return "Actividades de las corporaciones financieras"; case "6422": return "Actividades de las compañías de financiamiento"; case "6423": return "Banca de segundo piso"; case "6424": return "Actividades de las cooperativas financieras"; case "6431": return "Fideicomisos, fondos y entidades financieras similares"; case "6432": return "Fondos de cesantías"; case "6491": return "Leasing financiero (arrendamiento financiero)"; case "6492": return "Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario"; case "6493": return "Actividades de compra de cartera o factoring"; case "6494": return "Otras actividades de distribución de fondos"; case "6495": return "Instituciones especiales oficiales"; case "6499": return "Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p."; case "6511": return "Seguros generales"; case "6512": return "Seguros de vida"; case "6513": return "Reaseguros"; case "6514": return "Capitalización"; case "6521": return "Servicios de seguros sociales de salud"; case "6522": return "Servicios de seguros sociales de riesgos profesionales"; case "6531": return "Régimen de prima media con prestación definida (RPM)"; case "6532": return "Régimen de ahorro individual (RAI)"; case "6611": return "Administración de mercados financieros"; case "6612": return "Corretaje de valores y de contratos de productos básicos"; case "6613": return "Otras actividades relacionadas con el mercado de valores"; case "6614": return "Actividades de las casas de cambio"; case "6615": return "Actividades de los profesionales de compra y venta de divisas"; case "6619": return "Otras actividades auxiliares de las actividades de servicios financieros n.c.p."; case "6621": return "Actividades de agentes y corredores de seguros"; case "6629": return "Evaluación de riesgos y daños, y otras actividades de servicios auxiliares"; case "6630": return "Actividades de administración de fondos"; case "6810": return "Actividades inmobiliarias realizadas con bienes propios o arrendados"; case "6820": return "Actividades inmobiliarias realizadas a cambio de una retribución o por contrata"; case "6910": return "Actividades jurídicas"; case "6920": return "Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria"; case "7010": return "Actividades de administración empresarial"; case "7020": return "Actividades de consultaría de gestión"; case "7110": return "Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica"; case "7120": return "Ensayos y análisis técnicos"; case "7210": return "Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería"; case "7220": return "Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades"; case "7310": return "Publicidad"; case "7320": return "Estudios de mercado y realización de encuestas de opinión pública"; case "7410": return "Actividades especializadas de diseño"; case "7420": return "Actividades de fotografía"; case "7490": return "Otras actividades profesionales, científicas y técnicas n.c.p."; case "7500": return "Actividades veterinarias"; case "7710": return "Alquiler y arrendamiento de vehículos automotores"; case "7721": return "Alquiler y arrendamiento de equipo recreativo y deportivo"; case "7722": return "Alquiler de videos y discos"; case "7729": return "Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p."; case "7730": return "Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p."; 
            case "7740": return "Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor"; case "7810": return "Actividades de agencias de empleo"; case "7820": return "Actividades de agencias de empleo temporal"; case "7830": return "Otras actividades de suministro de recurso humano"; case "7911": return "Actividades de las agencias de viaje"; case "7912": return "Actividades de operadores turísticos"; case "7990": return "Otros servicios de reserva y actividades relacionadas"; case "8010": return "Actividades de seguridad privada"; case "8020": return "Actividades de servicios de sistemas de seguridad"; case "8030": return "Actividades de detectives e investigadores privados"; case "8110": return "Actividades combinadas de apoyo a instalaciones"; case "8121": return "Limpieza general interior de edificios"; case "8129": return "Otras actividades de limpieza de edificios e instalaciones industriales"; case "8130": return "Actividades de paisajismo y servicios de mantenimiento conexos"; case "8211": return "Actividades combinadas de servicios administrativos de oficina"; case "8219": return "Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina"; case "8220": return "Actividades de centros de llamadas (Call center)"; case "8230": return "Organización de convenciones y eventos comerciales"; case "8291": return "Actividades de agencias de cobranza y oficinas de calificación crediticia"; case "8292": return "Actividades de envase y empaque"; case "8299": return "Otras actividades de servicio de apoyo a las empresas n.c.p."; case "8411": return "Actividades legislativas de la administración pública"; case "8412": return "Actividades ejecutivas de la administración pública"; case "8413": return "Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales y otros servicios sociales, excepto servicios de seguridad social"; case "8414": return "Actividades reguladoras y facilitadoras de la actividad económica"; case "8415": return "Actividades de los otros órganos de control"; case "8421": return "Relaciones exteriores"; case "8422": return "Actividades de defensa"; case "8423": return "Orden público y actividades de seguridad"; case "8424": return "Administración de justicia"; case "8430": return "Actividades de planes de seguridad social de afiliación obligatoria"; case "8511": return "Educación de la primera infancia"; case "8512": return "Educación preescolar"; case "8513": return "Educación básica primaria"; case "8521": return "Educación básica secundaria"; case "8522": return "Educación media académica"; case "8523": return "Educación media técnica y de formación laboral"; case "8530": return "Establecimientos que combinan diferentes niveles de educación"; case "8541": return "Educación técnica profesional"; case "8542": return "Educación tecnológica"; case "8543": return "Educación de instituciones universitarias o de escuelas tecnológicas"; case "8544": return "Educación de universidades"; case "8551": return "Formación académica no formal"; case "8552": return "Enseñanza deportiva y recreativa"; case "8553": return "Enseñanza cultural"; case "8559": return "Otros tipos de educación n.c.p."; case "8560": return "Actividades de apoyo a la educación"; case "8610": return "Actividades de hospitales y clínicas, con internación"; case "8621": return "Actividades de la práctica médica, sin internación"; case "8622": return "Actividades de la práctica odontológica"; case "8691": return "Actividades de apoyo diagnóstico"; case "8692": return "Actividades de apoyo terapéutico"; case "8699": return "Otras actividades de atención de la salud humana"; case "8710": return "Actividades de atención residencial medicalizada de tipo general"; case "8720": return "Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas"; case "8730": return "Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas"; case "8790": return "Otras actividades de atención en instituciones con alojamiento"; case "8810": return "Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas"; case "8890": return "Otras actividades de asistencia social sin alojamiento"; case "9001": return "Creación literaria"; case "9002": return "Creación musical"; case "9003": return "Creación teatral"; case "9004": return "Creación audiovisual"; case "9005": return "Artes plásticas y visuales"; case "9006": return "Actividades teatrales"; case "9007": return "Actividades de espectáculos musicales en vivo"; case "9008": return "Otras actividades de espectáculos en vivo"; case "9101": return "Actividades de bibliotecas y archivos"; case "9102": return "Actividades y funcionamiento de museos, conservación de edificios y sitios históricos"; case "9103": return "Actividades de jardines botánicos, zoológicos y reservas naturales"; case "9200": return "Actividades de juegos de azar y apuestas"; case "9311": return "Gestión de instalaciones deportivas"; case "9312": return "Actividades de clubes deportivos"; case "9319": return "Otras actividades deportivas"; case "9321": return "Actividades de parques de atracciones y parques temáticos"; case "9329": return "Otras actividades recreativas y de esparcimiento n.c.p."; case "9411": return "Actividades de asociaciones empresariales y de empleadores"; case "9412": return "Actividades de asociaciones profesionales"; case "9420": return "Actividades de sindicatos de empleados"; case "9491": return "Actividades de asociaciones religiosas"; case "9492": return "Actividades de asociaciones políticas"; case "9499": return "Actividades de otras asociaciones n.c.p."; case "9511": return "Mantenimiento y reparación de computadores y de equipo periférico"; case "9512": return "Mantenimiento y reparación de equipos de comunicación"; case "9521": return "Mantenimiento y reparación de aparatos electrónicos de consumo"; case "9522": return "Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería"; case "9523": return "Reparación de calzado y artículos de cuero"; case "9524": return "Reparación de muebles y accesorios para el hogar"; case "9529": return "Mantenimiento y reparación de otros efectos personales y enseres domésticos"; case "9601": return "Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel"; case "9602": return "Peluquería y otros tratamientos de belleza"; case "9603": return "Pompas fúnebres y actividades relacionadas"; case "9609": return "Otras actividades de servicios personales n.c.p."; case "9700": return "Actividades de los hogares individuales como empleadores de personal doméstico"; case "9810": return "Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio"; case "9820": return "Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio"; case "9900": return "Actividades de organizaciones y entidades extraterritoriales"; default: return "Código no encontrado"; } }
        $Descripcion_sector = obtenerDescripcionSector($Sector);
        $Observaciones=$_POST["Observaciones"];
        $Observaciones2_=$_POST["Observaciones2"];
        if($Observaciones2_ != '') {
            $Observaciones2 = '<tr>
                <td style="font-family:arial;font-size:20px;color:#660066"><b>Observaciones especiales:</b></td>
                <td style="font-family:arial;font-size:20px;color:#e60000"><b>'.$Observaciones2_.'</b></td>
            </tr>';
        } else {
            $Observaciones2 = '';
        }
        $Especifico=$_POST["Especifico"];
        if($P == 1) {
        if(($Cliente0 == 'Apartadó/Cedisalud IPS' || $Cliente0 == 'Medellín/Cedisalud IPS') && ($Especifico == 'Postincapacidad' || $Especifico == 'Seguimiento, recomendaciones y/o restricciones médicas')) {
            $Horario = 'HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00';  
        }
        if ($Empresa == 'COORDINADORA MERCANTIL SA' && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis osteomuscular, visiometría y audiometría."; 
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' && $Examen == 'POSTINCAPACIDAD') {
    	    $Especifico = "Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00"; 
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' && $Cargo == 'ALTURAS' && $Examen == 'ALTURAS') {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría, glicemia (Si la glicemia pre se encuentra entre 100 y 125 mg/dl, se recomienda realizar confirmatorio con glicemia pre-post carga de 75gr), EKG (Si la persona que va a realizar el curso es mayor de 40 años) y perfil lipídico (Colesterol Total, HDL, LDL, Triglicéridos).";
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' && $Cargo == 'MANIPULACIÓN DE ALIMENTOS' && $Examen == 'MANIPULACIÓN DE ALIMENTOS') {
    	    $Especifico = "Manipulación de alimentos";  
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'SOLDADOR' || $Cargo == 'PINTOR' || $Cargo == 'AYUDANTE DE CERRAJERIA' || $Cargo == 'CERRAJERO I' || $Cargo == 'CERRAJERO II' || $Cargo == 'FIBRERO- PINTOR'|| $Cargo == 'LATONERO-PINTOR') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica, espirometría, perfil hepático (GOT-GPT) y perfil renal BUN-Creatinina.";                                       
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'SUPERNUMERARIO CONDUCTOR AUXILIAR OPERATIVO' || $Cargo == 'SUPERNUM CONDUCTOR-AUX OPER TEMPORADA' || $Cargo == 'COBRADOR' || $Cargo == 'CONDUCTOR - AUXILIAR OPERATIVO' || $Cargo == 'CONDUCTOR AUXILIAR OPERATIVO MULERO' || $Cargo == 'CONDUCTOR AUXILIAR OPERATIVO NOCTURNO' || $Cargo == 'CONDUCTOR DE RELEVO - AUXILIAR' || $Cargo == 'CONDUCTOR PATINADOR MTTO Y ALMACEN' || $Cargo == 'CONDUCTOR PATIO II' || $Cargo == 'CONDUCTOR RUTA NACIONAL' || $Cargo == 'MENSAJERO ADMINISTRATIVO')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría y audiometría clínica.";                                  
        } if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'VIGILANTE CAMARAS' || $Cargo == 'VIGILANTE' || $Cargo == 'TECNICO EN MTTO. ELCTRIO Y ELECTR DE AUTOM' || $Cargo == 'TECNICO COMUNICACIONES II' || $Cargo == 'TECNICO COMUNICACIONES I' ||  $Cargo == 'SUPERVISOR DE LAVADO' || $Cargo == 'SUPERVISOR DE LATONERÍA Y PINTURA' || $Cargo == 'OPERADOR C4' || $Cargo == 'COORDINADOR DE OBRAS CIVILES' || $Cargo == 'ELECTRICISTA I' || $Cargo == 'ELECTRICISTA II' || $Cargo == 'LAVADOR' || $Cargo == 'LUBRICADOR' || $Cargo == 'MECANICO DE PATIO I' || $Cargo == 'MECANICO DE PATIO II' || $Cargo == 'MECANICO DE TRAYLER-I' || $Cargo == 'MECANICO GENERAL I' || $Cargo == 'MECANICO GENERAL II' || $Cargo == 'MONITOR NACIONAL GPS' || $Cargo == 'MONTALLANTAS' || $Cargo == 'NEGOCIADOR REDES' || $Cargo == 'OFICIAL DE SEGURIDAD INFORMATICA' || $Cargo == 'OFICIAL DE REPARACIONES LOCATIVAS')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría y audiometría clínica.";                                     
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  $Cargo == 'COORDINADOR DE PATIO'  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría, audiometría.";                                       
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'VIGILANTE' || $Cargo == 'SUPERVISOR DE SEGURIDAD REGIONAL' ||  $Cargo == 'COORDINADOR DE SEGURIDAD' || $Cargo == 'JEFE DE SEGURIDAD' || $Cargo == 'LIDER DE SEGURIDAD OPERATIVA' || $Cargo == 'LIDER DE SEGURIDAD FISICA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audimetría clínica y prueba psicológica con énfasis en manejo de armas.";                                        
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'COORDINADOR NUEVO CANAL' || $Cargo == 'COORDINADOR SERV. AL CLIENTE Y VENTAS DE CANAL' || $Cargo == 'JEFE DE SERVICIO AL CLIENTE')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría y audiometría clínica.";                                    
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'OPERADOR MONTACARGA AUXILIAR OPERATIVO' || $Cargo == 'DESCARGADOR MONTACARGUISTA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica, espirometría.";                                     
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  ($Cargo == 'ESCOLTA' || $Cargo == 'OBSERVADOR DE RUTA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica y prueba psicológica con énfasis en manejo de armas.";                                  
    	} if ($Empresa == 'COORDINADORA MERCANTIL SA' &&  $Cargo == 'TANQUEADOR'  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría, audiometría, espirometría, perfil hepático (GOT-GPT) y perfil renal BUN-Creatinina.";                                         
    	}      
    	if ($Empresa == 'COORDIUTIL S.A.S' && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis osteomuscular, visiometría y audiometría."; 
    	} if ($Empresa == 'COORDIUTIL S.A.S' && $Examen == 'POSTINCAPACIDAD') {
    	    $Especifico = "Debe presentarse con la documentación necesaria emitida por médicos tratantes, con el fin de dar sustentación a recomendaciones y/o restricciones. Última historia clínica. HORARIO DE ATENCIÓN PARA ESTE EXAMEN UNICAMENTE DE LUNES A VIERNES, DE 13:30 A 16:00"; 
    	} if ($Empresa == 'COORDIUTIL S.A.S' && $Cargo == 'ALTURAS' && $Examen == 'ALTURAS') {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría, glicemia (Si la glicemia pre se encuentra entre 100 y 125 mg/dl, se recomienda realizar confirmatorio con glicemia pre-post carga de 75gr), EKG (Si la persona que va a realizar el curso es mayor de 40 años) y perfil lipídico (Colesterol Total, HDL, LDL, Triglicéridos).";
    	} if ($Empresa == 'COORDIUTIL S.A.S' && $Cargo == 'MANIPULACIÓN DE ALIMENTOS' && $Examen == 'MANIPULACIÓN DE ALIMENTOS') {
    	    $Especifico = "Manipulación de alimentos";  
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'SOLDADOR' || $Cargo == 'PINTOR' || $Cargo == 'AYUDANTE DE CERRAJERIA' || $Cargo == 'CERRAJERO I' || $Cargo == 'CERRAJERO II' || $Cargo == 'FIBRERO- PINTOR'|| $Cargo == 'LATONERO-PINTOR') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica, espirometría, perfil hepático (GOT-GPT) y perfil renal BUN-Creatinina.";                                       
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'SUPERNUMERARIO CONDUCTOR AUXILIAR OPERATIVO' || $Cargo == 'SUPERNUM CONDUCTOR-AUX OPER TEMPORADA' || $Cargo == 'COBRADOR' || $Cargo == 'CONDUCTOR - AUXILIAR OPERATIVO' || $Cargo == 'CONDUCTOR AUXILIAR OPERATIVO MULERO' || $Cargo == 'CONDUCTOR AUXILIAR OPERATIVO NOCTURNO' || $Cargo == 'CONDUCTOR DE RELEVO - AUXILIAR' || $Cargo == 'CONDUCTOR PATINADOR MTTO Y ALMACEN' || $Cargo == 'CONDUCTOR PATIO II' || $Cargo == 'CONDUCTOR RUTA NACIONAL' || $Cargo == 'MENSAJERO ADMINISTRATIVO')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría y audiometría clínica.";                                  
        } if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'VIGILANTE CAMARAS' || $Cargo == 'VIGILANTE' || $Cargo == 'TECNICO EN MTTO. ELCTRIO Y ELECTR DE AUTOM' || $Cargo == 'TECNICO COMUNICACIONES II' || $Cargo == 'TECNICO COMUNICACIONES I' ||  $Cargo == 'SUPERVISOR DE LAVADO' || $Cargo == 'SUPERVISOR DE LATONERÍA Y PINTURA' || $Cargo == 'OPERADOR C4' || $Cargo == 'COORDINADOR DE OBRAS CIVILES' || $Cargo == 'ELECTRICISTA I' || $Cargo == 'ELECTRICISTA II' || $Cargo == 'LAVADOR' || $Cargo == 'LUBRICADOR' || $Cargo == 'MECANICO DE PATIO I' || $Cargo == 'MECANICO DE PATIO II' || $Cargo == 'MECANICO DE TRAYLER-I' || $Cargo == 'MECANICO GENERAL I' || $Cargo == 'MECANICO GENERAL II' || $Cargo == 'MONITOR NACIONAL GPS' || $Cargo == 'MONTALLANTAS' || $Cargo == 'NEGOCIADOR REDES' || $Cargo == 'OFICIAL DE SEGURIDAD INFORMATICA' || $Cargo == 'OFICIAL DE REPARACIONES LOCATIVAS')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría y audiometría clínica.";                                     
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  $Cargo == 'COORDINADOR DE PATIO'  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría, audiometría.";                                       
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'VIGILANTE' || $Cargo == 'SUPERVISOR DE SEGURIDAD REGIONAL' ||  $Cargo == 'COORDINADOR DE SEGURIDAD' || $Cargo == 'JEFE DE SEGURIDAD' || $Cargo == 'LIDER DE SEGURIDAD OPERATIVA' || $Cargo == 'LIDER DE SEGURIDAD FISICA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audimetría clínica y prueba psicológica con énfasis en manejo de armas.";                                        
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'COORDINADOR NUEVO CANAL' || $Cargo == 'COORDINADOR SERV. AL CLIENTE Y VENTAS DE CANAL' || $Cargo == 'JEFE DE SERVICIO AL CLIENTE')  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría y audiometría clínica.";                                    
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'OPERADOR MONTACARGA AUXILIAR OPERATIVO' || $Cargo == 'DESCARGADOR MONTACARGUISTA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica, espirometría.";                                     
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  ($Cargo == 'ESCOLTA' || $Cargo == 'OBSERVADOR DE RUTA') && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, optometría, audiometría clínica y prueba psicológica con énfasis en manejo de armas.";                                  
    	} if ($Empresa == 'COORDIUTIL S.A.S' &&  $Cargo == 'TANQUEADOR'  && ($Examen == 'INGRESO' || $Examen == 'PERIODICO' || $Examen == 'EGRESO')) {
    	    $Especifico = "Examen médico ocupacional con énfasis en el sistema osteomuscular, visiometría, audiometría, espirometría, perfil hepático (GOT-GPT) y perfil renal BUN-Creatinina.";                                         
    	}   
        }
    	$Responsable=$_POST["Responsable"];
    	$Clave=$_POST["Clave"];
    	
    	if($Edad >= 1) {
    	    $Nacimiento2='<tr>
                    <td style="font-family:arial;font-size:20px;color:#660066"><b>Fecha de nacimiento:</b></td>
                    <td style="font-family:arial;font-size:20px"><b>'.$Nacimiento.'</b></td>
                </tr>
                <tr>
                    <td style="font-family:arial;font-size:20px;color:#660066"><b>Edad:</b></td>
                    <td style="font-family:arial;font-size:20px"><b>'.$Edad.'</b></td>
                </tr>';
    	    } else {
    	      $Nacimiento2='';
    	}    
    	// Consulta para obtener los IDs de reg_agenda con el código recibido
        $sql_ids = "SELECT id FROM reg_agenda WHERE Codigo = '$Codigo'";
        $resultado_ids = $mysqli->query($sql_ids);
        // Crear un array con los IDs encontrados
        $ids_array = array();
        while ($row_id = mysqli_fetch_array($resultado_ids)) {
            $ids_array[] = $row_id['id'];
        }
        // Si no se encontraron IDs, asignar valor por defecto
        if (empty($ids_array)) {
            $ids_string = '0'; // Para evitar errores en la consulta
        } else {
            // Convertir el array de IDs a una cadena para la consulta IN
            $ids_string = implode(',', $ids_array);
        }
        if($P == 2) {
            if ($Examen == 'Ingreso' || $Examen == 'INGRESO'){
                $Ex = 1;
            }   
            if ($Examen == 'Periódico' || $Examen == 'PERIODICO'){
                $Ex = 2;
            }
            if ($Examen == 'Egreso' || $Examen == 'EGRESO'){
                $Ex = 3;
            }
            
        // Consulta modificada para usar IN con los IDs obtenidos
        $sql = "SELECT * FROM profesiograma_agenda WHERE id_admin IN ($ids_string) AND Cargo = '$Cargo2' AND T = $Ex";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Cargo = isset($row['Cargo']) ? $row['Cargo'] : null;
        $EN = isset($row['EN']) ? $row['EN'] : null;
        switch($EN) {
            case 1:
                $Especifico = "EXAMEN ESTÁNDAR";
                break;
            case 2:
                $Especifico = "ENFASIS TRABAJO SEGURO EN ALTURAS";
                break;
            case 3:
                $Especifico = "ENFASIS MANIPULACION DE ALIMENTOS";
                break;
            case 4:
                $Especifico = "ENFASIS MANIPULACION DE ALIMENTOS Y TRABAJO SEGURO EN ALTURAS";
                break;
            case 5:
                $Especifico = "ENFASIS TRABAJO SEGURO EN ALTURAS Y ESPACIOS CONFINADOS";
                break;
            case 6:
                $Especifico = "ENFASIS SEGURIDAD VIAL Y TRABAJO SEGURO EN ALTURAS";
                break;
            case 7:
                $Especifico = "ENFASIS SEGURIDAD VIAL Y TRABAJO SEGURO EN ALTURAS Y ESPACIOS CONFINADOS";
                break;
            case 8:
                $Especifico = "ENFASIS EN SEGURIDAD VIAL";
                break;
            case 25:
                $Especifico = "EGRESO";
                break;
            default:
                $Especifico = "TIPO DE EXAMEN NO VÁLIDO";
                break;
        }
        $E1 = ($row['E1'] == 1) ? "Examen medico enfasis osteomuscular; "  : "";
        $E2 = ($row['E2'] == 1) ? "Audiometria tamiz; "  : "";
        $E3 = ($row['E3'] == 1) ? "Audiometria clinica; "  : "";
        $E4 = ($row['E4'] == 1) ? "Visionetria tamiz; "  : "";
        $E5 = ($row['E5'] == 1) ? "Optometria ocupacional; "  : "";
        $E6 = ($row['E6'] == 1) ? "Espirometria; "  : "";
        $E7 = ($row['E7'] == 1) ? "Electrocardiograma; "  : "";
        
        $L1 = ($row['L1'] == 1) ? "Alcohol metilico; "  : "";
        $L2 = ($row['L2'] == 1) ? "Alcoholemia; "  : "";
        $L3 = ($row['L3'] == 1) ? "Anticuerpos anas; "  : "";
        $L4 = ($row['L4'] == 1) ? "Anticuerpos hepatitis b - anti hbs; "  : "";
        $L5 = ($row['L5'] == 1) ? "Anticuerpos varicela igg; "  : "";
        $L6 = ($row['L6'] == 1) ? "Antigeno especifico para prostata (psa); "  : "";
        $L7 = ($row['L7'] == 1) ? "Antigeno hepatitis b; "  : "";
        $L8 = ($row['L8'] == 1) ? "Basiloscopia; "  : "";
        $L9 = ($row['L9'] == 1) ? "Bun - nitrogeno ureico; "  : "";
        $L10 = ($row['L10'] == 1) ? "Cholinesterase (che); "  : "";
        $L11 = ($row['L11'] == 1) ? "Colesterol total; "  : "";
        $L12 = ($row['L12'] == 1) ? "Coprologico; "  : "";
        $L13 = ($row['L13'] == 1) ? "Creatinina orina; "  : "";
        $L14 = ($row['L14'] == 1) ? "Creatinina serica; "  : "";
        $L15 = ($row['L15'] == 1) ? "Ferritina; "  : "";
        $L16 = ($row['L16'] == 1) ? "Fiebre amarilla virus anticuerpo; "  : "";
        $L17 = ($row['L17'] == 1) ? "Frotis de uñas; "  : "";
        $L18 = ($row['L18'] == 1) ? "Frotis faringeo; "  : "";
        $L19 = ($row['L19'] == 1) ? "Glicemia en ayunas; "  : "";
        $L20 = ($row['L20'] == 1) ? "Grupo rh; "  : "";
        $L21 = ($row['L21'] == 1) ? "Hemoclasificacion; "  : "";
        $L22 = ($row['L22'] == 1) ? "Hemograma completo; "  : "";
        $L23 = ($row['L23'] == 1) ? "Lentes; "  : "";
        $L24 = ($row['L24'] == 1) ? "Prueba de sustancias md10; "  : "";
        $L25 = ($row['L25'] == 1) ? "Prueba de sustancias md5; "  : "";
        $L26 = ($row['L26'] == 1) ? "Parcial de orina; "  : "";
        $L27 = ($row['L27'] == 1) ? "Perfil hepatico; "  : "";
        $L28 = ($row['L28'] == 1) ? "Perfil lipidico; "  : "";
        $L29 = ($row['L29'] == 1) ? "Plomo en sangre; "  : "";
        $L30 = ($row['L30'] == 1) ? "Protectores auditivos; "  : "";
        $L31 = ($row['L31'] == 1) ? "Prueba de alcohol; "  : "";
        $L32 = ($row['L32'] == 1) ? "Prueba de marihuana y cocaina; "  : "";
        $L33 = ($row['L33'] == 1) ? "Prueba de sustancias mdr; "  : "";
        $L34 = ($row['L34'] == 1) ? "Psicosensometrico; "  : "";
        $L35 = ($row['L35'] == 1) ? "T3 libre; "  : "";
        $L36 = ($row['L36'] == 1) ? "T4; "  : "";
        $L37 = ($row['L37'] == 1) ? "Tamizaje de voz; "  : "";
        $L38 = ($row['L38'] == 1) ? "Glicemia C; "  : "";
        $L39 = ($row['L39'] == 1) ? "Test de aptitud mental; "  : "";
        $L40 = ($row['L40'] == 1) ? "Toxoplasma igg; "  : "";
        $L41 = ($row['L41'] == 1) ? "Toxoplasma igm; "  : "";
        $L42 = ($row['L42'] == 1) ? "Trigliceridos; "  : "";
        $L43 = ($row['L43'] == 1) ? "Tsh; "  : "";
        $L44 = ($row['L44'] == 1) ? "Vih 1 y 2 anticuerpo cualitativa; "  : "";
        
        $V1 = ($row['V1'] == 1) ? "Vacuna de influenza; "  : "";
        $V2 = ($row['V2'] == 1) ? "Vacuna dengue tetravalente; "  : "";
        $V3 = ($row['V3'] == 1) ? "Vacuna dpt acelular-tosferina; "  : "";
        $V4 = ($row['V4'] == 1) ? "Vacuna fiebre amarilla; "  : "";
        $V5 = ($row['V5'] == 1) ? "Vacuna fiebre tifoidea; "  : "";
        $V6 = ($row['V6'] == 1) ? "Vacuna hepatitis a; "  : "";
        $V7 = ($row['V7'] == 1) ? "Vacuna hepatitis a+b; "  : "";
        $V8 = ($row['V8'] == 1) ? "Vacuna hepatitis b; "  : "";
        $V9 = ($row['V9'] == 1) ? "Vacuna meningococo; "  : "";
        $V10 = ($row['V10'] == 1) ? "Vacuna neumococo polisacarida 23; "  : "";
        $V11 = ($row['V11'] == 1) ? "Vacuna neumococo prevenar 13; "  : "";
        $V12 = ($row['V12'] == 1) ? "Vacuna tetano difteria; "  : "";
        $V13 = ($row['V13'] == 1) ? "Vacuna tetanos; "  : "";
        $V14 = ($row['V14'] == 1) ? "Vacuna triple viral; "  : "";
        $V15 = ($row['V15'] == 1) ? "Vacuna varicela; "  : "";
        
        $OT1 = ($row['OT1'] == 1) ? "Anexo dermatologico (piel y anexos); "  : "";
        $OT2 = ($row['OT2'] == 1) ? "Anexo neurologico; "  : "";
        $OT3 = ($row['OT3'] == 1) ? "Anexo osteomuscular; "  : "";
        $OT4 = ($row['OT4'] == 1) ? "Anexo rcv framingham; "  : "";
        $OT5 = ($row['OT5'] == 1) ? "Anexo rcv gaziano-nhanes; "  : "";
        $OT6 = ($row['OT6'] == 1) ? "Anexo respiratorio; "  : "";
        $OT7 = ($row['OT7'] == 1) ? "Anexo vascular periferico; "  : "";
        $OT8 = ($row['OT8'] == 1) ? "Anexo visual; "  : "";
        $OT9 = ($row['OT9'] == 1) ? "Cuestionario stop bang; "  : "";
        $OT10 = ($row['OT10'] == 1) ? "Cuestionario de sintomas neurologicos (q16); "  : "";
        $OT11 = ($row['OT11'] == 1) ? "Inventario depersonalidad de eysenck; "  : "";
        $OT12 = ($row['OT12'] == 1) ? "Prueba teorica-practica conductores motorizado; "  : "";
        $OT13 = ($row['OT13'] == 1) ? "Prueba teorico-practica seguridad vial; "  : "";
        $OT14 = ($row['OT14'] == 1) ? "Pruebas de equilibrio y cuestionario para alturas; "  : "";
        $OT15 = ($row['OT15'] == 1) ? "Test de epworth; "  : "";
        $OT16 = ($row['OT16'] == 1) ? "Test de farnsworth (d15); "  : "";
        $OT17 = ($row['OT17'] == 1) ? "Test de framinghan; "  : "";
        $OT18 = ($row['OT18'] == 1) ? "Test de harvard; "  : "";
        $OT19 = ($row['OT19'] == 1) ? "Test psicologico para fobia electricidad; "  : "";
        $OT20 = ($row['OT20'] == 1) ? "Ecografia abdomen total; "  : "";
        $OT21 = ($row['OT21'] == 1) ? "Ecografia abdominal; "  : "";
        $OT22 = ($row['OT22'] == 1) ? "Ecografia articular de hombro; "  : "";
        $OT23 = ($row['OT23'] == 1) ? "Ecografia articular de rodilla; "  : "";
        $OT24 = ($row['OT24'] == 1) ? "Ecografia de abdomen total; "  : "";
        $OT25 = ($row['OT25'] == 1) ? "Ecografia de higado, pancreas, via biliar y vesicula; "  : "";
        $OT26 = ($row['OT26'] == 1) ? "Ecografia de muñeca derecha; "  : "";
        $OT27 = ($row['OT27'] == 1) ? "Ecografia de rodillas; "  : "";
        $OT28 = ($row['OT28'] == 1) ? "Ecografia de tejidos blandos de pared abdominal; "  : "";
        $OT29 = ($row['OT29'] == 1) ? "Ecografia tejidos blandos extremidades superiores; "  : "";
        $OT30 = ($row['OT30'] == 1) ? "Electrocardiograma; "  : "";
        $OT31 = ($row['OT31'] == 1) ? "Espirometria pre-pos broncodilatador; "  : "";
        $OT32 = ($row['OT32'] == 1) ? "Evaluacion psicologica(isra) fobias-alturas-confinados; "  : "";
        $OT33 = ($row['OT33'] == 1) ? "Lectura radiografia de torax - ilo; "  : "";
        $OT34 = ($row['OT34'] == 1) ? "Radiografia de codo; "  : "";
        $OT35 = ($row['OT35'] == 1) ? "Radiografia de columna cervical; "  : "";
        $OT36 = ($row['OT36'] == 1) ? "Radiografia de columna dorsal - lumbar; "  : "";
        $OT37 = ($row['OT37'] == 1) ? "Radiografia de columna lumbo-sacra; "  : "";
        $OT38 = ($row['OT38'] == 1) ? "Radiografia de dedo; "  : "";
        $OT39 = ($row['OT39'] == 1) ? "Radiografia de mano; "  : "";
        $OT40 = ($row['OT40'] == 1) ? "Radiografia de rodilla (ap, lateral); "  : "";
        $OT41 = ($row['OT41'] == 1) ? "Radiografia de rodillas comparativas posicion vertical; "  : "";
        $OT42 = ($row['OT42'] == 1) ? "Radiografia de tobillo (ap, lateral y rotacion interna); "  : "";
        $OT43 = ($row['OT43'] == 1) ? "Radiografia de torax pa- lateral; " : "";
        
        $descripcion2 = $E1.$E2.$E3.$E4.$E5.$E6.$E7.$L1.$L2.$L3.$L4.$L5.$L6.$L7.$L8
        .$L9.$L10.$L11.$L12.$L13.$L14.$L15.$L16.$L17.$L18.$L19.$L20.$L21.$L22.$L23.$L24.$L25.$L26.$L27.$L28.$L29.$L30.$L31.$L32.$L33.$L34.$L35.$L36.$L37.$L38.$L39.$L40.$L41.$L42.$L43.$L44.$L45.$L46.$L47.$L48.$L49.$V1.$V2.$V3.$V4.$V5.$V6.$V7.$V8.$V9.$V10.$V11.$V12.$V13.$V14.$V15;
    	}

       $sql = "INSERT INTO agenda (Ips, Fecha, Dia, Mes, Año, Nombre, Apellidos, Tipo, Documento, Nacimiento, Edad, Genero, Cargo, Email, Celular, Email2, Examen, Especifico, Descripcion, Empresa, Observaciones, Observaciones2, Responsable, Codigo, Codigo2, P, Fecha_registro, Fecha_notificacion) 
       VALUES ('$Nombre_sede','$Fecha', '$dia','$mes0','$ano','$Nombre','$Apellidos', '$Tipo', '$Documento', '$Nacimiento', '$Edad', '$Genero', '$Cargo', '$Email', '$Celular', '$Email2', '$Examen', '$Especifico', '$descripcion2.$Adicionales','$Empresa', '$Observaciones', '$Observaciones2_', '$Responsable', '$Clave', '$Clave2', $P, NOW(), '$Fecha_notificacion')";
       $resultado = $mysqli->query($sql);

        if ($resultado) {
            
if(($Cliente0 == 'Medellín/Cedisalud IPS') && ($Especifico == 'Ingreso - Telemedicina' || $Especifico == 'Egreso - Telemedicina' || $Especifico == 'Periódico - Telemedicina')) {
    $token2="k8x62vv0p4b7lcbp"; // Ultramsg.com token
    $instance_id2="instance8304"; // Ultramsg.com instance id
    $client2 = new UltraMsg\WhatsAppApi($token2,$instance_id2);
    	
    $to2='573022942714'; 
    $body2="CITA EXAMEN MEDICO/$Especifico/$Empresa

*RECUERDE: PARA EXAMENES APTITUD EN ALTURAS, ESPACIOS CONFINADOS, LA TOMA DE LABORATORIOS SE REALIZA DE 7 A.M. A 9:30 A.M.  POR FAVOR, TENER EN CUENTA LA PREPARACION ADECUADA: VER ANEXO CON INSTRUCCIONES, LOS DEMAS EXAMENES NO REQUIERE PREPARACION ESPECIFICA NI REQUIEREN HORARIOS ESPECIALES PARA ATENCION.*

*Nombre:* $Nombre $Apellidos
*Documento*: $Documento
*Cargo:* $Cargo
*Empresa:* $Empresa
*Tipo de exámen:* $Examen
*Tipo de exámen específico:* $Especifico
*Descripción:* $descripcion2
*Observaciones:* $Observaciones
*Celular de contacto:* $Celular 


    "; 
    $api2=$client2->sendChatMessage($to2,$body2);
} 
if(!$descripcion2) {
    $descripcion2 = 'N/R';
}       
$apiUrl = "https://2l17d24juf.execute-api.us-east-1.amazonaws.com/prod/messages";
$payload = [
    "messaging_product" => "whatsapp",
    "recipient_type" => "individual",
    "to" => "57$Celular",
    "type" => "template",
    "template" => [
        "name" => "plantilla_cedisalud_v4",
        "language" => [
            "code" => "es"
        ],
        "components" => [
            [
                "type" => "header",
                "parameters" => [
                    [
                        "type" => "image",
                        "image" => [
                            "link" => "https://cedisalud-public-prod.s3.us-east-1.amazonaws.com/images/recomendaciones_cedisalud.png"
                        ]
                    ]
                ]
            ],
            [
                "type" => "body",
                "parameters" => [
                    ["type" => "text", "text" => "$dia de $mes de $ano"],
                    ["type" => "text", "text" => "$Nombre_sede,$Direccion"],
                    ["type" => "text", "text" => "$Nombre $Apellidos"],
                    ["type" => "text", "text" => "$Documento"],
                    ["type" => "text", "text" => "$Cargo"],
                    ["type" => "text", "text" => "$Empresa"],
                    ["type" => "text", "text" => "$Examen"],
                    ["type" => "text", "text" => "$Especifico"],
                    ["type" => "text", "text" => "$descripcion2"],
                    ["type" => "text", "text" => "$Observaciones"],
                    ["type" => "text", "text" => "$Horario"],
                    ["type" => "text", "text" => "$ciudad"],
                    ["type" => "text", "text" => "$mapa"]
                ]
            ]
        ]
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$Cel = '57'.$Celular;
$auth_basic = base64_encode("coordinacionmedica@cedisalud.com:hjB3eNdu3EwQCzjeJC1LAhjs37OccLZj");
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.labsmobile.com/json/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{
    "message":"Su solicitud de exámenes ocupacionales ha sido emitida para el '.$dia.' de '.$mes.' de '.$ano.' en '.$Nombre_sede.' '.$Direccion.'. Para más detalle visita: https://www.cedisalud.com.co/ocupacional?n='.$Clave2.'",
    "tpoa":"Sender",
    "recipient":
      [
        {
          "msisdn":"'.$Cel.'"
        }
      ]
  }',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic ".$auth_basic,
    "Cache-Control: no-cache",
    "Content-Type: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
/*
// Variables dinámicas
$mensaje1 = "CEDISALUD IPS ALIANZA RED NACIONAL\n$Nombre $Apellidos, Su solicitud para realizar exámenes ocupacionales fue emitida para el $dia de $mes de $ano.";
$mensaje2 = "Sede: $Nombre_sede $Direccion \nDocumento: $Documento \nCargo: $Cargo \nEmpresa: $Empresa \nTipo de exámen: $Examen";
$telefono_destino = "57$Celular";
$auth_basic = base64_encode("coordinacionmedica@cedisalud.com:hjB3eNdu3EwQCzjeJC1LAhjs37OccLZj");
function enviarMensaje($mensaje, $telefono, $auth) {
    $json_data = json_encode(array(
        "message" => $mensaje,
        "tpoa" => "Sender",
        "recipient" => array(
            array("msisdn" => $telefono)
        )
    ));
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.labsmobile.com/json/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $json_data,
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic ".$auth,
            "Cache-Control: no-cache",
            "Content-Type: application/json"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    return array('response' => $response, 'error' => $err);
}
$resultado1 = enviarMensaje($mensaje1, $telefono_destino, $auth_basic);
sleep(5);
$resultado2 = enviarMensaje($mensaje2, $telefono_destino, $auth_basic);*/


            /*if $Cliente0 != 'Apartadó/Cedisalud IPS' && $Cliente0 != 'Medellín/Cedisalud IPS') {
                $mail = new PHPMailer(true); 
                //$mail->SMTPDebug = 4;                               // Habilitar el debug
                $mail->isSMTP();                                      // Usar SMTP
                $mail->Host = 'cedisalud.com.co';                     // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
                $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
                if ($N == 1) {
                   $mail->Username = 'agendamiento20@cedisalud.com.co';     
                } else if($N == 2) {
                   $mail->Username = 'agendamiento21@cedisalud.com.co';   
                } else if($N == 3) {
                   $mail->Username = 'agendamiento22@cedisalud.com.co';   
                } else if($N == 4) {
                   $mail->Username = 'agendamiento23@cedisalud.com.co';   
                } else if($N == 5) {
                   $mail->Username = 'agendamiento24@cedisalud.com.co';   
                } else if($N == 6) {
                   $mail->Username = 'agendamiento25@cedisalud.com.co';   
                } else if($N == 7) {
                   $mail->Username = 'agendamiento26@cedisalud.com.co';   
                } else if($N == 8) {
                   $mail->Username = 'agendamiento27@cedisalud.com.co';   
                }
                $mail->Password = 'Paulino0404';                      // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // TLS o SSL (Gmail usa SSL)
                $mail->Port       = 465; // Puerto para SSL (587 para TLS)                                                      
                //$mail->Timeout =   30;
                //$mail->AuthType = 'LOGIN';
                //Recipients   
                 if ($N == 1) {
                   $mail->setFrom('agendamiento20@cedisalud.com.co', 'Agendamiento Cedisalud');     
                } else if($N == 2) {
                   $mail->setFrom('agendamiento21@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 3) {
                   $mail->setFrom('agendamiento22@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 4) {
                   $mail->setFrom('agendamiento23@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 5) {
                   $mail->setFrom('agendamiento24@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 6) {
                   $mail->setFrom('agendamiento25@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 7) {
                   $mail->setFrom('agendamiento26@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 8) {
                   $mail->setFrom('agendamiento27@cedisalud.com.co', 'Agendamiento Cedisalud');  
                }
                $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                $mail->addCC('atencionalusuario@cedisalud.com', 'Atención al ususario'); 
                $mail->addAddress('rednacional@cedisalud.com', 'Red nacional');  
                $mail->addCC('copias@cedisalud.com.co', 'Soporte técnico'); 
      
                 //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'CITA EXAMEN MEDICO/'.$Especifico.'/'.$Empresa;
                $mail->Body  = '
                <p style="font-family:arial;font-size:20px"><span>Cordial saludo Sres./as. <b>'.$Nombre_sede.'</b>:<br><br></span>Solicito amablemente la atención el día <b>'.$dia.' de '.$mes.' de '.$ano.'</b> al siguiente usuario, para la realización de los exámenes médicos ocupacionales descritos a continuación:</p>
                <p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p>
                '.$Texto2.'
                <p style="font-family:arial;font-size:18px"><b>NOTA</b> SI EN ESTE EXAMEN HAY UNA SOLICITUD DE LABORATORIO CON EL NOMBRE: <b>alcohol metilico</b> por favor realizar <b>GLICEMIA, PRUEBA MARIPOSA, GRAVITEX</b>, como se tenga contemplado en su IPS, por favor no se autoriza un examen diferente para este ITEM en especifico.</p>
                <p style="font-family:arial;font-size:18px">INFORMACIÓN: Las pruebas denominadas MD2-MD5–MD10 corresponden a las pruebas de sustancias con 2-5-10 metabólicos de análisis.</p>
                <p style="font-family:arial;font-size:18px"><b>NOTA</b> SI LA PRUEBAS DE SUSTACIAS ESTÁ DENTRO DE LOS EXAMENES SOLICITADOS, POR FAVOR REALIZARLA DE PRIMERA. EN CASO DE SER POSITIVO, INFORMAR POR CHAT CREADO PARA ENVIO DE INFORMACION - NO REALIZAR MAS EXAMENES HASTA NUEVA ORDEN.</p>
                <table style="width:100%">
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Nombre:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Nombre.' '.$Apellidos.'</b></td>
                    </tr>
                     <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Documento:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Documento.'</b></td>
                    </tr>
                     '.$Nacimiento2.'
                     <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Género:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Genero.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Cargo:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Cargo.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Empresa a certificar:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Empresa.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Tipo de examen:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Examen.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Tipo de Exámen Específico:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Especifico.'</b></td>
                    </tr>
                    '.$descripcion.'
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Observaciones:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Observaciones.'</b></td>
                    </tr>
                    '.$Observaciones2.'
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>N° celular de usuario:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Celular.'</b></td>
                    </tr>
                </table><br><br>
                '.$lumbosacra.'
                <p style="font-size:18px">Cualquier inquietud comunicarse al <b>4446604 EXT 101-102-103</b>, al celular <b>3174610820</b> o al correo <a href="mailto:atencionalusuario@cedisalud.com.co">atencionalusuario@cedisalud.com.co</a></p><br>
                <p style="font-size:18px"><b>Nota:</b> solicitamos a todos los aliados <b>evitar entregar los resultados y concepto ocupacional producto de la valoración realizada a los aspirantes,</b> publicar en su paginas WEB y/o enviar a CEDISALUD IPS al correo autorizado: <a href="mailto:coordinacionmedica@cedisalud.com.co">coordinacionmedica@cedisalud.com.co</a></p><br>
                <p style="font-size:18px">Este es un mensaje generado por el sistema automático de agendamiento de Cedisalud IPS.  Por favor, no responda este correo.</p><br> 
                <p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/logo.png" style="width:180px"></a></p>';
                $mail->CharSet = 'UTF-8';
                $mail->send();
            } */

                $mail = new PHPMailer(true); 
                //$mail->SMTPDebug = 4;                               // Habilitar el debug
                $mail->isSMTP();                                      // Usar SMTP
                $mail->Host = 'smtp.titan.email';                       // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
                $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
                $mail->Username = 'notificaciones@cedisalud.com.co';        // Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
                $mail->Password = 'Paulino_0404*';                       // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // 'ssl'
                $mail->Port = 465;                                    // Puerto SMTP                     
                $mail->Timeout =   90;
                $mail->AuthType = 'LOGIN';
                //Recipients   
                $mail->setFrom('notificaciones@cedisalud.com.co', 'Agendamiento Cedisalud');   
                /*$mail->isSMTP();                                      // Usar SMTP
                $mail->Host = 'cedisalud.com.co';                     // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
                $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
                if ($N == 1) {
                   $mail->Username = 'agendamiento44@cedisalud.com.co';     
                } else if($N == 2) {
                   $mail->Username = 'agendamiento45@cedisalud.com.co';   
                } else if($N == 3) {
                   $mail->Username = 'agendamiento46@cedisalud.com.co';   
                } else if($N == 4) {
                   $mail->Username = 'agendamiento47@cedisalud.com.co';   
                } else if($N == 5) {
                   $mail->Username = 'agendamiento48@cedisalud.com.co';   
                } else if($N == 6) {
                   $mail->Username = 'agendamiento49@cedisalud.com.co';   
                } else if($N == 7) {
                   $mail->Username = 'agendamiento50@cedisalud.com.co';   
                } else if($N == 8) {
                   $mail->Username = 'agendamiento51@cedisalud.com.co';   
                }
                $mail->Password = 'Paulino0404';                      // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // TLS o SSL (Gmail usa SSL)
                $mail->Port       = 465; // Puerto para SSL (587 para TLS)                                                      
                //$mail->Timeout =   30;
                //$mail->AuthType = 'LOGIN';
                //Recipients   
                 if ($N == 1) {
                   $mail->setFrom('agendamiento44@cedisalud.com.co', 'Agendamiento Cedisalud');     
                } else if($N == 2) {
                   $mail->setFrom('agendamiento45@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 3) {
                   $mail->setFrom('agendamiento46@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 4) {
                   $mail->setFrom('agendamiento47@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 5) {
                   $mail->setFrom('agendamiento48@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 6) {
                   $mail->setFrom('agendamiento49@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 7) {
                   $mail->setFrom('agendamiento50@cedisalud.com.co', 'Agendamiento Cedisalud');  
                } else if($N == 8) {
                   $mail->setFrom('agendamiento51@cedisalud.com.co', 'Agendamiento Cedisalud');  
                }*/
                switch ($Cliente0) {
                case 'Apartadó/Cedisalud IPS':
                    $mail->addAddress('notificaciones@cedisalud.com.co', 'Soporte técnico'); 
                    //$mail->addCC('notificaciones@cedisalud.com.co', 'Soporte técnico'); 
                    //$mail->addAddress('coordinacionmedica@cedisalud.com.co', 'Coordinación Médica Cedisalud IPS'); 
                    break;
                case 'Medellín/Cedisalud IPS':
                    $mail->addAddress('notificaciones@cedisalud.com.co', 'Soporte técnico'); 
                    //$mail->addCC('notificaciones@cedisalud.com.co', 'Soporte técnico');  
                    //$mail->addAddress('jeoalex0215@gmail.com'); 
                    //$mail->addAddress('coordinacionmedica@cedisalud.com.co', 'Coordinación Médica Cedisalud IPS'); 
                    break;
                case 'Rionegro/ORIENTESALUD':
                    $mail->addAddress('contactenos@orientesalud.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional');  
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Aguachica/Capella IPS':
                    $mail->addAddress('laboratoriocapella@hotmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional');  
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Armenia/PROENSO':
                    $mail->addAddress('proenso@hotmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                /*case 'La Dorada/IPS Fisiohealth':
                    $mail->addAddress('fisiohealth.ips@gmail.com'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;*/    
                 case 'Barrancabermeja/RVG IPS':
                    $mail->addAddress('lidersocupacional@rvgips.com'); 
                    $mail->addAddress('socupacional@rvgips.com'); 
                    $mail->addAddress('rvgbarranca@rvgips.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Barrancabermeja/RVO IPS S.A.S':
                    $mail->addAddress('solicitudes@rvo.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Barranquilla/Medikcorp SAS':
                    $mail->addAddress('administrativa@medikcorp.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                 case 'Barranquilla/SSTA Consulting S.A.S':
                    $mail->addAddress('Auxiliar1@sstaconsulting.com');  
                    $mail->addAddress('Auxiliar2@sstaconsulting.com');
                    $mail->addAddress('ordenesssta@gmail.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                /*case 'Bogotá Norte/Human Group Corp IPS VIP':
                    $mail->addAddress('contacto@humangroupcorpips.com'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; */ 
                 case 'Chía/INSSOMEDIC Ocupacional SAS':
                    $mail->addAddress('mercadeo@inssomedic.com');
                    $mail->addAddress('atencionalusuario@inssomedic.com'); 
                    $mail->addAddress('coordinacion.administrativa@inssomedic.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'Bogotá Norte/Zonamedica IPS':
                    $mail->addAddress('Recepcion@zonamedicaips.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Bogotá Américas/Zonamedica IPS':
                    $mail->addAddress('recepcion@zonamedicaips.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                case 'Bogotá La Soledad/Zonamedica IPS':
                    $mail->addAddress('Recepcion@zonamedicaips.com'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                 case 'Bogotá Norte/Unimsalud':
                    $mail->addAddress('citasbogota@unimsalud.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                 case 'Bogotá Sur/Unimos Salud':
                    $mail->addAddress('unimosocupacional@yahoo.es'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                case 'Bogotá Sur/Ocupasalud IPS Bogotá':
                    $mail->addAddress('mensajeria@ocupasaludsas.com'); 
                    $mail->addAddress('auexternasocupasaludsas@gmail.com'); 
                    $mail->addAddress('ocupasalud.bogota@gmail.com'); 
                    $mail->addAddress('prometeo.comercial2bta@gmail.com'); 
                    $mail->addAddress('prometeo.btadircomercial@gmail.com'); 
                    $mail->addAddress('comercialprometeorednacional@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Bogotá Central-Galerías/Grupo Ocupacional':
                    $mail->addAddress('grupoocupacional@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                case 'Bogotá Central/Unimsalud':
                    $mail->addAddress('citasbogota@unimsalud.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Facatativa/Medical Helsen IPS':
                    $mail->addAddress('recepcionmedicalhelsenfaca@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'Funza/IPS Sigmedical Funza':
                    $mail->addAddress('directoradministrativo@sigmedical.com.co'); 
                    $mail->addAddress('sigmedical@hotmail.com'); 
                    $mail->addAddress('recepcionfunza@sigmedical.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Madrid/IPS Sigmedical Madrid':
                    $mail->addAddress('recepcionmedicalhelsenfaca@gmail.com'); ; 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Madrid/IPS Sigmedical Madrid':
                    $mail->addAddress('directoradministrativo@sigmedical.com.co'); 
                    $mail->addAddress('recepcionmadrid@sigmedical.com.co');
                    $mail->addAddress('sigmedical@hotmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Mosquera/IPS Sigmedical Mosquera':
                    $mail->addAddress('directoradministrativo@sigmedical.com.co'); 
                    $mail->addAddress('recepcion@sigmedical.com.co'); 
                    $mail->addAddress('sigmedical@hotmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Zipaquirá/SANILAB IPS':
                    $mail->addAddress('sanilabipssas@gmail.com'); 
                    $mail->addAddress('servicioalcliente@sanilabips.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Bucaramanga/Ocupasalud IPS':
                    $mail->addAddress('mensajeria@ocupasaludsas.com'); 
                    $mail->addAddress('auexternasocupasaludsas@gmail.com'); 
                    $mail->addAddress('comercialprometeorednacional@gmail.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;      
                 case 'Bucaramanga/IPS Prosynergo SAS':
                    $mail->addAddress('citas@prosynergo.com.co'); 
                    $mail->addAddress('red.nacional@prosynergo.com.co'); 
                    $mail->addAddress('servicioalcliente@prosynergo.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Buga/Laboratorio Clínico López Línea Ocupacional IPS':
                    $mail->addAddress('info@laboratorioclinicolopezocupacional.com'); 
                    $mail->addAddress('laboratorioclinicolocupacional@gmail.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                case 'Cali/CEMESST':
                    $mail->addAddress('direccionadministrativacali@cemesst.com');  
                    $mail->addAddress('citasnacionales@cemesst.com'); 
                    $mail->addAddress('Recepcion@cemesst.com');
                    $mail->addAddress('Recepcioncemesst@gmail.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'Cali/Salud Ocupacional y Medicinas Alternativas':
                    $mail->addAddress('admonsoma@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                 case 'Cartagena/H&S Occupational':
                    $mail->addAddress('info@hysoccupational.co');  
                    $mail->addAddress('contacto@hysoccupational.co'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                 case 'Cartagena/GESMED':
                    $mail->addAddress('cpolo@gesmed.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                 case 'Magangué/UMER IPS Servicios Ocupacionales':
                    $mail->addAddress('serviciosocupacionales@umer-ips.com'); 
                    $mail->addAddress('umer.ips.sas@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Cúcuta/Progresando en Salud IPS':
                    $mail->addAddress('autorizacionesipsprogresando@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Ocaña/Progresando en Salud IPS':
                    $mail->addAddress('ordenes.ocana.progresando@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Ibagué/Servir SAS':
                    $mail->addAddress('ordenes@servirsas.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'La Ceja/IPS Corriente Vital':
                    $mail->addAddress('info@ipscorrientevital.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Manizales/UNIRSALUD':
                    $mail->addAddress('ordenes@unirsalud.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Manizales/Eje salud laboral SAS':
                    $mail->addAddress('recepcioneslaboral@gmail.com'); 
                    $mail->addAddress('facturacionejesaludlaboral@gmail.com'); 
                    $mail->addAddress('ipsejesaludlaboral@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Montería/Peña Asesores Salud Ocupacional S.A.S. -PASO-':
                    $mail->addAddress('Pasomonteria@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break; 
                case 'Montelíbano/Su Salud Integral SAS':
                    $mail->addAddress('ipssusaludintegral1@yahoo.es'); 
                    $mail->addAddress('conceptossaludintegral@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                case 'Neiva/IPS Centro de Diagnóstico Ocupacional':
                    $mail->addAddress('comercial12@sgi.com.co');
                    $mail->addAddress('ipscdoneiva@sgi.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Neiva/LABORVIDA IPS':
                    //$mail->addAddress('comercial@laborvida.com');
                    $mail->addAddress('servicioalcliente@laborvidaips.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                case 'Palmira/CEMESST':
                    $mail->addAddress('cemesstrecepcionpalmira@gmail.com');  
                    $mail->addAddress('recepcion@cemesstpalmira.com'); 
                    $mail->addAddress('direccioncomercial@cemesstpalmira.com'); 
                    $mail->addAddress('comercialcemesst.palmira@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Pasto/IPS AM PM 24 SAS':
                    $mail->addAddress('ampm24sas@hotmail.com');
                    $mail->addAddress('ordenes@ampm24.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Pasto/OCUPSALUD SST SAS':
                    $mail->addAddress('ocupsaludpasto@gmail.com');  
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    $mail->addCC('agendamientocitasocupsalud@gmail.com');  
                    break;      
                case 'Pereira/Previsión Ocupacional SAS':
                    $mail->addAddress('autorizaciondeservicio@previsionocupacional.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                 case 'Pereira/BIO QUALITY SALUD SAS':
                    $mail->addAddress('citas@bioqualitysalud.com');
                    $mail->addAddress('bqsalud@yahoo.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Pereira/Proteccion Integral IPS':
                    $mail->addAddress('ordenesyconceptos@proteccionintegral.com.co'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                case 'Popayan/Salud Ocupacional':
                    $mail->addAddress('Ocupacionalsaludipso@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Puerto Berrío/IPS Salud Integral Preventiva SAS':
                    $mail->addAddress('laboralsaludintegralpreventiva@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'Riohacha/APREHSI GROUP':
                    $mail->addAddress('medicinapreventiva@aprehsiltda.com'); 
                    $mail->addAddress('rednacional@aprehsiltda.com'); 
                    $mail->addAddress('saludlaboral@aprehsigroup.com');
                    $mail->addAddress('sederiohacha@aprehsigroup.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;   
                 case 'Santa Marta/PREVENIR 1-A SA':
                    $mail->addAddress('prevenir1asantamarta@hotmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;     
                 case 'Sincelejo/LABORMED':
                    $mail->addAddress('labormedsas@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;       
                 case 'Tunja/Carvajal Laboratorios IPS SAS':
                    $mail->addAddress('ejecutivodecuenta1@carvajalips.com'); 
                    $mail->addAddress('liderdecuenta@carvajalips.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;
                case 'Tuluá/IPS Opositiva Salud Integral Tuluá SAS':
                    $mail->addAddress('emopositivatulua@gmail.com');
                    $mail->addAddress('coordinacionopositiva@gmail.com'); 
                    $mail->addAddress('Coordinacionopositiva@gmail.com');
                    $mail->addAddress('prestadoraopositiva@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Puerto Gaitán/Clínica Grupo Sanar':
                    $mail->addAddress('coordinacion@gruposanar.com.co'); 
                    $mail->addAddress('atencionalusuario@gruposanar.com.co');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Mocoa/Diagnostico E.U':
                    $mail->addAddress('saludlaboral@diagnosticoseu.net'); 
                    $mail->addAddress('diagnosticoseu@hotmail.com');
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Puerto Asís/Clínica Salud Center':
                    $mail->addAddress('atencion@clinicasaludcenter.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Quibdó/BIOLABORAL IPS':
                    $mail->addAddress('biolaboralips@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;    
                case 'Villavicencio/ASEINCAP':
                    $mail->addAddress('felaifelips@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Valledupar/APREHSI GROUP':
                    $mail->addAddress('medicinapreventiva@aprehsiltda.com'); 
                    $mail->addAddress('rednacional@aprehsiltda.com'); 
                    $mail->addAddress('saludlaboral@aprehsigroup.com');
                    $mail->addAddress('emo@aprehsigroup.com'); 
                    $mail->addAddress('auxiliargestionsalud@aprehsigroup.com'); 
                    $mail->addAddress('citasyreferencia@aprehsigroup.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');  
                    break;  
                case 'Caucasia/Nueva ASC en Salud Total SAS':
                    //$mail->addAddress('nuevascensalud@outlook.com'); 
                    //$mail->addAddress('ipsnuevaascensaludocupacional@gmail.com'); 
                    $mail->addAddress('ordenesdeservicioasc@gmail.com'); 
                    $mail->addAddress('coordinacionmedica@cedisalud.com', 'Coordinación Médica Cedisalud IPS'); 
                    $mail->addAddress('rednacional@cedisalud.com', 'Red nacional'); 
                    $mail->addCC('notificaciones@cedisalud.com.co');   
                    break;      
                }        

                 //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'CITA EXAMEN MEDICO/'.$Especifico.'/'.$Empresa;
                $mail->Body  = '
                '.$Texto5.'
                <p style="font-family:arial;font-size:20px"><span>Cordial saludo Sres./as. <b>'.$Nombre_sede.'</b>:<br><br></span>Solicito amablemente la atención el día <b>'.$dia.' de '.$mes.' de '.$ano.'</b> al siguiente usuario, para la realización de los exámenes médicos ocupacionales descritos a continuación:</p>
                <p style="font-family:arial;font-size:25px;color:#6600cc"><b>CEDISALUD IPS ALIANZA RED NACIONAL</b></p>
                '.$Texto2.'
                <p style="font-family:arial;font-size:18px"><b>NOTA</b> SI EN ESTE EXAMEN HAY UNA SOLICITUD DE LABORATORIO CON EL NOMBRE: <b>alcohol metilico</b> por favor realizar <b>GLICEMIA, PRUEBA MARIPOSA, GRAVITEX</b>, como se tenga contemplado en su IPS, por favor no se autoriza un examen diferente para este ITEM en especifico.</p>
                <p style="font-family:arial;font-size:18px">INFORMACIÓN: Las pruebas denominadas MD2-MD5–MD10 corresponden a las pruebas de sustancias con 2-5-10 metabólicos de análisis.</p>
                <p style="font-family:arial;font-size:18px"><b>NOTA</b> SI LA PRUEBAS DE SUSTACIAS ESTÁ DENTRO DE LOS EXAMENES SOLICITADOS, POR FAVOR REALIZARLA DE PRIMERA. EN CASO DE SER POSITIVO, INFORMAR POR CHAT CREADO PARA ENVIO DE INFORMACION - NO REALIZAR MAS EXAMENES HASTA NUEVA ORDEN.</p>
                <table style="width:100%">
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Nombre:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Nombre.' '.$Apellidos.'</b></td>
                    </tr>
                     <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Documento:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Documento.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Cargo:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Cargo.'</b></td>
                    </tr>
                    <tr>
                        <td style="font-family:arial;font-size:20px;color:#660066"><b>Empresa a certificar:</b></td>
                        <td style="font-family:arial;font-size:20px"><b>'.$Empresa.' ('.$Sector.'-'.$Descripcion_sector.')</b></td>
                    </tr>
                </table><br><br>
                '.$lumbosacra.'
                '.$Texto4.'
                <p style="font-size:18px">Por favor, anexar el remitente de este correo -<b>agendamiento.cedisalud@cedisalud.com.co</b>- en la lista de contactos para evitar ser detectados como SPAM y así asegurar la remision de la orden.</p><br>
                <p style="font-size:18px">Cualquier inquietud comunicarse al <b>4446604 EXT 101-102-103</b>, al celular <b>3174610820</b> o al correo <a href="mailto:atencionalusuario@cedisalud.com.co">atencionalusuario@cedisalud.com.co</a></p><br>
                <p style="font-size:18px"><span style="color:#e62e00">De igual manera, para el envío de certificados de aptitud laboral:</span> <a href="mailto:atencionalusuario@cedisalud.com.co">atencionalusuario@cedisalud.com.co</a></p><br> 
                <p style="font-size:18px"><b>Nota:</b> solicitamos a todos los aliados <b>evitar entregar los resultados y concepto ocupacional producto de la valoración realizada a los aspirantes,</b> publicar en su paginas WEB y/o enviar a CEDISALUD IPS al correo autorizado: <a href="mailto:coordinacionmedica@cedisalud.com.co">coordinacionmedica@cedisalud.com.co</a></p><br>
                <p style="font-size:18px">Este es un mensaje generado por el sistema automático de agendamiento de Cedisalud IPS.  Por favor, no responda este correo.</p><br> 
                <p style="text-align:center"><a href="https://www.cedisalud.com.co"><img src="https://www.cedisalud.com.co/imagine/logo.png" style="width:180px"></a></p>';
                $mail->CharSet = 'UTF-8';
                $mail->send();
                echo '<p>La cita fué agendada para el día <span style="font-family:verdanab">'.$dia.'</span> de <span style="font-family:verdanab">'.$mes.'</span>.  Por favor, revise el correo electrónico <span style="font-family:verdanab">'.$Email .'</span>, allí recibirá confirmación de su cita.</p>' ;
            } 
}
?>
        