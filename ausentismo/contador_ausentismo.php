 <?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalu_usuario", "cedisalu_jeovani", "Jeovani_0313");
    $connect -> exec("SET CHARACTER SET utf8");

    $codigo = $_POST['Codigo'];
    $year = $_POST['year'];
    
    $sql = "SELECT * FROM controles_ausentismo2 WHERE id_admin = '$codigo' && Centro_ !='' && Centro_existe = '#e7744f'";
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
    
    
    $sql = "SELECT COUNT(*) as total FROM reg_ausentismo WHERE Ano0 = $year && id_admin2 = '$codigo' && Centro !='' && Mes0 != '0' && Ano0 != '0' && (Centro = '$Centro1' || Centro = '$Centro2' || Centro = '$Centro3' || Centro = '$Centro4' || Centro = '$Centro5' || Centro = '$Centro6' || Centro = '$Centro7' || Centro = '$Centro8' || Centro = '$Centro9' || Centro = '$Centro10' || Centro = '$Centro11' || Centro = '$Centro12' || Centro = '$Centro13' || Centro = '$Centro14' || Centro = '$Centro15' || Centro = '$Centro16' || Centro = '$Centro17' || Centro = '$Centro18' || Centro = '$Centro19' || Centro = '$Centro20' || Centro = '$Centro21' || Centro = '$Centro22' || Centro = '$Centro23' || Centro = '$Centro24' || Centro = '$Centro25' || Centro = '$Centro26' || Centro = '$Centro27' || Centro = '$Centro28' || Centro = '$Centro29' || Centro = '$Centro30' || Centro = '$Centro31' || Centro = '$Centro32' || Centro = '$Centro33' || Centro = '$Centro34' || Centro = '$Centro35' || Centro = '$Centro36' || Centro = '$Centro37' || Centro = '$Centro38' || Centro = '$Centro39' || Centro = '$Centro40' || Centro = '$Centro41' || Centro = '$Centro42' || Centro = '$Centro43' || Centro = '$Centro44' || Centro = '$Centro45' || Centro = '$Centro46' || Centro = '$Centro47' || Centro = '$Centro48' || Centro = '$Centro49' || Centro = '$Centro50')";   
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios = $resultado['total']; 
    $json[] = array(
            'contador' => $total_usuarios,
        );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>