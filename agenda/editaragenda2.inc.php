 <?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    if(isset($_POST['Sector'])) {
        $Sector= $_POST['Sector'];
        $id = $_POST['id'];
        $sql = "UPDATE reg_agenda SET Sector = '$Sector' WHERE id = $id"; 
        $resultado = $mysqli->query($sql);
};
