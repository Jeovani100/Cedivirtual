<?php
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
class repositorioadmin {
    public static function insertar_usuario($conexion, $usuario) {
        function generarCodigoAleatorio($longitud = 5) {
            $caracteres = '1234567890abcdefghijklmnopqrstuvwxyz';
            $Codigo = '';
            for ($i = 0; $i < $longitud; $i++) {
                $Codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }
            return $Codigo;
        }
        $Codigo = generarCodigoAleatorio(5);
        $usuario_insertado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO admin(Nit, Razon, Clave, Economica, Telefono, Email, Direccion, Departamento, Ciudad, Sede, PersonaC, TelefonoC, Activo, Ausentismo,  Fecha_registro) 
                VALUES(:Nit, :Razon, :Clave, :Economica, :Telefono, :Email, :Direccion, :Departamento, :Ciudad, :Sede, :PersonaC, :TelefonoC, 1, :Ausentismo, NOW())";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':Nit', $usuario->obtener_Nit(), PDO::PARAM_STR);
                $sentencia->bindValue(':Razon', $usuario->obtener_Razon(), PDO::PARAM_STR);
                $sentencia->bindValue(':Clave', $usuario->obtener_Clave(), PDO::PARAM_STR);
                $sentencia->bindValue(':Economica', $usuario->obtener_Economica(), PDO::PARAM_STR);
                $sentencia->bindValue(':Telefono', $usuario->obtener_Telefono(), PDO::PARAM_STR);
                $sentencia->bindValue(':Email', $usuario->obtener_Email(), PDO::PARAM_STR);
                $sentencia->bindValue(':Direccion', $usuario->obtener_Direccion(), PDO::PARAM_STR);
                $sentencia->bindValue(':Departamento', $usuario->obtener_Departamento(), PDO::PARAM_STR);
                $sentencia->bindValue(':Ciudad', $usuario->obtener_Ciudad(), PDO::PARAM_STR);
                $sentencia->bindValue(':Sede', $usuario->obtener_Sede(), PDO::PARAM_STR);
                $sentencia->bindValue(':PersonaC', $usuario->obtener_PersonaC(), PDO::PARAM_STR);
                $sentencia->bindValue(':TelefonoC', $usuario->obtener_TelefonoC(), PDO::PARAM_STR);
                $sentencia->bindValue(':Ausentismo', $Codigo, PDO::PARAM_STR);
                $usuario_insertado = $sentencia->execute();

                $Razon0 = $usuario->obtener_Razon();
                
               //AUSENTISMO
                
                $sql_a = "INSERT INTO ausentismo (id_admin,Enero_NNT,Febrero_NNT,Marzo_NNT,Abril_NNT,Mayo_NNT,Junio_NNT,Julio_NNT,Agosto_NNT,Septiembre_NNT,Octubre_NNT,Noviembre_NNT,Diciembre_NNT,Anual_NNT,Enero_HE,Febrero_HE,Marzo_HE,Abril_HE,Mayo_HE,Junio_HE,Julio_HE,Agosto_HE,Septiembre_HE,Octubre_HE,Noviembre_HE,Diciembre_HE,Anual_HE,Enero_HHTP,Febrero_HHTP,Marzo_HHTP,Abril_HHTP,Mayo_HHTP,Junio_HHTP,Julio_HHTP,Agosto_HHTP,Septiembre_HHTP,Octubre_HHTP,Noviembre_HHTP,Diciembre_HHTP,Anual_HHTP,Enero_ATM,Febrero_ATM,Marzo_ATM,Abril_ATM,Mayo_ATM,Junio_ATM,Julio_ATM,Agosto_ATM,Septiembre_ATM,Octubre_ATM,Noviembre_ATM,Diciembre_ATM,Anual_ATM,Enero_AT,Febrero_AT,Marzo_AT,Abril_AT,Mayo_AT,Junio_AT,Julio_AT,Agosto_AT,Septiembre_AT,Octubre_AT,Noviembre_AT,Diciembre_AT,Anual_AT,Enero_DI,Febrero_DI,Marzo_DI,Abril_DI,Mayo_DI,Junio_DI,Julio_DI,Agosto_DI,Septiembre_DI,Octubre_DI,Noviembre_DI,Diciembre_DI,Anual_DI,Enero_EL,Febrero_EL,Marzo_EL,Abril_EL,Mayo_EL,Junio_EL,Julio_EL,Agosto_EL,Septiembre_EL,Octubre_EL,Noviembre_EL,Diciembre_EL,Anual_EL,Enero_ELNA,Febrero_ELNA,Marzo_ELNA,Abril_ELNA,Mayo_ELNA,Junio_ELNA,Julio_ELNA,Agosto_ELNA,Septiembre_ELNA,Octubre_ELNA,Noviembre_ELNA,Diciembre_ELNA,Anual_ELNA,Enero_EIE,Febrero_EIE,Marzo_EIE,Abril_EIE,Mayo_EIE,Junio_EIE,Julio_EIE,Agosto_EIE,Septiembre_EIE,Octubre_EIE,Noviembre_EIE,Diciembre_EIE,Anual_EIE,Enero_ACEG,Febrero_ACEG,Marzo_ACEG,Abril_ACEG,Mayo_ACEG,Junio_ACEG,Julio_ACEG,Agosto_ACEG,Septiembre_ACEG,Octubre_ACEG,Noviembre_ACEG,Diciembre_ACEG,Anual_ACEG,Enero_DIAE,Febrero_DIAE,Marzo_DIAE,Abril_DIAE,Mayo_DIAE,Junio_DIAE,Julio_DIAE,Agosto_DIAE,Septiembre_DIAE,Octubre_DIAE,Noviembre_DIAE,Diciembre_DIAE,Anual_DIAE,Enero_C19,Febrero_C19,Marzo_C19,Abril_C19,Mayo_C19,Junio_C19,Julio_C19,Agosto_C19,Septiembre_C19,Octubre_C19,Noviembre_C19,Diciembre_C19,Anual_C19,Fecha_registro) VALUES
                ('$Codigo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.00, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NOW())";
                $resultado = $conexion->query($sql_a);
                
            
                //SVE AUDITIVO
                
                $Objetivo ='Prevenir la aparición de la hipoacusia neurosensorial inducida por ruido en la empresa '.$Razon0.', incluido el deterioro de una condición de hipoacusia ya existente por ruido, mediante la identificación y control de la exposición a niveles de ruido perjudiciales para la salud.';
                
                $Alcance ='Este Sistema de Vigilancia Epidemiológica, tendrá aplicabilidad a todos los puestos de trabajo de la empresa, donde se identifique el factor de riesgo físico por ruido, igual o mayor a 80dB.';
                
                $Definicion ='HIPOACUSIA: Es la disminución de la capacidad auditiva por encima de los niveles definidos de normalidad. Se ha graduado el nivel de pérdida auditiva con base al promedio de respuestas en decibeles. Esta se usa desde el punto de vista clínico promediando las frecuencias de 500, 1000 y 2000 Hz. Para salud ocupacional se recomienda la inclusión de 3000 Hz en la promediación. Para el abordaje del paciente con pérdida auditiva inducida por ruido es de vital importancia la descripción frecuencial de los niveles de respuesta desde 500 hasta 8000Hz. Esto con el fin de precisar la severidad de la hipoacusia para las frecuencias agudas, que son las primeras comprometidas.
                •	< 25 dB Audición normal
                •	26-40 dB Hipoacusia leve
                •	41-55 dB Hipoacusia moderada
                •	56-70 dB Hipoacusia moderada a severa
                •	71-90 dB Hipoacusia severa
                •	90 dB Hipoacusia profunda
                
                HIPOACUSIA CONDUCTIVA: Disminución de la capacidad auditiva por alteración a nivel del oído externo o del oído medio que impide la normal conducción del sonido al oído interno.
                
                HIPOACUSIA NEUROSENSORIAL: Disminución de la capacidad auditiva por alteración a nivel del oído interno, del octavo par craneal o de las vías auditivas centrales. Las alteraciones más frecuentes se relacionan con las modificaciones en la sensibilidad coclear.
                
                HIPOACUSIA MIXTA: Disminución de la capacidad auditiva por una mezcla de alteraciones de tipo conductivo y Neurosensorial en el mismo oído.
                
                HIPOACUSIA NEUROSENSORIAL INDUCIDA POR RUIDO EN EL LUGAR DE TRABAJO: Es la Hipoacusia Neurosensorial producida por la exposición prolongada a niveles peligrosos de ruido en el trabajo. Aunque su compromiso es predominantemente sensorial por lesión de las células ciliadas externas, también se han encontrado alteraciones en mucha menor proporción a nivel de las células ciliadas internas y en las fibras del nervio auditivo.
                
                TRAUMA ACÚSTICO: Es la disminución auditiva producida por la exposición a un ruido único o de impacto de alta intensidad (mayor a 120 dB).
                
                CAMBIO DEL UMBRAL AUDITIVO TEMPORAL (CUAT): Es el descenso encontrado en los umbrales auditivos, relacionado con la exposición reciente a ruido, que desaparece en las horas o días siguientes a la exposición, para retornar a los umbrales de base. Un CUAT se detecta cuando al comparar los resultados de la audiometría de base con la de seguimiento se encuentre un desplazamiento de 15 dB o más de los umbrales auditivos en al menos una de las frecuencias evaluadas entre 500-8000 Hz en cualquier oído. La presencia de un CUAT se considera un signo de susceptibilidad del trabajador. Para diagnosticar el carácter temporal del descenso, debe realizarse una audiometría confirmatoria en la cual debe desaparecer dicho hallazgo; si persiste entonces se considera cambio permanente en los umbrales auditivos (CUAP).
                
                CAMBIO DEL UMBRAL AUDITIVO PERMANENTE (CUAP): Es el descenso encontrado en los umbrales auditivos, relacionado con la exposición a ruido, que se mantiene en el tiempo sin retornar a los umbrales de base
                
                AUDIOMETRÍA DE BASE: Es la audiometría tonal contra la cual se comparan las audiometrías de seguimiento. Será en principio la preocupacional o de ingreso, pero podrá ser cambiada si se confirma un cambio permanente en los umbrales auditivos (CUAP). Debe ser realizada por personal calificado y certificado, bajo los estándares de calidad definidos (audiómetros que deben cumplir con las especificaciones del estándar ANSI S3.6 –2004, con las condiciones de calibración biológica semanal) y cumplir con los siguientes requisitos:
                •	Reposo auditivo de mínimo 12 horas, no sustituido por uso de protectores auditivos.
                •	Debe realizarse en cabina sonoamortiguada.
                •	Registro de la vía aérea para las frecuencias de 500 -1000 -2000 -3000 -4000 -6000 -8000 Hz.
                •	Se adiciona el registro de la vía ósea si las frecuencias de 500 – 1000 – 2000 o 3000 tiene caídas de 15 dB o más.
                
                AUDIOMETRÍA DE CONTROL: Es la audiometría tonal que se realiza para el seguimiento y monitoreo del estado de salud auditiva del personal expuesto a ruido, los resultados de la audiometría de control deben registrarse de forma que se permita la comparación con la audiometría base. Pretende detectar cambios temporales en los umbrales auditivos (CUAT), de forma temprana, antes de que el daño definitivo ocurra. Se recomienda realizarla con la siguiente frecuencia: 100 dBA (TWA) o más: semestral - 82-99 dBA (TWA): anual - 80 - < 82 dBA (TWA): cada 5 años. Se debe considerar los trabajadores que hayan tenido cambios en el umbral auditivo (CUAP) confirmado, a los que se les realizará audiometría cada 6 meses hasta que no haya más deterioro significativo en su umbral auditivo.   La audiometría de control debe practicarse a todos los trabajadores expuestos a ruido mayor de 80 dB(A).
                •	Realizar al terminar la jornada laboral o mínimo con 4 horas de avanzada la misma, lo cual garantiza la exposición previa a ruido.
                •	Utilizar la lectura frecuencial de la audiometría para su interpretación, sin corrección de los umbrales por presbiacusia. Las escalas ELI ó SAL NO se deben utilizar para la interpretación.
                •	Los exámenes deben ser realizados por personal entrenado con audiómetros que deben cumplir con las especificaciones del estándar ANSI S3.6 –2004, con capacidad para medir las pérdidas de la capacidad auditiva en las frecuencias 500, 1000, 2000, 3000, 4000, 6000 y 8000 en Hertz, con las condiciones de calibración biológica semanal y por medio de un laboratorio especializado mínimo cada año.
                •	Debe buscar y registrar descensos temporales en los umbrales auditivos (CUAT), para lo cual se requiere comparar con la audiometría de base y si se detecta un cambio permanente en el umbral auditivo, esta última confirmatoria se constituirá en la nueva línea base para futuras evaluaciones.
                •	Si se registra un CUAT (descenso igual o mayor a 15dB en al menos una de las frecuencias evaluadas) se repetirá la audiometría inmediatamente (re test).
                
                AUDIOMETRÍA DE CONFIRMACIÓN: Es la audiometría tonal realizada bajo las mismas condiciones que la audiometría de base (reposo auditivo 12 horas y cabina sonoamortiguada), que se realiza para confirmar un descenso de los umbrales auditivos encontrado en una audiometría de control y deberá realizarse dentro de los 30 días siguientes a la misma.
                
                PROTECTOR AUDITIVO: Elemento de uso individual que disminuye la cantidad de ruido que ingresa por el conducto auditivo externo.
                
                RUIDO ESTABLE. Es el ruido que presenta variaciones de presión sonora como una función del tiempo iguales o menores de 2 decibeles A.
                
                RUIDO IMPULSIVO O IMPACTO: Ruido caracterizado por una caída rápida del nivel sonoro y que tiene una duración de menos de un segundo. La duración entre impulsos o impactos debe ser superior a un segundo, de lo contrario se considerara ruido estable.
                
                RUIDO INTERMITENTE. Es el ruido que presenta variaciones de presión sonora como una función del tiempo mayores de 2 decibeles A.
                
                DECIBEL : Es la unidad de medida del ruido.
                
                MEDICIONES HIGIENICAS DE RUIDO: Evaluación cuantitativa de los niveles de ruido. La estrategia de medición debe corresponder a un método estandarizado; debe ser formulada, previa visita de inspección, por una persona experta y calificada (quien determinará el tipo de medición a realizar – dosimetría o Sonometría-, y el equipo que será requerido), la calibración de los instrumentos debe ser certificada por un laboratorio acreditado y estos deben ser calibrados antes y después de las mediciones con un calibrador acústico. Los resultados de las mediciones ocupacionales deben ser ingresados como fuente de información para la actualización del Panorama de Factores de Riesgo y sus registros deben conservarse en medio magnético y/o en medios impresos por periodos no inferiores a 20 años. La periodicidad con la cual deben realizarse mediciones debe ser determinada por el responsable de la Seguridad.';
                
                $Responsabilidades ='GERENCIA
                
                •	 Implementar y desarrollar prácticas seguras para el control de la exposición a ruido.
                •	 Dar a conocer en todos los niveles de la organización las medidas de intervención para el control de la exposición a ruido.
                •	 Estimular a los trabajadores, contratistas y demás personal en la participación y cooperación con el programa adoptando las prácticas seguras y demás medidas de control.
                
                COORDINADORA SG- SEGURIDAD Y SALUD EN EL TRABAJO Y AMBIENTE
                
                •	Será encargado de ejecutar e inspeccionar el seguimiento al Sistema de Vigilancia
                •	Inspeccionará periódicamente las áreas.
                •	Capacitará al personal expuesto en conductas seguras.
                •	Se reunirá con el grupo SGSST trimestralmente para informar eventualidades presentadas y los resultados de las inspecciones.
                •	Se encargará de hacer seguimiento a los indicadores.
                
                SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO
                
                •	Garantizar la divulgación de la información y capacitación a todas las personas involucradas en el programa.
                •	Mantener los registros de mediciones ambientales y exámenes médicos por el tiempo que lo estime el sistema y la legislación.
                •	Realizar el análisis de la información y verificación del funcionamiento del programa y sus objetivos.
                •	Instalar un programa de seguimiento al uso de protección auditiva, incluyendo su selección. Estos deben estar disponibles para su uso en todo momento.
                •	Reunirse periódicamente (trimestral) para consolidar información, proponer y estudiar mejoras, además de alimentar el sistema.
                
                COLABORADORES
                
                Los trabajadores deben cumplir con las directrices y acatar todos los requerimientos del sistema de vigilancia en el lugar de trabajo, tales como uso de elementos de protección personal en áreas designadas y cumplimiento de las prácticas seguras definidas por la empresa, con el objetivo de evitar la presencia de enfermedad laboral. Esto incluye contratistas y/o temporales que trabajen en '.$Razon0.'.';
       
                $Planear ='• La poblacion objeto de vigilancia en el presente sistema, seran todos los colaboradores de la organizacion, que desarrollar labores en lugares donde existen niveles de ruido que sobrepasen  los limites permisibles (85 dB/8 horas a la semana). 
                
                • Identificacion de peligros, control y evaluacion de riesgos en los puestos de trabajo donde los niveles de ruido sean iguales o por encima de 85 dB de presión sonora. 
                
                • Realizar mediciones ambientales si cambian las condiciones.';
                
                $Hacer ='•Despues de realizada la audimetria se ingresaran los resultados obtenidos en F-Seguimiento Examenes Médicos.
                
                •Se realizara la respectiva remisión a la EPS de cada colaborador que presente restricciones y/o perdidas auditivas 
                
                •Se reubicara del puesto a todo  trabajador que despues de ser remitido a su EPS, su medico tratante  presente recomendaciones que le impidan laborar en espacios de trabajo ruidosos 
                
                •Cada 1años o según recomendaciones del proveedor se cambiaran los protectores auditivos de silicona moldeable semivulcanizados a todos los colaboradores de la empresa, que se encuentran expuestos a ruido. 
                 
                •De acuerdo al resultado de las mediciones ambientales realizada por el proveedor, en la empresa, se deben emitir las recomendaciones para determinar las acciones correctivas y recomendar la intervención en la fuente, en el medio y el receptor.
                
                •Se verificara en campo el uso adecuado y permanente de los protectores auditivos';
                
                $Verificar ='•Se realizaran audiometria de control a los colaboradores de la organización vinculados directamente por la empresa, cada 1 año.
                
                •Evaluar anualmente las medidas de control implementadas por medio de indicadores de eficiencia, cobertura, incidencia y prevalencia para verificar el cumplimiento de las actividades planteadas por medio del Sistema de Vigilancia Epidemiologica';
                
                $Corregir ='•Anual mente se revisara el presente Sistema de Vigilancia Epidemiologico, se realizaran las correcciones necesarias para garantizar la promocion y prevencion de la salud de los colaboradores de la compañía, ademas de asegurar el mejoramiento continuo del sistema de gestion, realizar aplicacion de CHECK LIST ANUAL verificacion de cumplimiento de actividades.';
                
                $sql = "INSERT INTO text_auditivo (id_admin, Objetivo, Alcance, Definicion, Responsabilidades, Planear, Hacer, Verificar, Corregir) VALUES ('$Codigo','$Objetivo','$Alcance','$Definicion','$Responsabilidades','$Planear','$Hacer','$Verificar','$Corregir')";
                $resultado = $conexion->query($sql); 
                
                $Actividad1 = 'Caracterización de la población expuesta a peligros priorizando las actividades por condiciones Físicos: Ruido, de acuerdo con los factores del puesto de trabajo.';
                $Responsable1 = 'DIRECTOR SST, COORDINADOR SST, MEDICO SST EMPRESA';
                $Periodicidad1 = 'Cuando se introduzca una nueva maquinas o proceso';
                
                $Actividad2 = 'Evaluar las audiometrias realizadas a los colaboradores expuestos al ruido';
                $Responsable2 = 'MEDICO LABORAL';
                $Periodicidad2 = 'Según cronograma de examenes medicos';
                
                $Actividad3 = 'Realización de la Línea Basal, aplicando Formato Línea Base (Básico o Avanzado)';
                $Responsable3 = 'MEDICO LABORAL';
                $Periodicidad3 = 'SEMESTRAL';
                
                $Actividad4 = 'Revise y/o ajuste el Documento  SVE';
                $Responsable4 = 'MEDICO LABORAL';
                $Periodicidad4 = 'ANUAL';
                
                $Actividad5 = 'Realizar mediciones ambientales de ruido, para determinar niveles de presion sonora en cada area de la organización ';
                $Responsable5 = 'MEDICO LABORAL';
                $Periodicidad5 = 'TRIMESTRAL';
                
                $Actividad6 = 'Divulgar el Sistema de Vigilancia Epidemiologico a todos los colaboradores de la empresa, objeto de ese programa ';
                $Responsable6 = 'MEDICO LABORAL';
                $Periodicidad6 = 'SEMESTRAL';
                
                $Actividad7 = 'Realizar audiometria de control a personal con alteracion auditiva identificado';
                $Responsable7 = 'MEDICO LABORAL';
                $Periodicidad7 = 'SEMESTRAL';
                
                $Actividad8 = 'Hacer un mapa de ruido de la empresa para definir expuestos ';
                $Responsable8 = 'COORDINADOR SST';
                $Periodicidad8 = 'SEMESTRAL';
                
                $Actividad9 = 'Entrega de EPP, al personal expuesto al riesgo';
                $Responsable9 = 'ASESOR SST, ANALISTAS SST, COORDINADOR SST';
                $Periodicidad9 = 'Timestral';
                
                $Actividad10 = 'Formación sobre el cuidado auditivo, el uso adecuado de epp y su mantenimiento. Informar como funciona el recambio de EPP';
                $Responsable10 = 'COORDINADOR SST';
                $Periodicidad10 = 'TRIMESTRAL';
        
                $Actividad11 = 'Registro de inspecciones con su respectivo cierre';
                $Responsable11 = 'Brigada de Emergencia y Grupo de Apoyo';
                $Periodicidad11 = 'TRIMESTRAL';
                
                $Actividad12 = 'Verficar el uso de proteccion auditiva por medio de Observaciones de Comportamiento';
                $Responsable12 = 'COORDINADOR SST';
                $Periodicidad12 = 'PERMANENTE';
                
                $Actividad13 = ' Remisión a EPS para estudio de pérdida auditiva cuando el profesional de la Salud lo indique.';
                $Responsable13 = 'MEDICO LABORAL';
                $Periodicidad13 = 'Según  cronograma de examenes medicos (SEMESTRAL)';
        
                $Actividad14 = 'Se realizara el seguimiento al cumplimiento de los sistemas de Gestión por medio de la matriz I-TAB AUDIO';
                $Responsable14 = 'MEDICO LABORAL';
                $Periodicidad14 = 'Según  cronograma de examenes medicos';
                
                $Actividad15 = 'Se evaluará el cumplimiento  de las actividades programadas mediante el ciclo PHVA para el  SVE, por medio de indicadores de Eficiencia, Incidencia, Prevalencia y Cobertura.';
                $Responsable15 = 'COORDINADOR SST';
                $Periodicidad15 = 'SEMESTRAL';
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql1 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad1', '$Responsable1', '$Periodicidad1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql1);
                
                $sql2 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad2', '$Responsable2', '$Periodicidad2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql2);
                
