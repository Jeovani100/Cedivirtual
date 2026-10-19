<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['modulos'])) {
   $Codigo = $_POST['modulos'];
   $sql = "DELETE FROM modulos WHERE Codigo = '$Codigo'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P'])) {
   $id = $_POST['id_P'];
   $sql = "DELETE FROM planificacion WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P2'])) {
   $id = $_POST['id_P2'];
   $sql = "DELETE FROM planificacion2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P3'])) {
   $id = $_POST['id_P3'];
   $sql = "DELETE FROM planificacion3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P4'])) {
   $id = $_POST['id_P4'];
   $sql = "DELETE FROM planificacion4 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P5'])) {
   $id = $_POST['id_P5'];
   $sql = "DELETE FROM planificacion5 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_P6'])) {
   $id = $_POST['id_P6'];
   $sql = "DELETE FROM planificacion6 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I'])) {
   $id = $_POST['id_I'];
   $sql = "DELETE FROM implementacion WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I2'])) {
   $id = $_POST['id_I2'];
   $sql = "DELETE FROM implementacion2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I3'])) {
   $id = $_POST['id_I3'];
   $sql = "DELETE FROM implementacion3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I4'])) {
   $id = $_POST['id_I4'];
   $sql = "DELETE FROM implementacion4 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I5'])) {
   $id = $_POST['id_I5'];
   $sql = "DELETE FROM implementacion5 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_I6'])) {
   $id = $_POST['id_I6'];
   $sql = "DELETE FROM implementacion6 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H'])) {
   $id = $_POST['id_H'];
   $sql = "DELETE FROM hacer WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H2'])) {
   $id = $_POST['id_H2'];
   $sql = "DELETE FROM hacer2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H3'])) {
   $id = $_POST['id_H3'];
   $sql = "DELETE FROM hacer3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H4'])) {
   $id = $_POST['id_H4'];
   $sql = "DELETE FROM hacer4 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H5'])) {
   $id = $_POST['id_H5'];
   $sql = "DELETE FROM hacer5 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_H6'])) {
   $id = $_POST['id_H6'];
   $sql = "DELETE FROM hacer6 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V'])) {
   $id = $_POST['id_V'];
   $sql = "DELETE FROM verificacion WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V2'])) {
   $id = $_POST['id_V2'];
   $sql = "DELETE FROM verificacion2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V3'])) {
   $id = $_POST['id_V3'];
   $sql = "DELETE FROM verificacion3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V4'])) {
   $id = $_POST['id_V4'];
   $sql = "DELETE FROM verificacion4 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V5'])) {
   $id = $_POST['id_V5'];
   $sql = "DELETE FROM verificacion5 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_V6'])) {
   $id = $_POST['id_V6'];
   $sql = "DELETE FROM verificacion6 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A'])) {
   $id = $_POST['id_A'];
   $sql = "DELETE FROM auditoria WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A2'])) {
   $id = $_POST['id_A2'];
   $sql = "DELETE FROM auditoria2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A3'])) {
   $id = $_POST['id_A3'];
   $sql = "DELETE FROM auditoria3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A4'])) {
   $id = $_POST['id_A4'];
   $sql = "DELETE FROM auditoria4 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A5'])) {
   $id = $_POST['id_A5'];
   $sql = "DELETE FROM auditoria5 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_A6'])) {
   $id = $_POST['id_A6'];
   $sql = "DELETE FROM auditoria6 WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_In'])) {
   $id = $_POST['id_In'];
   $sql = "DELETE FROM indicadores_audio WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_R'])) {
   $id = $_POST['id_R'];
   $Extension = $_POST['Extension'];
   $sql = "DELETE FROM recursos WHERE Codigo = '$id'";  
   $result = $mysqli->query($sql);
   unlink('files_recursos/'.$id.'.'.$Extension);
}
if(isset($_POST['id_R_F'])) {
   $id = $_POST['id_R_F'];
   $Extension = $_POST['Extension'];
   $sql = "DELETE FROM recursos_formacion WHERE Codigo = '$id'"; 
   $result = $mysqli->query($sql);
   unlink('files_recursos/'.$id.'.'.$Extension);
}
if(isset($_POST['id_reporte'])) {
   $id = $_POST['id_reporte'];
   $sql = "DELETE FROM auditivo WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['Codigo_img'])) {
   $Codigo_img = $_POST['Codigo_img'];
   $sql = "DELETE FROM controles_img WHERE Codigo = '$Codigo_img'"; 
   $result = $mysqli->query($sql);
   unlink('listas/'.$Codigo_img);
   unlink('imagine/'.$Codigo_img);
}
if(isset($_POST['id_G_auditivo'])) {
   $id_G = $_POST['id_G_auditivo'];
   $sql = "DELETE FROM grupoges_auditivo WHERE id = '$id_G'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_G_visual'])) {
   $id_G = $_POST['id_G_visual'];
   $sql = "DELETE FROM grupoges_visual WHERE id = '$id_G'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['Codigo_doc'])) {
   $Codigo_doc = $_POST['Codigo_doc'];
   $sql = "DELETE FROM controles_doc WHERE id = $Codigo_doc"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_notificacion'])) {
   $id_notificacion = $_POST['id_notificacion'];
   $sql = "SELECT * FROM notificaciones WHERE id = $id_notificacion";
   $resultado = $mysqli->query($sql);
   $row = $resultado->fetch_array(MYSQLI_ASSOC);
   $Eliminar0 = $row['Eliminar'];
   if ($Eliminar0 == 1) {
       $Eliminar = 0;
   } else {
       $Eliminar = 1;
   }
   $sql = "UPDATE notificaciones SET Eliminar = $Eliminar WHERE id = $id_notificacion";
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_notificacion2'])) {
   $id_notificacion2 = $_POST['id_notificacion2'];
   $sql = "DELETE FROM notificaciones WHERE Eliminar = $id_notificacion2"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_cardio'])) {
   $id_cardio = $_POST['id_cardio'];
   $sql = "DELETE FROM cronograma_cardio WHERE id = $id_cardio"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_audio'])) {
   $id_in_audio = $_POST['id_in_audio'];
   $sql = "DELETE FROM indicadores_audio WHERE id = $id_in_audio"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_visual'])) {
   $id_in_visual = $_POST['id_in_visual'];
   $sql = "DELETE FROM indicadores_visual WHERE id = $id_in_visual"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_cardio'])) {
   $id_in_cardio = $_POST['id_in_cardio'];
   $sql = "DELETE FROM indicadores_cardio WHERE id = $id_in_cardio"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_osteo'])) {
   $id_in_osteo = $_POST['id_in_osteo'];
   $sql = "DELETE FROM indicadores_osteo WHERE id = $id_in_osteo"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_respiratorio'])) {
   $id_in_respiratorio = $_POST['id_in_respiratorio'];
   $sql = "DELETE FROM indicadores_respiratorio WHERE id = $id_in_respiratorio"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_in_psicosocial'])) {
   $id_in_psicosocial = $_POST['id_in_psicosocial'];
   $sql = "DELETE FROM indicadores_psicosocial WHERE id = $id_in_psicosocial"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_t'])) {
   $id_t = $_POST['id_t'];
   $sql = "DELETE FROM auditivo WHERE id = $id_t"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_t_a'])) {
   $id_t_a = $_POST['id_t_a'];
   $sql = "DELETE FROM visual WHERE id = $id_t_a"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_t_c'])) {
   $id_t_c = $_POST['id_t_c'];
   $sql = "DELETE FROM cardiovascular WHERE id = $id_t_c"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_r3'])) {
   $id_r3 = $_POST['id_r3'];
   $sql = "DELETE FROM respiratorio3 WHERE id = $id_r3"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_G_osteo'])) {
   $id_G_osteo = $_POST['id_G_osteo'];
   $sql = "DELETE FROM grupoges_osteo WHERE id = $id_G_osteo"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_G_respiratorio'])) {
   $id_G = $_POST['id_G_respiratorio'];
   $sql = "DELETE FROM grupoges_respiratorio WHERE id = '$id_G'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_G_psicosocial'])) {
   $id_G = $_POST['id_G_psicosocial'];
   $sql = "DELETE FROM grupoges_psicosocial WHERE id = '$id_G'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['Cargo'])) {
    $Cargo = $_POST['Cargo'];
    $id_admin = $_POST['id_admin'];
    
    $sql = "DELETE FROM profesiograma_agenda WHERE id_admin = $id_admin && Cargo = '$Cargo'";
    
    if ($mysqli->query($sql)) {
        if ($mysqli->affected_rows > 0) {
            echo json_encode(['success' => true, 'message' => 'Cargo eliminado correctamente']);
        } else {
            echo json_encode(['success' => false, 'message' => 'El cargo no existe']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar: ' . $mysqli->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No se recibió el ID del cargo']);
}

$mysqli->close();
?>