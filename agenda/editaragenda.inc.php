 <?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    if(isset($_POST['id_A'])) {
        $id_A = $_POST['id_A'];
        $Fecha_A = $_POST['Fecha_A'];
        $sql = "UPDATE agenda SET Fecha = '$Fecha_A' WHERE id = '$id_A'"; 
        $resultado = $mysqli->query($sql);
};
