<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if (isset($_POST['id_admin']) && isset($_POST['nombre_original']) && isset($_POST['nombre_nuevo'])) {
    $id_admin = $_POST['id_admin'];
    $nombre_original = $_POST['nombre_original'];
    $nombre_nuevo = $_POST['nombre_nuevo'];
    
    // Actualizar el centro de costo
    $sql = "UPDATE auditivo SET Empresa_certificada = '$nombre_nuevo' 
            WHERE id_admin = '$id_admin' AND Empresa_certificada = '$nombre_original'";
    
    if ($mysqli->query($sql)) {
        echo json_encode(['success' => true, 'mensaje' => 'Centro de costo actualizado']);
    } else {
        echo json_encode(['success' => false, 'mensaje' => 'Error al actualizar: ' . $mysqli->error]);
    }
} else {
    echo json_encode(['success' => false, 'mensaje' => 'Datos incompletos']);
}
?>