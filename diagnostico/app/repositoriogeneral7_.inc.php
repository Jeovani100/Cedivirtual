<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class Consolidados7 {
 public static function T000($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T000' || CIE10_2 = 'T000' || CIE10_3 = 'T000' || CIE10_4 = 'T000' || CIE10_5 = 'T000' || CIE10_6 = 'T000' || CIE10_7 = 'T000' || CIE10_8 = 'T000' || CIE10_9 = 'T000' || CIE10_10 = 'T000') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T001($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T001' || CIE10_2 = 'T001' || CIE10_3 = 'T001' || CIE10_4 = 'T001' || CIE10_5 = 'T001' || CIE10_6 = 'T001' || CIE10_7 = 'T001' || CIE10_8 = 'T001' || CIE10_9 = 'T001' || CIE10_10 = 'T001') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T002($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T002' || CIE10_2 = 'T002' || CIE10_3 = 'T002' || CIE10_4 = 'T002' || CIE10_5 = 'T002' || CIE10_6 = 'T002' || CIE10_7 = 'T002' || CIE10_8 = 'T002' || CIE10_9 = 'T002' || CIE10_10 = 'T002') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T003($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T003' || CIE10_2 = 'T003' || CIE10_3 = 'T003' || CIE10_4 = 'T003' || CIE10_5 = 'T003' || CIE10_6 = 'T003' || CIE10_7 = 'T003' || CIE10_8 = 'T003' || CIE10_9 = 'T003' || CIE10_10 = 'T003') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T006($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T006' || CIE10_2 = 'T006' || CIE10_3 = 'T006' || CIE10_4 = 'T006' || CIE10_5 = 'T006' || CIE10_6 = 'T006' || CIE10_7 = 'T006' || CIE10_8 = 'T006' || CIE10_9 = 'T006' || CIE10_10 = 'T006') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T008($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T008' || CIE10_2 = 'T008' || CIE10_3 = 'T008' || CIE10_4 = 'T008' || CIE10_5 = 'T008' || CIE10_6 = 'T008' || CIE10_7 = 'T008' || CIE10_8 = 'T008' || CIE10_9 = 'T008' || CIE10_10 = 'T008') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T009($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T009' || CIE10_2 = 'T009' || CIE10_3 = 'T009' || CIE10_4 = 'T009' || CIE10_5 = 'T009' || CIE10_6 = 'T009' || CIE10_7 = 'T009' || CIE10_8 = 'T009' || CIE10_9 = 'T009' || CIE10_10 = 'T009') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T010($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T010' || CIE10_2 = 'T010' || CIE10_3 = 'T010' || CIE10_4 = 'T010' || CIE10_5 = 'T010' || CIE10_6 = 'T010' || CIE10_7 = 'T010' || CIE10_8 = 'T010' || CIE10_9 = 'T010' || CIE10_10 = 'T010') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T011($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T011' || CIE10_2 = 'T011' || CIE10_3 = 'T011' || CIE10_4 = 'T011' || CIE10_5 = 'T011' || CIE10_6 = 'T011' || CIE10_7 = 'T011' || CIE10_8 = 'T011' || CIE10_9 = 'T011' || CIE10_10 = 'T011') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T012($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T012' || CIE10_2 = 'T012' || CIE10_3 = 'T012' || CIE10_4 = 'T012' || CIE10_5 = 'T012' || CIE10_6 = 'T012' || CIE10_7 = 'T012' || CIE10_8 = 'T012' || CIE10_9 = 'T012' || CIE10_10 = 'T012') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T013($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T013' || CIE10_2 = 'T013' || CIE10_3 = 'T013' || CIE10_4 = 'T013' || CIE10_5 = 'T013' || CIE10_6 = 'T013' || CIE10_7 = 'T013' || CIE10_8 = 'T013' || CIE10_9 = 'T013' || CIE10_10 = 'T013') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T016($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T016' || CIE10_2 = 'T016' || CIE10_3 = 'T016' || CIE10_4 = 'T016' || CIE10_5 = 'T016' || CIE10_6 = 'T016' || CIE10_7 = 'T016' || CIE10_8 = 'T016' || CIE10_9 = 'T016' || CIE10_10 = 'T016') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T018($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T018' || CIE10_2 = 'T018' || CIE10_3 = 'T018' || CIE10_4 = 'T018' || CIE10_5 = 'T018' || CIE10_6 = 'T018' || CIE10_7 = 'T018' || CIE10_8 = 'T018' || CIE10_9 = 'T018' || CIE10_10 = 'T018') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T019($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T019' || CIE10_2 = 'T019' || CIE10_3 = 'T019' || CIE10_4 = 'T019' || CIE10_5 = 'T019' || CIE10_6 = 'T019' || CIE10_7 = 'T019' || CIE10_8 = 'T019' || CIE10_9 = 'T019' || CIE10_10 = 'T019') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T020($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T020' || CIE10_2 = 'T020' || CIE10_3 = 'T020' || CIE10_4 = 'T020' || CIE10_5 = 'T020' || CIE10_6 = 'T020' || CIE10_7 = 'T020' || CIE10_8 = 'T020' || CIE10_9 = 'T020' || CIE10_10 = 'T020') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T021($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T021' || CIE10_2 = 'T021' || CIE10_3 = 'T021' || CIE10_4 = 'T021' || CIE10_5 = 'T021' || CIE10_6 = 'T021' || CIE10_7 = 'T021' || CIE10_8 = 'T021' || CIE10_9 = 'T021' || CIE10_10 = 'T021') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T022($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T022' || CIE10_2 = 'T022' || CIE10_3 = 'T022' || CIE10_4 = 'T022' || CIE10_5 = 'T022' || CIE10_6 = 'T022' || CIE10_7 = 'T022' || CIE10_8 = 'T022' || CIE10_9 = 'T022' || CIE10_10 = 'T022') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T023($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T023' || CIE10_2 = 'T023' || CIE10_3 = 'T023' || CIE10_4 = 'T023' || CIE10_5 = 'T023' || CIE10_6 = 'T023' || CIE10_7 = 'T023' || CIE10_8 = 'T023' || CIE10_9 = 'T023' || CIE10_10 = 'T023') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T024($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T024' || CIE10_2 = 'T024' || CIE10_3 = 'T024' || CIE10_4 = 'T024' || CIE10_5 = 'T024' || CIE10_6 = 'T024' || CIE10_7 = 'T024' || CIE10_8 = 'T024' || CIE10_9 = 'T024' || CIE10_10 = 'T024') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T025($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T025' || CIE10_2 = 'T025' || CIE10_3 = 'T025' || CIE10_4 = 'T025' || CIE10_5 = 'T025' || CIE10_6 = 'T025' || CIE10_7 = 'T025' || CIE10_8 = 'T025' || CIE10_9 = 'T025' || CIE10_10 = 'T025') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T026($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T026' || CIE10_2 = 'T026' || CIE10_3 = 'T026' || CIE10_4 = 'T026' || CIE10_5 = 'T026' || CIE10_6 = 'T026' || CIE10_7 = 'T026' || CIE10_8 = 'T026' || CIE10_9 = 'T026' || CIE10_10 = 'T026') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T027($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T027' || CIE10_2 = 'T027' || CIE10_3 = 'T027' || CIE10_4 = 'T027' || CIE10_5 = 'T027' || CIE10_6 = 'T027' || CIE10_7 = 'T027' || CIE10_8 = 'T027' || CIE10_9 = 'T027' || CIE10_10 = 'T027') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T028($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T028' || CIE10_2 = 'T028' || CIE10_3 = 'T028' || CIE10_4 = 'T028' || CIE10_5 = 'T028' || CIE10_6 = 'T028' || CIE10_7 = 'T028' || CIE10_8 = 'T028' || CIE10_9 = 'T028' || CIE10_10 = 'T028') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T029($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T029' || CIE10_2 = 'T029' || CIE10_3 = 'T029' || CIE10_4 = 'T029' || CIE10_5 = 'T029' || CIE10_6 = 'T029' || CIE10_7 = 'T029' || CIE10_8 = 'T029' || CIE10_9 = 'T029' || CIE10_10 = 'T029') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T030($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T030' || CIE10_2 = 'T030' || CIE10_3 = 'T030' || CIE10_4 = 'T030' || CIE10_5 = 'T030' || CIE10_6 = 'T030' || CIE10_7 = 'T030' || CIE10_8 = 'T030' || CIE10_9 = 'T030' || CIE10_10 = 'T030') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T031($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T031' || CIE10_2 = 'T031' || CIE10_3 = 'T031' || CIE10_4 = 'T031' || CIE10_5 = 'T031' || CIE10_6 = 'T031' || CIE10_7 = 'T031' || CIE10_8 = 'T031' || CIE10_9 = 'T031' || CIE10_10 = 'T031') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T032($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T032' || CIE10_2 = 'T032' || CIE10_3 = 'T032' || CIE10_4 = 'T032' || CIE10_5 = 'T032' || CIE10_6 = 'T032' || CIE10_7 = 'T032' || CIE10_8 = 'T032' || CIE10_9 = 'T032' || CIE10_10 = 'T032') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T033($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T033' || CIE10_2 = 'T033' || CIE10_3 = 'T033' || CIE10_4 = 'T033' || CIE10_5 = 'T033' || CIE10_6 = 'T033' || CIE10_7 = 'T033' || CIE10_8 = 'T033' || CIE10_9 = 'T033' || CIE10_10 = 'T033') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T034($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T034' || CIE10_2 = 'T034' || CIE10_3 = 'T034' || CIE10_4 = 'T034' || CIE10_5 = 'T034' || CIE10_6 = 'T034' || CIE10_7 = 'T034' || CIE10_8 = 'T034' || CIE10_9 = 'T034' || CIE10_10 = 'T034') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T038($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T038' || CIE10_2 = 'T038' || CIE10_3 = 'T038' || CIE10_4 = 'T038' || CIE10_5 = 'T038' || CIE10_6 = 'T038' || CIE10_7 = 'T038' || CIE10_8 = 'T038' || CIE10_9 = 'T038' || CIE10_10 = 'T038') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T039($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T039' || CIE10_2 = 'T039' || CIE10_3 = 'T039' || CIE10_4 = 'T039' || CIE10_5 = 'T039' || CIE10_6 = 'T039' || CIE10_7 = 'T039' || CIE10_8 = 'T039' || CIE10_9 = 'T039' || CIE10_10 = 'T039') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T040($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T040' || CIE10_2 = 'T040' || CIE10_3 = 'T040' || CIE10_4 = 'T040' || CIE10_5 = 'T040' || CIE10_6 = 'T040' || CIE10_7 = 'T040' || CIE10_8 = 'T040' || CIE10_9 = 'T040' || CIE10_10 = 'T040') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T041($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T041' || CIE10_2 = 'T041' || CIE10_3 = 'T041' || CIE10_4 = 'T041' || CIE10_5 = 'T041' || CIE10_6 = 'T041' || CIE10_7 = 'T041' || CIE10_8 = 'T041' || CIE10_9 = 'T041' || CIE10_10 = 'T041') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T042($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T042' || CIE10_2 = 'T042' || CIE10_3 = 'T042' || CIE10_4 = 'T042' || CIE10_5 = 'T042' || CIE10_6 = 'T042' || CIE10_7 = 'T042' || CIE10_8 = 'T042' || CIE10_9 = 'T042' || CIE10_10 = 'T042') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T043($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T043' || CIE10_2 = 'T043' || CIE10_3 = 'T043' || CIE10_4 = 'T043' || CIE10_5 = 'T043' || CIE10_6 = 'T043' || CIE10_7 = 'T043' || CIE10_8 = 'T043' || CIE10_9 = 'T043' || CIE10_10 = 'T043') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T044($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T044' || CIE10_2 = 'T044' || CIE10_3 = 'T044' || CIE10_4 = 'T044' || CIE10_5 = 'T044' || CIE10_6 = 'T044' || CIE10_7 = 'T044' || CIE10_8 = 'T044' || CIE10_9 = 'T044' || CIE10_10 = 'T044') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T047($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T047' || CIE10_2 = 'T047' || CIE10_3 = 'T047' || CIE10_4 = 'T047' || CIE10_5 = 'T047' || CIE10_6 = 'T047' || CIE10_7 = 'T047' || CIE10_8 = 'T047' || CIE10_9 = 'T047' || CIE10_10 = 'T047') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T048($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T048' || CIE10_2 = 'T048' || CIE10_3 = 'T048' || CIE10_4 = 'T048' || CIE10_5 = 'T048' || CIE10_6 = 'T048' || CIE10_7 = 'T048' || CIE10_8 = 'T048' || CIE10_9 = 'T048' || CIE10_10 = 'T048') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T049($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T049' || CIE10_2 = 'T049' || CIE10_3 = 'T049' || CIE10_4 = 'T049' || CIE10_5 = 'T049' || CIE10_6 = 'T049' || CIE10_7 = 'T049' || CIE10_8 = 'T049' || CIE10_9 = 'T049' || CIE10_10 = 'T049') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T050($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T050' || CIE10_2 = 'T050' || CIE10_3 = 'T050' || CIE10_4 = 'T050' || CIE10_5 = 'T050' || CIE10_6 = 'T050' || CIE10_7 = 'T050' || CIE10_8 = 'T050' || CIE10_9 = 'T050' || CIE10_10 = 'T050') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }    
public static function T051($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T051' || CIE10_2 = 'T051' || CIE10_3 = 'T051' || CIE10_4 = 'T051' || CIE10_5 = 'T051' || CIE10_6 = 'T' || CIE10_7 = 'T051' || CIE10_8 = 'T051' || CIE10_9 = 'T051' || CIE10_10 = 'T051') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T052($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T052' || CIE10_2 = 'T052' || CIE10_3 = 'T052' || CIE10_4 = 'T052' || CIE10_5 = 'T052' || CIE10_6 = 'T052' || CIE10_7 = 'T052' || CIE10_8 = 'T052' || CIE10_9 = 'T052' || CIE10_10 = 'T052') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T053($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T053' || CIE10_2 = 'T053' || CIE10_3 = 'T053' || CIE10_4 = 'T053' || CIE10_5 = 'T053' || CIE10_6 = 'T053' || CIE10_7 = 'T053' || CIE10_8 = 'T053' || CIE10_9 = 'T053' || CIE10_10 = 'T053') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T054($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T054' || CIE10_2 = 'T054' || CIE10_3 = 'T054' || CIE10_4 = 'T054' || CIE10_5 = 'T054' || CIE10_6 = 'T054' || CIE10_7 = 'T054' || CIE10_8 = 'T054' || CIE10_9 = 'T054' || CIE10_10 = 'T054') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T055($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T055' || CIE10_2 = 'T055' || CIE10_3 = 'T055' || CIE10_4 = 'T055' || CIE10_5 = 'T055' || CIE10_6 = 'T055' || CIE10_7 = 'T055' || CIE10_8 = 'T055' || CIE10_9 = 'T055' || CIE10_10 = 'T055') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T056($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T056' || CIE10_2 = 'T056' || CIE10_3 = 'T056' || CIE10_4 = 'T056' || CIE10_5 = 'T056' || CIE10_6 = 'T056' || CIE10_7 = 'T056' || CIE10_8 = 'T056' || CIE10_9 = 'T056' || CIE10_10 = 'T056') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T058($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T058' || CIE10_2 = 'T058' || CIE10_3 = 'T058' || CIE10_4 = 'T058' || CIE10_5 = 'T058' || CIE10_6 = 'T058' || CIE10_7 = 'T058' || CIE10_8 = 'T058' || CIE10_9 = 'T058' || CIE10_10 = 'T058') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T059($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T059' || CIE10_2 = 'T059' || CIE10_3 = 'T059' || CIE10_4 = 'T059' || CIE10_5 = 'T059' || CIE10_6 = 'T059' || CIE10_7 = 'T059' || CIE10_8 = 'T059' || CIE10_9 = 'T059' || CIE10_10 = 'T059') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T060($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T060' || CIE10_2 = 'T060' || CIE10_3 = 'T060' || CIE10_4 = 'T060' || CIE10_5 = 'T060' || CIE10_6 = 'T060' || CIE10_7 = 'T060' || CIE10_8 = 'T060' || CIE10_9 = 'T060' || CIE10_10 = 'T060') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T061($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T061' || CIE10_2 = 'T061' || CIE10_3 = 'T061' || CIE10_4 = 'T061' || CIE10_5 = 'T061' || CIE10_6 = 'T061' || CIE10_7 = 'T061' || CIE10_8 = 'T061' || CIE10_9 = 'T061' || CIE10_10 = 'T061') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T062($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T062' || CIE10_2 = 'T062' || CIE10_3 = 'T062' || CIE10_4 = 'T062' || CIE10_5 = 'T062' || CIE10_6 = 'T062' || CIE10_7 = 'T062' || CIE10_8 = 'T062' || CIE10_9 = 'T062' || CIE10_10 = 'T062') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T063($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T063' || CIE10_2 = 'T063' || CIE10_3 = 'T063' || CIE10_4 = 'T063' || CIE10_5 = 'T063' || CIE10_6 = 'T063' || CIE10_7 = 'T063' || CIE10_8 = 'T063' || CIE10_9 = 'T063' || CIE10_10 = 'T063') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T064($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T064' || CIE10_2 = 'T064' || CIE10_3 = 'T064' || CIE10_4 = 'T064' || CIE10_5 = 'T064' || CIE10_6 = 'T064' || CIE10_7 = 'T064' || CIE10_8 = 'T064' || CIE10_9 = 'T064' || CIE10_10 = 'T064') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T065($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T065' || CIE10_2 = 'T065' || CIE10_3 = 'T065' || CIE10_4 = 'T065' || CIE10_5 = 'T065' || CIE10_6 = 'T065' || CIE10_7 = 'T065' || CIE10_8 = 'T065' || CIE10_9 = 'T065' || CIE10_10 = 'T065') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T068($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T068' || CIE10_2 = 'T068' || CIE10_3 = 'T068' || CIE10_4 = 'T068' || CIE10_5 = 'T068' || CIE10_6 = 'T068' || CIE10_7 = 'T068' || CIE10_8 = 'T068' || CIE10_9 = 'T068' || CIE10_10 = 'T068') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T07X($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T07X' || CIE10_2 = 'T07X' || CIE10_3 = 'T07X' || CIE10_4 = 'T07X' || CIE10_5 = 'T07X' || CIE10_6 = 'T07X' || CIE10_7 = 'T07X' || CIE10_8 = 'T07X' || CIE10_9 = 'T07X' || CIE10_10 = 'T07X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T08X($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T08X' || CIE10_2 = 'T08X' || CIE10_3 = 'T08X' || CIE10_4 = 'T08X' || CIE10_5 = 'T08X' || CIE10_6 = 'T08X' || CIE10_7 = 'T08X' || CIE10_8 = 'T08X' || CIE10_9 = 'T08X' || CIE10_10 = 'T08X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T090($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T090' || CIE10_2 = 'T090' || CIE10_3 = 'T090' || CIE10_4 = 'T090' || CIE10_5 = 'T090' || CIE10_6 = 'T090' || CIE10_7 = 'T090' || CIE10_8 = 'T090' || CIE10_9 = 'T090' || CIE10_10 = 'T090') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T091($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T091' || CIE10_2 = 'T091' || CIE10_3 = 'T091' || CIE10_4 = 'T091' || CIE10_5 = 'T091' || CIE10_6 = 'T091' || CIE10_7 = 'T091' || CIE10_8 = 'T091' || CIE10_9 = 'T091' || CIE10_10 = 'T091') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T092($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T092' || CIE10_2 = 'T092' || CIE10_3 = 'T092' || CIE10_4 = 'T092' || CIE10_5 = 'T092' || CIE10_6 = 'T092' || CIE10_7 = 'T092' || CIE10_8 = 'T092' || CIE10_9 = 'T092' || CIE10_10 = 'T092') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
    public static function T093($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T093' || CIE10_2 = 'T093' || CIE10_3 = 'T093' || CIE10_4 = 'T093' || CIE10_5 = 'T093' || CIE10_6 = 'T093' || CIE10_7 = 'T093' || CIE10_8 = 'T093' || CIE10_9 = 'T093' || CIE10_10 = 'T093') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T094($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T094' || CIE10_2 = 'T094' || CIE10_3 = 'T094' || CIE10_4 = 'T094' || CIE10_5 = 'T094' || CIE10_6 = 'T094' || CIE10_7 = 'T094' || CIE10_8 = 'T094' || CIE10_9 = 'T094' || CIE10_10 = 'T094') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T095($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T095' || CIE10_2 = 'T095' || CIE10_3 = 'T095' || CIE10_4 = 'T095' || CIE10_5 = 'T095' || CIE10_6 = 'T095' || CIE10_7 = 'T095' || CIE10_8 = 'T095' || CIE10_9 = 'T095' || CIE10_10 = 'T095') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T096($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T096' || CIE10_2 = 'T096' || CIE10_3 = 'T096' || CIE10_4 = 'T096' || CIE10_5 = 'T096' || CIE10_6 = 'T096' || CIE10_7 = 'T096' || CIE10_8 = 'T096' || CIE10_9 = 'T096' || CIE10_10 = 'T096') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T098($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T098' || CIE10_2 = 'T098' || CIE10_3 = 'T098' || CIE10_4 = 'T098' || CIE10_5 = 'T098' || CIE10_6 = 'T098' || CIE10_7 = 'T098' || CIE10_8 = 'T098' || CIE10_9 = 'T098' || CIE10_10 = 'T098') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T099($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T099' || CIE10_2 = 'T099' || CIE10_3 = 'T099' || CIE10_4 = 'T099' || CIE10_5 = 'T099' || CIE10_6 = 'T099' || CIE10_7 = 'T099' || CIE10_8 = 'T099' || CIE10_9 = 'T099' || CIE10_10 = 'T099') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T10X($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T10X' || CIE10_2 = 'T10X' || CIE10_3 = 'T10X' || CIE10_4 = 'T10X' || CIE10_5 = 'T10X' || CIE10_6 = 'T10X' || CIE10_7 = 'T10X' || CIE10_8 = 'T10X' || CIE10_9 = 'T10X' || CIE10_10 = 'T10X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }    
public static function T110($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T110' || CIE10_2 = 'T110' || CIE10_3 = 'T110' || CIE10_4 = 'T110' || CIE10_5 = 'T110' || CIE10_6 = 'T110' || CIE10_7 = 'T110' || CIE10_8 = 'T110' || CIE10_9 = 'T110' || CIE10_10 = 'T110') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T111($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T111' || CIE10_2 = 'T111' || CIE10_3 = 'T111' || CIE10_4 = 'T111' || CIE10_5 = 'T111' || CIE10_6 = 'T111' || CIE10_7 = 'T111' || CIE10_8 = 'T111' || CIE10_9 = 'T111' || CIE10_10 = 'T111') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T112($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T112' || CIE10_2 = 'T112' || CIE10_3 = 'T112' || CIE10_4 = 'T112' || CIE10_5 = 'T112' || CIE10_6 = 'T112' || CIE10_7 = 'T112' || CIE10_8 = 'T112' || CIE10_9 = 'T112' || CIE10_10 = 'T112') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T113($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T113' || CIE10_2 = 'T113' || CIE10_3 = 'T113' || CIE10_4 = 'T113' || CIE10_5 = 'T113' || CIE10_6 = 'T113' || CIE10_7 = 'T113' || CIE10_8 = 'T113' || CIE10_9 = 'T113' || CIE10_10 = 'T113') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T114($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T114' || CIE10_2 = 'T114' || CIE10_3 = 'T114' || CIE10_4 = 'T114' || CIE10_5 = 'T114' || CIE10_6 = 'T114' || CIE10_7 = 'T114' || CIE10_8 = 'T114' || CIE10_9 = 'T114' || CIE10_10 = 'T114') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T115($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T115' || CIE10_2 = 'T115' || CIE10_3 = 'T115' || CIE10_4 = 'T115' || CIE10_5 = 'T115' || CIE10_6 = 'T115' || CIE10_7 = 'T115' || CIE10_8 = 'T115' || CIE10_9 = 'T115' || CIE10_10 = 'T115') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T116($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T116' || CIE10_2 = 'T116' || CIE10_3 = 'T116' || CIE10_4 = 'T116' || CIE10_5 = 'T116' || CIE10_6 = 'T116' || CIE10_7 = 'T116' || CIE10_8 = 'T116' || CIE10_9 = 'T116' || CIE10_10 = 'T116') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T118($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T118' || CIE10_2 = 'T118' || CIE10_3 = 'T118' || CIE10_4 = 'T118' || CIE10_5 = 'T118' || CIE10_6 = 'T118' || CIE10_7 = 'T118' || CIE10_8 = 'T118' || CIE10_9 = 'T118' || CIE10_10 = 'T118') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T119($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T119' || CIE10_2 = 'T119' || CIE10_3 = 'T119' || CIE10_4 = 'T119' || CIE10_5 = 'T119' || CIE10_6 = 'T119' || CIE10_7 = 'T119' || CIE10_8 = 'T119' || CIE10_9 = 'T119' || CIE10_10 = 'T119') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
    public static function T12X($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T12X' || CIE10_2 = 'T12X' || CIE10_3 = 'T12X' || CIE10_4 = 'T12X' || CIE10_5 = 'T12X' || CIE10_6 = 'T12X' || CIE10_7 = 'T12X' || CIE10_8 = 'T12X' || CIE10_9 = 'T12X' || CIE10_10 = 'T12X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T130($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T130' || CIE10_2 = 'T130' || CIE10_3 = 'T130' || CIE10_4 = 'T130' || CIE10_5 = 'T130' || CIE10_6 = 'T130' || CIE10_7 = 'T130' || CIE10_8 = 'T130' || CIE10_9 = 'T130' || CIE10_10 = 'T130') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T131($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T131' || CIE10_2 = 'T131' || CIE10_3 = 'T131' || CIE10_4 = 'T131' || CIE10_5 = 'T131' || CIE10_6 = 'T131' || CIE10_7 = 'T131' || CIE10_8 = 'T131' || CIE10_9 = 'T131' || CIE10_10 = 'T131') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T132($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T132' || CIE10_2 = 'T132' || CIE10_3 = 'T132' || CIE10_4 = 'T132' || CIE10_5 = 'T132' || CIE10_6 = 'T132' || CIE10_7 = 'T132' || CIE10_8 = 'T132' || CIE10_9 = 'T132' || CIE10_10 = 'T132') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
    
    }
        return $total_usuarios; }
    public static function T133($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T133' || CIE10_2 = 'T133' || CIE10_3 = 'T133' || CIE10_4 = 'T133' || CIE10_5 = 'T133' || CIE10_6 = 'T133' || CIE10_7 = 'T133' || CIE10_8 = 'T133' || CIE10_9 = 'T133' || CIE10_10 = 'T133') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T134($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T134' || CIE10_2 = 'T134' || CIE10_3 = 'T134' || CIE10_4 = 'T134' || CIE10_5 = 'T134' || CIE10_6 = 'T134' || CIE10_7 = 'T134' || CIE10_8 = 'T134' || CIE10_9 = 'T134' || CIE10_10 = 'T134') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T135($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T135' || CIE10_2 = 'T135' || CIE10_3 = 'T135' || CIE10_4 = 'T135' || CIE10_5 = 'T135' || CIE10_6 = 'T135' || CIE10_7 = 'T135' || CIE10_8 = 'T135' || CIE10_9 = 'T135' || CIE10_10 = 'T135') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T136($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T136' || CIE10_2 = 'T136' || CIE10_3 = 'T136' || CIE10_4 = 'T136' || CIE10_5 = 'T136' || CIE10_6 = 'T136' || CIE10_7 = 'T136' || CIE10_8 = 'T136' || CIE10_9 = 'T136' || CIE10_10 = 'T136') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T138($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T138' || CIE10_2 = 'T138' || CIE10_3 = 'T138' || CIE10_4 = 'T138' || CIE10_5 = 'T138' || CIE10_6 = 'T138' || CIE10_7 = 'T138' || CIE10_8 = 'T138' || CIE10_9 = 'T138' || CIE10_10 = 'T138') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T139($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T139' || CIE10_2 = 'T139' || CIE10_3 = 'T139' || CIE10_4 = 'T139' || CIE10_5 = 'T139' || CIE10_6 = 'T139' || CIE10_7 = 'T139' || CIE10_8 = 'T139' || CIE10_9 = 'T139' || CIE10_10 = 'T139') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T140($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T140' || CIE10_2 = 'T140' || CIE10_3 = 'T140' || CIE10_4 = 'T140' || CIE10_5 = 'T140' || CIE10_6 = 'T140' || CIE10_7 = 'T140' || CIE10_8 = 'T140' || CIE10_9 = 'T140' || CIE10_10 = 'T140') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T141($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T141' || CIE10_2 = 'T141' || CIE10_3 = 'T141' || CIE10_4 = 'T141' || CIE10_5 = 'T141' || CIE10_6 = 'T141' || CIE10_7 = 'T141' || CIE10_8 = 'T141' || CIE10_9 = 'T141' || CIE10_10 = 'T141') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T142($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T142' || CIE10_2 = 'T142' || CIE10_3 = 'T142' || CIE10_4 = 'T142' || CIE10_5 = 'T142' || CIE10_6 = 'T142' || CIE10_7 = 'T142' || CIE10_8 = 'T142' || CIE10_9 = 'T142' || CIE10_10 = 'T142') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T143($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T143' || CIE10_2 = 'T143' || CIE10_3 = 'T143' || CIE10_4 = 'T143' || CIE10_5 = 'T143' || CIE10_6 = 'T143' || CIE10_7 = 'T143' || CIE10_8 = 'T143' || CIE10_9 = 'T143' || CIE10_10 = 'T143') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T144($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T144' || CIE10_2 = 'T144' || CIE10_3 = 'T144' || CIE10_4 = 'T144' || CIE10_5 = 'T144' || CIE10_6 = 'T144' || CIE10_7 = 'T144' || CIE10_8 = 'T144' || CIE10_9 = 'T144' || CIE10_10 = 'T144') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T145($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T145' || CIE10_2 = 'T145' || CIE10_3 = 'T145' || CIE10_4 = 'T145' || CIE10_5 = 'T145' || CIE10_6 = 'T145' || CIE10_7 = 'T145' || CIE10_8 = 'T145' || CIE10_9 = 'T145' || CIE10_10 = 'T145') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T146($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T146' || CIE10_2 = 'T146' || CIE10_3 = 'T146' || CIE10_4 = 'T146' || CIE10_5 = 'T146' || CIE10_6 = 'T146' || CIE10_7 = 'T146' || CIE10_8 = 'T146' || CIE10_9 = 'T146' || CIE10_10 = 'T146') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T147($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T147' || CIE10_2 = 'T147' || CIE10_3 = 'T147' || CIE10_4 = 'T147' || CIE10_5 = 'T147' || CIE10_6 = 'T147' || CIE10_7 = 'T147' || CIE10_8 = 'T147' || CIE10_9 = 'T147' || CIE10_10 = 'T147') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T148($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T148' || CIE10_2 = 'T148' || CIE10_3 = 'T148' || CIE10_4 = 'T148' || CIE10_5 = 'T148' || CIE10_6 = 'T148' || CIE10_7 = 'T148' || CIE10_8 = 'T148' || CIE10_9 = 'T148' || CIE10_10 = 'T148') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T149($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T149' || CIE10_2 = 'T149' || CIE10_3 = 'T149' || CIE10_4 = 'T149' || CIE10_5 = 'T149' || CIE10_6 = 'T149' || CIE10_7 = 'T149' || CIE10_8 = 'T149' || CIE10_9 = 'T149' || CIE10_10 = 'T149') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}    
