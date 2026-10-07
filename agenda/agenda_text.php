 <?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    $sql = "SELECT * FROM not_agenda WHERE id = 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $titulo = $row['Titulo'];   
    $text = $row['Notificacion'];  
    $json[] = array(
            'titulo' => nl2br($titulo),
            'text' => nl2br($text),
        );
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>