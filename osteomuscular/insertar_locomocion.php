<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $Codigo=$_POST["Codigo"];
    
    if(isset($_POST["check"])) {
        $check=$_POST["check"];
        $sql = "INSERT INTO diagnostico_osteomuscular (id_admin, Diagnostico, Fecha_registro) VALUES ('$Codigo','$check',NOW())";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Nombre"])) {
        $Nombre=$_POST["Nombre"];
        $sql = "UPDATE locomocion SET Nombre = '$Nombre' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Cedula"])) {
        $Cedula=$_POST["Cedula"];
        $sql = "UPDATE locomocion SET Cedula = '$Cedula' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Edad"])) {
        $Edad=$_POST["Edad"];
        $sql = "UPDATE locomocion SET Edad = '$Edad' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Empresa"])) {
        $Empresa=$_POST["Empresa"];
        $sql = "UPDATE locomocion SET Empresa = '$Empresa' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Sede"])) {
        $Sede=$_POST["Sede"];
        $sql = "UPDATE locomocion SET Sede = '$Sede' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Antiguedad_a"])) {
        $Antiguedad_a=$_POST["Antiguedad_a"];
        $sql = "UPDATE locomocion SET Antiguedad_a = '$Antiguedad_a' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Antiguedad_m"])) {
        $Antiguedad_m=$_POST["Antiguedad_m"];
        $sql = "UPDATE locomocion SET Antiguedad_m = '$Antiguedad_m' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Cargo"])) {
        $Cargo=$_POST["Cargo"];
        $sql = "UPDATE locomocion SET Cargo = '$Cargo' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Antiguedad2_a"])) {
        $Antiguedad2_a=$_POST["Antiguedad2_a"];
        $sql = "UPDATE locomocion SET Antiguedad2_a = '$Antiguedad2_a' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Antiguedad2_m"])) {
        $Antiguedad2_m=$_POST["Antiguedad2_m"];
        $sql = "UPDATE locomocion SET Antiguedad2_m = '$Antiguedad2_m' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Horas"])) {
        $Horas=$_POST["Horas"];
        $sql = "UPDATE locomocion SET Horas = '$Horas' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["Dominancia"])) {
        $Dominancia=$_POST["Dominancia"];
        $sql = "UPDATE locomocion SET Dominancia = '$Dominancia' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    
    if(isset($_POST["P1"])) {
        $P1=$_POST["P1"];
        $sql = "UPDATE locomocion SET P1 = '$P1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P1_1"])) {
        $P1_1=$_POST["P1_1"];
        $sql = "UPDATE locomocion SET P1_1 = '$P1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P1_2"])) {
        $P1_2=$_POST["P1_2"];
        $sql = "UPDATE locomocion SET P1_2 = '$P1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P1_3"])) {
        $P1_3=$_POST["P1_3"];
        $sql = "UPDATE locomocion SET P1_3 = '$P1_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P2"])) {
        $P2=$_POST["P2"];
        $sql = "UPDATE locomocion SET P2 = '$P2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P2_1"])) {
        $P2_1=$_POST["P2_1"];
        $sql = "UPDATE locomocion SET P2_1 = '$P2_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST["P2_2"])) {
        $P2_2=$_POST["P2_2"];
        $sql = "UPDATE locomocion SET P2_2 = '$P2_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST["P2_3"])) {
        $P2_3=$_POST["P2_3"];
        $sql = "UPDATE locomocion SET P2_3 = '$P2_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_1"])) {
        $P3_1=$_POST["P3_1"];
        $sql = "UPDATE locomocion SET P3_1 = '$P3_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_1_1"])) {
        $P3_1_1=$_POST["P3_1_1"];
        $sql = "UPDATE locomocion SET P3_1_1 = '$P3_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_2"])) {
        $P3_2=$_POST["P3_2"];
        $sql = "UPDATE locomocion SET P3_2 = '$P3_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_2_1"])) {
        $P3_2_1=$_POST["P3_2_1"];
        $sql = "UPDATE locomocion SET P3_2_1 = '$P3_2_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_3"])) {
        $P3_3=$_POST["P3_3"];
        $sql = "UPDATE locomocion SET P3_3 = '$P3_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_3_1"])) {
        $P3_3_1=$_POST["P3_3_1"];
        $sql = "UPDATE locomocion SET P3_3_1 = '$P3_3_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_4"])) {
        $P3_4=$_POST["P3_4"];
        $sql = "UPDATE locomocion SET P3_4 = '$P3_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_4_1"])) {
        $P3_4_1=$_POST["P3_4_1"];
        $sql = "UPDATE locomocion SET P3_4_1 = '$P3_4_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_5"])) {
        $P3_5=$_POST["P3_5"];
        $sql = "UPDATE locomocion SET P3_5 = '$P3_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_5_1"])) {
        $P3_5_1=$_POST["P3_5_1"];
        $sql = "UPDATE locomocion SET P3_5_1 = '$P3_5_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P3_6"])) {
        $P3_6=$_POST["P3_6"];
        $sql = "UPDATE locomocion SET P3_6 = '$P3_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P4"])) {
        $P4=$_POST["P4"];
        $sql = "UPDATE locomocion SET P4 = '$P4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P4_1"])) {
        $P4_1=$_POST["P4_1"];
        $sql = "UPDATE locomocion SET P4_1 = '$P4_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P5"])) {
        $P5=$_POST["P5"];
        $sql = "UPDATE locomocion SET P5 = '$P5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST["P6"])) {
        $P6=$_POST["P6"];
        $sql = "UPDATE locomocion SET P6 = '$P6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_1"])) {
        $P6_1=$_POST["P6_1"];
        $sql = "UPDATE locomocion SET P6_1 = '$P6_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_2"])) {
        $P6_2=$_POST["P6_2"];
        $sql = "UPDATE locomocion SET P6_2 = '$P6_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_1"])) {
        $P6_4_1=$_POST["P6_4_1"];
        $sql = "UPDATE locomocion SET P6_4_1 = '$P6_4_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_2"])) {
        $P6_4_2=$_POST["P6_4_2"];
        $sql = "UPDATE locomocion SET P6_4_2 = '$P6_4_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_3"])) {
        $P6_4_3=$_POST["P6_4_3"];
        $sql = "UPDATE locomocion SET P6_4_3 = '$P6_4_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_4"])) {
        $P4_4_4=$_POST["P6_4_4"];
        $sql = "UPDATE locomocion SET P6_4_4 = '$P6_4_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_5"])) {
        $P6_4_5=$_POST["P6_4_5"];
        $sql = "UPDATE locomocion SET P6_4_5 = '$P6_4_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_6"])) {
        $P6_4_6=$_POST["P6_4_6"];
        $sql = "UPDATE locomocion SET P6_4_6 = '$P6_4_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_7"])) {
        $P6_4_7=$_POST["P6_4_7"];
        $sql = "UPDATE locomocion SET P6_4_7 = '$P6_4_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_8"])) {
        $P6_4_8=$_POST["P6_4_8"];
        $sql = "UPDATE locomocion SET P6_4_8 = '$P6_4_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P6_4_9"])) {
        $P6_4_9=$_POST["P6_4_9"];
        $sql = "UPDATE locomocion SET P6_4_9 = '$P6_4_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7"])) {
        $P7=$_POST["P7"];
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_1_1"])) {
        $P7_1_1=$_POST["P7_1_1"];
        $sql = "UPDATE locomocion SET P7_1_1 = '$P7_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_1_2"])) {
        $P7_1_2=$_POST["P7_1_2"];
        $sql = "UPDATE locomocion SET P7_1_2 = '$P7_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_2"])) {
        $P7_2=$_POST["P7_2"];
        $sql = "UPDATE locomocion SET P7_2 = '$P7_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_3"])) {
        $P7_3=$_POST["P7_3"];
        $sql = "UPDATE locomocion SET P7_3 = '$P7_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4"])) {
        $P7_4=$_POST["P7_4"];
        $sql = "UPDATE locomocion SET P7_4 = '$P7_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_1"])) {
        $P7_4_1=$_POST["P7_4_1"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_1;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_2"])) {
        $P7_4_2=$_POST["P7_4_2"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_2;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_3"])) {
        $P7_4_3=$_POST["P7_4_3"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_3;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_4"])) {
        $P7_4_4=$_POST["P7_4_4"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_4;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_5"])) {
        $P7_4_5=$_POST["P7_4_5"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_5;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_6"])) {
        $P7_4_6=$_POST["P7_4_6"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_6;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_7"])) {
        $P7_4_7=$_POST["P7_4_7"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_7;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_8"])) {
        $P7_4_8=$_POST["P7_4_8"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_8;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_4_9"])) {
        $P7_4_9=$_POST["P7_4_9"];
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P7_= $row['P7'];
        $P7 =  $P7_ + $P7_4_9;
        $sql = "UPDATE locomocion SET P7 = '$P7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_5"])) {
        $P7_5=$_POST["P7_5"];
        $sql = "UPDATE locomocion SET P7_5 = '$P7_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_6"])) {
        $P7_6=$_POST["P7_6"];
        $sql = "UPDATE locomocion SET P7_6 = '$P7_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_7"])) {
        $P7_7=$_POST["P7_7"];
        $sql = "UPDATE locomocion SET P7_7 = '$P7_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_8"])) {
        $P7_8=$_POST["P7_8"];
        $sql = "UPDATE locomocion SET P7_8 = '$P7_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_9"])) {
        $P7_9=$_POST["P7_9"];
        $sql = "UPDATE locomocion SET P7_9 = '$P7_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P7_10"])) {
        $P7_10=$_POST["P7_10"];
        $sql = "UPDATE locomocion SET P7_10 = '$P7_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8"])) {
        $sql = "UPDATE locomocion SET P8 = '0', P8_1_1 = '0', P8_1_2 = '0', P8_2 = '0', P8_3 = '0', P8_4 = '0', P8_5 = '0', P8_6 = '0', P8_7 = '0', P8_8 = '0', P8_9 = '0', P8_10 = '0' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_1_1"])) {
        $P8_1_1=$_POST["P8_1_1"];
        $sql = "UPDATE locomocion SET P8_1_1 = '$P8_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_1_2"])) {
        $P8_1_2=$_POST["P8_1_2"];
        $sql = "UPDATE locomocion SET P8_1_2 = '$P8_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_2"])) {
        $P8_2=$_POST["P8_2"];
        $sql = "UPDATE locomocion SET P8_2 = '$P8_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_3"])) {
        $P8_3=$_POST["P8_3"];
        $sql = "UPDATE locomocion SET P8_3 = '$P8_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_4"])) {
        $P8_4=$_POST["P8_4"];
        $sql = "UPDATE locomocion SET P8_4 = '$P8_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_5"])) {
        $P8_5=$_POST["P8_5"];
        $sql = "UPDATE locomocion SET P8_5 = '$P8_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_6"])) {
        $P8_6=$_POST["P8_6"];
        $sql = "UPDATE locomocion SET P8_6 = '$P8_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_7"])) {
        $P8_7=$_POST["P8_7"];
        $sql = "UPDATE locomocion SET P8_7 = '$P8_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_8"])) {
        $P8_8=$_POST["P8_8"];
        $sql = "UPDATE locomocion SET P8_8 = '$P8_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_9"])) {
        $P8_9=$_POST["P8_9"];
        $sql = "UPDATE locomocion SET P8_9 = '$P8_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P8_10"])) {
        $P8_10=$_POST["P8_10"];
        $sql = "UPDATE locomocion SET P8_10 = '$P8_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }

     if(isset($_POST["P9"])) {
        $sql = "UPDATE locomocion SET P9 = '0', P9_1_1 = '0', P9_1_2 = '0', P9_2 = '0', P9_3 = '0', P9_4 = '0', P9_5 = '0', P9_6 = '0', P9_7 = '0', P9_8 = '0', P9_9 = '0', P9_10 = '0' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_1_1"])) {
        $P9_1_1=$_POST["P9_1_1"];
        $sql = "UPDATE locomocion SET P9_1_1 = '$P9_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_1_2"])) {
        $P9_1_2=$_POST["P9_1_2"];
        $sql = "UPDATE locomocion SET P9_1_2 = '$P9_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_2"])) {
        $P9_2=$_POST["P9_2"];
        $sql = "UPDATE locomocion SET P9_2 = '$P9_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_3"])) {
        $P9_3=$_POST["P9_3"];
        $sql = "UPDATE locomocion SET P9_3 = '$P9_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_4"])) {
        $P9_4=$_POST["P9_4"];
        $sql = "UPDATE locomocion SET P9_4 = '$P9_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_5"])) {
        $P9_5=$_POST["P9_5"];
        $sql = "UPDATE locomocion SET P9_5 = '$P9_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_6"])) {
        $P9_6=$_POST["P9_6"];
        $sql = "UPDATE locomocion SET P9_6 = '$P9_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_7"])) {
        $P9_7=$_POST["P9_7"];
        $sql = "UPDATE locomocion SET P9_7 = '$P9_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_8"])) {
        $P9_8=$_POST["P9_8"];
        $sql = "UPDATE locomocion SET P9_8 = '$P9_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_9"])) {
        $P9_9=$_POST["P9_9"];
        $sql = "UPDATE locomocion SET P9_9 = '$P9_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P9_10"])) {
        $P9_10=$_POST["P9_10"];
        $sql = "UPDATE locomocion SET P9_10 = '$P9_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    
    if(isset($_POST["P10"])) {
        $sql = "UPDATE locomocion SET P10 = '0', P10_1_1 = '0', P10_1_2 = '0', P10_2 = '0', P10_3 = '0', P10_4 = '0', P10_5 = '0', P10_6 = '0', P10_7 = '0', P10_8 = '0', P10_9 = '0', P10_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_1_1"])) {
        $P10_1_1=$_POST["P10_1_1"];
        $sql = "UPDATE locomocion SET P10_1_1 = '$P10_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_1_2"])) {
        $P10_1_2=$_POST["P10_1_2"];
        $sql = "UPDATE locomocion SET P10_1_2 = '$P10_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_2"])) {
        $P10_2=$_POST["P10_2"];
        $sql = "UPDATE locomocion SET P10_2 = '$P10_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_3"])) {
        $P10_3=$_POST["P10_3"];
        $sql = "UPDATE locomocion SET P10_3 = '$P10_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_4"])) {
        $P10_4=$_POST["P10_4"];
        $sql = "UPDATE locomocion SET P10_4 = '$P10_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_5"])) {
        $P10_5=$_POST["P10_5"];
        $sql = "UPDATE locomocion SET P10_5 = '$P10_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_6"])) {
        $P10_6=$_POST["P10_6"];
        $sql = "UPDATE locomocion SET P10_6 = '$P10_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_7"])) {
        $P10_7=$_POST["P10_7"];
        $sql = "UPDATE locomocion SET P10_7 = '$P10_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_8"])) {
        $P10_8=$_POST["P10_8"];
        $sql = "UPDATE locomocion SET P10_8 = '$P10_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_9"])) {
        $P10_9=$_POST["P10_9"];
        $sql = "UPDATE locomocion SET P10_9 = '$P10_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P10_10"])) {
        $P10_10=$_POST["P10_10"];
        $sql = "UPDATE locomocion SET P10_10 = '$P10_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    
    if(isset($_POST["P11"])) {
        $sql = "UPDATE locomocion SET P11 = '0', P11_1_1 = '0', P11_1_2 = '0', P11_2 = '0', P11_3 = '0', P11_4 = '0', P11_5 = '0', P11_6 = '0', P11_7 = '0', P11_8 = '0', P11_9 = '0', P11_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_1_1"])) {
        $P11_1_1=$_POST["P11_1_1"];
        $sql = "UPDATE locomocion SET P11_1_1 = '$P11_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_1_2"])) {
        $P11_1_2=$_POST["P11_1_2"];
        $sql = "UPDATE locomocion SET P11_1_2 = '$P11_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_2"])) {
        $P11_2=$_POST["P11_2"];
        $sql = "UPDATE locomocion SET P11_2 = '$P11_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_3"])) {
        $P11_3=$_POST["P11_3"];
        $sql = "UPDATE locomocion SET P11_3 = '$P11_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_4"])) {
        $P11_4=$_POST["P11_4"];
        $sql = "UPDATE locomocion SET P11_4 = '$P11_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_5"])) {
        $P11_5=$_POST["P11_5"];
        $sql = "UPDATE locomocion SET P11_5 = '$P11_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_6"])) {
        $P11_6=$_POST["P11_6"];
        $sql = "UPDATE locomocion SET P11_6 = '$P11_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_7"])) {
        $P11_7=$_POST["P11_7"];
        $sql = "UPDATE locomocion SET P11_7 = '$P11_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_8"])) {
        $P11_8=$_POST["P11_8"];
        $sql = "UPDATE locomocion SET P11_8 = '$P11_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_9"])) {
        $P11_9=$_POST["P11_9"];
        $sql = "UPDATE locomocion SET P11_9 = '$P11_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P11_10"])) {
        $P11_10=$_POST["P11_10"];
        $sql = "UPDATE locomocion SET P11_10 = '$P11_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12"])) {
        $sql = "UPDATE locomocion SET P12 = '0', P12_1_1 = '0', P12_1_2 = '0', P12_2 = '0', P12_3 = '0', P12_4 = '0', P12_5 = '0', P12_6 = '0', P12_7 = '0', P12_8 = '0', P12_9 = '0', P12_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_1_1"])) {
        $P12_1_1=$_POST["P12_1_1"];
        $sql = "UPDATE locomocion SET P12_1_1 = '$P12_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_1_2"])) {
        $P12_1_2=$_POST["P12_1_2"];
        $sql = "UPDATE locomocion SET P12_1_2 = '$P12_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_2"])) {
        $P12_2=$_POST["P12_2"];
        $sql = "UPDATE locomocion SET P12_2 = '$P12_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_3"])) {
        $P12_3=$_POST["P12_3"];
        $sql = "UPDATE locomocion SET P12_3 = '$P12_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_4"])) {
        $P12_4=$_POST["P12_4"];
        $sql = "UPDATE locomocion SET P12_4 = '$P12_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_5"])) {
        $P12_5=$_POST["P12_5"];
        $sql = "UPDATE locomocion SET P12_5 = '$P12_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_6"])) {
        $P12_6=$_POST["P12_6"];
        $sql = "UPDATE locomocion SET P12_6 = '$P12_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_7"])) {
        $P12_7=$_POST["P12_7"];
        $sql = "UPDATE locomocion SET P12_7 = '$P12_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_8"])) {
        $P12_8=$_POST["P12_8"];
        $sql = "UPDATE locomocion SET P12_8 = '$P12_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_9"])) {
        $P12_9=$_POST["P12_9"];
        $sql = "UPDATE locomocion SET P12_9 = '$P12_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P12_10"])) {
        $P12_10=$_POST["P12_10"];
        $sql = "UPDATE locomocion SET P12_10 = '$P12_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13"])) {
        $sql = "UPDATE locomocion SET P13 = '0', P13_1_1 = '0', P13_1_2 = '0', P13_2 = '0', P13_3 = '0', P13_4 = '0', P13_5 = '0', P13_6 = '0', P13_7 = '0', P13_8 = '0', P13_9 = '0', P13_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_1_1"])) {
        $P13_1_1=$_POST["P13_1_1"];
        $sql = "UPDATE locomocion SET P13_1_1 = '$P13_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_1_2"])) {
        $P13_1_2=$_POST["P13_1_2"];
        $sql = "UPDATE locomocion SET P13_1_2 = '$P13_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_2"])) {
        $P13_2=$_POST["P13_2"];
        $sql = "UPDATE locomocion SET P13_2 = '$P13_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_3"])) {
        $P13_3=$_POST["P13_3"];
        $sql = "UPDATE locomocion SET P13_3 = '$P13_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_4"])) {
        $P13_4=$_POST["P13_4"];
        $sql = "UPDATE locomocion SET P13_4 = '$P13_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_5"])) {
        $P13_5=$_POST["P13_5"];
        $sql = "UPDATE locomocion SET P13_5 = '$P13_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_6"])) {
        $P13_6=$_POST["P13_6"];
        $sql = "UPDATE locomocion SET P13_6 = '$P13_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_7"])) {
        $P13_7=$_POST["P13_7"];
        $sql = "UPDATE locomocion SET P13_7 = '$P13_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_8"])) {
        $P13_8=$_POST["P13_8"];
        $sql = "UPDATE locomocion SET P13_8 = '$P13_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_9"])) {
        $P13_9=$_POST["P13_9"];
        $sql = "UPDATE locomocion SET P13_9 = '$P13_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P13_10"])) {
        $P13_10=$_POST["P13_10"];
        $sql = "UPDATE locomocion SET P13_10 = '$P13_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14"])) {
        $sql = "UPDATE locomocion SET P14 = '0', P14_1_1 = '0', P14_1_2 = '0', P14_2 = '0', P14_3 = '0', P14_4 = '0', P14_5 = '0', P14_6 = '0', P14_7 = '0', P14_8 = '0', P14_9 = '0', P14_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_1_1"])) {
        $P14_1_1=$_POST["P14_1_1"];
        $sql = "UPDATE locomocion SET P14_1_1 = '$P14_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_1_2"])) {
        $P14_1_2=$_POST["P14_1_2"];
        $sql = "UPDATE locomocion SET P14_1_2 = '$P14_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_2"])) {
        $P14_2=$_POST["P14_2"];
        $sql = "UPDATE locomocion SET P14_2 = '$P14_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_3"])) {
        $P14_3=$_POST["P14_3"];
        $sql = "UPDATE locomocion SET P14_3 = '$P14_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_4"])) {
        $P14_4=$_POST["P14_4"];
        $sql = "UPDATE locomocion SET P14_4 = '$P14_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_5"])) {
        $P14_5=$_POST["P14_5"];
        $sql = "UPDATE locomocion SET P14_5 = '$P14_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_6"])) {
        $P14_6=$_POST["P14_6"];
        $sql = "UPDATE locomocion SET P14_6 = '$P14_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_7"])) {
        $P14_7=$_POST["P14_7"];
        $sql = "UPDATE locomocion SET P14_7 = '$P14_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_8"])) {
        $P14_8=$_POST["P14_8"];
        $sql = "UPDATE locomocion SET P14_8 = '$P14_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_9"])) {
        $P14_9=$_POST["P14_9"];
        $sql = "UPDATE locomocion SET P14_9 = '$P14_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P14_10"])) {
        $P14_10=$_POST["P14_10"];
        $sql = "UPDATE locomocion SET P14_10 = '$P14_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15"])) {
        $sql = "UPDATE locomocion SET P15 = '0', P15_1_1 = '0', P15_1_2 = '0', P15_2 = '0', P15_3 = '0', P15_4 = '0', P15_5 = '0', P15_6 = '0', P15_7 = '0', P15_8 = '0', P15_9 = '0', P15_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_1_1"])) {
        $P15_1_1=$_POST["P15_1_1"];
        $sql = "UPDATE locomocion SET P15_1_1 = '$P15_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_1_2"])) {
        $P15_1_2=$_POST["P15_1_2"];
        $sql = "UPDATE locomocion SET P15_1_2 = '$P15_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_2"])) {
        $P15_2=$_POST["P15_2"];
        $sql = "UPDATE locomocion SET P15_2 = '$P15_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_3"])) {
        $P15_3=$_POST["P15_3"];
        $sql = "UPDATE locomocion SET P15_3 = '$P15_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_4"])) {
        $P15_4=$_POST["P15_4"];
        $sql = "UPDATE locomocion SET P15_4 = '$P15_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_5"])) {
        $P15_5=$_POST["P15_5"];
        $sql = "UPDATE locomocion SET P15_5 = '$P15_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_6"])) {
        $P15_6=$_POST["P15_6"];
        $sql = "UPDATE locomocion SET P15_6 = '$P15_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_7"])) {
        $P15_7=$_POST["P15_7"];
        $sql = "UPDATE locomocion SET P15_7 = '$P15_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_8"])) {
        $P15_8=$_POST["P15_8"];
        $sql = "UPDATE locomocion SET P15_8 = '$P15_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_9"])) {
        $P15_9=$_POST["P15_9"];
        $sql = "UPDATE locomocion SET P15_9 = '$P15_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P15_10"])) {
        $P15_10=$_POST["P15_10"];
        $sql = "UPDATE locomocion SET P15_10 = '$P15_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    
    if(isset($_POST["P16"])) {
        $sql = "UPDATE locomocion SET P16 = '0', P16_1_1 = '0', P16_1_2 = '0', P16_2 = '0', P16_3 = '0', P16_4 = '0', P16_5 = '0', P16_6 = '0', P16_7 = '0', P16_8 = '0', P16_9 = '0', P16_10 = '0'  WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_1_1"])) {
        $P16_1_1=$_POST["P16_1_1"];
        $sql = "UPDATE locomocion SET P16_1_1 = '$P16_1_1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_1_2"])) {
        $P16_1_2=$_POST["P16_1_2"];
        $sql = "UPDATE locomocion SET P16_1_2 = '$P16_1_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_2"])) {
        $P16_2=$_POST["P16_2"];
        $sql = "UPDATE locomocion SET P16_2 = '$P16_2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_3"])) {
        $P16_3=$_POST["P16_3"];
        $sql = "UPDATE locomocion SET P16_3 = '$P16_3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_4"])) {
        $P16_4=$_POST["P16_4"];
        $sql = "UPDATE locomocion SET P16_4 = '$P16_4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_5"])) {
        $P16_5=$_POST["P16_5"];
        $sql = "UPDATE locomocion SET P16_5 = '$P16_5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_6"])) {
        $P16_6=$_POST["P16_6"];
        $sql = "UPDATE locomocion SET P16_6 = '$P16_6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_7"])) {
        $P16_7=$_POST["P16_7"];
        $sql = "UPDATE locomocion SET P16_7 = '$P16_7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_8"])) {
        $P16_8=$_POST["P16_8"];
        $sql = "UPDATE locomocion SET P16_8 = '$P16_8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_9"])) {
        $P16_9=$_POST["P16_9"];
        $sql = "UPDATE locomocion SET P16_9 = '$P16_9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST["P16_10"])) {
        $P16_10=$_POST["P16_10"];
        $sql = "UPDATE locomocion SET P16_10 = '$P16_10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    } 
    
    if(isset($_POST["enviar"])) {
        
        $sql = "SELECT * FROM locomocion WHERE Codigo = '$Codigo'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        
        $P8_1_1=$row['P8_1_1'];
        $P8_2=$row['P8_2'];
        $P8_3=$row['P8_3'];
        $P8_4=$row['P8_4'];
        $P8_5=$row['P8_5'];
        $P8_6=$row['P8_6'];
        $P8_7=$row['P8_7'];
        $P8_8=$row['P8_8'];
        $P8_9=$row['P8_9'];
        $P8_10=$row['P8_10'];
        $P8 = $P8_1_1 + $P8_2 + $P8_3 + $P8_4 +$P8_5 + $P8_6 + $P8_7 + $P8_8 + $P8_9 + $P8_10;
        
        $Riesgo1 = 'Bajo';
        $Riesgo2 = 'Bajo';
        $Riesgo3 = 'Bajo';
        $Riesgo4 = 'Bajo';
        $Riesgo5 = 'Bajo';
        $Riesgo6 = 'Bajo';
        $Riesgo7 = 'Bajo';
        $Riesgo8 = 'Bajo';
        $Riesgo9 = 'Bajo';
        
        if($P8 <= 7){
            $Riesgo1 = 'Bajo';
        } if($P8 >= 8 && $P8 <= 15) {
            $Riesgo1 = 'Medio';
        } if($P8 >= 16 && $P8 <= 20) {
            $Riesgo1 = 'Alto';
        } if($P8 > 20) {
            $Riesgo1 = 'Crítico';
        }
        $P9_1_1=$row['P9_1_1'];
        $P9_2=$row['P9_2'];
        $P9_3=$row['P9_3'];
        $P9_4=$row['P9_4'];
        $P9_5=$row['P9_5'];
        $P9_6=$row['P9_6'];
        $P9_7=$row['P9_7'];
        $P9_8=$row['P9_8'];
        $P9_9=$row['P9_9'];
        $P9_10=$row['P9_10'];
        $P9 = $P9_1_1 + $P9_2 + $P9_3 + $P9_4 +$P9_5 + $P9_6 + $P9_7 + $P9_8 + $P9_9 + $P9_10;
        if($P9 <= 7){
            $Riesgo2 = 'Bajo';
        } if($P9 >= 8 && $P9 <= 15) {
            $Riesgo2 = 'Medio';
        } if($P9 >= 16 && $P9 <= 20) {
            $Riesgo2 = 'Alto';
        } if($P9 > 20) {
            $Riesgo2 = 'Crítico';
        }
    
        $P10_1_1=$row['P10_1_1'];
        $P10_2=$row['P10_2'];
        $P10_3=$row['P10_3'];
        $P10_4=$row['P10_4'];
        $P10_5=$row['P10_5'];
        $P10_6=$row['P10_6'];
        $P10_7=$row['P10_7'];
        $P10_8=$row['P10_8'];
        $P10_9=$row['P10_9'];
        $P10_10=$row['P10_10'];
        $P10 = $P10_1_1 + $P10_2 + $P10_3 + $P10_4 +$P10_5 + $P10_6 + $P10_7 + $P10_8 + $P10_9 + $P10_10;
        if($P10 <= 7){
            $Riesgo3 = 'Bajo';
        } if($P10 >= 8 && $P10 <= 15) {
            $Riesgo3 = 'Medio';
        } if($P10 >= 16 && $P10 <= 20) {
            $Riesgo3 = 'Alto';
        } if($P10 > 20) {
            $Riesgo3 = 'Crítico';
        }
        
        $P11_1_1=$row['P11_1_1'];
        $P11_2=$row['P11_2'];
        $P11_3=$row['P11_3'];
        $P11_4=$row['P11_4'];
        $P11_5=$row['P11_5'];
        $P11_6=$row['P11_6'];
        $P11_7=$row['P11_7'];
        $P11_8=$row['P11_8'];
        $P11_9=$row['P11_9'];
        $P11_10=$row['P11_10'];
        $P11 = $P11_1_1 + $P11_2 + $P11_3 + $P11_4 +$P11_5 + $P11_6 + $P11_7 + $P11_8 + $P11_9 + $P11_10;
        if($P11 <= 7){
            $Riesgo4 = 'Bajo';
        } if($P11 >= 8 && $P11 <= 15) {
            $Riesgo4 = 'Medio';
        } if($P11 >= 16 && $P11 <= 20) {
            $Riesgo4 = 'Alto';
        } if($P11 > 20) {
            $Riesgo4 = 'Crítico';
        }
        
        $P12_1_1=$row['P12_1_1'];
        $P12_2=$row['P12_2'];
        $P12_3=$row['P12_3'];
        $P12_4=$row['P12_4'];
        $P12_5=$row['P12_5'];
        $P12_6=$row['P12_6'];
        $P12_7=$row['P12_7'];
        $P12_8=$row['P12_8'];
        $P12_9=$row['P12_9'];
        $P12_10=$row['P12_10'];
        $P12 = $P12_1_1 + $P12_2 + $P12_3 + $P12_4 +$P12_5 + $P12_6 + $P12_7 + $P12_8 + $P12_9 + $P12_10;
        if($P12 <= 7){
            $Riesgo5 = 'Bajo';
        } if($P12 >= 8 && $P12 <= 15) {
            $Riesgo5 = 'Medio';
        } if($P12 >= 16 && $P12 <= 20) {
            $Riesgo5 = 'Alto';
        } if($P12 > 20) {
            $Riesgo5 = 'Crítico';
        }
        
        $P13_1_1=$row['P13_1_1'];
        $P13_2=$row['P13_2'];
        $P13_3=$row['P13_3'];
        $P13_4=$row['P13_4'];
        $P13_5=$row['P13_5'];
        $P13_6=$row['P13_6'];
        $P13_7=$row['P13_7'];
        $P13_8=$row['P13_8'];
        $P13_9=$row['P13_9'];
        $P13_10=$row['P13_10'];
        $P13 = $P13_1_1 + $P13_2 + $P13_3 + $P13_4 +$P13_5 + $P13_6 + $P13_7 + $P13_8 + $P13_9 + $P13_10;
        if($P13 <= 7){
            $Riesgo6 = 'Bajo';
        } if($P13 >= 8 && $P13 <= 15) {
            $Riesgo6 = 'Medio';
        } if($P13 >= 16 && $P13 <= 20) {
            $Riesgo6 = 'Alto';
        } if($P13 > 20) {
            $Riesgo6 = 'Crítico';
        }
        
        $P14_1_1=$row['P14_1_1'];
        $P14_2=$row['P14_2'];
        $P14_3=$row['P14_3'];
        $P14_4=$row['P14_4'];
        $P14_5=$row['P14_5'];
        $P14_6=$row['P14_6'];
        $P14_7=$row['P14_7'];
        $P14_8=$row['P14_8'];
        $P14_9=$row['P14_9'];
        $P14_10=$row['P14_10'];
        $P14 = $P14_1_1 + $P14_2 + $P14_3 + $P14_4 +$P14_5 + $P14_6 + $P14_7 + $P14_8 + $P14_9 + $P14_10;
        if($P14 <= 7){
            $Riesgo7 = 'Bajo';
        } if($P14 >= 8 && $P14 <= 15) {
            $Riesgo7 = 'Medio';
        } if($P14 >= 16 && $P14 <= 20) {
            $Riesgo7 = 'Alto';
        } if($P14 > 20) {
            $Riesgo7 = 'Crítico';
        }
        
        $P15_1_1=$row['P15_1_1'];
        $P15_2=$row['P15_2'];
        $P15_3=$row['P15_3'];
        $P15_4=$row['P15_4'];
        $P15_5=$row['P15_5'];
        $P15_6=$row['P15_6'];
        $P15_7=$row['P15_7'];
        $P15_8=$row['P15_8'];
        $P15_9=$row['P15_9'];
        $P15_10=$row['P15_10'];
        $P15 = $P15_1_1 + $P15_2 + $P15_3 + $P15_4 +$P15_5 + $P15_6 + $P15_7 + $P15_8 + $P15_9 + $P15_10;
        if($P15 <= 7){
            $Riesgo8 = 'Bajo';
        } if($P15 >= 8 && $P15 <= 15) {
            $Riesgo8 = 'Medio';
        } if($P15>= 16 && $P15 <= 20) {
            $Riesgo8 = 'Alto';
        } if($P15 > 20) {
            $Riesgo8 = 'Crítico';
        }
        
        $P16_1_1=$row['P16_1_1'];
        $P16_2=$row['P16_2'];
        $P16_3=$row['P16_3'];
        $P16_4=$row['P16_4'];
        $P16_5=$row['P16_5'];
        $P16_6=$row['P16_6'];
        $P16_7=$row['P16_7'];
        $P16_8=$row['P16_8'];
        $P16_9=$row['P16_9'];
        $P16_10=$row['P16_10'];
        $P16 = $P16_1_1 + $P16_2 + $P16_3 + $P16_4 +$P16_5 + $P16_6 + $P16_7 + $P16_8 + $P16_9 + $P16_10;
        if($P16 <= 7){
            $Riesgo9 = 'Bajo';
        } if($P16 >= 8 && $P16 <= 15) {
            $Riesgo9 = 'Medio';
        } if($P16 >= 16 && $P16 <= 20) {
            $Riesgo9 = 'Alto';
        } if($P16 > 20) {
            $Riesgo9 = 'Crítico';
        }

        $Riesgo = array(0 => $Riesgo1, 1 => $Riesgo2, 2 => $Riesgo3, 3 => $Riesgo4, 4 => $Riesgo5, 5 => $Riesgo6, 6 => $Riesgo7, 7 => $Riesgo8, 8 => $Riesgo9); 
        $Bajo_keys = (array_keys($Riesgo, 'Bajo')); 
        $Bajo = count($Bajo_keys); 
        $Medio_keys = (array_keys($Riesgo, 'Medio')); 
        $Medio = count($Medio_keys); 
        $Alto_keys = (array_keys($Riesgo, 'Alto')); 
        $Alto = count($Alto_keys); 
        $Critico_keys = (array_keys($Riesgo, 'Crítico')); 
        $Critico = count($Critico_keys); 
        
        $GES = '0';
        
        if ($Bajo == 9) {
            $GES = 1;
            $Riesgo = 'Bajo';
        }
        if ($Medio >= 1 && $Medio <= 4 && $Bajo <= 8 && $Alto == '0' && $Critico ==  '0') {
            $GES = 2;
            $Riesgo = 'Medio';
        }
        if (($Alto >= 1 && $Alto <= 3) || $Medio >= 4 && $Critico ==  '0') {
            $GES = 3;
            $Riesgo = 'Alto';
        }
         if ($Alto >= 4 || $Critico >= 1) {
            $GES = 4;
            $Riesgo = 'Crítico';
        }
        
        $sql = "UPDATE locomocion SET P8 = $P8, Riesgo1 = '$Riesgo1', P9 = $P9, Riesgo2 = '$Riesgo2', P10 = $P10, Riesgo3 = '$Riesgo3', P11 = $P11, Riesgo4 = '$Riesgo4', P12 = $P12, Riesgo5 = '$Riesgo5', P13 = $P13, Riesgo6 = '$Riesgo6', P14 = $P14, Riesgo7 = '$Riesgo7', P15 = $P15, Riesgo8 = '$Riesgo8',  P16 = $P16, Riesgo9 = '$Riesgo9', GES = '$GES', Riesgo = '$Riesgo', Enviado = 1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
?>    
    
    