return $total_usuarios; }    
public static function T220($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T220' || CIE10_2 = 'T220' || CIE10_3 = 'T220' || CIE10_4 = 'T220' || CIE10_5 = 'T220' || CIE10_6 = 'T220' || CIE10_7 = 'T220' || CIE10_8 = 'T220' || CIE10_9 = 'T220' || CIE10_10 = 'T220') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T221($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T221' || CIE10_2 = 'T221' || CIE10_3 = 'T221' || CIE10_4 = 'T221' || CIE10_5 = 'T221' || CIE10_6 = 'T221' || CIE10_7 = 'T221' || CIE10_8 = 'T221' || CIE10_9 = 'T221' || CIE10_10 = 'T221') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T222($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T222' || CIE10_2 = 'T222' || CIE10_3 = 'T222' || CIE10_4 = 'T222' || CIE10_5 = 'T222' || CIE10_6 = 'T222' || CIE10_7 = 'T222' || CIE10_8 = 'T222' || CIE10_9 = 'T222' || CIE10_10 = 'T222') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T223($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T223' || CIE10_2 = 'T223' || CIE10_3 = 'T223' || CIE10_4 = 'T223' || CIE10_5 = 'T223' || CIE10_6 = 'T223' || CIE10_7 = 'T223' || CIE10_8 = 'T223' || CIE10_9 = 'T223' || CIE10_10 = 'T223') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T224($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T224' || CIE10_2 = 'T224' || CIE10_3 = 'T224' || CIE10_4 = 'T224' || CIE10_5 = 'T224' || CIE10_6 = 'T224' || CIE10_7 = 'T224' || CIE10_8 = 'T224' || CIE10_9 = 'T224' || CIE10_10 = 'T224') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T225($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T225' || CIE10_2 = 'T225' || CIE10_3 = 'T225' || CIE10_4 = 'T225' || CIE10_5 = 'T225' || CIE10_6 = 'T225' || CIE10_7 = 'T225' || CIE10_8 = 'T225' || CIE10_9 = 'T225' || CIE10_10 = 'T225') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T226($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T226' || CIE10_2 = 'T226' || CIE10_3 = 'T226' || CIE10_4 = 'T226' || CIE10_5 = 'T226' || CIE10_6 = 'T226' || CIE10_7 = 'T226' || CIE10_8 = 'T226' || CIE10_9 = 'T226' || CIE10_10 = 'T226') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T227($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T227' || CIE10_2 = 'T227' || CIE10_3 = 'T227' || CIE10_4 = 'T227' || CIE10_5 = 'T227' || CIE10_6 = 'T227' || CIE10_7 = 'T227' || CIE10_8 = 'T227' || CIE10_9 = 'T227' || CIE10_10 = 'T227') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T230($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T230' || CIE10_2 = 'T230' || CIE10_3 = 'T230' || CIE10_4 = 'T230' || CIE10_5 = 'T230' || CIE10_6 = 'T230' || CIE10_7 = 'T230' || CIE10_8 = 'T230' || CIE10_9 = 'T230' || CIE10_10 = 'T230') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T231($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T231' || CIE10_2 = 'T231' || CIE10_3 = 'T231' || CIE10_4 = 'T231' || CIE10_5 = 'T231' || CIE10_6 = 'T231' || CIE10_7 = 'T231' || CIE10_8 = 'T231' || CIE10_9 = 'T231' || CIE10_10 = 'T231') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T232($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T232' || CIE10_2 = 'T232' || CIE10_3 = 'T232' || CIE10_4 = 'T232' || CIE10_5 = 'T232' || CIE10_6 = 'T232' || CIE10_7 = 'T232' || CIE10_8 = 'T232' || CIE10_9 = 'T232' || CIE10_10 = 'T232') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T233($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T233' || CIE10_2 = 'T233' || CIE10_3 = 'T233' || CIE10_4 = 'T233' || CIE10_5 = 'T233' || CIE10_6 = 'T233' || CIE10_7 = 'T233' || CIE10_8 = 'T233' || CIE10_9 = 'T233' || CIE10_10 = 'T233') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T234($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T234' || CIE10_2 = 'T234' || CIE10_3 = 'T234' || CIE10_4 = 'T234' || CIE10_5 = 'T234' || CIE10_6 = 'T234' || CIE10_7 = 'T234' || CIE10_8 = 'T234' || CIE10_9 = 'T234' || CIE10_10 = 'T234') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T235($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T235' || CIE10_2 = 'T235' || CIE10_3 = 'T235' || CIE10_4 = 'T235' || CIE10_5 = 'T235' || CIE10_6 = 'T235' || CIE10_7 = 'T235' || CIE10_8 = 'T235' || CIE10_9 = 'T235' || CIE10_10 = 'T235') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T236($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T236' || CIE10_2 = 'T236' || CIE10_3 = 'T236' || CIE10_4 = 'T236' || CIE10_5 = 'T236' || CIE10_6 = 'T236' || CIE10_7 = 'T236' || CIE10_8 = 'T236' || CIE10_9 = 'T236' || CIE10_10 = 'T236') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T237($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T237' || CIE10_2 = 'T237' || CIE10_3 = 'T237' || CIE10_4 = 'T237' || CIE10_5 = 'T237' || CIE10_6 = 'T237' || CIE10_7 = 'T237' || CIE10_8 = 'T237' || CIE10_9 = 'T237' || CIE10_10 = 'T237') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T240($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T240' || CIE10_2 = 'T240' || CIE10_3 = 'T240' || CIE10_4 = 'T240' || CIE10_5 = 'T240' || CIE10_6 = 'T240' || CIE10_7 = 'T240' || CIE10_8 = 'T240' || CIE10_9 = 'T240' || CIE10_10 = 'T240') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T241($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T241' || CIE10_2 = 'T241' || CIE10_3 = 'T241' || CIE10_4 = 'T241' || CIE10_5 = 'T241' || CIE10_6 = 'T241' || CIE10_7 = 'T241' || CIE10_8 = 'T241' || CIE10_9 = 'T241' || CIE10_10 = 'T241') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T242($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T242' || CIE10_2 = 'T242' || CIE10_3 = 'T242' || CIE10_4 = 'T242' || CIE10_5 = 'T242' || CIE10_6 = 'T242' || CIE10_7 = 'T242' || CIE10_8 = 'T242' || CIE10_9 = 'T242' || CIE10_10 = 'T242') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T243($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T243' || CIE10_2 = 'T243' || CIE10_3 = 'T243' || CIE10_4 = 'T243' || CIE10_5 = 'T243' || CIE10_6 = 'T243' || CIE10_7 = 'T243' || CIE10_8 = 'T243' || CIE10_9 = 'T243' || CIE10_10 = 'T243') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T244($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T244' || CIE10_2 = 'T244' || CIE10_3 = 'T244' || CIE10_4 = 'T244' || CIE10_5 = 'T244' || CIE10_6 = 'T244' || CIE10_7 = 'T244' || CIE10_8 = 'T244' || CIE10_9 = 'T244' || CIE10_10 = 'T244') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T245($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T245' || CIE10_2 = 'T245' || CIE10_3 = 'T245' || CIE10_4 = 'T245' || CIE10_5 = 'T245' || CIE10_6 = 'T245' || CIE10_7 = 'T245' || CIE10_8 = 'T245' || CIE10_9 = 'T245' || CIE10_10 = 'T245') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T246($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T246' || CIE10_2 = 'T246' || CIE10_3 = 'T246' || CIE10_4 = 'T246' || CIE10_5 = 'T246' || CIE10_6 = 'T246' || CIE10_7 = 'T246' || CIE10_8 = 'T246' || CIE10_9 = 'T246' || CIE10_10 = 'T246') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T247($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T247' || CIE10_2 = 'T247' || CIE10_3 = 'T247' || CIE10_4 = 'T247' || CIE10_5 = 'T247' || CIE10_6 = 'T247' || CIE10_7 = 'T247' || CIE10_8 = 'T247' || CIE10_9 = 'T247' || CIE10_10 = 'T247') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T250($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T250' || CIE10_2 = 'T250' || CIE10_3 = 'T250' || CIE10_4 = 'T250' || CIE10_5 = 'T250' || CIE10_6 = 'T250' || CIE10_7 = 'T250' || CIE10_8 = 'T250' || CIE10_9 = 'T250' || CIE10_10 = 'T250') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T251($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T251' || CIE10_2 = 'T251' || CIE10_3 = 'T251' || CIE10_4 = 'T251' || CIE10_5 = 'T251' || CIE10_6 = 'T251' || CIE10_7 = 'T251' || CIE10_8 = 'T251' || CIE10_9 = 'T251' || CIE10_10 = 'T251') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T252($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T252' || CIE10_2 = 'T252' || CIE10_3 = 'T252' || CIE10_4 = 'T252' || CIE10_5 = 'T252' || CIE10_6 = 'T252' || CIE10_7 = 'T252' || CIE10_8 = 'T252' || CIE10_9 = 'T252' || CIE10_10 = 'T252') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T253($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T253' || CIE10_2 = 'T253' || CIE10_3 = 'T253' || CIE10_4 = 'T253' || CIE10_5 = 'T253' || CIE10_6 = 'T253' || CIE10_7 = 'T253' || CIE10_8 = 'T253' || CIE10_9 = 'T253' || CIE10_10 = 'T253') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T254($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T254' || CIE10_2 = 'T254' || CIE10_3 = 'T254' || CIE10_4 = 'T254' || CIE10_5 = 'T254' || CIE10_6 = 'T254' || CIE10_7 = 'T254' || CIE10_8 = 'T254' || CIE10_9 = 'T254' || CIE10_10 = 'T254') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T255($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T255' || CIE10_2 = 'T255' || CIE10_3 = 'T255' || CIE10_4 = 'T255' || CIE10_5 = 'T255' || CIE10_6 = 'T255' || CIE10_7 = 'T255' || CIE10_8 = 'T255' || CIE10_9 = 'T255' || CIE10_10 = 'T255') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T256($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T256' || CIE10_2 = 'T256' || CIE10_3 = 'T256' || CIE10_4 = 'T256' || CIE10_5 = 'T256' || CIE10_6 = 'T256' || CIE10_7 = 'T256' || CIE10_8 = 'T256' || CIE10_9 = 'T256' || CIE10_10 = 'T256') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T257($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T257' || CIE10_2 = 'T257' || CIE10_3 = 'T257' || CIE10_4 = 'T257' || CIE10_5 = 'T257' || CIE10_6 = 'T257' || CIE10_7 = 'T257' || CIE10_8 = 'T257' || CIE10_9 = 'T257' || CIE10_10 = 'T257') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T260($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T260' || CIE10_2 = 'T260' || CIE10_3 = 'T260' || CIE10_4 = 'T260' || CIE10_5 = 'T260' || CIE10_6 = 'T260' || CIE10_7 = 'T260' || CIE10_8 = 'T260' || CIE10_9 = 'T260' || CIE10_10 = 'T260') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T261($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T261' || CIE10_2 = 'T261' || CIE10_3 = 'T261' || CIE10_4 = 'T261' || CIE10_5 = 'T261' || CIE10_6 = 'T261' || CIE10_7 = 'T261' || CIE10_8 = 'T261' || CIE10_9 = 'T261' || CIE10_10 = 'T261') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T262($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T262' || CIE10_2 = 'T262' || CIE10_3 = 'T262' || CIE10_4 = 'T262' || CIE10_5 = 'T262' || CIE10_6 = 'T262' || CIE10_7 = 'T262' || CIE10_8 = 'T262' || CIE10_9 = 'T262' || CIE10_10 = 'T262') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T263($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T263' || CIE10_2 = 'T263' || CIE10_3 = 'T263' || CIE10_4 = 'T263' || CIE10_5 = 'T263' || CIE10_6 = 'T263' || CIE10_7 = 'T263' || CIE10_8 = 'T263' || CIE10_9 = 'T263' || CIE10_10 = 'T263') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T264($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T264' || CIE10_2 = 'T264' || CIE10_3 = 'T264' || CIE10_4 = 'T264' || CIE10_5 = 'T264' || CIE10_6 = 'T264' || CIE10_7 = 'T264' || CIE10_8 = 'T264' || CIE10_9 = 'T264' || CIE10_10 = 'T264') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T265($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T265' || CIE10_2 = 'T265' || CIE10_3 = 'T265' || CIE10_4 = 'T265' || CIE10_5 = 'T265' || CIE10_6 = 'T265' || CIE10_7 = 'T265' || CIE10_8 = 'T265' || CIE10_9 = 'T265' || CIE10_10 = 'T265') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T266($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T266' || CIE10_2 = 'T266' || CIE10_3 = 'T266' || CIE10_4 = 'T266' || CIE10_5 = 'T266' || CIE10_6 = 'T266' || CIE10_7 = 'T266' || CIE10_8 = 'T266' || CIE10_9 = 'T266' || CIE10_10 = 'T266') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T267($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T267' || CIE10_2 = 'T267' || CIE10_3 = 'T267' || CIE10_4 = 'T267' || CIE10_5 = 'T267' || CIE10_6 = 'T267' || CIE10_7 = 'T267' || CIE10_8 = 'T267' || CIE10_9 = 'T267' || CIE10_10 = 'T267') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T268($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T268' || CIE10_2 = 'T268' || CIE10_3 = 'T268' || CIE10_4 = 'T268' || CIE10_5 = 'T268' || CIE10_6 = 'T268' || CIE10_7 = 'T268' || CIE10_8 = 'T268' || CIE10_9 = 'T268' || CIE10_10 = 'T268') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T269($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T269' || CIE10_2 = 'T269' || CIE10_3 = 'T269' || CIE10_4 = 'T269' || CIE10_5 = 'T269' || CIE10_6 = 'T269' || CIE10_7 = 'T269' || CIE10_8 = 'T269' || CIE10_9 = 'T269' || CIE10_10 = 'T269') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T270($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T270' || CIE10_2 = 'T270' || CIE10_3 = 'T270' || CIE10_4 = 'T270' || CIE10_5 = 'T270' || CIE10_6 = 'T270' || CIE10_7 = 'T270' || CIE10_8 = 'T270' || CIE10_9 = 'T270' || CIE10_10 = 'T270') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T271($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T271' || CIE10_2 = 'T271' || CIE10_3 = 'T271' || CIE10_4 = 'T271' || CIE10_5 = 'T271' || CIE10_6 = 'T271' || CIE10_7 = 'T271' || CIE10_8 = 'T271' || CIE10_9 = 'T271' || CIE10_10 = 'T271') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T272($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T272' || CIE10_2 = 'T272' || CIE10_3 = 'T272' || CIE10_4 = 'T272' || CIE10_5 = 'T272' || CIE10_6 = 'T272' || CIE10_7 = 'T272' || CIE10_8 = 'T272' || CIE10_9 = 'T272' || CIE10_10 = 'T272') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T273($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T273' || CIE10_2 = 'T273' || CIE10_3 = 'T273' || CIE10_4 = 'T273' || CIE10_5 = 'T273' || CIE10_6 = 'T273' || CIE10_7 = 'T273' || CIE10_8 = 'T273' || CIE10_9 = 'T273' || CIE10_10 = 'T273') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T274($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T274' || CIE10_2 = 'T274' || CIE10_3 = 'T274' || CIE10_4 = 'T274' || CIE10_5 = 'T274' || CIE10_6 = 'T274' || CIE10_7 = 'T274' || CIE10_8 = 'T274' || CIE10_9 = 'T274' || CIE10_10 = 'T274') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T275($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T275' || CIE10_2 = 'T275' || CIE10_3 = 'T275' || CIE10_4 = 'T275' || CIE10_5 = 'T275' || CIE10_6 = 'T275' || CIE10_7 = 'T275' || CIE10_8 = 'T275' || CIE10_9 = 'T275' || CIE10_10 = 'T275') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T276($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T276' || CIE10_2 = 'T276' || CIE10_3 = 'T276' || CIE10_4 = 'T276' || CIE10_5 = 'T276' || CIE10_6 = 'T276' || CIE10_7 = 'T276' || CIE10_8 = 'T276' || CIE10_9 = 'T276' || CIE10_10 = 'T276') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T277($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T277' || CIE10_2 = 'T277' || CIE10_3 = 'T277' || CIE10_4 = 'T277' || CIE10_5 = 'T277' || CIE10_6 = 'T277' || CIE10_7 = 'T277' || CIE10_8 = 'T277' || CIE10_9 = 'T277' || CIE10_10 = 'T277') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T280($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T280' || CIE10_2 = 'T280' || CIE10_3 = 'T280' || CIE10_4 = 'T280' || CIE10_5 = 'T280' || CIE10_6 = 'T280' || CIE10_7 = 'T280' || CIE10_8 = 'T280' || CIE10_9 = 'T280' || CIE10_10 = 'T280') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T281($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T281' || CIE10_2 = 'T281' || CIE10_3 = 'T281' || CIE10_4 = 'T281' || CIE10_5 = 'T281' || CIE10_6 = 'T281' || CIE10_7 = 'T281' || CIE10_8 = 'T281' || CIE10_9 = 'T281' || CIE10_10 = 'T281') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T282($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T282' || CIE10_2 = 'T282' || CIE10_3 = 'T282' || CIE10_4 = 'T282' || CIE10_5 = 'T282' || CIE10_6 = 'T282' || CIE10_7 = 'T282' || CIE10_8 = 'T282' || CIE10_9 = 'T282' || CIE10_10 = 'T282') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T283($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T283' || CIE10_2 = 'T283' || CIE10_3 = 'T283' || CIE10_4 = 'T283' || CIE10_5 = 'T283' || CIE10_6 = 'T283' || CIE10_7 = 'T283' || CIE10_8 = 'T283' || CIE10_9 = 'T283' || CIE10_10 = 'T283') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T284($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T284' || CIE10_2 = 'T284' || CIE10_3 = 'T284' || CIE10_4 = 'T284' || CIE10_5 = 'T284' || CIE10_6 = 'T284' || CIE10_7 = 'T284' || CIE10_8 = 'T284' || CIE10_9 = 'T284' || CIE10_10 = 'T284') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T285($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T285' || CIE10_2 = 'T285' || CIE10_3 = 'T285' || CIE10_4 = 'T285' || CIE10_5 = 'T285' || CIE10_6 = 'T285' || CIE10_7 = 'T285' || CIE10_8 = 'T285' || CIE10_9 = 'T285' || CIE10_10 = 'T285') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T286($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T286' || CIE10_2 = 'T286' || CIE10_3 = 'T286' || CIE10_4 = 'T286' || CIE10_5 = 'T286' || CIE10_6 = 'T286' || CIE10_7 = 'T286' || CIE10_8 = 'T286' || CIE10_9 = 'T286' || CIE10_10 = 'T286') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T287($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T287' || CIE10_2 = 'T287' || CIE10_3 = 'T287' || CIE10_4 = 'T287' || CIE10_5 = 'T287' || CIE10_6 = 'T287' || CIE10_7 = 'T287' || CIE10_8 = 'T287' || CIE10_9 = 'T287' || CIE10_10 = 'T287') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T288($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T288' || CIE10_2 = 'T288' || CIE10_3 = 'T288' || CIE10_4 = 'T288' || CIE10_5 = 'T288' || CIE10_6 = 'T288' || CIE10_7 = 'T288' || CIE10_8 = 'T288' || CIE10_9 = 'T288' || CIE10_10 = 'T288') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T289($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T289' || CIE10_2 = 'T289' || CIE10_3 = 'T289' || CIE10_4 = 'T289' || CIE10_5 = 'T289' || CIE10_6 = 'T289' || CIE10_7 = 'T289' || CIE10_8 = 'T289' || CIE10_9 = 'T289' || CIE10_10 = 'T289') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T290($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T290' || CIE10_2 = 'T290' || CIE10_3 = 'T290' || CIE10_4 = 'T290' || CIE10_5 = 'T290' || CIE10_6 = 'T290' || CIE10_7 = 'T290' || CIE10_8 = 'T290' || CIE10_9 = 'T290' || CIE10_10 = 'T290') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T291($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T291' || CIE10_2 = 'T291' || CIE10_3 = 'T291' || CIE10_4 = 'T291' || CIE10_5 = 'T291' || CIE10_6 = 'T291' || CIE10_7 = 'T291' || CIE10_8 = 'T291' || CIE10_9 = 'T291' || CIE10_10 = 'T291') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T292($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T292' || CIE10_2 = 'T292' || CIE10_3 = 'T292' || CIE10_4 = 'T292' || CIE10_5 = 'T292' || CIE10_6 = 'T292' || CIE10_7 = 'T292' || CIE10_8 = 'T292' || CIE10_9 = 'T292' || CIE10_10 = 'T292') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T293($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T293' || CIE10_2 = 'T293' || CIE10_3 = 'T293' || CIE10_4 = 'T293' || CIE10_5 = 'T293' || CIE10_6 = 'T293' || CIE10_7 = 'T293' || CIE10_8 = 'T293' || CIE10_9 = 'T293' || CIE10_10 = 'T293') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T294($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T294' || CIE10_2 = 'T294' || CIE10_3 = 'T294' || CIE10_4 = 'T294' || CIE10_5 = 'T294' || CIE10_6 = 'T294' || CIE10_7 = 'T294' || CIE10_8 = 'T294' || CIE10_9 = 'T294' || CIE10_10 = 'T294') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T295($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T295' || CIE10_2 = 'T295' || CIE10_3 = 'T295' || CIE10_4 = 'T295' || CIE10_5 = 'T295' || CIE10_6 = 'T295' || CIE10_7 = 'T295' || CIE10_8 = 'T295' || CIE10_9 = 'T295' || CIE10_10 = 'T295') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T296($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T296' || CIE10_2 = 'T296' || CIE10_3 = 'T296' || CIE10_4 = 'T296' || CIE10_5 = 'T296' || CIE10_6 = 'T296' || CIE10_7 = 'T296' || CIE10_8 = 'T296' || CIE10_9 = 'T296' || CIE10_10 = 'T296') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T297($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T297' || CIE10_2 = 'T297' || CIE10_3 = 'T297' || CIE10_4 = 'T297' || CIE10_5 = 'T297' || CIE10_6 = 'T297' || CIE10_7 = 'T297' || CIE10_8 = 'T297' || CIE10_9 = 'T297' || CIE10_10 = 'T297') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }    
public static function T300($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T300' || CIE10_2 = 'T300' || CIE10_3 = 'T300' || CIE10_4 = 'T300' || CIE10_5 = 'T300' || CIE10_6 = 'T300' || CIE10_7 = 'T300' || CIE10_8 = 'T300' || CIE10_9 = 'T300' || CIE10_10 = 'T300') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T301($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T301' || CIE10_2 = 'T301' || CIE10_3 = 'T301' || CIE10_4 = 'T301' || CIE10_5 = 'T301' || CIE10_6 = 'T301' || CIE10_7 = 'T301' || CIE10_8 = 'T301' || CIE10_9 = 'T301' || CIE10_10 = 'T301') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T302($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T302' || CIE10_2 = 'T302' || CIE10_3 = 'T302' || CIE10_4 = 'T302' || CIE10_5 = 'T302' || CIE10_6 = 'T302' || CIE10_7 = 'T302' || CIE10_8 = 'T302' || CIE10_9 = 'T302' || CIE10_10 = 'T302') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T303($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T303' || CIE10_2 = 'T303' || CIE10_3 = 'T303' || CIE10_4 = 'T303' || CIE10_5 = 'T303' || CIE10_6 = 'T303' || CIE10_7 = 'T303' || CIE10_8 = 'T303' || CIE10_9 = 'T303' || CIE10_10 = 'T303') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T304($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T304' || CIE10_2 = 'T304' || CIE10_3 = 'T304' || CIE10_4 = 'T304' || CIE10_5 = 'T304' || CIE10_6 = 'T304' || CIE10_7 = 'T304' || CIE10_8 = 'T304' || CIE10_9 = 'T304' || CIE10_10 = 'T304') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T305($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T305' || CIE10_2 = 'T305' || CIE10_3 = 'T305' || CIE10_4 = 'T305' || CIE10_5 = 'T305' || CIE10_6 = 'T305' || CIE10_7 = 'T305' || CIE10_8 = 'T305' || CIE10_9 = 'T305' || CIE10_10 = 'T305') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T306($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T306' || CIE10_2 = 'T306' || CIE10_3 = 'T306' || CIE10_4 = 'T306' || CIE10_5 = 'T306' || CIE10_6 = 'T306' || CIE10_7 = 'T306' || CIE10_8 = 'T306' || CIE10_9 = 'T306' || CIE10_10 = 'T306') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T307($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T307' || CIE10_2 = 'T307' || CIE10_3 = 'T307' || CIE10_4 = 'T307' || CIE10_5 = 'T307' || CIE10_6 = 'T307' || CIE10_7 = 'T307' || CIE10_8 = 'T307' || CIE10_9 = 'T307' || CIE10_10 = 'T307') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T310($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T310' || CIE10_2 = 'T310' || CIE10_3 = 'T310' || CIE10_4 = 'T310' || CIE10_5 = 'T310' || CIE10_6 = 'T310' || CIE10_7 = 'T310' || CIE10_8 = 'T310' || CIE10_9 = 'T310' || CIE10_10 = 'T310') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T311($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T311' || CIE10_2 = 'T311' || CIE10_3 = 'T311' || CIE10_4 = 'T311' || CIE10_5 = 'T311' || CIE10_6 = 'T311' || CIE10_7 = 'T311' || CIE10_8 = 'T311' || CIE10_9 = 'T311' || CIE10_10 = 'T311') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T312($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T312' || CIE10_2 = 'T312' || CIE10_3 = 'T312' || CIE10_4 = 'T312' || CIE10_5 = 'T312' || CIE10_6 = 'T312' || CIE10_7 = 'T312' || CIE10_8 = 'T312' || CIE10_9 = 'T312' || CIE10_10 = 'T312') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T313($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T313' || CIE10_2 = 'T313' || CIE10_3 = 'T313' || CIE10_4 = 'T313' || CIE10_5 = 'T313' || CIE10_6 = 'T313' || CIE10_7 = 'T313' || CIE10_8 = 'T313' || CIE10_9 = 'T313' || CIE10_10 = 'T313') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T314($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T314' || CIE10_2 = 'T314' || CIE10_3 = 'T314' || CIE10_4 = 'T314' || CIE10_5 = 'T314' || CIE10_6 = 'T314' || CIE10_7 = 'T314' || CIE10_8 = 'T314' || CIE10_9 = 'T314' || CIE10_10 = 'T314') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T315($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T315' || CIE10_2 = 'T315' || CIE10_3 = 'T315' || CIE10_4 = 'T315' || CIE10_5 = 'T315' || CIE10_6 = 'T315' || CIE10_7 = 'T315' || CIE10_8 = 'T315' || CIE10_9 = 'T315' || CIE10_10 = 'T315') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T316($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T316' || CIE10_2 = 'T316' || CIE10_3 = 'T316' || CIE10_4 = 'T316' || CIE10_5 = 'T316' || CIE10_6 = 'T316' || CIE10_7 = 'T316' || CIE10_8 = 'T316' || CIE10_9 = 'T316' || CIE10_10 = 'T316') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T317($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T317' || CIE10_2 = 'T317' || CIE10_3 = 'T317' || CIE10_4 = 'T317' || CIE10_5 = 'T317' || CIE10_6 = 'T317' || CIE10_7 = 'T317' || CIE10_8 = 'T317' || CIE10_9 = 'T317' || CIE10_10 = 'T317') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T318($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T318' || CIE10_2 = 'T318' || CIE10_3 = 'T318' || CIE10_4 = 'T318' || CIE10_5 = 'T318' || CIE10_6 = 'T318' || CIE10_7 = 'T318' || CIE10_8 = 'T318' || CIE10_9 = 'T318' || CIE10_10 = 'T318') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T319($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T319' || CIE10_2 = 'T319' || CIE10_3 = 'T319' || CIE10_4 = 'T319' || CIE10_5 = 'T319' || CIE10_6 = 'T319' || CIE10_7 = 'T319' || CIE10_8 = 'T319' || CIE10_9 = 'T319' || CIE10_10 = 'T319') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T320($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T320' || CIE10_2 = 'T320' || CIE10_3 = 'T320' || CIE10_4 = 'T320' || CIE10_5 = 'T320' || CIE10_6 = 'T320' || CIE10_7 = 'T320' || CIE10_8 = 'T320' || CIE10_9 = 'T320' || CIE10_10 = 'T320') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T321($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T321' || CIE10_2 = 'T321' || CIE10_3 = 'T321' || CIE10_4 = 'T321' || CIE10_5 = 'T321' || CIE10_6 = 'T321' || CIE10_7 = 'T321' || CIE10_8 = 'T321' || CIE10_9 = 'T321' || CIE10_10 = 'T321') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T322($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T322' || CIE10_2 = 'T322' || CIE10_3 = 'T322' || CIE10_4 = 'T322' || CIE10_5 = 'T322' || CIE10_6 = 'T322' || CIE10_7 = 'T322' || CIE10_8 = 'T322' || CIE10_9 = 'T322' || CIE10_10 = 'T322') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T323($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T323' || CIE10_2 = 'T323' || CIE10_3 = 'T323' || CIE10_4 = 'T323' || CIE10_5 = 'T323' || CIE10_6 = 'T323' || CIE10_7 = 'T323' || CIE10_8 = 'T323' || CIE10_9 = 'T323' || CIE10_10 = 'T323') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T324($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T324' || CIE10_2 = 'T324' || CIE10_3 = 'T324' || CIE10_4 = 'T324' || CIE10_5 = 'T324' || CIE10_6 = 'T324' || CIE10_7 = 'T324' || CIE10_8 = 'T324' || CIE10_9 = 'T324' || CIE10_10 = 'T324') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T325($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T325' || CIE10_2 = 'T325' || CIE10_3 = 'T325' || CIE10_4 = 'T325' || CIE10_5 = 'T325' || CIE10_6 = 'T325' || CIE10_7 = 'T325' || CIE10_8 = 'T325' || CIE10_9 = 'T325' || CIE10_10 = 'T325') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}

    return $total_usuarios; }
