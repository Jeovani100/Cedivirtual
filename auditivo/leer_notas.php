<?php
// leer_notas.php

header('Content-Type: application/json; charset=utf-8');

// ========== CONEXIÓN ==========
try {
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => 'Error de conexión']);
    exit;
}

// ========== RECIBIR PARÁMETROS ==========
$Codigo = isset($_POST['Codigo']) ? trim($_POST['Codigo']) : '';
$Pve    = isset($_POST['Pve'])    ? trim($_POST['Pve'])    : '';

if ($Codigo === '') {
    echo json_encode(['ok' => false, 'error' => 'Código no recibido']);
    exit;
}
if ($Pve === '') {
    echo json_encode(['ok' => false, 'error' => 'Pve no recibido']);
    exit;
}

try {

    // ========== 1) LISTADO DE NOTAS ==========
    $sql = "SELECT id, id_admin, Pve, Nota, Diligenciada, Observacion, Fecha_registro 
            FROM notas 
            WHERE id_admin = :id_admin 
              AND Pve = :pve
            ORDER BY Fecha_registro DESC";
    $stmt = $connect->prepare($sql);
    $stmt->execute([
        ':id_admin' => $Codigo,
        ':pve'      => $Pve
    ]);
    $notas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ========== 2) CONTEO TOTAL Y CONTEO DE PENDIENTES ==========
    $sqlConteo = "SELECT 
                    COUNT(*) AS total,
                    SUM(CASE WHEN Diligenciada = 0 THEN 1 ELSE 0 END) AS pendientes
                  FROM notas 
                  WHERE id_admin = :id_admin 
                    AND Pve = :pve";
    $stmtConteo = $connect->prepare($sqlConteo);
    $stmtConteo->execute([
        ':id_admin' => $Codigo,
        ':pve'      => $Pve
    ]);
    $conteo = $stmtConteo->fetch(PDO::FETCH_ASSOC);

    // Si no hay filas, SUM devuelve NULL → lo forzamos a 0
    $total      = (int)($conteo['total']      ?? 0);
    $pendientes = (int)($conteo['pendientes'] ?? 0);

    // ========== 3) RESPUESTA ==========
    echo json_encode([
        'ok'         => true,
        'total'      => $total,        // todas las notas (id_admin + Pve)
        'pendientes' => $pendientes,   // solo Diligenciada = 0
        'notas'      => $notas
    ]);

} catch (PDOException $e) {
    echo json_encode(['ok' => false, 'error' => 'Error al consultar: ' . $e->getMessage()]);
}