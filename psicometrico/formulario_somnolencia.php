<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    $Codigo = $_POST['Codigo'];
    $sql = "SELECT * FROM formulario_somnolencia WHERE Codigo = '$Codigo'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Item = $row['Item1']+$row['Item2']+$row['Item3']+$row['Item4']+$row['Item5']+$row['Item6']+$row['Item7']+$row['Item8'];
    
    if(isset($_POST['Item1'])) {
        $Item1 = $_POST['Item1'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item1 = $Item1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item1;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result2 = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item2'])) {
        $Item2 = $_POST['Item2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item2 = $Item2 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item2;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item3'])) {
        $Item3 = $_POST['Item3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item3 = $Item3 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item3;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item4'])) {
        $Item4 = $_POST['Item4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item4 = $Item4 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item4;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item5'])) {
        $Item5 = $_POST['Item5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item5 = $Item5 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item5;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item6'])) {
        $Item6 = $_POST['Item6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item6 = $Item6 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item6;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item7'])) {
        $Item7 = $_POST['Item7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item7 = $Item7 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item7;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
    if(isset($_POST['Item8'])) {
        $Item8 = $_POST['Item8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_somnolencia SET Item8 = $Item8 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
        if($result) {
            $Items = $Item + $Item8;
            $sql = "UPDATE formulario_somnolencia SET Items = $Items WHERE Codigo = '$Codigo'";
            $result = $mysqli->query($sql);
        }
    }
   