<?php
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
    if(isset($_POST['idextra'])) {
       $idextra=$_POST["idextra"];
       $sumaintra=$_POST["sumaintra"];
       $forma=$_POST["forma2I"];
       $E1=$_POST["extra1"];
       $E2=$_POST["extra2"];
       $E3=$_POST["extra3"];
       $E4=$_POST["extra4"];
       $E5=$_POST["extra5"];
       $E6=$_POST["extra6"];
       $E7=$_POST["extra7"];
       $E8=$_POST["extra8"];
       $E9=$_POST["extra9"];
       $E10=$_POST["extra10"];
       $E11=$_POST["extra11"];
       $E12=$_POST["extra12"];
       $E13=$_POST["extra13"];
       $E14=$_POST["extra14"];
       $E15=$_POST["extra15"];
       $E16=$_POST["extra16"];
       $E17=$_POST["extra17"];
       $E18=$_POST["extra18"];
       $E19=$_POST["extra19"];
       $E20=$_POST["extra20"];
       $E21=$_POST["extra21"];
       $E22=$_POST["extra22"];
       $E23=$_POST["extra23"];
       $E24=$_POST["extra24"];
       $E25=$_POST["extra25"];
       $E26=$_POST["extra26"];
       $E27=$_POST["extra27"];
       $E28=$_POST["extra28"];
       $E29=$_POST["extra29"];
       $E30=$_POST["extra30"];
       $E31=$_POST["extra31"];
       
        //Tiempo fuera del trabajo  
       $TF0 =($E14+$E15+$E16+$E17);
       $TF1=(($TF0/16)*100);
       $TF2 = round($TF1, 1, PHP_ROUND_HALF_UP); 
       if ($TF2 != 0){$TF = $TF2;} else {$TF = 0.1;}
       if ($sumaforma == 'B') { 
                    if ($TF > 50.1) {
                        $TF5= 'Muy Alto';
                    } elseif ($TF > 37.6) {
                        $TF5= 'Alto';
                    } elseif ($TF > 25.1) {
                        $TF5= 'Medio';
                    } elseif ($TF > 6.4 ) {
                        $TF5= 'Bajo';
                    } elseif ($TF > 0) {
                        $TF5= 'Sin Riesgo';
                    }
        } else {
                    if ($TF > 50.1) {
                        $TF5= 'Muy Alto';
                    } elseif ($TF > 37.6) {
                        $TF5= 'Alto';
                    } elseif ($TF > 25.1) {
                        $TF5= 'Medio';
                    } elseif ($TF > 6.4 ) {
                        $TF5= 'Bajo';
                    } elseif ($TF > 0) {
                        $TF5= 'Sin Riesgo';
                    }
        };
       //Relaciones familiares
       $RF0 =($E22+$E25+$E27);
       $RF1=(($RF0/12)*100);
       $RF2 = round($RF1, 1, PHP_ROUND_HALF_UP); 
       if ($RF2 != 0){$RF = $RF2;} else {$RF = 0.1;}
       if ($sumaforma == 'B') {
                    if ($RF > 50.1) {
                        $RF5= 'Muy Alto';
                    } elseif ($RF > 33.4) {
                        $RF5= 'Alto';
                    } elseif ($RF > 25.1) {
                        $RF5= 'Medio';
                    } elseif ($RF > 8.4) {
                        $RF5= 'Bajo';
                    } elseif ($RF > 0) {
                        $RF5= 'Sin Riesgo';
                    }
        } else { 
                   if ($RF > 50.1) {
                        $RF5= 'Muy Alto';
                    } elseif ($RF > 33.4) {
                        $RF5= 'Alto';
                    } elseif ($RF > 25.1) {
                        $RF5= 'Medio';
                    } elseif ($RF > 8.4) {
                        $RF5= 'Bajo';
                    } elseif ($RF > 0) {
                        $RF5= 'Sin Riesgo';
                    }
        };
       //Comunicación y relaciones interpersonales
       $CRI0 = ($E18+$E19+$E20+$E21+$E23);
       $CRI1=(($CRI0/20)*100);
       $CRI2 = round($CRI1, 1, PHP_ROUND_HALF_UP); 
       if ($CRI2 != 0){$CRI = $CRI2;} else {$CRI = 0.1;}
       if ($sumaforma == 'B') {
                    if ($CRI > 35.1) {
                        $CRI5= 'Muy Alto';
                    } elseif ($CRI > 25.1) {
                        $CRI5= 'Alto';
                    } elseif ($CRI > 15.1) {
                        $CRI5= 'Medio';
                    } elseif ($CRI > 5.1) {
                        $CRI5= 'Bajo';
                    } elseif ($CRI > 0) {
                        $CRI5= 'Sin Riesgo';
                    }
        } else {
                    if ($CRI > 30.1) {
                        $CRI5= 'Muy Alto';
                    } elseif ($CRI > 20.1) {
                        $CRI5= 'Alto';
                    } elseif ($CRI > 10.1) {
                        $CRI5= 'Medio';
                    } elseif ($CRI > 1) {
                        $CRI5= 'Bajo';
                    } elseif ($CRI > 0) {
                        $CRI5= 'Sin Riesgo';
                    }
        };
       //Situación económica del grupo familiar
       $SE0 =($E29+$E30+$E31);
       $SE1=(($SE0/12)*100);
       $SE2 = round($SE1, 1, PHP_ROUND_HALF_UP); 
       if ($SE2 != 0){$SE = $SE2;} else {$SE = 0.1;}
       if ($sumaforma == 'B') {  
                    if ($SE > 50.1) {
                        $SE5= 'Muy Alto';
                    } elseif ($SE > 41.8) {
                        $SE5= 'Alto';
                    } elseif ($SE > 25.1) {
                        $SE5= 'Medio';
                    } elseif ($SE > 16.8) {
                        $SE5= 'Bajo';
                    } elseif ($SE > 0) {
                        $SE5= 'Sin Riesgo';
                    }
        } else { 
                    if ($SE > 50.1) {
                        $SE5= 'Muy Alto';
                    } elseif ($SE > 33.4) {
                        $SE5= 'Alto';
                    } elseif ($SE > 25.1) {
                        $SE5= 'Medio';
                    } elseif ($SE > 8.4) {
                        $SE5= 'Bajo';
                    } elseif ($SE > 0) {
                        $SE5= 'Sin Riesgo';
                    }
        };
       //Caracteristicas de la vivienda y del entorno
       $CV0 =($E5+$E6+$E7+$E8+$E9+$E10+$E11+$E12+$E13);
       $CV1=(($CV0/36)*100);
       $CV2 = round($CV1, 1, PHP_ROUND_HALF_UP); 
       if ($CV2 != 0){$CV = $CV2;} else {$CV = 0.1;}
       if ($sumaforma == 'B') {
                    if ($CV > 27.9) {
                        $CV5= 'Muy Alto';
                    } elseif ($CV > 16.8) {
                        $CV5= 'Alto';
                    } elseif ($CV > 11.2) {
                        $CV5= 'Medio';
                    } elseif ($CV > 5.7) {
                        $CV5= 'Bajo';
                    } elseif ($CV > 0) {
                        $CV5= 'Sin Riesgo';
                    }
        } else { 
                    if ($CV > 22.3) {
                        $CV5= 'Muy Alto';
                    } elseif ($CV > 14) {
                        $CV5= 'Alto';
                    } elseif ($CV > 11.2) {
                        $CV5= 'Medio';
                    } elseif ($CV > 5.7) {
                        $CV5= 'Bajo';
                    } elseif ($CV > 0) {
                        $CV5= 'Sin Riesgo';
                    }
        };
       //Influencia del entorno extralaboral sobre el trabajo
       $IE0 =($E24+$E26+$E28);  
       $IE1=(($IE0/12)*100);
       $IE2 = round($IE1, 1, PHP_ROUND_HALF_UP); 
       if ($IE2 != 0){$IE = $IE2;} else {$IE = 0.1;}
       if ($sumaforma == 'B') {  
                   if ($IE > 41.8) {
                        $IE5= 'Muy Alto';
                    } elseif ($IE > 25.1) {
                        $IE5= 'Alto';
                    } elseif ($IE > 16.8) {
                        $IE5= 'Medio';
                    } elseif ($IE > 1) {
                        $IE5= 'Bajo';
                    } elseif ($IE > 0) {
                        $IE5= 'Sin Riesgo';
                    }
        } else { 
                    if ($IE > 41.8) {
                        $IE5= 'Muy Alto';
                    } elseif ($IE > 25.1) {
                        $IE5= 'Alto';
                    } elseif ($IE > 16.8) {
                        $IE5= 'Medio';
                    } elseif ($IE > 8.4) {
                        $IE5= 'Bajo';
                    } elseif ($IE > 0) {
                        $IE5= 'Sin Riesgo';
                    }
        };
       //Desplazamiento vivienda-trabajo-vivienda
       $DV0 =($E1+$E2+$E3+$E4);
       $DV1=(($DV0/16)*100);
       $DV2 = round($DV1, 1, PHP_ROUND_HALF_UP); 
       if ($DV2 != 0){$DV = $DV2;} else {$DV = 0.1;}
       if ($sumaforma == 'B') {
                    if ($DV > 43.9) {
                        $DV5= 'Muy Alto';
                    } elseif ($DV > 25.1) {
                        $DV5= 'Alto';
                    } elseif ($DV > 12.6) {
                        $DV5= 'Medio';
                    } elseif ($DV > 1) {
                        $DV5= 'Bajo';
                    } elseif ($DV > 0) {
                        $DV5= 'Sin Riesgo';
                    }
        } else {  
                    if ($DV > 43.9) {
                        $DV5= 'Muy Alto';
                    } elseif ($DV > 25.1) {
                        $DV5= 'Alto';
                    } elseif ($DV > 12.6) {
                        $DV5= 'Medio';
                    } elseif ($DV > 1) {
                        $DV5= 'Bajo';
                    } elseif ($DV > 0) {
                        $DV5= 'Sin Riesgo';
                    }
        };

       $E0 =($TF0+$RF0+$CRI0+$SE0+$CV0+$IE0+$DV0);
       $Estr=(($E0/124)*100);
       $Estr2= round($Estr, 1, PHP_ROUND_HALF_UP); 
       if ($Estr2 != 0){$E = $Estr2;} else {$E = 0.1;}
       if ($sumaforma == 'B') { 
                    if ($E > 32.4) {
                        $E55= 'Muy Alto';
                    } elseif ($E > 24.3) {
                        $E55= 'Alto';
                    } elseif ($E > 17.8) {
                        $E55= 'Medio';
                    } elseif ($E > 13) {
                        $E55= 'Bajo';
                    } elseif ($E > 0) {
                        $E55= 'Sin Riesgo';
                    }
        } else {  
                    if ($E > 29.1) {
                        $E55= 'Muy Alto';
                    } elseif ($E > 22.7) {
                        $E55= 'Alto';
                    } elseif ($E > 17) {
                        $E55= 'Medio';
                    } elseif ($E > 11.4) {
                        $E55= 'Bajo';
                    } elseif ($E > 0) {
                        $E55= 'Sin Riesgo';
                    }
        };
       
       $sql = "INSERT INTO extralaboral (id_usuario, Forma, TF, RF, CRI, SE, CV, IE, DV, E0, E, I1, I2, I3, I4, I5, I6, I7, I8, I9, I10, I11, I12, I13, I14, I15, I16, I17, I18, I19, I20, I21, I22, I23, I24, I25, I26, I27, I28, I29, I30, I31, Fecha) 
       VALUES ('$idextra', '$forma', '$TF','$RF','$CRI','$SE','$CV','$IE','$DV', $E0, '$E','$E1', '$E2', '$E3', '$E4', '$E5', '$E6', '$E7', '$E8', '$E9', '$E10', '$E11', '$E12', '$E13', '$E14', '$E15', '$E16', '$E17', '$E18', '$E19', '$E20', '$E21', '$E22', '$E23', '$E24', '$E25', '$E26', '$E27', '$E28', '$E29', '$E30', '$E31', NOW())";
       $resultado = $mysqli->query($sql);
       };
   if ($forma == "A") {
           if ($sumaintra > 0) {
               $EG0 =($E0+$sumaintra);
               $EG1=(($EG0/616)*100);
               $EG = round($EG1, 1, PHP_ROUND_HALF_UP);
           } else {
               $EG = 0;
           };
                    if ($EG > 35.5) {
                        $EG5= 'Muy Alto';
                        $EGC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EG > 29.6) {
                        $EG5= 'Alto';
                        $EGC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EG > 24.5) {
                        $EG5= 'Medio';
                        $EGC='style="color:rgb(102, 102, 102)"';
                    } elseif ($EG > 18.9) {
                        $EG5= 'Bajo';
                        $EGC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EG > 0) {
                        $EG5= 'Sin Riesgo';
                        $EGC= 'style="color:rgb(57, 77, 0)"';
                    }
        }; 
        if ($forma == "B") {
           if ($sumaintra > 0) {
               $EG0 =($E0+$sumaintra);
               $EG1=(($EG0/512)*100);
               $EG = round($EG1, 1, PHP_ROUND_HALF_UP);
           } else {
               $EG = 0;
           };
                    if ($EG > 35.5) {
                        $EG5= 'Muy Alto';
                        $EGC= 'style="color:rgb(157, 55, 21)"';
                    } elseif ($EG > 29.6) {
                        $EG5= 'Alto';
                        $EGC= 'style="color:rgb(231, 116, 79)"';
                    } elseif ($EG > 24.9) {
                        $EG5= 'Medio';
                        $EGC='style="color:rgb(102, 102, 102)"';
                    } elseif ($EG > 20) {
                        $EG5= 'Bajo';
                        $EGC= 'style="color:rgb(115, 153, 0)"';
                    } elseif ($EG > 0) {
                        $EG5= 'Sin Riesgo';
                        $EGC= 'style="color:rgb(57, 77, 0)"';
                    }
        }   
       $sql = "UPDATE datosg SET IAB = '$EG', R_0 = '$EG5', C_0 = '$EGC', TF2 = '$TF', R_46 = '$TF5', RF2 = '$RF', R_47 = '$RF5', CRI2 = '$CRI', R_48 = '$CRI5', SE2 = '$SE', R_49 = '$SE5', CV2 = '$CV', R_50 = '$CV5', IE2 = '$IE', R_51 = '$IE5', 
       DV2 = '$DV', R_52 = '$DV5', Extra = '$E', R_53 = '$E55' WHERE id = '$idextra'";
       $resultado = $mysqli->query($sql);

?>
