<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $Codigo = $_POST['Codigo'];
    $sql = "SELECT * FROM formulario_neurotoxicos WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Item = $row['Item1']+$row['Item2']+$row['Item3']+$row['Item4']+$row['Item5']+$row['Item6']+$row['Item7']+$row['Item8']+$row['Item9']+$row['Item10']+$row['Item11']+$row['Item12']+$row['Item13']+$row['Item14']+$row['Item15']+$row['Item16'];
    
    if(isset($_POST['Item1'])) {
        $Item1 = $_POST['Item1'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item1 = $Item1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item1;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result2 = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item2'])) {
        $Item2 = $_POST['Item2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item2 = $Item2 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item2;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item3'])) {
        $Item3 = $_POST['Item3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item3 = $Item3 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item3;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item4'])) {
        $Item4 = $_POST['Item4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item4 = $Item4 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item4;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item5'])) {
        $Item5 = $_POST['Item5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item5 = $Item5 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item5;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item6'])) {
        $Item6 = $_POST['Item6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item6 = $Item6 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item6;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item7'])) {
        $Item7 = $_POST['Item7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item7 = $Item7 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item7;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item8'])) {
        $Item8 = $_POST['Item8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item8 = $Item8 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item8;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item9'])) {
        $Item9 = $_POST['Item9'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item9 = $Item9 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item9;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item10'])) {
        $Item10 = $_POST['Item10'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item10 = $Item10 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item10;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item11'])) {
        $Item11 = $_POST['Item11'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item11 = $Item11 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item11;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item12'])) {
        $Item12 = $_POST['Item12'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item12 = $Item12 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item8;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item13'])) {
        $Item13 = $_POST['Item13'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item13 = $Item13 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item13;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item14'])) {
        $Item14 = $_POST['Item14'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item14 = $Item14 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item14;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item15'])) {
        $Item15 = $_POST['Item15'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item15 = $Item15 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item15;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item16'])) {
        $Item16 = $_POST['Item16'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_neurotoxicos SET Item16 = $Item16 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item16;
            $sql = "UPDATE formulario_neurotoxicos SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
   