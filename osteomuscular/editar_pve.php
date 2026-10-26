<?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';

    if(isset($_POST['id_P_e'])) {
        $id_P_e = $_POST['id_P_e'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_P_e2'])) {
        $id_P_e = $_POST['id_P_e2'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion2 SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_P_e3'])) {
        $id_P_e = $_POST['id_P_e3'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion3 SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_P_e4'])) {
        $id_P_e = $_POST['id_P_e4'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion4 SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_P_e5'])) {
        $id_P_e = $_POST['id_P_e5'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion5 SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_P_e6'])) {
        $id_P_e = $_POST['id_P_e6'];
        $Actividades_P_e = $_POST['Actividades_P_e'];
        $Responsabilidades_P_e = $_POST['Responsabilidades_P_e'];
        $Periodicidad_P_e = $_POST['Periodicidad_P_e'];
        $Observaciones_P_e = $_POST['Observaciones_P_e'];
        $sql = "UPDATE planificacion6 SET Actividades = '$Actividades_P_e', Responsabilidades= '$Responsabilidades_P_e', Periodicidad = '$Periodicidad_P_e', Observaciones = '$Observaciones_P_e' WHERE id = $id_P_e";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['id_I_e'])) {
        $id_I_e = $_POST['id_I_e'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_I_e2'])) {
        $id_I_e = $_POST['id_I_e2'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion2 SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_I_e3'])) {
        $id_I_e = $_POST['id_I_e3'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion3 SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_I_e4'])) {
        $id_I_e = $_POST['id_I_e4'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion4 SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_I_e5'])) {
        $id_I_e = $_POST['id_I_e5'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion5 SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_I_e6'])) {
        $id_I_e = $_POST['id_I_e6'];
        $Actividades_I_e = $_POST['Actividades_I_e'];
        $Responsabilidades_I_e = $_POST['Responsabilidades_I_e'];
        $Periodicidad_I_e = $_POST['Periodicidad_I_e'];
        $Observaciones_I_e = $_POST['Observaciones_I_e'];
        $sql = "UPDATE implementacion6 SET Actividades = '$Actividades_I_e', Responsabilidades= '$Responsabilidades_I_e', Periodicidad = '$Periodicidad_I_e', Observaciones = '$Observaciones_I_e' WHERE id = $id_I_e";
        $result = $mysqli->query($sql);
    };
    

    if(isset($_POST['id_H_e'])) {
        $id_H_e = $_POST['id_H_e'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_H_e2'])) {
        $id_H_e = $_POST['id_H_e2'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer2 SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_H_e3'])) {
        $id_H_e = $_POST['id_H_e3'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer3 SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_H_e4'])) {
        $id_H_e = $_POST['id_H_e4'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer4 SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_H_e5'])) {
        $id_H_e = $_POST['id_H_e5'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer5 SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_H_e6'])) {
        $id_H_e = $_POST['id_H_e6'];
        $Actividades_H_e = $_POST['Actividades_H_e'];
        $Responsabilidades_H_e = $_POST['Responsabilidades_H_e'];
        $Periodicidad_H_e = $_POST['Periodicidad_H_e'];
        $Observaciones_H_e = $_POST['Observaciones_H_e'];
        $sql = "UPDATE hacer6 SET Actividades = '$Actividades_H_e', Responsabilidades= '$Responsabilidades_H_e', Periodicidad = '$Periodicidad_H_e', Observaciones = '$Observaciones_H_e' WHERE id = $id_H_e";
        $result = $mysqli->query($sql);
    };
    

    if(isset($_POST['id_V_e'])) {
        $id_V_e = $_POST['id_V_e'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_V_e2'])) {
        $id_V_e = $_POST['id_V_e2'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion2 SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_V_e3'])) {
        $id_V_e = $_POST['id_V_e3'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion3 SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_V_e4'])) {
        $id_V_e = $_POST['id_V_e4'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion4 SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_V_e5'])) {
        $id_V_e = $_POST['id_V_e5'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion5 SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_V_e6'])) {
        $id_V_e = $_POST['id_V_e6'];
        $Actividades_V_e = $_POST['Actividades_V_e'];
        $Responsabilidades_V_e = $_POST['Responsabilidades_V_e'];
        $Periodicidad_V_e = $_POST['Periodicidad_V_e'];
        $Observaciones_V_e = $_POST['Observaciones_V_e'];
        $sql = "UPDATE verificacion6 SET Actividades = '$Actividades_V_e', Responsabilidades= '$Responsabilidades_V_e', Periodicidad = '$Periodicidad_V_e', Observaciones = '$Observaciones_V_e' WHERE id = $id_V_e";
        $result = $mysqli->query($sql);
    };
    

    if(isset($_POST['id_A_e'])) {
        $id_A_e = $_POST['id_A_e'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_A_e2'])) {
        $id_A_e = $_POST['id_A_e2'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria2 SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_A_e3'])) {
        $id_A_e = $_POST['id_A_e3'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria3 SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_A_e4'])) {
        $id_A_e = $_POST['id_A_e4'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria4 SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_A_e5'])) {
        $id_A_e = $_POST['id_A_e5'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria5 SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_A_e6'])) {
        $id_A_e = $_POST['id_A_e6'];
        $Actividades_A_e = $_POST['Actividades_A_e'];
        $Responsabilidades_A_e = $_POST['Responsabilidades_A_e'];
        $Periodicidad_A_e = $_POST['Periodicidad_A_e'];
        $Observaciones_A_e = $_POST['Observaciones_A_e'];
        $sql = "UPDATE auditoria6 SET Actividades = '$Actividades_A_e', Responsabilidades= '$Responsabilidades_A_e', Periodicidad = '$Periodicidad_A_e', Observaciones = '$Observaciones_A_e' WHERE id = $id_A_e";
        $result = $mysqli->query($sql);
    };
    
    
    if(isset($_POST['id_e_cardio'])) {
        $id_e_cardio = $_POST['id_e_cardio'];
        $Tipo_e_cardio = $_POST['Tipo_e_cardio'];
        $Definicion_e_cardio = $_POST['Definicion_e_cardio'];
        $Interpretacion_e_cardio = $_POST['Interpretacion_e_cardio'];
        $Fuente_e_cardio = $_POST['Fuente_e_cardio'];
        $Indicador_e_cardio = $_POST['Indicador_e_cardio'];
        $Numerador_e_cardio = $_POST['Numerador_e_cardio'];
        $Denominador_e_cardio = $_POST['Denominador_e_cardio'];
        $Meta_e_cardio = $_POST['Meta_e_cardio'];
        $Resultado_e_cardio = $_POST['Resultado_e_cardio'];
        $sql = "UPDATE indicadores_cardio SET Tipo = '$Tipo_e_cardio', Definicion = '$Definicion_e_cardio', Interpretacion = '$Interpretacion_e_cardio', Fuente = '$Fuente_e_cardio', Indicador = '$Indicador_e_cardio', Numerador = '$Numerador_e_cardio', 
        Denominador = '$Denominador_e_cardio', Meta = '$Meta_e_cardio', Resultado = '$Resultado_e_cardio' WHERE id = '$id_e_cardio'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e'])) {
        $id_e = $_POST['id_e'];
        $Tipo_e = $_POST['Tipo_e'];
        $Definicion_e = $_POST['Definicion_e'];
        $Interpretacion_e = $_POST['Interpretacion_e'];
        $Fuente_e = $_POST['Fuente_e'];
        $Indicador_e = $_POST['Indicador_e'];
        $Numerador_e = $_POST['Numerador_e'];
        $Denominador_e = $_POST['Denominador_e'];
        $Meta_e = $_POST['Meta_e'];
        $Frecuencia_e = $_POST['Frecuencia_e'];
        $Resultado1_e = $_POST['Resultado1_e'];
        $Resultado2_e = $_POST['Resultado2_e'];
        $sql = "UPDATE indicadores_audio SET Tipo = '$Tipo_e', Definicion = '$Definicion_e', Interpretacion = '$Interpretacion_e', Fuente = '$Fuente_e', Indicador = '$Indicador_e', Numerador = '$Numerador_e', 
        Denominador = '$Denominador_e', Meta = '$Meta_e', Frecuencia = '$Frecuencia_e', Resultado1 = '$Resultado1_e', Resultado2 = '$Resultado2_e' WHERE id = '$id_e'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['Recursos_e_cardio'])) {
        $id_e_cardio = $_POST['id_e_cardio'];
        $Recursos_e_cardio = $_POST['Recursos_e_cardio'];
        $sql = "UPDATE recursos SET Recursos = '$Recursos_e_cardio' WHERE id = '$id_e_cardio'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['Recursos_e'])) {
        $id_e = $_POST['id_e'];
        $Recursos_e = $_POST['Recursos_e'];
        $sql = "UPDATE recursos SET Recurso = '$Recursos_e' WHERE id = '$id_e'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_ges_visual'])) {
        $id_ges = $_POST['id_ges_visual'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Seguimiento_e = $_POST['Seguimiento_e'];
        $Evaluaciones_e = $_POST['Evaluaciones_e'];
        $sql = "UPDATE grupoges_visual SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Seguimiento = '$Seguimiento_e', Ingresados = '0', Evaluados = '0' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_ges_cardio'])) {
        $id_ges_cardio = $_POST['id_ges_cardio'];
        $Grupo_e_cardio = $_POST['Grupo_e_cardio'];
        $Bajo_e_cardio = $_POST['Bajo_e_cardio'];
        $Medio_e_cardio = $_POST['Medio_e_cardio'];
        $Alto_e_cardio = $_POST['Alto_e_cardio'];
        $EPP_e_cardio = $_POST['EPP_e_cardio'];
        $sql = "UPDATE grupoges SET Grupo = '$Grupo_e_cardio', Bajo = '$Bajo_e_cardio', Medio = '$Medio_e_cardio', Alto = '$Alto_e_cardio', EPP = '$EPP_e_cardio' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e_auditivo'])) {
        $id_e_auditivo = $_POST['id_e_auditivo'];
        $Tipo_e_auditivo = $_POST['Tipo_e_auditivo'];
        $Definicion_e_auditivo = $_POST['Definicion_e_auditivo'];
        $Interpretacion_e_auditivo = $_POST['Interpretacion_e_auditivo'];
        $Fuente_e_auditivo = $_POST['Fuente_e_auditivo'];
        $Indicador_e_auditivo = $_POST['Indicador_e_auditivo'];
        $Numerador_e_auditivo = $_POST['Numerador_e_auditivo'];
        $Denominador_e_auditivo = $_POST['Denominador_e_auditivo'];
        $Meta_e_auditivo = $_POST['Meta_e_auditivo'];
        $Frecuencia_e_auditivo = $_POST['Frecuencia_e_auditivo'];
        $Resultado1_e_auditivo = $_POST['Resultado1_e_auditivo'];
        $Resultado2_e_auditivo = $_POST['Resultado2_e_auditivo'];
        $sql = "UPDATE indicadores_auditivo SET Tipo = '$Tipo_e_auditivo', Definicion = '$Definicion_e_auditivo', Interpretacion = '$Interpretacion_e_auditivo', Fuente = '$Fuente_e_auditivo', Indicador = '$Indicador_e_auditivo', Numerador = '$Numerador_e_auditivo', 
        Denominador = '$Denominador_e_auditivo', Meta = '$Meta_e_auditivo', Frecuencia = '$Frecuencia_e_auditivo', Resultado1 = '$Resultado1_e_auditivo', Resultado2 = '$Resultado2_e_auditivo' WHERE id = '$id_e_auditivo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e_osteo'])) {
        $id_e_osteo = $_POST['id_e_osteo'];
        $Tipo_e_osteo = $_POST['Tipo_e_osteo'];
        $Definicion_e_osteo = $_POST['Definicion_e_osteo'];
        $Interpretacion_e_osteo = $_POST['Interpretacion_e_osteo'];
        $Fuente_e_osteo = $_POST['Fuente_e_osteo'];
        $Indicador_e_osteo = $_POST['Indicador_e_osteo'];
        $Numerador_e_osteo = $_POST['Numerador_e_osteo'];
        $Denominador_e_osteo = $_POST['Denominador_e_osteo'];
        $Meta_e_osteo = $_POST['Meta_e_osteo'];
        $Resultado_e_osteo = $_POST['Resultado_e_osteo'];
        $sql = "UPDATE indicadores_osteo SET Tipo = '$Tipo_e_osteo', Definicion = '$Definicion_e_osteo', Interpretacion = '$Interpretacion_e_osteo', Fuente = '$Fuente_e_osteo', Indicador = '$Indicador_e_osteo', Numerador = '$Numerador_e_osteo', Denominador = '$Denominador_e_osteo', Meta = $Meta_e_osteo, Resultado = $Resultado_e_osteo WHERE id = '$id_e_osteo'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e_visual'])) {
        $id_e_visual = $_POST['id_e_visual'];
        $Tipo_e_visual = $_POST['Tipo_e_visual'];
        $Definicion_e_visual = $_POST['Definicion_e_visual'];
        $Interpretacion_e_visual = $_POST['Interpretacion_e_visual'];
        $Fuente_e_visual = $_POST['Fuente_e_visual'];
        $Indicador_e_visual = $_POST['Indicador_e_visual'];
        $Numerador_e_visual = $_POST['Numerador_e_visual'];
        $Denominador_e_visual = $_POST['Denominador_e_visual'];
        $Meta_e_visual = $_POST['Meta_e_visual'];
        $Resultado_e_visual = $_POST['Resultado_e_visual'];
        $sql = "UPDATE indicadores_visual SET Tipo = '$Tipo_e_visual', Definicion = '$Definicion_e_visual', Interpretacion = '$Interpretacion_e_visual', Fuente = '$Fuente_e_visual', Indicador = '$Indicador_e_visual', Numerador = '$Numerador_e_visual', 
        Denominador = '$Denominador_e_visual', Meta = '$Meta_e_visual', Resultado = '$Resultado_e_visual' WHERE id = '$id_e_visual'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e_cardio'])) {
        $id_e_cardio = $_POST['id_e_cardio'];
        $Tipo_e_cardio = $_POST['Tipo_e_cardio'];
        $Definicion_e_cardio = $_POST['Definicion_e_cardio'];
        $Interpretacion_e_cardio = $_POST['Interpretacion_e_cardio'];
        $Fuente_e_cardio = $_POST['Fuente_e_cardio'];
        $Indicador_e_cardio = $_POST['Indicador_e_cardio'];
        $Numerador_e_cardio = $_POST['Numerador_e_cardio'];
        $Denominador_e_cardio = $_POST['Denominador_e_cardio'];
        $Meta_e_cardio = $_POST['Meta_e_cardio'];
        $Resultado_e_cardio = $_POST['Resultado_e_cardio'];
        $sql = "UPDATE indicadores_cardio SET Tipo = '$Tipo_e_cardio', Definicion = '$Definicion_e_cardio', Interpretacion = '$Interpretacion_e_cardio', Fuente = '$Fuente_e_cardio', Indicador = '$Indicador_e_cardio', Numerador = '$Numerador_e_cardio', 
        Denominador = '$Denominador_e_cardio', Meta = '$Meta_e_cardio', Resultado = '$Resultado_e_cardio' WHERE id = '$id_e_cardio'";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['id_e_respiratorio'])) {
        $id_e_respiratorio = $_POST['id_e_respiratorio'];
        $Tipo_e_respiratorio = $_POST['Tipo_e_respiratorio'];
        $Definicion_e_respiratorio = $_POST['Definicion_e_respiratorio'];
        $Interpretacion_e_respiratorio = $_POST['Interpretacion_e_respiratorio'];
        $Fuente_e_respiratorio = $_POST['Fuente_e_respiratorio'];
        $Indicador_e_respiratorio = $_POST['Indicador_e_respiratorio'];
        $Numerador_e_respiratorio = $_POST['Numerador_e_respiratorio'];
        $Denominador_e_respiratorio = $_POST['Denominador_e_respiratorio'];
        $Meta_e_respiratorio = $_POST['Meta_e_respiratorio'];
        $Resultado_e_respiratorio = $_POST['Resultado_respiratorio'];
        $sql = "UPDATE indicadores_respiratorio SET Tipo = '$Tipo_e_respiratorio', Definicion = '$Definicion_e_respiratorio', Interpretacion = '$Interpretacion_e_respiratorio', Fuente = '$Fuente_e_respiratorio', Indicador = '$Indicador_e_respiratorio', Numerador = '$Numerador_e_respiratorio', 
        Denominador = '$Denominador_e_respiratorio', Meta = '$Meta_e_respiratorio', Resultado = '$Resultado_e_respiratorio' WHERE id = '$id_e_respiratorio'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_e_psicosocial'])) {
        $id_e_psicosocial = $_POST['id_e_psicosocial'];
        $Tipo_e_psicosocial = $_POST['Tipo_e_psicosocial'];
        $Definicion_e_psicosocial = $_POST['Definicion_e_psicosocial'];
        $Interpretacion_e_psicosocial = $_POST['Interpretacion_e_psicosocial'];
        $Fuente_e_psicosocial = $_POST['Fuente_e_psicosocial'];
        $Indicador_e_psicosocial = $_POST['Indicador_e_psicosocial'];
        $Numerador_e_psicosocial = $_POST['Numerador_e_psicosocial'];
        $Denominador_e_psicosocial = $_POST['Denominador_e_psicosocial'];
        $Meta_e_psicosocial = $_POST['Meta_e_psicosocial'];
        $Frecuencia_e_psicosocial = $_POST['Frecuencia_e_psicosocial'];
        $Resultado1_e_psicosocial = $_POST['Resultado1_e_psicosocial'];
        $Resultado2_e_psicosocial = $_POST['Resultado2_e_psicosocial'];
        $sql = "UPDATE indicadores_psicosocial SET Tipo = '$Tipo_e_psicosocial', Definicion = '$Definicion_e_psicosocial', Interpretacion = '$Interpretacion_e_psicosocial', Fuente = '$Fuente_e_psicosocial', Indicador = '$Indicador_e_psicosocial', Numerador = '$Numerador_e_psicosocial', 
        Denominador = '$Denominador_e_psicosocial', Meta = '$Meta_e_psicosocial', Frecuencia = '$Frecuencia_e_psicosocial', Resultado1 = '$Resultado1_e_psicosocial', Resultado2 = '$Resultado2_e_psicosocial' WHERE id = '$id_e_psicosocial'";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['Recursos_F_e'])) {
        $id_e = $_POST['id_e'];
        $Recursos_e = $_POST['Recursos_F_e'];
        $sql = "UPDATE recursos_formacion SET Recurso = '$Recursos_e' WHERE id = '$id_e'";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_ges_osteo'])) {
        $id_ges = $_POST['id_ges_osteo'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Periodicidad_e = $_POST['Periodicidad_e'];
        $Cantidad_e = $_POST['Cantidad_e'];
        $Inspecciones_e = $_POST['Inspecciones_e'];
        $sql = "UPDATE grupoges_osteo SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Periodicidad = '$Periodicidad_e', Cantidad = '$Cantidad_e', Inspecciones = '$Inspecciones_e' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_ges_auditivo'])) {
        $id_ges = $_POST['id_ges_auditivo'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Periodicidad_e = $_POST['Periodicidad_e'];
        $Cantidad_e = $_POST['Cantidad_e'];
        $Nivel_e = $_POST['Nivel_e'];
        $sql = "UPDATE grupoges_auditivo SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Periodicidad = '$Periodicidad_e', Cantidad = '$Cantidad_e', Nivel = '$Nivel_e' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_ges_respiratorio'])) {
        $id_ges = $_POST['id_ges_respiratorio'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Periodicidad_e = $_POST['Periodicidad_e'];
        $Cantidad_e = $_POST['Cantidad_e'];
        $Nivel_e = $_POST['Nivel_e'];
        $sql = "UPDATE grupoges_respiratorio SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Periodicidad = '$Periodicidad_e', Cantidad = '$Cantidad_e', Nivel = '$Nivel_e' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_ges_cardio'])) {
        $id_ges = $_POST['id_ges_cardio'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Periodicidad_e = $_POST['Periodicidad_e'];
        $Cantidad_e = $_POST['Cantidad_e'];
        $Inspecciones_e = $_POST['Inspecciones_e'];
        $sql = "UPDATE grupoges_cardiovascular SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Periodicidad = '$Periodicidad_e' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
     if(isset($_POST['id_ges_psicosocial'])) {
        $id_ges = $_POST['id_ges_psicosocial'];
        $Grupo_e = $_POST['Grupo_e'];
        $Descripcion_e = $_POST['Descripcion_e'];
        $Individual_e = $_POST['Individual_e'];
        $Ambiental_e = $_POST['Ambiental_e'];
        $Periodicidad_e = $_POST['Periodicidad_e'];
        $Cantidad_e = $_POST['Cantidad_e'];
        $Inspecciones_e = $_POST['Inspecciones_e'];
        $sql = "UPDATE grupoges_psicosocial SET Grupo = '$Grupo_e', Descripcion = '$Descripcion_e', Individual = '$Individual_e', Ambiental = '$Ambiental_e', Periodicidad = '$Periodicidad_e', Cantidad = '$Cantidad_e', Inspecciones = '$Inspecciones_e' WHERE id = '$id_ges' LIMIT 1";
        $result = $mysqli->query($sql);
    };
?>
    
    
    