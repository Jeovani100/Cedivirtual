<?php
include_once 'app/conexion.inc.php';
include_once 'app/config.inc.php';
$connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect -> exec("SET CHARACTER SET utf8");
$mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
mysqli_set_charset($mysqli, "utf8"); 
if (isset($_POST['idestres'])) {
    $idestres = $_POST["idestres"];
    $forma = $_POST["formaES"];
    $ES1 = $_POST["estres1"];
    $ES2 = $_POST["estres2"];
    $ES3 = $_POST["estres3"];
    $ES4 = $_POST["estres4"];
    $ES5 = $_POST["estres5"];
    $ES6 = $_POST["estres6"];
    $ES7 = $_POST["estres7"];
    $ES8 = $_POST["estres8"];
    $ES9 = $_POST["estres9"];
    $ES10 = $_POST["estres10"];
    $ES11 = $_POST["estres11"];
    $ES12 = $_POST["estres12"];
    $ES13 = $_POST["estres13"];
    $ES14 = $_POST["estres14"];
    $ES15 = $_POST["estres15"];
    $ES16 = $_POST["estres16"];
    $ES17 = $_POST["estres17"];
    $ES18 = $_POST["estres18"];
    $ES19 = $_POST["estres19"];
    $ES20 = $_POST["estres20"];
    $ES21 = $_POST["estres21"];
    $ES22 = $_POST["estres22"];
    $ES23 = $_POST["estres23"];
    $ES24 = $_POST["estres24"];
    $ES25 = $_POST["estres25"];
    $ES26 = $_POST["estres26"];
    $ES27 = $_POST["estres27"];
    $ES28 = $_POST["estres28"];
    $ES29 = $_POST["estres29"];
    $ES30 = $_POST["estres30"];
    $ES31 = $_POST["estres31"];
    
    $ES01 = ((($ES1 + $ES2 + $ES3 + $ES4 + $ES5 + $ES6 + $ES7 + $ES8) / 8) * 4);
    $ES02 = ((($ES9 + $ES10 + $ES11 + $ES12) / 4) * 3);
    $ES03 = ((($ES13 + $ES14 + $ES15 + $ES16 + $ES17 + $ES18 + $ES19 + $ES20 + $ES21 + $ES22) / 10) * 2);
    $ES04 = (($ES23 + $ES24 + $ES25 + $ES26 + $ES27 + $ES28 + $ES29 + $ES30 + $ES31) / 8);
    $EST0 = ((($ES01 + $ES02 + $ES03 + $ES04) / 61.16) * 100);
    $ES33 = round($EST0, 1, PHP_ROUND_HALF_UP);
    if ($ES33 != 0) {$ES = $ES33;} else {$ES = 0.1;}

    $ESt1 = ((($ES01 * 4) / 61.16) * 100);
    $EST1 = round($ESt1, 1, PHP_ROUND_HALF_UP);
    $ESt2 = ((($ES02 * 4) / 61.16) * 100);
    $EST2 = round($ESt2, 1, PHP_ROUND_HALF_UP);
    $ESt3 = ((($ES03 * 4) / 61.16) * 100);
    $EST3 = round($ESt3, 1, PHP_ROUND_HALF_UP);
    $ESt4 = ((($ES04 * 4) / 61.16) * 100);
    $EST4 = round($ESt4, 1, PHP_ROUND_HALF_UP);
    
    $sql = "INSERT INTO estres (id_usuario, Forma, EST1, EST2, EST3, EST4, ES, I1, I2, I3, I4, I5, I6, I7, I8, I9, I10, I11, I12, I13, I14, I15, I16, I17, I18, I19, I20, I21, I22, I23, I24, I25, I26, I27, I28, I29, I30, I31, Fecha) 
    VALUES ($idestres, '$forma', '$EST1', '$EST2', '$EST3', '$EST4', '$ES', '$ES1', '$ES2', '$ES3', '$ES4', '$ES5', '$ES6', '$ES7', '$ES8', '$ES9', '$ES10', '$ES11', '$ES12', '$ES13', '$ES14', '$ES15', '$ES16', '$ES17', '$ES18', '$ES19', '$ES20', '$ES21', '$ES22', '$ES23', '$ES24', '$ES25', '$ES26', '$ES27', '$ES28', '$ES29', '$ES30', '$ES31', NOW())";
    $resultado = $mysqli->query($sql);
    
       if ($sumaformaES = 'B') { 
                    if ($ES > 23.5) {
                        $ES5= 'Muy Alto';
                    } elseif ($ES > 17.1) {
                        $ES5= 'Alto';
                    } elseif ($ES > 11.9) {
                        $ES5= 'Medio';
                    } elseif ($ES > 6.6) {
                        $ES5= 'Bajo';
                    } elseif ($ES > 0) {
                        $ES5= 'Sin Riesgo';
                    }
        } else { 
                    if ($ES > 25.1) {
                        $ES5= 'Muy Alto';
                    } elseif ($ES > 17.8) {
                        $ES5= 'Alto';
                    } elseif ($ES > 12.7) {
                        $ES5= 'Medio';
                    } elseif ($ES > 7.9) {
                        $ES5= 'Bajo';
                    } elseif ($ES > 0) {
                        $ES5= 'Sin Riesgo';
                    }
        };
    
    $sql = "UPDATE datosg SET Estres = $ES, R_54 = '$ES5' WHERE id = '$idestres'";
    $resultado = $mysqli->query($sql);
};

?>