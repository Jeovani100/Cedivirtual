<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    try {
        $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->exec("SET CHARACTER SET utf8");
        
        // Validar que existe el parámetro
        if(isset($_POST['Codigo']) && !empty($_POST['Codigo'])) {
            $Codigo = $_POST['Codigo'];
            
            // Consulta para registros de los últimos 10 SEGUNDOS
            $sql = "SELECT COUNT(*) as total 
                    FROM agenda 
                    WHERE Codigo = :codigo 
                    AND Fecha_registro >= DATE_SUB(NOW(), INTERVAL 45 SECOND)";
            
            $sentencia = $connect->prepare($sql);
            $sentencia->bindParam(':codigo', $Codigo, PDO::PARAM_STR);
            $sentencia->execute();
            
            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
            $total_usuarios = $resultado['total']; 
            
            $json[] = array(
                'contador' => $total_usuarios,
                'intervalo' => '10 segundos',
                'codigo' => $Codigo
            );
            
            echo json_encode($json);
        } else {
            $json[] = array(
                'contador' => 0,
                'error' => 'Código no proporcionado'
            );
            echo json_encode($json);
        }
        
    } catch(PDOException $e) {
        $json[] = array(
            'contador' => 0,
            'error' => 'Error: ' . $e->getMessage()
        );
        echo json_encode($json);
    }
?>