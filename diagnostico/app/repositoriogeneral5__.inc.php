<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados5 {
    public static function H000($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H000' || CIE10_2 = 'H000' || CIE10_3 = 'H000' || CIE10_4 = 'H000' || CIE10_5 = 'H000') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H001($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H001' || CIE10_2 = 'H001' || CIE10_3 = 'H001' || CIE10_4 = 'H001' || CIE10_5 = 'H001') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H010($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H010' || CIE10_2 = 'H010' || CIE10_3 = 'H010' || CIE10_4 = 'H010' || CIE10_5 = 'H010') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H011($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H011' || CIE10_2 = 'H011' || CIE10_3 = 'H011' || CIE10_4 = 'H011' || CIE10_5 = 'H011') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H018($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H018' || CIE10_2 = 'H018' || CIE10_3 = 'H018' || CIE10_4 = 'H018' || CIE10_5 = 'H018') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H019($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H019' || CIE10_2 = 'H019' || CIE10_3 = 'H019' || CIE10_4 = 'H019' || CIE10_5 = 'H019') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H020($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H020' || CIE10_2 = 'H020' || CIE10_3 = 'H020' || CIE10_4 = 'H020' || CIE10_5 = 'H020') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H021($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H021' || CIE10_2 = 'H021' || CIE10_3 = 'H021' || CIE10_4 = 'H021' || CIE10_5 = 'H021') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H022($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H022' || CIE10_2 = 'H022' || CIE10_3 = 'H022' || CIE10_4 = 'H022' || CIE10_5 = 'H022') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H023($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H023' || CIE10_2 = 'H023' || CIE10_3 = 'H023' || CIE10_4 = 'H023' || CIE10_5 = 'H023') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H024($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H024' || CIE10_2 = 'H024' || CIE10_3 = 'H024' || CIE10_4 = 'H024' || CIE10_5 = 'H024') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H025($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H025' || CIE10_2 = 'H025' || CIE10_3 = 'H025' || CIE10_4 = 'H025' || CIE10_5 = 'H025') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H026($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H026' || CIE10_2 = 'H026' || CIE10_3 = 'H026' || CIE10_4 = 'H026' || CIE10_5 = 'H026') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H027($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H027' || CIE10_2 = 'H027' || CIE10_3 = 'H027' || CIE10_4 = 'H027' || CIE10_5 = 'H027') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H028($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H028' || CIE10_2 = 'H028' || CIE10_3 = 'H028' || CIE10_4 = 'H028' || CIE10_5 = 'H028') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H029($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H029' || CIE10_2 = 'H029' || CIE10_3 = 'H029' || CIE10_4 = 'H029' || CIE10_5 = 'H029') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H030($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H030' || CIE10_2 = 'H030' || CIE10_3 = 'H030' || CIE10_4 = 'H030' || CIE10_5 = 'H030') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }public static function H031($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H031' || CIE10_2 = 'H031' || CIE10_3 = 'H031' || CIE10_4 = 'H031' || CIE10_5 = 'H031') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }public static function H038($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H038' || CIE10_2 = 'H038' || CIE10_3 = 'H038' || CIE10_4 = 'H038' || CIE10_5 = 'H038') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H040($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H040' || CIE10_2 = 'H040' || CIE10_3 = 'H040' || CIE10_4 = 'H040' || CIE10_5 = 'H040') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H041($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H041' || CIE10_2 = 'H041' || CIE10_3 = 'H041' || CIE10_4 = 'H041' || CIE10_5 = 'H041') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H042($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H042' || CIE10_2 = 'H042' || CIE10_3 = 'H042' || CIE10_4 = 'H042' || CIE10_5 = 'H042') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H043($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H043' || CIE10_2 = 'H043' || CIE10_3 = 'H043' || CIE10_4 = 'H043' || CIE10_5 = 'H043') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H044($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H044' || CIE10_2 = 'H044' || CIE10_3 = 'H044' || CIE10_4 = 'H044' || CIE10_5 = 'H044') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H045($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H045' || CIE10_2 = 'H045' || CIE10_3 = 'H045' || CIE10_4 = 'H045' || CIE10_5 = 'H045') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H046($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H046' || CIE10_2 = 'H046' || CIE10_3 = 'H046' || CIE10_4 = 'H046' || CIE10_5 = 'H046') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H048($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H048' || CIE10_2 = 'H048' || CIE10_3 = 'H048' || CIE10_4 = 'H048' || CIE10_5 = 'H048') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H049($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H049' || CIE10_2 = 'H049' || CIE10_3 = 'H049' || CIE10_4 = 'H049' || CIE10_5 = 'H049') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H050($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H050' || CIE10_2 = 'H050' || CIE10_3 = 'H050' || CIE10_4 = 'H050' || CIE10_5 = 'H050') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H051($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H051' || CIE10_2 = 'H051' || CIE10_3 = 'H051' || CIE10_4 = 'H051' || CIE10_5 = 'H051') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H052($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H052' || CIE10_2 = 'H052' || CIE10_3 = 'H052' || CIE10_4 = 'H052' || CIE10_5 = 'H052') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H053($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H053' || CIE10_2 = 'H053' || CIE10_3 = 'H053' || CIE10_4 = 'H053' || CIE10_5 = 'H053') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H054($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H054' || CIE10_2 = 'H054' || CIE10_3 = 'H054' || CIE10_4 = 'H054' || CIE10_5 = 'H054') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H055($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H055' || CIE10_2 = 'H055' || CIE10_3 = 'H055' || CIE10_4 = 'H055' || CIE10_5 = 'H055') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H058($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H058' || CIE10_2 = 'H058' || CIE10_3 = 'H058' || CIE10_4 = 'H058' || CIE10_5 = 'H058') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H059($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H059' || CIE10_2 = 'H059' || CIE10_3 = 'H059' || CIE10_4 = 'H059' || CIE10_5 = 'H059') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H060($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H060' || CIE10_2 = 'H060' || CIE10_3 = 'H060' || CIE10_4 = 'H060' || CIE10_5 = 'H060') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H061($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H061' || CIE10_2 = 'H061' || CIE10_3 = 'H061' || CIE10_4 = 'H061' || CIE10_5 = 'H061') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H062($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H062' || CIE10_2 = 'H062' || CIE10_3 = 'H062' || CIE10_4 = 'H062' || CIE10_5 = 'H062') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H063($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H063' || CIE10_2 = 'H063' || CIE10_3 = 'H063' || CIE10_4 = 'H063' || CIE10_5 = 'H063') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H100($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H100' || CIE10_2 = 'H100' || CIE10_3 = 'H100' || CIE10_4 = 'H100' || CIE10_5 = 'H100') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H101($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H101' || CIE10_2 = 'H101' || CIE10_3 = 'H101' || CIE10_4 = 'H101' || CIE10_5 = 'H101') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H102($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H102' || CIE10_2 = 'H102' || CIE10_3 = 'H102' || CIE10_4 = 'H102' || CIE10_5 = 'H102') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H103($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H103' || CIE10_2 = 'H103' || CIE10_3 = 'H103' || CIE10_4 = 'H103' || CIE10_5 = 'H103') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H104($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H104' || CIE10_2 = 'H104' || CIE10_3 = 'H104' || CIE10_4 = 'H104' || CIE10_5 = 'H104') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H105($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H105' || CIE10_2 = 'H105' || CIE10_3 = 'H105' || CIE10_4 = 'H105' || CIE10_5 = 'H105') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H108($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H108' || CIE10_2 = 'H108' || CIE10_3 = 'H108' || CIE10_4 = 'H108' || CIE10_5 = 'H108') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H109($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H109' || CIE10_2 = 'H109' || CIE10_3 = 'H109' || CIE10_4 = 'H109' || CIE10_5 = 'H109') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H110($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H110' || CIE10_2 = 'H110' || CIE10_3 = 'H110' || CIE10_4 = 'H110' || CIE10_5 = 'H110') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H111($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H111' || CIE10_2 = 'H111' || CIE10_3 = 'H111' || CIE10_4 = 'H111' || CIE10_5 = 'H111') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H112($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H112' || CIE10_2 = 'H112' || CIE10_3 = 'H112' || CIE10_4 = 'H112' || CIE10_5 = 'H112') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H113($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H113' || CIE10_2 = 'H113' || CIE10_3 = 'H113' || CIE10_4 = 'H113' || CIE10_5 = 'H113') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H114($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H114' || CIE10_2 = 'H114' || CIE10_3 = 'H114' || CIE10_4 = 'H114' || CIE10_5 = 'H114') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H118($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H118' || CIE10_2 = 'H118' || CIE10_3 = 'H118' || CIE10_4 = 'H118' || CIE10_5 = 'H118') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H119($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H119' || CIE10_2 = 'H119' || CIE10_3 = 'H119' || CIE10_4 = 'H119' || CIE10_5 = 'H119') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H130($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H130' || CIE10_2 = 'H130' || CIE10_3 = 'H130' || CIE10_4 = 'H130' || CIE10_5 = 'H130') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H131($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H131' || CIE10_2 = 'H131' || CIE10_3 = 'H131' || CIE10_4 = 'H131' || CIE10_5 = 'H131') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H132($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H132' || CIE10_2 = 'H132' || CIE10_3 = 'H132' || CIE10_4 = 'H132' || CIE10_5 = 'H132') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H133($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H133' || CIE10_2 = 'H133' || CIE10_3 = 'H133' || CIE10_4 = 'H133' || CIE10_5 = 'H133') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H138($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H138' || CIE10_2 = 'H138' || CIE10_3 = 'H138' || CIE10_4 = 'H138' || CIE10_5 = 'H138') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H150($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H150' || CIE10_2 = 'H150' || CIE10_3 = 'H150' || CIE10_4 = 'H150' || CIE10_5 = 'H150') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H151($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H151' || CIE10_2 = 'H151' || CIE10_3 = 'H151' || CIE10_4 = 'H151' || CIE10_5 = 'H151') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H158($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H158' || CIE10_2 = 'H158' || CIE10_3 = 'H158' || CIE10_4 = 'H158' || CIE10_5 = 'H158') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H159($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H159' || CIE10_2 = 'H159' || CIE10_3 = 'H159' || CIE10_4 = 'H159' || CIE10_5 = 'H159') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H160($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H160' || CIE10_2 = 'H160' || CIE10_3 = 'H160' || CIE10_4 = 'H160' || CIE10_5 = 'H160') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H161($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H161' || CIE10_2 = 'H161' || CIE10_3 = 'H161' || CIE10_4 = 'H161' || CIE10_5 = 'H161') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H162($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H162' || CIE10_2 = 'H162' || CIE10_3 = 'H162' || CIE10_4 = 'H162' || CIE10_5 = 'H162') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H163($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H163' || CIE10_2 = 'H163' || CIE10_3 = 'H163' || CIE10_4 = 'H163' || CIE10_5 = 'H163') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H164($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H164' || CIE10_2 = 'H164' || CIE10_3 = 'H164' || CIE10_4 = 'H164' || CIE10_5 = 'H164') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H168($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H168' || CIE10_2 = 'H168' || CIE10_3 = 'H168' || CIE10_4 = 'H168' || CIE10_5 = 'H168') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H169($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H169' || CIE10_2 = 'H169' || CIE10_3 = 'H169' || CIE10_4 = 'H169' || CIE10_5 = 'H1') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H170($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H170' || CIE10_2 = 'H170' || CIE10_3 = 'H170' || CIE10_4 = 'H170' || CIE10_5 = 'H170') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H171($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H171' || CIE10_2 = 'H171' || CIE10_3 = 'H171' || CIE10_4 = 'H171' || CIE10_5 = 'H171') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H178($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H178' || CIE10_2 = 'H178' || CIE10_3 = 'H178' || CIE10_4 = 'H178' || CIE10_5 = 'H178') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H179($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H179' || CIE10_2 = 'H179' || CIE10_3 = 'H179' || CIE10_4 = 'H179' || CIE10_5 = 'H179') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function H180($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H180' || CIE10_2 = 'H180' || CIE10_3 = 'H180' || CIE10_4 = 'H180' || CIE10_5 = 'H180') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H181($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H181' || CIE10_2 = 'H181' || CIE10_3 = 'H181' || CIE10_4 = 'H181' || CIE10_5 = 'H181') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H182($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H182' || CIE10_2 = 'H182' || CIE10_3 = 'H182' || CIE10_4 = 'H182' || CIE10_5 = 'H182') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H183($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H183' || CIE10_2 = 'H183' || CIE10_3 = 'H183' || CIE10_4 = 'H183' || CIE10_5 = 'H183') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H184($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H184' || CIE10_2 = 'H184' || CIE10_3 = 'H184' || CIE10_4 = 'H184' || CIE10_5 = 'H184') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H185($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H185' || CIE10_2 = 'H185' || CIE10_3 = 'H185' || CIE10_4 = 'H185' || CIE10_5 = 'H185') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H186($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H186' || CIE10_2 = 'H186' || CIE10_3 = 'H186' || CIE10_4 = 'H186' || CIE10_5 = 'H186') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H187($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H187' || CIE10_2 = 'H187' || CIE10_3 = 'H187' || CIE10_4 = 'H187' || CIE10_5 = 'H187') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H188($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H188' || CIE10_2 = 'H188' || CIE10_3 = 'H188' || CIE10_4 = 'H188' || CIE10_5 = 'H188') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H189($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H189' || CIE10_2 = 'H189' || CIE10_3 = 'H189' || CIE10_4 = 'H189' || CIE10_5 = 'H189') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function H190($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H190' || CIE10_2 = 'H190' || CIE10_3 = 'H190' || CIE10_4 = 'H190' || CIE10_5 = 'H190') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function H191($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H191' || CIE10_2 = 'H191' || CIE10_3 = 'H191' || CIE10_4 = 'H191' || CIE10_5 = 'H191') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H192($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H192' || CIE10_2 = 'H192' || CIE10_3 = 'H192' || CIE10_4 = 'H192' || CIE10_5 = 'H192') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H193($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H193' || CIE10_2 = 'H193' || CIE10_3 = 'H193' || CIE10_4 = 'H193' || CIE10_5 = 'H193') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H198($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H198' || CIE10_2 = 'H198' || CIE10_3 = 'H198' || CIE10_4 = 'H198' || CIE10_5 = 'H198') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H200($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H200' || CIE10_2 = 'H200' || CIE10_3 = 'H200' || CIE10_4 = 'H200' || CIE10_5 = 'H200') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H201($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H201' || CIE10_2 = 'H201' || CIE10_3 = 'H201' || CIE10_4 = 'H201' || CIE10_5 = 'H201') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H202($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H202' || CIE10_2 = 'H202' || CIE10_3 = 'H202' || CIE10_4 = 'H202' || CIE10_5 = 'H202') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H208($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H208' || CIE10_2 = 'H208' || CIE10_3 = 'H208' || CIE10_4 = 'H208' || CIE10_5 = 'H208') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H209($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H209' || CIE10_2 = 'H209' || CIE10_3 = 'H209' || CIE10_4 = 'H209' || CIE10_5 = 'H209') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H210($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H210' || CIE10_2 = 'H210' || CIE10_3 = 'H210' || CIE10_4 = 'H210' || CIE10_5 = 'H210') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H211($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H211' || CIE10_2 = 'H211' || CIE10_3 = 'H211' || CIE10_4 = 'H211' || CIE10_5 = 'H211') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H212($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H212' || CIE10_2 = 'H212' || CIE10_3 = 'H212' || CIE10_4 = 'H212' || CIE10_5 = 'H212') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H213($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H213' || CIE10_2 = 'H213' || CIE10_3 = 'H213' || CIE10_4 = 'H213' || CIE10_5 = 'H213') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H214($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H214' || CIE10_2 = 'H214' || CIE10_3 = 'H214' || CIE10_4 = 'H214' || CIE10_5 = 'H214') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H215($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H215' || CIE10_2 = 'H215' || CIE10_3 = 'H215' || CIE10_4 = 'H215' || CIE10_5 = 'H215') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H218($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H218' || CIE10_2 = 'H218' || CIE10_3 = 'H218' || CIE10_4 = 'H218' || CIE10_5 = 'H218') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H219($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H219' || CIE10_2 = 'H219' || CIE10_3 = 'H219' || CIE10_4 = 'H219' || CIE10_5 = 'H219') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H220($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H220' || CIE10_2 = 'H220' || CIE10_3 = 'H220' || CIE10_4 = 'H220' || CIE10_5 = 'H220') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H221($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H221' || CIE10_2 = 'H221' || CIE10_3 = 'H221' || CIE10_4 = 'H221' || CIE10_5 = 'H221') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H228($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H228' || CIE10_2 = 'H228' || CIE10_3 = 'H228' || CIE10_4 = 'H228' || CIE10_5 = 'H228') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H250($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H250' || CIE10_2 = 'H250' || CIE10_3 = 'H250' || CIE10_4 = 'H250' || CIE10_5 = 'H250') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H251($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H251' || CIE10_2 = 'H251' || CIE10_3 = 'H251' || CIE10_4 = 'H251' || CIE10_5 = 'H251') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H252($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H252' || CIE10_2 = 'H252' || CIE10_3 = 'H252' || CIE10_4 = 'H252' || CIE10_5 = 'H252') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H258($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H258' || CIE10_2 = 'H258' || CIE10_3 = 'H258' || CIE10_4 = 'H258' || CIE10_5 = 'H258') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H259($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H259' || CIE10_2 = 'H259' || CIE10_3 = 'H259' || CIE10_4 = 'H259' || CIE10_5 = 'H259') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H260($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H260' || CIE10_2 = 'H260' || CIE10_3 = 'H260' || CIE10_4 = 'H260' || CIE10_5 = 'H260') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H261($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H261' || CIE10_2 = 'H261' || CIE10_3 = 'H261' || CIE10_4 = 'H261' || CIE10_5 = 'H261') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H262($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H262' || CIE10_2 = 'H262' || CIE10_3 = 'H262' || CIE10_4 = 'H262' || CIE10_5 = 'H262') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H263($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H263' || CIE10_2 = 'H263' || CIE10_3 = 'H263' || CIE10_4 = 'H263' || CIE10_5 = 'H263') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H264($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H264' || CIE10_2 = 'H264' || CIE10_3 = 'H264' || CIE10_4 = 'H264' || CIE10_5 = 'H264') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H268($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H268' || CIE10_2 = 'H268' || CIE10_3 = 'H268' || CIE10_4 = 'H268' || CIE10_5 = 'H268') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H269($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H269' || CIE10_2 = 'H269' || CIE10_3 = 'H269' || CIE10_4 = 'H269' || CIE10_5 = 'H269') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H270($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H270' || CIE10_2 = 'H270' || CIE10_3 = 'H270' || CIE10_4 = 'H270' || CIE10_5 = 'H270') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H271($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H271' || CIE10_2 = 'H271' || CIE10_3 = 'H271' || CIE10_4 = 'H271' || CIE10_5 = 'H271') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function H278($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H278' || CIE10_2 = 'H278' || CIE10_3 = 'H278' || CIE10_4 = 'H278' || CIE10_5 = 'H278') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H279($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H279' || CIE10_2 = 'H279' || CIE10_3 = 'H279' || CIE10_4 = 'H279' || CIE10_5 = 'H279') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H280($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H280' || CIE10_2 = 'H280' || CIE10_3 = 'H280' || CIE10_4 = 'H280' || CIE10_5 = 'H280') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H281($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H281' || CIE10_2 = 'H281' || CIE10_3 = 'H281' || CIE10_4 = 'H281' || CIE10_5 = 'H281') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H282($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H282' || CIE10_2 = 'H282' || CIE10_3 = 'H282' || CIE10_4 = 'H282' || CIE10_5 = 'H282') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function H288($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'H288' || CIE10_2 = 'H288' || CIE10_3 = 'H288' || CIE10_4 = 'H288' || CIE10_5 = 'H288') && Autor = '$id_admin' && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }

}
?>