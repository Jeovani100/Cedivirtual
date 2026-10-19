<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados8 {
    public static function Q200($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q200' || CIE10_2 = 'Q200' || CIE10_3 = 'Q200' || CIE10_4 = 'Q200' || CIE10_5 = 'Q200' || CIE10_6 = 'Q200' || CIE10_7 = 'Q200' || CIE10_8 = 'Q200' || CIE10_9 = 'Q200' || CIE10_10 = 'Q200') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q201($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q201' || CIE10_2 = 'Q201' || CIE10_3 = 'Q201' || CIE10_4 = 'Q201' || CIE10_5 = 'Q201' || CIE10_6 = 'Q201' || CIE10_7 = 'Q201' || CIE10_8 = 'Q201' || CIE10_9 = 'Q201' || CIE10_10 = 'Q201') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q202($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q202' || CIE10_2 = 'Q202' || CIE10_3 = 'Q202' || CIE10_4 = 'Q202' || CIE10_5 = 'Q202' || CIE10_6 = 'Q202' || CIE10_7 = 'Q202' || CIE10_8 = 'Q202' || CIE10_9 = 'Q202' || CIE10_10 = 'Q202') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q203($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q203' || CIE10_2 = 'Q203' || CIE10_3 = 'Q203' || CIE10_4 = 'Q203' || CIE10_5 = 'Q203' || CIE10_6 = 'Q203' || CIE10_7 = 'Q203' || CIE10_8 = 'Q203' || CIE10_9 = 'Q203' || CIE10_10 = 'Q203') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q204($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q204' || CIE10_2 = 'Q204' || CIE10_3 = 'Q204' || CIE10_4 = 'Q204' || CIE10_5 = 'Q204' || CIE10_6 = 'Q204' || CIE10_7 = 'Q204' || CIE10_8 = 'Q204' || CIE10_9 = 'Q204' || CIE10_10 = 'Q204') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q205($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q205' || CIE10_2 = 'Q205' || CIE10_3 = 'Q205' || CIE10_4 = 'Q205' || CIE10_5 = 'Q205' || CIE10_6 = 'Q205' || CIE10_7 = 'Q205' || CIE10_8 = 'Q205' || CIE10_9 = 'Q205' || CIE10_10 = 'Q205') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q206($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q206' || CIE10_2 = 'Q206' || CIE10_3 = 'Q206' || CIE10_4 = 'Q206' || CIE10_5 = 'Q206' || CIE10_6 = 'Q206' || CIE10_7 = 'Q206' || CIE10_8 = 'Q206' || CIE10_9 = 'Q206' || CIE10_10 = 'Q206') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q208($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q208' || CIE10_2 = 'Q208' || CIE10_3 = 'Q208' || CIE10_4 = 'Q208' || CIE10_5 = 'Q208' || CIE10_6 = 'Q208' || CIE10_7 = 'Q208' || CIE10_8 = 'Q208' || CIE10_9 = 'Q208' || CIE10_10 = 'Q208') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q209($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q209' || CIE10_2 = 'Q209' || CIE10_3 = 'Q209' || CIE10_4 = 'Q209' || CIE10_5 = 'Q209' || CIE10_6 = 'Q209' || CIE10_7 = 'Q209' || CIE10_8 = 'Q209' || CIE10_9 = 'Q209' || CIE10_10 = 'Q209') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q210($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q210' || CIE10_2 = 'Q210' || CIE10_3 = 'Q210' || CIE10_4 = 'Q210' || CIE10_5 = 'Q210' || CIE10_6 = 'Q210' || CIE10_7 = 'Q210' || CIE10_8 = 'Q210' || CIE10_9 = 'Q210' || CIE10_10 = 'Q210') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q211($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q211' || CIE10_2 = 'Q211' || CIE10_3 = 'Q211' || CIE10_4 = 'Q211' || CIE10_5 = 'Q211' || CIE10_6 = 'Q211' || CIE10_7 = 'Q211' || CIE10_8 = 'Q211' || CIE10_9 = 'Q211' || CIE10_10 = 'Q211') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q212($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q212' || CIE10_2 = 'Q212' || CIE10_3 = 'Q212' || CIE10_4 = 'Q212' || CIE10_5 = 'Q212' || CIE10_6 = 'Q212' || CIE10_7 = 'Q212' || CIE10_8 = 'Q212' || CIE10_9 = 'Q212' || CIE10_10 = 'Q212') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q213($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q213' || CIE10_2 = 'Q213' || CIE10_3 = 'Q213' || CIE10_4 = 'Q213' || CIE10_5 = 'Q213' || CIE10_6 = 'Q213' || CIE10_7 = 'Q213' || CIE10_8 = 'Q213' || CIE10_9 = 'Q213' || CIE10_10 = 'Q213') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q214($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q214' || CIE10_2 = 'Q214' || CIE10_3 = 'Q214' || CIE10_4 = 'Q214' || CIE10_5 = 'Q214' || CIE10_6 = 'Q214' || CIE10_7 = 'Q214' || CIE10_8 = 'Q214' || CIE10_9 = 'Q214' || CIE10_10 = 'Q214') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q218($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q218' || CIE10_2 = 'Q218' || CIE10_3 = 'Q218' || CIE10_4 = 'Q218' || CIE10_5 = 'Q218' || CIE10_6 = 'Q218' || CIE10_7 = 'Q218' || CIE10_8 = 'Q218' || CIE10_9 = 'Q218' || CIE10_10 = 'Q218') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q219($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q219' || CIE10_2 = 'Q219' || CIE10_3 = 'Q219' || CIE10_4 = 'Q219' || CIE10_5 = 'Q219' || CIE10_6 = 'Q219' || CIE10_7 = 'Q219' || CIE10_8 = 'Q219' || CIE10_9 = 'Q219' || CIE10_10 = 'Q219') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q220($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q220' || CIE10_2 = 'Q220' || CIE10_3 = 'Q220' || CIE10_4 = 'Q220' || CIE10_5 = 'Q220' || CIE10_6 = 'Q220' || CIE10_7 = 'Q220' || CIE10_8 = 'Q220' || CIE10_9 = 'Q220' || CIE10_10 = 'Q220') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q221($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q221' || CIE10_2 = 'Q221' || CIE10_3 = 'Q221' || CIE10_4 = 'Q221' || CIE10_5 = 'Q221' || CIE10_6 = 'Q221' || CIE10_7 = 'Q221' || CIE10_8 = 'Q221' || CIE10_9 = 'Q221' || CIE10_10 = 'Q221') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q222($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q222' || CIE10_2 = 'Q222' || CIE10_3 = 'Q222' || CIE10_4 = 'Q222' || CIE10_5 = 'Q222' || CIE10_6 = 'Q222' || CIE10_7 = 'Q222' || CIE10_8 = 'Q222' || CIE10_9 = 'Q222' || CIE10_10 = 'Q222') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q223($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q223' || CIE10_2 = 'Q223' || CIE10_3 = 'Q223' || CIE10_4 = 'Q223' || CIE10_5 = 'Q223' || CIE10_6 = 'Q223' || CIE10_7 = 'Q223' || CIE10_8 = 'Q223' || CIE10_9 = 'Q223' || CIE10_10 = 'Q223') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q224($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q224' || CIE10_2 = 'Q224' || CIE10_3 = 'Q224' || CIE10_4 = 'Q224' || CIE10_5 = 'Q224' || CIE10_6 = 'Q224' || CIE10_7 = 'Q224' || CIE10_8 = 'Q224' || CIE10_9 = 'Q224' || CIE10_10 = 'Q224') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q225($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q225' || CIE10_2 = 'Q225' || CIE10_3 = 'Q225' || CIE10_4 = 'Q225' || CIE10_5 = 'Q225' || CIE10_6 = 'Q225' || CIE10_7 = 'Q225' || CIE10_8 = 'Q225' || CIE10_9 = 'Q225' || CIE10_10 = 'Q225') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q226($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q226' || CIE10_2 = 'Q226' || CIE10_3 = 'Q226' || CIE10_4 = 'Q226' || CIE10_5 = 'Q226' || CIE10_6 = 'Q226' || CIE10_7 = 'Q226' || CIE10_8 = 'Q226' || CIE10_9 = 'Q226' || CIE10_10 = 'Q226') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q228($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q228' || CIE10_2 = 'Q228' || CIE10_3 = 'Q228' || CIE10_4 = 'Q228' || CIE10_5 = 'Q228' || CIE10_6 = 'Q228' || CIE10_7 = 'Q228' || CIE10_8 = 'Q228' || CIE10_9 = 'Q228' || CIE10_10 = 'Q228') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q229($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q229' || CIE10_2 = 'Q229' || CIE10_3 = 'Q229' || CIE10_4 = 'Q229' || CIE10_5 = 'Q229' || CIE10_6 = 'Q229' || CIE10_7 = 'Q229' || CIE10_8 = 'Q229' || CIE10_9 = 'Q229' || CIE10_10 = 'Q229') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q230($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q230' || CIE10_2 = 'Q230' || CIE10_3 = 'Q230' || CIE10_4 = 'Q230' || CIE10_5 = 'Q230' || CIE10_6 = 'Q230' || CIE10_7 = 'Q230' || CIE10_8 = 'Q230' || CIE10_9 = 'Q230' || CIE10_10 = 'Q230') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q231($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q231' || CIE10_2 = 'Q231' || CIE10_3 = 'Q231' || CIE10_4 = 'Q231' || CIE10_5 = 'Q231' || CIE10_6 = 'Q231' || CIE10_7 = 'Q231' || CIE10_8 = 'Q231' || CIE10_9 = 'Q231' || CIE10_10 = 'Q231') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q232($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q232' || CIE10_2 = 'Q232' || CIE10_3 = 'Q232' || CIE10_4 = 'Q232' || CIE10_5 = 'Q232' || CIE10_6 = 'Q232' || CIE10_7 = 'Q232' || CIE10_8 = 'Q232' || CIE10_9 = 'Q232' || CIE10_10 = 'Q232') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q233($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q233' || CIE10_2 = 'Q233' || CIE10_3 = 'Q233' || CIE10_4 = 'Q233' || CIE10_5 = 'Q233' || CIE10_6 = 'Q233' || CIE10_7 = 'Q233' || CIE10_8 = 'Q233' || CIE10_9 = 'Q233' || CIE10_10 = 'Q233') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q234($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q234' || CIE10_2 = 'Q234' || CIE10_3 = 'Q234' || CIE10_4 = 'Q234' || CIE10_5 = 'Q234' || CIE10_6 = 'Q234' || CIE10_7 = 'Q234' || CIE10_8 = 'Q234' || CIE10_9 = 'Q234' || CIE10_10 = 'Q234') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q238($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q238' || CIE10_2 = 'Q238' || CIE10_3 = 'Q238' || CIE10_4 = 'Q238' || CIE10_5 = 'Q238' || CIE10_6 = 'Q238' || CIE10_7 = 'Q238' || CIE10_8 = 'Q238' || CIE10_9 = 'Q238' || CIE10_10 = 'Q238') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q239($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q239' || CIE10_2 = 'Q239' || CIE10_3 = 'Q239' || CIE10_4 = 'Q239' || CIE10_5 = 'Q239' || CIE10_6 = 'Q239' || CIE10_7 = 'Q239' || CIE10_8 = 'Q239' || CIE10_9 = 'Q239' || CIE10_10 = 'Q239') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q240($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q240' || CIE10_2 = 'Q240' || CIE10_3 = 'Q240' || CIE10_4 = 'Q240' || CIE10_5 = 'Q240' || CIE10_6 = 'Q240' || CIE10_7 = 'Q240' || CIE10_8 = 'Q240' || CIE10_9 = 'Q240' || CIE10_10 = 'Q240') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q241($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q241' || CIE10_2 = 'Q241' || CIE10_3 = 'Q241' || CIE10_4 = 'Q241' || CIE10_5 = 'Q241' || CIE10_6 = 'Q241' || CIE10_7 = 'Q241' || CIE10_8 = 'Q241' || CIE10_9 = 'Q241' || CIE10_10 = 'Q241') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q242($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q242' || CIE10_2 = 'Q242' || CIE10_3 = 'Q242' || CIE10_4 = 'Q242' || CIE10_5 = 'Q242' || CIE10_6 = 'Q242' || CIE10_7 = 'Q242' || CIE10_8 = 'Q242' || CIE10_9 = 'Q242' || CIE10_10 = 'Q242') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q243($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q243' || CIE10_2 = 'Q243' || CIE10_3 = 'Q243' || CIE10_4 = 'Q243' || CIE10_5 = 'Q243' || CIE10_6 = 'Q243' || CIE10_7 = 'Q243' || CIE10_8 = 'Q243' || CIE10_9 = 'Q243' || CIE10_10 = 'Q243') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q244($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q244' || CIE10_2 = 'Q244' || CIE10_3 = 'Q244' || CIE10_4 = 'Q244' || CIE10_5 = 'Q244' || CIE10_6 = 'Q244' || CIE10_7 = 'Q244' || CIE10_8 = 'Q244' || CIE10_9 = 'Q244' || CIE10_10 = 'Q244') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q245($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q245' || CIE10_2 = 'Q245' || CIE10_3 = 'Q245' || CIE10_4 = 'Q245' || CIE10_5 = 'Q245' || CIE10_6 = 'Q245' || CIE10_7 = 'Q245' || CIE10_8 = 'Q245' || CIE10_9 = 'Q245' || CIE10_10 = 'Q245') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q246($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q246' || CIE10_2 = 'Q246' || CIE10_3 = 'Q246' || CIE10_4 = 'Q246' || CIE10_5 = 'Q246' || CIE10_6 = 'Q246' || CIE10_7 = 'Q246' || CIE10_8 = 'Q246' || CIE10_9 = 'Q246' || CIE10_10 = 'Q246') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q248($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q248' || CIE10_2 = 'Q248' || CIE10_3 = 'Q248' || CIE10_4 = 'Q248' || CIE10_5 = 'Q248' || CIE10_6 = 'Q248' || CIE10_7 = 'Q248' || CIE10_8 = 'Q248' || CIE10_9 = 'Q248' || CIE10_10 = 'Q248') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q249($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q249' || CIE10_2 = 'Q249' || CIE10_3 = 'Q249' || CIE10_4 = 'Q249' || CIE10_5 = 'Q249' || CIE10_6 = 'Q249' || CIE10_7 = 'Q249' || CIE10_8 = 'Q249' || CIE10_9 = 'Q249 || CIE10_10 = 'Q249') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q250($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q250' || CIE10_2 = 'Q250' || CIE10_3 = 'Q250' || CIE10_4 = 'Q250' || CIE10_5 = 'Q250' || CIE10_6 = 'Q250' || CIE10_7 = 'Q250' || CIE10_8 = 'Q250' || CIE10_9 = 'Q250' || CIE10_10 = 'Q250') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
 public static function Q251($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q251' || CIE10_2 = 'Q251' || CIE10_3 = 'Q251' || CIE10_4 = 'Q251' || CIE10_5 = 'Q251' || CIE10_6 = 'Q251' || CIE10_7 = 'Q251' || CIE10_8 = 'Q251' || CIE10_9 = 'Q251' || CIE10_10 = 'Q251') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q252($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q252' || CIE10_2 = 'Q252' || CIE10_3 = 'Q252' || CIE10_4 = 'Q252' || CIE10_5 = 'Q252' || CIE10_6 = 'Q252' || CIE10_7 = 'Q252' || CIE10_8 = 'Q252' || CIE10_9 = 'Q252' || CIE10_10 = 'Q252') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q253($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q253' || CIE10_2 = 'Q253' || CIE10_3 = 'Q253' || CIE10_4 = 'Q253' || CIE10_5 = 'Q253' || CIE10_6 = 'Q253' || CIE10_7 = 'Q253' || CIE10_8 = 'Q253' || CIE10_9 = 'Q253' || CIE10_10 = 'Q253') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q254($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q254' || CIE10_2 = 'Q254' || CIE10_3 = 'Q254' || CIE10_4 = 'Q254' || CIE10_5 = 'Q254' || CIE10_6 = 'Q254' || CIE10_7 = 'Q254' || CIE10_8 = 'Q254' || CIE10_9 = 'Q254' || CIE10_10 = 'Q254') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q255($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q255' || CIE10_2 = 'Q255' || CIE10_3 = 'Q255' || CIE10_4 = 'Q255' || CIE10_5 = 'Q255' || CIE10_6 = 'Q255' || CIE10_7 = 'Q255' || CIE10_8 = 'Q255' || CIE10_9 = 'Q255' || CIE10_10 = 'Q255') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q256($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q256' || CIE10_2 = 'Q256' || CIE10_3 = 'Q256' || CIE10_4 = 'Q256' || CIE10_5 = 'Q256' || CIE10_6 = 'Q256' || CIE10_7 = 'Q256' || CIE10_8 = 'Q256' || CIE10_9 = 'Q256' || CIE10_10 = 'Q256') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q257($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q257' || CIE10_2 = 'Q257' || CIE10_3 = 'Q257' || CIE10_4 = 'Q257' || CIE10_5 = 'Q257' || CIE10_6 = 'Q257' || CIE10_7 = 'Q257' || CIE10_8 = 'Q257' || CIE10_9 = 'Q257' || CIE10_10 = 'Q257') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q258($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q258' || CIE10_2 = 'Q258' || CIE10_3 = 'Q258' || CIE10_4 = 'Q258' || CIE10_5 = 'Q258' || CIE10_6 = 'Q258' || CIE10_7 = 'Q258' || CIE10_8 = 'Q258' || CIE10_9 = 'Q258' || CIE10_10 = 'Q258') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q259($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q259' || CIE10_2 = 'Q259' || CIE10_3 = 'Q259' || CIE10_4 = 'Q259' || CIE10_5 = 'Q259' || CIE10_6 = 'Q259' || CIE10_7 = 'Q259' || CIE10_8 = 'Q259' || CIE10_9 = 'Q259' || CIE10_10 = 'Q259') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q260($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q260' || CIE10_2 = 'Q260' || CIE10_3 = 'Q260' || CIE10_4 = 'Q260' || CIE10_5 = 'Q260' || CIE10_6 = 'Q260' || CIE10_7 = 'Q260' || CIE10_8 = 'Q260' || CIE10_9 = 'Q260' || CIE10_10 = 'Q260') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q261($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q261' || CIE10_2 = 'Q261' || CIE10_3 = 'Q261' || CIE10_4 = 'Q261' || CIE10_5 = 'Q261' || CIE10_6 = 'Q261' || CIE10_7 = 'Q261' || CIE10_8 = 'Q261' || CIE10_9 = 'Q261' || CIE10_10 = 'Q261') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q262($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q262' || CIE10_2 = 'Q262' || CIE10_3 = 'Q262' || CIE10_4 = 'Q262' || CIE10_5 = 'Q262' || CIE10_6 = 'Q262' || CIE10_7 = 'Q262' || CIE10_8 = 'Q262' || CIE10_9 = 'Q262' || CIE10_10 = 'Q262') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q263($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q263' || CIE10_2 = 'Q263' || CIE10_3 = 'Q263' || CIE10_4 = 'Q263' || CIE10_5 = 'Q263' || CIE10_6 = 'Q263' || CIE10_7 = 'Q263' || CIE10_8 = 'Q263' || CIE10_9 = 'Q263' || CIE10_10 = 'Q263') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q264($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q264' || CIE10_2 = 'Q264' || CIE10_3 = 'Q264' || CIE10_4 = 'Q264' || CIE10_5 = 'Q264' || CIE10_6 = 'Q264' || CIE10_7 = 'Q264' || CIE10_8 = 'Q264' || CIE10_9 = 'Q264' || CIE10_10 = 'Q264') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q265($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q265' || CIE10_2 = 'Q265' || CIE10_3 = 'Q265' || CIE10_4 = 'Q265' || CIE10_5 = 'Q265' || CIE10_6 = 'Q265' || CIE10_7 = 'Q265' || CIE10_8 = 'Q265' || CIE10_9 = 'Q265' || CIE10_10 = 'Q265') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q266($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q266' || CIE10_2 = 'Q266' || CIE10_3 = 'Q266' || CIE10_4 = 'Q266' || CIE10_5 = 'Q266' || CIE10_6 = 'Q266' || CIE10_7 = 'Q266' || CIE10_8 = 'Q266' || CIE10_9 = 'Q266' || CIE10_10 = 'Q266') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q268($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q268' || CIE10_2 = 'Q268' || CIE10_3 = 'Q268' || CIE10_4 = 'Q268' || CIE10_5 = 'Q268' || CIE10_6 = 'Q268' || CIE10_7 = 'Q268' || CIE10_8 = 'Q268' || CIE10_9 = 'Q268' || CIE10_10 = 'Q268') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q269($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q269' || CIE10_2 = 'Q269' || CIE10_3 = 'Q269' || CIE10_4 = 'Q269' || CIE10_5 = 'Q269' || CIE10_6 = 'Q269' || CIE10_7 = 'Q269' || CIE10_8 = 'Q269' || CIE10_9 = 'Q269' || CIE10_10 = 'Q269') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q270($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q270' || CIE10_2 = 'Q270' || CIE10_3 = 'Q270' || CIE10_4 = 'Q270' || CIE10_5 = 'Q270' || CIE10_6 = 'Q270' || CIE10_7 = 'Q270' || CIE10_8 = 'Q270' || CIE10_9 = 'Q270' || CIE10_10 = 'Q270') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q271($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q271' || CIE10_2 = 'Q271' || CIE10_3 = 'Q271' || CIE10_4 = 'Q271' || CIE10_5 = 'Q271' || CIE10_6 = 'Q271' || CIE10_7 = 'Q271' || CIE10_8 = 'Q271' || CIE10_9 = 'Q271' || CIE10_10 = 'Q271') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q272($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q272' || CIE10_2 = 'Q272' || CIE10_3 = 'Q272' || CIE10_4 = 'Q272' || CIE10_5 = 'Q272' || CIE10_6 = 'Q272' || CIE10_7 = 'Q272' || CIE10_8 = 'Q272' || CIE10_9 = 'Q272' || CIE10_10 = 'Q272') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q273($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q273' || CIE10_2 = 'Q273' || CIE10_3 = 'Q273' || CIE10_4 = 'Q273' || CIE10_5 = 'Q273' || CIE10_6 = 'Q273' || CIE10_7 = 'Q273' || CIE10_8 = 'Q273' || CIE10_9 = 'Q273' || CIE10_10 = 'Q273') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q274($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q274' || CIE10_2 = 'Q274' || CIE10_3 = 'Q274' || CIE10_4 = 'Q274' || CIE10_5 = 'Q274' || CIE10_6 = 'Q274' || CIE10_7 = 'Q274' || CIE10_8 = 'Q274' || CIE10_9 = 'Q274' || CIE10_10 = 'Q274') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q278($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q278' || CIE10_2 = 'Q278' || CIE10_3 = 'Q278' || CIE10_4 = 'Q278' || CIE10_5 = 'Q278' || CIE10_6 = 'Q278' || CIE10_7 = 'Q278' || CIE10_8 = 'Q278' || CIE10_9 = 'Q278' || CIE10_10 = 'Q278') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q279($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q279' || CIE10_2 = 'Q279' || CIE10_3 = 'Q279' || CIE10_4 = 'Q279' || CIE10_5 = 'Q279' || CIE10_6 = 'Q279' || CIE10_7 = 'Q279' || CIE10_8 = 'Q279' || CIE10_9 = 'Q279' || CIE10_10 = 'Q279') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q280($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q280' || CIE10_2 = 'Q280' || CIE10_3 = 'Q280' || CIE10_4 = 'Q280' || CIE10_5 = 'Q280' || CIE10_6 = 'Q280' || CIE10_7 = 'Q280' || CIE10_8 = 'Q280' || CIE10_9 = 'Q280' || CIE10_10 = 'Q280') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q281($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q281' || CIE10_2 = 'Q281' || CIE10_3 = 'Q281' || CIE10_4 = 'Q281' || CIE10_5 = 'Q281' || CIE10_6 = 'Q281' || CIE10_7 = 'Q281' || CIE10_8 = 'Q281' || CIE10_9 = 'Q281' || CIE10_10 = 'Q281') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q282($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q282' || CIE10_2 = 'Q282' || CIE10_3 = 'Q282' || CIE10_4 = 'Q282' || CIE10_5 = 'Q282' || CIE10_6 = 'Q282' || CIE10_7 = 'Q282' || CIE10_8 = 'Q282' || CIE10_9 = 'Q282' || CIE10_10 = 'Q282') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q283($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q283' || CIE10_2 = 'Q283' || CIE10_3 = 'Q283' || CIE10_4 = 'Q283' || CIE10_5 = 'Q283' || CIE10_6 = 'Q283' || CIE10_7 = 'Q283' || CIE10_8 = 'Q283' || CIE10_9 = 'Q283' || CIE10_10 = 'Q283') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q2888($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q2888' || CIE10_2 = 'Q2888' || CIE10_3 = 'Q2888' || CIE10_4 = 'Q2888' || CIE10_5 = 'Q2888' || CIE10_6 = 'Q2888' || CIE10_7 = 'Q2888' || CIE10_8 = 'Q2888' || CIE10_9 = 'Q2888' || CIE10_10 = 'Q2888') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q289($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q289' || CIE10_2 = 'Q289' || CIE10_3 = 'Q289' || CIE10_4 = 'Q289' || CIE10_5 = 'Q289' || CIE10_6 = 'Q289' || CIE10_7 = 'Q289' || CIE10_8 = 'Q289' || CIE10_9 = 'Q289' || CIE10_10 = 'Q289') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
   public static function R000($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R000' || CIE10_2 = 'R000' || CIE10_3 = 'R000' || CIE10_4 = 'R000' || CIE10_5 = 'R000' || CIE10_6 = 'R000' || CIE10_7 = 'R000' || CIE10_8 = 'R000' || CIE10_9 = 'R000' || CIE10_10 = 'R000') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R001($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R001' || CIE10_2 = 'R001' || CIE10_3 = 'R001' || CIE10_4 = 'R001' || CIE10_5 = 'R001' || CIE10_6 = 'R001' || CIE10_7 = 'R001' || CIE10_8 = 'R001' || CIE10_9 = 'R001' || CIE10_10 = 'R001') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R002($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R002' || CIE10_2 = 'R002' || CIE10_3 = 'R002' || CIE10_4 = 'R002' || CIE10_5 = 'R002' || CIE10_6 = 'R002' || CIE10_7 = 'R002' || CIE10_8 = 'R002' || CIE10_9 = 'R002' || CIE10_10 = 'R002') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R008($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R008' || CIE10_2 = 'R008' || CIE10_3 = 'R008' || CIE10_4 = 'R008' || CIE10_5 = 'R008' || CIE10_6 = 'R008' || CIE10_7 = 'R008' || CIE10_8 = 'R008' || CIE10_9 = 'R008' || CIE10_10 = 'R008') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R010($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R010' || CIE10_2 = 'R010' || CIE10_3 = 'R010' || CIE10_4 = 'R010' || CIE10_5 = 'R010' || CIE10_6 = 'R010' || CIE10_7 = 'R010' || CIE10_8 = 'R010' || CIE10_9 = 'R010' || CIE10_10 = 'R010') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R011($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R011' || CIE10_2 = 'R011' || CIE10_3 = 'R011' || CIE10_4 = 'R011' || CIE10_5 = 'R011' || CIE10_6 = 'R011' || CIE10_7 = 'R011' || CIE10_8 = 'R011' || CIE10_9 = 'R011' || CIE10_10 = 'R011') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R012($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R012' || CIE10_2 = 'R012' || CIE10_3 = 'R012' || CIE10_4 = 'R012' || CIE10_5 = 'R012' || CIE10_6 = 'R012' || CIE10_7 = 'R012' || CIE10_8 = 'R012' || CIE10_9 = 'R012' || CIE10_10 = 'R012') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R02X($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R02X' || CIE10_2 = 'R02X' || CIE10_3 = 'R02X' || CIE10_4 = 'R02X' || CIE10_5 = 'R02X' || CIE10_6 = 'R02X' || CIE10_7 = 'R02X' || CIE10_8 = 'R02X' || CIE10_9 = 'R02X' || CIE10_10 = 'R02X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R030($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R030' || CIE10_2 = 'R030' || CIE10_3 = 'R030' || CIE10_4 = 'R030' || CIE10_5 = 'R030' || CIE10_6 = 'R030' || CIE10_7 = 'R030' || CIE10_8 = 'R030' || CIE10_9 = 'R030' || CIE10_10 = 'R030') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R031($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R031' || CIE10_2 = 'R031' || CIE10_3 = 'R031' || CIE10_4 = 'R031' || CIE10_5 = 'R031' || CIE10_6 = 'R031' || CIE10_7 = 'R031' || CIE10_8 = 'R031' || CIE10_9 = 'R031' || CIE10_10 = 'R031') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R072($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R072' || CIE10_2 = 'R072' || CIE10_3 = 'R072' || CIE10_4 = 'R072' || CIE10_5 = 'R072' || CIE10_6 = 'R072' || CIE10_7 = 'R072' || CIE10_8 = 'R072' || CIE10_9 = 'R072' || CIE10_10 = 'R072') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R073($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R073' || CIE10_2 = 'R073' || CIE10_3 = 'R073' || CIE10_4 = 'R073' || CIE10_5 = 'R073' || CIE10_6 = 'R073' || CIE10_7 = 'R073' || CIE10_8 = 'R073' || CIE10_9 = 'R073' || CIE10_10 = 'R073') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R730($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R730' || CIE10_2 = 'R730' || CIE10_3 = 'R730' || CIE10_4 = 'R730' || CIE10_5 = 'R730' || CIE10_6 = 'R730' || CIE10_7 = 'R730' || CIE10_8 = 'R730' || CIE10_9 = 'R730' || CIE10_10 = 'R730') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R739($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R739' || CIE10_2 = 'R739' || CIE10_3 = 'R739' || CIE10_4 = 'R739' || CIE10_5 = 'R739' || CIE10_6 = 'R739' || CIE10_7 = 'R739' || CIE10_8 = 'R739' || CIE10_9 = 'R739' || CIE10_10 = 'R739') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R790($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R790' || CIE10_2 = 'R790' || CIE10_3 = 'R790' || CIE10_4 = 'R790' || CIE10_5 = 'R790' || CIE10_6 = 'R790' || CIE10_7 = 'R790' || CIE10_8 = 'R790' || CIE10_9 = 'R790' || CIE10_10 = 'R790') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R799($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R799' || CIE10_2 = 'R799' || CIE10_3 = 'R799' || CIE10_4 = 'R799' || CIE10_5 = 'R799' || CIE10_6 = 'R799' || CIE10_7 = 'R799' || CIE10_8 = 'R799' || CIE10_9 = 'R799' || CIE10_10 = 'R799') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R092($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R092' || CIE10_2 = 'R092' || CIE10_3 = 'R092' || CIE10_4 = 'R092' || CIE10_5 = 'R092' || CIE10_6 = 'R092' || CIE10_7 = 'R092' || CIE10_8 = 'R092' || CIE10_9 = 'R092' || CIE10_10 = 'R092') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R098($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R098' || CIE10_2 = 'R098' || CIE10_3 = 'R098' || CIE10_4 = 'R098' || CIE10_5 = 'R098' || CIE10_6 = 'R098' || CIE10_7 = 'R098' || CIE10_8 = 'R098' || CIE10_9 = 'R098' || CIE10_10 = 'R098') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}    
  public static function Q20($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q20' || CIE10_2 = 'Q20' || CIE10_3 = 'Q20' || CIE10_4 = 'Q20' || CIE10_5 = 'Q20' || CIE10_6 = 'Q20' || CIE10_7 = 'Q20' || CIE10_8 = 'Q20' || CIE10_9 = 'Q20' || CIE10_10 = 'Q20') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q21($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q21' || CIE10_2 = 'Q21' || CIE10_3 = 'Q21' || CIE10_4 = 'Q21' || CIE10_5 = 'Q21' || CIE10_6 = 'Q21' || CIE10_7 = 'Q21' || CIE10_8 = 'Q21' || CIE10_9 = 'Q21' || CIE10_10 = 'Q21') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q22($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q22' || CIE10_2 = 'Q22' || CIE10_3 = 'Q22' || CIE10_4 = 'Q22' || CIE10_5 = 'Q22' || CIE10_6 = 'Q22' || CIE10_7 = 'Q22' || CIE10_8 = 'Q22' || CIE10_9 = 'Q22' || CIE10_10 = 'Q22') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q23($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q23' || CIE10_2 = 'Q23' || CIE10_3 = 'Q23' || CIE10_4 = 'Q23' || CIE10_5 = 'Q23' || CIE10_6 = 'Q23' || CIE10_7 = 'Q23' || CIE10_8 = 'Q23' || CIE10_9 = 'Q23' || CIE10_10 = 'Q23') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q24($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q24' || CIE10_2 = 'Q24' || CIE10_3 = 'Q24' || CIE10_4 = 'Q24' || CIE10_5 = 'Q24' || CIE10_6 = 'Q24' || CIE10_7 = 'Q24' || CIE10_8 = 'Q24' || CIE10_9 = 'Q24' || CIE10_10 = 'Q24') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q25($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q25' || CIE10_2 = 'Q25' || CIE10_3 = 'Q25' || CIE10_4 = 'Q25' || CIE10_5 = 'Q25' || CIE10_6 = 'Q25' || CIE10_7 = 'Q25' || CIE10_8 = 'Q25' || CIE10_9 = 'Q25' || CIE10_10 = 'Q25') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q26($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q26' || CIE10_2 = 'Q26' || CIE10_3 = 'Q26' || CIE10_4 = 'Q26' || CIE10_5 = 'Q26' || CIE10_6 = 'Q26' || CIE10_7 = 'Q26' || CIE10_8 = 'Q26' || CIE10_9 = 'Q26' || CIE10_10 = 'Q26') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q27($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q27' || CIE10_2 = 'Q27' || CIE10_3 = 'Q27' || CIE10_4 = 'Q27' || CIE10_5 = 'Q27' || CIE10_6 = 'Q27' || CIE10_7 = 'Q27' || CIE10_8 = 'Q27' || CIE10_9 = 'Q27' || CIE10_10 = 'Q27') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q28($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q28' || CIE10_2 = 'Q28' || CIE10_3 = 'Q28' || CIE10_4 = 'Q28' || CIE10_5 = 'Q28' || CIE10_6 = 'Q28' || CIE10_7 = 'Q28' || CIE10_8 = 'Q28' || CIE10_9 = 'Q28' || CIE10_10 = 'Q28') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function Q30($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'Q30' || CIE10_2 = 'Q30' || CIE10_3 = 'Q30' || CIE10_4 = 'Q30' || CIE10_5 = 'Q30' || CIE10_6 = 'Q30' || CIE10_7 = 'Q30' || CIE10_8 = 'Q30' || CIE10_9 = 'Q30' || CIE10_10 = 'Q30') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R01($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R01' || CIE10_2 = 'R01' || CIE10_3 = 'R01' || CIE10_4 = 'R01' || CIE10_5 = 'R01' || CIE10_6 = 'R01' || CIE10_7 = 'R01' || CIE10_8 = 'R01' || CIE10_9 = 'R01' || CIE10_10 = 'R01') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R02($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R02' || CIE10_2 = 'R02' || CIE10_3 = 'R02' || CIE10_4 = 'R02' || CIE10_5 = 'R02' || CIE10_6 = 'R02' || CIE10_7 = 'R02' || CIE10_8 = 'R02' || CIE10_9 = 'R02' || CIE10_10 = 'R02') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R03($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R03' || CIE10_2 = 'R03' || CIE10_3 = 'R03' || CIE10_4 = 'R03' || CIE10_5 = 'R03' || CIE10_6 = 'R03' || CIE10_7 = 'R03' || CIE10_8 = 'R03' || CIE10_9 = 'R03' || CIE10_10 = 'R03') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R07($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R07' || CIE10_2 = 'R07' || CIE10_3 = 'R07' || CIE10_4 = 'R07' || CIE10_5 = 'R07' || CIE10_6 = 'R07' || CIE10_7 = 'R07' || CIE10_8 = 'R07' || CIE10_9 = 'R07' || CIE10_10 = 'R07') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R73($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R73' || CIE10_2 = 'R73' || CIE10_3 = 'R73' || CIE10_4 = 'R73' || CIE10_5 = 'R73' || CIE10_6 = 'R73' || CIE10_7 = 'R73' || CIE10_8 = 'R73' || CIE10_9 = 'R73' || CIE10_10 = 'R73') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R79($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R79' || CIE10_2 = 'R79' || CIE10_3 = 'R79' || CIE10_4 = 'R79' || CIE10_5 = 'R79' || CIE10_6 = 'R79' || CIE10_7 = 'R79' || CIE10_8 = 'R79' || CIE10_9 = 'R79' || CIE10_10 = 'R79') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}
    public static function R09($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R09' || CIE10_2 = 'R09' || CIE10_3 = 'R09' || CIE10_4 = 'R09' || CIE10_5 = 'R09' || CIE10_6 = 'R09' || CIE10_7 = 'R09' || CIE10_8 = 'R09' || CIE10_9 = 'R09' || CIE10_10 = 'R09') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9' || Tipo_examen = '$Tipo10' || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];
   
    }
    return $total_usuarios;
}    
    
    
    
}