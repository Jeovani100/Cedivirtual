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

if(isset($_POST['fecha'])) {
    $fecha =$_POST["fecha"];
    $autor =$_POST["autor"];
}
$fechaEntrada= $_POST['fecha'];
$fechaAuxiliar	= strtotime ( "-8 seconds" , strtotime ( $fechaEntrada ) ) ;	
$fechaSalida 	= date ( 'Y-m-d H:i:s' , $fechaAuxiliar );
    
$sql = "SELECT * FROM agenda WHERE Fecha_registro >= '$fechaSalida' && Autor = $autor";
$resultado = $mysqli->query($sql);
$data = array();
while($row = mysqli_fetch_array($resultado)) {
    $Cliente0=$row["Ips"];
    switch ($Cliente0) {
            case 'Cedisalud IPS (Apartadó)':
                $Nombre_sede = 'Cedisalud IPS (Apartadó)';
                $Direccion = 'Calle 98 # 102 – 68 BARRIO ORTIZ';
                $Horario = 'Lunes-Jueves:6:30 A.M. a 12:00 M. y 1:00 P.M. a 4:00 P.M./Viernes:6:30 a 12:00 M. y 1:00 P.M. a 3:30 P.M./Sábado:7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/CEDISALUD+IPS/@7.8830312,-76.6362978,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xcafce96b403e83a4!8m2!3d7.8830312!4d-76.6341091';
                break;
             case 'Cedisalud IPS (Medellín)':
                $Nombre_sede = 'Cedisalud IPS (Medellín)';
                $Direccion = 'CALLE 31 # 43 -50 Barrio San Diego';
                $Horario = 'Lunes-Jueves: 6:30 A.M. a 4:30 P.M. / Viernes 6:30 A.M. a 4:00 P.M. / Sábado 6:30 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/CBgRmq6wKWx8de5H9';
                break;
            case 'Capella IPS (Aguachica)':
                $Nombre_sede = 'Capella IPS (Aguachica)';
                $Direccion = 'CR 22 N° 6-19';
                $Horario = 'L-V:7:00 A.M. a 12:00 M. 2:00 P.M a 4:00 P.M. Cábado: 7:00 A.M. a 12:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/Cra.+22+%236-19,+Aguachica,+Cesar/@8.3095878,-73.6177644,16z/data=!4m5!3m4!1s0x8e5d857c1f5b54dd:0x6c090951ad990137!8m2!3d8.3095825!4d-73.6126146?hl=es&entry=ttu';
                break;   
            case 'ORIENTESALUD (Rionegro)':
                $Nombre_sede = 'ORIENTESALUD (Rionegro)';
                $Direccion = 'CR 22 N° 6-19';
                $Horario = 'L-V:7:00 A.M. a 4:30 P.M. Sábado: 7:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/LFQkXFsyRe5jrbce8';
                break;     
            case 'PROENSO (Armenia)':
                $Nombre_sede = 'PROENSO (Armenia)';
                $Direccion = 'CARRERA 14 # 9 -18 Edificio Tarantella';
                $Horario = 'L-V: 6:30 A.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/MheXMfUcDh6CKa757';
                break;   
            case 'IPS Fisiohealth (La Dorada)':
                $Nombre_sede = 'IPS Fisiohealth (La Dorada)';
                $Direccion = 'CLL 12 N° 2-66, Zona Centro';
                $Horario = 'L-V: 6:40 A.M. a 12:00 M. El sábado no se brinda atención';
                $mapa = 'https://www.google.com/maps/place/FISIOHEALTH/@5.4526278,-74.675344,14z/data=!4m6!3m5!1s0x8e40df3a2bc254c9:0xe37fa9c028b4cbd4!8m2!3d5.4519032!4d-74.6625671!16s%2Fg%2F11kpvb_8h1?entry=ttu';
                break;     
             case 'Medikcorp SAS':
                $Nombre_sede = 'Medikcorp SAS';
                $Direccion = 'CARRERA 47No.76-79 Barrio El Prado';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 1:00 P.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M. Los sábados 10 y 17 de abril de 2021 no se prestará servicios al público';
                $mapa = 'https://www.google.com/maps/place/Medikcorp/@10.9976012,-74.8125781,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xdf7b01b6e81c0d61!8m2!3d10.9976012!4d-74.8103894';
                break;
            case 'SSTA Consulting S.A.S. (Barranquilla)':
                $Nombre_sede = 'SSTA Consulting S.A.S. (Barranquilla)';
                $Direccion = 'Cra. 47 #79-129';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 1:30 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com.co/maps/place/Cra.+47+%2379-129,+Barranquilla,+Atl%C3%A1ntico/@10.9989514,-74.8129683,18z/data=!4m5!3m4!1s0x8ef42d084b42e419:0xc4cc8f18d389d38a!8m2!3d10.9989748!4d-74.8127636?hl=es';
                break;
             case 'Human Group Corp IPS VIP (Bogotá Norte)':
                $Nombre_sede = 'Human Group Corp IPS VIP (Bogotá Norte)';
                $Direccion = '102 A #45A-03, Bogotá';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/HUMAN+GROUP+corp+IPS/@4.6892967,-74.0578506,15z/data=!4m2!3m1!1s0x0:0x19cf401f019401e?sa=X&ved=2ahUKEwiJ5r79xNr-AhWSg4QIHcEtDtoQ_BJ6BAhQEAg';
                break;    
             case 'INSSOMEDIC Ocupacional SAS (Chía)':
                $Nombre_sede = 'INSSOMEDIC Ocupacional SAS (Chía)';
                $Direccion = 'Cra. 9 #10-74 Piso 2 - oficinas y 3 - atenciones';
                $Horario = 'L-V: 6:30 A.M. a 3:00 P.M.  S: 8:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Inssomedic/@4.8597142,-74.0645988,15z/data=!4m6!3m5!1s0x8e3f870043f3aced:0x2c81627b966cdcc8!8m2!3d4.8601624!4d-74.0590118!16s%2Fg%2F11vplvtbld?entry=ttu';
                break;    
             case 'Zonamedica IPS (Bogotá Norte)':
                $Nombre_sede = 'Zonamedica IPS (Bogotá Norte)';
                $Direccion = 'Autopista Norte No 105 - 21';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/J6ML8xincDVqWudu5';
                break;  
             case 'Zonamedica IPS (Bogotá América)':
                $Nombre_sede = 'Zonamedica IPS (Bogotá América)';
                $Direccion = 'Av. Américas N° 62-84 Local 213 – 214 – 215';
                $Horario = 'L-V: 6:30 A.M. – 16:00 P.M. S: 6:30 A.M. – 12:00 A.M';
                $mapa = 'https://maps.app.goo.gl/qNiu8Jcufu7a4s6h9';
                break;    
            case 'Unimsalud (Bogotá Norte)':
                $Nombre_sede = 'Unimsalud (Bogotá Norte)';
                $Direccion = 'CARRERA 23 # 124-87 Edificio Zentai 405'; 
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=4.7022151965176375%2C-74.05030048357544&z=15';
                break;   
             case 'Zonamedica IPS (Bogotá La Soledad)':
                $Nombre_sede = 'Zonamedica IPS (Bogotá La Soledad)';
                $Direccion = 'CALLE 40 # 26 A - 50';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/ukHsePbzJvs2RNZp8';
                break;    
             case 'Unimos Salud  (Bogotá)':
                $Nombre_sede = 'Unimos Salud  (Bogotá)';
                $Direccion = 'CALLE 44 BIS B SUR 68 B 13, Bogotá';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 8:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+Unimos+Salud/@4.5958268,-74.144827,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x5ea2da382c386892!8m2!3d4.5958268!4d-74.1426383';
                break;
             case 'Ocupasalud IPS Bogotá  (Bogotá Sur)':
                $Nombre_sede = 'Ocupasalud IPS Bogotá  (Bogotá Sur)';
                $Direccion = 'CLL 22 sur # 19C - 09, Centro Comercial Nueva Visión, locales 207 y 208';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:30 M.';
                $mapa = 'https://maps.app.goo.gl/ravzdA5Qf3Px7H3o9';
                break;    
            case 'Grupo Ocupacional  (Bogotá)':
                $Nombre_sede = 'Grupo Ocupacional  (Bogotá)';
                $Direccion = 'CARRERA 27 A # 52 -48, Bogotá';
                $Horario = 'L-V: 6:45 A.M. a 4:00 P.M.  S: 6:45 A.M. a 11:00 A.M.';
               $mapa = 'https://maps.app.goo.gl/2whhsskbegj4MNaD9';
                break;
             case 'Unimsalud (Bogotá Central)':
                $Nombre_sede = 'Unimsalud (Bogotá Central)';
                $Direccion = 'CALLE 72A # 20C - 55';
                $Horario = 'L-V: 6:30 A.M. a 4:00 P.M.  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=4.661970359168456%2C-74.06379771351699&z=15';
                break;  
            case 'Medical Helsen IPS (Facatativa)':
                $Nombre_sede = 'Medical Helsen IPS (Facatativa)';
                $Direccion = 'Calle 4 # 2-15 esquina';
                $Horario = 'L-V: 7:30 A.M. a 16:00 P.M.  S: 8:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/xo4sp7y7tREuFfF89';
                break;     
            case 'IPS Sigmedical Funza':
                $Nombre_sede = 'IPS Sigmedical Funza';
                $Direccion = 'Calle 14 # 10-64, Centro de Funza';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/IPS+SIGMEDICAL+SEDE+FUNZA/@4.71419,-74.2106839,15z/data=!4m6!3m5!1s0x8e3f830c2e1bd4f9:0x22ae977f8b82169b!8m2!3d4.71419!4d-74.2106839!16s%2Fg%2F11rvd63psg';
                break; 
            case 'Medical Helsen IPS (Madrid)':
                $Nombre_sede = 'Medical Helsen IPS (Madrid)';
                $Direccion = 'Dg. 6 # 4-51';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S: 8:00 A.M. a 11:30 A.M.';
                $mapa = 'https://maps.app.goo.gl/dy42qtdmH8JtC6vF8';
                break;     
            case 'IPS Sigmedical Madrid':
                $Nombre_sede = 'IPS Sigmedical Madrid';
                $Direccion = 'Carrera 9 # 4-97';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/Ips+Sigmedical+MADRID/@4.7339583,-74.2653513,15z/data=!4m6!3m5!1s0x8e3f79b4d10c11fb:0x4c4676f416198bae!8m2!3d4.7339583!4d-74.2653513!16s%2Fg%2F11h35pks6l';
                break;   
            case 'IPS Sigmedical Madrid':
                $Nombre_sede = 'IPS Sigmedical Madrid';
                $Direccion = 'Carrera 9 # 4-97';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/Ips+Sigmedical+MADRID/@4.7339583,-74.2653513,15z/data=!4m6!3m5!1s0x8e3f79b4d10c11fb:0x4c4676f416198bae!8m2!3d4.7339583!4d-74.2653513!16s%2Fg%2F11h35pks6l';
                break;     
            case 'SANILAB IPS (Zipaquirá)':
                $Nombre_sede = 'SANILAB IPS (Zipaquirá)';
                $Direccion = 'Carrera 10A # 6-90';
                $Horario = 'L-V: 6:30 A.M. a 14:00 P.M.  S: 7:30 A.M. a 11:30 M.';
                $mapa = 'https://maps.app.goo.gl/3NExWvp7goUNfPjZA';
                break; 
             case 'Ocupasalud IPS (Bucaramanga)':
                $Nombre_sede = 'Ocupasalud IPS (Bucaramanga)';
                $Direccion = 'Avenida Quebrada Seca # 32A-89, Barrio San Alonso';
                $Horario = 'L-V: 6:00 A.M. a 12:00 M. / 2:00 P.M. a 4:30 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://maps.app.goo.gl/7aSWkHabJBiU5iUn8';
                break;    
             case 'IPS Prosynergo SAS (Bucaramanga)':
                $Nombre_sede = 'IPS Prosynergo SAS (Bucaramanga)';
                $Direccion = 'Cra. 31 # 49-67';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Prosynergo/@7.114796,-73.1146868,17z/data=!4m5!3m4!1s0x0:0xcd89f59f4f86ca1b!8m2!3d7.114796!4d-73.1124981';
                break;
             case 'Laboratorio Clínico López Línea Ocupacional IPS (Buga)':
                $Nombre_sede = 'Laboratorio Clínico López Línea Ocupacional IPS (Buga)';
                $Direccion = 'Cra. 15 N° 4-61';
                $Horario = 'L-V: de 7:00 A.M. a 12:00 P.M. / 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M';
                $mapa = 'https://www.google.com/maps/place/Laboratorio+Clinico+L%C3%B3pez+S.A.S+L%C3%ADnea+Ocupacional/@3.898404,-76.303178,15z/data=!4m6!3m5!1s0x8e30a7acb14f7653:0x3dff688c3dcff227!8m2!3d3.8984043!4d-76.3031782!16s%2Fg%2F11p4zv8bfw?hl=en';
                break;    
            case 'CEMESST (Cali)':
                $Nombre_sede = 'CEMESST (Cali)';
                $Direccion = 'AVENIDA 2 BIS Norte CLL 24 A Norte # 38';
                $Horario = 'L-V: 6:30 A.M. a 5:30 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Cemesst+%22Centro+Medico+en+Seguridad+y+Salud+en+el+Trabajo/@3.4678573,-76.5240716,17z/data=!3m1!4b1!4m6!3m5!1s0x8e30a63e7396d2bd:0x7e4c6fdfe3494af8!8m2!3d3.4678573!4d-76.5240716!16s%2Fg%2F11gfhsdtv8?entry=ttu&g_ep=EgoyMDI1MDIwMy4wIKXMDSoASAFQAw%3D%3D';
                break;    
             case 'Salud Ocupacional y Medicinas Alternativas (Cali)':
                $Nombre_sede = 'Salud Ocupacional y Medicinas Alternativas (Cali)';
                $Direccion = 'AVENIDA 2 E N # 24N – 58. Barrio San vicente';
                $Horario = 'L-V: 6:30 A.M. a 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Salud+Ocupacional+y+Medicinas+Alternativas/@3.4643556,-76.5261547,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x5bcd2ea66113a6fb!8m2!3d3.4643556!4d-76.523966';
                break;
              case 'H&S Occupational (Cartagena)':
                $Nombre_sede = 'H&S Occupational (Cartagena)';
                $Direccion = 'Avenida del bosque transversal 54 # 21 A - 91 C.C. Industrial del bosque local 6';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. / 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/H%26S+OCCUPATIONAL+S.A.S/@10.3889108,-75.5198965,15z/data=!4m2!3m1!1s0x0:0x4a0924b5e2d5bc95?sa=X&ved=1t:2428&ictx=111';
                break;
             case 'GESMED (Cartagena)':
                $Nombre_sede = 'GESMED (Cartagena)';
                $Direccion = 'Calle 31 # 69 - 75 Barrio Contadora, Edificio la Caracola Local 1';
                $Horario = 'L-V: 7:00 A.M. a 5:00 P.M.';
                $mapa = 'https://www.google.com.co/maps/place/LA+CARACOLA/@10.3943832,-75.4905047,15z/data=!4m9!1m2!2m1!1sla+Caracola,+Edifici,+Cartagena,+Provincia+de+Cartagena,+Bol%C3%ADvar!3m5!1s0x8ef625ca1914b6d3:0x1ef46abece4fecb1!8m2!3d10.3963506!4d-75.4863414!15sCkFsYSBDYXJhY29sYSwgRWRpZmljaSwgQ2FydGFnZW5hLCBQcm92aW5jaWEgZGUgQ2FydGFnZW5hLCBCb2zDrXZhcpIBEmFwYXJ0bWVudF9idWlsZGluZw?hl=es';
                break; 
             case 'UMER IPS Servicios Ocupacionales (Magangué)':
                $Nombre_sede = 'UMER IPS Servicios Ocupacionales (Magangué)';
                $Direccion = 'Calle 15 N° 15 - 36, Barrio Montecarlo';
                $Horario = 'L-V: 6:30 A.M. a 11:30 A.M. y 2:00 P.M. a 4:30 P.M.; Sábado: 6:30 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/UMER+IPS+servicios+Ocupacionales/@9.2440986,-74.7579976,17z/data=!3m1!4b1!4m6!3m5!1s0x8e5ec7e648287fc7:0x1ff18597c0250a1e!8m2!3d9.2440986!4d-74.7579976!16s%2Fg%2F11nmcv1rvm?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D';
                break;    
            case 'Progresando en Salud IPS (Cúcuta)':
                $Nombre_sede = 'Progresando en Salud IPS (Cúcuta)';
                $Direccion = 'CALLE 21 A # 0 B - 75, Barrio El Rosal - Barrio Blanco';
                $Horario = 'L-V: 6:00 A.M. a 12:00 M. y 2:00 P.M. a 5:00 P.M.  S: 6:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Ips+Progresando+En+Salud/@7.8758882,-72.5008367,17z/data=!3m1!4b1!4m5!3m4!1s0x8e664598b7e2b963:0x431474e35d1d32ce!8m2!3d7.8759059!4d-72.4986395';
                break;   
            case 'Progresando en Salud IPS (Ocaña)':
                $Nombre_sede = 'Progresando en Salud IPS (Ocaña)';
                $Direccion = 'CALLE 11 N° 24-65, Barrio Las Llanadas';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. y 2:00 P.M. a 4:30 P.M.  S: 6:00 A.M. a 11:30 A.M.';
                $mapa = "https://www.google.com/maps/place/8%C2%B014'41.3%22N+73%C2%B021'21.2%22W/@8.2446025,-73.3576414,17.5z/data=!4m4!3m3!8m2!3d8.2448056!4d-73.3558889?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D";
                break;      
            case 'Servir SAS (Ibagué)':
                $Nombre_sede = 'Servir SAS (Ibagué)';
                $Direccion = 'Calle 37 No 4H - 24, Barrio Magisterio';
                $Horario = 'L-V: 7:00 A.M. a 3:00 P.M. S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/SERVIR+S.A.S./@4.4374243,-75.220913,16z/data=!4m6!3m5!1s0x8e38c4e94ad498c5:0xf08a262e3ae3d979!8m2!3d4.4369536!4d-75.217351!16s%2Fg%2F1tx_7dff?entry=ttu';
                break;      
             case 'IPS Corriente Vital (La Ceja)':
                $Nombre_sede = 'IPS Corriente Vital (La Ceja)';
                $Direccion = 'Calle 17 #18-66';
                $Horario = 'L-V: 6:30 A.M. 3:30 P.M. (Jornada Continua)  S: 6:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Cl.+17+%231866,+La+Ceja,+Antioquia/@6.0281968,-75.431543,18.25z/data=!4m5!3m4!1s0x8e46974d883cce87:0xdea0d46b4e42ac4f!8m2!3d6.0283171!4d-75.430855';
                break;  
            case 'UNIRSALUD (Manizales)':
                $Nombre_sede = 'UNIRSALUD (Manizales)';
                $Direccion = 'Carrera 22, Av. del Centro # 26-12, Manizales, Caldas';
                $Horario = 'L-V: 6:30 A.M. A 11:30 A.M. El sábado no hay atención';
                $mapa = 'https://www.google.com/maps/place/Unirsalud/@5.067734,-75.5172618,16.5z/data=!4m5!3m4!1s0x8e476ff0958dcceb:0xbf52a4ddfcc2a814!8m2!3d5.0677526!4d-75.5148217';
                break;  
            case 'Eje salud laboral SAS (Manizales)':
                $Nombre_sede = 'Eje salud laboral SAS (Manizales)';
                $Direccion = 'Carrera 23, N° 23-60 Edificio Cuellar, Local 304, Manizales, Caldas';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. - 2:00 P.M a 4:30 P.M. El sábado no hay atención';
                $mapa = 'https://www.google.com/maps/place/EJE+SALUD+LABORAL+S.A.S./@5.0676686,-75.5247181,15z/data=!4m6!3m5!1s0x8e476ffa05f466ab:0x8e277066ec56685!8m2!3d5.0670701!4d-75.5164355!16s%2Fg%2F11fz9x4m0r?entry=ttu&g_ep=EgoyMDI0MDkwOS4wIKXMDSoASAFQAw%3D%3D';
                break; 
             case 'Peña Asesores Salud Ocupacional S.A.S. -PASO- (Montería)':
                $Nombre_sede = 'Peña Asesores Salud Ocupacional S.A.S. -PASO- (Montería)';
                $Direccion = 'CR 14 # 16-28, Montería';
                $Horario = 'L-V: 7:00 A.M. a 11:00 A:M. Y 1:30 P.M. a 4:00 P.M.  S: 7:00 A.M. a 11:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/Pe%C3%B1a+Asesores+En+Salud+Ocupacional+Paso+S.A.S./@8.7445908,-75.8825546,15z/data=!4m6!3m5!1s0x8e5a2fe1ffa55ce1:0x4e543b8ab510c8c!8m2!3d8.7445908!4d-75.8825546!16s%2Fg%2F11c58vthcf?entry=ttu';
                break;    
             case 'Su Salud Integral SAS (Montelíbano)':
                $Nombre_sede = 'Su Salud Integral SAS (Montelíbano)';
                $Direccion = 'CR 6 # 14-85, Barrio Centro';
                $Horario = 'L-V 6:00 A.M. a 11:30 A.M. y 14:00 P.M. a 15:30 P.M. Sábado 6:00 A.M. a 10:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Cl.+Antioquia+%2314-85,+Montelibano,+Montel%C3%ADbano,+C%C3%B3rdoba/@7.9829459,-75.4242265,17z/data=!4m6!3m5!1s0x8e5b13dd55d74ea3:0x25c7099a23861713!8m2!3d7.9825315!4d-75.4221236!16s%2Fg%2F11s8_0216b?entry=ttu&g_ep=EgoyMDI1MDkyMi4wIKXMDSoASAFQAw%3D%3D';
                break;     
            case 'CEMESST (Palmira)':
                $Nombre_sede = 'CEMESST (Palmira)';
                $Direccion = 'CALLE 34 # 27 - 85, Palmira';
                $Horario = 'L-V: 6:00 A.M. a 4:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=3.5277510554912745%2C-76.29714526669169&z=15';
                break;  
            case 'IPS AM PM 24 SAS (Pasto)':
                $Nombre_sede = 'IPS AM PM 24 SAS (Pasto)';
                $Direccion = 'Cll 20 # 38-15';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 2:00 P.M. a 5:30 P.M.  S: 7:30 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+Am:Pm+24+SAS/@1.2272216,-77.2906774,15z/data=!4m6!3m5!1s0x8e2ed48712cbeed3:0x60823d1af9d12693!8m2!3d1.2278223!4d-77.2831672!16s%2Fg%2F11g6p4g6yn?entry=ttu';
                break;      
            case 'OCUPSALUD SST SAS (Pasto)':
                $Nombre_sede = 'OCUPSALUD SST SAS (Pasto)';
                $Direccion = 'CRA 38 # 20 - 37, Barrio Morasurco';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 2:00 P.M. a 5:00 P.M.  S: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/IPS+OCUPSALUD+SST+SAS/@1.2279676,-77.286086,16z/data=!4m5!3m4!1s0x0:0xa51ca4cc4c61fc45!8m2!3d1.2281714!4d-77.2826068';
                break;   
             case 'Previsión Ocupacional SAS (Pereira)':
                $Nombre_sede = 'Previsión Ocupacional SAS (Pereira)';
                $Direccion = 'Calle 19 # 9-50 Local 18 A, Edificio San Bernardo, Complejo Diario del Otún';
                $Horario = 'L-V: 7:00 A.M. a 4:00 P.M.  S. 7:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Prevision+IPS+ltda./@4.8163627,-75.6948002,16z/data=!4m6!3m5!1s0x8e38873f894bf7a3:0xe6db203ad99ebcef!8m2!3d4.8160423!4d-75.693899!16s%2Fg%2F11dfkpnhnf?hl=es-419';
                break;    
             case 'BIO QUALITY SALUD SAS (Pereira)':
                $Nombre_sede = 'BIO QUALITY SALUD SAS (Pereira)';
                $Direccion = 'Carrera 10 N° 19-66, Centro';
                $Horario = 'L-J: 6:30 A.M. a 12:30 P.M. y 13:30 P.M. a 16:30; Viernes 6:30 A.M. - 4:00 P.M.';
                $mapa = 'https://www.google.com/maps/place/Bio+Quality+Salud+S.A.S./@4.8119141,-75.708144,14.5z/data=!4m6!3m5!1s0x8e3887463bb0c1b9:0x7ad31b6c5ce30681!8m2!3d4.8123389!4d-75.695124!16s%2Fg%2F11fx8hl6s6?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D';
                break;    
             case 'Proteccion Integral IPS (Pereira)':
                $Nombre_sede = 'Proteccion Integral IPS (Pereira)';
                $Direccion = 'CALLE 19 #5-13, CLINICA RISARALDA SEGUNDO PISO';
                $Horario = 'L-V: 7:00 A.M. a 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://maps.app.goo.gl/KCeyEuzkyhUBzpvQA';
                break;
            case 'Salud Ocupacional (Popayan)':
                $Nombre_sede = 'Salud Ocupacional (Popayan)';
                $Direccion = 'Carrera 9A # 17AN-41, Barrio Antonio Nariño';
                $Horario = 'L-V: 7:00 A.M. a 1:00 P.M. Y 2:00 pm a 4:30 P.M. Sábado no hay servicio';
                $mapa = 'https://www.google.com/maps/place/OCUPACIONAL+SALUD+IPSO/@2.4558211,-76.6012027,15.75z/data=!4m6!3m5!1s0x8e3003d8dca12c33:0x34be92f1ab4973cf!8m2!3d2.4561768!4d-76.5975164!16s%2Fg%2F11s7p4lxql?entry=ttu';
                break;    
            case 'IPS Salud Integral Preventiva SAS (Puerto Berrío)':
                $Nombre_sede = 'IPS Salud Integral Preventiva SAS (Puerto Berrío)';
                $Direccion = 'Calle 50 # 6 49 Referencia: sector semáforos';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. Y 1:00 P.M. a 4:30 P.M. Sábado: 7:00 A.M. a 12:00 M.';
                $mapa = 'https://www.google.com/search?rlz=1C1VDKB_esCO1027CO1027&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=AB5stBiBys9AErVPUFDx02lGmCUfLa365g:1688818405211&q=salud+ocupacional+popayan&rflfq=1&num=10&sa=X&ved=2ahUKEwikz4fpiv__AhUVOkQIHUZpCAMQjGp6BAgbEAE&biw=1366&bih=625&dpr=1#rlfi=hd:;si:3800636702205768655,l,ChlzYWx1ZCBvY3VwYWNpb25hbCBwb3BheWFuSNLlpdKeuICACFolEAAQARgAGAEYAiIZc2FsdWQgb2N1cGFjaW9uYWwgcG9wYXlhbpIBHm9jY3VwYXRpb25hbF9zYWZldHlfYW5kX2hlYWx0aKoBYwoIL20vMGt0NTEQASoVIhFzYWx1ZCBvY3VwYWNpb25hbCgOMh8QASIbt_R2tatChGQklIcL6j2g1GFqDODVAEytUPY_Mh0QAiIZc2FsdWQgb2N1cGFjaW9uYWwgcG9wYXlhbg;mv:[[2.456847127438402,-76.59685608137168],[2.455528692984128,-76.59939345109977]]&scso=_BFOpZIL6A62PwbkPp-CBoAo_18:1122';
                break;     
            case 'IPS APREHSI GROUP (Riohacha)':
                $Nombre_sede = 'IPS APREHSI GROUP (Riohacha)';
                $Direccion = 'CARRERA 10 # 14-60';
                $Horario = 'L-V: 7:00 A.M. a 3:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Benavides+de+Vega+Jose+Maria+-+Prevenir+1A+S.A./@11.2412698,-74.1932391,17.5z/data=!4m5!3m4!1s0x8ef4f50d715e49f5:0xab17437288d4b2!8m2!3d11.2416604!4d-74.1920277';
                break;  
            case 'PREVENIR 1-A SA (Santa Marta)':
                $Nombre_sede = 'PREVENIR 1-A SA (Santa Marta)';
                $Direccion = 'CARRERA 20 # 12-32, Barrio San Francisco, frente al edificio Davinci';
                $Horario = 'L-V 7:00 A.M. - 12:00 M. Y 2:00 P.M. - 6:00 P.M.  S. 7:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Benavides+de+Vega+Jose+Maria+-+Prevenir+1A+S.A./@11.2412698,-74.1932391,17.5z/data=!4m5!3m4!1s0x8ef4f50d715e49f5:0xab17437288d4b2!8m2!3d11.2416604!4d-74.1920277';
                break;    
            case 'LABORMED (Sincelejo)':
                $Nombre_sede = 'LABORMED (Sincelejo)';
                $Direccion = 'Carrera 19 # 15-7, Calle de las Flores';
                $Horario = 'L-V 7:00 A.M. - 16: P.M. S. 8:00 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?ll=9.305017390878527%2C-75.3973915878217&z=15&mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO';
                break; 
             case 'Carvajal Laboratorios IPS SAS (Tunja)':
                $Nombre_sede = 'Carvajal Laboratorios IPS SAS (Tunja)';
                $Direccion = 'Calle 39 # 40-1';
                $Horario = 'L-V: 6:30 A.M. 5:00 P.M. No se presta servicio los sábados';
                $mapa = 'https://www.google.com/maps/place/Cl.+39+%2340,+Tunja,+Boyac%C3%A1/@5.5446543,-73.3499404,17z/data=!4m5!3m4!1s0x8e6a7c388e27d5d1:0x7d976dbe387e5e56!8m2!3d5.5447397!4d-73.348138';
                break;
            case 'IPS Opositiva Salud Integral Tuluá SAS (Tuluá)':
                $Nombre_sede = 'IPS Opositiva Salud Integral Tuluá SAS (Tuluá)';
                $Direccion = 'Cra. 37 N° 25-31 B/ Alvernia';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. En horas de la tarde y fines de semana no se presta servicio.';
                $mapa = 'https://www.google.com/maps/place/IPS+O+POSITIVA+SALUD+INTEGRAL+-+Servicio+de+Medico+a+Domicilio+-+Fisioterapia-Toma+de+Pruebas+PCR/@4.0838211,-76.1944547,15z/data=!4m6!3m5!1s0x8e39c541c71efa25:0xd728dc096c68551!8m2!3d4.0841207!4d-76.1884036!16s%2Fg%2F11p0_wnl28';
                break;
            case 'Clínica Grupo Sanar (Puerto Gaitán)':
                $Nombre_sede = 'Clínica Grupo Sanar (Puerto Gaitán)';
                $Direccion = 'Cll. 14 N° 9-87';
                $Horario = 'L-V: 6:30 A.M. a 12:00 M. 2:00 P.M. a 4:30 P.M. Sábado 7:00 A.M. - 11:30 A.M.';
                $mapa = 'https://www.google.com/search?sca_esv=7e5d29643a21257e&rlz=1C1VDKB_esCO1027CO1027&cs=0&tbm=lcl&sxsrf=AM9HkKmKkhv1j2CnfzkDP5PTv6kpC06Qjw:1701997533314&q=Grupo+Preferencial+Sanar&rflfq=1&num=20&stick=H4sIAAAAAAAAAC2QTUoDQRCFyUJx7biQWc0R6v_nBG4FvcAkRAholAm5kDt3gkfIbTyFb8CmF0111Xvfq5vr8Y7DNMNVMkgMbw1H1Zy5uNo5XS3DWschmEiJwruYyaVKxsHMy8Ms09uoCHroJHJPZU1SM06THget7GCWaG-WFDJCMTwdzwp0Vhs-V6iOJJOCmMg6Q5hvNxEqVaUAVWvEOLCHW3chQbBKSzXmxYgrkY0AGv_4ktRkqzliGVJVgrTb2BvmTaBwIK_zIMjWJicqdizIUFVOdSc3SpAaLiN_sZS0EjbVXgQttKYhf0hhLSxwQDAAuDC81m0xpHAKraUQg6ZFCdyVdN1AVjmxVbXKGkUpvzeb383t8_y2PVy-jtNpP23Pp93l5_Pq_mE5f7xPj8v-Zb_sj7vD_Do9zcd5-QO3b_SD4gEAAA&ved=2ahUKEwjyvITz0v6CAxViRzABHXFTAg8QicgKegQIDRAF&rldimm=16437653276024437365#rlfi=hd:;si:;mv:[[4.3172790999999995,-72.0779876],[4.3091468,-72.0895941]]';
                break;   
            case 'Diagnostico E.U (Mocoa)':
                $Nombre_sede = 'Diagnostico E.U (Mocoa)';
                $Direccion = 'Cll. 12 N° 9-103, barrio Villacolombia';
                $Horario = 'L-V: 7:00 A.M. a 12:00 M. 2:00 P.M. a 5:00 P.M. Sábado 7:30 A.M. - 12:00 M.';
                $mapa = 'https://www.google.com/maps/place/Diagn%C3%B3stico+Eu/@1.1504497,-76.6555199,15z/data=!4m6!3m5!1s0x8e28b284d0634d39:0xe0e1e18b3d461040!8m2!3d1.1507495!4d-76.649383!16s%2Fg%2F11hbvbw6gp?hl=es-419&entry=ttu';
                break;   
            case 'Clínica Salud Center (Puerto Asís)':
                $Nombre_sede = 'Clínica Salud Center (Puerto Asís)';
                $Direccion = 'Cll 9 N° 24-74, Barrio el puerto - Diagonal a la bomba los cristales - Vía a la calle angosta.';
                $Horario = 'L-V 7:00 A.M. a 11:30 A.M. y 14:00 P.M. a 16:30 P.M. Sábado 7:00 A.M. A 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Clinica+Salud+Center+Sas-+Crc+Salud+Center/@0.4970456,-76.5051487,15.75z/data=!4m6!3m5!1s0x8e2878dfb5b3aacb:0x5e4577bea9e64681!8m2!3d0.4941564!4d-76.4998932!16s%2Fg%2F11c6cfx079?entry=ttu&g_ep=EgoyMDI1MDkyMi4wIKXMDSoASAFQAw%3D%3D';
                break;    
             case 'BIOLABORAL IPS (Quibdó)':
                $Nombre_sede = 'BIOLABORAL IPS (Quibdó)';
                $Direccion = 'Cra. 6 # 31 - 81, Quibdó, Chocó';
                $Horario = 'L-V: 7:00 A.M. 5:00 P.M. (Jornada Continua)  S: 7:00 A.M. a 12:00 A.M.';
                $mapa = 'https://www.google.com/maps/d/u/0/viewer?mid=1AbP6RemmHx5aB69xeAr2mWiarjVtsjcO&ll=5.693558730416698%2C-76.65569451397455&z=16';
                break;    
            case 'ASEINCAP (Villavicencio)':
                $Nombre_sede = 'ASEINCAP (Villavicencio)';
                $Direccion = 'Cra 38 N. 33a38 Barzal – Felaifel IPS / Asesorias Integrales';
                $Horario = 'L-V: 6:30 A.M. 4:00 P.M. (Jornada Continua)  S: 7:00 A.M. a 11:00 A.M.';
                $mapa = 'https://www.google.com/maps/place/Asesorias+integrales+ASEINCAP/@4.1449471,-73.6404889,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x25e46b336df988c2!8m2!3d4.1449471!4d-73.6383002';
                break;  
             case 'APREHSI GROUP (Valledupar)':
                $Nombre_sede = 'APREHSI GROUP (Valledupar)';
                $Direccion = 'Transv. 18b #20-32, Las Delicias';
                $Horario = 'L-V 7:00 A.M. a 12 M. 2:00 P.M. a 5:00 P.M. S: 8:00 A.M. a 12 M.';
                $mapa = 'https://www.google.com/maps/dir/6.2999416,-75.5626034/aprehsi+valledupar/@10.466275,-73.2614809,14.75z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8e8ab9c74abc69e3:0xa0282450cff7644d!2m2!1d-73.2544176!2d10.4660976';
                break;    
            case 'Nueva ASC en Salud Total SAS (Caucasia)':
                $Nombre_sede = 'Nueva ASC en Salud Total SAS (Caucasia)';
                $Direccion = 'Cll 18 N° 12 - 04, Barrio el Centenario';
                $Horario = 'L-V 7:00 A.M. a 12:00 M. - 2:00 P.M a 3:00 P.M.; Sábado 7:00 A.M. a 11:30 A.M.';
                $mapa = 'https://www.google.com/maps/place/Nueva+ASC+en+Salud+Ocupacional+IPS/@7.9877552,-75.2026775,16z/data=!4m6!3m5!1s0x8e5b6fa53e776d3d:0x25928f90ce174f2a!8m2!3d7.9873089!4d-75.198107!16s%2Fg%2F11qg_yw7tv?entry=ttu&g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D';
                break;    
            case 'RVO IPS S.A.S (Barrancabermeja)':
                $Nombre_sede = 'RVO IPS S.A.S (Barrancabermeja)';
                $Direccion = 'Cll 52 #20-04, Barrio Colombia';
                $Horario = 'L-V 7:00 A.M. a 5:30 P.M. S: 6:30 A.M. a 11:30 M.';
                $mapa = 'https://maps.app.goo.gl/zSZnYFe91uizGMx86';
                break;      
        } 
        $dia=$row["Dia"];
        $mes0=$row["Mes"];
        $ano=$row["Año"];
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
        $Empresa=$row["Empresa"];
        $Nombre=$row["Nombre"];
        $Apellidos=$row["Apellidos"];
        $Documento=$row["Documento"];
        $Cargo=$row["Cargo"];
        $Examen=$row["Examen"];
        $Especifico=$row["Especifico"];
        $Observaciones=$row["Observaciones"];
        $Celular=$row['Celular'];
        
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
                $descripcion2 = '';
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
    	
$Especifico=$row["Especifico"];

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

}    