<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    
    if(isset($_POST['enero_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $enero_NNT=$_POST["enero_NNT"];
        $enero_HHTP=$_POST["enero_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_NNT = '$enero_NNT', Enero_HHTP = '$enero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_NNT=$_POST["febrero_NNT"];
        $febrero_HHTP=$_POST["febrero_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_NNT = '$febrero_NNT', Febrero_HHTP = '$febrero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_NNT=$_POST["marzo_NNT"];
        $marzo_HHTP=$_POST["marzo_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_NNT = '$marzo_NNT', Marzo_HHTP = '$marzo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $abril_NNT=$_POST["abril_NNT"];
        $abril_HHTP=$_POST["abril_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_NNT = '$abril_NNT', Abril_HHTP = '$abril_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_NNT=$_POST["mayo_NNT"];
        $mayo_HHTP=$_POST["mayo_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_NNT = '$mayo_NNT', Mayo_HHTP = '$mayo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $junio_NNT=$_POST["junio_NNT"];
        $junio_HHTP=$_POST["junio_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_NNT = '$junio_NNT', Junio_HHTP = '$junio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $julio_NNT=$_POST["julio_NNT"];
        $julio_HHTP=$_POST["julio_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_NNT = '$julio_NNT', Julio_HHTP = '$julio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_NNT=$_POST["agosto_NNT"];
        $agosto_HHTP=$_POST["agosto_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_NNT = '$agosto_NNT', Agosto_HHTP = '$agosto_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_NNT=$_POST["septiembre_NNT"];
        $septiembre_HHTP=$_POST["septiembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_NNT = '$septiembre_NNT', Septiembre_HHTP = '$septiembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_NNT=$_POST["octubre_NNT"];
        $octubre_HHTP=$_POST["octubre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_NNT = '$octubre_NNT', Octubre_HHTP = '$octubre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_NNT=$_POST["noviembre_NNT"];
        $noviembre_HHTP=$_POST["noviembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_NNT = '$noviembre_NNT', Noviembre_HHTP = '$noviembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_NNT'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_NNT=$_POST["diciembre_NNT"];
        $diciembre_HHTP=$_POST["diciembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_NNT = '$diciembre_NNT', Diciembre_HHTP = '$diciembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_NNT'])) {
        $anual_NNT=$_POST["anual_NNT"];
        $id_admin=$_POST["id_admin"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_NNT = '$anual_NNT' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
    if(isset($_POST['enero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $enero_HE=$_POST["enero_HE"];
        $enero_HHTP=$_POST["enero_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_HE = '$enero_HE', Enero_HHTP = '$enero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_HE=$_POST["febrero_HE"];
        $febrero_HHTP=$_POST["febrero_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_HE = '$febrero_HE', Febrero_HHTP = '$febrero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_HE=$_POST["marzo_HE"];
        $marzo_HHTP=$_POST["marzo_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_HE = '$marzo_HE', Marzo_HHTP = '$marzo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_HE'])) {
        $id_admin=$_POST["id_admin"];
        $abril_HE=$_POST["abril_HE"];
        $abril_HHTP=$_POST["abril_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_HE = '$abril_HE', Abril_HHTP = '$abril_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_HE=$_POST["mayo_HE"];
        $mayo_HHTP=$_POST["mayo_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_HE = '$mayo_HE', Mayo_HHTP = '$mayo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $junio_HE=$_POST["junio_HE"];
        $junio_HHTP=$_POST["junio_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_HE = '$junio_HE', Junio_HHTP = '$junio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $julio_HE=$_POST["julio_HE"];
        $julio_HHTP=$_POST["julio_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_HE = '$julio_HE', Julio_HHTP = '$julio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_HE'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_HE=$_POST["agosto_HE"];
        $agosto_HHTP=$_POST["agosto_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_HE = '$agosto_HE', Agosto_HHTP = '$agosto_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_HE=$_POST["septiembre_HE"];
        $septiembre_HHTP=$_POST["septiembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_HE = '$septiembre_HE', Septiembre_HHTP = '$septiembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_HE=$_POST["octubre_HE"];
        $octubre_HHTP=$_POST["octubre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_HE = '$octubre_HE', Octubre_HHTP = '$octubre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_HE=$_POST["noviembre_HE"];
        $noviembre_HHTP=$_POST["noviembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_HE = '$noviembre_HE', Noviembre_HHTP = '$noviembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_HE=$_POST["diciembre_HE"];
        $diciembre_HHTP=$_POST["diciembre_NNT2"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_HE = '$diciembre_HE', Diciembre_HHTP = '$diciembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_HE'])) {
        $id_admin=$_POST["id_admin"];
        $anual_HE=$_POST["anual_HE"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_HE = '$anual_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
     };
    if(isset($_POST['enero_DI'])) {
        $id_admin=$_POST["id_admin"];
        $enero_DI=$_POST["enero_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_DI = '$enero_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_DI'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_DI=$_POST["febrero_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_DI = '$febrero_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_DI'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_DI=$_POST["marzo_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_DI = '$marzo_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_DI'])) {
        $id_admin=$_POST["id_admin"];
        $abril_DI=$_POST["abril_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_DI = '$abril_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_DI'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_DI=$_POST["mayo_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_DI = '$mayo_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_DI'])) {
        $id_admin=$_POST["id_admin"];
        $junio_DI=$_POST["junio_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_DI = '$junio_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_DI'])) {
        $id_admin=$_POST["id_admin"];
        $julio_DI=$_POST["julio_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_DI = '$julio_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_DI'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_DI=$_POST["agosto_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_DI = '$agosto_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_DI'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_DI=$_POST["septiembre_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_DI = '$septiembre_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_DI'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_DI=$_POST["octubre_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_DI = '$octubre_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_DI'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_DI=$_POST["noviembre_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_DI = '$noviembre_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_DI'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_DI=$_POST["diciembre_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_DI = '$diciembre_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_DI'])) {
        $id_admin=$_POST["id_admin"];
        $anual_DI=$_POST["anual_DI"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_DI = '$anual_DI' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
     };  
     if(isset($_POST['enero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $enero_HE=$_POST["enero_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_HE = '$enero_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_HE=$_POST["febrero_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_HE = '$febrero_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_HE=$_POST["marzo_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_HE = '$marzo_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_HE'])) {
        $id_admin=$_POST["id_admin"];
        $abril_HE=$_POST["abril_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_HE = '$abril_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_HE=$_POST["mayo_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_HE = '$mayo_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $junio_HE=$_POST["junio_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_HE = '$junio_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $julio_HE=$_POST["julio_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_HE = '$julio_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_HE'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_HE=$_POST["agosto_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_HE = '$agosto_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_HE=$_POST["septiembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_HE = '$septiembre_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_HE=$_POST["octubre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_HE = '$octubre_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_HE=$_POST["noviembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_HE = '$noviembre_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_HE=$_POST["diciembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_HE = '$diciembre_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_HE'])) {
        $id_admin=$_POST["id_admin"];
        $anual_HE=$_POST["anual_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_HE = '$anual_HE' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
     };
    if(isset($_POST['enero_EL'])) {
        $id_admin=$_POST["id_admin"];
        $enero_EL=$_POST["enero_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_EL = '$enero_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_EL'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_EL=$_POST["febrero_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_EL = '$febrero_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_EL'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_EL=$_POST["marzo_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_EL = '$marzo_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_EL'])) {
        $id_admin=$_POST["id_admin"];
        $abril_EL=$_POST["abril_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_EL = '$abril_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_EL'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_EL=$_POST["mayo_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_EL = '$mayo_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_EL'])) {
        $id_admin=$_POST["id_admin"];
        $junio_EL=$_POST["junio_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_EL = '$junio_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_EL'])) {
        $id_admin=$_POST["id_admin"];
        $julio_EL=$_POST["julio_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_EL = '$julio_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_EL'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_EL=$_POST["agosto_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_EL = '$agosto_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_EL'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_EL=$_POST["septiembre_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_EL = '$septiembre_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_EL'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_EL=$_POST["octubre_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_EL = '$octubre_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_EL'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_EL=$_POST["noviembre_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_EL = '$noviembre_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_EL'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_EL=$_POST["diciembre_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_EL = '$diciembre_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_EL'])) {
        $id_admin=$_POST["id_admin"];
        $anual_EL=$_POST["anual_EL"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_EL = '$anual_EL' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
      if(isset($_POST['enero_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $enero_ELNA=$_POST["enero_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_ELNA = '$enero_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_ELNA=$_POST["febrero_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_ELNA = '$febrero_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_ELNA=$_POST["marzo_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_ELNA = '$marzo_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $abril_ELNA=$_POST["abril_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_ELNA = '$abril_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_ELNA=$_POST["mayo_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_ELNA = '$mayo_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $junio_ELNA=$_POST["junio_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_ELNA = '$junio_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $julio_ELNA=$_POST["julio_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_ELNA = '$julio_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_ELNA=$_POST["agosto_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_ELNA = '$agosto_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_ELNA=$_POST["septiembre_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_ELNA = '$septiembre_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_ELNA=$_POST["octubre_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_ELNA = '$octubre_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_ELNA=$_POST["noviembre_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_ELNA = '$noviembre_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_ELNA=$_POST["diciembre_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_ELNA = '$diciembre_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_ELNA'])) {
        $id_admin=$_POST["id_admin"];
        $anual_ELNA=$_POST["anual_ELNA"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_ELNA = '$anual_ELNA' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
     if(isset($_POST['enero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $enero_HE=$_POST["enero_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_HE = '$enero_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_HE'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_HE=$_POST["febrero_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_HE = '$febrero_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_HE=$_POST["marzo_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_HE = '$marzo_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_HE'])) {
        $id_admin=$_POST["id_admin"];
        $abril_HE=$_POST["abril_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_HE = '$abril_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_HE'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_HE=$_POST["mayo_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_HE = '$mayo_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $junio_HE=$_POST["junio_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_HE = '$junio_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_HE'])) {
        $id_admin=$_POST["id_admin"];
        $julio_HE=$_POST["julio_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_HE = '$julio_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_HE'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_HE=$_POST["agosto_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_HE = '$agosto_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_HE=$_POST["septiembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_HE = '$septiembre_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_HE=$_POST["octubre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_HE = '$octubre_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_HE=$_POST["noviembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_HE = '$noviembre_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_HE'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_HE=$_POST["diciembre_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_HE = '$diciembre_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_HE'])) {
        $id_admin=$_POST["id_admin"];
        $anual_HE=$_POST["anual_HE"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_HE = '$anual_HE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     };
    if(isset($_POST['enero_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $enero_HHTP=$_POST["enero_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_HHTP = '$enero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_HHTP=$_POST["febrero_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_HHTP = '$febrero_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";;
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_HHTP=$_POST["marzo_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_HHTP = '$marzo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $abril_HHTP=$_POST["abril_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_HHTP = '$abril_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_HHTP=$_POST["mayo_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_HHTP = '$mayo_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $junio_HHTP=$_POST["junio_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_HHTP = '$junio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $julio_HHTP=$_POST["julio_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_HHTP = '$julio_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_HHTP=$_POST["agosto_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_HHTP = '$agosto_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_HHTP=$_POST["septiembre_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_HHTP = '$septiembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_HHTP=$_POST["octubre_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_HHTP = '$octubre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_HHTP=$_POST["noviembre_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_HHTP = '$noviembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_HHTP'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_HHTP=$_POST["diciembre_HHTP"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_HHTP = '$diciembre_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_HHTP'])) {
        $anual_HHTP=$_POST["anual_HHTP"];
        $id_admin=$_POST["id_admin"];
        $Year=$_POST["Year"];
        $centro=$_POST["centro"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_HHTP = '$anual_HHTP' WHERE id_admin = '$id_admin' && Year = $Year && Centro_ = '$centro'";
        $resultado = $mysqli->query($sql);
     };
    if(isset($_POST['enero_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $enero_ATM=$_POST["enero_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_ATM = '$enero_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_ATM=$_POST["febrero_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_ATM = '$febrero_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_ATM=$_POST["marzo_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_ATM = '$marzo_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $abril_ATM=$_POST["abril_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_ATM = '$abril_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_ATM=$_POST["mayo_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_ATM = '$mayo_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $junio_ATM=$_POST["junio_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_ATM = '$junio_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $julio_ATM=$_POST["julio_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_ATM = '$julio_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_ATM=$_POST["agosto_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_ATM = '$agosto_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_ATM=$_POST["septiembre_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_ATM = '$septiembre_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_ATM=$_POST["octubre_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_ATM = '$octubre_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_ATM=$_POST["noviembre_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_ATM = '$noviembre_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_ATM=$_POST["diciembre_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_ATM = '$diciembre_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_ATM'])) {
        $id_admin=$_POST["id_admin"];
        $anual_ATM=$_POST["anual_ATM"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_ATM = '$anual_ATM' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
      if(isset($_POST['enero_AT'])) {
        $id_admin=$_POST["id_admin"];
        $enero_AT=$_POST["enero_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_AT = '$enero_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_AT'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_AT=$_POST["febrero_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_AT = '$febrero_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_AT'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_AT=$_POST["marzo_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_AT = '$marzo_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_AT'])) {
        $id_admin=$_POST["id_admin"];
        $abril_AT=$_POST["abril_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_AT = '$abril_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_AT'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_AT=$_POST["mayo_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_AT = '$mayo_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_AT'])) {
        $id_admin=$_POST["id_admin"];
        $junio_AT=$_POST["junio_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_AT = '$junio_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_AT'])) {
        $id_admin=$_POST["id_admin"];
        $julio_AT=$_POST["julio_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_AT = '$julio_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_AT'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_AT=$_POST["agosto_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_AT = '$agosto_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_AT'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_AT=$_POST["septiembre_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_AT = '$septiembre_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_AT'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_AT=$_POST["octubre_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_AT = '$octubre_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_AT'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_AT=$_POST["noviembre_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_AT = '$noviembre_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_AT'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_AT=$_POST["diciembre_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_AT = '$diciembre_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_AT'])) {
        $id_admin=$_POST["id_admin"];
        $anual_AT=$_POST["anual_AT"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_AT = '$anual_AT' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     };
    if(isset($_POST['enero_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $enero_EIE=$_POST["enero_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_EIE = '$enero_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_EIE=$_POST["febrero_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_EIE = '$febrero_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_EIE=$_POST["marzo_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_EIE = '$marzo_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $abril_EIE=$_POST["abril_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_EIE = '$abril_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_EIE=$_POST["mayo_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_EIE = '$mayo_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $junio_EIE=$_POST["junio_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_EIE = '$junio_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $julio_EIE=$_POST["julio_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_EIE = '$julio_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_EIE=$_POST["agosto_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_EIE = '$agosto_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_EIE=$_POST["septiembre_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_EIE = '$septiembre_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_EIE=$_POST["octubre_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_EIE = '$octubre_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_EIE=$_POST["noviembre_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_EIE = '$noviembre_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_EIE=$_POST["diciembre_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_EIE = '$diciembre_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_EIE'])) {
        $id_admin=$_POST["id_admin"];
        $anual_EIE=$_POST["anual_EIE"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_EIE = '$anual_EIE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
    if(isset($_POST['enero_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $enero_ACEG=$_POST["enero_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_ACEG = '$enero_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_ACEG=$_POST["febrero_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_ACEG = '$febrero_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_ACEG=$_POST["marzo_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_ACEG = '$marzo_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $abril_ACEG=$_POST["abril_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_ACEG = '$abril_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_ACEG=$_POST["mayo_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_ACEG = '$mayo_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $junio_ACEG=$_POST["junio_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_ACEG = '$junio_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $julio_ACEG=$_POST["julio_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_ACEG = '$julio_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_ACEG=$_POST["agosto_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_ACEG = '$agosto_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_ACEG=$_POST["septiembre_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_ACEG = '$septiembre_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_ACEG=$_POST["octubre_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_ACEG = '$octubre_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_ACEG=$_POST["noviembre_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_ACEG = '$noviembre_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_ACEG=$_POST["diciembre_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_ACEG = '$diciembre_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_ACEG'])) {
        $id_admin=$_POST["id_admin"];
        $anual_ACEG=$_POST["anual_ACEG"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_ACEG = '$anual_ACEG' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
     if(isset($_POST['enero_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $enero_DIAE=$_POST["enero_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Enero_DIAE = '$enero_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['febrero_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $febrero_DIAE=$_POST["febrero_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Febrero_DIAE = '$febrero_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['marzo_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $marzo_DIAE=$_POST["marzo_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Marzo_DIAE = '$marzo_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['abril_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $abril_DIAE=$_POST["abril_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Abril_DIAE = '$abril_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['mayo_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $mayo_DIAE=$_POST["mayo_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Mayo_DIAE = '$mayo_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['junio_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $junio_DIAE=$_POST["junio_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Junio_DIAE = '$junio_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['julio_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $julio_DIAE=$_POST["julio_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Julio_DIAE = '$julio_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['agosto_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $agosto_DIAE=$_POST["agosto_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Agosto_DIAE = '$agosto_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['septiembre_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $septiembre_DIAE=$_POST["septiembre_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Septiembre_DIAE = '$septiembre_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['octubre_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $octubre_DIAE=$_POST["octubre_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Octubre_DIAE = '$octubre_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['noviembre_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $noviembre_DIAE=$_POST["noviembre_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Noviembre_DIAE = '$noviembre_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['diciembre_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $diciembre_DIAE=$_POST["diciembre_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Diciembre_DIAE = '$diciembre_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
    };
     if(isset($_POST['anual_DIAE'])) {
        $id_admin=$_POST["id_admin"];
        $anual_DIAE=$_POST["anual_DIAE"];
        $sql = "UPDATE controles_ausentismo2 SET Anual_DIAE = '$anual_DIAE' WHERE id = '$id_centro'";
        $resultado = $mysqli->query($sql);
     }; 
    ?>