                $sql3 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad3', '$Responsable3', '$Periodicidad3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql3);
                
                $sql4 = "INSERT INTO planificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad4', '$Responsable4', '$Periodicidad4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql4);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
                
                $sql5 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad5', '$Responsable5', '$Periodicidad5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql5);
                
                $sql6 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad6', '$Responsable6', '$Periodicidad6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql6);
                
                $sql7 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad7', '$Responsable7', '$Periodicidad7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql7);
                
                $sql8 = "INSERT INTO implementacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad8', '$Responsable8', '$Periodicidad8', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql8);
            
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql9 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad9', '$Responsable9', '$Periodicidad9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql9);
                
                $sql10 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad10', '$Responsable10', '$Periodicidad10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql10);
                
                $sql11 = "INSERT INTO hacer (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad11', '$Responsable11', '$Periodicidad11', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql11);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql12 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad12', '$Responsable12', '$Periodicidad12', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql12);
                
                $sql13 = "INSERT INTO verificacion (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad13', '$Responsable13', '$Periodicidad13', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql13);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2020', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2021', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2022', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2023', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2024', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2025', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);
                
                $sql14 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad14', '$Responsable14', '$Periodicidad14', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql14);
                
                $sql15 = "INSERT INTO auditoria (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo','2026', '$Actividad15', '$Responsable15', '$Periodicidad15', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql15);                
                
                $sql16 = "INSERT INTO meta_auditivo (Codigo, Enero, Febrero, Marzo, Abril, Mayo, Junio, Julio, Agosto, Septiembre, Octubre, Noviembre, Diciembre, Fecha_registro) VALUES ('$Codigo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NOW())";
                $resultado = $conexion->query($sql16);
                
                $sql16 = "INSERT INTO consolidado_auditivo (Codigo, Evaluar, Calificacion, Calificacionmayor, Calificacionmenor, EficaciaC, EficaciaE, Meta1, Meta2, EL1, EL2, EL3, EL4, EL5, EL6, EL7, EL8, EL9, EL10, EL11, EL12, EL13, TEXP1, TEXP2, TEXP3, TEXP4, TEXP5, TEXP6, TEXP7, TEXP8, TEXP9, TEXP10, TEXP11, TEXP12, TEXP13, Fecha_registro) VALUES ('$Codigo',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NOW())";
                $resultado = $conexion->query($sql16);

                $Tipo8 = 'PREVALENCIA GENERAL';
                $Definicion8 = 'Proporción de trabajadores que presentan algún grado de alteración auditiva (detectada mediante audiometrías, independientemente de su causa) en un momento o periodo específico.';
                $Interpretacion8 = 'Proporción de trabajadores que presentan algún grado de alteración auditiva (detectada mediante audiometrías, independientemente de su causa) en un momento o periodo específico.';
                $Fuente8 = 'Resultados de exámenes audiométricos periódicos (audiometrías de ingreso, periódicas y de egreso), historial clínico laboral.';
                $Indicador8 = 'RESULTADO';
                $Numerador8 = 'Número de trabajadores con alteraciones auditivas detectadas';
                $Denominador8 = 'Número total de trabajadores evaluados en el mismo periodo';

                $sql23 = "INSERT INTO indicadores_audio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Fecha_registro) VALUES ('$Codigo', '$Tipo8', '$Definicion8', '$Interpretacion8', '$Fuente8', '$Indicador8', '$Numerador8', '$Denominador8', NOW())";
                $resultado = $conexion->query($sql23);
                
                $Tipo9 = 'PREVALENCIA DE ENFERMEDAD LABORAL';
                $Definicion9 = 'Proporción de trabajadores con diagnóstico confirmado de hipoacusia inducida por ruido (HNIR) de origen laboral o cualquier otra enfermedad auditiva calificada como laboral, en un periodo determinado.';
                $Interpretacion9 = 'Indica la magnitud de las enfermedades auditivas de origen laboral existentes. Un porcentaje más bajo es deseable, reflejando la efectividad de los controles de ruido y el programa de conservación auditiva.';
                $Fuente9 = 'Indica la magnitud de las enfermedades auditivas de origen laboral existentes. Un porcentaje más bajo es deseable, reflejando la efectividad de los controles de ruido y el programa de conservación auditiva.';
                $Indicador9 = 'RESULTADO';
                $Numerador9 = 'Número de casos nuevos y antiguos de HNIR o enfermedad laboral auditiva calificada.';
                $Denominador9 = 'Número de casos nuevos y antiguos de HNIR o enfermedad laboral auditiva calificada.';

                $sql24 = "INSERT INTO indicadores_audio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Fecha_registro) VALUES ('$Codigo', '$Tipo9', '$Definicion9', '$Interpretacion9', '$Fuente9', '$Indicador9', '$Numerador9', '$Denominador9',  NOW())";
                $resultado = $conexion->query($sql24);
                
                $Tipo10 = 'INCIDENCIA';
                $Definicion10 = 'Número de casos nuevos de Alteraciones auditivas no calificadas, que se desarrollan en una población de trabajadores expuestos durante un periodo de tiempo específico.';
                $Interpretacion10 = 'Mide la velocidad con la que aparecen nuevos casos de alteraciones auditivas. Una tasa de incidencia baja o cero es el objetivo principal de un programa de conservación auditiva';
                $Fuente10 = 'Reportes de enfermedad laboral (específicamente auditiva), resultados de audiometrías periódicas que muestren un cambio significativo del umbral auditivo, confirmado como laboral, investigaciones de enfermedad laboral.';
                $Indicador10 = 'RESULTADO';
                $Numerador10 = 'Número de casos nuevos Alteraciones auditivas sin enfermedad laboral auditiva calificada.';
                $Denominador10 = 'Número total de trabajadores expuestos a niveles de ruido de riesgo sin la condición al inicio del periodo';

                $sql25 = "INSERT INTO indicadores_audio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Fecha_registro) VALUES ('$Codigo', '$Tipo10', '$Definicion10', '$Interpretacion10', '$Fuente10', '$Indicador10', '$Numerador10', '$Denominador10',  NOW())";
                $resultado = $conexion->query($sql25);
                
                $Tipo11 = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN AUDITIVA';
                $Definicion11 = 'Medida que evalúa el grado de ejecución de las actividades y componentes del Programa de Conservación Auditiva-mediciones de ruido, controles de ingeniería/administrativos, uso de EPP auditivo, capacitación, audiometrías';
                $Interpretacion11 = 'Evalúa la conformidad y el avance en la implementación de las medidas preventivas para la audición. Un porcentaje más alto indica un mejor cumplimiento y gestión de los riesgos asociados al ruido.';
                $Fuente11 = 'Registros de mediciones de niveles de ruido, planes de acción de controles implementados, registros de entrega y supervisión de uso de Elementos de Protección Personal (EPP) auditivos, registros de asistencia a capacitaciones, cumplimiento del cronograma de audiometrías, informes de auditoría.';
                $Indicador11 = 'Proceso';
                $Numerador11 = 'Número de actividades o elementos del cronograma implementados satisfactoriamente';
                $Denominador11 = 'Número total de actividades o elementos del cronograma planificados';

                $sql26 = "INSERT INTO indicadores_audio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador,  Fecha_registro) VALUES ('$Codigo', '$Tipo11', '$Definicion11', '$Interpretacion11', '$Fuente11', '$Indicador11', '$Numerador11', '$Denominador11',  NOW())";
                $resultado = $conexion->query($sql26);
                
                $sql29 = "INSERT INTO grupoges_auditivo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Nivel, Fecha_registro) VALUES ('$Codigo', '1', 'Corresponde a aquellos trabajadores a los que se les realizo audiometria, dentro de los límites normales, sin pérdida auditiva.', 'No requiere seguimiento individual específico debido a que su audiometría es normal, se sugiere controles grupales. - Capacitación y entrenamiento de prevención.- Exámenes Médicos Ocupacionales Periódicos.', 'No requiere en el momento acciones de ajuste por no presentar patologías auditivas de control aun asi se recomienda monitoreo del ambiente laboral para garantizar condiciones auditivas seguras y prevenir futuras exposiciones.', 'SEGUIMIENTO ANUAL', 0, 0, NOW())";
                $resultado = $conexion->query($sql29);
                
                $sql30 = "INSERT INTO grupoges_auditivo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Nivel, Fecha_registro) VALUES ('$Codigo', '2', 'Personas con resultados de audiometría que muestran una pérdida auditiva leve, generalmente en frecuencias bajas o altas, pero aún dentro de límites aceptables para su capacidad auditiva, requiere controles y manejos,Se sugiere realizar evaluaciones audiométricas cada 6 meses o según la recomendación del profesional de la salud, para evaluar cambios en la audición y realizar ajustes si es necesario.', 'Realizar seguimiento audiológico periódico para monitorear la progresión de la pérdida auditiva y evaluar la necesidad de adaptaciones o ayudas auditivas. - Seguimiento a recomendaciones médico – laborales. (si presenta). - Seguimiento a sintomatología encuestas de sintomas. - Exámenes Médicos Ocupacionales Periódicos. - Audiometria clinica semestral - Verificacion uso de elementos de proteccion individual para exposicion a Ruido', 'Inspección de puesto de trabajo, Evaluar el entorno laboral para identificar posibles fuentes de ruido y reducir la exposición a niveles sonoros perjudiciales si proteccion auditiva adecuada.', 'SEGUIMIENTO SEMESTRAL', 0, 0, NOW())";
                $resultado = $conexion->query($sql30);
                
                $sql31 = "INSERT INTO grupoges_auditivo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Nivel, Fecha_registro) VALUES ('$Codigo', '3', 'Personas con resultados de audiometría que muestran una pérdida auditiva de grado moderado, lo que indica una afectación más significativa en la capacidad auditiva en frecuencias bajas y altas, requiere controles periodicos semestrales e identificacion de posible exposicion a Ruido, uso de elementos de proteccion individual para ruido obligatorio, con este grado de alteracion labores como alturas y/o espacios confinados estara con restriccion si es un caso de alteracion bilateral.', 'Realizar seguimiento audiológico periódico para monitorear la progresión de la pérdida auditiva y evaluar la necesidad de adaptaciones o ayudas auditivas uso proteccion auditiva permanente con exposicion a ruido superior a 80 dB, verificar la necisidad de uso de doble proteccion - Seguimiento a recomendaciones médico – laborales. (si presenta). - Seguimiento a sintomatología encuestas de sintomas. - Exámenes Médicos Ocupacionales Periódicos. - Audiometria clinica semestral - Verificacion uso de elementos de proteccion individual para exposicion a Ruido.', 'Evaluar el entorno laboral y personal para identificar y reducir la exposición a ruidos fuertes y perjudiciales para la audición. Implementar medidas de protección auditiva en caso de exposición ocupacional a ruido, revisar la posiblidad en caso de que las mediciones ambientales sean muy elevada por encima de 80dB , reasignacion de funciones y/o reubicacion laboral.', 'SEGUIMIENTO SEMESTRAL', 0, 0, NOW())";
                $resultado = $conexion->query($sql31);
                
                $sql32 = "INSERT INTO grupoges_auditivo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Nivel, Fecha_registro) VALUES ('$Codigo', '4', 'Personas con resultados de audiometría que muestran una pérdida auditiva de grados severos, que abarca desde moderada a profunda. La capacidad auditiva se ve significativamente afectada en un amplio rango de frecuencias. se remitirá a su EPS correspondiente para el tratamiento, y si es el caso, inicio de proceso de calificación de origen.', 'Realizar seguimiento audiológico periódico para monitorear la progresión de la pérdida auditiva y evaluar la necesidad de adaptaciones o ayudas auditivas uso proteccion auditiva permanente con exposicion a ruido superior a 80 dB, verificar la necisidad de uso de doble proteccion - Seguimiento a recomendaciones médico – laborales. (si presenta). - Seguimiento a sintomatología encuestas de sintomas. - Exámenes Médicos Ocupacionales Periódicos. - Audiometria clinica semestral - Verificacion uso de elementos de proteccion individual para exposicion a Ruido - Inspeccion puesto de trabajo y evaluacion de puesto de trabajo.', 'Evaluar el entorno laboral y personal para identificar y reducir la exposición a ruidos fuertes y perjudiciales para la audición. Implementar medidas de protección auditiva en caso de exposición ocupacional a ruido, revisar la posiblidad en caso de que las mediciones ambientales sean muy elevada por encima de 80dB , reasignacion de funciones y/o reubicacion laboral.', 'SEGUIMIENTO SEMESTRAL', 0, 0,NOW())";
                $resultado = $conexion->query($sql32);
                
                $sql32 = "INSERT INTO grupoges_auditivo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Nivel, Fecha_registro) VALUES ('$Codigo', '5', 'Personas con resultados de audiometría que muestran disminucion auditiva causada por la exposición crónica a ruidos fuertes en el ambiente laboral o en el entorno cotidiano, el compromiso de esta frecuencia incluye solamente tonos agudos, La capacidad auditiva se ve afectada principalmente en frecuencias relacionadas con el ruido en frecuencias de 4000 dB en adelante.', 'Realizar seguimiento audiológico periódico para monitorear la progresión de la disminucion auditiva y evaluar el uso correcto de proteccion auditiva - Seguimiento a recomendaciones médico – laborales. (si presenta). - Seguimiento a sintomatología encuestas de sintomas. - Exámenes Médicos Ocupacionales Periódicos. - Audiometria tamiz anual - Verificacion uso de elementos de proteccion individual para exposicion a Ruido.', 'Inspección de puesto de trabajo, Evaluar el entorno laboral para identificar posibles fuentes de ruido y reducir la exposición a niveles sonoros perjudiciales si proteccion auditiva adecuada.', 'SEGUIMIENTO ANUAL', 0, 0,NOW())";
                $resultado = $conexion->query($sql32);
                
                //SVE VISUAL
           /*     
                $Objetivo ='Determinar el máximo rendimiento visual requerido de los empleados, objeto del presente SISTEMA DE VIGILANCIA EPIDEMIOLOGICO PARA EL CONTROL Y CONSERVACION, considerando circunstancias personales (edad, salud, aspectos cognoscitivos) y ambientales (nivel académico, cargo u oficio, ergonomía, necesidades sociales) y generar para ellos la recomendación para una adecuada salud visual y ocular, que les permita realizar sus oficios de manera correcta

                Desarrollar un programa de CONTROL Y CONSERVACION VISUAL que contemple actividades de prevención, promoción, educación y atención a los empleados de la empresa '.$Razon0.'.
                
                OBJETIVOS ESPECIFICOS
                
                • Evaluar la incidencia de enfermedades refractivas de la población a través del programa y el autocuidado.
                • Conocer el estado visual de la población.
                • Elaborar campañas sobre salud visual y ocular, prevención de accidentes visuales y oculares de trabajo y el manejo seguro de herramientas, equipos y productos.
                • Uso de corrección visual optima, para el desempeño de cargos que requieran exigencia visual en la ejecución de la labor.';

                $Alcance ='Las actividades están orientadas a los colaboradores de La Empresa en cada una de sus áreas de trabajo.

                Nos referimos a toda la población que en el momento se encuentre laborando, prestando servicios a nuestra empresa '.$Razon0.'.';
               
                $Definicion ='3.1.  Sistema de Vigilancia Epidemiológica: proceso sistemático de evaluación de la situación de salud de las personas que permite en base a este la toma de decisiones para disminuir los riesgos de enfermar o morir.       

                3.2.Agudeza Visual: es la capacidad de reconocer un detalle pequeño, partiendo de un poder de resolución del ojo, se conoce también como el poder de discriminación del ojo.
                Este proceso se realiza por 3 aspectos:
                
                •	El mínimo visible, que consiste en el objeto más pequeño diferenciable.
                •	El mínimo separable, que es la más pequeña interrupción entre dos objetos.
                •	El poder de alineamiento, que es la facultad de poder discernir pequeñas diferencias en el alineamiento de una recta.
                
                La agudeza visual es medida por medio del Test de Snellen, que se basa en el ángulo de un minuto que se subtiende para un objeto calculado a seis (6) metros, en caso de ser normal se anota con el quebrado 20/20, que significa que se diseñó un objeto que subtiende un ángulo de 5 minutos a 20 pies.
                
                Esta medición se realiza en visión lejana, para objetos calculados a 6 metros y en visión cercana a una distancia promedio de 35 – 40 centímetros.
                
                Foria: es el deficiente equilibrio muscular que el sujeto es capaz de corregir voluntariamente, esta deficiencia se conoce también como estrabismo latente ya que se presenta de manera espontánea o provocada por el examinador mediante un test especial.
                
                Estereopsis: es el resultado de fusionar 2 imágenes en una sola, lo cual permite la percepción de profundidad y el reconocimiento de las posiciones relativas de los objetos en tercera dimensión, es una capacidad netamente binocular.
                
                Anisometropías: diferencia refractiva de 2.00 Dioptrías o mayor, en el componente esférico astigmático de una corrección óptica, de un ojo con respecto al otro.
                
                Visión Cromática: es la capacidad que tiene el sistema visual de percibir colores por medio de pigmentos visuales especializados (fotopsinas), y puede verse afectada dicha percepción por
                trastornos genéticos o adquiridos.
                
                Iluminación: una buena iluminación, además de ser un factor de seguridad, productividad y de rendimiento en el trabajo, mejora el confort visual y hace más agradable y acogedora la vida. Si se tiene en cuenta que por lo menos una quinta parte de la vida del hombre, transcurre bajo alumbrado artificial, se comprenderá el interés que hay en establecer los requisitos mínimos para realizar una actividad dependiendo de la exigencia visual de la tarea u oficio
                
                3.3. EPP: Elementos de Protección Personal.																																				
                																																				
                3.4. GES: son los trabajadores que tienen el mismo perfil de exposición en términos de la frecuencia con que desarrollan la tarea u oficio, los materiales utilizados, los procesos implicados y en general en la forma de desarrollo de la actividad. Para '.$Razon0.' seran aquellos con alteraciones visuales suceptibles de vigilancia para el desempeño del cargo o aquellas que por su naturaleza y nivel de severidad requieran control sistematico en evolucion.										
                						
                DEFINICION DE CASOS				
                <table class="table3" style="text-align:center;margin-top:-38em">
                <tr>
                <th>CASO SOSPECHOSO</th>
                <th>CASO CONFIRMADO</th>
                </tr>
                <tr>
                <td>Caso Sospechoso. Presenta modificaciones funcionales, es de carácter reversible y se da básicamente por esfuerzo excesivo al aparato visual hay fatiga visual y tensión muscular dinamia y estática.</td>
                <td>Trabajador quien presenta modificaciones funcionales alteraciones de visión acompañado de cefalea nerviosismo, insomnio tensión muscular dinámica y estática, requiere uso de correccion visual durante desempeño de labores o vida rutniario.</td>
                </tr>
                <tr>
                <th>CASO DE CATARATA Y PTERIGIO GRADO III</th>
                <th>EXAMEN OCUPACIONAL (ingreso-egreso-periodico-postincapacidad)</th>
                </tr>
                <tr>
                <td>Al examen visual se evidencia déficit progresivo y además presenta opacidad del cristalino que impide observar normalmente el fondo de ojo, esto aspirantes al cargo presenta RESTRICCIONES PARA LE DESEMPEÑO DE LA LABOR.</td>
                <td>Se realizará tamizaje visual por optometría. Esta evaluación se realizará a todos, con el fin de establecer el estado de la visión de la persona en el momento de retiro de la empresa. </td>
                </tr>
                <tr>
                </table>
                	
                RIESGO OCUPACIONAL				
                Los trabajadores de la salud están expuestos a diferentes factores de riesgo: físicos, químicos, mecánicos, locativos, y biológicos, dependiendo directamente del oficio, de la actitud y práctica que el trabajador tenga y ejerza sobre su autocuidado, de las condiciones de trabajo en que se ejecute la labor y de sus aspectos inherentes a la organización laboral
                En el caso de '.$Razon0.', los trabajadores se ven expuestos a los siguientes factores de riesgo que pueden alterar las condiciones de salud Visual.			
                				
                PRINCIPALES FACTORES DE RIESGO
                <table class="table3" style="text-align:center;margin-top:-66em">
                <tr>
                <th>FACTORES DE RIESGOS PRIORITARIOS</th>
                <th>CONDICIONES DE RIESGO</th>
                <th>POSIBLES EFECTOS</th>
                <th>INTERVENCION</th>
                </tr>
                <tr>
                <td>RELACIONES INADECUADAS DE BRILLO</td>
                <td>USO FRECUENTE DE PANTALLA DE VISUALIZACION DE DATOS (PVD),</td>
                <td>FATIGA VISUAL, CANSANCIO, DESLUMBRAMIENTO, FOTOFOBIA</td>
                <td>ALTO</td>
                </tr>
                <tr>
                <td>CONTENIDO DE LA TAREA</td>
                <td>FIJACION VISUAL PERMANENTE EN PANTALLAS DE COMPUTADOR</td>
                <td>FATIGA VISUAL, CEFALEA, ALTERACIONES VISUALES COMO TRASTORNOS DE REFRACCIÓN, PRESBICIA</td>
                <td>ALTO</td>
                </tr>
                <tr>
                <td>METALES PESADO: PLOMO MERCURIO, ENTRE OTROS, HUMOS METALICOS</td>
                <td>PROCEDIMIENTOS SOLDADURA EN TALLERES Y MANTENIMIENTOS</td>
                <td>PARALISIS MUSCULOS EXTRAOCULARES : DIPLOPIA, INTOXICACION SISTEMICA</td>
                <td>ALTO</td>
                </tr>
                <tr>
                <td>MICROORGANISMOS PATOGENOS , BACTERIAS, VIRUS, HONGOS, PARASITOS</td>
                <td>PERSONAL DEL AREA ASISTENCIAL EXPUESTO A FACTORES DE RIESGO BIOLOGICO</td>
                <td>CONJUNTIVITIS, ULCERA CORNEAL,</td>
                <td>ALTO</td>
                </tr>
                </table>				
                				
                EVENTOS A VIGILAR SEGÚN MECANISMO DE EXPOSICION
                Los eventos vigilados se relacionan con la prevención del riesgo que altere las condiciones de salud visual o posibles accidentes de trabajos.  La '.$Razon0.' realiza vigilancia en:	
                <table class="table3" style="text-align:center;margin-top:-31em">
                <td style="font-family:verdanab;font-size:15px;background:#cccccc;width:8%!important">1</td>
                <td style="font-family:verdanab;width:20%!important">HISTORIA CLÍNICA VISUAL</td>
                <td>Según las valoraciones de seguimiento periodicas (VISIOMETRIA Y/O OPTOMETRIAS), las  siguientes son las patologías a vigilar: Alteraciones de acomodación: Presbicia, espasmo acomodativo. Trastornos de refracción: Hipermetropía, miopía, astigmatismo</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;font-size:15px;background:#cccccc;width:8%!important">2</td>
                <td style="font-family:verdanab;width:20%!important">EN EL AMBIENTE</td>
                <td>Condiciones de iluminación, brillo, confort térmico, humedad, radiaciones, posibles objetos cortantes o contundentes y cuerpos extraños.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;font-size:15px;background:#cccccc;width:8%!important">3</td>
                <td style="font-family:verdanab;width:20%!important">EN EL PROCEDIMIENTO</td>
                <td> Uso adecuado de los elementos de protección personal: Careta o visor y Monógafas, en los cargos y las labores que lo requieran.</td>
                </tr>
                </table>			
                				
                VIGILANCIA INDIVIDUAL DE LA SALUD
                <table class="table3" style="text-align:center;margin-top:-44em">
                <tr></tr>
                <th>TIPO DE EXAMEN</th>
                <th>CONTENIDO</th>
                <th>PERIODICIDAD</th>
                </tr>
                <tr>
                <td style="font-family:verdanab;text-align:center;width:5%!important">RECONOCIMIENTO INCIAL DE INGRESO</td>
                <td style="text-align:left"><span style="font-family:verdanab">Historia medica</span> (habitos toxicos como tabaquismo, enfermedades pulmonares)
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto)
                <span style="font-family:verdanab">Examen visual</span>(visiometria y/o optometria segun establecido profesiograma).</td>
                <td>INGRESO, inmediato antes de iniciar exposicion a peligros y riesgos.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;text-align:center;width:5%!important">RECONOCIMIENTO PERIODICO Y SEGUIMIENTO</td>
                <td style="text-align:left"><span style="font-family:verdanab">Historia medica</span> (habitos toxicos como tabaquismo, enfermedades pulmonares)
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto)
                <span style="font-family:verdanab">Examen visual</span>(visiometria y/o optometria segun establecido profesiograma).</td>
                <td>Requerimiento para segumiento ANUAL, puede ser visiometria y/o optometria según profesiograma.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;text-align:center;width:5%!important">RECONOCIMIENTO EGRESO</td>
                <td style="text-align:left"><span style="font-family:verdanab">Historia medica</span>(habitos toxicos como tabaquismo, enfermedades pulmonares)
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto)
                <span style="font-family:verdanab">Examen visual</span>(visiometria y/o optometria segun establecido profesiograma).</td>
                <td>Al momento de desvinculacion, cese relacion contractual de actividades.</td>
                </tr>
                </table>		
                				
                EVALUACION VISUAL 				
                La vigilancia médica comprende las evaluaciones médicas, los tamizajes visuales, las evaluaciones por optometría y las evaluaciones complementarias, todo esto acompañado de acciones de promoción y prevención
                
                •	Se efectuarán tamizajes visuales	 a todo el personal que ingresa a laborar a la empresa. 
                •	Se remitirán a evaluación por optometrías: Todos los Trabajadores que refieran antecedentes de molestias o alteraciones visuales, o sean detectados con anormalidades visuales por la implementación programa de vigilancia.
                
                Estos trabajadores se identifican bien sea por los exámenes médicos, periódicos, brigadas de salud o por remisiones de las instituciones de salud. 
                
                La optometría y los tamizajes visuales debe ser realizada por optómetra y debe contemplar la responsabilidad médico legal en todo acto asumiendo la responsabilidad de los diagnósticos, manejo de la información del paciente custodia, tratamiento y remisiones a otras especialidades.				
                	
                SE DEBE EVALUAR		
                <table class="table3" style="text-align:center;margin-top:-50em">
                <tr></tr>
                <th>SE DEBE EVALUAR</th>
                <th>RECOMENDACIONES</th>
                </tr>
                <tr>
                <td>Balance Muscular - Campimetria</td>
                <td rowspan="8" style="text-align:left">•	Reposo visual limitado mínimo a la noche anterior. 
                
                •	Si el trabajador usa lentes debe realizarse el examen con lentes y sin lentes para determina grado de corrección. 
                
                •	Instruir al trabajador de forma clara y precisa sobre la prueba a realizar. </td>
                </tr>
                <tr>
                <tr>
                <td>Agudez visual (proxima y lejana)</td>
                </tr>
                <tr>
                <tr>
                <td>Evaluación de forias y visión binocular de los ojos, forias verticales</td>
                </tr>
                <tr>
                <tr>
                <td>Estereopsis</td>
                </tr>
                <tr>
                </table>	
                	
                VIGILANCIA COLECTIVA DE LA SALUD 				
                La vigilancia colectiva o epidemiológica tiene como finalidad analizar las relaciones existentes entre el estado de salud del conjunto de trabajadores y sus condiciones de trabajo.
                
                Los resultados de la vigilancia de la salud colectiva complementarán la evaluación higiénica y deberán ser tenidos en cuenta por el servicio de prevención para gestionar adecuadamente la prevención de riesgos laborales.	
                			
                • Conocer la frecuencia y la distribución de los problemas de salud visual
                relacionados con la exposición a la sílice libre cristalina.
                • Conocer la frecuencia y la distribución de las alteracione visuales
                • Detectar situaciones de agregados inesperados de casos.
                • Aportar información para proponer actividades preventivas colectivas que reduzcan o minimicen los riesgos y eviten la aparición de
                daños en la salud.
                • Evaluar la efectividad de las medidas preventivas colectivas e individuales puestas en marcha en dicha población laboral.';
                
                $Responsabilidades ='GERENCIA
                
                •	 Implementar y desarrollar prácticas seguras para el control de la exposición a ruido.
                •	 Dar a conocer en todos los niveles de la organización las medidas de intervención para el control de la exposición a ruido.
                •	 Estimular a los trabajadores, contratistas y demás personal en la participación y cooperación con el programa adoptando las prácticas seguras y demás medidas de control.
                
                COORDINADORA SG- SEGURIDAD Y SALUD EN EL TRABAJO Y AMBIENTE
                
                •	Será encargado de ejecutar e inspeccionar el seguimiento al Sistema de Vigilancia
                •	Inspeccionará periódicamente las áreas.
                •	Capacitará al personal expuesto en conductas seguras.
                •	Se reunirá con el grupo SGSST trimestralmente para informar eventualidades presentadas y los resultados de las inspecciones.
                •	Se encargará de hacer seguimiento a los indicadores.
                
                SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO
                
                •	Garantizar la divulgación de la información y capacitación a todas las personas involucradas en el programa.
                •	Mantener los registros de mediciones ambientales y exámenes médicos por el tiempo que lo estime el sistema y la legislación.
                •	Realizar el análisis de la información y verificación del funcionamiento del programa y sus objetivos.
                •	Instalar un programa de seguimiento al uso de protección auditiva, incluyendo su selección. Estos deben estar disponibles para su uso en todo momento.
                •	Reunirse periódicamente (trimestral) para consolidar información, proponer y estudiar mejoras, además de alimentar el sistema.
                
                COLABORADORES
                
                Los trabajadores deben cumplir con las directrices y acatar todos los requerimientos del sistema de vigilancia en el lugar de trabajo, tales como uso de elementos de protección personal en áreas designadas y cumplimiento de las prácticas seguras definidas por la empresa, con el objetivo de evitar la presencia de enfermedad laboral. Esto incluye contratistas y/o temporales que trabajen en '.$Razon0.'.';
                       
                $Planear ='';
                
                $Hacer ='';
                
                $Verificar ='';
                
                $Corregir ='';
                
                $sql = "INSERT INTO text_visual (id_admin, Objetivo, Alcance, Definicion, Responsabilidades, Planear, Hacer, Verificar, Corregir) VALUES ('$Codigo','$Objetivo','$Alcance','$Definicion','$Responsabilidades','$Planear','$Hacer','$Verificar','$Corregir')";
                $resultado = $conexion->query($sql); 
                
                $Actividad = 'Hacer un diagnóstico de salud de la población expuesta a RIESGO VISUAL.';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'Según cronograma de examenes medicos';
                
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Establecer Línea Basal, aplicando recoleccion informacion para alimentar SVE CONSERVACION VISUAL';
                $Responsable = 'MEDICO LABORAL-GRUPO SST EMPRESA';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Reconocimiento Centros de trabajo con actividad posible RIESGO VISUAL (puntos de posible riesgo)';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Realizar mediciones ambientales luxometrias, determinar zona a intervenir segun resultados.';
                $Responsable = 'MEDICO LABORAL-GRUPO SST';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Seguimiento Cuestionario de sintomas VISUALES ADMINISTRATIVO Y OPERATIVO.';
                $Responsable = 'MEDICO LABORAL-GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Realizar VISIOMETRIA Y/O OPTOMETRIAS de control a personal con Riesgo Posible.';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Hacer un mapa de luxometria de la empresa para definir expuestos';
                $Responsable = 'COORDINADOR SST-GRUPO SST';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Los mapas varian dependiendo de los resultado obtenidos de las mediciones ambientales y la periodicidad sera determinada por estos.', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Entrega de EPP, al personal expuesto al riesgo Visual';
                $Responsable = 'ASESOR SST, ANALISTAS SST, COORDINADOR SST';
                $Periodicidad = 'TRIMESTRAL';
                
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Formación sobre el cuidado Visual, el uso adecuado de EPP y su mantenimiento. Informar como funciona el recambio de EPP';
                $Responsable = 'COORDINADOR SST-GRUPO SST EMPRESA';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Registro de inspecciones con puesto de trabajo uso de EPP';
                $Responsable = 'Brigada de Emergencia y Grupo de Apoyo-GRUPO SST';
                $Periodicidad = 'TRIMESTRAL';
                
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Matrices de Seguimiento de Personal con Evaluaciones Visuales';
                $Responsable = 'MEDICO SST-GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                 $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Solicitar matrices con informacion en las IPS prestadores de servicios de SST con descripcion de vision proxima, lejana, color y estereopsis para visiometria, OPTOMETRIAS evaluacion completa.', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Seguimiento casos Controles con Alteraciones visual';
                $Responsable = 'GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Verficacion sobre comportamientos seguros proteccion visual mediante listas de chequeo.';
                $Responsable = 'COORDINADOR SST-GRUPO SST';
                $Periodicidad = 'MENSUAL';
                
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Verificar el cumplimiento de las actividades a ejecutar por medio de indicadores de eficiencia y eficacia';
                $Responsable = 'GRUPO SST - MEDICO SST ASESOR';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Auditar seguimiento a caso Controles';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Se auditara el cumplimiento de las actividades programadas mediante el ciclo PHVA para el SVE, por medio de indicadores de Eficiencia, Incidencia, Prevalencia y Cobertura.';
                $Responsable = 'COORDINADOR SST-GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria2 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'INCIDENCIA ALTERACIONES VISUALES ORIGEN LABORAL';
                $Definicion = 'Conocer el número de casos nuevos de enfermedad laboral, con el fin de identificar sus fuentes de riesgo e intervenirlas, el periodo de revision de este indicador sera semestral.';
                $Interpretacion = '% ALTERACIONES VISUALES ORIGEN LABORAL';
                $Fuente = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador = '% ALTERACIONES VISUALES NUEVAS ORIGEN LABORAL';
                $Numerador = '# Empleados con alteracion visual origen laboral';
                $Denominador = '# de empleados base de datos con riesgo por exposicion';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PREVALENCIA ALTERACIONES VISUALES ORIGEN LABORAL';
                $Definicion = 'Monitorear el número de casos antiguos y nuevos de enfermedad laboral en un período mensual con el fin de identificar sus fuentes de riesgo e intervenirlas.';
                $Interpretacion = '% ALTERACIONES VISUALES X ORIGEN LABORAL';
                $Fuente = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador = '% ALTERACIONES VISUALES ORIGEN LABORAL';
                $Numerador = '# Empleados con alteracion visual origen laboral';
                $Denominador = '# de empleados de base de datos con riesgo por exposicion';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO- EFICACIA';
                $Definicion = 'Accidentes de trabajo ocurridos con compromiso de visual.';
                $Interpretacion = '% AT CON COMPROMISO VISUAL';
                $Fuente = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador = '% AT CON COMPROMISO VISUAL';
                $Numerador = '# AT CON COMPROMISO VISUAL';
                $Denominador = '# AT TOTAL OCURRIDOS';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO-EFICACIA';
                $Definicion = 'Observación de comportamientos positivos (USO ADECUADO DE ELEMENTOS DE PROTECCION PERSONAL) en relacion a este riesgo prioritario "RIESGO VISUAL"';
                $Interpretacion = '% ADHERENCIA A ELEMENTOS DE PROTECCION PERSONAL';
                $Fuente = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador = '% COMPORTAMIENTO POSITIVOS';
                $Numerador = 'COMPORTAMIENTOS POSITIVOS';
                $Denominador = 'TOTAL EVALUADOS CON POSIBLE RIESGO VISUAL';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'RESULTADO COBERTURA';
                $Definicion = '% Cobertura capacitaciones para personal con Riesgo Visual durante la ejecucion de su cargo';
                $Interpretacion = '% Cobertura en capacitacion del personal expuesto a Riesgo Visual';
                $Fuente = 'SVE-SST';
                $Indicador = 'Cobertura Capacitacion';
                $Numerador = 'numero capacitaciones realizadas';
                $Denominador = 'Numero de capacitaciones programadas';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'CONTROL';
                $Definicion = 'Empleados que para la realizacion de labores requiere de correccion visual';
                $Interpretacion = '% EMPLEADO CON CORRECCION VISUAL';
                $Fuente = 'SVE-SST';
                $Indicador = 'EMPLEADOS CON CORRECCION VISUAL';
                $Numerador = 'empleados con correccion visual';
                $Denominador = 'total empleados con alteracion visual';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_visual (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                
                //CARDIOVASCULAR
                
                $Objetivo ='Implementar un programa de prevención de RCV y fomento de estilos de vida saludable que permita al programa de SST de la empresa, identificar e intervenir en forma temprana los diferentes factores de riesgo que inciden en el desarrollo de enfermedades crónicas, contribuyendo así a mejorar la calidad de vida de los trabajadores.   

                Objetivos específicos
                
                1) Identificar los puestos de trabajo que  presentan exposición a vapores orgánicos y el personal que labora en estos.
                
                2)  Evaluar periódicamente el estado de salud de los trabajadores expuestos mediante la realización de una evaluación médica por especialista en salud ocupacional o medicina laboral a todos los funcionarios expuestos con énfasis en examen respiratorio. Aplicación de cuestionario de sintomas respiratorios.
                
                3)  Se realizará seguimiento  a las personas cuyos resultados de los exámenes estén alterados, éstos serán remitidos a su EPS para que se dé el manejo adecuado y se emitan recomendaciones en caso de ser necesario.
                
                4) Capacitar a los trabajadores sobre el riesgo, las condiciones seguras de trabajo, las medidas de control existentes y las consecuencias para  la salud  y sobre la adopción de comportamientos de trabajo seguros. Promover la adopción de comportamientos seguros en el trabajo y por fuera de él. 
                
                5) Ejecutar el procedimiento de entrega de elementos de protección personal que corresponden al riesgo de exposición a vapores orgánicos y dejar documentación respecto a la capacitación sobre su uso adecuado y su entrega.';

                $Alcance ='Este Sistema de Vigilancia Epidemiológica, tendrá aplicabilidad a todos los puestos de trabajo de la empresa '.$Razon0.', donde se identifique el factor de riesgo físico cardiovascular. ';
               
                $Definicion ='Actualmente, las enfermedades cardiovasculares son la primera causa de muerte y una de las principales causas de enfermedad e invalidez en los países desarrollados y en gran parte de los países en vía de desarrollo; son las   responsables de un tercio de las muertes que se producen en el mundo: concretamente fallecen al año 17,5 millones de personas por este motivo.

                Cada dos segundos se produce una muerte por enfermedad cardiovascular y cada cinco segundos un infarto del miocardio, según datos de la Organización Mundial de la Salud (OMS) y se espera que en el futuro se incremente en un 82% la incidencia y la mortalidad por causa de estas enfermedades en países en desarrollo; del total de estos pacientes con diagnóstico de Enfermedad Coronaria 2/3 partes muere antes de llegar al hospital.
                
                Anualmente, 15 millones de personas en todo el mundo sufren un accidente cerebro vascular. De los cuales 5 millones mueren y los otros 5 millones quedan permanentemente con discapacidad, llegando a ser una carga para su familia y la comunidad.
                
                Las muertes por Enfermedad Coronaria han disminuido en Norte América y en muchos países de Europa Occidental. Este descenso es debido al mejoramiento en la prevención, diagnóstico y tratamiento; en particular por la reducción del uso del cigarrillo entre los adultos y a la disminución de los niveles tensiónales y de colesterol en sangre.
                
                Pero lamentablemente el 80 por ciento de las muertes por enfermedades crónicas se producen en países de ingresos bajos y medios y la mitad de estas son mujeres. La enfermedad cardiovascular por sí sola mata a cinco veces más personas que el VIH / SIDA en esos países.
                
                Un número importante de estas muertes se pueden atribuir al consumo de tabaco, lo que aumenta el riesgo de morir por enfermedad cardiaca coronaria y enfermedad cerebro vascular de 2-3 veces. La inactividad física, la Diabetes, los altos niveles de colesterol y triglicéridos en sangre, la HTA y una dieta poco saludable son otros factores principales que aumentan los riesgos individuales a las enfermedades cardiovasculares por UN INADECUADO ESTILO DE VIDA.
                
                El conocimiento de los principales factores de riesgo modificables de las enfermedades cardiovasculares permite su prevención. Los tres factores de riesgo cardiovascular modificables más importantes son: el consumo de tabaco, la hipertensión arterial y el hipercolesterolemia. Además, se pueden considerar otros factores como la DIABETES, LA OBESIDAD, EL SEDENTARISMO Y EL CONSUMO EXCESIVO DE ALCOHOL Y SUSTANCIAS SICOACTIVAS.
                
                La epidemiología cardiovascular se caracteriza por tener una etiología multifactorial, los factores de riesgo cardiovascular se potencian entre sí y, además, se presentan frecuentemente asociados. Por ello, el abordaje más correcto de la prevención cardiovascular requiere una valoración conjunta de los factores de riesgo.
                
                El consumo de tabaco constituye uno de los principales riesgos para la salud del individuo y es la causa más importante de morbilidad y mortalidad prematura y prevenible en cualquier país desarrollado. En Colombia la edad promedio de inicio de consumo de cigarrillo es de 16.91 años y su prevalencia último mes consumo de tabaco en la población de 12 a 68 años aunque la prevalecía del tabaquismo en los adolescentes es significativa con un 2.5%, la población adulta de 18 a 64 años es la que más consume tabaco (12.8%), los hombres de este rango de edad (19.5%) son fumadores habituales aún más que las mujeres (7.4%).
                
                La Hipertensión Arterial es uno de los principales factores de riesgo para Infartos cardiacos y Accidentes Cerebro vascular; la prevalencia de Hipertensión Arterial (mayor o igual a 140/90) para Colombia es de 22.8% (10); y es quinta causa de muerte para la población mayor de 65 años, tanto para hombre como para mujeres. Aunque en el 2008 el porcentaje de pacientes con Hipertensión Arterial controlada fue del 71.4%, ha disminuido a un 57.9% para el 2009, esto podría estar asociado a la prevalencia de Hipertensión Arterial informada de un 8% a nivel nacional; lo que demuestra la importancia de la implementación de estrategias e intervenciones de prevención a esta población.
                Hipercolesterolemia un 7.8% de la población colombiana de 18 a 69 años tiene niveles de colesterol en sangre mayor o igual a 240 mg/dl, y un 4,5% de esta misma población tiene niveles de colesterol HDL mayor o igual a 60 mg/dl.
                
                Es importante sensibilizar a la población objeto sobre el diagrama de RCV Y ESTILOS DE VIDA SALUDABLE ENTORNO: Es el ambiente en el cual el Individuo, el grupo social y familia, nacen, crece y se reproduce y que este a su vez ejerce una influenza sobre estos, ya sea positiva o negativa. Esta influencia se ve reflejada en el conocimiento y el saber de estos sujetos.
                
                PERCEPCION: Es la capacidad del individuo, grupo social y la familia de valorar los fenómenos dados en el entorno; como producto del conocimiento adquirido, que a su vez le permite interpretar y comprender el entorno.
                
                CONOCIMIENTO: Es el resultado del proceso de aprendizaje. Justamente es aquel producto final que queda guardado en el sistema cognitivo, principalmente en la memoria, después de ser ingresado por medio de la percepción.
                
                CONCIENCIA: Es la capacidad propia de los seres humanos de reconocerse a sí mismos, de tener conocimiento y percepción de su propia existencia y de su entorno.
                
                ACTITUD: Son posiciones negativas o positivas que toman los individuos, grupos sociales y las familias ante determinadas circunstancia o fenómenos que ofrecen los entornos
                
                VOLUNTAD: Es la disposición que asumen los individuos, grupos sociales y las familias, de querer hacer o no hacer una acción para la toma de decisiones.
                 
                CONDUCTA: Es la manifestación de la actitud que asumen los individuos y los grupos sociales y las familias frente a los estímulos que reciben y a los vínculos que establece con su entorno.
                
                COMPORTAMIENTO: Manifestación expresada de la conducta mediante la acción material.
                
                ESTILOS DE VIDA SALUDABLES Se considera como acciones repetitivas sobre un comportamiento. Si el comportamiento no es repetitivo entonces este se vuelve en una práctica o una acción aislada.
                
                MANTENIMIENTO CORPORAL: Cuidar la higiene personal (bañarse diariamente, cepillarse los dientes después de cada comida, lavarse las manos frecuentemente, mantener las uñas muy bien cuidadas, usar desodorante, entre otras, hay que recordar que si nos vemos bien nos sentimos bien.
                
                ACTIVIDAD FÍSICA: La actividad física y el ejercicio ayudan a prevenir enfermedades cardiovasculares, evita el sobrepeso, la obesidad y disminuye el riesgo de desarrollar diabetes tipo 2 y otro tipo de enfermedades. Se debe realizar actividad física, al menos 30 minutos al día, 5 veces a la semana (150 minutos a la semana), ya que cuando se hace, mejora la oxigenación, la circulación y los músculos de nuestro cuerpo se fortalecen y mejora la calidad de vida.
                
                Es importante mencionar, que no es lo mismo la actividad física que hacer ejercicio, ya que el ejercicio es un movimiento corporal programado, estructurado y repetitivo y la actividad física es cualquier movimiento corporal, desde: sentarse, caminar, subir por las escaleras, entre otras. Si va a practicar algún deporte, recuerde consultar a su médico, seguir un plan de entrenamiento elaborado por un profesional e hidrátese adecuadamente antes y después de la actividad.
                
                TONIFIQUE SU MUSCULATURA: La carga muscular nos ayuda a mantener nuestro cuerpo activo, evite dolencias musculares, reduzca las alteraciones por descompensaciones musculares y malas posturas. El tipo de trabajo, mezclado con la actividad aeróbica, supone una combinación de éxito más allá de los beneficios físicos por su contribución a la formación integral de la persona y al desarrollo psíquico.
                
                REALICE UN BUEN DESCANSO: El reposo es fundamental para el buen funcionamiento del organismo. Si dormimos menos de lo necesario, o si no recuperamos las fuerzas pérdidas, nuestro estado de ánimo antes o después se verá afectado. Si nuestro estilo de vida no respeta nuestro reposo, sólo nos queda modificarlo. Es evidente que necesitamos un tiempo de sueño mínimo de ocho horas de sueño (en función de la persona) y que después de los esfuerzos diarios, requerimos reposo acorde a las necesidades que debemos respetar y favorecer en lo posible.
                
                ALIMENTACIÓN BALANCEADA: Consumir regularmente una dieta balanceada con alimentos de baja densidad energética como verduras, frutas, cereales, ya que se pueden absorber en cantidades importantes y no estará uno ingiriendo muchas calorías; comer carnes especialmente lomo de res, o cerdo sin grasa, pollo o pavo sin la piel y la disminución de sal, grasas y azucares.
                
                MANTENGA SU MENTE OCUPADA Y PLANTÉESE OBJETIVOS: Para mantener un bienestar físico y mental, es muy importante realizar actividades que le permitan mantener su mente activa como la lectura, el estudio, espectáculos, entre otras. Además existen estudios que demuestran que plantearse metas y objetivos a corto, medio y largo plazo (que pueden ser de diferentes tipos: laborales, físicas, personales) aumentan la motivación en las personas y contribuyen a mejorar su autoestima y su felicidad.
                
                CONTROLE EL ESTRÉS: El estrés, nerviosismo, ansiedad, en muy diferentes intensidades está considerado como una de las mayores afecciones del siglo XX y XXI. Las técnicas de relajación en grupo e individualmente, el ejercicio cardiovascular, una alimentación balanceada y el cambio en su rutina diaria, son algunas pautas que pueden ayudarte a sobrellevar e incluso eliminar este problema.
                
                SALUD SEXUAL: Si lleva una vida sexual activa o está por tenerla, hágalo con responsabilidad, tome decisiones informadas en función del autocuidado, ya que el conocimiento y el fomento de una cultura anticonceptiva bien informada y la prevención de infecciones de transmisión sexual incluyendo el VIH/Sida son esenciales para tener una actividad sexual.
                
                APROVECHE SU TIEMPO LIBRE: Cuando una persona aprovecha su tiempo libre, las sensaciones que percibe suelen ser bastante agradables. El hecho de tener hobbies, aficiones, gustos, y practicarlas o dedicarles un tiempo, ayuda a equilibrar nuestra vida (relación, trabajo y placer).
                
                VIDA SOCIAL ACTIVA: Hay que resaltar los beneficios que reporta compartir un rato con nuestra familia o con nuestras amistades y salir de la rutina cotidiana. Podemos tener una salud física excelente y no padecer nunca enfermedades, cuando tenemos con quien compartir nuestra vida, para alcanzar el bienestar integral del que venimos hablando
                
                ESTILOS DE VIDA NO SALUDABLE
                
                Son acciones orientadas equivocadamente, donde las personas por falta de conocimiento de las consecuencias que se originan cuando se practican en forma repetitiva y que se realizan más por imitación o por falta de voluntad, cuando no hay conocimiento del daño que repercute en la salud de la persona por situaciones que se vuelvan adictas como el consumo de alcohol y las drogas, donde en su inicio se consume socialmente para posteriormente llegar a la adicción (enfermedad) y por ende las personas pierden el control.
                
                En tal sentido mencionaremos algunos estilos de vida no saludable : 
                * Falta de ejercicio (sedentarismo).
                * Vida Sexual desenfrenada.
                * Consumo de bebidas gaseosas Desvelo O Trasnocho.
                * Alimentación inadecuada.
                * El abuso del tabaco, alcohol y otras drogas El tiempo ocioso.
                * La vida sin objetivos o propósitos.
                *Consumo de alimento con exceso de colorantes.
                
                Los estilos de vida no saludables conllevan a que las personas contraigan enfermedades crónicas no trasmisible. Las principales enfermedades crónicas no trasmisibles (ECNT) son la diabetes mellitus o tipo 2, las enfermedades cardiovasculares, el cáncer, las enfermedades respiratorias crónicas y la enfermedad renal.
                
                METODOLOGIA
                La metodología del Programa de prevención de RCV y Estilos de Vida saludable se dividirá en tres fases:
                1. Fase diagnostica.
                2. Fase de Intervención del programa. (IMPLEMENTACION- DIAGNOSTICO Y PLAN DE ACCION)
                3. Fase del seguimiento y resultados
                
                FASE DIAGNÓSTICA
                Para la evaluación de estilos de vida saludable en la población objetivo se tendrán en cuenta las siguientes variables y se tendrán como base los criterios del ATP III, el cual propone un enfoque sobre la prevención primaria en personas con múltiples factores de riesgo.
                * Hipertensión arterial
                * Dislipidemia
                * Colesterol HDL
                * Triglicéridos
                * Diabetes mellitus
                * Obesidad abdominal
                * Sedentarismo o Inactividad física
                * Tabaquismo – Sustancias sicoactivas
                * Consumo habitual de licor
                * Diagnóstico de Enfermedades Cerebro y Cardiovasculares
                CRITERIOS DIAGNOSTICOS
                CARACTERÍSTICAS DEL ATP III
                1. Eleva a las personas con diabetes y sin enfermedad coronaria, al nivel equivalente de riesgo de cardiopatía coronaria.
                2. Utiliza las proyecciones del Score de Framingham para determinar el riesgo (a 10 años) al que está expuesto el paciente.
                3. Identifica a personas con múltiples factores de riesgo metabólico (Síndrome Metabólico) como candidatos para los cambios intensificados en el estilo de vida.
                4. Identifica un nivel más bajo de Colesterol LDL (100mg/dl) como valor cercano al óptimo.
                5. Eleva el valor de Colesterol HDL hasta 40 mg/dl (La última revisión aumenta a 50 mg/dl el valor límite aceptable para las mujeres).
                6. Reduce los puntos de corte de la clasificación de los triglicéridos para dar más atención a las elevaciones moderadas.
                7. Recomienda un perfil completo de lipoproteínas (Col-T, LDL, HDL, TG) como la prueba inicial preferida.
                8. Recomienda el uso de estanoles/esteroles vegetales y fibra (viscosa) soluble como opciones nutricionales terapéuticas para la disminución del Col-LDL.
                9. Intensifica las pautas para la adherencia a los cambios en el estilo de vida.
                10. Recomienda el tratamiento más allá de la reducción del colesterol LDL para las personas con triglicéridos > 200 mg/dl.
                
                PRESION ARTERIAL (PA): Actualmente existe amplia evidencia de la asociación lineal del aumento de PA, con el riesgo cardiovascular. Varios estudios relacionan además la Resistencia a la insulina con el aumento de la PA.
                
                Desde el ATP III, se tiene como criterio una PA >130/85 mm Hg. Aunque este nivel puede parecer arbitrario, surge de creciente evidencia, que demuestra riesgo cardiovascular desde niveles de PA menores que las requeridas para diagnosticar hipertensión arterial (HTA). El riesgo de ECV comienza desde la PA de 115/75 mm Hg, y con cada incremento de 20 mm Hg en la presión sistólica ó 10 mm Hg en la presión diastólica, se dobla el riesgo cardiovascular.
                El nivel de 130/85 mm Hg, es el mismo planteado como límite para personas con condiciones patológicas que impliquen alto riesgo como nefropatía, accidente cerebrovascular o coronario previo.
                
                En el momento que se publicaron los criterios del ATP III (2001), estaba vigente el sexto Comité Nacional Conjunto de HTA, que consideraba como cifras normales hasta 130/85 mmHg, y los valores de PAS 130-139 mmHg y de PAD 85-89 mmHg como normales altos. En 2003 se publicó el séptimo Comité Nacional Conjunto de HTA31, que creó la categoría de pre-hipertensión a partir de cifras de 120/80 mm Hg, aunque las guías de manejo de la HTA de las Sociedades Europeas de HTA y Cardiología publicadas el mismo año32, mantuvieron la clasificación previa. Las posiciones publicadas posteriormente no han cambiado el criterio del ATP III, de una PA >130/85 mm Hg.
                
                Para el Programa de Prevención de EVS, ingresaran todos los empleados con diagnóstico de HTA, quienes en la fase diagnostica presenten presión arterial por encima de 139/89 y se remitirán a su EPS, para descartar Diagnostico de pre- hipertensión o hipertensión arterial.
                
                                <table class="table3"style="text-align:center;margin-top:-64em">
                                <tr>
                                <th>CLASIFICACIÓN DE LA PRESIÓN ARTERIAL</th>
                                <th>PRESIÓN ARTERIAL SISTÓLICA (mm/hg)</th>
                                <th>PRESIÓN ARTERIAL DIASTÓLICA (mm/hg)</th>
                                <th>CONDUCTA A SEGUIR EN FASE DIAGNÓSTICA PROGRAMA RCV Y EVS</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">NORMAL</td>
                                <td>< 120</td>
                                <td>< 80</td>
                                <td>N/A</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">PRE-HTA</td>    
                                <td>120-139</td>
                                <td>80-89</td>
                                <td>Remisión a EPS para diagnóstico, seguimiento y control</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">HTA ESTADIO 1</td>    
                                <td>140-159</td>
                                <td>90-99</td>
                                <td ROWSPAN=2>Paciente con HTA ingresan al programa de EVS</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">HTA ESTADIO 2</td>    
                                <td>>160</td>
                                <td>>100</td>
                                </tr>
                                </table>
                
                DE MASA CORPORAL (IMC)
                El IMC es una fórmula que estima el peso ideal de una persona en función de su peso y estatura. La Organización Mundial de la Salud ha definido este índice de masa corporal como el estándar para la evaluación de los riesgos asociados con el exceso de peso en adultos.
                La obesidad es un factor de riesgo independiente para la enfermedad arterial coronaria al menos en personas menores de 50 años, en especial cuando esta es de distribución central.
                Con fines diagnósticos se calculará el peso teórico ideal calculando el índice de masa corporal según la siguiente formula IMC=peso (kgr)/talla² (mt).
                
                                <table class="table3" style="text-align:center;margin-top:-62em">
                                <tr>
                                <th>CATEGORÍA</th>
                                <th>IMC</th>
                                <th>RIESGO</th>
                                <th>PROGRAMA</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">Bajo peso<br>Normal<br>Sobrepeso</td>
                                <td> <19<br>19-24.9<br>25.0-29.9 </td>
                                <td>Alto<br>Bajo<br>Moderado</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">Obesidad I</td>
                                <td>30 - 34.9</td>
                                <td>Alto</td>
                                <td ROWSPAN=3>Ingresan al programa EVS</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">Obesidad II</td>
                                <td>35 - 39.9</td>
                                <td>Muy alto</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">Obesidad III</td>
                                <td>>= 40</td>
                                <td>Extremo</td>
                                </tr>
                                </table>
                
                CIRCUNFERENCIA ABDOMINAL.
                La circunferencia abdominal es un indicador antropométrico de grasa visceral, que mide de alguna manera el tejido graso abdominal subcutáneo y el tejido graso intra abdominal; estas medidas en conjunto con el IMC son predictores de riesgo cardiovascular. Las medidas ideales son:
                
                                <table class="table3" style="text-align:center;margin-top:-34em">
                                <tr>
                                <th>CATEGORÍA</th>
                                <th>HOMBRE</th>
                                <th>MUJER</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">NORMAL</td>
                                <td>< 120 Cm</td>
                                <td>< 88 Cm</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">ALTERADO (INGRESA AL PROGRAMA EVS)</td>
                                <td>> 120 Cm</td>
                                <td>> 88 Cm</td>
                                </tr>
                                </table>
                
                SINDROME METABÓLICO
                El síndrome metabólico se caracteriza por la presencia de alteraciones como la resistencia a la insulina, que se manifiestan por hiperinsulinismo y por su asociación con obesidad, diabetes mellitus tipo 2, hipertensión arterial y dislipidemia. La presencia de este síndrome se relaciona con incremento en el riesgo de aparición de enfermedades cardio-cerebro-vasculares y consecuente aumento de la mortalidad.
                Para la Clasificación del Síndrome Metabólico tomaremos como base la Definición ATP III así:
                El diagnóstico del síndrome metabólico es realizado cuando 3 o más de los siguientes factores de riesgo están presentes:
                1. Circunferencia abdominal >102 cms en hombres y >88 cms en mujeres
                2. Triglicéridos séricos >/=150 mg/dL
                3. Presión arterial >/=130/85 mmHg
                4. HDL Colesterol <40 mg/dL en los hombres y <50 mg/dL en las mujeres
                5. Glucosa de ayunas de 110 mg/dL o mayor.
                
                Ingresaran al PROGRAMA DE RCV Y EVS quienes presenten diagnóstico de Síndrome Metabólico.
                Existen factores de riesgo que se relacionan con la alimentación y la nutrición que pueden influir en la aparición del síndrome metabólico; entre éstos se mencionan el sobrepeso y la obesidad. A lo anterior se suman otros factores como el alto consumo de alcohol, el tabaquismo y el sedentarismo, entre otros.
                
                CONDUCTAS SALUDABLE :
                Las conductas saludables son un conjunto de comportamientos y hábitos, individuales y sociales, que contribuyen a mantener el bienestar, promover la salud y mejorar la calidad de vida de las personas.
                Realizar actividad física regularmente, mantener un peso razonable, alimentarse adecuadamente, son acciones positivas de un estilo de vida saludable. Por el contrario, el sedentarismo, la obesidad, el tabaquismo, el excesivo consumo de alcohol y de alimentos ricos en grasas y azúcares, son algunos comportamientos que deterioran la calidad de vida y la salud.
                Para el PROGRAMA DE EVS, se tomarán como base:
                
                                <table class="table3" style="text-align:center;margin-top:-45em">
                                <tr>
                                <th>VARIABLE</th>
                                <th>SIN RIESGO - BAJO RIESGO</th>
                                <th>INGRESA AL PROGRAMA RCV Y SVE</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">ACTIVIDAD FÍSICA</td>
                                <td>Los adultos de 18 a 64 años que dediquen como mínimo 150 minutos semanales a la práctica de actividad física aeróbica, de intensidad moderada, o bien 75 minutos de actividad física aeróbica vigorosa cada semana.</td>
                                <td>Las personas que no realicen actividad física anotada.  SEDENTARISMO</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">CONSUMO DE LICOR</td>
                                <td>No consume licor o tiene un consumo menor de 5 tragos por semana</td>
                                <td>CONSUME 5 o más tragos por ocasión al menos una vez por semana</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab;text-align:left">HÁBITO DE CIGARRILLO</td>
                                <td>NO FUMADOR</td>
                                <td>FUMADOR</td>
                                </tr>
                                </table>
                
                PERFIL LIPIDICO:
                Los valores de referencia universales han sido establecidos por el US National Cholesterol Education Program y son también aceptados en otros países para la evaluación del riesgo de enfermedad de cerebro-cardio-vascular, se clasificaran las alteraciones del perfil lipidico según las siguientes tablas:
                Colesterol:
                
                                <table class="table3" style="text-align:center;margin-top:-24em">
                                <tr>
                                <th>Valor de CT</th>
                                <th>RIESGO</th>
                                <th>SVE RCV</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">Hasta 200 mg/dL<br>201-239 mg/dL<br>> 240 mg/dL</td>
                                <td>Óptimo<br>Limítrofe alto<br>Alto</td>
                                <td>INGRESA SVE RCV</td>
                                </tr>
                                </table>
                
                TRIGLICERIDOS
                
                                <table class="table3" style="text-align:center;margin-top:-35em">
                                <tr>
                                <th>Valor de TG</th>
                                <th>RIESGO</th>
                                <th>SVE RCV</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">Hasta 150 mg/dL<br>150-199 mg/dL<br>200-240 mg/dL</td>
                                <td>Normal<br>Limítrofe alto<br>Alto</td>
                                <td>INGRESA SVE RCV</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">>500 mg/dL</td>
                                <td>Muy alto</td>
                                <td>INGRESA SVE RCV</td>
                                </tr>
                                </table>
                
                LDL
                
                                <table class="table3" style="text-align:center;margin-top:-45em">
                                <tr>
                                <th>Valor de LDL</th>
                                <th>RIESGO</th>
                                <th>SVE RCV</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">Hasta < 100 mg/dL</td>
                                <td>Óptimo</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">100-129 mg/dL</td>
                                <td>Caso óptimo</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">130-159 mg/dL<br>160-189 mg/dL<br>>190 mg/dL</td>
                                <td>En límite superior<br>Elevado<br>Muy elevado</td>
                                <td>INGRESA SVE RCV</td>
                                </tr>
                                </table>
                
                HDL
                
                                <table class="table3" style="text-align:center;margin-top:-34em">
                                <tr>
                                <th>Valor de TG</th>
                                <th>RIESGO</th>
                                <th>SVE RCV</th>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">Entre 40-60 mg/dL<br><40 mg/dL</td>
                                <td>Sin riesgo<br>Riesgo elevado</td>
                                <td>INGRESA SVE RCV</td>
                                </tr>
                                <tr>
                                <td style="font-family:verdanab">>60 mg/dL</td>
                                <td>Protectores</td>
                                <td></td>
                                </tr>
                                </table>
                
                CLASIFICACION PERFIL LIPIDICO:
                • Si el paciente sólo tiene el cLDL por fuera de la meta: Hipercolesterolemia aislada
                • Si el paciente tiene el cHDL y los TG por fuera de la meta: Dislipidemia mixta.
                • Si el paciente sólo tiene los TG por fuera de la meta: Hipertrigliceridemia aislada.
                • Si el paciente sólo tiene el cHDL por fuera de la meta: HDL bajo aislado.
                • Si el paciente tiene el cHDL por fuera de la meta y otra alteración: La alteración con HDL bajo
                
                FASE DE INTERVENCIÓN
                
                Después de realizada la valoración de EVS , se procederá a la estratificación del riesgo de los trabajadores de acuerdo a los siguientes criterios de evaluación.
                RIESGO MUY ALTO: empleados con uno o más de los siguientes factores de riesgo:
                • Enfermedades cardiovasculares manifiestas y en tratamiento médico activo
                • Diabetes Mellitus,
                • Antecedente de infarto Agudo al Miocardio o Enfermedad Cerebrovascular
                • Hipertensión
                • ,
                RIESGO ALTO: empleados con Diagnostico de Obesidad o más de los siguientes factores de riesgo:
                • Obesidad I.II y Mórbida
                • Diagnóstico de Síndrome Metabólico
                • Fumadores
                • Sedentarios
                • Circunferencia Abdominal mayor de 102 cms en hombres y mayor de 88 cms en mujeres.
                • Consumo habitual de licor
                RIESGO MEDIO: empleados con 1 de los siguientes factores de riesgo:
                • Sobrepeso
                • Fumadores
                • Sedentarios
                Según los resultados obtenidos en la fase diagnóstica, ingresaran al PROGRAMA RCV Y EVS los empleados clasificados en Riesgo MUY ALTO y en Riesgo ALTO
                El personal clasificado en Riesgo MEDIO Y SIN RIESGO ingresará en el programa de formación de Promoción y Prevención (P y P)';
                
                $Responsabilidades ='GERENCIA

                • Se implemente y desarrolle una política para el control de la exposición al riesgo de vapores orgánicos durante los procesos productivos de la empresa.
                • Todos los niveles de la organización conozcan y participen en la propuesta de medidas de intervención para el control del riesgo de la exposición a sustancias químicas y los vapores que estas generan.
                • Se estimule a los trabajadores, contratistas y demás personal en la participación y cooperación con el programa adoptando las prácticas seguras y demás medidas de control.
                • '.$Razon0.' reconoce la importancia de la supervisión en la administración del sistema de vigilancia para la exposición al factor de riesgo de químicos y sus vapores, por lo tanto apoya a las personas encargadas del seguimiento y facilita su gestión. El desempeño del programa es un indicador de éxito para la gestión del proceso de salud ocupacional de la compañía.
                • Facilitar la asistencia a las capacitaciones y a los exámenes periódicos establecidos.
                • Suministrar recursos económicos para mejorar las condiciones en el medio y en la fuente que genere la exposicion al riesgo.
                
                COORDINADORA SG- SEGURIDAD Y SALUD EN EL TRABAJO Y AMBIENTE
                
                • Será encargado de ejecutar e inspeccionar el seguimiento al Sistema de Vigilancia.
                • Inspeccionará periódicamente las áreas.
                • Capacitará al personal expuesto en conductas seguras.
                • Se encargará de hacer seguimiento a los indicadores.
                
                SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO (SG-SST)
                
                • Integrar el sistema a otros procesos de mejoramiento que estén en desarrollo en la institución y gestionar su implementación.
                • Garantizar la divulgación de la información y capacitación a todas las personas involucradas en el programa.
                • Mantener la documentación referente a los paraclínicos de control (espirometrías) de los trabajadores por el tiempo que determine la ley.
                • Realizar el análisis de la información y verificación del funcionamiento del programa y sus objetivos.
                • Implementar el procedimiento de entrega de elementos de protección personal.
                • Reunirse anualmente para consolidar información, proponer y estudiar mejoras, además de alimentar el sistema (cumplimiento de cronograma de capacitaciones, evaluaciones médicas, estudios de puesto de trabajo).
                
                • Realizar las mejoras propuestas en las investigaciones de los accidentes de trabajo.
                
                COLABORADORES
                
                Los trabajadores deben cumplir con la política de seguridad y salud en el Trabajo de '.$Razon0.' y acatar todos los requerimientos del sistema de vigilancia en el lugar de trabajo, tales como el cumplimiento de estándares y procedimientos de salud ocupacional para la el trabajo con químicos y el cumplimiento de las prácticas seguras definidas por la empresa. Esto incluye personal de contratistas y/o temporales que trabajen en '.$Razon0.'';
                
                $Planear ='';
                
                $Hacer ='';
                
                $Verificar ='';
                
                $Corregir ='';
                
                $sql_t = "INSERT INTO text_cardio (id_admin, Objetivo, Alcance, Definicion, Responsabilidades, Planear, Hacer, Verificar, Corregir) VALUES ('$Codigo','$Objetivo','$Alcance','$Definicion','$Responsabilidades','$Planear','$Hacer','$Verificar','$Corregir')";
                $resultado = $conexion->query($sql_t); 

                 $Actividad17 = 'Documentacion programa de estilos de vida saludable.';
                $Responsable17 = 'IPS CONSULTORA';
                $Periodicidad17 = 'ANUAL';
                
                $sql17 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad17', '$Responsable17', '$Periodicidad17', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql17);
                
                $Actividad18 = 'Estrategia de Intervencion: Priorizar empleados trazadores del diagnostico de condiciones de salud de los examenes periodicos 2 sem 2021.';
                $Responsable18 = 'Profesional SG- SST- IPS CONSULTORA';
                $Periodicidad18 = 'ANUAL';
                
                $sql18 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad18', '$Responsable18', '$Periodicidad18', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql18);
                
                $Actividad19 = 'ESTRATEGIA DE INTERVENCION: consulta por Nutricionista a los empleados.';
                $Responsable19 = 'Profesional SG- SST- IPS CONSULTORA';
                $Periodicidad19 = 'ANUAL';
                
                $sql19 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad19', '$Responsable19', '$Periodicidad19', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql19);
                
                $Actividad20 = 'ESTRATEGIA DE INTERVENCION: CONTROL por Nutricionista a los empleados.';
                $Responsable20 = 'Profesional SG- SST- IPS CONSULTORA';
                $Periodicidad20 = 'ANUAL';
                
                $sql20 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad20', '$Responsable20', '$Periodicidad20', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql20);
                
                $Actividad21 = 'ESTRATEGIA DE INTERVENCION: Interventoria al servicio de alimentacion.';
                $Responsable21 = 'Profesional SG- SST- IPS CONSULTORA';
                $Periodicidad21 = 'ANUAL';
                
                $sql21 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad21', '$Responsable21', '$Periodicidad21', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql21);
                
                $Actividad22 = 'Estrategia de Intervencion: Evaluacion por fisioterapia a empleados priorizados y definicion de recomendaciones de acuerdo a su condicion fisica.';
                $Responsable22 = 'Profesional SG- SST- IPS CONSULTORA';
                $Periodicidad22 = 'ANUAL';
                
                $sql22 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad22', '$Responsable22', '$Periodicidad22', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql22);
                
                $Actividad23 = 'Estrategia de intervención: Formacion promocion y prevencion " IMPORTANCIA DE LA ACTIVIDAD FISICA" maximo 10 personas taller teorico practico.';
                $Responsable23 = 'Profesional SG- SST -PERSONAL DE APOYO';
                $Periodicidad23 = 'ANUAL';
                
                $sql23 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad23', '$Responsable23', '$Periodicidad23', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql23);
                
                $Actividad24 = 'Estrategia de intervención: Formacion promocion y prevencion " PREVENCION DE CONSUMO DE SUSTANCIAS" taller teorio practico con sicologa.';
                $Responsable24 = 'Profesional SG- SST -PERSONAL DE APOYO';
                $Periodicidad24 = 'ANUAL';
                
                $sql24 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad24', '$Responsable24', '$Periodicidad24', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql24);
                
                $Actividad25 = 'Estrategia de intervención: CONTROL PERFIL LIPIDICO.';
                $Responsable25 = 'Profesional SG- SST -PERSONAL DE APOYO';
                $Periodicidad25 = 'ANUAL';
                
                $sql25 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad25', '$Responsable25', '$Periodicidad25', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql25);
                
                $Actividad26 = 'ACTUALIZACION PROGRAMA ESTILOS DE VIDA SALUDABLE :Con los certificados médicos ocupacionales se mantendrá actualizado el programa de estilos de vida saludable.';
                $Responsable26 = 'Profesional SG- SST';
                $Periodicidad26 = 'ANUAL';
                
                $sql26 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad26', '$Responsable26', '$Periodicidad26', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql26);
                
                $Actividad27 = 'SEGUIMIENTO AL PLAN DE ACCION: Evaluación, seguimiento y control del programa a través de los indicadores previamente establecidos.';
                $Responsable27 = 'Profesional SG- SST';
                $Periodicidad27 = 'ANUAL';
                
                $sql27 = "INSERT INTO cronograma_cardio (Codigo, Tipo, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '$Actividad27', '$Responsable27', '$Periodicidad27', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql27);

                $Tipo1 = 'COBERTURA';
                $Definicion1 = 'EMPLEADOS INCLUIDOS EN PROGRAMA EVS DE LA EMPRESA EN UN PERIODO DETERMINADO	';
                $Interpretacion1 = '% EMPLEADOS INCLUIDOS EN EL PROGRAMA ESTILOS DE VIDA SALUDABLE';
                $Fuente1 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador1 = '% de empleados';
                $Numerador1 = '# Empleados incluidos PROGRAMA EVS';
                $Denominador1 = '# de empleados base de datos';
                $Frecuencia1 = 'ANUAL';

                $sql17 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo1', '$Definicion1', '$Interpretacion1', '$Fuente1', '$Indicador1', '$Numerador1', '$Denominador1', '$Frecuencia1', NOW())";
                $resultado = $conexion->query($sql17);
                
                $Tipo2 = 'INCIDENCIA-COBERTURA';
                $Definicion2 = 'EMPLEADOS CON OBESIDAD DEL TOTAL EVALUADO';
                $Interpretacion2 = '% ESTADO NUTRICOINAL';
                $Fuente2 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador2 = '% Estado Nutricional';
                $Numerador2 = '# Empleados con obesidad';
                $Denominador2 = '# de empleados de la base de datos';
                $Frecuencia2 = 'ANUAL';

                $sql18 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo2', '$Definicion2', '$Interpretacion2', '$Fuente2', '$Indicador2', '$Numerador2', '$Denominador2', '$Frecuencia2', NOW())";
                $resultado = $conexion->query($sql18);
                
                $Tipo3 = 'INCIDENCIA';
                $Definicion3 = 'EMPLEADOS CON HIPERTENSION, DEL TOTAL EVALUADO';
                $Interpretacion3 = '% HIPERTENSOS';
                $Fuente3 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador3 = '% HTA';
                $Numerador3 = '# Empleados HTA';
                $Denominador3 = '# de empleados base de datos';
                $Frecuencia3 = 'ANUAL';

                $sql18 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo3', '$Definicion3', '$Interpretacion3', '$Fuente3', '$Indicador3', '$Numerador3', '$Denominador3', '$Frecuencia3', NOW())";
                $resultado = $conexion->query($sql18);
                
                $Tipo4 = 'INCIDENCIA';
                $Definicion4 = 'EMPLEADOS CON HIPERTENSION, DEL TOTAL EVALUADO';
                $Interpretacion4 = '% HIPERTENSOS';
                $Fuente4 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador4 = '% DIABETICOS';
                $Numerador4 = '# Empleados con dislipidemia';
                $Denominador4 = '# de empleados de base de datos';
                $Frecuencia4 = 'ANUAL';

                $sql19 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo4', '$Definicion4', '$Interpretacion4', '$Fuente4', '$Indicador4', '$Numerador4', '$Denominador4', '$Frecuencia4', NOW())";
                $resultado = $conexion->query($sql19);
                
                $Tipo5 = 'PROCESO- COBERTURA';
                $Definicion5 = 'EMPLEADOS CON ALTERACION DE  LIPIDOS DEL TOTAL EVALUADO';
                $Interpretacion5 = '% ALTERACION EN ALMACENAMIENTO DE LIPIDOS';
                $Fuente5 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador5 = '% DISLIPIDEMIA';
                $Numerador5 = '# Empleados DM';
                $Denominador5 = '# de empleados de base de datos';
                $Frecuencia5 = 'ANUAL';

                $sql20 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo5', '$Definicion5', '$Interpretacion5', '$Fuente5', '$Indicador5', '$Numerador5', '$Denominador5', '$Frecuencia5', NOW())";
                $resultado = $conexion->query($sql20);
                
                $Tipo6 = 'PROCESO- COBERTURA';
                $Definicion6 = 'EMPLEADOS CON ALTERACION DE  LIPIDOS DEL TOTAL EVALUADO';
                $Interpretacion6 = '% ALTERACION EN ALMACENAMIENTO DE LIPIDOS';
                $Fuente6 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador6 = '% DISLIPIDEMIA';
                $Numerador6 = '# Empleados DM';
                $Denominador6 = '# de empleados de base de datos';
                $Frecuencia6 = 'ANUAL';

                $sql21 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo6', '$Definicion6', '$Interpretacion6', '$Fuente6', '$Indicador6', '$Numerador6', '$Denominador6', '$Frecuencia6', NOW())";
                $resultado = $conexion->query($sql21);
                
                $Tipo7 = 'PROCESO- COBERTURA';
                $Definicion7 = 'TOTAL DE CONTROLES NUTRICIONALES ENCONTRADOS PARA CONTROL';
                $Interpretacion7 = '% CONTROLES';
                $Fuente7 = 'SVE CONTROL Y VIGILANCIA, LABORATORIOS, SEGUIMIENTOS';
                $Indicador7 = '% Controles RCV y Nutricion';
                $Numerador7 = '# Pacientes Priorizados atendidos en contro';
                $Denominador7 = '# de empleados programados control RCV EVS';
                $Frecuencia7 = 'ANUAL';

                $sql22 = "INSERT INTO indicadores_cardio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo7', '$Definicion7', '$Interpretacion7', '$Fuente7', '$Indicador7', '$Numerador7', '$Denominador7', '$Frecuencia7', NOW())";
                $resultado = $conexion->query($sql22);
                
            /*
                //SVE OSTEOMUSCULAR
                
                $Objetivo ='Implementar un Programa de Vigilancia Epidemiológica que permita identificar prevenir y controlar los casos existente con trastornos musculoesqueleticos, conocer la condición de salud musculo esquelética del personal de la Organización e identificar los factores de riesgo asociados a la exposición del riesgo de origen biomecánico y trastornos Osteomusculares, para establecer un diagnóstico precoz y medidas preventivas que contribuyan con el mejoramiento y la conservación y de la salud osteomuscular de los empleados de CONCESION LA PINTADA
                
                OBJETIVOS ESPECIFICOS

                1) Conocer la condición de salud musculo esquelética del personal de la Organización
                
                2) Evaluar el estado de salud de los trabajadores priorizados y realizar pruebas que permitan detectar precozmente estos trastornos.
                
                3) Proponer mecanismos de control técnicamente factibles para los peligros y riesgos detectados en áreas y puestos de trabajo.
                
                4) Identificar, Cuantificar, Monitorear, Intervenir y hacer seguimiento, de los Factores de Riesgo que puedan generar patologías musculoesqueléticas.
                
                5) Identificar las áreas y puestos de trabajo críticos de acuerdo con los factores de riesgo.
        
                6) Implementar controles para los factores de riesgo detectados, que permitan la minimización de las condiciones ergonómicas no favorables y de esta forma disminuir las tasas de incidencia de lesiones osteomusculares.
                
                7) Establecer campañas de promoción y prevención que contribuyan al autocuidado de los sistemas osteo – musculares.
                
                ';

                $Alcance ='El programa de gestión para la prevención de los desórdenes músculo esquelético de CONCESION LA PINTADA está orientado a caracterizar e identificar la población expuesta y así mismo prevenir, mitigar y controlar los Desórdenes Músculo Esqueléticos - DME derivados de las cargas físicas en este caso posturas prolongadas y movimientos repetitivos, realizando mayor énfasis en los Programas de Promoción de la salud y de los Entornos de vida Saludables.
                Serán objeto todos aquellos colaboradores y contratistas de la entidad que en virtud de la actividad desempeñada se encuentren expuestos a desarrollar lesiones y aparición de DME en miembros superiores, miembros inferiores y espalda relacionados con el trabajo y quienes han reportado sintomatología asociada a los DME.';
               
                $Definicion ='Considerando que los Desórdenes musculoesqueléticos (DME) son la primera causa de morbilidad laboral en Colombia, con tendencia a incrementarse, se establece como estrategia de intervención la vigilancia epidemiológica, entendida como un proceso lógico y práctico de evaluación permanente sobre la situación de salud de un grupo humano, que permite utilizar la información para tomar decisiones de intervención a nivel individual y colectivo con el fin de disminuir los riesgos de enfermar o morir.
                Los DME relacionados con el trabajo son entidades muy frecuentes y potencialmente discapacitantes, pero prevenibles. Comprenden un amplio número de entidades clínicas específicas incluyendo enfermedades de los músculos, tendones, vainas espinosas, síndromes de atrapamiento nerviosos, alteraciones articulares y neurovasculares.
                El sistema de vigilancia epidemiológico que se propone se enfocará en la prevención de todos los factores de riesgo que pueden ocasionar desórdenes musculoesqueléticos, así como adaptar el entorno general (productos, tareas, herramientas, espacios) a las necesidades de las personas propendiendo por el mejoramiento de la seguridad y el bienestar de los colaboradores, considerando tanto los factores biomecánicos relacionados con las condiciones de trabajo, como los factores individuales y organizacionales.
                El Sistema de vigilancia epidemiológico para la prevención de los desórdenes músculo esqueléticos servirá a la CONCESION LA PINTADA para identificar los procesos prioritarios desencadenantes de lesiones osteomusculares, estableciendo soluciones particulares a cada situación (proceso – individuo) con el fin de reducir, controlar y evitar las lesiones, mejorar la salud, aumentar la eficiencia y la productividad.
                
                Para la CONCESION LA PINTADA es claro que la exposición a factores de riesgo ergonómicos (físicos) en sus trabajadores, se presenta en todos los trabajadores (Administrativos y operativos), sin embargo y conforme a la matriz de identificación de peligros, evaluación y valoración del riesgo, así como también a los casos calificados con enfermedades laborales o comunes originados por dicha sintomatología, se hace indispensable la priorización de algunos cargos mas que otros para la intervencion prioritaria en el SISTEMA DE VIGILANCIA EPIDEMIOLÓGICA PARA LA PREVENCIÓN DE LOS DESÓRDENES MUSCULOESQUELÉTICOS, donde se recolecta de forma sistemática datos esenciales en los cambios de salud ergonómica de los trabajadores.
                Esta información debe ser veraz, oportuna, clara y confiable, así se podrá realizar un análisis e interpretación pertinente y oportuno que permita la detección y seguimiento de los casos donde se presenten desórdenes musculoesqueléticos en el lugar de trabajo en pro de la generación de estrategias de intervención preventivas, en pro del bienestar físico y mental de todos los trabajadores.

                FACTORES DE RIESGO
                
                Los factores de riesgo de los DME relacionados con el trabajo son: repetición, fuerza, carga estática, postura, precisión, igualmente se consideran otros como la demanda visual y la vibración. Los ciclos inadecuados de trabajo /descanso son factores de riesgo potencial de DME, si no se permiten suficientes períodos de recuperación antes del siguiente período de trabajo, no hay tiempo suficiente para el descanso fisiológico.
                También pueden intervenir factores ambientales, socioculturales o personales. Los DME son multifactoriales y en general es difícil detectar relaciones causa – efecto simple, no obstante, es importante documentar el grado de relación causal entre los factores laborales y los trastornos para establecer una adecuada prevención.
                
                FACTORES DE RIESGO ERGONÓMICO POR CARGA FÍSICA
                
                Son todos factores inherentes al proceso o tarea que incluye aspectos organizaciones de la interacción hombre-medio ambiente-condiciones de trabajo y productividad.
                La carga física está entendida como los requerimientos físicos que debe realizar el trabajador durante la jornada laboral, basada en dos tipos de trabajo muscular: estático y el dinámico.
                La carga estática se encuentra determinada por la contracción muscular continua y mantenida, que genera más fatiga que el esfuerzo dinámico o el movimiento; la caracterización de la carga estática se hace mediante la evaluación de las posturas. La postura de trabajo, dentro del esfuerzo estático, es la que un individuo adopta y mantiene para realizar su labor. La postura ideal y óptima dentro de esta concepción es la posición de los diferentes segmentos con respecto al eje corporal, con un máximo de eficacia, un mínimo consumo energético y un buen confort en la actividad.
                Las posturas son consideradas factores de riesgo de carga física cuando son:
                
                ● Prolongadas: Es decir el trabajador permanece en ella por más del 75% de la jornada laboral.
                ● Mantenidas: Cuando el trabajador adopta una postura biomecánica correcta por más de 2 horas sin posibilidad de realizar cambios posturales, y cuando la postura es biomecánicamente incorrecta y se mantiene por más de 20 minutos.
                ● Inadecuadas: Cuando el trabajador por hábitos posturales, o por el diseño del puesto de trabajo, adopta una postura incorrecta.
                ● Forzadas o extremas: Cuando el trabajador por el diseño del puesto de trabajo debe realizar movimientos que se salen de los ángulos de confort,
                ● Anti gravitacional: Cuando adopta posturas en las que algunos de los segmentos corporales deben realizar fuerza muscular en contra de la fuerza de la gravedad.

                La carga dinámica es la ocasionada por el trabajo muscular durante el movimiento repetitivo o durante acciones esforzadas como el levantamiento y transporte de cargas o pesos. Se convierte enfactor de riesgo cuando el esfuerzo realizado no es proporcional al tiempo de recuperación, cuando el esfuerzo se realiza sobre una carga estática alta, o cuando hay alto requerimiento de movimientos repetitivos.
                El diseño del puesto de trabajo también es importante y está determinado por las características del entorno de trabajo en relación con las áreas de trabajo, los planos, los espacios, las herramientas, los equipos, las máquinas de trabajo. Se convierten en factor de riesgo cuando esas condiciones del trabajo o requerimientos (Demandas) de la tarea no corresponden a las características físicas del trabajador.


                FACTOR DE RIESGO DE INSEGURIDAD
                Son todos los factores de riesgo que involucran aspectos relacionados con electricidad, explosión e incendio, mecánicos y locativos.
                
                ● Electricidad: Se refiere a los sistemas eléctricos de las máquinas, equipos, instalaciones locativas que conducen o generan energía dinámica o estática y que al entrar en contacto pueden provocar entre otras, lesiones como: quemaduras, shock, fibrilación ventricular, según sea la intensidad y el tiempo de contacto.
                
                ● Explosión e incendio (factores de riesgo fisicoquímico): Se considera a todos los objetos, elementos, sustancias, fuentes de calor o sistemas eléctricos que, en ciertas circunstancias de inflamabilidad, combustión o defectos, respectivamente, puedan desencadenar incendio y explosiones.
                
                ● Mecánicos: Este factor de riesgo hace referencia a todo lo relacionado con objetos, maquinas, equipos y herramientas que, por sus condiciones de funcionamiento, diseño, forma, tamaño, ubicación tiene la capacidad potencial de entrar en contacto con las personas o materiales provocando lesiones o daños.
                
                ● Locativos: Este factor de riesgo hace referencia a condiciones de las instalaciones o áreas de trabajo que bajo circunstancias no adecuadas pueden ocasionar accidentes de trabajo o pérdidas para la empresa, generar caídas, golpes, atrapamiento, etc., o se puede decir que es todo lo relacionado con infraestructura involucrando techos, paredes, escaleras, ventanas, sistemas de almacenamiento, etc., que en un momento determinado puedan producir lesiones personales y daños materiales (MINISTERIO DE LA PROTECCIÓN SOCIAL, 2011).
                
                La carga de trabajo tanto estática como dinámica, junto con los factores propios del trabajador se acumula ocasionando así la fatiga muscular. A medida que la fatiga se hace más crónica aparecen los espasmos musculares, el dolor y la lesión muscular, formándose un círculo vicioso de dolor.
                La patología osteomuscular es multifactorial; existen factores; existen factores biomecánicos, organizacionales, psicosociales e individuales que pueden ocasionar lesiones musculoesqueléticas.

                ● Factores biomecánicos:
                    ❖ Fuerza
                    ❖ Posturas riesgosas
                    ❖ Movimientos repetitivos
                    ❖ Movimientos de pronosupinación
                    ❖ Agarre por encima de los hombros
                    ❖ Brazos hacia atrás con los codos extendidos
                    ❖ Fuerza ejercida
                    ❖ Desviaciones extremas de muñeca
                    ❖ Presiones mecánicas
                    ❖ Plano de trabajo muy alto o muy bajo para la ejecución de la tarea
                    ❖ Uso de herramienta vibrátil
                    ❖ Uso de herramienta manual
                    ❖ Uso de guantes
                    ❖ La exposición al frío.
                ● Factores psicosociales:
                    ❖ Estrés
                    ❖ Poca autonomía
                    ❖ Malas relaciones con superiores
                    ❖ Malas relaciones con colegas
                    ❖ Riego de perder el trabajo.
                ● Factores organizacionales:
                    ❖ Clima social de la empresa
                    ❖ Contenido del trabajo
                    ❖ Nivel de responsabilidad
                    ❖ Monotonía
                    ❖ Falta de pausas
                    ❖ Falta de rotación
                    ❖ Supervisión
                    ❖ Trabajo contrarreloj
                    ❖ Horarios de trabajo (Horas extras, turnos)
                    ❖ Relaciones con los superiores
                    ❖ Relaciones con sus colegas
                    ❖ Capacitación en higiene postural
  ';
                
                $Responsabilidades ='';
                       
                $Planear ='';
                
                $Hacer ='';
                
                $Verificar ='';
                
                $Corregir ='';
                
                $sql = "INSERT INTO text_visual (id_admin, Objetivo, Alcance, Definicion, Responsabilidades, Planear, Hacer, Verificar, Corregir) VALUES ('$Codigo','$Objetivo','$Alcance','$Definicion','$Responsabilidades','$Planear','$Hacer','$Verificar','$Corregir')";
                $resultado = $conexion->query($sql); 

                $Grupo1_osteo = 'Grupo 1';
                $Descripcion1_osteo =  'Corresponde a aquellos trabajadores quienes en la encuesta para deteccion de sintomas osteomusculares no presenta notificacion de novedades en ningun segmento corportal encuestado';
                $Individual1_osteo =  'Encuesta de percepción del riesgo y de sintomatología músculo esquelética anual:
- Inclusión a programa de pausa activas y actividad fisica que cuente la empresa.
- Capacitación y entrenamiento en escuela de prevención.
- Exámenes Médicos Ocupacionales Periódicos.';
                $Ambiental1_osteo =  'No requiere en el momento acciones de ajuste por no presentar patologías osteomusculares de control.';
                $Periodicidad1_osteo = 'SEGUIMIENTO ANUAL';
                $Cantidad1_osteo = '0';
                $Inspecciones1_osteo = '0';
            
                $sql = "INSERT INTO grupoges_osteo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Inspecciones, Fecha_registro) VALUES ('$Codigo','$Grupo1_osteo', '$Descripcion1_osteo', '$Individual1_osteo', '$Ambiental1_osteo', '$Periodicidad1_osteo', '$Cantidad1_osteo', '$Inspecciones1_osteo', NOW())";
                $resultado = $conexion->query($sql);
                
                $Grupo2_osteo = 'Grupo 2';
                $Descripcion2_osteo =  'Corresponde a los trabajadores identificados en la encuesta de sintomas osteomusculares, con 1 a 3 segmentos en riegos medio.';
                $Individual2_osteo =  'Vigilancia médica por entidad de salud correspondiente
Encuesta de percepción del riesgo y de sintomatología músculo esquelética anual:
- Seguimiento a recomendaciones médico – laborales. (si presenta).
- Inclusión a escuelas terapéuticas segmentos corporales.
- Seguimiento a sintomatología. 
- Capacitación y entrenamiento en escuela de prevención.
- Exámenes Médicos Ocupacionales Periódicos.
- Seguimiento Fisioterapéutico.
- Inspeccion puesto de trabajo.';
                $Ambiental2_osteo =  'Inspección de puesto de trabajo, rotación, capacitación, actividades de prevención, induccion y/o reinduccion sobre posturas y manejo de cargas , ajueste en puestos de trabajo en caso de requerir según resultados inspecciones';
                $Periodicidad2_osteo = 'SEGUIMIENTO ANUAL';
                $Cantidad2_osteo = '0';
                $Inspecciones2_osteo = '0';
            
                $sql = "INSERT INTO grupoges_osteo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Inspecciones, Fecha_registro) VALUES ('$Codigo','$Grupo2_osteo', '$Descripcion2_osteo', '$Individual2_osteo', '$Ambiental2_osteo', '$Periodicidad2_osteo', '$Cantidad2_osteo', '$Inspecciones2_osteo', NOW())";
                $resultado = $conexion->query($sql);
                
                $Grupo3_osteo = 'Grupo 3';
                $Descripcion3_osteo =  'Corresponde a los trabajadores identificados en la encuesta de sintomas osteomusculares, con 1 o mas segmentos en riegos alto o 4 o mas segmentos en riesgo medio.';
                $Individual3_osteo =  'Vigilancia médica entidad de salud correspondiente.
Exámenes complementarios.
Retirar exposición si el origen corresponde a labor.
Encuesta de percepción del riesgo y de sintomatología músculo esquelética anual.
Análisis de síntomas. Recomendaciones terapéuticas específicas, seguimiento a recomendaciones de salud, inclusión a escuelas terapéuticas,
- Seguimiento por el equipo de medicina preventiva.
- seguimiento individual sobre condiciones de trabajo ( exposición a carga física, aspectos individuales, gestión para la reubicación laboral).
- Exámenes Médicos Ocupacionales Periódicos.
- Seguimiento Fisioterapéutico y médico EPS o empresa.
- Tratamiento por EPS y/o ARL personalizado.
- Seguimiento a recomendaciones médicas LABORALES.
- Inspecciones puesto de trabajo.';
                $Ambiental3_osteo =  'Inspección de puesto de trabajo.
Retirar de exposición, reubicar, revisar las medidas de control técnicas y organizativas.
Análisis cuantitativo del puesto de trabajo.
Estudio de puesto de trabajo.
Rediseño de puesto de trabajo.';
                $Periodicidad3_osteo = 'SEGUIMIENTO SEMESTRAL';
                $Cantidad3_osteo = '0';
                $Inspecciones3_osteo = '0';
            
                $sql = "INSERT INTO grupoges_osteo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Inspecciones, Fecha_registro) VALUES ('$Codigo','$Grupo3_osteo', '$Descripcion3_osteo', '$Individual3_osteo', '$Ambiental3_osteo', '$Periodicidad3_osteo', '$Cantidad3_osteo', '$Inspecciones3_osteo', NOW())";
                $resultado = $conexion->query($sql);
                
                $Grupo4_osteo = 'Grupo 4';
                $Descripcion4_osteo =  'Corresponde a los trabajadores que cursen con una enfermedad Laboral Diagnosticada, así como los trabajadores que se encuentren en proceso de calificación de origen y/o enfermedad de origen laboral relacionada con DME, tambien aquellos que a traves de encuesta de sintomas osteomusculares presentes 1 o mas segmentos con riesgo critico. Nota: Los trabajadores que presenten enfermedad de origen común, se remitirá a su EPS correspondiente para el tratamiento, y si es el caso, inicio de proceso de calificación de origen.';
                $Individual4_osteo =  'Vigilancia médica por entidad de salud correspondiente.     
Citas de control Exámenes complementarios.
Retirar exposición.
Encuesta de percepción del riesgo y de sintomatología músculo esquelética
Análisis de síntomas. Recomendaciones terapéuticas específicas, seguimiento a recomendaciones de salud, inclusión a escuelas terapéuticas,
- Seguimiento por el equipo de medicina preventiva.
- seguimiento individual sobre condiciones de trabajo ( exposición a carga física, aspectos individuales, gestión para la reubicación laboral).
- Inspeccion puesto de trabajo y evaluacione de puesto de trabajo.';
                $Ambiental4_osteo =  'Inspección de puesto de trabajo.
Retirar de exposición, reubicar, revisar las medidas de control técnicas y organizativas.
Análisis cuantitativo del puesto de trabajo.
Estudio de puesto de trabajo.
Rediseño de puesto de trabajo.';
                $Periodicidad4_osteo = 'SEGUIMIENTO SEMESTRAL O EN RELACION A FRECUENCIA DE CONTROLES POR PATOLOGIAS CRONICAS';
                $Cantidad4_osteo = '0';
                $Inspecciones4_osteo = '0';
            
                $sql = "INSERT INTO grupoges_osteo (id_admin, Grupo, Descripcion, Individual, Ambiental, Periodicidad, Cantidad, Inspecciones, Fecha_registro) VALUES ('$Codigo','$Grupo4_osteo', '$Descripcion4_osteo', '$Individual4_osteo', '$Ambiental4_osteo', '$Periodicidad4_osteo', '$Cantidad4_osteo', '$Inspecciones4_osteo', NOW())";
                $resultado = $conexion->query($sql);
                
                $Grupo = '';
                $Descripcion =  '';
                $Individual =  '';
                $Ambiental =  '';
                $Periodicidad = '';
                $Cantidad = '';
                $Inspecciones = '';

                
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);

                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'DISEÑAR EL PLAN DE TRABAJO';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Diseñar el plan de trabajo para el próximo ciclo basándose en los resultados y lecciones aprendidas del año actual.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'REVISIÓN DE INFORMES DE ACCIDENTES';
                $Responsable = 'MÉDICO SST Y GRUPO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Analizar informes de accidentes laborales para identificar problemas ergonómicos.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE RESULTADOS Y ELABORACION DE PLANES DE ACCION';
                $Responsable = 'Equipo SST / Médico Ocupacional';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Interpretar los hallazgos del tamizaje e inspecciones para establecer un plan de intervención formal y priorizado.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'ANALISIS DE CONDICIONES DE SALUD Y DEFINICIONES DE PRESUPUESTOS';
                $Responsable = 'Líder SST / Médico Ocupacional / Gerencia SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'Consolidar la línea base del PVE a partir de los resultados del año anterior y asegurar los recursos para la ejecución.';
                $sql = "INSERT INTO planificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);

                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'PROGRAMA DE PAUSAS ACTIVAS IMPLEMENTACION Y FOMENTO SEGUN SEGMENTOS RIESGO CRITICO-ALTO';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'DIARIO';
                $Observaciones = 'Promover la recuperación física y mental durante la jornada laboral a través de rutinas de estiramiento y movilidad.';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TALLERES DE ERGONOMÍA -CAPACITACION EN HIGIENE POSTURAL Y MANEJO DE CARGAS';
                $Responsable = 'GRUPO SST, FISIOTERAPEUTA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Educar a los trabajadores en prácticas seguras para la prevención de desórdenes musculoesqueléticos (DME).';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'IMPLEMENTACIÓN DE AJUSTES ERGONÓMICOS EN PUESTO DE TRABAJO QUE SE REQUIERAN';
                $Responsable = 'GRUPO SST, FISIOTERAPIA, ERGONOMO, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'Realizar ajustes en los puestos de trabajo seún las evaluaciones';
                $sql = "INSERT INTO implementacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REALIZACIÓN DE EXÁMENES MÉDICOS INICIALES Y PERIÓDICOS ESPECÍFICOS';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, FISIOTERAPEUTA';
                $Periodicidad = 'INICIAL Y ANUAL';
                $Observaciones = 'REALIZAR EXÁMENES MÉDICOS ESPECÍFICOS AL INICIO Y PERIÓDICAMENTE SEGUN ESTABLECIDO EN PROFESIOGRAMA DE LA EMPRESA';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'SEGUIMIENTO DE CASOS Y EVALUACIÓN DE EFICACIA DE INTERVENCIONES';
                $Responsable = 'MEDICO LABORAL, GRUPO SST, ERGONOMO';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'REALIZAR SEGUIMIENTO Y EVALUAR LA EFECTIVIDAD DE LAS INTERVENCIONES REALIZADAS.';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'MESA LABORAL';
                $Responsable = 'GRUPO SST, MEDICO LABORAL';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'EVALUACION DE CASOS CRONICOS PATOLOGIAS OSTEOMUSCULARES QUE REQUIEREN ACOMPAÑAMIENTO PARA REINTEGRO O REASIGNACION TEMPORAL DE FUNCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'TAMIZAJE OSTEOMUSCULAR / ENCUESTA DE MORBILIDAD SENTIDAD-CEDIVIRTUAL';
                $Responsable = 'FISIOTERAPEUTA/ENFERMERÍA SST/GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'IDENTIFICAR DE FORMA TEMPRANA LA POBLACIÓN TRABAJADORA CON SINTOMATOLOGÍA PARA FOCALIZAR LAS INTERVENCIONES';
                $sql = "INSERT INTO hacer4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
               
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'SEMESTRAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO verificacion4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);

                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2017', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);

                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2018', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2019', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2027', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'REVISIÓN Y ACTUALIZACIÓN DE PROTOCOLOS Y PROCEDIMIENTOS';
                $Responsable = 'MEDICO LABORAL, ERGONOMISTA, GRUPO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'REVISAR Y ACTUALIZAR PROTOCOLOS Y PROCEDIMIENTOS ERGONÓMICOS.';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $Actividad = 'EVALUAR TENDENCIA DE EVENTOS OSTEOMUSCULARES INDICADORES DEL PVE';
                $Responsable = 'GRUPO SST, MEDICO SST';
                $Periodicidad = 'ANUAL';
                $Observaciones = 'DETERMINAR EL IMPACTO SOBRE DISMINUCION DE CASOS EVENTOS MUSCULARES CON MEDIDAS DE CONTROL IMPLEMENTADAS';
                $sql = "INSERT INTO auditoria4 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2028', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '$Observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PREVALENCIA GENERAL DE SINTOMATOLOGÍA OSTEOMUSCULAR';
                $Definicion = 'Proporción de trabajadores que reportan síntomas osteomusculares en alguna región corporal durante un periodo específico, independientemente de si han sido diagnosticados o calificados como enfermedad laboral.';
                $Interpretacion = 'Mide la carga total de sintomatología osteomuscular en la población trabajadora. Permite identificar áreas corporales más afectadas.';
                $Fuente = 'Encuestas de morbilidad sentida, auto-reportes de síntomas, registros de consulta médica general, resultados de exámenes médicos ocupacionales periódicos (énfasis en sistema osteomuscular).';
                $Indicador = 'RESULTADO';
                $Numerador = 'Número de trabajadores que reportan síntomas osteomusculares';
                $Denominador = 'Número total de trabajadores encuestados o evaluados en el mismo periodo';
                $sql = "INSERT INTO indicadores_osteo (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Meta, Resultado, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', 0, 0, NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PREVALENCIA DE DESORDEN MUSCULOESQUELÉTICO (DME) DE ORIGEN LABORAL';
                $Definicion = 'Proporción de trabajadores con un diagnóstico médico confirmado de un Desorden Musculoesquelético, que ha sido calificado como de origen laboral, en un periodo determinado.';
                $Interpretacion = 'Indica la magnitud de los DME reconocidos como laborales dentro de la población trabajadora.';
                $Fuente = 'Diagnósticos médicos de DME calificados como enfermedad laboral por la ARL o Juntas de Calificación de Invalidez, historias clínicas ocupacionales con diagnóstico y nexo causal establecido, registros del SG-SST.';
                $Indicador = 'RESULTADO';
                $Numerador = 'Número de casos nuevos y antiguos de DME de origen laboral';
                $Denominador = 'Promedio de trabajadores expuestos a los factores de riesgo ergonómico asociados en el mismo periodo';
                $sql = "INSERT INTO indicadores_osteo (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Meta, Resultado, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', 0, 0, NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'INCIDENCIA DE NUEVOS CASOS DE DESORDEN MUSCULOESQUELETICO';
                $Definicion = 'Número de casos nuevos de Desórdenes Musculoesqueléticos (DME) diagnosticados desarrollan en una población de trabajadores expuestos a factores de riesgo ergonómico, durante un periodo de tiempo específico.';
                $Interpretacion = 'Mide la velocidad con la que aparecen nuevos casos de DME laborales. Es un indicador clave de la efectividad de las intervenciones preventivas implementadas.';
                $Fuente = 'Reportes de alteraciones musculares, diagnósticos médicos nuevos de DME, investigaciones de enfermedad laboral, seguimiento de casos reportados en exámenes periódicos que confirman un nuevo DME laboral.';
                $Indicador = 'RESULTADO';
                $Numerador = 'Número de casos nuevos de DME en poblacion trabajadora';
                $Denominador = 'Número total de trabajadores expuestos a los factores de riesgo ergonómico sin el DME específico al inicio del periodo';
                $sql = "INSERT INTO indicadores_osteo (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Meta, Resultado, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', 0, 0, NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'INDICADOR DE IMPLEMENTACIÓN Y PROCESO DEL PROGRAMA DE CONSERVACIÓN OSTEOMUSCULAR';
                $Definicion = 'Medida que evalúa el grado de ejecución de las actividades y componentes del Programa de Vigilancia Epidemiológica Osteomuscular, en cumplimiento al CRONOGRAMA';
                $Interpretacion = 'Evalúa la conformidad y el avance en la implementación de las medidas preventivas y de control para los DME.';
                $Fuente = 'Registros de inspecciones ergonómicas, matrices de identificación de peligros y valoración de riesgos énfasis en biomecánicos, planes de acción controles implementados , registros de asistencia a capacitaciones Etc.';
                $Indicador = 'RESULTADO';
                $Numerador = 'Número de actividades o elementos del PVE Osteomuscular implementados satisfactoriamente';
                $Denominador = 'Número total de actividades o elementos del PVE Osteomuscular planificados';
                $sql = "INSERT INTO indicadores_osteo (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Meta, Resultado, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', 0, 0, NOW())";
                $resultado = $conexion->query($sql);





























                
                /*
                //SVE RESPIRATORIO
                
                $Objetivo ='Implementar un Sistema de Vigilancia epidemiológico que permita detectar tempranamente los trabajadores con alteraciones en el sistema respiratorio y definir un control integral de los factores de riesgo asociados al uso de   sustancias químicas dentro del proceso de trabajo de la  empresa '.$Razon0.' que generan vapores   orgánicos, con el fin de evitar posibles efectos sobre la salud de los trabajadores o la progresión de éstos.  

                OBJETIVOS ESPECIFICOS
                
                1) Identificar los puestos de trabajo que  presentan exposición a vapores orgánicos y el personal que labora en estos.
                
                2) Evaluar periódicamente el estado de salud de los trabajadores expuestos mediante la realización de una evaluación médica por especialista en salud ocupacional o medicina laboral a todos los funcionarios expuestos con énfasis en examen respiratorio. Aplicación de cuestionario de sintomas respiratorios
                
                3) Se realizará seguimiento  a las personas cuyos resultados de los exámenes estén alterados, éstos serán remitidos a su EPS para que se dé el manejo adecuado y se emitan recomendaciones en caso de ser necesario.
                
                4) Capacitar a los trabajadores sobre el riesgo, las condiciones seguras de trabajo, las medidas de control existentes y las consecuencias para  la salud  y sobre la adopción de comportamientos de trabajo seguros. Promover la adopción de comportamientos seguros en el trabajo y por fuera de él. 
                
                5) Ejecutar el procedimiento de entrega de elementos de protección personal que corresponden al riesgo de exposición a vapores orgánicos y dejar documentación respecto a la capacitación sobre su uso adecuado y su entrega.';
                
                $Alcance ='Este programa es de obligatorio cumplimiento para todos los trabajadores de la empresa '.$Razon0.' y de sus contratistas, en todos los puestos de trabajo de los procesos productivos, donde se ha identificado el riesgo de exposición a vapores orgánicos que puedan generar alteraciones en la salud o enfermedades laborales.';
               
                $Definicion ='Sistema de Vigilancia Epidemiológica: proceso sistemático de evaluación de la situación de salud de las personas que permite en base a este la toma de decisiones para disminuir los riesgos de enfermar o morir.       

                Sustancias Químicas: toda sustancia orgánica e inorgánica, natural o sintética que durante la fabricación, manejo, transporte, almacenamiento o uso, puede incorporarse al ambiente en forma de polvo, humo, gas o vapor, con efectos irritantes, corrosivos, asfixiantes o tóxicos en cantidades que tengan probabilidades de lesionar la salud de las personas que entran en contacto con ellas”.
                
                EPP: Elementos de Protección Personal.
                
                GES: son los trabajadores que tienen el mismo perfil de exposición en términos de la frecuencia con que desarrollan la tarea u oficio, los materiales utilizados, los procesos implicados y en general en la forma de desarrollo de la actividad. 
                
                DEFINICION DE CASOS
                
                SINTOMAS		
                * Irritación de las mucosas, nasal y de vías respiratorias.
                
                * Síntomas pulmonares inespecíficos (tos y expectoración) sin enfermedad definida.
                
                * Enfermedades y cambios respirato¬rios crónicos:
                
                Enfermedad pulmonar obstructiva crónica (bronquitis crónica o enfisema pulmonar, anotando que el cigarrillo es la mayor causa descrita para EPOC); y Problemas respiratorios por sensibilización (anotando que la exposición a sílice no se asocia con asma de acuerdo con la revisión hecha)
                
                METODO CONTROL Y SEGUIMIENTO	
                Uso de elementos de proteccion personal
                Cuestionario de Sintomas Respiratorios
                Espirometria Tamiz"	
                
                SINTOMAS		
                "* Aumento de la incidencia de tuberculosis en casos de silicosis
                
                * Aumento de la incidencia de cáncer pulmonar en casos de silicosis y tabaquismo.
                
                * Neumoconiosis (silicosis)."		
                		
                METODO CONTROL Y SEGUIMIENTO		
                Rayos X de tórax, La radiografía también debe servir para detectar signos de afectación de las vías aéreas inferiores o del parénquima pulmonar en casos de irritación.	
                
                MECANISMO LESION SILICOSIS				
                Se produce fibrosis por dos mecanismos básicos y al parecer ambos son derivados de la falta de solubilidad de las partículas de sílice cristalina en los fluidos y tejidos corporales:
                
                Directo: daño químico de la membrana celular por los cristales
                
                Indirecto: por activación de los macrófagos alveolares que liberan citocinas que reclutan y activan de un lado a los fibroblastos (que proliferan y producen mayores cantidades de colágeno) y del otro a los linfocitos T, que a su vez reclutan una población secundaria de monocitos – macrófagos.				
                				
                FORMAS DE PRESENTACION SILICOSIS
                <table class="table3" style="text-align:center;margin-top:-92em">
                <tr style="background:#ffd6cc;color:#000000;border:1px solid #71788e!important;">
                <th>FORMA CLÍNICA</th>
                <th>TIEMPO DE EXPOSICIÓN</th>
                <th>RADIOLOGÍA</th>
                <th>SÍNTOMAS</th>
                <th>FUNCIÓN PULMONAR</th>
                </tr>
                <tr>
                <td style="font-family:verdanab">Crónica simple</td>
                <td>> 10 años </td>
                <td>Nódulos < 10 mm</td>
                <td>Ninguno</td>
                <td>Normal</td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Crónica complicada</td>
                <td>> 10 años </td>
                <td>Masas > de 1 cm </td>
                <td>Disnea, tos </td>
                <td>Alteración obstructiva o restrictiva de gravedad variable </td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Fibrosis pulmonar intersticial </td>
                <td>> 10 años </td>
                <td>Patrón retículo-nodular difuso </td>
                <td>Disnea, tos </td>
                <td>Alteración restrictiva con descenso en la capacidad de difusión </td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Acelerada</td>
                <td>5-10 años </td>
                <td>Nódulos y masas de rápida progresión </td>
                <td>Disnea, tos </td>
                <td>Deterioro rápido de la función pulmonar (FVC y FEV1) </td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Aguda</td>
                <td>< 5 años </td>
                <td>Patrón acinar bilateral similar a proteinosis alveolar </td>
                <td>Disnea</td>
                <td>Alteración generalmente restrictiva con descenso en la capacidad de difusión </td>
                </tr>
                </table>
                
                CRITERIOS DIAGNOSTICOS SILICOSIS				
                <table class="table3" style="text-align:center;margin-top:-55em">
                <tr>
                <td style="font-family:verdanab;width:5%!important;font-size:17px">1</td>
                <td  style="font-family:verdanab;width:10%!important"">HISTORIA EXPOSICION OCUPACIONAL</td>
                <td style="text-align:left">A partículas <10 μm de diámetro de sílice cristalina. Usualmente el periodo de latencia para la aparición de la enfermedad es mayor de 10 años, aunque hay casos agudos poco comunes que se presentan dentro de los primeros meses de exposición masiva al agente, que deben documentarse.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important;font-size:17px"">2</td>
                <td  style="font-family:verdanab;width:10%!important">ESTUDIOS IMAGENOLOGICOS (RX TORAX-TAC)</td>
                <td style="text-align:left">Las alteraciones radiológicas suelen ser las primeras en ser detectadas (hasta en un 90%), este criterio es básico para el diagnóstico más temprano de la enfermedad. Pero las anomalías significativas se suelen observar hasta 15 o 20 años después del inicio de la exposición. Para la lectura de las radiografías de tórax se debe utilizar la versión vigente de la clasificación internacional de la OIT.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important;font-size:17px"">3</td>
                <td style="font-family:verdanab;width:10%!important">HALLAZGOS PATOLOGICOS</td>
                <td style="text-align:left">Nódulos silicóticos característicos en áreas con aspecto patológico según el TAC. Son nódulos concéntricos de colágeno en el tejido pulmonar, con hialinización central, zona periférica celular y partículas birrefringentes bajo luz polarizada. En casos agudos hay exudado alveolar positivo a la coloración de Schiff e infiltrados celulares de las paredes alveolares. 
                La sola presencia de cierto depósito inorgánico pulmonar no es diagnóstica porque esta puede existir en población general (http://www.socalpar.es/guias_clinicas/epid_separ.pdf).
                El lavado bronco-alveolar es más orientativo que diagnóstico, en especial en el caso de asbesto, evidenciando la presencia de minerales (ver http://www.socalpar.es/guias_clinicas/epid_separ.pdf). Se puede indicar este examen para (a) documentar la exposición a polvos inorgánicos (b) constatar la presencia y tipo de alveolitis y (c) excluir otra causa de enfermedad pulmonar intersticial (sarcoidosis, hemosiderosis, infección o neoplasia).</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important;font-size:17px">4</td>
                <td style="font-family:verdanab;width:10%!important">ESPIROMETRÍA</td>
                <td style="text-align:left">Suministra información funcional importante, pero por lo general tardía, lo que limita su utilidad empleándose entonces más como criterio pronóstico. Las alteraciones suelen corresponder a un patrón restrictivo, pero también se observan patrones obstructivo o mixto lo que dificulta su interpretación. </td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important;font-size:17px">5</td>
                <td style="font-family:verdanab;width:10%!important">SÍNTOMAS CLÍNICOS</td>
                <td style="text-align:left">En general son tardíos e inespecíficos, excepto en el caso de silicosis aguda. Uno de los principales síntomas es la disnea, por lo general progresiva, cuya gravedad se relaciona con la magnitud de los conglomerados silicóticos. Puede acompañarse de tos, expectoración y pérdida de peso.</td>
                </tr>
                </table>		
                				
                CLASIFICACION DE CASOS  Y CONDUCTA EN DIAGNOSTICO DE SILICOSIS						
                <table class="table3" style="text-align:center;margin-top:-29.5em">
                <tr>
                <td rowspan="3" style="font-family:verdanab;width:5%!important;font-size:14px">CASOS</td>
                <td  style="font-family:verdanab;width:10%!important"">TEMPRANO</td>
                <td style="text-align:left">Aquellos con cambios iniciales de la función respiratoria, que aún no alcanzan a alterar los valores de espirometría (CVF, VEF1 y VEF1/CVF), pero pueden mostrar alteraciones radiológicas muy tempranas. </td>
                </tr>
                <tr>
                <td  style="font-family:verdanab;width:10%!important">CLÍNICO</td>
                <td style="text-align:left">Cuando el caso está más avanzado y se manifiesta con síntomas clínicos, con cambios leves radiológicos o de la función respiratoria</td>
                </tr>
                <tr>
                <td  style="font-family:verdanab;width:10%!important">CALIFICACIÓN</td>
                <td style="text-align:left">Cuando hay cambios radiológicos o una alteración significativa de la función respiratoria, que afecta la capacidad laboral o el desempeño de la persona.</td>
                </tr>
                </table>			
                	
                DIAGNOSTICOS DIFERENCIALES SILICOSIS				
                Ante hallazgos sugestivos de silicosis, en especial radiológicos, se deben considerar otras opciones incluyendo: sarcoidosis, tuberculosis pulmonar aislada, microlitiasis y linfangitis carcinomatosa.
                
                Usualmente el diagnóstico se logra a través de la revisión detallada de los hallazgos radiológicos, la historia clínica, una valoración cuidadosa del paciente y si es el caso el resultado de biopsia pulmonar
                				
                CRITERIOS PARA EL DIAGNOSTICO DE ENFERMEDAD LABORAL				
                La historia laboral es imprescindible para estimar la exposición acumulada a polvo de sílice, y debe incluir la pertinente información. En ocasiones las rotaciones en los puestos de trabajo pueden dificultar la realización de una adecuada historia laboral, que debería incluir:				
                <table class="table3" style="text-align:center;margin-top:-40em">
                <tr>
                <td rowspan="6" style="font-family:verdanab;width:3%!important;font-size:14px">CRITERIOS</td>
                <td style="text-align:left">Actividad laboral actual y previa, reflejando el tiempo de exposición a sílice cristalina.</td>
                </tr>
                <tr>
                <td style="text-align:left">El individuo debe estar expuesto a agresores respiratorios, durante un tiempo y concentración suficientes y relacionados con el tipo de efecto encontrado</td>
                </tr>
                <tr>
                <td style="text-align:left">La base del diagnóstico es la sospecha clínica, el cuadro clínico debe ser compatible con el diagnóstico.</td>
                </tr>
                <tr>
                <td style="text-align:left">Debe haber una relación temporal entre el inicio de la enfermedad y la exposición, pero por lo general no puede asignarse una fecha exacta de iniciación.</td>
                </tr>
                <tr>
                <td style="text-align:left">El curso y pronóstico se pueden influenciar por medidas de prevención y control.</td>
                </tr>
                <tr>
                <td style="text-align:left">Medición del polvo respirable, con el fin de conocer el riesgo acumulado al que han estado expuestos (en las ocasiones que se encuentre disponible dicha información).</td>
                </tr>
                </table>				
                	
                SILICOSIS PREVENCION				
                <table class="table3" style="text-align:center;margin-top:-27em">
                <tr>
                <td style="font-family:verdanab;width:5%!important">PREVENCIÓN PRIMARIA</td>
                <td style="text-align:left">Control de niveles de polvo respirable. 
                Recomendar medidas de protección personal </td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:10%!important">PREVENCIÓN SECUNDARIA</td>
                <td style="text-align:left">Vigilancia de trabajadores expuestos.
                Deshabituación tabáquismo.
                Control de infección tuberculosa.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important">PREVENCIÓN TERCIARIA</td>
                <td style="text-align:left">Evitar exposición a inhalación de polvo.
                Comunicar casos, recomendar evaluación de enfermedad profesional.
                Control de infección tuberculosa.
                Tratamiento de limitación al flujo aéreo y de la insuficiencia respiratoria.</td>
                </tr>
                </table>		
                
                CRITERIOS DE APTITUD LABORAL				
                Este dictamen será fruto del reconocimiento médico realizado, según lo establecido en programa de seguimiento examenes periodicos, asociado a riesgo de exposicion, matriz de peligros y Profesiograma de la empresa.
                A continuación se propone una clasificación de los hallazgos del examen de salud para facilitar el proceso de toma de decisión en la emisión de conclusiones sobre la aptitud laboral, debera ser compartida y conocidad por el personal medico evaluador.				
                
                VIGILANCIA INDIVIDUAL DE LA SALUD 				
                <table class="table3" style="text-align:center;margin-top:-45em">
                <tr>
                <th style="font-family:verdanab;width:5%!important">TIPO DE EXAMEN</th>
                <th style="text-align:left">CONTENIDO</th>
                <th style="text-align:left">PERIODICIDAD</th>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important">RECONOCIMIENTO INCIAL DE INGRESO</td>
                <td style="text-align:left">
                <span style="font-family:verdanab">Historia medica</span> (habitos toxicos como tabaquismo, enfermedades pulmonares).
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto).
                <span style="font-family:verdanab">Examen fisico pulmonar</span> (auscultacion-palpacion-caracteriticas del torax).
                <span style="font-family:verdanab">Estudio imágenes:</span> Radiografia torax PA-LATERAL lectura ILO.
                <span style="font-family:verdanab">Funcion Pulmonar</span>: Espirometria con criterios de lectura SEPAR.
                <span style="font-family:verdanab">Prueba de tuberculina</span> PPD en labores determinadas fija exposicion SILICE.
                <span style="font-family:verdanab">Electrocardiogama</span> a mayores de 35 años.
                </td>
                <td style="text-align:left">INGRESO, inmediato antes de iniciar posible exposicion.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important">RECONOCIMIENTO PERIODICO Y SEGUIMIENTO</td>
                <td style="text-align:left">
                <span style="font-family:verdanab">Historia medica</span> (habitos toxicos como tabaquismo, enfermedades pulmonares)
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto)
                <span style="font-family:verdanab">Examen fisico pulmonar</span> (auscultacion-palpacion-caracteriticas del torax)
                <span style="font-family:verdanab">Funcion Pulmonar:</span>Espirometria con criterios de lectura SEPAR
                <span style="font-family:verdanab">Electrocardiogama</span> a mayores de 35 años
                </td>
                <td style="text-align:left">Requerimiento para segumiento ANUAL,excepto en lo correspondiente
                a la exploración radiológica, que se realizará en los siguientes supuestos y con las periodicidades que a continuación se señalan.</td>
                </tr>
                <tr>
                <td style="font-family:verdanab;width:5%!important">RECONOCIMIENTO EGRESO</td>
                <td style="text-align:left">
                <span style="font-family:verdanab">Historia medica</span> (habitos toxicos como tabaquismo, enfermedades pulmonares).
                <span style="font-family:verdanab">Historia laboral</span> (tiempos de exposicion, medidas de proteccion, tipo de agente expuesto).
                <span style="font-family:verdanab">Examen fisico pulmonar</span> (auscultacion-palpacion-caracteriticas del torax).
                <span style="font-family:verdanab">Estudio imágenes:</span> Radiografia torax PA-LATERAL, omitir si no ha trascurrido un periodo mas de 12 meses de exposicion incial.
                <span style="font-family:verdanab">Funcion Pulmonar:</span> Espirometria con criterios de lectura SEPAR.
                <span style="font-family:verdanab">Electrocardiogama</span> a mayores de 35 años.
                </td>
                <td style="text-align:left">Al momento de desvinculacion, cese relacion contractual de actividades.</td>
                </tr>
                </table>			
                				
                EXPLORACION RADIOLOGICA				
                Trabajadores de empresas de acuerdo a la evidencia revisada, los factores de riesgo para neumoconiosis
                de origen ocupacional son en función del contenido de sílice de la materia prima o situación concreta:			
                <table class="table3" style="text-align:center;margin-top:-45em">
                <tr>
                <th>CONTENIDO DE SÍLICE DE LA MATERIA PRIMA O SITUACIÓN CONCRETA</th>
                <th>PERIODICIDAD</th>
                </tr>
                <tr>
                <td style="font-family:verdanab">Contenido de sílice libre menor de 15%</td>
                <td>TRIENAL</td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Contenido de sílice libre mayor de 15%</td>
                <td>ANUAL</td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Minería interior del carbón</td>
                <td>Primeros 10 años: TRIENAL a partir de 10 años: ANUAL</td>
                </tr>
                <tr>
                <td style="font-family:verdanab">Minería interior no carbonífera</td>
                <td>Anual</td>
                </tr>
                </table>		
                	
                EMPRESAS SIN EXPLORACION MINERA				
                <table class="table3" style="text-align:center;margin-top:-64em">
                <tr>
                <th>EXPOSICION ACTUAL</th>
                <th>EXPOSICION ANTERIOR</th>
                <th>DURACION EXPOSICION</th>
                <th>SEGUIMIENTO PERIODICO</th>
                </tr>
                <tr>
                <td rowspan="4" style="font-family:verdanab">CONFORMIDAD</td>
                <td rowspan="3">ACEPTABLE</td>
                <td >Años de exposición total <10 años</td>
                <td >TRIENAL</td>
                </tr>
                <tr>
                <td >Años de exposición total > 10 años y < 20 años</td>
                <td >BIENAL</td>
                </tr>
                <tr>
                <td >> 20 años de exposición total</td>
                <td >ANUAL</td>
                </tr>
                <tr>
                <td colspan="2">NO ACEPTABLE</td>
                <td >ANUAL</td>
                </tr>
                <tr>
                <td style="font-family:verdanab">NO CONFORMIDAD</td>
                <td colspan="2">RIESGO ELEVADO</td>
                <td >ANUAL</td>
                </tr>
                </table>
                
                INTENSIDAD DE EXPOSICION				
                El riesgo para la aparición de silicosis guarda estrecha relación con la magnitud de la exposición acumulada a polvo de sílice cristalina a lo largo de la vida laboral. Dicha exposición se calcula con el producto:				
                <table class="table3" style="text-align:center;margin-top:-16em">
                <tr>
                <th>DOSIS ACUMULADA DE SILICE</th>
                <th>(=)</th>
                <th>FRACCION DE POLVO RESPIRABLE</th>
                <th>* PORCENTAJE DE SICILICE LIBRE EN MG/M3</th>
                <th>*NUMERO AÑOS DE EXPOSICION</th>
                </tr>
                </table>			
                <a href="http://silicecristalina.lineaprevencion.com/calcular-exposicion" target="_blank">http://silicecristalina.lineaprevencion.com/calcular-exposicion</a>
                <a href="http://silicecristalina.lineaprevencion.com/documentacion" target="_blank">http://silicecristalina.lineaprevencion.com/documentacion</a>
                <a href="http://silicecristalina.lineaprevencion.com/" target="_blank">http://silicecristalina.lineaprevencion.com/</a>
                
                VIGILANCIA COLECTIVA DE LA SALUD 				
                La vigilancia colectiva o epidemiológica tiene como finalidad analizar las relaciones existentes entre el estado de salud del conjunto de trabajadores y sus condiciones de trabajo.
                Los resultados de la vigilancia de la salud colectiva complementarán la evaluación higiénica y deberán ser tenidos en cuenta por el servicio de prevención para gestionar adecuadamente la prevención de riesgos laborales.				
                
                • Conocer la frecuencia y la distribución de los problemas de salud
                relacionados con la exposición a la sílice libre cristalina.
                • Conocer la frecuencia y la distribución de las condiciones de exposición a la sílice libre cristalina.
                • Conocer la tendencia que siguen en el tiempo los efectos para la
                salud y las condiciones de la exposición a sílice.
                • Detectar situaciones de agregados inesperados de casos.
                • Aportar información para proponer actividades preventivas colectivas que reduzcan o minimicen los riesgos y eviten la aparición de
                daños en la salud.
                • Evaluar la efectividad de las medidas preventivas colectivas e individuales puestas en marcha en dicha población laboral.
                
                FORMACIONES: PLAN DE CAPACITACION EMPLEADOS																																					
                El programa de Salud Ocupacional de la Organización debe contemplar dentro de su plan de capacitación un programa específico que permita a toda la Organización tener la motivación e formación suficiente para asumir la responsabilidad frente al control de los riesgos en el lugar de trabajo. Toda la población de riesgo para Silicosis dentro de la Organización debe recibir entrenamiento en los módulos básicos para la educación en la prevención de la silicosis ocupacional, El plan de capacitación debe ser evaluado frente a los objetivos de aprendizaje y cobertura de la población de riesgo, debe ser revisado periódicamente y debe hacer parte del proceso de inducción de toda la población.	
                
                PROGRAMA DE USO DE PROTECCIÓN RESPIRATORIA
                																																	
                La  recomendación  sobre  protección  respiratoria  por  medio  de  elementos  de protección  personal  es  una  buena  medida  como  control  temporal,  es  un elemento  muy  importante  dentro  del  control  a  la  exposición  a  sílice,  pero  no debe adoptarse como medida única de control.
                
                El equipo de protección personal para sílice incluye respiradores y mascarillas. Los  respiradores  deben  ser  utilizados  solo  cuando  los  controles  de  polvo  no son  suficientes  para  mantener  las  concentraciones  por  debajo  de  límites permisibles. Existen varios tipos de respiradores los cuales deben ser utilizados dependiendo  de  las  concentraciones  de  polvo  en  el  ambiente.    																																		
                
                Las ventajas del uso de equipo de protección personal como medida de control incluyen la disminución de la probabilidad de exposición, el menor costo en el corto  plazo  y  la  utilidad  como  método  de  control  temporal.   Las  desventajas incluyen   la   necesidad   de   entrenamiento,   el   requerir   la   colaboración   del trabajador para su uso adecuado, la instalación de un programa de protección respiratorio,  el  monitoreo  y  el  mantenimiento.   Adicionalmente  incomodan  al trabajador imponiendo una carga adicional.';
                
                $Responsabilidades ='GERENCIA

                • Se implemente y desarrolle una política para el control de la exposición al riesgo de vapores orgánicos durante los procesos productivos de la empresa.
                • Todos los niveles de la organización conozcan y participen en la propuesta de medidas de intervención para el control del riesgo de la exposición a sustancias químicas y los vapores que estas generan.
                • Se estimule a los trabajadores, contratistas y demás personal en la participación y cooperación con el programa adoptando las prácticas seguras y demás medidas de control.
                • '.$Razon0.' reconoce la importancia de la supervisión en la administración del sistema de vigilancia para la exposición al factor de riesgo de químicos y sus vapores, por lo tanto apoya a las personas encargadas del seguimiento y facilita su gestión. El desempeño del programa es un indicador de éxito para la gestión del proceso de salud ocupacional de la compañía.
                • Facilitar la asistencia a las capacitaciones y a los exámenes periódicos establecidos.
                • Suministrar recursos económicos para mejorar las condiciones en el medio y en la fuente que genere la exposicion al riesgo.
                
                COORDINADORA SG- SEGURIDAD Y SALUD EN EL TRABAJO Y AMBIENTE
                
                • Será encargado de ejecutar e inspeccionar el seguimiento al Sistema de Vigilancia.
                • Inspeccionará periódicamente las áreas.
                • Capacitará al personal expuesto en conductas seguras.
                • Se encargará de hacer seguimiento a los indicadores.
                
                SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO (SG-SST)
                
                • Integrar el sistema a otros procesos de mejoramiento que estén en desarrollo en la institución y gestionar su implementación.
                • Garantizar la divulgación de la información y capacitación a todas las personas involucradas en el programa.
                • Mantener la documentación referente a los paraclínicos de control (espirometrías) de los trabajadores por el tiempo que determine la ley.
                • Realizar el análisis de la información y verificación del funcionamiento del programa y sus objetivos.
                • Implementar el procedimiento de entrega de elementos de protección personal.
                • Reunirse anualmente para consolidar información, proponer y estudiar mejoras, además de alimentar el sistema (cumplimiento de cronograma de capacitaciones, evaluaciones médicas, estudios de puesto de trabajo).
                • Realizar las mejoras propuestas en las investigaciones de los accidentes de trabajo.
                
                COLABORADORES
                
                Los trabajadores deben cumplir con la política de seguridad y salud en el Trabajo de '.$Razon0.' y acatar todos los requerimientos del sistema de vigilancia en el lugar de trabajo, tales como el cumplimiento de estándares y procedimientos de salud ocupacional para la el trabajo con químicos y el cumplimiento de las prácticas seguras definidas por la empresa. Esto incluye personal de contratistas y/o temporales que trabajen en '.$Razon0.'';
                
                $Planear ='';
                
                $Hacer ='';
                
                $Verificar ='';
                
                $Corregir ='';
                
                $sql = "INSERT INTO text_respiratorio (id_admin, Objetivo, Alcance, Definicion, Responsabilidades, Planear, Hacer, Verificar, Corregir) VALUES ('$Codigo','$Objetivo','$Alcance','$Definicion','$Responsabilidades','$Planear','$Hacer','$Verificar','$Corregir')";
                $resultado = $conexion->query($sql); 
                
                $Actividad = 'Hacer un diagnóstico de salud de la población expuesta a MATERIAL PARTICULADO';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Reconocimiento Centros de trabajo con actividad posible exposicion MATERIAL PARTICULADO ALTO Y SILICE';
                $Responsable = 'Medico SST-Medico Asesor Arl CEDISALUD IPS';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisión documento actual de SVE';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisar las espirómetros realizadas a los colaboradore,s de la empresa, expuestos al riesgo químico, material particulado SILICE y otros gases';
                $Responsable = 'MEDICO LABORAL';
                $Periodicidad = 'Según cronograma de exámenes médicos';
                
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO planificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Contextualización actividades ejecutadas (mediciones ambientales, exámenes médicos, capacitaciones, etc.)';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Seguimiento RX TORAX lectora ILO Según SVE control SILICE';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Seguimiento Cuestionario de sintomas Respiratorios';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisión y ajustes Dx inicial de condiciones de trabajo y de salud';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Ajustes Plan de intervención Fuente y en el medio';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Realización de pruebas de tallaje y ajuste de la mascara a todos los operarios que la usan';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Hacer exámenes médicos ocupacionales al personal expuesto';
                $Responsable = 'RED ALIADOS A NIVEL NACIONAL IPS SST';
                $Periodicidad = 'Según cronograma de exámenes médicos';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisión inventario de productos químicos utilizados en la Empresa';
                $Responsable = 'Coordinadora de SSTA - Asesor AXA COLPATRI - MEDICO SP INGENIEROS';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO implementacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Realizar la entrega de EPP, según tipo de riesgo de exposición';
                $Responsable = 'Coordinadora de SSTA Facilitadores de área';
                $Periodicidad = 'Según Vida útil del EPP';
                
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisión por asesor medico Dx inicial de condiciones de salud, Análisis de los resultados de los exámenes realizados al personal expuesto y remisión a las respectivas EPS';
                $Responsable = 'Coordinadora de SSTA';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Registro de inspecciones con su respectivo cierre';
                $Responsable = 'Brigadistas y Grupo de Apoyo';
                $Periodicidad = 'TRIMESTRAL';
                
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO hacer5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Revisión y ajustes a la totalidad del documento del SVE';
                $Responsable = ' documento del SVE Coordinadora de SSTA - Asesor ARL SURA - Medica Laboral';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Verificar efectividad de la implementación de los sistemas de vigilancia epidemiológica Respiratorio';
                $Responsable = 'Coordinadora de SSTA';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Verificar el cumplimiento de las actividades a ejecutar por medio de indicadores de eficiencia y eficacia';
                $Responsable = 'Coordinadora de SSTA';
                $Periodicidad = 'SEMESTRAL';
                
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO verificacion5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                $Actividad = 'Se realizara el seguimiento al cumplimiento de los sistemas de Gestión por medio de la matriz I-ESPIRO TAB SEGUIMIENTO ESPIROMETRIAS';
                $Responsable = 'MEDICA LABORAL';
                $Periodicidad = 'Según cronograma de exámenes médicos';
                
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026',  '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                
                $Actividad = 'Se evaluará el cumplimiento de las actividades programadas mediante el ciclo PHVA para el SVE, por medio de indicadores de Eficiencia, Incidencia, Prevalencia y Cobertura.';
                $Responsable = 'JEFE SST Y MD LABORAL EMPRESA';
                $Periodicidad = 'ANUAL';
                
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2020', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2021', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2022', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2023', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2024', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2025', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                $sql = "INSERT INTO auditoria5 (id_admin, Year, Actividades, Responsabilidades, Periodicidad, P1, E1, P2, E2, P3, E3, P4, E4, P5, E5, P6, E6, P7, E7, P8, E8, P9, E9, P10, E10, P11, E11, P12, E12, TP, TE, Porcentaje, Observaciones, Fecha_registro) VALUES ('$Codigo', '2026', '$Actividad', '$Responsable', '$Periodicidad', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Sin observaciones', NOW())";
                $resultado = $conexion->query($sql);
                
                
                $Tipo = 'RESULTADO (CUMPLIMIENTO)';
                $Definicion = 'Actividades ejecutadas para la disminución del riesgo Respiratorio';
                $Interpretacion = '% de cumplimiento de actividades tendientes a la disminución del riesgo Respiratorio';
                $Fuente = 'SVE- (funcion respiratoria)';
                $Indicador = 'Cumplimiento';
                $Numerador = 'Actividades ejecutadas en el periódo';
                $Denominador = 'Actividades programadas en el periódo';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'RESULTADO (COBERTURA)';
                $Definicion = 'Cobertura de capacitaciones dictadas al personal expuesto riesgo Respiratorio.';
                $Interpretacion = 'Cobertura de capacitaciones dictadas al personal expuesto riesgo Respiratorio';
                $Fuente = 'PR- CAPACITACION FORMACION Y ENTRENAMIENTO';
                $Indicador = 'Cobertura capacit';
                $Numerador = 'Capacitaciones ejecutadas en el periódo';
                $Denominador = 'Actividades programadas en el periódo';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO (EFICACIA)';
                $Definicion = 'Accidentes presentados a causa del riesgo quimico (funcion respiratoria)';
                $Interpretacion = 'Accidentes presentados a causa del riesgo quimico (funcion respiratoria)';
                $Fuente = 'F- MATRIZ DE ACCIDENTALIDAD';
                $Indicador = 'Eficacia AT';
                $Numerador = 'Eventos de riesgo';
                $Denominador = 'Total de accidentes';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO (EFICACIA)';
                $Definicion = 'Observación de comportamientos positivos en relacion a este riesgo prioritario';
                $Interpretacion = 'Observación de comportamientos positivos en relacion a este riesgo prioritario';
                $Fuente = 'F- SEGUIMIENTOS OBSERVACIÓN DE COMPORTAMIENTO SEGURO';
                $Indicador = 'Obs. comportamientos';
                $Numerador = 'Comportamientos positivos';
                $Denominador = 'Observaciones realizadas';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO (EFICACIA)';
                $Definicion = 'Hallazgos de inspecciones en relacion a quimico (funcion respiratoria)';
                $Interpretacion = '% Hallazgos de inspecciones en relacion a quimico (funcion respiratoria)';
                $Fuente = 'PR- INSPECCIONES DE SEGURIDAD';
                $Indicador = 'I% Hallazgos inspecciones';
                $Numerador = 'N° correccciones realizadas';
                $Denominador = 'N° equipos defectuosos';
                $Frecuencia = 'SEMESTRAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'INCIDENCIA';
                $Definicion = 'Conocer el número de casos nuevos de enfermedad laboral, con el fin de identificar sus fuentes de riesgo e intervenirlas, el periodo de revision de este indicador sera mensual';
                $Interpretacion = 'Número de casos nuevos de enfermedad quimico (funcion respiratoria) calificada como de origen laboral en el semestre.';
                $Fuente = 'SVE-quimico (funcion respiratoria)';
                $Indicador = 'Incidencia EL';
                $Numerador = 'N° de casos nuevos con EL';
                $Denominador = 'N° de trabajadores expuestos';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PREVALENCIA';
                $Definicion = 'Monitorear el número de casos antiguos y nuevos de enfermedad laboral en un período mensual con el fin de identificar sus fuentes de riesgo e intervenirlas.';
                $Interpretacion = 'Número de casos nuevos y antiguos de enfermedad quimico (funcion respiratoria) calificada como de origen laboral en el semestre.';
                $Fuente = 'SVE-RESPIRATORIO';
                $Indicador = 'Prevalencia EL';
                $Numerador = 'N° de casos nuevos+N° de casos anteriores';
                $Denominador = 'N° de trabajadores expuestos';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                
                $Tipo = 'PROCESO (EFICACIA)';
                $Definicion = 'Cumplimiento de capacitaciones al personal expuesto riesgo quimico (funcion respiratoria)';
                $Interpretacion = '% de Cumplimiento de capacitaciones al personal expuesto al riesgo quimico (funcion respiratoria)';
                $Fuente = 'PR- CAPACITACION FORMACION Y ENTRENAMIENTO';
                $Indicador = 'Eficacia capacit';
                $Numerador = 'Resultado de evaluación=0 superior a 3';
                $Denominador = 'Total de evaluaciones presentadas';
                $Frecuencia = 'ANUAL';

                $sql = "INSERT INTO indicadores_respiratorio (Codigo, Tipo, Definicion, Interpretacion, Fuente, Indicador, Numerador, Denominador, Frecuencia, Fecha_registro) VALUES ('$Codigo', '$Tipo', '$Definicion', '$Interpretacion', '$Fuente', '$Indicador', '$Numerador', '$Denominador', '$Frecuencia', NOW())";
                $resultado = $conexion->query($sql);
                

                //RECURSOS
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo', 'vv3tja', 'FICHA TECNICA PROTECTORES AUDITIVOS PRESION REUTILIZABLE', 'Tapones 1200-1201 PROTECTORES AUDITIVOS INSERCION PRESION FICHA TECNICA.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo', '8hymp2', 'FICHA TECNICA PROTECTORES AUDITIVOS DE COPA', 'H10A HV - HIG-VIZ PROTECTORES TIPO COPA FICHA TECNICA.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','1v69fu', 'CARETA DE PROTECCION FACIAL', 'da20a82187ff40578ac99d78c458245c CARETA.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','khh51s', 'FICHA TECNICA GAFAS DE PROTECCION VISUAL', 'ft_KIM_Aquilesficha gafas seguridad foto.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','gwi6je', 'FICHA TECNICA GAFAS PROTECCION INDUSTRIAL UV', '070515070510fichatecnicagafasosegatipotomahawkb507-2674b17e7f gafas oscuras.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','pkk494', 'FICHA TECNICA GAFAS CON FORMULA DE SEGURIDAD', 'ft_KIM_HipolitoRX (1).pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','zbg92p', 'LICENCIA MEDICOS ESPECIALISTA SST ASESOR EMPRESARIAL', 'LICENCIA SST VICTOR BARAJAS.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','5j4vin', 'FICHA TECNICA MASCARILLA MEDIA CARA', 'FICHA TECNICA MASCARILLA MEDIA CARA', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','w6r0pm', 'FICHA TECNICA MASCARILLA FULL FACE', 'decein-mascara-completa-hoja-tecnica-de-la-mascara-completa-198478-1 FICHA TECNICA.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','2ak3w0', 'FICHA TECNICA MASCARILLA HUMOS METALICOS REUTILIZABLE', '8214 FICHA TECNICA HUMOS METALICOS.pdf', NOW())";
                $resultado = $conexion->query($sql);
                
                $sql = "INSERT INTO recursos (id_admin, sve, Codigo, Recurso, Nombre, Fecha_registro) VALUES ('$Codigo','u36s6o', 'FICHA TECNICA MASCARILLA HUMOS ORGANICOS REUTILIZABLE', 'sosega6-109b42e0e5 FICHAS TECNICA HUMOS ORGANICOS.pdf', NOW())";
                $resultado = $conexion->query($sql);
                */

            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario_insertado;
    }
    public static function obtener_todos($conexion) {
        $usuarios = array();
        if (isset($conexion)) {
            try {
                include_once 'admin.inc.php';
                $sql = "SELECT * FROM admin";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchALL();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new usuario(
                                $fila['id'], $fila['Nombre_usuario'], $fila['Clave'],$fila['Email'], $fila['Activo'],  $fila['Fecha']);
                    }
                } else {
                    print 'No hay usuarios';
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuarios;
    }
    public static function Email_existe($conexion, $Email) {
        $Email_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM admin WHERE Email = :Email";
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindValue(':Email', $Email, PDO::PARAM_STR);

                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $Email_existe = true;
                } else {
                    $Email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Email_existe;
    }
    public static function Email_existe_usuario($conexion, $Email) {
        $Email_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM datosg WHERE Email = :Email";
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindValue(':Email', $Email, PDO::PARAM_STR);

                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    $Email_existe = true;
                } else {
                    $Email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Email_existe;
    }
    public static function Email_existe_saludable($conexion, $Email) {
        $Email_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM reg_millonario WHERE Email = :Email";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':Email', $Email, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $Email_existe = true;
                } else {
                    $Email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Email_existe;
    }
    public static function Cedula_existe($conexion, $Cedula) {
        $Cedula_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM admin WHERE Cedula = :Cedula";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':Cedula', $Cedula, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $Cedula_existe = true;
                } else {
                    $Cedula_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Cedula_existe;
    }
    public static function Cedula_existe_usuario($conexion, $Cedula) {
        $Cedula_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM reg_millonario WHERE Cedula = :Cedula";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':Cedula', $Cedula, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $Cedula_existe = true;
                } else {
                    $Cedula_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Cedula_existe;
    }
    public static function Cedula_existe_usuario2($conexion, $Cedula) {
        $Cedula_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM datosg WHERE Cedula = :Cedula";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':Cedula', $Cedula, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $Cedula_existe = true;
                } else {
                    $Cedula_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $Cedula_existe;
    }
    public static function obtener_usuario_por_Email($conexion, $Email) {
        $usuario = null;
        if (isset($conexion)) {
           
            try {
          
                $sql= "SELECT * FROM admin WHERE Email = :Email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Email', $Email, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    
                    $usuario = new Usuario( $resultado['id'],
                                            $resultado['Nit'],
                                            $resultado['Razon'],
                                            $resultado['Clave'],
                                            $resultado['Economica'],
                                            $resultado['Telefono'],
                                            $resultado['Email'],
                                            $resultado['Direccion'],
                                            $resultado['Departamento'],
                                            $resultado['Ciudad'],
                                            $resultado['Sede'],
                                            $resultado['PersonaC'],
                                            $resultado['TelefonoC'],
                                            $resultado['Activo'],
                                            $resultado['Activo2'],
                                            $resultado['Activo3'],
                                            $resultado['Activo4'],
                                            $resultado['Activo5']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function obtener_usuario_por_Email_turnos($conexion, $Email) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                include_once 'admin_turnos.inc.php';
                $sql= "SELECT * FROM admin_turnos WHERE Email = :Email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Email', $Email, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    $usuario = new usuario_turnos( $resultado['id'],
                                            $resultado['Nombre'],
                                            $resultado['Email'],
                                            $resultado['Clave']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function obtener_usuario_por_Email2($conexion, $Email) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                include_once 'admin.inc.php';
                $sql= "SELECT * FROM datosg WHERE Email = :Email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Email', $Email, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    $usuario = new Usuario( $resultado['id'],
                                            $resultado['Cedula'],
                                            $resultado['Nombre'],
                                            $resultado['Clave']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function obtener_usuario_por_Email3($conexion, $Email) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                $sql= "SELECT * FROM reg_millonario WHERE Email = :Email";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Email', $Email, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    $usuario = new Usuario( $resultado['id'],
                                            $resultado['Cedula'],
                                            $resultado['Nombre'],
                                            $resultado['Clave']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function obtener_usuario_por_clave($conexion, $Clave) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                include_once 'agenda.inc.php';
                $sql= "SELECT * FROM reg_agenda WHERE Clave = :Clave";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Clave', $Clave, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    $usuario = new usuario_agenda( $resultado['id'],
                                            $resultado['Nombre'],
                                            $resultado['Clave'],
                                            $resultado['Activo']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function obtener_usuario_por_clave2($conexion, $Clave) {
        $usuario = null;
        if (isset($conexion)) {
            try {
                include_once 'didactico.inc.php';
                $sql= "SELECT * FROM didactico WHERE Clave = :Clave";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam('Clave', $Clave, PDO::PARAM_STR);                
                $sentencia -> execute();
                $resultado = $sentencia ->fetch();
                if (!empty($resultado)) {
                    $usuario = new Usuario3( $resultado['id'],
                                            $resultado['Clave'],
                                            $resultado['Nombre'],
                                            $resultado['Activo']);
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuario;
    }
    public static function actualizar_password($conexion, $id_usuario, $nueva_clave) {
        $actualizacion_correcta = false;
        if (isset($conexion)) {
            try {
                $sql= "UPDATE admin SET Clave = :password WHERE  id = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindValue(':password', $nueva_clave, PDO::PARAM_STR);
                $sentencia->bindValue(':id', $id_usuario, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->rowCount();
                if (count($resultado)) {
                    $actualizacion_correcta = true;
                } else {
                    $actualizacion_correcta = false;
                }
            } catch (PDOException $ex) {
                 print 'ERROR' . $ex -> getMessage();
            }
        }
        return $actualizacion_correcta;
    }
};