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
	
	$sql = "SELECT * FROM admin WHERE Botones = 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
    if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='block';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
	
    $sql = "SELECT * FROM grupoges_auditivo WHERE id_admin = '$Codigo'";
    $resultado = $mysqli->query($sql);
    
    while($row = mysqli_fetch_array($resultado)) { 
        $id = $row['id'];
        $Grupo = $row['Grupo'];
        $GrupoGes = $Grupo;
        $GrupoGes0 = $Grupo;

        switch ($Grupo) {
            case '1':
                $GrupoGes = 'Grupo 1<br>AUDIOMETRIA NORMAL';
                $GrupoGes0 = 'Grupo 1';
                $Promedio = 1;
                break;
            case '2':
                $GrupoGes = 'Grupo 2<br>HIPOACUSIA LEVE (TAMIZ Y/O CLINICA) UNILATERAL O BILATERAL';
                $GrupoGes0 = 'Grupo 2';
                $Promedio = 2;
                break;
            case '3':
                $GrupoGes = 'Grupo 3<br>HIPOACUSIA MODERADA (TAMIZ Y/O CLINICA) UNILATERAL O BILATERAL';
                 $GrupoGes0 = 'Grupo 3';
                 $Promedio = 3;
                break;
            case '4':
                $GrupoGes = 'Grupo 4<br>HIPOACUSIA MODERADA- MODERADASEVERA- SEVERA Y PROFUNDA (TAMIZ Y/O CLINICA) UNILATERAL O BILATERAL';
                $GrupoGes0 = 'Grupo 4';
                $Promedio = 4;
                break;
            case '5':
                $GrupoGes = 'Grupo 5<br>DISMINUCIÓN AUDITIVA INDUCIDA POR RUIDO "DAIR" (TAMIZ Y/O CLINICA) UNILATERAL O BILATERAL LEVE- MODERADO- SEVERO';
                $GrupoGes0 = 'Grupo 5';
                $Promedio = 5;
                break;    
        }
        
        $sql = "SELECT COUNT(*) as total FROM auditivo WHERE GES = '$Promedio' && id_admin = '$Codigo' && YEAR(Fecha) = $Year";      
        $sentencia2 = $connect->prepare($sql);
        $sentencia2->execute();
        $resultado2 = $sentencia2->fetch();
        $Cantidad = $resultado2['total'];
        
        $Bajo = $row['Bajo'];
        $Medio = $row['Medio'];
        $Alto = $row['Alto'];
        $EPP = $row['EPP'];

        $json[] = array(
            'id' => $id,
            'Codigo' => $Codigo,
            'Promedio' => $Promedio,
            'Grupo' => nl2br($Grupo),
            'Grupo_n' => $GrupoGes,
            'Descripcion' => $row['Descripcion'],
            'Individual' => $row['Individual'],
            'Ambiental' => $row['Ambiental'],
            'Periodicidad' => $row['Periodicidad'],
            'Cantidad' => $Cantidad,
            'Nivel' => 0,
            'Boton' => $Boton,
            'Boton2' => $Boton2,
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring; 
?>