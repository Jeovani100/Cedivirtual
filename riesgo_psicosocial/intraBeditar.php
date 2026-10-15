<?php
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    if(isset($_POST['idintraBe'])) {
       $idintraB=$_POST["idintraBe"];
       $sumaextra=$_POST["sumaextra2e"];
       $I1=$_POST["intrab1e"];
       $I2=$_POST["intrab2e"];
       $I3=$_POST["intrab3e"];
       $I4=$_POST["intrab4e"];
       $I5=$_POST["intrab5e"];
       $I6=$_POST["intrab6e"];
       $I7=$_POST["intrab7e"];
       $I8=$_POST["intrab8e"];
       $I9=$_POST["intrab9e"];
       $I10=$_POST["intrab10e"];
       $I11=$_POST["intrab11e"];
       $I12=$_POST["intrab12e"];
       $I13=$_POST["intrab13e"];
       $I14=$_POST["intrab14e"];
       $I15=$_POST["intrab15e"];
       $I16=$_POST["intrab16e"];
       $I17=$_POST["intrab17e"];
       $I18=$_POST["intrab18e"];
       $I19=$_POST["intrab19e"];
       $I20=$_POST["intrab20e"];
       $I21=$_POST["intrab21e"];
       $I22=$_POST["intrab22e"];
       $I23=$_POST["intrab23e"];
       $I24=$_POST["intrab24e"];
       $I25=$_POST["intrab25e"];
       $I26=$_POST["intrab26e"];
       $I27=$_POST["intrab27e"];
       $I28=$_POST["intrab28e"];
       $I29=$_POST["intrab29e"];
       $I30=$_POST["intrab30e"];
       $I31=$_POST["intrab31e"];
       $I32=$_POST["intrab32e"];
       $I33=$_POST["intrab33e"];
       $I34=$_POST["intrab34e"];
       $I35=$_POST["intrab35e"];
       $I36=$_POST["intrab36e"];
       $I37=$_POST["intrab37e"];
       $I38=$_POST["intrab38e"];
       $I39=$_POST["intrab39e"];
       $I40=$_POST["intrab40e"];
       $I41=$_POST["intrab41e"];
       $I42=$_POST["intrab42e"];
       $I43=$_POST["intrab43e"];
       $I44=$_POST["intrab44e"];
       $I45=$_POST["intrab45e"];
       $I46=$_POST["intrab46e"];
       $I47=$_POST["intrab47e"];
       $I48=$_POST["intrab48e"];
       $I49=$_POST["intrab49e"];
       $I50=$_POST["intrab50e"];
       $I51=$_POST["intrab51e"];
       $I52=$_POST["intrab52e"];
       $I53=$_POST["intrab53e"];
       $I54=$_POST["intrab54e"];
       $I55=$_POST["intrab55e"];
       $I56=$_POST["intrab56e"];
       $I57=$_POST["intrab57e"];
       $I58=$_POST["intrab58e"];
       $I59=$_POST["intrab59e"];
       $I60=$_POST["intrab60e"];
       $I61=$_POST["intrab61e"];
       $I62=$_POST["intrab62e"];
       $I63=$_POST["intrab63e"];
       $I64=$_POST["intrab64e"];
       $I65=$_POST["intrab65e"];
       $I66=$_POST["intrab66e"];
       $I67=$_POST["intrab67e"];
       $I68=$_POST["intrab68e"];
       $I69=$_POST["intrab69e"];
       $I70=$_POST["intrab70e"];
       $I71=$_POST["intrab71e"];
       $I72=$_POST["intrab72e"];
       $I73=$_POST["intrab73e"];
       $I74=$_POST["intrab74e"];
       $I75=$_POST["intrab75e"];
       $I76=$_POST["intrab76e"];
       $I77=$_POST["intrab77e"];
       $I78=$_POST["intrab78e"];
       $I79=$_POST["intrab79e"];
       $I80=$_POST["intrab80e"];
       $I81=$_POST["intrab81e"];
       $I82=$_POST["intrab82e"];
       $I83=$_POST["intrab83e"];
       $I84=$_POST["intrab84e"];
       $I85=$_POST["intrab85e"];
       $I86=$_POST["intrab86e"];
       $I87=$_POST["intrab87e"];
       $I88=$_POST["intrab88e"];
       $I89=$_POST["intrab89e"];
       $I90=$_POST["intrab90e"];
       $I91=$_POST["intrab91e"];
       $I92=$_POST["intrab92e"];
       $I93=$_POST["intrab93e"];
       $I94=$_POST["intrab94e"];
       $I95=$_POST["intrab95e"];
       $I96=$_POST["intrab96e"];
       $I97=$_POST["intrab97e"];

       //Caracteristicas del liderazgo  $Ib+
       $CLb =($I49+$I50+$I51+$I52+$I53+$I54+$I55+$I56+$I57+$I58+$I59+$I60+$I61);
       $CL03=(($CLb/52)*100);
       $CL31 = round($CL03, 1, PHP_ROUND_HALF_UP);
       if ($CL31 != 0){$CL3 = $CL31;} else {$CL3 = 0.1;}
                    if ($CL3 > 38.6) {
                        $CL5= 'Muy Alto';
                    } elseif ($CL3 > 25.1) {
                        $CL5= 'Alto';
                    } elseif ($CL3 > 13.6) {
                        $CL5= 'Medio';
                    } elseif ($CL3 > 3.9 ) {
                        $CL5= 'Bajo';
                    } elseif ($CL3 > 0) {
                        $CL5= 'Sin Riesgo';
                    }
       //Relaciones sociales en el trabajo
       $RSb =($I62+$I63+$I64+$I65+$I66+$I67+$I68+$I69+$I70+$I71+$I72+$I73);
       $RS03=(($RSb/48)*100);
       $RS31 = round($RS03, 1, PHP_ROUND_HALF_UP);
       if ($RS31 != 0){$RS3 = $RS31;} else {$RS3 = 0.1;}
                    if ($RS3 > 37.6) {
                        $RS5= 'Muy Alto';
                    } elseif ($RS3 > 27.2) {
                        $RS5= 'Alto';
                    } elseif ($RS3 > 14.7) {
                        $RS5= 'Medio';
                    } elseif ($RS3 > 6.4) {
                        $RS5= 'Bajo';
                    } elseif ($RS3 > 0) {
                        $RS5= 'Sin Riesgo';
                    }
       //Retroalimentación del desempeño
       $RDb = ($I74+$I75+$I76+$I77+$I78);
       $RD03=(($RDb/20)*100);
       $RD31 = round($RD03, 1, PHP_ROUND_HALF_UP);
       if ($RD31 != 0){$RD3 = $RD31;} else {$RD3 = 0.1;}
                    if ($RD3 > 50.1) {
                        $RD5= 'Muy Alto';
                    } elseif ($RD3 > 30.1) {
                        $RD5= 'Alto';
                    } elseif ($RD3 > 20.1) {
                        $RD5= 'Medio';
                    } elseif ($RD3 > 5.1) {
                        $RD5= 'Bajo';
                    } elseif ($RD3 > 0) {
                        $RD5= 'Sin Riesgo';
                    }
       //Relación con los colaboradores
       //DOMINIO Liderazgo y relaciones sociales en el trabajo
       $LRb =($CLb+$RSb+$RDb);
       $LR03=(($LRb/120)*100);
       $LR31 = round($LR03, 1, PHP_ROUND_HALF_UP);
        if ($LR31 != 0){$LR3 = $LR31;} else {$LR3 = 0.1;}
                    if ($LR3 > 38.4) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR3 > 26.8) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR3 > 17.6) {
                        $LR5= 'Medio';
                    } elseif ($LR3 > 8.4) {
                        $LR5= 'Bajo';
                    } elseif ($LR3 > 0) {
                        $LR5= 'Sin Riesgo';
                    }
       //Claridad de rol
       $CRb =($I41+$I42+$I43+$I44+$I45);
       $CR03=(($CRb/20)*100);
       $CR31 = round($CR03, 1, PHP_ROUND_HALF_UP);
       if ($CR31 != 0){$CR3 = $CR31;} else {$CR3 = 0.1;}
                    if ($CR3 > 30.1) {
                        $CR5= 'Muy Alto';
                    } elseif ($CR3 > 15.1) {
                        $CR5= 'Alto';
                    } elseif ($CR3 > 5.1) {
                        $CR5= 'Medio';
                    } elseif ($CR3 > 1) {
                        $CR5= 'Bajo';
                    } elseif ($CR3 > 0) {
                        $CR5= 'Sin Riesgo';
                    }
       //Capacitacion
       $Cb =($I46+$I47+$I48);
       $C03=(($Cb/12)*100);
       $C31 = round($C03, 1, PHP_ROUND_HALF_UP);
       if ($C31 != 0){$C3 = $C31;} else {$C3 = 0.1;}
                    if ($C3 > 50.1) {
                        $C5= 'Muy Alto';
                    } elseif ($C3 > 25.1) {
                        $C5= 'Alto';
                    } elseif ($C3 > 16.8) {
                        $C5= 'Medio';
                    } elseif ($C3 > 1) {
                        $C5= 'Bajo';
                    } elseif ($C3 > 0) {
                        $C5= 'Sin Riesgo';
                    }
       //Participación y manejo del cambio
       $PMb =($I38+$I39+$I40);  
       $PM03=(($PMb/12)*100);
       $PM31 = round($PM03, 1, PHP_ROUND_HALF_UP);
       if ($PM31 != 0){$PM3 = $PM31;} else {$PM3 = 0.1;}
                    if ($PM3 > 58.4) {
                        $PM5= 'Muy Alto';
                    } elseif ($PM3 > 41.8) {
                        $PM5= 'Alto';
                    } elseif ($PM3 > 33.4) {
                        $PM5= 'Medio';
                    } elseif ($PM3 > 16.8) {
                        $PM5= 'Bajo';
                    } elseif ($PM3 > 0) {
                        $PM5= 'Sin Riesgo';
                    }
       //Oportunidades para el uso y desarrollo de habiIidades y conocimientos
       $PDb =($I29+$I30+$I31+$I32);
       $PD03=(($PDb/16)*100);
       $PD31 = round($PD03, 1, PHP_ROUND_HALF_UP);
       if ($PD31 != 0){$PD3 = $PD31;} else {$PD3 = 0.1;}
                    if ($PD3 > 56.4) {
                        $PD5= 'Muy Alto';
                    } elseif ($PD3 > 37.6) {
                        $PD5= 'Alto';
                    } elseif ($PD3 > 25.1) {
                        $PD5= 'Medio';
                    } elseif ($PD3 > 12.6) {
                        $PD5= 'Bajo';
                    } elseif ($PD3 > 0) {
                        $PD5= 'Sin Riesgo';
                    }
       //Control y autonomía sobre eI trabajo
       $CAb =($I34+$I35+$I36);
       $CA03=(($CAb/12)*100);
       $CA31 = round($CA03, 1, PHP_ROUND_HALF_UP);
       if ($CA31 != 0){$CA3 = $CA31;} else {$CA3 = 0.1;}
                    if ($CA3 > 75.1) {
                        $CA5= 'Muy Alto';
                    } elseif ($CA3 > 66.8) {
                        $CA5= 'Alto';
                    } elseif ($CA3 > 50.1) {
                        $CA5= 'Medio';
                    } elseif ($CA3 > 33.4) {
                        $CA5= 'Bajo';
                    } elseif ($CA3 > 0) {
                        $CA5= 'Sin Riesgo';
                    }
       //DOMINIO Control sobre el trabajo
       $CTb =($CRb+$Cb+$PMb+$PDb+$CAb);
       $CT03=(($CTb/72)*100);
       $CT31 = round($CT03, 1, PHP_ROUND_HALF_UP);
       if ($CT31 != 0){$CT3 = $CT31;} else {$CT3 = 0.1;}
                    if ($CT3 > 43.2) {
                        $CT5= 'Muy Alto';
                    } elseif ($CT3  > 34.8) {
                        $CT5= 'Alto';
                    } elseif ($CT3  > 26.5) {
                        $CT5= 'Medio';
                    } elseif ($CT3  > 19.5) {
                        $CT5= 'Bajo';
                    } elseif ($CT3  > 0) {
                        $CT5= 'Sin Riesgo';
                    }
       //Demandas ambientales y de esfuerzo físico
       $DAEb=($I1+$I2+$I3+$I4+$I5+$I6+$I7+$I8+$I9+$I10+$I11+$I12);
       $DAE03=(($DAEb/48)*100);
       $DAE31 = round($DAE03, 1, PHP_ROUND_HALF_UP);
       if ($DAE31 != 0){$DAE3 = $DAE31;} else {$DAE3 = 0.1;}
                     if ($DAE3 > 48) {
                        $DAE5= 'Muy Alto';
                    } elseif ($DAE3 > 39.7) {
                        $DAE5= 'Alto';
                    } elseif ($DAE3 > 31.4) {
                        $DAE5= 'Medio';
                    } elseif ($DAE3 > 23) {
                        $DAE5= 'Bajo';
                    } elseif ($DAE3 > 0) {
                        $DAE5= 'Sin Riesgo';
                    }
       //Demandas emocionales
       $DEb=($I89+$I90+$I91+$I92+$I93+$I94+$I95+$I96+$I97);
       $DE03=(($DEb/36)*100);
       $DE31 = round($DE03, 1, PHP_ROUND_HALF_UP);
       if ($DE31 != 0){$DE3 = $DE31;} else {$DE3 = 0.1;}
                    if ($DE3 > 47.3) {
                        $DE5= 'Muy Alto';
                    } elseif ($DE3 > 39) {
                        $DE5= 'Alto';
                    } elseif ($DE3 > 27.9) {
                        $DE5= 'Medio';
                    } elseif ($DE3 > 19.5) {
                        $DE5= 'Bajo';
                    } elseif ($DE3 > 0) {
                        $DE5= 'Sin Riesgo';
                    }
       //Demandas cuantitativas
       $DCb =($I13+$I14+$I15);
       $DC03=(($DCb/12)*100);
       $DC31 = round($DC03, 1, PHP_ROUND_HALF_UP);
       if ($DC31 != 0){$DC3 = $DC31;} else {$DC3 = 0.1;}
                    if ($DC3 > 50.1) {
                        $DC5= 'Muy Alto';
                    } elseif ($DC3 > 41.8) {
                        $DC5= 'Alto';
                    } elseif ($DC3 > 33.4) {
                        $DC5= 'Medio';
                    } elseif ($DC3 > 16.8) {
                        $DC5= 'Bajo';
                    } elseif ($DC3 > 0) {
                        $DC5= 'Sin Riesgo';
                    }
       //Influencia del trabajo sobre eI entorno extralaboral
       $ITb =($I25+$I26+$I27+$I28);
       $IT03=(($ITb/16)*100);
       $IT31 = round($IT03, 1, PHP_ROUND_HALF_UP);
       if ($IT31 != 0){$IT3 = $IT31;} else {$IT3 = 0.1;}
                    if ($IT3 > 50.1) {
                        $IT5= 'Muy Alto';
                    } elseif ($IT3 > 31.4) {
                        $IT5= 'Alto';
                    } elseif ($IT3 > 25.1) {
                        $IT5= 'Medio';
                    } elseif ($IT3 > 12.6) {
                        $IT5= 'Bajo';
                    } elseif ($IT3 > 0) {
                        $IT5= 'Sin Riesgo';
                    }
       //Exigencias de responsabiIidad deI cargo
       //Demandas de carga mental
       $DCMb =($I16+$I17+$I18+$I19+$I20);
       $DCM03=(($DCMb/20)*100);
       $DCM31 = round($DCM03, 1, PHP_ROUND_HALF_UP);
       if ($DCM31 != 0){$DCM3 = $DCM31;} else {$DCM3 = 0.1;}
                    if ($DCM3 > 85.1) {
                        $DCM5= 'Muy Alto';
                    } elseif ($DCM3 > 75.1) {
                        $DCM5= 'Alto';
                    } elseif ($DCM3 > 65.1) {
                        $DCM5= 'Medio';
                    } elseif ($DCM3 > 50.1) {
                        $DCM5= 'Bajo';
                    } elseif ($DCM3 > 0) {
                        $DCM5= 'Sin Riesgo';
                    }
       //Consistencia del rol
       //Demandas de la jornada de trabajo
       $DJTb =($I21+$I22+$I23+$I24+$I33+$I37);
       $DJT03=(($DJTb/24)*100);
       $DJT31 = round($DJT03, 1, PHP_ROUND_HALF_UP);
       if ($DJT31 != 0){$DJT3 = $DJT31;} else {$DJT3 = 0.1;}
                  if ($DJT3 > 58.4) {
                        $DJT5= 'Muy Alto';
                    } elseif ($DJT3 > 45.9) {
                        $DJT5= 'Alto';
                    } elseif ($DJT3 > 37.6) {
                        $DJT5= 'Medio';
                    } elseif ($DJT3 > 25.1) {
                        $DJT5= 'Bajo';
                    } elseif ($DJT3 > 0) {
                        $DJT5= 'Sin Riesgo';
                    }
       //DOMINIO Demandas del trabajo
       $DTb =($DAEb+$DEb+$DCb+$ITb+$DCMb+$DJTb);
       $DT03=(($DTb/156)*100);
       $DT31 = round($DT03, 1, PHP_ROUND_HALF_UP);
       if ($DT31 != 0){$DT3 = $DT31;} else {$DT3 = 0.1;}
                    if ($DT3 > 44.3) {
                        $DT5= 'Muy Alto';
                    } elseif ($DT3  > 37.9) {
                        $DT5= 'Alto';
                    } elseif ($DT3  > 33.4) {
                        $DT5= 'Medio';
                    } elseif ($DT3  > 27) {
                        $DT5= 'Bajo';
                    } elseif ($DT3  > 0) {
                        $DT5= 'Sin Riesgo';
                    }
       //Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza
       $RPb =($I85+$I86+$I87+$I88);  
       $RP03=(($RPb/16)*100);
       $RP31= round($RP03, 1, PHP_ROUND_HALF_UP);
       if ($RP31 != 0){$RP3 = $RP31;} else {$RP3 = 0.1;}
                    if ($RP3 > 18.9) {
                        $RP5= 'Muy Alto';
                    } elseif ($RP3 > 12.6) {
                        $RP5= 'Alto';
                    } elseif ($RP3 > 6.4) {
                        $RP5= 'Medio';
                    } elseif ($RP3 > 1) {
                        $RP5= 'Bajo';
                    } elseif ($RP3 > 0) {
                        $RP5= 'Sin Riesgo';
                    }
       //Reconocimiento y compensación
       $RYCb =($I79+$I80+$I81+$I82+$I83+$I84);
       $RYC03=(($RYCb/24)*100);
       $RYC31 = round($RYC03, 1, PHP_ROUND_HALF_UP);
       if ($RYC31 != 0){$RYC3 = $RYC31;} else {$RYC3 = 0.1;}
                    if ($RYC3 > 37.6) {
                        $RYC5= 'Muy Alto';
                    } elseif ($RYC3 > 25.1) {
                        $RYC5= 'Alto';
                    } elseif ($RYC3 > 12.6) {
                        $RYC5= 'Medio';
                    } elseif ($RYC3 > 1) {
                        $RYC5= 'Bajo';
                    } elseif ($RYC3 > 0) {
                        $RYC5= 'Sin Riesgo';
                    }
       //DOMINIO Recompensas
       $Rb =($RPb+$RYCb);
       $R03=(($Rb/40)*100);
       $R31 = round($R03, 1, PHP_ROUND_HALF_UP);
       if ($R31 != 0){$R3 = $R31;} else {$R3 = 0.1;}
                    if ($R3 > 27.6) {
                        $R5= 'Muy Alto';
                    } elseif ($R3  > 17.6) {
                        $R5= 'Alto';
                    } elseif ($R3  > 10.7) {
                        $R5= 'Medio';
                    } elseif ($R3  > 2.6) {
                        $R5= 'Bajo';
                    } elseif ($R3  > 0) {
                        $R5= 'Sin Riesgo';
                    }
       //GENERAL B
       $Gb =($LRb+$CTb+$DTb+$Rb);
       $G03=(($Gb/388)*100);
       $Gintra2 = round($G03, 1, PHP_ROUND_HALF_UP);
       if ($Gintra2 != 0){$G3 = $Gintra2;} else {$G3 = 0.1;}
                    if ($G3 > 38.8) {
                        $G5= 'Muy Alto';
                    } elseif ($G3 > 31.3) {
                        $G5= 'Alto';
                    } elseif ($G3 > 26.1) {
                        $G5= 'Medio';
                    } elseif ($G3 > 20.7) {
                        $G5= 'Bajo';
                    } elseif ($G3 > 0) {
                        $G5= 'Sin Riesgo';
                    } 
       
       $sql = "UPDATE intralaboralB SET CLb = '$CLb', CL3 = '$CL3', RSb = '$RSb', RS3 = '$RS3', RDb = '$RDb', RD3 = '$RD3', LRb = '$LRb', LR3 = '$LR3', CRb = '$CRb', CR3 = '$CR3', 
       Cb = '$Cb', C3 = '$C3', PMb = '$PMb', PM3  = '$PM3', PDb = '$PDb', PD3 = '$PD3', CAb = '$CAb', CA3 = '$CA3', CTb = '$CTb', CT3 = '$CT3', DAEb = '$DAEb', DAE3 = '$DAE3', DEb = '$DEb', DE3 = '$DE3', 
       DCb = '$DCb', DC3 = '$DC3', ITb = '$ITb', IT3 = '$IT3', DCMb = '$DCMb', DCM3 = '$DCM3', DJTb = '$DJTb', DJT3 = '$DJT3', DTb = '$DTb', 
       DT3 = '$DT3', RPb = '$RPb', RP3 = '$RP3', RYCb = '$RYCb', RYC3 = '$RYC3', Rb = '$Rb', R3= '$R3', Gb = '$Gb', G3= '$G3',I1 = '$I1', I2 = '$I2', I3 = '$I3', I4 = '$I4', I5 = '$I5', I6 = '$I6', I7 = '$I7', 
       I8 = '$I8', I9 = '$I9', I10 = '$I10', I11 = '$I11', I12 = '$I12', I13 = '$I13', I14 = '$I14', I15 = '$I15', I16 = '$I16', I17 = '$I17', I18 = '$I18', I19 = '$I19', I20 = '$I20', I21 = '$I21', I22 = '$I22',
       I23 = '$I23', I24 = '$I24', I25 = '$I25', I26 = '$I26', I27 = '$I27', I28 = '$I28', I29 = '$I29', I30 = '$I30', I31 = '$I31', I32 = '$I32', I33 = '$I33', I34 = '$I34', I35 = '$I35', I36 = '$I36', 
       I37 = '$I37', I38 = '$I38', I39 = '$I39', I40 = '$I40', I41 = '$I41', I42 = '$I42', I43 = '$I43', I44 = '$I44', I45 = '$I45', I46 = '$I46', I47 = '$I47', I48 = '$I48', I49 = '$I49', I50 = '$I50', 
       I51 = '$I51', I52 = '$I52', I53 = '$I53', I54 = '$I54', I55 = '$I55', I56= '$I56', I57 = '$I57', I58 = '$I58', I59 = '$I59', I60 = '$I60', I61 = '$I61', I62 = '$I62', I63 = '$I63', I64 = '$I64', 
       I65 = '$I65', I66 = '$I66', I67 = '$I67', I68 = '$I69', I69 = '$I69', I70 = '$I70', I71 = '$I71', I72 = '$I72', I73 = '$I73', I74 = '$I74', I75 = '$I75', I76 = '$I76', I77 = '$I77', I78 = '$I78', 
       I79 = '$I79', I80 = '$I80', I81 = '$I81', I82 = '$I82', I83 = '$I83', I84 = '$I84', I85 = '$I85', I86 = '$I86', I87 = '$I87', I88 = '$I88', I89 = '$I89', I90 = '$I90', I91 = '$I91', I92 = '$I92',  
       I93 = '$I93', I94 = '$I94', I95 = '$I95', I96 = '$I96', I97 = '$I97' WHERE id_usuario = '$idintraB'";
       $result = $mysqli->query($sql);
       
       if ($sumaextra > 0) {
       $EGB0 =($Gb+$sumaextra);
       $EGB1=(($EGB0/512)*100);
       $EGB = round($EGB1, 1, PHP_ROUND_HALF_UP); 
       } else {
          $EGB = 0; 
       }
                     if ($EGB > 35.5) {
                        $EG5= 'Muy Alto';
                        $EGC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EGB > 29.6) {
                        $EG5= 'Alto';
                        $EGC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EGB > 24.9) {
                        $EG5= 'Medio';
                        $EGC='style="color:rgb(102, 102, 102)"';
                    } elseif ($EGB > 20) {
                        $EG5= 'Bajo';
                        $EGC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EGB > 0) {
                        $EG5= 'Sin Riesgo';
                        $EGC= 'style="color:rgb(57, 77, 0)"';
                    }  
       
       $sql = "UPDATE datosg SET IAB = '$EGB', R_0 = '$EG5', C_0 = '$EGC', CLb = '$CL3', R_25 = '$CL5', RSb = '$RS3', R_26 = '$RS5', RDb = '$RD3', R_27 = '$RD5',  LRb = '$LR3', R_28 = '$LR5', CRb = '$CR3', R_29 = '$CR5',
       Cb = '$C3', R_30 = '$C5', PMb  = '$PM3', R_31 = '$PM5', PDb = '$PD3', R_32 = '$PD5', CAb = '$CA3',  R_33 = '$CA5', CTb = '$CT3', R_34 = '$CT5', DAEb = '$DAE3', R_35 = '$DAE5', DEb = '$DE3', R_36 = '$DE5',
       DCb = '$DC3', R_37 = '$DC5', ITb = '$IT3', R_38 = '$IT5', DCMb = '$DCM3', R_39 = '$DCM5',  DJTb = '$DJT3', R_40 = '$DJT5', DTb = '$DT3', R_41 = '$DT5', RPb = '$RP3',  R_42 = '$RP5', RYCb = '$RYC3', 
       R_43 = '$RYC5', Rb = '$R3', R_44 = '$R5', IntraB = '$G3' , R_45 = '$G5', 
       
       CL = ' ', R_1 = ' ', RS = ' ', R_2 = ' ', RD = ' ', R_3 = ' ', RC = ' ', R_4 = ' ', LR = ' ', R_5 = ' ', CR = ' ', R_6 = ' ',
       C = ' ', R_7 = ' ', PM  = ' ', R_8 = ' ', PD = ' ', R_9 = ' ', CA = ' ',  R_10 = ' ', CT = ' ', R_11 = ' ', DAE = ' ', R_12 = ' ', DE = ' ', R_13 = ' ', 
       DC = ' ', R_14 = ' ', IT = ' ', R_15 = ' ', ER = ' ', R_16 = ' ', DCM = ' ', R_17 = ' ', CRL = ' ', R_18 = ' ', DJT = ' ', R_19 = ' ', DT = ' ', R_20 = ' ',
       RP = ' ',  R_21 = ' ', RYC = ' ', R_22 = ' ', R= ' ', R_23 = ' ', IntraA = ' ' , R_24 = ' ' WHERE id = '$idintraB'";
       $resultado = $mysqli->query($sql);
};
?>







