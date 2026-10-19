<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if(isset($_POST['Item1'])) {
        $Item1 = $_POST['Item1'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item1 = $Item1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item2'])) {
        $Item2 = $_POST['Item2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item2 = $Item2 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item3'])) {
        $Item3 = $_POST['Item3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item3 = $Item3 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item4'])) {
        $Item4 = $_POST['Item4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item4 = $Item4 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item5'])) {
        $Item5 = $_POST['Item5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item5 = $Item5 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item6'])) {
        $Item6 = $_POST['Item6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item6 = $Item6 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item7'])) {
        $Item7 = $_POST['Item7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item7 = $Item7 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item8'])) {
        $Item8 = $_POST['Item8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item8 = $Item8 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item9'])) {
        $Item9 = $_POST['Item9'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item9 = $Item9 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item10'])) {
        $Item10 = $_POST['Item10'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item10 = $Item10 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item11'])) {
        $Item11 = $_POST['Item11'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item11 = $Item11 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item12'])) {
        $Item12 = $_POST['Item12'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item12 = $Item12 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item13'])) {
        $Item13 = $_POST['Item13'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item13 = $Item13 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item14'])) {
        $Item14 = $_POST['Item14'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item14 = $Item14 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item15'])) {
        $Item15 = $_POST['Item15'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item15 = $Item15 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item16'])) {
        $Item16 = $_POST['Item16'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item16 = $Item16 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item17'])) {
        $Item17 = $_POST['Item17'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item17 = $Item17 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item18'])) {
        $Item18 = $_POST['Item18'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item18 = $Item18 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item19'])) {
        $Item19 = $_POST['Item19'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item19 = $Item19 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item20'])) {
        $Item20 = $_POST['Item20'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item20 = $Item20 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item21'])) {
        $Item21 = $_POST['Item21'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item21 = $Item21 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item22'])) {
        $Item22 = $_POST['Item22'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item22 = $Item22 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item23'])) {
        $Item23 = $_POST['Item23'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item23 = $Item23 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item24'])) {
        $Item24 = $_POST['Item24'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item24 = $Item24 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item25'])) {
        $Item25 = $_POST['Item25'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item25 = $Item25 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item26'])) {
        $Item26 = $_POST['Item26'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item26 = $Item26 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item27'])) {
        $Item27 = $_POST['Item27'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item27 = $Item27 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item28'])) {
        $Item28 = $_POST['Item28'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item28 = $Item28 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item29'])) {
        $Item29 = $_POST['Item29'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item29 = $Item29 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item30'])) {
        $Item30 = $_POST['Item30'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item30 = $Item30 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item31'])) {
        $Item31 = $_POST['Item31'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item31 = $Item31 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item32'])) {
        $Item32 = $_POST['Item32'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item32 = $Item32 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item33'])) {
        $Item33 = $_POST['Item33'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item33 = $Item33 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item34'])) {
        $Item34 = $_POST['Item34'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item34 = $Item34 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item35'])) {
        $Item35 = $_POST['Item35'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item35 = $Item35 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item36'])) {
        $Item36 = $_POST['Item36'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item36 = $Item36 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item37'])) {
        $Item37 = $_POST['Item37'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item37 = $Item37 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item38'])) {
        $Item38 = $_POST['Item38'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item38 = $Item38 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item39'])) {
        $Item39 = $_POST['Item39'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item39 = $Item39 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item40'])) {
        $Item40 = $_POST['Item40'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_tamiz SET Item40= $Item40 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
   