public static function T326($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T326' || CIE10_2 = 'T326' || CIE10_3 = 'T326' || CIE10_4 = 'T326' || CIE10_5 = 'T326' || CIE10_6 = 'T326' || CIE10_7 = 'T326' || CIE10_8 = 'T326' || CIE10_9 = 'T326' || CIE10_10 = 'T326') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T327($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T327' || CIE10_2 = 'T327' || CIE10_3 = 'T327' || CIE10_4 = 'T327' || CIE10_5 = 'T327' || CIE10_6 = 'T327' || CIE10_7 = 'T327' || CIE10_8 = 'T327' || CIE10_9 = 'T327' || CIE10_10 = 'T327') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
    return $total_usuarios; }
public static function T328($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T328' || CIE10_2 = 'T328' || CIE10_3 = 'T328' || CIE10_4 = 'T328' || CIE10_5 = 'T328' || CIE10_6 = 'T328' || CIE10_7 = 'T328' || CIE10_8 = 'T328' || CIE10_9 = 'T328' || CIE10_10 = 'T328') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];


}
    return $total_usuarios; }
public static function T329($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T329' || CIE10_2 = 'T329' || CIE10_3 = 'T329' || CIE10_4 = 'T329' || CIE10_5 = 'T329' || CIE10_6 = 'T329' || CIE10_7 = 'T329' || CIE10_8 = 'T329' || CIE10_9 = 'T329' || CIE10_10 = 'T329') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];


}
    return $total_usuarios; }
public static function T330($conexion) {
    $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
    $total_usuarios = null; 
    if (isset($conexion)) {
        $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T330' || CIE10_2 = 'T330' || CIE10_3 = 'T330' || CIE10_4 = 'T330' || CIE10_5 = 'T330' || CIE10_6 = 'T330' || CIE10_7 = 'T330' || CIE10_8 = 'T330' || CIE10_9 = 'T330' || CIE10_10 = 'T330') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T331($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T331' || CIE10_2 = 'T331' || CIE10_3 = 'T331' || CIE10_4 = 'T331' || CIE10_5 = 'T331' || CIE10_6 = 'T331' || CIE10_7 = 'T331' || CIE10_8 = 'T331' || CIE10_9 = 'T331' || CIE10_10 = 'T331') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T332($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T332' || CIE10_2 = 'T332' || CIE10_3 = 'T332' || CIE10_4 = 'T332' || CIE10_5 = 'T332' || CIE10_6 = 'T332' || CIE10_7 = 'T332' || CIE10_8 = 'T332' || CIE10_9 = 'T332' || CIE10_10 = 'T332') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T333($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T333' || CIE10_2 = 'T333' || CIE10_3 = 'T333' || CIE10_4 = 'T333' || CIE10_5 = 'T333' || CIE10_6 = 'T333' || CIE10_7 = 'T333' || CIE10_8 = 'T333' || CIE10_9 = 'T333' || CIE10_10 = 'T333') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}

