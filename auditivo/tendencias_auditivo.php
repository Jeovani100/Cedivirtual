 <?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8");

	$Codigo = $_POST['Codigo'];
	$id_admin = $_POST['id_admin'];
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$id_admin' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2017'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_1 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2018'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_2 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2019'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_3 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2020'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_4 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2021'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_5 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2022'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_6 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2023'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_7 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2024'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_8 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2025'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_9 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2026'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_10 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2027'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_11 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = '2028'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta1_12 = $row['Meta'];
    
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2017'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_1 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2018'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_2 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2019'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_3 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2020'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_4 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2021'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_5 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2022'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_6 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2023'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_7 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2024'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_8 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2025'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_9 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2026'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_10 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2027'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_11 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = '2028'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta2_12 = $row['Meta'];
    
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2017'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_1 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2018'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_2 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2019'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_3 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2020'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_4 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2021'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_5 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2022'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_6 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2023'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_7 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2024'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_8 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2025'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_9 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2026'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_10 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2027'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_11 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = '2028'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta3_12 = $row['Meta'];
    
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2017'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_1 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2018'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_2 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2019'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_3 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2020'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_4 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2021'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_5 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2022'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_6 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2023'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_7 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2024'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_8 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2025'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_9 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2026'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_10 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2027'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_11 = $row['Meta'];
    $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = '2028'";   
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Meta4_12 = $row['Meta'];
    
    //Población general
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2017'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_1 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2018'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_2 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2019'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_3 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2020'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_4 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2021'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_5 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2022'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_6 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2023'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_7 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2024'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_8 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2025'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_9 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2026'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_10 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2027'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_11 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && YEAR(Fecha) = '2028'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1_12 = $resultado['total'];
    

   //Casos
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2017'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_1 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2018'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_2 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2019'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_3 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2020'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_4 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2021'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_5 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2022'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_6 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2023'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_7 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2024'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_8 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2025'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_9 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2026'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_10 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2027'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_11 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = '2028'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2_12 = $resultado['total'];
    
    //Enfermedad laboral
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2017'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_1 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2018'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_2 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2019'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_3 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2020'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_4 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2021'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_5 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2022'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_6 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2023'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_7 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2024'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_8 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2025'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_9 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2026'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_10 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2027'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_11 = $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = '2028'";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3_12 = $resultado['total'];
    
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < 2017) ";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_1 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2018')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_2 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2019')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_3 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2020')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_4 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2021')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_5 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2022')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_6 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2023')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_7 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2024')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_8 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2025')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4_9 = $sentencia->fetch();
    $total_usuarios4_9 = $resultado4_9['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2026')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_10 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2027')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_11 = $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha) < '2028')";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4_12 = $resultado['total'];
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2017'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1_1 = $sentencia->fetch();
    $P4_1_1 = round(($resultado5_1_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2017'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1_2 = $sentencia->fetch();
    $P4_1_2 = round(($resultado5_1_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2017'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1_3 = $sentencia->fetch();
    $P4_1_3 = round(($resultado5_1_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2017'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1_4 = $sentencia->fetch();
    $P4_1_4 = round(($resultado5_1_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2017'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_1_5 = $sentencia->fetch();
    $P4_1_5 = round(($resultado5_1_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_1 = round((($P4_1_1 + $P4_1_2 + $P4_1_3 + $P4_1_4 + $P4_1_5)/5), 2, PHP_ROUND_HALF_UP); 
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2018'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2_1 = $sentencia->fetch();
    $P4_2_1 = round(($resultado5_1_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2018'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2_2 = $sentencia->fetch();
    $P4_2_2 = round(($resultado5_1_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2018'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2_3 = $sentencia->fetch();
    $P4_2_3 = round(($resultado5_1_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2018'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2_4 = $sentencia->fetch();
    $P4_2_4 = round(($resultado5_1_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2018'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_2_5 = $sentencia->fetch();
    $P4_2_5 = round(($resultado5_1_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_2 = round((($P4_2_1 + $P4_2_2 + $P4_2_3 + $P4_2_4 + $P4_2_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2019'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3_1 = $sentencia->fetch();
    $P4_3_1 = round(($resultado5_3_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2019'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3_2 = $sentencia->fetch();
    $P4_3_2 = round(($resultado5_3_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2019'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3_3 = $sentencia->fetch();
    $P4_3_3 = round(($resultado5_3_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2019'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3_4 = $sentencia->fetch();
    $P4_3_4 = round(($resultado5_3_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2019'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_3_5 = $sentencia->fetch();
    $P4_3_5 = round(($resultado5_3_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_3 = round((($P4_3_1 + $P4_3_2 + $P4_3_3 + $P4_3_4 + $P4_3_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2020'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4_1 = $sentencia->fetch();
    $P4_4_1 = round(($resultado5_4_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2020'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4_2 = $sentencia->fetch();
    $P4_4_2 = round(($resultado5_4_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2020'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4_3 = $sentencia->fetch();
    $P4_4_3 = round(($resultado5_4_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2020'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4_4 = $sentencia->fetch();
    $P4_4_4 = round(($resultado5_4_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2020'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_4_5 = $sentencia->fetch();
    $P4_4_5 = round(($resultado5_4_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_4 = round((($P4_4_1 + $P4_4_2 + $P4_4_3 + $P4_4_4 + $P4_4_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2021'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5_1 = $sentencia->fetch();
    $P4_5_1 = round(($resultado5_5_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2021'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5_2 = $sentencia->fetch();
    $P4_5_2 = round(($resultado5_5_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2021'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5_3 = $sentencia->fetch();
    $P4_5_3 = round(($resultado5_5_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2021'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5_4 = $sentencia->fetch();
    $P4_5_4 = round(($resultado5_5_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2021'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_5_5 = $sentencia->fetch();
    $P4_5_5 = round(($resultado5_5_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_5 = round((($P4_5_1 + $P4_5_2 + $P4_5_3 + $P4_5_4 + $P4_5_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2022'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6_1 = $sentencia->fetch();
    $P4_6_1 = round(($resultado5_6_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2022'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6_2 = $sentencia->fetch();
    $P4_6_2 = round(($resultado5_6_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2022'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6_3 = $sentencia->fetch();
    $P4_6_3 = round(($resultado5_6_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2022'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6_4 = $sentencia->fetch();
    $P4_6_4 = round(($resultado5_6_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2022'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_6_5 = $sentencia->fetch();
    $P4_6_5 = round(($resultado5_6_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_6 = round((($P4_6_1 + $P4_6_2 + $P4_6_3 + $P4_6_4 + $P4_6_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2023'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7_1 = $sentencia->fetch();
    $P4_7_1 = round(($resultado5_7_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2023'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7_2 = $sentencia->fetch();
    $P4_7_2 = round(($resultado5_7_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2023'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7_3 = $sentencia->fetch();
    $P4_7_3 = round(($resultado5_7_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2023'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7_4 = $sentencia->fetch();
    $P4_7_4 = round(($resultado5_7_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2023'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_7_5 = $sentencia->fetch();
    $P4_7_5 = round(($resultado5_7_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_7 = round((($P4_7_1 + $P4_7_2 + $P4_7_3 + $P4_7_4 + $P4_7_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2024'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8_1 = $sentencia->fetch();
    $P4_8_1 = round(($resultado5_8_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2024'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8_2 = $sentencia->fetch();
    $P4_8_2 = round(($resultado5_8_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2024'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8_3 = $sentencia->fetch();
    $P4_8_3 = round(($resultado5_8_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2024'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8_4 = $sentencia->fetch();
    $P4_8_4 = round(($resultado5_8_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2024'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_8_5 = $sentencia->fetch();
    $P4_8_5 = round(($resultado5_8_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_8 = round((($P4_8_1 + $P4_8_2 + $P4_8_3 + $P4_8_4 + $P4_8_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2025'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9_1 = $sentencia->fetch();
    $P4_9_1 = round(($resultado5_9_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2025'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9_2 = $sentencia->fetch();
    $P4_9_2 = round(($resultado5_9_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2025'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9_3 = $sentencia->fetch();
    $P4_9_3 = round(($resultado5_9_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2025'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9_4 = $sentencia->fetch();
    $P4_9_4 = round(($resultado5_9_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2025'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_9_5 = $sentencia->fetch();
    $P4_9_5 = round(($resultado5_9_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_9 = round((($P4_9_1 + $P4_9_2 + $P4_9_3 + $P4_9_4 + $P4_9_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2026'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10_1 = $sentencia->fetch();
    $P4_10_1 = round(($resultado5_10_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2026'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10_2 = $sentencia->fetch();
    $P4_10_2 = round(($resultado5_10_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2026'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10_3 = $sentencia->fetch();
    $P4_10_3 = round(($resultado5_10_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2026'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10_4 = $sentencia->fetch();
    $P4_10_4 = round(($resultado5_10_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2026'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_10_5 = $sentencia->fetch();
    $P4_10_5 = round(($resultado5_10_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_10 = round((($P4_10_1 + $P4_10_2 + $P4_10_3 + $P4_10_4 + $P4_10_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2027'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_11_1 = $sentencia->fetch();
    $P4_11_1 = round(($resultado5_11_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2027'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_11_2 = $sentencia->fetch();
    $P4_11_2 = round(($resultado5_11_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2027'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_11_3 = $sentencia->fetch();
    $P4_11_3 = round(($resultado5_11_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2027'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_11_4 = $sentencia->fetch();
    $P4_11_4 = round(($resultado5_11_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2027'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_11_5 = $sentencia->fetch();
    $P4_11_5 = round(($resultado5_11_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_11 = round((($P4_11_1 + $P4_11_2 + $P4_11_3 + $P4_11_4 + $P4_11_5)/5), 2, PHP_ROUND_HALF_UP);
    
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = '2028'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_12_1 = $sentencia->fetch();
    $P4_12_1 = round(($resultado5_12_1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = '2028'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_12_2 = $sentencia->fetch();
    $P4_12_2 = round(($resultado5_12_2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = '2028'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_12_3 = $sentencia->fetch();
    $P4_12_3 = round(($resultado5_12_3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = '2028'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_12_4 = $sentencia->fetch();
    $P4_12_4 = round(($resultado5_12_4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = '2028'";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5_12_5 = $sentencia->fetch();
    $P4_12_5 = round(($resultado5_12_5['total']), 2, PHP_ROUND_HALF_UP); 
    $P4_12 = round((($P4_12_1 + $P4_12_2 + $P4_12_3 + $P4_12_4 + $P4_12_5)/5), 2, PHP_ROUND_HALF_UP);
    
    if ($total_usuarios1_1) {$P1 = round((($total_usuarios2_1/$total_usuarios1_1)*100), 2, PHP_ROUND_HALF_UP); } else {$P1 = '0';}
    if ($total_usuarios1_2) {$P2 = round((($total_usuarios2_2/$total_usuarios1_2)*100), 2, PHP_ROUND_HALF_UP); } else {$P2 = '0';} 
    if ($total_usuarios1_3) {$P3 = round((($total_usuarios2_3/$total_usuarios1_3)*100), 2, PHP_ROUND_HALF_UP); } else {$P3 = '0';} 
    if ($total_usuarios1_4) {$P4 = round((($total_usuarios2_4/$total_usuarios1_4)*100), 2, PHP_ROUND_HALF_UP); } else {$P4 = '0';} 
    if ($total_usuarios1_5) {$P5 = round((($total_usuarios2_5/$total_usuarios1_5)*100), 2, PHP_ROUND_HALF_UP); } else {$P5 = '0';} 
    if ($total_usuarios1_6) {$P6 = round((($total_usuarios2_6/$total_usuarios1_6)*100), 2, PHP_ROUND_HALF_UP); } else {$P6 = '0';} 
    if ($total_usuarios1_7) {$P7 = round((($total_usuarios2_7/$total_usuarios1_7)*100), 2, PHP_ROUND_HALF_UP); } else {$P7 = '0';} 
    if ($total_usuarios1_8) {$P8 = round((($total_usuarios2_8/$total_usuarios1_8)*100), 2, PHP_ROUND_HALF_UP); } else {$P8 = '0';} 
    if ($total_usuarios1_9) {$P9 = round((($total_usuarios2_9/$total_usuarios1_9)*100), 2, PHP_ROUND_HALF_UP); } else {$P9 = '0';} 
    if ($total_usuarios1_10) {$P10 = round((($total_usuarios2_10/$total_usuarios1_10)*100), 2, PHP_ROUND_HALF_UP); } else {$P10 = '0';} 
    if ($total_usuarios1_11) {$P11 = round((($total_usuarios2_11/$total_usuarios1_11)*100), 2, PHP_ROUND_HALF_UP); } else {$P11 = '0';} 
    if ($total_usuarios1_12) {$P12 = round((($total_usuarios2_12/$total_usuarios1_12)*100), 2, PHP_ROUND_HALF_UP); } else {$P12 = '0';} 
    
    if ($total_usuarios3_1) {$P2_1 = round((($total_usuarios3_1/$total_usuarios1_1)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_1 = '0';} 
    if ($total_usuarios3_2) {$P2_2 = round((($total_usuarios3_2/$total_usuarios1_2)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_2 = '0';} 
    if ($total_usuarios3_3) {$P2_3 = round((($total_usuarios3_3/$total_usuarios1_3)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_3 = '0';} 
    if ($total_usuarios3_4) {$P2_4 = round((($total_usuarios3_4/$total_usuarios1_4)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_4 = '0';} 
    if ($total_usuarios3_5) {$P2_5 = round((($total_usuarios3_5/$total_usuarios1_5)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_5 = '0';} 
    if ($total_usuarios3_6) {$P2_6 = round((($total_usuarios3_6/$total_usuarios1_6)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_6 = '0';} 
    if ($total_usuarios3_7) {$P2_7 = round((($total_usuarios3_7/$total_usuarios1_7)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_7 = '0';} 
    if ($total_usuarios3_8) {$P2_8 = round((($total_usuarios3_8/$total_usuarios1_8)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_8 = '0';} 
    if ($total_usuarios3_9) {$P2_9 = round((($total_usuarios3_9/$total_usuarios1_9)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_9 = '0';} 
    if ($total_usuarios3_10) {$P2_10 = round((($total_usuarios3_10/$total_usuarios1_10)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_10 = '0';} 
    if ($total_usuarios3_11) {$P2_11 = round((($total_usuarios3_11/$total_usuarios1_11)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_11 = '0';} 
    if ($total_usuarios3_12) {$P2_12 = round((($total_usuarios3_12/$total_usuarios1_12)*100), 2, PHP_ROUND_HALF_UP); } else {$P2_12 = '0';} 

    if ($total_usuarios1_1) {$P3_1 = round((($total_usuarios4_1/$total_usuarios1_1)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_1 = '0';} 
    if ($total_usuarios1_2) {$P3_2 = round((($total_usuarios4_2/$total_usuarios1_2)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_2 = '0';} 
    if ($total_usuarios1_3) {$P3_3 = round((($total_usuarios4_3/$total_usuarios1_3)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_3 = '0';} 
    if ($total_usuarios1_4) {$P3_4 = round((($total_usuarios4_4/$total_usuarios1_4)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_4 = '0';} 
    if ($total_usuarios1_5) {$P3_5 = round((($total_usuarios4_5/$total_usuarios1_5)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_5 = '0';} 
    if ($total_usuarios1_6) {$P3_6 = round((($total_usuarios4_6/$total_usuarios1_6)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_6 = '0';} 
    if ($total_usuarios1_7) {$P3_7 = round((($total_usuarios4_7/$total_usuarios1_7)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_7 = '0';} 
    if ($total_usuarios1_8) {$P3_8 = round((($total_usuarios4_8/$total_usuarios1_8)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_8 = '0';} 
    if ($total_usuarios1_9) {$P3_9 = round((($total_usuarios4_9/$total_usuarios1_9)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_9 = '0';} 
    if ($total_usuarios1_10) {$P3_10 = round((($total_usuarios4_10/$total_usuarios1_10)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_10 = '0';} 
    if ($total_usuarios1_11) {$P3_11 = round((($total_usuarios4_11/$total_usuarios1_11)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_11 = '0';} 
    if ($total_usuarios1_12) {$P3_12 = round((($total_usuarios4_12/$total_usuarios1_12)*100), 2, PHP_ROUND_HALF_UP); } else {$P3_12 = '0';} 
    
   /* if ($total_usuarios1_1) {$P4_1 = round((($total_usuarios5_1/$total_usuarios1_1)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_1 = '0';} 
    if ($total_usuarios1_2) {$P4_2 = round((($total_usuarios5_2/$total_usuarios1_2)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_2 = '0';} 
    if ($total_usuarios1_3) {$P4_3 = round((($total_usuarios5_3/$total_usuarios1_3)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_3 = '0';} 
    if ($total_usuarios1_4) {$P4_4 = round((($total_usuarios5_4/$total_usuarios1_4)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_4 = '0';} 
    if ($total_usuarios1_5) {$P4_5 = round((($total_usuarios5_5/$total_usuarios1_5)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_5 = '0';} 
    if ($total_usuarios1_6) {$P4_6 = round((($total_usuarios5_6/$total_usuarios1_6)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_6 = '0';} 
    if ($total_usuarios1_7) {$P4_7 = round((($total_usuarios5_7/$total_usuarios1_7)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_7 = '0';} 
    if ($total_usuarios1_8) {$P4_8 = round((($total_usuarios5_8/$total_usuarios1_8)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_8 = '0';} 
    if ($total_usuarios1_9) {$P4_9 = round((($total_usuarios5_9/$total_usuarios1_9)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_9 = '0';} 
    if ($total_usuarios1_10) {$P4_10 = round((($total_usuarios5_10/$total_usuarios1_10)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_10 = '0';} 
    if ($total_usuarios1_11) {$P4_11 = round((($total_usuarios5_11/$total_usuarios1_11)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_11 = '0';} 
    if ($total_usuarios1_12) {$P4_12 = round((($total_usuarios5_12/$total_usuarios1_12)*100), 2, PHP_ROUND_HALF_UP); } else {$P4_12 = '0';} */

    $json[] = array(
        'Meta1_1' => $Meta1_1,
        'Meta1_2' => $Meta1_2,
        'Meta1_3' => $Meta1_3,
        'Meta1_4' => $Meta1_4,
        'Meta1_5' => $Meta1_5,
        'Meta1_6' => $Meta1_6,
        'Meta1_7' => $Meta1_7,
        'Meta1_8' => $Meta1_8,
        'Meta1_9' => $Meta1_9,
        'Meta1_10' => $Meta1_10,
        'Meta1_11' => $Meta1_11,
        'Meta1_12' => $Meta1_12,
        'Meta2_1' => $Meta2_1,
        'Meta2_2' => $Meta2_2,
        'Meta2_3' => $Meta2_3,
        'Meta2_4' => $Meta2_4,
        'Meta2_5' => $Meta2_5,
        'Meta2_6' => $Meta2_6,
        'Meta2_7' => $Meta2_7,
        'Meta2_8' => $Meta2_8,
        'Meta2_9' => $Meta2_9,
        'Meta2_10' => $Meta2_10,
        'Meta2_11' => $Meta2_11,
        'Meta2_12' => $Meta2_12,
        'Meta3_1' => $Meta3_1,
        'Meta3_2' => $Meta3_2,
        'Meta3_3' => $Meta3_3,
        'Meta3_4' => $Meta3_4,
        'Meta3_5' => $Meta3_5,
        'Meta3_6' => $Meta3_6,
        'Meta3_7' => $Meta3_7,
        'Meta3_8' => $Meta3_8,
        'Meta3_9' => $Meta3_9,
        'Meta3_10' => $Meta3_10,
        'Meta3_11' => $Meta3_11,
        'Meta3_12' => $Meta3_12,
        'Meta4_1' => $Meta4_1,
        'Meta4_2' => $Meta4_2,
        'Meta4_3' => $Meta4_3,
        'Meta4_4' => $Meta4_4,
        'Meta4_5' => $Meta4_5,
        'Meta4_6' => $Meta4_6,
        'Meta4_7' => $Meta4_7,
        'Meta4_8' => $Meta4_8,
        'Meta4_9' => $Meta4_9,
        'Meta4_10' => $Meta4_10,
        'Meta4_11' => $Meta4_11,
        'Meta4_12' => $Meta4_12,
        'P1' => $P1,
        'P2' => $P2,
        'P3' => $P3,
        'P4' => $P4,
        'P5' => $P5,
        'P6' => $P6,
        'P7' => $P7,
        'P8' => $P8,
        'P9' => $P9,
        'P10' => $P10,
        'P11' => $P11,
        'P12' => $P12,
        'P2_1' => $P2_1,
        'P2_2' => $P2_2,
        'P2_3' => $P2_3,
        'P2_4' => $P2_4,
        'P2_5' => $P2_5,
        'P2_6' => $P2_6,
        'P2_7' => $P2_7,
        'P2_8' => $P2_8,
        'P2_9' => $P2_9,
        'P2_10' => $P2_10,
        'P2_11' => $P2_11,
        'P2_12' => $P2_12,
        'P3_1' => $P3_1,
        'P3_2' => $P3_2,
        'P3_3' => $P3_3,
        'P3_4' => $P3_4,
        'P3_5' => $P3_5,
        'P3_6' => $P3_6,
        'P3_7' => $P3_7,
        'P3_8' => $P3_8,
        'P3_9' => $P3_9,
        'P3_10' => $P3_10,
        'P3_11' => $P3_11,
        'P3_12' => $P3_12,
        'P4_1' => $P4_1,
        'P4_2' => $P4_2,
        'P4_3' => $P4_3,
        'P4_4' => $P4_4,
        'P4_5' => $P4_5,
        'P4_6' => $P4_6,
        'P4_7' => $P4_7,
        'P4_8' => $P4_8,
        'P4_9' => $P4_9,
        'P4_10' => $P4_10,
        'P4_11' => $P4_11,
        'P4_12' => $P4_12,
  
    );
    
   $jsonstring = json_encode($json);
   echo $jsonstring; 
?>    
 