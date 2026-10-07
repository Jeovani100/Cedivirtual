<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$search = $_POST['search'];
if(!empty($search)) {
    $sql = "SELECT * FROM agenda WHERE (Documento LIKE '$search%' || Empresa LIKE '$search%') ORDER BY id DESC LIMIT 10";
    $resultado = $mysqli->query($sql);
    $json = array();
    $numeracion = 0;
    while($row = mysqli_fetch_array($resultado)) {
        $numeracion++;
        $Tipo0 = $row['Tipo'];
        $ips = $row['Ips'];
        switch ($ips) {
            case 'Cedisalud IPS (Apartadó)':
                $color = "#000000";
                break;
            case 'Cedisalud IPS (Medellín)':
                $color = "#000000";
                break;
            default:
                $color = "#0000cc";
                break;
        } 
         $orden = $row['Orden'];
        switch ($orden) {
            case '1':
                $color2 = "#c35709";
                $style='verdanab';
                break;
            default:
                $color2 = "#000000";
                $style='verdana';
                break;
        } 
        if ($Tipo0 == 'Cédula de ciudadanía') {
            $Tipo = 'C.C.';
        } else {
            $Tipo = 'C.E.';
        }
        $json[] = array(
            'numeracion' => $numeracion,
            'id' => $row['id'],
            'Ips' => $row['Ips'],
            'Color' => $color,
            'Color2' => $color2,
            'style' => $style,
            'Tipo' => $Tipo,
            'Cedula' => $row['Documento'],
            'Nombre' => $row['Nombre'],
            'Apellidos' => $row['Apellidos'],
            'Cargo' => $row['Cargo'],
            'Examen' => $row['Examen'],
            'Especifico' => $row['Especifico'],
            'Descripcion' => $row['Descripcion'],
            'Fecha' => $row['Fecha'],
            'Observaciones' => $row['Observaciones'],
            'Observaciones2' => $row['Observaciones2'],
            'Responsable' => $row['Responsable'],
            'Empresa' => $row['Empresa'],
            'Fecha_registro' => $row['Fecha_registro']
    );}
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>