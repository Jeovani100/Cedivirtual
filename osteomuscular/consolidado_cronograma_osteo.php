<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
	$Codigo = $_POST['Codigo'];
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $total_enero1 = $resultado1['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $total_enero2 = $resultado2['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $total_enero3 = $resultado3['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $total_enero4 = $resultado4['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $total_enero5 = $resultado5['total'];
    $total_enero = $total_enero1 + $total_enero2 + $total_enero3 + $total_enero4 + $total_enero5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6 = $sentencia->fetch();
    $total_febrero1 = $resultado6['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7 = $sentencia->fetch();
    $total_febrero2 = $resultado7['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado8 = $sentencia->fetch();
    $total_febrero3 = $resultado8['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9 = $sentencia->fetch();
    $total_febrero4 = $resultado9['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10 = $sentencia->fetch();
    $total_febrero5 = $resultado10['total'];
    $total_febrero = $total_febrero1 + $total_febrero2 + $total_febrero3 + $total_febrero4 + $total_febrero5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado11 = $sentencia->fetch();
    $total_marzo1 = $resultado11['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12 = $sentencia->fetch();
    $total_marzo2 = $resultado12['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13= $sentencia->fetch();
    $total_marzo3 = $resultado13['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado14 = $sentencia->fetch();
    $total_marzo4 = $resultado14['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15 = $sentencia->fetch();
    $total_marzo5 = $resultado15['total'];
    $total_marzo = $total_marzo1 + $total_marzo2 + $total_marzo3 + $total_marzo4 + $total_marzo5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16 = $sentencia->fetch();
    $total_abril1 = $resultado16['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado17 = $sentencia->fetch();
    $total_abril2 = $resultado17['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado18= $sentencia->fetch();
    $total_abril3 = $resultado18['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado19 = $sentencia->fetch();
    $total_abril4 = $resultado19['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado20 = $sentencia->fetch();
    $total_abril5 = $resultado20['total'];
    $total_abril = $total_abril1 + $total_abril2 + $total_abril3 + $total_abril4 + $total_abril5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado21 = $sentencia->fetch();
    $total_mayo1 = $resultado21['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado22 = $sentencia->fetch();
    $total_mayo2 = $resultado22['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado23= $sentencia->fetch();
    $total_mayo3 = $resultado23['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado24 = $sentencia->fetch();
    $total_mayo4 = $resultado24['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado25 = $sentencia->fetch();
    $total_mayo5 = $resultado25['total'];
    $total_mayo = $total_mayo1 + $total_mayo2 + $total_mayo3 + $total_mayo4 + $total_mayo5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado26 = $sentencia->fetch();
    $total_junio1 = $resultado26['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado27 = $sentencia->fetch();
    $total_junio2 = $resultado27['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado28= $sentencia->fetch();
    $total_junio3 = $resultado28['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado29 = $sentencia->fetch();
    $total_junio4 = $resultado29['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado30 = $sentencia->fetch();
    $total_junio5 = $resultado30['total'];
    $total_junio = $total_junio1 + $total_junio2 + $total_junio3 + $total_junio4 + $total_junio5;  
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado31 = $sentencia->fetch();
    $total_julio1 = $resultado31['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado32 = $sentencia->fetch();
    $total_julio2 = $resultado32['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado33= $sentencia->fetch();
    $total_julio3 = $resultado33['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado34 = $sentencia->fetch();
    $total_julio4 = $resultado34['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado35 = $sentencia->fetch();
    $total_julio5 = $resultado35['total'];
    $total_julio = $total_julio1 + $total_julio2 + $total_julio3 + $total_julio4 + $total_julio5; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado36 = $sentencia->fetch();
    $total_agosto1 = $resultado36['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado37 = $sentencia->fetch();
    $total_agosto2 = $resultado37['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado38= $sentencia->fetch();
    $total_agosto3 = $resultado38['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado39 = $sentencia->fetch();
    $total_agosto4 = $resultado39['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado40 = $sentencia->fetch();
    $total_agosto5 = $resultado40['total'];
    $total_agosto = $total_agosto1 + $total_agosto2 + $total_agosto3 + $total_agosto4 + $total_agosto5; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado41 = $sentencia->fetch();
    $total_septiembre1 = $resultado41['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado42 = $sentencia->fetch();
    $total_septiembre2 = $resultado42['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado43= $sentencia->fetch();
    $total_septiembre3 = $resultado43['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado44 = $sentencia->fetch();
    $total_septiembre4 = $resultado44['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado45 = $sentencia->fetch();
    $total_septiembre5 = $resultado45['total'];
    $total_septiembre = $total_septiembre1 + $total_septiembre2 + $total_septiembre3 + $total_septiembre4 + $total_septiembre5; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado46 = $sentencia->fetch();
    $total_octubre1 = $resultado46['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado47 = $sentencia->fetch();
    $total_octubre2 = $resultado47['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado48= $sentencia->fetch();
    $total_octubre3 = $resultado48['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado49 = $sentencia->fetch();
    $total_octubre4 = $resultado49['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado50 = $sentencia->fetch();
    $total_octubre5 = $resultado50['total'];
    $total_octubre = $total_octubre1 + $total_octubre2 + $total_octubre3 + $total_octubre4 + $total_octubre5; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51 = $sentencia->fetch();
    $total_noviembre1 = $resultado51['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado52 = $sentencia->fetch();
    $total_noviembre2 = $resultado52['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado53= $sentencia->fetch();
    $total_noviembre3 = $resultado53['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado54 = $sentencia->fetch();
    $total_noviembre4 = $resultado54['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado55 = $sentencia->fetch();
    $total_noviembre5 = $resultado55['total'];
    $total_noviembre = $total_noviembre1 + $total_noviembre2 + $total_noviembre3 + $total_noviembre4 + $total_noviembre5;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && P12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado56 = $sentencia->fetch();
    $total_diciembre1 = $resultado56['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && P12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado57 = $sentencia->fetch();
    $total_diciembre2 = $resultado57['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && P12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado58= $sentencia->fetch();
    $total_diciembre3 = $resultado58['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && P12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado59 = $sentencia->fetch();
    $total_diciembre4 = $resultado59['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && P12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado60 = $sentencia->fetch();
    $total_diciembre5 = $resultado60['total'];
    $total_diciembre = $total_diciembre1 + $total_diciembre2 + $total_diciembre3 + $total_diciembre4 + $total_diciembre5;
    
    
    
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1_E = $sentencia->fetch();
    $total_enero1_E = $resultado1_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2_E = $sentencia->fetch();
    $total_enero2_E = $resultado2_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3_E = $sentencia->fetch();
    $total_enero3_E = $resultado3_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4_E = $sentencia->fetch();
    $total_enero4_E = $resultado4_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E1 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_E = $sentencia->fetch();
    $total_enero5_E = $resultado5_E['total'];
    $total_enero_E = $total_enero1_E + $total_enero2_E + $total_enero3_E + $total_enero4_E + $total_enero5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado6_E = $sentencia->fetch();
    $total_febrero1_E = $resultado6_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado7_E = $sentencia->fetch();
    $total_febrero2_E = $resultado7_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado8_E = $sentencia->fetch();
    $total_febrero3_E = $resultado8_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado9_E = $sentencia->fetch();
    $total_febrero4_E = $resultado9_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E2 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado10_E = $sentencia->fetch();
    $total_febrero5_E = $resultado10_E['total'];
    $total_febrero_E = $total_febrero1_E + $total_febrero2_E + $total_febrero3_E + $total_febrero4_E + $total_febrero5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado11_E = $sentencia->fetch();
    $total_marzo1_E = $resultado11_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado12_E = $sentencia->fetch();
    $total_marzo2_E = $resultado12_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado13_E= $sentencia->fetch();
    $total_marzo3_E = $resultado13_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado14_E = $sentencia->fetch();
    $total_marzo4_E = $resultado14_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E3 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado15_E = $sentencia->fetch();
    $total_marzo5_E = $resultado15_E['total'];
    $total_marzo_E = $total_marzo1_E + $total_marzo2_E + $total_marzo3_E + $total_marzo4_E + $total_marzo5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado16_E = $sentencia->fetch();
    $total_abril1_E = $resultado16_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado17_E = $sentencia->fetch();
    $total_abril2_E = $resultado17_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado18_E= $sentencia->fetch();
    $total_abril3_E = $resultado18_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado19_E = $sentencia->fetch();
    $total_abril4_E = $resultado19_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E4 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado20_E = $sentencia->fetch();
    $total_abril5_E = $resultado20_E['total'];
    $total_abril_E = $total_abril1_E + $total_abril2_E + $total_abril3_E + $total_abril4_E + $total_abril5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado21_E = $sentencia->fetch();
    $total_mayo1_E = $resultado21_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado22_E = $sentencia->fetch();
    $total_mayo2_E = $resultado22_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado23_E= $sentencia->fetch();
    $total_mayo3_E = $resultado23_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado24_E = $sentencia->fetch();
    $total_mayo4_E = $resultado24_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E5 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado25_E = $sentencia->fetch();
    $total_mayo5_E = $resultado25_E['total'];
    $total_mayo_E = $total_mayo1_E + $total_mayo2_E + $total_mayo3_E + $total_mayo4_E + $total_mayo5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado26_E = $sentencia->fetch();
    $total_junio1_E = $resultado26_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado27_E = $sentencia->fetch();
    $total_junio2_E = $resultado27_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado28_E= $sentencia->fetch();
    $total_junio3_E = $resultado28_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado29_E = $sentencia->fetch();
    $total_junio4_E = $resultado29_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E6 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado30_E = $sentencia->fetch();
    $total_junio5_E = $resultado30_E['total'];
    $total_junio_E = $total_junio1_E + $total_junio2_E + $total_junio3_E + $total_junio4_E + $total_junio5_E;  
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado31_E = $sentencia->fetch();
    $total_julio1_E = $resultado31_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado32_E = $sentencia->fetch();
    $total_julio2_E = $resultado32_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado33_E= $sentencia->fetch();
    $total_julio3_E = $resultado33_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado34_E = $sentencia->fetch();
    $total_julio4_E = $resultado34_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E7 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado35_E = $sentencia->fetch();
    $total_julio5_E = $resultado35_E['total'];
    $total_julio_E = $total_julio1_E + $total_julio2_E + $total_julio3_E + $total_julio4_E + $total_julio5_E; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado36_E = $sentencia->fetch();
    $total_agosto1_E = $resultado36_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado37_E = $sentencia->fetch();
    $total_agosto2_E = $resultado37_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado38_E= $sentencia->fetch();
    $total_agosto3_E = $resultado38_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado39_E = $sentencia->fetch();
    $total_agosto4_E = $resultado39_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E8 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado40_E = $sentencia->fetch();
    $total_agosto5_E = $resultado40_E['total'];
    $total_agosto_E = $total_agosto1_E + $total_agosto2_E + $total_agosto3_E + $total_agosto4_E + $total_agosto5_E; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado41_E = $sentencia->fetch();
    $total_septiembre1_E = $resultado41_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado42_E = $sentencia->fetch();
    $total_septiembre2_E = $resultado42_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado43_E= $sentencia->fetch();
    $total_septiembre3_E = $resultado43_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado44_E = $sentencia->fetch();
    $total_septiembre4_E = $resultado44_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E9 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado45_E = $sentencia->fetch();
    $total_septiembre5_E = $resultado45_E['total'];
    $total_septiembre_E = $total_septiembre1_E + $total_septiembre2_E + $total_septiembre3_E + $total_septiembre4_E + $total_septiembre5_E; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado46_E = $sentencia->fetch();
    $total_octubre1_E = $resultado46_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado47_E = $sentencia->fetch();
    $total_octubre2_E = $resultado47_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado48_E= $sentencia->fetch();
    $total_octubre3_E = $resultado48_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado49_E = $sentencia->fetch();
    $total_octubre4_E = $resultado49_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E10 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado50_E = $sentencia->fetch();
    $total_octubre5_E = $resultado50_E['total'];
    $total_octubre_E = $total_octubre1_E + $total_octubre2_E + $total_octubre3_E + $total_octubre4_E + $total_octubre5_E; 
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado51_E = $sentencia->fetch();
    $total_noviembre1_E = $resultado51_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado52_E = $sentencia->fetch();
    $total_noviembre2_E = $resultado52_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado53_E= $sentencia->fetch();
    $total_noviembre3_E = $resultado53_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado54_E = $sentencia->fetch();
    $total_noviembre4_E = $resultado54_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E11 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado55_E = $sentencia->fetch();
    $total_noviembre5_E = $resultado55_E['total'];
    $total_noviembre_E = $total_noviembre1_E + $total_noviembre2_E + $total_noviembre3_E + $total_noviembre4_E + $total_noviembre5_E;
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && E12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado56_E = $sentencia->fetch();
    $total_diciembre1_E = $resultado56_E['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && E12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado57_E = $sentencia->fetch();
    $total_diciembre2_E = $resultado57_E['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && E12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado58_E= $sentencia->fetch();
    $total_diciembre3_E = $resultado58_E['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && E12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado59_E = $sentencia->fetch();
    $total_diciembre4_E = $resultado59_E['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && E12 != '0'";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado60_E = $sentencia->fetch();
    $total_diciembre5_E = $resultado60_E['total'];
    $total_diciembre_E = $total_diciembre1_E + $total_diciembre2_E + $total_diciembre3_E + $total_diciembre4_E + $total_diciembre5_E;
    
    if($total_enero == 0) {
        $total_enero0 = 1;
    } else {
        $total_enero0 = $total_enero;
    }
     if($total_febrero == 0) {
        $total_febrero0 = 1;
    } else {
        $total_febrero0 = $total_febrero;
    }
     if($total_marzo == 0) {
        $total_marzo0 = 1;
    } else {
        $total_marzo0 = $total_marzo;
    }
     if($total_abril == 0) {
        $total_abril0 = 1;
    } else {
        $total_abril0 = $total_abril;
    }
     if($total_mayo == 0) {
        $total_mayo0 = 1;
    } else {
        $total_mayo0 = $total_mayo;
    }
     if($total_junio == 0) {
        $total_junio0 = 1;
    } else {
        $total_junio0 = $total_junio;
    }
     if($total_julio == 0) {
        $total_julio0 = 1;
    } else {
        $total_julio0 = $total_julio;
    }
     if($total_agosto == 0) {
        $total_agosto0 = 1;
    } else {
        $total_agosto0 = $total_agosto;
    }
     if($total_septiembre == 0) {
        $total_septiembre0 = 1;
    } else {
        $total_septiembre0 = $total_septiembre;
    }
     if($total_octubre == 0) {
        $total_octubre0 = 1;
    } else {
        $total_octubre0 = $total_octubre;
    }
     if($total_noviembre == 0) {
        $total_noviembre0 = 1;
    } else {
        $total_noviembre0 = $total_noviembre;
    }
     if($total_diciembre == 0) {
        $total_diciembre0 = 1;
    } else {
        $total_diciembre0 = $total_diciembre;
    }
    
    $Porcentaje_enero = round((($total_enero_E/$total_enero0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_febrero = round((($total_febrero_E/$total_febrero0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_marzo = round((($total_marzo_E/$total_marzo0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_abril = round((($total_abril_E/$total_abril0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_mayo = round((($total_mayo_E/$total_mayo0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_junio = round((($total_junio_E/$total_junio0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_julio = round((($total_julio_E/$total_julio0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_agosto = round((($total_agosto_E/$total_agosto0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_septiembre = round((($total_septiembre_E/$total_septiembre0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_octubre = round((($total_octubre_E/$total_octubre0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_noviembre = round((($total_noviembre_E/$total_noviembre0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_diciembre = round((($total_diciembre_E/$total_diciembre0)*100), 1, PHP_ROUND_HALF_UP);
    
    $total_enero_A = $total_enero;
    $total_febrero_A = $total_enero + $total_febrero;
    $total_marzo_A = $total_enero + $total_febrero + $total_marzo;
    $total_abril_A = $total_enero + $total_febrero + $total_marzo + $total_abril;
    $total_mayo_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo;
    $total_junio_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio;
    $total_julio_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio;
    $total_agosto_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio + $total_agosto;
    $total_septiembre_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio + $total_agosto + $total_septiembre;
    $total_octubre_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio + $total_agosto + $total_septiembre +  $total_octubre;
    $total_noviembre_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio + $total_agosto + $total_septiembre +  $total_octubre +  $total_noviembre;
    $total_diciembre_A = $total_enero + $total_febrero + $total_marzo + $total_abril + $total_mayo + $total_junio + $total_julio + $total_agosto + $total_septiembre +  $total_octubre +  $total_noviembre +  $total_diciembre;
    
    $total_enero_E_A = $total_enero_E;
    $total_febrero_E_A = $total_enero_E + $total_febrero_E;
    $total_marzo_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E;
    $total_abril_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E;
    $total_mayo_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E;
    $total_junio_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E;
    $total_julio_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E;
    $total_agosto_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E + $total_agosto_E;
    $total_septiembre_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E + $total_agosto_E + $total_septiembre_E;
    $total_octubre_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E + $total_agosto_E + $total_septiembre_E +  $total_octubre_E;
    $total_noviembre_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E + $total_agosto_E + $total_septiembre_E +  $total_octubre_E +  $total_noviembre_E;
    $total_diciembre_E_A = $total_enero_E + $total_febrero_E + $total_marzo_E + $total_abril_E + $total_mayo_E + $total_junio_E + $total_julio_E + $total_agosto_E + $total_septiembre_E +  $total_octubre_E +  $total_noviembre_E +  $total_diciembre_E;
   
    if($total_enero_A == 0) {
        $total_enero_A0 = 1;
    } else {
        $total_enero_A0 = $total_enero_A;
    }
     if($total_febrero_A == 0) {
        $total_febrero_A0 = 1;
    } else {
        $total_febrero_A0 = $total_febrero_A;
    }
     if($total_marzo_A == 0) {
        $total_marzo_A0 = 1;
    } else {
        $total_marzo_A0 = $total_marzo_A;
    }
     if($total_abril_A == 0) {
        $total_abril_A0 = 1;
    } else {
        $total_abril_A0 = $total_abril_A;
    }
     if($total_mayo_A == 0) {
        $total_mayo_A0 = 1;
    } else {
        $total_mayo_A0 = $total_mayo_A;
    }
     if($total_junio_A == 0) {
        $total_junio_A0 = 1;
    } else {
        $total_junio_A0 = $total_junio_A;
    }
     if($total_julio_A == 0) {
        $total_julio_A0 = 1;
    } else {
        $total_julio_A0 = $total_julio_A;
    }
     if($total_agosto_A == 0) {
        $total_agosto_A0 = 1;
    } else {
        $total_agosto_A0 = $total_agosto_A;
    }
     if($total_septiembre_A == 0) {
        $total_septiembre_A0 = 1;
    } else {
        $total_septiembre_A0 = $total_septiembre_A;
    }
     if($total_octubre_A == 0) {
        $total_octubre_A0 = 1;
    } else {
        $total_octubre_A0 = $total_octubre_A;
    }
     if($total_noviembre_A == 0) {
        $total_noviembre_A0 = 1;
    } else {
        $total_noviembre_A0 = $total_noviembre_A;
    }
     if($total_diciembre_A == 0) {
        $total_diciembre_A0 = 1;
    } else {
        $total_diciembre_A0 = $total_diciembre_A;
    }
   
    $Porcentaje_enero_A = round((($total_enero_E_A/$total_enero_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_febrero_A = round((($total_febrero_E_A/$total_febrero_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_marzo_A = round((($total_marzo_E_A/$total_marzo_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_abril_A = round((($total_abril_E_A/$total_abril_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_mayo_A = round((($total_mayo_E_A/$total_mayo_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_junio_A = round((($total_junio_E_A/$total_junio_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_julio_A = round((($total_julio_E_A/$total_julio_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_agosto_A = round((($total_agosto_E_A/$total_agosto_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_septiembre_A = round((($total_septiembre_E_A/$total_septiembre_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_octubre_A = round((($total_octubre_E_A/$total_octubre_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_noviembre_A = round((($total_noviembre_E_A/$total_noviembre_A0)*100), 1, PHP_ROUND_HALF_UP);
    $Porcentaje_diciembre_A = round((($total_diciembre_E_A/$total_diciembre_A0)*100), 1, PHP_ROUND_HALF_UP);
    
    $json[] = array(
        'id' => 1,
        'total_enero' => $total_enero,
        'total_febrero' => $total_febrero,
        'total_marzo' => $total_marzo,
        'total_abril' => $total_abril,
        'total_mayo' => $total_mayo,
        'total_junio' => $total_junio,
        'total_julio' => $total_julio,
        'total_agosto' => $total_agosto,
        'total_septiembre' => $total_septiembre,
        'total_octubre' => $total_octubre,
        'total_noviembre' => $total_noviembre,
        'total_diciembre' => $total_diciembre,
        'total_enero_E' => $total_enero_E,
        'total_febrero_E' => $total_febrero_E,
        'total_marzo_E' => $total_marzo_E,
        'total_abril_E' => $total_abril_E,
        'total_mayo_E' => $total_mayo_E,
        'total_junio_E' => $total_junio_E,
        'total_julio_E' => $total_julio_E,
        'total_agosto_E' => $total_agosto_E,
        'total_septiembre_E' => $total_septiembre_E,
        'total_octubre_E' => $total_octubre_E,
        'total_noviembre_E' => $total_noviembre_E,
        'total_diciembre_E' => $total_diciembre_E,
        'Porcentaje_enero' => $Porcentaje_enero,
        'Porcentaje_febrero' => $Porcentaje_febrero,
        'Porcentaje_marzo' => $Porcentaje_marzo,
        'Porcentaje_abril' => $Porcentaje_abril,
        'Porcentaje_mayo' => $Porcentaje_mayo,
        'Porcentaje_junio' => $Porcentaje_junio,
        'Porcentaje_julio' => $Porcentaje_julio,
        'Porcentaje_agosto' => $Porcentaje_agosto,
        'Porcentaje_septiembre' => $Porcentaje_septiembre,
        'Porcentaje_octubre' => $Porcentaje_octubre,
        'Porcentaje_noviembre' => $Porcentaje_noviembre,
        'Porcentaje_diciembre' => $Porcentaje_diciembre,
        'total_enero_A' => $total_enero_A ,
        'total_febrero_A' => $total_febrero_A,
        'total_marzo_A' => $total_marzo_A,
        'total_abril_A' => $total_abril_A,
        'total_mayo_A' => $total_mayo_A,
        'total_junio_A' => $total_junio_A,
        'total_julio_A' => $total_julio_A,
        'total_agosto_A' => $total_agosto_A,
        'total_septiembre_A' => $total_septiembre_A,
        'total_octubre_A' => $total_octubre_A,
        'total_noviembre_A' => $total_noviembre_A,
        'total_diciembre_A' => $total_diciembre_A,
        'total_enero_E_A' => $total_enero_E_A ,
        'total_febrero_E_A' => $total_febrero_E_A,
        'total_marzo_E_A' => $total_marzo_E_A,
        'total_abril_E_A' => $total_abril_E_A,
        'total_mayo_E_A' => $total_mayo_E_A,
        'total_junio_E_A' => $total_junio_E_A,
        'total_julio_E_A' => $total_julio_E_A,
        'total_agosto_E_A' => $total_agosto_E_A,
        'total_septiembre_E_A' => $total_septiembre_E_A,
        'total_octubre_E_A' => $total_octubre_E_A,
        'total_noviembre_E_A' => $total_noviembre_E_A,
        'total_diciembre_E_A' => $total_diciembre_E_A,
        'porcentaje_enero_A' => $Porcentaje_enero_A ,
        'porcentaje_febrero_A' => $Porcentaje_febrero_A,
        'porcentaje_marzo_A' => $Porcentaje_marzo_A,
        'porcentaje_abril_A' => $Porcentaje_abril_A,
        'porcentaje_mayo_A' => $Porcentaje_mayo_A,
        'porcentaje_junio_A' => $Porcentaje_junio_A,
        'porcentaje_julio_A' => $Porcentaje_julio_A,
        'porcentaje_agosto_A' => $Porcentaje_agosto_A,
        'porcentaje_septiembre_A' => $Porcentaje_septiembre_A,
        'porcentaje_octubre_A' => $Porcentaje_octubre_A,
        'porcentaje_noviembre_A' => $Porcentaje_noviembre_A,
        'porcentaje_diciembre_A' => $Porcentaje_diciembre_A
    );
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>