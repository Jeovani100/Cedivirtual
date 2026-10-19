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
        $sql = "UPDATE formulario_eysenck SET Item1 = $Item1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item2'])) {
        $Item2 = $_POST['Item2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item2 = $Item2 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item3'])) {
        $Item3 = $_POST['Item3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item3 = $Item3 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item4'])) {
        $Item4 = $_POST['Item4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item4 = $Item4 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item5'])) {
        $Item5 = $_POST['Item5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item5 = $Item5 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item6'])) {
        $Item6 = $_POST['Item6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item6 = $Item6 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item7'])) {
        $Item7 = $_POST['Item7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item7 = $Item7 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item8'])) {
        $Item8 = $_POST['Item8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item8 = $Item8 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item9'])) {
        $Item9 = $_POST['Item9'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item9 = $Item9 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item10'])) {
        $Item10 = $_POST['Item10'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item10 = $Item10 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item11'])) {
        $Item11 = $_POST['Item11'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item11 = $Item11 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item12'])) {
        $Item12 = $_POST['Item12'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item12 = $Item12 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item13'])) {
        $Item13 = $_POST['Item13'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item13 = $Item13 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item14'])) {
        $Item14 = $_POST['Item14'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item14 = $Item14 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item15'])) {
        $Item15 = $_POST['Item15'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item15 = $Item15 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item16'])) {
        $Item16 = $_POST['Item16'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item16 = $Item16 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item17'])) {
        $Item17 = $_POST['Item17'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item17 = $Item17 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item18'])) {
        $Item18 = $_POST['Item18'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item18 = $Item18 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item19'])) {
        $Item19 = $_POST['Item19'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item19 = $Item19 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item20'])) {
        $Item20 = $_POST['Item20'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item20 = $Item20 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item21'])) {
        $Item21 = $_POST['Item21'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item21 = $Item21 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item22'])) {
        $Item22 = $_POST['Item22'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item22 = $Item22 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item23'])) {
        $Item23 = $_POST['Item23'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item23 = $Item23 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item24'])) {
        $Item24 = $_POST['Item24'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item24 = $Item24 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item25'])) {
        $Item25 = $_POST['Item25'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item25 = $Item25 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item26'])) {
        $Item26 = $_POST['Item26'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item26 = $Item26 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item27'])) {
        $Item27 = $_POST['Item27'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item27 = $Item27 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item28'])) {
        $Item28 = $_POST['Item28'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item28 = $Item28 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item29'])) {
        $Item29 = $_POST['Item29'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item29 = $Item29 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item30'])) {
        $Item30 = $_POST['Item30'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item30 = $Item30 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item31'])) {
        $Item31 = $_POST['Item31'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item31 = $Item31 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item32'])) {
        $Item32 = $_POST['Item32'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item32 = $Item32 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item33'])) {
        $Item33 = $_POST['Item33'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item33 = $Item33 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item34'])) {
        $Item34 = $_POST['Item34'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item34 = $Item34 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item35'])) {
        $Item35 = $_POST['Item35'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item35 = $Item35 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item36'])) {
        $Item36 = $_POST['Item36'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item36 = $Item36 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Item37'])) {
        $Item37 = $_POST['Item37'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item37 = $Item37 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item38'])) {
        $Item38 = $_POST['Item38'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item38 = $Item38 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item39'])) {
        $Item39 = $_POST['Item39'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item39 = $Item39 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item40'])) {
        $Item40 = $_POST['Item40'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item40= $Item40 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item41'])) {
        $Item41 = $_POST['Item41'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item41= $Item41 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item42'])) {
        $Item42 = $_POST['Item42'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item42= $Item42 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item43'])) {
        $Item43 = $_POST['Item43'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item43= $Item43 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item44'])) {
        $Item44 = $_POST['Item44'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item44= $Item44 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item45'])) {
        $Item45 = $_POST['Item45'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item45= $Item45 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item46'])) {
        $Item46 = $_POST['Item46'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item46= $Item46 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item47'])) {
        $Item47 = $_POST['Item47'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item47= $Item47 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item48'])) {
        $Item48 = $_POST['Item48'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item48= $Item48 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item49'])) {
        $Item49 = $_POST['Item49'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item49= $Item49 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item50'])) {
        $Item50 = $_POST['Item50'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item50= $Item50 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item51'])) {
        $Item51 = $_POST['Item51'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item51= $Item51 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item52'])) {
        $Item52 = $_POST['Item52'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item52= $Item52 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item53'])) {
        $Item53 = $_POST['Item53'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item53= $Item53 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item54'])) {
        $Item54 = $_POST['Item54'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item54= $Item54 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item55'])) {
        $Item55 = $_POST['Item55'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item55= $Item55 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item56'])) {
        $Item56 = $_POST['Item56'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item56= $Item56 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item57'])) {
        $Item57 = $_POST['Item57'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_eysenck SET Item57= $Item57 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
   