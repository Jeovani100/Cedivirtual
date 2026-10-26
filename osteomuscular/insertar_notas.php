<?php
// insertar_notas.php

header('Content-Type: application/json; charset=utf-8');

// Conexión (la que ya usas)
try {
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => 'Error de conexión']);
    exit;
}

// Recibir datos
$Codigo = isset($_POST['Codigo']) ? trim($_POST['Codigo']) : '';
$notas  = isset($_POST['notas'])  ? trim($_POST['notas'])  : '';
$pve    = isset($_POST['Pve'])    ? (int)$_POST['Pve']     : 0;

// Validar
if ($Codigo === '' || $notas === '' || $pve <= 0) {
    echo json_encode(['ok' => false, 'error' => 'Datos incompletos']);
    exit;
}

// Insertar
try {
    $sql = "INSERT INTO notas (id_admin, Pve, Nota, Diligenciada, Observacion, Fecha_registro) 
            VALUES (:id_admin, :pve, :nota, 0, '', NOW())";
    $stmt = $connect->prepare($sql);
    $stmt->execute([
        ':id_admin' => $Codigo,
        ':pve'      => $pve,
        ':nota'     => $notas
    ]);

    echo json_encode([
        'ok' => true,
        'id' => $connect->lastInsertId()
    ]);
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => 'Error al insertar: ' . $e->getMessage()]);
}