<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
	$id_admin = $_POST['id_admin'];
	$Codigo = $_POST['Codigo'];
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Inicio0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Inicio0 = $row['Inicio'];
    $date1 = new DateTime($Inicio0);
    $Inicio =  $date1->format('d-m-Y');
    $_SESSION['Inicio'] = $Inicio;
    $_SESSION['Inicio0'] = $Inicio0;
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $date2 = new DateTime($Terminacion0);
    $Terminacion =  $date2->format('d-m-Y');
    $_SESSION['Terminacion'] = $Terminacion;
    $_SESSION['Terminacion0'] = $Terminacion0;
   
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Certificada !='' && certificada_existe = '#e7744f'";
    $resultado_certificada = $mysqli->query($sql);
    function mostrarDatos ($resultado_certificada) {
    if ($resultado_certificada !=NULL) {
        return $resultado_certificada['Certificada'];}
    }
    $extraido1= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada1'] = mostrarDatos($extraido1);
    $extraido2= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada2'] = mostrarDatos($extraido2);
    $extraido3= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada3'] = mostrarDatos($extraido3);
    $extraido4= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada4'] = mostrarDatos($extraido4);
    $extraido5= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada5'] = mostrarDatos($extraido5);
    $extraido6= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada6'] = mostrarDatos($extraido6);
    $extraido7= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada7'] = mostrarDatos($extraido7);
    $extraido8= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada8'] = mostrarDatos($extraido8);
    $extraido9= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada9'] = mostrarDatos($extraido9);
    $extraido10= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada10'] = mostrarDatos($extraido10);
    $extraido11= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada11'] = mostrarDatos($extraido11);
    $extraido12= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada12'] = mostrarDatos($extraido12);
    $extraido13= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada13'] = mostrarDatos($extraido13);
    $extraido14= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada14'] = mostrarDatos($extraido14);
    $extraido15= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada15'] = mostrarDatos($extraido15);
    $extraido16= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada16'] = mostrarDatos($extraido16);
    $extraido17= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada17'] = mostrarDatos($extraido17);
    $extraido18= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada18'] = mostrarDatos($extraido18);
    $extraido19= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada19'] = mostrarDatos($extraido19);
    $extraido20= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada20'] = mostrarDatos($extraido20);
    $extraido21= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada21'] = mostrarDatos($extraido21);
    $extraido22= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada22'] = mostrarDatos($extraido22);
    $extraido23= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada23'] = mostrarDatos($extraido23);
    $extraido24= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada24'] = mostrarDatos($extraido24);
    $extraido25= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada25'] = mostrarDatos($extraido25);
    $extraido26= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada26'] = mostrarDatos($extraido26);
    $extraido27= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada27'] = mostrarDatos($extraido27);
    $extraido28= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada28'] = mostrarDatos($extraido28);
    $extraido29= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada29'] = mostrarDatos($extraido29);
    $extraido30= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada30'] = mostrarDatos($extraido30);
    $extraido31= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada31'] = mostrarDatos($extraido31);
    $extraido32= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada32'] = mostrarDatos($extraido32);
    $extraido33= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada33'] = mostrarDatos($extraido33);
    $extraido34= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada34'] = mostrarDatos($extraido34);
    $extraido35= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada35'] = mostrarDatos($extraido35);
    $extraido36= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada36'] = mostrarDatos($extraido36);
    $extraido37= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada37'] = mostrarDatos($extraido37);
    $extraido38= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada38'] = mostrarDatos($extraido38);
    $extraido39= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada39'] = mostrarDatos($extraido39);
    $extraido40= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada40'] = mostrarDatos($extraido40);
    $extraido41= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada41'] = mostrarDatos($extraido41);
    $extraido42= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada42'] = mostrarDatos($extraido42);
    $extraido43= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada43'] = mostrarDatos($extraido43);
    $extraido44= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada44'] = mostrarDatos($extraido44);
    $extraido45= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada45'] = mostrarDatos($extraido45);
    $extraido46= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada46'] = mostrarDatos($extraido46);
    $extraido47= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada47'] = mostrarDatos($extraido47);
    $extraido48= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada48'] = mostrarDatos($extraido48);
    $extraido49= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada49'] = mostrarDatos($extraido49);
    $extraido50= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada50'] = mostrarDatos($extraido50);
    $extraido51= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada51'] = mostrarDatos($extraido51);
    $extraido52= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada52'] = mostrarDatos($extraido52);
    $extraido53= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada53'] = mostrarDatos($extraido53);
    $extraido54= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada54'] = mostrarDatos($extraido54);
    $extraido55= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada55'] = mostrarDatos($extraido55);
    $extraido56= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada56'] = mostrarDatos($extraido56);
    $extraido57= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada57'] = mostrarDatos($extraido57);
    $extraido58= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada58'] = mostrarDatos($extraido58);
    $extraido59= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada59'] = mostrarDatos($extraido59);
    $extraido60= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada60'] = mostrarDatos($extraido60);
    $extraido61= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada61'] = mostrarDatos($extraido61);
    $extraido62= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada62'] = mostrarDatos($extraido62);
    $extraido63= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada63'] = mostrarDatos($extraido63);
    $extraido64= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada64'] = mostrarDatos($extraido64);
    $extraido65= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada65'] = mostrarDatos($extraido65);
    $extraido66= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada66'] = mostrarDatos($extraido66);
    $extraido67= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada67'] = mostrarDatos($extraido67);
    $extraido68= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada68'] = mostrarDatos($extraido68);
    $extraido69= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada69'] = mostrarDatos($extraido69);
    $extraido70= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada70'] = mostrarDatos($extraido70);
    $extraido71= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada71'] = mostrarDatos($extraido71);
    $extraido72= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada72'] = mostrarDatos($extraido72);
    $extraido73= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada73'] = mostrarDatos($extraido73);
    $extraido74= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada74'] = mostrarDatos($extraido74);
    $extraido75= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada75'] = mostrarDatos($extraido75);
    $extraido76= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada76'] = mostrarDatos($extraido76);
    $extraido77= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada77'] = mostrarDatos($extraido77);
    $extraido78= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada78'] = mostrarDatos($extraido78);
    $extraido79= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada79'] = mostrarDatos($extraido79);
    $extraido80= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada80'] = mostrarDatos($extraido80);
     $extraido81= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada81'] = mostrarDatos($extraido81);
    $extraido82= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada82'] = mostrarDatos($extraido82);
    $extraido83= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada83'] = mostrarDatos($extraido83);
    $extraido84= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada84'] = mostrarDatos($extraido84);
    $extraido85= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada85'] = mostrarDatos($extraido85);
    $extraido86= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada86'] = mostrarDatos($extraido86);
    $extraido87= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada87'] = mostrarDatos($extraido87);
    $extraido88= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada88'] = mostrarDatos($extraido88);
    $extraido89= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada89'] = mostrarDatos($extraido89);
    $extraido90= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada90'] = mostrarDatos($extraido90);
     $extraido91= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada91'] = mostrarDatos($extraido91);
     $extraido92= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada92'] = mostrarDatos($extraido92);
     $extraido93= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada93'] = mostrarDatos($extraido93);
     $extraido94= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada94'] = mostrarDatos($extraido94);
     $extraido95= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada95'] = mostrarDatos($extraido95);
     $extraido96= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada96'] = mostrarDatos($extraido96);
     $extraido97= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada97'] = mostrarDatos($extraido97);
     $extraido97= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada98'] = mostrarDatos($extraido98);
     $extraido99= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada99'] = mostrarDatos($extraido99);
     $extraido100= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada100'] = mostrarDatos($extraido100);
     $extraido101= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada101'] = mostrarDatos($extraido101);
     $extraido102= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada102'] = mostrarDatos($extraido102);
     $extraido103= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada103'] = mostrarDatos($extraido103);
     $extraido104= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada104'] = mostrarDatos($extraido104);
     $extraido105= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada105'] = mostrarDatos($extraido105);
     $extraido106= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada106'] = mostrarDatos($extraido106);
     $extraido107= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada107'] = mostrarDatos($extraido107);
     $extraido108= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada108'] = mostrarDatos($extraido108);
     $extraido109= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada109'] = mostrarDatos($extraido109);
     $extraido110= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada110'] = mostrarDatos($extraido110);
     $extraido111= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada111'] = mostrarDatos($extraido111);
     $extraido112= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada112'] = mostrarDatos($extraido112);
     $extraido113= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada113'] = mostrarDatos($extraido113);
     $extraido14= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada114'] = mostrarDatos($extraido14);
     $extraido115= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada115'] = mostrarDatos($extraido115);
     $extraido116= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada116'] = mostrarDatos($extraido116);
     $extraido117= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada117'] = mostrarDatos($extraido117);
     $extraido118= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada118'] = mostrarDatos($extraido118);
     $extraido119= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada119'] = mostrarDatos($extraido119);
     $extraido120= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada120'] = mostrarDatos($extraido120);
     $extraido121= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada121'] = mostrarDatos($extraido121);
     $extraido122= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada122'] = mostrarDatos($extraido122);
    $extraido123= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada123'] = mostrarDatos($extraido123);
    $extraido124= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada124'] = mostrarDatos($extraido124);
    $extraido125= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada125'] = mostrarDatos($extraido125);
    $extraido126= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada126'] = mostrarDatos($extraido126);
    $extraido127= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada127'] = mostrarDatos($extraido127);
    $extraido128= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada128'] = mostrarDatos($extraido128);
    $extraido129= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada129'] = mostrarDatos($extraido129);
    $extraido130= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada130'] = mostrarDatos($extraido130);
    $extraido131= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada131'] = mostrarDatos($extraido131);
    $extraido132= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada132'] = mostrarDatos($extraido132);
    $extraido133= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada133'] = mostrarDatos($extraido133);
    $extraido134= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada134'] = mostrarDatos($extraido134);
    $extraido135= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada135'] = mostrarDatos($extraido135);
    $extraido135= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada136'] = mostrarDatos($extraido136);
    $extraido137= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada137'] = mostrarDatos($extraido137);
    $extraido138= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada138'] = mostrarDatos($extraido138);
    $extraido139= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada139'] = mostrarDatos($extraido139);
    $extraido140= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada140'] = mostrarDatos($extraido140);
    $extraido141= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada141'] = mostrarDatos($extraido141);
    $extraido142= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada142'] = mostrarDatos($extraido142);
    $extraido143= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada143'] = mostrarDatos($extraido143);
    $extraido144= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada144'] = mostrarDatos($extraido144);
    $extraido145= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada145'] = mostrarDatos($extraido145);
    $extraido146= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada146'] = mostrarDatos($extraido146);
    $extraido147= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada147'] = mostrarDatos($extraido147);
    $extraido148= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada148'] = mostrarDatos($extraido148);
    $extraido149= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada149'] = mostrarDatos($extraido149);
    $extraido150= mysqli_fetch_array($resultado_certificada);
    $_SESSION['Certificada150'] = mostrarDatos($extraido150);
    
    $Certificada1 = $_SESSION['Certificada1']; $Certificada2 = $_SESSION['Certificada2']; $Certificada3 = $_SESSION['Certificada3']; $Certificada4 = $_SESSION['Certificada4']; $Certificada5 = $_SESSION['Certificada5']; $Certificada6 = $_SESSION['Certificada6']; $Certificada7 = $_SESSION['Certificada7']; $Certificada8 = $_SESSION['Certificada8']; $Certificada9 = $_SESSION['Certificada9']; $Certificada10 = $_SESSION['Certificada10'];
    $Certificada11 = $_SESSION['Certificada11']; $Certificada12 = $_SESSION['Certificada12']; $Certificada13 = $_SESSION['Certificada13']; $Certificada14 = $_SESSION['Certificada14']; $Certificada15 = $_SESSION['Certificada15']; $Certificada16 = $_SESSION['Certificada16']; $Certificada17 = $_SESSION['Certificada17']; $Certificada18 = $_SESSION['Certificada18']; $Certificada19 = $_SESSION['Certificada19']; $Certificada20 = $_SESSION['Certificada20'];
    $Certificada21 = $_SESSION['Certificada21']; $Certificada22 = $_SESSION['Certificada22']; $Certificada23 = $_SESSION['Certificada23']; $Certificada24 = $_SESSION['Certificada24']; $Certificada25 = $_SESSION['Certificada25']; $Certificada26 = $_SESSION['Certificada26']; $Certificada27 = $_SESSION['Certificada27']; $Certificada28 = $_SESSION['Certificada28']; $Certificada29 = $_SESSION['Certificada29']; $Certificada30 = $_SESSION['Certificada30'];
    $Certificada31 = $_SESSION['Certificada31']; $Certificada32 = $_SESSION['Certificada32']; $Certificada33 = $_SESSION['Certificada33']; $Certificada34 = $_SESSION['Certificada34']; $Certificada35 = $_SESSION['Certificada35']; $Certificada36 = $_SESSION['Certificada36']; $Certificada37 = $_SESSION['Certificada37']; $Certificada38 = $_SESSION['Certificada38']; $Certificada39 = $_SESSION['Certificada39']; $Certificada40 = $_SESSION['Certificada40'];
    $Certificada41 = $_SESSION['Certificada41']; $Certificada42 = $_SESSION['Certificada42']; $Certificada43 = $_SESSION['Certificada43']; $Certificada44 = $_SESSION['Certificada44']; $Certificada45 = $_SESSION['Certificada45']; $Certificada46 = $_SESSION['Certificada46']; $Certificada47 = $_SESSION['Certificada47']; $Certificada48 = $_SESSION['Certificada48']; $Certificada49 = $_SESSION['Certificada49']; $Certificada50 = $_SESSION['Certificada50'];
    $Certificada51 = $_SESSION['Certificada51']; $Certificada52 = $_SESSION['Certificada52']; $Certificada53 = $_SESSION['Certificada53']; $Certificada54 = $_SESSION['Certificada54']; $Certificada55 = $_SESSION['Certificada55']; $Certificada56 = $_SESSION['Certificada56']; $Certificada57 = $_SESSION['Certificada57']; $Certificada58 = $_SESSION['Certificada58']; $Certificada59 = $_SESSION['Certificada59']; $Certificada60 = $_SESSION['Certificada60'];
    $Certificada61 = $_SESSION['Certificada61']; $Certificada62 = $_SESSION['Certificada62']; $Certificada63 = $_SESSION['Certificada63']; $Certificada64 = $_SESSION['Certificada64']; $Certificada65 = $_SESSION['Certificada65']; $Certificada66 = $_SESSION['Certificada66']; $Certificada67 = $_SESSION['Certificada67']; $Certificada68 = $_SESSION['Certificada68']; $Certificada69 = $_SESSION['Certificada69']; $Certificada70 = $_SESSION['Certificada70'];
    $Certificada71 = $_SESSION['Certificada71']; $Certificada72 = $_SESSION['Certificada72']; $Certificada73 = $_SESSION['Certificada73']; $Certificada74 = $_SESSION['Certificada74']; $Certificada75 = $_SESSION['Certificada75']; $Certificada76 = $_SESSION['Certificada76']; $Certificada77 = $_SESSION['Certificada77']; $Certificada78 = $_SESSION['Certificada78']; $Certificada79 = $_SESSION['Certificada79']; $Certificada80 = $_SESSION['Certificada80'];
    $Certificada81 = $_SESSION['Certificada81']; $Certificada82 = $_SESSION['Certificada82']; $Certificada83 = $_SESSION['Certificada83']; $Certificada84 = $_SESSION['Certificada84']; $Certificada85 = $_SESSION['Certificada85']; $Certificada86 = $_SESSION['Certificada86']; $Certificada87 = $_SESSION['Certificada87']; $Certificada88 = $_SESSION['Certificada88']; $Certificada89 = $_SESSION['Certificada89']; $Certificada90 = $_SESSION['Certificada90'];
    $Certificada91 = $_SESSION['Certificada91']; $Certificada92 = $_SESSION['Certificada92']; $Certificada93 = $_SESSION['Certificada93']; $Certificada94 = $_SESSION['Certificada94']; $Certificada95 = $_SESSION['Certificada95']; $Certificada96 = $_SESSION['Certificada96']; $Certificada97 = $_SESSION['Certificada97']; $Certificada98 = $_SESSION['Certificada98']; $Certificada99 = $_SESSION['Certificada99']; $Certificada100 = $_SESSION['Certificada100'];
    $Certificada101 = $_SESSION['Certificada101']; $Certificada102 = $_SESSION['Certificada102']; $Certificada103 = $_SESSION['Certificada103']; $Certificada104 = $_SESSION['Certificada104']; $Certificada105 = $_SESSION['Certificada105']; $Certificada106 = $_SESSION['Certificada106']; $Certificada107 = $_SESSION['Certificada107']; $Certificada108 = $_SESSION['Certificada108']; $Certificada109 = $_SESSION['Certificada109']; $Certificada110 = $_SESSION['Certificada110'];
    $Certificada111 = $_SESSION['Certificada111']; $Certificada112 = $_SESSION['Certificada112']; $Certificada113 = $_SESSION['Certificada113']; $Certificada114 = $_SESSION['Certificada114']; $Certificada115 = $_SESSION['Certificada115']; $Certificada116 = $_SESSION['Certificada116']; $Certificada117 = $_SESSION['Certificada117']; $Certificada118 = $_SESSION['Certificada118']; $Certificada119 = $_SESSION['Certificada119']; $Certificada120 = $_SESSION['Certificada120'];
    $Certificada121 = $_SESSION['Certificada121']; $Certificada122 = $_SESSION['Certificada122']; $Certificada123 = $_SESSION['Certificada123']; $Certificada124 = $_SESSION['Certificada124']; $Certificada125 = $_SESSION['Certificada125']; $Certificada126 = $_SESSION['Certificada126']; $Certificada127 = $_SESSION['Certificada127']; $Certificada128 = $_SESSION['Certificada128']; $Certificada129 = $_SESSION['Certificada129']; $Certificada130 = $_SESSION['Certificada130'];
    $Certificada131 = $_SESSION['Certificada131']; $Certificada132 = $_SESSION['Certificada132']; $Certificada133 = $_SESSION['Certificada133']; $Certificada134 = $_SESSION['Certificada134']; $Certificada135 = $_SESSION['Certificada135']; $Certificada136 = $_SESSION['Certificada136']; $Certificada137 = $_SESSION['Certificada137']; $Certificada108 = $_SESSION['Certificada138']; $Certificada139 = $_SESSION['Certificada139']; $Certificada140 = $_SESSION['Certificada140'];
    $Certificada141 = $_SESSION['Certificada141']; $Certificada142 = $_SESSION['Certificada142']; $Certificada143 = $_SESSION['Certificada143']; $Certificada144 = $_SESSION['Certificada144']; $Certificada145 = $_SESSION['Certificada145']; $Certificada146 = $_SESSION['Certificada146']; $Certificada147 = $_SESSION['Certificada147']; $Certificada148 = $_SESSION['Certificada148']; $Certificada149 = $_SESSION['Certificada149']; $Certificada150 = $_SESSION['Certificada150'];
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Sede !='' && sede_existe = '#e7744f'";
    $resultado_sede = $mysqli->query($sql);
    function mostrarDatos2 ($resultado_sede) {
    if ($resultado_sede !=NULL) {
        return $resultado_sede['Sede'];}
    }
    $extraido1= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede1'] = mostrarDatos2($extraido1);
    $extraido2= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede2'] = mostrarDatos2($extraido2);
    $extraido3= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede3'] = mostrarDatos2($extraido3);
    $extraido4= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede4'] = mostrarDatos2($extraido4);
    $extraido5= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede5'] = mostrarDatos2($extraido5);
    $extraido6= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede6'] = mostrarDatos2($extraido6);
    $extraido7= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede7'] = mostrarDatos2($extraido7);
    $extraido8= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede8'] = mostrarDatos2($extraido8);
    $extraido9= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede9'] = mostrarDatos2($extraido9);
    $extraido10= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede10'] = mostrarDatos2($extraido10);
    $extraido11= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede11'] = mostrarDatos2($extraido11);
    $extraido12= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede12'] = mostrarDatos2($extraido12);
    $extraido13= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede13'] = mostrarDatos2($extraido13);
    $extraido14= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede14'] = mostrarDatos2($extraido14);
    $extraido15= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede15'] = mostrarDatos2($extraido15);
    $extraido16= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede16'] = mostrarDatos2($extraido16);
    $extraido17= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede17'] = mostrarDatos2($extraido17);
    $extraido18= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede18'] = mostrarDatos2($extraido18);
    $extraido19= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede19'] = mostrarDatos2($extraido19);
    $extraido20= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede20'] = mostrarDatos2($extraido20);
    $extraido21= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede21'] = mostrarDatos2($extraido21);
    $extraido22= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede22'] = mostrarDatos2($extraido22);
    $extraido23= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede23'] = mostrarDatos2($extraido23);
    $extraido24= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede24'] = mostrarDatos2($extraido24);
    $extraido25= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede25'] = mostrarDatos2($extraido25);
    $extraido26= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede26'] = mostrarDatos2($extraido26);
    $extraido27= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede27'] = mostrarDatos2($extraido27);
    $extraido28= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede28'] = mostrarDatos2($extraido28);
    $extraido29= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede29'] = mostrarDatos2($extraido29);
    $extraido30= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede30'] = mostrarDatos2($extraido30);
    $extraido31= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede31'] = mostrarDatos2($extraido31);
    $extraido32= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede32'] = mostrarDatos2($extraido32);
    $extraido33= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede33'] = mostrarDatos2($extraido33);
    $extraido34= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede34'] = mostrarDatos2($extraido34);
    $extraido35= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede35'] = mostrarDatos2($extraido35);
    $extraido36= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede36'] = mostrarDatos2($extraido36);
    $extraido37= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede37'] = mostrarDatos2($extraido37);
    $extraido38= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede38'] = mostrarDatos2($extraido38);
    $extraido39= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede39'] = mostrarDatos2($extraido39);
    $extraido40= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede40'] = mostrarDatos2($extraido40);
    $extraido41= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede41'] = mostrarDatos2($extraido41);
    $extraido42= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede42'] = mostrarDatos2($extraido42);
    $extraido43= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede43'] = mostrarDatos2($extraido43);
    $extraido44= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede44'] = mostrarDatos2($extraido44);
    $extraido45= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede45'] = mostrarDatos2($extraido45);
    $extraido46= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede46'] = mostrarDatos2($extraido46);
    $extraido47= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede47'] = mostrarDatos2($extraido47);
    $extraido48= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede48'] = mostrarDatos2($extraido48);
    $extraido49= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede49'] = mostrarDatos2($extraido49);
    $extraido50= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede50'] = mostrarDatos2($extraido50);
    $extraido51= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede51'] = mostrarDatos2($extraido51);
    $extraido52= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede52'] = mostrarDatos2($extraido52);
    $extraido53= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede53'] = mostrarDatos2($extraido53);
    $extraido54= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede54'] = mostrarDatos2($extraido54);
    $extraido55= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede55'] = mostrarDatos2($extraido55);
    $extraido56= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede56'] = mostrarDatos2($extraido56);
    $extraido57= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede57'] = mostrarDatos2($extraido57);
    $extraido58= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede58'] = mostrarDatos2($extraido58);
    $extraido59= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede59'] = mostrarDatos2($extraido59);
    $extraido60= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede60'] = mostrarDatos2($extraido60);
    $extraido61= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede61'] = mostrarDatos2($extraido61);
    $extraido62= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede62'] = mostrarDatos2($extraido62);
    $extraido63= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede63'] = mostrarDatos2($extraido63);
    $extraido64= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede64'] = mostrarDatos2($extraido64);
    $extraido65= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede65'] = mostrarDatos2($extraido65);
    $extraido66= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede66'] = mostrarDatos2($extraido66);
    $extraido67= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede67'] = mostrarDatos2($extraido67);
    $extraido68= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede68'] = mostrarDatos2($extraido68);
    $extraido69= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede69'] = mostrarDatos2($extraido69);
    $extraido70= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede70'] = mostrarDatos2($extraido70);
    $extraido71= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede71'] = mostrarDatos2($extraido71);
    $extraido72= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede72'] = mostrarDatos2($extraido72);
    $extraido73= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede73'] = mostrarDatos2($extraido73);
    $extraido74= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede74'] = mostrarDatos2($extraido74);
    $extraido75= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede75'] = mostrarDatos2($extraido75);
    $extraido76= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede76'] = mostrarDatos2($extraido76);
    $extraido77= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede77'] = mostrarDatos2($extraido77);
    $extraido78= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede78'] = mostrarDatos2($extraido78);
    $extraido79= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede79'] = mostrarDatos2($extraido79);
    $extraido80= mysqli_fetch_array($resultado_sede);
    $_SESSION['sede80'] = mostrarDatos2($extraido80);
    
    
    $sede1 = $_SESSION['sede1']; $sede2 = $_SESSION['sede2']; $sede3 = $_SESSION['sede3']; $sede4 = $_SESSION['sede4']; $sede5 = $_SESSION['sede5']; $sede6 = $_SESSION['sede6']; $sede7 = $_SESSION['sede7']; $sede8 = $_SESSION['sede8']; $sede9 = $_SESSION['sede9']; $sede9 = $_SESSION['sede9']; $sede10 = $_SESSION['sede10'];
    $sede11 = $_SESSION['sede11']; $sede12 = $_SESSION['sede12']; $sede13 = $_SESSION['sede13']; $sede14 = $_SESSION['sede14']; $sede15 = $_SESSION['sede15']; $sede16 = $_SESSION['sede16']; $sede17 = $_SESSION['sede17']; $sede18 = $_SESSION['sede18']; $sede19 = $_SESSION['sede19']; $sede20 = $_SESSION['sede20'];
    $sede21 = $_SESSION['sede21']; $sede22 = $_SESSION['sede22']; $sede23 = $_SESSION['sede23']; $sede24 = $_SESSION['sede24']; $sede25 = $_SESSION['sede25']; $sede26 = $_SESSION['sede26']; $sede27 = $_SESSION['sede27']; $sede28 = $_SESSION['sede28']; $sede29 = $_SESSION['sede29']; $sede30 = $_SESSION['sede30'];
    $sede31 = $_SESSION['sede31']; $sede32 = $_SESSION['sede32']; $sede33 = $_SESSION['sede33']; $sede34 = $_SESSION['sede34']; $sede35 = $_SESSION['sede35']; $sede36 = $_SESSION['sede36']; $sede37 = $_SESSION['sede37']; $sede38 = $_SESSION['sede38']; $sede39 = $_SESSION['sede39']; $sede40 = $_SESSION['sede40'];
    $sede41 = $_SESSION['sede41']; $sede42 = $_SESSION['sede42']; $sede43 = $_SESSION['sede43']; $sede44 = $_SESSION['sede44']; $sede45 = $_SESSION['sede45']; $sede46 = $_SESSION['sede46']; $sede47 = $_SESSION['sede47']; $sede48 = $_SESSION['sede48']; $sede49 = $_SESSION['sede49']; $sede50 = $_SESSION['sede50'];
    $sede51 = $_SESSION['sede51']; $sede52 = $_SESSION['sede52']; $sede53 = $_SESSION['sede53']; $sede54 = $_SESSION['sede54']; $sede55 = $_SESSION['sede55']; $sede56 = $_SESSION['sede56']; $sede57 = $_SESSION['sede57']; $sede58 = $_SESSION['sede58']; $sede59 = $_SESSION['sede59']; $sede60 = $_SESSION['sede60'];
    $sede61 = $_SESSION['sede61']; $sede62 = $_SESSION['sede62']; $sede63 = $_SESSION['sede63']; $sede64 = $_SESSION['sede64']; $sede65 = $_SESSION['sede65']; $sede66 = $_SESSION['sede66']; $sede67 = $_SESSION['sede67']; $sede68 = $_SESSION['sede68']; $sede69 = $_SESSION['sede69']; $sede70 = $_SESSION['sede70'];
    $sede71 = $_SESSION['sede71']; $sede72 = $_SESSION['sede72']; $sede73 = $_SESSION['sede73']; $sede74 = $_SESSION['sede74']; $sede75 = $_SESSION['sede75']; $sede76 = $_SESSION['sede76']; $sede77 = $_SESSION['sede77']; $sede78 = $_SESSION['sede78']; $sede79 = $_SESSION['sede79']; $sede80 = $_SESSION['sede80'];
    
    if($sede1 != ''){
        $sede1_c = 1; 
    } else {
        $sede1_c = 0;
    }
    if($sede2 != ''){
        $sede2_c = 1; 
    } else {
        $sede2_c = 0;
    }
    if($sede3 != ''){
        $sede3_c = 1; 
    } else {
        $sede3_c = 0;
    }
    if($sede4 != ''){
        $sede4_c = 1; 
    } else {
        $sede4_c = 0;
    }
    if($sede5 != ''){
        $sede5_c = 1; 
    } else {
        $sede5_c = 0;
    }
    if($sede6 != ''){
        $sede6_c = 1; 
    } else {
        $sede6_c = 0;
    }
    if($sede7 != ''){
        $sede7_c = 1; 
    } else {
        $sede7_c = 0;
    }
    if($sede8 != ''){
        $sede8_c = 1; 
    } else {
        $sede8_c = 0;
    }
    if($sede9 != ''){
        $sede9_c = 1; 
    } else {
        $sede9_c = 0;
    }
    if($sede10 != ''){
        $sede10_c = 1; 
    } else {
        $sede10_c = 0;
    }
    if($sede11 != ''){
        $sede11_c = 1; 
    } else {
        $sede11_c = 0;
    }
    if($sede12 != ''){
        $sede12_c = 1; 
    } else {
        $sede12_c = 0;
    }
    if($sede13 != ''){
        $sede13_c = 1; 
    } else {
        $sede13_c = 0;
    }
    if($sede14 != ''){
        $sede14_c = 1; 
    } else {
        $sede14_c = 0;
    }
    if($sede15 != ''){
        $sede15_c = 1; 
    } else {
        $sede15_c = 0;
    }
    if($sede16 != ''){
        $sede_c16 = 1; 
    } else {
        $sede_c16 = 0;
    }
    if($sede17 != ''){
        $sede17_c = 1; 
    } else {
        $sede17_c = 0;
    }
    if($sede18 != ''){
        $sede18_c = 1; 
    } else {
        $sede18_c = 0;
    }
    if($sede19 != ''){
        $sede19_c = 1; 
    } else {
        $sede19_c = 0;
    }
    if($sede20 != ''){
        $sede20_c = 1; 
    } else {
        $sede20_c = 0;
    }
    if($sede21 != ''){
        $sede21_c = 1; 
    } else {
        $sede21_c = 0;
    }
    if($sede22 != ''){
        $sede22_c = 1; 
    } else {
        $sede22_c = 0;
    }
    if($sede23 != ''){
        $sede23_c = 1; 
    } else {
        $sede23_c = 0;
    }
    if($sede24 != ''){
        $sede24_c = 1; 
    } else {
        $sede24_c = 0;
    }
    if($sede25 != ''){
        $sede25_c = 1; 
    } else {
        $sede25_c = 0;
    }
    if($sede26 != ''){
        $sede26_c = 1; 
    } else {
        $sede26_c = 0;
    }
    if($sede27 != ''){
        $sede27_c = 1; 
    } else {
        $sede27_c = 0;
    }
    if($sede28 != ''){
        $sede28_c = 1; 
    } else {
        $sede28_c = 0;
    }
    if($sede29 != ''){
        $sede29_c = 1; 
    } else {
        $sede29_c = 0;
    }
    if($sede30 != ''){
        $sede30_c = 1; 
    } else {
        $sede30_c = 0;
    }
    if($sede31 != ''){
        $sede31_c = 1; 
    } else {
        $sede31_c = 0;
    }
    if($sede32 != ''){
        $sede32_c = 1; 
    } else {
        $sede32_c = 0;
    }
    if($sede33 != ''){
        $sede33_c = 1; 
    } else {
        $sede33_c = 0;
    }
    if($sede34 != ''){
        $sede34_c = 1; 
    } else {
        $sede34_c = 0;
    }
    if($sede35 != ''){
        $sede35_c = 1; 
    } else {
        $sede35_c = 0;
    }
    if($sede36 != ''){
        $sede36_c = 1; 
    } else {
        $sede36_c = 0;
    }
    if($sede37 != ''){
        $sede37_c = 1; 
    } else {
        $sede37_c = 0;
    }
    if($sede38 != ''){
        $sede38_c = 1; 
    } else {
        $sede38_c = 0;
    }
    if($sede39 != ''){
        $sede39_c = 1; 
    } else {
        $sede39_c = 0;
    }
    if($sede40 != ''){
        $sede40_c = 1; 
    } else {
        $sede40_c = 0;
    }
    if($sede41 != ''){
        $sede41_c = 1; 
    } else {
        $sede41_c = 0;
    }
    if($sede42 != ''){
        $sede42_c = 1; 
    } else {
        $sede42_c = 0;
    }
    if($sede43 != ''){
        $sede43_c = 1; 
    } else {
        $sede43_c = 0;
    }
    if($sede44 != ''){
        $sede44_c = 1; 
    } else {
        $sede44_c = 0;
    }
    if($sede45 != ''){
        $sede45_c = 1; 
    } else {
        $sede45_c = 0;
    }
    if($sede46 != ''){
        $sede46_c = 1; 
    } else {
        $sede46_c = 0;
    }
    if($sede47 != ''){
        $sede47_c = 1; 
    } else {
        $sede47_c = 0;
    }
    if($sede48 != ''){
        $sede48_c = 1; 
    } else {
        $sede48_c = 0;
    }
    if($sede49 != ''){
        $sede49_c = 1; 
    } else {
        $sede49_c = 0;
    }
    if($sede50 != ''){
        $sede50_c = 1; 
    } else {
        $sede50_c = 0;
    }
    if($sede51 != ''){
        $sede51_c = 1; 
    } else {
        $sede51_c = 0;
    }
    if($sede52 != ''){
        $sede52_c = 1; 
    } else {
        $sede52_c = 0;
    }
    if($sede53 != ''){
        $sede53_c = 1; 
    } else {
        $sede53_c = 0;
    }
    if($sede54 != ''){
        $sede54_c = 1; 
    } else {
        $sede54_c = 0;
    }
    if($sede55 != ''){
        $sede55_c = 1; 
    } else {
        $sede55_c = 0;
    }
    if($sede56 != ''){
        $sede56_c = 1; 
    } else {
        $sede56_c = 0;
    }
    if($sede57 != ''){
        $sede57_c = 1; 
    } else {
        $sede57_c = 0;
    }
    if($sede58 != ''){
        $sede58_c = 1; 
    } else {
        $sede58_c = 0;
    }
    if($sede59 != ''){
        $sede59_c = 1; 
    } else {
        $sede59_c = 0;
    }
    if($sede60 != ''){
        $sede60_c = 1; 
    } else {
        $sede60_c = 0;
    }
     if($sed61e != ''){
        $sede61_c = 1; 
    } else {
        $sede61_c = 0;
    }
     if($sed62e != ''){
        $sede62_c = 1; 
    } else {
        $sede62_c = 0;
    }
     if($sed63e != ''){
        $sede63_c = 1; 
    } else {
        $sede63_c = 0;
    }
     if($sed64e != ''){
        $sede64_c = 1; 
    } else {
        $sede64_c = 0;
    }
     if($sed65e != ''){
        $sede65_c = 1; 
    } else {
        $sede65_c = 0;
    }
     if($sed66e != ''){
        $sede66_c = 1; 
    } else {
        $sede66_c = 0;
    }
     if($sed67e != ''){
        $sede67_c = 1; 
    } else {
        $sede67_c = 0;
    }
     if($sed68e != ''){
        $sede68_c = 1; 
    } else {
        $sede68_c = 0;
    }
     if($sed69e != ''){
        $sede69_c = 1; 
    } else {
        $sede69_c = 0;
    }
     if($sed70e != ''){
        $sede70_c = 1; 
    } else {
        $sede70_c = 0;
    }
    
    $sede_c = $sede1_c + $sede2_c + $sede3_c + $sede4_c + $sede5_c + $sede6_c + $sede7_c + $sede8_c + $sede9_c + $sede10_c + $sede11_c + $sede12_c + $sede13_c + $sede14_c + $sede15_c + $sede16_c + $sede17_c + $sede18_c + $sede19_c + $sede20_c + $sede21_c + $sede22_c + $sede23_c + $sede24_c + $sede25_c + $sede26_c + $sede27_c + $sede28_c + $sede29_c + $sede30_c + $sede31_c + $sede32_c + $sede33_c + $sede34_c + $sede35_c + $sede36_c + $sede37_c + $sede38_c + $sede39_c + $sede40_c + $sede41_c + $sede42_c + $sede43_c + $sede44_c + $sede45_c + $sede46_c + $sede47_c + $sede48_c + $sede49_c + $sede50_c + $sede51_c + $sede52_c + $sede53_c + $sede54_c + $sede55_c + $sede56_c + $sede57_c + $sede58_c + $sede59_c + $sede60_c + $sede61_c + $sede62_c + $sede63_c + $sede64_c + $sede65_c + $sede66_c + $sede67_c + $sede68_c + $sede69_c + $sede70_c; 
    $sede_0 = $sede_c - 6;
    
    $sql = "SELECT * FROM controles WHERE id_admin = $id_admin && Area !='' && area_existe = '#e7744f'";
    $resultado_Area = $mysqli->query($sql);
    function mostrarDatos3 ($resultado_Area) {
    if ($resultado_Area !=NULL) {
        return $resultado_Area['Area'];}
    }
    $extraido1c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area1'] = mostrarDatos3($extraido1c);
    $extraido2c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area2'] = mostrarDatos3($extraido2c);
    $extraido3c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area3'] = mostrarDatos3($extraido3c);
    $extraido4c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area4'] = mostrarDatos3($extraido4c);
    $extraido5c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area5'] = mostrarDatos3($extraido5c);
    $extraido6c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area6'] = mostrarDatos3($extraido6c);
    $extraido7c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area7'] = mostrarDatos3($extraido7c);
    $extraido8c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area8'] = mostrarDatos3($extraido8c);
    $extraido9c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area9'] = mostrarDatos3($extraido9c);
    $extraido10c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area10'] = mostrarDatos3($extraido10c);
    $extraido11c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area11'] = mostrarDatos3($extraido11c);
    $extraido12c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area12'] = mostrarDatos3($extraido12c);
    $extraido13c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area13'] = mostrarDatos3($extraido13c);
    $extraido14c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area14'] = mostrarDatos3($extraido14c);
    $extraido15c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area15'] = mostrarDatos3($extraido15c);
    $extraido16c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area16'] = mostrarDatos3($extraido16c);
    $extraido17c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area17'] = mostrarDatos3($extraido17c);
    $extraido18c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area18'] = mostrarDatos3($extraido18c);
    $extraido19c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area19'] = mostrarDatos3($extraido19c);
    $extraido20c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area20'] = mostrarDatos3($extraido20c);
    $extraido21c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area21'] = mostrarDatos3($extraido21c);
    $extraido22c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area22'] = mostrarDatos3($extraido22c);
    $extraido23c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area23'] = mostrarDatos3($extraido23c);
    $extraido24c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area24'] = mostrarDatos3($extraido24c);
    $extraido25c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area25'] = mostrarDatos3($extraido25c);
    $extraido26c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area26'] = mostrarDatos3($extraido26c);
    $extraido27c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area27'] = mostrarDatos3($extraido27c);
    $extraido28c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area28'] = mostrarDatos3($extraido28c);
    $extraido29c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area29'] = mostrarDatos3($extraido29c);
    $extraido30c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area30'] = mostrarDatos3($extraido30c);
    $extraido31c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area31'] = mostrarDatos3($extraido31c);
    $extraido32c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area32'] = mostrarDatos3($extraido32c);
    $extraido33c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area33'] = mostrarDatos3($extraido33c);
    $extraido34c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area34'] = mostrarDatos3($extraido34c);
    $extraido35c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area35'] = mostrarDatos3($extraido35c);
    $extraido36c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area36'] = mostrarDatos3($extraido36c);
    $extraido37c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area37'] = mostrarDatos3($extraido37c);
    $extraido38c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area38'] = mostrarDatos3($extraido38c);
    $extraido39c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area39'] = mostrarDatos3($extraido39c);
    $extraido40c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area40'] = mostrarDatos3($extraido40c);
    $extraido41c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area41'] = mostrarDatos3($extraido41c);
    $extraido42c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area42'] = mostrarDatos3($extraido42c);
    $extraido43c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area43'] = mostrarDatos3($extraido43c);
    $extraido44c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area44'] = mostrarDatos3($extraido44c);
    $extraido45c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area45'] = mostrarDatos3($extraido45c);
    $extraido46c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area46'] = mostrarDatos3($extraido46c);
    $extraido47c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area47'] = mostrarDatos3($extraido47c);
    $extraido48c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area48'] = mostrarDatos3($extraido48c);
    $extraido49c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area49'] = mostrarDatos3($extraido49c);
    $extraido50c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area50'] = mostrarDatos3($extraido50c);
    $extraido51c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area51'] = mostrarDatos3($extraido51c);
    $extraido52c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area52'] = mostrarDatos3($extraido52c);
    $extraido53c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area53'] = mostrarDatos3($extraido53c);
    $extraido54c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area54'] = mostrarDatos3($extraido54c);
    $extraido55c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area55'] = mostrarDatos3($extraido55c);
    $extraido56c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area56'] = mostrarDatos3($extraido56c);
    $extraido57c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area57'] = mostrarDatos3($extraido57c);
    $extraido58c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area58'] = mostrarDatos3($extraido58c);
    $extraido59c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area59'] = mostrarDatos3($extraido59c);
    $extraido60c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area60'] = mostrarDatos3($extraido60c);
    $extraido61c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area61'] = mostrarDatos3($extraido61c);
    $extraido62c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area62'] = mostrarDatos3($extraido62c);
    $extraido63c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area63'] = mostrarDatos3($extraido63c);
    $extraido64c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area64'] = mostrarDatos3($extraido64c);
    $extraido65c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area65'] = mostrarDatos3($extraido65c);
    $extraido66c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area66'] = mostrarDatos3($extraido66c);
    $extraido67c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area67'] = mostrarDatos3($extraido67c);
    $extraido68c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area68'] = mostrarDatos3($extraido68c);
    $extraido69c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area69'] = mostrarDatos3($extraido69c);
    $extraido70c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area70'] = mostrarDatos3($extraido70c);
    $extraido71c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area71'] = mostrarDatos3($extraido71c);
    $extraido72c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area72'] = mostrarDatos3($extraido72c);
    $extraido73c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area73'] = mostrarDatos3($extraido73c);
    $extraido74c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area74'] = mostrarDatos3($extraido74c);
    $extraido75c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area75'] = mostrarDatos3($extraido75c);
    $extraido76c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area76'] = mostrarDatos3($extraido76c);
    $extraido77c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area77'] = mostrarDatos3($extraido77c);
    $extraido78c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area78'] = mostrarDatos3($extraido78c);
    $extraido79c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area79'] = mostrarDatos3($extraido79c);
    $extraido80c= mysqli_fetch_array($resultado_Area);
    $_SESSION['Area80'] = mostrarDatos3($extraido80c);
    
    $Area1 = $_SESSION['Area1']; $Area2 = $_SESSION['Area2']; $Area3 = $_SESSION['Area3']; $Area4 = $_SESSION['Area4']; $Area5 = $_SESSION['Area5']; $Area6 = $_SESSION['Area6']; $Area7 = $_SESSION['Area7']; $Area8 = $_SESSION['Area8']; $Area9 = $_SESSION['Area9']; $Area9 = $_SESSION['Area9']; $Area10 = $_SESSION['Area10'];
    $Area11 = $_SESSION['Area11']; $Area12 = $_SESSION['Area12']; $Area13 = $_SESSION['Area13']; $Area14 = $_SESSION['Area14']; $Area15 = $_SESSION['Area15']; $Area16 = $_SESSION['Area16']; $Area17 = $_SESSION['Area17']; $Area18 = $_SESSION['Area18']; $Area19 = $_SESSION['Area19']; $Area20 = $_SESSION['Area20'];
    $Area21 = $_SESSION['Area21']; $Area22 = $_SESSION['Area22']; $Area23 = $_SESSION['Area23']; $Area24 = $_SESSION['Area24']; $Area25 = $_SESSION['Area25']; $Area26 = $_SESSION['Area26']; $Area27 = $_SESSION['Area27']; $Area28 = $_SESSION['Area28']; $Area29 = $_SESSION['Area29']; $Area30 = $_SESSION['Area30'];
    $Area31 = $_SESSION['Area31']; $Area32 = $_SESSION['Area32']; $Area33 = $_SESSION['Area33']; $Area34 = $_SESSION['Area34']; $Area35 = $_SESSION['Area35']; $Area36 = $_SESSION['Area36']; $Area37 = $_SESSION['Area37']; $Area38 = $_SESSION['Area38']; $Area39 = $_SESSION['Area39']; $Area40 = $_SESSION['Area40'];
    $Area41 = $_SESSION['Area41']; $Area42 = $_SESSION['Area42']; $Area43 = $_SESSION['Area43']; $Area44 = $_SESSION['Area44']; $Area45 = $_SESSION['Area45']; $Area46 = $_SESSION['Area46']; $Area47 = $_SESSION['Area47']; $Area48 = $_SESSION['Area48']; $Area49 = $_SESSION['Area49']; $Area50 = $_SESSION['Area50'];
    $Area51 = $_SESSION['Area51']; $Area52 = $_SESSION['Area52']; $Area53 = $_SESSION['Area53']; $Area54 = $_SESSION['Area54']; $Area55 = $_SESSION['Area55']; $Area56 = $_SESSION['Area56']; $Area57 = $_SESSION['Area57']; $Area58 = $_SESSION['Area58']; $Area59 = $_SESSION['Area59']; $Area60 = $_SESSION['Area60'];
    $Area61 = $_SESSION['Area61']; $Area62 = $_SESSION['Area62']; $Area63 = $_SESSION['Area63']; $Area64 = $_SESSION['Area64']; $Area65 = $_SESSION['Area65']; $Area66 = $_SESSION['Area66']; $Area67 = $_SESSION['Area67']; $Area68 = $_SESSION['Area68']; $Area69 = $_SESSION['Area69']; $Area70 = $_SESSION['Area70'];
    $Area71 = $_SESSION['Area71']; $Area72 = $_SESSION['Area72']; $Area73 = $_SESSION['Area73']; $Area74 = $_SESSION['Area74']; $Area75 = $_SESSION['Area75']; $Area76 = $_SESSION['Area76']; $Area77 = $_SESSION['Area77']; $Area78 = $_SESSION['Area78']; $Area79 = $_SESSION['Area79']; $Area80 = $_SESSION['Area80'];
    
   
