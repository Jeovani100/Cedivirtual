<?php
header('Content-Type: application/json; charset=utf-8');

try {
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => 'Error de conexión']);
    exit;
}

$id  = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$obs = isset($_POST['observacion']) ? trim($_POST['observacion']) : '';

if ($id <= 0 || $obs === '') {
    echo json_encode(['ok' => false, 'error' => 'Datos incompletos']);
    exit;
}

try {
    $stmt = $connect->prepare("UPDATE notas SET Observacion = :obs WHERE id = :id");
    $stmt->execute([':obs' => $obs, ':id' => $id]);
    echo json_encode(['ok' => true]);
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
}