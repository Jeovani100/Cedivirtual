<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados2 {
    //OSTEOMUSCULAR
   public static function M000($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M000' || CIE10_2 = 'M000' || CIE10_3 = 'M000' || CIE10_4 = 'M000' || CIE10_5 = 'M000' || CIE10_6 = 'M000' || CIE10_7 = 'M000' || CIE10_8 = 'M000' || CIE10_9 = 'M000' || CIE10_10 = 'M000') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M001($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M001' || CIE10_2 = 'M001' || CIE10_3 = 'M001' || CIE10_4 = 'M001' || CIE10_5 = 'M001' || CIE10_6 = 'M001' || CIE10_7 = 'M001' || CIE10_8 = 'M001' || CIE10_9 = 'M001' || CIE10_10 = 'M001') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M002($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M002' || CIE10_2 = 'M002' || CIE10_3 = 'M002' || CIE10_4 = 'M002' || CIE10_5 = 'M002' || CIE10_6 = 'M002' || CIE10_7 = 'M002' || CIE10_8 = 'M002' || CIE10_9 = 'M002' || CIE10_10 = 'M002') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M008($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M008' || CIE10_2 = 'M008' || CIE10_3 = 'M008' || CIE10_4 = 'M008' || CIE10_5 = 'M008' || CIE10_6 = 'M008' || CIE10_7 = 'M008' || CIE10_8 = 'M008' || CIE10_9 = 'M008' || CIE10_10 = 'M008') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M009($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M009' || CIE10_2 = 'M009' || CIE10_3 = 'M009' || CIE10_4 = 'M009' || CIE10_5 = 'M009' || CIE10_6 = 'M009' || CIE10_7 = 'M009' || CIE10_8 = 'M009' || CIE10_9 = 'M009' || CIE10_10 = 'M009') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M010($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M010' || CIE10_2 = 'M010' || CIE10_3 = 'M010' || CIE10_4 = 'M010' || CIE10_5 = 'M010' || CIE10_6 = 'M010' || CIE10_7 = 'M010' || CIE10_8 = 'M010' || CIE10_9 = 'M010' || CIE10_10 = 'M010') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M011($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M011' || CIE10_2 = 'M011' || CIE10_3 = 'M011' || CIE10_4 = 'M011' || CIE10_5 = 'M011' || CIE10_6 = 'M011' || CIE10_7 = 'M011' || CIE10_8 = 'M011' || CIE10_9 = 'M011' || CIE10_10 = 'M011') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M012($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M012' || CIE10_2 = 'M012' || CIE10_3 = 'M012' || CIE10_4 = 'M012' || CIE10_5 = 'M012' || CIE10_6 = 'M012' || CIE10_7 = 'M012' || CIE10_8 = 'M012' || CIE10_9 = 'M012' || CIE10_10 = 'M012') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M013($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M013' || CIE10_2 = 'M013' || CIE10_3 = 'M013' || CIE10_4 = 'M013' || CIE10_5 = 'M013' || CIE10_6 = 'M013' || CIE10_7 = 'M013' || CIE10_8 = 'M013' || CIE10_9 = 'M013' || CIE10_10 = 'M013') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M014($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M014' || CIE10_2 = 'M014' || CIE10_3 = 'M014' || CIE10_4 = 'M014' || CIE10_5 = 'M014' || CIE10_6 = 'M014' || CIE10_7 = 'M014' || CIE10_8 = 'M014' || CIE10_9 = 'M014' || CIE10_10 = 'M014') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M015($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M015' || CIE10_2 = 'M015' || CIE10_3 = 'M015' || CIE10_4 = 'M015' || CIE10_5 = 'M015' || CIE10_6 = 'M015' || CIE10_7 = 'M015' || CIE10_8 = 'M015' || CIE10_9 = 'M015' || CIE10_10 = 'M015') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M016($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M016' || CIE10_2 = 'M016' || CIE10_3 = 'M016' || CIE10_4 = 'M016' || CIE10_5 = 'M016' || CIE10_6 = 'M016' || CIE10_7 = 'M016' || CIE10_8 = 'M016' || CIE10_9 = 'M016' || CIE10_10 = 'M016') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M018($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M018' || CIE10_2 = 'M018' || CIE10_3 = 'M018' || CIE10_4 = 'M018' || CIE10_5 = 'M018' || CIE10_6 = 'M018' || CIE10_7 = 'M018' || CIE10_8 = 'M018' || CIE10_9 = 'M018' || CIE10_10 = 'M018') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M020($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M020' || CIE10_2 = 'M020' || CIE10_3 = 'M020' || CIE10_4 = 'M020' || CIE10_5 = 'M020' || CIE10_6 = 'M020' || CIE10_7 = 'M020' || CIE10_8 = 'M020' || CIE10_9 = 'M020' || CIE10_10 = 'M020') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M021($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M021' || CIE10_2 = 'M021' || CIE10_3 = 'M021' || CIE10_4 = 'M021' || CIE10_5 = 'M021' || CIE10_6 = 'M021' || CIE10_7 = 'M021' || CIE10_8 = 'M021' || CIE10_9 = 'M021' || CIE10_10 = 'M021') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M022($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M022' || CIE10_2 = 'M022' || CIE10_3 = 'M022' || CIE10_4 = 'M022' || CIE10_5 = 'M022' || CIE10_6 = 'M022' || CIE10_7 = 'M022' || CIE10_8 = 'M022' || CIE10_9 = 'M022' || CIE10_10 = 'M022') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M023($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M023' || CIE10_2 = 'M023' || CIE10_3 = 'M023' || CIE10_4 = 'M023' || CIE10_5 = 'M023' || CIE10_6 = 'M023' || CIE10_7 = 'M023' || CIE10_8 = 'M023' || CIE10_9 = 'M023' || CIE10_10 = 'M023') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M028($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M028' || CIE10_2 = 'M028' || CIE10_3 = 'M028' || CIE10_4 = 'M028' || CIE10_5 = 'M028' || CIE10_6 = 'M028' || CIE10_7 = 'M028' || CIE10_8 = 'M028' || CIE10_9 = 'M028' || CIE10_10 = 'M028') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function M029($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M029' || CIE10_2 = 'M029' || CIE10_3 = 'M029' || CIE10_4 = 'M029' || CIE10_5 = 'M029' || CIE10_6 = 'M029' || CIE10_7 = 'M029' || CIE10_8 = 'M029' || CIE10_9 = 'M029' || CIE10_10 = 'M029') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M030($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M030' || CIE10_2 = 'M030' || CIE10_3 = 'M030' || CIE10_4 = 'M030' || CIE10_5 = 'M030' || CIE10_6 = 'M030' || CIE10_7 = 'M030' || CIE10_8 = 'M030' || CIE10_9 = 'M030' || CIE10_10 = 'M030') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M031($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M031' || CIE10_2 = 'M031' || CIE10_3 = 'M031' || CIE10_4 = 'M031' || CIE10_5 = 'M031' || CIE10_6 = 'M031' || CIE10_7 = 'M031' || CIE10_8 = 'M031' || CIE10_9 = 'M031' || CIE10_10 = 'M031') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M032($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M032' || CIE10_2 = 'M032' || CIE10_3 = 'M032' || CIE10_4 = 'M032' || CIE10_5 = 'M032' || CIE10_6 = 'M032' || CIE10_7 = 'M032' || CIE10_8 = 'M032' || CIE10_9 = 'M032' || CIE10_10 = 'M032') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M036($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M036' || CIE10_2 = 'M036' || CIE10_3 = 'M036' || CIE10_4 = 'M036' || CIE10_5 = 'M036' || CIE10_6 = 'M036' || CIE10_7 = 'M036' || CIE10_8 = 'M036' || CIE10_9 = 'M036' || CIE10_10 = 'M036') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M050($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M050' || CIE10_2 = 'M050' || CIE10_3 = 'M050' || CIE10_4 = 'M050' || CIE10_5 = 'M050' || CIE10_6 = 'M050' || CIE10_7 = 'M050' || CIE10_8 = 'M050' || CIE10_9 = 'M050' || CIE10_10 = 'M050') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M051($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M051' || CIE10_2 = 'M051' || CIE10_3 = 'M051' || CIE10_4 = 'M051' || CIE10_5 = 'M051' || CIE10_6 = 'M051' || CIE10_7 = 'M051' || CIE10_8 = 'M051' || CIE10_9 = 'M051' || CIE10_10 = 'M051') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M052($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M052' || CIE10_2 = 'M052' || CIE10_3 = 'M052' || CIE10_4 = 'M052' || CIE10_5 = 'M052' || CIE10_6 = 'M052' || CIE10_7 = 'M052' || CIE10_8 = 'M052' || CIE10_9 = 'M052' || CIE10_10 = 'M052') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M053($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M053' || CIE10_2 = 'M053' || CIE10_3 = 'M053' || CIE10_4 = 'M053' || CIE10_5 = 'M053' || CIE10_6 = 'M053' || CIE10_7 = 'M053' || CIE10_8 = 'M053' || CIE10_9 = 'M053' || CIE10_10 = 'M053') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M058($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M058' || CIE10_2 = 'M058' || CIE10_3 = 'M058' || CIE10_4 = 'M058' || CIE10_5 = 'M058' || CIE10_6 = 'M058' || CIE10_7 = 'M058' || CIE10_8 = 'M058' || CIE10_9 = 'M058' || CIE10_10 = 'M058') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M059($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M059' || CIE10_2 = 'M059' || CIE10_3 = 'M059' || CIE10_4 = 'M059' || CIE10_5 = 'M059' || CIE10_6 = 'M059' || CIE10_7 = 'M059' || CIE10_8 = 'M059' || CIE10_9 = 'M059' || CIE10_10 = 'M059') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M060($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M060' || CIE10_2 = 'M060' || CIE10_3 = 'M060' || CIE10_4 = 'M060' || CIE10_5 = 'M060' || CIE10_6 = 'M060' || CIE10_7 = 'M060' || CIE10_8 = 'M060' || CIE10_9 = 'M060' || CIE10_10 = 'M060') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M061($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M061' || CIE10_2 = 'M061' || CIE10_3 = 'M061' || CIE10_4 = 'M061' || CIE10_5 = 'M061' || CIE10_6 = 'M061' || CIE10_7 = 'M061' || CIE10_8 = 'M061' || CIE10_9 = 'M061' || CIE10_10 = 'M061') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M062($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M062' || CIE10_2 = 'M062' || CIE10_3 = 'M062' || CIE10_4 = 'M062' || CIE10_5 = 'M062') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M063($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M063' || CIE10_2 = 'M063' || CIE10_3 = 'M063' || CIE10_4 = 'M063' || CIE10_5 = 'M063' || CIE10_6 = 'M063' || CIE10_7 = 'M063' || CIE10_8 = 'M063' || CIE10_9 = 'M063' || CIE10_10 = 'M063') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M064($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M064' || CIE10_2 = 'M064' || CIE10_3 = 'M064' || CIE10_4 = 'M064' || CIE10_5 = 'M064' || CIE10_6 = 'M064' || CIE10_7 = 'M064' || CIE10_8 = 'M064' || CIE10_9 = 'M064' || CIE10_10 = 'M064') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M068($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M068' || CIE10_2 = 'M068' || CIE10_3 = 'M068' || CIE10_4 = 'M068' || CIE10_5 = 'M068' || CIE10_6 = 'M068' || CIE10_7 = 'M068' || CIE10_8 = 'M068' || CIE10_9 = 'M068' || CIE10_10 = 'M068' ) &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M069($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M069' || CIE10_2 = 'M069' || CIE10_3 = 'M069' || CIE10_4 = 'M069' || CIE10_5 = 'M069' || CIE10_6 = 'M069' || CIE10_7 = 'M069' || CIE10_8 = 'M069' || CIE10_9 = 'M069' || CIE10_10 = 'M069') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M070($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M070' || CIE10_2 = 'M070' || CIE10_3 = 'M070' || CIE10_4 = 'M070' || CIE10_5 = 'M070' || CIE10_6 = 'M070' || CIE10_7 = 'M070' || CIE10_8 = 'M070' || CIE10_9 = 'M070' || CIE10_10 = 'M070') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M071($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M071' || CIE10_2 = 'M071' || CIE10_3 = 'M071' || CIE10_4 = 'M071' || CIE10_5 = 'M071' || CIE10_6 = 'M071' || CIE10_7 = 'M071' || CIE10_8 = 'M071' || CIE10_9 = 'M071' || CIE10_10 = 'M071') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M072($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M072' || CIE10_2 = 'M072' || CIE10_3 = 'M072' || CIE10_4 = 'M072' || CIE10_5 = 'M072' || CIE10_6 = 'M072' || CIE10_7 = 'M072' || CIE10_8 = 'M072' || CIE10_9 = 'M072' || CIE10_10 = 'M072') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M073($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M073' || CIE10_2 = 'M073' || CIE10_3 = 'M073' || CIE10_4 = 'M073' || CIE10_5 = 'M073' || CIE10_6 = 'M073' || CIE10_7 = 'M073' || CIE10_8 = 'M073' || CIE10_9 = 'M073' || CIE10_10 = 'M073') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M074($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M074' || CIE10_2 = 'M074' || CIE10_3 = 'M074' || CIE10_4 = 'M074' || CIE10_5 = 'M074') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M075($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M075' || CIE10_2 = 'M075' || CIE10_3 = 'M075' || CIE10_4 = 'M075' || CIE10_5 = 'M075' || CIE10_6 = 'M075' || CIE10_7 = 'M075' || CIE10_8 = 'M075' || CIE10_9 = 'M075' || CIE10_10 = 'M075') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M076($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M076' || CIE10_2 = 'M076' || CIE10_3 = 'M076' || CIE10_4 = 'M076' || CIE10_5 = 'M076' || CIE10_6 = 'M076' || CIE10_7 = 'M076' || CIE10_8 = 'M076' || CIE10_9 = 'M076' || CIE10_10 = 'M076') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M080($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M080' || CIE10_2 = 'M080' || CIE10_3 = 'M080' || CIE10_4 = 'M080' || CIE10_5 = 'M080' || CIE10_6 = 'M080' || CIE10_7 = 'M080' || CIE10_8 = 'M080' || CIE10_9 = 'M080' || CIE10_10 = 'M080') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M081($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M081' || CIE10_2 = 'M081' || CIE10_3 = 'M081' || CIE10_4 = 'M081' || CIE10_5 = 'M081' || CIE10_6 = 'M081' || CIE10_7 = 'M081' || CIE10_8 = 'M081' || CIE10_9 = 'M081' || CIE10_10 = 'M081') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M082($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M082' || CIE10_2 = 'M082' || CIE10_3 = 'M082' || CIE10_4 = 'M082' || CIE10_5 = 'M082' || CIE10_6 = 'M082' || CIE10_7 = 'M082' || CIE10_8 = 'M082' || CIE10_9 = 'M082' || CIE10_10 = 'M082') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M083($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M083' || CIE10_2 = 'M083' || CIE10_3 = 'M083' || CIE10_4 = 'M083' || CIE10_5 = 'M083' || CIE10_6 = 'M083' || CIE10_7 = 'M083' || CIE10_8 = 'M083' || CIE10_9 = 'M083' || CIE10_10 = 'M083') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M084($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M084' || CIE10_2 = 'M084' || CIE10_3 = 'M084' || CIE10_4 = 'M084' || CIE10_5 = 'M084' || CIE10_6 = 'M084' || CIE10_7 = 'M084' || CIE10_8 = 'M084' || CIE10_9 = 'M084' || CIE10_10 = 'M084') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M088($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M088' || CIE10_2 = 'M088' || CIE10_3 = 'M088' || CIE10_4 = 'M088' || CIE10_5 = 'M088' || CIE10_6 = 'M088' || CIE10_7 = 'M088' || CIE10_8 = 'M088' || CIE10_9 = 'M088' || CIE10_10 = 'M088') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M089($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M089' || CIE10_2 = 'M089' || CIE10_3 = 'M089' || CIE10_4 = 'M089' || CIE10_5 = 'M089' || CIE10_6 = 'M089' || CIE10_7 = 'M089' || CIE10_8 = 'M089' || CIE10_9 = 'M089' || CIE10_10 = 'M089') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M090($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M090' || CIE10_2 = 'M090' || CIE10_3 = 'M090' || CIE10_4 = 'M090' || CIE10_5 = 'M090' || CIE10_6 = 'M090' || CIE10_7 = 'M090' || CIE10_8 = 'M090' || CIE10_9 = 'M090' || CIE10_10 = 'M090') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M091($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M091' || CIE10_2 = 'M091' || CIE10_3 = 'M091' || CIE10_4 = 'M091' || CIE10_5 = 'M091' || CIE10_6 = 'M091' || CIE10_7 = 'M091' || CIE10_8 = 'M091' || CIE10_9 = 'M091' || CIE10_10 = 'M091') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M092($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M092' || CIE10_2 = 'M092' || CIE10_3 = 'M092' || CIE10_4 = 'M092' || CIE10_5 = 'M092' || CIE10_6 = 'M092' || CIE10_7 = 'M092' || CIE10_8 = 'M092' || CIE10_9 = 'M092' || CIE10_10 = 'M092') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M098($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M098' || CIE10_2 = 'M098' || CIE10_3 = 'M098' || CIE10_4 = 'M098' || CIE10_5 = 'M098' || CIE10_6 = 'M098' || CIE10_7 = 'M098' || CIE10_8 = 'M098' || CIE10_9 = 'M098' || CIE10_10 = 'M098') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M100($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M100' || CIE10_2 = 'M100' || CIE10_3 = 'M100' || CIE10_4 = 'M100' || CIE10_5 = 'M100' || CIE10_6 = 'M100' || CIE10_7 = 'M100' || CIE10_8 = 'M100' || CIE10_9 = 'M100' || CIE10_10 = 'M100') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M101($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M101' || CIE10_2 = 'M101' || CIE10_3 = 'M101' || CIE10_4 = 'M101' || CIE10_5 = 'M101' || CIE10_6 = 'M101' || CIE10_7 = 'M101' || CIE10_8 = 'M101' || CIE10_9 = 'M101' || CIE10_10 = 'M101') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M102($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M102' || CIE10_2 = 'M102' || CIE10_3 = 'M102' || CIE10_4 = 'M102' || CIE10_5 = 'M102' || CIE10_6 = 'M102' || CIE10_7 = 'M102' || CIE10_8 = 'M102' || CIE10_9 = 'M102' || CIE10_10 = 'M102') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M103($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M103' || CIE10_2 = 'M103' || CIE10_3 = 'M103' || CIE10_4 = 'M103' || CIE10_5 = 'M103' || CIE10_6 = 'M103' || CIE10_7 = 'M103' || CIE10_8 = 'M103' || CIE10_9 = 'M103' || CIE10_10 = 'M103') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M104($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M104' || CIE10_2 = 'M104' || CIE10_3 = 'M104' || CIE10_4 = 'M104' || CIE10_5 = 'M104' || CIE10_6 = 'M104' || CIE10_7 = 'M104' || CIE10_8 = 'M104' || CIE10_9 = 'M104' || CIE10_10 = 'M104') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M109($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M109' || CIE10_2 = 'M109' || CIE10_3 = 'M109' || CIE10_4 = 'M109' || CIE10_5 = 'M109' || CIE10_1 = 'M109' || CIE10_2 = 'M109' || CIE10_3 = 'M109' || CIE10_4 = 'M109' || CIE10_5 = 'M109') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M110($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M110' || CIE10_2 = 'M110' || CIE10_3 = 'M110' || CIE10_4 = 'M110' || CIE10_5 = 'M110' || CIE10_6 = 'M110' || CIE10_7 = 'M110' || CIE10_8 = 'M110' || CIE10_9 = 'M110' || CIE10_10 = 'M110') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M111($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M111' || CIE10_2 = 'M111' || CIE10_3 = 'M111' || CIE10_4 = 'M111' || CIE10_5 = 'M111') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M112($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M112' || CIE10_2 = 'M112' || CIE10_3 = 'M112' || CIE10_4 = 'M112' || CIE10_5 = 'M112' || CIE10_6 = 'M112' || CIE10_7 = 'M112' || CIE10_8 = 'M112' || CIE10_9 = 'M112' || CIE10_9 = 'M112') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M118($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M118' || CIE10_2 = 'M118' || CIE10_3 = 'M118' || CIE10_4 = 'M118' || CIE10_5 = 'M118' || CIE10_1 = 'M118' || CIE10_2 = 'M118' || CIE10_3 = 'M118' || CIE10_4 = 'M118' || CIE10_5 = 'M118') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M119($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M119' || CIE10_2 = 'M119' || CIE10_3 = 'M119' || CIE10_4 = 'M119' || CIE10_5 = 'M119' || CIE10_6 = 'M119' || CIE10_7 = 'M119' || CIE10_8 = 'M119' || CIE10_9 = 'M119' || CIE10_10 = 'M119') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M120($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M120' || CIE10_2 = 'M120' || CIE10_3 = 'M120' || CIE10_4 = 'M120' || CIE10_5 = 'M120' || CIE10_6 = 'M120' || CIE10_7 = 'M120' || CIE10_8 = 'M120' || CIE10_9 = 'M120' || CIE10_10 = 'M120') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M121($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M121' || CIE10_2 = 'M121' || CIE10_3 = 'M121' || CIE10_4 = 'M121' || CIE10_5 = 'M121' || CIE10_6 = 'M121' || CIE10_7 = 'M121' || CIE10_8 = 'M121' || CIE10_9 = 'M121' || CIE10_10 = 'M121') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M122($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M122' || CIE10_2 = 'M122' || CIE10_3 = 'M122' || CIE10_4 = 'M122' || CIE10_5 = 'M122' || CIE10_6 = 'M122' || CIE10_7 = 'M122' || CIE10_8 = 'M122' || CIE10_9 = 'M122' || CIE10_10 = 'M122') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M123($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M123' || CIE10_2 = 'M123' || CIE10_3 = 'M123' || CIE10_4 = 'M123' || CIE10_5 = 'M123' || CIE10_6 = 'M123' || CIE10_7 = 'M123' || CIE10_8 = 'M123' || CIE10_9 = 'M123' || CIE10_10 = 'M123') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M124($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M124' || CIE10_2 = 'M124' || CIE10_3 = 'M124' || CIE10_4 = 'M124' || CIE10_5 = 'M124' || CIE10_6 = 'M124' || CIE10_7 = 'M124' || CIE10_8 = 'M124' || CIE10_9 = 'M124' || CIE10_10 = 'M124') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M125($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M125' || CIE10_2 = 'M125' || CIE10_3 = 'M125' || CIE10_4 = 'M125' || CIE10_5 = 'M125' || CIE10_6 = 'M125' || CIE10_7 = 'M125' || CIE10_8 = 'M125' || CIE10_9 = 'M125' || CIE10_10 = 'M125') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M128($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M128' || CIE10_2 = 'M128' || CIE10_3 = 'M128' || CIE10_4 = 'M128' || CIE10_5 = 'M128' || CIE10_6 = 'M128' || CIE10_7 = 'M128' || CIE10_8 = 'M128' || CIE10_9 = 'M128' || CIE10_10 = 'M128') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M130($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M130' || CIE10_2 = 'M130' || CIE10_3 = 'M130' || CIE10_4 = 'M130' || CIE10_5 = 'M130' || CIE10_6 = 'M130' || CIE10_7 = 'M130' || CIE10_8 = 'M130' || CIE10_9 = 'M130' || CIE10_10 = 'M130') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M131($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M131' || CIE10_2 = 'M131' || CIE10_3 = 'M131' || CIE10_4 = 'M131' || CIE10_5 = 'M131' || CIE10_6 = 'M131' || CIE10_7 = 'M131' || CIE10_8 = 'M131' || CIE10_9 = 'M131' || CIE10_10 = 'M131') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M138($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M138' || CIE10_2 = 'M138' || CIE10_3 = 'M138' || CIE10_4 = 'M138' || CIE10_5 = 'M138' || CIE10_6 = 'M138' || CIE10_7 = 'M138' || CIE10_8 = 'M138' || CIE10_9 = 'M138' || CIE10_10 = 'M138') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M139($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M139' || CIE10_2 = 'M139' || CIE10_3 = 'M139' || CIE10_4 = 'M139' || CIE10_5 = 'M139' || CIE10_6 = 'M139' || CIE10_7 = 'M139' || CIE10_8 = 'M139' || CIE10_9 = 'M139' || CIE10_10 = 'M139') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M140($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M140' || CIE10_2 = 'M140' || CIE10_3 = 'M140' || CIE10_4 = 'M140' || CIE10_5 = 'M140' || CIE10_6 = 'M140' || CIE10_7 = 'M140' || CIE10_8 = 'M140' || CIE10_9 = 'M140' || CIE10_10 = 'M140') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M141($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M141' || CIE10_2 = 'M141' || CIE10_3 = 'M141' || CIE10_4 = 'M141' || CIE10_5 = 'M141' || CIE10_6 = 'M141' || CIE10_7 = 'M141' || CIE10_8 = 'M141' || CIE10_9 = 'M141' || CIE10_10 = 'M141') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M142($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M142' || CIE10_2 = 'M142' || CIE10_3 = 'M142' || CIE10_4 = 'M142' || CIE10_5 = 'M142' || CIE10_6 = 'M142' || CIE10_7 = 'M142' || CIE10_8 = 'M142' || CIE10_9 = 'M142' || CIE10_10 = 'M142') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M143($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M143' || CIE10_2 = 'M143' || CIE10_3 = 'M143' || CIE10_4 = 'M143' || CIE10_5 = 'M143' || CIE10_6 = 'M143' || CIE10_7 = 'M143' || CIE10_8 = 'M143' || CIE10_9 = 'M143' || CIE10_10 = 'M143') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M144($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M144' || CIE10_2 = 'M144' || CIE10_3 = 'M144' || CIE10_4 = 'M144' || CIE10_5 = 'M144' || CIE10_6 = 'M144' || CIE10_7 = 'M144' || CIE10_8 = 'M144' || CIE10_9 = 'M144' || CIE10_10 = 'M144') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M145($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M145' || CIE10_2 = 'M145' || CIE10_3 = 'M145' || CIE10_4 = 'M145' || CIE10_5 = 'M145' || CIE10_6 = 'M145' || CIE10_7 = 'M145' || CIE10_8 = 'M145' || CIE10_9 = 'M145' || CIE10_10 = 'M145') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M146($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M146' || CIE10_2 = 'M146' || CIE10_3 = 'M146' || CIE10_4 = 'M146' || CIE10_5 = 'M146' || CIE10_6 = 'M146' || CIE10_7 = 'M146' || CIE10_8 = 'M146' || CIE10_9 = 'M146' || CIE10_10 = 'M146') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M148($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M148' || CIE10_2 = 'M148' || CIE10_3 = 'M148' || CIE10_4 = 'M148' || CIE10_5 = 'M148' || CIE10_6 = 'M148' || CIE10_7 = 'M148' || CIE10_8 = 'M148' || CIE10_9 = 'M148' || CIE10_10 = 'M148') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M150($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M150' || CIE10_2 = 'M150' || CIE10_3 = 'M150' || CIE10_4 = 'M150' || CIE10_5 = 'M150' || CIE10_6 = 'M150' || CIE10_7 = 'M150' || CIE10_8 = 'M150' || CIE10_9 = 'M150' || CIE10_10 = 'M150') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M151($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M151' || CIE10_2 = 'M151' || CIE10_3 = 'M151' || CIE10_4 = 'M151' || CIE10_5 = 'M151' || CIE10_6 = 'M151' || CIE10_7 = 'M151' || CIE10_8 = 'M151' || CIE10_9 = 'M151' || CIE10_10 = 'M151') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M152($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M152' || CIE10_2 = 'M152' || CIE10_3 = 'M152' || CIE10_4 = 'M152' || CIE10_5 = 'M152' || CIE10_6 = 'M152' || CIE10_7 = 'M152' || CIE10_8 = 'M152' || CIE10_9 = 'M152' || CIE10_10 = 'M152') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M153($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M153' || CIE10_2 = 'M153' || CIE10_3 = 'M153' || CIE10_4 = 'M153' || CIE10_5 = 'M153' || CIE10_6 = 'M153' || CIE10_7 = 'M153' || CIE10_8 = 'M153' || CIE10_9 = 'M153' || CIE10_10 = 'M153') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M154($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M154' || CIE10_2 = 'M154' || CIE10_3 = 'M154' || CIE10_4 = 'M154' || CIE10_5 = 'M154' || CIE10_6 = 'M154' || CIE10_7= 'M154' || CIE10_8 = 'M154' || CIE10_9 = 'M154' || CIE10_10 = 'M154') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M158($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M158' || CIE10_2 = 'M158' || CIE10_3 = 'M158' || CIE10_4 = 'M158' || CIE10_5 = 'M158' || CIE10_6 = 'M158' || CIE10_7 = 'M158' || CIE10_8 = 'M158' || CIE10_9 = 'M158' || CIE10_10 = 'M158') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M159($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M159' || CIE10_2 = 'M159' || CIE10_3 = 'M159' || CIE10_4 = 'M159' || CIE10_5 = 'M159' || CIE10_6 = 'M159' || CIE10_7 = 'M159' || CIE10_8 = 'M159' || CIE10_9 = 'M159' || CIE10_10 = 'M159') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M160($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M160' || CIE10_2 = 'M160' || CIE10_3 = 'M160' || CIE10_4 = 'M160' || CIE10_5 = 'M160' || CIE10_1 = 'M160' || CIE10_2 = 'M160' || CIE10_3 = 'M160' || CIE10_4 = 'M160' || CIE10_5 = 'M160') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M161($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M161' || CIE10_2 = 'M161' || CIE10_3 = 'M161' || CIE10_4 = 'M161' || CIE10_5 = 'M161' || CIE10_6 = 'M161' || CIE10_7 = 'M161' || CIE10_8 = 'M161' || CIE10_9 = 'M161' || CIE10_10 = 'M161') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M162($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M162' || CIE10_2 = 'M162' || CIE10_3 = 'M162' || CIE10_4 = 'M162' || CIE10_5 = 'M162' || CIE10_6 = 'M162' || CIE10_7 = 'M162' || CIE10_8 = 'M162' || CIE10_9 = 'M162' || CIE10_10 = 'M162') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M163($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M163' || CIE10_2 = 'M163' || CIE10_3 = 'M163' || CIE10_4 = 'M163' || CIE10_5 = 'M163' || CIE10_6 = 'M163' || CIE10_7 = 'M163' || CIE10_8 = 'M163' || CIE10_9 = 'M163' || CIE10_10 = 'M163') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M164($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M164' || CIE10_2 = 'M164' || CIE10_3 = 'M164' || CIE10_4 = 'M164' || CIE10_5 = 'M164' || CIE10_6 = 'M164' || CIE10_7 = 'M164' || CIE10_8 = 'M164' || CIE10_9 = 'M164' || CIE10_10 = 'M164') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M165($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M165' || CIE10_2 = 'M165' || CIE10_3 = 'M165' || CIE10_4 = 'M165' || CIE10_5 = 'M165' || CIE10_6 = 'M165' || CIE10_7 = 'M165' || CIE10_8 = 'M165' || CIE10_9 = 'M165' || CIE10_10 = 'M165') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M166($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M166' || CIE10_2 = 'M166' || CIE10_3 = 'M166' || CIE10_4 = 'M166' || CIE10_5 = 'M166' || CIE10_6 = 'M166' || CIE10_7 = 'M166' || CIE10_8 = 'M166' || CIE10_9 = 'M166' || CIE10_10 = 'M166') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M167($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M167' || CIE10_2 = 'M167' || CIE10_3 = 'M167' || CIE10_4 = 'M167' || CIE10_5 = 'M167' || CIE10_6 = 'M167' || CIE10_7 = 'M167' || CIE10_8 = 'M167' || CIE10_9 = 'M167' || CIE10_10 = 'M167') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M169($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M169' || CIE10_2 = 'M169' || CIE10_3 = 'M169' || CIE10_4 = 'M169' || CIE10_5 = 'M169' || CIE10_1 = 'M169' || CIE10_2 = 'M169' || CIE10_3 = 'M169' || CIE10_4 = 'M169' || CIE10_5 = 'M169') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M170($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M170' || CIE10_2 = 'M170' || CIE10_3 = 'M170' || CIE10_4 = 'M170' || CIE10_5 = 'M170' || CIE10_6 = 'M170' || CIE10_7 = 'M170' || CIE10_8 = 'M170' || CIE10_9 = 'M170' || CIE10_10 = 'M170') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M171($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M171' || CIE10_2 = 'M171' || CIE10_3 = 'M171' || CIE10_4 = 'M171' || CIE10_5 = 'M171' || CIE10_6 = 'M171' || CIE10_7 = 'M171' || CIE10_8 = 'M171' || CIE10_9 = 'M171' || CIE10_10 = 'M171') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M172($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M172' || CIE10_2 = 'M172' || CIE10_3 = 'M172' || CIE10_4 = 'M172' || CIE10_5 = 'M172' || CIE10_6 = 'M172' || CIE10_7 = 'M172' || CIE10_8 = 'M172' || CIE10_9 = 'M172' || CIE10_10 = 'M172') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M173($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M173' || CIE10_2 = 'M173' || CIE10_3 = 'M173' || CIE10_4 = 'M173' || CIE10_5 = 'M173' || CIE10_6 = 'M173' || CIE10_7 = 'M173' || CIE10_8 = 'M173' || CIE10_9 = 'M173' || CIE10_10 = 'M173') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M174($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M174' || CIE10_2 = 'M174' || CIE10_3 = 'M174' || CIE10_4 = 'M174' || CIE10_5 = 'M174' || CIE10_6 = 'M174' || CIE10_7 = 'M174' || CIE10_8 = 'M174' || CIE10_9 = 'M174' || CIE10_10 = 'M174') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M175($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M175' || CIE10_2 = 'M175' || CIE10_3 = 'M175' || CIE10_4 = 'M175' || CIE10_5 = 'M175' || CIE10_6 = 'M175' || CIE10_7 = 'M175' || CIE10_8 = 'M175' || CIE10_9 = 'M175' || CIE10_10 = 'M175') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M179($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M179' || CIE10_2 = 'M179' || CIE10_3 = 'M179' || CIE10_4 = 'M179' || CIE10_5 = 'M179' || CIE10_6 = 'M179' || CIE10_7 = 'M179' || CIE10_8 = 'M179' || CIE10_9 = 'M179' || CIE10_10 = 'M179') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M180($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M180' || CIE10_2 = 'M180' || CIE10_3 = 'M180' || CIE10_4 = 'M180' || CIE10_5 = 'M100' || CIE10_6 = 'M180' || CIE10_7 = 'M180' || CIE10_8 = 'M180' || CIE10_9 = 'M180' || CIE10_10 = 'M100') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M181($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M181' || CIE10_2 = 'M181' || CIE10_3 = 'M181' || CIE10_4 = 'M181' || CIE10_5 = 'M181' || CIE10_6 = 'M181' || CIE10_7 = 'M181' || CIE10_8 = 'M181' || CIE10_9 = 'M181' || CIE10_10 = 'M181') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M182($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M182' || CIE10_2 = 'M182' || CIE10_3 = 'M182' || CIE10_4 = 'M182' || CIE10_5 = 'M182' || CIE10_6 = 'M182' || CIE10_7 = 'M182' || CIE10_8 = 'M182' || CIE10_9 = 'M182' || CIE10_10 = 'M182') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M183($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M183' || CIE10_2 = 'M183' || CIE10_3 = 'M183' || CIE10_4 = 'M183' || CIE10_5 = 'M183' || CIE10_6 = 'M183' || CIE10_7 = 'M183' || CIE10_8 = 'M183' || CIE10_9 = 'M183' || CIE10_10 = 'M183') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M184($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M184' || CIE10_2 = 'M184' || CIE10_3 = 'M184' || CIE10_4 = 'M184' || CIE10_5 = 'M184' || CIE10_6 = 'M184' || CIE10_7 = 'M184' || CIE10_8 = 'M184' || CIE10_9 = 'M184' || CIE10_10 = 'M184') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M185($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M185' || CIE10_2 = 'M185' || CIE10_3 = 'M185' || CIE10_4 = 'M185' || CIE10_5 = 'M185' || CIE10_6 = 'M185' || CIE10_7 = 'M185' || CIE10_8 = 'M185' || CIE10_9 = 'M185' || CIE10_10 = 'M185') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M189($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M189' || CIE10_2 = 'M189' || CIE10_3 = 'M189' || CIE10_4 = 'M189' || CIE10_5 = 'M189' || CIE10_6 = 'M189' || CIE10_7 = 'M189' || CIE10_8 = 'M189' || CIE10_9 = 'M189' || CIE10_10 = 'M189') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M190($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M190' || CIE10_2 = 'M190' || CIE10_3 = 'M190' || CIE10_4 = 'M190' || CIE10_5 = 'M190' || CIE10_6 = 'M190' || CIE10_7 = 'M190' || CIE10_8 = 'M190' || CIE10_9 = 'M190' || CIE10_10 = 'M190') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M191($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M191' || CIE10_2 = 'M191' || CIE10_3 = 'M191' || CIE10_4 = 'M191' || CIE10_5 = 'M191' || CIE10_1 = 'M191' || CIE10_2 = 'M191' || CIE10_3 = 'M191' || CIE10_4 = 'M191' || CIE10_5 = 'M191') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M192($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M192' || CIE10_2 = 'M192' || CIE10_3 = 'M192' || CIE10_4 = 'M192' || CIE10_5 = 'M192' || CIE10_6 = 'M192' || CIE10_7 = 'M192' || CIE10_8 = 'M192' || CIE10_9 = 'M192' || CIE10_10 = 'M192') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M198($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M198' || CIE10_2 = 'M198' || CIE10_3 = 'M198' || CIE10_4 = 'M198' || CIE10_5 = 'M198' || CIE10_6 = 'M198' || CIE10_7 = 'M198' || CIE10_8 = 'M198' || CIE10_9 = 'M198' || CIE10_10 = 'M198') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
        public static function M199($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M199' || CIE10_2 = 'M199' || CIE10_3 = 'M199' || CIE10_4 = 'M199' || CIE10_5 = 'M199' || CIE10_6 = 'M199' || CIE10_7 = 'M199' || CIE10_8 = 'M199' || CIE10_9 = 'M199' || CIE10_10 = 'M199') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M200($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M200' || CIE10_2 = 'M200' || CIE10_3 = 'M200' || CIE10_4 = 'M200' || CIE10_5 = 'M200' || CIE10_6 = 'M200' || CIE10_7 = 'M200' || CIE10_8 = 'M200' || CIE10_9 = 'M200' || CIE10_10 = 'M200') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M201($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M201' || CIE10_2 = 'M201' || CIE10_3 = 'M201' || CIE10_4 = 'M201' || CIE10_5 = 'M201' || CIE10_6 = 'M201' || CIE10_7 = 'M201' || CIE10_8 = 'M201' || CIE10_9 = 'M201' || CIE10_10 = 'M201') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M202($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M202' || CIE10_2 = 'M202' || CIE10_3 = 'M202' || CIE10_4 = 'M202' || CIE10_5 = 'M202' || CIE10_6 = 'M202' || CIE10_7 = 'M202' || CIE10_8 = 'M202' || CIE10_9 = 'M202' || CIE10_10 = 'M202') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M203($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M203' || CIE10_2 = 'M203' || CIE10_3 = 'M203' || CIE10_4 = 'M203' || CIE10_5 = 'M203' || CIE10_6 = 'M203' || CIE10_7 = 'M203' || CIE10_8 = 'M203' || CIE10_9 = 'M203' || CIE10_10 = 'M203') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M204($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M204' || CIE10_2 = 'M204' || CIE10_3 = 'M204' || CIE10_4 = 'M204' || CIE10_5 = 'M204' || CIE10_6 = 'M204' || CIE10_7 = 'M204' || CIE10_8 = 'M204' || CIE10_9 = 'M204' || CIE10_10 = 'M204') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M205($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M205' || CIE10_2 = 'M205' || CIE10_3 = 'M205' || CIE10_4 = 'M205' || CIE10_5 = 'M205' || CIE10_6 = 'M205' || CIE10_7 = 'M205' || CIE10_8 = 'M205' || CIE10_9 = 'M205' || CIE10_10 = 'M205') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M206($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M206' || CIE10_2 = 'M206' || CIE10_3 = 'M206' || CIE10_4 = 'M206' || CIE10_5 = 'M206' || CIE10_6 = 'M206' || CIE10_7 = 'M206' || CIE10_8 = 'M206' || CIE10_9 = 'M206' || CIE10_10 = 'M206') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M210($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M210' || CIE10_2 = 'M210' || CIE10_3 = 'M210' || CIE10_4 = 'M210' || CIE10_5 = 'M210' || CIE10_6 = 'M210' || CIE10_7 = 'M210' || CIE10_8 = 'M210' || CIE10_9 = 'M210' || CIE10_10 = 'M210') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M211($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M211' || CIE10_2 = 'M211' || CIE10_3 = 'M211' || CIE10_4 = 'M211' || CIE10_5 = 'M211' || CIE10_6 = 'M211' || CIE10_7 = 'M211' || CIE10_8 = 'M211' || CIE10_9 = 'M211' || CIE10_10 = 'M211') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M212($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M212' || CIE10_2 = 'M212' || CIE10_3 = 'M212' || CIE10_4 = 'M212' || CIE10_5 = 'M212' || CIE10_6 = 'M212' || CIE10_7 = 'M212' || CIE10_8 = 'M212' || CIE10_9 = 'M212' || CIE10_10 = 'M212') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M213($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M213' || CIE10_2 = 'M213' || CIE10_3 = 'M213' || CIE10_4 = 'M213' || CIE10_5 = 'M213' || CIE10_6 = 'M213' || CIE10_7 = 'M213' || CIE10_8 = 'M213' || CIE10_9 = 'M213' || CIE10_10 = 'M213') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M214($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M214' || CIE10_2 = 'M214' || CIE10_3 = 'M214' || CIE10_4 = 'M214' || CIE10_5 = 'M214' || CIE10_6 = 'M214' || CIE10_7 = 'M214' || CIE10_8 = 'M214' || CIE10_9 = 'M214' || CIE10_10 = 'M214') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M215($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M215' || CIE10_2 = 'M215' || CIE10_3 = 'M215' || CIE10_4 = 'M215' || CIE10_5 = 'M215' || CIE10_6 = 'M215' || CIE10_7 = 'M215' || CIE10_8 = 'M215' || CIE10_9 = 'M215' || CIE10_10 = 'M215') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M216($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M216' || CIE10_2 = 'M216' || CIE10_3 = 'M216' || CIE10_4 = 'M216' || CIE10_5 = 'M216' || CIE10_6 = 'M216' || CIE10_7 = 'M216' || CIE10_8 = 'M216' || CIE10_9 = 'M216' || CIE10_10 = 'M216') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M217($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M217' || CIE10_2 = 'M217' || CIE10_3 = 'M217' || CIE10_4 = 'M217' || CIE10_5 = 'M217' || CIE10_6 = 'M217' || CIE10_7 = 'M217' || CIE10_8 = 'M217' || CIE10_9 = 'M217' || CIE10_10 = 'M217') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M218($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M218' || CIE10_2 = 'M218' || CIE10_3 = 'M218' || CIE10_4 = 'M218' || CIE10_5 = 'M218' || CIE10_6 = 'M218' || CIE10_7 = 'M218' || CIE10_8 = 'M218' || CIE10_9 = 'M218' || CIE10_10 = 'M218') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M219($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M219' || CIE10_2 = 'M219' || CIE10_3 = 'M219' || CIE10_4 = 'M219' || CIE10_5 = 'M219' || CIE10_6 = 'M219' || CIE10_7 = 'M219' || CIE10_8 = 'M219' || CIE10_9 = 'M219' || CIE10_10 = 'M219') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M220($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M220' || CIE10_2 = 'M220' || CIE10_3 = 'M220' || CIE10_4 = 'M220' || CIE10_5 = 'M220' || CIE10_6 = 'M220' || CIE10_7 = 'M220' || CIE10_8 = 'M220' || CIE10_9 = 'M220' || CIE10_10 = 'M220') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M221($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M221' || CIE10_2 = 'M221' || CIE10_3 = 'M221' || CIE10_4 = 'M221' || CIE10_5 = 'M221' || CIE10_6 = 'M221' || CIE10_7 = 'M221' || CIE10_8 = 'M221' || CIE10_9 = 'M221' || CIE10_10 = 'M221') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M222($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M222' || CIE10_2 = 'M222' || CIE10_3 = 'M222' || CIE10_4 = 'M222' || CIE10_5 = 'M222' || CIE10_6 = 'M222' || CIE10_7 = 'M222' || CIE10_8 = 'M222' || CIE10_9 = 'M222' || CIE10_10 = 'M222') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M223($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M223' || CIE10_2 = 'M223' || CIE10_3 = 'M223' || CIE10_4 = 'M223' || CIE10_5 = 'M223' || CIE10_6 = 'M223' || CIE10_7 = 'M223' || CIE10_8 = 'M223' || CIE10_9 = 'M223' || CIE10_10 = 'M223') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M224($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M224' || CIE10_2 = 'M224' || CIE10_3 = 'M224' || CIE10_4 = 'M224' || CIE10_5 = 'M224' || CIE10_6 = 'M224' || CIE10_7 = 'M224' || CIE10_8 = 'M224' || CIE10_9 = 'M224' || CIE10_10 = 'M224') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M228($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M228' || CIE10_2 = 'M228' || CIE10_3 = 'M228' || CIE10_4 = 'M228' || CIE10_5 = 'M228' || CIE10_6 = 'M228' || CIE10_7 = 'M228' || CIE10_8 = 'M228' || CIE10_9 = 'M228' || CIE10_10 = 'M228') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M229($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M229' || CIE10_2 = 'M229' || CIE10_3 = 'M229' || CIE10_4 = 'M229' || CIE10_5 = 'M229' || CIE10_6 = 'M229' || CIE10_7 = 'M229' || CIE10_8 = 'M229' || CIE10_9 = 'M229' || CIE10_10 = 'M229') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M230($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M230' || CIE10_2 = 'M230' || CIE10_3 = 'M230' || CIE10_4 = 'M230' || CIE10_5 = 'M230' || CIE10_6 = 'M230' || CIE10_7 = 'M230' || CIE10_8 = 'M230' || CIE10_9 = 'M230' || CIE10_10 = 'M230') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M231($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M231' || CIE10_2 = 'M231' || CIE10_3 = 'M231' || CIE10_4 = 'M231' || CIE10_5 = 'M231' || CIE10_6 = 'M231' || CIE10_7 = 'M231' || CIE10_8 = 'M231' || CIE10_9 = 'M231' || CIE10_10 = 'M231') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M232($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M232' || CIE10_2 = 'M232' || CIE10_3 = 'M232' || CIE10_4 = 'M232' || CIE10_5 = 'M232' || CIE10_6 = 'M232' || CIE10_7 = 'M232' || CIE10_8 = 'M232' || CIE10_9 = 'M232' || CIE10_10 = 'M232') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M233($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M233' || CIE10_2 = 'M233' || CIE10_3 = 'M233' || CIE10_4 = 'M233' || CIE10_5 = 'M233' || CIE10_6 = 'M233' || CIE10_7 = 'M233' || CIE10_8 = 'M233' || CIE10_9 = 'M233' || CIE10_10 = 'M233') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M234($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M234' || CIE10_2 = 'M234' || CIE10_3 = 'M234' || CIE10_4 = 'M234' || CIE10_5 = 'M234' || CIE10_6 = 'M234' || CIE10_7 = 'M234' || CIE10_8 = 'M234' || CIE10_9 = 'M234' || CIE10_10 = 'M234') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M235($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M235' || CIE10_2 = 'M235' || CIE10_3 = 'M235' || CIE10_4 = 'M235' || CIE10_5 = 'M235' || CIE10_6 = 'M235' || CIE10_7 = 'M235' || CIE10_8 = 'M235' || CIE10_9 = 'M235' || CIE10_10 = 'M235') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M236($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M236' || CIE10_2 = 'M236' || CIE10_3 = 'M236' || CIE10_4 = 'M236' || CIE10_5 = 'M236' || CIE10_6 = 'M236' || CIE10_7 = 'M236' || CIE10_8 = 'M236' || CIE10_9 = 'M236' || CIE10_10 = 'M236') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M238($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M238' || CIE10_2 = 'M238' || CIE10_3 = 'M238' || CIE10_4 = 'M238' || CIE10_5 = 'M238' || CIE10_6 = 'M238' || CIE10_7 = 'M238' || CIE10_8 = 'M238' || CIE10_9 = 'M238' || CIE10_10 = 'M238') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M239($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M239' || CIE10_2 = 'M239' || CIE10_3 = 'M239' || CIE10_4 = 'M239' || CIE10_5 = 'M239' || CIE10_6 = 'M239' || CIE10_7 = 'M239' || CIE10_8 = 'M239' || CIE10_9 = 'M239' || CIE10_10 = 'M239') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M240($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M240' || CIE10_2 = 'M240' || CIE10_3 = 'M240' || CIE10_4 = 'M240' || CIE10_5 = 'M240' || CIE10_6 = 'M240' || CIE10_7 = 'M240' || CIE10_8 = 'M240' || CIE10_9 = 'M240' || CIE10_10 = 'M240') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M241($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M241' || CIE10_2 = 'M241' || CIE10_3 = 'M241' || CIE10_4 = 'M241' || CIE10_5 = 'M241' || CIE10_6 = 'M241' || CIE10_7 = 'M241' || CIE10_8 = 'M241' || CIE10_9 = 'M241' || CIE10_10 = 'M241') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M242($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M242' || CIE10_2 = 'M242' || CIE10_3 = 'M242' || CIE10_4 = 'M242' || CIE10_5 = 'M242' || CIE10_6 = 'M242' || CIE10_7 = 'M242' || CIE10_8 = 'M242' || CIE10_9 = 'M242' || CIE10_10 = 'M242') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M243($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M243' || CIE10_2 = 'M243' || CIE10_3 = 'M243' || CIE10_4 = 'M243' || CIE10_5 = 'M243' || CIE10_6 = 'M243' || CIE10_7 = 'M243' || CIE10_8 = 'M243' || CIE10_9 = 'M243' || CIE10_10 = 'M243') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M244($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M244' || CIE10_2 = 'M244' || CIE10_3 = 'M244' || CIE10_4 = 'M244' || CIE10_5 = 'M244' || CIE10_6 = 'M244' || CIE10_7 = 'M244' || CIE10_8 = 'M244' || CIE10_9 = 'M244' || CIE10_10 = 'M244') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M245($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M245' || CIE10_2 = 'M245' || CIE10_3 = 'M245' || CIE10_4 = 'M245' || CIE10_5 = 'M245' || CIE10_6 = 'M245' || CIE10_7 = 'M245' || CIE10_8 = 'M245' || CIE10_9 = 'M245' || CIE10_10 = 'M245') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M246($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M246' || CIE10_2 = 'M246' || CIE10_3 = 'M246' || CIE10_4 = 'M246' || CIE10_5 = 'M246' || CIE10_6 = 'M246' || CIE10_7 = 'M246' || CIE10_8 = 'M246' || CIE10_9 = 'M246' || CIE10_10 = 'M246') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M247($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M247' || CIE10_2 = 'M247' || CIE10_3 = 'M247' || CIE10_4 = 'M247' || CIE10_5 = 'M247' || CIE10_6 = 'M247' || CIE10_7 = 'M247' || CIE10_8 = 'M247' || CIE10_9 = 'M247' || CIE10_10 = 'M247') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M248($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M248' || CIE10_2 = 'M248' || CIE10_3 = 'M248' || CIE10_4 = 'M248' || CIE10_5 = 'M248' || CIE10_6 = 'M248' || CIE10_7 = 'M248' || CIE10_8 = 'M248' || CIE10_9 = 'M248' || CIE10_10 = 'M248') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M249($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M249' || CIE10_2 = 'M249' || CIE10_3 = 'M249' || CIE10_4 = 'M249' || CIE10_5 = 'M249' || CIE10_6 = 'M249' || CIE10_7 = 'M249' || CIE10_8 = 'M249' || CIE10_9 = 'M249' || CIE10_10 = 'M249') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M250($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M250' || CIE10_2 = 'M250' || CIE10_3 = 'M250' || CIE10_4 = 'M250' || CIE10_5 = 'M250' || CIE10_6 = 'M250' || CIE10_7 = 'M250' || CIE10_8 = 'M250' || CIE10_9 = 'M250' || CIE10_10 = 'M250') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M251($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M251' || CIE10_2 = 'M251' || CIE10_3 = 'M251' || CIE10_4 = 'M251' || CIE10_5 = 'M251' || CIE10_6 = 'M251' || CIE10_7 = 'M251' || CIE10_8 = 'M251' || CIE10_9 = 'M251' || CIE10_10 = 'M251') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M252($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M252' || CIE10_2 = 'M252' || CIE10_3 = 'M252' || CIE10_4 = 'M252' || CIE10_5 = 'M252' || CIE10_6 = 'M252' || CIE10_7 = 'M252' || CIE10_8 = 'M252' || CIE10_9 = 'M252' || CIE10_10 = 'M252') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M253($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M253' || CIE10_2 = 'M253' || CIE10_3 = 'M253' || CIE10_4 = 'M253' || CIE10_5 = 'M253' || CIE10_6 = 'M253' || CIE10_7 = 'M253' || CIE10_8 = 'M253' || CIE10_9 = 'M253' || CIE10_10 = 'M253') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M254($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M254' || CIE10_2 = 'M254' || CIE10_3 = 'M254' || CIE10_4 = 'M254' || CIE10_5 = 'M254' || CIE10_6 = 'M254' || CIE10_7 = 'M254' || CIE10_8 = 'M254' || CIE10_9 = 'M254' || CIE10_10 = 'M254') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M255($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M255' || CIE10_2 = 'M255' || CIE10_3 = 'M255' || CIE10_4 = 'M255' || CIE10_5 = 'M255' || CIE10_6 = 'M255' || CIE10_7 = 'M255' || CIE10_8 = 'M255' || CIE10_9 = 'M255' || CIE10_10 = 'M255') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M256($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M256' || CIE10_2 = 'M256' || CIE10_3 = 'M256' || CIE10_4 = 'M256' || CIE10_5 = 'M256' || CIE10_6 = 'M256' || CIE10_7 = 'M256' || CIE10_8 = 'M256' || CIE10_9 = 'M256' || CIE10_10 = 'M256') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M257($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M257' || CIE10_2 = 'M257' || CIE10_3 = '257' || CIE10_4 = 'M257' || CIE10_5 = 'M257' || CIE10_6 = 'M257' || CIE10_7 = 'M257' || CIE10_8 = '257' || CIE10_9 = 'M257' || CIE10_10 = 'M257') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M258($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M258' || CIE10_2 = 'M258' || CIE10_3 = 'M258' || CIE10_4 = 'M258' || CIE10_5 = 'M258' || CIE10_6 = 'M258' || CIE10_7 = 'M258' || CIE10_8 = 'M258' || CIE10_9 = 'M258' || CIE10_10 = 'M258') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M259($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M259' || CIE10_2 = 'M259' || CIE10_3 = 'M259' || CIE10_4 = 'M259' || CIE10_5 = 'M259' || CIE10_6 = 'M259' || CIE10_7 = 'M259' || CIE10_8 = 'M259' || CIE10_9 = 'M259' || CIE10_10 = 'M259') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M300($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M300' || CIE10_2 = 'M300' || CIE10_3 = 'M300' || CIE10_4 = 'M300' || CIE10_5 = 'M300' || CIE10_6 = 'M300' || CIE10_7 = 'M300' || CIE10_8 = 'M300' || CIE10_9 = 'M300' || CIE10_10 = 'M300') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M301($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M301' || CIE10_2 = 'M301' || CIE10_3 = 'M301' || CIE10_4 = 'M301' || CIE10_5 = 'M301' || CIE10_6 = 'M301' || CIE10_7 = 'M301' || CIE10_8 = 'M301' || CIE10_9 = 'M301' || CIE10_10 = 'M301') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M302($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M302' || CIE10_2 = 'M302' || CIE10_3 = 'M302' || CIE10_4 = 'M302' || CIE10_5 = 'M302' || CIE10_6 = 'M302' || CIE10_7 = 'M302' || CIE10_8 = 'M302' || CIE10_9 = 'M302' || CIE10_10 = 'M302') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M303($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M303' || CIE10_2 = 'M303' || CIE10_3 = 'M303' || CIE10_4 = 'M303' || CIE10_5 = 'M303' || CIE10_6 = 'M303' || CIE10_7 = 'M303' || CIE10_8 = 'M303' || CIE10_9 = 'M303' || CIE10_10 = 'M303') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M308($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M308' || CIE10_2 = 'M308' || CIE10_3 = 'M308' || CIE10_4 = 'M308' || CIE10_5 = 'M308' || CIE10_6 = 'M308' || CIE10_7 = 'M308' || CIE10_8 = 'M308' || CIE10_9 = 'M308' || CIE10_10 = 'M308') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M310($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M310' || CIE10_2 = 'M310' || CIE10_3 = 'M310' || CIE10_4 = 'M310' || CIE10_5 = 'M310' || CIE10_6 = 'M310' || CIE10_7 = 'M310' || CIE10_8 = 'M310' || CIE10_9 = 'M310' || CIE10_10 = 'M310') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M311($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M311' || CIE10_2 = 'M311' || CIE10_3 = 'M311' || CIE10_4 = 'M311' || CIE10_5 = 'M311' || CIE10_6 = 'M311' || CIE10_7 = 'M311' || CIE10_8 = 'M311' || CIE10_9 = 'M311' || CIE10_10 = 'M311') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M312($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M312' || CIE10_2 = 'M312' || CIE10_3 = 'M312' || CIE10_4 = 'M312' || CIE10_5 = 'M312' || CIE10_6 = 'M312' || CIE10_7 = 'M312' || CIE10_8 = 'M312' || CIE10_9 = 'M312' || CIE10_10 = 'M312') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M313($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M313' || CIE10_2 = 'M313' || CIE10_3 = 'M313' || CIE10_4 = 'M313' || CIE10_5 = 'M313' || CIE10_6 = 'M313' || CIE10_7 = 'M313' || CIE10_8 = 'M313' || CIE10_9 = 'M313' || CIE10_10 = 'M313') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M314($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M314' || CIE10_2 = 'M314' || CIE10_3 = 'M314' || CIE10_4 = 'M314' || CIE10_5 = 'M314' || CIE10_6 = 'M314' || CIE10_7 = 'M314' || CIE10_8 = 'M314' || CIE10_9 = 'M314' || CIE10_10 = 'M314') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M315($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M315' || CIE10_2 = 'M315' || CIE10_3 = 'M315' || CIE10_4 = 'M315' || CIE10_5 = 'M315' || CIE10_6 = 'M315' || CIE10_7 = 'M315' || CIE10_8 = 'M315' || CIE10_9 = 'M315' || CIE10_10 = 'M315') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M316($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M316' || CIE10_2 = 'M316' || CIE10_3 = 'M316' || CIE10_4 = 'M316' || CIE10_5 = 'M316' || CIE10_6 = 'M316' || CIE10_7 = 'M316' || CIE10_8 = 'M316' || CIE10_9 = 'M316' || CIE10_10 = 'M316') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M317($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M317' || CIE10_2 = 'M317' || CIE10_3 = 'M317' || CIE10_4 = 'M317' || CIE10_5 = 'M317' || CIE10_6 = 'M317' || CIE10_7 = 'M317' || CIE10_8 = 'M317' || CIE10_9 = 'M317' || CIE10_10 = 'M317' ) &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M318($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M318' || CIE10_2 = 'M318' || CIE10_3 = 'M318' || CIE10_4 = 'M318' || CIE10_5 = 'M318' || CIE10_6 = 'M318' || CIE10_7 = 'M318' || CIE10_8 = 'M318' || CIE10_9 = 'M318' || CIE10_10 = 'M318') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M319($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M319' || CIE10_2 = 'M319' || CIE10_3 = 'M319' || CIE10_4 = 'M319' || CIE10_5 = 'M319' || CIE10_6 = 'M319' || CIE10_7 = 'M319' || CIE10_8 = 'M319' || CIE10_9 = 'M319' || CIE10_10 = 'M319') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M320($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M320' || CIE10_2 = 'M320' || CIE10_3 = 'M320' || CIE10_4 = 'M320' || CIE10_5 = 'M320' || CIE10_6 = 'M320' || CIE10_7 = 'M320' || CIE10_8 = 'M320' || CIE10_9 = 'M320' || CIE10_10 = 'M320') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M321($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M321' || CIE10_2 = 'M321' || CIE10_3 = 'M321' || CIE10_4 = 'M321' || CIE10_5 = 'M321' || CIE10_6 = 'M321' || CIE10_7 = 'M321' || CIE10_8 = 'M321' || CIE10_9 = 'M321' || CIE10_10 = 'M321') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M328($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M328' || CIE10_2 = 'M328' || CIE10_3 = 'M328' || CIE10_4 = 'M328' || CIE10_5 = 'M328' || CIE10_6 = 'M328' || CIE10_7 = 'M328' || CIE10_8 = 'M328' || CIE10_9 = 'M328' || CIE10_10 = 'M328') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M329($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M329' || CIE10_2 = 'M329' || CIE10_3 = 'M329' || CIE10_4 = 'M329' || CIE10_5 = 'M329' || CIE10_6 = 'M329' || CIE10_7 = 'M329' || CIE10_8 = 'M329' || CIE10_9 = 'M329' || CIE10_10 = 'M329') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M330($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M330' || CIE10_2 = 'M330' || CIE10_3 = 'M330' || CIE10_4 = 'M330' || CIE10_5 = 'M330' || CIE10_6 = 'M330' || CIE10_7 = 'M330' || CIE10_8 = 'M330' || CIE10_9 = 'M330' || CIE10_10 = 'M330') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M331($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M331' || CIE10_2 = 'M331' || CIE10_3 = 'M331' || CIE10_4 = 'M331' || CIE10_5 = 'M331' || CIE10_6 = 'M331' || CIE10_7 = 'M331' || CIE10_8 = 'M331' || CIE10_9 = 'M331' || CIE10_10 = 'M331') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M332($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M332' || CIE10_2 = 'M332' || CIE10_3 = 'M332' || CIE10_4 = 'M332' || CIE10_5 = 'M332' || CIE10_6 = 'M332' || CIE10_7 = 'M332' || CIE10_8 = 'M332' || CIE10_9 = 'M332' || CIE10_10 = 'M332') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M339($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M339' || CIE10_2 = 'M339' || CIE10_3 = 'M339' || CIE10_4 = 'M339' || CIE10_5 = 'M339' || CIE10_6 = 'M339' || CIE10_7 = 'M339' || CIE10_8 = 'M339' || CIE10_9 = 'M339' || CIE10_10 = 'M339') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M340($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M340' || CIE10_2 = 'M340' || CIE10_3 = 'M340' || CIE10_4 = 'M340' || CIE10_5 = 'M340' || CIE10_6 = 'M340' || CIE10_7 = 'M340' || CIE10_8 = 'M340' || CIE10_9 = 'M340' || CIE10_10 = 'M340') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M341($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M341' || CIE10_2 = 'M341' || CIE10_3 = 'M341' || CIE10_4 = 'M341' || CIE10_5 = 'M341' || CIE10_6 = 'M341' || CIE10_7 = 'M341' || CIE10_8 = 'M341' || CIE10_9 = 'M341' || CIE10_10 = 'M341') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M342($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M342' || CIE10_2 = 'M342' || CIE10_3 = 'M342' || CIE10_4 = 'M342' || CIE10_5 = 'M342' || CIE10_6 = 'M342' || CIE10_7 = 'M342' || CIE10_8 = 'M342' || CIE10_9 = 'M342' || CIE10_10 = 'M342') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M348($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M348' || CIE10_2 = 'M348' || CIE10_3 = 'M348' || CIE10_4 = 'M348' || CIE10_5 = 'M348' || CIE10_6 = 'M348' || CIE10_7 = 'M348' || CIE10_8 = 'M348' || CIE10_9 = 'M348' || CIE10_10 = 'M348' ) &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M349($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M349' || CIE10_2 = 'M349' || CIE10_3 = 'M349' || CIE10_4 = 'M349' || CIE10_5 = 'M349' || CIE10_6 = 'M349' || CIE10_7 = 'M349' || CIE10_8 = 'M349' || CIE10_9 = 'M349' || CIE10_10 = 'M349') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M350($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M350' || CIE10_2 = 'M350' || CIE10_3 = 'M350' || CIE10_4 = 'M350' || CIE10_5 = 'M350' || CIE10_6 = 'M350' || CIE10_7 = 'M350' || CIE10_8 = 'M350' || CIE10_9 = 'M350' || CIE10_10 = 'M350') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M351($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M351' || CIE10_2 = 'M351' || CIE10_3 = 'M351' || CIE10_4 = 'M351' || CIE10_5 = 'M351' || CIE10_6 = 'M351' || CIE10_7 = 'M351' || CIE10_8 = 'M351' || CIE10_9 = 'M351' || CIE10_10 = 'M351') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M352($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M352' || CIE10_2 = 'M352' || CIE10_3 = 'M352' || CIE10_4 = 'M352' || CIE10_5 = 'M352' || CIE10_6 = 'M352' || CIE10_7 = 'M352' || CIE10_8 = 'M352' || CIE10_9 = 'M352' || CIE10_10 = 'M352') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M353($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M353' || CIE10_2 = 'M353' || CIE10_3 = 'M353' || CIE10_4 = 'M353' || CIE10_5 = 'M353' || CIE10_6 = 'M353' || CIE10_7 = 'M353' || CIE10_8 = 'M353' || CIE10_9 = 'M353' || CIE10_10 = 'M353') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M354($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M354' || CIE10_2 = 'M354' || CIE10_3 = 'M354' || CIE10_4 = 'M354' || CIE10_5 = 'M354' || CIE10_6 = 'M354' || CIE10_7 = 'M354' || CIE10_8 = 'M354' || CIE10_9 = 'M354' || CIE10_10 = 'M354') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M355($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M355' || CIE10_2 = 'M355' || CIE10_3 = 'M355' || CIE10_4 = 'M355' || CIE10_5 = 'M355' || CIE10_6 = 'M355' || CIE10_7 = 'M355' || CIE10_8 = 'M355' || CIE10_9 = 'M355' || CIE10_10 = 'M355') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M356($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M356' || CIE10_2 = 'M356' || CIE10_3 = 'M356' || CIE10_4 = 'M356' || CIE10_5 = 'M356' || CIE10_6 = 'M356' || CIE10_7 = 'M356' || CIE10_8 = 'M356' || CIE10_9 = 'M356' || CIE10_10 = 'M356') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M357($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M357' || CIE10_2 = 'M357' || CIE10_3 = 'M357' || CIE10_4 = 'M357' || CIE10_5 = 'M357' || CIE10_6 = 'M357' || CIE10_7 = 'M357' || CIE10_8 = 'M357' || CIE10_9 = 'M357' || CIE10_10 = 'M357') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M358($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M358' || CIE10_2 = 'M358' || CIE10_3 = 'M358' || CIE10_4 = 'M358' || CIE10_5 = 'M358' || CIE10_6 = 'M358' || CIE10_7 = 'M358' || CIE10_8 = 'M358' || CIE10_9 = 'M358' || CIE10_10 = 'M358') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M359($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M359' || CIE10_2 = 'M359' || CIE10_3 = 'M359' || CIE10_4 = 'M359' || CIE10_5 = 'M359' || CIE10_6 = 'M359' || CIE10_7 = 'M359' || CIE10_8 = 'M359' || CIE10_9 = 'M359' || CIE10_10 = 'M359') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M360($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M360' || CIE10_2 = 'M360' || CIE10_3 = 'M360' || CIE10_4 = 'M360' || CIE10_5 = 'M360' || CIE10_6 = 'M360' || CIE10_7 = 'M360' || CIE10_8 = 'M360' || CIE10_9 = 'M360' || CIE10_10 = 'M360') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M361($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M361' || CIE10_2 = 'M361' || CIE10_3 = 'M361' || CIE10_4 = 'M361' || CIE10_5 = 'M361' || CIE10_6 = 'M361' || CIE10_7 = 'M361' || CIE10_8 = 'M361' || CIE10_9 = 'M361' || CIE10_10 = 'M361') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M362($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M362' || CIE10_2 = 'M362' || CIE10_3 = 'M362' || CIE10_4 = 'M362' || CIE10_5 = 'M362' || CIE10_6 = 'M362' || CIE10_7 = 'M362' || CIE10_8 = 'M362' || CIE10_9 = 'M362' || CIE10_10 = 'M362') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M363($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M363' || CIE10_2 = 'M363' || CIE10_3 = 'M363' || CIE10_4 = 'M363' || CIE10_5 = 'M363' || CIE10_6 = 'M363' || CIE10_7 = 'M363' || CIE10_8 = 'M363' || CIE10_9 = 'M363' || CIE10_10 = 'M363') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M364($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M364' || CIE10_2 = 'M364' || CIE10_3 = 'M364' || CIE10_4 = 'M364' || CIE10_5 = 'M364' || CIE10_6 = 'M364' || CIE10_7 = 'M364' || CIE10_8 = 'M364' || CIE10_9 = 'M364' || CIE10_10 = 'M364') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M368($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M368' || CIE10_2 = 'M368' || CIE10_3 = 'M368' || CIE10_4 = 'M368' || CIE10_5 = 'M368' || CIE10_6 = 'M368' || CIE10_7 = 'M368' || CIE10_8 = 'M368' || CIE10_9 = 'M368' || CIE10_10 = 'M368') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M400($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M400' || CIE10_2 = 'M400' || CIE10_3 = 'M400' || CIE10_4 = 'M400' || CIE10_5 = 'M400' || CIE10_6 = 'M400' || CIE10_7 = 'M400' || CIE10_8 = 'M400' || CIE10_9 = 'M400' || CIE10_10 = 'M400') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M401($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M401' || CIE10_2 = 'M401' || CIE10_3 = 'M401' || CIE10_4 = 'M401' || CIE10_5 = 'M401' || CIE10_6 = 'M401' || CIE10_7 = 'M401' || CIE10_8 = 'M401' || CIE10_9 = 'M401' || CIE10_10 = 'M401') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M402($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M402' || CIE10_2 = 'M402' || CIE10_3 = 'M402' || CIE10_4 = 'M402' || CIE10_5 = 'M402' || CIE10_6 = 'M402' || CIE10_7 = 'M402' || CIE10_8 = 'M402' || CIE10_9 = 'M402' || CIE10_10 = 'M402') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M403($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M403' || CIE10_2 = 'M403' || CIE10_3 = 'M403' || CIE10_4 = 'M403' || CIE10_5 = 'M403' || CIE10_6 = 'M403' || CIE10_7 = 'M403' || CIE10_8 = 'M403' || CIE10_9 = 'M403' || CIE10_10 = 'M403') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M404($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M404' || CIE10_2 = 'M404' || CIE10_3 = 'M404' || CIE10_4 = 'M404' || CIE10_5 = 'M404' || CIE10_6 = 'M404' || CIE10_7 = 'M404' || CIE10_8 = 'M404' || CIE10_9 = 'M404' || CIE10_10 = 'M404') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M405($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M405' || CIE10_2 = 'M405' || CIE10_3 = 'M405' || CIE10_4 = 'M405' || CIE10_5 = 'M405' || CIE10_6 = 'M405' || CIE10_7 = 'M405' || CIE10_8 = 'M405' || CIE10_9 = 'M405' || CIE10_10 = 'M405') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M410($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M410' || CIE10_2 = 'M410' || CIE10_3 = 'M410' || CIE10_4 = 'M410' || CIE10_5 = 'M410' || CIE10_6 = 'M410' || CIE10_7 = 'M410' || CIE10_8 = 'M410' || CIE10_9 = 'M410' || CIE10_10 = 'M410') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M411($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M411' || CIE10_2 = 'M411' || CIE10_3 = 'M411' || CIE10_4 = 'M411' || CIE10_5 = 'M411' || CIE10_6 = 'M411' || CIE10_7 = 'M411' || CIE10_8 = 'M411' || CIE10_9 = 'M411' || CIE10_10 = 'M411') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M412($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M412' || CIE10_2 = 'M412' || CIE10_3 = 'M412' || CIE10_4 = 'M412' || CIE10_5 = 'M412' || CIE10_6 = 'M412' || CIE10_7 = 'M412' || CIE10_8 = 'M412' || CIE10_9 = 'M412' || CIE10_10 = 'M412') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M413($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M413' || CIE10_2 = 'M413' || CIE10_3 = 'M413' || CIE10_4 = 'M413' || CIE10_5 = 'M413' || CIE10_6 = 'M413' || CIE10_7 = 'M413' || CIE10_8 = 'M413' || CIE10_9 = 'M413' || CIE10_10 = 'M413') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M414($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M414' || CIE10_2 = 'M414' || CIE10_3 = 'M414' || CIE10_4 = 'M414' || CIE10_5 = 'M414' || CIE10_6 = 'M414' || CIE10_7 = 'M414' || CIE10_8 = 'M414' || CIE10_9 = 'M414' || CIE10_10 = 'M414') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M415($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M415' || CIE10_2 = 'M415' || CIE10_3 = 'M415' || CIE10_4 = 'M415' || CIE10_5 = 'M415' || CIE10_6 = 'M415' || CIE10_7 = 'M415' || CIE10_8 = 'M415' || CIE10_9 = 'M415' || CIE10_10 = 'M415') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M418($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M418' || CIE10_2 = 'M418' || CIE10_3 = 'M418' || CIE10_4 = 'M418' || CIE10_5 = 'M418' || CIE10_6 = 'M418' || CIE10_7 = 'M418' || CIE10_8 = 'M418' || CIE10_9 = 'M418' || CIE10_10 = 'M418') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M419($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M419' || CIE10_2 = 'M419' || CIE10_3 = 'M419' || CIE10_4 = 'M419' || CIE10_5 = 'M419' || CIE10_6 = 'M419' || CIE10_7 = 'M419' || CIE10_8 = 'M419' || CIE10_9 = 'M419' || CIE10_10 = 'M419') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M420($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M420' || CIE10_2 = 'M420' || CIE10_3 = 'M420' || CIE10_4 = 'M420' || CIE10_5 = 'M420' || CIE10_6 = 'M420' || CIE10_7 = 'M420' || CIE10_8 = 'M420' || CIE10_9 = 'M420' || CIE10_10 = 'M420') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M421($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M421' || CIE10_2 = 'M421' || CIE10_3 = 'M421' || CIE10_4 = 'M421' || CIE10_5 = 'M421' || CIE10_6 = 'M421' || CIE10_7 = 'M421' || CIE10_8 = 'M421' || CIE10_9 = 'M421' || CIE10_10 = 'M421') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M429($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M429' || CIE10_2 = 'M429' || CIE10_3 = 'M429' || CIE10_4 = 'M429' || CIE10_5 = 'M429' || CIE10_6 = 'M429' || CIE10_7 = 'M429' || CIE10_8 = 'M429' || CIE10_9 = 'M429' || CIE10_10 = 'M429') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M430($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M430' || CIE10_2 = 'M430' || CIE10_3 = 'M430' || CIE10_4 = 'M430' || CIE10_5 = 'M430' || CIE10_6 = 'M430' || CIE10_7 = 'M430' || CIE10_8 = 'M430' || CIE10_9 = 'M430' || CIE10_10 = 'M430') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M431($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M431' || CIE10_2 = 'M431' || CIE10_3 = 'M431' || CIE10_4 = 'M431' || CIE10_5 = 'M431' || CIE10_6 = 'M431' || CIE10_7 = 'M431' || CIE10_8 = 'M431' || CIE10_9 = 'M431' || CIE10_10 = 'M431') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M432($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M432' || CIE10_2 = 'M432' || CIE10_3 = 'M432' || CIE10_4 = 'M432' || CIE10_5 = 'M432' || CIE10_6 = 'M432' || CIE10_7 = 'M432' || CIE10_8 = 'M432' || CIE10_9 = 'M432' || CIE10_10 = 'M432') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M433($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M433' || CIE10_2 = 'M433' || CIE10_3 = 'M433' || CIE10_4 = 'M433' || CIE10_5 = 'M433' || CIE10_6 = 'M433' || CIE10_7 = 'M433' || CIE10_8 = 'M433' || CIE10_9 = 'M433' || CIE10_10 = 'M433') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M434($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M434' || CIE10_2 = 'M434' || CIE10_3 = 'M434' || CIE10_4 = 'M434' || CIE10_5 = 'M434' || CIE10_6 = 'M434' || CIE10_7 = 'M434' || CIE10_8 = 'M434' || CIE10_9 = 'M434' || CIE10_10 = 'M434') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M435($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M435' || CIE10_2 = 'M435' || CIE10_3 = 'M435' || CIE10_4 = 'M435' || CIE10_5 = 'M435' || CIE10_6 = 'M435' || CIE10_7 = 'M435' || CIE10_8 = 'M435' || CIE10_9 = 'M435' || CIE10_10 = 'M435') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M436($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M436' || CIE10_2 = 'M436' || CIE10_3 = 'M436' || CIE10_4 = 'M436' || CIE10_5 = 'M436' || CIE10_6 = 'M436' || CIE10_7 = 'M436' || CIE10_8 = 'M436' || CIE10_9 = 'M436' || CIE10_10 = 'M436') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M438($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M438' || CIE10_2 = 'M438' || CIE10_3 = 'M438' || CIE10_4 = 'M438' || CIE10_5 = 'M438' || CIE10_6 = 'M438' || CIE10_7 = 'M438' || CIE10_8 = 'M438' || CIE10_9 = 'M438' || CIE10_10 = 'M438') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M439($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M439' || CIE10_2 = 'M439' || CIE10_3 = 'M439' || CIE10_4 = 'M439' || CIE10_5 = 'M439' || CIE10_6 = 'M439' || CIE10_7 = 'M439' || CIE10_8 = 'M439' || CIE10_9 = 'M439' || CIE10_10 = 'M439') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M45X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M45X' || CIE10_2 = 'M45X' || CIE10_3 = 'M45X' || CIE10_4 = 'M45X' || CIE10_5 = 'M45X' || CIE10_6 = 'M45X' || CIE10_7 = 'M45X' || CIE10_8 = 'M45X' || CIE10_9 = 'M45X' || CIE10_10 = 'M45X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M460($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M460' || CIE10_2 = 'M460' || CIE10_3 = 'M460' || CIE10_4 = 'M460' || CIE10_5 = 'M460' || CIE10_6 = 'M460' || CIE10_7 = 'M460' || CIE10_8 = 'M460' || CIE10_9 = 'M460' || CIE10_10 = 'M460') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M461($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M461' || CIE10_2 = 'M461' || CIE10_3 = 'M461' || CIE10_4 = 'M461' || CIE10_5 = 'M461' || CIE10_6 = 'M461' || CIE10_7 = 'M461' || CIE10_8 = 'M461' || CIE10_9 = 'M461' || CIE10_10 = 'M461') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M462($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M462' || CIE10_2 = 'M462' || CIE10_3 = 'M462' || CIE10_4 = 'M462' || CIE10_5 = 'M462' || CIE10_6 = 'M462' || CIE10_7 = 'M462' || CIE10_8 = 'M462' || CIE10_9 = 'M462' || CIE10_10 = 'M462') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M463($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M463' || CIE10_2 = 'M463' || CIE10_3 = 'M463' || CIE10_4 = 'M463' || CIE10_5 = 'M463' || CIE10_6 = 'M463' || CIE10_7 = 'M463' || CIE10_8 = 'M463' || CIE10_9 = 'M463' || CIE10_10 = 'M463') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M464($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M464' || CIE10_2 = 'M464' || CIE10_3 = 'M464' || CIE10_4 = 'M464' || CIE10_5 = 'M464' || CIE10_6 = 'M464' || CIE10_7 = 'M464' || CIE10_8 = 'M464' || CIE10_9 = 'M464' || CIE10_10 = 'M464') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M465($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M465' || CIE10_2 = 'M465' || CIE10_3 = 'M465' || CIE10_4 = 'M465' || CIE10_5 = 'M465' || CIE10_6 = 'M465' || CIE10_7 = 'M465' || CIE10_8 = 'M465' || CIE10_9 = 'M465' || CIE10_10 = 'M465') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M468($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M468' || CIE10_2 = 'M468' || CIE10_3 = 'M468' || CIE10_4 = 'M468' || CIE10_5 = 'M468' || CIE10_6 = 'M468' || CIE10_7 = 'M468' || CIE10_8 = 'M468' || CIE10_9 = 'M468' || CIE10_10 = 'M468') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M469($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M469' || CIE10_2 = 'M469' || CIE10_3 = 'M469' || CIE10_4 = 'M469' || CIE10_5 = 'M469' || CIE10_6 = 'M469' || CIE10_7 = 'M469' || CIE10_8 = 'M469' || CIE10_9 = 'M469' || CIE10_10 = 'M469') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M470($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M470' || CIE10_2 = 'M470' || CIE10_3 = 'M470' || CIE10_4 = 'M470' || CIE10_5 = 'M470' || CIE10_6 = 'M470' || CIE10_7 = 'M470' || CIE10_8 = 'M470' || CIE10_9 = 'M470' || CIE10_10 = 'M470') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M471($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M471' || CIE10_2 = 'M471' || CIE10_3 = 'M471' || CIE10_4 = 'M471' || CIE10_5 = 'M471' || CIE10_6 = 'M471' || CIE10_7 = 'M471' || CIE10_8 = 'M471' || CIE10_9 = 'M471' || CIE10_10 = 'M471') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M472($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M472' || CIE10_2 = 'M472' || CIE10_3 = 'M472' || CIE10_4 = 'M472' || CIE10_5 = 'M472' || CIE10_6 = 'M472' || CIE10_7 = 'M472' || CIE10_8 = 'M472' || CIE10_9 = 'M472' || CIE10_10 = 'M472') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M478($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M478' || CIE10_2 = 'M478' || CIE10_3 = 'M478' || CIE10_4 = 'M478' || CIE10_5 = 'M478' || CIE10_6 = 'M478' || CIE10_7 = 'M478' || CIE10_8 = 'M478' || CIE10_9 = 'M478' || CIE10_10 = 'M478') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M479($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M479' || CIE10_2 = 'M479' || CIE10_3 = 'M479' || CIE10_4 = 'M479' || CIE10_5 = 'M479' || CIE10_6 = 'M479' || CIE10_7 = 'M479' || CIE10_8 = 'M479' || CIE10_9 = 'M479' || CIE10_10 = 'M479') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M480($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M480' || CIE10_2 = 'M480' || CIE10_3 = 'M480' || CIE10_4 = 'M480' || CIE10_5 = 'M480' || CIE10_6 = 'M480' || CIE10_7 = 'M480' || CIE10_8 = 'M480' || CIE10_9 = 'M480' || CIE10_10 = 'M480') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M481($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M481' || CIE10_2 = 'M481' || CIE10_3 = 'M481' || CIE10_4 = 'M481' || CIE10_5 = 'M481' || CIE10_6 = 'M481' || CIE10_7 = 'M481' || CIE10_8 = 'M481' || CIE10_9 = 'M481' || CIE10_10 = 'M481') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M482($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M482' || CIE10_2 = 'M482' || CIE10_3 = 'M482' || CIE10_4 = 'M482' || CIE10_5 = 'M482' || CIE10_6 = 'M482' || CIE10_7 = 'M482' || CIE10_8= 'M482' || CIE10_9 = 'M482' || CIE10_10 = 'M482') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M483($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M483' || CIE10_2 = 'M483' || CIE10_3 = 'M483' || CIE10_4 = 'M483' || CIE10_5 = 'M483' || CIE10_6 = 'M483' || CIE10_7 = 'M483' || CIE10_8 = 'M483' || CIE10_9 = 'M483' || CIE10_10 = 'M483') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M484($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M484' || CIE10_2 = 'M484' || CIE10_3 = 'M484' || CIE10_4 = 'M484' || CIE10_5 = 'M484' || CIE10_6 = 'M484' || CIE10_7 = 'M484' || CIE10_8 = 'M484' || CIE10_9 = 'M484' || CIE10_10 = 'M484') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M485($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M485' || CIE10_2 = 'M485' || CIE10_3 = 'M485' || CIE10_4 = 'M485' || CIE10_5 = 'M485' || CIE10_6 = 'M485' || CIE10_7 = 'M485' || CIE10_8 = 'M485' || CIE10_9 = 'M485' || CIE10_10 = 'M485') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M488($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M488' || CIE10_2 = 'M488' || CIE10_3 = 'M488' || CIE10_4 = 'M488' || CIE10_5 = 'M488' || CIE10_6 = 'M488' || CIE10_7 = 'M488' || CIE10_8 = 'M488' || CIE10_9 = 'M488' || CIE10_10 = 'M488') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M489($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M489' || CIE10_2 = 'M489' || CIE10_3 = 'M489' || CIE10_4 = 'M489' || CIE10_5 = 'M489' || CIE10_6 = 'M489' || CIE10_7 = 'M489' || CIE10_8 = 'M489' || CIE10_9 = 'M489' || CIE10_10 = 'M489') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M490($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M490' || CIE10_2 = 'M490' || CIE10_3 = 'M490' || CIE10_4 = 'M490' || CIE10_5 = 'M490' || CIE10_6 = 'M490' || CIE10_7 = 'M490' || CIE10_8 = 'M490' || CIE10_9 = 'M490' || CIE10_10 = 'M490') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M491($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M491' || CIE10_2 = 'M491' || CIE10_3 = 'M491' || CIE10_4 = 'M491' || CIE10_5 = 'M491' || CIE10_6 = 'M491' || CIE10_7 = 'M491' || CIE10_8 = 'M491' || CIE10_9 = 'M491' || CIE10_10 = 'M491') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M492($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M492' || CIE10_2 = 'M492' || CIE10_3 = 'M492' || CIE10_4 = 'M492' || CIE10_5 = 'M492'|| CIE10_6 = 'M492' || CIE10_7 = 'M492' || CIE10_8 = 'M492' || CIE10_9 = 'M492' || CIE10_10 = 'M492') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M493($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M493' || CIE10_2 = 'M493' || CIE10_3 = 'M493' || CIE10_4 = 'M493' || CIE10_5 = 'M493' || CIE10_6 = 'M493' || CIE10_7 = 'M493' || CIE10_8 = 'M493' || CIE10_9 = 'M493' || CIE10_10 = 'M493') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M494($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M494' || CIE10_2 = 'M494' || CIE10_3 = 'M494' || CIE10_4 = 'M494' || CIE10_5 = 'M494' || CIE10_6 = 'M494' || CIE10_7 = 'M494' || CIE10_8 = 'M494' || CIE10_9 = 'M494' || CIE10_10 = 'M494') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M495($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M495' || CIE10_2 = 'M495' || CIE10_3 = 'M495' || CIE10_4 = 'M495' || CIE10_5 = 'M495' || CIE10_6 = 'M495' || CIE10_7 = 'M495' || CIE10_8 = 'M495' || CIE10_9 = 'M495' || CIE10_10 = 'M495') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M498($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M498' || CIE10_2 = 'M498' || CIE10_3 = 'M498' || CIE10_4 = 'M498' || CIE10_5 = 'M498' || CIE10_6 = 'M498' || CIE10_7 = 'M498' || CIE10_8 = 'M498' || CIE10_9 = 'M498' || CIE10_10 = 'M498') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M500($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M500' || CIE10_2 = 'M500' || CIE10_3 = 'M500' || CIE10_4 = 'M500' || CIE10_5 = 'M500' || CIE10_6 = 'M500' || CIE10_7 = 'M500' || CIE10_8 = 'M500' || CIE10_9 = 'M500' || CIE10_10 = 'M500') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M501($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M501' || CIE10_2 = 'M501' || CIE10_3 = 'M501' || CIE10_4 = 'M501' || CIE10_5 = 'M501' || CIE10_6 = 'M501' || CIE10_7 = 'M501' || CIE10_8 = 'M501' || CIE10_9 = 'M501' || CIE10_10 = 'M501') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M502($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M502' || CIE10_2 = 'M502' || CIE10_3 = 'M502' || CIE10_4 = 'M502' || CIE10_5 = 'M502' || CIE10_6 = 'M502' || CIE10_7 = 'M502' || CIE10_8 = 'M502' || CIE10_9 = 'M502' || CIE10_10 = 'M502') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M503($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M503' || CIE10_2 = 'M503' || CIE10_3 = 'M503' || CIE10_4 = 'M503' || CIE10_5 = 'M503' || CIE10_6 = 'M503' || CIE10_7 = 'M503' || CIE10_8 = 'M503' || CIE10_9 = 'M503' || CIE10_10 = 'M503') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M508($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M508' || CIE10_2 = 'M508' || CIE10_3 = 'M508' || CIE10_4 = 'M508' || CIE10_5 = 'M508' || CIE10_6 = 'M508' || CIE10_7 = 'M508' || CIE10_8 = 'M508' || CIE10_9 = 'M508' || CIE10_10 = 'M508') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M509($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M509' || CIE10_2 = 'M509' || CIE10_3 = 'M509' || CIE10_4 = 'M509' || CIE10_5 = 'M509' || CIE10_6 = 'M509' || CIE10_7 = 'M509' || CIE10_8 = 'M509' || CIE10_9 = 'M509' || CIE10_10 = 'M509') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M510($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M510' || CIE10_2 = 'M510' || CIE10_3 = 'M510' || CIE10_4 = 'M510' || CIE10_5 = 'M510' || CIE10_6 = 'M510' || CIE10_7 = 'M510' || CIE10_8 = 'M510' || CIE10_9 = 'M510' || CIE10_10 = 'M510') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M511($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M511' || CIE10_2 = 'M511' || CIE10_3 = 'M511' || CIE10_4 = 'M511' || CIE10_5 = 'M511' || CIE10_1 = 'M511' || CIE10_2 = 'M511' || CIE10_3 = 'M511' || CIE10_4 = 'M511' || CIE10_5 = 'M511') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M512($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M512' || CIE10_2 = 'M512' || CIE10_3 = 'M512' || CIE10_4 = 'M512' || CIE10_5 = 'M512' || CIE10_6 = 'M512' || CIE10_7 = 'M512' || CIE10_8 = 'M512' || CIE10_9 = 'M512' || CIE10_10 = 'M512') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M513($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M513' || CIE10_2 = 'M513' || CIE10_3 = 'M513' || CIE10_4 = 'M513' || CIE10_5 = 'M513' || CIE10_6 = 'M513' || CIE10_7 = 'M513' || CIE10_8 = 'M513' || CIE10_9 = 'M513' || CIE10_10 = 'M513') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M514($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M514' || CIE10_2 = 'M514' || CIE10_3 = 'M514' || CIE10_4 = 'M514' || CIE10_5 = 'M514' || CIE10_6 = 'M514' || CIE10_7 = 'M514' || CIE10_8 = 'M514' || CIE10_9 = 'M514' || CIE10_10 = 'M514') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M518($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M518' || CIE10_2 = 'M518' || CIE10_3 = 'M518' || CIE10_4 = 'M518' || CIE10_5 = 'M518' || CIE10_6 = 'M518' || CIE10_7 = 'M518' || CIE10_8 = 'M518' || CIE10_9 = 'M518' || CIE10_10 = 'M518') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M519($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M519' || CIE10_2 = 'M519' || CIE10_3 = 'M519' || CIE10_4 = 'M519' || CIE10_5 = 'M519' || CIE10_6 = 'M519' || CIE10_7 = 'M519' || CIE10_8 = 'M519' || CIE10_9 = 'M519' || CIE10_10 = 'M519') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M530($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M530' || CIE10_2 = 'M530' || CIE10_3 = 'M530' || CIE10_4 = 'M530' || CIE10_5 = 'M530' || CIE10_6 = 'M530' || CIE10_7 = 'M530' || CIE10_8 = 'M530' || CIE10_9 = 'M530' || CIE10_10 = 'M530') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M531($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M531' || CIE10_2 = 'M531' || CIE10_3 = 'M531' || CIE10_4 = 'M531' || CIE10_5 = 'M531' || CIE10_6 = 'M531' || CIE10_7 = 'M531' || CIE10_8 = 'M531' || CIE10_9 = 'M531' || CIE10_10 = 'M531') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M532($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M532' || CIE10_2 = 'M532' || CIE10_3 = 'M532' || CIE10_4 = 'M532' || CIE10_5 = 'M532' || CIE10_6 = 'M532' || CIE10_7 = 'M532' || CIE10_8 = 'M532' || CIE10_9 = 'M532' || CIE10_10 = 'M532') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M533($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M533' || CIE10_2 = 'M533' || CIE10_3 = 'M533' || CIE10_4 = 'M533' || CIE10_5 = 'M533' || CIE10_6 = 'M533' || CIE10_7 = 'M533' || CIE10_8 = 'M533' || CIE10_9 = 'M533' || CIE10_10 = 'M533') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M538($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M538' || CIE10_2 = 'M538' || CIE10_3 = 'M538' || CIE10_4 = 'M538' || CIE10_5 = 'M538' || CIE10_6 = 'M538' || CIE10_7 = 'M538' || CIE10_8 = 'M538' || CIE10_9 = 'M538' || CIE10_10 = 'M538') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M539($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M539' || CIE10_2 = 'M539' || CIE10_3 = 'M539' || CIE10_4 = 'M539' || CIE10_5 = 'M539' || CIE10_6 = 'M539' || CIE10_7 = 'M539' || CIE10_8 = 'M539' || CIE10_9 = 'M539' || CIE10_10 = 'M539') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M540($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M540' || CIE10_2 = 'M540' || CIE10_3 = 'M540' || CIE10_4 = 'M540' || CIE10_5 = 'M540' || CIE10_6 = 'M540' || CIE10_7 = 'M540' || CIE10_8 = 'M540' || CIE10_9 = 'M540' || CIE10_10 = 'M540') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M541($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M541' || CIE10_2 = 'M541' || CIE10_3 = 'M541' || CIE10_4 = 'M541' || CIE10_5 = 'M541' || CIE10_6 = 'M541' || CIE10_7 = 'M541' || CIE10_8 = 'M541' || CIE10_9 = 'M541' || CIE10_10 = 'M541') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M542($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M542' || CIE10_2 = 'M542' || CIE10_3 = 'M542' || CIE10_4 = 'M542' || CIE10_5 = 'M542' || CIE10_6 = 'M542' || CIE10_7 = 'M542' || CIE10_8 = 'M542' || CIE10_9 = 'M542' || CIE10_10 = 'M542') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M543($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M543' || CIE10_2 = 'M543' || CIE10_3 = 'M543' || CIE10_4 = 'M543' || CIE10_5 = 'M543' || CIE10_6 = 'M543' || CIE10_7 = 'M543' || CIE10_8 = 'M543' || CIE10_9 = 'M543' || CIE10_10 = 'M543') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M544($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M544' || CIE10_2 = 'M544' || CIE10_3 = 'M544' || CIE10_4 = 'M544' || CIE10_5 = 'M544' || CIE10_6 = 'M544' || CIE10_7 = 'M544' || CIE10_8 = 'M544' || CIE10_9 = 'M544' || CIE10_10 = 'M544') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M545($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M545' || CIE10_2 = 'M545' || CIE10_3 = 'M545' || CIE10_4 = 'M545' || CIE10_5 = 'M545' || CIE10_6 = 'M545' || CIE10_7 = 'M545' || CIE10_8 = 'M545' || CIE10_9 = 'M545' || CIE10_10 = 'M545') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M546($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M546' || CIE10_2 = 'M546' || CIE10_3 = 'M546' || CIE10_4 = 'M546' || CIE10_5 = 'M546' || CIE10_6 = 'M546' || CIE10_7 = 'M546' || CIE10_8 = 'M546' || CIE10_9 = 'M546' || CIE10_10 = 'M546') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M548($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M548' || CIE10_2 = 'M548' || CIE10_3 = 'M548' || CIE10_4 = 'M548' || CIE10_5 = 'M548' || CIE10_6 = 'M548' || CIE10_7 = 'M548' || CIE10_8 = 'M548' || CIE10_9 = 'M548' || CIE10_10 = 'M548') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M549($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M549' || CIE10_2 = 'M549' || CIE10_3 = 'M549' || CIE10_4 = 'M549' || CIE10_5 = 'M549' || CIE10_6 = 'M549' || CIE10_7 = 'M549' || CIE10_8 = 'M549' || CIE10_9 = 'M549' || CIE10_10 = 'M549') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M600($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M600' || CIE10_2 = 'M600' || CIE10_3 = 'M600' || CIE10_4 = 'M600' || CIE10_5 = 'M600' || CIE10_6 = 'M600' || CIE10_7 = 'M600' || CIE10_8 = 'M600' || CIE10_9 = 'M600' || CIE10_10 = 'M600') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M601($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M601' || CIE10_2 = 'M601' || CIE10_3 = 'M601' || CIE10_4 = 'M601' || CIE10_5 = 'M601' || CIE10_6 = 'M601' || CIE10_7 = 'M601' || CIE10_8 = 'M601' || CIE10_9 = 'M601' || CIE10_10 = 'M601') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M602($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M602' || CIE10_2 = 'M602' || CIE10_3 = 'M602' || CIE10_4 = 'M602' || CIE10_5 = 'M602' || CIE10_6 = 'M602' || CIE10_7 = 'M602' || CIE10_8 = 'M602' || CIE10_9 = 'M602' || CIE10_10 = 'M602') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M608($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M608' || CIE10_2 = 'M608' || CIE10_3 = 'M608' || CIE10_4 = 'M608' || CIE10_5 = 'M608' || CIE10_6 = 'M608' || CIE10_7 = 'M608' || CIE10_8 = 'M608' || CIE10_9 = 'M608' || CIE10_10 = 'M608') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M609($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M609' || CIE10_2 = 'M609' || CIE10_3 = 'M609' || CIE10_4 = 'M609' || CIE10_5 = 'M609' || CIE10_6 = 'M609' || CIE10_7 = 'M609' || CIE10_8 = 'M609' || CIE10_9 = 'M609' || CIE10_10 = 'M609') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M610($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M610' || CIE10_2 = 'M610' || CIE10_3 = 'M610' || CIE10_4 = 'M610' || CIE10_5 = 'M610' || CIE10_6 = 'M610' || CIE10_7 = 'M610' || CIE10_8 = 'M610' || CIE10_9 = 'M610' || CIE10_10 = 'M610') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M611($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M611' || CIE10_2 = 'M611' || CIE10_3 = 'M611' || CIE10_4 = 'M611' || CIE10_5 = 'M611' || CIE10_6 = 'M611' || CIE10_7 = 'M611' || CIE10_8 = 'M611' || CIE10_9 = 'M611' || CIE10_10 = 'M611') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M612($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M612' || CIE10_2 = 'M612' || CIE10_3 = 'M612' || CIE10_4 = 'M612' || CIE10_5 = 'M612' || CIE10_6 = 'M612' || CIE10_7 = 'M612' || CIE10_8 = 'M612' || CIE10_9 = 'M612' || CIE10_10 = 'M612') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M613($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M613' || CIE10_2 = 'M613' || CIE10_3 = 'M613' || CIE10_4 = 'M613' || CIE10_5 = 'M613' || CIE10_6 = 'M613' || CIE10_7 = 'M613' || CIE10_8 = 'M613' || CIE10_9 = 'M613' || CIE10_10 = 'M613') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M614($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M614' || CIE10_2 = 'M614' || CIE10_3 = 'M614' || CIE10_4 = 'M614' || CIE10_5 = 'M614' || CIE10_6 = 'M614' || CIE10_7 = 'M614' || CIE10_8 = 'M614' || CIE10_9 = 'M614' || CIE10_10 = 'M614') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M615($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M615' || CIE10_2 = 'M615' || CIE10_3 = 'M615' || CIE10_4 = 'M615' || CIE10_5 = 'M615' || CIE10_6 = 'M615' || CIE10_7 = 'M615' || CIE10_8 = 'M615' || CIE10_9 = 'M615' || CIE10_10 = 'M615') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M619($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M619' || CIE10_2 = 'M619' || CIE10_3 = 'M619' || CIE10_4 = 'M619' || CIE10_5 = 'M619' || CIE10_6 = 'M619' || CIE10_7 = 'M619' || CIE10_8 = 'M619' || CIE10_9 = 'M619' || CIE10_10 = 'M619') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M620($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M620' || CIE10_2 = 'M620' || CIE10_3 = 'M620' || CIE10_4 = 'M620' || CIE10_5 = 'M620' || CIE10_6 = 'M620' || CIE10_7 = 'M620' || CIE10_8 = 'M620' || CIE10_9 = 'M620' || CIE10_10 = 'M620') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M621($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M621' || CIE10_2 = 'M621' || CIE10_3 = 'M621' || CIE10_4 = 'M621' || CIE10_5 = 'M621' || CIE10_6 = 'M621' || CIE10_7 = 'M621' || CIE10_8 = 'M621' || CIE10_9 = 'M621' || CIE10_10 = 'M621') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M622($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M622' || CIE10_2 = 'M622' || CIE10_3 = 'M622' || CIE10_4 = 'M622' || CIE10_5 = 'M622' || CIE10_6 = 'M622' || CIE10_7 = 'M622' || CIE10_8 = 'M622' || CIE10_9 = 'M622' || CIE10_10 = 'M622') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M623($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M623' || CIE10_2 = 'M623' || CIE10_3 = 'M623' || CIE10_4 = 'M623' || CIE10_5 = 'M623' || CIE10_6 = 'M623' || CIE10_7 = 'M623' || CIE10_8 = 'M623' || CIE10_9 = 'M623' || CIE10_10 = 'M623') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M624($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M624' || CIE10_2 = 'M624' || CIE10_3 = 'M624' || CIE10_4 = 'M624' || CIE10_5 = 'M624' || CIE10_6 = 'M624' || CIE10_7 = 'M624' || CIE10_8 = 'M624' || CIE10_9 = 'M624' || CIE10_10 = 'M624') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M625($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M625' || CIE10_2 = 'M625' || CIE10_3 = 'M625' || CIE10_4 = 'M625' || CIE10_5 = 'M625' || CIE10_6 = 'M625' || CIE10_7 = 'M625' || CIE10_8 = 'M625' || CIE10_9 = 'M625' || CIE10_10 = 'M625') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M626($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M626' || CIE10_2 = 'M626' || CIE10_3 = 'M626' || CIE10_4 = 'M626' || CIE10_5 = 'M626' || CIE10_6 = 'M626' || CIE10_7 = 'M626' || CIE10_8 = 'M626' || CIE10_9 = 'M626' || CIE10_10 = 'M626') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M628($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M628' || CIE10_2 = 'M628' || CIE10_3 = 'M628' || CIE10_4 = 'M628' || CIE10_5 = 'M628' || CIE10_6 = 'M628' || CIE10_7 = 'M628' || CIE10_8 = 'M628' || CIE10_9 = 'M628' || CIE10_10 = 'M628') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M629($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M629' || CIE10_2 = 'M629' || CIE10_3 = 'M629' || CIE10_4 = 'M629' || CIE10_5 = 'M629' || CIE10_6 = 'M629' || CIE10_7 = 'M629' || CIE10_8 = 'M629' || CIE10_9 = 'M629' || CIE10_10 = 'M629') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M630($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M630' || CIE10_2 = 'M630' || CIE10_3 = 'M630' || CIE10_4 = 'M630' || CIE10_5 = 'M630' || CIE10_6 = 'M630' || CIE10_7 = 'M630' || CIE10_8 = 'M630' || CIE10_9 = 'M630' || CIE10_10 = 'M630') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M631($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M631' || CIE10_2 = 'M631' || CIE10_3 = 'M631' || CIE10_4 = 'M631' || CIE10_5 = 'M631' || CIE10_6 = 'M631' || CIE10_7 = 'M631' || CIE10_8 = 'M631' || CIE10_9 = 'M631' || CIE10_10 = 'M631') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M632($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M632' || CIE10_2 = 'M632' || CIE10_3 = 'M632' || CIE10_4 = 'M632' || CIE10_5 = 'M632' || CIE10_6 = 'M632' || CIE10_7 = 'M632' || CIE10_8 = 'M632' || CIE10_9 = 'M632' || CIE10_10 = 'M632') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M633($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M633' || CIE10_2 = 'M633' || CIE10_3 = 'M633' || CIE10_4 = 'M633' || CIE10_5 = 'M633' || CIE10_6 = 'M633' || CIE10_7 = 'M633' || CIE10_8 = 'M633' || CIE10_9 = 'M633' || CIE10_10 = 'M633') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M638($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M638' || CIE10_2 = 'M638' || CIE10_3 = 'M638' || CIE10_4 = 'M638' || CIE10_5 = 'M638' || CIE10_6 = 'M638' || CIE10_7 = 'M638' || CIE10_8 = 'M638' || CIE10_9 = 'M638' || CIE10_10 = 'M638') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M650($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M650' || CIE10_2 = 'M650' || CIE10_3 = 'M650' || CIE10_4 = 'M650' || CIE10_5 = 'M650' || CIE10_6 = 'M650' || CIE10_7 = 'M650' || CIE10_8 = 'M650' || CIE10_9 = 'M650' || CIE10_10 = 'M650') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
   public static function M651($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M651' || CIE10_2 = 'M651' || CIE10_3 = 'M651' || CIE10_4 = 'M651' || CIE10_5 = 'M651' || CIE10_6 = 'M651' || CIE10_7 = 'M651' || CIE10_8 = 'M651' || CIE10_9 = 'M651' || CIE10_10 = 'M651') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M652($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M652' || CIE10_2 = 'M652' || CIE10_3 = 'M652' || CIE10_4 = 'M652' || CIE10_5 = 'M652' || CIE10_6 = 'M652' || CIE10_7 = 'M652' || CIE10_8 = 'M652' || CIE10_9 = 'M652' || CIE10_10 = 'M652') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M653($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M653' || CIE10_2 = 'M653' || CIE10_3 = 'M653' || CIE10_4 = 'M653' || CIE10_5 = 'M653' || CIE10_6 = 'M653' || CIE10_7 = 'M653' || CIE10_8 = 'M653' || CIE10_9 = 'M653' || CIE10_10 = 'M653') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M654($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M654' || CIE10_2 = 'M654' || CIE10_3 = 'M654' || CIE10_4 = 'M654' || CIE10_5 = 'M654' || CIE10_6 = 'M654' || CIE10_7 = 'M654' || CIE10_8 = 'M654' || CIE10_9 = 'M654' || CIE10_10 = 'M654') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M658($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M658' || CIE10_2 = 'M658' || CIE10_3 = 'M658' || CIE10_4 = 'M658' || CIE10_5 = 'M658' || CIE10_6 = 'M658' || CIE10_7 = 'M658' || CIE10_8 = 'M658' || CIE10_9 = 'M658' || CIE10_10 = 'M658') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M659($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M659' || CIE10_2 = 'M659' || CIE10_3 = 'M659' || CIE10_4 = 'M659' || CIE10_5 = 'M659' || CIE10_6 = 'M659' || CIE10_7 = 'M659' || CIE10_8 = 'M659' || CIE10_9 = 'M659' || CIE10_10 = 'M659') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M660($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M660' || CIE10_2 = 'M660' || CIE10_3 = 'M660' || CIE10_4 = 'M660' || CIE10_5 = 'M660' || CIE10_6 = 'M660' || CIE10_7 = 'M660' || CIE10_8 = 'M660' || CIE10_9 = 'M660' || CIE10_10 = 'M660') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M661($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M661' || CIE10_2 = 'M661' || CIE10_3 = 'M661' || CIE10_4 = 'M661' || CIE10_5 = 'M661' || CIE10_6 = 'M661' || CIE10_7 = 'M661' || CIE10_8 = 'M661' || CIE10_9 = 'M661' || CIE10_10 = 'M661') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M662($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M662' || CIE10_2 = 'M662' || CIE10_3 = 'M662' || CIE10_4 = 'M662' || CIE10_5 = 'M662' || CIE10_6 = 'M662' || CIE10_7 = 'M662' || CIE10_8 = 'M662' || CIE10_9 = 'M662' || CIE10_10 = 'M662') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M663($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M663' || CIE10_2 = 'M663' || CIE10_3 = 'M663' || CIE10_4 = 'M663' || CIE10_5 = 'M663' || CIE10_6 = 'M663' || CIE10_7 = 'M663' || CIE10_8 = 'M663' || CIE10_9 = 'M663' || CIE10_10 = 'M663') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M664($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M664' || CIE10_2 = 'M664' || CIE10_3 = 'M664' || CIE10_4 = 'M664' || CIE10_5 = 'M664' || CIE10_6 = 'M664' || CIE10_7 = 'M664' || CIE10_8 = 'M664' || CIE10_9 = 'M664' || CIE10_10 = 'M664') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M665($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M665' || CIE10_2 = 'M665' || CIE10_3 = 'M665' || CIE10_4 = 'M665' || CIE10_5 = 'M665' || CIE10_6 = 'M665' || CIE10_7 = 'M665' || CIE10_8 = 'M665' || CIE10_9 = 'M665' || CIE10_10 = 'M665') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M670($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M670' || CIE10_2 = 'M670' || CIE10_3 = 'M670' || CIE10_4 = 'M670' || CIE10_5 = 'M670' || CIE10_6 = 'M670' || CIE10_7 = 'M670' || CIE10_8 = 'M670' || CIE10_9 = 'M670' || CIE10_10 = 'M670') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M671($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M671' || CIE10_2 = 'M671' || CIE10_3 = 'M671' || CIE10_4 = 'M671' || CIE10_5 = 'M671' || CIE10_6 = 'M671' || CIE10_7 = 'M671' || CIE10_8 = 'M671' || CIE10_9 = 'M671' || CIE10_10 = 'M671') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M672($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M672' || CIE10_2 = 'M672' || CIE10_3 = 'M672' || CIE10_4 = 'M672' || CIE10_5 = 'M672' || CIE10_6 = 'M672' || CIE10_7 = 'M672' || CIE10_8 = 'M672' || CIE10_9 = 'M672' || CIE10_10 = 'M672') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M673($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M673' || CIE10_2 = 'M673' || CIE10_3 = 'M673' || CIE10_4 = 'M673' || CIE10_5 = 'M673' || CIE10_6 = 'M673' || CIE10_7 = 'M673' || CIE10_8 = 'M673' || CIE10_9 = 'M673' || CIE10_10 = 'M673') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M674($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M674' || CIE10_2 = 'M674' || CIE10_3 = 'M674' || CIE10_4 = 'M674' || CIE10_5 = 'M674' || CIE10_6 = 'M674' || CIE10_7 = 'M674' || CIE10_8 = 'M674' || CIE10_9 = 'M674' || CIE10_10 = 'M674') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M678($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M678' || CIE10_2 = 'M678' || CIE10_3 = 'M678' || CIE10_4 = 'M678' || CIE10_5 = 'M678' || CIE10_6 = 'M678' || CIE10_7 = 'M678' || CIE10_8 = 'M678' || CIE10_9 = 'M678' || CIE10_10 = 'M678') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M679($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M679' || CIE10_2 = 'M679' || CIE10_3 = 'M679' || CIE10_4 = 'M679' || CIE10_5 = 'M679' || CIE10_6 = 'M679' || CIE10_7 = 'M679' || CIE10_8 = 'M679' || CIE10_9 = 'M679' || CIE10_10 = 'M679') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M680($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M680' || CIE10_2 = 'M680' || CIE10_3 = 'M680' || CIE10_4 = 'M680' || CIE10_5 = 'M680' || CIE10_6 = 'M680' || CIE10_7 = 'M680' || CIE10_8 = 'M680' || CIE10_9 = 'M680' || CIE10_10 = 'M680') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M688($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M688' || CIE10_2 = 'M688' || CIE10_3 = 'M688' || CIE10_4 = 'M688' || CIE10_5 = 'M688' || CIE10_6 = 'M688' || CIE10_7 = 'M688' || CIE10_8 = 'M688' || CIE10_9 = 'M688' || CIE10_10 = 'M688') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M700($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M700' || CIE10_2 = 'M700' || CIE10_3 = 'M700' || CIE10_4 = 'M700' || CIE10_5 = 'M700' || CIE10_6 = 'M700' || CIE10_7 = 'M700' || CIE10_8 = 'M700' || CIE10_9 = 'M700' || CIE10_10 = 'M700') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
  public static function M701($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M701' || CIE10_2 = 'M701' || CIE10_3 = 'M701' || CIE10_4 = 'M701' || CIE10_5 = 'M701' || CIE10_6 = 'M701' || CIE10_7 = 'M701' || CIE10_8 = 'M701' || CIE10_9 = 'M701' || CIE10_10 = 'M701') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M702($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M702' || CIE10_2 = 'M702' || CIE10_3 = 'M702' || CIE10_4 = 'M702' || CIE10_5 = 'M702' || CIE10_6 = 'M702' || CIE10_7 = 'M702' || CIE10_8 = 'M702' || CIE10_9 = 'M702' || CIE10_10 = 'M702') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M703($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M703' || CIE10_2 = 'M703' || CIE10_3 = 'M703' || CIE10_4 = 'M703' || CIE10_5 = 'M703' || CIE10_6 = 'M703' || CIE10_7 = 'M703' || CIE10_8 = 'M703' || CIE10_9 = 'M703' || CIE10_10 = 'M703') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M704($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M704' || CIE10_2 = 'M704' || CIE10_3 = 'M704' || CIE10_4 = 'M704' || CIE10_5 = 'M704' || CIE10_6 = 'M704' || CIE10_7 = 'M704' || CIE10_8 = 'M704' || CIE10_9 = 'M704' || CIE10_10 = 'M704') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M705($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M705' || CIE10_2 = 'M705' || CIE10_3 = 'M705' || CIE10_4 = 'M705' || CIE10_5 = 'M705' || CIE10_6 = 'M705' || CIE10_7 = 'M705' || CIE10_8 = 'M705' || CIE10_9 = 'M705' || CIE10_10 = 'M705') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M706($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M706' || CIE10_2 = 'M706' || CIE10_3 = 'M706' || CIE10_4 = 'M706' || CIE10_5 = 'M706' || CIE10_6 = 'M706' || CIE10_7 = 'M706' || CIE10_8 = 'M706' || CIE10_9 = 'M706' || CIE10_10 = 'M706') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M707($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M707' || CIE10_2 = 'M707' || CIE10_3 = 'M707' || CIE10_4 = 'M707' || CIE10_5 = 'M707' || CIE10_6 = 'M707' || CIE10_7 = 'M707' || CIE10_8 = 'M707' || CIE10_9 = 'M707' || CIE10_10 = 'M707') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M708($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M708' || CIE10_2 = 'M708' || CIE10_3 = 'M708' || CIE10_4 = 'M708' || CIE10_5 = 'M708' || CIE10_6 = 'M708' || CIE10_7 = 'M708' || CIE10_8 = 'M708' || CIE10_9 = 'M708' || CIE10_10 = 'M708') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M709($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M709' || CIE10_2 = 'M709' || CIE10_3 = 'M709' || CIE10_4 = 'M709' || CIE10_5 = 'M709' || CIE10_6 = 'M709' || CIE10_7 = 'M709' || CIE10_8 = 'M709' || CIE10_9 = 'M709' || CIE10_10 = 'M709') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M710($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M710' || CIE10_2 = 'M710' || CIE10_3 = 'M710' || CIE10_4 = 'M710' || CIE10_5 = 'M710' || CIE10_6 = 'M710' || CIE10_7 = 'M710' || CIE10_8 = 'M710' || CIE10_9 = 'M710' || CIE10_10 = 'M710') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M711($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M711' || CIE10_2 = 'M711' || CIE10_3 = 'M711' || CIE10_4 = 'M711' || CIE10_5 = 'M711' || CIE10_6 = 'M711' || CIE10_7 = 'M711' || CIE10_8 = 'M711' || CIE10_9 = 'M711' || CIE10_10 = 'M711') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M712($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M712' || CIE10_2 = 'M712' || CIE10_3 = 'M712' || CIE10_4 = 'M712' || CIE10_5 = 'M712' || CIE10_6 = 'M712' || CIE10_7 = 'M712' || CIE10_8 = 'M712' || CIE10_9 = 'M712' || CIE10_10 = 'M712') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M713($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M713' || CIE10_2 = 'M713' || CIE10_3 = 'M713' || CIE10_4 = 'M713' || CIE10_5 = 'M713' || CIE10_6 = 'M713' || CIE10_7 = 'M713' || CIE10_8 = 'M713' || CIE10_9 = 'M713' || CIE10_10 = 'M713') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M714($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M714' || CIE10_2 = 'M714' || CIE10_3 = 'M714' || CIE10_4 = 'M714' || CIE10_5 = 'M714' || CIE10_6 = 'M714' || CIE10_7 = 'M714' || CIE10_8 = 'M714' || CIE10_9 = 'M714' || CIE10_10 = 'M714') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M715($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M715' || CIE10_2 = 'M715' || CIE10_3 = 'M715' || CIE10_4 = 'M715' || CIE10_5 = 'M715' || CIE10_6 = 'M715' || CIE10_7 = 'M715' || CIE10_8 = 'M715' || CIE10_9 = 'M715' || CIE10_10 = 'M715') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M718($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M718' || CIE10_2 = 'M718' || CIE10_3 = 'M718' || CIE10_4 = 'M718' || CIE10_5 = 'M718' || CIE10_6 = 'M718' || CIE10_7 = 'M718' || CIE10_8 = 'M718' || CIE10_9 = 'M718' || CIE10_10 = 'M718') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M719($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M719' || CIE10_2 = 'M719' || CIE10_3 = 'M719' || CIE10_4 = 'M719' || CIE10_5 = 'M719' || CIE10_6 = 'M719' || CIE10_7 = 'M719' || CIE10_8 = 'M719' || CIE10_9 = 'M719' || CIE10_10 = 'M719') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M720($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M720' || CIE10_2 = 'M720' || CIE10_3 = 'M720' || CIE10_4 = 'M720' || CIE10_5 = 'M720' || CIE10_6 = 'M720' || CIE10_7 = 'M720' || CIE10_8 = 'M720' || CIE10_9 = 'M720' || CIE10_10 = 'M720') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M721($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M721' || CIE10_2 = 'M721' || CIE10_3 = 'M721' || CIE10_4 = 'M721' || CIE10_5 = 'M721' || CIE10_6 = 'M721' || CIE10_7 = 'M721' || CIE10_8 = 'M721' || CIE10_9 = 'M721' || CIE10_10 = 'M721') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M722($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M722' || CIE10_2 = 'M722' || CIE10_3 = 'M722' || CIE10_4 = 'M722' || CIE10_5 = 'M722' || CIE10_6 = 'M722' || CIE10_7 = 'M722' || CIE10_8 = 'M722' || CIE10_9 = 'M722' || CIE10_10 = 'M722') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M724($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M724' || CIE10_2 = 'M724' || CIE10_3 = 'M724' || CIE10_4 = 'M724' || CIE10_5 = 'M724' || CIE10_6 = 'M724' || CIE10_7 = 'M724' || CIE10_8 = 'M724' || CIE10_9 = 'M724' || CIE10_10 = 'M724') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M726($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M726' || CIE10_2 = 'M726' || CIE10_3 = 'M726' || CIE10_4 = 'M726' || CIE10_5 = 'M726' || CIE10_6 = 'M726' || CIE10_7 = 'M726' || CIE10_8 = 'M726' || CIE10_9 = 'M726' || CIE10_10 = 'M726') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M728($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M728' || CIE10_2 = 'M728' || CIE10_3 = 'M728' || CIE10_4 = 'M728' || CIE10_5 = 'M728' || CIE10_6 = 'M728' || CIE10_7 = 'M728' || CIE10_8 = 'M728' || CIE10_9 = 'M728' || CIE10_10 = 'M728') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M729($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M729' || CIE10_2 = 'M729' || CIE10_3 = 'M729' || CIE10_4 = 'M729' || CIE10_5 = 'M729' || CIE10_6 = 'M729' || CIE10_7 = 'M729' || CIE10_8 = 'M729' || CIE10_9 = 'M729' || CIE10_10 = 'M729') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M730($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M730' || CIE10_2 = 'M730' || CIE10_3 = 'M730' || CIE10_4 = 'M730' || CIE10_5 = 'M730' || CIE10_6 = 'M730' || CIE10_7 = 'M730' || CIE10_8 = 'M730' || CIE10_9 = 'M730' || CIE10_10 = 'M730') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M731($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M731' || CIE10_2 = 'M731' || CIE10_3 = 'M731' || CIE10_4 = 'M731' || CIE10_5 = 'M731' || CIE10_6 = 'M731' || CIE10_7 = 'M731' || CIE10_8 = 'M731' || CIE10_9 = 'M731' || CIE10_10 = 'M731') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M738($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M738' || CIE10_2 = 'M738' || CIE10_3 = 'M738' || CIE10_4 = 'M738' || CIE10_5 = 'M738' || CIE10_6 = 'M738' || CIE10_7 = 'M738' || CIE10_8 = 'M738' || CIE10_9 = 'M738' || CIE10_10 = 'M738') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M750($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M750' || CIE10_2 = 'M750' || CIE10_3 = 'M750' || CIE10_4 = 'M750' || CIE10_5 = 'M750' || CIE10_6 = 'M750' || CIE10_7 = 'M750' || CIE10_8 = 'M750' || CIE10_9 = 'M750' || CIE10_10 = 'M750') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M751($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M751' || CIE10_2 = 'M751' || CIE10_3 = 'M751' || CIE10_4 = 'M751' || CIE10_5 = 'M751' || CIE10_6 = 'M751' || CIE10_7 = 'M751' || CIE10_8 = 'M751' || CIE10_9 = 'M751' || CIE10_10 = 'M751') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M752($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M752' || CIE10_2 = 'M752' || CIE10_3 = 'M752' || CIE10_4 = 'M752' || CIE10_5 = 'M752' || CIE10_6 = 'M752' || CIE10_7 = 'M752' || CIE10_8 = 'M752' || CIE10_9 = 'M752' || CIE10_10 = 'M752') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M753($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M753' || CIE10_2 = 'M753' || CIE10_3 = 'M753' || CIE10_4 = 'M753' || CIE10_5 = 'M7' || CIE10_6 = 'M753' || CIE10_7 = 'M753' || CIE10_8 = 'M753' || CIE10_9 = 'M753' || CIE10_10 = 'M753') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M754($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M754' || CIE10_2 = 'M754' || CIE10_3 = 'M754' || CIE10_4 = 'M754' || CIE10_5 = 'M754' || CIE10_6 = 'M754' || CIE10_7 = 'M754' || CIE10_8 = 'M754' || CIE10_9 = 'M754' || CIE10_10 = 'M754') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M755($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M755' || CIE10_2 = 'M755' || CIE10_3 = 'M755' || CIE10_4 = 'M755' || CIE10_5 = 'M755' || CIE10_6 = 'M755' || CIE10_7 = 'M755' || CIE10_8 = 'M755' || CIE10_9 = 'M755' || CIE10_10 = 'M755') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M758($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M758' || CIE10_2 = 'M758' || CIE10_3 = 'M758' || CIE10_4 = 'M758' || CIE10_5 = 'M758' || CIE10_6 = 'M758' || CIE10_7 = 'M758' || CIE10_8 = 'M758' || CIE10_9 = 'M758' || CIE10_10 = 'M758') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M759($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M759' || CIE10_2 = 'M759' || CIE10_3 = 'M759' || CIE10_4 = 'M759' || CIE10_5 = 'M759' || CIE10_6 = 'M759' || CIE10_7 = 'M759' || CIE10_8 = 'M759' || CIE10_9 = 'M759' || CIE10_10 = 'M759') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M760($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M760' || CIE10_2 = 'M760' || CIE10_3 = 'M760' || CIE10_4 = 'M760' || CIE10_5 = 'M760' || CIE10_6 = 'M760' || CIE10_7 = 'M760' || CIE10_8 = 'M760' || CIE10_9 = 'M760' || CIE10_10 = 'M760') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M761($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M761' || CIE10_2 = 'M761' || CIE10_3 = 'M761' || CIE10_4 = 'M761' || CIE10_5 = 'M761' || CIE10_6 = 'M761' || CIE10_7 = 'M761' || CIE10_8 = 'M761' || CIE10_9 = 'M761' || CIE10_10 = 'M761') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M762($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M762' || CIE10_2 = 'M762' || CIE10_3 = 'M762' || CIE10_4 = 'M762' || CIE10_5 = 'M762' || CIE10_6 = 'M762' || CIE10_7 = 'M762' || CIE10_8 = 'M762' || CIE10_9 = 'M762' || CIE10_10 = 'M762') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M763($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M763' || CIE10_2 = 'M763' || CIE10_3 = 'M763' || CIE10_4 = 'M763' || CIE10_5 = 'M763' || CIE10_6 = 'M763' || CIE10_7 = 'M763' || CIE10_8 = 'M763' || CIE10_9 = 'M763' || CIE10_10 = 'M763') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M764($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M764' || CIE10_2 = 'M764' || CIE10_3 = 'M764' || CIE10_4 = 'M764' || CIE10_5 = 'M764' || CIE10_6 = 'M764' || CIE10_7 = 'M764' || CIE10_8 = 'M764' || CIE10_9 = 'M764' || CIE10_10 = 'M764') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M765($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M765' || CIE10_2 = 'M765' || CIE10_3 = 'M765' || CIE10_4 = 'M765' || CIE10_5 = 'M765' || CIE10_6 = 'M765' || CIE10_7 = 'M765' || CIE10_8 = 'M765' || CIE10_9 = 'M765' || CIE10_10 = 'M765') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M766($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M766' || CIE10_2 = 'M766' || CIE10_3 = 'M766' || CIE10_4 = 'M766' || CIE10_5 = 'M766' || CIE10_6 = 'M766' || CIE10_7 = 'M766' || CIE10_8 = 'M766' || CIE10_9 = 'M766' || CIE10_10 = 'M766') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M767($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M767' || CIE10_2 = 'M767' || CIE10_3 = 'M767' || CIE10_4 = 'M767' || CIE10_5 = 'M767' || CIE10_6 = 'M767' || CIE10_7 = 'M767' || CIE10_8 = 'M767' || CIE10_9 = 'M767' || CIE10_10 = 'M767') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M768($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M768' || CIE10_2 = 'M768' || CIE10_3 = 'M768' || CIE10_4 = 'M768' || CIE10_5 = 'M768' || CIE10_6 = 'M768' || CIE10_7 = 'M768' || CIE10_8 = 'M768' || CIE10_9 = 'M768' || CIE10_10 = 'M768') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M769($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M769' || CIE10_2 = 'M769' || CIE10_3 = 'M769' || CIE10_4 = 'M769' || CIE10_5 = 'M769' || CIE10_6 = 'M769' || CIE10_7 = 'M769' || CIE10_8 = 'M769' || CIE10_9 = 'M769' || CIE10_10 = 'M769') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M770($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M770' || CIE10_2 = 'M770' || CIE10_3 = 'M770' || CIE10_4 = 'M770' || CIE10_5 = 'M770' || CIE10_6 = 'M770' || CIE10_7 = 'M770' || CIE10_8 = 'M770' || CIE10_9 = 'M770' || CIE10_10 = 'M770') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M771($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M771' || CIE10_2 = 'M771' || CIE10_3 = 'M771' || CIE10_4 = 'M771' || CIE10_5 = 'M771' || CIE10_6 = 'M771' || CIE10_7 = 'M771' || CIE10_8 = 'M771' || CIE10_9 = 'M771' || CIE10_10 = 'M771') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M772($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M772' || CIE10_2 = 'M772' || CIE10_3 = 'M772' || CIE10_4 = 'M772' || CIE10_5 = 'M772' || CIE10_6 = 'M772' || CIE10_7 = 'M772' || CIE10_8 = 'M772' || CIE10_9 = 'M772' || CIE10_10 = 'M772') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M773($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M773' || CIE10_2 = 'M773' || CIE10_3 = 'M773' || CIE10_4 = 'M773' || CIE10_5 = 'M773' || CIE10_6 = 'M773' || CIE10_7 = 'M773' || CIE10_8 = 'M773' || CIE10_9 = 'M773' || CIE10_10 = 'M773') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M774($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M774' || CIE10_2 = 'M774' || CIE10_3 = 'M774' || CIE10_4 = 'M774' || CIE10_5 = 'M774' || CIE10_6 = 'M774' || CIE10_7 = 'M774' || CIE10_8 = 'M774' || CIE10_9 = 'M774' || CIE10_10 = 'M774') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M775($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M775' || CIE10_2 = 'M775' || CIE10_3 = 'M775' || CIE10_4 = 'M775' || CIE10_5 = 'M775' || CIE10_6 = 'M775' || CIE10_7 = 'M775' || CIE10_8 = 'M775' || CIE10_9 = 'M775' || CIE10_10 = 'M775') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M778($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M778' || CIE10_2 = 'M778' || CIE10_3 = 'M778' || CIE10_4 = 'M778' || CIE10_5 = 'M778' || CIE10_6 = 'M778' || CIE10_7 = 'M778' || CIE10_8 = 'M778' || CIE10_9 = 'M778' || CIE10_10 = 'M778') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M779($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M779' || CIE10_2 = 'M779' || CIE10_3 = 'M779' || CIE10_4 = 'M779' || CIE10_5 = 'M779' || CIE10_6 = 'M779' || CIE10_7 = 'M779' || CIE10_8 = 'M779' || CIE10_9 = 'M779' || CIE10_10 = 'M779') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M790($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M790' || CIE10_2 = 'M790' || CIE10_3 = 'M790' || CIE10_4 = 'M790' || CIE10_5 = 'M790' || CIE10_6 = 'M790' || CIE10_7 = 'M790' || CIE10_8 = 'M790' || CIE10_9 = 'M790' || CIE10_10 = 'M790') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M791($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M791' || CIE10_2 = 'M791' || CIE10_3 = 'M791' || CIE10_4 = 'M791' || CIE10_5 = 'M791' || CIE10_6 = 'M791' || CIE10_7 = 'M791' || CIE10_8 = 'M791' || CIE10_9 = 'M791' || CIE10_10 = 'M791') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M792($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M792' || CIE10_2 = 'M792' || CIE10_3 = 'M792' || CIE10_4 = 'M792' || CIE10_5 = 'M792' || CIE10_6 = 'M792' || CIE10_7 = 'M792' || CIE10_8 = 'M792' || CIE10_9 = 'M792' || CIE10_10 = 'M792') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M793($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M793' || CIE10_2 = 'M793' || CIE10_3 = 'M793' || CIE10_4 = 'M793' || CIE10_5 = 'M793' || CIE10_6 = 'M793' || CIE10_7 = 'M793' || CIE10_8 = 'M793' || CIE10_9 = 'M793' || CIE10_10 = 'M793') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M794($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M794' || CIE10_2 = 'M794' || CIE10_3 = 'M794' || CIE10_4 = 'M794' || CIE10_5 = 'M794' || CIE10_6 = 'M794' || CIE10_7 = 'M794' || CIE10_8 = 'M794' || CIE10_9 = 'M794' || CIE10_10 = 'M794') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }  public static function M795($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M795' || CIE10_2 = 'M795' || CIE10_3 = 'M795' || CIE10_4 = 'M795' || CIE10_5 = 'M795' || CIE10_6 = 'M795' || CIE10_7 = 'M795' || CIE10_8 = 'M795' || CIE10_9 = 'M795' || CIE10_10 = 'M795') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M796($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M796' || CIE10_2 = 'M796' || CIE10_3 = 'M796' || CIE10_4 = 'M796' || CIE10_5 = 'M796' || CIE10_6 = 'M796' || CIE10_7 = 'M796' || CIE10_8 = 'M796' || CIE10_9 = 'M796' || CIE10_10 = 'M796') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }  public static function M797($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M797' || CIE10_2 = 'M797' || CIE10_3 = 'M797' || CIE10_4 = 'M797' || CIE10_5 = 'M797' || CIE10_6 = 'M797' || CIE10_7 = 'M797' || CIE10_8 = 'M797' || CIE10_9 = 'M797' || CIE10_10 = 'M797') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M798($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M798' || CIE10_2 = 'M798' || CIE10_3 = 'M798' || CIE10_4 = 'M798' || CIE10_5 = 'M798' || CIE10_6 = 'M798' || CIE10_7 = 'M798' || CIE10_8 = 'M798' || CIE10_9 = 'M798' || CIE10_10 = 'M798') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M799($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M799' || CIE10_2 = 'M799' || CIE10_3 = 'M799' || CIE10_4 = 'M799' || CIE10_5 = 'M799' || CIE10_6 = 'M799' || CIE10_7 = 'M799' || CIE10_8 = 'M799' || CIE10_9 = 'M799' || CIE10_10 = 'M799') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M800($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M800' || CIE10_2 = 'M800' || CIE10_3 = 'M008' || CIE10_4 = 'M800' || CIE10_5 = 'M800' || CIE10_6 = 'M800' || CIE10_7 = 'M800' || CIE10_8 = 'M008' || CIE10_9 = 'M800' || CIE10_10 = 'M800') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M801($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M801' || CIE10_2 = 'M801' || CIE10_3 = 'M801' || CIE10_4 = 'M801' || CIE10_5 = 'M801' || CIE10_6 = 'M801' || CIE10_7 = 'M801' || CIE10_8 = 'M801' || CIE10_9 = 'M801' || CIE10_10 = 'M801') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M802($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M802' || CIE10_2 = 'M802' || CIE10_3 = 'M802' || CIE10_4 = 'M802' || CIE10_5 = 'M802' || CIE10_6 = 'M802' || CIE10_7 = 'M802' || CIE10_8 = 'M802' || CIE10_9 = 'M802' || CIE10_10 = 'M802') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M803($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M803' || CIE10_2 = 'M803' || CIE10_3 = 'M803' || CIE10_4 = 'M803' || CIE10_5 = 'M803' || CIE10_6 = 'M803' || CIE10_7 = 'M803' || CIE10_8 = 'M803' || CIE10_9 = 'M803' || CIE10_10 = 'M803') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M804($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M804' || CIE10_2 = 'M804' || CIE10_3 = 'M804' || CIE10_4 = 'M804' || CIE10_5 = 'M804' || CIE10_6 = 'M804' || CIE10_7 = 'M804' || CIE10_8 = 'M804' || CIE10_9 = 'M804' || CIE10_10 = 'M804') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M805($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M805' || CIE10_2 = 'M805' || CIE10_3 = 'M805' || CIE10_4 = 'M805' || CIE10_5 = 'M805' || CIE10_6 = 'M805' || CIE10_7 = 'M805' || CIE10_8 = 'M805' || CIE10_9 = 'M805' || CIE10_10 = 'M805') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M808($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M808' || CIE10_2 = 'M808' || CIE10_3 = 'M808' || CIE10_4 = 'M808' || CIE10_5 = 'M808' || CIE10_6 = 'M808' || CIE10_7 = 'M808' || CIE10_8 = 'M808' || CIE10_9 = 'M808' || CIE10_10 = 'M808') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M809($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M809' || CIE10_2 = 'M809' || CIE10_3 = 'M809' || CIE10_4 = 'M809' || CIE10_5 = 'M809' || CIE10_6 = 'M809' || CIE10_7 = 'M809' || CIE10_8 = 'M809' || CIE10_9 = 'M809' || CIE10_10 = 'M809') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M810($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M810' || CIE10_2 = 'M810' || CIE10_3 = 'M810' || CIE10_4 = 'M810' || CIE10_5 = 'M810' || CIE10_6 = 'M810' || CIE10_7 = 'M810' || CIE10_8 = 'M810' || CIE10_9 = 'M810' || CIE10_10 = 'M810') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M811($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M811' || CIE10_2 = 'M811' || CIE10_3 = 'M811' || CIE10_4 = 'M811' || CIE10_5 = 'M811' || CIE10_6 = 'M811' || CIE10_7 = 'M811' || CIE10_8 = 'M811' || CIE10_9 = 'M811' || CIE10_10 = 'M811') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M812($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M812' || CIE10_2 = 'M812' || CIE10_3 = 'M812' || CIE10_4 = 'M812' || CIE10_5 = 'M812' || CIE10_6 = 'M812' || CIE10_7 = 'M812' || CIE10_8 = 'M812' || CIE10_9 = 'M812' || CIE10_10 = 'M812') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M813($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M813' || CIE10_2 = 'M813' || CIE10_3 = 'M813' || CIE10_4 = 'M813' || CIE10_5 = 'M813' || CIE10_6 = 'M813' || CIE10_7 = 'M813' || CIE10_8 = 'M813' || CIE10_9 = 'M813' || CIE10_10 = 'M813') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M814($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M814' || CIE10_2 = 'M814' || CIE10_3 = 'M814' || CIE10_4 = 'M814' || CIE10_5 = 'M814' || CIE10_6 = 'M814' || CIE10_7 = 'M814' || CIE10_8 = 'M814' || CIE10_9 = 'M814' || CIE10_10 = 'M814') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M815($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M815' || CIE10_2 = 'M815' || CIE10_3 = 'M815' || CIE10_4 = 'M815' || CIE10_5 = 'M815' || CIE10_6 = 'M815' || CIE10_7 = 'M815' || CIE10_8 = 'M815' || CIE10_9 = 'M815' || CIE10_10 = 'M815') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M816($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M816' || CIE10_2 = 'M816' || CIE10_3 = 'M816' || CIE10_4 = 'M816' || CIE10_5 = 'M816' || CIE10_6 = 'M816' || CIE10_7 = 'M816' || CIE10_8 = 'M816' || CIE10_9 = 'M816' || CIE10_10 = 'M816') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M818($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M818' || CIE10_2 = 'M818' || CIE10_3 = 'M818' || CIE10_4 = 'M818' || CIE10_5 = 'M818' || CIE10_6 = 'M818' || CIE10_7 = 'M818' || CIE10_8 = 'M818' || CIE10_9 = 'M818' || CIE10_10 = 'M818') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M819($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M819' || CIE10_2 = 'M819' || CIE10_3 = 'M819' || CIE10_4 = 'M819' || CIE10_5 = 'M819' || CIE10_6 = 'M819' || CIE10_7 = 'M819' || CIE10_8 = 'M819' || CIE10_9 = 'M819' || CIE10_10 = 'M819') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M820($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M820' || CIE10_2 = 'M820' || CIE10_3 = 'M820' || CIE10_4 = 'M820' || CIE10_5 = 'M820' || CIE10_6 = 'M820' || CIE10_7 = 'M820' || CIE10_8 = 'M820' || CIE10_9 = 'M820' || CIE10_10 = 'M820') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M821($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M821' || CIE10_2 = 'M821' || CIE10_3 = 'M821' || CIE10_4 = 'M821' || CIE10_5 = 'M821' || CIE10_6 = 'M821' || CIE10_7 = 'M821' || CIE10_8 = 'M821' || CIE10_9 = 'M821' || CIE10_10 = 'M821') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M828($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M828' || CIE10_2 = 'M828' || CIE10_3 = 'M828' || CIE10_4 = 'M828' || CIE10_5 = 'M828' || CIE10_6 = 'M828' || CIE10_7 = 'M828' || CIE10_8 = 'M828' || CIE10_9 = 'M828' || CIE10_10 = 'M828') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M830($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M830' || CIE10_2 = 'M830' || CIE10_3 = 'M830' || CIE10_4 = 'M830' || CIE10_5 = 'M830' || CIE10_6 = 'M830' || CIE10_7 = 'M830' || CIE10_8 = 'M830' || CIE10_9 = 'M830' || CIE10_10 = 'M830') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M831($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M831' || CIE10_2 = 'M831' || CIE10_3 = 'M831' || CIE10_4 = 'M831' || CIE10_5 = 'M831' || CIE10_6 = 'M831' || CIE10_7 = 'M831' || CIE10_8 = 'M831' || CIE10_9 = 'M831' || CIE10_10 = 'M831') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M832($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M832' || CIE10_2 = 'M832' || CIE10_3 = 'M832' || CIE10_4 = 'M832' || CIE10_5 = 'M832' || CIE10_6 = 'M832' || CIE10_7 = 'M832' || CIE10_8 = 'M832' || CIE10_9 = 'M832' || CIE10_10 = 'M832') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M833($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M833' || CIE10_2 = 'M833' || CIE10_3 = 'M833' || CIE10_4 = 'M833' || CIE10_5 = 'M833' || CIE10_6 = 'M833' || CIE10_7 = 'M833' || CIE10_8 = 'M833' || CIE10_9 = 'M833' || CIE10_10 = 'M833') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M834($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M834' || CIE10_2 = 'M834' || CIE10_3 = 'M834' || CIE10_4 = 'M834' || CIE10_5 = 'M834' || CIE10_6 = 'M834' || CIE10_7 = 'M834' || CIE10_8 = 'M834' || CIE10_9 = 'M834' || CIE10_10 = 'M834') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M835($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M835' || CIE10_2 = 'M835' || CIE10_3 = 'M835' || CIE10_4 = 'M835' || CIE10_5 = 'M835' || CIE10_6 = 'M835' || CIE10_7 = 'M835' || CIE10_8 = 'M835' || CIE10_9 = 'M835' || CIE10_10 = 'M835') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M838($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M838' || CIE10_2 = 'M838' || CIE10_3 = 'M838' || CIE10_4 = 'M838' || CIE10_5 = 'M838' || CIE10_6 = 'M838' || CIE10_7 = 'M838' || CIE10_8 = 'M838' || CIE10_9 = 'M838' || CIE10_10 = 'M838') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M839($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M839' || CIE10_2 = 'M839' || CIE10_3 = 'M839' || CIE10_4 = 'M839' || CIE10_5 = 'M839' || CIE10_6 = 'M839' || CIE10_7 = 'M839' || CIE10_8 = 'M839' || CIE10_9 = 'M839' || CIE10_10 = 'M839') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M840($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M840' || CIE10_2 = 'M840' || CIE10_3 = 'M840' || CIE10_4 = 'M840' || CIE10_5 = 'M840' || CIE10_6 = 'M840' || CIE10_7 = 'M840' || CIE10_8 = 'M840' || CIE10_9 = 'M840' || CIE10_10 = 'M840') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M841($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M841' || CIE10_2 = 'M841' || CIE10_3 = 'M841' || CIE10_4 = 'M841' || CIE10_5 = 'M841' || CIE10_6 = 'M841' || CIE10_7 = 'M841' || CIE10_8 = 'M841' || CIE10_9 = 'M841' || CIE10_10 = 'M841') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M842($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M842' || CIE10_2 = 'M842' || CIE10_3 = 'M842' || CIE10_4 = 'M842' || CIE10_5 = 'M842' || CIE10_6 = 'M842' || CIE10_7 = 'M842' || CIE10_8 = 'M842' || CIE10_9 = 'M842' || CIE10_10 = 'M842') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M843($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M843' || CIE10_2 = 'M843' || CIE10_3 = 'M843' || CIE10_4 = 'M843' || CIE10_5 = 'M843' || CIE10_6 = 'M843' || CIE10_7 = 'M843' || CIE10_8 = 'M843' || CIE10_9 = 'M843' || CIE10_10 = 'M843') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M844($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M844' || CIE10_2 = 'M844' || CIE10_3 = 'M844' || CIE10_4 = 'M844' || CIE10_5 = 'M844' || CIE10_6 = 'M844' || CIE10_7 = 'M844' || CIE10_8 = 'M844' || CIE10_9 = 'M844' || CIE10_10 = 'M844') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M848($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M848' || CIE10_2 = 'M848' || CIE10_3 = 'M848' || CIE10_4 = 'M848' || CIE10_5 = 'M848' || CIE10_6 = 'M848' || CIE10_7 = 'M848' || CIE10_8 = 'M848' || CIE10_9 = 'M848' || CIE10_10 = 'M848') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M849($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M849' || CIE10_2 = 'M849' || CIE10_3 = 'M849' || CIE10_4 = 'M849' || CIE10_5 = 'M849' || CIE10_6 = 'M849' || CIE10_7 = 'M849' || CIE10_8 = 'M849' || CIE10_9 = 'M849' || CIE10_10 = 'M849') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M850($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M850' || CIE10_2 = 'M850' || CIE10_3 = 'M850' || CIE10_4 = 'M850' || CIE10_5 = 'M850' || CIE10_6 = 'M850' || CIE10_7 = 'M850' || CIE10_8 = 'M850' || CIE10_9 = 'M850' || CIE10_10 = 'M850') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M851($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M851' || CIE10_2 = 'M851' || CIE10_3 = 'M851' || CIE10_4 = 'M851' || CIE10_5 = 'M851' || CIE10_6 = 'M851' || CIE10_7 = 'M851' || CIE10_8 = 'M851' || CIE10_9 = 'M851' || CIE10_10 = 'M851') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M852($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M852' || CIE10_2 = 'M852' || CIE10_3 = 'M852' || CIE10_4 = 'M852' || CIE10_5 = 'M852' || CIE10_6 = 'M852' || CIE10_7 = 'M852' || CIE10_8 = 'M852' || CIE10_9 = 'M852' || CIE10_10 = 'M852') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function M853($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M853' || CIE10_2 = 'M853' || CIE10_3 = 'M853' || CIE10_4 = 'M853' || CIE10_5 = 'M853' || CIE10_6 = 'M853' || CIE10_7 = 'M853' || CIE10_8 = 'M853' || CIE10_9 = 'M853' || CIE10_10 = 'M853') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M854($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M854' || CIE10_2 = 'M854' || CIE10_3 = 'M854' || CIE10_4 = 'M854' || CIE10_5 = 'M854' || CIE10_6 = 'M854' || CIE10_7 = 'M854' || CIE10_8 = 'M854' || CIE10_9= 'M854' || CIE10_10 = 'M854') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M855($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M855' || CIE10_2 = 'M855' || CIE10_3 = 'M855' || CIE10_4 = 'M855' || CIE10_5 = 'M855' || CIE10_6 = 'M855' || CIE10_7 = 'M855' || CIE10_8 = 'M855' || CIE10_9 = 'M855' || CIE10_10 = 'M855') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M856($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M856' || CIE10_2 = 'M856' || CIE10_3 = 'M856' || CIE10_4 = 'M856' || CIE10_5 = 'M856' || CIE10_6 = 'M856' || CIE10_7 = 'M856' || CIE10_8 = 'M856' || CIE10_9 = 'M856' || CIE10_10 = 'M856') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M858($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M858' || CIE10_2 = 'M858' || CIE10_3 = 'M858' || CIE10_4 = 'M858' || CIE10_5 = 'M858' || CIE10_6 = 'M858' || CIE10_7 = 'M858' || CIE10_8 = 'M858' || CIE10_9 = 'M858' || CIE10_10 = 'M858') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M859($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M859' || CIE10_2 = 'M859' || CIE10_3 = 'M859' || CIE10_4 = 'M859' || CIE10_5 = 'M859' || CIE10_6 = 'M859' || CIE10_7 = 'M859' || CIE10_8 = 'M859' || CIE10_9 = 'M859' || CIE10_10 = 'M859') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M860($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M860' || CIE10_2 = 'M860' || CIE10_3 = 'M860' || CIE10_4 = 'M860' || CIE10_5 = 'M860' || CIE10_6 = 'M860' || CIE10_7 = 'M860' || CIE10_8 = 'M860' || CIE10_9 = 'M860' || CIE10_10 = 'M860') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M861($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M861' || CIE10_2 = 'M861' || CIE10_3 = 'M861' || CIE10_4 = 'M861' || CIE10_5 = 'M861' || CIE10_6 = 'M861' || CIE10_7 = 'M861' || CIE10_8 = 'M861' || CIE10_9 = 'M861' || CIE10_10 = 'M861') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M862($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M862' || CIE10_2 = 'M862' || CIE10_3 = 'M862' || CIE10_4 = 'M862' || CIE10_5 = 'M862' || CIE10_6 = 'M862' || CIE10_7 = 'M862' || CIE10_8 = 'M862' || CIE10_9 = 'M862' || CIE10_10 = 'M862') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M863($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M863' || CIE10_2 = 'M863' || CIE10_3 = 'M863' || CIE10_4 = 'M863' || CIE10_5 = 'M863' || CIE10_6 = 'M863' || CIE10_7 = 'M863' || CIE10_8 = 'M863' || CIE10_9 = 'M863' || CIE10_10 = 'M863') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M864($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M864' || CIE10_2 = 'M864' || CIE10_3 = 'M864' || CIE10_4 = 'M864' || CIE10_5 = 'M864' || CIE10_6 = 'M864' || CIE10_7 = 'M864' || CIE10_8 = 'M864' || CIE10_9 = 'M864' || CIE10_10 = 'M864') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M865($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M865' || CIE10_2 = 'M865' || CIE10_3 = 'M865' || CIE10_4 = 'M865' || CIE10_5 = 'M865' || CIE10_6 = 'M865' || CIE10_7 = 'M865' || CIE10_8 = 'M865' || CIE10_9 = 'M865' || CIE10_10 = 'M865') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M866($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M866' || CIE10_2 = 'M866' || CIE10_3 = 'M866' || CIE10_4 = 'M866' || CIE10_5 = 'M866' || CIE10_6 = 'M866' || CIE10_7 = 'M866' || CIE10_8 = 'M866' || CIE10_9 = 'M866' || CIE10_10 = 'M866') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M868($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M868' || CIE10_2 = 'M868' || CIE10_3 = 'M868' || CIE10_4 = 'M868' || CIE10_5 = 'M868' || CIE10_6 = 'M868' || CIE10_7 = 'M868' || CIE10_8 = 'M868' || CIE10_9 = 'M868' || CIE10_10 = 'M868') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M869($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M869' || CIE10_2 = 'M869' || CIE10_3 = 'M869' || CIE10_4 = 'M869' || CIE10_5 = 'M869' || CIE10_6 = 'M869' || CIE10_7 = 'M869' || CIE10_8 = 'M869' || CIE10_9 = 'M869' || CIE10_10 = 'M869') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M870($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M870' || CIE10_2 = 'M870' || CIE10_3 = 'M870' || CIE10_4 = 'M870' || CIE10_5 = 'M870' || CIE10_6 = 'M870' || CIE10_7 = 'M870' || CIE10_8 = 'M870' || CIE10_9 = 'M870' || CIE10_10 = 'M870') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M871($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M871' || CIE10_2 = 'M871' || CIE10_3 = 'M871' || CIE10_4 = 'M871' || CIE10_5 = 'M871' || CIE10_6 = 'M871' || CIE10_7 = 'M871' || CIE10_8 = 'M871' || CIE10_9 = 'M871' || CIE10_10 = 'M871') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M872($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M872' || CIE10_2 = 'M872' || CIE10_3 = 'M872' || CIE10_4 = 'M872' || CIE10_5 = 'M872' || CIE10_6 = 'M872' || CIE10_7 = 'M872' || CIE10_8 = 'M872' || CIE10_9 = 'M872' || CIE10_10 = 'M872') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M873($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M873' || CIE10_2 = 'M873' || CIE10_3 = 'M873' || CIE10_4 = 'M873' || CIE10_5 = 'M873' || CIE10_6 = 'M873' || CIE10_7 = 'M873' || CIE10_8 = 'M873' || CIE10_9 = 'M873' || CIE10_10 = 'M873') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M878($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M878' || CIE10_2 = 'M878' || CIE10_3 = 'M878' || CIE10_4 = 'M878' || CIE10_5 = 'M878' || CIE10_6 = 'M878' || CIE10_7 = 'M878' || CIE10_8 = 'M878' || CIE10_9 = 'M878' || CIE10_10 = 'M878') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M879($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M879' || CIE10_2 = 'M879' || CIE10_3 = 'M879' || CIE10_4 = 'M879' || CIE10_5 = 'M879' || CIE10_6 = 'M879' || CIE10_7 = 'M879' || CIE10_8 = 'M879' || CIE10_9 = 'M879' || CIE10_10 = 'M879') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M880($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M880' || CIE10_2 = 'M880' || CIE10_3 = 'M880' || CIE10_4 = 'M880' || CIE10_5 = 'M880' || CIE10_6 = 'M880' || CIE10_7 = 'M880' || CIE10_8 = 'M880' || CIE10_9 = 'M880' || CIE10_10 = 'M880') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M888($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M888' || CIE10_2 = 'M888' || CIE10_3 = 'M888' || CIE10_4 = 'M888' || CIE10_5 = 'M888' || CIE10_6 = 'M888' || CIE10_7 = 'M888' || CIE10_8 = 'M888' || CIE10_9 = 'M888' || CIE10_10 = 'M888') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M889($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M889' || CIE10_2 = 'M889' || CIE10_3 = 'M889' || CIE10_4 = 'M889' || CIE10_5 = 'M889' || CIE10_6 = 'M889' || CIE10_7 = 'M889' || CIE10_8 = 'M889' || CIE10_9 = 'M889' || CIE10_10 = 'M889') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M890($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M890' || CIE10_2 = 'M890' || CIE10_3 = 'M890' || CIE10_4 = 'M890' || CIE10_5 = 'M890' || CIE10_6 = 'M890' || CIE10_7 = 'M890' || CIE10_8 = 'M890' || CIE10_9 = 'M890' || CIE10_10 = 'M890') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M891($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M891' || CIE10_2 = 'M891' || CIE10_3 = 'M891' || CIE10_4 = 'M891' || CIE10_5 = 'M891' || CIE10_6 = 'M891' || CIE10_7 = 'M891' || CIE10_8 = 'M891' || CIE10_9 = 'M891' || CIE10_10 = 'M891') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M892($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M892' || CIE10_2 = 'M892' || CIE10_3 = 'M892' || CIE10_4 = 'M892' || CIE10_5 = 'M892' || CIE10_6 = 'M892' || CIE10_7 = 'M892' || CIE10_8 = 'M892' || CIE10_9 = 'M892' || CIE10_10 = 'M892') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M893($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M893' || CIE10_2 = 'M893' || CIE10_3 = 'M893' || CIE10_4 = 'M893' || CIE10_5 = 'M893' || CIE10_6 = 'M893' || CIE10_7 = 'M893' || CIE10_8 = 'M893' || CIE10_9 = 'M893' || CIE10_10 = 'M893') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M894($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M894' || CIE10_2 = 'M894' || CIE10_3 = 'M894' || CIE10_4 = 'M894' || CIE10_5 = 'M894' || CIE10_6 = 'M894' || CIE10_7 = 'M894' || CIE10_8 = 'M894' || CIE10_9 = 'M894' || CIE10_10 = 'M894') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M895($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M895' || CIE10_2 = 'M895' || CIE10_3 = 'M895' || CIE10_4 = 'M895' || CIE10_5 = 'M895' || CIE10_6 = 'M895' || CIE10_7 = 'M895' || CIE10_8 = 'M895' || CIE10_9 = 'M895' || CIE10_10 = 'M895') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M896($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M896' || CIE10_2 = 'M896' || CIE10_3 = 'M896' || CIE10_4 = 'M896' || CIE10_5 = 'M896' || CIE10_6 = 'M896' || CIE10_7 = 'M896' || CIE10_8 = 'M896' || CIE10_9 = 'M896' || CIE10_10 = 'M896') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M898($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M898' || CIE10_2 = 'M898' || CIE10_3 = 'M898' || CIE10_4 = 'M898' || CIE10_5 = 'M898' || CIE10_6 = 'M898' || CIE10_7 = 'M898' || CIE10_8 = 'M898' || CIE10_9 = 'M898' || CIE10_10 = 'M898') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function M899($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M899' || CIE10_2 = 'M899' || CIE10_3 = 'M899' || CIE10_4 = 'M899' || CIE10_5 = 'M899' || CIE10_6 = 'M899' || CIE10_7 = 'M899' || CIE10_8 = 'M899' || CIE10_9 = 'M899' || CIE10_10 = 'M899') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M900($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M900' || CIE10_2 = 'M900' || CIE10_3 = 'M900' || CIE10_4 = 'M900' || CIE10_5 = 'M900' || CIE10_6 = 'M900' || CIE10_7 = 'M900' || CIE10_8 = 'M900' || CIE10_9 = 'M900' || CIE10_10 = 'M900') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M901($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M901' || CIE10_2 = 'M901' || CIE10_3 = 'M901' || CIE10_4 = 'M901' || CIE10_5 = 'M901' || CIE10_6 = 'M901' || CIE10_7 = 'M901' || CIE10_8 = 'M901' || CIE10_9 = 'M901' || CIE10_10 = 'M901') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M902($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M902' || CIE10_2 = 'M902' || CIE10_3 = 'M902' || CIE10_4 = 'M902' || CIE10_5 = 'M902' || CIE10_6 = 'M902' || CIE10_7 = 'M902' || CIE10_8 = 'M902' || CIE10_9 = 'M902' || CIE10_10 = 'M902') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M903($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M903' || CIE10_2 = 'M903' || CIE10_3 = 'M903' || CIE10_4 = 'M903' || CIE10_5 = 'M903' || CIE10_6 = 'M903' || CIE10_7 = 'M903' || CIE10_8 = 'M903' || CIE10_9 = 'M903' || CIE10_10 = 'M903') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M904($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M904' || CIE10_2 = 'M904' || CIE10_3 = 'M904' || CIE10_4 = 'M904' || CIE10_5 = 'M904' || CIE10_6 = 'M904' || CIE10_7 = 'M904' || CIE10_8 = 'M904' || CIE10_9 = 'M904' || CIE10_10 = 'M904') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M905($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M905' || CIE10_2 = 'M905' || CIE10_3 = 'M905' || CIE10_4 = 'M905' || CIE10_5 = 'M905' || CIE10_6 = 'M905' || CIE10_7 = 'M905' || CIE10_8 = 'M905' || CIE10_9 = 'M905' || CIE10_10 = 'M905') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M906($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M906' || CIE10_2 = 'M906' || CIE10_3 = 'M906' || CIE10_4 = 'M906' || CIE10_5 = 'M906' || CIE10_6 = 'M906' || CIE10_7 = 'M906' || CIE10_8 = 'M906' || CIE10_9 = 'M906' || CIE10_10 = 'M906') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M907($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M907' || CIE10_2 = 'M907' || CIE10_3 = 'M907' || CIE10_4 = 'M907' || CIE10_5 = 'M907' || CIE10_6 = 'M907' || CIE10_7 = 'M907' || CIE10_8 = 'M907' || CIE10_9 = 'M907' || CIE10_10 = 'M907') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M908($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M908' || CIE10_2 = 'M908' || CIE10_3 = 'M908' || CIE10_4 = 'M908' || CIE10_5 = 'M908' || CIE10_6 = 'M908' || CIE10_7 = 'M908' || CIE10_8 = 'M908' || CIE10_9 = 'M908' || CIE10_10 = 'M908') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M910($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M910' || CIE10_2 = 'M910' || CIE10_3 = 'M910' || CIE10_4 = 'M910' || CIE10_5 = 'M910' || CIE10_6 = 'M910' || CIE10_7 = 'M910' || CIE10_8 = 'M910' || CIE10_9 = 'M910' || CIE10_10 = 'M910') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M911($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M911' || CIE10_2 = 'M911' || CIE10_3 = 'M911' || CIE10_4 = 'M911' || CIE10_5 = 'M911' || CIE10_6 = 'M911' || CIE10_7 = 'M911' || CIE10_8 = 'M911' || CIE10_9 = 'M911' || CIE10_10 = 'M911') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M912($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M912' || CIE10_2 = 'M912' || CIE10_3 = 'M912' || CIE10_4 = 'M912' || CIE10_5 = 'M912' || CIE10_6 = 'M912' || CIE10_7 = 'M912' || CIE10_8 = 'M912' || CIE10_9 = 'M912' || CIE10_10 = 'M912') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M913($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M913' || CIE10_2 = 'M913' || CIE10_3 = 'M913' || CIE10_4 = 'M913' || CIE10_5 = 'M913' || CIE10_6 = 'M913' || CIE10_7 = 'M913' || CIE10_8 = 'M913' || CIE10_9 = 'M913' || CIE10_10 = 'M913') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M918($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M918' || CIE10_2 = 'M918' || CIE10_3 = 'M918' || CIE10_4 = 'M918' || CIE10_5 = 'M918' || CIE10_6 = 'M918' || CIE10_7 = 'M918' || CIE10_8 = 'M918' || CIE10_9 = 'M918' || CIE10_10 = 'M918') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M919($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M919' || CIE10_2 = 'M919' || CIE10_3 = 'M919' || CIE10_4 = 'M919' || CIE10_5 = 'M919' || CIE10_6 = 'M919' || CIE10_7 = 'M919' || CIE10_8 = 'M919' || CIE10_9 = 'M919' || CIE10_10 = 'M919') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M920($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M920' || CIE10_2 = 'M920' || CIE10_3 = 'M920' || CIE10_4 = 'M920' || CIE10_5 = 'M920' || CIE10_6 = 'M920' || CIE10_7 = 'M920' || CIE10_8 = 'M920' || CIE10_9 = 'M920' || CIE10_10 = 'M920') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M921($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M921' || CIE10_2 = 'M921' || CIE10_3 = 'M921' || CIE10_4 = 'M921' || CIE10_5 = 'M921' || CIE10_6 = 'M921' || CIE10_7 = 'M921' || CIE10_8 = 'M921' || CIE10_9 = 'M921' || CIE10_10 = 'M921') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M922($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M922' || CIE10_2 = 'M922' || CIE10_3 = 'M922' || CIE10_4 = 'M922' || CIE10_5 = 'M922' || CIE10_6 = 'M922' || CIE10_7 = 'M922' || CIE10_8 = 'M922' || CIE10_9 = 'M922' || CIE10_10 = 'M922') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M923($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M923' || CIE10_2 = 'M923' || CIE10_3 = 'M923' || CIE10_4 = 'M923' || CIE10_5 = 'M923' || CIE10_6 = 'M923' || CIE10_7 = 'M923' || CIE10_8 = 'M923' || CIE10_9 = 'M923' || CIE10_10 = 'M923') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M924($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M924' || CIE10_2 = 'M924' || CIE10_3 = 'M924' || CIE10_4 = 'M924' || CIE10_5 = 'M924' || CIE10_6 = 'M924' || CIE10_7 = 'M924' || CIE10_8 = 'M924' || CIE10_9 = 'M924' || CIE10_10 = 'M924') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M925($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M925' || CIE10_2 = 'M925' || CIE10_3 = 'M925' || CIE10_4 = 'M925' || CIE10_5 = 'M925' || CIE10_6 = 'M925' || CIE10_7 = 'M925' || CIE10_8 = 'M925' || CIE10_9 = 'M925' || CIE10_10 = 'M925') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M926($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M926' || CIE10_2 = 'M926' || CIE10_3 = 'M926' || CIE10_4 = 'M926' || CIE10_5 = 'M926' || CIE10_6 = 'M926' || CIE10_7 = 'M926' || CIE10_8 = 'M926' || CIE10_9 = 'M926' || CIE10_10 = 'M926') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M927($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M927' || CIE10_2 = 'M927' || CIE10_3 = 'M927' || CIE10_4 = 'M927' || CIE10_5 = 'M927' || CIE10_6 = 'M927' || CIE10_7 = 'M927' || CIE10_8 = 'M927' || CIE10_9 = 'M927' || CIE10_10 = 'M927') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M928($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M928' || CIE10_2 = 'M928' || CIE10_3 = 'M928' || CIE10_4 = 'M928' || CIE10_5 = 'M928' || CIE10_6 = 'M928' || CIE10_7 = 'M928' || CIE10_8 = 'M928' || CIE10_9 = 'M928' || CIE10_10 = 'M928') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M929($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M929' || CIE10_2 = 'M929' || CIE10_3 = 'M929' || CIE10_4 = 'M929' || CIE10_5 = 'M929' || CIE10_6 = 'M929' || CIE10_7 = 'M929' || CIE10_8 = 'M929' || CIE10_9 = 'M929' || CIE10_10 = 'M929') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M930($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M930' || CIE10_2 = 'M930' || CIE10_3 = 'M930' || CIE10_4 = 'M930' || CIE10_5 = 'M930' || CIE10_6 = 'M930' || CIE10_7 = 'M930' || CIE10_8 = 'M930' || CIE10_9 = 'M930' || CIE10_10 = 'M930') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M931($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M931' || CIE10_2 = 'M931' || CIE10_3 = 'M931' || CIE10_4 = 'M931' || CIE10_5 = 'M931' || CIE10_6 = 'M931' || CIE10_7 = 'M931' || CIE10_8 = 'M931' || CIE10_9 = 'M931' || CIE10_10 = 'M931') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M932($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M932' || CIE10_2 = 'M932' || CIE10_3 = 'M932' || CIE10_4 = 'M932' || CIE10_5 = 'M932' || CIE10_6 = 'M932' || CIE10_7 = 'M932' || CIE10_8 = 'M932' || CIE10_9 = 'M932' || CIE10_10 = 'M932') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M938($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M938' || CIE10_2 = 'M938' || CIE10_3 = 'M938' || CIE10_4 = 'M938' || CIE10_5 = 'M938' || CIE10_6 = 'M938' || CIE10_7 = 'M938' || CIE10_8 = 'M938' || CIE10_9 = 'M938' || CIE10_10 = 'M938') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M939($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M939' || CIE10_2 = 'M939' || CIE10_3 = 'M939' || CIE10_4 = 'M939' || CIE10_5 = 'M939' || CIE10_6 = 'M939' || CIE10_7 = 'M939' || CIE10_8 = 'M939' || CIE10_9 = 'M939' || CIE10_10 = 'M939') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M940($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M940' || CIE10_2 = 'M940' || CIE10_3 = 'M940' || CIE10_4 = 'M940' || CIE10_5 = 'M940' || CIE10_6 = 'M940' || CIE10_7 = 'M940' || CIE10_8 = 'M940' || CIE10_9 = 'M940' || CIE10_10 = 'M940') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M941($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M941' || CIE10_2 = 'M941' || CIE10_3 = 'M941' || CIE10_4 = 'M941' || CIE10_5 = 'M941' || CIE10_6 = 'M941' || CIE10_7 = 'M941' || CIE10_8 = 'M941' || CIE10_9 = 'M941' || CIE10_10 = 'M941') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M942($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M942' || CIE10_2 = 'M942' || CIE10_3 = 'M942' || CIE10_4 = 'M942' || CIE10_5 = 'M942' || CIE10_6 = 'M942' || CIE10_7 = 'M942' || CIE10_8 = 'M942' || CIE10_9 = 'M942' || CIE10_10 = 'M942') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M943($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M943' || CIE10_2 = 'M943' || CIE10_3 = 'M943' || CIE10_4 = 'M943' || CIE10_5 = 'M943' || CIE10_6 = 'M943' || CIE10_7 = 'M943' || CIE10_8 = 'M943' || CIE10_9 = 'M943' || CIE10_10 = 'M943') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M948($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M948' || CIE10_2 = 'M948' || CIE10_3 = 'M948' || CIE10_4 = 'M948' || CIE10_5 = 'M948' || CIE10_6 = 'M948' || CIE10_7 = 'M948' || CIE10_8 = 'M948' || CIE10_9 = 'M948' || CIE10_10 = 'M948') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M949($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M949' || CIE10_2 = 'M949' || CIE10_3 = 'M949' || CIE10_4 = 'M949' || CIE10_5 = 'M949' || CIE10_6 = 'M949' || CIE10_7 = 'M949' || CIE10_8 = 'M949' || CIE10_9= 'M949' || CIE10_10 = 'M949') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M950($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M950' || CIE10_2 = 'M950' || CIE10_3 = 'M950' || CIE10_4 = 'M950' || CIE10_5 = 'M950' || CIE10_6 = 'M950' || CIE10_7 = 'M950' || CIE10_8 = 'M950' || CIE10_9 = 'M950' || CIE10_10 = 'M950') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M951($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M951' || CIE10_2 = 'M951' || CIE10_3 = 'M951' || CIE10_4 = 'M951' || CIE10_5 = 'M951' || CIE10_6 = 'M951' || CIE10_7 = 'M951' || CIE10_8 = 'M951' || CIE10_9 = 'M951' || CIE10_10 = 'M951') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M952($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M952' || CIE10_2 = 'M952' || CIE10_3 = 'M952' || CIE10_4 = 'M952' || CIE10_5 = 'M952' || CIE10_6 = 'M952' || CIE10_7 = 'M952' || CIE10_8 = 'M952' || CIE10_9 = 'M952' || CIE10_10 = 'M952') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M953($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M953' || CIE10_2 = 'M953' || CIE10_3 = 'M953' || CIE10_4 = 'M953' || CIE10_5 = 'M953' || CIE10_6 = 'M953' || CIE10_7 = 'M953' || CIE10_8= 'M953' || CIE10_9 = 'M953' || CIE10_10 = 'M953') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M954($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M954' || CIE10_2 = 'M954' || CIE10_3 = 'M954' || CIE10_4 = 'M954' || CIE10_5 = 'M954' || CIE10_6 = 'M954' || CIE10_7 = 'M954' || CIE10_8 = 'M954' || CIE10_9 = 'M954' || CIE10_10 = 'M954') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M955($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M955' || CIE10_2 = 'M955' || CIE10_3 = 'M955' || CIE10_4 = 'M955' || CIE10_5 = 'M955' || CIE10_6 = 'M955' || CIE10_7 = 'M955' || CIE10_8 = 'M955' || CIE10_9 = 'M955' || CIE10_10 = 'M955') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M958($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M958' || CIE10_2 = 'M958' || CIE10_3 = 'M958' || CIE10_4 = 'M958' || CIE10_5 = 'M958' || CIE10_6 = 'M958' || CIE10_7 = 'M958' || CIE10_8 = 'M958' || CIE10_9 = 'M958' || CIE10_10 = 'M958') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M959($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M959' || CIE10_2 = 'M959' || CIE10_3 = 'M959' || CIE10_4 = 'M959' || CIE10_5 = 'M959' || CIE10_6 = 'M959' || CIE10_7 = 'M959' || CIE10_8 = 'M959' || CIE10_9 = 'M959' || CIE10_10 = 'M959') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M960($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M960' || CIE10_2 = 'M960' || CIE10_3 = 'M960' || CIE10_4 = 'M960' || CIE10_5 = 'M960' || CIE10_6 = 'M960' || CIE10_7 = 'M960' || CIE10_8 = 'M960' || CIE10_9 = 'M960' || CIE10_10 = 'M960') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M961($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M961' || CIE10_2 = 'M961' || CIE10_3 = 'M961' || CIE10_4 = 'M961' || CIE10_5 = 'M961' || CIE10_6 = 'M961' || CIE10_7 = 'M961' || CIE10_8 = 'M961' || CIE10_9 = 'M961' || CIE10_10 = 'M961') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M962($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M962' || CIE10_2 = 'M962' || CIE10_3 = 'M962' || CIE10_4 = 'M962' || CIE10_5 = 'M962' || CIE10_6 = 'M962' || CIE10_7 = 'M962' || CIE10_8 = 'M962' || CIE10_9 = 'M962' || CIE10_10 = 'M962') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M963($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M963' || CIE10_2 = 'M963' || CIE10_3 = 'M963' || CIE10_4 = 'M963' || CIE10_5 = 'M963' || CIE10_6 = 'M963' || CIE10_7 = 'M963' || CIE10_8 = 'M963' || CIE10_9 = 'M963' || CIE10_10 = 'M963') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M964($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M964' || CIE10_2 = 'M964' || CIE10_3 = 'M964' || CIE10_4 = 'M964' || CIE10_5 = 'M964' || CIE10_6 = 'M964' || CIE10_7 = 'M964' || CIE10_8 = 'M964' || CIE10_9 = 'M964' || CIE10_10 = 'M964') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M965($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M965' || CIE10_2 = 'M965' || CIE10_3 = 'M965' || CIE10_4 = 'M965' || CIE10_5 = 'M965' || CIE10_6 = 'M965' || CIE10_7 = 'M965' || CIE10_8 = 'M965' || CIE10_9 = 'M965' || CIE10_10 = 'M965') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M966($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M966' || CIE10_2 = 'M966' || CIE10_3 = 'M966' || CIE10_4 = 'M966' || CIE10_5 = 'M966' || CIE10_6 = 'M966' || CIE10_7 = 'M966' || CIE10_8 = 'M966' || CIE10_9 = 'M966' || CIE10_10 = 'M966') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M968($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M968' || CIE10_2 = 'M968' || CIE10_3 = 'M968' || CIE10_4 = 'M968' || CIE10_5 = 'M968' || CIE10_6 = 'M968' || CIE10_7 = 'M968' || CIE10_8 = 'M968' || CIE10_9 = 'M968' || CIE10_10 = 'M968') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M969($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M969' || CIE10_2 = 'M969' || CIE10_3 = 'M969' || CIE10_4 = 'M969' || CIE10_5 = 'M969' || CIE10_6 = 'M969' || CIE10_7 = 'M969' || CIE10_8 = 'M969' || CIE10_9 = 'M969' || CIE10_10 = 'M969') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M990($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M990' || CIE10_2 = 'M990' || CIE10_3 = 'M990' || CIE10_4 = 'M990' || CIE10_5 = 'M990' || CIE10_6 = 'M990' || CIE10_7 = 'M990' || CIE10_8 = 'M990' || CIE10_9 = 'M990' || CIE10_10 = 'M990') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M991($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M991' || CIE10_2 = 'M991' || CIE10_3 = 'M991' || CIE10_4 = 'M991' || CIE10_5 = 'M991' || CIE10_6 = 'M991' || CIE10_7 = 'M991' || CIE10_8 = 'M991' || CIE10_9 = 'M991' || CIE10_10 = 'M991') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M992($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M992' || CIE10_2 = 'M992' || CIE10_3 = 'M992' || CIE10_4 = 'M992' || CIE10_5 = 'M992' || CIE10_6 = 'M992' || CIE10_7 = 'M992' || CIE10_8 = 'M992' || CIE10_9 = 'M992' || CIE10_10 = 'M992') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M993($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M993' || CIE10_2 = 'M993' || CIE10_3 = 'M993' || CIE10_4 = 'M993' || CIE10_5 = 'M993' || CIE10_6 = 'M993' || CIE10_7 = 'M993' || CIE10_8 = 'M993' || CIE10_9 = 'M993' || CIE10_10 = 'M993') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M994($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M994' || CIE10_2 = 'M994' || CIE10_3 = 'M994' || CIE10_4 = 'M994' || CIE10_5 = 'M994' || CIE10_6 = 'M994' || CIE10_7 = 'M994' || CIE10_8 = 'M994' || CIE10_9 = 'M994' || CIE10_10 = 'M994') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M995($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M995' || CIE10_2 = 'M995' || CIE10_3 = 'M995' || CIE10_4 = 'M995' || CIE10_5 = 'M995' || CIE10_6 = 'M995' || CIE10_7 = 'M995' || CIE10_8 = 'M995' || CIE10_9 = 'M995' || CIE10_10 = 'M995') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M996($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M996' || CIE10_2 = 'M996' || CIE10_3 = 'M996' || CIE10_4 = 'M996' || CIE10_5 = 'M996' || CIE10_6 = 'M996' || CIE10_7 = 'M996' || CIE10_8 = 'M996' || CIE10_9 = 'M996' || CIE10_10 = 'M996') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M997($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M997' || CIE10_2 = 'M997' || CIE10_3 = 'M997' || CIE10_4 = 'M997' || CIE10_5 = 'M997' || CIE10_6 = 'M997' || CIE10_7 = 'M997' || CIE10_8 = 'M997' || CIE10_9 = 'M997' || CIE10_10 = 'M997') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M998($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M998' || CIE10_2 = 'M998' || CIE10_3 = 'M998' || CIE10_4 = 'M998' || CIE10_5 = 'M998' || CIE10_6 = 'M998' || CIE10_7 = 'M998' || CIE10_8 = 'M998' || CIE10_9 = 'M998' || CIE10_10 = 'M998') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function M999($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M999' || CIE10_2 = 'M999' || CIE10_3 = 'M999' || CIE10_4 = 'M999' || CIE10_5 = 'M999' || CIE10_6 = 'M999' || CIE10_7 = 'M999' || CIE10_8 = 'M999' || CIE10_9 = 'M999' || CIE10_10 = 'M999') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function M00($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M00' || CIE10_2 = 'M00' || CIE10_3 = 'M00' || CIE10_4 = 'M00' || CIE10_5 = 'M00' || CIE10_6 = 'M00' || CIE10_7 = 'M00' || CIE10_8 = 'M00' || CIE10_9 = 'M00' || CIE10_10 = 'M00') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M01($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M01' || CIE10_2 = 'M01' || CIE10_3 = 'M01' || CIE10_4 = 'M01' || CIE10_5 = 'M01' || CIE10_6 = 'M01' || CIE10_7 = 'M01' || CIE10_8 = 'M01' || CIE10_9 = 'M01' || CIE10_10 = 'M01') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M02($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M02' || CIE10_2 = 'M02' || CIE10_3 = 'M02' || CIE10_4 = 'M02' || CIE10_5 = 'M02' || CIE10_6 = 'M02' || CIE10_7 = 'M02' || CIE10_8 = 'M02' || CIE10_9 = 'M02' || CIE10_10 = 'M02') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M03($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M03' || CIE10_2 = 'M03' || CIE10_3 = 'M03' || CIE10_4 = 'M03' || CIE10_5 = 'M03' || CIE10_6 = 'M03' || CIE10_7 = 'M03' || CIE10_8 = 'M03' || CIE10_9 = 'M03' || CIE10_10 = 'M03') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M05($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M05' || CIE10_2 = 'M05' || CIE10_3 = 'M05' || CIE10_4 = 'M05' || CIE10_5 = 'M05' || CIE10_6 = 'M05' || CIE10_7 = 'M05' || CIE10_8 = 'M05' || CIE10_9 = 'M05' || CIE10_10 = 'M05') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M06($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M06' || CIE10_2 = 'M06' || CIE10_3 = 'M06' || CIE10_4 = 'M06' || CIE10_5 = 'M06' || CIE10_6 = 'M06' || CIE10_7 = 'M06' || CIE10_8 = 'M06' || CIE10_9= 'M06' || CIE10_10 = 'M06') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M07($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M07' || CIE10_2 = 'M07' || CIE10_3 = 'M07' || CIE10_4 = 'M07' || CIE10_5 = 'M07' || CIE10_6 = 'M07' || CIE10_7 = 'M07' || CIE10_8 = 'M07' || CIE10_9 = 'M07' || CIE10_10 = 'M07') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M08($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M08' || CIE10_2 = 'M08' || CIE10_3 = 'M08' || CIE10_4 = 'M08' || CIE10_5 = 'M08' || CIE10_6 = 'M08' || CIE10_7 = 'M08' || CIE10_8 = 'M08' || CIE10_9 = 'M08' || CIE10_10 = 'M08') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M09($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M09' || CIE10_2 = 'M09' || CIE10_3 = 'M09' || CIE10_4 = 'M09' || CIE10_5 = 'M09' || CIE10_6 = 'M09' || CIE10_7 = 'M09' || CIE10_8 = 'M09' || CIE10_9 = 'M09' || CIE10_10 = 'M09') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M10($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M10' || CIE10_2 = 'M10' || CIE10_3 = 'M10' || CIE10_4 = 'M10' || CIE10_5 = 'M10' || CIE10_6 = 'M10' || CIE10_7 = 'M10' || CIE10_8 = 'M10' || CIE10_9 = 'M10' || CIE10_10 = 'M10') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M11($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M11' || CIE10_2 = 'M11' || CIE10_3 = 'M11' || CIE10_4 = 'M11' || CIE10_5 = 'M11' || CIE10_6 = 'M11' || CIE10_7 = 'M11' || CIE10_8 = 'M11' || CIE10_9 = 'M11' || CIE10_10 = 'M11') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M12($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M12' || CIE10_2 = 'M12' || CIE10_3 = 'M12' || CIE10_4 = 'M12' || CIE10_5 = 'M12' || CIE10_6 = 'M12' || CIE10_7 = 'M12' || CIE10_8 = 'M12' || CIE10_9 = 'M12' || CIE10_10 = 'M12') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M13($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M13' || CIE10_2 = 'M13' || CIE10_3 = 'M13' || CIE10_4 = 'M13' || CIE10_5 = 'M13' || CIE10_6 = 'M13' || CIE10_7 = 'M13' || CIE10_8 = 'M13' || CIE10_9 = 'M13' || CIE10_10 = 'M13') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M14($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M14' || CIE10_2 = 'M14' || CIE10_3 = 'M14' || CIE10_4 = 'M14' || CIE10_5 = 'M14' || CIE10_6 = 'M14' || CIE10_7 = 'M14' || CIE10_8 = 'M14' || CIE10_9 = 'M14' || CIE10_10 = 'M14') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M15($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M15' || CIE10_2 = 'M15' || CIE10_3 = 'M15' || CIE10_4 = 'M15' || CIE10_5 = 'M15' || CIE10_6 = 'M15' || CIE10_7 = 'M15' || CIE10_8 = 'M15' || CIE10_9 = 'M15' || CIE10_10 = 'M15') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M16($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M16' || CIE10_2 = 'M16' || CIE10_3 = 'M16' || CIE10_4 = 'M16' || CIE10_5 = 'M16' || CIE10_6 = 'M16' || CIE10_7 = 'M16' || CIE10_8 = 'M16' || CIE10_9 = 'M16' || CIE10_10 = 'M16') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M17($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M17' || CIE10_2 = 'M17' || CIE10_3 = 'M17' || CIE10_4 = 'M17' || CIE10_5 = 'M17' || CIE10_6 = 'M17' || CIE10_7 = 'M17' || CIE10_8 = 'M17' || CIE10_9 = 'M17' || CIE10_10 = 'M17') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M18($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M18' || CIE10_2 = 'M18' || CIE10_3 = 'M18' || CIE10_4 = 'M18' || CIE10_5 = 'M18' || CIE10_6 = 'M18' || CIE10_7 = 'M18' || CIE10_8 = 'M18' || CIE10_9 = 'M18' || CIE10_10 = 'M18') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M19($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M19' || CIE10_2 = 'M19' || CIE10_3 = 'M19' || CIE10_4 = 'M19' || CIE10_5 = 'M19' || CIE10_6 = 'M19' || CIE10_7 = 'M19' || CIE10_8 = 'M19' || CIE10_9 = 'M19' || CIE10_10 = 'M19') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M20($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M20' || CIE10_2 = 'M20' || CIE10_3 = 'M20' || CIE10_4 = 'M20' || CIE10_5 = 'M20' || CIE10_6 = 'M20' || CIE10_7 = 'M20' || CIE10_8 = 'M20' || CIE10_9 = 'M20' || CIE10_10 = 'M20') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
    public static function M21($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M21' || CIE10_2 = 'M21' || CIE10_3 = 'M21' || CIE10_4 = 'M21' || CIE10_5 = 'M21' || CIE10_6 = 'M21' || CIE10_7 = 'M21' || CIE10_8 = 'M21' || CIE10_9 = 'M21' || CIE10_10 = 'M21') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M22($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M22' || CIE10_2 = 'M22' || CIE10_3 = 'M22' || CIE10_4 = 'M22' || CIE10_5 = 'M22' || CIE10_6 = 'M22' || CIE10_7 = 'M22' || CIE10_8 = 'M22' || CIE10_9 = 'M22' || CIE10_10 = 'M22') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M23($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M23' || CIE10_2 = 'M23' || CIE10_3 = 'M23' || CIE10_4 = 'M23' || CIE10_5 = 'M23' || CIE10_6 = 'M23' || CIE10_7 = 'M23' || CIE10_8 = 'M23' || CIE10_9 = 'M23' || CIE10_10 = 'M23') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M24($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M24' || CIE10_2 = 'M24' || CIE10_3 = 'M24' || CIE10_4 = 'M24' || CIE10_5 = 'M24' || CIE10_6 = 'M24' || CIE10_7 = 'M24' || CIE10_8 = 'M24' || CIE10_9 = 'M24' || CIE10_10 = 'M24') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M25($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M25' || CIE10_2 = 'M25' || CIE10_3 = 'M25' || CIE10_4 = 'M25' || CIE10_5 = 'M25' || CIE10_6 = 'M25' || CIE10_7 = 'M25' || CIE10_8 = 'M25' || CIE10_9 = 'M25' || CIE10_10 = 'M25') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M30($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M30' || CIE10_2 = 'M30' || CIE10_3 = 'M30' || CIE10_4 = 'M30' || CIE10_5 = 'M30' || CIE10_6 = 'M30' || CIE10_7 = 'M30' || CIE10_8 = 'M30' || CIE10_9 = 'M30' || CIE10_10 = 'M30') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M31($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M31' || CIE10_2 = 'M31' || CIE10_3 = 'M31' || CIE10_4 = 'M31' || CIE10_5 = 'M31' || CIE10_6 = 'M31' || CIE10_7 = 'M31' || CIE10_8 = 'M31' || CIE10_9 = 'M31' || CIE10_10 = 'M31') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M32($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M32' || CIE10_2 = 'M32' || CIE10_3 = 'M32' || CIE10_4 = 'M32' || CIE10_5 = 'M32' || CIE10_6 = 'M32' || CIE10_7 = 'M32' || CIE10_8 = 'M32' || CIE10_9 = 'M32' || CIE10_10 = 'M32') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M33($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M33' || CIE10_2 = 'M33' || CIE10_3 = 'M33' || CIE10_4 = 'M33' || CIE10_5 = 'M33' || CIE10_6 = 'M33' || CIE10_7 = 'M33' || CIE10_8 = 'M33' || CIE10_9 = 'M33' || CIE10_10 = 'M33') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M34($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M34' || CIE10_2 = 'M34' || CIE10_3 = 'M34' || CIE10_4 = 'M34' || CIE10_5 = 'M34' || CIE10_6 = 'M34' || CIE10_7 = 'M34' || CIE10_8 = 'M34' || CIE10_9 = 'M34' || CIE10_10 = 'M34') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M35($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M35' || CIE10_2 = 'M35' || CIE10_3 = 'M35' || CIE10_4 = 'M35' || CIE10_5 = 'M35' || CIE10_6 = 'M35' || CIE10_7 = 'M35' || CIE10_8 = 'M35' || CIE10_9 = 'M35' || CIE10_10 = 'M35') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M36($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M36' || CIE10_2 = 'M36' || CIE10_3 = 'M36' || CIE10_4 = 'M36' || CIE10_5 = 'M36' || CIE10_6 = 'M36' || CIE10_7 = 'M36' || CIE10_8 = 'M36' || CIE10_9 = 'M36' || CIE10_10 = 'M36') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M40($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M40' || CIE10_2 = 'M40' || CIE10_3 = 'M40' || CIE10_4 = 'M40' || CIE10_5 = 'M40' || CIE10_6 = 'M40' || CIE10_7 = 'M40' || CIE10_8 = 'M40' || CIE10_9 = 'M40' || CIE10_10 = 'M40') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
   public static function M41($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M41' || CIE10_2 = 'M41' || CIE10_3 = 'M41' || CIE10_4 = 'M41' || CIE10_5 = 'M41' || CIE10_6 = 'M41' || CIE10_7 = 'M41' || CIE10_8 = 'M41' || CIE10_9 = 'M41' || CIE10_10 = 'M41') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M42($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M42' || CIE10_2 = 'M42' || CIE10_3 = 'M42' || CIE10_4 = 'M42' || CIE10_5 = 'M42' || CIE10_6 = 'M42' || CIE10_7 = 'M42' || CIE10_8 = 'M42' || CIE10_9 = 'M42' || CIE10_10 = 'M42') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M43($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M43' || CIE10_2 = 'M43' || CIE10_3 = 'M43' || CIE10_4 = 'M43' || CIE10_5 = 'M43' || CIE10_6 = 'M43' || CIE10_7 = 'M43' || CIE10_8 = 'M43' || CIE10_9 = 'M43' || CIE10_10 = 'M43') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M45($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M45' || CIE10_2 = 'M45' || CIE10_3 = 'M45' || CIE10_4 = 'M45' || CIE10_5 = 'M45' || CIE10_6 = 'M45' || CIE10_7 = 'M45' || CIE10_8 = 'M45' || CIE10_9 = 'M45' || CIE10_10 = 'M45') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M46($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M46' || CIE10_2 = 'M46' || CIE10_3 = 'M46' || CIE10_4 = 'M46' || CIE10_5 = 'M46' || CIE10_6 = 'M46' || CIE10_7 = 'M46' || CIE10_8 = 'M46' || CIE10_9 = 'M46' || CIE10_10 = 'M46') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M47($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M47' || CIE10_2 = 'M47' || CIE10_3 = 'M47' || CIE10_4 = 'M47' || CIE10_5 = 'M47' || CIE10_6 = 'M47' || CIE10_7 = 'M47' || CIE10_8 = 'M47' || CIE10_9 = 'M47' || CIE10_10 = 'M47') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M48($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M48' || CIE10_2 = 'M48' || CIE10_3 = 'M48' || CIE10_4 = 'M48' || CIE10_5 = 'M48' || CIE10_6 = 'M48' || CIE10_7 = 'M48' || CIE10_8 = 'M48' || CIE10_9 = 'M48' || CIE10_10 = 'M48') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M49($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M49' || CIE10_2 = 'M49' || CIE10_3 = 'M49' || CIE10_4 = 'M49' || CIE10_5 = 'M49' || CIE10_6 = 'M49' || CIE10_7 = 'M49' || CIE10_8 = 'M49' || CIE10_9 = 'M49' || CIE10_10 = 'M49') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M50($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M50' || CIE10_2 = 'M50' || CIE10_3 = 'M50' || CIE10_4 = 'M50' || CIE10_5 = 'M50' || CIE10_6 = 'M50' || CIE10_7 = 'M50' || CIE10_8 = 'M50' || CIE10_9 = 'M50' || CIE10_10 = 'M50') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M51($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M51' || CIE10_2 = 'M51' || CIE10_3 = 'M51' || CIE10_4 = 'M51' || CIE10_5 = 'M51' || CIE10_6 = 'M51' || CIE10_7 = 'M51' || CIE10_8 = 'M51' || CIE10_9 = 'M51' || CIE10_10 = 'M51') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M53($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M53' || CIE10_2 = 'M53' || CIE10_3 = 'M53' || CIE10_4 = 'M53' || CIE10_5 = 'M53' || CIE10_6 = 'M53' || CIE10_7 = 'M53' || CIE10_8 = 'M53' || CIE10_9 = 'M53' || CIE10_10 = 'M53') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M54($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M54' || CIE10_2 = 'M54' || CIE10_3 = 'M54' || CIE10_4 = 'M54' || CIE10_5 = 'M54' || CIE10_6 = 'M54' || CIE10_7 = 'M54' || CIE10_8 = 'M54' || CIE10_9 = 'M54' || CIE10_10 = 'M54') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M60($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M60' || CIE10_2 = 'M60' || CIE10_3 = 'M60' || CIE10_4 = 'M60' || CIE10_5 = 'M60' || CIE10_6 = 'M60' || CIE10_7 = 'M60' || CIE10_8 = 'M60' || CIE10_9 = 'M60' || CIE10_10 = 'M60') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M61($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M61' || CIE10_2 = 'M61' || CIE10_3 = 'M61' || CIE10_4 = 'M61' || CIE10_5 = 'M61' || CIE10_6 = 'M61' || CIE10_7 = 'M61' || CIE10_8 = 'M61' || CIE10_9 = 'M61' || CIE10_10 = 'M61') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M62($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M62' || CIE10_2 = 'M62' || CIE10_3 = 'M62' || CIE10_4 = 'M62' || CIE10_5 = 'M62' || CIE10_6 = 'M62' || CIE10_7 = 'M62' || CIE10_8 = 'M62' || CIE10_9 = 'M62' || CIE10_10 = 'M62') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M63($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M63' || CIE10_2 = 'M63' || CIE10_3 = 'M63' || CIE10_4 = 'M63' || CIE10_5 = 'M63' || CIE10_6 = 'M63' || CIE10_7 = 'M63' || CIE10_8 = 'M63' || CIE10_9 = 'M63' || CIE10_10 = 'M63') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M65($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M65' || CIE10_2 = 'M65' || CIE10_3 = 'M65' || CIE10_4 = 'M65' || CIE10_5 = 'M65' || CIE10_6 = 'M65' || CIE10_7 = 'M65' || CIE10_8 = 'M65' || CIE10_9 = 'M65' || CIE10_10 = 'M65') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M66($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M66' || CIE10_2 = 'M66' || CIE10_3 = 'M66' || CIE10_4 = 'M66' || CIE10_5 = 'M66' || CIE10_6 = 'M66' || CIE10_7 = 'M66' || CIE10_8 = 'M66' || CIE10_9 = 'M66' || CIE10_10 = 'M66') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M67($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M67' || CIE10_2 = 'M67' || CIE10_3 = 'M67' || CIE10_4 = 'M67' || CIE10_5 = 'M67' || CIE10_6 = 'M67' || CIE10_7 = 'M67' || CIE10_8 = 'M67' || CIE10_9 = 'M67' || CIE10_10 = 'M67') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M68($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M68' || CIE10_2 = 'M68' || CIE10_3 = 'M68' || CIE10_4 = 'M68' || CIE10_5 = 'M68' || CIE10_6 = 'M68' || CIE10_7 = 'M68' || CIE10_8 = 'M68' || CIE10_9 = 'M68' || CIE10_10 = 'M68') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M70($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M70' || CIE10_2 = 'M70' || CIE10_3 = 'M70' || CIE10_4 = 'M70' || CIE10_5 = 'M70' || CIE10_6 = 'M70' || CIE10_7 = 'M70' || CIE10_8 = 'M70' || CIE10_9 = 'M70' || CIE10_10 = 'M70') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M71($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M71' || CIE10_2 = 'M71' || CIE10_3 = 'M71' || CIE10_4 = 'M71' || CIE10_5 = 'M71' || CIE10_6 = 'M71' || CIE10_7 = 'M71' || CIE10_8 = 'M71' || CIE10_9 = 'M71' || CIE10_10 = 'M71') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M72($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M72' || CIE10_2 = 'M72' || CIE10_3 = 'M72' || CIE10_4 = 'M72' || CIE10_5 = 'M72' || CIE10_6 = 'M72' || CIE10_7 = 'M72' || CIE10_8 = 'M72' || CIE10_9 = 'M72' || CIE10_10 = 'M72') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M73($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M73' || CIE10_2 = 'M73' || CIE10_3 = 'M73' || CIE10_4 = 'M73' || CIE10_5 = 'M73' || CIE10_6 = 'M73' || CIE10_7 = 'M73' || CIE10_8 = 'M73' || CIE10_9 = 'M73' || CIE10_10 = 'M73') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M75($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M75' || CIE10_2 = 'M75' || CIE10_3 = 'M75' || CIE10_4 = 'M75' || CIE10_5 = 'M75' || CIE10_6 = 'M75' || CIE10_7 = 'M75' || CIE10_8 = 'M75' || CIE10_9 = 'M75' || CIE10_10 = 'M75') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M76($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M76' || CIE10_2 = 'M76' || CIE10_3 = 'M76' || CIE10_4 = 'M76' || CIE10_5 = 'M76' || CIE10_6 = 'M76' || CIE10_7 = 'M76' || CIE10_8 = 'M76' || CIE10_9 = 'M76' || CIE10_10 = 'M76') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M77($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M77' || CIE10_2 = 'M77' || CIE10_3 = 'M77' || CIE10_4 = 'M77' || CIE10_5 = 'M77' || CIE10_6 = 'M77' || CIE10_7 = 'M77' || CIE10_8 = 'M77' || CIE10_9 = 'M77' || CIE10_10 = 'M77') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M79($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M79' || CIE10_2 = 'M79' || CIE10_3 = 'M79' || CIE10_4 = 'M79' || CIE10_5 = 'M79' || CIE10_6 = 'M79' || CIE10_7 = 'M79' || CIE10_8 = 'M79' || CIE10_9 = 'M79' || CIE10_10 = 'M79') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M80($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M80' || CIE10_2 = 'M80' || CIE10_3 = 'M80' || CIE10_4 = 'M80' || CIE10_5 = 'M80' || CIE10_6 = 'M80' || CIE10_7 = 'M80' || CIE10_8 = 'M80' || CIE10_9 = 'M80' || CIE10_10 = 'M80') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M81($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M81' || CIE10_2 = 'M81' || CIE10_3 = 'M81' || CIE10_4 = 'M81' || CIE10_5 = 'M81' || CIE10_6 = 'M81' || CIE10_7 = 'M81' || CIE10_8 = 'M81' || CIE10_9 = 'M81' || CIE10_10 = 'M81') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M82($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M82' || CIE10_2 = 'M82' || CIE10_3 = 'M82' || CIE10_4 = 'M82' || CIE10_5 = 'M82' || CIE10_6 = 'M82' || CIE10_7 = 'M82' || CIE10_8 = 'M82' || CIE10_9 = 'M82' || CIE10_10 = 'M82') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M83($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M83' || CIE10_2 = 'M83' || CIE10_3 = 'M83' || CIE10_4 = 'M83' || CIE10_5 = 'M83' || CIE10_6 = 'M83' || CIE10_7 = 'M83' || CIE10_8 = 'M83' || CIE10_9 = 'M83' || CIE10_10 = 'M83') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M84($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M84' || CIE10_2 = 'M84' || CIE10_3 = 'M84' || CIE10_4 = 'M84' || CIE10_5 = 'M84' || CIE10_6 = 'M84' || CIE10_7 = 'M84' || CIE10_8 = 'M84' || CIE10_9 = 'M84' || CIE10_10 = 'M84') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M85($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M85' || CIE10_2 = 'M85' || CIE10_3 = 'M85' || CIE10_4 = 'M85' || CIE10_5 = 'M85' || CIE10_6 = 'M85' || CIE10_7 = 'M85' || CIE10_8 = 'M85' || CIE10_9 = 'M85' || CIE10_10 = 'M85') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M86($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M86' || CIE10_2 = 'M86' || CIE10_3 = 'M86' || CIE10_4 = 'M86' || CIE10_5 = 'M86' || CIE10_6 = 'M86' || CIE10_7 = 'M86' || CIE10_8 = 'M86' || CIE10_9 = 'M86' || CIE10_10 = 'M86') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M87($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M87' || CIE10_2 = 'M87' || CIE10_3 = 'M87' || CIE10_4 = 'M87' || CIE10_5 = 'M87' || CIE10_6 = 'M87' || CIE10_7 = 'M87' || CIE10_8 = 'M87' || CIE10_9 = 'M87' || CIE10_10 = 'M87') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M88($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M88' || CIE10_2 = 'M88' || CIE10_3 = 'M88' || CIE10_4 = 'M88' || CIE10_5 = 'M88' || CIE10_6 = 'M88' || CIE10_7 = 'M88' || CIE10_8 = 'M88' || CIE10_9 = 'M88' || CIE10_10 = 'M88') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M89($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M89' || CIE10_2 = 'M89' || CIE10_3 = 'M89' || CIE10_4 = 'M89' || CIE10_5 = 'M89' || CIE10_6 = 'M89' || CIE10_7 = 'M89' || CIE10_8 = 'M89' || CIE10_9 = 'M89' || CIE10_10 = 'M89') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M90($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M90' || CIE10_2 = 'M90' || CIE10_3 = 'M90' || CIE10_4 = 'M90' || CIE10_5 = 'M90' || CIE10_6 = 'M90' || CIE10_7 = 'M90' || CIE10_8 = 'M90' || CIE10_9 = 'M90' || CIE10_10 = 'M90') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M91($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M91' || CIE10_2 = 'M91' || CIE10_3 = 'M91' || CIE10_4 = 'M91' || CIE10_5 = 'M91' || CIE10_6 = 'M91' || CIE10_7 = 'M91' || CIE10_8 = 'M91' || CIE10_9 = 'M91' || CIE10_10 = 'M91') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M92($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M92' || CIE10_2 = 'M92' || CIE10_3 = 'M92' || CIE10_4 = 'M92' || CIE10_5 = 'M92' || CIE10_6 = 'M92' || CIE10_7 = 'M92' || CIE10_8 = 'M92' || CIE10_9 = 'M92' || CIE10_10 = 'M92') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M93($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M93' || CIE10_2 = 'M93' || CIE10_3 = 'M93' || CIE10_4 = 'M93' || CIE10_5 = 'M93' || CIE10_6 = 'M93' || CIE10_7 = 'M93' || CIE10_8 = 'M93' || CIE10_9 = 'M93' || CIE10_10 = 'M93') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M94($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M94' || CIE10_2 = 'M94' || CIE10_3 = 'M94' || CIE10_4 = 'M94' || CIE10_5 = 'M94' || CIE10_6 = 'M94' || CIE10_7 = 'M94' || CIE10_8 = 'M94' || CIE10_9 = 'M94' || CIE10_10 = 'M94') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M95($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M95' || CIE10_2 = 'M95' || CIE10_3 = 'M95' || CIE10_4 = 'M95' || CIE10_5 = 'M95' || CIE10_6 = 'M95' || CIE10_7 = 'M95' || CIE10_8 = 'M95' || CIE10_9 = 'M95' || CIE10_10 = 'M95') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function M96($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M96' || CIE10_2 = 'M96' || CIE10_3 = 'M96' || CIE10_4 = 'M96' || CIE10_5 = 'M96' || CIE10_6 = 'M96' || CIE10_7 = 'M96' || CIE10_8 = 'M96' || CIE10_9 = 'M96' || CIE10_10 = 'M96') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
     public static function M99($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'M99' || CIE10_2 = 'M99' || CIE10_3 = 'M99' || CIE10_4 = 'M99' || CIE10_5 = 'M99' || CIE10_6 = 'M99' || CIE10_7 = 'M99' || CIE10_8 = 'M99' || CIE10_9 = 'M99' || CIE10_10 = 'M99') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    
} 
?>
    