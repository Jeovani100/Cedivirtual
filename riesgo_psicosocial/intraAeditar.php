<?php
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    if(isset($_POST['ideditarIA'])) {
       $idintraA=$_POST["ideditarIA"];
       $sumaextra=$_POST["sumaextrae"];
       $I1=$_POST["intra1e"];
       $I2=$_POST["intra2e"];
       $I3=$_POST["intra3e"];
       $I4=$_POST["intra4e"];
       $I5=$_POST["intra5e"];
       $I6=$_POST["intra6e"];
       $I7=$_POST["intra7e"];
       $I8=$_POST["intra8e"];
       $I9=$_POST["intra9e"];
       $I10=$_POST["intra10e"];
       $I11=$_POST["intra11e"];
       $I12=$_POST["intra12e"];
       $I13=$_POST["intra13e"];
       $I14=$_POST["intra14e"];
       $I15=$_POST["intra15e"];
       $I16=$_POST["intra16e"];
       $I17=$_POST["intra17e"];
       $I18=$_POST["intra18e"];
       $I19=$_POST["intra19e"];
       $I20=$_POST["intra20e"];
       $I21=$_POST["intra21e"];
       $I22=$_POST["intra22e"];
       $I23=$_POST["intra23e"];
       $I24=$_POST["intra24e"];
       $I25=$_POST["intra25e"];
       $I26=$_POST["intra26e"];
       $I27=$_POST["intra27e"];
       $I28=$_POST["intra28e"];
       $I29=$_POST["intra29e"];
       $I30=$_POST["intra30e"];
       $I31=$_POST["intra31e"];
       $I32=$_POST["intra32e"];
       $I33=$_POST["intra33e"];
       $I34=$_POST["intra34e"];
       $I35=$_POST["intra35e"];
       $I36=$_POST["intra36e"];
       $I37=$_POST["intra37e"];
       $I38=$_POST["intra38e"];
       $I39=$_POST["intra39e"];
       $I40=$_POST["intra40e"];
       $I41=$_POST["intra41e"];
       $I42=$_POST["intra42e"];
       $I43=$_POST["intra43e"];
       $I44=$_POST["intra44e"];
       $I45=$_POST["intra45e"];
       $I46=$_POST["intra46e"];
       $I47=$_POST["intra47e"];
       $I48=$_POST["intra48e"];
       $I49=$_POST["intra49e"];
       $I50=$_POST["intra50e"];
       $I51=$_POST["intra51e"];
       $I52=$_POST["intra52e"];
       $I53=$_POST["intra53e"];
       $I54=$_POST["intra54e"];
       $I55=$_POST["intra55e"];
       $I56=$_POST["intra56e"];
       $I57=$_POST["intra57e"];
       $I58=$_POST["intra58e"];
       $I59=$_POST["intra59e"];
       $I60=$_POST["intra60e"];
       $I61=$_POST["intra61e"];
       $I62=$_POST["intra62e"];
       $I63=$_POST["intra63e"];
       $I64=$_POST["intra64e"];
       $I65=$_POST["intra65e"];
       $I66=$_POST["intra66e"];
       $I67=$_POST["intra67e"];
       $I68=$_POST["intra68e"];
       $I69=$_POST["intra69e"];
       $I70=$_POST["intra70e"];
       $I71=$_POST["intra71e"];
       $I72=$_POST["intra72e"];
       $I73=$_POST["intra73e"];
       $I74=$_POST["intra74e"];
       $I75=$_POST["intra75e"];
       $I76=$_POST["intra76e"];
       $I77=$_POST["intra77e"];
       $I78=$_POST["intra78e"];
       $I79=$_POST["intra79e"];
       $I80=$_POST["intra80e"];
       $I81=$_POST["intra81e"];
       $I82=$_POST["intra82e"];
       $I83=$_POST["intra83e"];
       $I84=$_POST["intra84e"];
       $I85=$_POST["intra85e"];
       $I86=$_POST["intra86e"];
       $I87=$_POST["intra87e"];
       $I88=$_POST["intra88e"];
       $I89=$_POST["intra89e"];
       $I90=$_POST["intra90e"];
       $I91=$_POST["intra91e"];
       $I92=$_POST["intra92e"];
       $I93=$_POST["intra93e"];
       $I94=$_POST["intra94e"];
       $I95=$_POST["intra95e"];
       $I96=$_POST["intra96e"];
       $I97=$_POST["intra97e"];
       $I98=$_POST["intra98e"];
       $I99=$_POST["intra99e"];
       $I100=$_POST["intra100e"];
       $I101=$_POST["intra101e"];
       $I102=$_POST["intra102e"];
       $I103=$_POST["intra103e"];
       $I104=$_POST["intra104e"];
       $I105=$_POST["intra105e"];
       $I106=$_POST["intra106e"];
       $I107=$_POST["intra107e"];
       $I108=$_POST["intra108e"];
       $I109=$_POST["intra109e"];
       $I110=$_POST["intra110e"];
       $I111=$_POST["intra111e"];
       $I112=$_POST["intra112e"];
       $I113=$_POST["intra113e"];
       $I114=$_POST["intra114e"];
       $I115=$_POST["intra115e"];
       $I116=$_POST["intra116e"];
       $I117=$_POST["intra117e"];
       $I118=$_POST["intra118e"];
       $I119=$_POST["intra119e"];
       $I120=$_POST["intra120e"];
       $I121=$_POST["intra121e"];
       $I122=$_POST["intra122e"];
       $I123=$_POST["intra123e"];
       //Caracteristicas del liderazgo  
       $CL =($I63+$I64+$I65+$I66+$I67+$I68+$I69+$I70+$I71+$I72+$I73+$I74+$I75);
       $CL02=(($CL/52)*100);
       $CL30 = round($CL02, 1, PHP_ROUND_HALF_UP);
       if ($CL30 != 0){$CL2 = $CL30;} else {$CL2 = 0.1;}
                    if ($CL2 > 46.3) {
                        $CL5= 'Muy Alto';
                    } elseif ($CL2 > 30.9) {
                        $CL5= 'Alto';
                    } elseif ($CL2 > 15.5) {
                        $CL5= 'Medio';
                    } elseif ($CL2 > 3.9 ) {
                        $CL5= 'Bajo';
                    } elseif ($CL2 > 0) {
                        $CL5= 'Sin Riesgo';
                    }
       //Relaciones sociales en el trabajo
       $RS =($I76+$I77+$I78+$I79+$I80+$I81+$I82+$I83+$I84+$I85+$I86+$I87+$I88+$I89);
       $RS02=(($RS/56)*100);
       $RS30 = round($RS02, 1, PHP_ROUND_HALF_UP);
       if ($RS30 != 0){$RS2 = $RS30;} else {$RS2 = 0.1;}
                    if ($RS2 > 37.6) {
                        $RS5= 'Muy Alto';
                    } elseif ($RS2 > 25.1) {
                        $RS5= 'Alto';
                    } elseif ($RS2 > 16.2) {
                        $RS5= 'Medio';
                    } elseif ($RS2 > 5.5) {
                        $RS5= 'Bajo';
                    } elseif ($RS2 > 0) {
                        $RS5= 'Sin Riesgo';
                    }
       //Retroalimentación del desempeño
       $RD = ($I90+$I91+$I92+$I93+$I94);
       $RD02=(($RD/20)*100);
       $RD30 = round($RD02, 1, PHP_ROUND_HALF_UP);
       if ($RD30 != 0){$RD2 = $RD30;} else {$RD2 = 0.1;}
                    if ($RD2 > 55.1) {
                        $RD5= 'Muy Alto';
                    } elseif ($RD2 > 40.1) {
                        $RD5= 'Alto';
                    } elseif ($RD2 > 25.1) {
                        $RD5= 'Medio';
                    } elseif ($RD2 > 10.1) {
                        $RD5= 'Bajo';
                    } elseif ($RD2 > 0) {
                        $RD5= 'Sin Riesgo';
                    }
       //Relación con los colaboradores
       $RC =($I115+$I116+$I117+$I118+$I119+$I120+$I121+$I122+$I123);
       $RC02=(($RC/36)*100);
       $RC30 = round($RC02, 1, PHP_ROUND_HALF_UP);
       if ($RC30 != 0){$RC2 = $RC30;} else {$RC2 = 0.1;}
                    if ($RC2 > 47.3) {
                        $RC5= 'Muy Alto';
                    } elseif ($RC2 > 33.4) {
                        $RC5= 'Alto';
                    } elseif ($RC2 > 25.1) {
                        $RC5= 'Medio';
                    } elseif ($RC2 > 14) {
                        $RC5= 'Bajo';
                    } elseif ($RC2 > 0) {
                        $RC5= 'Sin Riesgo';
                    }
       //DOMINIO Liderazgo y relaciones sociales en el trabajo
       $LR =($CL+$RS+$RD+$RC);
       $LR02=(($LR/164)*100);
       $LR30 = round($LR02, 1, PHP_ROUND_HALF_UP);
       if ($LR30 != 0){$LR2 = $LR30;} else {$LR2 = 0.1;}
                    if ($LR2 > 34.9) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR2 > 25.7) {
                        $LR5= 'Alto';
                    } elseif ($LR2 > 17.8) {
                        $LR5= 'Medio';
                    } elseif ($LR2 > 9.2) {
                        $LR5= 'Bajo';
                    } elseif ($LR2 > 0) {
                        $LR5= 'Sin Riesgo';
                    }
       //Claridad de rol
       $CR =($I53+$I54+$I55+$I56+$I57+$I58+$I59);
       $CR02=(($CR/28)*100);
       $CR30 = round($CR02, 1, PHP_ROUND_HALF_UP);
       if ($CR30 != 0){$CR2 = $CR30;} else {$CR2 = 0.1;}
                    if ($CR2 > 39.4) {
                        $CR5= 'Muy Alto';
                    } elseif ($CR2 > 21.5) {
                        $CR5= 'Alto';
                    } elseif ($CR2 > 10.8) {
                        $CR5= 'Medio';
                    } elseif ($CR2 > 1) {
                        $CR5= 'Bajo';
                    } elseif ($CR2 > 0) {
                        $CR5= 'Sin Riesgo';
                    }
       //Capacitacion
       $C =($I60+$I61+$I62);
       $C02=(($C/12)*100);
       $C30 = round($C02, 1, PHP_ROUND_HALF_UP);
       if ($C30 != 0){$C2 = $C30;} else {$C2 = 0.1;}
                    if ($C2 > 50.1) {
                        $C5= 'Muy Alto';
                    } elseif ($C2 > 33.4) {
                        $C5= 'Alto';
                    } elseif ($C2 > 16.8) {
                        $C5= 'Medio';
                    } elseif ($C2 > 1) {
                        $C5= 'Bajo';
                    } elseif ($C2 > 0) {
                        $C5= 'Sin Riesgo';
                    }
       //Participación y manejo del cambio
       $PM =($I48+$I49+$I50+$I51);  
       $PM02=(($PM/16)*100);
       $PM30 = round($PM02, 1, PHP_ROUND_HALF_UP);
       if ($PM30 != 0){$PM2 = $PM30;} else {$PM2 = 0.1;}
                    if ($PM2 > 50.1) {
                        $PM5= 'Muy Alto';
                    } elseif ($PM2 > 37.6) {
                        $PM5= 'Alto';
                    } elseif ($PM2 > 25.1) {
                        $PM5= 'Medio';
                    } elseif ($PM2 > 12.6) {
                        $PM5= 'Bajo';
                    } elseif ($PM2 > 0) {
                        $PM5= 'Sin Riesgo';
                    }
       //Oportunidades para el uso y desarrollo de habiIidades y conocimientos
       $PD =($I39+$I40+$I41+$I42);
       $PD02=(($PD/16)*100);
       $PD30 = round($PD02, 1, PHP_ROUND_HALF_UP);
       if ($PD30 != 0){$PD2 = $PD30;} else {$PD2 = 0.1;}
       //Control y autonomía sobre eI trabajo
                    if ($PD2 > 31.4) {
                        $PD5= 'Muy Alto';
                    } elseif ($PD2 > 18.9) {
                        $PD5= 'Alto';
                    } elseif ($PD2 > 6.4) {
                        $PD5= 'Medio';
                    } elseif ($PD2 > 1) {
                        $PD5= 'Bajo';
                    } elseif ($PD2 > 0) {
                        $PD5= 'Sin Riesgo';
                    }
       $CA =($I44+$I45+$I46);
       $CA02=(($CA/12)*100);
       $CA30 =  round($CA02, 1, PHP_ROUND_HALF_UP);
       if ($CA30 != 0){$CA2 = $CA30;} else {$CA2 = 0.1;}
                    if ($CA2 > 58.4) {
                        $CA5= 'Muy Alto';
                    } elseif ($CA2 > 41.8) {
                        $CA5= 'Alto';
                    } elseif ($CA2 > 25.1) {
                        $CA5= 'Medio';
                    } elseif ($CA2 > 8.4) {
                        $CA5= 'Bajo';
                    } elseif ($CA2 > 0) {
                        $CA5= 'Sin Riesgo';
                    }
       //DOMINIO Control sobre el trabajo
       $CT =($CR+$C+$PM+$PD+$CA);
       $CT02=(($CT/84)*100);
       $CT30 = round($CT02, 1, PHP_ROUND_HALF_UP);
       if ($CT30 != 0){$CT2 = $CT30;} else {$CT2 = 0.1;}
                    if ($CT2 > 40.6) {
                        $CT5= 'Muy Alto';
                    } elseif ($CT2  > 29.9) {
                        $CT5= 'Alto';
                    } elseif ($CT2  > 19.1) {
                        $CT5= 'Medio';
                    } elseif ($CT2  > 10.8) {
                        $CT5= 'Bajo';
                    } elseif ($CT2  > 0) {
                        $CT5= 'Sin Riesgo';
                    }
       //Demandas ambientales y de esfuerzo físico
       $DAE=($I1+$I2+$I3+$I4+$I5+$I6+$I7+$I8+$I9+$I10+$I11+$I12);
       $DAE02=(($DAE/48)*100);
       $DAE30 = round($DAE02, 1, PHP_ROUND_HALF_UP);
        if ($DAE30 != 0){$DAE2 = $DAE30;} else {$DAE2 = 0.1;}
                    if ($DAE2 > 39.7) {
                        $DAE5= 'Muy Alto';
                    } elseif ($DAE2 > 31.4) {
                        $DAE5= 'Alto';
                    } elseif ($DAE2 > 23) {
                        $DAE5= 'Medio';
                    } elseif ($DAE2 > 14.7) {
                        $DAE5= 'Bajo';
                    } elseif ($DAE2 > 0) {
                        $DAE5= 'Sin Riesgo';
                    }
       //Demandas emocionales
       $DE=($I106+$I107+$I108+$I109+$I110+$I111+$I112+$I113+$I114);
       $DE02=(($DE/36)*100);
       $DE30 = round($DE02, 1, PHP_ROUND_HALF_UP);
       if ($DE30 != 0){$DE2 = $DE30;} else {$DE2 = 0.1;}
                    if ($DE2 > 47.3) {
                        $DE5= 'Muy Alto';
                    } elseif ($DE2> 33.4) {
                        $DE5= 'Alto';
                    } elseif ($DE2 > 25.1) {
                        $DE5= 'Medio';
                    } elseif ($DE2 > 14) {
                        $DE5= 'Bajo';
                    } elseif ($DE2 > 0) {
                        $DE5= 'Sin Riesgo';
                    }
       //Demandas cuantitativas
       $DC =($I13+$I14+$I15+$I32+$I43+$I47);
       $DC02=(($DC/24)*100);
       $DC30 = round($DC02, 1, PHP_ROUND_HALF_UP);
       if ($DC30 != 0){$DC2 = $DC30;} else {$DC2 = 0.1;}
                    if ($DC2 > 54.3) {
                        $DC5= 'Muy Alto';
                    } elseif ($DC2> 45.9) {
                        $DC5= 'Alto';
                    } elseif ($DC2 > 33.4) {
                        $DC5= 'Medio';
                    } elseif ($DC2 > 25.1) {
                        $DC5= 'Bajo';
                    } elseif ($DC2 > 0) {
                        $DC5= 'Sin Riesgo';
                    }
       //Influencia del trabajo sobre eI entorno extralaboral
       $IT =($I35+$I36+$I37+$I38);
       $IT02=(($IT/16)*100);
       $IT30 = round($IT02, 1, PHP_ROUND_HALF_UP);
       if ($IT30 != 0){$IT2 = $IT30;} else {$IT2 = 0.1;}
                    if ($IT2 > 50.1) {
                        $IT5= 'Muy Alto';
                    } elseif ($IT2 > 43.9) {
                        $IT5= 'Alto';
                    } elseif ($IT2 > 31.4) {
                        $IT5= 'Medio';
                    } elseif ($IT2 > 18.9) {
                        $IT5= 'Bajo';
                    } elseif ($IT2 > 0) {
                        $IT5= 'Sin Riesgo';
                    }
       //Exigencias de responsabiIidad deI cargo
       $ER =($I19+$I22+$I23+$I24+$I25+$I26);
       $ER02=(($ER/24)*100);
       $ER30 = round($ER02, 1, PHP_ROUND_HALF_UP);
       if ($ER30 != 0){$ER2 = $ER30;} else {$ER2 = 0.1;}
                    if ($ER2 > 79.3) {
                        $ER5= 'Muy Alto';
                    } elseif ($ER2 > 66.8) {
                        $ER5= 'Alto';
                    } elseif ($ER2 > 54.3) {
                        $ER5= 'Medio';
                    } elseif ($ER2 > 37.6) {
                        $ER5= 'Bajo';
                    } elseif ($ER2 > 0) {
                        $ER5= 'Sin Riesgo';
                    }
       //Demandas de carga mental
       $DCM =($I16+$I17+$I18+$I20+$I21);
       $DCM02=(($DCM/20)*100);
       $DCM30 = round($DCM02, 1, PHP_ROUND_HALF_UP);
       if ($DCM30 != 0){$DCM2 = $DCM30;} else {$DCM2 = 0.1;}
                    if ($DCM2 > 90.1) {
                        $DCM5= 'Muy Alto';
                    } elseif ($DCM2 > 80.1) {
                        $DCM5= 'Alto';
                    } elseif ($DCM2 > 70.1) {
                        $DCM5= 'Medio';
                    } elseif ($DCM2 > 60.1) {
                        $DCM5= 'Bajo';
                    } elseif ($DCM2 > 0) {
                        $DCM5= 'Sin Riesgo';
                    }
       //Consistencia del rol
       $CRL =($I27+$I28+$I29+$I30+$I52);
       $CRL02=(($CRL/20)*100);
       $CRL30 = round($CRL02, 1, PHP_ROUND_HALF_UP);
       if ($CRL30 != 0){$CRL2 = $CRL30;} else {$CRL2 = 0.1;}
                    if ($CRL2 > 45.1) {
                        $CRL5= 'Muy Alto';
                    } elseif ($CRL2 > 35.1) {
                        $CRL5= 'Alto';
                    } elseif ($CRL2 > 25.1) {
                        $CRL5= 'Medio';
                    } elseif ($CRL2 > 15.1) {
                        $CRL5= 'Bajo';
                    } elseif ($CRL2 > 0) {
                        $CRL5= 'Sin Riesgo';
                    }
       //Demandas de la jornada de trabajo
       $DJT =($I31+$I33+$I34);
       $DJT02=(($DJT/12)*100);
       $DJT30 = round($DJT02, 1, PHP_ROUND_HALF_UP);
       if ($DJT30 != 0){$DJT2 = $DJT30;} else {$DJT2 = 0.1;}
                    if ($DJT2 > 50.1) {
                        $DJT5= 'Muy Alto';
                    } elseif ($DJT2 > 33.4) {
                        $DJT5= 'Alto';
                    } elseif ($DJT2 > 25.1) {
                        $DJT5= 'Medio';
                    } elseif ($DJT2 > 8.4) {
                        $DJT5= 'Bajo';
                    } elseif ($DJT2 > 0) {
                        $DJT5= 'Sin Riesgo';
                    }
       //DOMINIO Demandas del trabajo
       $DT =($DAE+$DE+$DC+$IT+$ER+$DCM+$CRL+$DJT);
       $DT02=(($DT/200)*100);
       $DT30 = round($DT02, 1, PHP_ROUND_HALF_UP);
       if ($DT30 != 0){$DT2 = $DT30;} else {$DT2 = 0.1;}
                    if ($DT2 > 47.6) {
                        $DT5= 'Muy Alto';
                    } elseif ($DT2  > 41.6) {
                        $DT5= 'Alto';
                    } elseif ($DT2  > 35.1) {
                        $DT5= 'Medio';
                    } elseif ($DT2  > 28.6) {
                        $DT5= 'Bajo';
                    } elseif ($DT2  > 0) {
                        $DT5= 'Sin Riesgo';
                    }
       //Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza
       $RP =($I95+$I102+$I103+$I104+$I105);  
       $RP02=(($RP/20)*100);
       $RP30 = round($RP02, 1, PHP_ROUND_HALF_UP);
       if ($RP30 != 0){$RP2 = $RP30;} else {$RP2 = 0.1;}
                    if ($RP2 > 20.1) {
                        $RP5= 'Muy Alto';
                    } elseif ($RP2 > 10.1) {
                        $RP5= 'Alto';
                    } elseif ($RP2 > 5.1) {
                        $RP5= 'Medio';
                    } elseif ($RP2 > 1) {
                        $RP5= 'Bajo';
                    } elseif ($RP2 > 0) {
                        $RP5= 'Sin Riesgo';
                    }
       //Reconocimiento y compensación
       $RYC =($I96+$I97+$I98+$I99+$I100+$I101);
       $RYC02=(($RYC/24)*100);
       $RYC30 = round($RYC02, 1, PHP_ROUND_HALF_UP);
       if ($RYC30 != 0){$RYC2 = $RYC30;} else {$RYC2 = 0.1;}
                    if ($RYC2 > 37.6) {
                        $RYC5= 'Muy Alto';
                    } elseif ($RYC2 > 25.1) {
                        $RYC5= 'Alto';
                    } elseif ($RYC2 > 16.8) {
                        $RYC5= 'Medio';
                    } elseif ($RYC2 > 4.3) {
                        $RYC5= 'Bajo';
                    } elseif ($RYC2 > 0) {
                        $RYC5= 'Sin Riesgo';
                    }
       //DOMINIO Recompensas
       $R =($RP+$RYC);
       $R02=(($R/44)*100);
       $R30 = round($R02, 1, PHP_ROUND_HALF_UP);
       if ($R30 != 0){$R2 = $R30;} else {$R2 = 0.1;}
                    if ($R2 > 29.6) {
                        $R5= 'Muy Alto';
                    } elseif ($R2  > 20.6) {
                        $R5= 'Alto';
                    } elseif ($R2  > 11.5) {
                        $R5= 'Medio';
                    } elseif ($R2  > 4.6) {
                        $R5= 'Bajo';
                    } elseif ($R2  > 0) {
                        $R5= 'Sin Riesgo';
                    }
       //GENERAL A
       $G =($LR+$CT+$DT+$R);
       $G02=(($G/492)*100);
       $Gintra2 = round($G02, 1, PHP_ROUND_HALF_UP);
       if ($Gintra2 != 0){$G2 = $Gintra2;} else {$G2 = 0.1;}
                    if ($G2 > 38.1) {
                        $G5= 'Muy Alto';
                    } elseif ($G2 > 31.6) {
                        $G5= 'Alto';
                    } elseif ($G2 > 25.9) {
                        $G5= 'Medio';
                    } elseif ($G2 > 19.8) {
                        $G5= 'Bajo';
                    } elseif ($G2 > 0) {
                        $G5= 'Sin Riesgo';
                    }
       
       $sql = "UPDATE intralaboralA SET id_usuario = '$idintraA', CL = '$CL', CL2 = '$CL2', RS = '$RS', RS2 = '$RS2', RD = '$RD', RD2 = '$RD2', RC = '$RC', RC2 = '$RC2', LR = '$LR', LR2 = '$LR2', CR = '$CR',CR2 = '$CR2', C = '$C', C2 = '$C2', PM = '$PM', PM2  = '$PM2', PD = '$PD', PD2 = '$PD2', CA = '$CA', CA2 = '$CA2', CT = '$CT', CT2 = '$CT2', DAE = '$DAE', DAE2 = '$DAE2', DE = '$DE', DE2 = '$DE2', DC = '$DC', DC2 = '$DC2', IT = '$IT', IT2 = '$IT2', ER = '$ER', ER2 = '$ER2', DCM = '$DCM', 
       DCM2 = '$DCM2', CRL = '$CRL', CRL2 = '$CRL2', DJT = '$DJT', DJT2 = '$DJT2', DT = '$DT', DT2 = '$DT2', RP = '$RP', RP2 = '$RP2', RYC = '$RYC', RYC2 = '$RYC2', R = '$R', R2= '$R2', G = '$G', G2= '$G2', I1 = '$I1', I2 = '$I2', I3 = '$I3', I4 = '$I4', I5 = '$I5', I6 = '$I6', I7 = '$I7', I8 = '$I8', I9 = '$I9', I10 = '$I10', I11 = '$I11', I12 = '$I12', I13 = '$I13', I14 = '$I14', I15 = '$I15', I16 = '$I16', I17 = '$I17', I18 = '$I18', I19 = '$I19', I20 = '$I20', I21 = '$I21', 
       I22 = '$I22', I23 = '$I23', I24 = '$I24', I25 = '$I25', I26 = '$I26', I27 = '$I27', I28 = '$I28', I29 = '$I29', I30 = '$I30', I31 = '$I31', I32 = '$I32', I33 = '$I33', I34 = '$I34', I35 = '$I35', I36 = '$I36', I37 = '$I37', I38 = '$I38', I39 = '$I39', I40 = '$I40', I41 = '$I41', I42 = '$I42', I43 = '$I43', I44 = '$I44', I45 = '$I45', I46 = '$I46', I47 = '$I47', I48 = '$I48', I49 = '$I49', I50 = '$I50', I51 = '$I51', I52 = '$I52', I53 = '$I53', I54 = '$I54', I55 = '$I55', 
       I56= '$I56', I57 = '$I57', I58 = '$I58', I59 = '$I59', I60 = '$I60', I61 = '$I61', I62 = '$I62', I63 = '$I63', I64 = '$I64', I65 = '$I65', I66 = '$I66', I67 = '$I67', I68 = '$I68', I69 = '$I69', I70 = '$I70', I71 = '$I71', I72 = '$I72', I73 = '$I73', I74 = '$I74', I75 = '$I75', I76 = '$I76', I77 = '$I77', I78 = '$I78', I79 = '$I79', I80 = '$I80', I81 = '$I81', I82 = '$I82', I83 = '$I83', I84 = '$I84', I85 = '$I85', I86 = '$I86', I87 = '$I87', I88 = '$I88', I89 = '$I89', 
       I90 = '$I90', I91 = '$I91', I92 = '$I92',  I93 = '$I93', I94 = '$I94', I95 = '$I95', I96 = '$I96', I97 = '$I97', I98= '$I98', I99 = '$I99', I100 = '$I100', I101 = '$I101', I102 = '$I102', I103 = '$I103', I104 = '$I104', I105 = '$I105', I106 = '$I106', I107 = '$I107', I108 = '$I108', I109 = '$I109', I110 = '$I110', I111 = '$I111', I112 = '$I112', I113 = '$I113', I114 = '$I114', I115 = '$I115', I116 = '$I116', I117 = '$I117', I118 = '$I118', I119 = '$I119', I120 = '$I120',  
       I121 = '$I121', I122 = '$I122', I123 = '$I123'  WHERE id_usuario = '$idintraA'";
       $result = $mysqli->query($sql);
       
      //EVALUACIÓN GENERAL (INTRA-A+EXTRA)
       if ($sumaextra > 0) {
       $EGA0 =($G+$sumaextra);
       $EGA1=(($EGA0/616)*100);
       $EGA = round($EGA1, 1, PHP_ROUND_HALF_UP);
       } else {
          $EGA = 0; 
       }
                     if ($EGA > 35.5) {
                        $EG5= 'Muy Alto';
                        $EGC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EGA > 29.6) {
                        $EG5= 'Alto';
                        $EGC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EGA > 24.5) {
                        $EG5= 'Medio';
                        $EGC='style="color:rgb(102, 102, 102)"';
                    } elseif ($EGA > 18.9) {
                        $EG5= 'Bajo';
                        $EGC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EGA > 0) {
                        $EG5= 'Sin Riesgo';
                        $EGC= 'style="color:rgb(57, 77, 0)"';
                    }
         $sql = "UPDATE datosg SET IAB = '$EGA', R_0 = '$EG5', C_0 = '$EGC', CL = '$CL2', R_1 = '$CL5', RS = '$RS2', R_2 = '$RS5', RD = '$RD2', R_3 = '$RD5', RC = '$RC2', R_4 = '$RC5', LR = '$LR2', R_5 = '$LR5', CR = '$CR2', R_6 = '$CR5',
       C = '$C2', R_7 = '$C5', PM  = '$PM2', R_8 = '$PM5', PD = '$PD2', R_9 = '$PD5', CA = '$CA2',  R_10 = '$CA5', CT = '$CT2', R_11 = '$CT5', DAE = '$DAE2', R_12 = '$DAE5', DE = '$DE2', R_13 = '$DE5', 
       DC = '$DC2', R_14 = '$DC5', IT = '$IT2', R_15 = '$IT5', ER = '$ER2', R_16 = '$ER5', DCM = '$DCM2', R_17 = '$DCM5', CRL = '$CRL2', R_18 = '$CRL5', DJT = '$DJT2', R_19 = '$DJT5', DT = '$DT2', R_20 = '$DT5',
       RP = '$RP2',  R_21 = '$RP5', RYC = '$RYC2', R_22 = '$RYC5', R= '$R2', R_23 = '$R5', 
       
       CLb = ' ', R_25 = ' ', RSb = ' ', R_26 = ' ', RDb = ' ', R_27 = ' ',  LRb = ' ', R_28 = ' ', CRb = ' ', R_29 = ' ',
       Cb = ' ', R_30 = ' ', PMb  = ' ', R_31 = ' ', PDb = ' ', R_32 = ' ', CAb = ' ',  R_33 = ' ', CTb = ' ', R_34 = ' ', DAEb = ' ', R_35 = ' ', DEb = ' ', R_36 = ' ',
       DCb = ' ', R_37 = ' ', ITb = ' ', R_38 = ' ', DCMb = ' ', R_39 = ' ',  DJTb = ' ', R_40 = ' ', DTb = ' ', R_41 = ' ', RPb = ' ',  R_42 = ' ', RYCb = ' ', 
       R_43 = ' ', Rb = ' ', R_44 = ' ', IntraB = ' ' , R_45 = ' ', IntraA = '$G2' , R_24 = '$G5' WHERE id = '$idintraA'";
       $resultado = $mysqli->query($sql);
};
?>