return $total_usuarios; }
public static function T334($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T334' || CIE10_2 = 'T334' || CIE10_3 = 'T334' || CIE10_4 = 'T334' || CIE10_5 = 'T334' || CIE10_6 = 'T334' || CIE10_7 = 'T334' || CIE10_8 = 'T334' || CIE10_9 = 'T334' || CIE10_10 = 'T334') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T335($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
$sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T335' || CIE10_2 = 'T335' || CIE10_3 = 'T335' || CIE10_4 = 'T335' || CIE10_5 = 'T335' || CIE10_6 = 'T335' || CIE10_7 = 'T335' || CIE10_8 = 'T335' || CIE10_9 = 'T335' || CIE10_10 = 'T335') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T336($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T336' || CIE10_2 = 'T336' || CIE10_3 = 'T336' || CIE10_4 = 'T336' || CIE10_5 = 'T336' || CIE10_6 = 'T336' || CIE10_7 = 'T336' || CIE10_8 = 'T336' || CIE10_9 = 'T336' || CIE10_10 = 'T336') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T337($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T337' || CIE10_2 = 'T337' || CIE10_3 = 'T337' || CIE10_4 = 'T337' || CIE10_5 = 'T337' || CIE10_6 = 'T337' || CIE10_7 = 'T337' || CIE10_8 = 'T337' || CIE10_9 = 'T337' || CIE10_10 = 'T337') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T338($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T338' || CIE10_2 = 'T338' || CIE10_3 = 'T338' || CIE10_4 = 'T338' || CIE10_5 = 'T338' || CIE10_6 = 'T338' || CIE10_7 = 'T338' || CIE10_8 = 'T338' || CIE10_9 = 'T338' || CIE10_10 = 'T338') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T339($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T339' || CIE10_2 = 'T339' || CIE10_3 = 'T339' || CIE10_4 = 'T339' || CIE10_5 = 'T339' || CIE10_6 = 'T339' || CIE10_7 = 'T339' || CIE10_8 = 'T339' || CIE10_9 = 'T339' || CIE10_10 = 'T339') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T340($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T340' || CIE10_2 = 'T340' || CIE10_3 = 'T340' || CIE10_4 = 'T340' || CIE10_5 = 'T340' || CIE10_6 = 'T340' || CIE10_7 = 'T340' || CIE10_8 = 'T340' || CIE10_9 = 'T340' || CIE10_10 = 'T340') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T341($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T341' || CIE10_2 = 'T341' || CIE10_3 = 'T341' || CIE10_4 = 'T341' || CIE10_5 = 'T341' || CIE10_6 = 'T341' || CIE10_7 = 'T341' || CIE10_8 = 'T341' || CIE10_9 = 'T341' || CIE10_10 = 'T341') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}

return $total_usuarios; }
public static function T342($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T342' || CIE10_2 = 'T342' || CIE10_3 = 'T342' || CIE10_4 = 'T342' || CIE10_5 = 'T342' || CIE10_6 = 'T342' || CIE10_7 = 'T342' || CIE10_8 = 'T342' || CIE10_9 = 'T342' || CIE10_10 = 'T342') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T343($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
$sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T343' || CIE10_2 = 'T343' || CIE10_3 = 'T343' || CIE10_4 = 'T343' || CIE10_5 = 'T343' || CIE10_6 = 'T343' || CIE10_7 = 'T343' || CIE10_8 = 'T343' || CIE10_9 = 'T343' || CIE10_10 = 'T343') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T344($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T344' || CIE10_2 = 'T344' || CIE10_3 = 'T344' || CIE10_4 = 'T344' || CIE10_5 = 'T344' || CIE10_6 = 'T344' || CIE10_7 = 'T344' || CIE10_8 = 'T344' || CIE10_9 = 'T344' || CIE10_10 = 'T344') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T345($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T345' || CIE10_2 = 'T345' || CIE10_3 = 'T345' || CIE10_4 = 'T345' || CIE10_5 = 'T345' || CIE10_6 = 'T345' || CIE10_7 = 'T345' || CIE10_8 = 'T345' || CIE10_9 = 'T345' || CIE10_10 = 'T345') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T346($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T346' || CIE10_2 = 'T346' || CIE10_3 = 'T346' || CIE10_4 = 'T346' || CIE10_5 = 'T346' || CIE10_6 = 'T346' || CIE10_7 = 'T346' || CIE10_8 = 'T346' || CIE10_9 = 'T346' || CIE10_10 = 'T346') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T347($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T347' || CIE10_2 = 'T347' || CIE10_3 = 'T347' || CIE10_4 = 'T347' || CIE10_5 = 'T347' || CIE10_6 = 'T347' || CIE10_7 = 'T347' || CIE10_8 = 'T347' || CIE10_9 = 'T347' || CIE10_10 = 'T347') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T348($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T348' || CIE10_2 = 'T348' || CIE10_3 = 'T348' || CIE10_4 = 'T348' || CIE10_5 = 'T348' || CIE10_6 = 'T348' || CIE10_7 = 'T348' || CIE10_8 = 'T348' || CIE10_9 = 'T348' || CIE10_10 = 'T348') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T349($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T349' || CIE10_2 = 'T349' || CIE10_3 = 'T349' || CIE10_4 = 'T349' || CIE10_5 = 'T349' || CIE10_6 = 'T349' || CIE10_7 = 'T349' || CIE10_8 = 'T349' || CIE10_9 = 'T349' || CIE10_10 = 'T349') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T350($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T350' || CIE10_2 = 'T350' || CIE10_3 = 'T350' || CIE10_4 = 'T350' || CIE10_5 = 'T350' || CIE10_6 = 'T350' || CIE10_7 = 'T350' || CIE10_8 = 'T350' || CIE10_9 = 'T350' || CIE10_10 = 'T350') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T351($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
$sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T351' || CIE10_2 = 'T351' || CIE10_3 = 'T351' || CIE10_4 = 'T351' || CIE10_5 = 'T351' || CIE10_6 = 'T351' || CIE10_7 = 'T351' || CIE10_8 = 'T351' || CIE10_9 = 'T351' || CIE10_10 = 'T351') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetch();
        $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T352($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T352' || CIE10_2 = 'T352' || CIE10_3 = 'T352' || CIE10_4 = 'T352' || CIE10_5 = 'T352' || CIE10_6 = 'T352' || CIE10_7 = 'T352' || CIE10_8 = 'T352' || CIE10_9 = 'T352' || CIE10_10 = 'T352') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T353($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T353' || CIE10_2 = 'T353' || CIE10_3 = 'T353' || CIE10_4 = 'T353' || CIE10_5 = 'T353' || CIE10_6 = 'T353' || CIE10_7 = 'T353' || CIE10_8 = 'T353' || CIE10_9 = 'T353' || CIE10_10 = 'T353') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];


}
return $total_usuarios; }
public static function T354($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T354' || CIE10_2 = 'T354' || CIE10_3 = 'T354' || CIE10_4 = 'T354' || CIE10_5 = 'T354' || CIE10_6 = 'T354' || CIE10_7 = 'T354' || CIE10_8 = 'T354' || CIE10_9 = 'T354' || CIE10_10 = 'T354') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T355($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T355' || CIE10_2 = 'T355' || CIE10_3 = 'T355' || CIE10_4 = 'T355' || CIE10_5 = 'T355' || CIE10_6 = 'T355' || CIE10_7 = 'T355' || CIE10_8 = 'T355' || CIE10_9 = 'T355' || CIE10_10 = 'T355') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T356($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T356' || CIE10_2 = 'T356' || CIE10_3 = 'T356' || CIE10_4 = 'T356' || CIE10_5 = 'T356' || CIE10_6 = 'T356' || CIE10_7 = 'T356' || CIE10_8 = 'T356' || CIE10_9 = 'T356' || CIE10_10 = 'T356') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T357($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T357' || CIE10_2 = 'T357' || CIE10_3 = 'T357' || CIE10_4 = 'T357' || CIE10_5 = 'T357' || CIE10_6 = 'T357' || CIE10_7 = 'T357' || CIE10_8 = 'T357' || CIE10_9 = 'T357' || CIE10_10 = 'T357') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }    
public static function T900($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T900' || CIE10_2 = 'T900' || CIE10_3 = 'T900' || CIE10_4 = 'T900' || CIE10_5 = 'T900' || CIE10_6 = 'T900' || CIE10_7 = 'T900' || CIE10_8 = 'T900' || CIE10_9 = 'T900' || CIE10_10 = 'T900') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T901($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T901' || CIE10_2 = 'T' || CIE10_3 = 'T901' || CIE10_4 = 'T901' || CIE10_5 = 'T901' || CIE10_6 = 'T901' || CIE10_7 = 'T901' || CIE10_8 = 'T901' || CIE10_9 = 'T901' || CIE10_10 = 'T901') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T902($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T902' || CIE10_2 = 'T902' || CIE10_3 = 'T902' || CIE10_4 = 'T902' || CIE10_5 = 'T902' || CIE10_6 = 'T902' || CIE10_7 = 'T902' || CIE10_8 = 'T902' || CIE10_9 = 'T902' || CIE10_10 = 'T902') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T903($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T903' || CIE10_2 = 'T903' || CIE10_3 = 'T903' || CIE10_4 = 'T903' || CIE10_5 = 'T903' || CIE10_6 = 'T903' || CIE10_7 = 'T903' || CIE10_8 = 'T903' || CIE10_9 = 'T903' || CIE10_10 = 'T903') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T904($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T904' || CIE10_2 = 'T904' || CIE10_3 = 'T904' || CIE10_4 = 'T904' || CIE10_5 = 'T904' || CIE10_6 = 'T904' || CIE10_7 = 'T904' || CIE10_8 = 'T904' || CIE10_9 = 'T904' || CIE10_10 = 'T904') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T905($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T905' || CIE10_2 = 'T905' || CIE10_3 = 'T905' || CIE10_4 = 'T905' || CIE10_5 = 'T905' || CIE10_6 = 'T905' || CIE10_7 = 'T905' || CIE10_8 = 'T905' || CIE10_9 = 'T905' || CIE10_10 = 'T905') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T908($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T908' || CIE10_2 = 'T908' || CIE10_3 = 'T908' || CIE10_4 = 'T908' || CIE10_5 = 'T908' || CIE10_6 = 'T908' || CIE10_7 = 'T908' || CIE10_8 = 'T908' || CIE10_9 = 'T908' || CIE10_10 = 'T908') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T909($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T909' || CIE10_2 = 'T909' || CIE10_3 = 'T909' || CIE10_4 = 'T909' || CIE10_5 = 'T909' || CIE10_6 = 'T909' || CIE10_7 = 'T909' || CIE10_8 = 'T909' || CIE10_9 = 'T909' || CIE10_10 = 'T909') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T910($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T910' || CIE10_2 = 'T910' || CIE10_3 = 'T910' || CIE10_4 = 'T910' || CIE10_5 = 'T910' || CIE10_6 = 'T910' || CIE10_7 = 'T910' || CIE10_8 = 'T910' || CIE10_9 = 'T910' || CIE10_10 = 'T910') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T911($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T911' || CIE10_2 = 'T911' || CIE10_3 = 'T911' || CIE10_4 = 'T911' || CIE10_5 = 'T911' || CIE10_6 = 'T911' || CIE10_7 = 'T911' || CIE10_8 = 'T911' || CIE10_9 = 'T911' || CIE10_10 = 'T911') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T912($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T912' || CIE10_2 = 'T912' || CIE10_3 = 'T912' || CIE10_4 = 'T912' || CIE10_5 = 'T912' || CIE10_6 = 'T912' || CIE10_7 = 'T912' || CIE10_8 = 'T912' || CIE10_9 = 'T912' || CIE10_10 = 'T') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T913($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T913' || CIE10_2 = 'T913' || CIE10_3 = 'T913' || CIE10_4 = 'T913' || CIE10_5 = 'T913' || CIE10_6 = 'T913' || CIE10_7 = 'T913' || CIE10_8 = 'T913' || CIE10_9 = 'T913' || CIE10_10 = 'T913') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T914($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T914' || CIE10_2 = 'T914' || CIE10_3 = 'T914' || CIE10_4 = 'T914' || CIE10_5 = 'T914' || CIE10_6 = 'T914' || CIE10_7 = 'T914' || CIE10_8 = 'T914' || CIE10_9 = 'T914' || CIE10_10 = 'T914') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T915($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T915' || CIE10_2 = 'T915' || CIE10_3 = 'T915' || CIE10_4 = 'T915' || CIE10_5 = 'T915' || CIE10_6 = 'T915' || CIE10_7 = 'T915' || CIE10_8 = 'T915' || CIE10_9 = 'T915' || CIE10_10 = 'T915') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T918($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T918' || CIE10_2 = 'T918' || CIE10_3 = 'T918' || CIE10_4 = 'T918' || CIE10_5 = 'T918' || CIE10_6 = 'T918' || CIE10_7 = 'T918' || CIE10_8 = 'T918' || CIE10_9 = 'T918' || CIE10_10 = 'T918') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T919($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T919' || CIE10_2 = 'T919' || CIE10_3 = 'T919' || CIE10_4 = 'T919' || CIE10_5 = 'T919' || CIE10_6 = 'T919' || CIE10_7 = 'T919' || CIE10_8 = 'T919' || CIE10_9 = 'T919' || CIE10_10 = 'T919') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T920($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T920' || CIE10_2 = 'T920' || CIE10_3 = 'T920' || CIE10_4 = 'T920' || CIE10_5 = 'T920' || CIE10_6 = 'T920' || CIE10_7 = 'T920' || CIE10_8 = 'T920' || CIE10_9 = 'T920' || CIE10_10 = 'T920') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T921($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T921' || CIE10_2 = 'T921' || CIE10_3 = 'T921' || CIE10_4 = 'T921' || CIE10_5 = 'T921' || CIE10_6 = 'T921' || CIE10_7 = 'T921' || CIE10_8 = 'T921' || CIE10_9 = 'T921' || CIE10_10 = 'T921') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T922($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T922' || CIE10_2 = 'T922' || CIE10_3 = 'T922' || CIE10_4 = 'T922' || CIE10_5 = 'T922' || CIE10_6 = 'T922' || CIE10_7 = 'T922' || CIE10_8 = 'T922' || CIE10_9 = 'T922' || CIE10_10 = 'T922') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T923($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T923' || CIE10_2 = 'T923' || CIE10_3 = 'T923' || CIE10_4 = 'T923' || CIE10_5 = 'T923' || CIE10_6 = 'T923' || CIE10_7 = 'T923' || CIE10_8 = 'T923' || CIE10_9 = 'T923' || CIE10_10 = 'T923') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T924($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T924' || CIE10_2 = 'T924' || CIE10_3 = 'T924' || CIE10_4 = 'T924' || CIE10_5 = 'T924' || CIE10_6 = 'T924' || CIE10_7 = 'T924' || CIE10_8 = 'T924' || CIE10_9 = 'T924' || CIE10_10 = 'T924') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T925($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T925' || CIE10_2 = 'T925' || CIE10_3 = 'T925' || CIE10_4 = 'T925' || CIE10_5 = 'T925' || CIE10_6 = 'T925' || CIE10_7 = 'T925' || CIE10_8 = 'T925' || CIE10_9 = 'T925' || CIE10_10 = 'T925') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T926($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T926' || CIE10_2 = 'T926' || CIE10_3 = 'T926' || CIE10_4 = 'T926' || CIE10_5 = 'T926' || CIE10_6 = 'T926' || CIE10_7 = 'T926' || CIE10_8 = 'T926' || CIE10_9 = 'T926' || CIE10_10 = 'T926') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T928($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T928' || CIE10_2 = 'T928' || CIE10_3 = 'T928' || CIE10_4 = 'T928' || CIE10_5 = 'T928' || CIE10_6 = 'T928' || CIE10_7 = 'T928' || CIE10_8 = 'T928' || CIE10_9 = 'T928' || CIE10_10 = 'T928') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T929($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T929' || CIE10_2 = 'T929' || CIE10_3 = 'T929' || CIE10_4 = 'T929' || CIE10_5 = 'T929' || CIE10_6 = 'T929' || CIE10_7 = 'T929' || CIE10_8 = 'T929' || CIE10_9 = 'T929' || CIE10_10 = 'T929') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T930($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T930' || CIE10_2 = 'T930' || CIE10_3 = 'T930' || CIE10_4 = 'T930' || CIE10_5 = 'T930' || CIE10_6 = 'T930' || CIE10_7 = 'T930' || CIE10_8 = 'T930' || CIE10_9 = 'T930' || CIE10_10 = 'T930') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T931($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T931' || CIE10_2 = 'T931' || CIE10_3 = 'T931' || CIE10_4 = 'T931' || CIE10_5 = 'T931' || CIE10_6 = 'T931' || CIE10_7 = 'T931' || CIE10_8 = 'T931' || CIE10_9 = 'T931' || CIE10_10 = 'T931') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T932($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T932' || CIE10_2 = 'T932' || CIE10_3 = 'T932' || CIE10_4 = 'T932' || CIE10_5 = 'T932' || CIE10_6 = 'T932' || CIE10_7 = 'T932' || CIE10_8 = 'T932' || CIE10_9 = 'T932' || CIE10_10 = 'T932') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T933($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T933' || CIE10_2 = 'T933' || CIE10_3 = 'T933' || CIE10_4 = 'T933' || CIE10_5 = 'T933' || CIE10_6 = 'T933' || CIE10_7 = 'T933' || CIE10_8 = 'T933' || CIE10_9 = 'T933' || CIE10_10 = 'T933') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T934($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T934' || CIE10_2 = 'T934' || CIE10_3 = 'T934' || CIE10_4 = 'T934' || CIE10_5 = 'T934' || CIE10_6 = 'T934' || CIE10_7 = 'T934' || CIE10_8 = 'T934' || CIE10_9 = 'T934' || CIE10_10 = 'T934') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T935($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T935' || CIE10_2 = 'T935' || CIE10_3 = 'T935' || CIE10_4 = 'T935' || CIE10_5 = 'T935' || CIE10_6 = 'T935' || CIE10_7 = 'T935' || CIE10_8 = 'T935' || CIE10_9 = 'T935' || CIE10_10 = 'T935') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T936($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T936' || CIE10_2 = 'T936' || CIE10_3 = 'T936' || CIE10_4 = 'T936' || CIE10_5 = 'T936' || CIE10_6 = 'T936' || CIE10_7 = 'T936' || CIE10_8 = 'T936' || CIE10_9 = 'T936' || CIE10_10 = 'T936') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T937($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T937' || CIE10_2 = 'T937' || CIE10_3 = 'T937' || CIE10_4 = 'T937' || CIE10_5 = 'T937' || CIE10_6 = 'T937' || CIE10_7 = 'T937' || CIE10_8 = 'T937' || CIE10_9 = 'T937' || CIE10_10 = 'T937') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T938($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T938' || CIE10_2 = 'T938' || CIE10_3 = 'T938' || CIE10_4 = 'T938' || CIE10_5 = 'T938' || CIE10_6 = 'T938' || CIE10_7 = 'T938' || CIE10_8 = 'T938' || CIE10_9 = 'T938' || CIE10_10 = 'T938') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T939($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T939' || CIE10_2 = 'T939' || CIE10_3 = 'T939' || CIE10_4 = 'T939' || CIE10_5 = 'T939' || CIE10_6 = 'T939' || CIE10_7 = 'T939' || CIE10_8 = 'T939' || CIE10_9 = 'T939' || CIE10_10 = 'T939') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T940($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T940' || CIE10_2 = 'T940' || CIE10_3 = 'T940' || CIE10_4 = 'T940' || CIE10_5 = 'T940' || CIE10_6 = 'T940' || CIE10_7 = 'T940' || CIE10_8 = 'T940' || CIE10_9 = 'T940' || CIE10_10 = 'T940') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T941($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T941' || CIE10_2 = 'T941' || CIE10_3 = 'T941' || CIE10_4 = 'T941' || CIE10_5 = 'T941' || CIE10_6 = 'T941' || CIE10_7 = 'T941' || CIE10_8 = 'T941' || CIE10_9 = 'T941' || CIE10_10 = 'T941') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T950($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T950' || CIE10_2 = 'T950' || CIE10_3 = 'T950' || CIE10_4 = 'T950' || CIE10_5 = 'T950' || CIE10_6 = 'T950' || CIE10_7 = 'T950' || CIE10_8 = 'T950' || CIE10_9 = 'T950' || CIE10_10 = 'T950') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}           
return $total_usuarios; }
public static function T951($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T951' || CIE10_2 = 'T951' || CIE10_3 = 'T951' || CIE10_4 = 'T951' || CIE10_5 = 'T951' || CIE10_6 = 'T951' || CIE10_7 = 'T951' || CIE10_8 = 'T951' || CIE10_9 = 'T951' || CIE10_10 = 'T951') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T952($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T952' || CIE10_2 = 'T952' || CIE10_3 = 'T952' || CIE10_4 = 'T952' || CIE10_5 = 'T952' || CIE10_6 = 'T952' || CIE10_7 = 'T952' || CIE10_8 = 'T952' || CIE10_9 = 'T952' || CIE10_10 = 'T952') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}            
return $total_usuarios; }
public static function T953($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T953' || CIE10_2 = 'T953' || CIE10_3 = 'T953' || CIE10_4 = 'T953' || CIE10_5 = 'T953' || CIE10_6 = 'T953' || CIE10_7 = 'T953' || CIE10_8 = 'T953' || CIE10_9 = 'T953' || CIE10_10 = 'T953') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T954($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T954' || CIE10_2 = 'T954' || CIE10_3 = 'T954' || CIE10_4 = 'T954' || CIE10_5 = 'T954' || CIE10_6 = 'T954' || CIE10_7 = 'T954' || CIE10_8 = 'T954' || CIE10_9 = 'T954' || CIE10_10 = 'T954') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T958($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T958' || CIE10_2 = 'T958' || CIE10_3 = 'T958' || CIE10_4 = 'T958' || CIE10_5 = 'T958' || CIE10_6 = 'T958' || CIE10_7 = 'T958' || CIE10_8 = 'T958' || CIE10_9 = 'T958' || CIE10_10 = 'T958') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T959($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T959' || CIE10_2 = 'T959' || CIE10_3 = 'T959' || CIE10_4 = 'T959' || CIE10_5 = 'T959' || CIE10_6 = 'T959' || CIE10_7 = 'T959' || CIE10_8 = 'T959' || CIE10_9 = 'T959' || CIE10_10 = 'T959') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T96X($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T96X' || CIE10_2 = 'T96X' || CIE10_3 = 'T96X' || CIE10_4 = 'T96X' || CIE10_5 = 'T96X' || CIE10_6 = 'T96X' || CIE10_7 = 'T96X' || CIE10_8 = 'T96X' || CIE10_9 = 'T96X' || CIE10_10 = 'T96X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];

}
return $total_usuarios; }
public static function T97X($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T97X' || CIE10_2 = 'T97X' || CIE10_3 = 'T97X' || CIE10_4 = 'T97X' || CIE10_5 = 'T97X' || CIE10_6 = 'T97X' || CIE10_7 = 'T97X' || CIE10_8 = 'T97X' || CIE10_9 = 'T97X' || CIE10_10 = 'T97X') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T980($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T980' || CIE10_2 = 'T980' || CIE10_3 = 'T980' || CIE10_4 = 'T980' || CIE10_5 = 'T980' || CIE10_6 = 'T980' || CIE10_7 = 'T980' || CIE10_8 = 'T980' || CIE10_9 = 'T980' || CIE10_10 = 'T980') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T981($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T981' || CIE10_2 = 'T981' || CIE10_3 = 'T981' || CIE10_4 = 'T981' || CIE10_5 = 'T981' || CIE10_6 = 'T981' || CIE10_7 = 'T981' || CIE10_8 = 'T981' || CIE10_9 = 'T981' || CIE10_10 = 'T981') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T982($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T982' || CIE10_2 = 'T982' || CIE10_3 = 'T982' || CIE10_4 = 'T982' || CIE10_5 = 'T982' || CIE10_6 = 'T982' || CIE10_7 = 'T982' || CIE10_8 = 'T982' || CIE10_9 = 'T982' || CIE10_10 = 'T982') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T983($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T983' || CIE10_2 = 'T983' || CIE10_3 = 'T983' || CIE10_4 = 'T983' || CIE10_5 = 'T983' || CIE10_6 = 'T983' || CIE10_7 = 'T983' || CIE10_8 = 'T983' || CIE10_9 = 'T983' || CIE10_10 = 'T983') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; } 
public static function T00($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T00' || CIE10_2 = 'T00' || CIE10_3 = 'T00' || CIE10_4 = 'T00' || CIE10_5 = 'T00' || CIE10_6 = 'T00' || CIE10_7 = 'T00' || CIE10_8 = 'T00' || CIE10_9 = 'T00' || CIE10_10 = 'T00') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T01($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T01' || CIE10_2 = 'T01' || CIE10_3 = 'T01' || CIE10_4 = 'T01' || CIE10_5 = 'T01' || CIE10_6 = 'T01' || CIE10_7 = 'T01' || CIE10_8 = 'T01' || CIE10_9 = 'T01' || CIE10_10 = 'T01') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T02($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T02' || CIE10_2 = 'T02' || CIE10_3 = 'T02' || CIE10_4 = 'T02' || CIE10_5 = 'T02' || CIE10_6 = 'T02' || CIE10_7 = 'T02' || CIE10_8 = 'T02' || CIE10_9 = 'T02' || CIE10_10 = 'T02') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T03($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T03' || CIE10_2 = 'T03' || CIE10_3 = 'T03' || CIE10_4 = 'T03' || CIE10_5 = 'T03' || CIE10_6 = 'T03' || CIE10_7 = 'T03' || CIE10_8 = 'T03' || CIE10_9 = 'T03' || CIE10_10 = 'T03') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T04($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T04' || CIE10_2 = 'T04' || CIE10_3 = 'T04' || CIE10_4 = 'T04' || CIE10_5 = 'T04' || CIE10_6 = 'T04' || CIE10_7 = 'T04' || CIE10_8 = 'T04' || CIE10_9 = 'T04' || CIE10_10 = 'T04') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T05($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T05' || CIE10_2 = 'T05' || CIE10_3 = 'T05' || CIE10_4 = 'T05' || CIE10_5 = 'T05' || CIE10_6 = 'T05' || CIE10_7 = 'T05' || CIE10_8 = 'T05' || CIE10_9 = 'T05' || CIE10_10 = 'T05') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T06($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T06' || CIE10_2 = 'T06' || CIE10_3 = 'T06' || CIE10_4 = 'T06' || CIE10_5 = 'T06' || CIE10_6 = 'T06' || CIE10_7 = 'T06' || CIE10_8 = 'T06' || CIE10_9 = 'T06' || CIE10_10 = 'T06') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T07($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T07' || CIE10_2 = 'T07' || CIE10_3 = 'T07' || CIE10_4 = 'T07' || CIE10_5 = 'T07' || CIE10_6 = 'T07' || CIE10_7 = 'T07' || CIE10_8 = 'T07' || CIE10_9 = 'T07' || CIE10_10 = 'T07') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T08($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T08' || CIE10_2 = 'T08' || CIE10_3 = 'T08' || CIE10_4 = 'T08' || CIE10_5 = 'T08' || CIE10_6 = 'T08' || CIE10_7 = 'T08' || CIE10_8 = 'T08' || CIE10_9 = 'T08' || CIE10_10 = 'T08') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T09($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T09' || CIE10_2 = 'T09' || CIE10_3 = 'T09' || CIE10_4 = 'T09' || CIE10_5 = 'T09' || CIE10_6 = 'T09' || CIE10_7 = 'T09' || CIE10_8 = 'T09' || CIE10_9 = 'T09' || CIE10_10 = 'T09') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T10($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T10' || CIE10_2 = 'T10' || CIE10_3 = 'T10' || CIE10_4 = 'T10' || CIE10_5 = 'T10' || CIE10_6 = 'T10' || CIE10_7 = 'T10' || CIE10_8 = 'T10' || CIE10_9 = 'T10' || CIE10_10 = 'T10') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T11($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T11' || CIE10_2 = 'T11' || CIE10_3 = 'T11' || CIE10_4 = 'T11' || CIE10_5 = 'T11' || CIE10_6 = 'T11' || CIE10_7 = 'T11' || CIE10_8 = 'T11' || CIE10_9 = 'T11' || CIE10_10 = 'T11') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T12($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T12' || CIE10_2 = 'T12' || CIE10_3 = 'T12' || CIE10_4 = 'T12' || CIE10_5 = 'T12' || CIE10_6 = 'T12' || CIE10_7 = 'T12' || CIE10_8 = 'T12' || CIE10_9 = 'T12' || CIE10_10 = 'T12') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T13($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T13' || CIE10_2 = 'T13' || CIE10_3 = 'T13' || CIE10_4 = 'T13' || CIE10_5 = 'T13' || CIE10_6 = 'T13' || CIE10_7 = 'T13' || CIE10_8 = 'T13' || CIE10_9 = 'T13' || CIE10_10 = 'T13') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T14($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T14' || CIE10_2 = 'T14' || CIE10_3 = 'T14' || CIE10_4 = 'T14' || CIE10_5 = 'T14' || CIE10_6 = 'T14' || CIE10_7 = 'T14' || CIE10_8 = 'T14' || CIE10_9 = 'T14' || CIE10_10 = 'T14') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T21($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T21' || CIE10_2 = 'T21' || CIE10_3 = 'T21' || CIE10_4 = 'T21' || CIE10_5 = 'T21' || CIE10_6 = 'T21' || CIE10_7 = 'T21' || CIE10_8 = 'T21' || CIE10_9 = 'T21' || CIE10_10 = 'T21') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T22($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T22' || CIE10_2 = 'T22' || CIE10_3 = 'T22' || CIE10_4 = 'T22' || CIE10_5 = 'T22' || CIE10_6 = 'T22' || CIE10_7 = 'T22' || CIE10_8 = 'T22' || CIE10_9 = 'T22' || CIE10_10 = 'T22') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T23($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T23' || CIE10_2 = 'T23' || CIE10_3 = 'T23' || CIE10_4 = 'T23' || CIE10_5 = 'T23' || CIE10_6 = 'T23' || CIE10_7 = 'T23' || CIE10_8 = 'T23' || CIE10_9 = 'T23' || CIE10_10 = 'T23') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T24($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T24' || CIE10_2 = 'T24' || CIE10_3 = 'T24' || CIE10_4 = 'T24' || CIE10_5 = 'T24' || CIE10_6 = 'T24' || CIE10_7 = 'T24' || CIE10_8 = 'T24' || CIE10_9 = 'T24' || CIE10_10 = 'T24') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T25($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T25' || CIE10_2 = 'T25' || CIE10_3 = 'T25' || CIE10_4 = 'T25' || CIE10_5 = 'T25' || CIE10_6 = 'T25' || CIE10_7 = 'T25' || CIE10_8 = 'T25' || CIE10_9 = 'T25' || CIE10_10 = 'T25') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T26($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T26' || CIE10_2 = 'T26' || CIE10_3 = 'T26' || CIE10_4 = 'T26' || CIE10_5 = 'T26' || CIE10_6 = 'T26' || CIE10_7 = 'T26' || CIE10_8 = 'T26' || CIE10_9 = 'T26' || CIE10_10 = 'T26') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T27($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T27' || CIE10_2 = 'T27' || CIE10_3 = 'T27' || CIE10_4 = 'T27' || CIE10_5 = 'T27' || CIE10_6 = 'T27' || CIE10_7 = 'T27' || CIE10_8 = 'T27' || CIE10_9 = 'T27' || CIE10_10 = 'T27') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T28($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T28' || CIE10_2 = 'T28' || CIE10_3 = 'T28' || CIE10_4 = 'T28' || CIE10_5 = 'T28' || CIE10_6 = 'T28' || CIE10_7 = 'T28' || CIE10_8 = 'T28' || CIE10_9 = 'T28' || CIE10_10 = 'T28') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T29($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T29' || CIE10_2 = 'T29' || CIE10_3 = 'T29' || CIE10_4 = 'T29' || CIE10_5 = 'T29' || CIE10_6 = 'T29' || CIE10_7 = 'T29' || CIE10_8 = 'T29' || CIE10_9 = 'T29' || CIE10_10 = 'T29') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T30($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T30' || CIE10_2 = 'T30' || CIE10_3 = 'T30' || CIE10_4 = 'T30' || CIE10_5 = 'T30' || CIE10_6 = 'T30' || CIE10_7 = 'T30' || CIE10_8 = 'T30' || CIE10_9 = 'T30' || CIE10_10 = 'T30') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T31($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T31' || CIE10_2 = 'T31' || CIE10_3 = 'T31' || CIE10_4 = 'T31' || CIE10_5 = 'T31' || CIE10_6 = 'T31' || CIE10_7 = 'T31' || CIE10_8 = 'T31' || CIE10_9 = 'T31' || CIE10_10 = 'T31') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T32($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T32' || CIE10_2 = 'T32' || CIE10_3 = 'T32' || CIE10_4 = 'T32' || CIE10_5 = 'T32' || CIE10_6 = 'T32' || CIE10_7 = 'T32' || CIE10_8 = 'T32' || CIE10_9 = 'T32' || CIE10_10 = 'T32') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T33($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T33' || CIE10_2 = 'T33' || CIE10_3 = 'T33' || CIE10_4 = 'T33' || CIE10_5 = 'T33' || CIE10_6 = 'T33' || CIE10_7 = 'T33' || CIE10_8 = 'T33' || CIE10_9 = 'T33' || CIE10_10 = 'T33') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T34($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T34' || CIE10_2 = 'T34' || CIE10_3 = 'T34' || CIE10_4 = 'T34' || CIE10_5 = 'T34' || CIE10_6 = 'T34' || CIE10_7 = 'T34' || CIE10_8 = 'T34' || CIE10_9 = 'T34' || CIE10_10 = 'T34') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T35($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T35' || CIE10_2 = 'T35' || CIE10_3 = 'T35' || CIE10_4 = 'T35' || CIE10_5 = 'T35' || CIE10_6 = 'T35' || CIE10_7 = 'T35' || CIE10_8 = 'T35' || CIE10_9 = 'T35' || CIE10_10 = 'T35') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T90($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T90' || CIE10_2 = 'T90' || CIE10_3 = 'T90' || CIE10_4 = 'T90' || CIE10_5 = 'T90' || CIE10_6 = 'T90' || CIE10_7 = 'T90' || CIE10_8 = 'T90' || CIE10_9 = 'T90' || CIE10_10 = 'T90') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T91($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T91' || CIE10_2 = 'T91' || CIE10_3 = 'T91' || CIE10_4 = 'T91' || CIE10_5 = 'T91' || CIE10_6 = 'T91' || CIE10_7 = 'T91' || CIE10_8 = 'T91' || CIE10_9 = 'T91' || CIE10_10 = 'T91') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T92($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T92' || CIE10_2 = 'T92' || CIE10_3 = 'T92' || CIE10_4 = 'T92' || CIE10_5 = 'T92' || CIE10_6 = 'T92' || CIE10_7 = 'T92' || CIE10_8 = 'T92' || CIE10_9 = 'T92' || CIE10_10 = 'T92') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T93($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T93' || CIE10_2 = 'T93' || CIE10_3 = 'T93' || CIE10_4 = 'T93' || CIE10_5 = 'T93' || CIE10_6 = 'T93' || CIE10_7 = 'T93' || CIE10_8 = 'T93' || CIE10_9 = 'T93' || CIE10_10 = 'T93') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T94($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T94' || CIE10_2 = 'T94' || CIE10_3 = 'T94' || CIE10_4 = 'T94' || CIE10_5 = 'T94' || CIE10_6 = 'T94' || CIE10_7 = 'T94' || CIE10_8 = 'T94' || CIE10_9 = 'T94' || CIE10_10 = 'T94') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T95($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T95' || CIE10_2 = 'T95' || CIE10_3 = 'T95' || CIE10_4 = 'T95' || CIE10_5 = 'T95' || CIE10_6 = 'T95' || CIE10_7 = 'T95' || CIE10_8 = 'T95' || CIE10_9 = 'T95' || CIE10_10 = 'T95') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T96($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T96' || CIE10_2 = 'T96' || CIE10_3 = 'T96' || CIE10_4 = 'T96' || CIE10_5 = 'T96' || CIE10_6 = 'T96' || CIE10_7 = 'T96' || CIE10_8 = 'T96' || CIE10_9 = 'T96' || CIE10_10 = 'T96') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T97($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T97' || CIE10_2 = 'T97' || CIE10_3 = 'T97' || CIE10_4 = 'T97' || CIE10_5 = 'T97' || CIE10_6 = 'T97' || CIE10_7 = 'T97' || CIE10_8 = 'T97' || CIE10_9 = 'T97' || CIE10_10 = 'T97') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function T98($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'T98' || CIE10_2 = 'T98' || CIE10_3 = 'T98' || CIE10_4 = 'T98' || CIE10_5 = 'T98' || CIE10_6 = 'T98' || CIE10_7 = 'T98' || CIE10_8 = 'T98' || CIE10_9 = 'T98' || CIE10_10 = 'T98') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; } 
public static function K400($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K400' || CIE10_2 = 'K400' || CIE10_3 = 'K400' || CIE10_4 = 'K400' || CIE10_5 = 'K400' || CIE10_6 = 'K400' || CIE10_7 = 'K400' || CIE10_8 = 'K400' || CIE10_9 = 'K400' || CIE10_10 = 'K400') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K401($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K401' || CIE10_2 = 'K401' || CIE10_3 = 'K401' || CIE10_4 = 'K401' || CIE10_5 = 'K401' || CIE10_6 = 'K401' || CIE10_7 = 'K401' || CIE10_8 = 'K401' || CIE10_9 = 'K401' || CIE10_10 = 'K401') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K402($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K402' || CIE10_2 = 'K402' || CIE10_3 = 'K402' || CIE10_4 = 'K402' || CIE10_5 = 'K402' || CIE10_6 = 'K402' || CIE10_7 = 'K402' || CIE10_8 = 'K402' || CIE10_9 = 'K402' || CIE10_10 = 'K402') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K403($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K403' || CIE10_2 = 'K403' || CIE10_3 = 'K403' || CIE10_4 = 'K403' || CIE10_5 = 'K403' || CIE10_6 = 'K403' || CIE10_7 = 'K403' || CIE10_8 = 'K403' || CIE10_9 = 'K403' || CIE10_10 = 'K403') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K404($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K404' || CIE10_2 = 'K404' || CIE10_3 = 'K404' || CIE10_4 = 'K404' || CIE10_5 = 'K404' || CIE10_6 = 'K404' || CIE10_7 = 'K404' || CIE10_8 = 'K404' || CIE10_9 = 'K404' || CIE10_10 = 'K404') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K409($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K409' || CIE10_2 = 'K409' || CIE10_3 = 'K409' || CIE10_4 = 'K409' || CIE10_5 = 'K409' || CIE10_6 = 'K409' || CIE10_7 = 'K409' || CIE10_8 = 'K409' || CIE10_9 = 'K409' || CIE10_10 = 'K409') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K410($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K410' || CIE10_2 = 'K410' || CIE10_3 = 'K410' || CIE10_4 = 'K410' || CIE10_5 = 'K410' || CIE10_6 = 'K410' || CIE10_7 = 'K410' || CIE10_8 = 'K410' || CIE10_9 = 'K410' || CIE10_10 = 'K410') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
        }
        return $total_usuarios; }
        public static function K411($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K411' || CIE10_2 = 'K411' || CIE10_3 = 'K411' || CIE10_4 = 'K411' || CIE10_5 = 'K411' || CIE10_6 = 'K411' || CIE10_7 = 'K411' || CIE10_8 = 'K411' || CIE10_9 = 'K411' || CIE10_10 = 'K411') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K412($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K412' || CIE10_2 = 'K412' || CIE10_3 = 'K412' || CIE10_4 = 'K412' || CIE10_5 = 'K412' || CIE10_6 = 'K412' || CIE10_7 = 'K412' || CIE10_8 = 'K412' || CIE10_9 = 'K412' || CIE10_10 = 'K412') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K413($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K413' || CIE10_2 = 'K413' || CIE10_3 = 'K413' || CIE10_4 = 'K413' || CIE10_5 = 'K413' || CIE10_6 = 'K413' || CIE10_7 = 'K413' || CIE10_8 = 'K413' || CIE10_9 = 'K413' || CIE10_10 = 'K413') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K414($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K414' || CIE10_2 = 'K414' || CIE10_3 = 'K414' || CIE10_4 = 'K414' || CIE10_5 = 'K414' || CIE10_6 = 'K414' || CIE10_7 = 'K414' || CIE10_8 = 'K414' || CIE10_9 = 'K414' || CIE10_10 = 'K414') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K419($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K419' || CIE10_2 = 'K419' || CIE10_3 = 'K419' || CIE10_4 = 'K419' || CIE10_5 = 'K419' || CIE10_6 = 'K419' || CIE10_7 = 'K419' || CIE10_8 = 'K419' || CIE10_9 = 'K419' || CIE10_10 = 'K419') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K420($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K420' || CIE10_2 = 'K420' || CIE10_3 = 'K420' || CIE10_4 = 'K420' || CIE10_5 = 'K420' || CIE10_6 = 'K420' || CIE10_7 = 'K420' || CIE10_8 = 'K420' || CIE10_9 = 'K420' || CIE10_10 = 'K420') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K421($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K421' || CIE10_2 = 'K421' || CIE10_3 = 'K421' || CIE10_4 = 'K421' || CIE10_5 = 'K421' || CIE10_6 = 'K421' || CIE10_7 = 'K421' || CIE10_8 = 'K421' || CIE10_9 = 'K421' || CIE10_10 = 'K421') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K429($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K429' || CIE10_2 = 'K429' || CIE10_3 = 'K429' || CIE10_4 = 'K429' || CIE10_5 = 'K429' || CIE10_6 = 'K429' || CIE10_7 = 'K429' || CIE10_8 = 'K429' || CIE10_9 = 'K429' || CIE10_10 = 'K429') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K430($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K430' || CIE10_2 = 'K430' || CIE10_3 = 'K430' || CIE10_4 = 'K430' || CIE10_5 = 'K430' || CIE10_6 = 'K430' || CIE10_7 = 'K430' || CIE10_8 = 'K430' || CIE10_9 = 'K430' || CIE10_10 = 'K430') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K431($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K431' || CIE10_2 = 'K431' || CIE10_3 = 'K431' || CIE10_4 = 'K431' || CIE10_5 = 'K431' || CIE10_6 = 'K431' || CIE10_7 = 'K431' || CIE10_8 = 'K431' || CIE10_9 = 'K431' || CIE10_10 = 'K431') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K432($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K432' || CIE10_2 = 'K432' || CIE10_3 = 'K432' || CIE10_4 = 'K432' || CIE10_5 = 'K432' || CIE10_6 = 'K432' || CIE10_7 = 'K432' || CIE10_8 = 'K432' || CIE10_9 = 'K432' || CIE10_10 = 'K432') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
        }
        return $total_usuarios; }
        public static function K433($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K433' || CIE10_2 = 'K433' || CIE10_3 = 'K433' || CIE10_4 = 'K433' || CIE10_5 = 'K433' || CIE10_6 = 'K433' || CIE10_7 = 'K433' || CIE10_8 = 'K433' || CIE10_9 = 'K433' || CIE10_10 = 'K433') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K434($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K434' || CIE10_2 = 'K434' || CIE10_3 = 'K434' || CIE10_4 = 'K434' || CIE10_5 = 'K434' || CIE10_6 = 'K434' || CIE10_7 = 'K434' || CIE10_8 = 'K434' || CIE10_9 = 'K434' || CIE10_10 = 'K434') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K435($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K435' || CIE10_2 = 'K435' || CIE10_3 = 'K435' || CIE10_4 = 'K435' || CIE10_5 = 'K435' || CIE10_6 = 'K435' || CIE10_7 = 'K435' || CIE10_8 = 'K435' || CIE10_9 = 'K435' || CIE10_10 = 'K435') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K436($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K436' || CIE10_2 = 'K436' || CIE10_3 = 'K436' || CIE10_4 = 'K436' || CIE10_5 = 'K436' || CIE10_6 = 'K436' || CIE10_7 = 'K436' || CIE10_8 = 'K436' || CIE10_9 = 'K436' || CIE10_10 = 'K436') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K437($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K437' || CIE10_2 = 'K437' || CIE10_3 = 'K437' || CIE10_4 = 'K437' || CIE10_5 = 'K437' || CIE10_6 = 'K437' || CIE10_7 = 'K437' || CIE10_8 = 'K437' || CIE10_9 = 'K437' || CIE10_10 = 'K437') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K439($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K439' || CIE10_2 = 'K439' || CIE10_3 = 'K439' || CIE10_4 = 'K439' || CIE10_5 = 'K439' || CIE10_6 = 'K439' || CIE10_7 = 'K439' || CIE10_8 = 'K439' || CIE10_9 = 'K439' || CIE10_10 = 'K439') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K440($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K440' || CIE10_2 = 'K440' || CIE10_3 = 'K440' || CIE10_4 = 'K440' || CIE10_5 = 'K440' || CIE10_6 = 'K440' || CIE10_7 = 'K440' || CIE10_8 = 'K440' || CIE10_9 = 'K440' || CIE10_10 = 'K440') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K441($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K441' || CIE10_2 = 'K441' || CIE10_3 = 'K441' || CIE10_4 = 'K441' || CIE10_5 = 'K441' || CIE10_6 = 'K441' || CIE10_7 = 'K441' || CIE10_8 = 'K441' || CIE10_9 = 'K441' || CIE10_10 = 'K441') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K449($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K449' || CIE10_2 = 'K449' || CIE10_3 = 'K449' || CIE10_4 = 'K449' || CIE10_5 = 'K449' || CIE10_6 = 'K449' || CIE10_7 = 'K449' || CIE10_8 = 'K449' || CIE10_9 = 'K449' || CIE10_10 = 'K449') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K450($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K450' || CIE10_2 = 'K450' || CIE10_3 = 'K450' || CIE10_4 = 'K450' || CIE10_5 = 'K450' || CIE10_6 = 'K450' || CIE10_7 = 'K450' || CIE10_8 = 'K450' || CIE10_9 = 'K450' || CIE10_10 = 'K450') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K451($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K451' || CIE10_2 = 'K451' || CIE10_3 = 'K451' || CIE10_4 = 'K451' || CIE10_5 = 'K451' || CIE10_6 = 'K451' || CIE10_7 = 'K451' || CIE10_8 = 'K451' || CIE10_9 = 'K451' || CIE10_10 = 'K451') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K458($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K458' || CIE10_2 = 'K458' || CIE10_3 = 'K458' || CIE10_4 = 'K458' || CIE10_5 = 'K458' || CIE10_6 = 'K458' || CIE10_7 = 'K458' || CIE10_8 = 'K458' || CIE10_9 = 'K458' || CIE10_10 = 'K458') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
        }
        return $total_usuarios; }
        public static function K460($conexion) {
        $Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
        $total_usuarios = null; 
        if (isset($conexion)) {
            $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K460' || CIE10_2 = 'K460' || CIE10_3 = 'K460' || CIE10_4 = 'K460' || CIE10_5 = 'K460' || CIE10_6 = 'K460' || CIE10_7 = 'K460' || CIE10_8 = 'K460' || CIE10_9 = 'K460' || CIE10_10 = 'K460') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->execute();
                    $resultado = $sentencia->fetch();
                    $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K461($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K461' || CIE10_2 = 'K461' || CIE10_3 = 'K461' || CIE10_4 = 'K461' || CIE10_5 = 'K461' || CIE10_6 = 'K461' || CIE10_7 = 'K461' || CIE10_8 = 'K461' || CIE10_9 = 'K461' || CIE10_10 = 'K461') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K469($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K469' || CIE10_2 = 'K469' || CIE10_3 = 'K469' || CIE10_4 = 'K469' || CIE10_5 = 'K469' || CIE10_6 = 'K469' || CIE10_7 = 'K469' || CIE10_8 = 'K469' || CIE10_9 = 'K469' || CIE10_10 = 'K469') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K40($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K40' || CIE10_2 = 'K40' || CIE10_3 = 'K40' || CIE10_4 = 'K40' || CIE10_5 = 'K40' || CIE10_6 = 'K40' || CIE10_7 = 'K40' || CIE10_8 = 'K40' || CIE10_9 = 'K40' || CIE10_10 = 'K40') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K41($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K41' || CIE10_2 = 'K41' || CIE10_3 = 'K41' || CIE10_4 = 'K41' || CIE10_5 = 'K41' || CIE10_6 = 'K41' || CIE10_7 = 'K41' || CIE10_8 = 'K41' || CIE10_9 = 'K41' || CIE10_10 = 'K41') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K42($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K42' || CIE10_2 = 'K42' || CIE10_3 = 'K42' || CIE10_4 = 'K42' || CIE10_5 = 'K42' || CIE10_6 = 'K42' || CIE10_7 = 'K42' || CIE10_8 = 'K42' || CIE10_9 = 'K42' || CIE10_10 = 'K42') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K43($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K43' || CIE10_2 = 'K43' || CIE10_3 = 'K43' || CIE10_4 = 'K43' || CIE10_5 = 'K43' || CIE10_6 = 'K43' || CIE10_7 = 'K43' || CIE10_8 = 'K43' || CIE10_9 = 'K43' || CIE10_10 = 'K43') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K44($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K44' || CIE10_2 = 'K44' || CIE10_3 = 'K44' || CIE10_4 = 'K44' || CIE10_5 = 'K44' || CIE10_6 = 'K44' || CIE10_7 = 'K44' || CIE10_8 = 'K44' || CIE10_9 = 'K44' || CIE10_10 = 'K44') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K45($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K45' || CIE10_2 = 'K45' || CIE10_3 = 'K45' || CIE10_4 = 'K45' || CIE10_5 = 'K45' || CIE10_6 = 'K45' || CIE10_7 = 'K45' || CIE10_8 = 'K45' || CIE10_9 = 'K45' || CIE10_10 = 'K45') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function K46($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'K46' || CIE10_2 = 'K46' || CIE10_3 = 'K46' || CIE10_4 = 'K46' || CIE10_5 = 'K46' || CIE10_6 = 'K46' || CIE10_7 = 'K46' || CIE10_8 = 'K46' || CIE10_9 = 'K46' || CIE10_10 = 'K46') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; } 

public static function Q182($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q182' || CIE10_2 = 'Q182' || CIE10_3 = 'Q182' || CIE10_4 = 'Q182' || CIE10_5 = 'Q182' || CIE10_6 = 'Q182' || CIE10_7 = 'Q182' || CIE10_8 = 'Q182' || CIE10_9 = 'Q182' || CIE10_10 = 'Q182') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q183($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q183' || CIE10_2 = 'Q183' || CIE10_3 = 'Q183' || CIE10_4 = 'Q183' || CIE10_5 = 'Q183' || CIE10_6 = 'Q183' || CIE10_7 = 'Q183' || CIE10_8 = 'Q183' || CIE10_9 = 'Q183' || CIE10_10 = 'Q183') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q184($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q184' || CIE10_2 = 'Q184' || CIE10_3 = 'Q184' || CIE10_4 = 'Q184' || CIE10_5 = 'Q184' || CIE10_6 = 'Q184' || CIE10_7 = 'Q184' || CIE10_8 = 'Q184' || CIE10_9 = 'Q184' || CIE10_10 = 'Q184') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q185($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q185' || CIE10_2 = 'Q185' || CIE10_3 = 'Q185' || CIE10_4 = 'Q185' || CIE10_5 = 'Q185' || CIE10_6 = 'Q185' || CIE10_7 = 'Q185' || CIE10_8 = 'Q185' || CIE10_9 = 'Q185' || CIE10_10 = 'Q185') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q186($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q186' || CIE10_2 = 'Q186' || CIE10_3 = 'Q186' || CIE10_4 = 'Q186' || CIE10_5 = 'Q186' || CIE10_6 = 'Q186' || CIE10_7 = 'Q186' || CIE10_8 = 'Q186' || CIE10_9 = 'Q186' || CIE10_10 = 'Q186') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q187($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q187' || CIE10_2 = 'Q187' || CIE10_3 = 'Q187' || CIE10_4 = 'Q187' || CIE10_5 = 'Q187' || CIE10_6 = 'Q187' || CIE10_7 = 'Q187' || CIE10_8 = 'Q187' || CIE10_9 = 'Q187' || CIE10_10 = 'Q187') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q188($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q188' || CIE10_2 = 'Q188' || CIE10_3 = 'Q188' || CIE10_4 = 'Q188' || CIE10_5 = 'Q188' || CIE10_6 = 'Q188' || CIE10_7 = 'Q188' || CIE10_8 = 'Q188' || CIE10_9 = 'Q188' || CIE10_10 = 'Q188') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q189($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q189' || CIE10_2 = 'Q189' || CIE10_3 = 'Q189' || CIE10_4 = 'Q189' || CIE10_5 = 'Q189' || CIE10_6 = 'Q189' || CIE10_7 = 'Q189' || CIE10_8 = 'Q189' || CIE10_9 = 'Q189' || CIE10_10 = 'Q189') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q650($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q650' || CIE10_2 = 'Q650' || CIE10_3 = 'Q650' || CIE10_4 = 'Q650' || CIE10_5 = 'Q650' || CIE10_6 = 'Q650' || CIE10_7 = 'Q650' || CIE10_8 = 'Q650' || CIE10_9 = 'Q650' || CIE10_10 = 'Q650') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q651($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q651' || CIE10_2 = 'Q651' || CIE10_3 = 'Q651' || CIE10_4 = 'Q651' || CIE10_5 = 'Q651' || CIE10_6 = 'Q651' || CIE10_7 = 'Q651' || CIE10_8 = 'Q651' || CIE10_9 = 'Q651' || CIE10_10 = 'Q651') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q652($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q652' || CIE10_2 = 'Q652' || CIE10_3 = 'Q652' || CIE10_4 = 'Q652' || CIE10_5 = 'Q652' || CIE10_6 = 'Q652' || CIE10_7 = 'Q652' || CIE10_8 = 'Q652' || CIE10_9 = 'Q652' || CIE10_10 = 'Q652') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q653($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q653' || CIE10_2 = 'Q653' || CIE10_3 = 'Q653' || CIE10_4 = 'Q653' || CIE10_5 = 'Q653' || CIE10_6 = 'Q653' || CIE10_7 = 'Q653' || CIE10_8 = 'Q653' || CIE10_9 = 'Q653' || CIE10_10 = 'Q653') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q654($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q654' || CIE10_2 = 'Q654' || CIE10_3 = 'Q654' || CIE10_4 = 'Q654' || CIE10_5 = 'Q654' || CIE10_6 = 'Q654' || CIE10_7 = 'Q654' || CIE10_8 = 'Q654' || CIE10_9 = 'Q654' || CIE10_10 = 'Q654') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q655($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q655' || CIE10_2 = 'Q655' || CIE10_3 = 'Q655' || CIE10_4 = 'Q655' || CIE10_5 = 'Q655' || CIE10_6 = 'Q655' || CIE10_7 = 'Q655' || CIE10_8 = 'Q655' || CIE10_9 = 'Q655' || CIE10_10 = 'Q655') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q656($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q656' || CIE10_2 = 'Q656' || CIE10_3 = 'Q656' || CIE10_4 = 'Q656' || CIE10_5 = 'Q656' || CIE10_6 = 'Q656' || CIE10_7 = 'Q656' || CIE10_8 = 'Q656' || CIE10_9 = 'Q656' || CIE10_10 = 'Q656') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q658($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q658' || CIE10_2 = 'Q658' || CIE10_3 = 'Q658' || CIE10_4 = 'Q658' || CIE10_5 = 'Q658' || CIE10_6 = 'Q658' || CIE10_7 = 'Q658' || CIE10_8 = 'Q658' || CIE10_9 = 'Q658' || CIE10_10 = 'Q658') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q659($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q659' || CIE10_2 = 'Q659' || CIE10_3 = 'Q659' || CIE10_4 = 'Q659' || CIE10_5 = 'Q659' || CIE10_6 = 'Q659' || CIE10_7 = 'Q659' || CIE10_8 = 'Q659' || CIE10_9 = 'Q659' || CIE10_10 = 'Q659') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q660($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q660' || CIE10_2 = 'Q660' || CIE10_3 = 'Q660' || CIE10_4 = 'Q660' || CIE10_5 = 'Q660' || CIE10_6 = 'Q660' || CIE10_7 = 'Q660' || CIE10_8 = 'Q660' || CIE10_9 = 'Q660' || CIE10_10 = 'Q660') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q661($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q661' || CIE10_2 = 'Q661' || CIE10_3 = 'Q661' || CIE10_4 = 'Q661' || CIE10_5 = 'Q661' || CIE10_6 = 'Q661' || CIE10_7 = 'Q661' || CIE10_8 = 'Q661' || CIE10_9 = 'Q661' || CIE10_10 = 'Q661') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q662($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q662' || CIE10_2 = 'Q662' || CIE10_3 = 'Q662' || CIE10_4 = 'Q662' || CIE10_5 = 'Q662' || CIE10_6 = 'Q662' || CIE10_7 = 'Q662' || CIE10_8 = 'Q662' || CIE10_9 = 'Q662' || CIE10_10 = 'Q662') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q663($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q663' || CIE10_2 = 'Q663' || CIE10_3 = 'Q663' || CIE10_4 = 'Q663' || CIE10_5 = 'Q663' || CIE10_6 = 'Q663' || CIE10_7 = 'Q' || CIE10_8 = 'Q663' || CIE10_9 = 'Q663' || CIE10_10 = 'Q663') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q664($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q664' || CIE10_2 = 'Q664' || CIE10_3 = 'Q664' || CIE10_4 = 'Q664' || CIE10_5 = 'Q664' || CIE10_6 = 'Q664' || CIE10_7 = 'Q664' || CIE10_8 = 'Q664' || CIE10_9 = 'Q664' || CIE10_10 = 'Q664') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q665($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q665' || CIE10_2 = 'Q665' || CIE10_3 = 'Q665' || CIE10_4 = 'Q665' || CIE10_5 = 'Q665' || CIE10_6 = 'Q665' || CIE10_7 = 'Q665' || CIE10_8 = 'Q665' || CIE10_9 = 'Q665' || CIE10_10 = 'Q665') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q666($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q666' || CIE10_2 = 'Q666' || CIE10_3 = 'Q666' || CIE10_4 = 'Q666' || CIE10_5 = 'Q666' || CIE10_6 = 'Q666' || CIE10_7 = 'Q666' || CIE10_8 = 'Q666' || CIE10_9 = 'Q666' || CIE10_10 = 'Q666') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q667($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q667' || CIE10_2 = 'Q667' || CIE10_3 = 'Q667' || CIE10_4 = 'Q667' || CIE10_5 = 'Q667' || CIE10_6 = 'Q667' || CIE10_7 = 'Q667' || CIE10_8 = 'Q667' || CIE10_9 = 'Q667' || CIE10_10 = 'Q667') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q668($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q668' || CIE10_2 = 'Q668' || CIE10_3 = 'Q668' || CIE10_4 = 'Q668' || CIE10_5 = 'Q668' || CIE10_6 = 'Q668' || CIE10_7 = 'Q668' || CIE10_8 = 'Q668' || CIE10_9 = 'Q668' || CIE10_10 = 'Q668') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q669($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q669' || CIE10_2 = 'Q669' || CIE10_3 = 'Q669' || CIE10_4 = 'Q669' || CIE10_5 = 'Q669' || CIE10_6 = 'Q669' || CIE10_7 = 'Q669' || CIE10_8 = 'Q669' || CIE10_9 = 'Q669' || CIE10_10 = 'Q669') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q670($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q670' || CIE10_2 = 'Q670' || CIE10_3 = 'Q670' || CIE10_4 = 'Q670' || CIE10_5 = 'Q670' || CIE10_6 = 'Q670' || CIE10_7 = 'Q670' || CIE10_8 = 'Q670' || CIE10_9 = 'Q670' || CIE10_10 = 'Q670') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q671($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q671' || CIE10_2 = 'Q671' || CIE10_3 = 'Q671' || CIE10_4 = 'Q671' || CIE10_5 = 'Q671' || CIE10_6 = 'Q671' || CIE10_7 = 'Q671' || CIE10_8 = 'Q671' || CIE10_9 = 'Q671' || CIE10_10 = 'Q671') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q672($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q672' || CIE10_2 = 'Q672' || CIE10_3 = 'Q672' || CIE10_4 = 'Q672' || CIE10_5 = 'Q672' || CIE10_6 = 'Q672' || CIE10_7 = 'Q672' || CIE10_8 = 'Q672' || CIE10_9 = 'Q672' || CIE10_10 = 'Q672') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q673($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q673' || CIE10_2 = 'Q673' || CIE10_3 = 'Q673' || CIE10_4 = 'Q673' || CIE10_5 = 'Q673' || CIE10_6 = 'Q673' || CIE10_7 = 'Q673' || CIE10_8 = 'Q673' || CIE10_9 = 'Q673' || CIE10_10 = 'Q673') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q674($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q674' || CIE10_2 = 'Q674' || CIE10_3 = 'Q674' || CIE10_4 = 'Q674' || CIE10_5 = 'Q674' || CIE10_6 = 'Q674' || CIE10_7 = 'Q674' || CIE10_8 = 'Q674' || CIE10_9 = 'Q674' || CIE10_10 = 'Q674') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q675($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q675' || CIE10_2 = 'Q675' || CIE10_3 = 'Q675' || CIE10_4 = 'Q675' || CIE10_5 = 'Q675' || CIE10_6 = 'Q675' || CIE10_7 = 'Q675' || CIE10_8 = 'Q675' || CIE10_9 = 'Q675' || CIE10_10 = 'Q675') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q676($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q676' || CIE10_2 = 'Q676' || CIE10_3 = 'Q676' || CIE10_4 = 'Q676' || CIE10_5 = 'Q676' || CIE10_6 = 'Q676' || CIE10_7 = 'Q676' || CIE10_8 = 'Q676' || CIE10_9 = 'Q676' || CIE10_10 = 'Q676') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q677($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q677' || CIE10_2 = 'Q677' || CIE10_3 = 'Q677' || CIE10_4 = 'Q677' || CIE10_5 = 'Q677' || CIE10_6 = 'Q677' || CIE10_7 = 'Q677' || CIE10_8 = 'Q677' || CIE10_9 = 'Q677' || CIE10_10 = 'Q677') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q678($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q678' || CIE10_2 = 'Q678' || CIE10_3 = 'Q678' || CIE10_4 = 'Q678' || CIE10_5 = 'Q678' || CIE10_6 = 'Q678' || CIE10_7 = 'Q678' || CIE10_8 = 'Q678' || CIE10_9 = 'Q678' || CIE10_10 = 'Q678') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q680($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q680' || CIE10_2 = 'Q680' || CIE10_3 = 'Q680' || CIE10_4 = 'Q680' || CIE10_5 = 'Q680' || CIE10_6 = 'Q680' || CIE10_7 = 'Q680' || CIE10_8 = 'Q680' || CIE10_9 = 'Q680' || CIE10_10 = 'Q680') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q681($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q681' || CIE10_2 = 'Q681' || CIE10_3 = 'Q681' || CIE10_4 = 'Q681' || CIE10_5 = 'Q681' || CIE10_6 = 'Q681' || CIE10_7 = 'Q681' || CIE10_8 = 'Q681' || CIE10_9 = 'Q681' || CIE10_10 = 'Q681') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q682($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q682' || CIE10_2 = 'Q682' || CIE10_3 = 'Q682' || CIE10_4 = 'Q682' || CIE10_5 = 'Q682' || CIE10_6 = 'Q682' || CIE10_7 = 'Q682' || CIE10_8 = 'Q682' || CIE10_9 = 'Q682' || CIE10_10 = 'Q682') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q683($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q683' || CIE10_2 = 'Q683' || CIE10_3 = 'Q683' || CIE10_4 = 'Q683' || CIE10_5 = 'Q683' || CIE10_6 = 'Q683' || CIE10_7 = 'Q683' || CIE10_8 = 'Q683' || CIE10_9 = 'Q683' || CIE10_10 = 'Q683') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q684($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q684' || CIE10_2 = 'Q684' || CIE10_3 = 'Q684' || CIE10_4 = 'Q684' || CIE10_5 = 'Q684' || CIE10_6 = 'Q684' || CIE10_7 = 'Q684' || CIE10_8 = 'Q684' || CIE10_9 = 'Q684' || CIE10_10 = 'Q684') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q685($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q685' || CIE10_2 = 'Q685' || CIE10_3 = 'Q685' || CIE10_4 = 'Q685' || CIE10_5 = 'Q685' || CIE10_6 = 'Q685' || CIE10_7 = 'Q685' || CIE10_8 = 'Q685' || CIE10_9 = 'Q685' || CIE10_10 = 'Q685') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q688($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q688' || CIE10_2 = 'Q688' || CIE10_3 = 'Q688' || CIE10_4 = 'Q688' || CIE10_5 = 'Q688' || CIE10_6 = 'Q688' || CIE10_7 = 'Q688' || CIE10_8 = 'Q688' || CIE10_9 = 'Q688' || CIE10_10 = 'Q688') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q690($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q690' || CIE10_2 = 'Q690' || CIE10_3 = 'Q690' || CIE10_4 = 'Q690' || CIE10_5 = 'Q690' || CIE10_6 = 'Q690' || CIE10_7 = 'Q690' || CIE10_8 = 'Q690' || CIE10_9 = 'Q690' || CIE10_10 = 'Q690') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q691($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q691' || CIE10_2 = 'Q691' || CIE10_3 = 'Q691' || CIE10_4 = 'Q691' || CIE10_5 = 'Q691' || CIE10_6 = 'Q691' || CIE10_7 = 'Q691' || CIE10_8 = 'Q691' || CIE10_9 = 'Q691' || CIE10_10 = 'Q691') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q692($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q692' || CIE10_2 = 'Q692' || CIE10_3 = 'Q692' || CIE10_4 = 'Q692' || CIE10_5 = 'Q692' || CIE10_6 = 'Q692' || CIE10_7 = 'Q692' || CIE10_8 = 'Q692' || CIE10_9 = 'Q692' || CIE10_10 = 'Q692') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q699($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q699' || CIE10_2 = 'Q699' || CIE10_3 = 'Q699' || CIE10_4 = 'Q699' || CIE10_5 = 'Q699' || CIE10_6 = 'Q699' || CIE10_7 = 'Q699' || CIE10_8 = 'Q699' || CIE10_9 = 'Q699' || CIE10_10 = 'Q699') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; } 
public static function Q700($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q700' || CIE10_2 = 'Q700' || CIE10_3 = 'Q700' || CIE10_4 = 'Q700' || CIE10_5 = 'Q700' || CIE10_6 = 'Q700' || CIE10_7 = 'Q700' || CIE10_8 = 'Q700' || CIE10_9 = 'Q700' || CIE10_10 = 'Q700') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q701($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q701' || CIE10_2 = 'Q701' || CIE10_3 = 'Q701' || CIE10_4 = 'Q701' || CIE10_5 = 'Q701' || CIE10_6 = 'Q701' || CIE10_7 = 'Q701' || CIE10_8 = 'Q701' || CIE10_9 = 'Q701' || CIE10_10 = 'Q701') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q702($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q702' || CIE10_2 = 'Q702' || CIE10_3 = 'Q702' || CIE10_4 = 'Q702' || CIE10_5 = 'Q702' || CIE10_6 = 'Q702' || CIE10_7 = 'Q702' || CIE10_8 = 'Q702' || CIE10_9 = 'Q702' || CIE10_10 = 'Q702') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q703($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q703' || CIE10_2 = 'Q703' || CIE10_3 = 'Q703' || CIE10_4 = 'Q703' || CIE10_5 = 'Q703' || CIE10_6 = 'Q703' || CIE10_7 = 'Q703' || CIE10_8 = 'Q703' || CIE10_9 = 'Q703' || CIE10_10 = 'Q703') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q704($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q704' || CIE10_2 = 'Q704' || CIE10_3 = 'Q704' || CIE10_4 = 'Q704' || CIE10_5 = 'Q704' || CIE10_6 = 'Q704' || CIE10_7 = 'Q704' || CIE10_8 = 'Q704' || CIE10_9 = 'Q704' || CIE10_10 = 'Q704') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q709($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q709' || CIE10_2 = 'Q709' || CIE10_3 = 'Q709' || CIE10_4 = 'Q709' || CIE10_5 = 'Q709' || CIE10_6 = 'Q709' || CIE10_7 = 'Q709' || CIE10_8 = 'Q709' || CIE10_9 = 'Q709' || CIE10_10 = 'Q709') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q710($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q710' || CIE10_2 = 'Q710' || CIE10_3 = 'Q710' || CIE10_4 = 'Q710' || CIE10_5 = 'Q710' || CIE10_6 = 'Q710' || CIE10_7 = 'Q710' || CIE10_8 = 'Q710' || CIE10_9 = 'Q710' || CIE10_10 = 'Q710') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q711($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q711' || CIE10_2 = 'Q711' || CIE10_3 = 'Q711' || CIE10_4 = 'Q711' || CIE10_5 = 'Q711' || CIE10_6 = 'Q711' || CIE10_7 = 'Q711' || CIE10_8 = 'Q711' || CIE10_9 = 'Q711' || CIE10_10 = 'Q711') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q712($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q712' || CIE10_2 = 'Q712' || CIE10_3 = 'Q712' || CIE10_4 = 'Q712' || CIE10_5 = 'Q712' || CIE10_6 = 'Q712' || CIE10_7 = 'Q712' || CIE10_8 = 'Q712' || CIE10_9 = 'Q712' || CIE10_10 = 'Q712') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q713($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q713' || CIE10_2 = 'Q713' || CIE10_3 = 'Q713' || CIE10_4 = 'Q713' || CIE10_5 = 'Q713' || CIE10_6 = 'Q713' || CIE10_7 = 'Q713' || CIE10_8 = 'Q713' || CIE10_9 = 'Q713' || CIE10_10 = 'Q713') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q714($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q714' || CIE10_2 = 'Q714' || CIE10_3 = 'Q714' || CIE10_4 = 'Q714' || CIE10_5 = 'Q714' || CIE10_6 = 'Q714' || CIE10_7 = 'Q714' || CIE10_8 = 'Q714' || CIE10_9 = 'Q714' || CIE10_10 = 'Q714') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q715($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q715' || CIE10_2 = 'Q715' || CIE10_3 = 'Q715' || CIE10_4 = 'Q715' || CIE10_5 = 'Q715' || CIE10_6 = 'Q715' || CIE10_7 = 'Q715' || CIE10_8 = 'Q715' || CIE10_9 = 'Q715' || CIE10_10 = 'Q715') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q716($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q716' || CIE10_2 = 'Q716' || CIE10_3 = 'Q716' || CIE10_4 = 'Q716' || CIE10_5 = 'Q716' || CIE10_6 = 'Q716' || CIE10_7 = 'Q716' || CIE10_8 = 'Q716' || CIE10_9 = 'Q716' || CIE10_10 = 'Q716') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q718($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q718' || CIE10_2 = 'Q718' || CIE10_3 = 'Q718' || CIE10_4 = 'Q718' || CIE10_5 = 'Q718' || CIE10_6 = 'Q718' || CIE10_7 = 'Q718' || CIE10_8 = 'Q718' || CIE10_9 = 'Q718' || CIE10_10 = 'Q718') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q719($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q719' || CIE10_2 = 'Q719' || CIE10_3 = 'Q719' || CIE10_4 = 'Q719' || CIE10_5 = 'Q719' || CIE10_6 = 'Q719' || CIE10_7 = 'Q719' || CIE10_8 = 'Q719' || CIE10_9 = 'Q719' || CIE10_10 = 'Q719') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q720($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q720' || CIE10_2 = 'Q720' || CIE10_3 = 'Q720' || CIE10_4 = 'Q720' || CIE10_5 = 'Q720' || CIE10_6 = 'Q720' || CIE10_7 = 'Q720' || CIE10_8 = 'Q720' || CIE10_9 = 'Q720' || CIE10_10 = 'Q720') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q721($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q721' || CIE10_2 = 'Q721' || CIE10_3 = 'Q721' || CIE10_4 = 'Q721' || CIE10_5 = 'Q721' || CIE10_6 = 'Q721' || CIE10_7 = 'Q721' || CIE10_8 = 'Q721' || CIE10_9 = 'Q721' || CIE10_10 = 'Q721') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q722($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q722' || CIE10_2 = 'Q722' || CIE10_3 = 'Q722' || CIE10_4 = 'Q722' || CIE10_5 = 'Q722' || CIE10_6 = 'Q722' || CIE10_7 = 'Q722' || CIE10_8 = 'Q722' || CIE10_9 = 'Q722' || CIE10_10 = 'Q722') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q723($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q723' || CIE10_2 = 'Q723' || CIE10_3 = 'Q723' || CIE10_4 = 'Q723' || CIE10_5 = 'Q723' || CIE10_6 = 'Q723' || CIE10_7 = 'Q723' || CIE10_8 = 'Q723' || CIE10_9 = 'Q723' || CIE10_10 = 'Q723') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q724($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q724' || CIE10_2 = 'Q724' || CIE10_3 = 'Q724' || CIE10_4 = 'Q724' || CIE10_5 = 'Q724' || CIE10_6 = 'Q724' || CIE10_7 = 'Q724' || CIE10_8 = 'Q724' || CIE10_9 = 'Q724' || CIE10_10 = 'Q') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q725($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q725' || CIE10_2 = 'Q725' || CIE10_3 = 'Q725' || CIE10_4 = 'Q725' || CIE10_5 = 'Q725' || CIE10_6 = 'Q725' || CIE10_7 = 'Q725' || CIE10_8 = 'Q725' || CIE10_9 = 'Q725' || CIE10_10 = 'Q725') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q726($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q726' || CIE10_2 = 'Q726' || CIE10_3 = 'Q726' || CIE10_4 = 'Q726' || CIE10_5 = 'Q726' || CIE10_6 = 'Q726' || CIE10_7 = 'Q726' || CIE10_8 = 'Q726' || CIE10_9 = 'Q726' || CIE10_10 = 'Q726') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q727($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q727' || CIE10_2 = 'Q727' || CIE10_3 = 'Q727' || CIE10_4 = 'Q727' || CIE10_5 = 'Q727' || CIE10_6 = 'Q727' || CIE10_7 = 'Q727' || CIE10_8 = 'Q727' || CIE10_9 = 'Q727' || CIE10_10 = 'Q727') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q728($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q728' || CIE10_2 = 'Q728' || CIE10_3 = 'Q728' || CIE10_4 = 'Q728' || CIE10_5 = 'Q728' || CIE10_6 = 'Q728' || CIE10_7 = 'Q728' || CIE10_8 = 'Q728' || CIE10_9 = 'Q728' || CIE10_10 = 'Q728') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q729($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q729' || CIE10_2 = 'Q729' || CIE10_3 = 'Q729' || CIE10_4 = 'Q729' || CIE10_5 = 'Q729' || CIE10_6 = 'Q729' || CIE10_7 = 'Q729' || CIE10_8 = 'Q729' || CIE10_9 = 'Q729' || CIE10_10 = 'Q729') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q730($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q730' || CIE10_2 = 'Q730' || CIE10_3 = 'Q730' || CIE10_4 = 'Q730' || CIE10_5 = 'Q730' || CIE10_6 = 'Q730' || CIE10_7 = 'Q730' || CIE10_8 = 'Q730' || CIE10_9 = 'Q730' || CIE10_10 = 'Q730') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q731($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q731' || CIE10_2 = 'Q731' || CIE10_3 = 'Q731' || CIE10_4 = 'Q731' || CIE10_5 = 'Q731' || CIE10_6 = 'Q731' || CIE10_7 = 'Q731' || CIE10_8 = 'Q731' || CIE10_9 = 'Q731' || CIE10_10 = 'Q731') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q738($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q738' || CIE10_2 = 'Q738' || CIE10_3 = 'Q738' || CIE10_4 = 'Q738' || CIE10_5 = 'Q738' || CIE10_6 = 'Q738' || CIE10_7 = 'Q738' || CIE10_8 = 'Q738' || CIE10_9 = 'Q738' || CIE10_10 = 'Q738') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q740($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q740' || CIE10_2 = 'Q740' || CIE10_3 = 'Q740' || CIE10_4 = 'Q740' || CIE10_5 = 'Q740' || CIE10_6 = 'Q740' || CIE10_7 = 'Q740' || CIE10_8 = 'Q740' || CIE10_9 = 'Q740' || CIE10_10 = 'Q740') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q741($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q741' || CIE10_2 = 'Q741' || CIE10_3 = 'Q741' || CIE10_4 = 'Q741' || CIE10_5 = 'Q741' || CIE10_6 = 'Q741' || CIE10_7 = 'Q741' || CIE10_8 = 'Q741' || CIE10_9 = 'Q741' || CIE10_10 = 'Q741') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q742($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q742' || CIE10_2 = 'Q742' || CIE10_3 = 'Q742' || CIE10_4 = 'Q742' || CIE10_5 = 'Q742' || CIE10_6 = 'Q742' || CIE10_7 = 'Q742' || CIE10_8 = 'Q742' || CIE10_9 = 'Q742' || CIE10_10 = 'Q742') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q743($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q743' || CIE10_2 = 'Q743' || CIE10_3 = 'Q743' || CIE10_4 = 'Q743' || CIE10_5 = 'Q743' || CIE10_6 = 'Q743' || CIE10_7 = 'Q743' || CIE10_8 = 'Q743' || CIE10_9 = 'Q743' || CIE10_10 = 'Q743') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q748($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q748' || CIE10_2 = 'Q748' || CIE10_3 = 'Q748' || CIE10_4 = 'Q748' || CIE10_5 = 'Q748' || CIE10_6 = 'Q748' || CIE10_7 = 'Q748' || CIE10_8 = 'Q748' || CIE10_9 = 'Q748' || CIE10_10 = 'Q748') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q749($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q749' || CIE10_2 = 'Q749' || CIE10_3 = 'Q749' || CIE10_4 = 'Q749' || CIE10_5 = 'Q749' || CIE10_6 = 'Q749' || CIE10_7 = 'Q749' || CIE10_8 = 'Q749' || CIE10_9 = 'Q749' || CIE10_10 = 'Q749') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q750($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q750' || CIE10_2 = 'Q750' || CIE10_3 = 'Q750' || CIE10_4 = 'Q750' || CIE10_5 = 'Q750' || CIE10_6 = 'Q750' || CIE10_7 = 'Q750' || CIE10_8 = 'Q750' || CIE10_9 = 'Q750' || CIE10_10 = 'Q750') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q751($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q751' || CIE10_2 = 'Q751' || CIE10_3 = 'Q751' || CIE10_4 = 'Q751' || CIE10_5 = 'Q751' || CIE10_6 = 'Q751' || CIE10_7 = 'Q751' || CIE10_8 = 'Q751' || CIE10_9 = 'Q751' || CIE10_10 = 'Q751') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q752($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q752' || CIE10_2 = 'Q752' || CIE10_3 = 'Q752' || CIE10_4 = 'Q752' || CIE10_5 = 'Q752' || CIE10_6 = 'Q752' || CIE10_7 = 'Q752' || CIE10_8 = 'Q752' || CIE10_9 = 'Q752' || CIE10_10 = 'Q752') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q753($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q753' || CIE10_2 = 'Q753' || CIE10_3 = 'Q753' || CIE10_4 = 'Q753' || CIE10_5 = 'Q753' || CIE10_6 = 'Q753' || CIE10_7 = 'Q753' || CIE10_8 = 'Q753' || CIE10_9 = 'Q753' || CIE10_10 = 'Q753') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q754($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q754' || CIE10_2 = 'Q754' || CIE10_3 = 'Q754' || CIE10_4 = 'Q754' || CIE10_5 = 'Q754' || CIE10_6 = 'Q754' || CIE10_7 = 'Q754' || CIE10_8 = 'Q754' || CIE10_9 = 'Q754' || CIE10_10 = 'Q754') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q755($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q755' || CIE10_2 = 'Q755' || CIE10_3 = 'Q755' || CIE10_4 = 'Q755' || CIE10_5 = 'Q755' || CIE10_6 = 'Q755' || CIE10_7 = 'Q755' || CIE10_8 = 'Q755' || CIE10_9 = 'Q755' || CIE10_10 = 'Q755') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q758($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q758' || CIE10_2 = 'Q758' || CIE10_3 = 'Q758' || CIE10_4 = 'Q758' || CIE10_5 = 'Q758' || CIE10_6 = 'Q758' || CIE10_7 = 'Q758' || CIE10_8 = 'Q758' || CIE10_9 = 'Q758' || CIE10_10 = 'Q758') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q759($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q759' || CIE10_2 = 'Q759' || CIE10_3 = 'Q759' || CIE10_4 = 'Q759' || CIE10_5 = 'Q759' || CIE10_6 = 'Q759' || CIE10_7 = 'Q759' || CIE10_8 = 'Q759' || CIE10_9 = 'Q759' || CIE10_10 = 'Q759') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q760($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q760' || CIE10_2 = 'Q760' || CIE10_3 = 'Q760' || CIE10_4 = 'Q760' || CIE10_5 = 'Q760' || CIE10_6 = 'Q760' || CIE10_7 = 'Q760' || CIE10_8 = 'Q760' || CIE10_9 = 'Q760' || CIE10_10 = 'Q760') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q761($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q761' || CIE10_2 = 'Q761' || CIE10_3 = 'Q761' || CIE10_4 = 'Q761' || CIE10_5 = 'Q761' || CIE10_6 = 'Q761' || CIE10_7 = 'Q761' || CIE10_8 = 'Q761' || CIE10_9 = 'Q761' || CIE10_10 = 'Q761') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q762($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q762' || CIE10_2 = 'Q762' || CIE10_3 = 'Q762' || CIE10_4 = 'Q762' || CIE10_5 = 'Q762' || CIE10_6 = 'Q762' || CIE10_7 = 'Q762' || CIE10_8 = 'Q762' || CIE10_9 = 'Q762' || CIE10_10 = 'Q762') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q763($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q763' || CIE10_2 = 'Q763' || CIE10_3 = 'Q763' || CIE10_4 = 'Q763' || CIE10_5 = 'Q763' || CIE10_6 = 'Q763' || CIE10_7 = 'Q763' || CIE10_8 = 'Q763' || CIE10_9 = 'Q763' || CIE10_10 = 'Q763') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q764($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q764' || CIE10_2 = 'Q764' || CIE10_3 = 'Q764' || CIE10_4 = 'Q764' || CIE10_5 = 'Q764' || CIE10_6 = 'Q764' || CIE10_7 = 'Q764' || CIE10_8 = 'Q764' || CIE10_9 = 'Q764' || CIE10_10 = 'Q764') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q765($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q765' || CIE10_2 = 'Q765' || CIE10_3 = 'Q765' || CIE10_4 = 'Q765' || CIE10_5 = 'Q765' || CIE10_6 = 'Q765' || CIE10_7 = 'Q765' || CIE10_8 = 'Q765' || CIE10_9 = 'Q765' || CIE10_10 = 'Q765') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q766($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q766' || CIE10_2 = 'Q766' || CIE10_3 = 'Q766' || CIE10_4 = 'Q766' || CIE10_5 = 'Q766' || CIE10_6 = 'Q766' || CIE10_7 = 'Q766' || CIE10_8 = 'Q766' || CIE10_9 = 'Q766' || CIE10_10 = 'Q766') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q767($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q767' || CIE10_2 = 'Q767' || CIE10_3 = 'Q767' || CIE10_4 = 'Q767' || CIE10_5 = 'Q767' || CIE10_6 = 'Q767' || CIE10_7 = 'Q767' || CIE10_8 = 'Q767' || CIE10_9 = 'Q767' || CIE10_10 = 'Q767') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q768($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q768' || CIE10_2 = 'Q768' || CIE10_3 = 'Q768' || CIE10_4 = 'Q768' || CIE10_5 = 'Q768' || CIE10_6 = 'Q768' || CIE10_7 = 'Q768' || CIE10_8 = 'Q768' || CIE10_9 = 'Q768' || CIE10_10 = 'Q768') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q769($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q769' || CIE10_2 = 'Q769' || CIE10_3 = 'Q769' || CIE10_4 = 'Q769' || CIE10_5 = 'Q769' || CIE10_6 = 'Q769' || CIE10_7 = 'Q769' || CIE10_8 = 'Q769' || CIE10_9 = 'Q769' || CIE10_10 = 'Q769') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q770($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q770' || CIE10_2 = 'Q770' || CIE10_3 = 'Q770' || CIE10_4 = 'Q770' || CIE10_5 = 'Q770' || CIE10_6 = 'Q770' || CIE10_7 = 'Q770' || CIE10_8 = 'Q770' || CIE10_9 = 'Q770' || CIE10_10 = 'Q770') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q771($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q771' || CIE10_2 = 'Q771' || CIE10_3 = 'Q771' || CIE10_4 = 'Q771' || CIE10_5 = 'Q771' || CIE10_6 = 'Q771' || CIE10_7 = 'Q771' || CIE10_8 = 'Q771' || CIE10_9 = 'Q771' || CIE10_10 = 'Q771') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q772($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q772' || CIE10_2 = 'Q772' || CIE10_3 = 'Q772' || CIE10_4 = 'Q772' || CIE10_5 = 'Q772' || CIE10_6 = 'Q772' || CIE10_7 = 'Q772' || CIE10_8 = 'Q772' || CIE10_9 = 'Q772' || CIE10_10 = 'Q772') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q773($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q773' || CIE10_2 = 'Q773' || CIE10_3 = 'Q773' || CIE10_4 = 'Q773' || CIE10_5 = 'Q773' || CIE10_6 = 'Q773' || CIE10_7 = 'Q773' || CIE10_8 = 'Q773' || CIE10_9 = 'Q773' || CIE10_10 = 'Q773') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q774($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q774' || CIE10_2 = 'Q774' || CIE10_3 = 'Q774' || CIE10_4 = 'Q774' || CIE10_5 = 'Q774' || CIE10_6 = 'Q774' || CIE10_7 = 'Q774' || CIE10_8 = 'Q774' || CIE10_9 = 'Q774' || CIE10_10 = 'Q774') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q775($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q775' || CIE10_2 = 'Q775' || CIE10_3 = 'Q775' || CIE10_4 = 'Q775' || CIE10_5 = 'Q775' || CIE10_6 = 'Q775' || CIE10_7 = 'Q775' || CIE10_8 = 'Q775' || CIE10_9 = 'Q775' || CIE10_10 = 'Q775') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q776($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q776' || CIE10_2 = 'Q776' || CIE10_3 = 'Q776' || CIE10_4 = 'Q776' || CIE10_5 = 'Q776' || CIE10_6 = 'Q776' || CIE10_7 = 'Q776' || CIE10_8 = 'Q776' || CIE10_9 = 'Q776' || CIE10_10 = 'Q776') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q777($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q777' || CIE10_2 = 'Q777' || CIE10_3 = 'Q777' || CIE10_4 = 'Q777' || CIE10_5 = 'Q777' || CIE10_6 = 'Q777' || CIE10_7 = 'Q777' || CIE10_8 = 'Q777' || CIE10_9 = 'Q777' || CIE10_10 = 'Q777') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q778($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q778' || CIE10_2 = 'Q778' || CIE10_3 = 'Q778' || CIE10_4 = 'Q778' || CIE10_5 = 'Q778' || CIE10_6 = 'Q778' || CIE10_7 = 'Q778' || CIE10_8 = 'Q778' || CIE10_9 = 'Q778' || CIE10_10 = 'Q778') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q779($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q779' || CIE10_2 = 'Q779' || CIE10_3 = 'Q779' || CIE10_4 = 'Q779' || CIE10_5 = 'Q779' || CIE10_6 = 'Q779' || CIE10_7 = 'Q779' || CIE10_8 = 'Q779' || CIE10_9 = 'Q779' || CIE10_10 = 'Q779') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q780($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q780' || CIE10_2 = 'Q780' || CIE10_3 = 'Q780' || CIE10_4 = 'Q780' || CIE10_5 = 'Q780' || CIE10_6 = 'Q780' || CIE10_7 = 'Q780' || CIE10_8 = 'Q780' || CIE10_9 = 'Q780' || CIE10_10 = 'Q780') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q781($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q781' || CIE10_2 = 'Q781' || CIE10_3 = 'Q781' || CIE10_4 = 'Q781' || CIE10_5 = 'Q781' || CIE10_6 = 'Q781' || CIE10_7 = 'Q781' || CIE10_8 = 'Q781' || CIE10_9 = 'Q781' || CIE10_10 = 'Q781') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q782($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q782' || CIE10_2 = 'Q782' || CIE10_3 = 'Q782' || CIE10_4 = 'Q782' || CIE10_5 = 'Q782' || CIE10_6 = 'Q782' || CIE10_7 = 'Q782' || CIE10_8 = 'Q782' || CIE10_9 = 'Q782' || CIE10_10 = 'Q782') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q783($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q783' || CIE10_2 = 'Q783' || CIE10_3 = 'Q783' || CIE10_4 = 'Q783' || CIE10_5 = 'Q783' || CIE10_6 = 'Q783' || CIE10_7 = 'Q783' || CIE10_8 = 'Q783' || CIE10_9 = 'Q783' || CIE10_10 = 'Q783') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q784($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q784' || CIE10_2 = 'Q784' || CIE10_3 = 'Q784' || CIE10_4 = 'Q784' || CIE10_5 = 'Q784' || CIE10_6 = 'Q784' || CIE10_7 = 'Q784' || CIE10_8 = 'Q784' || CIE10_9 = 'Q784' || CIE10_10 = 'Q784') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q785($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q785' || CIE10_2 = 'Q785' || CIE10_3 = 'Q785' || CIE10_4 = 'Q785' || CIE10_5 = 'Q785' || CIE10_6 = 'Q785' || CIE10_7 = 'Q785' || CIE10_8 = 'Q785' || CIE10_9 = 'Q785' || CIE10_10 = 'Q785') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q786($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q786' || CIE10_2 = 'Q786' || CIE10_3 = 'Q786' || CIE10_4 = 'Q786' || CIE10_5 = 'Q786' || CIE10_6 = 'Q786' || CIE10_7 = 'Q786' || CIE10_8 = 'Q786' || CIE10_9 = 'Q786' || CIE10_10 = 'Q786') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q788($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q788' || CIE10_2 = 'Q788' || CIE10_3 = 'Q788' || CIE10_4 = 'Q788' || CIE10_5 = 'Q788' || CIE10_6 = 'Q788' || CIE10_7 = 'Q788' || CIE10_8 = 'Q788' || CIE10_9 = 'Q788' || CIE10_10 = 'Q788') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q789($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q789' || CIE10_2 = 'Q789' || CIE10_3 = 'Q789' || CIE10_4 = 'Q789' || CIE10_5 = 'Q789' || CIE10_6 = 'Q789' || CIE10_7 = 'Q789' || CIE10_8 = 'Q789' || CIE10_9 = 'Q789' || CIE10_10 = 'Q789') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q790($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q790' || CIE10_2 = 'Q790' || CIE10_3 = 'Q790' || CIE10_4 = 'Q790' || CIE10_5 = 'Q790' || CIE10_6 = 'Q790' || CIE10_7 = 'Q790' || CIE10_8 = 'Q790' || CIE10_9 = 'Q790' || CIE10_10 = 'Q790') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q791($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q791' || CIE10_2 = 'Q791' || CIE10_3 = 'Q791' || CIE10_4 = 'Q791' || CIE10_5 = 'Q791' || CIE10_6 = 'Q791' || CIE10_7 = 'Q791' || CIE10_8 = 'Q791' || CIE10_9 = 'Q791' || CIE10_10 = 'Q791') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q792($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q792' || CIE10_2 = 'Q792' || CIE10_3 = 'Q792' || CIE10_4 = 'Q792' || CIE10_5 = 'Q792' || CIE10_6 = 'Q792' || CIE10_7 = 'Q792' || CIE10_8 = 'Q792' || CIE10_9 = 'Q792' || CIE10_10 = 'Q792') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q793($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q793' || CIE10_2 = 'Q793' || CIE10_3 = 'Q793' || CIE10_4 = 'Q793' || CIE10_5 = 'Q793' || CIE10_6 = 'Q793' || CIE10_7 = 'Q793' || CIE10_8 = 'Q793' || CIE10_9 = 'Q793' || CIE10_10 = 'Q793') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q794($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q794' || CIE10_2 = 'Q794' || CIE10_3 = 'Q794' || CIE10_4 = 'Q794' || CIE10_5 = 'Q794' || CIE10_6 = 'Q794' || CIE10_7 = 'Q794' || CIE10_8 = 'Q794' || CIE10_9 = 'Q794' || CIE10_10 = 'Q794') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q795($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q795' || CIE10_2 = 'Q795' || CIE10_3 = 'Q795' || CIE10_4 = 'Q795' || CIE10_5 = 'Q795' || CIE10_6 = 'Q795' || CIE10_7 = 'Q795' || CIE10_8 = 'Q795' || CIE10_9 = 'Q795' || CIE10_10 = 'Q795') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q796($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q796' || CIE10_2 = 'Q796' || CIE10_3 = 'Q796' || CIE10_4 = 'Q796' || CIE10_5 = 'Q796' || CIE10_6 = 'Q796' || CIE10_7 = 'Q796' || CIE10_8 = 'Q796' || CIE10_9 = 'Q796' || CIE10_10 = 'Q796') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q798($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q798' || CIE10_2 = 'Q798' || CIE10_3 = 'Q798' || CIE10_4 = 'Q798' || CIE10_5 = 'Q798' || CIE10_6 = 'Q798' || CIE10_7 = 'Q798' || CIE10_8 = 'Q798' || CIE10_9 = 'Q798' || CIE10_10 = 'Q798') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q799($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q799' || CIE10_2 = 'Q799' || CIE10_3 = 'Q799' || CIE10_4 = 'Q799' || CIE10_5 = 'Q799' || CIE10_6 = 'Q799' || CIE10_7 = 'Q799' || CIE10_8 = 'Q799' || CIE10_9 = 'Q799' || CIE10_10 = 'Q799') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; } 
public static function Q800($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q800' || CIE10_2 = 'Q800' || CIE10_3 = 'Q800' || CIE10_4 = 'Q800' || CIE10_5 = 'Q800' || CIE10_6 = 'Q800' || CIE10_7 = 'Q800' || CIE10_8 = 'Q800' || CIE10_9 = 'Q800' || CIE10_10 = 'Q800') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q801($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q801' || CIE10_2 = 'Q801' || CIE10_3 = 'Q801' || CIE10_4 = 'Q801' || CIE10_5 = 'Q801' || CIE10_6 = 'Q801' || CIE10_7 = 'Q801' || CIE10_8 = 'Q801' || CIE10_9 = 'Q801' || CIE10_10 = 'Q801') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q802($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q802' || CIE10_2 = 'Q802' || CIE10_3 = 'Q802' || CIE10_4 = 'Q802' || CIE10_5 = 'Q802' || CIE10_6 = 'Q802' || CIE10_7 = 'Q802' || CIE10_8 = 'Q802' || CIE10_9 = 'Q802' || CIE10_10 = 'Q802') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q803($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q803' || CIE10_2 = 'Q803' || CIE10_3 = 'Q803' || CIE10_4 = 'Q803' || CIE10_5 = 'Q803' || CIE10_6 = 'Q803' || CIE10_7 = 'Q803' || CIE10_8 = 'Q803' || CIE10_9 = 'Q803' || CIE10_10 = 'Q803') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q804($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q804' || CIE10_2 = 'Q804' || CIE10_3 = 'Q804' || CIE10_4 = 'Q804' || CIE10_5 = 'Q804' || CIE10_6 = 'Q804' || CIE10_7 = 'Q804' || CIE10_8 = 'Q804' || CIE10_9 = 'Q804' || CIE10_10 = 'Q804') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q808($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q808' || CIE10_2 = 'Q808' || CIE10_3 = 'Q808' || CIE10_4 = 'Q808' || CIE10_5 = 'Q808' || CIE10_6 = 'Q808' || CIE10_7 = 'Q808' || CIE10_8 = 'Q808' || CIE10_9 = 'Q808' || CIE10_10 = 'Q808') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q809($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q809' || CIE10_2 = 'Q809' || CIE10_3 = 'Q809' || CIE10_4 = 'Q809' || CIE10_5 = 'Q809' || CIE10_6 = 'Q809' || CIE10_7 = 'Q809' || CIE10_8 = 'Q809' || CIE10_9 = 'Q809' || CIE10_10 = 'Q809') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q810($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q810' || CIE10_2 = 'Q810' || CIE10_3 = 'Q810' || CIE10_4 = 'Q810' || CIE10_5 = 'Q810' || CIE10_6 = 'Q810' || CIE10_7 = 'Q810' || CIE10_8 = 'Q810' || CIE10_9 = 'Q810' || CIE10_10 = 'Q810') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q811($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q811' || CIE10_2 = 'Q811' || CIE10_3 = 'Q811' || CIE10_4 = 'Q811' || CIE10_5 = 'Q811' || CIE10_6 = 'Q811' || CIE10_7 = 'Q811' || CIE10_8 = 'Q811' || CIE10_9 = 'Q811' || CIE10_10 = 'Q811') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q812($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q812' || CIE10_2 = 'Q812' || CIE10_3 = 'Q812' || CIE10_4 = 'Q812' || CIE10_5 = 'Q812' || CIE10_6 = 'Q812' || CIE10_7 = 'Q812' || CIE10_8 = 'Q812' || CIE10_9 = 'Q812' || CIE10_10 = 'Q812') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q818($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q818' || CIE10_2 = 'Q818' || CIE10_3 = 'Q818' || CIE10_4 = 'Q818' || CIE10_5 = 'Q818' || CIE10_6 = 'Q818' || CIE10_7 = 'Q818' || CIE10_8 = 'Q818' || CIE10_9 = 'Q818' || CIE10_10 = 'Q818') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q819($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q819' || CIE10_2 = 'Q819' || CIE10_3 = 'Q819' || CIE10_4 = 'Q819' || CIE10_5 = 'Q819' || CIE10_6 = 'Q819' || CIE10_7 = 'Q819' || CIE10_8 = 'Q819' || CIE10_9 = 'Q819' || CIE10_10 = 'Q819') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q820($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q820' || CIE10_2 = 'Q820' || CIE10_3 = 'Q820' || CIE10_4 = 'Q820' || CIE10_5 = 'Q820' || CIE10_6 = 'Q820' || CIE10_7 = 'Q820' || CIE10_8 = 'Q820' || CIE10_9 = 'Q820' || CIE10_10 = 'Q820') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q821($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q821' || CIE10_2 = 'Q821' || CIE10_3 = 'Q821' || CIE10_4 = 'Q821' || CIE10_5 = 'Q821' || CIE10_6 = 'Q821' || CIE10_7 = 'Q821' || CIE10_8 = 'Q821' || CIE10_9 = 'Q821' || CIE10_10 = 'Q821') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q822($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q822' || CIE10_2 = 'Q822' || CIE10_3 = 'Q822' || CIE10_4 = 'Q822' || CIE10_5 = 'Q822' || CIE10_6 = 'Q822' || CIE10_7 = 'Q822' || CIE10_8 = 'Q822' || CIE10_9 = 'Q822' || CIE10_10 = 'Q822') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q823($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q823' || CIE10_2 = 'Q823' || CIE10_3 = 'Q823' || CIE10_4 = 'Q823' || CIE10_5 = 'Q823' || CIE10_6 = 'Q823' || CIE10_7 = 'Q823' || CIE10_8 = 'Q823' || CIE10_9 = 'Q823' || CIE10_10 = 'Q823') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q824($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q824' || CIE10_2 = 'Q824' || CIE10_3 = 'Q824' || CIE10_4 = 'Q824' || CIE10_5 = 'Q824' || CIE10_6 = 'Q824' || CIE10_7 = 'Q824' || CIE10_8 = 'Q824' || CIE10_9 = 'Q824' || CIE10_10 = 'Q824') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q825($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q825' || CIE10_2 = 'Q825' || CIE10_3 = 'Q825' || CIE10_4 = 'Q825' || CIE10_5 = 'Q825' || CIE10_6 = 'Q825' || CIE10_7 = 'Q825' || CIE10_8 = 'Q825' || CIE10_9 = 'Q825' || CIE10_10 = 'Q825') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q828($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q828' || CIE10_2 = 'Q828' || CIE10_3 = 'Q828' || CIE10_4 = 'Q828' || CIE10_5 = 'Q828' || CIE10_6 = 'Q828' || CIE10_7 = 'Q828' || CIE10_8 = 'Q828' || CIE10_9 = 'Q828' || CIE10_10 = 'Q828') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q829($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q829' || CIE10_2 = 'Q829' || CIE10_3 = 'Q829' || CIE10_4 = 'Q829' || CIE10_5 = 'Q829' || CIE10_6 = 'Q829' || CIE10_7 = 'Q829' || CIE10_8 = 'Q829' || CIE10_9 = 'Q829' || CIE10_10 = 'Q829') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q830($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q830' || CIE10_2 = 'Q830' || CIE10_3 = 'Q830' || CIE10_4 = 'Q830' || CIE10_5 = 'Q830' || CIE10_6 = 'Q830' || CIE10_7 = 'Q830' || CIE10_8 = 'Q830' || CIE10_9 = 'Q830' || CIE10_10 = 'Q830') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q831($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q831' || CIE10_2 = 'Q831' || CIE10_3 = 'Q831' || CIE10_4 = 'Q831' || CIE10_5 = 'Q831' || CIE10_6 = 'Q831' || CIE10_7 = 'Q831' || CIE10_8 = 'Q831' || CIE10_9 = 'Q831' || CIE10_10 = 'Q831') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q832($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q832' || CIE10_2 = 'Q832' || CIE10_3 = 'Q832' || CIE10_4 = 'Q832' || CIE10_5 = 'Q832' || CIE10_6 = 'Q832' || CIE10_7 = 'Q832' || CIE10_8 = 'Q832' || CIE10_9 = 'Q832' || CIE10_10 = 'Q832') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q833($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q833' || CIE10_2 = 'Q833' || CIE10_3 = 'Q833' || CIE10_4 = 'Q833' || CIE10_5 = 'Q833' || CIE10_6 = 'Q833' || CIE10_7 = 'Q833' || CIE10_8 = 'Q833' || CIE10_9 = 'Q833' || CIE10_10 = 'Q833') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q838($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q838' || CIE10_2 = 'Q838' || CIE10_3 = 'Q838' || CIE10_4 = 'Q838' || CIE10_5 = 'Q838' || CIE10_6 = 'Q838' || CIE10_7 = 'Q838' || CIE10_8 = 'Q838' || CIE10_9 = 'Q838' || CIE10_10 = 'Q838') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q839($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q839' || CIE10_2 = 'Q839' || CIE10_3 = 'Q839' || CIE10_4 = 'Q839' || CIE10_5 = 'Q839' || CIE10_6 = 'Q839' || CIE10_7 = 'Q839' || CIE10_8 = 'Q839' || CIE10_9 = 'Q839' || CIE10_10 = 'Q839') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q840($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q840' || CIE10_2 = 'Q840' || CIE10_3 = 'Q840' || CIE10_4 = 'Q840' || CIE10_5 = 'Q840' || CIE10_6 = 'Q840' || CIE10_7 = 'Q840' || CIE10_8 = 'Q840' || CIE10_9 = 'Q840' || CIE10_10 = 'Q840') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q841($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q841' || CIE10_2 = 'Q841' || CIE10_3 = 'Q841' || CIE10_4 = 'Q841' || CIE10_5 = 'Q841' || CIE10_6 = 'Q841' || CIE10_7 = 'Q841' || CIE10_8 = 'Q841' || CIE10_9 = 'Q841' || CIE10_10 = 'Q841') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q842($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q842' || CIE10_2 = 'Q842' || CIE10_3 = 'Q842' || CIE10_4 = 'Q842' || CIE10_5 = 'Q842' || CIE10_6 = 'Q842' || CIE10_7 = 'Q842' || CIE10_8 = 'Q842' || CIE10_9 = 'Q842' || CIE10_10 = 'Q842') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q843($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q843' || CIE10_2 = 'Q843' || CIE10_3 = 'Q843' || CIE10_4 = 'Q843' || CIE10_5 = 'Q843' || CIE10_6 = 'Q843' || CIE10_7 = 'Q843' || CIE10_8 = 'Q843' || CIE10_9 = 'Q843' || CIE10_10 = 'Q843') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q844($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q844' || CIE10_2 = 'Q844' || CIE10_3 = 'Q844' || CIE10_4 = 'Q844' || CIE10_5 = 'Q844' || CIE10_6 = 'Q844' || CIE10_7 = 'Q844' || CIE10_8 = 'Q844' || CIE10_9 = 'Q844' || CIE10_10 = 'Q844') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q845($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q845' || CIE10_2 = 'Q845' || CIE10_3 = 'Q845' || CIE10_4 = 'Q845' || CIE10_5 = 'Q845' || CIE10_6 = 'Q845' || CIE10_7 = 'Q845' || CIE10_8 = 'Q845' || CIE10_9 = 'Q845' || CIE10_10 = 'Q845') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q846($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q846' || CIE10_2 = 'Q846' || CIE10_3 = 'Q846' || CIE10_4 = 'Q846' || CIE10_5 = 'Q846' || CIE10_6 = 'Q846' || CIE10_7 = 'Q846' || CIE10_8 = 'Q846' || CIE10_9 = 'Q846' || CIE10_10 = 'Q846') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q848($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q848' || CIE10_2 = 'Q848' || CIE10_3 = 'Q848' || CIE10_4 = 'Q848' || CIE10_5 = 'Q848' || CIE10_6 = 'Q848' || CIE10_7 = 'Q848' || CIE10_8 = 'Q848' || CIE10_9 = 'Q848' || CIE10_10 = 'Q848') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q849($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q849' || CIE10_2 = 'Q849' || CIE10_3 = 'Q849' || CIE10_4 = 'Q849' || CIE10_5 = 'Q849' || CIE10_6 = 'Q849' || CIE10_7 = 'Q849' || CIE10_8 = 'Q849' || CIE10_9 = 'Q849' || CIE10_10 = 'Q849') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q850($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q850' || CIE10_2 = 'Q850' || CIE10_3 = 'Q850' || CIE10_4 = 'Q850' || CIE10_5 = 'Q850' || CIE10_6 = 'Q850' || CIE10_7 = 'Q850' || CIE10_8 = 'Q850' || CIE10_9 = 'Q850' || CIE10_10 = 'Q850') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q851($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q851' || CIE10_2 = 'Q851' || CIE10_3 = 'Q851' || CIE10_4 = 'Q851' || CIE10_5 = 'Q851' || CIE10_6 = 'Q851' || CIE10_7 = 'Q851' || CIE10_8 = 'Q851' || CIE10_9 = 'Q851' || CIE10_10 = 'Q851') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q858($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q858' || CIE10_2 = 'Q858' || CIE10_3 = 'Q858' || CIE10_4 = 'Q858' || CIE10_5 = 'Q858' || CIE10_6 = 'Q858' || CIE10_7 = 'Q858' || CIE10_8 = 'Q858' || CIE10_9 = 'Q858' || CIE10_10 = 'Q858') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q859($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q859' || CIE10_2 = 'Q859' || CIE10_3 = 'Q859' || CIE10_4 = 'Q859' || CIE10_5 = 'Q859' || CIE10_6 = 'Q859' || CIE10_7 = 'Q859' || CIE10_8 = 'Q859' || CIE10_9 = 'Q859' || CIE10_10 = 'Q859') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q860($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q860' || CIE10_2 = 'Q860' || CIE10_3 = 'Q860' || CIE10_4 = 'Q860' || CIE10_5 = 'Q860' || CIE10_6 = 'Q860' || CIE10_7 = 'Q860' || CIE10_8 = 'Q860' || CIE10_9 = 'Q860' || CIE10_10 = 'Q860') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q861($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q861' || CIE10_2 = 'Q861' || CIE10_3 = 'Q861' || CIE10_4 = 'Q861' || CIE10_5 = 'Q861' || CIE10_6 = 'Q861' || CIE10_7 = 'Q861' || CIE10_8 = 'Q861' || CIE10_9 = 'Q861' || CIE10_10 = 'Q861') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q862($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q862' || CIE10_2 = 'Q862' || CIE10_3 = 'Q862' || CIE10_4 = 'Q862' || CIE10_5 = 'Q862' || CIE10_6 = 'Q862' || CIE10_7 = 'Q862' || CIE10_8 = 'Q862' || CIE10_9 = 'Q862' || CIE10_10 = 'Q862') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q868($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q868' || CIE10_2 = 'Q868' || CIE10_3 = 'Q868' || CIE10_4 = 'Q868' || CIE10_5 = 'Q868' || CIE10_6 = 'Q868' || CIE10_7 = 'Q868' || CIE10_8 = 'Q868' || CIE10_9 = 'Q868' || CIE10_10 = 'Q868') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q870($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q870' || CIE10_2 = 'Q870' || CIE10_3 = 'Q870' || CIE10_4 = 'Q870' || CIE10_5 = 'Q870' || CIE10_6 = 'Q870' || CIE10_7 = 'Q870' || CIE10_8 = 'Q870' || CIE10_9 = 'Q870' || CIE10_10 = 'Q870') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q871($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q871' || CIE10_2 = 'Q871' || CIE10_3 = 'Q871' || CIE10_4 = 'Q871' || CIE10_5 = 'Q871' || CIE10_6 = 'Q871' || CIE10_7 = 'Q871' || CIE10_8 = 'Q871' || CIE10_9 = 'Q871' || CIE10_10 = 'Q871') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q872($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q872' || CIE10_2 = 'Q872' || CIE10_3 = 'Q872' || CIE10_4 = 'Q872' || CIE10_5 = 'Q872' || CIE10_6 = 'Q872' || CIE10_7 = 'Q872' || CIE10_8 = 'Q872' || CIE10_9 = 'Q872' || CIE10_10 = 'Q872') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q873($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q873' || CIE10_2 = 'Q873' || CIE10_3 = 'Q873' || CIE10_4 = 'Q873' || CIE10_5 = 'Q873' || CIE10_6 = 'Q873' || CIE10_7 = 'Q873' || CIE10_8 = 'Q873' || CIE10_9 = 'Q873' || CIE10_10 = 'Q873') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q874($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q874' || CIE10_2 = 'Q874' || CIE10_3 = 'Q874' || CIE10_4 = 'Q874' || CIE10_5 = 'Q874' || CIE10_6 = 'Q874' || CIE10_7 = 'Q874' || CIE10_8 = 'Q874' || CIE10_9 = 'Q874' || CIE10_10 = 'Q874') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q875($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q875' || CIE10_2 = 'Q875' || CIE10_3 = 'Q875' || CIE10_4 = 'Q875' || CIE10_5 = 'Q875' || CIE10_6 = 'Q875' || CIE10_7 = 'Q875' || CIE10_8 = 'Q875' || CIE10_9 = 'Q875' || CIE10_10 = 'Q875') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q878($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q878' || CIE10_2 = 'Q878' || CIE10_3 = 'Q878' || CIE10_4 = 'Q878' || CIE10_5 = 'Q878' || CIE10_6 = 'Q878' || CIE10_7 = 'Q878' || CIE10_8 = 'Q878' || CIE10_9 = 'Q878' || CIE10_10 = 'Q878') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q890($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q890' || CIE10_2 = 'Q890' || CIE10_3 = 'Q890' || CIE10_4 = 'Q890' || CIE10_5 = 'Q890' || CIE10_6 = 'Q890' || CIE10_7 = 'Q890' || CIE10_8 = 'Q890' || CIE10_9 = 'Q890' || CIE10_10 = 'Q890') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q891($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q891' || CIE10_2 = 'Q891' || CIE10_3 = 'Q891' || CIE10_4 = 'Q891' || CIE10_5 = 'Q891' || CIE10_6 = 'Q891' || CIE10_7 = 'Q891' || CIE10_8 = 'Q891' || CIE10_9 = 'Q891' || CIE10_10 = 'Q891') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q892($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q892' || CIE10_2 = 'Q892' || CIE10_3 = 'Q892' || CIE10_4 = 'Q892' || CIE10_5 = 'Q892' || CIE10_6 = 'Q892' || CIE10_7 = 'Q892' || CIE10_8 = 'Q892' || CIE10_9 = 'Q892' || CIE10_10 = 'Q892') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q893($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q893' || CIE10_2 = 'Q893' || CIE10_3 = 'Q893' || CIE10_4 = 'Q893' || CIE10_5 = 'Q893' || CIE10_6 = 'Q893' || CIE10_7 = 'Q893' || CIE10_8 = 'Q893' || CIE10_9 = 'Q893' || CIE10_10 = 'Q893') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q894($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q894' || CIE10_2 = 'Q894' || CIE10_3 = 'Q894' || CIE10_4 = 'Q894' || CIE10_5 = 'Q894' || CIE10_6 = 'Q894' || CIE10_7 = 'Q894' || CIE10_8 = 'Q894' || CIE10_9 = 'Q894' || CIE10_10 = 'Q894') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q897($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q897' || CIE10_2 = 'Q897' || CIE10_3 = 'Q897' || CIE10_4 = 'Q897' || CIE10_5 = 'Q897' || CIE10_6 = 'Q897' || CIE10_7 = 'Q897' || CIE10_8 = 'Q897' || CIE10_9 = 'Q897' || CIE10_10 = 'Q897') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q898($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q898' || CIE10_2 = 'Q898' || CIE10_3 = 'Q898' || CIE10_4 = 'Q898' || CIE10_5 = 'Q898' || CIE10_6 = 'Q898' || CIE10_7 = 'Q898' || CIE10_8 = 'Q898' || CIE10_9 = 'Q898' || CIE10_10 = 'Q898') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q899($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q899' || CIE10_2 = 'Q899' || CIE10_3 = 'Q899' || CIE10_4 = 'Q899' || CIE10_5 = 'Q899' || CIE10_6 = 'Q899' || CIE10_7 = 'Q899' || CIE10_8 = 'Q899' || CIE10_9 = 'Q899' || CIE10_10 = 'Q899') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q18($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q18' || CIE10_2 = 'Q18' || CIE10_3 = 'Q18' || CIE10_4 = 'Q18' || CIE10_5 = 'Q18' || CIE10_6 = 'Q18' || CIE10_7 = 'Q18' || CIE10_8 = 'Q18' || CIE10_9 = 'Q18' || CIE10_10 = 'Q18') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q65($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q65' || CIE10_2 = 'Q65' || CIE10_3 = 'Q65' || CIE10_4 = 'Q65' || CIE10_5 = 'Q65' || CIE10_6 = 'Q65' || CIE10_7 = 'Q65' || CIE10_8 = 'Q65' || CIE10_9 = 'Q65' || CIE10_10 = 'Q65') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q66($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q66' || CIE10_2 = 'Q66' || CIE10_3 = 'Q66' || CIE10_4 = 'Q66' || CIE10_5 = 'Q66' || CIE10_6 = 'Q66' || CIE10_7 = 'Q66' || CIE10_8 = 'Q66' || CIE10_9 = 'Q66' || CIE10_10 = 'Q66') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q67($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q67' || CIE10_2 = 'Q67' || CIE10_3 = 'Q67' || CIE10_4 = 'Q67' || CIE10_5 = 'Q67' || CIE10_6 = 'Q67' || CIE10_7 = 'Q67' || CIE10_8 = 'Q67' || CIE10_9 = 'Q67' || CIE10_10 = 'Q67') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q68($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q68' || CIE10_2 = 'Q68' || CIE10_3 = 'Q68' || CIE10_4 = 'Q68' || CIE10_5 = 'Q68' || CIE10_6 = 'Q68' || CIE10_7 = 'Q68' || CIE10_8 = 'Q68' || CIE10_9 = 'Q68' || CIE10_10 = 'Q68') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q69($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q69' || CIE10_2 = 'Q69' || CIE10_3 = 'Q69' || CIE10_4 = 'Q69' || CIE10_5 = 'Q69' || CIE10_6 = 'Q69' || CIE10_7 = 'Q69' || CIE10_8 = 'Q69' || CIE10_9 = 'Q69' || CIE10_10 = 'Q69') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q70($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q70' || CIE10_2 = 'Q70' || CIE10_3 = 'Q70' || CIE10_4 = 'Q70' || CIE10_5 = 'Q70' || CIE10_6 = 'Q70' || CIE10_7 = 'Q70' || CIE10_8 = 'Q70' || CIE10_9 = 'Q70' || CIE10_10 = 'Q70') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q71($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q71' || CIE10_2 = 'Q71' || CIE10_3 = 'Q71' || CIE10_4 = 'Q71' || CIE10_5 = 'Q71' || CIE10_6 = 'Q71' || CIE10_7 = 'Q71' || CIE10_8 = 'Q71' || CIE10_9 = 'Q71' || CIE10_10 = 'Q71') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q72($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q72' || CIE10_2 = 'Q72' || CIE10_3 = 'Q72' || CIE10_4 = 'Q72' || CIE10_5 = 'Q72' || CIE10_6 = 'Q72' || CIE10_7 = 'Q72' || CIE10_8 = 'Q72' || CIE10_9 = 'Q72' || CIE10_10 = 'Q72') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q73($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q73' || CIE10_2 = 'Q73' || CIE10_3 = 'Q73' || CIE10_4 = 'Q73' || CIE10_5 = 'Q73' || CIE10_6 = 'Q73' || CIE10_7 = 'Q73' || CIE10_8 = 'Q73' || CIE10_9 = 'Q73' || CIE10_10 = 'Q73') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q74($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q74' || CIE10_2 = 'Q74' || CIE10_3 = 'Q74' || CIE10_4 = 'Q74' || CIE10_5 = 'Q74' || CIE10_6 = 'Q74' || CIE10_7 = 'Q74' || CIE10_8 = 'Q74' || CIE10_9 = 'Q74' || CIE10_10 = 'Q74') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q75($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q75' || CIE10_2 = 'Q75' || CIE10_3 = 'Q75' || CIE10_4 = 'Q75' || CIE10_5 = 'Q75' || CIE10_6 = 'Q75' || CIE10_7 = 'Q75' || CIE10_8 = 'Q75' || CIE10_9 = 'Q75' || CIE10_10 = 'Q75') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q76($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q76' || CIE10_2 = 'Q76' || CIE10_3 = 'Q76' || CIE10_4 = 'Q76' || CIE10_5 = 'Q76' || CIE10_6 = 'Q76' || CIE10_7 = 'Q76' || CIE10_8 = 'Q76' || CIE10_9 = 'Q76' || CIE10_10 = 'Q76') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q77($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q77' || CIE10_2 = 'Q77' || CIE10_3 = 'Q77' || CIE10_4 = 'Q77' || CIE10_5 = 'Q77' || CIE10_6 = 'Q77' || CIE10_7 = 'Q77' || CIE10_8 = 'Q77' || CIE10_9 = 'Q77' || CIE10_10 = 'Q77') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q78($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q78' || CIE10_2 = 'Q78' || CIE10_3 = 'Q78' || CIE10_4 = 'Q78' || CIE10_5 = 'Q78' || CIE10_6 = 'Q78' || CIE10_7 = 'Q78' || CIE10_8 = 'Q78' || CIE10_9 = 'Q78' || CIE10_10 = 'Q78') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q79($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q79' || CIE10_2 = 'Q79' || CIE10_3 = 'Q79' || CIE10_4 = 'Q79' || CIE10_5 = 'Q79' || CIE10_6 = 'Q79' || CIE10_7 = 'Q79' || CIE10_8 = 'Q79' || CIE10_9 = 'Q79' || CIE10_10 = 'Q79') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q80($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q80' || CIE10_2 = 'Q80' || CIE10_3 = 'Q80' || CIE10_4 = 'Q80' || CIE10_5 = 'Q80' || CIE10_6 = 'Q80' || CIE10_7 = 'Q80' || CIE10_8 = 'Q80' || CIE10_9 = 'Q80' || CIE10_10 = 'Q80') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q81($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q81' || CIE10_2 = 'Q81' || CIE10_3 = 'Q81' || CIE10_4 = 'Q81' || CIE10_5 = 'Q81' || CIE10_6 = 'Q81' || CIE10_7 = 'Q81' || CIE10_8 = 'Q81' || CIE10_9 = 'Q81' || CIE10_10 = 'Q81') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q82($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q82' || CIE10_2 = 'Q82' || CIE10_3 = 'Q82' || CIE10_4 = 'Q82' || CIE10_5 = 'Q82' || CIE10_6 = 'Q82' || CIE10_7 = 'Q82' || CIE10_8 = 'Q82' || CIE10_9 = 'Q82' || CIE10_10 = 'Q82') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q83($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q83' || CIE10_2 = 'Q83' || CIE10_3 = 'Q83' || CIE10_4 = 'Q83' || CIE10_5 = 'Q83' || CIE10_6 = 'Q83' || CIE10_7 = 'Q83' || CIE10_8 = 'Q83' || CIE10_9 = 'Q83' || CIE10_10 = 'Q83') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q84($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q84' || CIE10_2 = 'Q84' || CIE10_3 = 'Q84' || CIE10_4 = 'Q84' || CIE10_5 = 'Q84' || CIE10_6 = 'Q84' || CIE10_7 = 'Q84' || CIE10_8 = 'Q84' || CIE10_9 = 'Q84' || CIE10_10 = 'Q') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q85($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q85' || CIE10_2 = 'Q85' || CIE10_3 = 'Q85' || CIE10_4 = 'Q85' || CIE10_5 = 'Q85' || CIE10_6 = 'Q85' || CIE10_7 = 'Q85' || CIE10_8 = 'Q85' || CIE10_9 = 'Q85' || CIE10_10 = 'Q85') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q86($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q86' || CIE10_2 = 'Q86' || CIE10_3 = 'Q86' || CIE10_4 = 'Q86' || CIE10_5 = 'Q86' || CIE10_6 = 'Q86' || CIE10_7 = 'Q86' || CIE10_8 = 'Q86' || CIE10_9 = 'Q86' || CIE10_10 = 'Q86') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q87($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q87' || CIE10_2 = 'Q87' || CIE10_3 = 'Q87' || CIE10_4 = 'Q87' || CIE10_5 = 'Q87' || CIE10_6 = 'Q87' || CIE10_7 = 'Q87' || CIE10_8 = 'Q87' || CIE10_9 = 'Q87' || CIE10_10 = 'Q87') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function Q89($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'Q89' || CIE10_2 = 'Q89' || CIE10_3 = 'Q89' || CIE10_4 = 'Q89' || CIE10_5 = 'Q89' || CIE10_6 = 'Q89' || CIE10_7 = 'Q89' || CIE10_8 = 'Q89' || CIE10_9 = 'Q89' || CIE10_10 = 'Q89') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W230($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W230' || CIE10_2 = 'W230' || CIE10_3 = 'W230' || CIE10_4 = 'W230' || CIE10_5 = 'W230' || CIE10_6 = 'W230' || CIE10_7 = 'W230' || CIE10_8 = 'W230' || CIE10_9 = 'W230' || CIE10_10 = 'W230') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W231($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W231' || CIE10_2 = 'W231' || CIE10_3 = 'W231' || CIE10_4 = 'W231' || CIE10_5 = 'W231' || CIE10_6 = 'W231' || CIE10_7 = 'W231' || CIE10_8 = 'W231' || CIE10_9 = 'W231' || CIE10_10 = 'W231') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W232($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W232' || CIE10_2 = 'W232' || CIE10_3 = 'W232' || CIE10_4 = 'W232' || CIE10_5 = 'W232' || CIE10_6 = 'W232' || CIE10_7 = 'W232' || CIE10_8 = 'W232' || CIE10_9 = 'W232' || CIE10_10 = 'W232') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W233($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W233' || CIE10_2 = 'W233' || CIE10_3 = 'W233' || CIE10_4 = 'W233' || CIE10_5 = 'W233' || CIE10_6 = 'W233' || CIE10_7 = 'W233' || CIE10_8 = 'W233' || CIE10_9 = 'W233' || CIE10_10 = 'W233') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W234($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W234' || CIE10_2 = 'W234' || CIE10_3 = 'W234' || CIE10_4 = 'W234' || CIE10_5 = 'W234' || CIE10_6 = 'W234' || CIE10_7 = 'W234' || CIE10_8 = 'W234' || CIE10_9 = 'W234' || CIE10_10 = 'W234') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W235($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W235' || CIE10_2 = 'W235' || CIE10_3 = 'W235' || CIE10_4 = 'W235' || CIE10_5 = 'W235' || CIE10_6 = 'W235' || CIE10_7 = 'W235' || CIE10_8 = 'W235' || CIE10_9 = 'W235' || CIE10_10 = 'W235') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W236($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W236' || CIE10_2 = 'W236' || CIE10_3 = 'W236' || CIE10_4 = 'W236' || CIE10_5 = 'W236' || CIE10_6 = 'W236' || CIE10_7 = 'W236' || CIE10_8 = 'W236' || CIE10_9 = 'W236' || CIE10_10 = 'W236') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W237($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W237' || CIE10_2 = 'W237' || CIE10_3 = 'W237' || CIE10_4 = 'W237' || CIE10_5 = 'W237' || CIE10_6 = 'W237' || CIE10_7 = 'W237' || CIE10_8 = 'W237' || CIE10_9 = 'W237' || CIE10_10 = 'W237') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W238($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W238' || CIE10_2 = 'W238' || CIE10_3 = 'W238' || CIE10_4 = 'W238' || CIE10_5 = 'W238' || CIE10_6 = 'W238' || CIE10_7 = 'W238' || CIE10_8 = 'W238' || CIE10_9 = 'W238' || CIE10_10 = 'W238') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W239($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W239' || CIE10_2 = 'W239' || CIE10_3 = 'W239' || CIE10_4 = 'W239' || CIE10_5 = 'W239' || CIE10_6 = 'W239' || CIE10_7 = 'W239' || CIE10_8 = 'W239' || CIE10_9 = 'W239' || CIE10_10 = 'W239') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W240($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W240' || CIE10_2 = 'W240' || CIE10_3 = 'W240' || CIE10_4 = 'W240' || CIE10_5 = 'W240' || CIE10_6 = 'W240' || CIE10_7 = 'W240' || CIE10_8 = 'W240' || CIE10_9 = 'W240' || CIE10_10 = 'W240') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W241($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W241' || CIE10_2 = 'W241' || CIE10_3 = 'W241' || CIE10_4 = 'W241' || CIE10_5 = 'W241' || CIE10_6 = 'W241' || CIE10_7 = 'W241' || CIE10_8 = 'W241' || CIE10_9 = 'W241' || CIE10_10 = 'W241') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W242($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W242' || CIE10_2 = 'W242' || CIE10_3 = 'W242' || CIE10_4 = 'W242' || CIE10_5 = 'W242' || CIE10_6 = 'W242' || CIE10_7 = 'W242' || CIE10_8 = 'W242' || CIE10_9 = 'W242' || CIE10_10 = 'W242') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W243($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W243' || CIE10_2 = 'W243' || CIE10_3 = 'W243' || CIE10_4 = 'W243' || CIE10_5 = 'W243' || CIE10_6 = 'W243' || CIE10_7 = 'W243' || CIE10_8 = 'W243' || CIE10_9 = 'W243' || CIE10_10 = 'W243') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W244($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W244' || CIE10_2 = 'W244' || CIE10_3 = 'W244' || CIE10_4 = 'W244' || CIE10_5 = 'W244' || CIE10_6 = 'W244' || CIE10_7 = 'W244' || CIE10_8 = 'W244' || CIE10_9 = 'W244' || CIE10_10 = 'W244') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W245($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W245' || CIE10_2 = 'W245' || CIE10_3 = 'W245' || CIE10_4 = 'W245' || CIE10_5 = 'W245' || CIE10_6 = 'W245' || CIE10_7 = 'W245' || CIE10_8 = 'W245' || CIE10_9 = 'W245' || CIE10_10 = 'W245') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W246($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W246' || CIE10_2 = 'W246' || CIE10_3 = 'W246' || CIE10_4 = 'W246' || CIE10_5 = 'W246' || CIE10_6 = 'W246' || CIE10_7 = 'W246' || CIE10_8 = 'W246' || CIE10_9 = 'W246' || CIE10_10 = 'W246') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W247($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W247' || CIE10_2 = 'W247' || CIE10_3 = 'W247' || CIE10_4 = 'W247' || CIE10_5 = 'W247' || CIE10_6 = 'W247' || CIE10_7 = 'W247' || CIE10_8 = 'W247' || CIE10_9 = 'W247' || CIE10_10 = 'W247') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W248($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W248' || CIE10_2 = 'W248' || CIE10_3 = 'W248' || CIE10_4 = 'W248' || CIE10_5 = 'W248' || CIE10_6 = 'W248' || CIE10_7 = 'W248' || CIE10_8 = 'W248' || CIE10_9 = 'W248' || CIE10_10 = 'W248') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W249($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W249' || CIE10_2 = 'W249' || CIE10_3 = 'W249' || CIE10_4 = 'W249' || CIE10_5 = 'W249' || CIE10_6 = 'W249' || CIE10_7 = 'W249' || CIE10_8 = 'W249' || CIE10_9 = 'W249' || CIE10_10 = 'W249') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W250($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W250' || CIE10_2 = 'W250' || CIE10_3 = 'W250' || CIE10_4 = 'W250' || CIE10_5 = 'W250' || CIE10_6 = 'W250' || CIE10_7 = 'W250' || CIE10_8 = 'W250' || CIE10_9 = 'W250' || CIE10_10 = 'W250') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W251($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W251' || CIE10_2 = 'W251' || CIE10_3 = 'W251' || CIE10_4 = 'W251' || CIE10_5 = 'W251' || CIE10_6 = 'W251' || CIE10_7 = 'W251' || CIE10_8 = 'W251' || CIE10_9 = 'W251' || CIE10_10 = 'W251') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W252($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W252' || CIE10_2 = 'W252' || CIE10_3 = 'W252' || CIE10_4 = 'W252' || CIE10_5 = 'W252' || CIE10_6 = 'W252' || CIE10_7 = 'W252' || CIE10_8 = 'W252' || CIE10_9 = 'W252' || CIE10_10 = 'W252') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W253($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W253' || CIE10_2 = 'W253' || CIE10_3 = 'W253' || CIE10_4 = 'W253' || CIE10_5 = 'W253' || CIE10_6 = 'W253' || CIE10_7 = 'W253' || CIE10_8 = 'W253' || CIE10_9 = 'W253' || CIE10_10 = 'W253') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W254($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W254' || CIE10_2 = 'W254' || CIE10_3 = 'W254' || CIE10_4 = 'W254' || CIE10_5 = 'W254' || CIE10_6 = 'W254' || CIE10_7 = 'W254' || CIE10_8 = 'W254' || CIE10_9 = 'W254' || CIE10_10 = 'W254') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W255($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W255' || CIE10_2 = 'W255' || CIE10_3 = 'W255' || CIE10_4 = 'W255' || CIE10_5 = 'W255' || CIE10_6 = 'W255' || CIE10_7 = 'W255' || CIE10_8 = 'W255' || CIE10_9 = 'W255' || CIE10_10 = 'W255') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W256($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W256' || CIE10_2 = 'W256' || CIE10_3 = 'W256' || CIE10_4 = 'W256' || CIE10_5 = 'W256' || CIE10_6 = 'W256' || CIE10_7 = 'W256' || CIE10_8 = 'W256' || CIE10_9 = 'W256' || CIE10_10 = 'W256') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W257($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W257' || CIE10_2 = 'W257' || CIE10_3 = 'W257' || CIE10_4 = 'W257' || CIE10_5 = 'W257' || CIE10_6 = 'W257' || CIE10_7 = 'W257' || CIE10_8 = 'W257' || CIE10_9 = 'W257' || CIE10_10 = 'W257') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W258($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W258' || CIE10_2 = 'W258' || CIE10_3 = 'W258' || CIE10_4 = 'W258' || CIE10_5 = 'W258' || CIE10_6 = 'W258' || CIE10_7 = 'W258' || CIE10_8 = 'W258' || CIE10_9 = 'W258' || CIE10_10 = 'W258') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W259($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W259' || CIE10_2 = 'W259' || CIE10_3 = 'W259' || CIE10_4 = 'W259' || CIE10_5 = 'W259' || CIE10_6 = 'W259' || CIE10_7 = 'W259' || CIE10_8 = 'W259' || CIE10_9 = 'W259' || CIE10_10 = 'W259') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W260($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W260' || CIE10_2 = 'W260' || CIE10_3 = 'W260' || CIE10_4 = 'W260' || CIE10_5 = 'W260' || CIE10_6 = 'W260' || CIE10_7 = 'W260' || CIE10_8 = 'W260' || CIE10_9 = 'W260' || CIE10_10 = 'W260') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W261($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W261' || CIE10_2 = 'W261' || CIE10_3 = 'W261' || CIE10_4 = 'W261' || CIE10_5 = 'W261' || CIE10_6 = 'W261' || CIE10_7 = 'W261' || CIE10_8 = 'W261' || CIE10_9 = 'W261' || CIE10_10 = 'W261') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W262($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W262' || CIE10_2 = 'W262' || CIE10_3 = 'W262' || CIE10_4 = 'W262' || CIE10_5 = 'W262' || CIE10_6 = 'W262' || CIE10_7 = 'W262' || CIE10_8 = 'W262' || CIE10_9 = 'W262' || CIE10_10 = 'W262') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W263($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W263' || CIE10_2 = 'W263' || CIE10_3 = 'W263' || CIE10_4 = 'W263' || CIE10_5 = 'W263' || CIE10_6 = 'W263' || CIE10_7 = 'W263' || CIE10_8 = 'W263' || CIE10_9 = 'W263' || CIE10_10 = 'W263') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W264($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W264' || CIE10_2 = 'W264' || CIE10_3 = 'W264' || CIE10_4 = 'W264' || CIE10_5 = 'W264' || CIE10_6 = 'W264' || CIE10_7 = 'W264' || CIE10_8 = 'W264' || CIE10_9 = 'W264' || CIE10_10 = 'W264') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W265($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W265' || CIE10_2 = 'W265' || CIE10_3 = 'W265' || CIE10_4 = 'W265' || CIE10_5 = 'W265' || CIE10_6 = 'W265' || CIE10_7 = 'W265' || CIE10_8 = 'W265' || CIE10_9 = 'W265' || CIE10_10 = 'W265') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W266($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W266' || CIE10_2 = 'W266' || CIE10_3 = 'W266' || CIE10_4 = 'W266' || CIE10_5 = 'W266' || CIE10_6 = 'W266' || CIE10_7 = 'W266' || CIE10_8 = 'W266' || CIE10_9 = 'W266' || CIE10_10 = 'W266') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W267($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W267' || CIE10_2 = 'W267' || CIE10_3 = 'W267' || CIE10_4 = 'W267' || CIE10_5 = 'W267' || CIE10_6 = 'W267' || CIE10_7 = 'W267' || CIE10_8 = 'W267' || CIE10_9 = 'W267' || CIE10_10 = 'W267') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W268($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W268' || CIE10_2 = 'W268' || CIE10_3 = 'W268' || CIE10_4 = 'W268' || CIE10_5 = 'W268' || CIE10_6 = 'W268' || CIE10_7 = 'W268' || CIE10_8 = 'W268' || CIE10_9 = 'W268' || CIE10_10 = 'W268') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W269($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W269' || CIE10_2 = 'W269' || CIE10_3 = 'W269' || CIE10_4 = 'W269' || CIE10_5 = 'W269' || CIE10_6 = 'W269' || CIE10_7 = 'W269' || CIE10_8 = 'W269' || CIE10_9 = 'W269' || CIE10_10 = 'W269') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W270($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W270' || CIE10_2 = 'W270' || CIE10_3 = 'W270' || CIE10_4 = 'W270' || CIE10_5 = 'W270' || CIE10_6 = 'W270' || CIE10_7 = 'W270' || CIE10_8 = 'W270' || CIE10_9 = 'W270' || CIE10_10 = 'W270') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W271($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W271' || CIE10_2 = 'W271' || CIE10_3 = 'W271' || CIE10_4 = 'W271' || CIE10_5 = 'W271' || CIE10_6 = 'W271' || CIE10_7 = 'W271' || CIE10_8 = 'W271' || CIE10_9 = 'W271' || CIE10_10 = 'W271') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W272($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W272' || CIE10_2 = 'W272' || CIE10_3 = 'W272' || CIE10_4 = 'W272' || CIE10_5 = 'W272' || CIE10_6 = 'W272' || CIE10_7 = 'W272' || CIE10_8 = 'W272' || CIE10_9 = 'W272' || CIE10_10 = 'W272') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W273($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W273' || CIE10_2 = 'W273' || CIE10_3 = 'W273' || CIE10_4 = 'W273' || CIE10_5 = 'W273' || CIE10_6 = 'W273' || CIE10_7 = 'W273' || CIE10_8 = 'W273' || CIE10_9 = 'W273' || CIE10_10 = 'W273') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W274($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W274' || CIE10_2 = 'W274' || CIE10_3 = 'W274' || CIE10_4 = 'W274' || CIE10_5 = 'W274' || CIE10_6 = 'W274' || CIE10_7 = 'W274' || CIE10_8 = 'W274' || CIE10_9 = 'W274' || CIE10_10 = 'W274') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W275($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W275' || CIE10_2 = 'W275' || CIE10_3 = 'W275' || CIE10_4 = 'W275' || CIE10_5 = 'W275' || CIE10_6 = 'W275' || CIE10_7 = 'W275' || CIE10_8 = 'W275' || CIE10_9 = 'W275' || CIE10_10 = 'W275') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W276($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W276' || CIE10_2 = 'W276' || CIE10_3 = 'W276' || CIE10_4 = 'W276' || CIE10_5 = 'W276' || CIE10_6 = 'W276' || CIE10_7 = 'W276' || CIE10_8 = 'W276' || CIE10_9 = 'W276' || CIE10_10 = 'W276') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W277($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W277' || CIE10_2 = 'W277' || CIE10_3 = 'W277' || CIE10_4 = 'W277' || CIE10_5 = 'W277' || CIE10_6 = 'W277' || CIE10_7 = 'W277' || CIE10_8 = 'W277' || CIE10_9 = 'W277' || CIE10_10 = 'W277') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W278($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W278' || CIE10_2 = 'W278' || CIE10_3 = 'W278' || CIE10_4 = 'W278' || CIE10_5 = 'W278' || CIE10_6 = 'W278' || CIE10_7 = 'W278' || CIE10_8 = 'W278' || CIE10_9 = 'W278' || CIE10_10 = 'W278') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W279($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W279' || CIE10_2 = 'W279' || CIE10_3 = 'W279' || CIE10_4 = 'W279' || CIE10_5 = 'W279' || CIE10_6 = 'W279' || CIE10_7 = 'W279' || CIE10_8 = 'W279' || CIE10_9 = 'W279' || CIE10_10 = 'W279') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W280($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W280' || CIE10_2 = 'W280' || CIE10_3 = 'W280' || CIE10_4 = 'W280' || CIE10_5 = 'W280' || CIE10_6 = 'W280' || CIE10_7 = 'W280' || CIE10_8 = 'W280' || CIE10_9 = 'W280' || CIE10_10 = 'W280') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W281($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W281' || CIE10_2 = 'W281' || CIE10_3 = 'W281' || CIE10_4 = 'W281' || CIE10_5 = 'W281' || CIE10_6 = 'W281' || CIE10_7 = 'W281' || CIE10_8 = 'W281' || CIE10_9 = 'W281' || CIE10_10 = 'W281') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W282($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W282' || CIE10_2 = 'W282' || CIE10_3 = 'W282' || CIE10_4 = 'W282' || CIE10_5 = 'W282' || CIE10_6 = 'W282' || CIE10_7 = 'W282' || CIE10_8 = 'W282' || CIE10_9 = 'W282' || CIE10_10 = 'W282') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W283($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W283' || CIE10_2 = 'W283' || CIE10_3 = 'W283' || CIE10_4 = 'W283' || CIE10_5 = 'W283' || CIE10_6 = 'W283' || CIE10_7 = 'W283' || CIE10_8 = 'W283' || CIE10_9 = 'W283' || CIE10_10 = 'W283') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W284($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W284' || CIE10_2 = 'W284' || CIE10_3 = 'W284' || CIE10_4 = 'W284' || CIE10_5 = 'W284' || CIE10_6 = 'W284' || CIE10_7 = 'W284' || CIE10_8 = 'W284' || CIE10_9 = 'W284' || CIE10_10 = 'W284') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W285($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W285' || CIE10_2 = 'W285' || CIE10_3 = 'W285' || CIE10_4 = 'W285' || CIE10_5 = 'W285' || CIE10_6 = 'W285' || CIE10_7 = 'W285' || CIE10_8 = 'W285' || CIE10_9 = 'W285' || CIE10_10 = 'W285') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W286($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W286' || CIE10_2 = 'W286' || CIE10_3 = 'W286' || CIE10_4 = 'W286' || CIE10_5 = 'W286' || CIE10_6 = 'W286' || CIE10_7 = 'W286' || CIE10_8 = 'W286' || CIE10_9 = 'W286' || CIE10_10 = 'W286') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W287($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W287' || CIE10_2 = 'W287' || CIE10_3 = 'W287' || CIE10_4 = 'W287' || CIE10_5 = 'W287' || CIE10_6 = 'W287' || CIE10_7 = 'W287' || CIE10_8 = 'W287' || CIE10_9 = 'W287' || CIE10_10 = 'W287') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W288($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W288' || CIE10_2 = 'W288' || CIE10_3 = 'W288' || CIE10_4 = 'W288' || CIE10_5 = 'W288' || CIE10_6 = 'W288' || CIE10_7 = 'W288' || CIE10_8 = 'W288' || CIE10_9 = 'W288' || CIE10_10 = 'W288') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W289($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W289' || CIE10_2 = 'W289' || CIE10_3 = 'W289' || CIE10_4 = 'W289' || CIE10_5 = 'W289' || CIE10_6 = 'W289' || CIE10_7 = 'W289' || CIE10_8 = 'W289' || CIE10_9 = 'W289' || CIE10_10 = 'W289') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W290($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W290' || CIE10_2 = 'W290' || CIE10_3 = 'W290' || CIE10_4 = 'W290' || CIE10_5 = 'W290' || CIE10_6 = 'W290' || CIE10_7 = 'W290' || CIE10_8 = 'W290' || CIE10_9 = 'W290' || CIE10_10 = 'W290') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W291($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W291' || CIE10_2 = 'W291' || CIE10_3 = 'W291' || CIE10_4 = 'W291' || CIE10_5 = 'W291' || CIE10_6 = 'W291' || CIE10_7 = 'W291' || CIE10_8 = 'W291' || CIE10_9 = 'W291' || CIE10_10 = 'W291') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W292($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W292' || CIE10_2 = 'W292' || CIE10_3 = 'W292' || CIE10_4 = 'W292' || CIE10_5 = 'W292' || CIE10_6 = 'W292' || CIE10_7 = 'W292' || CIE10_8 = 'W292' || CIE10_9 = 'W292' || CIE10_10 = 'W292') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W293($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W293' || CIE10_2 = 'W293' || CIE10_3 = 'W293' || CIE10_4 = 'W293' || CIE10_5 = 'W293' || CIE10_6 = 'W293' || CIE10_7 = 'W293' || CIE10_8 = 'W293' || CIE10_9 = 'W293' || CIE10_10 = 'W293') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W294($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W294' || CIE10_2 = 'W294' || CIE10_3 = 'W294' || CIE10_4 = 'W294' || CIE10_5 = 'W294' || CIE10_6 = 'W294' || CIE10_7 = 'W294' || CIE10_8 = 'W294' || CIE10_9 = 'W294' || CIE10_10 = 'W294') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W295($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W295' || CIE10_2 = 'W295' || CIE10_3 = 'W295' || CIE10_4 = 'W295' || CIE10_5 = 'W295' || CIE10_6 = 'W295' || CIE10_7 = 'W295' || CIE10_8 = 'W295' || CIE10_9 = 'W295' || CIE10_10 = 'W295') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W296($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W296' || CIE10_2 = 'W296' || CIE10_3 = 'W296' || CIE10_4 = 'W296' || CIE10_5 = 'W296' || CIE10_6 = 'W296' || CIE10_7 = 'W296' || CIE10_8 = 'W296' || CIE10_9 = 'W296' || CIE10_10 = 'W296') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W297($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W297' || CIE10_2 = 'W297' || CIE10_3 = 'W297' || CIE10_4 = 'W297' || CIE10_5 = 'W297' || CIE10_6 = 'W297' || CIE10_7 = 'W297' || CIE10_8 = 'W297' || CIE10_9 = 'W297' || CIE10_10 = 'W297') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W298($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W298' || CIE10_2 = 'W298' || CIE10_3 = 'W298' || CIE10_4 = 'W298' || CIE10_5 = 'W298' || CIE10_6 = 'W298' || CIE10_7 = 'W298' || CIE10_8 = 'W298' || CIE10_9 = 'W298' || CIE10_10 = 'W298') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W299($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W299' || CIE10_2 = 'W299' || CIE10_3 = 'W299' || CIE10_4 = 'W299' || CIE10_5 = 'W299' || CIE10_6 = 'W299' || CIE10_7 = 'W299' || CIE10_8 = 'W299' || CIE10_9 = 'W299' || CIE10_10 = 'W299') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W300($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W300' || CIE10_2 = 'W300' || CIE10_3 = 'W300' || CIE10_4 = 'W300' || CIE10_5 = 'W300' || CIE10_6 = 'W300' || CIE10_7 = 'W300' || CIE10_8 = 'W300' || CIE10_9 = 'W300' || CIE10_10 = 'W300') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W301($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W301' || CIE10_2 = 'W301' || CIE10_3 = 'W301' || CIE10_4 = 'W301' || CIE10_5 = 'W301' || CIE10_6 = 'W301' || CIE10_7 = 'W301' || CIE10_8 = 'W301' || CIE10_9 = 'W301' || CIE10_10 = 'W301') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W302($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W302' || CIE10_2 = 'W302' || CIE10_3 = 'W302' || CIE10_4 = 'W302' || CIE10_5 = 'W302' || CIE10_6 = 'W302' || CIE10_7 = 'W302' || CIE10_8 = 'W302' || CIE10_9 = 'W302' || CIE10_10 = 'W302') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W303($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W303' || CIE10_2 = 'W303' || CIE10_3 = 'W303' || CIE10_4 = 'W303' || CIE10_5 = 'W303' || CIE10_6 = 'W303' || CIE10_7 = 'W303' || CIE10_8 = 'W303' || CIE10_9 = 'W303' || CIE10_10 = 'W303') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W304($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W304' || CIE10_2 = 'W304' || CIE10_3 = 'W304' || CIE10_4 = 'W304' || CIE10_5 = 'W304' || CIE10_6 = 'W304' || CIE10_7 = 'W304' || CIE10_8 = 'W304' || CIE10_9 = 'W304' || CIE10_10 = 'W304') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W305($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W305' || CIE10_2 = 'W305' || CIE10_3 = 'W305' || CIE10_4 = 'W305' || CIE10_5 = 'W305' || CIE10_6 = 'W305' || CIE10_7 = 'W305' || CIE10_8 = 'W305' || CIE10_9 = 'W305' || CIE10_10 = 'W305') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W306($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W306' || CIE10_2 = 'W306' || CIE10_3 = 'W306' || CIE10_4 = 'W306' || CIE10_5 = 'W306' || CIE10_6 = 'W306' || CIE10_7 = 'W306' || CIE10_8 = 'W306' || CIE10_9 = 'W306' || CIE10_10 = 'W306') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W307($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W307' || CIE10_2 = 'W307' || CIE10_3 = 'W307' || CIE10_4 = 'W307' || CIE10_5 = 'W307' || CIE10_6 = 'W307' || CIE10_7 = 'W307' || CIE10_8 = 'W307' || CIE10_9 = 'W307' || CIE10_10 = 'W307') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W308($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W308' || CIE10_2 = 'W308' || CIE10_3 = 'W308' || CIE10_4 = 'W308' || CIE10_5 = 'W308' || CIE10_6 = 'W308' || CIE10_7 = 'W308' || CIE10_8 = 'W308' || CIE10_9 = 'W308' || CIE10_10 = 'W308') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W309($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W309' || CIE10_2 = 'W309' || CIE10_3 = 'W309' || CIE10_4 = 'W309' || CIE10_5 = 'W309' || CIE10_6 = 'W309' || CIE10_7 = 'W309' || CIE10_8 = 'W309' || CIE10_9 = 'W309' || CIE10_10 = 'W309') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W310($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W310' || CIE10_2 = 'W310' || CIE10_3 = 'W310' || CIE10_4 = 'W310' || CIE10_5 = 'W310' || CIE10_6 = 'W310' || CIE10_7 = 'W310' || CIE10_8 = 'W310' || CIE10_9 = 'W310' || CIE10_10 = 'W310') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W311($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W311' || CIE10_2 = 'W311' || CIE10_3 = 'W311' || CIE10_4 = 'W311' || CIE10_5 = 'W311' || CIE10_6 = 'W311' || CIE10_7 = 'W311' || CIE10_8 = 'W311' || CIE10_9 = 'W311' || CIE10_10 = 'W311') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W312($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W312' || CIE10_2 = 'W312' || CIE10_3 = 'W312' || CIE10_4 = 'W312' || CIE10_5 = 'W312' || CIE10_6 = 'W312' || CIE10_7 = 'W312' || CIE10_8 = 'W312' || CIE10_9 = 'W312' || CIE10_10 = 'W312') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W313($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W313' || CIE10_2 = 'W313' || CIE10_3 = 'W313' || CIE10_4 = 'W313' || CIE10_5 = 'W313' || CIE10_6 = 'W313' || CIE10_7 = 'W313' || CIE10_8 = 'W313' || CIE10_9 = 'W313' || CIE10_10 = 'W313') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W314($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W314' || CIE10_2 = 'W314' || CIE10_3 = 'W314' || CIE10_4 = 'W314' || CIE10_5 = 'W314' || CIE10_6 = 'W314' || CIE10_7 = 'W314' || CIE10_8 = 'W314' || CIE10_9 = 'W314' || CIE10_10 = 'W314') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W315($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W315' || CIE10_2 = 'W315' || CIE10_3 = 'W315' || CIE10_4 = 'W315' || CIE10_5 = 'W315' || CIE10_6 = 'W315' || CIE10_7 = 'W315' || CIE10_8 = 'W315' || CIE10_9 = 'W315' || CIE10_10 = 'W315') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W316($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W316' || CIE10_2 = 'W316' || CIE10_3 = 'W316' || CIE10_4 = 'W316' || CIE10_5 = 'W316' || CIE10_6 = 'W316' || CIE10_7 = 'W316' || CIE10_8 = 'W316' || CIE10_9 = 'W316' || CIE10_10 = 'W316') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W317($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W317' || CIE10_2 = 'W317' || CIE10_3 = 'W317' || CIE10_4 = 'W317' || CIE10_5 = 'W317' || CIE10_6 = 'W317' || CIE10_7 = 'W317' || CIE10_8 = 'W317' || CIE10_9 = 'W317' || CIE10_10 = 'W317') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W318($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W318' || CIE10_2 = 'W318' || CIE10_3 = 'W318' || CIE10_4 = 'W318' || CIE10_5 = 'W318' || CIE10_6 = 'W318' || CIE10_7 = 'W318' || CIE10_8 = 'W318' || CIE10_9 = 'W318' || CIE10_10 = 'W318') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W319($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W319' || CIE10_2 = 'W319' || CIE10_3 = 'W319' || CIE10_4 = 'W319' || CIE10_5 = 'W319' || CIE10_6 = 'W319' || CIE10_7 = 'W319' || CIE10_8 = 'W319' || CIE10_9 = 'W319' || CIE10_10 = 'W319') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W23($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W23' || CIE10_2 = 'W23' || CIE10_3 = 'W23' || CIE10_4 = 'W23' || CIE10_5 = 'W23' || CIE10_6 = 'W23' || CIE10_7 = 'W23' || CIE10_8 = 'W23' || CIE10_9 = 'W23' || CIE10_10 = 'W23') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W24($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W24' || CIE10_2 = 'W24' || CIE10_3 = 'W24' || CIE10_4 = 'W24' || CIE10_5 = 'W24' || CIE10_6 = 'W24' || CIE10_7 = 'W24' || CIE10_8 = 'W24' || CIE10_9 = 'W24' || CIE10_10 = 'W24') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W25($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W25' || CIE10_2 = 'W25' || CIE10_3 = 'W25' || CIE10_4 = 'W25' || CIE10_5 = 'W25' || CIE10_6 = 'W25' || CIE10_7 = 'W25' || CIE10_8 = 'W25' || CIE10_9 = 'W25' || CIE10_10 = 'W25') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W26($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W26' || CIE10_2 = 'W26' || CIE10_3 = 'W26' || CIE10_4 = 'W26' || CIE10_5 = 'W26' || CIE10_6 = 'W26' || CIE10_7 = 'W26' || CIE10_8 = 'W26' || CIE10_9 = 'W26' || CIE10_10 = 'W26') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W27($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W27' || CIE10_2 = 'W27' || CIE10_3 = 'W27' || CIE10_4 = 'W27' || CIE10_5 = 'W27' || CIE10_6 = 'W27' || CIE10_7 = 'W27' || CIE10_8 = 'W27' || CIE10_9 = 'W27' || CIE10_10 = 'W27') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W28($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W28' || CIE10_2 = 'W28' || CIE10_3 = 'W28' || CIE10_4 = 'W28' || CIE10_5 = 'W28' || CIE10_6 = 'W28' || CIE10_7 = 'W28' || CIE10_8 = 'W28' || CIE10_9 = 'W28' || CIE10_10 = 'W28') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W29($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W29' || CIE10_2 = 'W29' || CIE10_3 = 'W29' || CIE10_4 = 'W29' || CIE10_5 = 'W29' || CIE10_6 = 'W29' || CIE10_7 = 'W29' || CIE10_8 = 'W29' || CIE10_9 = 'W29' || CIE10_10 = 'W29') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W30($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W30' || CIE10_2 = 'W30' || CIE10_3 = 'W30' || CIE10_4 = 'W30' || CIE10_5 = 'W30' || CIE10_6 = 'W30' || CIE10_7 = 'W30' || CIE10_8 = 'W30' || CIE10_9 = 'W30' || CIE10_10 = 'W30') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
public static function W31($conexion) {
$Razon = $_SESSION['Razon']; $Tipo1 = $_SESSION['Tipo1']; $Tipo2 = $_SESSION['Tipo2']; $Tipo3 = $_SESSION['Tipo3']; $Tipo4 = $_SESSION['Tipo4']; $Tipo5 = $_SESSION['Tipo5']; $Tipo6 = $_SESSION['Tipo6']; $Tipo7 = $_SESSION['Tipo7']; $Tipo8 = $_SESSION['Tipo8']; $Tipo9 = $_SESSION['Tipo9']; $Tipo10 = $_SESSION['Tipo10']; $Tipo11 = $_SESSION['Tipo11'];
$total_usuarios = null; 
if (isset($conexion)) {
    $sql = "SELECT COUNT(*) as total FROM general2 WHERE (CIE10_1 = 'W31' || CIE10_2 = 'W31' || CIE10_3 = 'W31' || CIE10_4 = 'W31' || CIE10_5 = 'W31' || CIE10_6 = 'W31' || CIE10_7 = 'W31' || CIE10_8 = 'W31' || CIE10_9 = 'W31' || CIE10_10 = 'W31') && Certificado = '$Razon' && (Tipo_examen = '$Tipo1' || Tipo_examen = '$Tipo2' || Tipo_examen = '$Tipo3' || Tipo_examen = '$Tipo4' || Tipo_examen = '$Tipo5' || Tipo_examen = '$Tipo6' || Tipo_examen = '$Tipo7' || Tipo_examen = '$Tipo8' || Tipo_examen = '$Tipo9'  || Tipo_examen = '$Tipo10'  || Tipo_examen = '$Tipo11')";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetch();
            $total_usuarios = $resultado['total'];
}
return $total_usuarios; }
}    
    