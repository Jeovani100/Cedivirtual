<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

if(isset($_POST['modulo'])) {
   $Modulo = $_POST['modulo'];
   $Codigo = $_POST['Codigo'];
   $sql = "DELETE FROM controles_modulos WHERE id_admin = '$Codigo' && Modulo = '$Modulo'"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id'])) {
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $extension = $_POST['extension'];
   $sql = "DELETE FROM folder WHERE id = $id"; 
   $result = $mysqli->query($sql);
   unlink('files/'.$nombre.'.'.$extension);
}
if(isset($_POST['id_empleado'])) {
   $id = $_POST['id_empleado'];
   $codigo = $_POST['codigo'];
   $extension = $_POST['extension'];
   $sql = "DELETE FROM datosg WHERE id = $id"; 
   $result = $mysqli->query($sql);
   unlink('empleados/'.$codigo.'.'.$extension);
}
if(isset($_POST['id_cliente'])) {
   $id = $_POST['id_cliente'];
   $sql = "DELETE FROM admin WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_empleado2'])) {
   $id = $_POST['id_empleado2'];
   $sql = "DELETE FROM reg_ausentismo WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['delete_id_urna'])) {
   $id = $_POST['delete_id_urna'];
   $sql = "DELETE FROM urna WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_doc_empl_cap'])) {
    $id_documento = $_POST['id_doc_empl_cap'];
    $Archivo = $_POST['Archivo'];
    $sql = "DELETE FROM folder_empl_capa WHERE id = '$id_documento'"; 
    $result = $mysqli->query($sql);
    unlink('files_empl_capac/'.$Archivo);
};
if(isset($_POST['id_capacitacion'])) {
   $id_capacitacion = $_POST['id_capacitacion'];
   $sql = "DELETE FROM capacitacion WHERE id = $id_capacitacion"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_doc2'])) {
   $id_doc2 = $_POST['id_doc2'];
   $sql = "DELETE FROM controles_doc2 WHERE id = $id_doc2"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_cargo'])) {
   $id_cargo = $_POST['id_cargo'];
   $sql = "DELETE FROM controles_cargo WHERE id = $id_cargo"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_turnero'])) {
   $id_turnero = $_POST['id_turnero'];
   $sql = "DELETE FROM turnero WHERE id = $id_turnero"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_turnero2'])) {
   $id_turnero = $_POST['id_turnero2'];
   $sql = "DELETE FROM turnero2 WHERE id = $id_turnero"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_empleado2'])) {
   $id = $_POST['id_empleado2'];
   $sql = "DELETE FROM empleados WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_empleado'])) {
   $eliminar_empleado = $_POST['eliminar_empleado'];
   $sql = "DELETE FROM asistencia WHERE id =$eliminar_empleado"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_documento'])) {
   $id = $_POST['id_documento'];
   $Archivo = $_POST['Archivo'];
   $sql = "DELETE FROM controles_doc WHERE id = $id"; 
   $result = $mysqli->query($sql);
   unlink('files/'.$Archivo);
}
if(isset($_POST['id_documento2'])) {
   $id = $_POST['id_documento2'];
   $Archivo = $_POST['Archivo2'];
   $sql = "DELETE FROM controles_doc2 WHERE id = $id"; 
   $result = $mysqli->query($sql);
   unlink('files/'.$Archivo);
}
if(isset($_POST['id_documento3'])) {
   $id = $_POST['id_documento3'];
   $Archivo = $_POST['Archivo3'];
   $sql = "DELETE FROM controles_doc3 WHERE id = $id"; 
   $result = $mysqli->query($sql);
   unlink('files/'.$Archivo);
}
if(isset($_POST['delete_id'])) {
    $id=$_POST["delete_id"];
    $Tema=$_POST["delete_tema"];
    $sql = "SELECT * FROM capacitacion WHERE id = $Tema LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Preguntas = $row['Preguntas'];
    $Cantidad =  --$Preguntas;
    $sql = "UPDATE capacitacion SET Preguntas = $Cantidad WHERE id = $Tema";
    $result = $mysqli->query($sql);
    $sql = "DELETE FROM preguntas WHERE id = $id"; 
    $result = $mysqli->query($sql);
}
if(isset($_POST['delete_respuesta'])) {
   $id = $_POST['delete_respuesta'];
   $sql = "DELETE FROM respuestas WHERE id = $id"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id2'])) {
    $id = $_POST['id2'];
    $sql = "SELECT * FROM asistencia WHERE id = $id";
    $resultado = $mysqli->query($sql);
    $row2 = $resultado->fetch_array(MYSQLI_ASSOC);
    $Intentos_ = $row2['Intentos'];

}
if(isset($_POST['id_pregunta'])) {
   $id = $_POST['id_pregunta'];
   $sql = "SELECT * FROM preguntayrespuesta WHERE id = $id";
   $resultado = $mysqli->query($sql);
   $row = $resultado->fetch_array(MYSQLI_ASSOC);
   $R1 = $row['R1'];
   if($R1 != '1') {
        $sql = "DELETE FROM preguntayrespuesta WHERE id = $id"; 
        $result = $mysqli->query($sql);
    }
}
if(isset($_POST['id_respuesta'])) {
    $id = $_POST['id_respuesta'];
    $sql = "UPDATE preguntayrespuesta SET Respuesta = '$Respuesta', R1 = '0' WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_prof'])) {
    $id = $_POST['id_prof'];
    $sql = "DELETE FROM recursos_prof WHERE id = $id"; 
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_intentos'])) {
    $id = $_POST['id_intentos'];
    $sql = "UPDATE asistencia SET Intentos = '0' WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_osteo'])) {
    $id = $_POST['id_osteo'];
    $sql = "DELETE FROM  diagnostico_osteomuscular WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_t_osteo'])) {
    $id = $_POST['id_t_osteo'];
    $sql = "DELETE FROM locomocion WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_doc_osteo'])) {
    $id = $_POST['eliminar_doc_osteo'];
    $doc_seg = $_POST['doc_seg'];
    $sql = "DELETE FROM doc_osteo WHERE id = $id";
    $result = $mysqli->query($sql);
    unlink('doc_auditivo/'.$doc_seg);
}
if(isset($_POST['eliminar_doc_auditivo'])) {
    $id = $_POST['eliminar_doc_auditivo'];
    $doc_seg = $_POST['doc_seg'];
    $sql = "DELETE FROM doc_auditivo WHERE id = $id";
    $result = $mysqli->query($sql);
    unlink('doc_auditivo/'.$doc_seg);
}
if(isset($_POST['eliminar_doc_visual'])) {
    $id = $_POST['eliminar_doc_visual'];
    $doc_seg = $_POST['doc_seg'];
    $sql = "DELETE FROM doc_visual WHERE id = $id";
    $result = $mysqli->query($sql);
    unlink('doc_visual/'.$doc_seg);
}
if(isset($_POST['eliminar_doc_cardio'])) {
    $id = $_POST['eliminar_doc_cardio'];
    $doc_seg = $_POST['doc_seg'];
    $sql = "DELETE FROM doc_cardio WHERE id = $id";
    $result = $mysqli->query($sql);
    unlink('doc_cardio/'.$doc_seg);
}
if(isset($_POST['eliminar_doc_psicosocial'])) {
    $id = $_POST['eliminar_doc_psicosocial'];
    $doc_seg = $_POST['doc_seg'];
    $sql = "DELETE FROM doc_psicosocial WHERE id = $id";
    $result = $mysqli->query($sql);
    unlink('doc_psicosocial/'.$doc_seg);
}
if(isset($_POST['eliminar_obs_osteo'])) {
    $id = $_POST['eliminar_obs_osteo'];
    $sql = "DELETE FROM observaciones_s WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_visual'])) {
    $id = $_POST['eliminar_obs_visual'];
    $sql = "DELETE FROM observaciones_s_visual WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_auditivo'])) {
    $id = $_POST['eliminar_obs_auditivo'];
    $sql = "DELETE FROM observaciones_s_auditivo WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_osteo'])) {
    $id = $_POST['eliminar_obs_osteo'];
    $sql = "DELETE FROM observaciones_s_osteo WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_respiratorio'])) {
    $id = $_POST['eliminar_obs_respiratorio'];
    $sql = "DELETE FROM observaciones_s_respiratorio WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_cardio'])) {
    $id = $_POST['eliminar_obs_cardio'];
    $sql = "DELETE FROM observaciones_s_cardio WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_obs_psicosocial'])) {
    $id = $_POST['eliminar_obs_psicosocial'];
    $sql = "DELETE FROM observaciones_s_psicosocial WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['vinculacion_doc'])) {
    $id = $_POST['vinculacion_doc'];
    $sql = "DELETE FROM vinculacion_doc WHERE id = $id";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_nitcc'])) {
   $id_nitcc = $_POST['id_nitcc'];
   $codigo_nitcc = $_POST['codigo_nitcc'];
   $sql = "DELETE FROM vinculacion WHERE id = $id_nitcc"; 
   $result = $mysqli->query($sql);
   if($result) {
    unlink('pdf_vinculacion/'.$codigo_nitcc.'.pdf');
   }
}
if(isset($_POST['id_eysenck'])) {
    $Codigo = $_POST['id_eysenck'];
    $sql = "DELETE FROM formulario_eysenck WHERE Codigo = '$Codigo'";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_somnolencia'])) {
    $Codigo = $_POST['id_somnolencia'];
    $sql = "DELETE FROM formulario_somnolencia WHERE Codigo = '$Codigo'";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_neurotoxicos'])) {
    $Codigo = $_POST['id_neurotoxicos'];
    $sql = "DELETE FROM formulario_neurotoxicos WHERE Codigo = '$Codigo'";
    $result = $mysqli->query($sql);
}
if(isset($_POST['id_stop_bang'])) {
    $Codigo = $_POST['id_stop_bang'];
    $sql = "DELETE FROM formulario_stopbang WHERE Codigo = '$Codigo'";
    $result = $mysqli->query($sql);
}
if(isset($_POST['eliminar_empleado_capac'])) {
   $eliminar_empleado_capac = $_POST['eliminar_empleado_capac'];
   $sql = "DELETE FROM asistencia WHERE id =$eliminar_empleado_capac"; 
   $result = $mysqli->query($sql);
}
if(isset($_POST['id_codigo'])) {
   $id_codigo = $_POST['id_codigo'];
   $sql = "DELETE FROM consentimiento WHERE Codigo = '$id_codigo'"; 
   $result = $mysqli->query($sql);
       if($result) {
           unlink('pdf/'.$id_codigo.'.pdf');
       }
  };
  if(isset($_POST['id_nutricional'])) {
   $id_nutricional = $_POST['id_nutricional'];
   $sql = "DELETE FROM formulario_nutricional WHERE id = $id_nutricional"; 
   $result = $mysqli->query($sql);
  };
?>