//   && R_0 != 'Medio'
    
    $sql = "SELECT * FROM datosg WHERE  Autor = $id_admin && (R_0 = 'Alto' || R_0 = 'Muy Alto') && Fecha_registro >= '$Inicio0' && Fecha_registro <= '$Terminacion0' && (Certificada = '$Certificada1' || Certificada = '$Certificada2' || Certificada = '$Certificada3' || Certificada = '$Certificada4' || Certificada = '$Certificada5' || Certificada = '$Certificada6' || Certificada = '$Certificada7' || Certificada = '$Certificada8' || Certificada = '$Certificada9' || Certificada = '$Certificada10' || Certificada = '$Certificada11' || Certificada = '$Certificada12' || Certificada = '$Certificada13' || Certificada = '$Certificada14' || Certificada = '$Certificada15' || Certificada = '$Certificada16' || Certificada = '$Certificada17' || Certificada = '$Certificada18' || Certificada = '$Certificada19' || Certificada = '$Certificada20' || Certificada = '$Certificada21' || Certificada = '$Certificada22' || Certificada = '$Certificada23' || Certificada = '$Certificada24' || Certificada = '$Certificada25' || Certificada = '$Certificada26' || Certificada = '$Certificada27' || Certificada = '$Certificada28' || Certificada = '$Certificada29' || Certificada = '$Certificada30' || Certificada = '$Certificada31' || Certificada = '$Certificada32' || Certificada = '$Certificada33' || Certificada = '$Certificada34' || Certificada = '$Certificada35' || Certificada = '$Certificada36' || Certificada = '$Certificada37' || Certificada = '$Certificada38' || Certificada = '$Certificada39' || Certificada = '$Certificada40' || Certificada = '$Certificada41' || Certificada = '$Certificada42' || Certificada = '$Certificada43' || Certificada = '$Certificada44' || Certificada = '$Certificada45' || Certificada = '$Certificada46' || Certificada = '$Certificada47' || Certificada = '$Certificada48' || Certificada = '$Certificada49' || Certificada = '$Certificada50' || Certificada = '$Certificada51' || Certificada = '$Certificada52' || Certificada = '$Certificada53' || Certificada = '$Certificada54' || Certificada = '$Certificada55' || Certificada = '$Certificada56' || Certificada = '$Certificada57' || Certificada = '$Certificada58' || Certificada = '$Certificada59' || Certificada = '$Certificada60' || Certificada = '$Certificada61' || Certificada = '$Certificada62' || Certificada = '$Certificada63' || Certificada = '$Certificada64' || Certificada = '$Certificada65' || Certificada = '$Certificada66' || Certificada = '$Certificada67' || Certificada = '$Certificada68' || Certificada = '$Certificada69' || Certificada = '$Certificada70' || Certificada = '$Certificada71' || Certificada = '$Certificada72' || Certificada = '$Certificada73' || Certificada = '$Certificada74' || Certificada = '$Certificada75' || Certificada = '$Certificada76' || Certificada = '$Certificada77' || Certificada = '$Certificada78' || Certificada = '$Certificada79' || Certificada = '$Certificada80' || Certificada = '$Certificada81' || Certificada = '$Certificada82' || Certificada = '$Certificada83' || Certificada = '$Certificada84' || Certificada = '$Certificada85' || Certificada = '$Certificada86' || Certificada = '$Certificada87' || Certificada = '$Certificada88' || Certificada = '$Certificada89' || Certificada = '$Certificada90' || Certificada = '$Certificada91' || Certificada = '$Certificada92' || Certificada = '$Certificada93' || Certificada = '$Certificada94' || Certificada = '$Certificada95' || Certificada = '$Certificada96' || Certificada = '$Certificada97' || Certificada = '$Certificada98' || Certificada = '$Certificada99' || Certificada = '$Certificada100' || Certificada = '$Certificada101' || Certificada = '$Certificada102' || Certificada = '$Certificada103' || Certificada = '$Certificada104' || Certificada = '$Certificada105' || Certificada = '$Certificada106' || Certificada = '$Certificada107' || Certificada = '$Certificada108' || Certificada = '$Certificada109' || Certificada = '$Certificada111' || Certificada = '$Certificada112' || Certificada = '$Certificada113' || Certificada = '$Certificada114' || Certificada = '$Certificada115' || Certificada = '$Certificada116' || Certificada = '$Certificada117' || Certificada = '$Certificada118' || Certificada = '$Certificada119' || Certificada = '$Certificada121' || Certificada = '$Certificada122' || Certificada = '$Certificada123' || Certificada = '$Certificada124' || Certificada = '$Certificada125' || Certificada = '$Certificada126' || Certificada = '$Certificada127' || Certificada = '$Certificada128' || Certificada = '$Certificada129' || Certificada = '$Certificada131' || Certificada = '$Certificada132' || Certificada = '$Certificada133' || Certificada = '$Certificada134' || Certificada = '$Certificada135' || Certificada = '$Certificada136' || Certificada = '$Certificada137' || Certificada = '$Certificada138' || Certificada = '$Certificada139' || Certificada = '$Certificada141' || Certificada = '$Certificada142' || Certificada = '$Certificada143' || Certificada = '$Certificada144' || Certificada = '$Certificada145' || Certificada = '$Certificada146' || Certificada = '$Certificada147' || Certificada = '$Certificada148' || Certificada = '$Certificada149' || Certificada = '$Certificada150')   && (Sede = '$sede1' || Sede = '$sede2' || Sede = '$sede3' || Sede = '$sede4' || Sede = '$sede5' || Sede = '$sede6' || Sede = '$sede7' || Sede = '$sede8' || Sede = '$sede9' || Sede = '$sede10' || Sede = '$sede11' || Sede = '$sede12' || Sede = '$sede13' || Sede = '$sede14' || Sede = '$sede15' || Sede = '$sede16' || Sede = '$sede17' || Sede = '$sede18' || Sede = '$sede19' || Sede = '$sede20' || Sede = '$sede21' || Sede = '$sede22' || Sede = '$sede23' || Sede = '$sede24' || Sede = '$sede25' || Sede = '$sede26' || Sede = '$sede27' || Sede = '$sede28' || Sede = '$sede29' || Sede = '$sede30' || Sede = '$sede31' || Sede = '$sede32' || Sede = '$sede33' || Sede = '$sede34' || Sede = '$sede35' || Sede = '$sede36' || Sede = '$sede37' || Sede = '$sede38' || Sede = '$sede39' || Sede = '$sede40' || Sede = '$sede41' || Sede = '$sede42' || Sede = '$sede43' || Sede = '$sede44' || Sede = '$sede45' || Sede = '$sede46' || Sede = '$sede47' || Sede = '$sede48' || Sede = '$sede49' || Sede = '$sede50' || Sede = '$sede51' || Sede = '$sede52'|| Sede = '$sede53'|| Sede = '$sede54'|| Sede = '$sede55'|| Sede = '$sede56'|| Sede = '$sede57'|| Sede = '$sede58'|| Sede = '$sede59'|| Sede = '$sede60'|| Sede = '$sede61'|| Sede = '$sede62'|| Sede = '$sede63'|| Sede = '$sede64'|| Sede = '$sede65'|| Sede = '$sede66'|| Sede = '$sede67'|| Sede = '$sede68'|| Sede = '$sede69'|| Sede = '$sede70'|| Sede = '$sede71'|| Sede = '$sede72'|| Sede = '$sede73'|| Sede = '$sede74'|| Sede = '$sede75'|| Sede = '$sede76'|| Sede = '$sede77'|| Sede = '$sede78'|| Sede = '$sede79'|| Sede = '$sede80') && (Area = '$Area1' || Area = '$Area2' || Area = '$Area3' || Area = '$Area4' || Area = '$Area5' || Area = '$Area6' || Area = '$Area7' || Area = '$Area8' || Area = '$Area9' || Area = '$Area10' || Area = '$Area11' || Area = '$Area12' || Area = '$Area13' || Area = '$Area14' || Area = '$Area15' || Area = '$Area16' || Area = '$Area17' || Area = '$Area18' || Area = '$Area19' || Area = '$Area20' || Area = '$Area21' || Area = '$Area22' || Area = '$Area23' || Area = '$Area24' || Area = '$Area25' || Area = '$Area26' || Area = '$Area27' || Area = '$Area28' || Area = '$Area29' || Area = '$Area30' || Area = '$Area31' || Area = '$Area32' || Area = '$Area33' || Area = '$Area34' || Area = '$Area35' || Area = '$Area36' || Area = '$Area37' || Area = '$Area38' || Area = '$Area39' || Area = '$Area40' || Area = '$Area41' || Area = '$Area42' || Area = '$Area43' || Area = '$Area44' || Area = '$Area45' || Area = '$Area46' || Area = '$Area47' || Area = '$Area48' || Area = '$Area49' || Area = '$Area50' || Area = '$Area51' || Area = '$Area52'|| Area = '$Area53'|| Area = '$Area54'|| Area = '$Area55'|| Area = '$Area56'|| Area = '$Area57'|| Area = '$Area58'|| Area = '$Area59'|| Area = '$Area60'|| Area = '$Area61'|| Area = '$Area62'|| Area = '$Area63'|| Area = '$Area64'|| Area = '$Area65'|| Area = '$Area66'|| Area = '$Area67'|| Area = '$Area68'|| Area = '$Area69'|| Area = '$Area70'|| Area = '$Area71'|| Area = '$Area72'|| Area = '$Area73'|| Area = '$Area74'|| Area = '$Area75'|| Area = '$Area76'|| Area = '$Area77'|| Area = '$Area78'|| Area = '$Area79'|| Area = '$Area80') ORDER BY  id DESC ";
    $resultado = $mysqli->query($sql);
    
    $json = array();
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) {
        $numeracion++;
        $TotalC_0 = $row['C_0'];
        $IntraA = $row['R_24'];
        $IntraB = $row['R_45'];
        $E =  $row['R_53'];
        $ES = $row['R_54'];
        
        if($TotalC_0 == 'style="color:rgb(231, 116, 79)"' || $TotalC_0 == 'style="color:rgb(157, 55, 21)"' ) {
            $TotalC= '#ff0000';
        } else {
            $TotalC= 'transparent';
        }
       
        if ($IntraA == "Alto" || $IntraA == "Muy Alto") {
            $IntraAc= '#ff4d4d';
        } else {
            $IntraAc= 'transparent';
        }
        if ($IntraB == "Alto" || $IntraB == "Muy Alto") {
            $IntraBc= '#ff4d4d';
        } else {
            $IntraBc= 'transparent';
        }
        if ($E == "Alto" || $E == "Muy Alto") {
            $Ec= '#ff4d4d';
        } else {
            $Ec= 'transparent';
        }
         if ($ES == "Alto" || $ES == "Muy Alto") {
            $ESc= '#ff4d4d';
        } else {
            $ESc= 'transparent';
        }
        $Grupo = '';
        if(($IntraB == "Alto" || $IntraB == "Muy Alto" || $IntraA == "Alto" || $IntraA == "Muy Alto") &&  $E != "Alto" && $E != "Muy Alto" && $ES != "Alto" && $ES != "Muy Alto") {
            $Grupo = '1';
        }
        if(($IntraB == "Alto" || $IntraB == "Muy Alto" || $IntraA == "Alto" || $IntraA == "Muy Alto") &&  ($ES == "Alto" || $ES == "Muy Alto") && $E != "Alto" && $E != "Muy Alto") {
            $Grupo = '2';
        }
        if(($E == "Alto" || $E == "Muy Alto") && ($IntraB == "Alto" || $IntraB == "Muy Alto" || $IntraB == "Medio" || $IntraA == "Alto" || $IntraA == "Muy Alto" || $IntraA == "Medio") && $ES != "Alto" && $ES != "Muy Alto") {
            $Grupo = '3';
        }
        if(($E == "Alto" || $E == "Muy Alto") && ($IntraB == "Medio" || $IntraA == "Medio") && ($ES == "Alto" || $ES == "Muy Alto")) {
            $Grupo = '2';
        }
        if(($IntraB == "Alto" || $IntraB == "Muy Alto" || $IntraA == "Alto" || $IntraA == "Muy Alto") &&  ($E == "Alto" || $E == "Muy Alto") && ($ES == "Alto" || $ES == "Muy Alto")) {
            $Grupo = 'Caso blanco';
        }
        if($IntraA == "Alto" || $IntraA == "Muy Alto" || $IntraA == "Medio" ){
            $Formulario = 'A';
        }
        if($IntraB == "Alto" || $IntraB == "Muy Alto" || $IntraB == "Medio") {
            $Formulario = 'B';
        }
        $IntraA = $row['R_24'];
        $IntraB = $row['R_45'];
        $E =  $row['R_53'];
        $ES = $row['R_54'];
        $json[] = array(
        'N' => $numeracion,
        'id' => $row['id'],
        'Codigo' => $row['Codigo'],
        'Cedula' => $row['Cedula'],
        'Nombre' => $row['Nombre'],
        'Apellido1' => $row['Apellido1'],
        'Nivel' => $row['Nivel'],
        'Certificada' => $row['Certificada'],
        'Sede' => $row['Sede'],
        'NivelR' => $row['R_0'],
        'Formulario' => $Formulario,
        'IntralaboralA' => $IntraA,
        'IntralaboralB' => $IntraB,
        'Extralaboral' => $E,
        'Estres' => $ES,
        'TotalC' => $TotalC,
        'G2c' => $IntraAc,
        'G3c' => $IntraBc,
        'Ec' => $Ec,
        'ESc' => $ESc,
        'Grupo' => $Grupo,
        'Carta' => $row['Notificacion'],
        'Fecha_registro' => $row['Fecha_registro'],
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>