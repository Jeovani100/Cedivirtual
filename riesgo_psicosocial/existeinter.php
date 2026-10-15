<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    if (isset($_POST['id'])) {
	$id = $_POST['id'];
    }
    $sql = "SELECT * FROM intralaboralA WHERE id_usuario = '$id'";
    $resultado = $mysqli->query($sql);
       $row = $resultado->fetch_array(MYSQLI_ASSOC);
       $intraA=$row["G"];
       $id_usuario=$row["id_usuario"];
       if ($id_usuario){
           $intraA_existe = 1;
       } else {
           $intraA_existe = 0;
       };
    $sql = "SELECT * FROM intralaboralB WHERE id_usuario = '$id'";
    $resultado2 = $mysqli->query($sql);
       $row2 = $resultado2->fetch_array(MYSQLI_ASSOC);
       $intraB=$row2["Gb"];
       $id_usuario2=$row2["id_usuario"];
       if ($id_usuario2){
           $intraB_existe = 1;
       } else {
           $intraB_existe = 0;
       }; 
       
    $sql = "SELECT * FROM extralaboral WHERE id_usuario = '$id'";
    $resultado3 = $mysqli->query($sql);
       $row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
       $Forma3=$row3["Forma"];
       $extralaboral=$row3["E0"];
       $id_usuario3=$row3["id_usuario"];
       if ($id_usuario3){
           $extralaboral_existe = 1;
       } else {
           $extralaboral_existe = 0;
       }; 
       
    $sql = "SELECT * FROM estres WHERE id_usuario = '$id'";
    $resultado4 = $mysqli->query($sql);
       $row4 = $resultado4->fetch_array(MYSQLI_ASSOC);
       $Forma4=$row4["Forma"];
       $id_usuario4=$row4["id_usuario"];
       if ($id_usuario4){
           $estres_existe = 1;
       } else {
           $estres_existe = 0;
       };    
        $json[] = array(
           'id' => $id,  
           'intraA' => $intraA, 
           'intraB' => $intraB, 
           'extralaboral' => $extralaboral, 
           'Forma3' => $Forma3,  
           'Forma4' => $Forma4,  
           'intraA_existe' => $intraA_existe,
           'intraB_existe' => $intraB_existe,
           'extralaboral_existe' => $extralaboral_existe,
           'estres_existe' => $estres_existe,
        );
        $jsonstring = json_encode($json);
        echo $jsonstring; 
?>

