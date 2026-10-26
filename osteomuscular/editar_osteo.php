 <?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    if(isset($_POST['id_osteo'])) {
        $id = $_POST['id_osteo'];
        $Nombre = $_POST['Nombre'];
        $Cedula = $_POST['Cedula'];
        $Genero = $_POST['Genero'];
        $Empresa = $_POST['Empresa'];
        $Costo = $_POST['Costo'];
        $Sede = $_POST['Sede'];
        $Cargo = $_POST['Cargo'];
        $Email = $_POST['Email'];
        $Celular = $_POST['Celular'];

       $sql = "UPDATE locomocion SET Nombre = '$Nombre',Cedula = $Cedula,Genero = '$Genero',Empresa = '$Empresa',Costo = '$Costo',Sede = '$Sede',Cargo = '$Cargo',Email = '$Email',Celular = '$Celular' WHERE id = $id";
       $result = $mysqli->query($sql);
    };



