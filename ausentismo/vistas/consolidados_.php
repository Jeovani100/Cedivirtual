<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consolidados Ausentismo</title>
<meta name="robots" content="INDEX,FOLLOW">
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<?php
    error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    //if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM admin WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $id_ = $row['id_admin'];
    $Activo = $row['Activo'];
    if ($Activo == 1){
        $id_admin = $id_;
    } else {
        $id_admin = $id;
    }
    $_SESSION['id_usuario'] = $id_admin;
    $Activo = $row['Activo'];
    $Autor = $row['PersonaC'];
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'";
    $resultado1 = $mysqli->query($sql);
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
    $Nit = $row1['Nit'];
    $Razon = $row1['Razon'];
    $Year2 = $row1['Ausentismo2'];
    $id_admin_aus = $row1['Ausentismo'];
    $_SESSION['razon'] = $row1['Razon'];
    $_SESSION['id_usuario'] = $id_admin_aus;
    $_SESSION['codigo'] = $id_admin_aus;
    $_SESSION['year'] = $Year2;
   // $Year2 = $Year = date("Y");
    
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio = $row['Inicio'];
    $_SESSION['Inicio'] = $Inicio;
    
    $sql = "SELECT * FROM controles_ausentismo WHERE id_admin = $id_admin && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion = $row['Terminacion'];
    $_SESSION['Terminacion'] = $Terminacion;
    
    $sql = "SELECT * FROM controles_ausentismo2 WHERE id_admin = '$id_admin_aus' && Centro_ !='' && Centro_existe = '#e7744f'";
    $resultado_centro = $mysqli->query($sql);
    function mostrarDatos ($resultado_centro) {
    if ($resultado_centro !=NULL) {
        return $resultado_centro['Centro_'];}
    }
    $extraido1= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro1'] = mostrarDatos($extraido1);
    $extraido2= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro2'] = mostrarDatos($extraido2);
    $extraido3= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro3'] = mostrarDatos($extraido3);
    $extraido4= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro4'] = mostrarDatos($extraido4);
    $extraido5= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro5'] = mostrarDatos($extraido5);
    $extraido6= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro6'] = mostrarDatos($extraido6);
    $extraido7= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro7'] = mostrarDatos($extraido7);
    $extraido8= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro8'] = mostrarDatos($extraido8);
    $extraido9= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro9'] = mostrarDatos($extraido9);
    $extraido10= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro10'] = mostrarDatos($extraido10);
    $extraido11= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro11'] = mostrarDatos($extraido11);
    $extraido12= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro12'] = mostrarDatos($extraido12);
    $extraido13= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro13'] = mostrarDatos($extraido13);
    $extraido14= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro14'] = mostrarDatos($extraido14);
    $extraido15= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro15'] = mostrarDatos($extraido15);
    $extraido16= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro16'] = mostrarDatos($extraido16);
    $extraido17= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro17'] = mostrarDatos($extraido17);
    $extraido18= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro18'] = mostrarDatos($extraido18);
    $extraido19= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro19'] = mostrarDatos($extraido19);
    $extraido20= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro20'] = mostrarDatos($extraido20);
    $extraido21= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro21'] = mostrarDatos($extraido21);
    $extraido22= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro22'] = mostrarDatos($extraido22);
    $extraido23= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro23'] = mostrarDatos($extraido23);
    $extraido24= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro24'] = mostrarDatos($extraido24);
    $extraido25= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro25'] = mostrarDatos($extraido25);
    $extraido26= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro26'] = mostrarDatos($extraido26);
    $extraido27= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro27'] = mostrarDatos($extraido27);
    $extraido28= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro28'] = mostrarDatos($extraido28);
    $extraido29= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro29'] = mostrarDatos($extraido29);
    $extraido30= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro30'] = mostrarDatos($extraido30);
    $extraido31= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro31'] = mostrarDatos($extraido31);
    $extraido32= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro32'] = mostrarDatos($extraido32);
    $extraido33= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro33'] = mostrarDatos($extraido33);
    $extraido34= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro34'] = mostrarDatos($extraido34);
    $extraido35= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro35'] = mostrarDatos($extraido35);
    $extraido36= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro36'] = mostrarDatos($extraido36);
    $extraido37= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro37'] = mostrarDatos($extraido37);
    $extraido38= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro38'] = mostrarDatos($extraido38);
    $extraido39= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro39'] = mostrarDatos($extraido39);
    $extraido40= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro40'] = mostrarDatos($extraido40);
    $extraido41= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro41'] = mostrarDatos($extraido41);
    $extraido42= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro42'] = mostrarDatos($extraido42);
    $extraido43= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro43'] = mostrarDatos($extraido43);
    $extraido44= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro44'] = mostrarDatos($extraido44);
    $extraido45= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro45'] = mostrarDatos($extraido45);
    $extraido46= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro46'] = mostrarDatos($extraido46);
    $extraido47= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro47'] = mostrarDatos($extraido47);
    $extraido48= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro48'] = mostrarDatos($extraido48);
    $extraido49= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro49'] = mostrarDatos($extraido49);
    $extraido50= mysqli_fetch_array($resultado_centro);
    $_SESSION['Centro50'] = mostrarDatos($extraido50);
    
    $Centro1 = $_SESSION['Centro1']; $Centro2 = $_SESSION['Centro2']; $Centro3 = $_SESSION['Centro3']; $Centro4 = $_SESSION['Centro4']; $Centro5 = $_SESSION['Centro5']; $Centro6 = $_SESSION['Centro6']; $Centro7 = $_SESSION['Centro7']; $Centro8 = $_SESSION['Centro8']; $Centro9 = $_SESSION['Centro9']; $Centro9 = $_SESSION['Centro9']; $Centro10 = $_SESSION['Centro10'];
    $Centro11 = $_SESSION['Centro11']; $Centro12 = $_SESSION['Centro12']; $Centro13 = $_SESSION['Centro13']; $Centro14 = $_SESSION['Centro14']; $Centro15 = $_SESSION['Centro15']; $Centro16 = $_SESSION['Centro16']; $Centro17 = $_SESSION['Centro17']; $Centro18 = $_SESSION['Centro18']; $Centro19 = $_SESSION['Centro19']; $Centro19 = $_SESSION['Centro19']; $Centro20 = $_SESSION['Centro20'];
    $Centro21 = $_SESSION['Centro21']; $Centro22 = $_SESSION['Centro22']; $Centro23 = $_SESSION['Centro23']; $Centro24 = $_SESSION['Centro24']; $Centro25 = $_SESSION['Centro25']; $Centro26 = $_SESSION['Centro26']; $Centro27 = $_SESSION['Centro27']; $Centro28 = $_SESSION['Centro28']; $Centro29 = $_SESSION['Centro29']; $Centro29 = $_SESSION['Centro29']; $Centro30 = $_SESSION['Centro30'];
    $Centro31 = $_SESSION['Centro31']; $Centro32 = $_SESSION['Centro32']; $Centro33 = $_SESSION['Centro33']; $Centro34 = $_SESSION['Centro34']; $Centro35 = $_SESSION['Centro35']; $Centro36 = $_SESSION['Centro36']; $Centro37 = $_SESSION['Centro37']; $Centro38 = $_SESSION['Centro38']; $Centro39 = $_SESSION['Centro39']; $Centro39 = $_SESSION['Centro39']; $Centro40 = $_SESSION['Centro40'];
    $Centro41 = $_SESSION['Centro41']; $Centro42 = $_SESSION['Centro42']; $Centro43 = $_SESSION['Centro43']; $Centro44 = $_SESSION['Centro44']; $Centro45 = $_SESSION['Centro45']; $Centro46 = $_SESSION['Centro46']; $Centro47 = $_SESSION['Centro47']; $Centro48 = $_SESSION['Centro48']; $Centro49 = $_SESSION['Centro49']; $Centro49 = $_SESSION['Centro49']; $Centro50 = $_SESSION['Centro50'];
    
    include_once 'app/repositorioausentismo.inc.php';
    
    $Enero_NNT = Consolidados::Enero_NNT(conexion::obtener_conexion());
    $Febrero_NNT = Consolidados::Febrero_NNT(conexion::obtener_conexion());
    $Marzo_NNT = Consolidados::Marzo_NNT(conexion::obtener_conexion());
    $Abril_NNT = Consolidados::Abril_NNT(conexion::obtener_conexion());
    $Mayo_NNT = Consolidados::Mayo_NNT(conexion::obtener_conexion());
    $Junio_NNT = Consolidados::Junio_NNT(conexion::obtener_conexion());
    $Julio_NNT =Consolidados::Julio_NNT(conexion::obtener_conexion());
    $Agosto_NNT =Consolidados::Agosto_NNT(conexion::obtener_conexion());
    $Septiembre_NNT = Consolidados::Septiembre_NNT(conexion::obtener_conexion());
    $Octubre_NNT = Consolidados::Octubre_NNT(conexion::obtener_conexion());
    $Noviembre_NNT = Consolidados::Noviembre_NNT(conexion::obtener_conexion());
    $Diciembre_NNT = Consolidados::Diciembre_NNT(conexion::obtener_conexion());
    $Anual_NNT = round(Consolidados::Anual_NNT(conexion::obtener_conexion()), 0, PHP_ROUND_HALF_UP);

    $Enero_HE = Consolidados::Enero_HE(conexion::obtener_conexion());
    $Febrero_HE = Consolidados::Febrero_HE(conexion::obtener_conexion());
    $Marzo_HE = Consolidados::Marzo_HE(conexion::obtener_conexion());
    $Abril_HE = Consolidados::Abril_HE(conexion::obtener_conexion());
    $Mayo_HE = Consolidados::Mayo_HE(conexion::obtener_conexion());
    $Junio_HE = Consolidados::Junio_HE(conexion::obtener_conexion());
    $Julio_HE =Consolidados::Julio_HE(conexion::obtener_conexion());
    $Agosto_HE =Consolidados::Agosto_HE(conexion::obtener_conexion());
    $Septiembre_HE = Consolidados::Septiembre_HE(conexion::obtener_conexion());
    $Octubre_HE = Consolidados::Octubre_HE(conexion::obtener_conexion());
    $Noviembre_HE = Consolidados::Noviembre_HE(conexion::obtener_conexion());
    $Diciembre_HE = Consolidados::Diciembre_HE(conexion::obtener_conexion());
    $Anual_HE = Consolidados::Anual_HE(conexion::obtener_conexion());
    
    $Enero_HHT = Consolidados::Enero_HHTP(conexion::obtener_conexion());
    $Febrero_HHT = Consolidados::Febrero_HHTP(conexion::obtener_conexion());
    $Marzo_HHT = Consolidados::Marzo_HHTP(conexion::obtener_conexion());
    $Abril_HHT = Consolidados::Abril_HHTP(conexion::obtener_conexion());
    $Mayo_HHT = Consolidados::Mayo_HHTP(conexion::obtener_conexion());
    $Junio_HHT = Consolidados::Junio_HHTP(conexion::obtener_conexion());
    $Julio_HHT =Consolidados::Julio_HHTP(conexion::obtener_conexion());
    $Agosto_HHT =Consolidados::Agosto_HHTP(conexion::obtener_conexion());
    $Septiembre_HHT = Consolidados::Septiembre_HHTP(conexion::obtener_conexion());
    $Octubre_HHT = Consolidados::Octubre_HHTP(conexion::obtener_conexion());
    $Noviembre_HHT = Consolidados::Noviembre_HHTP(conexion::obtener_conexion());
    $Diciembre_HHT = Consolidados::Diciembre_HHTP(conexion::obtener_conexion());
    $Anual_HHT = Consolidados::Anual_HHTP(conexion::obtener_conexion());
    
    $Enero_AT = Consolidados::AT1(conexion::obtener_conexion());
    $Febrero_AT = Consolidados::AT2(conexion::obtener_conexion());
    $Marzo_AT = Consolidados::AT3(conexion::obtener_conexion());
    $Abril_AT = Consolidados::AT4(conexion::obtener_conexion());
    $Mayo_AT = Consolidados::AT5(conexion::obtener_conexion());
    $Junio_AT = Consolidados::AT6(conexion::obtener_conexion());
    $Julio_AT = Consolidados::AT7(conexion::obtener_conexion());
    $Agosto_AT = Consolidados::AT8(conexion::obtener_conexion());
    $Septiembre_AT = Consolidados::AT9(conexion::obtener_conexion());
    $Octubre_AT = Consolidados::AT10(conexion::obtener_conexion());
    $Noviembre_AT = Consolidados::AT11(conexion::obtener_conexion());
    $Diciembre_AT = Consolidados::AT12(conexion::obtener_conexion());
    $Anual_AT = ($Enero_AT+$Febrero_AT+$Marzo_AT+$Abril_AT+$Mayo_AT+$Junio_AT+$Julio_AT+$Agosto_AT+$Septiembre_AT+$Octubre_AT+$Noviembre_AT+$Diciembre_AT);
    
    $Enero_DI = Consolidados::DI1(conexion::obtener_conexion());
    $Febrero_DI = Consolidados::DI2(conexion::obtener_conexion());
    $Marzo_DI = Consolidados::DI3(conexion::obtener_conexion());
    $Abril_DI = Consolidados::DI4(conexion::obtener_conexion());
    $Mayo_DI = Consolidados::DI5(conexion::obtener_conexion());
    $Junio_DI = Consolidados::DI6(conexion::obtener_conexion());
    $Julio_DI = Consolidados::DI7(conexion::obtener_conexion());
    $Agosto_DI = Consolidados::DI8(conexion::obtener_conexion());
    $Septiembre_DI = Consolidados::DI9(conexion::obtener_conexion());
    $Octubre_DI = Consolidados::DI10(conexion::obtener_conexion());
    $Noviembre_DI = Consolidados::DI11(conexion::obtener_conexion());
    $Diciembre_DI = Consolidados::DI12(conexion::obtener_conexion());
    $Anual_DI = ($Enero_DI+$Febrero_DI+$Marzo_DI+$Abril_DI+$Mayo_DI+$Junio_DI+$Julio_DI+$Agosto_DI+$Septiembre_DI+$Octubre_DI+$Noviembre_DI+$Diciembre_DI);
    
    $Enero_DTI = Consolidados::DTI1(conexion::obtener_conexion());
    $Febrero_DTI = Consolidados::DTI2(conexion::obtener_conexion());
    $Marzo_DTI = Consolidados::DTI3(conexion::obtener_conexion());
    $Abril_DTI = Consolidados::DTI4(conexion::obtener_conexion());
    $Mayo_DTI = Consolidados::DTI5(conexion::obtener_conexion());
    $Junio_DTI = Consolidados::DTI6(conexion::obtener_conexion());
    $Julio_DTI = Consolidados::DTI7(conexion::obtener_conexion());
    $Agosto_DTI = Consolidados::DTI8(conexion::obtener_conexion());
    $Septiembre_DTI = Consolidados::DTI9(conexion::obtener_conexion());
    $Octubre_DTI = Consolidados::DTI10(conexion::obtener_conexion());
    $Noviembre_DTI = Consolidados::DTI11(conexion::obtener_conexion());
    $Diciembre_DTI = Consolidados::DTI12(conexion::obtener_conexion());
    $Anual_DTI = ($Enero_DTI+$Febrero_DTI+$Marzo_DTI+$Abril_DTI+$Mayo_DTI+$Junio_DTI+$Julio_DTI+$Agosto_DTI+$Septiembre_DTI+$Octubre_DTI+$Noviembre_DTI+$Diciembre_DTI);
    
    $Enero_laboral = Consolidados::laboral1(conexion::obtener_conexion());
    $Febrero_laboral = Consolidados::laboral2(conexion::obtener_conexion());
    $Marzo_laboral = Consolidados::laboral3(conexion::obtener_conexion());
    $Abril_laboral = Consolidados::laboral4(conexion::obtener_conexion());
    $Mayo_laboral = Consolidados::laboral5(conexion::obtener_conexion());
    $Junio_laboral = Consolidados::laboral6(conexion::obtener_conexion());
    $Julio_laboral = Consolidados::laboral7(conexion::obtener_conexion());
    $Agosto_laboral = Consolidados::laboral8(conexion::obtener_conexion());
    $Septiembre_laboral = Consolidados::laboral9(conexion::obtener_conexion());
    $Octubre_laboral = Consolidados::laboral10(conexion::obtener_conexion());
    $Noviembre_laboral = Consolidados::laboral11(conexion::obtener_conexion());
    $Diciembre_laboral = Consolidados::laboral12(conexion::obtener_conexion());
    $Anual_laboral = ($Enero_laboral+$Febrero_laboral+$Marzo_laboral+$Abril_laboral+$Mayo_laboral+$Junio_laboral+$Julio_laboral+$Agosto_laboral+$Septiembre_laboral+$Octubre_laboral+$Noviembre_laboral+$Diciembre_laboral);

    $Enero_comun = Consolidados::comun1(conexion::obtener_conexion());
    $Febrero_comun = Consolidados::comun2(conexion::obtener_conexion());
    $Marzo_comun = Consolidados::comun3(conexion::obtener_conexion());
    $Abril_comun = Consolidados::comun4(conexion::obtener_conexion());
    $Mayo_comun = Consolidados::comun5(conexion::obtener_conexion());
    $Junio_comun = Consolidados::comun6(conexion::obtener_conexion());
    $Julio_comun = Consolidados::comun7(conexion::obtener_conexion());
    $Agosto_comun = Consolidados::comun8(conexion::obtener_conexion());
    $Septiembre_comun = Consolidados::comun9(conexion::obtener_conexion());
    $Octubre_comun = Consolidados::comun10(conexion::obtener_conexion());
    $Noviembre_comun = Consolidados::comun11(conexion::obtener_conexion());
    $Diciembre_comun = Consolidados::comun12(conexion::obtener_conexion());
    $Anual_comun = ($Enero_comun+$Febrero_comun+$Marzo_comun+$Abril_comun+$Mayo_comun+$Junio_comun+$Julio_comun+$Agosto_comun+$Septiembre_comun+$Octubre_comun+$Noviembre_comun+$Diciembre_comun);
    
    $Enero_comun_2 = Consolidados::comun1_2(conexion::obtener_conexion());
    $Febrero_comun_2 = Consolidados::comun2_2(conexion::obtener_conexion());
    $Marzo_comun_2 = Consolidados::comun3_2(conexion::obtener_conexion());
    $Abril_comun_2 = Consolidados::comun4_2(conexion::obtener_conexion());
    $Mayo_comun_2 = Consolidados::comun5_2(conexion::obtener_conexion());
    $Junio_comun_2 = Consolidados::comun6_2(conexion::obtener_conexion());
    $Julio_comun_2 = Consolidados::comun7_2(conexion::obtener_conexion());
    $Agosto_comun_2 = Consolidados::comun8_2(conexion::obtener_conexion());
    $Septiembre_comun_2 = Consolidados::comun9_2(conexion::obtener_conexion());
    $Octubre_comun_2 = Consolidados::comun10_2(conexion::obtener_conexion());
    $Noviembre_comun_2 = Consolidados::comun11_2(conexion::obtener_conexion());
    $Diciembre_comun_2 = Consolidados::comun12_2(conexion::obtener_conexion());
    $Anual_comun_2 = ($Enero_comun_2+$Febrero_comun_2+$Marzo_comun_2+$Abril_comun_2+$Mayo_comun_2+$Junio_comun_2+$Julio_comun_2+$Agosto_comun_2+$Septiembre_comun_2+$Octubre_comun_2+$Noviembre_comun_2+$Diciembre_comun_2);
    
    $Enero_comun_empresa = Consolidados::comun1_empresa(conexion::obtener_conexion());
    $Febrero_comun_empresa = Consolidados::comun2_empresa(conexion::obtener_conexion());
    $Marzo_comun_empresa = Consolidados::comun3_empresa(conexion::obtener_conexion());
    $Abril_comun_empresa = Consolidados::comun4_empresa(conexion::obtener_conexion());
    $Mayo_comun_empresa = Consolidados::comun5_empresa(conexion::obtener_conexion());
    $Junio_comun_empresa = Consolidados::comun6_empresa(conexion::obtener_conexion());
    $Julio_comun_empresa = Consolidados::comun7_empresa(conexion::obtener_conexion());
    $Agosto_comun_empresa = Consolidados::comun8_empresa(conexion::obtener_conexion());
    $Septiembre_comun_empresa = Consolidados::comun9_empresa(conexion::obtener_conexion());
    $Octubre_comun_empresa = Consolidados::comun10_empresa(conexion::obtener_conexion());
    $Noviembre_comun_empresa = Consolidados::comun11_empresa(conexion::obtener_conexion());
    $Diciembre_comun_empresa = Consolidados::comun12_empresa(conexion::obtener_conexion());
    $Anual_comun_empresa = ($Enero_comun_empresa+$Febrero_comun_empresa+$Marzo_comun_empresa+$Abril_comun_empresa+$Mayo_comun_empresa+$Junio_comun_empresa+$Julio_comun_empresa+$Agosto_comun_empresa+$Septiembre_comun_empresa+$Octubre_comun_empresa+$Noviembre_comun_empresa+$Diciembre_comun_empresa);
    
    $Enero_comun_2_empresa = Consolidados::comun1_2_empresa(conexion::obtener_conexion());
    $Febrero_comun_2_empresa = Consolidados::comun2_2_empresa(conexion::obtener_conexion());
    $Marzo_comun_2_empresa = Consolidados::comun3_2_empresa(conexion::obtener_conexion());
    $Abril_comun_2_empresa = Consolidados::comun4_2_empresa(conexion::obtener_conexion());
    $Mayo_comun_2_empresa = Consolidados::comun5_2_empresa(conexion::obtener_conexion());
    $Junio_comun_2_empresa = Consolidados::comun6_2_empresa(conexion::obtener_conexion());
    $Julio_comun_2_empresa = Consolidados::comun7_2_empresa(conexion::obtener_conexion());
    $Agosto_comun_2_empresa = Consolidados::comun8_2_empresa(conexion::obtener_conexion());
    $Septiembre_comun_2_empresa = Consolidados::comun9_2_empresa(conexion::obtener_conexion());
    $Octubre_comun_2_empresa = Consolidados::comun10_2_empresa(conexion::obtener_conexion());
    $Noviembre_comun_2_empresa = Consolidados::comun11_2_empresa(conexion::obtener_conexion());
    $Diciembre_comun_2_empresa = Consolidados::comun12_2_empresa(conexion::obtener_conexion());
    $Anual_comun_2_empresa = ($Enero_comun_2_empresa+$Febrero_comun_2_empresa+$Marzo_comun_2_empresa+$Abril_comun_2_empresa+$Mayo_comun_2_empresa+$Junio_comun_2_empresa+$Julio_comun_2_empresa+$Agosto_comun_2_empresa+$Septiembre_comun_2_empresa+$Octubre_comun_2_empresa+$Noviembre_comun_2_empresa+$Diciembre_comun_2_empresa);
    
    $Enero_comun_porcentaje = $Enero_comun_2 + $Enero_comun_2_empresa;
    if($Enero_comun_porcentaje > 0) {$Enero_comun_2_porcentaje = round((($Enero_comun_2/$Enero_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Enero_comun_2_empresa_porcentaje = round((($Enero_comun_2_empresa/$Enero_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Enero_comun_2_porcentaje = 0;$Enero_comun_2_empresa_porcentaje = 0;}; 
    $Febrero_comun_porcentaje = $Febrero_comun_2 + $Febrero_comun_2_empresa;
    if($Febrero_comun_porcentaje > 0) {$Febrero_comun_2_porcentaje = round((($Febrero_comun_2/$Febrero_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Febrero_comun_2_empresa_porcentaje = round((($Febrero_comun_2_empresa/$Febrero_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Febrero_comun_2_porcentaje = 0;$Febrero_comun_2_empresa_porcentaje = 0;};  
    $Marzo_comun_porcentaje = $Marzo_comun_2 + $Marzo_comun_2_empresa;
    if($Marzo_comun_porcentaje > 0) {$Marzo_comun_2_porcentaje = round((($Marzo_comun_2/$Marzo_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Marzo_comun_2_empresa_porcentaje = round((($Marzo_comun_2_empresa/$Marzo_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Marzo_comun_2_porcentaje = 0;$Marzo_comun_2_empresa_porcentaje = 0;}; 
    $Abril_comun_porcentaje = $Abril_comun_2 + $Abril_comun_2_empresa;
    if($Abril_comun_porcentaje > 0) {$Abril_comun_2_porcentaje = round((($Abril_comun_2/$Abril_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Abril_comun_2_empresa_porcentaje = round((($Abril_comun_2_empresa/$Abril_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Abril_comun_2_porcentaje = 0;$Abril_comun_2_empresa_porcentaje = 0;};   
    $Mayo_comun_porcentaje = $Mayo_comun_2 + $Mayo_comun_2_empresa;
    if($Mayo_comun_porcentaje > 0) {$Mayo_comun_2_porcentaje = round((($Mayo_comun_2/$Mayo_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Mayo_comun_2_empresa_porcentaje = round((($Mayo_comun_2_empresa/$Mayo_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Mayo_comun_2_porcentaje = 0;$Mayo_comun_2_empresa_porcentaje = 0;};
    $Junio_comun_porcentaje = $Junio_comun_2 + $Junio_comun_2_empresa;
    if($Junio_comun_porcentaje > 0) {$Junio_comun_2_porcentaje = round((($Junio_comun_2/$Junio_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Junio_comun_2_empresa_porcentaje = round((($Junio_comun_2_empresa/$Junio_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Junio_comun_2_porcentaje = 0;$Junio_comun_2_empresa_porcentaje = 0;}; 
    $Julio_comun_porcentaje = $Julio_comun_2 + $Julio_comun_2_empresa;
    if($Julio_comun_porcentaje > 0) {$Julio_comun_2_porcentaje = round((($Julio_comun_2/$Julio_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Julio_comun_2_empresa_porcentaje = round((($Julio_comun_2_empresa/$Julio_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Julio_comun_2_porcentaje = 0;$Julio_comun_2_empresa_porcentaje = 0;}; 
    $Agosto_comun_porcentaje = $Agosto_comun_2 + $Agosto_comun_2_empresa;
    if($Agosto_comun_porcentaje > 0) {$Agosto_comun_2_porcentaje = round((($Agosto_comun_2/$Agosto_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Agosto_comun_2_empresa_porcentaje = round((($Agosto_comun_2_empresa/$Agosto_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Agosto_comun_2_porcentaje = 0;$Agosto_comun_2_empresa_porcentaje = 0;}; 
    $Septiembre_comun_porcentaje = $Septiembre_comun_2 + $Septiembre_comun_2_empresa;
    if($Septiembre_comun_porcentaje > 0) {$Septiembre_comun_2_porcentaje = round((($Septiembre_comun_2/$Septiembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Septiembre_comun_2_empresa_porcentaje = round((($Septiembre_comun_2_empresa/$Septiembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Septiembre_comun_2_porcentaje = 0;$Septiembre_comun_2_empresa_porcentaje = 0;};   
    $Octubre_comun_porcentaje = $Octubre_comun_2 + $Octubre_comun_2_empresa;
    if($Octubre_comun_porcentaje > 0) {$Octubre_comun_2_porcentaje = round((($Octubre_comun_2/$Octubre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Octubre_comun_2_empresa_porcentaje = round((($Octubre_comun_2_empresa/$Octubre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Octubre_comun_2_porcentaje = 0;$Octubre_comun_2_empresa_porcentaje = 0;}; 
    $Noviembre_comun_porcentaje = $Noviembre_comun_2 + $Noviembre_comun_2_empresa;
    if($Noviembre_comun_porcentaje > 0) {$Noviembre_comun_2_porcentaje = round((($Noviembre_comun_2/$Noviembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Noviembre_comun_2_empresa_porcentaje = round((($Noviembre_comun_2_empresa/$Noviembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Noviembre_comun_2_porcentaje = 0;$Noviembre_comun_2_empresa_porcentaje = 0;};
    $Diciembre_comun_porcentaje = $Diciembre_comun_2 + $Diciembre_comun_2_empresa;
    if($Diciembre_comun_porcentaje > 0) {$Diciembre_comun_2_porcentaje = round((($Diciembre_comun_2/$Diciembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Diciembre_comun_2_empresa_porcentaje = round((($Diciembre_comun_2_empresa/$Diciembre_comun_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Diciembre_comun_2_porcentaje = 0;$Diciembre_comun_2_empresa_porcentaje = 0;};  

    $Enero_general = Consolidados::general1(conexion::obtener_conexion());
    $Febrero_general = Consolidados::general2(conexion::obtener_conexion());
    $Marzo_general = Consolidados::general3(conexion::obtener_conexion());
    $Abril_general = Consolidados::general4(conexion::obtener_conexion());
    $Mayo_general = Consolidados::general5(conexion::obtener_conexion());
    $Junio_general = Consolidados::general6(conexion::obtener_conexion());
    $Julio_general = Consolidados::general7(conexion::obtener_conexion());
    $Agosto_general = Consolidados::general8(conexion::obtener_conexion());
    $Septiembre_general = Consolidados::general9(conexion::obtener_conexion());
    $Octubre_general = Consolidados::general10(conexion::obtener_conexion());
    $Noviembre_general = Consolidados::general11(conexion::obtener_conexion());
    $Diciembre_general = Consolidados::general12(conexion::obtener_conexion());
    $Anual_general = ($Enero_general+$Febrero_general+$Marzo_general+$Abril_general+$Mayo_general+$Junio_general+$Julio_general+$Agosto_general+$Septiembre_general+$Octubre_general+$Noviembre_general+$Diciembre_general);
    
    $Enero_general_2 = Consolidados::general1_2(conexion::obtener_conexion());
    $Febrero_general_2 = Consolidados::general2_2(conexion::obtener_conexion());
    $Marzo_general_2 = Consolidados::general3_2(conexion::obtener_conexion());
    $Abril_general_2 = Consolidados::general4_2(conexion::obtener_conexion());
    $Mayo_general_2 = Consolidados::general5_2(conexion::obtener_conexion());
    $Junio_general_2 = Consolidados::general6_2(conexion::obtener_conexion());
    $Julio_general_2 = Consolidados::general7_2(conexion::obtener_conexion());
    $Agosto_general_2 = Consolidados::general8_2(conexion::obtener_conexion());
    $Septiembre_general_2 = Consolidados::general9_2(conexion::obtener_conexion());
    $Octubre_general_2 = Consolidados::general10_2(conexion::obtener_conexion());
    $Noviembre_general_2 = Consolidados::general11_2(conexion::obtener_conexion());
    $Diciembre_general_2 = Consolidados::general12_2(conexion::obtener_conexion());
    $Anual_general_2 = ($Enero_general_2+$Febrero_general_2+$Marzo_general_2+$Abril_general_2+$Mayo_general_2+$Junio_general_2+$Julio_general_2+$Agosto_general_2+$Septiembre_general_2+$Octubre_general_2+$Noviembre_general_2+$Diciembre_general_2);
    
    $Enero_general_empresa = Consolidados::general1_empresa(conexion::obtener_conexion());
    $Febrero_general_empresa = Consolidados::general2_empresa(conexion::obtener_conexion());
    $Marzo_general_empresa = Consolidados::general3_empresa(conexion::obtener_conexion());
    $Abril_general_empresa = Consolidados::general4_empresa(conexion::obtener_conexion());
    $Mayo_general_empresa = Consolidados::general5_empresa(conexion::obtener_conexion());
    $Junio_general_empresa = Consolidados::general6_empresa(conexion::obtener_conexion());
    $Julio_general_empresa = Consolidados::general7_empresa(conexion::obtener_conexion());
    $Agosto_general_empresa = Consolidados::general8_empresa(conexion::obtener_conexion());
    $Septiembre_general_empresa = Consolidados::general9_empresa(conexion::obtener_conexion());
    $Octubre_general_empresa = Consolidados::general10_empresa(conexion::obtener_conexion());
    $Noviembre_general_empresa = Consolidados::general11_empresa(conexion::obtener_conexion());
    $Diciembre_general_empresa = Consolidados::general12_empresa(conexion::obtener_conexion());
    $Anual_general_empresa = ($Enero_general_empresa+$Febrero_general_empresa+$Marzo_general_empresa+$Abril_general_empresa+$Mayo_general_empresa+$Junio_general_empresa+$Julio_general_empresa+$Agosto_general_empresa+$Septiembre_general_empresa+$Octubre_general_empresa+$Noviembre_general_empresa+$Diciembre_general);
    
    $Enero_general_2_empresa = Consolidados::general1_2_empresa(conexion::obtener_conexion());
    $Febrero_general_2_empresa = Consolidados::general2_2_empresa(conexion::obtener_conexion());
    $Marzo_general_2_empresa = Consolidados::general3_2_empresa(conexion::obtener_conexion());
    $Abril_general_2_empresa = Consolidados::general4_2_empresa(conexion::obtener_conexion());
    $Mayo_general_2_empresa = Consolidados::general5_2_empresa(conexion::obtener_conexion());
    $Junio_general_2_empresa = Consolidados::general6_2_empresa(conexion::obtener_conexion());
    $Julio_general_2_empresa = Consolidados::general7_2_empresa(conexion::obtener_conexion());
    $Agosto_general_2_empresa = Consolidados::general8_2_empresa(conexion::obtener_conexion());
    $Septiembre_general_2_empresa = Consolidados::general9_2_empresa(conexion::obtener_conexion());
    $Octubre_general_2_empresa = Consolidados::general10_2_empresa(conexion::obtener_conexion());
    $Noviembre_general_2_empresa = Consolidados::general11_2_empresa(conexion::obtener_conexion());
    $Diciembre_general_2_empresa = Consolidados::general12_2_empresa(conexion::obtener_conexion());
    $Anual_general_2_empresa = ($Enero_general_2_empresa+$Febrero_general_2_empresa+$Marzo_general_2_empresa+$Abril_general_2_empresa+$Mayo_general_2_empresa+$Junio_general_2_empresa+$Julio_general_2_empresa+$Agosto_general_2_empresa+$Septiembre_general_2_empresa+$Octubre_general_2_empresa+$Noviembre_general_2_empresa+$Diciembre_general_2);
    
    $Enero_general_porcentaje = $Enero_general_2 + $Enero_general_2_empresa;
    if($Enero_general_porcentaje > 0) {$Enero_general_2_porcentaje = round((($Enero_general_2/$Enero_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Enero_general_2_empresa_porcentaje = round((($Enero_general_2_empresa/$Enero_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Enero_general_2_porcentaje = 0;$Enero_general_2_empresa_porcentaje = 0;};
    $Febrero_general_porcentaje = $Febrero_general_2 + $Febrero_general_2_empresa;
    if($Febrero_general_porcentaje > 0) {$Febrero_general_2_porcentaje = round((($Febrero_general_2/$Febrero_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Febrero_general_2_empresa_porcentaje = round((($Febrero_general_2_empresa/$Febrero_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Febrero_general_2_porcentaje = 0;$Febrero_general_2_empresa_porcentaje = 0;}; 
    $Marzo_general_porcentaje = $Marzo_general_2 + $Marzo_general_2_empresa;
    if($Marzo_general_porcentaje > 0) {$Marzo_general_2_porcentaje = round((($Marzo_general_2/$Marzo_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Marzo_general_2_empresa_porcentaje = round((($Marzo_general_2_empresa/$Marzo_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Marzo_general_2_porcentaje = 0;$Marzo_general_2_empresa_porcentaje = 0;};  
    $Abril_general_porcentaje = $Abril_general_2 + $Abril_general_2_empresa;
    if($Abril_general_porcentaje > 0) {$Abril_general_2_porcentaje = round((($Abril_general_2/$Abril_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Abril_general_2_empresa_porcentaje = round((($Abril_general_2_empresa/$Abril_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Abril_general_2_porcentaje = 0;$Abril_general_2_empresa_porcentaje = 0;};
    $Mayo_general_porcentaje = $Mayo_general_2 + $Mayo_general_2_empresa;
    if($Mayo_general_porcentaje > 0) {$Mayo_general_2_porcentaje = round((($Mayo_general_2/$Mayo_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Mayo_general_2_empresa_porcentaje = round((($Mayo_general_2_empresa/$Mayo_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Mayo_general_2_porcentaje = 0;$Mayo_general_2_empresa_porcentaje = 0;}; 
    $Junio_general_porcentaje = $Junio_general_2 + $Junio_general_2_empresa;
    if($Junio_general_porcentaje > 0) {$Junio_general_2_porcentaje = round((($Junio_general_2/$Junio_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Junio_general_2_empresa_porcentaje = round((($Junio_general_2_empresa/$Junio_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Junio_general_2_porcentaje = 0;$Junio_general_2_empresa_porcentaje = 0;};
    $Julio_general_porcentaje = $Julio_general_2 + $Julio_general_2_empresa;
    if($Julio_general_porcentaje > 0) {$Julio_general_2_porcentaje = round((($Julio_general_2/$Julio_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Julio_general_2_empresa_porcentaje = round((($Julio_general_2_empresa/$Julio_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Julio_general_2_porcentaje = 0;$Julio_general_2_empresa_porcentaje = 0;};  
    $Agosto_general_porcentaje = $Agosto_general_2 + $Agosto_general_2_empresa;
    if($Agosto_general_porcentaje > 0) {$Agosto_general_2_porcentaje = round((($Agosto_general_2/$Agosto_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Agosto_general_2_empresa_porcentaje = round((($Agosto_general_2_empresa/$Agosto_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Agosto_general_2_porcentaje = 0;$Agosto_general_2_empresa_porcentaje = 0;}; 
    $Septiembre_general_porcentaje = $Septiembre_general_2 + $Septiembre_general_2_empresa;
    if($Septiembre_general_porcentaje > 0) {$Septiembre_general_2_porcentaje = round((($Septiembre_general_2/$Septiembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Septiembre_general_2_empresa_porcentaje = round((($Septiembre_general_2_empresa/$Septiembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Septiembre_general_2_porcentaje = 0;$Septiembre_general_2_empresa_porcentaje = 0;}; 
    $Octubre_general_porcentaje = $Octubre_general_2 + $Octubre_general_2_empresa;
    if($Octubre_general_porcentaje > 0) {$Octubre_general_2_porcentaje = round((($Octubre_general_2/$Octubre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Octubre_general_2_empresa_porcentaje = round((($Octubre_general_2_empresa/$Octubre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Octubre_general_2_porcentaje = 0;$Octubre_general_2_empresa_porcentaje = 0;}; 
    $Noviembre_general_porcentaje = $Noviembre_general_2 + $Noviembre_general_2_empresa;
    if($Noviembre_general_porcentaje > 0) {$Noviembre_general_2_porcentaje = round((($Noviembre_general_2/$Noviembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Noviembre_general_2_empresa_porcentaje = round((($Noviembre_general_2_empresa/$Noviembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Noviembre_general_2_porcentaje = 0;$Noviembre_general_2_empresa_porcentaje = 0;};
    $Diciembre_general_porcentaje = $Diciembre_general_2 + $Diciembre_general_2_empresa;
    if($Diciembre_general_porcentaje > 0) {$Diciembre_general_2_porcentaje = round((($Diciembre_general_2/$Diciembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);$Diciembre_general_2_empresa_porcentaje = round((($Diciembre_general_2_empresa/$Diciembre_general_porcentaje)*100), 1, PHP_ROUND_HALF_UP);} else {$Diciembre_general_2_porcentaje = 0;$Diciembre_general_2_empresa_porcentaje = 0;}; 
    
    $Enero_maternidad = Consolidados::maternidad1(conexion::obtener_conexion());
    $Febrero_maternidad = Consolidados::maternidad2(conexion::obtener_conexion());
    $Marzo_maternidad = Consolidados::maternidad3(conexion::obtener_conexion());
    $Abril_maternidad = Consolidados::maternidad4(conexion::obtener_conexion());
    $Mayo_maternidad = Consolidados::maternidad5(conexion::obtener_conexion());
    $Junio_maternidad = Consolidados::maternidad6(conexion::obtener_conexion());
    $Julio_maternidad = Consolidados::maternidad7(conexion::obtener_conexion());
    $Agosto_maternidad = Consolidados::maternidad8(conexion::obtener_conexion());
    $Septiembre_maternidad = Consolidados::maternidad9(conexion::obtener_conexion());
    $Octubre_maternidad = Consolidados::maternidad10(conexion::obtener_conexion());
    $Noviembre_maternidad = Consolidados::maternidad11(conexion::obtener_conexion());
    $Diciembre_maternidad = Consolidados::maternidad12(conexion::obtener_conexion());
    $Anual_maternidad = ($Enero_maternidad+$Febrero_maternidad+$Marzo_maternidad+$Abril_maternidad+$Mayo_maternidad+$Junio_maternidad+$Julio_maternidad+$Agosto_maternidad+$Septiembre_maternidad+$Octubre_maternidad+$Noviembre_maternidad+$Diciembre_maternidad);
    
    $Enero_maternidad_2 = Consolidados::maternidad1_2(conexion::obtener_conexion());
    $Febrero_maternidad_2 = Consolidados::maternidad2_2(conexion::obtener_conexion());
    $Marzo_maternidad_2 = Consolidados::maternidad3_2(conexion::obtener_conexion());
    $Abril_maternidad_2 = Consolidados::maternidad4_2(conexion::obtener_conexion());
    $Mayo_maternidad_2 = Consolidados::maternidad5_2(conexion::obtener_conexion());
    $Junio_maternidad_2 = Consolidados::maternidad6_2(conexion::obtener_conexion());
    $Julio_maternidad_2 = Consolidados::maternidad7_2(conexion::obtener_conexion());
    $Agosto_maternidad_2 = Consolidados::maternidad8_2(conexion::obtener_conexion());
    $Septiembre_maternidad_2 = Consolidados::maternidad9_2(conexion::obtener_conexion());
    $Octubre_maternidad_2 = Consolidados::maternidad10_2(conexion::obtener_conexion());
    $Noviembre_maternidad_2 = Consolidados::maternidad11_2(conexion::obtener_conexion());
    $Diciembre_maternidad_2 = Consolidados::maternidad12_2(conexion::obtener_conexion());
    $Anual_maternidad_2 = ($Enero_maternidad_2+$Febrero_maternidad_2+$Marzo_maternidad_2+$Abril_maternidad_2+$Mayo_maternidad_2+$Junio_maternidad_2+$Julio_maternidad_2+$Agosto_maternidad_2+$Septiembre_maternidad_2+$Octubre_maternidad_2+$Noviembre_maternidad_2+$Diciembre_maternidad_2);
    
    $Enero_paternidad = Consolidados::paternidad1(conexion::obtener_conexion());
    $Febrero_paternidad = Consolidados::paternidad2(conexion::obtener_conexion());
    $Marzo_paternidad = Consolidados::paternidad3(conexion::obtener_conexion());
    $Abril_paternidad = Consolidados::paternidad4(conexion::obtener_conexion());
    $Mayo_paternidad = Consolidados::paternidad5(conexion::obtener_conexion());
    $Junio_paternidad = Consolidados::paternidad6(conexion::obtener_conexion());
    $Julio_paternidad = Consolidados::paternidad7(conexion::obtener_conexion());
    $Agosto_paternidad = Consolidados::paternidad8(conexion::obtener_conexion());
    $Septiembre_paternidad = Consolidados::paternidad9(conexion::obtener_conexion());
    $Octubre_paternidad = Consolidados::paternidad10(conexion::obtener_conexion());
    $Noviembre_paternidad = Consolidados::paternidad11(conexion::obtener_conexion());
    $Diciembre_paternidad = Consolidados::paternidad12(conexion::obtener_conexion());
    $Anual_paternidad = ($Enero_paternidad+$Febrero_paternidad+$Marzo_paternidad+$Abril_paternidad+$Mayo_paternidad+$Junio_paternidad+$Julio_paternidad+$Agosto_paternidad+$Septiembre_paternidad+$Octubre_paternidad+$Noviembre_paternidad+$Diciembre_paternidad);
    
    $Enero_paternidad_2 = Consolidados::paternidad1_2(conexion::obtener_conexion());
    $Febrero_paternidad_2 = Consolidados::paternidad2_2(conexion::obtener_conexion());
    $Marzo_paternidad_2 = Consolidados::paternidad3_2(conexion::obtener_conexion());
    $Abril_paternidad_2 = Consolidados::paternidad4_2(conexion::obtener_conexion());
    $Mayo_paternidad_2 = Consolidados::paternidad5_2(conexion::obtener_conexion());
    $Junio_paternidad_2 = Consolidados::paternidad6_2(conexion::obtener_conexion());
    $Julio_paternidad_2 = Consolidados::paternidad7_2(conexion::obtener_conexion());
    $Agosto_paternidad_2 = Consolidados::paternidad8_2(conexion::obtener_conexion());
    $Septiembre_paternidad_2 = Consolidados::paternidad9_2(conexion::obtener_conexion());
    $Octubre_paternidad_2 = Consolidados::paternidad10_2(conexion::obtener_conexion());
    $Noviembre_paternidad_2 = Consolidados::paternidad11_2(conexion::obtener_conexion());
    $Diciembre_paternidad_2 = Consolidados::paternidad12_2(conexion::obtener_conexion());
    $Anual_paternidad_2 = ($Enero_paternidad_2+$Febrero_paternidad_2+$Marzo_paternidad_2+$Abril_paternidad_2+$Mayo_paternidad_2+$Junio_paternidad_2+$Julio_paternidad_2+$Agosto_paternidad_2+$Septiembre_paternidad_2+$Octubre_paternidad_2+$Noviembre_paternidad_2+$Diciembre_paternidad_2);
    
    $Enero_remunerados = Consolidados::remunerados1(conexion::obtener_conexion());
    $Febrero_remunerados = Consolidados::remunerados2(conexion::obtener_conexion());
    $Marzo_remunerados = Consolidados::remunerados3(conexion::obtener_conexion());
    $Abril_remunerados = Consolidados::remunerados4(conexion::obtener_conexion());
    $Mayo_remunerados = Consolidados::remunerados5(conexion::obtener_conexion());
    $Junio_remunerados = Consolidados::remunerados6(conexion::obtener_conexion());
    $Julio_remunerados = Consolidados::remunerados7(conexion::obtener_conexion());
    $Agosto_remunerados = Consolidados::remunerados8(conexion::obtener_conexion());
    $Septiembre_remunerados = Consolidados::remunerados9(conexion::obtener_conexion());
    $Octubre_remunerados = Consolidados::remunerados10(conexion::obtener_conexion());
    $Noviembre_remunerados = Consolidados::remunerados11(conexion::obtener_conexion());
    $Diciembre_remunerados = Consolidados::remunerados12(conexion::obtener_conexion());
    $Anual_remunerados = ($Enero_remunerados+$Febrero_remunerados+$Marzo_remunerados+$Abril_remunerados+$Mayo_remunerados+$Junio_remunerados+$Julio_remunerados+$Agosto_remunerados+$Septiembre_remunerados+$Octubre_remunerados+$Noviembre_remunerados+$Diciembre_remunerados);
    
    $Enero_remunerados_2 = Consolidados::remunerados1_2(conexion::obtener_conexion());
    $Febrero_remunerados_2 = Consolidados::remunerados2_2(conexion::obtener_conexion());
    $Marzo_remunerados_2 = Consolidados::remunerados3_2(conexion::obtener_conexion());
    $Abril_remunerados_2 = Consolidados::remunerados4_2(conexion::obtener_conexion());
    $Mayo_remunerados_2 = Consolidados::remunerados5_2(conexion::obtener_conexion());
    $Junio_remunerados_2 = Consolidados::remunerados6_2(conexion::obtener_conexion());
    $Julio_remunerados_2 = Consolidados::remunerados7_2(conexion::obtener_conexion());
    $Agosto_remunerados_2 = Consolidados::remunerados8_2(conexion::obtener_conexion());
    $Septiembre_remunerados_2 = Consolidados::remunerados9_2(conexion::obtener_conexion());
    $Octubre_remunerados_2 = Consolidados::remunerados10_2(conexion::obtener_conexion());
    $Noviembre_remunerados_2 = Consolidados::remunerados11_2(conexion::obtener_conexion());
    $Diciembre_remunerados_2 = Consolidados::remunerados12_2(conexion::obtener_conexion());
    $Anual_remunerados_2 = ($Enero_remunerados_2+$Febrero_remunerados_2+$Marzo_remunerados_2+$Abril_remunerados_2+$Mayo_remunerados_2+$Junio_remunerados_2+$Julio_remunerados_2+$Agosto_remunerados_2+$Septiembre_remunerados_2+$Octubre_remunerados_2+$Noviembre_remunerados_2+$Diciembre_remunerados_2);
    
    $Enero_noremunerados = Consolidados::noremunerados1(conexion::obtener_conexion());
    $Febrero_noremunerados = Consolidados::noremunerados2(conexion::obtener_conexion());
    $Marzo_noremunerados = Consolidados::noremunerados3(conexion::obtener_conexion());
    $Abril_noremunerados = Consolidados::noremunerados4(conexion::obtener_conexion());
    $Mayo_noremunerados = Consolidados::noremunerados5(conexion::obtener_conexion());
    $Junio_noremunerados = Consolidados::noremunerados6(conexion::obtener_conexion());
    $Julio_noremunerados = Consolidados::noremunerados7(conexion::obtener_conexion());
    $Agosto_noremunerados = Consolidados::noremunerados8(conexion::obtener_conexion());
    $Septiembre_noremunerados = Consolidados::noremunerados9(conexion::obtener_conexion());
    $Octubre_noremunerados = Consolidados::noremunerados10(conexion::obtener_conexion());
    $Noviembre_noremunerados = Consolidados::noremunerados11(conexion::obtener_conexion());
    $Diciembre_noremunerados = Consolidados::noremunerados12(conexion::obtener_conexion());
    $Anual_noremunerados = ($Enero_noremunerados+$Febrero_noremunerados+$Marzo_noremunerados+$Abril_noremunerados+$Mayo_noremunerados+$Junio_noremunerados+$Julio_noremunerados+$Agosto_noremunerados+$Septiembre_noremunerados+$Octubre_noremunerados+$Noviembre_noremunerados+$Diciembre_noremunerados);
    
    $Enero_noremunerados_2 = Consolidados::noremunerados1_2(conexion::obtener_conexion());
    $Febrero_noremunerados_2 = Consolidados::noremunerados2_2(conexion::obtener_conexion());
    $Marzo_noremunerados_2 = Consolidados::noremunerados3_2(conexion::obtener_conexion());
    $Abril_noremunerados_2 = Consolidados::noremunerados4_2(conexion::obtener_conexion());
    $Mayo_noremunerados_2 = Consolidados::noremunerados5_2(conexion::obtener_conexion());
    $Junio_noremunerados_2 = Consolidados::noremunerados6_2(conexion::obtener_conexion());
    $Julio_noremunerados_2 = Consolidados::noremunerados7_2(conexion::obtener_conexion());
    $Agosto_noremunerados_2 = Consolidados::noremunerados8_2(conexion::obtener_conexion());
    $Septiembre_noremunerados_2 = Consolidados::noremunerados9_2(conexion::obtener_conexion());
    $Octubre_noremunerados_2 = Consolidados::noremunerados10_2(conexion::obtener_conexion());
    $Noviembre_noremunerados_2 = Consolidados::noremunerados11_2(conexion::obtener_conexion());
    $Diciembre_noremunerados_2 = Consolidados::noremunerados12_2(conexion::obtener_conexion());
    $Anual_noremunerados_2 = ($Enero_noremunerados_2+$Febrero_noremunerados_2+$Marzo_noremunerados_2+$Abril_noremunerados_2+$Mayo_noremunerados_2+$Junio_noremunerados_2+$Julio_noremunerados_2+$Agosto_noremunerados_2+$Septiembre_noremunerados_2+$Octubre_noremunerados_2+$Noviembre_noremunerados_2+$Diciembre_noremunerados_2);


    $Enero_Cargados = Consolidados::Cargados1(conexion::obtener_conexion());
    $Febrero_Cargados = Consolidados::Cargados2(conexion::obtener_conexion());
    $Marzo_Cargados = Consolidados::Cargados3(conexion::obtener_conexion());
    $Abril_Cargados = Consolidados::Cargados4(conexion::obtener_conexion());
    $Mayo_Cargados = Consolidados::Cargados5(conexion::obtener_conexion());
    $Junio_Cargados = Consolidados::Cargados6(conexion::obtener_conexion());
    $Julio_Cargados = Consolidados::Cargados7(conexion::obtener_conexion());
    $Agosto_Cargados = Consolidados::Cargados8(conexion::obtener_conexion());
    $Septiembre_Cargados = Consolidados::Cargados9(conexion::obtener_conexion());
    $Octubre_Cargados = Consolidados::Cargados10(conexion::obtener_conexion());
    $Noviembre_Cargados = Consolidados::Cargados11(conexion::obtener_conexion());
    $Diciembre_Cargados = Consolidados::Cargados12(conexion::obtener_conexion());
    $Anual_Cargados = ($Enero_Cargados+$Febrero_Cargados+$Marzo_Cargados+$Abril_Cargados+$Mayo_Cargados+$Junio_Cargados+$Julio_Cargados+$Agosto_Cargados+$Septiembre_Cargados+$Octubre_Cargados+$NoviembreDI+$Diciembre_DI);
    
    $Enero_ATM = Consolidados::ATM1(conexion::obtener_conexion());
    $Febrero_ATM = Consolidados::ATM2(conexion::obtener_conexion());
    $Marzo_ATM = Consolidados::ATM3(conexion::obtener_conexion());
    $Abril_ATM = Consolidados::ATM4(conexion::obtener_conexion());
    $Mayo_ATM = Consolidados::ATM5(conexion::obtener_conexion());
    $Junio_ATM = Consolidados::ATM6(conexion::obtener_conexion());
    $Julio_ATM = Consolidados::ATM7(conexion::obtener_conexion());
    $Agosto_ATM = Consolidados::ATM8(conexion::obtener_conexion());
    $Septiembre_ATM = Consolidados::ATM9(conexion::obtener_conexion());
    $Octubre_ATM = Consolidados::ATM10(conexion::obtener_conexion());
    $Noviembre_ATM = Consolidados::ATM11(conexion::obtener_conexion());
    $Diciembre_ATM = Consolidados::ATM12(conexion::obtener_conexion());
    $Anual_ATM = ($Enero_ATM+$Febrero_ATM+$Marzo_ATM+$Abril_ATM+$Mayo_ATM+$Junio_ATM+$Julio_ATM+$Agosto_ATM+$Septiembre_ATM+$Octubre_ATM+$Noviembre_ATM+$Diciembre_ATM);
    
    $Enero_EL = Consolidados::EL1(conexion::obtener_conexion());
    $Febrero_EL = Consolidados::EL2(conexion::obtener_conexion());
    $Marzo_EL = Consolidados::EL3(conexion::obtener_conexion());
    $Abril_EL = Consolidados::EL4(conexion::obtener_conexion());
    $Mayo_EL = Consolidados::EL5(conexion::obtener_conexion());
    $Junio_EL = Consolidados::EL6(conexion::obtener_conexion());
    $Julio_EL = Consolidados::EL7(conexion::obtener_conexion());
    $Agosto_EL = Consolidados::EL8(conexion::obtener_conexion());
    $Septiembre_EL = Consolidados::EL9(conexion::obtener_conexion());
    $Octubre_EL = Consolidados::EL10(conexion::obtener_conexion());
    $Noviembre_EL = Consolidados::EL11(conexion::obtener_conexion());
    $Diciembre_EL = Consolidados::EL12(conexion::obtener_conexion());
    $Anual_EL = ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL+$Octubre_EL+$Noviembre_EL+$Diciembre_EL);
    
    $Enero_ELNA =       $Enero_EL;
    $Febrero_ELNA =     ($Enero_EL+$Febrero_EL);
    $Marzo_ELNA =       ($Enero_EL+$Febrero_EL+$Marzo_EL);
    $Abril_ELNA =       ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL);
    $Mayo_ELNA =        ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL);
    $Junio_ELNA =       ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL);
    $Julio_ELNA =       ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL);
    $Agosto_ELNA =      ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL);
    $Septiembre_ELNA =  ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL);
    $Octubre_ELNA =     ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL+$Octubre_EL);
    $Noviembre_ELNA =   ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL+$Octubre_EL+$Noviembre_EL);
    $Diciembre_ELNA =   ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL+$Octubre_EL+$Noviembre_EL+$Diciembre_EL);
    $Anual_ELNA =       ($Enero_EL+$Febrero_EL+$Marzo_EL+$Abril_EL+$Mayo_EL+$Junio_EL+$Julio_EL+$Agosto_EL+$Septiembre_EL+$Octubre_EL+$Noviembre_EL+$Diciembre_EL);
    
   $DIAC1 = Consolidados::DIAC1(conexion::obtener_conexion());
    $DIAC2 = Consolidados::DIAC2(conexion::obtener_conexion());
    $DIAC3 = Consolidados::DIAC3(conexion::obtener_conexion());
    $DIAC4 = Consolidados::DIAC4(conexion::obtener_conexion());
    $DIAC5 = Consolidados::DIAC5(conexion::obtener_conexion());
    $DIAC6 = Consolidados::DIAC6(conexion::obtener_conexion());
    $DIAC7 = Consolidados::DIAC7(conexion::obtener_conexion());
    $DIAC8 = Consolidados::DIAC8(conexion::obtener_conexion());
    $DIAC9 = Consolidados::DIAC9(conexion::obtener_conexion());
    $DIAC10 = Consolidados::DIAC10(conexion::obtener_conexion());
    $DIAC11 = Consolidados::DIAC11(conexion::obtener_conexion());
    $DIAC12 = Consolidados::DIAC12(conexion::obtener_conexion());
    $DIAC = ($DIAC1+$DIAC2+$DIAC3+$DIAC4+$DIAC5+$DIAC6+$DIAC7+$DIAC8+$DIAC9+$DIAC10+$DIAC11+$DIAC12);
    $EG1 = Consolidados::EG1(conexion::obtener_conexion());
    $EG2 = Consolidados::EG2(conexion::obtener_conexion());
    $EG3 = Consolidados::EG3(conexion::obtener_conexion());
    $EG4 = Consolidados::EG4(conexion::obtener_conexion());
    $EG5 = Consolidados::EG5(conexion::obtener_conexion());
    $EG6 = Consolidados::EG6(conexion::obtener_conexion());
    $EG7 = Consolidados::EG7(conexion::obtener_conexion());
    $EG8 = Consolidados::EG8(conexion::obtener_conexion());
    $EG9 = Consolidados::EG9(conexion::obtener_conexion());
    $EG10 = Consolidados::EG10(conexion::obtener_conexion());
    $EG11 = Consolidados::EG11(conexion::obtener_conexion());
    $EG12 = Consolidados::EG12(conexion::obtener_conexion());
    $EG = ($EG1+$EG2+$EG3+$EG4+$EG5+$EG6+$EG7+$EG8+$EG9+$EG10+$EG11+$EG12);
    $DIEG1 = Consolidados::DIEG1(conexion::obtener_conexion());
    $DIEG2 = Consolidados::DIEG2(conexion::obtener_conexion());
    $DIEG3 = Consolidados::DIEG3(conexion::obtener_conexion());
    $DIEG4 = Consolidados::DIEG4(conexion::obtener_conexion());
    $DIEG5 = Consolidados::DIEG5(conexion::obtener_conexion());
    $DIEG6 = Consolidados::DIEG6(conexion::obtener_conexion());
    $DIEG7 = Consolidados::DIEG7(conexion::obtener_conexion());
    $DIEG8 = Consolidados::DIEG8(conexion::obtener_conexion());
    $DIEG9 = Consolidados::DIEG9(conexion::obtener_conexion());
    $DIEG10 = Consolidados::DIEG10(conexion::obtener_conexion());
    $DIEG11 = Consolidados::DIEG11(conexion::obtener_conexion());
    $DIEG12 = Consolidados::DIEG12(conexion::obtener_conexion());
    $DIEG = ($DIEG1+$DIEG2+$DIEG3+$DIEG4+$DIEG5+$DIEG6+$DIEG7+$DIEG8+$DIEG9+$DIEG10+$DIEG11+$DIEG12);
    $C191 = Consolidados::C191(conexion::obtener_conexion());
    $C192 = Consolidados::C192(conexion::obtener_conexion());
    $C193 = Consolidados::C193(conexion::obtener_conexion());
    $C194 = Consolidados::C194(conexion::obtener_conexion());
    $C195 = Consolidados::C195(conexion::obtener_conexion());
    $C196 = Consolidados::C196(conexion::obtener_conexion());
    $C197 = Consolidados::C197(conexion::obtener_conexion());
    $C198 = Consolidados::C198(conexion::obtener_conexion());
    $C199 = Consolidados::C199(conexion::obtener_conexion());
    $C1910 = Consolidados::C1910(conexion::obtener_conexion());
    $C1911 = Consolidados::C1911(conexion::obtener_conexion());
    $C1912 = Consolidados::C1912(conexion::obtener_conexion());
    $C19 = ($C191+$C192+$C193+$C194+$C195+$C196+$C197+$C198+$C199+$C1910+$C1911+$C1912);
    
    $Enero_C19 = Consolidados::C191(conexion::obtener_conexion());
    $Febrero_C19 = Consolidados::C192(conexion::obtener_conexion());
    $Marzo_C19 = Consolidados::C193(conexion::obtener_conexion());
    $Abril_C19 = Consolidados::C194(conexion::obtener_conexion());
    $Mayo_C19 = Consolidados::C195(conexion::obtener_conexion());
    $Junio_C19 = Consolidados::C196(conexion::obtener_conexion());
    $Julio_C19 = Consolidados::C197(conexion::obtener_conexion());
    $Agosto_C19 = Consolidados::C198(conexion::obtener_conexion());
    $Septiembre_C19 = Consolidados::C199(conexion::obtener_conexion());
    $Octubre_C19 = Consolidados::C1910(conexion::obtener_conexion());
    $Noviembre_C19 = Consolidados::C1911(conexion::obtener_conexion());
    $Diciembre_C19 = Consolidados::C1912(conexion::obtener_conexion());
    $Anual_C19 = ($Enero_C19+$Febrero_C19+$Marzo_C19+$Abril_C19+$Mayo_C19+$Junio_C19+$Julio_C19+$Agosto_C19+$Septiembre_C19+$Octubre_C19+$Noviembre_C19+$Diciembre_C19);
    
    $Asegurados_AT1 = Consolidados::Asegurados_AT1(conexion::obtener_conexion());
    $Asegurados_AT_S1 = Consolidados::Asegurados_AT_S1(conexion::obtener_conexion());
    $Asegurados_AC_EG1 = Consolidados::Asegurados_AC_EG1(conexion::obtener_conexion());
    $Asegurados_AC_EG_S1 = Consolidados::Asegurados_AC_EG_S1(conexion::obtener_conexion());
    $Asegurados_AFP1 = Consolidados::Asegurados_AFP1(conexion::obtener_conexion());
    $Asegurados_AFP_S1 = Consolidados::Asegurados_AFP_S1(conexion::obtener_conexion());
    $Asumidos_AC_EG1 = Consolidados::Asumidos_AC_EG1(conexion::obtener_conexion());
    $Asumidos_AC_EG_S1 = Consolidados::Asumidos_AC_EG_S1(conexion::obtener_conexion());
    $Asegurados_S1 = $Asegurados_AT_S1 + $Asegurados_AC_EG_S1 + $Asegurados_AFP_S1 + $Asumidos_AC_EG_S1;
    if(($Asegurados_AT1 == 0)) {$Asegurados_AT1_porcentaje = 0;} else {$Asegurados_AT1_porcentaje = round((($Asegurados_AT_S1/$Asegurados_S1)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AC_EG1 == 0)) {$Asegurados_AC_EG1_porcentaje = 0;} else {$Asegurados_AC_EG1_porcentaje = round((($Asegurados_AC_EG_S1/$Asegurados_S1)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP1 == 0)) {$Asegurados_AFP1_porcentaje = 0;} else {$Asegurados_AFP1_porcentaje = round((($Asegurados_AFP_S1/$Asegurados_S1)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG1 == 0)) {$Asumidos_AC_EG1_porcentaje = 0;} else {$Asumidos_AC_EG1_porcentaje = round((($Asumidos_AC_EG_S1/$Asegurados_S1)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT2 = Consolidados::Asegurados_AT2(conexion::obtener_conexion());
    $Asegurados_AT_S2 = Consolidados::Asegurados_AT_S2(conexion::obtener_conexion());
    $Asegurados_AC_EG2 = Consolidados::Asegurados_AC_EG2(conexion::obtener_conexion());
    $Asegurados_AC_EG_S2 = Consolidados::Asegurados_AC_EG_S2(conexion::obtener_conexion());
    $Asegurados_AFP2 = Consolidados::Asegurados_AFP2(conexion::obtener_conexion());
    $Asegurados_AFP_S2 = Consolidados::Asegurados_AFP_S2(conexion::obtener_conexion());
    $Asumidos_AC_EG2 = Consolidados::Asumidos_AC_EG2(conexion::obtener_conexion());
    $Asumidos_AC_EG_S2 = Consolidados::Asumidos_AC_EG_S2(conexion::obtener_conexion());
    $Asegurados_S2 = $Asegurados_AT_S2 + $Asegurados_AC_EG_S2 + $Asegurados_AFP_S2 + $Asumidos_AC_EG_S2;
    if(($Asegurados_AT2 == 0)) {$Asegurados_AT2_porcentaje = 0;} else {$Asegurados_AT2_porcentaje = round((($Asegurados_AT_S2/$Asegurados_S2)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG2 == 0)) {$Asegurados_AC_EG2_porcentaje = 0;} else {$Asegurados_AC_EG2_porcentaje = round((($Asegurados_AC_EG_S2/$Asegurados_S2)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP2 == 0)) {$Asegurados_AFP2_porcentaje = 0;} else {$Asegurados_AFP2_porcentaje = round((($Asegurados_AFP_S2/$Asegurados_S2)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG2 == 0)) {$Asumidos_AC_EG2_porcentaje = 0;} else {$Asumidos_AC_EG2_porcentaje = round((($Asumidos_AC_EG_S2/$Asegurados_S2)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT3 = Consolidados::Asegurados_AT3(conexion::obtener_conexion());
    $Asegurados_AT_S3 = Consolidados::Asegurados_AT_S3(conexion::obtener_conexion());
    $Asegurados_AC_EG3 = Consolidados::Asegurados_AC_EG3(conexion::obtener_conexion());
    $Asegurados_AC_EG_S3 = Consolidados::Asegurados_AC_EG_S3(conexion::obtener_conexion());
    $Asegurados_AFP3 = Consolidados::Asegurados_AFP3(conexion::obtener_conexion());
    $Asegurados_AFP_S3 = Consolidados::Asegurados_AFP_S3(conexion::obtener_conexion());
    $Asumidos_AC_EG3 = Consolidados::Asumidos_AC_EG3(conexion::obtener_conexion());
    $Asumidos_AC_EG_S3 = Consolidados::Asumidos_AC_EG_S3(conexion::obtener_conexion());
    $Asegurados_S3 = $Asegurados_AT_S3 + $Asegurados_AC_EG_S3 + $Asegurados_AFP_S3 + $Asumidos_AC_EG_S3;
    if(($Asegurados_AT3 == 0)) {$Asegurados_AT3_porcentaje = 0;} else {$Asegurados_AT3_porcentaje = round((($Asegurados_AT_S3/$Asegurados_S3)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG3 == 0)) {$Asegurados_AC_EG3_porcentaje = 0;} else {$Asegurados_AC_EG3_porcentaje = round((($Asegurados_AC_EG_S3/$Asegurados_S3)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP3 == 0)) {$Asegurados_AFP3_porcentaje = 0;} else {$Asegurados_AFP3_porcentaje = round((($Asegurados_AFP_S3/$Asegurados_S3)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG3 == 0)) {$Asumidos_AC_EG3_porcentaje = 0;} else {$Asumidos_AC_EG3_porcentaje = round((($Asumidos_AC_EG_S3/$Asegurados_S3)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT4 = Consolidados::Asegurados_AT4(conexion::obtener_conexion());
    $Asegurados_AT_S4 = Consolidados::Asegurados_AT_S4(conexion::obtener_conexion());
    $Asegurados_AC_EG4 = Consolidados::Asegurados_AC_EG4(conexion::obtener_conexion());
    $Asegurados_AC_EG_S4 = Consolidados::Asegurados_AC_EG_S4(conexion::obtener_conexion());
    $Asegurados_AFP4 = Consolidados::Asegurados_AFP4(conexion::obtener_conexion());
    $Asegurados_AFP_S4 = Consolidados::Asegurados_AFP_S4(conexion::obtener_conexion());
    $Asumidos_AC_EG4 = Consolidados::Asumidos_AC_EG4(conexion::obtener_conexion());
    $Asumidos_AC_EG_S4 = Consolidados::Asumidos_AC_EG_S4(conexion::obtener_conexion());
    $Asegurados_S4 = $Asegurados_AT_S4 + $Asegurados_AC_EG_S4 + $Asegurados_AFP_S4 + $Asumidos_AC_EG_S4;
    if(($Asegurados_AT4 == 0)) {$Asegurados_AT4_porcentaje = 0;} else {$Asegurados_AT4_porcentaje = round((($Asegurados_AT_S4/$Asegurados_S4)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG4 == 0)) {$Asegurados_AC_EG4_porcentaje = 0;} else {$Asegurados_AC_EG4_porcentaje = round((($Asegurados_AC_EG_S4/$Asegurados_S4)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP4 == 0)) {$Asegurados_AFP4_porcentaje = 0;} else {$Asegurados_AFP4_porcentaje = round((($Asegurados_AFP_S4/$Asegurados_S4)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG4 == 0)) {$Asumidos_AC_EG4_porcentaje = 0;} else {$Asumidos_AC_EG4_porcentaje = round((($Asumidos_AC_EG_S4/$Asegurados_S4)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT5 = Consolidados::Asegurados_AT5(conexion::obtener_conexion());
    $Asegurados_AT_S5 = Consolidados::Asegurados_AT_S5(conexion::obtener_conexion());
    $Asegurados_AC_EG5 = Consolidados::Asegurados_AC_EG5(conexion::obtener_conexion());
    $Asegurados_AC_EG_S5 = Consolidados::Asegurados_AC_EG_S5(conexion::obtener_conexion());
    $Asegurados_AFP5 = Consolidados::Asegurados_AFP5(conexion::obtener_conexion());
    $Asegurados_AFP_S5 = Consolidados::Asegurados_AFP_S5(conexion::obtener_conexion());
    $Asumidos_AC_EG5 = Consolidados::Asumidos_AC_EG5(conexion::obtener_conexion());
    $Asumidos_AC_EG_S5 = Consolidados::Asumidos_AC_EG_S5(conexion::obtener_conexion());
    $Asegurados_S5 = $Asegurados_AT_S5 + $Asegurados_AC_EG_S5 + $Asegurados_AFP_S5 + $Asumidos_AC_EG_S5;
    if(($Asegurados_AT5 == 0)) {$Asegurados_AT5_porcentaje = 0;} else {$Asegurados_AT5_porcentaje = round((($Asegurados_AT_S5/$Asegurados_S5)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG5 == 0)) {$Asegurados_AC_EG5_porcentaje = 0;} else {$Asegurados_AC_EG5_porcentaje = round((($Asegurados_AC_EG_S5/$Asegurados_S5)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP5 == 0)) {$Asegurados_AFP5_porcentaje = 0;} else {$Asegurados_AFP5_porcentaje = round((($Asegurados_AFP_S5/$Asegurados_S5)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG5 == 0)) {$Asumidos_AC_EG5_porcentaje = 0;} else {$Asumidos_AC_EG5_porcentaje = round((($Asumidos_AC_EG_S5/$Asegurados_S5)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT6 = Consolidados::Asegurados_AT6(conexion::obtener_conexion());
    $Asegurados_AT_S6 = Consolidados::Asegurados_AT_S6(conexion::obtener_conexion());
    $Asegurados_AC_EG6 = Consolidados::Asegurados_AC_EG6(conexion::obtener_conexion());
    $Asegurados_AC_EG_S6 = Consolidados::Asegurados_AC_EG_S6(conexion::obtener_conexion());
    $Asegurados_AFP6 = Consolidados::Asegurados_AFP6(conexion::obtener_conexion());
    $Asegurados_AFP_S6 = Consolidados::Asegurados_AFP_S6(conexion::obtener_conexion());
    $Asumidos_AC_EG6 = Consolidados::Asumidos_AC_EG6(conexion::obtener_conexion());
    $Asumidos_AC_EG_S6 = Consolidados::Asumidos_AC_EG_S6(conexion::obtener_conexion());
    $Asegurados_S6 = $Asegurados_AT_S6 + $Asegurados_AC_EG_S6 + $Asegurados_AFP_S6 + $Asumidos_AC_EG_S6;
    if(($Asegurados_AT6 == 0)) {$Asegurados_AT6_porcentaje = 0;} else {$Asegurados_AT6_porcentaje = round((($Asegurados_AT_S6/$Asegurados_S6)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG6 == 0)) {$Asegurados_AC_EG6_porcentaje = 0;} else {$Asegurados_AC_EG6_porcentaje = round((($Asegurados_AC_EG_S6/$Asegurados_S6)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP6 == 0)) {$Asegurados_AFP6_porcentaje = 0;} else {$Asegurados_AFP6_porcentaje = round((($Asegurados_AFP_S6/$Asegurados_S6)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG6 == 0)) {$Asumidos_AC_EG6_porcentaje = 0;} else {$Asumidos_AC_EG6_porcentaje = round((($Asumidos_AC_EG_S6/$Asegurados_S6)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT7 = Consolidados::Asegurados_AT7(conexion::obtener_conexion());
    $Asegurados_AT_S7 = Consolidados::Asegurados_AT_S7(conexion::obtener_conexion());
    $Asegurados_AC_EG7 = Consolidados::Asegurados_AC_EG7(conexion::obtener_conexion());
    $Asegurados_AC_EG_S7 = Consolidados::Asegurados_AC_EG_S7(conexion::obtener_conexion());
    $Asegurados_AFP7 = Consolidados::Asegurados_AFP7(conexion::obtener_conexion());
    $Asegurados_AFP_S7 = Consolidados::Asegurados_AFP_S7(conexion::obtener_conexion());
    $Asumidos_AC_EG7 = Consolidados::Asumidos_AC_EG7(conexion::obtener_conexion());
    $Asumidos_AC_EG_S7 = Consolidados::Asumidos_AC_EG_S7(conexion::obtener_conexion());
    $Asegurados_S7 = $Asegurados_AT_S7 + $Asegurados_AC_EG_S7 + $Asegurados_AFP_S7 + $Asumidos_AC_EG_S7;
    if(($Asegurados_AT7 == 0)) {$Asegurados_AT7_porcentaje = 0;} else {$Asegurados_AT7_porcentaje = round((($Asegurados_AT_S7/$Asegurados_S7)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG7 == 0)) {$Asegurados_AC_EG7_porcentaje = 0;} else {$Asegurados_AC_EG7_porcentaje = round((($Asegurados_AC_EG_S7/$Asegurados_S7)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP7 == 0)) {$Asegurados_AFP7_porcentaje = 0;} else {$Asegurados_AFP7_porcentaje = round((($Asegurados_AFP_S7/$Asegurados_S7)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG7 == 0)) {$Asumidos_AC_EG7_porcentaje = 0;} else {$Asumidos_AC_EG7_porcentaje = round((($Asumidos_AC_EG_S7/$Asegurados_S7)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT8 = Consolidados::Asegurados_AT8(conexion::obtener_conexion());
    $Asegurados_AT_S8 = Consolidados::Asegurados_AT_S8(conexion::obtener_conexion());
    $Asegurados_AC_EG8 = Consolidados::Asegurados_AC_EG8(conexion::obtener_conexion());
    $Asegurados_AC_EG_S8 = Consolidados::Asegurados_AC_EG_S8(conexion::obtener_conexion());
    $Asegurados_AFP8 = Consolidados::Asegurados_AFP8(conexion::obtener_conexion());
    $Asegurados_AFP_S8 = Consolidados::Asegurados_AFP_S8(conexion::obtener_conexion());
    $Asumidos_AC_EG8 = Consolidados::Asumidos_AC_EG8(conexion::obtener_conexion());
    $Asumidos_AC_EG_S8 = Consolidados::Asumidos_AC_EG_S8(conexion::obtener_conexion());
    $Asegurados_S8 = $Asegurados_AT_S8 + $Asegurados_AC_EG_S8 + $Asegurados_AFP_S8 + $Asumidos_AC_EG_S8;
    if(($Asegurados_AT8 == 0)) {$Asegurados_AT8_porcentaje = 0;} else {$Asegurados_AT8_porcentaje = round((($Asegurados_AT_S8/$Asegurados_S8)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG8 == 0)) {$Asegurados_AC_EG8_porcentaje = 0;} else {$Asegurados_AC_EG8_porcentaje = round((($Asegurados_AC_EG_S8/$Asegurados_S8)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP8 == 0)) {$Asegurados_AFP8_porcentaje = 0;} else {$Asegurados_AFP8_porcentaje = round((($Asegurados_AFP_S8/$Asegurados_S8)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG8 == 0)) {$Asumidos_AC_EG8_porcentaje = 0;} else {$Asumidos_AC_EG8_porcentaje = round((($Asumidos_AC_EG_S8/$Asegurados_S8)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT9 = Consolidados::Asegurados_AT9(conexion::obtener_conexion());
    $Asegurados_AT_S9 = Consolidados::Asegurados_AT_S9(conexion::obtener_conexion());
    $Asegurados_AC_EG9 = Consolidados::Asegurados_AC_EG9(conexion::obtener_conexion());
    $Asegurados_AC_EG_S9 = Consolidados::Asegurados_AC_EG_S9(conexion::obtener_conexion());
    $Asegurados_AFP9 = Consolidados::Asegurados_AFP9(conexion::obtener_conexion());
    $Asegurados_AFP_S9 = Consolidados::Asegurados_AFP_S9(conexion::obtener_conexion());
    $Asumidos_AC_EG9 = Consolidados::Asumidos_AC_EG9(conexion::obtener_conexion());
    $Asumidos_AC_EG_S9 = Consolidados::Asumidos_AC_EG_S9(conexion::obtener_conexion());
    $Asegurados_S9 = $Asegurados_AT_S9 + $Asegurados_AC_EG_S9 + $Asegurados_AFP_S9 + $Asumidos_AC_EG_S9;
    if(($Asegurados_AT9 == 0)) {$Asegurados_AT9_porcentaje = 0;} else {$Asegurados_AT9_porcentaje = round((($Asegurados_AT_S9/$Asegurados_S9)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG9 == 0)) {$Asegurados_AC_EG9_porcentaje = 0;} else {$Asegurados_AC_EG9_porcentaje = round((($Asegurados_AC_EG_S9/$Asegurados_S9)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP9 == 0)) {$Asegurados_AFP9_porcentaje = 0;} else {$Asegurados_AFP9_porcentaje = round((($Asegurados_AFP_S9/$Asegurados_S9)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG9 == 0)) {$Asumidos_AC_EG9_porcentaje = 0;} else {$Asumidos_AC_EG9_porcentaje = round((($Asumidos_AC_EG_S9/$Asegurados_S9)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT10 = Consolidados::Asegurados_AT10(conexion::obtener_conexion());
    $Asegurados_AT_S10 = Consolidados::Asegurados_AT_S10(conexion::obtener_conexion());
    $Asegurados_AC_EG10 = Consolidados::Asegurados_AC_EG10(conexion::obtener_conexion());
    $Asegurados_AC_EG_S10 = Consolidados::Asegurados_AC_EG_S10(conexion::obtener_conexion());
    $Asegurados_AFP10 = Consolidados::Asegurados_AFP10(conexion::obtener_conexion());
    $Asegurados_AFP_S10 = Consolidados::Asegurados_AFP_S10(conexion::obtener_conexion());
    $Asumidos_AC_EG10 = Consolidados::Asumidos_AC_EG10(conexion::obtener_conexion());
    $Asumidos_AC_EG_S10 = Consolidados::Asumidos_AC_EG_S10(conexion::obtener_conexion());
    $Asegurados_S10 = $Asegurados_AT_S10 + $Asegurados_AC_EG_S10 + $Asegurados_AFP_S10 + $Asumidos_AC_EG_S10;
    if(($Asegurados_AT10 == 0)) {$Asegurados_AT10_porcentaje = 0;} else {$Asegurados_AT10_porcentaje = round((($Asegurados_AT_S10/$Asegurados_S10)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG10 == 0)) {$Asegurados_AC_EG10_porcentaje = 0;} else {$Asegurados_AC_EG10_porcentaje = round((($Asegurados_AC_EG_S10/$Asegurados_S10)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP10 == 0)) {$Asegurados_AFP10_porcentaje = 0;} else {$Asegurados_AFP10_porcentaje = round((($Asegurados_AFP_S10/$Asegurados_S10)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG10 == 0)) {$Asumidos_AC_EG10_porcentaje = 0;} else {$Asumidos_AC_EG10_porcentaje = round((($Asumidos_AC_EG_S10/$Asegurados_S10)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT11 = Consolidados::Asegurados_AT11(conexion::obtener_conexion());
    $Asegurados_AT_S11 = Consolidados::Asegurados_AT_S11(conexion::obtener_conexion());
    $Asegurados_AC_EG11 = Consolidados::Asegurados_AC_EG11(conexion::obtener_conexion());
    $Asegurados_AC_EG_S11 = Consolidados::Asegurados_AC_EG_S11(conexion::obtener_conexion());
    $Asegurados_AFP11 = Consolidados::Asegurados_AFP11(conexion::obtener_conexion());
    $Asegurados_AFP_S11 = Consolidados::Asegurados_AFP_S11(conexion::obtener_conexion());
    $Asumidos_AC_EG11 = Consolidados::Asumidos_AC_EG11(conexion::obtener_conexion());
    $Asumidos_AC_EG_S11 = Consolidados::Asumidos_AC_EG_S11(conexion::obtener_conexion());
    $Asegurados_S11 = $Asegurados_AT_S11 + $Asegurados_AC_EG_S11 + $Asegurados_AFP_S11 + $Asumidos_AC_EG_S11;
    if(($Asegurados_AT11 == 0)) {$Asegurados_AT11_porcentaje = 0;} else {$Asegurados_AT11_porcentaje = round((($Asegurados_AT_S11/$Asegurados_S11)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG11 == 0)) {$Asegurados_AC_EG11_porcentaje = 0;} else {$Asegurados_AC_EG11_porcentaje = round((($Asegurados_AC_EG_S11/$Asegurados_S11)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP11 == 0)) {$Asegurados_AFP11_porcentaje = 0;} else {$Asegurados_AFP11_porcentaje = round((($Asegurados_AFP_S11/$Asegurados_S11)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG11 == 0)) {$Asumidos_AC_EG11_porcentaje = 0;} else {$Asumidos_AC_EG11_porcentaje = round((($Asumidos_AC_EG_S11/$Asegurados_S11)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT12 = Consolidados::Asegurados_AT12(conexion::obtener_conexion());
    $Asegurados_AT_S12 = Consolidados::Asegurados_AT_S12(conexion::obtener_conexion());
    $Asegurados_AC_EG12 = Consolidados::Asegurados_AC_EG12(conexion::obtener_conexion());
    $Asegurados_AC_EG_S12 = Consolidados::Asegurados_AC_EG_S12(conexion::obtener_conexion());
    $Asegurados_AFP12 = Consolidados::Asegurados_AFP12(conexion::obtener_conexion());
    $Asegurados_AFP_S12 = Consolidados::Asegurados_AFP_S12(conexion::obtener_conexion());
    $Asumidos_AC_EG12 = Consolidados::Asumidos_AC_EG12(conexion::obtener_conexion());
    $Asumidos_AC_EG_S12 = Consolidados::Asumidos_AC_EG_S12(conexion::obtener_conexion());
    $Asegurados_S12 = $Asegurados_AT_S12 + $Asegurados_AC_EG_S12 + $Asegurados_AFP_S12 + $Asumidos_AC_EG_S12;
    if(($Asegurados_AT12 == 0)) {$Asegurados_AT12_porcentaje = 0;} else {$Asegurados_AT12_porcentaje = round((($Asegurados_AT_S12/$Asegurados_S12)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG12 == 0)) {$Asegurados_AC_EG12_porcentaje = 0;} else {$Asegurados_AC_EG12_porcentaje = round((($Asegurados_AC_EG_S12/$Asegurados_S12)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP12 == 0)) {$Asegurados_AFP12_porcentaje = 0;} else {$Asegurados_AFP12_porcentaje = round((($Asegurados_AFP_S12/$Asegurados_S12)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG12 == 0)) {$Asumidos_AC_EG12_porcentaje = 0;} else {$Asumidos_AC_EG12_porcentaje = round((($Asumidos_AC_EG_S12/$Asegurados_S12)*100), 2, PHP_ROUND_HALF_UP);}
    
    $Asegurados_AT_T = Consolidados::Asegurados_AT_T(conexion::obtener_conexion());
    $Asegurados_AT_TS = Consolidados::Asegurados_AT_TS(conexion::obtener_conexion());
    $Asegurados_AC_EG_T = Consolidados::Asegurados_AC_EG_T(conexion::obtener_conexion());
    $Asegurados_AC_EG_TS = Consolidados::Asegurados_AC_EG_TS(conexion::obtener_conexion());
    $Asegurados_AFP_T = Consolidados::Asegurados_AFP_T(conexion::obtener_conexion());
    $Asegurados_AFP_TS = Consolidados::Asegurados_AFP_TS(conexion::obtener_conexion());
    $Asumidos_AC_EG_T = Consolidados::Asumidos_AC_EG_T(conexion::obtener_conexion());
    $Asumidos_AC_EG_TS = Consolidados::Asumidos_AC_EG_TS(conexion::obtener_conexion());
    $Asegurados_T = $Asegurados_AT_TS + $Asegurados_AC_EG_TS + $Asegurados_AFP_TS + $Asumidos_AC_EG_TS;
    if(($Asegurados_AT_T == 0)) {$Asegurados_AT_T_porcentaje = 0;} else {$Asegurados_AT_T_porcentaje = round((($Asegurados_AT_TS/$Asegurados_T)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Asegurados_AC_EG_T == 0)) {$Asegurados_AC_EG_T_porcentaje = 0;} else {$Asegurados_AC_EG_T_porcentaje = round((($Asegurados_AC_EG_TS/$Asegurados_T)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asegurados_AFP_T == 0)) {$Asegurados_AFP_T_porcentaje = 0;} else {$Asegurados_AFP_T_porcentaje = round((($Asegurados_AFP_TS/$Asegurados_T)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Asumidos_AC_EG_T == 0)) {$Asumidos_AC_EG_T_porcentaje = 0;} else {$Asumidos_AC_EG_T_porcentaje = round((($Asumidos_AC_EG_TS/$Asegurados_T)*100), 2, PHP_ROUND_HALF_UP);}
    
    
    if(($Enero_AT == 0) || ($Enero_NNT == 0)) {$Enero_TA = 0;} else {$Enero_TA = round((($Enero_AT/$Enero_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Febrero_AT == 0) || ($Febrero_NNT == 0)) {$Febrero_TA = 0;} else {$Febrero_TA = round((($Febrero_AT/$Febrero_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_AT == 0) || ($Marzo_NNT == 0)) {$Marzo_TA = 0;} else {$Marzo_TA = round((($Marzo_AT/$Marzo_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Abril_AT == 0) || ($Abril_NNT == 0)) {$Abril_TA = 0;} else {$Abril_TA = round((($Abril_AT/$Abril_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Mayo_AT == 0) || ($Mayo_NNT == 0)) {$Mayo_TA = 0;} else {$Mayo_TA = round((($Mayo_AT/$Mayo_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Junio_AT == 0) || ($Junio_NNT == 0)) {$Junio_TA = 0;} else {$Junio_TA = round((($Junio_AT/$Junio_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Junio_AT == 0) || ($Junio_NNT == 0)) {$Junio_TA = 0;} else {$Junio_TA = round((($Junio_AT/$Junio_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Julio_AT == 0) || ($Julio_NNT == 0)) {$Julio_TA = 0;} else {$Julio_TA = round((($Julio_AT/$Julio_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Agosto_AT == 0) || ($Agosto_NNT == 0)) {$Agosto_TA = 0;} else {$Agosto_TA = round((($Agosto_AT/$Agosto_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Septiembre_AT == 0) || ($Septiembre_NNT == 0)) {$Septiembre_TA = 0;} else {$Septiembre_TA = round((($Septiembre_AT/$Septiembre_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Octubre_AT == 0) || ($Octubre_NNT == 0)) {$Octubre_TA = 0;} else {$Octubre_TA = round((($Octubre_AT/$Octubre_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Noviembre_AT == 0) || ($Noviembre_NNT == 0)) {$Noviembre_TA = 0;} else {$Noviembre_TA = round((($Noviembre_AT/$Noviembre_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Diciembre_AT == 0) || ($Diciembre_NNT == 0)) {$Diciembre_TA = 0;} else {$Diciembre_TA = round((($Diciembre_AT/$Diciembre_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Anual_AT == 0) || ($Anual_NNT == 0)) {$Anual_TA = 0;} else {$Anual_TA = round((($Anual_AT/$Anual_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($_AT == 0) || ($_NNT == 0)) {$_TA = 0;} else {$_TA = round((($_AT/$_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    
    if(($Enero_AT == 0) || ($Enero_HHT == 0)) {$Enero_IFAT = 0;} else {$Enero_IFAT = round((($Enero_AT/$Enero_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Febrero_AT == 0) || ($Febrero_HHT == 0)) {$Febrero_IFAT = 0;} else {$Febrero_IFAT = round((($Febrero_AT/$Febrero_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_AT == 0) || ($Marzo_HHT == 0)) {$Marzo_IFAT = 0;} else {$Marzo_IFAT = round((($Marzo_AT/$Marzo_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Abril_AT == 0) || ($Abril_HHT == 0)) {$Abril_IFAT = 0;} else {$Abril_IFAT = round((($Abril_AT/$Abril_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Mayo_AT == 0) || ($Mayo_HHT == 0)) {$Mayo_IFAT = 0;} else {$Mayo_IFAT = round((($Mayo_AT/$Mayo_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Junio_AT == 0) || ($Junio_HHT == 0)) {$Junio_IFAT = 0;} else {$Junio_IFAT = round((($Junio_AT/$Junio_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Julio_AT == 0) || ($Julio_HHT == 0)) {$Julio_IFAT = 0;} else {$Julio_IFAT = round((($Julio_AT/$Julio_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Agosto_AT == 0) || ($Agosto_HHT == 0)) {$Agosto_IFAT = 0;} else {$Agosto_IFAT = round((($Agosto_AT/$Agosto_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Septiembre_AT == 0) || ($Septiembre_HHT == 0)) {$Septiembre_IFAT = 0;} else {$Septiembre_IFAT = round((($Septiembre_AT/$Septiembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Octubre_AT == 0) || ($Octubre_HHT == 0)) {$Octubre_IFAT = 0;} else {$Octubre_IFAT = round((($Octubre_AT/$Octubre_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Noviembre_AT == 0) || ($Noviembre_HHT == 0)) {$Noviembre_IFAT = 0;} else {$Noviembre_IFAT = round((($Noviembre_AT/$Noviembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Diciembre_AT == 0) || ($Diciembre_HHT == 0)) {$Diciembre_IFAT = 0;} else {$Diciembre_IFAT = round((($Diciembre_AT/$Diciembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Anual_AT == 0) || ($Anual_HHT == 0)) {$Anual_IFAT = 0;} else {$Anual_IFAT = round($Enero_IFAT+$Febrero_IFAT+$Marzo_IFAT+$Abril_IFAT+$Mayo_IFAT+$Junio_IFAT+$Julio_IFAT+$Agosto_IFAT+$Septiembre_IFAT+$Octubre_IFAT+$Noviembre_IFAT+$Diciembre_IFAT, 2, PHP_ROUND_HALF_UP);} 
    
    if(($Enero_DTI == 0) || ($Enero_HHT == 0)) {$Enero_ISAT = 0;} else {$Enero_ISAT = round(((($Enero_DTI + $Enero_Cargados)/$Enero_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Febrero_DTI == 0) || ($Enero_HHT == 0)) {$Febrero_ISAT = 0;} else {$Febrero_ISAT = round(((($Febrero_DTI + $Febrero_Cargados)/$Febrero_HHT)*19200), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_DTI == 0) || ($Enero_HHT == 0)) {$Marzo_ISAT = 0;} else {$Marzo_ISAT = round(((($Marzo_DTI + $Marzo_Cargados)/$Marzo_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_DTI == 0) || ($Enero_HHT == 0)) {$Abril_ISAT = 0;} else {$Abril_ISAT= round(((($Abril_DTI + $Abril_Cargados)/$Abril_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_DTI == 0) || ($Enero_HHT == 0)) {$Mayo_ISAT = 0;} else {$Mayo_ISAT = round(((($Mayo_DTI + $Mayo_Cargados)/$Mayo_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_DTI == 0) || ($Enero_HHT == 0)) {$Junio_ISAT = 0;} else {$Junio_ISAT = round(((($Junio_DTI + $Junio_Cargados)/$Junio_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_DTI == 0) || ($Enero_HHT == 0)) {$Julio_ISAT = 0;} else {$Julio_ISAT = round(((($Julio_DTI + $Julio_Cargados)/$Julio_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_DTI == 0) || ($Enero_HHT == 0)) {$Agosto_ISAT = 0;} else {$Agosto_ISAT = round(((($Agosto_DTI + $Agosto_Cargados)/$Agosto_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_DTI == 0) || ($Enero_HHT == 0)) {$Septiembre_ISAT = 0;} else {$Septiembre_ISAT = round(((($Septiembre_DTI + $Septiembre_Cargados)/$Septiembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_DTI == 0) || ($Enero_HHT == 0)) {$Octubre_ISAT = 0;} else {$Octubre_ISAT = round(((($Octubre_DTI + $Octubre_Cargados)/$Octubre_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_DTI == 0) || ($Enero_HHT == 0)) {$Noviembre_ISAT = 0;} else {$Noviembre_ISAT = round(((($Noviembre_DTI + $Noviembre_Cargados)/$Noviembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_DTI == 0) || ($Enero_HHT == 0)) {$Diciembre_ISAT = 0;} else {$Diciembre_ISAT = round(((($Diciembre_DTI + $Diciembre_Cargados)/$Diciembre_HHT)*19200), 2, PHP_ROUND_HALF_UP);}
     if ("$Enero_ISAT" == 'INF'){
        $Enero_ISAT = '0';
    } 
     if ("$Febrero_ISAT" == 'INF'){
        $Febrero_ISAT = '0';
    } 
     if ("$Marzo_ISAT" == 'INF'){
        $Marzo_ISAT = '0';
    } 
     if ("$Abril_ISAT" == 'INF'){
        $Abril_ISAT = '0';
    }
     if ("$Mayo_ISAT" == 'INF'){
        $Mayo_ISAT = '0';
    } 
     if ("$Junio_ISAT" == 'INF'){
        $Junio_ISAT = '0';
    } 
    if ("$Julio_ISAT"== 'INF'){
        $Julio_ISAT = '0';
    } 
     if ("$Agosto_ISAT" == 'INF'){
        $Agosto_ISAT = '0';
    }
     if ("$Septiembre_ISAT" == 'INF'){
        $Septiembre_ISAT = '0';
    }
     if ("$Octubre_ISAT" == 'INF'){
        $Octubre_ISAT = '0';
    }
     if ("$Noviembre_ISAT" == 'INF'){
        $Noviembre_ISAT = '0';
    }
     if ("$Diciembre_ISAT" == 'INF'){
        $Diciembre_ISAT = '0';
    }
    if ("$Anual_ISAT" == 'INF'){
        $Anual_ISAT = '0';
    }
     if(($Anual_DTI == 0) || ($Enero_HHT == 0)) {$Anual_ISAT = 0;} else {$Anual_ISAT = round($Enero_ISAT+$Febrero_ISAT+$Marzo_ISAT+$Abril_ISAT+$Mayo_ISAT+$Junio_ISAT+$Julio_ISAT+$Agosto_ISAT+$Septiembre_ISAT+$Octubre_ISAT+$Noviembre_ISAT+$Diciembre_ISAT, 2, PHP_ROUND_HALF_UP);}
     
    if(($Enero_IFAT == 0) || ($Enero_ISAT == 0)) {$Enero_ILI = 0;} else {$Enero_ILI = round((($Enero_IFAT/$Enero_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Febrero_IFAT == 0) || ($Febrero_ISAT == 0)) {$Febrero_ILI = 0;} else {$Febrero_ILI = round((($Febrero_IFAT/$Febrero_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_IFAT == 0) || ($Marzo_ISAT == 0)) {$Marzo_ILI = 0;} else {$Marzo_ILI = round((($Marzo_IFAT/$Marzo_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Abril_IFAT == 0) || ($Abril_ISAT == 0)) {$Abril_ILI = 0;} else {$Abril_ILI = round((($Abril_IFAT/$Abril_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Mayo_IFAT == 0) || ($Mayo_ISAT == 0)) {$Mayo_ILI = 0;} else {$Mayo_ILI = round((($Mayo_IFAT/$Mayo_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Junio_IFAT == 0) || ($Junio_ISAT == 0)) {$Junio_ILI = 0;} else {$Junio_ILI = round((($Junio_IFAT/$Junio_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Julio_IFAT == 0) || ($Julio_ISAT == 0)) {$Julio_ILI = 0;} else {$Julio_ILI = round((($Julio_IFAT/$Julio_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Agosto_IFAT == 0) || ($Agosto_ISAT == 0)) {$Agosto_ILI = 0;} else {$Agosto_ILI = round((($Agosto_IFAT/$Agosto_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Septiembre_IFAT == 0) || ($Septiembre_ISAT == 0)) {$Septiembre_ILI = 0;} else {$Septiembre_ILI = round((($Septiembre_IFAT/$Septiembre_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Octubre_IFAT == 0) || ($Octubre_ISAT == 0)) {$Octubre_ILI = 0;} else {$Octubre_ILI = round((($Octubre_IFAT/$Octubre_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Noviembre_IFAT == 0) || ($Noviembre_ISAT == 0)) {$Noviembre_ILI = 0;} else {$Noviembre_ILI = round((($Noviembre_IFAT/$Noviembre_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Diciembre_IFAT == 0) || ($Diciembre_ISAT == 0)) {$Diciembre_ILI = 0;} else {$Diciembre_ILI = round((($Diciembre_IFAT/$Diciembre_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Anual_IFAT == 0) || ($Anual_ISAT == 0)) {$Anual_ILI = 0;} else {$Anual_ILI = round((($Anual_IFAT/$Anual_ISAT)*100), 2, PHP_ROUND_HALF_UP);} 
    
    if(($Enero_ATM == 0) || ($Enero_AT == 0)) {$Enero_TM = 0;} else {$Enero_TM = round((($Enero_ATM/$Enero_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_ATM == 0) || ($Febrero_AT == 0)) {$Febrero_TM = 0;} else {$Febrero_TM = round((($Febrero_ATM/$Febrero_AT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_ATM == 0) || ($Marzo_AT == 0)) {$Marzo_TM = 0;} else {$Marzo_TM = round((($Marzo_ATM/$Marzo_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_ATM == 0) || ($Abril_AT == 0)) {$Abril_TM = 0;} else {$Abril_TM = round((($Abril_ATM/$Abril_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_ATM == 0) || ($Mayo_AT == 0)) {$Mayo_TM = 0;} else {$Mayo_TM = round((($Mayo_ATM/$Mayo_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_ATM == 0) || ($Junio_AT == 0)) {$Junio_TM = 0;} else {$Junio_TM = round((($Junio_ATM/$Junio_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_ATM == 0) || ($Julio_AT == 0)) {$Julio_TM = 0;} else {$Julio_TM = round((($Julio_ATM/$Julio_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_ATM == 0) || ($Agosto_AT == 0)) {$Agosto_TM = 0;} else {$Agosto_TM = round((($Agosto_ATM/$Agosto_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_ATM == 0) || ($Septiembre_AT == 0)) {$Septiembre_TM = 0;} else {$Septiembre_TM = round((($Septiembre_ATM/$Septiembre_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_ATM == 0) || ($Octubre_AT == 0)) {$Octubre_TM = 0;} else {$Octubre_TM = round((($Octubre_ATM/$Octubre_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_ATM == 0) || ($Noviembre_AT == 0)) {$Noviembre_TM = 0;} else {$Noviembre_TM = round((($Noviembre_ATM/$Noviembre_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_ATM == 0) || ($Diciembre_AT == 0)) {$Diciembre_TM = 0;} else {$Diciembre_TM = round((($Diciembre_ATM/$Diciembre_AT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Anual_ATM == 0) || ($Anual_AT == 0)) {$Anual_TM = 0;} else {$Anual_TM = round((($Anual_ATM/$Anual_AT)*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_EL == 0) || ($Enero_NNT == 0)) {$Enero_EL2 = 0;} else {$Enero_EL2 = round((($Enero_EL/$Enero_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_EL == 0) || ($Febrero_NNT == 0)) {$Febrero_EL2 = 0;} else {$Febrero_EL2 = round((($Febrero_EL/$Febrero_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Marzo_EL == 0) || ($Marzo_NNT == 0)) {$Marzo_EL2 = 0;} else {$Marzo_EL2 = round((($Marzo_EL/$Marzo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_EL == 0) || ($Abril_NNT == 0)) {$Abril_EL2 = 0;} else {$Abril_EL2 = round((($Abril_EL/$Abril_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_EL == 0) || ($Mayo_NNT == 0)) {$Mayo_EL2 = 0;} else {$Mayo_EL2 = round((($Mayo_EL/$Mayo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_EL == 0) || ($Junio_NNT == 0)) {$Junio_EL2 = 0;} else {$Junio_EL2 = round((($Junio_EL/$Junio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_EL == 0) || ($Julio_NNT == 0)) {$Julio_EL2 = 0;} else {$Julio_EL2 = round((($Julio_EL/$Julio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_EL == 0) || ($Agosto_NNT == 0)) {$Agosto_EL2 = 0;} else {$Agosto_EL2 = round((($Agosto_EL/$Agosto_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_EL == 0) || ($Septiembre_NNT == 0)) {$Septiembre_EL2 = 0;} else {$Septiembre_EL2 = round((($Septiembre_EL/$Septiembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_EL == 0) || ($Octubre_NNT == 0)) {$Octubre_EL2 = 0;} else {$Octubre_EL2 = round((($Octubre_EL/$Octubre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_EL == 0) || ($Noviembre_NNT == 0)) {$Noviembre_EL2 = 0;} else {$Noviembre_EL2 = round((($Noviembre_EL/$Noviembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_EL == 0) || ($Diciembre_NNT == 0)) {$Diciembre_EL2 = 0;} else {$Diciembre_EL2 = round((($Diciembre_EL/$Diciembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Anual_EL == 0) || ($Anual_NNT == 0)) {$Anual_EL2 = 0;} else {$Anual_EL2 = round((($Anual_EL/$Anual_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_NNT == 0) || ($Enero_ACEG == 0)) {$Enero_ACEG2 = 0;} else {$Enero_ACEG2 = round((($Enero_ACEG/$Enero_NNT)*100), 2, PHP_ROUND_HALF_UP);} 
    if(($Febrero_NNT == 0) || ($Febrero_ACEG == 0)) {$Febrero_ACEG2 = 0;} else {$Febrero_ACEG2 = round((($Febrero_ACEG/$Febrero_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Marzo_NNT == 0) || ($Marzo_ACEG == 0)) {$Marzo_ACEG2 = 0;} else {$Marzo_ACEG2 = round((($Marzo_ACEG/$Marzo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_NNT == 0) || ($Abril_ACEG == 0)) {$Abril_ACEG2 = 0;} else {$Abril_ACEG2 = round((($Abril_ACEG/$Abril_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_NNT == 0) || ($Mayo_ACEG == 0)) {$Mayo_ACEG2 = 0;} else {$Mayo_ACEG2 = round((($Mayo_ACEG/$Mayo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_NNT == 0) || ($Junio_ACEG == 0)) {$Junio_ACEG2 = 0;} else {$Junio_ACEG2 = round((($Junio_ACEG/$Junio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_NNT == 0) || ($Julio_ACEG == 0)) {$Julio_ACEG2 = 0;} else {$Julio_ACEG2 = round((($Julio_ACEG/$Julio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_NNT == 0) || ($Agosto_ACEG == 0)) {$Agosto_ACEG2 = 0;} else {$Agosto_ACEG2 = round((($Agosto_ACEG/$Agosto_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_NNT == 0) || ($Septiembre_ACEG == 0)) {$Septiembre_ACEG2 = 0;} else {$Septiembre_ACEG2 = round((($Septiembre_ACEG/$Septiembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_NNT == 0) || ($Octubre_ACEG == 0)) {$Octubre_ACEG2 = 0;} else {$Octubre_ACEG2 = round((($Octubre_ACEG/$Octubre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_NNT == 0) || ($Noviembre_ACEG == 0)) {$Noviembre_ACEG2 = 0;} else {$Noviembre_ACEG2 = round((($Noviembre_ACEG/$Noviembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_NNT == 0) || ($Diciembre_ACEG == 0)) {$Diciembre_ACEG2 = 0;} else {$Diciembre_ACEG2 = round((($Diciembre_ACEG/$Diciembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Anual_NNT == 0) || ($Anual_ACEG == 0)) {$Anual_ACEG2 = 0;} else {$Anual_ACEG2 = round((($Anual_ACEG/$Anual_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_NNT == 0) || ($Enero_ELNA == 0)) {$Enero_EL3 = 0;} else {$Enero_EL3 = round((($Enero_ELNA/$Enero_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_NNT == 0) || ($Febrero_ELNA == 0)) {$Febrero_EL3 = 0;} else {$Febrero_EL3 = round((($Febrero_ELNA/$Febrero_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Marzo_NNT == 0) || ($Marzo_ELNA == 0)) {$Marzo_EL3 = 0;} else {$Marzo_EL3 = round((($Marzo_ELNA/$Marzo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_NNT == 0) || ($Abril_ELNA == 0)) {$Abril_EL3 = 0;} else {$Abril_EL3 = round((($Abril_ELNA/$Abril_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_NNT == 0) || ($Mayo_ELNA == 0)) {$Mayo_EL3 = 0;} else {$Mayo_EL3 = round((($Mayo_ELNA/$Mayo_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_NNT == 0) || ($Junio_ELNA == 0)) {$Junio_EL3 = 0;} else {$Junio_EL3 = round((($Junio_ELNA/$Junio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_NNT == 0) || ($Julio_ELNA == 0)) {$Julio_EL3 = 0;} else {$Julio_EL3 = round((($Julio_ELNA/$Julio_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_NNT == 0) || ($Agosto_ELNA == 0)) {$Agosto_EL3 = 0;} else {$Agosto_EL3 = round((($Agosto_ELNA/$Agosto_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_NNT == 0) || ($Septiembre_ELNA == 0)) {$Septiembre_EL3 = 0;} else {$Septiembre_EL3 = round((($Septiembre_ELNA/$Septiembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_NNT == 0) || ($Octubre_ELNA == 0)) {$Octubre_EL3 = 0;} else {$Octubre_EL3 = round((($Octubre_ELNA/$Octubre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_NNT == 0) || ($Noviembre_ELNA == 0)) {$Noviembre_EL3 = 0;} else {$Noviembre_EL3 = round((($Noviembre_ELNA/$Noviembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_NNT == 0) || ($Diciembre_ELNA == 0)) {$Diciembre_EL3 = 0;} else {$Diciembre_EL3 = round((($Diciembre_ELNA/$Diciembre_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Anual_NNT == 0) || ($Anual_ELNA == 0)) {$Anual_EL3 = 0;} else {$Anual_EL3 = round((($Anual_ELNA/$Anual_NNT)*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_T == 0)) {$Enero_ACM = 0;} else {$Enero_ACM = round((($Enero_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_T == 0)) {$Febrero_ACM = 0;} else {$Febrero_ACM = round((($Febrero_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Marzo_T == 0)) {$Marzo_ACM = 0;} else {$Marzo_ACM = round((($Marzo_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_T == 0)) {$Abril_ACM = 0;} else {$Abril_ACM = round((($Abril_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_T == 0)) {$Mayo_ACM = 0;} else {$Mayo_ACM = round((($Mayo_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_T == 0)) {$Junio_ACM = 0;} else {$Junio_ACM = round((($Junio_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_T == 0)) {$Julio_ACM = 0;} else {$Julio_ACM = round((($Julio_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_T == 0)) {$Agosto_ACM = 0;} else {$Agosto_ACM = round((($Agosto_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_T == 0)) {$Septiembre_ACM = 0;} else {$Septiembre_ACM = round((($Septiembre_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_T == 0)) {$Octubre_ACM = 0;} else {$Octubre_ACM = round((($Octubre_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_T == 0)) {$Noviembre_ACM = 0;} else {$Noviembre_ACM = round((($Noviembre_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_T == 0)) {$Diciembre_ACM = 0;} else {$Diciembre_ACM = round((($Diciembre_T/24)*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_laboral == 0)) {$Enero_ACML = 0;} else {$Enero_ACML = round((($Enero_laboral/(24*$Enero_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_laboral == 0)) {$Febrero_ACML = 0;} else {$Febrero_ACML = round((($Febrero_laboral/(24*$Febrero_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Marzo_laboral == 0)) {$Marzo_ACML = 0;} else {$Marzo_ACML = round((($Marzo_laboral/(24*$Marzo_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_laboral == 0)) {$Abril_ACML = 0;} else {$Abril_ACML = round((($Abril_laboral/(24*$Abril_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_laboral == 0)) {$Mayo_ACML = 0;} else {$Mayo_ACML = round((($Mayo_laboral/(24*$Mayo_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_laboral == 0)) {$Junio_ACML = 0;} else {$Junio_ACML = round((($Junio_laboral/(24*$Junio_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_laboral == 0)) {$Julio_ACML = 0;} else {$Julio_ACML = round((($Julio_laboral/(24*$Julio_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_laboral == 0)) {$Agosto_ACML = 0;} else {$Agosto_ACML = round((($Agosto_laboral/(24*$Agosto_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_laboral == 0)) {$Septiembre_ACML = 0;} else {$Septiembre_ACML = round((($Septiembre_laboral/(24*$Septiembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_laboral == 0)) {$Octubre_ACML = 0;} else {$Octubre_ACML = round((($Octubre_laboral/(24*$Octubre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_laboral == 0)) {$Noviembre_ACML = 0;} else {$Noviembre_ACML = round((($Noviembre_laboral/(24*$Noviembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_laboral == 0)) {$Diciembre_ACML = 0;} else {$Diciembre_ACML = round((($Diciembre_laboral/(24*$Diciembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    
    if(($Enero_comun == 0)) {$Enero_ACMC = 0;} else {$Enero_ACMC = round((($Enero_comun/(24*$Enero_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Febrero_comun == 0)) {$Febrero_ACMC = 0;} else {$Febrero_ACMC = round((($Febrero_comun/(24*$Febrero_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Marzo_comun == 0)) {$Marzo_ACMC = 0;} else {$Marzo_ACMC = round((($Marzo_comun/(24*$Marzo_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Abril_comun == 0)) {$Abril_ACMC = 0;} else {$Abril_ACMC = round((($Abril_comun/(24*$Abril_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Mayo_comun == 0)) {$Mayo_ACMC = 0;} else {$Mayo_ACMC = round((($Mayo_comun/(24*$Mayo_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Junio_comun == 0)) {$Junio_ACMC = 0;} else {$Junio_ACMC = round((($Junio_comun/(24*$Junio_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Julio_comun == 0)) {$Julio_ACMC = 0;} else {$Julio_ACMC = round((($Julio_comun/(24*$Julio_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Agosto_comun == 0)) {$Agosto_ACMC = 0;} else {$Agosto_ACMC = round((($Agosto_comun/(24*$Agosto_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Septiembre_comun == 0)) {$Septiembre_ACMC = 0;} else {$Septiembre_ACMC = round((($Septiembre_comun/(24*$Septiembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Octubre_comun == 0)) {$Octubre_ACMC = 0;} else {$Octubre_ACMC = round((($Octubre_comun/(24*$Octubre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Noviembre_comun == 0)) {$Noviembre_ACMC = 0;} else {$Noviembre_ACMC = round((($Noviembre_comun/(24*$Noviembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
    if(($Diciembre_comun == 0)) {$Diciembre_ACMC = 0;} else {$Diciembre_ACMC = round((($Diciembre_comun/(24*$Diciembre_NNT))*100), 2, PHP_ROUND_HALF_UP);}
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
    	background: #eaeaea;
        font-family: verdana;
        padding: 0px !important;
        margin: 0px !important;
        font-size:13px;
        line-height: 2.8rem;
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
    .btn-theme:hover,
    .btn-theme:focus,
    .btn-theme:active,
    .btn-theme.active,
    .open .dropdown-toggle.btn-theme {
      color: #fff;
      background-color: #48bcb4;
      border-color: #48bcb4;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #797979;
    }
    .centered {
    	text-align: center;
    }
    .goleft {
    	text-align: left;
    }
    .goright {
    	text-align: right;
    }
    .no-padding {
    	padding: 0 !important;
    }
    .no-margin {
    	margin: 0 !important;
    }
    .label-theme {
    	background-color: #c8c5e2;
    }
    .bg-theme {
    	background-color: #c8c5e2;
    }
    .top-menu {
        margin-top:1.5em;
    }
     ul.top-menu > li > .logout {
    	color:#2f323a;
    	font-family:verdana;
    	font-size: 22px;
    	border-radius:0!important;
    	-webkit-border-radius: 4px;
    	border: 1px solid #c8c5e2 !important;
    	padding: 6px;
    	padding-top: 2px!important;
    	padding-bottom: 2px!important;
    	background: #c8c5e2;
    	transition: all 0.5s ease;
    	margin-right:-4px;
    }
    #sidebar {
        width: 210px;
        position: fixed;
        z-index:1;
    }
    #sidebar h5 {
    	color: #f2f2f2;
    	font-weight: 700;
    	   
    }
    #sidebar ul li span {
        position: relative;
        font-size:14px;
    	font-family:verdana;
    	
    }
    #sidebar .sub-menu > .sub li  {
        padding-left: 32px;
        font-size:14px;
    }
    #sidebar .sub-menu > .sub li:last-child {
        padding-bottom: 10px;
        font-size:14px;
    }

    ul.sidebar-menu , ul.sidebar-menu li ul.sub{
        margin: -2px 0 0;
        padding: 0;
    }
    ul.sidebar-menu {
        margin-top: 75px;
    }
    #sidebar > ul > li > ul.sub {
        display: none;
    }
    #sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
        display: block;
        font-size:14px;
    }
    ul.sidebar-menu li ul.sub li{
        background: #2f323a;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0;
    }
    ul.sidebar-menu li ul.sub li:last-child{
        border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
    }
    ul.sidebar-menu li ul.sub li a {
        font-size: 12px;
        padding: 6px 0;
        line-height: 35px;
        height: 35px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        color: #aeb2b7;
    }
    ul.sidebar-menu li ul.sub li a:hover {
    	color: white;
    	background: transparent;
    }
    ul.sidebar-menu li ul.sub li.active a {
        color: #c8c5e2;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        display: block;
    }
    ul.sidebar-menu li{
        /*line-height: 20px !important;*/
        margin-bottom: 5px;
        margin-left:10px;
        margin-right:10px;
    }
    ul.sidebar-menu li.sub-menu{
        line-height: 15px;
    }
    ul.sidebar-menu li a span{
        display: inline-block;
        font-family:verdana;
    }
    ul.sidebar-menu li a{
        color:#ffffff;
        text-decoration: none;
        display: block;
        padding: 15px 0 15px 10px;
        font-size: 12px;
        outline: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
        background: #c8c5e2;
        color: #000000;
        display: block;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a i {
        font-size: 15px;
        padding-right: 6px;
        color:#fff;
    }
    ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {
        color:#000000;;
    }
    ul.sidebar-menu li a.active i {
        color:#000000;;
    }
    .mail-info, .mail-info:hover {
        margin: -3px 6px 0 0;
        font-size: 11px;
    }
    #main-content {
        margin-left: 210px;
    }
    .header, .footer {
        min-height: 60px;
        padding: 0 15px;
    }
    .header {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 1002;
    }
    .black-bg {
        background: #22242a;
        border-bottom: 1px solid #393d46;
        z-index:3!important
    }
    .wrapper {
        display: inline-block;
        margin-top: 60px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        padding-top: 0px;
        width: 100%;
    }
    a.logo {
        font-family:narrow;
        font-size: 20px;
        letter-spacing:1px;
        color: #f2f2f2;
        float: left;
        margin-top: 15px;
    }
    a.logo b {
        font-weight: 900;
    }
    a.logo:hover, a.logo:focus {
        text-decoration: none;
        outline: none;
    }
    a.logo span {
        color: #f58634;
    }
    .notify-row {
        float: left;
        margin-left: 92px;
        color:#ffffff;
        font-family;verdana;
        font-size:20px;
        display:block!important;
        margin-top:0.7em;
    }
    ul.top-menu > li > a {
        color: #666666;
        font-size: 16px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        border:1px solid #666666 !important;
        padding: 2px 6px;
        margin-right: 15px;
    }
    ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {
        border:1px solid #b6b6b6 !important;
        background-color: transparent !important;
        border-color: #b6b6b6 !important;
        text-decoration: none;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        color: #b6b6b6 !important;
    }
    .sidebar-toggle-box {
        float: left;
        padding-right: 15px;
        margin-top: 18px;
    }
    .contact-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin: 15px 0;
    }
    .contact-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
      margin: 15px 0;
    }
    #copyrights {
      background: #222222;
      padding: 20px 0;
      text-align: center;
    }
    #copyrights p {
      margin-bottom: 5px;
      color: #fff;
    }
    #copyrights a {
      color: #fff;
    }
    #piezas {
        font-family:verdana;
        font-size:14px;
        padding:0.4em;
        background: #22242a;
    }
    .toggle-custom {
        position: absolute !important;
        top: 0;
        right: 0;
        background:#ffffff!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
    }
    #td {
        font-size:13px;
        padding:4px;
    }
    table{
    table-layout: fixed;
    }
    .titulo {
        background:#ffffff!important;
        font-family:verdanab;
        color:#333333!important;
        font-size:13px;
        line-height: 2.8rem;
    }
    .N {
        color:#71788e;
        font-size:14px;
    }
    .enlace:link, .enlace:visited {
        font-size:13px;
        color:#333333!important;
        font-family:verdanab;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .enlace:hover, .enlaces:active {
        color:#000000;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .glyphicon-plus {
        color:#333333;
        font-size:16px;
    }
    .fa-paperclip {
        font-size:24px!important;
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
    .task-download,
    .task-delete,
    .task-delete4 {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:20px!important;
        padding-top:1em;
        text-decoration:none!important;
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
    input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .controles {
        min-height: 30px;
        max-width: 50px;
        margin-top:10px;
     
    }
    .controles-inner, .controles-inner:after, .controles-inner:before {
        background-color: #333333;
        position: absolute;
        width: 20px;
        height: 2px;
        border-radius: 5px;
        content: '';
        transition-timing-function: ease;
        transition-duration: .2s;
        transition-property: opacity,-webkit-transform;
        transition-property: transform,opacity;
        transition-property: transform,opacity,-webkit-transform;
    }
    .controles-inner:before {
        top: 6px;
    }
    .controles-inner:after {
        top: 12px;
    }
    .controles.open .controles-inner {
        -webkit-transform: translate3d(0,6px,0) rotate(45deg);
        transform: translate3d(0,6px,0) rotate(45deg);
    }
    .controles.open .controles-inner:after {
        -webkit-transform: translate3d(0,-12px,0) rotate(-90deg);
        transform: translate3d(0,-12px,0) rotate(-90deg);
    }
    .controles.open .controles-inner:before {
        -webkit-transform: translate3d(0,-12px,0) rotate(90deg);
        transform: translate3d(0,-12px,0) rotate(90deg);
        opacity: 0;
    }
    .fullscreen-modal .modal-dialog {
      margin: 0;
      margin-right: auto;
      margin-left: auto;
      width: 80%;
      height: 80%;
      text-align:center;
    }
    .etiqueta {
        font-size:13px;
        font-family:verdanab;
        display:none;
    }
    .etiqueta2 {
        font-size:13px!important;
        font-family:verdanab;
    }
    #nav-accordion{
        margin-top:4.5em!important;
        margin:0;
        padding:0.2em;
        opacity:0.9;
        background: -webkit-linear-gradient(to right, #4f5463,#e7744f);  
        background: linear-gradient(to right, #4f5463, #17181c);
    }
    .nav {
        text-align:left;
    }
    .fa-angle-up {
        font-size:50px;
        color:#000000;
        opacity:0.5;
        text-align:center;
    }
    nav {
        position:fixed;
        left: 0;
        right: 0; 
        bottom:0;
        text-align:center;
    }
    .lista th {
         background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:14px;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #71788e!important;
    }
    .lista td {
        background:#eaeaea;
        color:#333333;
        margin-top:2em;
        border:1px solid #71788e!important;
        height:5em;
    }
    .delete {
        width:7em;
        height: 36px;
        font-family:verdanab;
        background:#ffffff;
        color: #666666;
        border: 1px solid #71788e;
        font-size:14px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .delete:hover {
        color:#ff8080;
        background: #ffffff; 
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     }
    .nuevo1,
    .nuevo {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #e7744f;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .nuevo1 {
        background:#ffffff!important;
    }
   
    .nuevo3 {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #00cc00;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo3:hover, .submit:hover,
    .nuevo1:hover, .submit:hover,
    .nuevo:hover, .submit:hover {
        border: 1px solid #71788e;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #tdbd {
        padding:1em;
        color:#000000;
        padding-right:0;
        text-align:left!important;
        font-family:Moristonb;
        color:#666666;
    }
    #btn2{
        width:36px;
        height: 36px;
        color: #666666;
        border: 1px solid #71788e;
        background:#eaeaea;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #btn2:hover, .submit:hover {
        border: 1px solid #000000;
        font-size:18px;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    #search{
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #71788e!important;
        background:#eaeaea;
        border-bottom-color: #ccc; 
        transition: 0.4s;
        margin:0!important;
        border-radius:0;
        padding:4px;
        padding-left:40px;
        font-family:verdana!important;
    }
    #search:focus{
        padding-top:1px;
        transition: 0.4s;
        padding:4px;
        padding-left:40px;
        border: 2px solid #e7744f;
        background:#f1f2f4;
    }
    #search ~ .focus-border{
        position: absolute; 
        height: 36px; 
        right: 0; 
        width: 0;
        transition: 0.5s;
        margin-right:2px;
    }
    #search:focus ~ .focus-border{
        float:left!important;
        margin-right:-0.4px;
        width: 14em; 
        transition: 0.4s; 
        border: 2px solid #e7744f;
    }
    .col-22{
        width:229px; 
        position: relative;
    } 
     #label {
        position: absolute;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;  
        font-size:18px;
    }
    #titulo_empresa {
        font-size:24px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #captura {
        font-size:28px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #nregistro {
        float:left;
        margin-top:1em;
    }
    .table_ind th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:13px;
        text-align:center;
        border:1px solid #71788e!important;
        padding:0.5em;
        width:9em!important;
    }
    .table_ind2 th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:13px;
        text-align:center;
        border:1px solid #71788e!important;
        padding:0.5em;
    }
    .table_ind td,
    .table_ind2 td {
        text-align:center;
        font-size:13px;
        font-family:verdana;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
        padding:0.3em;
    }
    #mes {
        font-family:verdanab;
        text-align:left;
        font-size:13px;
    }
    #porcentaje {
        color:#71788e;
        font-family:verdanab;
        text-align:right;
        margin-right:0.5em;
    }
    #porcentaje2 {
        color:#71788e;
        font-family:verdanab;
        text-align:center;
        margin-right:0.5em;
    }
    .graf {
        font-family:verdanab;
        width:6em;
        border-radius:0;
        border:1px solid #71788e!important;
        padding:0;
    }
    .tablaintra {
        background:#eaeaea;
        text-align:center;
        width:100%;
        font-family:verdanab;
        line-height:2.5rem;
        color:#333333;
        font-size:13px;
        border:1px solid #71788e!important;
    }
    .tablaintra th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: #c6c9d2;
        color:#333333;
        font-family:Verdanab;
        text-align:center;
        border:1px solid #71788e!important;
    }
    .tablaintra td {
        padding:10px;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
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
    .task-editar, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:#eaeaea;
        border: 1px solid #71788e;
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
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete:hover, .submit:hover{
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .registro {
        text-align:center!imortant;
    }
    .registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        margin-left:0.5em;
        font-size:16px;
    }
    .registro input {
        font-size:14px;
        color:#333333;
        text-align:center!important;
        background:transparent;
        width:100%!important;
        height:5em;
        margin:0!important;
        padding:0!imortant;
        border:none;
        border-radius:0!important;
    }
    .registro select {
        width: 270px;
        height: 35px;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px!important;
    }
    .registro textarea {
        font-size:14px;
        color:#333333;
        text-align:center!important;
        vertical-align:middle!important;
        background:transparent;
        width:100%!important;
        margin:0!important;
        border:none;
        border-radius:0!important;
        resize: none;
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    #boton_editar_riesgo,
    #boton_admin,
    #boton {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton_editar_riesgo:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIBe,
    #botonIB,
    #botonIA,
    #botonIAe,
    #botonE,
    #botonEe,
    #botonES,
    #botonESe,
    #botonIA1,
    #botonIA2,
    #botonIA3,
    #botonIA4,
    #botonIA5,
    #botonIA6,
    #botonIA7,
    #botonIA8,
    #botonIA9,
    #botonIA10 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
    
    }
    #botonIBe:hover,
    #botonIB:hover,
    #boton1A:hover,
    #botonIAe:hover,
    #botonE:hover,
    #botonEe:hover,
    #botonES:hover,
    #botonESe:hover,
    #botonIA1:hover, 
    #botonIA2:hover,
    #botonIA3:hover,
    #botonIA4:hover,
    #botonIA5:hover,
    #botonIA6:hover,
    #botonIA7:hover,
    #botonIA8:hover,
    #botonIA9:hover,
    #botonIA10:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #71788e!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIB1,
    #botonIB2 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #botonIB1:hover,
    #botonIB2:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #71788e!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #tasks2 td,
    #tasks td{
        font-family:verdana;
        font-size:14px;
        padding:0.8em;
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
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #71788e;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#e7744f;
        margin-top:-1.2em;
        margin-left:1.2em;
    }
    #check11::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #e7744f;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check11::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#e7744f;
        margin-top:-1.2em;
        margin-left:1.2em;
        
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
    } 
    .tableIA {
        width: 90%;
    }
    .tableIA th {
        font-family:Verdanab;
        width:4em!important;
        text-align:center;
        padding:8px;
        border:1px solid #71788e!important;
    }
    .tableIA td {
        width:100%;
        text-align:left;
        padding:8px;
        border:none;
        vertical-align:middle!important;
    }
    .nIA {
        font-family:Verdanab!important;
        font-size:18px!important;
    }
    .tablabdm td{
        width:50%;
        font-size:14px;
        border:1px solid #71788e!important;
        font-family:Verdana!important; 
        padding:8px;
    }
    #borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    .table_consolidados {
        text-align:center;
        table-layout: fixed;
        border:1px solid #71788e!important;
        font-size:12px;
    }
    .table_consolidados th {
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
    .subt2{
        display:none;
    }  
    .col-md-12 p {
        color:#333333;
    } 
    #tdimension {
        text-align:center;
        font-family:verdanab;
        font-size:13px;
    }
    #tdimension1 {
        text-align:left;
        padding-left:6px;
        font-family:verdana;
        font-size:13px;
    }
    #tablas td{
        padding:4px;
        margin-left:30px;
    }
    .panel-body {
        background:#eaeaea;
        font-size:14px;
        line-height: 2.8rem;
    }
    .cuadroseleccion {
        float:right;
        font-family:Verdanab;
        color:#666666;
        margin-right:2em;
    }
    @media (min-width: 1200px) {
   
    }
    @media (min-width: 992px) {
   
    }
    @media screen and (max-width: 800px) {
        table {
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
        #panel_consolidados {
            padding-left:0!important;
            padding-right:0!important;
        }
        .tablaintra th,
        .table_consolidados th,
        .table th,
        .lista th {
            display:none!important;
        }
        .lista td {
            height:auto!important;
        }
        .tablaintra td,
        .table_consolidados td {
            display:block!important;
            font-size:14px;
            width:100%!important;
            height:auto!important;
            padding:8px!important;
            text-align:center!important;
         }
         .table_consolidados {
            width:100%!important;
         }
        .subt2{
            display:block!important;
            font-family:verdana;
            color:#333333;
        } 
        #tdbd {
            padding:0!important;
            font-size:14px!important;
        }
        tbody #borderout {
            display: inline!important;
            text-align:center;
        }
        #buscar td{
            display:inline!important;
        }
        #btn2 {
            margin-top:0!important;
        }
        #nregistro {
            text-align:center!important;
            width:100%!important;
        }
        .task-estres,
        .task-extra,
        .task-intraA,
        .task-delete, .submit,
        .task-editar, .submit {
            margin-top:6px!important;
            margin-bottom:18px!important;
        } 
        .formxlsx {
            margin-right:0!important;
        }
        .tableIA {
            width: 100%!important;
        }
        .cuadroseleccion {
             margin-right:0!important;
        }
        .liker {
            font-size:11px!important;
        }
        #check1::before,
        #check11::before {
            width: 22px!important;
            height: 22px!important;
        }
        .title {
            margin-bottom:0.8em!important;
        }
        .top-menu {
        	margin-top:-4.3em!important;
        }
        .notify-row {
            margin-top:-1.5em;
        }
        .tablabdm td{
            width:100%!important;
            min-height:3em!important;
            height:auto!important;
            text-align:center!important;
        }
         .lista td{
            text-align:center!important;
        }
        .etiquetas td {
            display:inline!important;
        }
        .registro input {
            height:3em!important;
        }
        .table_ind2 th,
        .table_ind th {
            display:none!important;
        }
        .table_ind2 td,
        .table_ind td {
            height:auto!important;
            min-height:3em!important;
        }
    }
    @media (min-width: 768px) {
     
    }
    @media screen and (max-width: 480px) {
        .collapse {
            margin-top:0!important;
        } 
        .fullscreen-modal .modal-dialog {
            width: 100%!important;
        }
        .etiqueta {
            display:inline!important;
        }
        #costumModal1 .modal-lg,
        #costumModal2 .modal-lg,
        #costumModal3 .modal-lg,
        #costumModal5 .modal-m,
        #costumModal6 .modal-m,
        #costumModal7 .modal-m,
        #costumModal8 .modal-m,
        #costumModal9 .modal-m,
        #costumModal10 .modal-m,
        #costumModal11 .modal-lg
        {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    .title {
        font-family:verdanab;
        margin-bottom:2em;
    }
    .numerador{
        vertical-align: 0.7ex;
    }
    .denominador {
        vertical-align: -0.7ex;
    }
    .nuevo3 {
        width:4em;
        height: 30px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:transparent;
        color: #666666;
        border: 1px solid #e7744f;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo3:hover, .submit:hover {
        border: 1px solid #e7744f;
        color: #e7744f;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .task-contador {
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border: 1px solid #333333;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-contador:hover, .submit:hover {
        color:#e7744f;
        border: 1px solid #e7744f;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
</style>
</head>
<body>
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
               <div class="fa fa-bars" style="font-size:22px"></div>
            </div>
            <a href="#" data-toggle="modal" class="logo">Cedisalud<span> IPS</span></a>
            <div class="nav notify-row">
          </div>
          <div>
            <ul class="pull-right top-menu" >
                <li><a class="logout" href="<?php echo RUTA_LOGOUT ?>" title="Salir"><i class="fa fa-power-off"></i></a></li>
            </ul>
          </div>
        </header>
        <aside>
            <div id="sidebar">
                <ul class="sidebar-menu" id="nav-accordion"><br>
                    <p class="centered" id="contenido_" style="opacity:10!important;min-height:8em"></p>
                    <p class="centered" id="Razon_" style="font-size:16px;color:#cccccc;opacity:10!important;font-family:verdanab"></p>
                    <p class="centered"  style="font-size:14px;color:#ffffff;opacity:10!important">NIT: <span id="Nit_"></span></p>
                    <li class="sub-menu">
                        <a href="<?php echo RUTA_GESTOR_AUSENTISMO ?>">
                           <i class="fa fa-folder-o"></i>
                           <span>Gestor</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a href="<?php echo RUTA_IND_AUSENTISMO ?>">
                           <i class="fa fa-list-ul"></i>
                           <span>Indicadores</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a class="active" href="<?php echo RUTA_CONS_AUSENTISMO ?>">
                           <i class="fa fa-bar-chart"></i>
                           <span>Consolidados</span>
                       </a>
                  </li><br>
                </ul>
            </div>
        </aside>
    </header>
</section>    
<div class="container-fluid" class="registro" style="min-height:50em;text-align:center;color:#333333"><br><br><br>
    <p style="font-family:verdanab;font-size:26px;color:#333333;text-align:center;margin:0">AUSENTISMO LABORAL</p><br>
    <h4 style="font-family:Moristonb;text-align:center">INDICADORES DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</h4><br>
    <div class="container">
        <table id="buscar" style="float:right">
            <tr>
                <td style="float:right;font-family:Moristonb;font-size:14px;color:#666666">Año: <button  href="#costumModal13" data-toggle="modal" class="task-contador" type="submit" align="center"  style="width:4em!important;height:30px!important;font-size:14px;padding:0!important" data-title="Visitas al sitio"><?php echo $Year2 ?></button></td>
            </tr>
        </table><br>
    </div>
    <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">TASA DE ACCIDENTALIDAD (T.A.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Expresa la relación porcentual existente entre los accidentes de trabajo (A.T.) y el promedio de trabajadores. Indica el porcentaje de trabajadores que presentaron accidentes de trabajo en determinado período (mes o año).</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de accidentes de trabajo que se presentaron en el mes / número de trabajadores en el mes)*100</p></div>
        <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>N° de <br>trabajadores</th>
                        <th>N° de A.T.</th>
                        <th>T.A. / porcentaje</th>
                    </tr>
                </thead>    
                <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_NNT ?></td>
                    <td class="registro"><?php echo $Enero_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_NNT ?></td>
                    <td class="registro"><?php echo $Febrero_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_NNT ?></td>
                    <td class="registro"><?php echo $Marzo_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_NNT ?></td>
                    <td class="registro"><?php echo $Abril_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_NNT ?></td>
                    <td class="registro"><?php echo $Mayo_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_NNT ?></td>
                    <td class="registro"><?php echo $Junio_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_NNT ?></td>
                    <td class="registro"><?php echo $Julio_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_NNT ?></td>
                    <td class="registro"><?php echo $Agosto_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_NNT ?></td>
                    <td class="registro"><?php echo $Septiembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_NNT ?></td>
                    <td class="registro"><?php echo $Octubre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_NNT ?></td>
                    <td class="registro"><?php echo $Noviembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_NNT ?></td>
                    <td class="registro"><?php echo $Diciembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_TA ?> % </td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Año <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_NNT ?></td>
                    <td class="registro"><?php echo $Anual_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Anual_TA ?> % </td>
                </tr>
            </table>
        </div>
        <div class="col-md-7"><br>   
            <div id="accidentalidad"></div>
            <button class="graf" id="plano1">Plano</button>
            <button class="graf" id="invertido1">Invertido</button>
            <button class="graf" id="polar1">Polar</button>
        </div>
    </div>
    <div class="col-md-12"><br><br>
            <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">FRECUENCIA DE ACCIDENTALIDAD (F.A.T.)</p>
            <div class="container" align="left"><p style="font-family:verdanab">Es la relación entre el número total de accidentes de trabajo y el total de horas hombre trabajadas durante el período considerado multiplicado por K (Resulta de multiplicar 100 trabajadores que laboran 8 horas diarias x 24 días laborales). Indica el número de accidentes de trabajo ocurridos en el período evaluado por cada 100 trabajadores de tiempo completo.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de accidentes de trabajo que se presentaron en el mes / horas hombre trabajadas en el mes)*K</p></div>
            <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>N° de A.T.</th>
                        <th>H.H.T.P.</th>
                        <th>F.A.T./Días</th>
                    </tr>
                </thead>    
                <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_AT ?></td>
                    <td class="registro"><?php echo $Enero_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Enero_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_AT ?></td>
                    <td class="registro"><?php echo $Febrero_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Febrero_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_AT ?></td>
                    <td class="registro"><?php echo $Marzo_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Marzo_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_AT ?></td>
                    <td class="registro"><?php echo $Abril_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Abril_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_AT ?></td>
                    <td class="registro"><?php echo $Mayo_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Mayo_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_AT ?></td>
                    <td class="registro"><?php echo $Junio_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Junio_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_AT ?></td>
                    <td class="registro"><?php echo $Julio_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Julio_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_AT ?></td>
                    <td class="registro"><?php echo $Agosto_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Agosto_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_AT ?></td>
                    <td class="registro"><?php echo $Septiembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Septiembre_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_AT ?></td>
                    <td class="registro"><?php echo $Octubre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Octubre_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_AT ?></td>
                    <td class="registro"><?php echo $Noviembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Noviembre_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_AT ?></td>
                    <td class="registro"><?php echo $Diciembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Diciembre_IFAT ?></td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Año <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_AT ?></td>
                    <td class="registro"><?php echo $Anual_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Anual_IFAT ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-7"><br>   
            <div id="frecuencia"></div>
            <button class="graf" id="plano2">Plano</button>
            <button class="graf" id="invertido2">Invertido</button>
            <button class="graf" id="polar2">Polar</button>
        </div> 
    </div>
    <div class="col-md-12"><br><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">SEVERIDAD DE ACCIDENTALIDAD (S.A.T.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Se define como el número de días perdidos por accidentes de trabajo en el mes o el año. Significa que por cada 100 trabajadores que laboran en el mes, se perdieron X días por accidentes de trabajo.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de días de incapacidad por accidente de trabajo en el mes + número de días cargados en el mes / horas hombre trabajadas en el mes)*K</p></div>
        <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>D.T.I.</th>
                        <th>D.C.</th>
                        <th>H.H.T.</th>
                        <th>S.A.T./Días</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_DTI ?></td>
                    <td class="registro"><?php echo $Enero_Cargados ?></td>
                    <td class="registro"><?php echo $Enero_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Enero_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_DTI ?></td>
                    <td class="registro"><?php echo $Febrero_Cargados ?></td>
                    <td class="registro"><?php echo $Febrero_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Febrero_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_DTI ?></td>
                    <td class="registro"><?php echo $Marzo_Cargados ?></td>
                    <td class="registro"><?php echo $Marzo_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Marzo_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_DTI ?></td>
                    <td class="registro"><?php echo $Abril_Cargados ?></td>
                    <td class="registro"><?php echo $Abril_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Abril_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_DTI ?></td>
                    <td class="registro"><?php echo $Mayo_Cargados ?></td>
                    <td class="registro"><?php echo $Mayo_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Mayo_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_DTI ?></td>
                    <td class="registro"><?php echo $Junio_Cargados ?></td>
                    <td class="registro"><?php echo $Junio_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Junio_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_DTI ?></td>
                    <td class="registro"><?php echo $Julio_Cargados ?></td>
                    <td class="registro"><?php echo $Julio_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Julio_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_DTI ?></td>
                    <td class="registro"><?php echo $Agosto_Cargados ?></td>
                    <td class="registro"><?php echo $Agosto_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Agosto_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_DTI ?></td>
                    <td class="registro"><?php echo $Septiembre_Cargados ?></td>
                    <td class="registro"><?php echo $Septiembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Septiembre_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_DTI ?></td>
                    <td class="registro"><?php echo $Octubre_Cargados ?></td>
                    <td class="registro"><?php echo $Octubre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Octubre_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_DTI ?></td>
                    <td class="registro"><?php echo $Noviembre_Cargados ?></td>
                    <td class="registro"><?php echo $Noviembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Noviembre_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_DTI ?></td>
                    <td class="registro"><?php echo $Diciembre_Cargados ?></td>
                    <td class="registro"><?php echo $Diciembre_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Diciembre_ISAT ?></td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Año <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_DTI ?></td>
                    <td class="registro"><?php echo $Anual_Cargados ?></td>
                    <td class="registro"><?php echo $Anual_HHT ?></td>
                    <td class="registro" id="porcentaje2"><?php echo $Anual_ISAT ?></td>
                </tr>
            </table><br>
        </div>
        <div class="col-md-7"><br>   
            <div id="severidad"></div>
            <button class="graf" id="plano3">Plano</button>
            <button class="graf" id="invertido3">Invertido</button>
            <button class="graf" id="polar3">Polar</button>
        </div> 
    </div>
    <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">PROPORCIÓN DE ACCIDENTES DE TRABAJO MORTALES (A.T.M.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Se define como el número de accidentes mortales que se presentaron en el año. Significa que en el año, el X% de accidentes fueron mortales.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de accidentes mortales que se presentaron en el año / total de accidentes de trabajo que se presentaron en el año)*100</p></div>
        <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>N° A.T. Mortales</th>
                        <th>N° de A.T.</th>
                        <th>A.T.M. / Porcentaje</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_ATM ?></td>
                    <td class="registro"><?php echo $Enero_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_ATM ?></td>
                    <td class="registro"><?php echo $Febrero_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_ATM ?></td>
                    <td class="registro"><?php echo $Marzo_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_ATM ?></td>
                    <td class="registro"><?php echo $Abril_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_ATM ?></td>
                    <td class="registro"><?php echo $Mayo_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_ATM ?></td>
                    <td class="registro"><?php echo $Junio_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_ATM ?></td>
                    <td class="registro"><?php echo $Julio_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_ATM ?></td>
                    <td class="registro"><?php echo $Agosto_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_ATM ?></td>
                    <td class="registro"><?php echo $Septiembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_ATM ?></td>
                    <td class="registro"><?php echo $Octubre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_ATM ?></td>
                    <td class="registro"><?php echo $Noviembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_ATM ?></td>
                    <td class="registro"><?php echo $Diciembre_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_TM ?> % </td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Promedio <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_ATM ?></td>
                    <td class="registro"><?php echo $Anual_AT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Anual_TM ?> % </td>
                </tr>
            </table><br>
        </div>
        <div class="col-md-7"><br>   
            <div id="mortalidad"></div>
            <button class="graf" id="plano5">Plano</button>
            <button class="graf" id="invertido5">Invertido</button>
            <button class="graf" id="polar5">Polar</button>
        </div> 
    </div>
    <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">INCIDENCIA DE ENFERMEDAD LABORAL (Incid. E.L.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Se define como el número de casos nuevos de enfermedad laboral en una población determinada en un período de tiempo. Significa que por cada 100.000 trabajadores existen X casos nuevos de enfermedad laboral en un período determinado.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de casos nuevos de enfermedad laboral en un período / promedio de trabajadores en el período)*100</p></div>
        <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>E.L.</th>
                        <th>N° de<br>trabajadores</th>
                        <th>Incid. E.L.</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_EL ?></td>
                    <td class="registro"><?php echo $Enero_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_EL ?></td>
                    <td class="registro"><?php echo $Febrero_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_EL ?></td>
                    <td class="registro"><?php echo $Marzo_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_EL ?></td>
                    <td class="registro"><?php echo $Abril_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_EL ?></td>
                    <td class="registro"><?php echo $Mayo_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_EL ?></td>
                    <td class="registro"><?php echo $Junio_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_EL ?></td>
                    <td class="registro"><?php echo $Julio_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_EL ?></td>
                    <td class="registro"><?php echo $Agosto_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_EL ?></td>
                    <td class="registro"><?php echo $Septiembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_EL ?></td>
                    <td class="registro"><?php echo $Octubre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_EL ?></td>
                    <td class="registro"><?php echo $Noviembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_EL ?></td>
                    <td class="registro"><?php echo $Diciembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_EL2 ?> % </td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Promedio <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_EL ?></td>
                    <td class="registro"><?php echo $Anual_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Anual_EL2 ?> % </td>
                </tr>
            </table><br>
        </div>
        <div class="col-md-7"><br>   
            <div id="enfermedad"></div>
            <button class="graf" id="plano6">Plano</button>
            <button class="graf" id="invertido6">Invertido</button>
            <button class="graf" id="polar6">Polar</button>
        </div> 
    </div>
    <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">PREVALENCIA DE ENFERMEDAD LABORAL (Prev. E.L.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Número de casos de enfermedad laboral presentes en una población en un período de tiempo.  Significa que por cada 100 trabajadores existen X casos de enfermedad laboral en un determinado período de tiempo.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de casos nuevos y antiguos de enfermedad laboral en un período de tiempo / promedio de trabajadores en el período)*100</p></div>
        <div class="col-md-5"><br>   
            <table  class="table_ind table-sm table-striped" align="center" >
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>E.L.N.A.</th>
                        <th>N° de<br>trabajadores</th>
                        <th>Prev. E.L.</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_ELNA ?></td>
                    <td class="registro"><?php echo $Enero_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_ELNA ?></td>
                    <td class="registro"><?php echo $Febrero_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_ELNA ?></td>
                    <td class="registro"><?php echo $Marzo_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_ELNA ?></td>
                    <td class="registro"><?php echo $Abril_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_ELNA ?></td>
                    <td class="registro"><?php echo $Mayo_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_ELNA ?></td>
                    <td class="registro"><?php echo $Junio_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_ELNA ?></td>
                    <td class="registro"><?php echo $Julio_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_ELNA ?></td>
                    <td class="registro"><?php echo $Agosto_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_ELNA ?></td>
                    <td class="registro"><?php echo $Septiembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_ELNA ?></td>
                    <td class="registro"><?php echo $Octubre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_ELNA ?></td>
                    <td class="registro"><?php echo $Noviembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_ELNA ?></td>
                    <td class="registro"><?php echo $Diciembre_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_EL3 ?> % </td>
                </tr>
                <tr>
                    <td id="mes" style="font-size:12px">Promedio <?php echo $Year2 ?></td>
                    <td class="registro"><?php echo $Anual_ELNA ?></td>
                    <td class="registro"><?php echo $Anual_NNT ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Anual_EL3 ?> % </td>
                </tr>
            </table><br>
        </div>
        <div class="col-md-7"><br>   
            <div id="prevalencia"></div>
            <button class="graf" id="plano8">Plano</button>
            <button class="graf" id="invertido8">Invertido</button>
            <button class="graf" id="polar8">Polar</button>
        </div> 
    </div>
      <div class="container">
        <div class="col-md-12"><br> 
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">DIAGNÓSTICO MÉDICO GENRADO POR ACCIDENTE DE TRABAJO O ENFERMEDAD LABORAL (C.M.T.L.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Es la no asistencia al trabajo con incapacidad médica.  Significa que en el mes se peridó X% de días programados de trabajo por incapacidad médica generada por accidente de trabajo o enfermedad laboral.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de días de ausencia por incapacidad laboral o común en el mes / número de días programados en el mes)*100</p></div><br>
            <table  class="table_ind2 table-sm table-striped" align="center">
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>T.D.I.</th>
                        <th>C.M.T.L.</th>
                        <th COLSPAN=2>DIAGNÓSTICO</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_ACML ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $connect = new PDO("mysql:host=localhost;dbname=cedisalu_usuario", "cedisalu_jeovani", "Jeovani_0313");
                        $connect -> exec("SET CHARACTER SET utf8");
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'ENERO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado20 = $mysqli->query($sql);
                        while($row20 = mysqli_fetch_array($resultado20)) { 
                        $Diagnostico20 = $row20['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'ENERO' && Diagnostico = '$Diagnostico20' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios20 = $resultado['total']; 
                        echo '*'.$Diagnostico20.' ';
                        echo '('.$total_usuarios20.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_ACML ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'FEBRERO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado21 = $mysqli->query($sql);
                        while($row21 = mysqli_fetch_array($resultado21)) { 
                        $Diagnostico21 = $row21['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'FEBRERO' && Diagnostico = '$Diagnostico21' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios21 = $resultado['total']; 
                        echo '*'.$Diagnostico21.' ';
                        echo '('.$total_usuarios21.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_ACML ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'MARZO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado22 = $mysqli->query($sql);
                        while($row22 = mysqli_fetch_array($resultado22)) { 
                        $Diagnostico22 = $row22['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'MARZO' && Diagnostico = '$Diagnostico22' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios22 = $resultado['total']; 
                        echo '*'.$Diagnostico22.' ';
                        echo '('.$total_usuarios22.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_ACML ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'ABRIL' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado23 = $mysqli->query($sql);
                        while($row23 = mysqli_fetch_array($resultado23)) { 
                        $Diagnostico23 = $row23['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'ABRIL' && Diagnostico = '$Diagnostico23' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios23 = $resultado['total']; 
                        echo '*'.$Diagnostico23.' ';
                        echo '('.$total_usuarios23.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_ACML ?> % </td>
                    <td style="text-align:left">
                       <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'MAYO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado24 = $mysqli->query($sql);
                        while($row24 = mysqli_fetch_array($resultado24)) { 
                        $Diagnostico24 = $row24['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'MAYO' && Diagnostico = '$Diagnostico24' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios24 = $resultado['total']; 
                        echo '*'.$Diagnostico24.' ';
                        echo '('.$total_usuarios24.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_ACML ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'JUNIO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado25 = $mysqli->query($sql);
                        while($row25 = mysqli_fetch_array($resultado25)) { 
                        $Diagnostico25 = $row25['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'JUNIO' && Diagnostico = '$Diagnostico25' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios25 = $resultado['total']; 
                        echo '*'.$Diagnostico25.' ';
                        echo '('.$total_usuarios25.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_ACML ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'JULIO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado26 = $mysqli->query($sql);
                        while($row26 = mysqli_fetch_array($resultado26)) { 
                        $Diagnostico26 = $row26['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'JULIO' && Diagnostico = '$Diagnostico26' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios26 = $resultado['total']; 
                        echo '*'.$Diagnostico26.' ';
                        echo '('.$total_usuarios26.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_ACML ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'AGOSTO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado27 = $mysqli->query($sql);
                        while($row27 = mysqli_fetch_array($resultado27)) { 
                        $Diagnostico27 = $row27['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'AGOSTO' && Diagnostico = '$Diagnostico27' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios27 = $resultado['total']; 
                        echo '*'.$Diagnostico27.' ';
                        echo '('.$total_usuarios27.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_ACML ?> % </td>
                    <td style="text-align:left">
                       <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'SEPTIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado28 = $mysqli->query($sql);
                        while($row28 = mysqli_fetch_array($resultado28)) { 
                        $Diagnostico28 = $row28['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'SEPTIEMBRE' && Diagnostico = '$Diagnostico28' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios28 = $resultado['total']; 
                        echo '*'.$Diagnostico28.' ';
                        echo '('.$total_usuarios28.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_ACML ?> % </td>
                    <td style="text-align:left">
                          <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'OCTUBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado29 = $mysqli->query($sql);
                        while($row29 = mysqli_fetch_array($resultado29)) { 
                        $Diagnostico29 = $row29['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'OCTUBRE' && Diagnostico = '$Diagnostico29' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios29 = $resultado['total']; 
                        echo '*'.$Diagnostico29.' ';
                        echo '('.$total_usuarios29.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_ACML ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'NOVIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado30 = $mysqli->query($sql);
                        while($row30 = mysqli_fetch_array($resultado30)) { 
                        $Diagnostico30 = $row30['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'NOVIEMBRE' && Diagnostico = '$Diagnostico30' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios30 = $resultado['total']; 
                        echo '*'.$Diagnostico30.' ';
                        echo '('.$total_usuarios30.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_laboral ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_ACML ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'DICIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado31 = $mysqli->query($sql);
                        while($row31 = mysqli_fetch_array($resultado31)) { 
                        $Diagnostico31 = $row31['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente de trabajo (A.T.)' || Tipo = 'Enfermedad laboral (E.L.)') && Mes = 'DICIEMBRE' && Diagnostico = '$Diagnostico31' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios31 = $resultado['total']; 
                        echo '*'.$Diagnostico31.' ';
                        echo '('.$total_usuarios31.')  '; 
                         } ?>
                    </td>     
                </tr>
            </table><br>
        </div>    
    </div>
    <div class="container">
        <div class="col-md-12"><br> 
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">AUSENTISMO POR CAUSA MÉDICA GENERADA POR ACCIDENTE COMÚN O ENFERMEDAD GENERAL (C.M.C.G.)</p>
        <div class="container" align="left"><p style="font-family:verdanab">Es la no asistencia al trabajo con incapacidad médica.  Significa que en el mes se peridó X% de días programados de trabajo por incapacidad médica generada por accidente común o enfermedad general.</p><p><span style="font-family:verdanab">Fórmula:</span> (Número de días de ausencia por incapacidad laboral o común en el mes / número de días programados en el mes)*100</p></div><br>
             <table  class="table_ind2 table-sm table-striped" align="center">
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>T.D.I.</th>
                        <th>C.M.C.G.</th>
                        <th COLSPAN=2>DIAGNÓSTICO</th>
                    </tr>
                </thead>   
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Enero_ACMC ?> % </td>
                    <td style="text-align:left">
                       <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'ENERO'  && id_admin2 = '$id_admin_aus' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')";
                        $resultado32 = $mysqli->query($sql);
                        while($row32 = mysqli_fetch_array($resultado32)) { 
                        $Diagnostico32 = $row32['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'ENERO' && Diagnostico = '$Diagnostico32' && id_admin2 = '$id_admin_aus'";       
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios32 = $resultado['total']; 
                        echo $Diagnostico32.' ';
                        echo '('.$total_usuarios32.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Febrero_ACMC ?> % </td>
                    <td style="text-align:left">
                       <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'FEBRERO' && id_admin2 = '$id_admin_aus' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')";
                        $resultado33 = $mysqli->query($sql);
                        while($row33 = mysqli_fetch_array($resultado33)) { 
                        $Diagnostico33 = $row33['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'FEBRERO' && Diagnostico = '$Diagnostico33' && id_admin2 = '$id_admin_aus'";       
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios33 = $resultado['total']; 
                        echo $Diagnostico33.' ';
                        echo '('.$total_usuarios33.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Marzo_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'MARZO' && id_admin2 = '$id_admin_aus' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')";
                        $resultado34 = $mysqli->query($sql);
                        while($row34 = mysqli_fetch_array($resultado34)) { 
                        $Diagnostico34 = $row34['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'MARZO' && Diagnostico = '$Diagnostico34' && id_admin2 = '$id_admin_aus'";       
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios34 = $resultado['total']; 
                        echo $Diagnostico34.' ';
                        echo '('.$total_usuarios34.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Abril_ACMC ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'ABRIL' && id_admin2 = '$id_admin_aus' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50') && (Mes0 = '$Enero' || Mes0 = '$Febrero' || Mes0 = '$Marzo' || Mes0 = '$Abril' || Mes0 = '$Mayo'|| Mes0 = '$Junio' || Mes0 = '$Julio' || Mes0 = '$Agosto' || Mes0 = '$Septiembre' || Mes0 = '$Octubre' || Mes0 = '$Noviembre' || Mes0 = '$Diciembre') && (Ano0 = '$A2020' || Ano0 = '$A2021' || Ano0 = '$A2022' || Ano0 = '$A2023')";
                        $resultado35 = $mysqli->query($sql);
                        while($row35 = mysqli_fetch_array($resultado35)) { 
                        $Diagnostico35 = $row35['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'ABRIL' && Diagnostico = '$Diagnostico35' && id_admin2 = '$id_admin_aus'";       
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios35 = $resultado['total']; 
                        echo $Diagnostico35.' ';
                        echo '('.$total_usuarios35.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Mayo_ACMC ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'MAYO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado36 = $mysqli->query($sql);
                        while($row36 = mysqli_fetch_array($resultado36)) { 
                        $Diagnostico36 = $row36['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'MAYO' && Diagnostico = '$Diagnostico36' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios36 = $resultado['total']; 
                        echo $Diagnostico36.' ';
                        echo '('.$total_usuarios36.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Junio_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'JUNIO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado37 = $mysqli->query($sql);
                        while($row37 = mysqli_fetch_array($resultado37)) { 
                        $Diagnostico37 = $row37['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'JUNIO' && Diagnostico = '$Diagnostico37' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios37 = $resultado['total']; 
                        echo '*'.$Diagnostico37.' ';
                        echo '('.$total_usuarios37.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Julio_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'JULIO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado38 = $mysqli->query($sql);
                        while($row38 = mysqli_fetch_array($resultado38)) { 
                        $Diagnostico38 = $row38['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'JULIO' && Diagnostico = '$Diagnostico26' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios38 = $resultado['total']; 
                        echo '*'.$Diagnostico38.' ';
                        echo '('.$total_usuarios38.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Agosto_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                            $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'AGOSTO' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                            $resultado39 = $mysqli->query($sql);
                            while($row39 = mysqli_fetch_array($resultado39)) { 
                            $Diagnostico39 = $row39['Diagnostico'];
                            $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'AGOSTO' && Diagnostico = '$Diagnostico39' && id_admin2 = '$id_admin_aus'";      
                            $sentencia = $connect->prepare($sql);
                            $sentencia->execute();
                            $resultado = $sentencia->fetch();
                            $total_usuarios39 = $resultado['total']; 
                            echo '*'.$Diagnostico39.' ';
                            echo '('.$total_usuarios39.')  '; 
                             } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Septiembre_ACMC ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'SEPTIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado40 = $mysqli->query($sql);
                        while($row40 = mysqli_fetch_array($resultado40)) { 
                        $Diagnostico40 = $row40['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'SEPTIEMBRE' && Diagnostico = '$Diagnostico40' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios40 = $resultado['total']; 
                        echo $Diagnostico40.' ';
                        echo '('.$total_usuarios40.')<br>'; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Octubre_ACMC ?> % </td>
                    <td style="text-align:left">
                         <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'OCTUBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado41 = $mysqli->query($sql);
                        while($row41 = mysqli_fetch_array($resultado41)) { 
                        $Diagnostico41 = $row41['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'OCTUBRE' && Diagnostico = '$Diagnostico41' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios41 = $resultado['total']; 
                        echo '*'.$Diagnostico41.' ';
                        echo '('.$total_usuarios41.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Noviembre_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'NOVIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado42 = $mysqli->query($sql);
                        while($row42 = mysqli_fetch_array($resultado42)) { 
                        $Diagnostico42 = $row42['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'NOVIEMBRE' && Diagnostico = '$Diagnostico42' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios42 = $resultado['total']; 
                        echo '*'.$Diagnostico42.' ';
                        echo '('.$total_usuarios42.')  '; 
                         } ?>
                    </td>     
                </tr>
                 <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_comun ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Diciembre_ACMC ?> % </td>
                    <td style="text-align:left">
                        <?php 
                        $sql = "SELECT DISTINCT Diagnostico FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'DICIEMBRE' && id_admin2 = '$id_admin_aus' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')  ";
                        $resultado43 = $mysqli->query($sql);
                        while($row43 = mysqli_fetch_array($resultado43)) { 
                        $Diagnostico43 = $row43['Diagnostico'];
                        $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $Year2 &&  (Tipo = 'Accidente común (A.C.)' || Tipo = 'Enfermedad general (E.G.)') && Mes = 'DICIEMBRE' && Diagnostico = '$Diagnostico43' && id_admin2 = '$id_admin_aus'";      
                        $sentencia = $connect->prepare($sql);
                        $sentencia->execute();
                        $resultado = $sentencia->fetch();
                        $total_usuarios43 = $resultado['total']; 
                        echo '*'.$Diagnostico43.' ';
                        echo '('.$total_usuarios43.')  '; 
                         } ?>
                    </td>     
                </tr>
            </table><br>
        </div>    
    </div>
    
    <div class="container">
        <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">RESUMEN GENERAL DE COSTOS ASUMIDOS</p><br>
            <table  class="table_ind2 table-sm table-striped" align="center" style="width:100%">
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>Asegurados ARL</th>
                        <th>Porcentaje</th>
                        <th>Asegurados EPS</th>
                        <th>Porcentaje</th>
                        <th>Asegurados AFP</th>
                        <th>Porcentaje</th>
                        <th>Asumidos Empresa</th>
                        <th>Porcentaje</th>
                    </tr>
                </thead>    
                 <tr>
                    <td id="mes">Enero</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT1 ?>)</span> $<?php echo number_format($Asegurados_AT_S1) ?> </td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT1_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG1 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S1) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG1_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP1 ?>)</span> $<?php echo number_format($Asegurados_AFP_S1) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP1_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG1 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S1) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG1_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT2 ?>)</span> $<?php echo number_format($Asegurados_AT_S2) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT2_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG2 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S2) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG2_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP2 ?>)</span> $<?php echo number_format($Asegurados_AFP_S2) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP2_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG2 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S2) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG2_porcentaje ?> %</td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT3 ?>)</span> $<?php echo number_format($Asegurados_AT_S3) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT3_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG3 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S3) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG3_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP3 ?>)</span> $<?php echo number_format($Asegurados_AFP_S3) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP3_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG3 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S3) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG3_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Abril</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT4 ?>)</span> $<?php echo number_format($Asegurados_AT_S4) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT4_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG4 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S4) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG4_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP4 ?>)</span> $<?php echo number_format($Asegurados_AFP_S4) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP4_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG4 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S4) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG4_porcentaje ?> %</td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT5 ?>)</span> $<?php echo number_format($Asegurados_AT_S5) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT5_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG5 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S5) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG5_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP5 ?>)</span> $<?php echo number_format($Asegurados_AFP_S5) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP5_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG5 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S5) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG5_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Junio</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT6 ?>)</span> $<?php echo number_format($Asegurados_AT_S6) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT6_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG6 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S6) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG6_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP6 ?>)</span> $<?php echo number_format($Asegurados_AFP_S6) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP6_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG6 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S6) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG6_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Julio</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT7 ?>)</span> $<?php echo number_format($Asegurados_AT_S7) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT7_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG7 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S7) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG7_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP7 ?>)</span> $<?php echo number_format($Asegurados_AFP_S7) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP7_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG7 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S7) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG7_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT8 ?>)</span> $<?php echo number_format($Asegurados_AT_S8) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT8_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG8 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S8) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG8_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP8 ?>)</span> $<?php echo number_format($Asegurados_AFP_S8) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP8_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG8 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S8) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG8_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT9 ?>)</span> $<?php echo number_format($Asegurados_AT_S9) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT9_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG9 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S9) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG9_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP9 ?>)</span> $<?php echo number_format($Asegurados_AFP_S9) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP9_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG9 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S9) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG9_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT10 ?>)</span> $<?php echo number_format($Asegurados_AT_S10) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT10_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG10 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S10) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG10_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP10 ?>)</span> $<?php echo number_format($Asegurados_AFP_S10) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP10_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG10 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S10) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG10_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT11 ?>)</span> $<?php echo number_format($Asegurados_AT_S11) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT11_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG11 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S11) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG11_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP11 ?>)</span> $<?php echo number_format($Asegurados_AFP_S11) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP11_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG11 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S11) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG11_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT12 ?>)</span> $<?php echo number_format($Asegurados_AT_S12) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT12_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG12 ?>)</span> $<?php echo number_format($Asegurados_AC_EG_S12) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG12_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP12 ?>)</span> $<?php echo number_format($Asegurados_AFP_S12) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP12_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG12 ?>)</span> $<?php echo number_format($Asumidos_AC_EG_S12) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG12_porcentaje ?> %</td>
                </tr>
                 <tr>
                    <td id="mes">Año 2020</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AT_T ?>)</span> $<?php echo number_format($Asegurados_AT_TS) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AT_T_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AC_EG_T ?>)</span> $<?php echo number_format($Asegurados_AC_EG_TS) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AC_EG_T_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asegurados_AFP_T ?>)</span> $<?php echo number_format($Asegurados_AFP_TS) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asegurados_AFP_T_porcentaje ?> %</td>
                    <td class="registro" style="text-align:right"><span style="float:left;color:#0077b3;font-family:verdana">(<?php echo $Asumidos_AC_EG_T ?>)</span> $<?php echo number_format($Asumidos_AC_EG_TS) ?></td>
                    <td class="registro" id="porcentaje"><?php echo $Asumidos_AC_EG_T_porcentaje ?> %</td>
                </tr>
            </table><br>
        </div>

        <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">RESUMEN GENERAL DE COSTOS ASUMIDOS POR EPS</p><br>
            <table  class="table_ind2 table-sm table-striped" align="center" style="width:100%">
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>Accidente Común</th>
                        <th>Porcentaje</th>
                        <th>Enfermedad General</th>
                        <th>Porcentaje</th>
                        <th>Licencia de Maternidad</th>
                        <th>Licencia de Paternidad</th>
                    </tr>
                </thead>    
                <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_comun ?>)</span></td>
                    <td class="registro"><?php echo $Enero_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Enero_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_general ?>)</span></td>
                    <td class="registro"><?php echo $Enero_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Enero_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Enero_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_comun ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Febrero_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_general ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Febrero_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_comun ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Marzo_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_general ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Marzo_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_comun ?>)</span></td>
                    <td class="registro"><?php echo $Abril_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Abril_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_general ?>)</span></td>
                    <td class="registro"><?php echo $Abril_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Abril_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Abril_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_comun ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Mayo_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_general ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Mayo_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_comun ?>)</span></td>
                    <td class="registro"><?php echo $Junio_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Junio_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_general ?>)</span></td>
                    <td class="registro"><?php echo $Junio_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Junio_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Junio_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_comun ?>)</span></td>
                    <td class="registro"><?php echo $Julio_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Julio_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_general ?>)</span></td>
                    <td class="registro"><?php echo $Julio_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Julio_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Julio_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_comun ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Agosto_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_general ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Agosto_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_comun ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Septiembre_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_general ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Septiembre_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_comun ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Octubre_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_general ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Octubre_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_comun ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Noviembre_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_general ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Noviembre_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_paternidad ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_comun_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_comun ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_comun_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Diciembre_general_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_general ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_general_2_porcentaje?> %</td>
                    <td class="registro"><?php echo $Diciembre_maternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_maternidad ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_paternidad_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_paternidad ?>)</span></td>
                </tr>
            </table><br>
        </div>
        
        <div class="col-md-12"><br>
        <p style="font-family:narrow;font-size:22px;letter-spacing:0.5px;text-align:center;color:#71788e">RESUMEN GENERAL DE COSTOS ASUMIDOS POR EMPRESA</p><br>
            <table  class="table_ind2 table-sm table-striped" align="center" style="width:100%">
                <thead>
                    <tr>
                        <th>MES</th>
                        <th>Accidente Común</th>
                        <th>Porcentaje</th>
                        <th>Enfermedad General</th>
                        <th>Porcentaje</th>
                        <th>Remunerados y/o ausentismo especial remunerado</th>
                        <th>Permiso y/o ausentismo especial no remunerado</th>
                    </tr>
                </thead>    
                <tr>
                    <td id="mes">Enero</td>
                    <td class="registro"><?php echo $Enero_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Enero_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Enero_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Enero_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Enero_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Enero_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Enero_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Febrero</td>
                    <td class="registro"><?php echo $Febrero_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Febrero_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Febrero_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Febrero_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Febrero_noremunerados ?>)</span>
                </tr>
                <tr>
                    <td id="mes">Marzo</td>
                    <td class="registro"><?php echo $Marzo_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Marzo_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Marzo_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Marzo_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Marzo_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Abril</td>
                    <td class="registro"><?php echo $Abril_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Abril_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Abril_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Abril_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Abril_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Abril_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Abril_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Mayo</td>
                    <td class="registro"><?php echo $Mayo_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Mayo_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Mayo_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Mayo_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Mayo_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Junio</td>
                    <td class="registro"><?php echo $Junio_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Junio_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Junio_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Junio_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Junio_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Junio_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Junio_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Julio</td>
                    <td class="registro"><?php echo $Julio_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Julio_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Julio_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Julio_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Julio_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Julio_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Julio_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Agosto</td>
                    <td class="registro"><?php echo $Agosto_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Agosto_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Agosto_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Agosto_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Agosto_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Septiembre</td>
                    <td class="registro"><?php echo $Septiembre_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Septiembre_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Septiembre_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Septiembre_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Septiembre_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Octubre</td>
                    <td class="registro"><?php echo $Octubre_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Octubre_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Octubre_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Octubre_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Octubre_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Noviembre</td>
                    <td class="registro"><?php echo $Noviembre_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Noviembre_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Noviembre_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Noviembre_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Noviembre_noremunerados ?>)</span></td>
                </tr>
                <tr>
                    <td id="mes">Diciembre</td>
                    <td class="registro"><?php echo $Diciembre_comun_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_comun_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_comun_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Diciembre_general_2_empresa ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_general_empresa ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_general_2_empresa_porcentaje ?> %</td>
                    <td class="registro"><?php echo $Diciembre_remunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_remunerados ?>)</span></td>
                    <td class="registro"><?php echo $Diciembre_noremunerados_2 ?> <span style="color:#0077b3;font-family:verdana">(<?php echo $Diciembre_noremunerados ?>)</span></td>
                </tr>
            </table><br>
        </div>

</div>    
<nav>
    <a href="#container" class="scroll"><i class="fa fa-angle-up"></i></a>
</nav>
<div class="container"><br>
    <div class="col-lg-4 col-lg-push-8" align="center">
        <p style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL &nbsp</span><a id="certificado" title="Certificado SSL" href="#costumModal12" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="52" height="50"/></a></p>
    </div>
    <div class="col-lg-8 col-lg-pull-4">
        <span style="font-family:verdana;color:#333333">Diseño&nbspy&nbspdesarrollo&nbspweb: <a href="" style="letter-spacing:2px;font-size:14px">PERFILAR</a></span><br> 
        <span style="font-family:verdana;color:#333333">Copyright © 2020 - Medellín (Colombia)</span>
    </div>
</div>
</section>
<div id="costumModal12" class="modal" data-easein="flipBounceYIn" data-backdrop="static">  
    <div class="modal-dialog modal-title" style="box-shadow:0px 4px 3px rgba(0,0,0,.4)">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="row" align="center" style="padding-left:10%;padding-right:10%"><br>
                <p style="line-height:1em;font-family:Narrow;color:#666666;font-size:30px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL</span></p>
                <p style="color:#999999;font-size:16px">Secure Sockets Layer (Capa de Conexión Segura)</p><br><br><p align="justify" style="line-height:1.8em">Es un protocolo que proporciona seguridad e integridad de datos en la comunicación en redes como la Internet. Los datos enviados vía una conexión SSL están protegidos por un cifrado, un mecanismo que evita el espionaje y manipulación de los datos transmitidos. Tener un SSL en su sitio hace que los usuarios no tengan desconfianza de proporcionar su información confidencial en un sitio web, por ej. número de tarjeta de crédito u otros datos de pagos para sitios web de comercio electrónico, u otra información personal que se comparte al registrarse en servicios habituales en línea.</span></p><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<div id="costumModal12" class="modal" data-easein="flipBounceYIn" data-backdrop="static">  
    <div class="modal-dialog modal-title" style="box-shadow:0px 4px 3px rgba(0,0,0,.4)">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="row" align="center" style="padding-left:10%;padding-right:10%"><br>
                <p style="line-height:1em;font-family:Narrow;color:#666666;font-size:30px;letter-spacing:1px;">Certificado <span style="color:#f58634">SSL</span></p>
                <p style="color:#999999;font-size:16px">Secure Sockets Layer (Capa de Conexión Segura)</p><br><br><p align="justify" style="line-height:1.8em">Es un protocolo que proporciona seguridad e integridad de datos en la comunicación en redes como la Internet. Los datos enviados vía una conexión SSL están protegidos por un cifrado, un mecanismo que evita el espionaje y manipulación de los datos transmitidos. Tener un SSL en su sitio hace que los usuarios no tengan desconfianza de proporcionar su información confidencial en un sitio web, por ej. número de tarjeta de crédito u otros datos de pagos para sitios web de comercio electrónico, u otra información personal que se comparte al registrarse en servicios habituales en línea.</span></p><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<div id="costumModal13" class="modal" data-easein="bounceLeftIn" data-backdrop="static">  
    <div class="modal-dialog modal-sm" style="box-shadow:0px 4px 3px rgba(0,0,0,.4);line-height: 2.8rem">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" id="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></span></button>
            </div>
            <div class="modal-body">
                   <p style="font-family:Moristonb;font-size:15px;color:#666666;text-align:center">Seleccione un año</p>
                   <table style="width:100%;text-align:center">
                    <tr>
                       <td><input type="submit" id="n_2018" class="nuevo3" value="2018" /></td>
                       <td><input type="submit" id="n_2019" class="nuevo3" value="2019" /></td>
                       <td><input type="submit" id="n_2020" class="nuevo3" value="2020" /></td>
                    </tr>
                    <tr>
                       <td><input type="submit" id="n_2021" class="nuevo3" value="2021" /></td>
                       <td><input type="submit" id="n_2022" class="nuevo3" value="2022" /></td>
                       <td><input type="submit" id="n_2023" class="nuevo3" value="2023" /></td>
                    </tr>
                    <tr>
                       <td><input type="submit" id="n_2024" class="nuevo3" value="2024" /></td>
                       <td><input type="submit" id="n_2025" class="nuevo3" value="2025" /></td>
                       <td><input type="submit" id="n_2026" class="nuevo3" value="2026" /></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<input type="hidden" id="delete_id"></input>
<input type="hidden" id="suma_extra"></input>
<input type="hidden" id="suma_extrae"></input>
<input type="hidden" id="suma_extra2"></input>
<input type="hidden" id="suma_extra2e"></input>
<input type="hidden" id="suma_intra"></input>
<input type="hidden" id="suma_intrae"></input>
<input type="hidden" id="suma_forma"></input>
<input type="hidden" id="suma_forma_ES"></input>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.min.js" ></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts2.js"></script>
<script src="<?php echo RUTA_JS ?>export-data.js"></script>
<script src="<?php echo RUTA_JS ?>exporting.js"></script>
<script src="<?php echo RUTA_JS ?>highcharts-more.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js" async="async"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js" async="async"></script>
<script src="<?php echo RUTA_JS ?>main.js" async="async"></script>
<script src="<?php echo RUTA_JS ?>ajax.js" async="async"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script>
    $(document).ready(function () {
        codigo();
        function codigo() {
            $.ajax({
                type: "post",
                url: "../codigo.php",
                success: function(response) {
                    const tasksR = JSON.parse(response);
                    let id_codigo = '';
                    tasksR.forEach(taskR => {
                        id_codigo += `${taskR.id_admin}`
                    });
                    $.ajax({
                        type: "post",
                        url: "../logo.php",
                        data: "id_codigo=" + id_codigo,
                        success: function (response) {
                            const tasks2 = JSON.parse(response);
                            let Razon= '';
                            let Nit= '';
                            let Archivo1= '';
                            tasks2.forEach(task2 => {
                                Razon += `${task2.Razon}`,
                                Nit += `${task2.Nit}`,
                                Archivo1 += `${task2.Archivo1}`
                            });
                            $('#Razon_').html(Razon);
                            $('#Nit_').html(Nit);
                            $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="100%" height="100%"></a></div>')
                        }
                    });
                }
            });
        } 
        
        //$("#costumModal13").modal("show")
         
         $(document).on('click', '#n_2018', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2018,
            };
            console.log(postData)
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2019', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2019,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2020', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2020,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2021', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2021,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2022', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2022,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2023', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2023,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2024', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2024,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2025', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2025,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });
         $(document).on('click', '#n_2026', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2026,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/consolidados_ausentismo";
            });
        });


    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");"shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
   var chart1 = Highcharts.chart('accidentalidad', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Tasa de Accidentalidad (T.A.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Porcentaje (%)',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_TA ?>, <?php echo $Febrero_TA ?>, <?php echo $Marzo_TA ?>, <?php echo $Abril_TA ?>, <?php echo $Mayo_TA ?>, <?php echo $Junio_TA ?>, <?php echo $Julio_TA ?>, <?php echo $Agosto_TA ?>, <?php echo $Septiembre_TA ?>, <?php echo $Octubre_TA ?>, <?php echo $Noviembre_TA ?>, <?php echo $Diciembre_TA ?>, <?php echo $Anual_TA ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano1').click(function () {
        chart1.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido1').click(function () {
        chart1.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar1').click(function () {
        chart1.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });
    var chart2 = Highcharts.chart('frecuencia', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Frecuencia de Accidentalidad (F.A.T.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Número de días',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_IFAT ?>, <?php echo $Febrero_IFAT ?>, <?php echo $Marzo_IFAT ?>, <?php echo $Abril_IFAT ?>, <?php echo $Mayo_IFAT ?>, <?php echo $Junio_IFAT ?>, <?php echo $Julio_IFAT ?>, <?php echo $Agosto_IFAT ?>, <?php echo $Septiembre_IFAT ?>, <?php echo $Octubre_IFAT ?>, <?php echo $Noviembre_IFAT ?>, <?php echo $Diciembre_IFAT ?>, <?php echo $Anual_IFAT ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano2').click(function () {
        chart2.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido2').click(function () {
        chart2.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar2').click(function () {
        chart2.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });
     var chart3 = Highcharts.chart('severidad', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Severidad de accidentalidad (S.A.T.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Número de días',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_ISAT ?>, <?php echo $Febrero_ISAT ?>, <?php echo $Marzo_ISAT ?>, <?php echo $Abril_ISAT ?>, <?php echo $Mayo_ISAT ?>, <?php echo $Junio_ISAT ?>, <?php echo $Julio_ISAT ?>, <?php echo $Agosto_ISAT ?>, <?php echo $Septiembre_ISAT ?>, <?php echo $Octubre_ISAT ?>, <?php echo $Noviembre_ISAT ?>, <?php echo $Diciembre_ISAT ?>, <?php echo $Anual_ISAT ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano3').click(function () {
        chart3.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido3').click(function () {
        chart3.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar3').click(function () {
        chart3.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });

    var chart5 = Highcharts.chart('mortalidad', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Tasa de Mortalidad (T.M.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Porcentaje (%)',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_TM ?>, <?php echo $Febrero_TM ?>, <?php echo $Marzo_TM ?>, <?php echo $Abril_TM ?>, <?php echo $Mayo_TM ?>, <?php echo $Junio_TM ?>, <?php echo $Julio_TM ?>, <?php echo $Agosto_TM ?>, <?php echo $Septiembre_TM ?>, <?php echo $Octubre_TM ?>, <?php echo $Noviembre_TM ?>, <?php echo $Diciembre_TM ?>, <?php echo $Anual_TM ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano5').click(function () {
        chart5.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido5').click(function () {
        chart5.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar5').click(function () {
        chart5.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });
     var chart6 = Highcharts.chart('enfermedad', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Incidencia de enfermedad laboral (Incid. E.L.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Porcentaje (%)',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_EL2 ?>, <?php echo $Febrero_EL2 ?>, <?php echo $Marzo_EL2 ?>, <?php echo $Abril_EL2 ?>, <?php echo $Mayo_EL2 ?>, <?php echo $Junio_EL2 ?>, <?php echo $Julio_EL2 ?>, <?php echo $Agosto_EL2 ?>, <?php echo $Septiembre_EL2 ?>, <?php echo $Octubre_EL2 ?>, <?php echo $Noviembre_EL2 ?>, <?php echo $Diciembre_EL2 ?>, <?php echo $Anual_EL2 ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano6').click(function () {
        chart6.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido6').click(function () {
        chart6.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar6').click(function () {
        chart6.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });

    var chart8 = Highcharts.chart('prevalencia', {
       chart: {
            backgroundColor: false,
       },
       title: {
            text: 'Prevalencia de enfermedad laboral (Prev. E.L.)',
            style: {
                   fontFamily: 'verdana',
                   fontSize: '18px'
            }   
        },
        subtitle: {
            text: '<p><span style="font-size:16px"><?php echo $Razon ?>    </span><span>Nit:<?php echo $Nit ?>   </span></p>',
            style: {
                  fontFamily: 'verdana',
                  fontSize: '14px'
            }
        },
        xAxis: {
            categories: ['En.', 'Febr.', 'Mzo.', 'Abr.', 'My.', 'Jun.', 'Jul.', 'Ag.', 'Sept.', 'Oct.', 'Nov.', 'Dic.', 'año (<?php echo $Year2 ?>)'],
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#333333',
                }
            },
        },
        yAxis: {
            min: 0,
            title: {
                  text: 'Porcentaje (%)',
                  style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
             },
            labels: {
                style: {
                    fontSize: '13px',
                    fontFamily: 'verdana',
                    color: '#71788e',
                }
            },
        },
        credits: {
            enabled: false
        },
       series: [{
            type: 'column',
            colorByPoint: true,
            data: [<?php echo $Enero_EL3 ?>, <?php echo $Febrero_EL3 ?>, <?php echo $Marzo_EL3 ?>, <?php echo $Abril_EL3 ?>, <?php echo $Mayo_EL3 ?>, <?php echo $Junio_EL3 ?>, <?php echo $Julio_EL3 ?>, <?php echo $Agosto_EL3 ?>, <?php echo $Septiembre_EL3 ?>, <?php echo $Octubre_EL3 ?>, <?php echo $Noviembre_EL3 ?>, <?php echo $Diciembre_EL3 ?>, <?php echo $Anual_EL3 ?>],
            showInLegend: false,
            tooltip: {
                headerFormat: '<span style="color:{point.color}">\u25CF</span>   <span style="font-size:14px"><b>{point.key}</b></span>',
                pointFormat: '<br>Porcentaje: <b>{point.y} %</b><br/>'
            },
        }]
    });
    $('#plano8').click(function () {
        chart8.update({
            chart: {
                inverted: false,
                polar: false
            },
        });
    });
    $('#invertido8').click(function () {
        chart8.update({
            chart: {
                inverted: true,
                polar: false
            },
        });
    });
    $('#polar8').click(function () {
        chart8.update({
            chart: {
                inverted: false,
                polar: true
            },
        });
    });
});  
</script>
</body>
</html>
