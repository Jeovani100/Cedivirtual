<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");     
    if (isset($_POST['id'])) {
        $id=$_POST["id"];
        $sql = "SELECT * FROM verificacion WHERE id = '$id'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion SET P1 = '$P1' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion SET P2 = '$P2' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion SET P3 = '$P3' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion SET P4 = '$P4' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion SET P5 = '$P5' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion SET P6 = '$P6' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion SET P7 = '$P7' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion SET P8 = '$P8' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion SET P9 = '$P9' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion SET P10 = '$P10' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion SET P11 = '$P11' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion SET P12 = '$P12' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion SET E1 = '$E1' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion SET E2 = '$E2' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion SET E3 = '$E3' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion SET E4 = '$E4' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion SET E5 = '$E5' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion SET E6 = '$E6' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion SET E7 = '$E7' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion SET E8 = '$E8' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion SET E9 = '$E9' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion SET E10 = '$E10' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion SET E11 = '$E11' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion SET E12 = '$E12' WHERE id = '$id'";
            $result = $mysqli->query($sql);
        }
    }
    
    if (isset($_POST['id2'])) {
        $id2=$_POST["id2"];
        $sql = "SELECT * FROM verificacion2 WHERE id = '$id2'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion2 SET P1 = '$P1' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion2 SET P2 = '$P2' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion2 SET P3 = '$P3' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion2 SET P4 = '$P4' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion2 SET P5 = '$P5' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion2 SET P6 = '$P6' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion2 SET P7 = '$P7' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion2 SET P8 = '$P8' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion2 SET P9 = '$P9' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion2 SET P10 = '$P10' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion2 SET P11 = '$P11' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion2 SET P12 = '$P12' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion2 SET E1 = '$E1' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion2 SET E2 = '$E2' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion2 SET E3 = '$E3' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion2 SET E4 = '$E4' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion2 SET E5 = '$E5' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion2 SET E6 = '$E6' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion2 SET E7 = '$E7' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion2 SET E8 = '$E8' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion2 SET E9 = '$E9' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion2 SET E10 = '$E10' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion2 SET E11 = '$E11' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion2 SET E12 = '$E12' WHERE id = '$id2'";
            $result = $mysqli->query($sql);
        }
    }
    
    if (isset($_POST['id3'])) {
        $id3=$_POST["id3"];
        $sql = "SELECT * FROM verificacion3 WHERE id = '$id3'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion3 SET P1 = '$P1' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion3 SET P2 = '$P2' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion3 SET P3 = '$P3' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion3 SET P4 = '$P4' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion3 SET P5 = '$P5' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion3 SET P6 = '$P6' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion3 SET P7 = '$P7' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion3 SET P8 = '$P8' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion3 SET P9 = '$P9' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion3 SET P10 = '$P10' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion3 SET P11 = '$P11' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion3 SET P12 = '$P12' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion3 SET E1 = '$E1' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion3 SET E2 = '$E2' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion3 SET E3 = '$E3' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion3 SET E4 = '$E4' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion3 SET E5 = '$E5' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion3 SET E6 = '$E6' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion3 SET E7 = '$E7' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion3 SET E8 = '$E8' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion3 SET E9 = '$E9' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion3 SET E10 = '$E10' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion3 SET E11 = '$E11' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion3 SET E12 = '$E12' WHERE id = '$id3'";
            $result = $mysqli->query($sql);
        }
    }
    
      if (isset($_POST['id4'])) {
        $id4=$_POST["id4"];
        $sql = "SELECT * FROM verificacion4 WHERE id = '$id4'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion4 SET P1 = '$P1' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion4 SET P2 = '$P2' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion4 SET P3 = '$P3' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion4 SET P4 = '$P4' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion4 SET P5 = '$P5' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion4 SET P6 = '$P6' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion4 SET P7 = '$P7' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion4 SET P8 = '$P8' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion4 SET P9 = '$P9' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion4 SET P10 = '$P10' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion4 SET P11 = '$P11' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion4 SET P12 = '$P12' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion4 SET E1 = '$E1' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion4 SET E2 = '$E2' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion4 SET E3 = '$E3' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion4 SET E4 = '$E4' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion4 SET E5 = '$E5' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion4 SET E6 = '$E6' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion4 SET E7 = '$E7' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion4 SET E8 = '$E8' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion4 SET E9 = '$E9' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion4 SET E10 = '$E10' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion4 SET E11 = '$E11' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion4 SET E12 = '$E12' WHERE id = '$id4'";
            $result = $mysqli->query($sql);
        }
    }
    
     if (isset($_POST['id5'])) {
        $id5=$_POST["id5"];
        $sql = "SELECT * FROM verificacion5 WHERE id = '$id5'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion5 SET P1 = '$P1' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion5 SET P2 = '$P2' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion5 SET P3 = '$P3' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion5 SET P4 = '$P4' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion5 SET P5 = '$P5' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion5 SET P6 = '$P6' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion5 SET P7 = '$P7' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion5 SET P8 = '$P8' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion5 SET P9 = '$P9' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion5 SET P10 = '$P10' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion5 SET P11 = '$P11' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion5 SET P12 = '$P12' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion5 SET E1 = '$E1' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion5 SET E2 = '$E2' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion5 SET E3 = '$E3' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion5 SET E4 = '$E4' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion5 SET E5 = '$E5' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion5 SET E6 = '$E6' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion5 SET E7 = '$E7' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion5 SET E8 = '$E8' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion5 SET E9 = '$E9' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion5 SET E10 = '$E10' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion5 SET E11 = '$E11' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion5 SET E12 = '$E12' WHERE id = '$id5'";
            $result = $mysqli->query($sql);
        }
    }
    
     if (isset($_POST['id6'])) {
        $id6=$_POST["id6"];
        $sql = "SELECT * FROM verificacion6 WHERE id = '$id6'"; 
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $P1_0 = $row['P1'];
        if($P1_0 == '0') {
           $P1 = 1; 
        } else {
           $P1 = 0; 
        }
        if(isset($_POST['P1'])) {
            $sql = "UPDATE verificacion6 SET P1 = '$P1' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P2_0 = $row['P2'];
        if($P2_0 == 0) {
           $P2 = 1; 
        } else {
           $P2 = 0; 
        }
         if(isset($_POST['P2'])) {
            $sql = "UPDATE verificacion6 SET P2 = '$P2' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P3_0 = $row['P3'];
        if($P3_0 == 0) {
           $P3 = 1; 
        } else {
           $P3 = 0; 
        }
         if(isset($_POST['P3'])) {
            $sql = "UPDATE verificacion6 SET P3 = '$P3' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P4_0 = $row['P4'];
        if($P4_0 == 0) {
           $P4 = 1; 
        } else {
           $P4 = 0; 
        }
         if(isset($_POST['P4'])) {
            $sql = "UPDATE verificacion6 SET P4 = '$P4' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P5_0 = $row['P5'];
        if($P5_0 == 0) {
           $P5 = 1; 
        } else {
           $P5 = 0; 
        }
         if(isset($_POST['P5'])) {
            $sql = "UPDATE verificacion6 SET P5 = '$P5' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P6_0 = $row['P6'];
        if($P6_0 == 0) {
           $P6 = 1; 
        } else {
           $P6 = 0; 
        }
         if(isset($_POST['P6'])) {
            $sql = "UPDATE verificacion6 SET P6 = '$P6' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P7_0 = $row['P7'];
        if($P7_0 == 0) {
           $P7 = 1; 
        } else {
           $P7 = 0; 
        }
         if(isset($_POST['P7'])) {
            $sql = "UPDATE verificacion6 SET P7 = '$P7' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P8_0 = $row['P8'];
        if($P8_0 == 0) {
           $P8 = 1; 
        } else {
           $P8 = 0; 
        }
         if(isset($_POST['P8'])) {
            $sql = "UPDATE verificacion6 SET P8 = '$P8' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P9_0 = $row['P9'];
        if($P9_0 == 0) {
           $P9 = 1; 
        } else {
           $P9 = 0; 
        }
         if(isset($_POST['P9'])) {
            $sql = "UPDATE verificacion6 SET P9 = '$P9' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P10_0 = $row['P10'];
        if($P10_0 == 0) {
           $P10 = 1; 
        } else {
           $P10 = 0; 
        }
         if(isset($_POST['P10'])) {
            $sql = "UPDATE verificacion6 SET P10 = '$P10' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P11_0 = $row['P11'];
        if($P11_0 == 0) {
           $P11 = 1; 
        } else {
           $P11 = 0; 
        }
         if(isset($_POST['P11'])) {
            $sql = "UPDATE verificacion6 SET P11 = '$P11' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $P12_0 = $row['P12'];
        if($P12_0 == 0) {
           $P12 = 1; 
        } else {
           $P12 = 0; 
        }
         if(isset($_POST['P12'])) {
            $sql = "UPDATE verificacion6 SET P12 = '$P12' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E1_0 = $row['E1'];
        if($E1_0 == 0) {
           $E1 = 1; 
        } else {
           $E1 = 0; 
        }
         if(isset($_POST['E1'])) {
            $sql = "UPDATE verificacion6 SET E1 = '$E1' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E2_0 = $row['E2'];
        if($E2_0 == 0) {
           $E2 = 1; 
        } else {
           $E2 = 0; 
        }
         if(isset($_POST['E2'])) {
            $sql = "UPDATE verificacion6 SET E2 = '$E2' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E3_0 = $row['E3'];
        if($E3_0 == 0) {
           $E3 = 1; 
        } else {
           $E3 = 0; 
        }
         if(isset($_POST['E3'])) {
            $sql = "UPDATE verificacion6 SET E3 = '$E3' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E4_0 = $row['E4'];
        if($E4_0 == 0) {
           $E4 = 1; 
        } else {
           $E4 = 0; 
        }
         if(isset($_POST['E4'])) {
            $sql = "UPDATE verificacion6 SET E4 = '$E4' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E5_0 = $row['E5'];
        if($E5_0 == 0) {
           $E5 = 1; 
        } else {
           $E5 = 0; 
        }
         if(isset($_POST['E5'])) {
            $sql = "UPDATE verificacion6 SET E5 = '$E5' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E6_0 = $row['E6'];
        if($E6_0 == 0) {
           $E6 = 1; 
        } else {
           $E6 = 0; 
        }
         if(isset($_POST['E6'])) {
            $sql = "UPDATE verificacion6 SET E6 = '$E6' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E7_0 = $row['E7'];
        if($E7_0 == 0) {
           $E7 = 1; 
        } else {
           $E7 = 0; 
        }
         if(isset($_POST['E7'])) {
            $sql = "UPDATE verificacion6 SET E7 = '$E7' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E8_0 = $row['E8'];
        if($E8_0 == 0) {
           $E8 = 1; 
        } else {
           $E8 = 0; 
        }
         if(isset($_POST['E8'])) {
            $sql = "UPDATE verificacion6 SET E8 = '$E8' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E9_0 = $row['E9'];
        if($E9_0 == 0) {
           $E9 = 1; 
        } else {
           $E9 = 0; 
        }
         if(isset($_POST['E9'])) {
            $sql = "UPDATE verificacion6 SET E9 = '$E9' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E10_0 = $row['E10'];
        if($E10_0 == 0) {
           $E10 = 1; 
        } else {
           $E10 = 0; 
        }
         if(isset($_POST['E10'])) {
            $sql = "UPDATE verificacion6 SET E10 = '$E10' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E11_0 = $row['E11'];
        if($E11_0 == 0) {
           $E11 = 1; 
        } else {
           $E11 = 0; 
        }
         if(isset($_POST['E11'])) {
            $sql = "UPDATE verificacion6 SET E11 = '$E11' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
        $E12_0 = $row['E12'];
        if($E12_0 == 0) {
           $E12 = 1; 
        } else {
           $E12 = 0; 
        }
         if(isset($_POST['E12'])) {
            $sql = "UPDATE verificacion6 SET E12 = '$E12' WHERE id = '$id6'";
            $result = $mysqli->query($sql);
        }
    }
    
?>