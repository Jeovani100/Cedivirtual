<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ausentismo-indicadores</title>
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
    $sql = "SELECT * FROM controles_ausentismo2 WHERE id_admin = '$id_admin_aus' && Year = 2022 && Centro_ !='' && Centro_existe = '#e7744f'";
    $resultado_centro = $mysqli->query($sql);
    
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
    
    $Enero_HHTP = Consolidados::Enero_HHTP(conexion::obtener_conexion());
    $Febrero_HHTP = Consolidados::Febrero_HHTP(conexion::obtener_conexion());
    $Marzo_HHTP = Consolidados::Marzo_HHTP(conexion::obtener_conexion());
    $Abril_HHTP = Consolidados::Abril_HHTP(conexion::obtener_conexion());
    $Mayo_HHTP = Consolidados::Mayo_HHTP(conexion::obtener_conexion());
    $Junio_HHTP = Consolidados::Junio_HHTP(conexion::obtener_conexion());
    $Julio_HHTP =Consolidados::Julio_HHTP(conexion::obtener_conexion());
    $Agosto_HHTP =Consolidados::Agosto_HHTP(conexion::obtener_conexion());
    $Septiembre_HHTP = Consolidados::Septiembre_HHTP(conexion::obtener_conexion());
    $Octubre_HHTP = Consolidados::Octubre_HHTP(conexion::obtener_conexion());
    $Noviembre_HHTP = Consolidados::Noviembre_HHTP(conexion::obtener_conexion());
    $Diciembre_HHTP = Consolidados::Diciembre_HHTP(conexion::obtener_conexion());
    $Anual_HHTP = Consolidados::Anual_HHTP(conexion::obtener_conexion());

    $AT1 = Consolidados::AT1(conexion::obtener_conexion());
    $AT2 = Consolidados::AT2(conexion::obtener_conexion());
    $AT3 = Consolidados::AT3(conexion::obtener_conexion());
    $AT4 = Consolidados::AT4(conexion::obtener_conexion());
    $AT5 = Consolidados::AT5(conexion::obtener_conexion());
    $AT6 = Consolidados::AT6(conexion::obtener_conexion());
    $AT7 = Consolidados::AT7(conexion::obtener_conexion());
    $AT8 = Consolidados::AT8(conexion::obtener_conexion());
    $AT9 = Consolidados::AT9(conexion::obtener_conexion());
    $AT10 = Consolidados::AT10(conexion::obtener_conexion());
    $AT11 = Consolidados::AT11(conexion::obtener_conexion());
    $AT12 = Consolidados::AT12(conexion::obtener_conexion());
    $AT = ($AT1+$AT2+$AT3+$AT4+$AT5+$AT6+$AT7+$AT8+$AT9+$AT10+$AT11+$AT12);
    
    $ATM1 = Consolidados::ATM1(conexion::obtener_conexion());
    $ATM2 = Consolidados::ATM2(conexion::obtener_conexion());
    $ATM3 = Consolidados::ATM3(conexion::obtener_conexion());
    $ATM4 = Consolidados::ATM4(conexion::obtener_conexion());
    $ATM5 = Consolidados::ATM5(conexion::obtener_conexion());
    $ATM6 = Consolidados::ATM6(conexion::obtener_conexion());
    $ATM7 = Consolidados::ATM7(conexion::obtener_conexion());
    $ATM8 = Consolidados::ATM8(conexion::obtener_conexion());
    $ATM9 = Consolidados::ATM9(conexion::obtener_conexion());
    $ATM10 = Consolidados::ATM10(conexion::obtener_conexion());
    $ATM11 = Consolidados::ATM11(conexion::obtener_conexion());
    $ATM12 = Consolidados::ATM12(conexion::obtener_conexion());
    $ATM = ($ATM1+$ATM2+$ATM3+$ATM4+$ATM5+$ATM6+$ATM7+$ATM8+$ATM9+$ATM10+$ATM11+$ATM12);
    $DI1 = Consolidados::DI1(conexion::obtener_conexion());
    $DI2 = Consolidados::DI2(conexion::obtener_conexion());
    $DI3 = Consolidados::DI3(conexion::obtener_conexion());
    $DI4 = Consolidados::DI4(conexion::obtener_conexion());
    $DI5 = Consolidados::DI5(conexion::obtener_conexion());
    $DI6 = Consolidados::DI6(conexion::obtener_conexion());
    $DI7 = Consolidados::DI7(conexion::obtener_conexion());
    $DI8 = Consolidados::DI8(conexion::obtener_conexion());
    $DI9 = Consolidados::DI9(conexion::obtener_conexion());
    $DI10 = Consolidados::DI10(conexion::obtener_conexion());
    $DI11 = Consolidados::DI11(conexion::obtener_conexion());
    $DI12 = Consolidados::DI12(conexion::obtener_conexion());
    $DI = ($DI1+$DI2+$DI3+$DI4+$DI5+$DI6+$DI7+$DI8+$DI9+$DI10+$DI11+$DI12);
    $DTI1 = Consolidados::DTI1(conexion::obtener_conexion());
    $DTI2 = Consolidados::DTI2(conexion::obtener_conexion());
    $DTI3 = Consolidados::DTI3(conexion::obtener_conexion());
    $DTI4 = Consolidados::DTI4(conexion::obtener_conexion());
    $DTI5 = Consolidados::DTI5(conexion::obtener_conexion());
    $DTI6 = Consolidados::DTI6(conexion::obtener_conexion());
    $DTI7 = Consolidados::DTI7(conexion::obtener_conexion());
    $DTI8 = Consolidados::DTI8(conexion::obtener_conexion());
    $DTI9 = Consolidados::DTI9(conexion::obtener_conexion());
    $DTI10 = Consolidados::DTI10(conexion::obtener_conexion());
    $DTI11 = Consolidados::DTI11(conexion::obtener_conexion());
    $DTI12 = Consolidados::DTI12(conexion::obtener_conexion());
    $DTI = ($DTI1+$DTI2+$DTI3+$DTI4+$DTI5+$DTI6+$DTI7+$DTI8+$DTI9+$DTI10+$DTI11+$DTI12);
    $EL1 = Consolidados::EL1(conexion::obtener_conexion());
    $EL2 = Consolidados::EL2(conexion::obtener_conexion());
    $EL3 = Consolidados::EL3(conexion::obtener_conexion());
    $EL4 = Consolidados::EL4(conexion::obtener_conexion());
    $EL5 = Consolidados::EL5(conexion::obtener_conexion());
    $EL6 = Consolidados::EL6(conexion::obtener_conexion());
    $EL7 = Consolidados::EL7(conexion::obtener_conexion());
    $EL8 = Consolidados::EL8(conexion::obtener_conexion());
    $EL9 = Consolidados::EL9(conexion::obtener_conexion());
    $EL10 = Consolidados::EL10(conexion::obtener_conexion());
    $EL11 = Consolidados::EL11(conexion::obtener_conexion());
    $EL12 = Consolidados::EL12(conexion::obtener_conexion());
    $EL = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8+$EL9+$EL10+$EL11+$EL12);
    $ELNA1 = $EL1;
    $ELNA2 = ($EL1+$EL2);
    $ELNA3 = ($EL1+$EL2+$EL3);
    $ELNA4 = ($EL1+$EL2+$EL3+$EL4);
    $ELNA5 = ($EL1+$EL2+$EL3+$EL4+$EL5);
    $ELNA6 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6);
    $ELNA7 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7);
    $ELNA8 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8);
    $ELNA9 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8+$EL9);
    $ELNA10 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8+$EL9+$EL10);
    $ELNA11 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8+$EL9+$EL10+$EL11);
    $ELNA12 = ($EL1+$EL2+$EL3+$EL4+$EL5+$EL6+$EL7+$EL8+$EL9+$EL10+$EL11+$EL12);
    $DIEL1 = Consolidados::DIEL1(conexion::obtener_conexion());
    $DIEL2 = Consolidados::DIEL2(conexion::obtener_conexion());
    $DIEL3 = Consolidados::DIEL3(conexion::obtener_conexion());
    $DIEL4 = Consolidados::DIEL4(conexion::obtener_conexion());
    $DIEL5 = Consolidados::DIEL5(conexion::obtener_conexion());
    $DIEL6 = Consolidados::DIEL6(conexion::obtener_conexion());
    $DIEL7 = Consolidados::DIEL7(conexion::obtener_conexion());
    $DIEL8 = Consolidados::DIEL8(conexion::obtener_conexion());
    $DIEL9 = Consolidados::DIEL9(conexion::obtener_conexion());
    $DIEL10 = Consolidados::DIEL10(conexion::obtener_conexion());
    $DIEL11 = Consolidados::DIEL11(conexion::obtener_conexion());
    $DIEL12 = Consolidados::DIEL12(conexion::obtener_conexion());
    $DIEL = ($DIEL1+$DIEL2+$DIEL3+$DIEL4+$DIEL5+$DIEL6+$DIEL7+$DIEL8+$DIEL9+$DIEL10+$DIEL11+$DIEL12);
    $AC1 = Consolidados::AC1(conexion::obtener_conexion());
    $AC2 = Consolidados::AC2(conexion::obtener_conexion());
    $AC3 = Consolidados::AC3(conexion::obtener_conexion());
    $AC4 = Consolidados::AC4(conexion::obtener_conexion());
    $AC5 = Consolidados::AC5(conexion::obtener_conexion());
    $AC6 = Consolidados::AC6(conexion::obtener_conexion());
    $AC7 = Consolidados::AC7(conexion::obtener_conexion());
    $AC8 = Consolidados::AC8(conexion::obtener_conexion());
    $AC9 = Consolidados::AC9(conexion::obtener_conexion());
    $AC10 = Consolidados::AC10(conexion::obtener_conexion());
    $AC11 = Consolidados::AC11(conexion::obtener_conexion());
    $AC12 = Consolidados::AC12(conexion::obtener_conexion());
    $AC = ($AC1+$AC2+$AC3+$AC4+$AC5+$AC6+$AC7+$AC8+$AC9+$AC10+$AC11+$AC12);
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
        color:#278b85;
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

    .container-fluid {
        position:fixed!important;
        right:0;
        bottom:0!important;
        z-index:3!important;
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
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
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
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .table_ind th {
        background: -webkit-linear-gradient(to top, #4f5463,#e7744f);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:14px;
        text-align:center;
        padding:0.2em!important;
        border:1px solid #71788e!important;
        padding:0.5em;
    }
    .table_ind td {
        text-align:left;
        border:1px solid #71788e!important;
        vertical-align:middle!important;
        height:5em;
        padding:0.5em;
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
        text-align:center!important;
        padding:0!important;
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
    .registro p {
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
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;      
    }
    #registro input {
        width:270px;
        height: 35px;
        font-family:verdana;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px!important;
    }
    #registro select {
        width: 270px!important;
        height: 35px;
        font-family:verdana;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border-color:#71788e!important;
        border-width:1px!important;
    }
    #registro textarea {
        border: none;
        width:270px!important;
        font-family:verdana;
        height: 50px;
        padding-left: 15px;
        background:#dddddd;
        border-radius:0px;
        align-content:left;
    }
    .clientes  {
        width:270px;
        text-align:left;
        color:#333333;
        font-family:verdanabi;
        font-size:13px;
        margin-top:0.8em;
    }
    input[type="file"]#file-9,
    input[type="file"]#file-8 {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        color: #999999;
        font-family:verdana;
        font-size:13px;
        letter-spacing:0.5px;
         border: 1px solid #71788e;
        background-color: #fff;
        padding: 0;
    }
    .inputfile-8 + label span {
        padding: 0.325rem 1.25rem;
        font-family:verdana;
        font-size:14px;
    }
    .inputfile-8 + label strong {
         padding: 0.325rem 1.25rem;
        height: 100%;
        color: #000000;
        font-family:verdanabi;
        background-color: #f2f2f2;
        display: inline-block;
        letter-spacing:0.3px;
    }
    .inputfile-8:focus + label strong,
    .inputfile-8.has-focus + label strong,
    .inputfile-8 + label:hover strong {
        background-color: #cccccc;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
        display: block;
        }
    }
    #foto_empleado {
        width:22em;
        height:22em;
        object-fit:cover;
        padding:3px; 
        background: linear-gradient(to right, #e7744f, #3e4095);
    }
    #foto_empresa {
        width:14em;
        height:14em;
        object-fit:scale-down;
    }
    .numerador{
        vertical-align: 0.7ex;
    }
    .denominador {
        vertical-align: -0.7ex;
    }
    .task-contador {
        font-family:Moristonb;
        color: #666666;
        background:transparent;
        border:1px solid #71788e;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-contador:hover, .submit:hover {
        color:#008000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
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
                        <a class="active" href="<?php echo RUTA_IND_AUSENTISMO ?>">
                           <i class="fa fa-list-ul"></i>
                           <span>Indicadores</span>
                        </a>
                  </li>
                  <li class="sub-menu">
                        <a href="<?php echo RUTA_CONS_AUSENTISMO ?>">
                           <i class="fa fa-bar-chart"></i>
                           <span>Consolidados</span>
                       </a>
                  </li><br>
                </ul>
            </div>
        </aside>
    </header>
</section>    
<div class="container" class="registro" style="min-height:50em;text-align:center;color:#333333"><br><br><br>
    <p style="font-family:verdanab;font-size:26px;color:#333333;text-align:center;margin:0">AUSENTISMO LABORAL</p><br>
    <h4 style="font-family:Moristonb;text-align:center">INDICADORES GENERALES</h4>
    <div class="container">
        <table id="buscar" style="float:right">
            <tr>
                <td style="float:right;font-family:Moristonb;font-size:14px;color:#666666">Año: <button  href="#costumModal13" data-toggle="modal" class="task-contador" type="submit" align="center"  style="width:4em!important;height:30px!important;font-size:14px;padding:0!important" data-title="Visitas al sitio"><?php echo $Year2 ?></button></td>
            </tr>
        </table><br>
    </div>
        <table  class="table_ind table-sm" align="center"><br>
            <thead>
                <tr>
                    <th COLSPAN=2 style="width:28%!important"><span class="numerador">Período</span>/<span class="denominador">Variable</span></th>
                    <th style="width:4em">En.</th>
                    <th style="width:4em">Febr.</th>
                    <th style="width:4em">Mzo.</th>
                    <th style="width:4em">Abr.</th>
                    <th style="width:4em">My.</th>
                    <th style="width:4em">Jun.</th>
                    <th style="width:4em">Jul.</th>
                    <th style="width:4em">Ag.</th>
                    <th style="width:4em">Sept.</th>
                    <th style="width:4em">Oct.</th>
                    <th style="width:4em">Nov.</th>
                    <th style="width:4em">Dic.</th>
                    <th style="font-family:verdanab;width:4em">Anual</th>
                </tr>
            </thead>    
            <tr>
                <td style="font-family:verdanab" >N° total de trabajadores</td>
                <td style="font-family:verdanab;text-align:center">N.N.T.</td>
                <td class="registro"><p id="enero_NNT" rows="1" value=""/><?php echo $Enero_NNT ?></p></td>
                <td class="registro"><p id="febrero_NNT" rows="1" value=""/><?php echo $Febrero_NNT ?></p></td>
                <td class="registro"><p id="marzo_NNT" rows="1" value=""/><?php echo $Marzo_NNT ?></p></td>
                <td class="registro"><p id="abril_NNT" rows="1" value=""/><?php echo $Abril_NNT ?></p></td>
                <td class="registro"><p id="mayo_NNT" rows="1" value=""/><?php echo $Mayo_NNT ?></p></td>
                <td class="registro"><p id="junio_NNT" rows="1" value=""/><?php echo $Junio_NNT ?></p></td>
                <td class="registro"><p id="julio_NNT" rows="1" value=""/><?php echo $Julio_NNT ?></p></td>
                <td class="registro"><p id="agosto_NNT" rows="1" value=""/><?php echo $Agosto_NNT ?></p></td>
                <td class="registro"><p id="septiembre_NNT" rows="1" value=""/><?php echo $Septiembre_NNT ?></p></td>
                <td class="registro"><p id="octubre_NNT" rows="1" value=""/><?php echo $Octubre_NNT ?></p></td>
                <td class="registro"><p id="noviembre_NNT" rows="1" value=""/><?php echo $Noviembre_NNT ?></p></td>
                <td class="registro"><p id="diciembre_NNT" rows="1" value=""/><?php echo $Diciembre_NNT ?></p></td>
                <td class="registro" style="font-family:verdanab"><p id="anual_NNT" rows="1" value=""/><?php echo $Anual_NNT ?></p></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° de horas extras en el mes</td>
                <td style="font-family:verdanab;text-align:center">H.E.</td>
                <td class="registro"><p id="enero_HE" rows="1" value=""/><?php echo $Enero_HE ?></p></td>
                <td class="registro"><p id="febrero_HE" rows="1" value=""/><?php echo $Febrero_HE ?></p></td>
                <td class="registro"><p id="marzo_HE" rows="1" value=""/><?php echo $Marzo_HE ?></p></td>
                <td class="registro"><p id="abril_HE" rows="1" value=""/><?php echo $Abril_HE ?></p></td>
                <td class="registro"><p id="mayo_HE" rows="1" value=""/><?php echo $Mayo_HE ?></p></td>
                <td class="registro"><p id="junio_HE" rows="1" value=""/><?php echo $Junio_HE ?></p></td>
                <td class="registro"><p id="julio_HE" rows="1" value=""/><?php echo $Julio_HE ?></p></td>
                <td class="registro"><p id="agosto_HE" rows="1" value=""/><?php echo $Agosto_HE ?></p></td>
                <td class="registro"><p id="septiembre_HE" rows="1" value=""/><?php echo $Septiembre_HE ?></p></td>
                <td class="registro"><p id="octubre_HE" rows="1" value=""/><?php echo $Octubre_HE ?></p></td>
                <td class="registro"><p id="noviembre_HE" rows="1" value=""/><?php echo $Noviembre_HE ?></p></td>
                <td class="registro"><p id="diciembre_HE" rows="1" value=""/><?php echo $Diciembre_HE ?></p></td>
                <td class="registro" style="font-family:verdanab"><p id="anual_HE" rows="1" value=""/><?php echo $Anual_HE ?></p></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° total de horas hombre trabajadas (H.H.T.) promedio</td>
                <td style="font-family:verdanab;text-align:center">H.H.T.P.</td>
                <td class="registro"><p style="margin-top:10px" id="enero_HHTP"><?php echo $Enero_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="febrero_HHTP"><?php echo $Febrero_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="marzo_HHTP"><?php echo $Marzo_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="abril_HHTP"><?php echo $Abril_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="mayo_HHTP"><?php echo $Mayo_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="junio_HHTP"><?php echo $Junio_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="julio_HHTP"><?php echo $Julio_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="agosto_HHTP"><?php echo $Agosto_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="septiembre_HHTP"><?php echo $Septiembre_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="octubre_HHTP"><?php echo $Octubre_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="noviembre_HHTP"><?php echo $Noviembre_HHTP ?></p></td>
                <td class="registro"><p style="margin-top:10px" id="diciembre_HHTP"><?php echo $Diciembre_HHTP ?></p></td>
                <td class="registro"><p style="font-family:verdanab;margin-top:10px" id="anual_HHTP"/><?php echo $Anual_HHTP ?></p></td>
            </tr>
            <tr>
                <td COLSPAN=15 style="font-family:verdanab;text-align:center">RESUMEN DEL AUSENTISMO Y DÍAS DE INCAPACIDAD</td>
            </tr>
            <tr style="background:#e0deed">
                <td style="font-family:verdanab">N° de accidentes de trabajo</td>
                <td style="font-family:verdanab;text-align:center">A.T.</td>
                <td class="registro"><?php echo $AT1 ?></td>
                <td class="registro"><?php echo $AT2 ?></td>
                <td class="registro"><?php echo $AT3 ?></td>
                <td class="registro"><?php echo $AT4 ?></td>
                <td class="registro"><?php echo $AT5 ?></td>
                <td class="registro"><?php echo $AT6 ?></td>
                <td class="registro"><?php echo $AT7 ?></td>
                <td class="registro"><?php echo $AT8 ?></td>
                <td class="registro"><?php echo $AT9 ?></td>
                <td class="registro"><?php echo $AT10 ?></td>
                <td class="registro"><?php echo $AT11 ?></td>
                <td class="registro"><?php echo $AT12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $AT ?></td>
            </tr>
            <tr style="background:#e0deed">
                <td style="font-family:verdanab">N° total de días de incapacidad por accidentes de trabajo</td>
                <td style="font-family:verdanab;text-align:center">D.I.A.T.</td>
                <td class="registro"><?php echo $DTI1 ?></td>
                <td class="registro"><?php echo $DTI2 ?></td>
                <td class="registro"><?php echo $DTI3 ?></td>
                <td class="registro"><?php echo $DTI4 ?></td>
                <td class="registro"><?php echo $DTI5 ?></td>
                <td class="registro"><?php echo $DTI6 ?></td>
                <td class="registro"><?php echo $DTI7 ?></td>
                <td class="registro"><?php echo $DTI8 ?></td>
                <td class="registro"><?php echo $DTI9 ?></td>
                <td class="registro"><?php echo $DTI10 ?></td>
                <td class="registro"><?php echo $DTI11 ?></td>
                <td class="registro"><?php echo $DTI12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $DTI ?></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° de accidentes de trabajo mortales</td>
                <td style="font-family:verdanab;text-align:center">A.T.M.</td>
                <td class="registro"><?php echo $ATM1 ?></td>
                <td class="registro"><?php echo $ATM2 ?></td>
                <td class="registro"><?php echo $ATM3 ?></td>
                <td class="registro"><?php echo $ATM4 ?></td>
                <td class="registro"><?php echo $ATM5 ?></td>
                <td class="registro"><?php echo $ATM6 ?></td>
                <td class="registro"><?php echo $ATM7 ?></td>
                <td class="registro"><?php echo $ATM8 ?></td>
                <td class="registro"><?php echo $ATM9 ?></td>
                <td class="registro"><?php echo $ATM10 ?></td>
                <td class="registro"><?php echo $ATM11 ?></td>
                <td class="registro"><?php echo $ATM12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $ATM ?></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° de enfermedades laborales</td>
                <td style="font-family:verdanab;text-align:center">E.L.</td>
                <td class="registro"><?php echo $EL1 ?></td>
                <td class="registro"><?php echo $EL2 ?></td>
                <td class="registro"><?php echo $EL3 ?></td>
                <td class="registro"><?php echo $EL4 ?></td>
                <td class="registro"><?php echo $EL5 ?></td>
                <td class="registro"><?php echo $EL6 ?></td>
                <td class="registro"><?php echo $EL7 ?></td>
                <td class="registro"><?php echo $EL8 ?></td>
                <td class="registro"><?php echo $EL9 ?></td>
                <td class="registro"><?php echo $EL10 ?></td>
                <td class="registro"><?php echo $EL11 ?></td>
                <td class="registro"><?php echo $EL12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $EL ?></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° de enfermedades laborales nuevas y antiguas</td>
                <td style="font-family:verdanab;text-align:center">E.L.N.A.</td>
                <td class="registro"><?php echo $ELNA1 ?></td>
                <td class="registro"><?php echo $ELNA2 ?></td>
                <td class="registro"><?php echo $ELNA3 ?></td>
                <td class="registro"><?php echo $ELNA4 ?></td>
                <td class="registro"><?php echo $ELNA5 ?></td>
                <td class="registro"><?php echo $ELNA6 ?></td>
                <td class="registro"><?php echo $ELNA7 ?></td>
                <td class="registro"><?php echo $ELNA8 ?></td>
                <td class="registro"><?php echo $ELNA9 ?></td>
                <td class="registro"><?php echo $ELNA10 ?></td>
                <td class="registro"><?php echo $ELNA11 ?></td>
                <td class="registro"><?php echo $ELNA12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $ELNA12 ?></td>
            </tr>
            <tr>
                <td style="font-family:verdanab">N° de días de incapacidad por enfermedad laboral</td>
                <td style="font-family:verdanab;text-align:center">D.I.</td>
                <td class="registro"><?php echo $DIEL1 ?></td>
                <td class="registro"><?php echo $DIEL2 ?></td>
                <td class="registro"><?php echo $DIEL3 ?></td>
                <td class="registro"><?php echo $DIEL4 ?></td>
                <td class="registro"><?php echo $DIEL5 ?></td>
                <td class="registro"><?php echo $DIEL6 ?></td>
                <td class="registro"><?php echo $DIEL7 ?></td>
                <td class="registro"><?php echo $DIEL8 ?></td>
                <td class="registro"><?php echo $DIEL9 ?></td>
                <td class="registro"><?php echo $DIEL10 ?></td>
                <td class="registro"><?php echo $DIEL11 ?></td>
                <td class="registro"><?php echo $DIEL12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $DIEL ?></td>
            </tr>
            <tr style="background:#e6f7ff">
                <td style="font-family:verdanab">N° de accidentes comúnes</td>
                <td style="font-family:verdanab;text-align:center">A.C.</td>
                <td class="registro"><?php echo $AC1 ?></td>
                <td class="registro"><?php echo $AC2 ?></td>
                <td class="registro"><?php echo $AC3 ?></td>
                <td class="registro"><?php echo $AC4 ?></td>
                <td class="registro"><?php echo $AC5 ?></td>
                <td class="registro"><?php echo $AC6 ?></td>
                <td class="registro"><?php echo $AC7 ?></td>
                <td class="registro"><?php echo $AC8 ?></td>
                <td class="registro"><?php echo $AC9 ?></td>
                <td class="registro"><?php echo $AC10 ?></td>
                <td class="registro"><?php echo $AC11 ?></td>
                <td class="registro"><?php echo $AC12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $AC ?></td>
            </tr>
            <tr style="background:#e6f7ff">
                <td style="font-family:verdanab">N° de días de incapacidad por accidentes comúnes</td>
                <td style="font-family:verdanab;text-align:center">D.I.A.C.</td>
                <td class="registro"><?php echo $DIAC1 ?></td>
                <td class="registro"><?php echo $DIAC2 ?></td>
                <td class="registro"><?php echo $DIAC3 ?></td>
                <td class="registro"><?php echo $DIAC4 ?></td>
                <td class="registro"><?php echo $DIAC5 ?></td>
                <td class="registro"><?php echo $DIAC6 ?></td>
                <td class="registro"><?php echo $DIAC7 ?></td>
                <td class="registro"><?php echo $DIAC8 ?></td>
                <td class="registro"><?php echo $DIAC9 ?></td>
                <td class="registro"><?php echo $DIAC10 ?></td>
                <td class="registro"><?php echo $DIAC11 ?></td>
                <td class="registro"><?php echo $DIAC12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $DIAC ?></td>
            </tr>
            <tr style="background:#ffe6e6">
                <td style="font-family:verdanab">N° de enfermedades generales</td>
                <td style="font-family:verdanab;text-align:center">E.G.</td>
                <td class="registro"><?php echo $EG1 ?></td>
                <td class="registro"><?php echo $EG2 ?></td>
                <td class="registro"><?php echo $EG3 ?></td>
                <td class="registro"><?php echo $EG4 ?></td>
                <td class="registro"><?php echo $EG5 ?></td>
                <td class="registro"><?php echo $EG6 ?></td>
                <td class="registro"><?php echo $EG7 ?></td>
                <td class="registro"><?php echo $EG8 ?></td>
                <td class="registro"><?php echo $EG9 ?></td>
                <td class="registro"><?php echo $EG10 ?></td>
                <td class="registro"><?php echo $EG11 ?></td>
                <td class="registro"><?php echo $EG12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $EG ?></td>
            </tr>
            <tr style="background:#ffe6e6">
                <td style="font-family:verdanab">N° de días de incapacidad por enfermedades generales</td>
                <td style="font-family:verdanab;text-align:center">D.I.E.G.</td>
                <td class="registro"><?php echo $DIEG1 ?></td>
                <td class="registro"><?php echo $DIEG2 ?></td>
                <td class="registro"><?php echo $DIEG3 ?></td>
                <td class="registro"><?php echo $DIEG4 ?></td>
                <td class="registro"><?php echo $DIEG5 ?></td>
                <td class="registro"><?php echo $DIEG6 ?></td>
                <td class="registro"><?php echo $DIEG7 ?></td>
                <td class="registro"><?php echo $DIEG8 ?></td>
                <td class="registro"><?php echo $DIEG9 ?></td>
                <td class="registro"><?php echo $DIEG10 ?></td>
                <td class="registro"><?php echo $DIEG11 ?></td>
                <td class="registro"><?php echo $DIEG12 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $DIEG ?></td>
            </tr>
            <!--<tr>
                <td style="font-family:verdanab">Enfermedad por COVID-19</td>
                <td style="font-family:verdanab;text-align:center">C-19</td>
                <td class="registro"><?php echo $C191 ?></td>
                <td class="registro"><?php echo $C192 ?></td>
                <td class="registro"><?php echo $C193 ?></td>
                <td class="registro"><?php echo $C194 ?></td>
                <td class="registro"><?php echo $C195 ?></td>
                <td class="registro"><?php echo $C196 ?></td>
                <td class="registro"><?php echo $C197 ?></td>
                <td class="registro"><?php echo $C198 ?></td>
                <td class="registro"><?php echo $C199 ?></td>
                <td class="registro"><?php echo $C1910 ?></td>
                <td class="registro"><?php echo $C1911 ?></td>
                <td class="registro"><?php echo $C1912 ?></td>
                <td class="registro" style="font-family:verdanab"><?php echo $C19 ?></td>
            </tr>-->
        </table><br>
    </div>>
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
<div id="costumModal8" class="modal" data-easein="bounceLeftIn" data-backdrop="static">  
    <div class="modal-dialog modal-sm" style="box-shadow:0px 4px 3px rgba(0,0,0,.4);margin-left:0;margin-top:0px;line-height: 2.8rem">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff;opacity:0.9">
            <div class="modal-header">
                <button type="button" id="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></span></button>
            </div>
            <div class="modal-body" id="demo">
                <p style="font-family:Narrow!important;color:#666666;font-size:26px;letter-spacing:1px;text-align:center">FILTROS</span></p><br>
                <p style="font-family:Narrow!important;color:#e7744f;font-size:20px;letter-spacing:1px">Centro de costo:</p>
                <form name="form_">
                    <table>
                        <tr>
                            <td>
                               <input type="text" id="centro" name ="centro" value=""/> 
                            </td>
                            <td>
                                <td style="border-color:#ffffff;padding:0;color:#000000"><button id="btn3" align="center" style="font-size:20px" class="fa fa-paper-plane-o" data-title="Filtrar"></button></td>
                            </td>
                        </tr>
                    </table><br>
                </form>
                <p id="Centro"></p><br>
                <p style="font-family:Narrow;font-size:20px">Fechas:</p>
                    <p>
                        <form name="form_certificada">
                            <table>
                                <tr>
                                    <td>
                                       <p style="font-family:verdanab">Inicio&nbsp&nbsp</p>
                                    </td>
                                    <td>
                                        <input type="date" id="Inicio0"/> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <p style="font-family:verdanab">Fin&nbsp&nbsp</p>
                                    </td>
                                    <td>
                                        <input type="date" id="Terminacion0" name ="centro" value=""/> 
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </p><br>
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
        
        $(document).on('click', '#n_2018', (e) => {
            var id_admin = '<?php echo $id_admin ?>';
            const postData = {
                id_admin:id_admin,
                year:2018,
            };
            const url = '../controles.inc.php';
            $.post(url,  postData, (response) => {
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
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
                location.href="../gestor_ausentismo/indicadores_ausentismo";
            });
        });
    });
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");"shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
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
    });
   /* function lector() {
        var id_admin = '<?php echo $id_admin_aus ?>';
        $.ajax({
            type: "post",
            url: "../item_au.php",
            data: "id_admin=" + id_admin,
            befforesed: function(){
        	},
            success: function (response) {
            const tasks = JSON.parse(response);
            let enero_NNT0 = '';
            let febrero_NNT0 = '';
            let marzo_NNT0 = '';
            let abril_NNT0 = '';
            let mayo_NNT0 = '';
            let junio_NNT0 = '';
            let julio_NNT0 = '';
            let agosto_NNT0 = '';
            let septiembre_NNT0 = '';
            let octubre_NNT0 = '';
            let noviembre_NNT0 = '';
            let diciembre_NNT0 = '';
            let anual_NNT0 = '';
            let enero_HE0 = '';
            let febrero_HE0 = '';
            let marzo_HE0 = '';
            let abril_HE0 = '';
            let mayo_HE0 = '';
            let junio_HE0 = '';
            let julio_HE0 = '';
            let agosto_HE0 = '';
            let septiembre_HE0 = '';
            let octubre_HE0 = '';
            let noviembre_HE0 = '';
            let diciembre_HE0 = '';
            let enero_HHTP0 = '';
            let febrero_HHTP0 = '';
            let marzo_HHTP0 = '';
            let abril_HHTP0 = '';
            let mayo_HHTP0 = '';
            let junio_HHTP0 = '';
            let julio_HHTP0 = '';
            let agosto_HHTP0 = '';
            let septiembre_HHTP0 = '';
            let octubre_HHTP0 = '';
            let noviembre_HHTP0 = '';
            let diciembre_HHTP0 = '';
                tasks.forEach(task => {
                    enero_NNT0 += `${task.enero_NNT}`
                    febrero_NNT0 += `${task.febrero_NNT}`
                    marzo_NNT0 += `${task.marzo_NNT}`
                    abril_NNT0 += `${task.abril_NNT}`
                    mayo_NNT0 += `${task.mayo_NNT}`
                    junio_NNT0 += `${task.junio_NNT}`
                    julio_NNT0 += `${task.julio_NNT}`
                    agosto_NNT0 += `${task.agosto_NNT}`
                    septiembre_NNT0 += `${task.septiembre_NNT}`
                    octubre_NNT0 += `${task.octubre_NNT}`
                    noviembre_NNT0 += `${task.noviembre_NNT}`
                    diciembre_NNT0 += `${task.diciembre_NNT}`
                    anual_NNT0 += `${task.anual_NNT}`
                    enero_HE0 += `${task.enero_HE}`
                    febrero_HE0 += `${task.febrero_HE}`
                    marzo_HE0 += `${task.marzo_HE}`
                    abril_HE0 += `${task.abril_HE}`
                    mayo_HE0 += `${task.mayo_HE}`
                    junio_HE0 += `${task.junio_HE}`
                    julio_HE0 += `${task.julio_HE}`
                    agosto_HE0 += `${task.agosto_HE}`
                    septiembre_HE0 += `${task.septiembre_HE}`
                    octubre_HE0 += `${task.octubre_HE}`
                    noviembre_HE0 += `${task.noviembre_HE}`
                    diciembre_HE0 += `${task.diciembre_HE}`
                    enero_HHTP0 += `${task.enero_HHTP}`
                    febrero_HHTP0 += `${task.febrero_HHTP}`
                    marzo_HHTP0 += `${task.marzo_HHTP}`
                    abril_HHTP0 += `${task.abril_HHTP}`
                    mayo_HHTP0 += `${task.mayo_HHTP}`
                    junio_HHTP0 += `${task.junio_HHTP}`
                    julio_HHTP0 += `${task.julio_HHTP}`
                    agosto_HHTP0 += `${task.agosto_HHTP}`
                    septiembre_HHTP0 += `${task.septiembre_HHTP}`
                    octubre_HHTP0 += `${task.octubre_HHTP}`
                    noviembre_HHTP0 += `${task.noviembre_HHTP}`
                    diciembre_HHTP0 += `${task.diciembre_HHTP}`
                });
                var enero_NNT = parseInt(enero_NNT0);
                var febrero_NNT = parseInt(febrero_NNT0);
                var marzo_NNT = parseInt(marzo_NNT0);
                var abril_NNT = parseInt(abril_NNT0);
                var mayo_NNT = parseInt(mayo_NNT0);
                var junio_NNT = parseInt(junio_NNT0);
                var julio_NNT = parseInt(julio_NNT0);
                var agosto_NNT = parseInt(agosto_NNT0);
                var septiembre_NNT = parseInt(septiembre_NNT0);
                var octubre_NNT = parseInt(octubre_NNT0);
                var noviembre_NNT = parseInt(noviembre_NNT0);
                var diciembre_NNT = parseInt(diciembre_NNT0);
                var enero_HE = parseInt(enero_HE0);
                var febrero_HE = parseInt(febrero_HE0);
                var marzo_HE = parseInt(marzo_HE0);
                var abril_HE = parseInt(abril_HE0);
                var mayo_HE = parseInt(mayo_HE0);
                var junio_HE = parseInt(junio_HE0);
                var julio_HE = parseInt(julio_HE0);
                var agosto_HE = parseInt(agosto_HE0);
                var septiembre_HE = parseInt(septiembre_HE0);
                var octubre_HE = parseInt(octubre_HE0);
                var noviembre_HE = parseInt(noviembre_HE0);
                var diciembre_HE = parseInt(diciembre_HE0);
                var enero_HHTP = parseInt(enero_HHTP0);
                var febrero_HHTP = parseInt(febrero_HHTP0);
                var marzo_HHTP = parseInt(marzo_HHTP0);
                var abril_HHTP = parseInt(abril_HHTP0);
                var mayo_HHTP = parseInt(mayo_HHTP0);
                var junio_HHTP = parseInt(junio_HHTP0);
                var julio_HHTP = parseInt(julio_HHTP0);
                var agosto_HHTP = parseInt(agosto_HHTP0);
                var septiembre_HHTP = parseInt(septiembre_HHTP0);
                var octubre_HHTP = parseInt(octubre_HHTP0);
                var noviembre_HHTP = parseInt(noviembre_HHTP0);
                var diciembre_HHTP = parseInt(diciembre_HHTP0);
                
                if(enero_NNT > 0){
                    var enero_NNT_ = 1;
                } else {
                    var enero_NNT_ = 0;
                }
                if(febrero_NNT > 0){
                    var febrero_NNT_ = 1;
                } else {
                    var febrero_NNT_ = 0;
                }
                if(marzo_NNT > 0){
                    var marzo_NNT_ = 1;
                } else {
                    var marzo_NNT_ = 0;
                }
                if(abril_NNT > 0){
                    var abril_NNT_ = 1;
                } else {
                    var abril_NNT_ = 0;
                }
                if(mayo_NNT > 0){
                    var mayo_NNT_ = 1;
                } else {
                    var mayo_NNT_ = 0;
                }
                if(junio_NNT > 0){
                    var junio_NNT_ = 1;
                } else {
                    var junio_NNT_ = 0;
                }
                if(julio_NNT > 0){
                    var julio_NNT_ = 1;
                } else {
                    var julio_NNT_ = 0;
                }
                if(agosto_NNT > 0){
                    var agosto_NNT_ = 1;
                } else {
                    var agosto_NNT_ = 0;
                }
                if(septiembre_NNT > 0){
                    var septiembre_NNT_ = 1;
                } else {
                    var septiembre_NNT_ = 0;
                }
                if(octubre_NNT > 0){
                    var octubre_NNT_ = 1;
                } else {
                    var octubre_NNT_ = 0;
                } 
                if(noviembre_NNT > 0){
                    var noviembre_NNT_ = 1;
                } else {
                    var noviembre_NNT_ = 0;
                }
                if(diciembre_NNT > 0){
                    var diciembre_NNT_ = 1;
                } else {
                    var diciembre_NNT_ = 0;
                }
                var anual_NNT_ = enero_NNT_ + febrero_NNT_ + marzo_NNT_ + abril_NNT_+ mayo_NNT_ + junio_NNT_ + julio_NNT_ + agosto_NNT_ + septiembre_NNT_ + octubre_NNT_ + noviembre_NNT_ + diciembre_NNT_; 
                console.log(enero_NNT_ )
                var anual_NNT_0 = enero_NNT + febrero_NNT + marzo_NNT + abril_NNT+ mayo_NNT + junio_NNT + julio_NNT + agosto_NNT + septiembre_NNT + octubre_NNT + noviembre_NNT + diciembre_NNT; 
                var anual_NNT_I = anual_NNT_0/anual_NNT_;
                const postData2 = {
                   anual_NNT : anual_NNT_I,
                   id_admin:  id_admin,
                };
                const url2 = '../indicadores_au.php';
                $.post(url2, postData2, (response) => {
                });
                var anual_HE = enero_HE + febrero_HE + marzo_HE + abril_HE + mayo_HE + junio_HE + julio_HE + agosto_HE + septiembre_HE + octubre_HE + noviembre_HE + diciembre_HE; 
                const postData3 = {
                   anual_HE : anual_HE,
                   id_admin:  id_admin,
                };
                const url3 = '../indicadores_au.php';
                $.post(url3, postData3, (response) => {
                });
                var anual_HHTP = enero_HHTP + febrero_HHTP + marzo_HHTP + abril_HHTP + mayo_HHTP + junio_HHTP + julio_HHTP + agosto_HHTP + septiembre_HHTP + octubre_HHTP + noviembre_HHTP + diciembre_HHTP; 
                const postData = {
                   anual_HHTP : anual_HHTP,
                   id_admin:  id_admin,
                };
                const url = '../indicadores_au.php';
                $.post(url, postData, (response) => {
                });
                document.getElementById("enero_NNT").value = (enero_NNT);
                document.getElementById("febrero_NNT").value = (febrero_NNT);
                document.getElementById("marzo_NNT").value = (marzo_NNT);
                document.getElementById("abril_NNT").value = (abril_NNT);
                document.getElementById("mayo_NNT").value = (mayo_NNT);
                document.getElementById("junio_NNT").value = (junio_NNT);
                document.getElementById("julio_NNT").value = (julio_NNT);
                document.getElementById("agosto_NNT").value = (agosto_NNT);
                document.getElementById("septiembre_NNT").value = (septiembre_NNT);
                document.getElementById("octubre_NNT").value = (octubre_NNT);
                document.getElementById("noviembre_NNT").value = (noviembre_NNT);
                document.getElementById("diciembre_NNT").value = (diciembre_NNT);
                document.getElementById("anual_NNT").value = (anual_NNT0);
                document.getElementById("enero_HE").value = (enero_HE);
                document.getElementById("febrero_HE").value = (febrero_HE);
                document.getElementById("marzo_HE").value = (marzo_HE);
                document.getElementById("abril_HE").value = (abril_HE);
                document.getElementById("mayo_HE").value = (mayo_HE);
                document.getElementById("junio_HE").value = (junio_HE);
                document.getElementById("julio_HE").value = (julio_HE);
                document.getElementById("agosto_HE").value = (agosto_HE);
                document.getElementById("septiembre_HE").value = (septiembre_HE);
                document.getElementById("octubre_HE").value = (octubre_HE);
                document.getElementById("noviembre_HE").value = (noviembre_HE);
                document.getElementById("diciembre_HE").value = (diciembre_HE);
                document.getElementById("anual_HE").value = (anual_HE);
                $('#enero_HHTP').html(enero_HHTP);
                $('#febrero_HHTP').html(febrero_HHTP);
                $('#marzo_HHTP').html(marzo_HHTP);
                $('#abril_HHTP').html(abril_HHTP);
                $('#mayo_HHTP').html(mayo_HHTP);
                $('#junio_HHTP').html(junio_HHTP);
                $('#julio_HHTP').html(julio_HHTP);
                $('#agosto_HHTP').html(agosto_HHTP);
                $('#septiembre_HHTP').html(septiembre_HHTP);
                $('#octubre_HHTP').html(octubre_HHTP);
                $('#noviembre_HHTP').html(noviembre_HHTP);
                $('#diciembre_HHTP').html(diciembre_HHTP);
                $('#anual_HHTP').html(anual_HHTP);
            },   
        });
   }*/
</script>
</body>
</html>
