<?php
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    
    $id_admin = $_POST['id_admin'];
    $SVE = $_POST['SVE'];
    $sql = "SELECT * FROM admin WHERE id = '$id_admin'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Botones_ = $row['Botones'];
     if($Botones_ == 1) {
        $Boton ='';
        $Boton2 ='inline';
    } else {
        $Boton ='disabled'; 
        $Boton2 ='none';
    }
    
    $sql = "SELECT * FROM capacitacion WHERE id_admin = $id_admin && SVE = $SVE ORDER BY Dia1 ASC, Hora1 ASC";
    $resultado = $mysqli->query($sql);
    $json = array();
    while($row = mysqli_fetch_array($resultado)) {
         $Activo0 = $row['Activo'];
        if($Activo0 == 1){
            $Activo = "#e7744f";
        } elseif ($Activo0 == 0) {
            $Activo = "#666666";
        }
        $json[] = array(
        'id' => $row['id'],
        'Titulo' => $row['Titulo'],
        'Dia1' => $row['Dia1'],
        'Dia2' => $row['Dia2'],
        'Hora1' => $row['Hora1'],
        'Hora2' => $row['Hora2'],
        'Descripcion' => $row['Descripcion'],
        'Destino' => $row['Destino'],
        'Responsable' => $row['Responsable'],
        'Modalidad' => $row['Modalidad'],
        'Acreditadas' => $row['Acreditadas'],
        'Activo' => $Activo,
        'Boton' => $Boton,
        'Boton2' => $Boton2,
        );
    }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>