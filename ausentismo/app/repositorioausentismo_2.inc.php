<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados {
    public static function Dias_EG($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_E_EG($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(Dias_I) as total FROM ausentismo WHERE Evento = 'EG'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_E_AT($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT COUNT(Dias_I) as total FROM ausentismo WHERE Evento = 'AT'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_R($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'R'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_D($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'D'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_SNC($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'SNC'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_O($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'O'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_C($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'C'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_V($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'V'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_EG_OT($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'EG' && Inicial_C = 'OT'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_R($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'R'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_D($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'D'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_SNC($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'SNC'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_O($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'O'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_C($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'C'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_V($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'V'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Dias_AT_OT($conexion) {
        $id_admin = $_SESSION['id_usuario'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Evento = 'AT' && Inicial_C = 'OT'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    
    
    
    public static function Codigo_M($conexion) {
        $Razon = $_SESSION['Razon'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM ausentismo WHERE Codigo REGEXP '[M]' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M($conexion) {
        $Razon = $_SESSION['Razon']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM ausentismo WHERE Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function Ms($conexion) {
        $Razon = $_SESSION['Razon'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M000($conexion) {
        $Razon = $_SESSION['Razon']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM ausentismo WHERE Codigo = 'M000' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M000s($conexion) {
        $Razon = $_SESSION['Razon'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Codigo = 'M000' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M001($conexion) {
        $Razon = $_SESSION['Razon']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM ausentismo WHERE Codigo = 'M001' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M001s($conexion) {
        $Razon = $_SESSION['Razon'];
        $total_usuarios = null; 
        if (isset($conexion)) {

           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Codigo = 'M001' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M002($conexion) {
        $Razon = $_SESSION['Razon']; 
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM ausentismo WHERE Codigo = 'M002' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function M002s($conexion) {
        $Razon = $_SESSION['Razon'];
        $total_usuarios = null; 
        if (isset($conexion)) {
           $sql = "SELECT SUM(Dias_I) as total FROM ausentismo WHERE Codigo = 'M002' &&  Razon = '$Razon'";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    
    
  
}    