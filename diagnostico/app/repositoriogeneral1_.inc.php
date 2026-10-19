<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados1 {
    public static function Total_general($conexion) {
        $Razon = $_SESSION['Razon']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    
    public static function conteo_osteo($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (CAP_1 = 'OSTEO' || CAP_2 = 'OSTEO' || CAP_3 = 'OSTEO' || CAP_4 = 'OSTEO' || CAP_5 = 'OSTEO' || CAP_6 = 'OSTEO' || CAP_7 = 'OSTEO' || CAP_8 = 'OSTEO' || CAP_9 = 'OSTEO' || CAP_10 = 'OSTEO') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function conteo_cardio($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (CAP_1 = 'CARDIO' || CAP_2 = 'CARDIO' || CAP_3 = 'CARDIO' || CAP_4 = 'CARDIO' || CAP_5 = 'CARDIO' || CAP_6 = 'CARDIO' || CAP_7 = 'CARDIO' || CAP_8 = 'CARDIO' || CAP_9 = 'CARDIO' || CAP_10 = 'CARDIO') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11'  || Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function conteo_audio($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (CAP_1 = 'AUDIO' || CAP_2 = 'AUDIO' || CAP_3 = 'AUDIO' || CAP_4 = 'AUDIO' || CAP_5 = 'AUDIO' || CAP_6 = 'AUDIO' || CAP_7 = 'AUDIO' || CAP_8 = 'AUDIO' || CAP_9 = 'AUDIO' || CAP_10 = 'AUDIO') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function conteo_visual($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (CAP_1 = 'VISUAL' || CAP_2 = 'VISUAL' || CAP_3 = 'VISUAL' || CAP_4 = 'VISUAL' || CAP_5 = 'VISUAL' || CAP_6 = 'VISUAL' || CAP_7 = 'VISUAL' || CAP_8 = 'VISUAL' || CAP_9 = 'VISUAL' || CAP_10 = 'VISUAL') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function conteo_respiratorio($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (CAP_1 = 'RESPIRATORIO' || CAP_2 = 'RESPIRATORIO' || CAP_3 = 'RESPIRATORIO' || CAP_4 = 'RESPIRATORIO' || CAP_5 = 'RESPIRATORIO' || CAP_6 = 'RESPIRATORIO' || CAP_7 = ' RESPIRATORIO' || CAP_8 = ' RESPIRATORIO' || CAP_9 = ' RESPIRATORIO' || CAP_10 = ' RESPIRATORIO') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    
    public static function R_nutricionista($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Remisiones like '%NUTRICIONISTA%' || Remisiones like '%NUTRICION%') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_optometria($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Remisiones like '%OPTOMETRIA%' || Remisiones like '%OPTOMETRÍA%') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";     
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_medicina_general_EPS($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Remisiones like '%MÉDICO GENERAL%' || Remisiones like '%MÈDICINA GENERAL EPS%') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
      public static function R_medicina_interna_EPS($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Remisiones like '%MÈDICINA INTERNA EPS%' || Remisiones like '%MEDICINA INTERNA%') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    
     public static function R_medicina_laboral_ARL($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%MÈDICINA LABORAL ARL%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_medicina_laboral_EPS($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%MÈDICINA LABORAL EPS%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_otorrino($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%OTORRINOLARINGOLOGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_ortopedia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%ORTOPEDIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_cardiologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%CARDIOLOGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_cirugia_general($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%CIRUGIA GENERAL%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_dermatologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%DERMATOLOGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
   
     public static function R_neumologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%NEUMOLOGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
     public static function R_neurocirugia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%NEUROCIRUGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
     public static function R_odontologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%ODONTOLOGÍA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_oftalmologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%OFTALMOLOGÍA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_ortoptica($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%ORTOPTICA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_psiquiatria($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%PSIQUIATRIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function R_psicologia($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Remisiones like '%PSICOLOGIA%' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";      
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    
    public static function Total($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Biologico($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Virus = 'S' || Parasitos = 'S' || Hongos = 'S' || Bacterias = 'S' || Ricketsias = 'S' || Picaduras = 'S' || Mordeduras = 'S' || FLuidos_excrementos = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Fisico($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Ruido = 'S' || Iluminacion = 'S' || Vibracion = 'S' || Temperaturas = 'S' || Presion_ATM = 'S' || Ionizante = 'S' || No_ionizante = 'S' || Polvo = 'S' || Fibras = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Quimico($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Liquidos = 'S' || Gases = 'S' || Vapores = 'S' || Humos = 'S' || Material_particulado = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Biomecanico($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Trabajo_estatico = 'S' || Esfuerzo_fisico = 'S' || Manejo_cargas = 'S' || Posturas_forzadas = 'S' || Trabajo_sedente = 'S' || Mov_repetitivos = 'S' || Contenido_tarea = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Psicosocial($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Relaciones_humanas = 'S' || Riesgo_contra_personas = 'S' || Secretos_productos = 'S' || Secretos_procesos = 'S' || Gestion_admin = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Seguridad($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Accidente_transito = 'S' || Publico = 'S' || Trabajo_alturas = 'S' || Trabajo_confinado = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Naturales($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Sismo = 'S' || Terremoto = 'S' || Vendaval = 'S' || Inundacion = 'S' || Derrumbe = 'S' || Precipitaciones = 'S' || Control_fuente = 'S' || Trabajo_confinado = 'S')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    //Tipo de examen
    public static function TipoE1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'ALTURAS Y ESPACIOS CONFINADOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'EGRESO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO CON ENFASIS EN ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE6($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO MANIPULADOR DE ALIMENTOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE7($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO PARA ALTURAS Y ESPACIOS CONFINADOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE8($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO PARA CONDUCTORES' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE9($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO SEGURIDAD VIAL Y ENFASIS EN ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE10($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE11($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE (Tipo_examen = 'PERIODICO DE ALTURAS' || Tipo_examen = 'PERIODICO ALTURAS') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE12($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO MANIPULADOR DE ALIMENTOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE13($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO PARA ALTURAS Y ESPACIOS CONFINADOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE14($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO PARA CONDUCTORES' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE15($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO SEGURIDAD VIAL Y ENFASIS EN ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE16($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'POSTINCAPACIDAD' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE17($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'REINTEGRO LABORAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE18($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'SEGUIMIENTO RECOMENDACIONES Y/O RESTRICCIONES MEDICAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE19($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO CONDUCTOR SEGURIDAD VIAL Y ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TipoE20($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO CONDUCTOR SEGURIDAD VIAL Y ALTURAS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE21($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'POST-INCAPACIDAD' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE22($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'INGRESO SEGURIDAD VIAL, ENFASIS EN ALTURAS Y ESPACIOS CONFINADOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function TipoE23($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_examen = 'PERIODICO SEGURIDAD VIAL, ENFASIS EN ALTURAS Y ESPACIOS CONFINADOS' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Femenino($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Genero = 'FEMENINO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Masculino($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(*) as total FROM general WHERE Genero = 'MASCULINO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Edad1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Edad >= 18 and Edad < 30  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Edad2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Edad >= 30 and Edad < 40  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Edad3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Edad >= 40 and Edad < 50  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Edad4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Edad >= 50 and Edad < 60  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Edad5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Edad >= 60  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }

    public static function Soltero($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Civil = 'SOLTERO(A)'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Casado($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Civil = 'CASADO(A)'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Unionlibre($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Civil = 'UNIÓN LIBRE'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Separado($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Civil = 'SEPARADO'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Divorciado($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Civil = 'DIVORCIADO'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function PrimariaI($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Escolaridad = 'PRIMARIA-INCOMPLETA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function PrimariaC($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'PRIMARIA-COMPLETA' || Escolaridad = 'PRIMARIA-' || Escolaridad = 'PRIMARIA')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function SecundariaI($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Escolaridad = 'SECUNDARIA-INCOMPLETA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function SecundariaC($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'SECUNDARIA-COMPLETA'  || Escolaridad = 'SECUNDARIA-' || Escolaridad = 'SECUNDARIA' || Escolaridad = 'BACHILLERATO-COMPLETA'  || Escolaridad = 'BACHILLERATO-' || Escolaridad = 'BACHILLERATO')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TecnicoI($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Escolaridad = 'TÉCNICO-INCOMPLETA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TecnicoC($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'TÉCNICO-COMPLETA' || Escolaridad = 'TÉCNICO' || Escolaridad = 'TÉCNICO-')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TecnologoI($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Escolaridad = 'TECNOLÓGICO-INCOMPLETA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function TecnologoC($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'TECNOLÓGICO-COMPLETA' || Escolaridad = 'TECNOLÓGICO' || Escolaridad = 'TECNOLÓGICO-')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function ProfesionalI($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Escolaridad = 'PROFESIONAL-INCOMPLETA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function ProfesionalC($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'PROFESIONAL-COMPLETA' || Escolaridad = 'PROFESIONAL-' || Escolaridad = 'PROFESIONAL' || Escolaridad = 'UNIVERSITARIO-COMPLETA' || Escolaridad = 'UNIVERSITARIO-' || Escolaridad = 'UNIVERSITARIO')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Especializacion($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'ESPECIALIZACION-COMPLETA' || Escolaridad = 'ESPECIALIZACION-' || Escolaridad = 'ESPECIALIZACION')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Maestria($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'MAESTRIA-COMPLETA' || Escolaridad = 'MAESTRIA-' || Escolaridad = 'MAESTRIA')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Doctorado($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'DOCTORADO-COMPLETA' || Escolaridad = 'DOCTORADO-' || Escolaridad = 'DOCTORADO')  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Analfabeta($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Escolaridad = 'ANALFABETA-' ||  Escolaridad = 'ANALFABETA') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Personas_cargo1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Composicion_familiar = 0  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Personas_cargo2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (Composicion_familiar = 1 || Composicion_familiar = 2)  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Personas_cargo3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Composicion_familiar >= 3  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Bebedor($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_bebedor = 'BEBEDOR'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function No_bebe($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_bebedor = 'NO BEBE'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Bebedor_O($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_bebedor = 'OCASIONAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Fumador($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_fumador = 'FUMADOR'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function No_fumador($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_fumador = 'NO FUMA'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Fumador_O($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tipo_fumador = 'OCASIONAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Deportes_si($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Deportes = 'S'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Deportes_no($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Deportes = 'N'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }

    //VISUAL
     public static function CIE10_H_1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE CIE10_1 REGEXP '[H]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_H_2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE CIE10_2  REGEXP '[H]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_H_3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE CIE10_3  REGEXP '[H]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_H_4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE CIE10_4  REGEXP '[H]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_H_5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE CIE10_5  REGEXP '[H]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Audio_normal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE  Audio_C = 'NORMAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Audio_anormal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE  Audio_C = 'ANORMAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_normal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE  Visio_C = 'NORMAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_anormal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE  Visio_C = 'ANORMAL'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function Visio_sincorreccion($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visio_C = 'ANORMAL' && Visio_correccion = 'NO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_concorreccion($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visio_C = 'ANORMAL' && Visio_correccion = 'SI' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function Espiro_normal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Espiro_C = 'NORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Espiro_anormal($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Espiro_C = 'ANORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function IMC1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC < 18  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function IMC2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC >= 18 and IMC < 25  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function IMC3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC >= 25 and IMC < 30  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function IMC4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC >= 30 and IMC < 35  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function IMC5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC >= 35 and IMC <= 39  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function IMC6($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE IMC >= 40 && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function INSPECCION_TOTAL($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function INSPECCIONCOLUMNA_N($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE INSPECCIONCOLUMNA = 'NORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function INSPECCIONCOLUMNA_A($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE INSPECCIONCOLUMNA = 'ANORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function PALPACIONCOLUMNA_N($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE PALPACIONCOLUMNA = 'NORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function PALPACIONCOLUMNA_A($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE PALPACIONCOLUMNA = 'ANORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function MIEMBROSSUPERIORES_N($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE MIEMBROSSUPERIORES = 'NORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function MIEMBROSSUPERIORES_A($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE MIEMBROSSUPERIORES = 'ANORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function MIEMBROSINFERIORES_N($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE MIEMBROSINFERIORES = 'NORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function MIEMBROSINFERIORES_A($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE MIEMBROSINFERIORES = 'ANORMAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    
    
    public static function Audio_C1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Audiometria_C =  'ALTERACION AUDITIVA BILATERAL MUY DISMINUIDA, EVITAR EXPOSCION A LABORES EN AMBIENTE RUIDOSO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Audio_C2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Audiometria_C =  'ALTERACION AUDITIVA BILATERAL QUE NO LIMITA CAPACIDAD PARA DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Audio_C3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Audiometria_C =  'ALTERACION AUDITIVA UNILATERAL MUY DISMINUIDA, EVITAR EXPOSCION A LABORES EN AMBIENTE RUIDOSO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Audio_C4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Audiometria_C =  'ALTERACION AUDITIVA UNILATERAL QUE NO LIMITA CAPACIDAD PARA DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Audio_C5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Audiometria_C =  'CAPACIDAD AUDITIVA ADECUADA PARA EL DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_C1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visiometria_C =  'CAPACIDAD VISUAL ADECUADA PARA EL DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_C2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visiometria_C =  'CAPACIDAD VISUAL DEFICIENTE PARA EL DESEMPEÑO DEL CARGO, REQUIERE CORRECCION' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_C3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visiometria_C =  'CON ALTERACION VISUAL CORREGIDA, ADECUADA PARA EL DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_C4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visiometria_C =  'CON ALTERACION VISUAL QUE REQUIERE CORRECCION, SIN RESTRICCION ACTUAL PARA DESEMPEÑO DEL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Visio_C5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Visiometria_C =  'DISMINUCION DE CAPACIDAD VISUAL , MONOCULAR QUE NO MEJORA CON CORRECCION' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Opto_C1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Optometria_C =  'CAPACIDAD VISUAL ADECUADA' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Opto_C2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Optometria_C =  'CAPACIDAD VISUAL ALTERADA CON CORRECCION ADECUADA' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Opto_C3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Optometria_C =  'ALTERACION VISUAL SIN CORRECCION QUE REQUIERE USO DE FORMULA VISUAL' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Opto_C4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Optometria_C =  'ALTERACION VISUAL QUE NO CORRIGE' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function Opto_C5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Optometria_C =  'N' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Espiro_C1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Espirometria_C =  'ALTERACION RESPIRATORIA QUE NO LIMITA SU CAPACIDAD PARA DESEMPEÑAR EL CARGO ' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Espiro_C2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Espirometria_C =  'CAPACIDAD RESPIRATORIA MUY DISMINUIDA, EVITAR LABORES CON RIESGO RESPIRATORIO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Espiro_C3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Espirometria_C =  'CAPACIDAD RESPIRATORIO ADECUADA PARA DESEMPEÑAR EL CARGO' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Tension1($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tension1 <= 129 && Tension2 <= 84 && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function Tension2($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE ((Tension1 >= 130 && Tension1 <= 139) || (Tension2 >= 85 && Tension2 <= 89)) && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function Tension3($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE (((Tension1 >= 140 && Tension1 <= 159) && (Tension2 >= 90 && Tension2 <= 99)) || ((Tension1 >= 140 && Tension1 <= 159) && (Tension2 <= 89 || Tension2 >= 100)) || ((Tension1 <= 139 && Tension1 >= 160) && (Tension2 >= 90 && Tension2 <= 99))) && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
    public static function Tension4($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11']; $Tipo12 = $_SESSION['Tipo12'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general WHERE Tension1 >= 160 && Tension2 >= 100 && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11' ||  Tipo_examen = '$Tipo12')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
        }
        return $total_usuarios;
    }
 
}
?>