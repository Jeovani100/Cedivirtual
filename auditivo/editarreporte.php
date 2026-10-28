<?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
   
    if(isset($_POST['id_r'])) {
        $id = $_POST['id_r'];
        $Paciente = $_POST['Paciente'];
        $Cedula = $_POST['Cedula'];
        $Edad = $_POST['Edad'];
        $Genero = $_POST['Genero'];
        $Cargo = $_POST['Cargo'];
        $Email = $_POST['Email'];
        $Celular = $_POST['Celular'];
        $Ciudad = $_POST['Ciudad'];
        $Ips = $_POST['Ips'];
        $VAOI250 = $_POST['VAOI250'];
        $VAOI500 = $_POST['VAOI500'];
        $VAOI1000 = $_POST['VAOI1000'];
        $VAOI2000 = $_POST['VAOI2000'];
        $VAOI3000 = $_POST['VAOI3000'];
        $VAOI4000 = $_POST['VAOI4000'];
        $VAOI6000 = $_POST['VAOI6000'];
        $VAOI8000 = $_POST['VAOI8000'];
        $VAOI = ($VAOI500+$VAOI1000+$VAOI2000+$VAOI3000)/4;
        $VAOI2 = ($VAOI1000+$VAOI2000+$VAOI3000+$VAOI4000)/4;    
        $VAOD250 = $_POST['VAOD250'];
        $VAOD500 = $_POST['VAOD500'];
        $VAOD1000 = $_POST['VAOD1000'];
        $VAOD2000 = $_POST['VAOD2000'];
        $VAOD3000 = $_POST['VAOD3000'];
        $VAOD4000 = $_POST['VAOD4000'];
        $VAOD6000 = $_POST['VAOD6000'];
        $VAOD8000= $_POST['VAOD8000'];
        $VAOD = ($VAOD500+$VAOD1000+$VAOD2000+$VAOD3000)/4;
        $VAOD2 = ($VAOD1000+$VAOD2000+$VAOD3000+$VAOD4000)/4;    
        $VOOI250= $_POST['VOOI250'];
        $VOOI500 = $_POST['VOOI500'];
        $VOOI1000 = $_POST['VOOI1000'];
        $VOOI2000 = $_POST['VOOI2000'];
        $VOOI3000 = $_POST['VOOI3000'];
        $VOOI4000 = $_POST['VOOI4000'];
        $VOOI= ($VOOI1000+$VOOI2000+$VOOI3000+$VOOI4000)/4;
        $VOOD250 = $_POST['VOOD250'];
        $VOOD500 = $_POST['VOOD500'];
        $VOOD1000 = $_POST['VOOD1000'];
        $VOOD2000 = $_POST['VOOD2000'];
        $VOOD3000 = $_POST['VOOD3000'];
        $VOOD4000 = $_POST['VOOD4000'];
        $VOOD = ($VOOD1000+$VOOD2000+$VOOD3000+$VOOD4000)/4;
        $Concepto = $_POST['Concepto'];
        $Recomendaciones = $_POST['Recomendaciones'];
        $DiagnosticoC = "AUDIOMETRIA NORMAL";

            if ($VAOD == 'N') {
                $DiagnosticoOD = "SIN REGISTRO";
            } elseif ($VAOD == 0) {
                $DiagnosticoOD = "COFOSIS";
            } elseif ($VAOD <= 25) {
                $DiagnosticoOD = "NORMAL OD";
            } elseif ($VAOD < 40) {
                $DiagnosticoOD = "HIPOACUSIA LEVE OD";
            } elseif ($VAOD < 55) {
                $DiagnosticoOD = "HIPOACUSIA MODERADA OD";
            } elseif ($VAOD < 70) {
                $DiagnosticoOD = "HIPOACUSIA MODERADA-SEVERA OD";
            } elseif ($VAOD < 90) {
                $DiagnosticoOD = "HIPOACUSIA SEVERA OD";
            } elseif ($VAOD < 150) {
                $DiagnosticoOD = "HIPOACUSIA PROFUNDA OD";
            }
        
            if ($VAOI == 'N') {
                $DiagnosticoOI = "SIN REGISTRO";
            } elseif ($VAOI == 0) {
                $DiagnosticoOI = "COFOSIS";
            } elseif ($VAOI <= 25) {
                $DiagnosticoOI = "NORMAL OI";
            } elseif ($VAOI < 40) {
                $DiagnosticoOI = "HIPOACUSIA LEVE OI";
            } elseif ($VAOI < 55) {
                $DiagnosticoOI = "HIPOACUSIA MODERADA OI";
            } elseif ($VAOI < 70) {
                $DiagnosticoOI = "HIPOACUSIA MODERADA-SEVERA OI";
            } elseif ($VAOI < 90) {
                $DiagnosticoOI = "HIPOACUSIA SEVERA OI";
            } elseif ($VAOI < 150) {
                $DiagnosticoOI = "HIPOACUSIA PROFUNDA OI";
            }
            
            $Reubicacion = $_POST['Reubicacion'];
            $Conducta_SVE = 'SIN REGISTRO';
            $Tamiz = "NORMAL";
             if (($VAOD <= 25) && ($VAOI <= 25) && ($VOOD <= 25) && ($VOOI <= 25))  {
                $Conducta_SVE = "CONTROL AUDIOMETRIA ANUAL, SIN RIESGOS";
                $Tamiz = "NORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'No';
                $GATISST = 'AUDICION NORMAL';
            } elseif (($VAOD == 0) && ($VAOI == 0) && (($VOOD < 40)&&($VOOD>=0)&&($VOOI < 40)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 40) &&($VAOD>=0) && ($VAOI < 40)&&($VAOI>=0)) && (($VOOD == 0)&&($VOOI == 0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL';
            } elseif ((($VAOD < 40) &&($VAOD>=0) && ($VAOI < 40)&&($VAOI>=0)) && (($VOOD < 40)&&($VOOD>=0)&&($VOOI < 40)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA ANUAL, RIESGO LEVE";
                $Tamiz = "PRUEBA";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif (($VAOD == 0) && ($VAOI == 0) && (($VOOD < 55)&&($VOOD>=0)&&($VOOI < 55)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 55) &&($VAOD>=0) && ($VAOI < 55)&&($VAOI>=0)) && (($VOOD == 0)&&($VOOI == 0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO TEMPORAL';
            } elseif ((($VAOD < 55) &&($VAOD>=0) && ($VAOI < 55)&&($VAOI>=0)) && (($VOOD < 55)&&($VOOD>=0)&&($VOOI < 55)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'No';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif (($VAOD == 0) && ($VAOI == 0) && (($VOOD < 70)&&($VOOD>=0)&&($VOOI < 70)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 70) &&($VAOD>=0) && ($VAOI < 70)&&($VAOI>=0)) && (($VOOD == 0)&&($VOOI == 0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 70) &&($VAOD>=0) && ($VAOI < 70)&&($VAOI>=0)) && (($VOOD < 70)&&($VOOD>=0)&&($VOOI < 70)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO MODERADO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif (($VAOD == 0) && ($VAOI == 0) && (($VOOD < 90)&&($VOOD>=0)&&($VOOI < 90)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 90) &&($VAOD>=0) && ($VAOI < 90)&&($VAOI>=0)) && (($VOOD == 0)&&($VOOI == 0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 90) &&($VAOD>=0) && ($VAOI < 90)&&($VAOI>=0)) && (($VOOD < 90)&&($VOOD>=0)&&($VOOI < 90)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif ((($VAOD < 120) &&($VAOD>=0) && ($VAOI < 120)&&($VAOI>=0)) && (($VOOD == 0)&&($VOOI == 0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } elseif (($VAOD == 0) && ($VAOI == 0) && (($VOOD < 120)&&($VOOD>=0)&&($VOOI < 120)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
            } elseif ((($VAOD < 120) &&($VAOD>=0) && ($VAOI < 120)&&($VAOI>=0)) && (($VOOD < 120)&&($VOOD>=0)&&($VOOI < 120)&&($VOOI>=0)))   {
                $Conducta_SVE = "CONTROL AUDIOMETRIA SEMESTRAL, RIESGO ALTO";
                $Tamiz = "ANORMAL";
                $Reubicacion = 'Si';
                $Ingreso_SVE = 'Si';
                $GATISST = 'CAMBIOS EN UMBRAL AUDITIVO PERMANENTE';
            } 
            
             $NeurosensorialD = "NO APLICA";
            if ($VAOD == 'N' && $VOOD == 'N') {
                $NeurosensorialD = "SIN REGISTRO";
            } elseif ($VAOD == 0 && $VOOD == 0)  {
                $NeurosensorialD = "COFOSIS";
            } elseif ($VAOD <= 25 && $VOOD <= 25) {
                $NeurosensorialD = "NORMAL";
            } elseif (($VAOD <= 40 && $VOOD <= 40 && $VAOD > 25 && $VOOD > 25) || ($VAOD <= 25 && $VOOD <= 40 && $VOOD > 25)) {
                $NeurosensorialD = "HPN LEVE";
            } elseif (($VAOD <= 55 && $VOOD <= 55 && $VAOD > 40 && $VOOD > 40)  || ($VAOD <= 25 && $VOOD <= 55 && $VOOD > 40)) {
                $NeurosensorialD = "HPN MODERADA";
            } elseif (($VAOD <= 70 && $VOOD <= 70 && $VAOD > 55 && $VOOD > 55)  || ($VAOD <= 25 && $VOOD <= 70 && $VOOD > 55)) {
                $NeurosensorialD = "HPN MODERADA SEVERA";
            } elseif (($VAOD <= 90 && $VOOD <= 90 && $VAOD > 70 && $VOOD > 70) || ($VAOD <= 25 && $VOOD <= 90 && $VOOD > 70)) {
                $NeurosensorialD = "HPN SEVERA";
            } elseif (($VAOD > 90.1 && $VOOD > 90.1 && $VAOD > 90 && $VOOD > 90) || ($VAOD <= 25 && $VOOD > 90.1)) {
                $NeurosensorialD = "HPN PROFUNDA";
            }
            
            $NeurosensorialI = "NO APLICA";
            if ($VAOI == 'N' && $VOOI == 'N') {
                $NeurosensorialI = "SIN REGISTRO";
            } elseif ($VAOI == 0 && $VOOI == 0)  {
                $NeurosensorialI = "COFOSIS";
            } elseif ($VAOI <= 25 && $VOOI <= 25) {
                $NeurosensorialI = "NORMAL";
            } elseif (($VAOI <= 40 && $VOOI <= 40 && $VAOI > 25 && $VOOI > 25) || ($VAOI <= 25 && $VOOI <= 40)) {
                $NeurosensorialI = "HPN LEVE";
            } elseif (($VAOI <= 55 && $VOOI <= 55 && $VAOI > 40 && $VOOI > 40)  || ($VAOI <= 25 && $VOOI <= 55)) {
                $NeurosensorialI = "HPN MODERADA";
            } elseif (($VAOI <= 70 && $VOOI <= 70 && $VAOI > 55 && $VOOI > 55)  || ($VAOI <= 25 && $VOOI <= 70)) {
                $NeurosensorialI = "HPN MODERADA SEVERA";
            } elseif (($VAOI <= 90 && $VOOI <= 90 && $VAOI > 70 && $VOOI > 70) || ($VAOI <= 25 && $VOOI <= 90)) {
                $NeurosensorialI = "HPN SEVERA";
            } elseif (($VAOI > 90.1 && $VOOI > 90.1 && $VAOI > 90 && $VOOI > 90) || ($VAOI <= 25 && $VOOI > 90.1)) {
                $NeurosensorialI = "HPN PROFUNDA";
            }
            
            $ConductivaD = "NO APLICA";
            if ($VAOD == 'N' && $VOOD == 'N') {
                $ConductivaD = "SIN REGISTRO";
            } elseif ($VAOD == 0 && $VOOD == 0) {
                $ConductivaD = "COFOSIS";
            } elseif ($VAOD <= 25 && $VOOD <= 25) {
                $ConductivaD = "NORMAL";
            } elseif ($VAOD <= 40 && $VOOD <= 25 ) {
                $ConductivaD = "HPC LEVE";
            } elseif ($VAOD <= 55 && $VOOD <= 25) {
                $ConductivaD = "HPC MODERADA";
            } elseif ($VAOD <= 70 && $VOOD <= 25) {
                $ConductivaD = "HPC MODERADA SEVERA";
            } elseif ($VAOD <= 90 && $VOOD <= 25) {
                $ConductivaD = "HPC SEVERA";
            } elseif ($VAOD > 90.1 && $VOOD <= 25) {
                $ConductivaD = "HPC PROFUNDA";
            } 
            
            $ConductivaI = "NO APLICA";
            if ($VAOI == 'N' && $VOOI == 'N') {
                $ConductivaI = "SIN REGISTRO";
            } elseif ($VAOI == 0 && $VOOI == 0) {
                $ConductivaI = "COFOSIS";
            } elseif ($VAOI <= 25 && $VOOI <= 25) {
                $ConductivaI = "NORMAL";
            } elseif ($VAOI <= 40 && $VOOI <= 25 ) {
                $ConductivaI = "HPC LEVE";
            } elseif ($VAOI <= 55 && $VOOI <= 25) {
                $ConductivaI = "HPC MODERADA";
            } elseif ($VAOI <= 70 && $VOOI <= 25) {
                $ConductivaI = "HPC MODERADA SEVERA";
            } elseif ($VAOI <= 90 && $VOOI <= 25) {
                $ConductivaI = "HPC SEVERA";
            } elseif ($VAOI > 90.1 && $VOOI <= 25) {
                $ConductivaI = "HPC PROFUNDA";
            } 
            
            $VD_1 = $VAOD250 - $VOOD250;
            if($VD_1 >=10){
                $VD1=1;
            } else {
                $VD1=0;
            }
            $VD_2 = $VAOD500 - $VOOD500;
            if($VD_2 >=10){
                $VD2=1;
            } else {
                $VD2=0;
            }
            $VD_3 = $VAOD1000 - $VOOD1000;
            if($VD_3 >=10){
                $VD3=1;
            } else {
                $VD3=0;
            }
            $VD_4 = $VAOD2000 - $VOOD2000;
            if($VD_4 >=10){
                $VD4=1;
            } else {
                $VD4=0;
            }
            $VD_5 = $VAOD3000 - $VOOD3000;
            if($VD_5 >=10){
                $VD5=1;
            } else {
                $VD5=0;
            }
            $VD_6 = $VAOD4000 - $VOOD4000;
            if($VD_6 >=10){
                $VD6=1;
            } else {
                $VD6=0;
            }
            $V_D = $VD1+$VD2+$VD3+$VD4+$VD5+$VD6;
            
             $VI_1 = $VAOI250 - $VOOI250;
            if($VI_1 >=10){
                $VI1=1;
            } else {
                $VI1=0;
            }
            $VI_2 = $VAOI500 - $VOOI500;
            if($VI_2 >=10){
                $VI2=1;
            } else {
                $VI2=0;
            }
            $VI_3 = $VAOI1000 - $VOOI1000;
            if($VI_3 >=10){
                $VI3=1;
            } else {
                $VI3=0;
            }
            $VI_4 = $VAOI2000 - $VOOI2000;
            if($VI_4 >=10){
                $VI4=1;
            } else {
                $VI4=0;
            }
            $VI_5 = $VAOI3000 - $VOOI3000;
            if($VI_5 >=10){
                $VI5=1;
            } else {
                $VI5=0;
            }
            $VI_6 = $VAOI4000 - $VOOI4000;
            if($VI_6 >=10){
                $VI6=1;
            } else {
                $VI6=0;
            }
            $V_I = $VI1+$VI2+$VI3+$VI4+$VI5+$VI6;
            
            $MixtaD = "NO APLICA";
            if ($VAOD == 'N' && $VOOD == 'N') {
                $MixtaD = "SIN REGISTRO";
            } elseif ($VAOD == 0 && $VOOD == 0) {
                $MixtaD = "COFOSIS";
            } elseif ($VAOD <= 25 && $VOOD <= 25) {
                $MixtaD = "NORMAL";
            } elseif (($VAOD <= 40 && $VAOD > 25 && $VOOD < 40 && $VOOD > 25) && ($V_D >= 3)) {
                $MixtaD = "HPM LEVE";
            } elseif (($VAOD <= 55 && $VAOD > 40 && $VOOD < 55 && $VOOD > 40) && ($V_D >= 3)) {
                $MixtaD = "HPM MODERADA";
            } elseif (($VAOD <= 70 && $VAOD > 55 && $VOOD < 70 && $VOOD > 55) && ($V_D >= 3)) {
                $MixtaD = "HPM MODERADA SEVERA";
            } elseif (($VAOD <= 90 && $VAOD > 70 && $VOOD < 90 && $VOOD > 70) && ($V_D >= 3)) {
                $MixtaD = "HPM SEVERA";
            } elseif (($VAOD > 90.1 && $VAOD > 90 && $VOOD > 90.1 && $VOOD > 90) && ($V_D >= 3)) {
                $MixtaD = "HPM PROFUNDA";
            }  
            
            $MixtaI = "NO APLICA";
            if ($VAOI == 'N' && $VOOI == 'N') {
                $MixtaI = "SIN REGISTRO";
            } elseif ($VAOI == 0 && $VOOI == 0) {
                $MixtaI = "COFOSIS";
            } elseif ($VAOI <= 25 && $VOOI <= 25) {
                $MixtaI = "NORMAL";
            } elseif (($VAOI <= 40 && $VAOI > 25 && $VOOI < 40 && $VOOI > 25) && ($V_D >= 3)) {
                $MixtaI = "HPM LEVE";
            } elseif (($VAOI <= 55 && $VAOI > 40 && $VOOI < 55 && $VOOI > 40) && ($V_D >= 3)) {
                $MixtaI = "HPM MODERADA";
            } elseif (($VAOI <= 70 && $VAOI > 55 && $VOOI < 70 && $VOOI > 55) && ($V_D >= 3)) {
                $MixtaI = "HPM MODERADA SEVERA";
            } elseif (($VAOI <= 90 && $VAOI > 70 && $VOOI < 90 && $VOOI > 70) && ($V_D >= 3)) {
                $MixtaI = "HPM SEVERA";
            } elseif (($VAOI > 90.1 && $VAOI > 90 && $VOOI > 90.1 && $VOOI > 90) && ($V_D >= 3)) {
                $MixtaI = "HPM PROFUNDA";
            }  
            $DiagnosticoODOI = $DiagnosticoOD.' - '.$DiagnosticoOI;

        $sql = "UPDATE auditivo SET Paciente = '$Paciente',Cedula = '$Cedula',Genero = '$Genero',Edad = '$Edad',Cargo = '$Cargo',VAOI250 = '$VAOI250',VAOI500 = '$VAOI500',VAOI1000 = '$VAOI1000',VAOI2000 = '$VAOI2000',VAOI3000 = '$VAOI3000',VAOI4000 = '$VAOI4000',VAOI6000 = '$VAOI6000',VAOI8000 = '$VAOI8000',VAOI= '$VAOI',VAOI2= '$VAOI2',DiagnosticoOI= '$DiagnosticoOI',VAOD250 = '$VAOD250',VAOD500 = '$VAOD500',VAOD1000 = '$VAOD1000', VAOD2000 = '$VAOD2000',VAOD3000 = '$VAOD3000',VAOD4000 = '$VAOD4000',VAOD6000 = '$VAOD6000',VAOD8000 = '$VAOD8000', VAOD= '$VAOD', VAOD2= '$VAOD2', DiagnosticoOD= '$DiagnosticoOD',VOOI250 = '$VOOI250',VOOI500 = '$VOOI500',VOOI1000 = '$VOOI1000',VOOI2000 = '$VOOI2000',VOOI3000 = '$VOOI3000',VOOI4000 = '$VOOI4000',VOOI= '$VOOI',VOOD250 = '$VOOD250',VOOD500 = '$VOOD500',VOOD1000 = '$VOOD1000', VOOD2000 = '$VOOD2000',VOOD3000 = '$VOOD3000',VOOD4000 = '$VOOD4000',VOOD = '$VOOD', DiagnosticoODOI = '$DiagnosticoODOI',  NeurosensorialD = '$NeurosensorialD', ConductivaD = '$ConductivaD', MixtaD = '$MixtaD',  NeurosensorialI='$NeurosensorialI', ConductivaI='$ConductivaI', MixtaI='$MixtaI', GATISST = '$GATISST',Conducta_SVE = '$Conducta_SVE', Concepto = '$Concepto', Recomendaciones = '$Recomendaciones', Reubicacion = '$Reubicacion' , Email = '$Email', Celular = '$Celular'  WHERE id = $id";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['Metodo'])) {
        $id = $_POST['id'];
        $Fecha = $_POST['Fecha'];
        $Metodo = $_POST['Metodo'];
        $Grupo = $_POST['Grupo'];
        $LEQ = $_POST['LEQ'];
        if($LEQ > 0 && $LEQ < 84.9) {
            $TLV = 'Sin exposición';
            $Color = '#44e78e';
        } else if ($LEQ >= 85 && $LEQ <= 92.5) {
            $TLV = 'Exposición moderada';
            $Color = '#f9f981';
        } else if ($LEQ > 92.5) {
            $TLV = 'Alta exposición';
            $Color = '#fd343a';
        } else if ($LEQ == 0) {
            $TLV = 'null';
            $Color = '';
        } 
        $Recomendaciones = $_POST['Recomendaciones'];
        $sql = "UPDATE auditivo SET GrupoGES = '$Grupo', Metodo = '$Metodo', Fecha = '$Fecha', LEQ = '$LEQ', Recomendaciones2 = '$Recomendaciones', TLV = '$TLV', Color = '$Color' WHERE id = $id";
        $result = $mysqli->query($sql);
        if($Metodo == "Dosimetría") {
            echo $mensaje = 1;
        } else {
            echo $mensaje = 2;
        }
    }    
?>    