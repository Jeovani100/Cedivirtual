<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
date_default_timezone_set('America/Bogota');
//Enrutamiento para url amigable
$componentes_url = parse_url($_SERVER["REQUEST_URI"]);
$ruta = $componentes_url['path'];
$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);
$ruta_elegida = 'vistas/404.php';
    if (count($partes_ruta) == 0) {
        $ruta_elegida = "vistas/login_usuario.php";
    } else if (count($partes_ruta) == 1) {
        switch ($partes_ruta[0]) {
            case 'urna':
                $ruta_elegida = 'vistas/urna.php';
                break;  
            case 'urna_virtual':
                $ruta_elegida = 'vistas/urna_virtual.php';
                break;    
            case 'login':
                $ruta_elegida = 'vistas/login.php';
                break;
            case 'registro':
                $ruta_elegida = 'vistas/registro.php';
                break;
            case 'logout':
                $ruta_elegida = 'vistas/logout.php';
                break;
            case 'logout_riesgo':
                $ruta_elegida = 'vistas/logout_riesgo.php';
                break; 
            case 'logout_salud':
                $ruta_elegida = 'vistas/logout_salud.php';
                break; 
            case 'logout_agenda':
                $ruta_elegida = 'vistas/logout_agenda.php';
                break;   
            case 'logout_isra':
                $ruta_elegida = 'vistas/logout_isra.php';
                break;  
            case 'logout_psicologico':
                $ruta_elegida = 'vistas/logout_psicologico.php';
                break;  
                   
            case '_sst':
                $ruta_elegida = 'vistas/_sst.php';
                break;     
            case 'psicosocial':
                $ruta_elegida = 'vistas/psicosocial.php';
                break;
            case 'psicosocial-sve':
                $ruta_elegida = 'vistas/psicosocial-sve.php';
                break;    
            case 'riesgo_psicosocial':
                $ruta_elegida = 'vistas/psicosocial_.php';
                break;    
            case 'factores':
                $ruta_elegida = 'vistas/factores.php';
                break;
            case 'abrir_informe':
                $ruta_elegida = 'app/abririnforme.inc.php';
                break;
            case 'abrir_informe2':
                $ruta_elegida = 'app/abririnforme2.inc.php';
                break;    
            case 'login_usuario':
                $ruta_elegida = 'vistas/login_usuario.php';
                break;  
            case 'riesgo':
                $ruta_elegida = 'vistas/riesgo.php';
                break;   
            case 'prueba':
                $ruta_elegida = 'vistas/prueba.php';
                break; 
            case 'diagnostico_general':
                $ruta_elegida = 'vistas/diagnostico_general.php';
                break; 
            case 'diagnostico_general_hgjyiod4ghfjv':
                $ruta_elegida = 'vistas/diagnostico_general2.php';
                break;   
            case 'diagnostico_general_itkglhi6dufy2':
                $ruta_elegida = 'vistas/diagnostico_general3.php';
                break;    
            case 'generales':
                $ruta_elegida = 'vistas/generales.php';
                break;     
            case 'salud':
                $ruta_elegida = 'vistas/salud.php';
                break;   
            case 'saludable':
                $ruta_elegida = 'vistas/saludable.php';
                break;  
            case 'millonario':
                $ruta_elegida = 'vistas/millonario.php';
                break; 
            case 'ausentismo':
                $ruta_elegida = 'vistas/ausentismo.php';
                break;  
            case 'gestor_ausentismo':
                $ruta_elegida = 'vistas/ausentismo_.php';
                break; 
            case 'satisfaccion':
                $ruta_elegida = 'vistas/satisfaccion.php';
                break; 
            case 'consolidado_s':
                $ruta_elegida = 'vistas/consolidado_s.php';
                break;    
            case 'consentimiento_info':
                $ruta_elegida = 'vistas/consentimiento2.php';
                break;     
            case 'consentimiento_informado':
                $ruta_elegida = 'vistas/consentimiento_informado.php';
                break;  
            case 'laboratorio':
                $ruta_elegida = 'vistas/laboratorio.php';
                break;    
            case 'agenda':
                $ruta_elegida = 'vistas/agenda.php';
                break;    
            case 'agendamiento':
                $ruta_elegida = 'vistas/agendamiento.php';
                break;    
            case 'login_agenda':
                $ruta_elegida = 'vistas/login_agenda.php';
                break;     
            case 'sistema':
                $ruta_elegida = 'vistas/sistema.php';
                break; 
            case 'auditivo':
                $ruta_elegida = 'vistas/auditivo.php';
                break;  
            case 'auditivo_prueba':
                $ruta_elegida = 'vistas/auditivo_prueba.php';
                break;    
            case 'gestor_agenda':
                $ruta_elegida = 'vistas/gestor_agenda.php';
                break;
            case 'informadoteleconsulta':
                $ruta_elegida = 'vistas/informado.php';
                break; 
            case 'consentimiento_teleconsulta':
                $ruta_elegida = 'vistas/consentimiento_t.php';
                break;  
            case 'login-isra':
                $ruta_elegida = 'vistas/login_isra.php';
                break;   
            case 'ausentismo_':
                $ruta_elegida = 'vistas/ausentismopdf.php';
                break;   
            case 'isra':
                $ruta_elegida = 'vistas/isra.php';
                break;  
            case 'isra_1':
                $ruta_elegida = 'vistas/isra_1.php';
                break; 
            case 'isra_2':
                $ruta_elegida = 'vistas/isra_2.php';
                break; 
            case 'isra_3':
                $ruta_elegida = 'vistas/isra_3.php';
                break; 
            case 'resultados-isra':
                $ruta_elegida = 'vistas/resultados-isra.php';
                break;     
            case 'resultado-isra':
                $ruta_elegida = 'vistas/resultado-isra.php';
                break;  
            case 'profesiograma':
                $ruta_elegida = 'vistas/profesiograma.php';
                break;    
            case 'confirmar_cita':
                $ruta_elegida = 'vistas/confirmar_cita.php';
                break;  
            case 'notificaciones_':
                $ruta_elegida = 'vistas/notificaciones2.php';
                break;  
            case 'confort_acustico':
                $ruta_elegida = 'vistas/confortacustico.php';
                break;  
            case 'capacitaciones':
                $ruta_elegida = 'vistas/capacitaciones.php';
                break;  
            case 'inicio':
                $ruta_elegida = 'vistas/inicio.php';
                break;     
            case 'empleado':
                $ruta_elegida = 'vistas/empleado.php';
                break;   
            case 'logout_capacitacion':
                $ruta_elegida = 'vistas/logout_capacitacion.php';
                break;  
            case 'seguimiento_auditivo_':
                $ruta_elegida = 'vistas/seguimientoauditivo.php';
                break;  
            case 'seguimiento_visual':
                $ruta_elegida = 'vistas/seguimientovisual.php';
                break;  
            case 'seguimiento_respiratorio':
                $ruta_elegida = 'vistas/seguimientorespiratorio.php';
                break;      
            case 'agenda_psicosocial':
                $ruta_elegida = 'vistas/agenda_psicosocial.php';
                break;  
            case 'agenda_nutricion':
                $ruta_elegida = 'vistas/agenda_nutricion.php';
                break;   
            case 'agenda_fisioterapia':
                $ruta_elegida = 'vistas/agenda_fisioterapia.php';
                break;     
            case 'el_riesgo_psicosocial':
                $ruta_elegida = 'videos/el_riesgo_psicosocial.php';
                break;     
            case 'instructivo_riesgo_psicosocial':
                $ruta_elegida = 'videos/instructivo_riesgo_psicosocial.php';
                break;  
            case 'cardiovascular':
                $ruta_elegida = 'vistas/cardiovascular.php';
                break;  
            case 'osteomuscular':
                $ruta_elegida = 'vistas/osteomuscular.php';
                break;
            case 'respiratorio':
                $ruta_elegida = 'vistas/respiratorio.php';
                break; 
            case 'visual':
                $ruta_elegida = 'vistas/visual.php';
                break;    
            case 'auditivopdf':
                $ruta_elegida = 'vistas/auditivopdf.php';
                break;  
            case 'auditivopdf2':
                $ruta_elegida = 'vistas/auditivopdf2.php';
                break; 
            case 'auditivopdf3':
                $ruta_elegida = 'vistas/auditivopdf3.php';
                break;     
            case 'visualpdf':
                $ruta_elegida = 'vistas/visualpdf.php';
                break;
            case 'cardiovascularpdf':
                $ruta_elegida = 'vistas/cardiovascularpdf.php';
                break;  
            case 'osteomuscularpdf1':
                $ruta_elegida = 'vistas/osteomuscularpdf1.php';
                break;
            case 'osteomuscularpdf2':
                $ruta_elegida = 'vistas/osteomuscularpdf2.php';
                break;      
            case 'respiratoriopdf':
                $ruta_elegida = 'vistas/respiratoriopdf.php';
                break;      
            case 'psicosocialpdf':
                $ruta_elegida = 'vistas/psicosocialpdf.php';
                break;
             case 'psicosocialpdf2':
                $ruta_elegida = 'vistas/psicosocialpdf2.php';
                break;    
            case 'biologicopdf':
                $ruta_elegida = 'vistas/biologicopdf.php';
                break;
            case 'seguimientospdf':
                $ruta_elegida = 'vistas/seguimientospdf.php';
                break;
            case 'cronicos':
                $ruta_elegida = 'vistas/cronicos.php';
                break;    
            case 'inicio_osteomuscular':
                $ruta_elegida = 'vistas/inicio_osteo.php';
                break;     
            case 'ingresan_osteomuscular':
                $ruta_elegida = 'vistas/ingresan_osteomuscular.php';
                break;
            case 'no_ingresan_osteomuscular':
                $ruta_elegida = 'vistas/no_ingresan_osteomuscular.php';
                break;   
            case 'indicadores_generales':
                $ruta_elegida = 'vistas/indicadores_generales.php';
                break;   
            case 'table3':
                $ruta_elegida = 'phpspreadsheet/table3.php';
                break;  
            case 'personales':
                $ruta_elegida = 'vistas/preguntas.php';
                break;     
            case 'laborales':
                $ruta_elegida = 'vistas/preguntas2.php';
                break;    
            case 'nutricional':
                $ruta_elegida = 'vistas/nutricional.php';
                break;    
            case 'orden_de_servicio':
                $ruta_elegida = 'vistas/orden.php';
                break;     
            case 'vinculacion':
                $ruta_elegida = 'vistas/vinculacion.php';
                break; 
            case 'vinculacion_':
                $ruta_elegida = 'vistas/vinculacion2.php';
                break; 
            case 'login_didactico':
                $ruta_elegida = 'vistas/login_didactico.php';
                break;   
            case 'logout_didactico':
                $ruta_elegida = 'vistas/logout_didactico.php';
                break;      
            case 'didactico':
                $ruta_elegida = 'vistas/didactico.php';
                break;    
            case 'login_turnos':
                $ruta_elegida = 'vistas/login_turnos1.php';
                break;    
            case 'login_turnos':
                $ruta_elegida = 'vistas/login_turnos1.php';
                break;    
            case 'turnos':
                $ruta_elegida = 'vistas/turnos1.php';
                break;    
            case 'elegir_turnos':
                $ruta_elegida = 'vistas/elegir_turnos1.php';
                break; 
            case 'logout_turnero_apartado':
                $ruta_elegida = 'vistas/logout_turnero_apartado.php';
                break;       
            case 'login_turnos_medellin':
                $ruta_elegida = 'vistas/login_turnos2.php';
                break;
            case 'turnos_medellin':
                $ruta_elegida = 'vistas/turnos2.php';
                break;    
            case 'elegir_turnos_medellin':
                $ruta_elegida = 'vistas/elegir_turnos2.php';
                break;     
            case 'logout_turnero_medellin':
                $ruta_elegida = 'vistas/logout_turnero_medellin.php';
                break;      
            case 'prueba_cardio':
                $ruta_elegida = 'vistas/prueba_cardio.php';
                break;   
            case 'prueba_auditivo':
                $ruta_elegida = 'vistas/prueba_auditivo.php';
                break; 
            case 'prueba_cardio':
                $ruta_elegida = 'vistas/prueba_cardio.php';
                break;     
             case 'servicio':
                $ruta_elegida = 'vistas/servicios.php';
                break;
            case 'tamiz_ps':
                $ruta_elegida = 'vistas/tamiz_ps.php';
                break;    
            case 'login-tamiz':
                $ruta_elegida = 'vistas/login_tamiz.php';
                break;     
            case 'resultado-tamiz':
                $ruta_elegida = 'vistas/resultado-tamiz.php';
                break;     
            case 'turno':
                $ruta_elegida = 'vistas/turno.php';
                break;
            case 'lista_agenda':
                $ruta_elegida = 'vistas/lista_agenda.php';
                break;
            case 'certificados':
                $ruta_elegida = 'vistas/certificados.php';
                break;    
            case 'foto11':
                $ruta_elegida = 'foto11.php';
                break;  
            case 'recomendaciones':
                $ruta_elegida = 'vistas/foto_recomendaciones.php';
                break;
            case 'biologico':
                $ruta_elegida = 'vistas/biologico.php';
                break; 
            case 'seguimientos':
                $ruta_elegida = 'vistas/seguimientos.php';
                break;     
            case 'visiometrias_normales':
                $ruta_elegida = 'vistas/visiometrias_normales.php';
                break; 
            case 'visiometrias_anormales':
                $ruta_elegida = 'vistas/visiometrias_anormales.php';
                break;   
            case 'espirometrias_normales':
                $ruta_elegida = 'vistas/espirometrias_normales.php';
                break; 
            case 'espirometrias_anormales':
                $ruta_elegida = 'vistas/espirometrias_anormales.php';
                break;     
             case 'rx_normales':
                $ruta_elegida = 'vistas/rx_normales.php';
                break; 
            case 'rx_anormales':
                $ruta_elegida = 'vistas/rx_anormales.php';
                break; 
            case 'grupo1_osteomuscular':
                $ruta_elegida = 'vistas/grupo1_osteomuscular.php';
                break;    
            case 'grupo2_osteomuscular':
                $ruta_elegida = 'vistas/grupo2_osteomuscular.php';
                break; 
            case 'grupo3_osteomuscular':
                $ruta_elegida = 'vistas/grupo3_osteomuscular.php';
                break; 
            case 'grupo4_osteomuscular':
                $ruta_elegida = 'vistas/grupo4_osteomuscular.php';
                break;     
            case 'actividad_fisica_':
                $ruta_elegida = 'vistas/fisica.php';
                break;    
            case 'inicio_actividad_fisica':
                $ruta_elegida = 'vistas/inicio_fisica.php';
                break;  
             case 'login_actividad_fisica':
                $ruta_elegida = 'vistas/login_fisica.php';
                break;    
             case 'actividad-fisica':
                $ruta_elegida = 'vistas/actividadfisica.php';
                break;    
            case 'locomocion':
                $ruta_elegida = 'vistas/locomocion.php';
                break;
            case 'concentrese':
                $ruta_elegida = 'vistas/concentrese.php';
                break;    
            case 'ergonomica_administrativo':
                $ruta_elegida = 'vistas/ergonomica1.php';
                break;   
            case 'psicometrico':
                $ruta_elegida = 'vistas/psicometrico.php';
                break;  
             case 'tareas':
                $ruta_elegida = 'vistas/tareas.php';
                break;  
            case 'dia_de_las_velitas':
                $ruta_elegida = 'vistas/velitas.php';
                break;  
            case 'inicio_test':
                $ruta_elegida = 'vistas/inicio_test.php';
                break; 
            case 'logout_test':
                $ruta_elegida = 'vistas/logout_test.php';
                break;   
            case 'test':
                $ruta_elegida = 'vistas/test.php';
                break;     
            case 'resultado-test':
                $ruta_elegida = 'vistas/resultado-test.php';
                break;    
                
             case 'tamiz':
                $ruta_elegida = 'vistas/tamiz.php';
                break;     
            case 'resultado-tamiz':
                $ruta_elegida = 'vistas/resultado-tamiz.php';
                break;    
    
            case 'somnolencia':
                $ruta_elegida = 'vistas/somnolencia.php';
                break;     
            case 'resultado-somnolencia':
                $ruta_elegida = 'vistas/resultado-somnolencia.php';
                break;  
            case 'eysenck':
                $ruta_elegida = 'vistas/eysenck.php';
                break;     
            case 'resultado-eysenck':
                $ruta_elegida = 'vistas/resultado-eysenck.php';
                break;    
            case 'neurotoxicos':
                $ruta_elegida = 'vistas/neurotoxicos.php';
                break;     
            case 'resultado-neurotoxicos':
                $ruta_elegida = 'vistas/resultado-neurotoxicos.php';
                break;   
            case 'fobia_electricidad':
                $ruta_elegida = 'vistas/electricidad.php';
                break;     
            case 'resultado-electrofobia':
                $ruta_elegida = 'vistas/resultado-electrofobia.php';
                break;   
            case 'stop_bang':
                $ruta_elegida = 'vistas/stop_bang.php';
                break;     
            case 'practica_pilates':
                $ruta_elegida = 'vistas/pilates.php';
                break;    
            /*case 'test':
                $ruta_elegida = 'vistas/seguimiento.php';
                break;     
            case 'resultado-seguimiento':
                $ruta_elegida = 'vistas/resultado-seguimiento.php';
                break; */    
            case 'inicio_seguimiento':
                $ruta_elegida = 'vistas/inicio_seguimiento.php';
                break;    
            case 'seg_auditivo':
                $ruta_elegida = 'vistas/seguimiento_auditivo.php';
                break;  
            case 'seg_respiratorio':
                $ruta_elegida = 'vistas/seguimiento_respiratorio.php';
                break;      
            case 'seg_osteomuscular':
                $ruta_elegida = 'vistas/seguimiento_osteomuscular.php';
                break;  
            case 'seg_visual':
                $ruta_elegida = 'vistas/seguimiento_visual.php';
                break;   
            case 'logout_seguimiento':
                $ruta_elegida = 'vistas/logout_seguimiento.php';
                break;    
            case 'video_llamada':
                $ruta_elegida = 'vistas/video_llamada.php';
                break;   
            case 'cedisalud_te_cuida':
                $ruta_elegida = 'vistas/cedisalud_te_cuida.php';
                break;    
            case 'inicio_cedisalud_te_cuida':
                $ruta_elegida = 'vistas/inicio_cedisalud_te_cuida.php';
                break;     
            case 'registro_control':
                $ruta_elegida = 'vistas/registro_control.php';
                break;      
            case 'aula_virtual':
                $ruta_elegida = 'vistas/aula_virtual.php';
                break;   
            case 'logout_formacion':
                $ruta_elegida = 'vistas/logout_formacion.php';
                break;     
            case 'resultado-stopbang':
                $ruta_elegida = 'vistas/resultado-stopbang.php';
                break;   
            case 'curso':
                $ruta_elegida = 'vistas/curso.php';
                break;    
            case 'login_capacitacion':
                $ruta_elegida = 'vistas/login_capacitacion.php';
                break;    
            case 'ocupacional':
                $ruta_elegida = 'vistas/ocupacional.php';
                break;      
            case 'estudio_de_caso':
                $ruta_elegida = 'vistas/estudio_caso.php';
                break;    
            case 'entrevista':
                $ruta_elegida = 'vistas/entrevista.php';
                break; 
            case 'entrevista_estructurada':
                $ruta_elegida = 'vistas/entrevista2.php';
                break;     
            case 'estudio_caso_pdf':
                $ruta_elegida = 'vistas/estudio_caso_pdf.php';
                break;   
            case 'cardio':
                $ruta_elegida = 'vistas/cardio.php';
                break;   
            case 'cardioguard':
                $ruta_elegida = 'vistas/cardioguard.php';
                break;   
            case 'cardioguard_paciente':
                $ruta_elegida = 'vistas/cardioguard_paciente.php';
                break;      
            case 'inicio_evaluacion_nutricional':
                $ruta_elegida = 'vistas/inicio_evaluacion_nutricional.php';
                break; 
            case 'evaluacion_nutricional':
                $ruta_elegida = 'vistas/evaluacion_nutricional.php';
                break; 
            case 'consolidado_nutricional':
                $ruta_elegida = 'vistas/consolidado_nutricional.php';
                break;   
            case 'profesiograma_agenda':
                $ruta_elegida = 'vistas/profesiograma_agenda.php';
                break;   
            case 'estadisticas_agenda':
                $ruta_elegida = 'vistas/estadisticas_agenda.php';
                break;       
        }
    };

    if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'psicosocial') {
            switch ($partes_ruta[1]) {
                case 'sociodemografico':
                    $riesgo_actual = 'sociodemografico';
                    $ruta_elegida = 'vistas/sociodemografico.php';
                    break;
                case 'intralaboral':
                    $riesgo_actual = 'intralaboral';
                    $ruta_elegida = 'vistas/intralaboral.php';
                    break;
                case 'extralaboral':
                    $riesgo_actual = 'extralaboral';
                    $ruta_elegida = 'vistas/extralaboral.php';
                    break;  
                case 'estres':
                    $riesgo_actual = 'estres';
                    $ruta_elegida = 'vistas/estres.php';
                    break; 
                case '_intralaboral':
                    $riesgo_actual = '_intralaboral';
                    $ruta_elegida = 'vistas/_intralaboral.php';
                    break;    
                case '_extralaboral':
                    $riesgo_actual = '_extralaboral';
                    $ruta_elegida = 'vistas/_extralaboral.php';
                    break; 
                case '_estres':
                    $riesgo_actual = '_estres';
                    $ruta_elegida = 'vistas/_estres.php';
                    break;
                case 'total':
                    $riesgo_actual = 'total';
                    $ruta_elegida = 'vistas/total.php';
                    break;
   
            }
        }
    };
    if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'ausentismo') {
            switch ($partes_ruta[1]) {
                case 'indicadores':
                    $ruta_elegida = 'vistas/indicadores.php';
                    break;
                case 'consolidados':
                    $ruta_elegida = 'vistas/consolidados.php';
                    break;
            }
        }
    };
    if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'gestor_ausentismo') {
            switch ($partes_ruta[1]) {
                case 'indicadores_ausentismo':
                    $ruta_elegida = 'vistas/indicadores_.php';
                    break;
                case 'consolidados_ausentismo':
                    $ruta_elegida = 'vistas/consolidados_.php';
                    break;
            }
        }
    };
    if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'riesgo_psicosocial') {
            switch ($partes_ruta[1]) {
                case 'presentacion':
                    $ruta_elegida = 'vistas/presentacion_ps.php';
                    break;
            }
        }
    }
    
    if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'auditivo') {
            switch ($partes_ruta[1]) {
                case 'grupoges':
                    $ruta_elegida = 'vistas/grupoges.php';
                    break;
            }
        }
    }
    
     if (count($partes_ruta) == 2) { 
        if ($partes_ruta[0] == 'visual') {
            switch ($partes_ruta[1]) {
                case 'grupoges_visual':
                    $ruta_elegida = 'vistas/grupoges_visual.php';
                    break;
            }
        }
    }
include_once $ruta_elegida;