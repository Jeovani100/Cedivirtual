 <?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados3 {
    //CARDIOVASCULAR
    public static function CIE10_E_1($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_1 REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_E_2($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_2  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_E_3($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_3  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_E_4($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_4  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function CIE10_E_5($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_5  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function CIE10_E_6($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_6  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function CIE10_E_7($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_7  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function CIE10_E_8($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_8  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function CIE10_E_9($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_9  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function CIE10_E_10($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE CIE10_10  REGEXP '[E]'  && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }

      public static function E000($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E000' || CIE10_2 = 'E000' || CIE10_3 = 'E000' || CIE10_4 = 'E000' || CIE10_5 = 'E000' || CIE10_6 = 'E000' || CIE10_7 = 'E000' || CIE10_8 = 'E000' || CIE10_9 = 'E000' || CIE10_10 = 'E000') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E001($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E001' || CIE10_2 = 'E001' || CIE10_3 = 'E001' || CIE10_4 = 'E001' || CIE10_5 = 'E001' || CIE10_6 = 'E001' || CIE10_7 = 'E001' || CIE10_8 = 'E001' || CIE10_9 = 'E001' || CIE10_10 = 'E001') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E002($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E002' || CIE10_2 = 'E002' || CIE10_3 = 'E002' || CIE10_4 = 'E002' || CIE10_5 = 'E002' || CIE10_6 = 'E002' || CIE10_7 = 'E002' || CIE10_8 = 'E002' || CIE10_9 = 'E002' || CIE10_10 = 'E002') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E009($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E009' || CIE10_2 = 'E009' || CIE10_3 = 'E009' || CIE10_4 = 'E009' || CIE10_5 = 'E009' || CIE10_6 = 'E009' || CIE10_7 = 'E009' || CIE10_8 = 'E009' || CIE10_9 = 'E009' || CIE10_10 = 'E009') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E010($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E010' || CIE10_2 = 'E010' || CIE10_3 = 'E010' || CIE10_4 = 'E010' || CIE10_5 = 'E010' || CIE10_6 = 'E010' || CIE10_7 = 'E010' || CIE10_8= 'E010' || CIE10_9 = 'E010' || CIE10_10 = 'E010') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E011($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E011' || CIE10_2 = 'E011' || CIE10_3 = 'E011' || CIE10_4 = 'E011' || CIE10_5 = 'E011') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E012($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E012' || CIE10_2 = 'E012' || CIE10_3 = 'E012' || CIE10_4 = 'E012' || CIE10_5 = 'E012' || CIE10_6 = 'E012' || CIE10_7 = 'E012' || CIE10_8 = 'E012' || CIE10_9 = 'E012' || CIE10_10 = 'E012') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E018($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E018' || CIE10_2 = 'E018' || CIE10_3 = 'E018' || CIE10_4 = 'E018' || CIE10_5 = 'E018'|| CIE10_6 = 'E018' || CIE10_7 = 'E018' || CIE10_8 = 'E018' || CIE10_9 = 'E018' || CIE10_10 = 'E018') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E02X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E02X' || CIE10_2 = 'E02X' || CIE10_3 = 'E02X' || CIE10_4 = 'E02X' || CIE10_5 = 'E02X' || CIE10_6 = 'E02X' || CIE10_7 = 'E02X' || CIE10_8 = 'E02X' || CIE10_9 = 'E02X' || CIE10_10 = 'E02X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E030($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E030' || CIE10_2 = 'E030' || CIE10_3 = 'E030' || CIE10_4 = 'E030' || CIE10_5 = 'E030' || CIE10_6 = 'E030' || CIE10_7 = 'E030' || CIE10_8 = 'E030' || CIE10_9 = 'E030' || CIE10_10 = 'E030') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E031($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E031' || CIE10_2 = 'E031' || CIE10_3 = 'E031' || CIE10_4 = 'E031' || CIE10_5 = 'E031' || CIE10_6 = 'E031' || CIE10_7 = 'E031' || CIE10_8 = 'E031' || CIE10_9 = 'E031' || CIE10_10 = 'E031') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E032($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E032' || CIE10_2 = 'E032' || CIE10_3 = 'E032' || CIE10_4 = 'E032' || CIE10_5 = 'E032' || CIE10_6 = 'E032' || CIE10_7 = 'E032' || CIE10_8 = 'E032' || CIE10_9 = 'E032' || CIE10_10 = 'E032') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E033($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E033' || CIE10_2 = 'E033' || CIE10_3 = 'E033' || CIE10_4 = 'E033' || CIE10_5 = 'E033' || CIE10_6 = 'E033' || CIE10_7 = 'E033' || CIE10_8 = 'E033' || CIE10_9 = 'E033' || CIE10_10 = 'E033') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E034($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E034' || CIE10_2 = 'E034' || CIE10_3 = 'E034' || CIE10_4 = 'E034' || CIE10_5 = 'E034' || CIE10_6 = 'E034' || CIE10_7 = 'E034' || CIE10_8 = 'E034' || CIE10_9 = 'E034' || CIE10_10 = 'E034') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E035($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E035' || CIE10_2 = 'E035' || CIE10_3 = 'E035' || CIE10_4 = 'E035' || CIE10_5 = 'E035' || CIE10_6 = 'E035' || CIE10_7 = 'E035' || CIE10_8 = 'E035' || CIE10_9 = 'E035' || CIE10_10 = 'E035') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E038($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E038' || CIE10_2 = 'E038' || CIE10_3 = 'E038' || CIE10_4 = 'E038' || CIE10_5 = 'E038' || CIE10_6 = 'E038' || CIE10_7 = 'E038' || CIE10_8 = 'E038' || CIE10_9 = 'E038' || CIE10_10 = 'E038') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E039($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E039' || CIE10_2 = 'E039' || CIE10_3 = 'E039' || CIE10_4 = 'E039' || CIE10_5 = 'E039' || CIE10_6 = 'E039' || CIE10_7 = 'E039' || CIE10_8 = 'E039' || CIE10_9 = 'E039' || CIE10_10 = 'E039') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E040($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E040' || CIE10_2 = 'E040' || CIE10_3 = 'E040' || CIE10_4 = 'E040' || CIE10_5 = 'E040' || CIE10_6 = 'E040' || CIE10_7 = 'E040' || CIE10_8 = 'E040' || CIE10_9 = 'E040' || CIE10_10 = 'E040') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E041($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E041' || CIE10_2 = 'E041' || CIE10_3 = 'E041' || CIE10_4 = 'E041' || CIE10_5 = 'E041'  || CIE10_6 = 'E041' || CIE10_7 = 'E041' || CIE10_8 = 'E041' || CIE10_9 = 'E041' || CIE10_10 = 'E041') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E042($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E042' || CIE10_2 = 'E042' || CIE10_3 = 'E042' || CIE10_4 = 'E042' || CIE10_5 = 'E042' || CIE10_6 = 'E042' || CIE10_7 = 'E042' || CIE10_8 = 'E042' || CIE10_9 = 'E042' || CIE10_10 = 'E042') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E048($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E048' || CIE10_2 = 'E048' || CIE10_3 = 'E048' || CIE10_4 = 'E048' || CIE10_5 = 'E048' || CIE10_6 = 'E048' || CIE10_7 = 'E048' || CIE10_8 = 'E048' || CIE10_9 = 'E048' || CIE10_10 = 'E048') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E049($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E049' || CIE10_2 = 'E049' || CIE10_3 = 'E049' || CIE10_4 = 'E049' || CIE10_5 = 'E049' || CIE10_6 = 'E049' || CIE10_7 = 'E049' || CIE10_8 = 'E049' || CIE10_9 = 'E049' || CIE10_10 = 'E049') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E050($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E050' || CIE10_2 = 'E050' || CIE10_3 = 'E050' || CIE10_4 = 'E050' || CIE10_5 = 'E050' || CIE10_6 = 'E050' || CIE10_7 = 'E050' || CIE10_8 = 'E050' || CIE10_9 = 'E050' || CIE10_10 = 'E050') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E051($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E051' || CIE10_2 = 'E051' || CIE10_3 = 'E051' || CIE10_4 = 'E051' || CIE10_5 = 'E051' || CIE10_6 = 'E051' || CIE10_7 = 'E051' || CIE10_8 = 'E051' || CIE10_9 = 'E051' || CIE10_10 = 'E051') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E052($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E052' || CIE10_2 = 'E052' || CIE10_3 = 'E052' || CIE10_4 = 'E052' || CIE10_5 = 'E052' || CIE10_6 = 'E052' || CIE10_7 = 'E052' || CIE10_8 = 'E052' || CIE10_9 = 'E052' || CIE10_10 = 'E052') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E053($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E053' || CIE10_2 = 'E053' || CIE10_3 = 'E053' || CIE10_4 = 'E053' || CIE10_5 = 'E053' || CIE10_6 = 'E053' || CIE10_7 = 'E053' || CIE10_8 = 'E053' || CIE10_9 = 'E053' || CIE10_10 = 'E053') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E054($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E054' || CIE10_2 = 'E054' || CIE10_3 = 'E054' || CIE10_4 = 'E054' || CIE10_5 = 'E054' || CIE10_6 = 'E054' || CIE10_7 = 'E054' || CIE10_8 = 'E054' || CIE10_9 = 'E054' || CIE10_10 = 'E054') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E055($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E055' || CIE10_2 = 'E055' || CIE10_3 = 'E055' || CIE10_4 = 'E055' || CIE10_5 = 'E055' || CIE10_6 = 'E055' || CIE10_7 = 'E055' || CIE10_8 = 'E055' || CIE10_9 = 'E055' || CIE10_10 = 'E055') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E058($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E058' || CIE10_2 = 'E058' || CIE10_3 = 'E058' || CIE10_4 = 'E058' || CIE10_5 = 'E058' || CIE10_6 = 'E058' || CIE10_7 = 'E058' || CIE10_8 = 'E058' || CIE10_9 = 'E058' || CIE10_10 = 'E058') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E059($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E059' || CIE10_2 = 'E059' || CIE10_3 = 'E059' || CIE10_4 = 'E059' || CIE10_5 = 'E059'  || CIE10_6 = 'E059' || CIE10_7 = 'E059' || CIE10_8 = 'E059' || CIE10_9 = 'E059' || CIE10_10 = 'E059') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E060($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E060' || CIE10_2 = 'E060' || CIE10_3 = 'E060' || CIE10_4 = 'E060' || CIE10_5 = 'E060' || CIE10_6 = 'E060' || CIE10_7 = 'E060' || CIE10_8 = 'E060' || CIE10_9 = 'E060' || CIE10_10 = 'E060') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E061($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E061' || CIE10_2 = 'E061' || CIE10_3 = 'E061' || CIE10_4 = 'E061' || CIE10_5 = 'E061' || CIE10_6 = 'E061' || CIE10_7 = 'E061' || CIE10_8 = 'E061' || CIE10_9 = 'E061' || CIE10_10 = 'E061') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E062($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E062' || CIE10_2 = 'E062' || CIE10_3 = 'E062' || CIE10_4 = 'E062' || CIE10_5 = 'E062' || CIE10_6 = 'E062' || CIE10_7 = 'E062' || CIE10_8 = 'E062' || CIE10_9 = 'E062' || CIE10_10 = 'E062') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E063($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E063' || CIE10_2 = 'E063' || CIE10_3 = 'E063' || CIE10_4 = 'E063' || CIE10_5 = 'E063' || CIE10_6 = 'E063' || CIE10_7 = 'E063' || CIE10_8 = 'E063' || CIE10_9 = 'E063' || CIE10_10 = 'E063') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E064($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E064' || CIE10_2 = 'E064' || CIE10_3 = 'E064' || CIE10_4 = 'E064' || CIE10_5 = 'E064' || CIE10_6 = 'E064' || CIE10_7 = 'E064' || CIE10_8 = 'E064' || CIE10_9 = 'E064' || CIE10_10 = 'E064') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E065($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E065' || CIE10_2 = 'E065' || CIE10_3 = 'E065' || CIE10_4 = 'E065' || CIE10_5 = 'E065' || CIE10_6 = 'E065' || CIE10_7 = 'E065' || CIE10_8 = 'E065' || CIE10_9 = 'E065' || CIE10_10 = 'E065') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E069($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E069' || CIE10_2 = 'E069' || CIE10_3 = 'E069' || CIE10_4 = 'E069' || CIE10_5 = 'E069' || CIE10_6 = 'E069' || CIE10_7 = 'E069' || CIE10_8 = 'E069' || CIE10_9 = 'E069' || CIE10_10 = 'E069') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E070($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E070' || CIE10_2 = 'E070' || CIE10_3 = 'E070' || CIE10_4 = 'E070' || CIE10_5 = 'E070' || CIE10_6 = 'E070' || CIE10_7 = 'E070' || CIE10_8 = 'E070' || CIE10_9 = 'E070' || CIE10_10 = 'E070') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E071($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E071' || CIE10_2 = 'E071' || CIE10_3 = 'E071' || CIE10_4 = 'E071' || CIE10_5 = 'E071' || CIE10_6 = 'E071' || CIE10_7 = 'E071' || CIE10_8 = 'E071' || CIE10_9 = 'E071' || CIE10_10 = 'E071') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E078($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E078' || CIE10_2 = 'E078' || CIE10_3 = 'E078' || CIE10_4 = 'E078' || CIE10_5 = 'E078' || CIE10_6 = 'E078' || CIE10_7 = 'E078' || CIE10_8 = 'E078' || CIE10_9 = 'E078' || CIE10_10 = 'E078') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E079($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E079' || CIE10_2 = 'E079' || CIE10_3 = 'E079' || CIE10_4 = 'E079' || CIE10_5 = 'E079' || CIE10_6 = 'E079' || CIE10_7 = 'E079' || CIE10_8 = 'E079' || CIE10_9 = 'E079' || CIE10_10 = 'E079') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E100($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E100' || CIE10_2 = 'E100' || CIE10_3 = 'E100' || CIE10_4 = 'E100' || CIE10_5 = 'E100' || CIE10_6 = 'E100' || CIE10_7 = 'E100' || CIE10_8 = 'E100' || CIE10_9 = 'E100' || CIE10_10 = 'E100') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
       public static function E101($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E101' || CIE10_2 = 'E101' || CIE10_3 = 'E101' || CIE10_4 = 'E101' || CIE10_5 = 'E101' || CIE10_6 = 'E101' || CIE10_7 = 'E101' || CIE10_8 = 'E101' || CIE10_9 = 'E101' || CIE10_10 = 'E101') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E102($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E102' || CIE10_2 = 'E102' || CIE10_3 = 'E102' || CIE10_4 = 'E102' || CIE10_5 = 'E102' || CIE10_6 = 'E102' || CIE10_7 = 'E102' || CIE10_8 = 'E102' || CIE10_9 = 'E102' || CIE10_10 = 'E102') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E103($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E103' || CIE10_2 = 'E103' || CIE10_3 = 'E103' || CIE10_4 = 'E103' || CIE10_5 = 'E103' || CIE10_6 = 'E103' || CIE10_7 = 'E103' || CIE10_8 = 'E103' || CIE10_9 = 'E103' || CIE10_10 = 'E103') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E104($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E104' || CIE10_2 = 'E104' || CIE10_3 = 'E104' || CIE10_4 = 'E104' || CIE10_5 = 'E104' || CIE10_6 = 'E104' || CIE10_7 = 'E104' || CIE10_8 = 'E104' || CIE10_9 = 'E104' || CIE10_10 = 'E104') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E105($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E105' || CIE10_2 = 'E105' || CIE10_3 = 'E105' || CIE10_4 = 'E105' || CIE10_5 = 'E105' || CIE10_6 = 'E105' || CIE10_7 = 'E105' || CIE10_8 = 'E105' || CIE10_9 = 'E105' || CIE10_10 = 'E105') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E106($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E106' || CIE10_2 = 'E106' || CIE10_3 = 'E106' || CIE10_4 = 'E106' || CIE10_5 = 'E106' || CIE10_6 = 'E106' || CIE10_7 = 'E106' || CIE10_8 = 'E106' || CIE10_9 = 'E106' || CIE10_10 = 'E106') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E107($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E107' || CIE10_2 = 'E107' || CIE10_3 = 'E107' || CIE10_4 = 'E107' || CIE10_5 = 'E107' || CIE10_6 = 'E107' || CIE10_7 = 'E107' || CIE10_8 = 'E107' || CIE10_9 = 'E107' || CIE10_10 = 'E107') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E108($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E108' || CIE10_2 = 'E108' || CIE10_3 = 'E108' || CIE10_4 = 'E108' || CIE10_5 = 'E108' || CIE10_6 = 'E108' || CIE10_7 = 'E108' || CIE10_8 = 'E108' || CIE10_9 = 'E108' || CIE10_10 = 'E108') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E109($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E109' || CIE10_2 = 'E109' || CIE10_3 = 'E109' || CIE10_4 = 'E109' || CIE10_5 = 'E109' || CIE10_6 = 'E109' || CIE10_7 = 'E109' || CIE10_8 = 'E109' || CIE10_9 = 'E109' || CIE10_10 = 'E109') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E110($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E110' || CIE10_2 = 'E110' || CIE10_3 = 'E110' || CIE10_4 = 'E110' || CIE10_5 = 'E110' || CIE10_6 = 'E110' || CIE10_7 = 'E110' || CIE10_8 = 'E110' || CIE10_9 = 'E110' || CIE10_10 = 'E110') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
     public static function E111($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E111' || CIE10_2 = 'E111' || CIE10_3 = 'E111' || CIE10_4 = 'E111' || CIE10_5 = 'E111' || CIE10_6 = 'E111' || CIE10_7 = 'E111' || CIE10_8 = 'E111' || CIE10_9 = 'E111' || CIE10_10 = 'E111') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E112($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E112' || CIE10_2 = 'E112' || CIE10_3 = 'E112' || CIE10_4 = 'E112' || CIE10_5 = 'E112' || CIE10_6 = 'E112' || CIE10_7 = 'E112' || CIE10_8 = 'E112' || CIE10_9 = 'E112' || CIE10_10 = 'E112') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E113($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E113' || CIE10_2 = 'E113' || CIE10_3 = 'E113' || CIE10_4 = 'E113' || CIE10_5 = 'E113' || CIE10_6 = 'E113' || CIE10_7 = 'E113' || CIE10_8 = 'E113' || CIE10_9 = 'E113' || CIE10_10 = 'E113') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E114($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E114' || CIE10_2 = 'E114' || CIE10_3 = 'E114' || CIE10_4 = 'E114' || CIE10_5 = 'E114' || CIE10_6 = 'E114' || CIE10_7 = 'E114' || CIE10_8 = 'E114' || CIE10_9 = 'E114' || CIE10_10 = 'E114') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E115($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E115' || CIE10_2 = 'E115' || CIE10_3 = 'E115' || CIE10_4 = 'E115' || CIE10_5 = 'E115' ||  CIE10_6 = 'E115' || CIE10_7 = 'E115' || CIE10_8 = 'E115' || CIE10_9 = 'E115' || CIE10_10 = 'E115') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E116($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E116' || CIE10_2 = 'E116' || CIE10_3 = 'E116' || CIE10_4 = 'E116' || CIE10_5 = 'E116' || CIE10_6 = 'E116' || CIE10_7 = 'E116' || CIE10_8 = 'E116' || CIE10_9 = 'E116' || CIE10_10 = 'E116') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E117($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E117' || CIE10_2 = 'E117' || CIE10_3 = 'E117' || CIE10_4 = 'E117' || CIE10_5 = 'E117' || CIE10_6 = 'E117' || CIE10_7 = 'E117' || CIE10_8 = 'E117' || CIE10_9 = 'E117' || CIE10_10 = 'E117') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E118($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E118' || CIE10_2 = 'E118' || CIE10_3 = 'E118' || CIE10_4 = 'E118' || CIE10_5 = 'E118' || CIE10_6 = 'E118' || CIE10_7 = 'E118' || CIE10_8 = 'E118' || CIE10_9 = 'E118' || CIE10_10 = 'E118') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E119($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E119' || CIE10_2 = 'E119' || CIE10_3 = 'E119' || CIE10_4 = 'E119' || CIE10_5 = 'E119' || CIE10_6 = 'E119' || CIE10_7 = 'E119' || CIE10_8 = 'E119' || CIE10_9 = 'E119' || CIE10_10 = 'E119') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E120($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E120' || CIE10_2 = 'E120' || CIE10_3 = 'E120' || CIE10_4 = 'E120' || CIE10_5 = 'E120' || CIE10_6 = 'E120' || CIE10_7 = 'E120' || CIE10_8 = 'E120' || CIE10_9 = 'E120' || CIE10_10 = 'E120') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E121($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E121' || CIE10_2 = 'E121' || CIE10_3 = 'E121' || CIE10_4 = 'E121' || CIE10_5 = 'E121' || CIE10_6 = 'E121' || CIE10_7 = 'E121' || CIE10_8 = 'E121' || CIE10_9 = 'E121' || CIE10_10 = 'E121') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E122($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E122' || CIE10_2 = 'E122' || CIE10_3 = 'E122' || CIE10_4 = 'E122' || CIE10_5 = 'E122' || CIE10_6 = 'E122' || CIE10_7 = 'E122' || CIE10_8 = 'E122' || CIE10_9 = 'E122' || CIE10_10 = 'E122') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E123($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E123' || CIE10_2 = 'E123' || CIE10_3 = 'E123' || CIE10_4 = 'E123' || CIE10_5 = 'E123' || CIE10_6 = 'E123' || CIE10_7 = 'E123' || CIE10_8 = 'E123' || CIE10_9 = 'E123' || CIE10_10 = 'E123') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E124($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E124' || CIE10_2 = 'E124' || CIE10_3 = 'E124' || CIE10_4 = 'E124' || CIE10_5 = 'E124' || CIE10_6 = 'E124' || CIE10_7 = 'E124' || CIE10_8 = 'E124' || CIE10_9 = 'E124' || CIE10_10 = 'E124') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E125($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E125' || CIE10_2 = 'E125' || CIE10_3 = 'E125' || CIE10_4 = 'E125' || CIE10_5 = 'E125' || CIE10_6 = 'E125' || CIE10_7 = 'E125' || CIE10_8 = 'E125' || CIE10_9 = 'E125' || CIE10_10 = 'E125') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E126($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E126' || CIE10_2 = 'E126' || CIE10_3 = 'E126' || CIE10_4 = 'E126' || CIE10_5 = 'E126' || CIE10_6 = 'E126' || CIE10_7 = 'E126' || CIE10_8 = 'E126' || CIE10_9 = 'E126' || CIE10_10 = 'E126') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E127($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E127' || CIE10_2 = 'E127' || CIE10_3 = 'E127' || CIE10_4 = 'E127' || CIE10_5 = 'E127' || CIE10_6 = 'E127' || CIE10_7 = 'E127' || CIE10_8 = 'E127' || CIE10_9 = 'E127' || CIE10_10 = 'E127') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E128($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E128' || CIE10_2 = 'E128' || CIE10_3 = 'E128' || CIE10_4 = 'E128' || CIE10_5 = 'E128' || CIE10_6 = 'E128' || CIE10_7 = 'E128' || CIE10_8 = 'E128' || CIE10_9 = 'E128' || CIE10_10 = 'E128') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E129($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E129' || CIE10_2 = 'E129' || CIE10_3 = 'E129' || CIE10_4 = 'E129' || CIE10_5 = 'E129' || CIE10_6 = 'E129' || CIE10_7 = 'E129' || CIE10_8 = 'E129' || CIE10_9 = 'E129' || CIE10_10 = 'E129') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E130($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E130' || CIE10_2 = 'E130' || CIE10_3 = 'E130' || CIE10_4 = 'E130' || CIE10_5 = 'E130' || CIE10_6 = 'E130' || CIE10_7 = 'E130' || CIE10_8 = 'E130' || CIE10_9 = 'E130' || CIE10_10 = 'E130') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E131($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E131' || CIE10_2 = 'E131' || CIE10_3 = 'E131' || CIE10_4 = 'E131' || CIE10_5 = 'E131' || CIE10_6 = 'E131' || CIE10_7 = 'E131' || CIE10_8 = 'E131' || CIE10_9 = 'E131' || CIE10_10 = 'E131') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E132($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E132' || CIE10_2 = 'E132' || CIE10_3 = 'E132' || CIE10_4 = 'E132' || CIE10_5 = 'E132' || CIE10_6 = 'E132' || CIE10_7 = 'E132' || CIE10_8 = 'E132' || CIE10_9 = 'E132' || CIE10_10 = 'E132') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E133($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E133' || CIE10_2 = 'E133' || CIE10_3 = 'E133' || CIE10_4 = 'E133' || CIE10_5 = 'E133' || CIE10_6 = 'E133' || CIE10_7 = 'E133' || CIE10_8 = 'E133' || CIE10_9 = 'E133' || CIE10_10 = 'E133') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E134($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E134' || CIE10_2 = 'E134' || CIE10_3 = 'E134' || CIE10_4 = 'E134' || CIE10_5 = 'E134' || CIE10_6 = 'E134' || CIE10_7 = 'E134' || CIE10_8 = 'E134' || CIE10_9 = 'E134' || CIE10_10 = 'E134') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E135($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E135' || CIE10_2 = 'E135' || CIE10_3 = 'E135' || CIE10_4 = 'E135' || CIE10_5 = 'E135' || CIE10_6 = 'E135' || CIE10_7 = 'E135' || CIE10_8 = 'E135' || CIE10_9 = 'E135' || CIE10_10 = 'E135') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E136($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E136' || CIE10_2 = 'E136' || CIE10_3 = 'E136' || CIE10_4 = 'E136' || CIE10_5 = 'E136' || CIE10_6 = 'E136' || CIE10_7 = 'E136' || CIE10_8 = 'E136' || CIE10_9 = 'E136' || CIE10_10 = 'E136') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E137($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E137' || CIE10_2 = 'E137' || CIE10_3 = 'E137' || CIE10_4 = 'E137' || CIE10_5 = 'E137' || CIE10_6 = 'E137' || CIE10_7 = 'E137' || CIE10_8 = 'E137' || CIE10_9 = 'E137' || CIE10_10 = 'E137') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E138($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E138' || CIE10_2 = 'E138' || CIE10_3 = 'E138' || CIE10_4 = 'E138' || CIE10_5 = 'E138' || CIE10_6 = 'E138' || CIE10_7 = 'E138' || CIE10_8 = 'E138' || CIE10_9 = 'E138' || CIE10_10 = 'E138') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E139($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E139' || CIE10_2 = 'E139' || CIE10_3 = 'E139' || CIE10_4 = 'E139' || CIE10_5 = 'E139' || CIE10_6 = 'E139' || CIE10_7 = 'E139' || CIE10_8 = 'E139' || CIE10_9 = 'E139' || CIE10_10 = 'E139') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E140($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E140' || CIE10_2 = 'E140' || CIE10_3 = 'E140' || CIE10_4 = 'E140' || CIE10_5 = 'E140' || CIE10_6 = 'E140' || CIE10_7 = 'E140' || CIE10_8 = 'E140' || CIE10_9 = 'E140' || CIE10_10 = 'E140') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E141($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E141' || CIE10_2 = 'E141' || CIE10_3 = 'E141' || CIE10_4 = 'E141' || CIE10_5 = 'E141' || CIE10_6 = 'E141' || CIE10_7 = 'E141' || CIE10_8 = 'E141' || CIE10_9 = 'E141' || CIE10_10 = 'E141') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E142($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E142' || CIE10_2 = 'E142' || CIE10_3 = 'E142' || CIE10_4 = 'E142' || CIE10_5 = 'E142' || CIE10_6 = 'E142' || CIE10_7 = 'E142' || CIE10_8 = 'E142' || CIE10_9 = 'E142' || CIE10_10 = 'E142') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E143($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E143' || CIE10_2 = 'E143' || CIE10_3 = 'E143' || CIE10_4 = 'E143' || CIE10_5 = 'E143' || CIE10_6 = 'E143' || CIE10_7 = 'E143' || CIE10_8 = 'E143' || CIE10_9 = 'E143' || CIE10_10 = 'E143') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } 
    public static function E144($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E144' || CIE10_2 = 'E144' || CIE10_3 = 'E144' || CIE10_4 = 'E144' || CIE10_5 = 'E144' || CIE10_6 = 'E144' || CIE10_7 = 'E144' || CIE10_8 = 'E144' || CIE10_9 = 'E144' || CIE10_10 = 'E144') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E145($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E145' || CIE10_2 = 'E145' || CIE10_3 = 'E145' || CIE10_4 = 'E145' || CIE10_5 = 'E145' || CIE10_6 = 'E145' || CIE10_7 = 'E145' || CIE10_8 = 'E145' || CIE10_9 = 'E145' || CIE10_10 = 'E145') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E146($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E146' || CIE10_2 = 'E146' || CIE10_3 = 'E146' || CIE10_4 = 'E146' || CIE10_5 = 'E146' || CIE10_6 = 'E146' || CIE10_7 = 'E146' || CIE10_8 = 'E146' || CIE10_9 = 'E146' || CIE10_10 = 'E146') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E147($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E147' || CIE10_2 = 'E147' || CIE10_3 = 'E147' || CIE10_4 = 'E147' || CIE10_5 = 'E147' || CIE10_6 = 'E147' || CIE10_7 = 'E147' || CIE10_8 = 'E147' || CIE10_9 = 'E147' || CIE10_10 = 'E147') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E148($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E148' || CIE10_2 = 'E148' || CIE10_3 = 'E148' || CIE10_4 = 'E148' || CIE10_5 = 'E148' || CIE10_6 = 'E148' || CIE10_7 = 'E148' || CIE10_8 = 'E148' || CIE10_9 = 'E148' || CIE10_10 = 'E148') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E149($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E149' || CIE10_2 = 'E149' || CIE10_3 = 'E149' || CIE10_4 = 'E149' || CIE10_5 = 'E149' || CIE10_6 = 'E149' || CIE10_7 = 'E149' || CIE10_8 = 'E149' || CIE10_9 = 'E149' || CIE10_10 = 'E149') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E15X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E15X' || CIE10_2 = 'E15X' || CIE10_3 = 'E15X' || CIE10_4 = 'E15X' || CIE10_5 = 'E15X' || CIE10_6 = 'E15X' || CIE10_7 = 'E15X' || CIE10_8 = 'E15X' || CIE10_9 = 'E15X' || CIE10_10 = 'E15X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E160($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E160' || CIE10_2 = 'E160' || CIE10_3 = 'E160' || CIE10_4 = 'E160' || CIE10_5 = 'E160' || CIE10_6 = 'E160' || CIE10_7 = 'E160' || CIE10_8 = 'E160' || CIE10_9 = 'E160' || CIE10_10 = 'E160') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E161($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E161' || CIE10_2 = 'E161' || CIE10_3 = 'E161' || CIE10_4 = 'E161' || CIE10_5 = 'E161' || CIE10_6 = 'E161' || CIE10_7 = 'E161' || CIE10_8 = 'E161' || CIE10_9 = 'E161' || CIE10_10 = 'E161') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E162($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E162' || CIE10_2 = 'E162' || CIE10_3 = 'E162' || CIE10_4 = 'E162' || CIE10_5 = 'E162' || CIE10_6 = 'E162' || CIE10_7 = 'E162' || CIE10_8 = 'E162' || CIE10_9 = 'E162' || CIE10_10 = 'E162') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E163($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E163' || CIE10_2 = 'E163' || CIE10_3 = 'E163' || CIE10_4 = 'E163' || CIE10_5 = 'E163' || CIE10_6 = 'E163' || CIE10_7 = 'E163' || CIE10_8 = 'E163' || CIE10_9 = 'E163' || CIE10_10 = 'E163') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E164($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E164' || CIE10_2 = 'E164' || CIE10_3 = 'E164' || CIE10_4 = 'E164' || CIE10_5 = 'E164' || CIE10_6 = 'E164' || CIE10_7 = 'E164' || CIE10_8 = 'E164' || CIE10_9 = 'E164' || CIE10_10 = 'E164') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E168($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E168' || CIE10_2 = 'E168' || CIE10_3 = 'E168' || CIE10_4 = 'E168' || CIE10_5 = 'E168' || CIE10_6 = 'E168' || CIE10_7 = 'E168' || CIE10_8 = 'E168' || CIE10_9 = 'E168' || CIE10_10 = 'E168') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E169($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E169' || CIE10_2 = 'E169' || CIE10_3 = 'E169' || CIE10_4 = 'E169' || CIE10_5 = 'E169' || CIE10_6 = 'E169' || CIE10_7 = 'E169' || CIE10_8 = 'E169' || CIE10_9 = 'E169' || CIE10_10 = 'E169') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
  public static function E200($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E200' || CIE10_2 = 'E200' || CIE10_3 = 'E200' || CIE10_4 = 'E200' || CIE10_5 = 'E200' || CIE10_6 = 'E200' || CIE10_7 = 'E200' || CIE10_8 = 'E200' || CIE10_9 = 'E200' || CIE10_10 = 'E200') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E201($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E201' || CIE10_2 = 'E201' || CIE10_3 = 'E201' || CIE10_4 = 'E201' || CIE10_5 = 'E201' || CIE10_6 = 'E201' || CIE10_7 = 'E201' || CIE10_8 = 'E201' || CIE10_9 = 'E201' || CIE10_10 = 'E201') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E208($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E208' || CIE10_2 = 'E208' || CIE10_3 = 'E208' || CIE10_4 = 'E208' || CIE10_5 = 'E208' || CIE10_6 = 'E208' || CIE10_7 = 'E208' || CIE10_8 = 'E208' || CIE10_9 = 'E208' || CIE10_10 = 'E208') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E209($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E209' || CIE10_2 = 'E209' || CIE10_3 = 'E209' || CIE10_4 = 'E209' || CIE10_5 = 'E209' || CIE10_6 = 'E209' || CIE10_7 = 'E209' || CIE10_8 = 'E209' || CIE10_9 = 'E209' || CIE10_10 = 'E209') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E210($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E210' || CIE10_2 = 'E210' || CIE10_3 = 'E210' || CIE10_4 = 'E210' || CIE10_5 = 'E210' || CIE10_6 = 'E210' || CIE10_7 = 'E210' || CIE10_8 = 'E210' || CIE10_9 = 'E210' || CIE10_10 = 'E210') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E211($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E211' || CIE10_2 = 'E211' || CIE10_3 = 'E211' || CIE10_4 = 'E211' || CIE10_5 = 'E211' || CIE10_6 = 'E211' || CIE10_7 = 'E211' || CIE10_8 = 'E211' || CIE10_9 = 'E211' || CIE10_10 = 'E211') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E212($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E212' || CIE10_2 = 'E212' || CIE10_3 = 'E212' || CIE10_4 = 'E212' || CIE10_5 = 'E212' || CIE10_6 = 'E212' || CIE10_7 = 'E212' || CIE10_8 = 'E212' || CIE10_9 = 'E212' || CIE10_10 = 'E212') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E213($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E213' || CIE10_2 = 'E213' || CIE10_3 = 'E213' || CIE10_4 = 'E213' || CIE10_5 = 'E213' || CIE10_6 = 'E213' || CIE10_7 = 'E213' || CIE10_8 = 'E213' || CIE10_9 = 'E213' || CIE10_10 = 'E213') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E214($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E214' || CIE10_2 = 'E214' || CIE10_3 = 'E214' || CIE10_4 = 'E214' || CIE10_5 = 'E214' || CIE10_6 = 'E214' || CIE10_7 = 'E214' || CIE10_8 = 'E214' || CIE10_9 = 'E214' || CIE10_10 = 'E214') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E215($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E215' || CIE10_2 = 'E215' || CIE10_3 = 'E215' || CIE10_4 = 'E215' || CIE10_5 = 'E215' || CIE10_6 = 'E215' || CIE10_7 = 'E215' || CIE10_8 = 'E215' || CIE10_9 = 'E215' || CIE10_10 = 'E215') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E220($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E220' || CIE10_2 = 'E220' || CIE10_3 = 'E220' || CIE10_4 = 'E220' ||CIE10_5 = 'E220' || CIE10_6 = 'E220' || CIE10_7 = 'E220' || CIE10_8 = 'E220' || CIE10_9 = 'E220' ||CIE10_10 = 'E220') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E221($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E221' || CIE10_2 = 'E221' || CIE10_3 = 'E221' || CIE10_4 = 'E221' || CIE10_5 = 'E221' || CIE10_6 = 'E221' || CIE10_7 = 'E221' || CIE10_8 = 'E221' || CIE10_9 = 'E221' || CIE10_10 = 'E221') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E222($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E222' || CIE10_2 = 'E222' || CIE10_3 = 'E222' || CIE10_4 = 'E222' || CIE10_5 = 'E222' || CIE10_6 = 'E222' || CIE10_7 = 'E222' || CIE10_8 = 'E222' || CIE10_9 = 'E222' || CIE10_10 = 'E222') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E228($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E228' || CIE10_2 = 'E228' || CIE10_3 = 'E228' || CIE10_4 = 'E228' || CIE10_5 = 'E228' || CIE10_6 = 'E228' || CIE10_7 = 'E228' || CIE10_8 = 'E228' || CIE10_9 = 'E228' || CIE10_10 = 'E228') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E229($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E229' || CIE10_2 = 'E229' || CIE10_3 = 'E229' || CIE10_4 = 'E229' || CIE10_5 = 'E229' || CIE10_6 = 'E229' || CIE10_7 = 'E229' || CIE10_8 = 'E229' || CIE10_9 = 'E229' || CIE10_10 = 'E229') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E230($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E230' || CIE10_2 = 'E230' || CIE10_3 = 'E230' || CIE10_4 = 'E230' || CIE10_5 = 'E230' || CIE10_6 = 'E230' || CIE10_7 = 'E230' || CIE10_8 = 'E230' || CIE10_9 = 'E230' || CIE10_10 = 'E230') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E231($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E231' || CIE10_2 = 'E231' || CIE10_3 = 'E231' || CIE10_4 = 'E231' || CIE10_5 = 'E231' || CIE10_6 = 'E231' || CIE10_7 = 'E231' || CIE10_8 = 'E231' || CIE10_9 = 'E231' || CIE10_10 = 'E231') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E232($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E232' || CIE10_2 = 'E232' || CIE10_3 = 'E232' || CIE10_4 = 'E232' || CIE10_5 = 'E232' || CIE10_6 = 'E232' || CIE10_7 = 'E232' || CIE10_8 = 'E232' || CIE10_9 = 'E232' || CIE10_10 = 'E232') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E233($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E233' || CIE10_2 = 'E233' || CIE10_3 = 'E233' || CIE10_4 = 'E233' || CIE10_5 = 'E233' || CIE10_6 = 'E233' || CIE10_7 = 'E233' || CIE10_8 = 'E233' || CIE10_9 = 'E233' || CIE10_10 = 'E233') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E236($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E236' || CIE10_2 = 'E236' || CIE10_3 = 'E236' || CIE10_4 = 'E236' || CIE10_5 = 'E236' || CIE10_6 = 'E236' || CIE10_7 = 'E236' || CIE10_8 = 'E236' || CIE10_9 = 'E236' || CIE10_10 = 'E236') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E237($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E237' || CIE10_2 = 'E237' || CIE10_3 = 'E237' || CIE10_4 = 'E237' || CIE10_5 = 'E237' || CIE10_6 = 'E237' || CIE10_7 = 'E237' || CIE10_8 = 'E237' || CIE10_9 = 'E237' || CIE10_10 = 'E237') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E240($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E240' || CIE10_2 = 'E240' || CIE10_3 = 'E240' || CIE10_4 = 'E240' || CIE10_5 = 'E240' || CIE10_6 = 'E240' || CIE10_7 = 'E240' || CIE10_8 = 'E240' || CIE10_9 = 'E240' || CIE10_10 = 'E240') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E241($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E241' || CIE10_2 = 'E241' || CIE10_3 = 'E241' || CIE10_4 = 'E241' || CIE10_5 = 'E241' || CIE10_6 = 'E241' || CIE10_7 = 'E241' || CIE10_8 = 'E241' || CIE10_9 = 'E241' || CIE10_10 = 'E241') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E242($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E242' || CIE10_2 = 'E242' || CIE10_3 = 'E242' || CIE10_4 = 'E242' || CIE10_5 = 'E242' || CIE10_6 = 'E242' || CIE10_7 = 'E242' || CIE10_8 = 'E242' || CIE10_9 = 'E242' || CIE10_10 = 'E242') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E243($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E243' || CIE10_2 = 'E243' || CIE10_3 = 'E243' || CIE10_4 = 'E243' || CIE10_5 = 'E243' || CIE10_6 = 'E243' || CIE10_7 = 'E243' || CIE10_8 = 'E243' || CIE10_9 = 'E243' || CIE10_10 = 'E243') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E244($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E244' || CIE10_2 = 'E244' || CIE10_3 = 'E244' || CIE10_4 = 'E244' || CIE10_5 = 'E244' || CIE10_6 = 'E244' || CIE10_7 = 'E244' || CIE10_8 = 'E244' || CIE10_9 = 'E244' || CIE10_10 = 'E244') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E248($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E248' || CIE10_2 = 'E248' || CIE10_3 = 'E248' || CIE10_4 = 'E248' || CIE10_5 = 'E248' || CIE10_6 = 'E248' || CIE10_7 = 'E248' || CIE10_8 = 'E248' || CIE10_9 = 'E248' || CIE10_10 = 'E248') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E249($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E249' || CIE10_2 = 'E249' || CIE10_3 = 'E249' || CIE10_4 = 'E249' || CIE10_5 = 'E249' || CIE10_6 = 'E249' || CIE10_7 = 'E249' || CIE10_8 = 'E249' || CIE10_9 = 'E249' || CIE10_10 = 'E249') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E250($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E250' || CIE10_2 = 'E250' || CIE10_3 = 'E250' || CIE10_4 = 'E250' || CIE10_5 = 'E250' || CIE10_6 = 'E250' || CIE10_7 = 'E250' || CIE10_8 = 'E250' || CIE10_9 = 'E250' || CIE10_10 = 'E250') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E258($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E258' || CIE10_2 = 'E258' || CIE10_3 = 'E258' || CIE10_4 = 'E258' || CIE10_5 = 'E258' || CIE10_6 = 'E258' || CIE10_7 = 'E258' || CIE10_8 = 'E258' || CIE10_9 = 'E258' || CIE10_10 = 'E258') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E259($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E259' || CIE10_2 = 'E259' || CIE10_3 = 'E259' || CIE10_4 = 'E259' || CIE10_5 = 'E259' || CIE10_6 = 'E259' || CIE10_7 = 'E259' || CIE10_8 = 'E259' || CIE10_9 = 'E259' || CIE10_10 = 'E259') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E260($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E260' || CIE10_2 = 'E260' || CIE10_3 = 'E260' || CIE10_4 = 'E260' || CIE10_5 = 'E260' || CIE10_6 = 'E260' || CIE10_7 = 'E260' || CIE10_8 = 'E260' || CIE10_9 = 'E260' || CIE10_10 = 'E260') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E261($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E261' || CIE10_2 = 'E261' || CIE10_3 = 'E261' || CIE10_4 = 'E261' || CIE10_5 = 'E261' || CIE10_6 = 'E261' || CIE10_7 = 'E261' || CIE10_8 = 'E261' || CIE10_9 = 'E261' || CIE10_10 = 'E261') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E268($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E268' || CIE10_2 = 'E268' || CIE10_3 = 'E268' || CIE10_4 = 'E268' || CIE10_5 = 'E268' || CIE10_6 = 'E268' || CIE10_7 = 'E268' || CIE10_8 = 'E268' || CIE10_9 = 'E268' || CIE10_10 = 'E268') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E269($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E269' || CIE10_2 = 'E269' || CIE10_3 = 'E269' || CIE10_4 = 'E269' || CIE10_5 = 'E269' || CIE10_6 = 'E269' || CIE10_7 = 'E269' || CIE10_8 = 'E269' || CIE10_9 = 'E269' || CIE10_10 = 'E269') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E270($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E270' || CIE10_2 = 'E270' || CIE10_3 = 'E270' || CIE10_4 = 'E270' || CIE10_5 = 'E270' || CIE10_6 = 'E270' || CIE10_7 = 'E270' || CIE10_8 = 'E270' || CIE10_9 = 'E270' || CIE10_10 = 'E270') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E271($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E271' || CIE10_2 = 'E271' || CIE10_3 = 'E271' || CIE10_4 = 'E271' || CIE10_5 = 'E271' || CIE10_6 = 'E271' || CIE10_7 = 'E271' || CIE10_8 = 'E271' || CIE10_9 = 'E271' || CIE10_10 = 'E271') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E272($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E272' || CIE10_2 = 'E272' || CIE10_3 = 'E272' || CIE10_4 = 'E272' || CIE10_5 = 'E272' || CIE10_6 = 'E272' || CIE10_7 = 'E272' || CIE10_8 = 'E272' || CIE10_9 = 'E272' || CIE10_10 = 'E272') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E273($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E273' || CIE10_2 = 'E273' || CIE10_3 = 'E273' || CIE10_4 = 'E273' || CIE10_5 = 'E273' || CIE10_6 = 'E273' || CIE10_7 = 'E273' || CIE10_8 = 'E273' || CIE10_9 = 'E273' || CIE10_10 = 'E273') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E274($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E274' || CIE10_2 = 'E274' || CIE10_3 = 'E274' || CIE10_4 = 'E274' || CIE10_5 = 'E274' || CIE10_6 = 'E274' || CIE10_7 = 'E274' || CIE10_8 = 'E274' || CIE10_9 = 'E274' || CIE10_10 = 'E274') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E275($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E275' || CIE10_2 = 'E275' || CIE10_3 = 'E275' || CIE10_4 = 'E275' || CIE10_5 = 'E275' || CIE10_6 = 'E275' || CIE10_7 = 'E275' || CIE10_8 = 'E275' || CIE10_9 = 'E275' || CIE10_10 = 'E275') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E278($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E278' || CIE10_2 = 'E278' || CIE10_3 = 'E278' || CIE10_4 = 'E278' || CIE10_5 = 'E278' || CIE10_6 = 'E278' || CIE10_7 = 'E278' || CIE10_8 = 'E278' || CIE10_9 = 'E278' || CIE10_10 = 'E278') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E279($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E279' || CIE10_2 = 'E279' || CIE10_3 = 'E279' || CIE10_4 = 'E279' || CIE10_5 = 'E279' || CIE10_6 = 'E279' || CIE10_7 = 'E279' || CIE10_8 = 'E279' || CIE10_9 = 'E279' || CIE10_10 = 'E279') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E280($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E280' || CIE10_2 = 'E280' || CIE10_3 = 'E280' || CIE10_4 = 'E280' || CIE10_5 = 'E280' || CIE10_6 = 'E280' || CIE10_7 = 'E280' || CIE10_8 = 'E280' || CIE10_9 = 'E280' || CIE10_10 = 'E280') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E281($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E281' || CIE10_2 = 'E281' || CIE10_3 = 'E281' || CIE10_4 = 'E281' || CIE10_5 = 'E281' || CIE10_6 = 'E281' || CIE10_7 = 'E281' || CIE10_8 = 'E281' || CIE10_9 = 'E281' || CIE10_10 = 'E281') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E282($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E282' || CIE10_2 = 'E282' || CIE10_3 = 'E282' || CIE10_4 = 'E282' || CIE10_5 = 'E282' || CIE10_6 = 'E282' || CIE10_7 = 'E282' || CIE10_8 = 'E282' || CIE10_9 = 'E282' || CIE10_10 = 'E282') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E283($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E283' || CIE10_2 = 'E283' || CIE10_3 = 'E283' || CIE10_4 = 'E283' || CIE10_5 = 'E283' || CIE10_6 = 'E283' || CIE10_7 = 'E283' || CIE10_8 = 'E283' || CIE10_9 = 'E283' || CIE10_10 = 'E283') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E288($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E288' || CIE10_2 = 'E288' || CIE10_3 = '88288' || CIE10_4 = 'E288' || CIE10_5 = 'E288' || CIE10_6 = 'E288' || CIE10_7 = 'E288' || CIE10_8 = '88288' || CIE10_9 = 'E288' || CIE10_10 = 'E288') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E289($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E289' || CIE10_2 = 'E289' || CIE10_3 = 'E289' || CIE10_4 = 'E289' || CIE10_5 = 'E289' || CIE10_6 = 'E289' || CIE10_7 = 'E289' || CIE10_8 = 'E289' || CIE10_9 = 'E289' || CIE10_10 = 'E289') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E290($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E290' || CIE10_2 = 'E290' || CIE10_3 = 'E290' || CIE10_4 = 'E290' || CIE10_5 = 'E290' || CIE10_6 = 'E290' || CIE10_7 = 'E290' || CIE10_8 = 'E290' || CIE10_9 = 'E290' || CIE10_10 = 'E290') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E291($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E291' || CIE10_2 = 'E291' || CIE10_3 = 'E291' || CIE10_4 = 'E291' || CIE10_5 = 'E291' || CIE10_6 = 'E291' || CIE10_7 = 'E291' || CIE10_8 = 'E291' || CIE10_9 = 'E291' || CIE10_10 = 'E291') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E298($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E298' || CIE10_2 = 'E298' || CIE10_3 = 'E298' || CIE10_4 = 'E298' || CIE10_5 = 'E298' || CIE10_6 = 'E298' || CIE10_7 = 'E298' || CIE10_8 = 'E298' || CIE10_9 = 'E298' || CIE10_10 = 'E298') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E299($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E299' || CIE10_2 = 'E299' || CIE10_3 = 'E299' || CIE10_4 = 'E299' || CIE10_5 = 'E299' || CIE10_6 = 'E299' || CIE10_7 = 'E299' || CIE10_8 = 'E299' || CIE10_9 = 'E299' || CIE10_10 = 'E299') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E300($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E300' || CIE10_2 = 'E300' || CIE10_3 = 'E300' || CIE10_4 = 'E300' || CIE10_5 = 'E300' || CIE10_6 = 'E300' || CIE10_7 = 'E300' || CIE10_8 = 'E300' || CIE10_9 = 'E300' || CIE10_10 = 'E300') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E301($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E301' || CIE10_2 = 'E301' || CIE10_3 = 'E301' || CIE10_4 = 'E301' || CIE10_5 = 'E301' || CIE10_6 = 'E301' || CIE10_7 = 'E301' || CIE10_8 = 'E301' || CIE10_9 = 'E301' || CIE10_10 = 'E301') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E308($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E308' || CIE10_2 = 'E308' || CIE10_3 = 'E308' || CIE10_4 = 'E308' || CIE10_5 = 'E308' || CIE10_6 = 'E308' || CIE10_7 = 'E308' || CIE10_8 = 'E308' || CIE10_9 = 'E308' || CIE10_10 = 'E308') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E309($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E309' || CIE10_2 = 'E309' || CIE10_3 = 'E309' || CIE10_4 = 'E309' || CIE10_5 = 'E309' || CIE10_6 = 'E309' || CIE10_7 = 'E309' || CIE10_8 = 'E309' || CIE10_9 = 'E309' || CIE10_10 = 'E309') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E310($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E310' || CIE10_2 = 'E310' || CIE10_3 = 'E310' || CIE10_4 = 'E310' || CIE10_5 = 'E310' || CIE10_6 = 'E310' || CIE10_7 = 'E310' || CIE10_8 = 'E310' || CIE10_9 = 'E310' || CIE10_10 = 'E310') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E311($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E311' || CIE10_2 = 'E311' || CIE10_3 = 'E311' || CIE10_4 = 'E311' || CIE10_5 = 'E311' || CIE10_6 = 'E311' || CIE10_7 = 'E311' || CIE10_8 = 'E311' || CIE10_9 = 'E311' || CIE10_10 = 'E311') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E318($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E318' || CIE10_2 = 'E318' || CIE10_3 = 'E318' || CIE10_4 = 'E318' || CIE10_5 = 'E318' || CIE10_6 = 'E318' || CIE10_7 = 'E318' || CIE10_8 = 'E318' || CIE10_9 = 'E318' || CIE10_10 = 'E318') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E319($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E319' || CIE10_2 = 'E319' || CIE10_3 = 'E319' || CIE10_4 = 'E319' || CIE10_5 = 'E319' || CIE10_6 = 'E319' || CIE10_7 = 'E319' || CIE10_8 = 'E319' || CIE10_9 = 'E319' || CIE10_10 = 'E319') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E320($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E320' || CIE10_2 = 'E320' || CIE10_3 = 'E320' || CIE10_4 = 'E320' || CIE10_5 = 'E320' || CIE10_6 = 'E320' || CIE10_7 = 'E320' || CIE10_8 = 'E320' || CIE10_9 = 'E320' || CIE10_10 = 'E320') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E321($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E321' || CIE10_2 = 'E321' || CIE10_3 = 'E321' || CIE10_4 = 'E321' || CIE10_5 = 'E321' || CIE10_6 = 'E321' || CIE10_7 = 'E321' || CIE10_8 = 'E321' || CIE10_9 = 'E321' || CIE10_10 = 'E321') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E328($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E328' || CIE10_2 = 'E328' || CIE10_3 = 'E328' || CIE10_4 = 'E328' || CIE10_5 = 'E328' || CIE10_6 = 'E328' || CIE10_7 = 'E328' || CIE10_8 = 'E328' || CIE10_9 = 'E328' || CIE10_10 = 'E328') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E329($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E329' || CIE10_2 = 'E329' || CIE10_3 = 'E329' || CIE10_4 = 'E329' || CIE10_5 = 'E329' || CIE10_6 = 'E329' || CIE10_7 = 'E329' || CIE10_8 = 'E329' || CIE10_9 = 'E329' || CIE10_10 = 'E329') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E340($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E340' || CIE10_2 = 'E340' || CIE10_3 = 'E340' || CIE10_4 = 'E340' || CIE10_5 = 'E340' || CIE10_6 = 'E340' || CIE10_7 = 'E340' || CIE10_8 = 'E340' || CIE10_9 = 'E340' || CIE10_10 = 'E340') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E341($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E341' || CIE10_2 = 'E341' || CIE10_3 = 'E341' || CIE10_4 = 'E341' || CIE10_5 = 'E341' || CIE10_6 = 'E341' || CIE10_7 = 'E341' || CIE10_8 = 'E341' || CIE10_9 = 'E341' || CIE10_10 = 'E341' ) &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E342($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E342' || CIE10_2 = 'E342' || CIE10_3 = 'E342' || CIE10_4 = 'E342' || CIE10_5 = 'E342' || CIE10_6 = 'E342' || CIE10_7 = 'E342' || CIE10_8 = 'E342' || CIE10_9 = 'E342' || CIE10_10= 'E342') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E343($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E343' || CIE10_2 = 'E343' || CIE10_3 = 'E343' || CIE10_4 = 'E343' || CIE10_5 = 'E343' || CIE10_6 = 'E343' || CIE10_7 = 'E343' || CIE10_8 = 'E343' || CIE10_9 = 'E343' || CIE10_10 = 'E343') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E344($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E344' || CIE10_2 = 'E344' || CIE10_3 = 'E344' || CIE10_4 = 'E344' || CIE10_5 = 'E344' || CIE10_6 = 'E344' || CIE10_7 = 'E344' || CIE10_8 = 'E344' || CIE10_9 = 'E344' || CIE10_10 = 'E344') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E345($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E345' || CIE10_2 = 'E345' || CIE10_3 = 'E345' || CIE10_4 = 'E345' || CIE10_5 = 'E345' || CIE10_6 = 'E345' || CIE10_7 = 'E345' || CIE10_8 = 'E345' || CIE10_9 = 'E345' || CIE10_10 = 'E345') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E348($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E348' || CIE10_2 = 'E348' || CIE10_3 = 'E348' || CIE10_4 = 'E348' || CIE10_5 = 'E348' || CIE10_6 = 'E348' || CIE10_7 = 'E348' || CIE10_8 = 'E348' || CIE10_9 = 'E348' || CIE10_10 = 'E348') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E349($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E349' || CIE10_2 = 'E349' || CIE10_3 = 'E349' || CIE10_4 = 'E349' || CIE10_5 = 'E349' || CIE10_6 = 'E349' || CIE10_7 = 'E349' || CIE10_8 = 'E349' || CIE10_9 = 'E349' || CIE10_10 = 'E349') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E350($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E350' || CIE10_2 = 'E350' || CIE10_3 = 'E350' || CIE10_4 = 'E350' || CIE10_5 = 'E350' || CIE10_6 = 'E350' || CIE10_7 = 'E350' || CIE10_8 = 'E350' || CIE10_9 = 'E350' || CIE10_10 = 'E350') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E351($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E351' || CIE10_2 = 'E351' || CIE10_3 = 'E351' || CIE10_4 = 'E351' || CIE10_5 = 'E351' || CIE10_6 = 'E351' || CIE10_7 = 'E351' || CIE10_8 = 'E351' || CIE10_9 = 'E351' || CIE10_10 = 'E351') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E358($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E358' || CIE10_2 = 'E358' || CIE10_3 = 'E358' || CIE10_4 = 'E358' || CIE10_5 = 'E358' || CIE10_6 = 'E358' || CIE10_7 = 'E358' || CIE10_8 = 'E358' || CIE10_9 = 'E358' || CIE10_10 = 'E358') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E40X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E40X' || CIE10_2 = 'E40X' || CIE10_3 = 'E40X' || CIE10_4 = 'E40X' || CIE10_5 = 'E40X' || CIE10_6 = 'E40X' || CIE10_7 = 'E40X' || CIE10_8 = 'E40X' || CIE10_9 = 'E40X' || CIE10_10 = 'E40X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E41X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E41X' || CIE10_2 = 'E41X' || CIE10_3 = 'E41X' || CIE10_4 = 'E41X' || CIE10_5 = 'E41X' || CIE10_6 = 'E41X' || CIE10_7 = 'E41X' || CIE10_8 = 'E41X' || CIE10_9 = 'E41X' || CIE10_10 = 'E41X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E42X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E42X' || CIE10_2 = 'E42X' || CIE10_3 = 'E42X' || CIE10_4 = 'E42X' || CIE10_5 = 'E42X' || CIE10_6 = 'E42X' || CIE10_7 = 'E42X' || CIE10_8 = 'E42X' || CIE10_9 = 'E42X' || CIE10_10 = 'E42X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E43X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E43X' || CIE10_2 = 'E43X' || CIE10_3 = 'E43X' || CIE10_4 = 'E43X' || CIE10_5 = 'E43X' || CIE10_6 = 'E43X' || CIE10_7 = 'E43X' || CIE10_8 = 'E43X' || CIE10_9 = 'E43X' || CIE10_10 = 'E43X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E440($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E440' || CIE10_2 = 'E440' || CIE10_3 = 'E440' || CIE10_4 = 'E440' || CIE10_5 = 'E440' || CIE10_6 = 'E440' || CIE10_7 = 'E440' || CIE10_8 = 'E440' || CIE10_9 = 'E440' || CIE10_10 = 'E440') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E441($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E441' || CIE10_2 = 'E441' || CIE10_3 = 'E441' || CIE10_4 = 'E441' || CIE10_5 = 'E441' || CIE10_6 = 'E441' || CIE10_7 = 'E441' || CIE10_8 = 'E441' || CIE10_9 = 'E441' || CIE10_10 = 'E441') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E45X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E45X' || CIE10_2 = 'E45X' || CIE10_3 = 'E45X' || CIE10_4 = 'E45X' || CIE10_5 = 'E45X' || CIE10_6 = 'E45X' || CIE10_7 = 'E45X' || CIE10_8 = 'E45X' || CIE10_9 = 'E45X' || CIE10_10 = 'E45X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E46X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E46X' || CIE10_2 = 'E46X' || CIE10_3 = 'E46X' || CIE10_4 = 'E46X' || CIE10_5 = 'E46X' || CIE10_6 = 'E46X' || CIE10_7 = 'E46X' || CIE10_8 = 'E46X' || CIE10_9 = 'E46X' || CIE10_10 = 'E46X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E500($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E500' || CIE10_2 = 'E500' || CIE10_3 = 'E500' || CIE10_4 = 'E500' || CIE10_5 = 'E500' || CIE10_6 = 'E500' || CIE10_7 = 'E500' || CIE10_8 = 'E500' || CIE10_9 = 'E500' || CIE10_10 = 'E500') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E501($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E501' || CIE10_2 = 'E501' || CIE10_3 = 'E501' || CIE10_4 = 'E501' || CIE10_5 = 'E501' || CIE10_6 = 'E501' || CIE10_7 = 'E501' || CIE10_8 = 'E501' || CIE10_9 = 'E501' || CIE10_10 = 'E501') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E502($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E502' || CIE10_2 = 'E502' || CIE10_3 = 'E502' || CIE10_4 = 'E502' || CIE10_5 = 'E502' || CIE10_6 = 'E502' || CIE10_7 = 'E502' || CIE10_8 = 'E502' || CIE10_9 = 'E502' || CIE10_10 = 'E502') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E503($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E503' || CIE10_2 = 'E503' || CIE10_3 = 'E503' || CIE10_4 = 'E503' || CIE10_5 = 'E503' || CIE10_6 = 'E503' || CIE10_7 = 'E503' || CIE10_8 = 'E503' || CIE10_9 = 'E503' || CIE10_10 = 'E503') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E504($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E504' || CIE10_2 = 'E504' || CIE10_3 = 'E504' || CIE10_4 = 'E504' || CIE10_5 = 'E504' || CIE10_6 = 'E504' || CIE10_7 = 'E504' || CIE10_8 = 'E504' || CIE10_9 = 'E504' || CIE10_10 = 'E504') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E505($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E505' || CIE10_2 = 'E505' || CIE10_3 = 'E505' || CIE10_4 = 'E505' || CIE10_5 = 'E505' || CIE10_6 = 'E505' || CIE10_7 = 'E505' || CIE10_8 = 'E505' || CIE10_9 = 'E505' || CIE10_10 = 'E505') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E506($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E506' || CIE10_2 = 'E506' || CIE10_3 = 'E506' || CIE10_4 = 'E506' || CIE10_5 = 'E506' || CIE10_6 = 'E506' || CIE10_7 = 'E506' || CIE10_8 = 'E506' || CIE10_9 = 'E506' || CIE10_10 = 'E506') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E507($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E507' || CIE10_2 = 'E507' || CIE10_3 = 'E507' || CIE10_4 = 'E507' || CIE10_5 = 'E507' || CIE10_6 = 'E507' || CIE10_7 = 'E507' || CIE10_8 = 'E507' || CIE10_9 = 'E507' || CIE10_10 = 'E507') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E508($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E508' || CIE10_2 = 'E508' || CIE10_3 = 'E508' || CIE10_4 = 'E508' || CIE10_5 = 'E508' || CIE10_6 = 'E508' || CIE10_7 = 'E508' || CIE10_8 = 'E508' || CIE10_9 = 'E508' || CIE10_10 = 'E508') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E509($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E509' || CIE10_2 = 'E509' || CIE10_3 = 'E509' || CIE10_4 = 'E509' || CIE10_5 = 'E509' || CIE10_6 = 'E509' || CIE10_7 = 'E509' || CIE10_8 = 'E509' || CIE10_9 = 'E509' || CIE10_10 = 'E509') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E511($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E511' || CIE10_2 = 'E511' || CIE10_3 = 'E511' || CIE10_4 = 'E511' || CIE10_5 = 'E511' || CIE10_6 = 'E511' || CIE10_7 = 'E511' || CIE10_8 = 'E511' || CIE10_9 = 'E511' || CIE10_10 = 'E511') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E512($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E512' || CIE10_2 = 'E512' || CIE10_3 = 'E512' || CIE10_4 = 'E512' || CIE10_5 = 'E512' || CIE10_6 = 'E512' || CIE10_7 = 'E512' || CIE10_8 = 'E512' || CIE10_9 = 'E512' || CIE10_10 = 'E512') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E518($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E518' || CIE10_2 = 'E518' || CIE10_3 = 'E518' || CIE10_4 = 'E518' || CIE10_5 = 'E518' || CIE10_6 = 'E518' || CIE10_7 = 'E518' || CIE10_8 = 'E518' || CIE10_9 = 'E518' || CIE10_10 = 'E518') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E519($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E519' || CIE10_2 = 'E519' || CIE10_3 = 'E519' || CIE10_4 = 'E519' || CIE10_5 = 'E519' || CIE10_6 = 'E519' || CIE10_7 = 'E519' || CIE10_8 = 'E519' || CIE10_9 = 'E519' || CIE10_10 = 'E519') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E52X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E52X' || CIE10_2 = 'E52X' || CIE10_3 = 'E52X' || CIE10_4 = 'E52X' || CIE10_5 = 'E52X' || CIE10_6 = 'E52X' || CIE10_7 = 'E52X' || CIE10_8 = 'E52X' || CIE10_9 = 'E52X' || CIE10_10 = 'E52X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E530($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E530' || CIE10_2 = 'E530' || CIE10_3 = 'E530' || CIE10_4 = 'E530' || CIE10_5 = 'E530' || CIE10_6 = 'E530' || CIE10_7 = 'E530' || CIE10_8 = 'E530' || CIE10_9 = 'E530' || CIE10_10 = 'E530') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E531($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E531' || CIE10_2 = 'E531' || CIE10_3 = 'E531' || CIE10_4 = 'E531' || CIE10_5 = 'E531' || CIE10_6 = 'E531' || CIE10_7 = 'E531' || CIE10_8 = 'E531' || CIE10_9 = 'E531' || CIE10_10 = 'E531') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E538($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E538' || CIE10_2 = 'E538' || CIE10_3 = 'E538' || CIE10_4 = 'E538' || CIE10_5 = 'E538' || CIE10_6 = 'E538' || CIE10_7 = 'E538' || CIE10_8 = 'E538' || CIE10_9 = 'E538' || CIE10_10 = 'E538') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E539($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E539' || CIE10_2 = 'E539' || CIE10_3 = 'E539' || CIE10_4 = 'E539' || CIE10_5 = 'E539' || CIE10_6 = 'E539' || CIE10_7 = 'E539' || CIE10_8 = 'E539' || CIE10_9 = 'E539' || CIE10_10 = 'E539') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E54X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E54X' || CIE10_2 = 'E54X' || CIE10_3 = 'E54X' || CIE10_4 = 'E54X' || CIE10_5 = 'E54X' || CIE10_6 = 'E54X' || CIE10_7 = 'E54X' || CIE10_8 = 'E54X' || CIE10_9 = 'E54X' || CIE10_10 = 'E54X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E550($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E550' || CIE10_2 = 'E550' || CIE10_3 = 'E550' || CIE10_4 = 'E550' || CIE10_5 = 'E550' || CIE10_6 = 'E550' || CIE10_7 = 'E550' || CIE10_8 = 'E550' || CIE10_9 = 'E550' || CIE10_10 = 'E550') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E559($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E559' || CIE10_2 = 'E559' || CIE10_3 = 'E559' || CIE10_4 = 'E559' || CIE10_5 = 'E559' || CIE10_6 = 'E559' || CIE10_7 = 'E559' || CIE10_8 = 'E559' || CIE10_9 = 'E559' || CIE10_10 = 'E559') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E560($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E560' || CIE10_2 = 'E560' || CIE10_3 = 'E560' || CIE10_4 = 'E560' || CIE10_5 = 'E560' || CIE10_6 = 'E560' || CIE10_7 = 'E560' || CIE10_8 = 'E560' || CIE10_9 = 'E560' || CIE10_10 = 'E560') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E561($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E561' || CIE10_2 = 'E561' || CIE10_3 = 'E561' || CIE10_4 = 'E561' || CIE10_5 = 'E561' || CIE10_6 = 'E561' || CIE10_7 = 'E561' || CIE10_8 = 'E561' || CIE10_9 = 'E561' || CIE10_10 = 'E561') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E568($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E568' || CIE10_2 = 'E568' || CIE10_3 = 'E568' || CIE10_4 = 'E568' || CIE10_5 = 'E568' || CIE10_6 = 'E568' || CIE10_7 = 'E568' || CIE10_8 = 'E568' || CIE10_9 = 'E568' || CIE10_10 = 'E568') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E569($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E569' || CIE10_2 = 'E569' || CIE10_3 = 'E569' || CIE10_4 = 'E569' || CIE10_5 = 'E569' || CIE10_6 = 'E569' || CIE10_7 = 'E569' || CIE10_8 = 'E569' || CIE10_9 = 'E569' || CIE10_10 = 'E569') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E58X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E58X' || CIE10_2 = 'E58X' || CIE10_3 = 'E58X' || CIE10_4 = 'E58X' || CIE10_5 = 'E58X' || CIE10_6 = 'E58X' || CIE10_7 = 'E58X' || CIE10_8 = 'E58X' || CIE10_9 = 'E58X' || CIE10_9 = 'E58X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E59X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E59X' || CIE10_2 = 'E59X' || CIE10_3 = 'E59X' || CIE10_4 = 'E59X' || CIE10_5 = 'E59X' || CIE10_6 = 'E59X' || CIE10_7 = 'E59X' || CIE10_8 = 'E59X' || CIE10_9 = 'E59X' || CIE10_10 = 'E59X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E60X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E60X' || CIE10_2 = 'E60X' || CIE10_3 = 'E60X' || CIE10_4 = 'E60X' || CIE10_5 = 'E60X' || CIE10_6 = 'E60X' || CIE10_7 = 'E60X' || CIE10_8 = 'E60X' || CIE10_9 = 'E60X' || CIE10_10 = 'E60X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E610($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E610' || CIE10_2 = 'E610' || CIE10_3 = 'E610' || CIE10_4 = 'E610' || CIE10_5 = 'E610' || CIE10_6 = 'E610' || CIE10_7 = 'E610' || CIE10_8 = 'E610' || CIE10_9 = 'E610' || CIE10_10 = 'E610') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E611($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E611' || CIE10_2 = 'E611' || CIE10_3 = 'E611' || CIE10_4 = 'E611' || CIE10_5 = 'E611' || CIE10_6 = 'E611' || CIE10_7 = 'E611' || CIE10_8 = 'E611' || CIE10_9 = 'E611' || CIE10_10 = 'E611') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E612($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E612' || CIE10_2 = 'E612' || CIE10_3 = 'E612' || CIE10_4 = 'E612' || CIE10_5 = 'E612' || CIE10_1 = 'E612' || CIE10_2 = 'E612' || CIE10_3 = 'E612' || CIE10_4 = 'E612' || CIE10_5 = 'E612') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E613($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E613' || CIE10_2 = 'E613' || CIE10_3 = 'E613' || CIE10_4 = 'E613' || CIE10_5 = 'E613' || CIE10_6 = 'E613' || CIE10_7 = 'E613' || CIE10_8 = 'E613' || CIE10_9 = 'E613' || CIE10_10 = 'E613') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E614($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E614' || CIE10_2 = 'E614' || CIE10_3 = 'E614' || CIE10_4 = 'E614' || CIE10_5 = 'E614' || CIE10_6 = 'E614' || CIE10_7 = 'E614' || CIE10_8 = 'E614' || CIE10_9 = 'E614' || CIE10_10 = 'E614') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E615($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E615' || CIE10_2 = 'E615' || CIE10_3 = 'E615' || CIE10_4 = 'E615' || CIE10_5 = 'E615' || CIE10_6 = 'E615' || CIE10_7 = 'E615' || CIE10_8 = 'E615' || CIE10_9 = 'E615' || CIE10_10 = 'E615') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E616($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E616' || CIE10_2 = 'E616' || CIE10_3 = 'E616' || CIE10_4 = 'E616' || CIE10_5 = 'E616' || CIE10_6 = 'E616' || CIE10_7 = 'E616' || CIE10_8 = 'E616' || CIE10_9 = 'E616' || CIE10_10 = 'E616') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E617($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E617' || CIE10_2 = 'E617' || CIE10_3 = 'E617' || CIE10_4 = 'E617' || CIE10_5 = 'E617' || CIE10_6 = 'E617' || CIE10_7 = 'E617' || CIE10_8 = 'E617' || CIE10_9 = 'E617' || CIE10_10 = 'E617') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E618($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E618' || CIE10_2 = 'E618' || CIE10_3 = 'E618' || CIE10_4 = 'E618' || CIE10_5 = 'E618' || CIE10_6 = 'E618' || CIE10_7 = 'E618' || CIE10_8 = 'E618' || CIE10_9 = 'E618' || CIE10_10 = 'E618') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E619($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E619' || CIE10_2 = 'E619' || CIE10_3 = 'E619' || CIE10_4 = 'E619' || CIE10_5 = 'E619' || CIE10_6 = 'E619' || CIE10_7 = 'E619' || CIE10_8 = 'E619' || CIE10_9 = 'E619' || CIE10_10 = 'E619') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E630($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E630' || CIE10_2 = 'E630' || CIE10_3 = 'E630' || CIE10_4 = 'E630' || CIE10_5 = 'E630' || CIE10_6 = 'E630' || CIE10_7 = 'E630' || CIE10_8 = 'E630' || CIE10_9 = 'E630' || CIE10_10 = 'E630') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E631($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E631' || CIE10_2 = 'E631' || CIE10_3 = 'E631' || CIE10_4 = 'E631' || CIE10_5 = 'E631' || CIE10_6 = 'E631' || CIE10_7 = 'E631' || CIE10_8 = 'E631' || CIE10_9 = 'E631' || CIE10_10 = 'E631') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E638($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E638' || CIE10_2 = 'E638' || CIE10_3 = 'E638' || CIE10_4 = 'E638' || CIE10_5 = 'E638' || CIE10_6 = 'E638' || CIE10_7 = 'E638' || CIE10_8 = 'E638' || CIE10_9 = 'E638' || CIE10_10 = 'E638') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E639($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E639' || CIE10_2 = 'E639' || CIE10_3 = 'E639' || CIE10_4 = 'E639' || CIE10_5 = 'E639' || CIE10_6 = 'E639' || CIE10_7 = 'E639' || CIE10_8 = 'E639' || CIE10_9 = 'E639' || CIE10_10 = 'E639') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E640($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E640' || CIE10_2 = 'E640' || CIE10_3 = 'E640' || CIE10_4 = 'E640' || CIE10_5 = 'E640' || CIE10_6 = 'E640' || CIE10_7 = 'E640' || CIE10_8 = 'E640' || CIE10_9 = 'E640' || CIE10_10 = 'E640') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E641($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E641' || CIE10_2 = 'E641' || CIE10_3 = 'E641' || CIE10_4 = 'E641' || CIE10_5 = 'E641' || CIE10_6 = 'E641' || CIE10_7 = 'E641' || CIE10_8 = 'E641' || CIE10_9 = 'E641' || CIE10_10 = 'E641') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E642($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E642' || CIE10_2 = 'E642' || CIE10_3 = 'E642' || CIE10_4 = 'E642' || CIE10_5 = 'E642' || CIE10_6 = 'E642' || CIE10_7 = 'E642' || CIE10_8 = 'E642' || CIE10_9 = 'E642' || CIE10_10 = 'E642') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E643($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E643' || CIE10_2 = 'E643' || CIE10_3 = 'E643' || CIE10_4 = 'E643' || CIE10_5 = 'E643' || CIE10_6 = 'E643' || CIE10_7 = 'E643' || CIE10_8 = 'E643' || CIE10_9 = 'E643' || CIE10_10 = 'E643') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E648($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E648' || CIE10_2 = 'E648' || CIE10_3 = 'E648' || CIE10_4 = 'E648' || CIE10_5 = 'E648' || CIE10_6 = 'E648' || CIE10_7 = 'E648' || CIE10_8 = 'E648' || CIE10_9 = 'E648' || CIE10_10 = 'E648') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E649($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E649' || CIE10_2 = 'E649' || CIE10_3 = 'E649' || CIE10_4 = 'E649' || CIE10_5 = 'E649') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E65X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E65X' || CIE10_2 = 'E65X' || CIE10_3 = 'E65X' || CIE10_4 = 'E65X' || CIE10_5 = 'E65X' || CIE10_6 = 'E65X' || CIE10_7 = 'E65X' || CIE10_8 = 'E65X' || CIE10_9 = 'E65X' || CIE10_10 = 'E65X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E660($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E660' || CIE10_2 = 'E660' || CIE10_3 = 'E660' || CIE10_4 = 'E660' || CIE10_5 = 'E660' || CIE10_6 = 'E660' || CIE10_7 = 'E660' || CIE10_8 = 'E660' || CIE10_9 = 'E660' || CIE10_10 = 'E660') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E661($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E661' || CIE10_2 = 'E661' || CIE10_3 = 'E661' || CIE10_4 = 'E661' || CIE10_5 = 'E661' || CIE10_6 = 'E661' || CIE10_7 = 'E661' || CIE10_8 = 'E661' || CIE10_9 = 'E661' || CIE10_10 = 'E661') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E662($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E662' || CIE10_2 = 'E662' || CIE10_3 = 'E662' || CIE10_4 = 'E662' || CIE10_5 = 'E662' || CIE10_6 = 'E662' || CIE10_7 = 'E662' || CIE10_8 = 'E662' || CIE10_9 = 'E662' || CIE10_10 = 'E662') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E668($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E668' || CIE10_2 = 'E668' || CIE10_3 = 'E668' || CIE10_4 = 'E668' || CIE10_5 = 'E668' || CIE10_6 = 'E668' || CIE10_7 = 'E668' || CIE10_8 = 'E668' || CIE10_9 = 'E668' || CIE10_10 = 'E668') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E669($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E669' || CIE10_2 = 'E669' || CIE10_3 = 'E669' || CIE10_4 = 'E669' || CIE10_5 = 'E669' || CIE10_6 = 'E669' || CIE10_7 = 'E669' || CIE10_8 = 'E669' || CIE10_9 = 'E669' || CIE10_10 = 'E669') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
  public static function E670($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E670' || CIE10_2 = 'E670' || CIE10_3 = 'E670' || CIE10_4 = 'E670' || CIE10_5 = 'E670' || CIE10_6 = 'E670' || CIE10_7 = 'E670' || CIE10_8 = 'E670' || CIE10_9 = 'E670' || CIE10_10 = 'E670') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E671($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E671' || CIE10_2 = 'E671' || CIE10_3 = 'E671' || CIE10_4 = 'E671' || CIE10_5 = 'E671' || CIE10_6 = 'E671' || CIE10_7 = 'E671' || CIE10_8 = 'E671' || CIE10_9 = 'E671' || CIE10_10 = 'E671') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E672($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E672' || CIE10_2 = 'E672' || CIE10_3 = 'E672' || CIE10_4 = 'E672' || CIE10_5 = 'E672' || CIE10_6 = 'E672' || CIE10_7 = 'E672' || CIE10_8 = 'E672' || CIE10_9 = 'E672' || CIE10_10 = 'E672') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E673($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E673' || CIE10_2 = 'E673' || CIE10_3 = 'E673' || CIE10_4 = 'E673' || CIE10_5 = 'E673' || CIE10_6 = 'E673' || CIE10_7 = 'E673' || CIE10_8 = 'E673' || CIE10_9 = 'E673' || CIE10_10 = 'E673') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E678($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E678' || CIE10_2 = 'E678' || CIE10_3 = 'E678' || CIE10_4 = 'E678' || CIE10_5 = 'E678' ||CIE10_6 = 'E678' || CIE10_7 = 'E678' || CIE10_8 = 'E678' || CIE10_9 = 'E678' || CIE10_10 = 'E678') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E68X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E68X' || CIE10_2 = 'E68X' || CIE10_3 = 'E68X' || CIE10_4 = 'E68X' || CIE10_5 = 'E68X' || CIE10_6 = 'E68X' || CIE10_7= 'E68X' || CIE10_8 = 'E68X' || CIE10_9 = 'E68X' || CIE10_10 = 'E68X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
    public static function E700($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E700' || CIE10_2 = 'E700' || CIE10_3 = 'E700' || CIE10_4 = 'E700' || CIE10_5 = 'E700' || CIE10_6 = 'E700' || CIE10_7 = 'E700' || CIE10_8 = 'E700' || CIE10_9 = 'E700' || CIE10_10 = 'E700') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E701($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E701' || CIE10_2 = 'E701' || CIE10_3 = 'E701' || CIE10_4 = 'E701' || CIE10_5 = 'E701' || CIE10_6 = 'E701' || CIE10_7 = 'E701' || CIE10_8 = 'E701' || CIE10_9 = 'E701' || CIE10_10 = 'E701') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E702($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E702' || CIE10_2 = 'E702' || CIE10_3 = 'E702' || CIE10_4 = 'E702' || CIE10_5 = 'E702' || CIE10_6 = 'E702' || CIE10_7 = 'E702' || CIE10_8 = 'E702' || CIE10_9 = 'E702' || CIE10_10 = 'E702') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E703($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E703' || CIE10_2 = 'E703' || CIE10_3 = 'E703' || CIE10_4 = 'E703' || CIE10_5 = 'E703' || CIE10_6 = 'E703' || CIE10_7 = 'E703' || CIE10_8 = 'E703' || CIE10_9 = 'E703' || CIE10_10 = 'E703') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E708($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E708' || CIE10_2 = 'E708' || CIE10_3 = 'E708' || CIE10_4 = 'E708' || CIE10_5 = 'E708' || CIE10_6 = 'E708' || CIE10_7 = 'E708' || CIE10_8 = 'E708' || CIE10_9 = 'E708' || CIE10_10 = 'E708') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E709($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E709' || CIE10_2 = 'E709' || CIE10_3 = 'E709' || CIE10_4 = 'E709' || CIE10_5 = 'E709' || CIE10_6 = 'E709' || CIE10_7 = 'E709' || CIE10_8 = 'E709' || CIE10_9 = 'E709' || CIE10_10 = 'E709') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E710($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E710' || CIE10_2 = 'E710' || CIE10_3 = 'E710' || CIE10_4 = 'E710' || CIE10_5 = 'E710' || CIE10_6 = 'E710' || CIE10_7 = 'E710' || CIE10_8 = 'E710' || CIE10_9 = 'E710' || CIE10_10 = 'E710') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E711($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E711' || CIE10_2 = 'E711' || CIE10_3 = 'E711' || CIE10_4 = 'E711' || CIE10_5 = 'E711' || CIE10_6 = 'E711' || CIE10_7 = 'E711' || CIE10_8 = 'E711' || CIE10_9 = 'E711' || CIE10_10 = 'E711') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E712($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E712' || CIE10_2 = 'E712' || CIE10_3 = 'E712' || CIE10_4 = 'E712' || CIE10_5 = 'E712' || CIE10_6 = 'E712' || CIE10_7 = 'E712' || CIE10_8 = 'E712' || CIE10_9 = 'E712' || CIE10_10 = 'E712') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E713($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E713' || CIE10_2 = 'E713' || CIE10_3 = 'E713' || CIE10_4 = 'E713' || CIE10_5 = 'E713' || CIE10_6 = 'E713' || CIE10_7 = 'E713' || CIE10_8 = 'E713' || CIE10_9 = 'E713' || CIE10_10 = 'E713') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E720($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E720' || CIE10_2 = 'E720' || CIE10_3 = 'E720' || CIE10_4 = 'E720' || CIE10_5 = 'E720' || CIE10_6 = 'E720' || CIE10_7 = 'E720' || CIE10_8 = 'E720' || CIE10_9 = 'E720' || CIE10_10 = 'E720') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E721($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E721' || CIE10_2 = 'E721' || CIE10_3 = 'E721' || CIE10_4 = 'E721' || CIE10_5 = 'E721' || CIE10_6 = 'E721' || CIE10_7 = 'E721' || CIE10_8 = 'E721' || CIE10_9 = 'E721' || CIE10_10 = 'E721') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E722($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E722' || CIE10_2 = 'E722' || CIE10_3 = 'E722' || CIE10_4 = 'E722' || CIE10_5 = 'E722') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E723($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E723' || CIE10_2 = 'E723' || CIE10_3 = 'E723' || CIE10_4 = 'E723' || CIE10_5 = 'E723' || CIE10_6 = 'E723' || CIE10_7 = 'E723' || CIE10_8 = 'E723' || CIE10_9 = 'E723' || CIE10_10 = 'E723') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E724($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E724' || CIE10_2 = 'E724' || CIE10_3 = 'E724' || CIE10_4 = 'E724' || CIE10_5 = 'E724' || CIE10_6 = 'E724' || CIE10_7 = 'E724' || CIE10_8 = 'E724' || CIE10_9 = 'E724' || CIE10_10 = 'E724') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E725($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E725' || CIE10_2 = 'E725' || CIE10_3 = 'E725' || CIE10_4 = 'E725' || CIE10_5 = 'E725' || CIE10_6 = 'E725' || CIE10_7 = 'E725' || CIE10_8 = 'E725' || CIE10_9 = 'E725' || CIE10_10 = 'E725') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E728($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E728' || CIE10_2 = 'E728' || CIE10_3 = 'E728' || CIE10_4 = 'E728' || CIE10_5 = 'E728' || CIE10_6 = 'E728' || CIE10_7 = 'E728' || CIE10_8 = 'E728' || CIE10_9 = 'E728' || CIE10_10 = 'E728') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E729($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E729' || CIE10_2 = 'E729' || CIE10_3 = 'E729' || CIE10_4 = 'E729' || CIE10_5 = 'E729' || CIE10_6 = 'E729' || CIE10_7 = 'E729' || CIE10_8 = 'E729' || CIE10_9 = 'E729' || CIE10_10 = 'E729') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E730($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E730' || CIE10_2 = 'E730' || CIE10_3 = 'E730' || CIE10_4 = 'E730' || CIE10_5 = 'E730' || CIE10_6 = 'E730' || CIE10_7 = 'E730' || CIE10_8 = 'E730' || CIE10_9 = 'E730' || CIE10_10 = 'E730') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E731($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E731' || CIE10_2 = 'E731' || CIE10_3 = 'E731' || CIE10_4 = 'E731' || CIE10_5 = 'E731' || CIE10_6 = 'E731' || CIE10_7 = 'E731' || CIE10_8 = 'E731' || CIE10_9 = 'E731' || CIE10_10 = 'E731') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E738($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E738' || CIE10_2 = 'E738' || CIE10_3 = 'E738' || CIE10_4 = 'E738' || CIE10_5 = 'E738' || CIE10_6 = 'E738' || CIE10_7 = 'E738' || CIE10_8 = 'E738' || CIE10_9 = 'E738' || CIE10_10 = 'E738') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E739($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E739' || CIE10_2 = 'E739' || CIE10_3 = 'E739' || CIE10_4 = 'E739' || CIE10_5 = 'E739' || CIE10_6 = 'E739' || CIE10_7 = 'E739' || CIE10_8 = 'E739' || CIE10_9 = 'E739' || CIE10_10 = 'E739') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E740($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E740' || CIE10_2 = 'E740' || CIE10_3 = 'E740' || CIE10_4 = 'E740' || CIE10_5 = 'E740' || CIE10_6 = 'E740' || CIE10_7 = 'E740' || CIE10_8 = 'E740' || CIE10_9 = 'E740' || CIE10_10 = 'E740') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E741($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E741' || CIE10_2 = 'E741' || CIE10_3 = 'E741' || CIE10_4 = 'E741' || CIE10_5 = 'E741' || CIE10_6 = 'E741' || CIE10_7 = 'E741' || CIE10_8 = 'E741' || CIE10_9 = 'E741' || CIE10_10 = 'E741') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E742($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E742' || CIE10_2 = 'E742' || CIE10_3 = 'E742' || CIE10_4 = 'E742' || CIE10_5 = 'E742' || CIE10_6 = 'E742' || CIE10_7 = 'E742' || CIE10_8 = 'E742' || CIE10_9 = 'E742' || CIE10_10 = 'E742') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E743($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E743' || CIE10_2 = 'E743' || CIE10_3 = 'E743' || CIE10_4 = 'E743' || CIE10_5 = 'E743' || CIE10_6 = 'E743' || CIE10_7 = 'E743' || CIE10_8 = 'E743' || CIE10_9 = 'E743' || CIE10_10 = 'E743') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E744($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E744' || CIE10_2 = 'E744' || CIE10_3 = 'E744' || CIE10_4 = 'E744' || CIE10_5 = 'E744') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E748($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E748' || CIE10_2 = 'E748' || CIE10_3 = 'E748' || CIE10_4 = 'E748' || CIE10_5 = 'E748' || CIE10_6 = 'E748' || CIE10_7 = 'E748' || CIE10_8 = 'E748' || CIE10_9 = 'E748' || CIE10_10 = 'E748') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E749($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E749' || CIE10_2 = 'E749' || CIE10_3 = 'E749' || CIE10_4 = 'E749' || CIE10_5 = 'E749' || CIE10_6 = 'E749' || CIE10_7 = 'E749' || CIE10_8 = 'E749' || CIE10_9 = 'E749' || CIE10_10 = 'E749') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E750($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E750' || CIE10_2 = 'E750' || CIE10_3 = 'E750' || CIE10_4 = 'E750' || CIE10_5 = 'E750' || CIE10_6 = 'E750' || CIE10_7 = 'E750' || CIE10_8 = 'E750' || CIE10_9 = 'E750' || CIE10_10 = 'E750') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E751($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E751' || CIE10_2 = 'E751' || CIE10_3 = 'E751' || CIE10_4 = 'E751' || CIE10_5 = 'E751' || CIE10_6 = 'E751' || CIE10_7 = 'E751' || CIE10_8 = 'E751' || CIE10_9 = 'E751' || CIE10_10 = 'E751') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E752($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E752' || CIE10_2 = 'E752' || CIE10_3 = 'E752' || CIE10_4 = 'E752' || CIE10_5 = 'E752' ||CIE10_6 = 'E752' || CIE10_7 = 'E752' || CIE10_8 = 'E752' || CIE10_9 = 'E752' || CIE10_10 = 'E752') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E753($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E753' || CIE10_2 = 'E753' || CIE10_3 = 'E753' || CIE10_4 = 'E753' || CIE10_5 = 'E753' ||CIE10_6 = 'E753' || CIE10_7 = 'E753' || CIE10_8 = 'E753' || CIE10_9 = 'E753' || CIE10_10 = 'E753') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E754($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E754' || CIE10_2 = 'E754' || CIE10_3 = 'E754' || CIE10_4 = 'E754' || CIE10_5 = 'E754' ||CIE10_6 = 'E754' || CIE10_7 = 'E754' || CIE10_8 = 'E754' || CIE10_9 = 'E754' || CIE10_10 = 'E754') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E755($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E755' || CIE10_2 = 'E755' || CIE10_3 = 'E755' || CIE10_4 = 'E755' || CIE10_5 = 'E755' || CIE10_6 = 'E755' || CIE10_7 = 'E755' || CIE10_8 = 'E755' || CIE10_9 = 'E755' || CIE10_10 = 'E755') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E756($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E756' || CIE10_2 = 'E756' || CIE10_3 = 'E756' || CIE10_4 = 'E756' || CIE10_5 = 'E756' || CIE10_6 = 'E756' || CIE10_7 = 'E756' || CIE10_8 = 'E756' || CIE10_9 = 'E756' || CIE10_10 = 'E756') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E760($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E760' || CIE10_2 = 'E760' || CIE10_3 = 'E760' || CIE10_4 = 'E760' || CIE10_5 = 'E760' || CIE10_6 = 'E760' || CIE10_7 = 'E760' || CIE10_8 = 'E760' || CIE10_9 = 'E760' || CIE10_10 = 'E760') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E761($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E761' || CIE10_2 = 'E761' || CIE10_3 = 'E761' || CIE10_4 = 'E761' || CIE10_5 = 'E761' || CIE10_6 = 'E761' || CIE10_7 = 'E761' || CIE10_8 = 'E761' || CIE10_9 = 'E761' || CIE10_10 = 'E761') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E762($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E762' || CIE10_2 = 'E762' || CIE10_3 = 'E762' || CIE10_4 = 'E762' || CIE10_5 = 'E762' || CIE10_6 = 'E762' || CIE10_7 = 'E762' || CIE10_8 = 'E762' || CIE10_9 = 'E762' || CIE10_10 = 'E762') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E763($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E763' || CIE10_2 = 'E763' || CIE10_3 = 'E763' || CIE10_4 = 'E763' || CIE10_5 = 'E763' || CIE10_6 = 'E763' || CIE10_7 = 'E763' || CIE10_8 = 'E763' || CIE10_9 = 'E763' || CIE10_10 = 'E763') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E768($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E768' || CIE10_2 = 'E768' || CIE10_3 = 'E768' || CIE10_4 = 'E768' || CIE10_5 = 'E768' || CIE10_6 = 'E768' || CIE10_7 = 'E768' || CIE10_8 = 'E768' || CIE10_9 = 'E768' || CIE10_10 = 'E768') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E769($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E769' || CIE10_2 = 'E769' || CIE10_3 = 'E769' || CIE10_4 = 'E769' || CIE10_5 = 'E769' || CIE10_6 = 'E769' || CIE10_7 = 'E769' || CIE10_8 = 'E769' || CIE10_9 = 'E769' || CIE10_10 = 'E769') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E770($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E770' || CIE10_2 = 'E770' || CIE10_3 = 'E770' || CIE10_4 = 'E770' || CIE10_5 = 'E770' || CIE10_6 = 'E770' || CIE10_7 = 'E770' || CIE10_8 = 'E770' || CIE10_9 = 'E770' || CIE10_10 = 'E770') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E771($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E771' || CIE10_2 = 'E771' || CIE10_3 = 'E771' || CIE10_4 = 'E771' || CIE10_5 = 'E771' || CIE10_6 = 'E771' || CIE10_7 = 'E771' || CIE10_8 = 'E771' || CIE10_9 = 'E771' || CIE10_10 = 'E771') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E778($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E778' || CIE10_2 = 'E778' || CIE10_3 = 'E778' || CIE10_4 = 'E778' || CIE10_5 = 'E778' || CIE10_6 = 'E778' || CIE10_7 = 'E778' || CIE10_8 = 'E778' || CIE10_9 = 'E778' || CIE10_10 = 'E778') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E779($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E779' || CIE10_2 = 'E779' || CIE10_3 = 'E779' || CIE10_4 = 'E779' || CIE10_5 = 'E779' || CIE10_6 = 'E779' || CIE10_7 = 'E779' || CIE10_8 = 'E779' || CIE10_9 = 'E779' || CIE10_10 = 'E779') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E780($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E780' || CIE10_2 = 'E780' || CIE10_3 = 'E780' || CIE10_4 = 'E780' || CIE10_5 = 'E780' || CIE10_6 = 'E780' || CIE10_7 = 'E780' || CIE10_8 = 'E780' || CIE10_9 = 'E780' || CIE10_10 = 'E780') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E781($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E781' || CIE10_2 = 'E781' || CIE10_3 = 'E781' || CIE10_4 = 'E781' || CIE10_5 = 'E781' || CIE10_6 = 'E781' || CIE10_7 = 'E781' || CIE10_8 = 'E781' || CIE10_9 = 'E781' || CIE10_10 = 'E781') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E782($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E782' || CIE10_2 = 'E782' || CIE10_3 = 'E782' || CIE10_4 = 'E782' || CIE10_5 = 'E782' || CIE10_6 = 'E782' || CIE10_7 = 'E782' || CIE10_8 = 'E782' || CIE10_9 = 'E782' || CIE10_10 = 'E782') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E783($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E783' || CIE10_2 = 'E783' || CIE10_3 = 'E783' || CIE10_4 = 'E783' || CIE10_5 = 'E783') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E784($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E784' || CIE10_2 = 'E784' || CIE10_3 = 'E784' || CIE10_4 = 'E784' || CIE10_5 = 'E784' || CIE10_6 = 'E784' || CIE10_7 = 'E784' || CIE10_8 = 'E784' || CIE10_9 = 'E784' || CIE10_10 = 'E784') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E785($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E785' || CIE10_2 = 'E785' || CIE10_3 = 'E785' || CIE10_4 = 'E785' || CIE10_5 = 'E785' || CIE10_6 = 'E785' || CIE10_7 = 'E785' || CIE10_8 = 'E785' || CIE10_9 = 'E785' || CIE10_10 = 'E785') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E786($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E786' || CIE10_2 = 'E786' || CIE10_3 = 'E786' || CIE10_4 = 'E786' || CIE10_5 = 'E786' || CIE10_6 = 'E786' || CIE10_7 = 'E786' || CIE10_8 = 'E786' || CIE10_9 = 'E786' || CIE10_10 = 'E786') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E788($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E788' || CIE10_2 = 'E788' || CIE10_3 = 'E788' || CIE10_4 = 'E788' || CIE10_5 = 'E788' || CIE10_6 = 'E788' || CIE10_7 = 'E788' || CIE10_8 = 'E788' || CIE10_9 = 'E788' || CIE10_10 = 'E788') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E789($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E789' || CIE10_2 = 'E789' || CIE10_3 = 'E789' || CIE10_4 = 'E789' || CIE10_5 = 'E789' || CIE10_6 = 'E789' || CIE10_7 = 'E789' || CIE10_8 = 'E789' || CIE10_9 = 'E789' || CIE10_10 = 'E789') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E790($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E790' || CIE10_2 = 'E790' || CIE10_3 = 'E790' || CIE10_4 = 'E790' || CIE10_5 = 'E790' || CIE10_6 = 'E790' || CIE10_7 = 'E790' || CIE10_8 = 'E790' || CIE10_9 = 'E790' || CIE10_10 = 'E790') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E791($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E791' || CIE10_2 = 'E791' || CIE10_3 = 'E791' || CIE10_4 = 'E791' || CIE10_5 = 'E791' || CIE10_6 = 'E791' || CIE10_7 = 'E791' || CIE10_8 = 'E791' || CIE10_9 = 'E791' || CIE10_10 = 'E791') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E798($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E798' || CIE10_2 = 'E798' || CIE10_3 = 'E798' || CIE10_4 = 'E798' || CIE10_5 = 'E798' || CIE10_6 = 'E798' || CIE10_7 = 'E798' || CIE10_8 = 'E798' || CIE10_9 = 'E798' || CIE10_10 = 'E798') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E799($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E799' || CIE10_2 = 'E799' || CIE10_3 = 'E799' || CIE10_4 = 'E799' || CIE10_5 = 'E799' || CIE10_6 = 'E799' || CIE10_7 = 'E799' || CIE10_8 = 'E799' || CIE10_9 = 'E799' || CIE10_10 = 'E799') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E800($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E800' || CIE10_2 = 'E800' || CIE10_3 = 'E800' || CIE10_4 = 'E800' || CIE10_5 = 'E800' || CIE10_6 = 'E800' || CIE10_7 = 'E800' || CIE10_8 = 'E800' || CIE10_9 = 'E800' || CIE10_10 = 'E800') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E801($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E801' || CIE10_2 = 'E801' || CIE10_3 = 'E801' || CIE10_4 = 'E801' || CIE10_5 = 'E801' || CIE10_6 = 'E801' || CIE10_7 = 'E801' || CIE10_8 = 'E801' || CIE10_9 = 'E801' || CIE10_10 = 'E801') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E802($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E802' || CIE10_2 = 'E802' || CIE10_3 = 'E802' || CIE10_4 = 'E802' || CIE10_5 = 'E802' || CIE10_6 = 'E802' || CIE10_7 = 'E802' || CIE10_8 = 'E802' || CIE10_9 = 'E802' || CIE10_10 = 'E802') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E803($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E803' || CIE10_2 = 'E803' || CIE10_3 = 'E803' || CIE10_4 = 'E803' || CIE10_5 = 'E803' || CIE10_6 = 'E803' || CIE10_7 = 'E803' || CIE10_8 = 'E803' || CIE10_9 = 'E803' || CIE10_10 = 'E803') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E804($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E804' || CIE10_2 = 'E804' || CIE10_3 = 'E804' || CIE10_4 = 'E804' || CIE10_5 = 'E804' || CIE10_6 = 'E804' || CIE10_7 = 'E804' || CIE10_8 = 'E804' || CIE10_9 = 'E804' || CIE10_10 = 'E804') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E805($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E805' || CIE10_2 = 'E805' || CIE10_3 = 'E805' || CIE10_4 = 'E805' || CIE10_5 = 'E805' || CIE10_6 = 'E805' || CIE10_7 = 'E805' || CIE10_8 = 'E805' || CIE10_4 = 'E805' || CIE10_5 = 'E805') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E806($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E806' || CIE10_2 = 'E806' || CIE10_3 = 'E806' || CIE10_4 = 'E806' || CIE10_5 = 'E806' || CIE10_6 = 'E806' || CIE10_7 = 'E806' || CIE10_8 = 'E806' || CIE10_9 = 'E806' || CIE10_10 = 'E806') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E807($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E807' || CIE10_2 = 'E807' || CIE10_3 = 'E807' || CIE10_4 = 'E807' || CIE10_5 = 'E807' || CIE10_6 = 'E807' || CIE10_7 = 'E807' || CIE10_8 = 'E807' || CIE10_9 = 'E807' || CIE10_10 = 'E807') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E830($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E830' || CIE10_2 = 'E830' || CIE10_3 = 'E830' || CIE10_4 = 'E830' || CIE10_5 = 'E830' || CIE10_6 = 'E830' || CIE10_7 = 'E830' || CIE10_8 = 'E830' || CIE10_9 = 'E830' || CIE10_10 = 'E830') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E831($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E831' || CIE10_2 = 'E831' || CIE10_3 = 'E831' || CIE10_4 = 'E831' || CIE10_5 = 'E831' || CIE10_6 = 'E831' || CIE10_7 = 'E831' || CIE10_8 = 'E831' || CIE10_9 = 'E831' || CIE10_10 = 'E831') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E832($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E832' || CIE10_2 = 'E832' || CIE10_3 = 'E832' || CIE10_4 = 'E832' || CIE10_5 = 'E832' || CIE10_6 = 'E832' || CIE10_7 = 'E832' || CIE10_8 = 'E832' || CIE10_9 = 'E832' || CIE10_10 = 'E832') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E833($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E833' || CIE10_2 = 'E833' || CIE10_3 = 'E833' || CIE10_4 = 'E833' || CIE10_5 = 'E833' || CIE10_6 = 'E833' || CIE10_7 = 'E833' || CIE10_8 = 'E833' || CIE10_9 = 'E833' || CIE10_10 = 'E833') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E834($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E834' || CIE10_2 = 'E834' || CIE10_3 = 'E834' || CIE10_4 = 'E834' || CIE10_5 = 'E834' || CIE10_6 = 'E834' || CIE10_7 = 'E834' || CIE10_8 = 'E834' || CIE10_9 = 'E834' || CIE10_10 = 'E834') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E835($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E835' || CIE10_2 = 'E835' || CIE10_3 = 'E835' || CIE10_4 = 'E835' || CIE10_5 = 'E835' || CIE10_6 = 'E835' || CIE10_7 = 'E835' || CIE10_8 = 'E835' || CIE10_9 = 'E835' || CIE10_10 = 'E835') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E838($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E838' || CIE10_2 = 'E838' || CIE10_3 = 'E838' || CIE10_4 = 'E838' || CIE10_5 = 'E838' || CIE10_6 = 'E838' || CIE10_7 = 'E838' || CIE10_8 = 'E838' || CIE10_9 = 'E838' || CIE10_10 = 'E838') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E839($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E839' || CIE10_2 = 'E839' || CIE10_3 = 'E839' || CIE10_4 = 'E839' || CIE10_5 = 'E839' || CIE10_6 = 'E839' || CIE10_7 = 'E839' || CIE10_8 = 'E839' || CIE10_9 = 'E839' || CIE10_10 = 'E839') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E840($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E840' || CIE10_2 = 'E840' || CIE10_3 = 'E840' || CIE10_4 = 'E840' || CIE10_5 = 'E840' || CIE10_6 = 'E840' || CIE10_7 = 'E840' || CIE10_8 = 'E840' || CIE10_9 = 'E840' || CIE10_10 = 'E840') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E841($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E841' || CIE10_2 = 'E841' || CIE10_3 = 'E841' || CIE10_4 = 'E841' || CIE10_5 = 'E841' || CIE10_6 = 'E841' || CIE10_7 = 'E841' || CIE10_8 = 'E841' || CIE10_9 = 'E841' || CIE10_10 = 'E841') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E848($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E848' || CIE10_2 = 'E848' || CIE10_3 = 'E848' || CIE10_4 = 'E848' || CIE10_5 = 'E848' || CIE10_6 = 'E848' || CIE10_7 = 'E848' || CIE10_8 = 'E848' || CIE10_9 = 'E848' || CIE10_10 = 'E848') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E849($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E849' || CIE10_2 = 'E849' || CIE10_3 = 'E849' || CIE10_4 = 'E849' || CIE10_5 = 'E849' || CIE10_6 = 'E849' || CIE10_7 = 'E849' || CIE10_8 = 'E849' || CIE10_9 = 'E849' || CIE10_10 = 'E849') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E850($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E850' || CIE10_2 = 'E850' || CIE10_3 = 'E850' || CIE10_4 = 'E850' || CIE10_5 = 'E850' || CIE10_6 = 'E850' || CIE10_7 = 'E850' || CIE10_8 = 'E850' || CIE10_9 = 'E850' || CIE10_10 = 'E850') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E851($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E851' || CIE10_2 = 'E851' || CIE10_3 = 'E851' || CIE10_4 = 'E851' || CIE10_5 = 'E851' || CIE10_6 = 'E851' || CIE10_7 = 'E851' || CIE10_8 = 'E851' || CIE10_9 = 'E851' || CIE10_10 = 'E851') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E852($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E852' || CIE10_2 = 'E852' || CIE10_3 = 'E852' || CIE10_4 = 'E852' || CIE10_5 = 'E852' || CIE10_6 = 'E852' || CIE10_7 = 'E852' || CIE10_8 = 'E852' || CIE10_9 = 'E852' || CIE10_10 = 'E852') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E853($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E853' || CIE10_2 = 'E853' || CIE10_3 = 'E853' || CIE10_4 = 'E853' || CIE10_5 = 'E853' || CIE10_6 = 'E853' || CIE10_7 = 'E853' || CIE10_8 = 'E853' || CIE10_9 = 'E853' || CIE10_10 = 'E853') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E854($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E854' || CIE10_2 = 'E854' || CIE10_3 = 'E854' || CIE10_4 = 'E854' || CIE10_5 = 'E854' || CIE10_6 = 'E854' || CIE10_7 = 'E854' || CIE10_8 = 'E854' || CIE10_9 = 'E854' || CIE10_10 = 'E854') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E858($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E858' || CIE10_2 = 'E858' || CIE10_3 = 'E858' || CIE10_4 = 'E858' || CIE10_5 = 'E858' || CIE10_6 = 'E858' || CIE10_7 = 'E858' || CIE10_8 = 'E858' || CIE10_9 = 'E858' || CIE10_10 = 'E858') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E859($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E859' || CIE10_2 = 'E859' || CIE10_3 = 'E859' || CIE10_4 = 'E859' || CIE10_5 = 'E859' || CIE10_6 = 'E859' || CIE10_7 = 'E859' || CIE10_8 = 'E859' || CIE10_9 = 'E859' || CIE10_10 = 'E859') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E86X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E86X' || CIE10_2 = 'E86X' || CIE10_3 = 'E86X' || CIE10_4 = 'E86X' || CIE10_5 = 'E86X' || CIE10_6 = 'E86X' || CIE10_7 = 'E86X' || CIE10_8 = 'E86X' || CIE10_9 = 'E86X' || CIE10_10 = 'E86X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E870($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E870' || CIE10_2 = 'E870' || CIE10_3 = 'E870' || CIE10_4 = 'E870' || CIE10_5 = 'E870' || CIE10_6 = 'E870' || CIE10_7 = 'E870' || CIE10_8 = 'E870' || CIE10_9 = 'E870' || CIE10_10 = 'E870') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E871($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E871' || CIE10_2 = 'E871' || CIE10_3 = 'E871' || CIE10_4 = 'E871' || CIE10_5 = 'E871') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E872($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E872' || CIE10_2 = 'E872' || CIE10_3 = 'E872' || CIE10_4 = 'E872' || CIE10_5 = 'E872') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E873($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E873' || CIE10_2 = 'E873' || CIE10_3 = 'E873' || CIE10_4 = 'E873' || CIE10_5 = 'E873') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E874($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E874' || CIE10_2 = 'E874' || CIE10_3 = 'E874' || CIE10_4 = 'E874' || CIE10_5 = 'E874') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E875($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E875' || CIE10_2 = 'E875' || CIE10_3 = 'E875' || CIE10_4 = 'E875' || CIE10_5 = 'E875') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E876($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E876' || CIE10_2 = 'E876' || CIE10_3 = 'E876' || CIE10_4 = 'E876' || CIE10_5 = 'E876') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E877($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E877' || CIE10_2 = 'E877' || CIE10_3 = 'E877' || CIE10_4 = 'E877' || CIE10_5 = 'E877') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    } public static function E878($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E878' || CIE10_2 = 'E878' || CIE10_3 = 'E878' || CIE10_4 = 'E878' || CIE10_5 = 'E878') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E880($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E880' || CIE10_2 = 'E880' || CIE10_3 = 'E880' || CIE10_4 = 'E880' || CIE10_5 = 'E880' || CIE10_6 = 'E880' || CIE10_7 = 'E880' || CIE10_8 = 'E880' || CIE10_9 = 'E880' || CIE10_10 = 'E880') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E881($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E881' || CIE10_2 = 'E881' || CIE10_3 = 'E881' || CIE10_4 = 'E881' || CIE10_5 = 'E881' || CIE10_6 = 'E881' || CIE10_7 = 'E881' || CIE10_8 = 'E881' || CIE10_9 = 'E881' || CIE10_10 = 'E881') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E882($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E882' || CIE10_2 = 'E882' || CIE10_3 = 'E882' || CIE10_4 = 'E882' || CIE10_5 = 'E882' || CIE10_6 = 'E882' || CIE10_7 = 'E882' || CIE10_8 = 'E882' || CIE10_9 = 'E882' || CIE10_10 = 'E882') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E883($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E883' || CIE10_2 = 'E883' || CIE10_3 = 'E883' || CIE10_4 = 'E883' || CIE10_5 = 'E883' || CIE10_6 = 'E883' || CIE10_7 = 'E883' || CIE10_8 = 'E883' || CIE10_9 = 'E883' || CIE10_10 = 'E883') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E888($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E888' || CIE10_2 = 'E888' || CIE10_3 = 'E888' || CIE10_4 = 'E888' || CIE10_5 = 'E888' || CIE10_6 = 'E888' || CIE10_7 = 'E888' || CIE10_8 = 'E888' || CIE10_9 = 'E888' || CIE10_10 = 'E888') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E889($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E889' || CIE10_2 = 'E889' || CIE10_3 = 'E889' || CIE10_4 = 'E889' || CIE10_5 = 'E889' || CIE10_6 = 'E889' || CIE10_7 = 'E889' || CIE10_8 = 'E889' || CIE10_9 = 'E889' || CIE10_10 = 'E889') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E890($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E890' || CIE10_2 = 'E890' || CIE10_3 = 'E890' || CIE10_4 = 'E890' || CIE10_5 = 'E890' || CIE10_6 = 'E890' || CIE10_7 = 'E890' || CIE10_8 = 'E890' || CIE10_9 = 'E890' || CIE10_10 = 'E890') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E891($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E891' || CIE10_2 = 'E891' || CIE10_3 = 'E891' || CIE10_4 = 'E891' || CIE10_5 = 'E891' || CIE10_6 = 'E891' || CIE10_7 = 'E891' || CIE10_8 = 'E891' || CIE10_9 = 'E891' || CIE10_10 = 'E891') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E892($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E892' || CIE10_2 = 'E892' || CIE10_3 = 'E892' || CIE10_4 = 'E892' || CIE10_5 = 'E892' || CIE10_6 = 'E892' || CIE10_7 = 'E892' || CIE10_8 = 'E892' || CIE10_9 = 'E892' || CIE10_10 = 'E892') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E893($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E893' || CIE10_2 = 'E893' || CIE10_3 = 'E893' || CIE10_4 = 'E893' || CIE10_5 = 'E893' || CIE10_6 = 'E893' || CIE10_7 = 'E893' || CIE10_8 = 'E893' || CIE10_9 = 'E893' || CIE10_10 = 'E893') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E894($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E894' || CIE10_2 = 'E894' || CIE10_3 = 'E894' || CIE10_4 = 'E894' || CIE10_5 = 'E894' || CIE10_6 = 'E894' || CIE10_7 = 'E894' || CIE10_8 = 'E894' || CIE10_9 = 'E894' || CIE10_10 = 'E894') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E895($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E895' || CIE10_2 = 'E895' || CIE10_3 = 'E895' || CIE10_4 = 'E895' || CIE10_5 = 'E895' || CIE10_6 = 'E895' || CIE10_7 = 'E895' || CIE10_8 = 'E895' || CIE10_9 = 'E895' || CIE10_10 = 'E895') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E896($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E896' || CIE10_2 = 'E896' || CIE10_3 = 'E896' || CIE10_4 = 'E896' || CIE10_5 = 'E896' || CIE10_6 = 'E896' || CIE10_7 = 'E896' || CIE10_8 = 'E896' || CIE10_9 = 'E896' || CIE10_10 = 'E896') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E898($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E898' || CIE10_2 = 'E898' || CIE10_3 = 'E898' || CIE10_4 = 'E898' || CIE10_5 = 'E898' || CIE10_6 = 'E898' || CIE10_7 = 'E898' || CIE10_8 = 'E898' || CIE10_9 = 'E898' || CIE10_10 = 'E898') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E899($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E899' || CIE10_2 = 'E899' || CIE10_3 = 'E899' || CIE10_4 = 'E899' || CIE10_5 = 'E899' || CIE10_6 = 'E899' || CIE10_7 = 'E899' || CIE10_8 = 'E899' || CIE10_9 = 'E899' || CIE10_10 = 'E899') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
      public static function E90X($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E90X' || CIE10_2 = 'E90X' || CIE10_3 = 'E90X' || CIE10_4 = 'E90X' || CIE10_5 = 'E90X' || CIE10_6 = 'E90X' || CIE10_7 = 'E90X' || CIE10_8 = 'E90X' || CIE10_9 = 'E90X' || CIE10_10 = 'E90X') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }
     public static function E00($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E00' || CIE10_2 = 'E00' || CIE10_3 = 'E00' || CIE10_4 = 'E00' || CIE10_5 = 'E00' || CIE10_6 = 'E00' || CIE10_7 = 'E00' || CIE10_8 = 'E00' || CIE10_9 = 'E00' || CIE10_10 = 'E00') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E01($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E01' || CIE10_2 = 'E01' || CIE10_3 = 'E01' || CIE10_4 = 'E01' || CIE10_5 = 'E01' || CIE10_6 = 'E01' || CIE10_7 = 'E01' || CIE10_8 = 'E01' || CIE10_9 = 'E01' || CIE10_10 = 'E01') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
    public static function E02($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E02' || CIE10_2 = 'E02' || CIE10_3 = 'E02' || CIE10_4 = 'E02' || CIE10_5 = 'E02' || CIE10_6 = 'E02' || CIE10_7 = 'E02' || CIE10_8 = 'E02' || CIE10_9 = 'E02' || CIE10_10 = 'E02') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E03($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E03' || CIE10_2 = 'E03' || CIE10_3 = 'E03' || CIE10_4 = 'E03' || CIE10_5 = 'E03' || CIE10_6 = 'E03' || CIE10_7 = 'E03' || CIE10_8 = 'E03' || CIE10_9 = 'E03' || CIE10_10 = 'E03') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E04($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E04' || CIE10_2 = 'E04' || CIE10_3 = 'E04' || CIE10_4 = 'E04' || CIE10_5 = 'E04' || CIE10_6 = 'E04' || CIE10_7 = 'E04' || CIE10_8 = 'E04' || CIE10_9 = 'E04' || CIE10_10 = 'E04') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E05($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E05' || CIE10_2 = 'E05' || CIE10_3 = 'E05' || CIE10_4 = 'E05' || CIE10_5 = 'E05' || CIE10_6 = 'E05' || CIE10_7 = 'E05' || CIE10_8 = 'E05' || CIE10_9 = 'E05' || CIE10_10 = 'E05') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E06($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E06' || CIE10_2 = 'E06' || CIE10_3 = 'E06' || CIE10_4 = 'E06' || CIE10_5 = 'E06' || CIE10_6 = 'E06' || CIE10_7 = 'E06' || CIE10_8 = 'E06' || CIE10_9 = 'E06' || CIE10_10 = 'E06') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E07($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E07' || CIE10_2 = 'E07' || CIE10_3 = 'E07' || CIE10_4 = 'E07' || CIE10_5 = 'E07' || CIE10_6 = 'E07' || CIE10_7 = 'E07' || CIE10_8 = 'E07' || CIE10_9 = 'E07' || CIE10_10 = 'E07') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E10($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E10' || CIE10_2 = 'E10' || CIE10_3 = 'E10' || CIE10_4 = 'E10' || CIE10_5 = 'E10' || CIE10_6 = 'E10' || CIE10_7 = 'E10' || CIE10_8 = 'E10' || CIE10_9 = 'E10' || CIE10_10 = 'E10') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
       public static function E11($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E11' || CIE10_2 = 'E11' || CIE10_3 = 'E11' || CIE10_4 = 'E11' || CIE10_5 = 'E11' || CIE10_6 = 'E11' || CIE10_7 = 'E11' || CIE10_8 = 'E11' || CIE10_9 = 'E11' || CIE10_10 = 'E11') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E12($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E12' || CIE10_2 = 'E12' || CIE10_3 = 'E12' || CIE10_4 = 'E12' || CIE10_5 = 'E12' || CIE10_6 = 'E12' || CIE10_7 = 'E12' || CIE10_8 = 'E12' || CIE10_9 = 'E12' || CIE10_10 = 'E12') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E13($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E13' || CIE10_2 = 'E13' || CIE10_3 = 'E13' || CIE10_4 = 'E13' || CIE10_5 = 'E13' || CIE10_6 = 'E13' || CIE10_7 = 'E13' || CIE10_8 = 'E13' || CIE10_9 = 'E13' || CIE10_10 = 'E13') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E14($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E14' || CIE10_2 = 'E14' || CIE10_3 = 'E14' || CIE10_4 = 'E14' || CIE10_5 = 'E14' || CIE10_6 = 'E14' || CIE10_7 = 'E14' || CIE10_8 = 'E14' || CIE10_9 = 'E14' || CIE10_10 = 'E14') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E15($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E15' || CIE10_2 = 'E15' || CIE10_3 = 'E15' || CIE10_4 = 'E15' || CIE10_5 = 'E15' || CIE10_6 = 'E15' || CIE10_7 = 'E15' || CIE10_8 = 'E15' || CIE10_9 = 'E15' || CIE10_10 = 'E15') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E16($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E16' || CIE10_2 = 'E16' || CIE10_3 = 'E16' || CIE10_4 = 'E16' || CIE10_5 = 'E16' || CIE10_6 = 'E16' || CIE10_7 = 'E16' || CIE10_8 = 'E16' || CIE10_9 = 'E16' || CIE10_10 = 'E16') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E20($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E20' || CIE10_2 = 'E20' || CIE10_3 = 'E20' || CIE10_4 = 'E20' || CIE10_5 = 'E20' || CIE10_6 = 'E20' || CIE10_7 = 'E20' || CIE10_8 = 'E20' || CIE10_9 = 'E20' || CIE10_10 = 'E20'  ) &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E21($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E21' || CIE10_2 = 'E21' || CIE10_3 = 'E21' || CIE10_4 = 'E21' || CIE10_5 = 'E21' || CIE10_6 = 'E21' || CIE10_7 = 'E21' || CIE10_8 = 'E21' || CIE10_9 = 'E21' || CIE10_10 = 'E21') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E22($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E22' || CIE10_2 = 'E22' || CIE10_3 = 'E22' || CIE10_4 = 'E22' || CIE10_5 = 'E22' || CIE10_6 = 'E22' || CIE10_7 = 'E22' || CIE10_8 = 'E22' || CIE10_9 = 'E22' || CIE10_10 = 'E22') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E23($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E23' || CIE10_2 = 'E23' || CIE10_3 = 'E23' || CIE10_4 = 'E23' || CIE10_5 = 'E23' || CIE10_6 = 'E23' || CIE10_7 = 'E23' || CIE10_8 = 'E23' || CIE10_9 = 'E23' || CIE10_10 = 'E23') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E24($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E24' || CIE10_2 = 'E24' || CIE10_3 = 'E24' || CIE10_4 = 'E24' || CIE10_5 = 'E24' || CIE10_6 = 'E24' || CIE10_7 = 'E24' || CIE10_8 = 'E24' || CIE10_9 = 'E24' || CIE10_10 = 'E24') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E25($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E25' || CIE10_2 = 'E25' || CIE10_3 = 'E25' || CIE10_4 = 'E25' || CIE10_5 = 'E25' || CIE10_6 = 'E25' || CIE10_7 = 'E25' || CIE10_8 = 'E25' || CIE10_9 = 'E25' || CIE10_10 = 'E25') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E26($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E26' || CIE10_2 = 'E26' || CIE10_3 = 'E26' || CIE10_4 = 'E26' || CIE10_5 = 'E26' || CIE10_6 = 'E26' || CIE10_7 = 'E26' || CIE10_8 = 'E26' || CIE10_9 = 'E26' || CIE10_10 = 'E26') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E27($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E27' || CIE10_2 = 'E27' || CIE10_3 = 'E27' || CIE10_4 = 'E27' || CIE10_5 = 'E27' || CIE10_6 = 'E27' || CIE10_7 = 'E27' || CIE10_8 = 'E27' || CIE10_9 = 'E27' || CIE10_10 = 'E27') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E28($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E28' || CIE10_2 = 'E28' || CIE10_3 = 'E28' || CIE10_4 = 'E28' || CIE10_5 = 'E28' || CIE10_6 = 'E28' || CIE10_7 = 'E28' || CIE10_8 = 'E28' || CIE10_9 = 'E28' || CIE10_10 = 'E28') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E29($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E29' || CIE10_2 = 'E29' || CIE10_3 = 'E29' || CIE10_4 = 'E29' || CIE10_5 = 'E29' || CIE10_6 = 'E29' || CIE10_7 = 'E29' || CIE10_8 = 'E29' || CIE10_9 = 'E29' || CIE10_10 = 'E29') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E30($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E30' || CIE10_2 = 'E30' || CIE10_3 = 'E30' || CIE10_4 = 'E30' || CIE10_5 = 'E30' || CIE10_6 = 'E30' || CIE10_7 = 'E30' || CIE10_8 = 'E30' || CIE10_9 = 'E30' || CIE10_10 = 'E30') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
     public static function E31($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E31' || CIE10_2 = 'E31' || CIE10_3 = 'E31' || CIE10_4 = 'E31' || CIE10_5 = 'E31' || CIE10_6 = 'E31' || CIE10_7 = 'E31' || CIE10_8 = 'E31' || CIE10_9 = 'E31' || CIE10_10 = 'E31') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E32($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E32' || CIE10_2 = 'E32' || CIE10_3 = 'E32' || CIE10_4 = 'E32' || CIE10_5 = 'E32' || CIE10_6 = 'E32' || CIE10_7 = 'E32' || CIE10_8 = 'E32' || CIE10_9 = 'E32' || CIE10_10 = 'E32') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E34($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E34' || CIE10_2 = 'E34' || CIE10_3 = 'E34' || CIE10_4 = 'E34' || CIE10_5 = 'E34' || CIE10_6 = 'E34' || CIE10_7 = 'E34' || CIE10_8 = 'E34' || CIE10_9 = 'E34' || CIE10_10 = 'E34') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E35($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E35' || CIE10_2 = 'E35' || CIE10_3 = 'E35' || CIE10_4 = 'E35' || CIE10_5 = 'E35' || CIE10_6 = 'E35' || CIE10_7 = 'E35' || CIE10_8 = 'E35' || CIE10_9 = 'E35' || CIE10_10 = 'E35') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    } 
    public static function E40($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E' || CIE10_2 = 'E40' || CIE10_3 = 'E40' || CIE10_4 = 'E40' || CIE10_5 = 'E40' || CIE10_6 = 'E' || CIE10_7 = 'E40' || CIE10_8 = 'E40' || CIE10_9 = 'E40' || CIE10_10 = 'E40') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E41($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E41' || CIE10_2 = 'E41' || CIE10_3 = 'E41' || CIE10_4 = 'E41' || CIE10_5 = 'E41' || CIE10_6 = 'E41' || CIE10_7 = 'E41' || CIE10_8 = 'E41' || CIE10_9 = 'E41' || CIE10_10 = 'E41') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E42($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E42' || CIE10_2 = 'E42' || CIE10_3 = 'E42' || CIE10_4 = 'E42' || CIE10_5 = 'E42' || CIE10_6 = 'E42' || CIE10_7 = 'E42' || CIE10_8 = 'E42' || CIE10_9 = 'E42' || CIE10_10 = 'E42') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E43($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E43' || CIE10_2 = 'E43' || CIE10_3 = 'E43' || CIE10_4 = 'E43' || CIE10_5 = 'E43' || CIE10_6 = 'E43' || CIE10_7 = 'E43' || CIE10_8 = 'E43' || CIE10_9 = 'E43' || CIE10_10 = 'E43') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E44($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E44' || CIE10_2 = 'E44' || CIE10_3 = 'E44' || CIE10_4 = 'E44' || CIE10_5 = 'E44' || CIE10_6 = 'E44' || CIE10_7 = 'E44' || CIE10_8 = 'E44' || CIE10_9 = 'E44' || CIE10_10 = 'E44') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E45($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E45' || CIE10_2 = 'E45' || CIE10_3 = 'E45' || CIE10_4 = 'E45' || CIE10_5 = 'E45' || CIE10_6 = 'E45' || CIE10_7 = 'E45' || CIE10_8 = 'E45' || CIE10_9 = 'E45' || CIE10_10 = 'E45') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E46($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E46' || CIE10_2 = 'E46' || CIE10_3 = 'E46' || CIE10_4 = 'E46' || CIE10_5 = 'E46' || CIE10_6 = 'E46' || CIE10_7 = 'E46' || CIE10_8 = 'E46' || CIE10_9 = 'E46' || CIE10_10 = 'E46') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E50($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E50' || CIE10_2 = 'E50' || CIE10_3 = 'E50' || CIE10_4 = 'E50' || CIE10_5 = 'E50' || CIE10_6 = 'E50' || CIE10_7 = 'E50' || CIE10_8 = 'E50' || CIE10_9 = 'E50' || CIE10_10 = 'E50') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
      public static function E51($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E51' || CIE10_2 = 'E51' || CIE10_3 = 'E51' || CIE10_4 = 'E51' || CIE10_5 = 'E51' || CIE10_6 = 'E51' || CIE10_7 = 'E51' || CIE10_8 = 'E51' || CIE10_9 = 'E51' || CIE10_10 = 'E51') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E52($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E52' || CIE10_2 = 'E52' || CIE10_3 = 'E52' || CIE10_4 = 'E52' || CIE10_5 = 'E52' || CIE10_6 = 'E52' || CIE10_7 = 'E52' || CIE10_8 = 'E52' || CIE10_9 = 'E52' || CIE10_10 = 'E52') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E53($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E53' || CIE10_2 = 'E53' || CIE10_3 = 'E53' || CIE10_4 = 'E53' || CIE10_5 = 'E53' || CIE10_6 = 'E53' || CIE10_7 = 'E53' || CIE10_8 = 'E53' || CIE10_9 = 'E53' || CIE10_10 = 'E53') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E54($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E54' || CIE10_2 = 'E54' || CIE10_3 = 'E54' || CIE10_4 = 'E54' || CIE10_5 = 'E54' || CIE10_6 = 'E54' || CIE10_7 = 'E54' || CIE10_8 = 'E54' || CIE10_9 = 'E54' || CIE10_10 = 'E54') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E55($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E55' || CIE10_2 = 'E55' || CIE10_3 = 'E55' || CIE10_4 = 'E55' || CIE10_5 = 'E55' || CIE10_6 = 'E55' || CIE10_7 = 'E55' || CIE10_8 = 'E55' || CIE10_9 = 'E55' || CIE10_10 = 'E55') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E56($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E56' || CIE10_2 = 'E56' || CIE10_3 = 'E56' || CIE10_4 = 'E56' || CIE10_5 = 'E56' || CIE10_6 = 'E56' || CIE10_7 = 'E56' || CIE10_8 = 'E56' || CIE10_9 = 'E56' || CIE10_10 = 'E56') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E58($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E58' || CIE10_2 = 'E58' || CIE10_3 = 'E58' || CIE10_4 = 'E58' || CIE10_5 = 'E58' || CIE10_6 = 'E58' || CIE10_7 = 'E58' || CIE10_8 = 'E58' || CIE10_9 = 'E58' || CIE10_10 = 'E58') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E59($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E59' || CIE10_2 = 'E59' || CIE10_3 = 'E59' || CIE10_4 = 'E59' || CIE10_5 = 'E59' || CIE10_6 = 'E59' || CIE10_7 = 'E59' || CIE10_8 = 'E59' || CIE10_9 = 'E59' || CIE10_10 = 'E59') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E60($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E60' || CIE10_2 = 'E60' || CIE10_3 = 'E60' || CIE10_4 = 'E60' || CIE10_5 = 'E60' || CIE10_6 = 'E60' || CIE10_7 = 'E60' || CIE10_8 = 'E60' || CIE10_9 = 'E60' || CIE10_10 = 'E60') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E61($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E61' || CIE10_2 = 'E61' || CIE10_3 = 'E61' || CIE10_4 = 'E61' || CIE10_5 = 'E61' || CIE10_6 = 'E61' || CIE10_7 = 'E61' || CIE10_8 = 'E61' || CIE10_9 = 'E61' || CIE10_10 = 'E61') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E63($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E63' || CIE10_2 = 'E63' || CIE10_3 = 'E63' || CIE10_4 = 'E63' || CIE10_5 = 'E63' || CIE10_6 = 'E63' || CIE10_7 = 'E63' || CIE10_8 = 'E63' || CIE10_9 = 'E63' || CIE10_10 = 'E63') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E64($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E64' || CIE10_2 = 'E64' || CIE10_3 = 'E64' || CIE10_4 = 'E64' || CIE10_5 = 'E64' || CIE10_6 = 'E64' || CIE10_7 = 'E64' || CIE10_8 = 'E64' || CIE10_9 = 'E64' || CIE10_10 = 'E64') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E65($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E65' || CIE10_2 = 'E65' || CIE10_3 = 'E65' || CIE10_4 = 'E65' || CIE10_5 = 'E65' || CIE10_6 = 'E65' || CIE10_7 = 'E65' || CIE10_8 = 'E65' || CIE10_9 = 'E65' || CIE10_10 = 'E65') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E66($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E66' || CIE10_2 = 'E66' || CIE10_3 = 'E66' || CIE10_4 = 'E66' || CIE10_5 = 'E66' || CIE10_6 = 'E66' || CIE10_7 = 'E66' || CIE10_8 = 'E66' || CIE10_9 = 'E66' || CIE10_10 = 'E66') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E67($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E67' || CIE10_2 = 'E67' || CIE10_3 = 'E67' || CIE10_4 = 'E67' || CIE10_5 = 'E67' || CIE10_6 = 'E67' || CIE10_7 = 'E67' || CIE10_8 = 'E67' || CIE10_9 = 'E67' || CIE10_10 = 'E67') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
    public static function E68($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E68' || CIE10_2 = 'E68' || CIE10_3 = 'E68' || CIE10_4 = 'E68' || CIE10_5 = 'E68' || CIE10_6 = 'E68' || CIE10_7 = 'E68' || CIE10_8 = 'E68' || CIE10_9 = 'E68' || CIE10_10 = 'E68') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E70($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E70' || CIE10_2 = 'E70' || CIE10_3 = 'E70' || CIE10_4 = 'E70' || CIE10_5 = 'E70' || CIE10_6 = 'E70' || CIE10_7 = 'E70' || CIE10_8 = 'E70' || CIE10_9 = 'E70' || CIE10_10 = 'E70') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];       
        }
        return $total_usuarios;
    } 
     public static function E71($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E71' || CIE10_2 = 'E71' || CIE10_3 = 'E71' || CIE10_4 = 'E71' || CIE10_5 = 'E71' || CIE10_6 = 'E71' || CIE10_7 = 'E71' || CIE10_8 = 'E71' || CIE10_9 = 'E71' || CIE10_10 = 'E71') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E72($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E72' || CIE10_2 = 'E72' || CIE10_3 = 'E72' || CIE10_4 = 'E72' || CIE10_5 = 'E72' || CIE10_6 = 'E72' || CIE10_7 = 'E72' || CIE10_8 = 'E72' || CIE10_9 = 'E72' || CIE10_10 = 'E72') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E73($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E73' || CIE10_2 = 'E73' || CIE10_3 = 'E73' || CIE10_4 = 'E73' || CIE10_5 = 'E73' || CIE10_6 = 'E73' || CIE10_7 = 'E73' || CIE10_8 = 'E73' || CIE10_9 = 'E73' || CIE10_10 = 'E73') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E74($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E74' || CIE10_2 = 'E74' || CIE10_3 = 'E74' || CIE10_4 = 'E74' || CIE10_5 = 'E74' || CIE10_6 = 'E74' || CIE10_7 = 'E74' || CIE10_8 = 'E74' || CIE10_9 = 'E74' || CIE10_10 = 'E74') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E75($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E75' || CIE10_2 = 'E75' || CIE10_3 = 'E75' || CIE10_4 = 'E75' || CIE10_5 = 'E75' || CIE10_6 = 'E75' || CIE10_7 = 'E75' || CIE10_8 = 'E75' || CIE10_9 = 'E75' || CIE10_10 = 'E75') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E76($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E76' || CIE10_2 = 'E76' || CIE10_3 = 'E76' || CIE10_4 = 'E76' || CIE10_5 = 'E76' || CIE10_6 = 'E76' || CIE10_7 = 'E76' || CIE10_8 = 'E76' || CIE10_9 = 'E76' || CIE10_10 = 'E76') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E77($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E77' || CIE10_2 = 'E77' || CIE10_3 = 'E77' || CIE10_4 = 'E77' || CIE10_5 = 'E77' || CIE10_6 = 'E77' || CIE10_7 = 'E77' || CIE10_8 = 'E77' || CIE10_9 = 'E77' || CIE10_10 = 'E77') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E78($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E78' || CIE10_2 = 'E78' || CIE10_3 = 'E78' || CIE10_4 = 'E78' || CIE10_5 = 'E78' || CIE10_6 = 'E78' || CIE10_7 = 'E78' || CIE10_8 = 'E78' || CIE10_9 = 'E78' || CIE10_10 = 'E78') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E79($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E79' || CIE10_2 = 'E79' || CIE10_3 = 'E79' || CIE10_4 = 'E79' || CIE10_5 = 'E79' || CIE10_6 = 'E79' || CIE10_7 = 'E79' || CIE10_8 = 'E79' || CIE10_9 = 'E79' || CIE10_10 = 'E79') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
     public static function E80($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E80' || CIE10_2 = 'E80' || CIE10_3 = 'E80' || CIE10_4 = 'E80' || CIE10_5 = 'E80' || CIE10_6 = 'E80' || CIE10_7 = 'E80' || CIE10_8 = 'E80' || CIE10_9 = 'E80' || CIE10_10 = 'E80') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E83($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E83' || CIE10_2 = 'E83' || CIE10_3 = 'E83' || CIE10_4 = 'E83' || CIE10_5 = 'E83' || CIE10_6 = 'E83' || CIE10_7 = 'E83' || CIE10_8 = 'E83' || CIE10_9 = 'E83' || CIE10_10 = 'E83') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E84($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E84' || CIE10_2 = 'E84' || CIE10_3 = 'E84' || CIE10_4 = 'E84' || CIE10_5 = 'E84' || CIE10_6 = 'E84' || CIE10_7 = 'E84' || CIE10_8 = 'E84' || CIE10_9 = 'E84' || CIE10_10 = 'E84') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E85($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E85' || CIE10_2 = 'E85' || CIE10_3 = 'E85' || CIE10_4 = '85' || CIE10_5 = 'E85' || CIE10_6 = 'E85' || CIE10_7 = 'E85' || CIE10_8 = 'E85' || CIE10_9 = '85' || CIE10_10 = 'E85') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E86($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E86' || CIE10_2 = 'E86' || CIE10_3 = 'E86' || CIE10_4 = 'E86' || CIE10_5 = 'E86' || CIE10_6 = 'E86' || CIE10_7 = 'E86' || CIE10_8 = 'E86' || CIE10_9 = 'E86' || CIE10_10 = 'E86') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E87($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E87' || CIE10_2 = 'E87' || CIE10_3 = 'E87' || CIE10_4 = 'E87' || CIE10_5 = 'E87' || CIE10_6 = 'E87' || CIE10_7 = 'E87' || CIE10_8 = 'E87' || CIE10_9 = 'E87' || CIE10_10 = 'E87') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E88($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E88' || CIE10_2 = 'E88' || CIE10_3 = 'E88' || CIE10_4 = 'E88' || CIE10_5 = 'E88' || CIE10_6 = 'E88' || CIE10_7 = 'E88' || CIE10_8 = 'E88' || CIE10_9 = 'E88' || CIE10_10 = 'E88') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E89($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E89' || CIE10_2 = 'E89' || CIE10_3 = 'E89' || CIE10_4 = 'E89' || CIE10_5 = 'E89' || CIE10_6 = 'E89' || CIE10_7 = 'E89' || CIE10_8 = 'E89' || CIE10_9 = 'E89' || CIE10_10 = 'E89') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }
    public static function E90($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'E90' || CIE10_2 = 'E90' || CIE10_3 = 'E90' || CIE10_4 = 'E90' || CIE10_5 = 'E90' || CIE10_6 = 'E90' || CIE10_7 = 'E90' || CIE10_8 = 'E90' || CIE10_9 = 'E90' || CIE10_10 = 'E90') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];   
        }
        return $total_usuarios;
    }    
    
    
    
    
    
    public static function R030($conexion) {
        
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general3 WHERE (CIE10_1 = 'R030' || CIE10_2 = 'R030' || CIE10_3 = 'R030' || CIE10_4 = 'R030' || CIE10_5 = 'R030') &&  Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
       
        }
        return $total_usuarios;
    }

}
?>