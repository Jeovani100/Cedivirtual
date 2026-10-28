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
    
    $sql = "SELECT * FROM controles_auditivo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    
    //Población general
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != '' && YEAR(Fecha) = $Year";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1 = $resultado['total'] == 0 ? 1 : $resultado['total'];
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha) = $Year";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2 = $resultado['total'] == 0 ? 1 : $resultado['total'];;
    $sql = "SELECT COUNT(*) as total FROM auditivo WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha) = $Year";     
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3 = $resultado['total'] == 0 ? 1 : $resultado['total'];
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM auditivo a1 WHERE  id_admin = '$Codigo' AND Riesgo != 'Bajo'AND NOT EXISTS (SELECT 1 FROM auditivo a2 WHERE a2.Cedula = a1.Cedula AND YEAR(a2.Fecha_registro) < $Year)";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios4 = $resultado['total'] == 0 ? 1 : $resultado['total'];
    $total_usuarios_1 = $total_usuarios1;
    $total_usuarios_2 = $total_usuarios2;
    $total_usuarios_4 = $total_usuarios4;
    $Prevalencia1 = round((($total_usuarios2/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);  
    $Prevalencia2 = round((($total_usuarios3/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);  
    $Incidencia = round((($total_usuarios4/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);
    $sql = "UPDATE indicadores_audio SET Resultado = $Prevalencia1 WHERE Tipo = 'PREVALENCIA GENERAL' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);
    $sql = "UPDATE indicadores_audio SET Resultado = $Prevalencia2 WHERE Tipo = 'PREVALENCIA DE ENFERMEDAD LABORAL' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);
    $sql = "UPDATE indicadores_audio SET Resultado = $Incidencia WHERE Tipo = 'INCIDENCIA' && YEAR(Fecha_registro) = $Year";  
    $result = $mysqli->query($sql);
    $sql = "SELECT COUNT(*) as total FROM planificacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $total_usuarios1 = $resultado1['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $total_usuarios2 = $resultado2['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $total_usuarios3 = $resultado3['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $total_usuarios4 = $resultado4['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $total_usuarios5 = $resultado5['total'];
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $porcentaje1 = round(($resultado1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $porcentaje2 = round(($resultado2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $porcentaje3 = round(($resultado3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $porcentaje4 = round(($resultado4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $porcentaje5 = round(($resultado5['total']), 2, PHP_ROUND_HALF_UP); 
    $Implemetacion = round((($porcentaje1 + $porcentaje2 + $porcentaje3 + $porcentaje4 + $porcentaje5)/5), 2, PHP_ROUND_HALF_UP); 
    $sql = "UPDATE indicadores_audio SET Resultado = $Implemetacion WHERE Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);
    if($result) {   
        $sql = "SELECT * FROM indicadores_audio WHERE Codigo = '$Codigo' && YEAR(Fecha_registro) >= $Year && YEAR(Fecha_registro) <= $Year";  
        $resultado = $mysqli->query($sql);
        while($row = mysqli_fetch_array($resultado)) { 
            $id = $row['id'];
            $Tipo = $row['Tipo'];
            $Definicion = $row['Definicion'];
            $Interpretacion = $row['Interpretacion'];
            $Fuente = $row['Fuente'];
            $Indicador = $row['Indicador'];
            $Frecuencia = $row['Frecuencia'];
            $Numerador = $row['Numerador'];
            $Denominador = $row['Denominador'];
            $Meta = $row['Meta'];
            $Resultado = $row['Resultado'];
            
            $json[] = array(
                'id' => $id,
                'Tipo' => $Tipo,
                'Definicion' => $Definicion,
                'Interpretacion' => $Interpretacion,
                'Fuente' => $Fuente,
                'Indicador' =>$Indicador,
                'Frecuencia' => $Incidencia,
                'Numerador' => $Numerador,
                'Denominador' => $Denominador,
                'Meta' => $Meta,
                'Resultado' => $Resultado,
            );
        }
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>