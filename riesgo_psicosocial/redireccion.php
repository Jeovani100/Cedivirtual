 <?php 
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        $Activo = $_POST['Activo'];
        $Activo2 = $_POST['Activo2'];
        $Activo3 = $_POST['Activo3'];
    $sql = "UPDATE admin SET Activo = '$Activo', Activo2 = '$Activo2',  Activo3 = '$Activo3' WHERE id = '$id'";
    $result = $mysqli->query($sql);
};
?>