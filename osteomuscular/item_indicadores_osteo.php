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
    
    $sql = "SELECT * FROM controles_osteo WHERE id_admin = '$Codigo' && Terminacion0 = 1";     
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Terminacion0 = $row['Terminacion'];
    $Year_ = new DateTime($Terminacion0); 
    $Year = $Year_->format('Y');
    
    //Población general
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo != '' && YEAR(Fecha_registro) = $Year";         
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios1 = $resultado['total'];
    if($total_usuarios1 == 0) {$total_usuarios1 = 1;}
    
    //Casos
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Riesgo != 'Bajo' && YEAR(Fecha_registro) = $Year";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios2 = $resultado['total'];
    
    //Enfermedad laboral
    $sql = "SELECT COUNT(*) as total FROM locomocion WHERE id_admin = '$Codigo' && Enfermedad = 2 && YEAR(Fecha_registro) = $Year";       
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetch();
    $total_usuarios3 = $resultado['total'];
    
 
    $sql = "SELECT COUNT(DISTINCT a1.Cedula) AS total FROM locomocion a1 LEFT JOIN locomocion a2 ON a2.Cedula = a1.Cedula AND YEAR(a2.Fecha_registro) < $Year WHERE a1.id_admin = ? AND a1.Riesgo != 'Bajo' AND a2.Cedula IS NULL";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute([$Codigo]);
    $resultado = $sentencia->fetch(); 
    $total_usuarios4 = $resultado['total'] ?? 0;
    
    $total_usuarios_1 = $total_usuarios1;
    $total_usuarios_2 = $total_usuarios2;
    $total_usuarios_4 = $total_usuarios4;

    $Prevalencia1 = round((($total_usuarios2/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);  
    $Prevalencia2 = round((($total_usuarios3/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);
    $Incidencia = round((($total_usuarios4/$total_usuarios1)*100), 2, PHP_ROUND_HALF_UP);
    
    $sql = "UPDATE indicadores_osteo SET Resultado = $Prevalencia1 WHERE Tipo = 'PREVALENCIA GENERAL DE SINTOMATOLOGÍA OSTEOMUSCULAR' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);
    
    $sql = "UPDATE indicadores_osteo SET Resultado = $Prevalencia2 WHERE Tipo = 'PREVALENCIA DE DESORDEN MUSCULOESQUELÉTICO (DME) DE ORIGEN LABORAL' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);
    
    $sql = "UPDATE indicadores_osteo SET Resultado = $Incidencia WHERE Tipo = 'INCIDENCIA DE NUEVOS CASOS DE DESORDEN MUSCULOESQUELÉTICO.' && YEAR(Fecha_registro) = $Year";  
    $result = $mysqli->query($sql);
    
    $sql = "SELECT COUNT(*) as total FROM planificacion4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $total_usuarios1 = $resultado1['total'];
    $sql = "SELECT COUNT(*) as total FROM implementacion4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $total_usuarios2 = $resultado2['total'];
    $sql = "SELECT COUNT(*) as total FROM hacer4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $total_usuarios3 = $resultado3['total'];
    $sql = "SELECT COUNT(*) as total FROM verificacion4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $total_usuarios4 = $resultado4['total'];
    $sql = "SELECT COUNT(*) as total FROM auditoria4 WHERE id_admin = '$Codigo' && Year = $Year ORDER BY id ASC";      
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $total_usuarios5 = $resultado5['total'];
	
    $sql = "SELECT AVG(Porcentaje) AS total FROM planificacion4 WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado1 = $sentencia->fetch();
    $porcentaje1 = round(($resultado1['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM implementacion4 WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado2 = $sentencia->fetch();
    $porcentaje2 = round(($resultado2['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM hacer4 WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado3 = $sentencia->fetch();
    $porcentaje3 = round(($resultado3['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM verificacion4 WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado4 = $sentencia->fetch();
    $porcentaje4 = round(($resultado4['total']), 2, PHP_ROUND_HALF_UP); 
    $sql = "SELECT AVG(Porcentaje) AS total FROM auditoria4 WHERE id_admin = '$Codigo' && Year = $Year";
    $sentencia = $connect->prepare($sql);
    $sentencia->execute();
    $resultado5 = $sentencia->fetch();
    $porcentaje5 = round(($resultado5['total']), 2, PHP_ROUND_HALF_UP); 
    
   $Implemetacion = round((($porcentaje1 + $porcentaje2 + $porcentaje3 + $porcentaje4 + $porcentaje5)/5), 2, PHP_ROUND_HALF_UP); 

    $sql = "UPDATE indicadores_osteo SET Resultado = $Implemetacion WHERE Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN OSTEOMUSCULAR' && YEAR(Fecha_registro) = $Year"; 
    $result = $mysqli->query($sql);

     if($result) {   
        $sql = "SELECT * FROM indicadores_osteo WHERE Codigo = '$Codigo' && Fecha_registro >= '$Year-01-01' && Fecha_registro <= '$Year-12-31'";  
        $resultado = $mysqli->query($sql);
        while($row = mysqli_fetch_array($resultado)) { 
            $id = $row['id'];
            $Tipo = $row['Tipo'];
            $Definicion = $row['Definicion'];
            $Interpretacion = $row['Interpretacion'];
            $Fuente = $row['Fuente'];
            $Indicador = $row['Indicador'];
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