 <?php 
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Observacion_e'])) {
        $id = $_POST['id'];
        $Observacion = $_POST['Observacion_e'];
        $sql = "UPDATE reg_agenda SET Observacion = '$Observacion' WHERE id = $id";
        $result = $mysqli->query($sql);
    };
?>    