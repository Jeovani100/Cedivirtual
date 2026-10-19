 <!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultados intralaboral individual</title>
<link rel="icon" type="imagen/png" href="../imagine/boton_logo.png"/>
<link href="<?php echo RUTA_CSS ?>bootstrap.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>font-awesome.css" rel="stylesheet"> 
<link href="<?php echo RUTA_CSS ?>responsive.css" rel="stylesheet">
<link href="<?php echo RUTA_CSS ?>jquery.gritter.css" rel="stylesheet"> 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
    error_reporting(0);
    include_once 'app/config.inc.php';
    include_once 'app/conexion.inc.php';
    include_once 'app/controlsesion.inc.php';
    include_once 'app/redireccion.inc.php';
    include_once 'app/repositorioadmin.inc.php';
    if (!controlsesion::sesion_iniciada()) { redireccion::redirigir(RUTA_LOGIN);}
    conexion :: abrir_conexion();
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM admin WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    // 1. Datos de administración y sesión
    $id_ = $row['id_admin'] ?? null;
    $Activo = $row['Activo'] ?? 0;
    $id_admin = ($Activo == 1) ? $id_ : $id;
    $_SESSION['id_usuario'] = $id_admin;
    $Autor = $row['PersonaC'] ?? '';
    // Consulta preparada para la tabla 'admin'
    $stmt1 = $mysqli->prepare("SELECT Nit, Razon FROM admin WHERE id = ?");
    $stmt1->bind_param("i", $id_admin);
    $stmt1->execute();
    $resultado1 = $stmt1->get_result();
    $row1 = $resultado1->fetch_array(MYSQLI_ASSOC) ?: [];
    $Nit = $row1['Nit'] ?? '';
    $Razon = $row1['Razon'] ?? '';
    $Fecha = date('d-m-Y');
    $stmt1->close();
    // 2. Datos generales a partir del parámetro GET
    $id7 = $_GET["xl4zyw6"] ?? '';
    // Consulta preparada para la tabla 'datosg'
    $stmt4 = $mysqli->prepare("SELECT * FROM datosg WHERE id = ?");
    $stmt4->bind_param("s", $id7);
    $stmt4->execute();
    $resultado4 = $stmt4->get_result();
    $row4 = $resultado4->fetch_array(MYSQLI_ASSOC) ?: [];
    $Cedula = $row4['Cedula'] ?? '';
    $Apellido1 = $row4['Apellido1'] ?? '';
    $Apellido2 = $row4['Apellido2'] ?? '';
    $Nombre = $row4['Nombre'] ?? '';
    $Genero = $row4['Genero'] ?? '';
    $Nacimiento = $row4['Nacimiento'] ?? '';
    $Anon = $row4['Anon'] ?? '';
    $Edad = $row4['Edad'] ?? '';
    $newDate2 = !empty($Nacimiento) ? date("d/m/Y", strtotime($Nacimiento)) : '';
    $Civil = $row4['Civil'] ?? '';
    $Escolaridad = $row4['Escolaridad'] ?? '';
    $Ocupacion = $row4['Ocupacion'] ?? '';
    $Departamentor = $row4['Departamentor'] ?? '';
    $Municipior = $row4['Municipior'] ?? '';
    $Estrato = $row4['Estrato'] ?? '';
    $Vivienda = $row4['Vivienda'] ?? '';
    $Dependencia = $row4['Dependencia'] ?? '';
    $Departamentot = $row4['Departamentot'] ?? '';
    $Municipiot = $row4['Municipiot'] ?? '';
    $Empresa = $row4['Empresa'] ?? '';
    $Añose = $row4['Añose'] ?? '';
    $Cargo = $row4['Cargo'] ?? '';
    $Nivel = $row4['Nivel'] ?? '';
    $Añosc = $row4['Añosc'] ?? '';
    $Seccion = $row4['Area'] ?? '';
    $Tipo = $row4['Tipo'] ?? '';
    $Horas = $row4['Horas'] ?? '';
    $Salario = $row4['Salario'] ?? '';
    $Fecha_prueba = $row4['Fecha_prueba'] ?? '';
    if (!empty($Fecha_prueba)) {
        $fechaEntera = strtotime($Fecha_prueba);
        $año = date("Y", $fechaEntera);
        $mes = date("m", $fechaEntera);
        $dia = date("d", $fechaEntera);
        $hora = date("H", $fechaEntera);
        $minutos = date("i", $fechaEntera);
        $segundos = date("s", $fechaEntera);
    } else {
        $año = $mes = $dia = $hora = $minutos = $segundos = '';
    }
    $Fecha = $row4['Fecha_registro'] ?? '';
    $Out_edad = $Out_edad ?? 0;
    if ($Out_edad == 0) {  
        $etiqueta = 'Edad:';
        $dato = $Edad . ' años';
    } else {
        $etiqueta = 'Edad:';
        $dato = $Edad . ' años';
    }
    // Características psicosociales Forma A
    $CL2 = $row4["CL"] ?? '';
    $RS2 = $row4["RS"] ?? '';
    $RD2 = $row4["RD"] ?? '';
    $RC2 = $row4["RC"] ?? '';
    $LR2 = $row4["LR"] ?? '';
    $CR2 = $row4["CR"] ?? '';
    $C2 = $row4["C"] ?? '';
    $PM2 = $row4["PM"] ?? '';
    $PD2 = $row4["PD"] ?? '';
    $CA2 = $row4["CA"] ?? '';
    $CT2 = $row4["CT"] ?? '';
    $DAE2 = $row4["DAE"] ?? '';
    $DE2 = $row4["DE"] ?? '';
    $DC2 = $row4["DC"] ?? '';
    $IT2 = $row4["IT"] ?? '';
    $ER2 = $row4["ER"] ?? '';
    $DCM2 = $row4["DCM"] ?? '';
    $CRL2 = $row4["CRL"] ?? '';
    $DJT2 = $row4["DJT"] ?? '';
    $DT2 = $row4["DT"] ?? '';
    $RP2 = $row4["RP"] ?? '';
    $RYC2 = $row4["RYC"] ?? '';
    $R2 = $row4["R"] ?? '';
    $G2 = $row4["IntraA"] ?? '';
    // Características psicosociales Forma B
    $CL3 = $row4["CLb"] ?? '';
    $RS3 = $row4["RSb"] ?? '';
    $RD3 = $row4["RDb"] ?? '';
    $LR3 = $row4["LRb"] ?? '';
    $CR3 = $row4["CRb"] ?? '';
    $C3 = $row4["Cb"] ?? '';
    $PM3 = $row4["PMb"] ?? '';
    $PD3 = $row4["PDb"] ?? '';
    $CA3 = $row4["CAb"] ?? '';
    $CT3 = $row4["CTb"] ?? '';
    $DAE3 = $row4["DAEb"] ?? '';
    $DE3 = $row4["DEb"] ?? '';
    $DC3 = $row4["DCb"] ?? '';
    $IT3 = $row4["ITb"] ?? '';
    $DCM3 = $row4["DCMb"] ?? '';
    $DJT3 = $row4["DJTb"] ?? '';
    $DT3 = $row4["DTb"] ?? '';
    $RP3 = $row4["RPb"] ?? '';
    $RYC3 = $row4["RYCb"] ?? '';
    $R3 = $row4["Rb"] ?? '';
    $G3 = $row4["IntraB"] ?? '';
    $EGA = $row4['IAB'] ?? '';
    $EGB = $row4['IAB'] ?? '';
    $stmt4->close();
    // 3. Validación y datos de Intralaboral A mediante consulta preparada
    $stmtA = $mysqli->prepare("SELECT id_usuario, Observaciones, Recomendaciones FROM intralaboralA WHERE id_usuario = ?");
    $stmtA->bind_param("s", $id7);
    $stmtA->execute();
    $resultadoA = $stmtA->get_result();
    $rowA_data = $resultadoA->fetch_array(MYSQLI_ASSOC) ?: [];
    $id_usuarioA = $rowA_data["id_usuario"] ?? "";
    $Observaciones = $rowA_data["Observaciones"] ?? "";
    $Recomendaciones = $rowA_data["Recomendaciones"] ?? "";
    if ($id_usuarioA == "") {
        $validacionA = 0;
    } else {
        $validacionA = 1;
        $formaIN = 'Forma A';
    }
    $stmtA->close();
    // 4. Validación y datos de Intralaboral B mediante consulta preparada
    $stmtB = $mysqli->prepare("SELECT id_usuario FROM intralaboralB WHERE id_usuario = ?");
    $stmtB->bind_param("s", $id7);
    $stmtB->execute();
    $resultado2 = $stmtB->get_result();
    $row2 = $resultado2->fetch_array(MYSQLI_ASSOC) ?: [];
    $id_usuarioB = $row2["id_usuario"] ?? "";
    if ($id_usuarioB == "") {
        $validacionB = 0;
    } else {
        $validacionB = 1;
        $formaIN = 'Forma B';
    }
    $stmtB->close();
        if ($validacionA  != 1) { 
            if ($G3 >= 38.8) {
                        $G5= 'Muy Alto';
                    } elseif ($G3 >= 31.3) {
                        $G5= 'Alto';
                    } elseif ($G3 >= 26.1) {
                        $G5= 'Medio';
                    } elseif ($G3 >= 20.7) {
                        $G5= 'Bajo';
                    } elseif ($G3 >= 0) {
                        $G5= 'Sin Riesgo';
                    }} else {  
            if ($G2 >= 38.1) {
                        $G5= 'Muy Alto';
                    } elseif ($G2 >= 31.6) {
                        $G5= 'Alto';
                    } elseif ($G2 >= 25.9) {
                        $G5= 'Medio';
                    } elseif ($G2 >= 19.8) {
                        $G5= 'Bajo';
                    } elseif ($G2 >= 0) {
                        $G5= 'Sin Riesgo';
                    }
        }; 
        if ($validacionA  != 1) {  
            if ($CL3 >= 38.6) {
                        $CL5= 'Muy Alto';
                    } elseif ($CL3 >= 25.1) {
                        $CL5= 'Alto';
                    } elseif ($CL3 >= 13.6) {
                        $CL5= 'Medio';
                    } elseif ($CL3 >= 3.9 ) {
                        $CL5= 'Bajo';
                    } elseif ($CL3 >= 0) {
                        $CL5= 'Sin Riesgo';
                    }
        } else { $CL4 = $CL2; 
            if ($CL2 >= 46.3) {
                        $CL5= 'Muy Alto';
                    } elseif ($CL2 >= 30.9) {
                        $CL5= 'Alto';
                    } elseif ($CL2 >= 15.5) {
                        $CL5= 'Medio';
                    } elseif ($CL2 >= 3.9 ) {
                        $CL5= 'Bajo';
                    } elseif ($CL2 >= 0) {
                        $CL5= 'Sin Riesgo';
                    }
        }; //Caracteristicas del liderazgo 
        if ($validacionA  != 1) {  
            if ($RS3 >= 37.6) {
                        $RS5= 'Muy Alto';
                    } elseif ($RS3 >= 27.2) {
                        $RS5= 'Alto';
                    } elseif ($RS3 >= 14.7) {
                        $RS5= 'Medio';
                    } elseif ($RS3 >= 6.4) {
                        $RS5= 'Bajo';
                    } elseif ($RS3 >= 0) {
                        $RS5= 'Sin Riesgo';
                    }
        } else { $RS4 = $RS2; 
            if ($RS2 >= 37.6) {
                        $RS5= 'Muy Alto';
                    } elseif ($RS2 >= 25.1) {
                        $RS5= 'Alto';
                    } elseif ($RS2 >= 16.2) {
                        $RS5= 'Medio';
                    } elseif ($RS2 >= 5.5) {
                        $RS5= 'Bajo';
                    } elseif ($RS2 >= 0) {
                        $RS5= 'Sin Riesgo';
                    }
        }; //Relaciones sociales en el trabajo 
        if ($validacionA  != 1) {  
             if ($RD3 >= 50.1) {
                        $RD5= 'Muy Alto';
                    } elseif ($RD3 >= 30.1) {
                        $RD5= 'Alto';
                    } elseif ($RD3 >= 20.1) {
                        $RD5= 'Medio';
                    } elseif ($RD3 >= 5.1) {
                        $RD5= 'Bajo';
                    } elseif ($RD3 >= 0) {
                        $RD5= 'Sin Riesgo';
                    }
        } else { $RD4 = $RD2; 
            if ($RD2 >= 55.1) {
                        $RD5= 'Muy Alto';
                    } elseif ($RD2 >= 40.1) {
                        $RD5= 'Alto';
                    } elseif ($RD2 >= 25.1) {
                        $RD5= 'Medio';
                    } elseif ($RD2 >= 10.1) {
                        $RD5= 'Bajo';
                    } elseif ($RD2 >= 0) {
                        $RD5= 'Sin Riesgo';
                    }
        }; //Retroalimentación del desempeño 
        if ($validacionA  != 1) { $RC4 = $RC3;
                    $RC5= 'No Aplica';
        } else { $RC4 = $RC2; 
             if ($RC2 >= 47.3) {
                        $RC5= 'Muy Alto';
                    } elseif ($RC2 >= 33.4) {
                        $RC5= 'Alto';
                    } elseif ($RC2 >= 25.1) {
                        $RC5= 'Medio';
                    } elseif ($RC2 >= 14) {
                        $RC5= 'Bajo';
                    } elseif ($RC2 >= 0) {
                        $RC5= 'Sin Riesgo';
                    }
        }; //Relación con los colaboradores 
        if ($validacionA  != 1) {  
             if ($LR3 >= 38.4) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR3 >= 26.8) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR3 >= 17.6) {
                        $LR5= 'Medio';
                    } elseif ($LR3 >= 8.4) {
                        $LR5= 'Bajo';
                    } elseif ($LR3 >= 0) {
                        $LR5= 'Sin Riesgo';
                    }
        } else { $LR4 = $LR2; 
            if ($LR2 >= 34.9) {
                        $LR5= 'Muy Alto';
                    } elseif ($LR2 >= 25.7) {
                        $LR5= 'Alto';
                    } elseif ($LR2 >= 17.8) {
                        $LR5= 'Medio';
                    } elseif ($LR2 >= 9.2) {
                        $LR5= 'Bajo';
                    } elseif ($LR2 >= 0) {
                        $LR5= 'Sin Riesgo';
                    }
        }; //DOMINIO Liderazgo y relaciones sociales en el trabajo 
        if ($validacionA  != 1) { 
            if ($CR3 >= 30.1) {
                        $CR5= 'Muy Alto';
                    } elseif ($CR3 >= 15.1) {
                        $CR5= 'Alto';
                    } elseif ($CR3 >= 5.1) {
                        $CR5= 'Medio';
                    } elseif ($CR3 >= 1) {
                        $CR5= 'Bajo';
                    } elseif ($CR3 >= 0) {
                        $CR5= 'Sin Riesgo';
                    }
        } else { $CR4 = $CR2; 
            if ($CR2 >= 39.4) {
                        $CR5= 'Muy Alto';
                    } elseif ($CR2 >= 21.5) {
                        $CR5= 'Alto';
                    } elseif ($CR2 >= 10.8) {
                        $CR5= 'Medio';
                    } elseif ($CR2 >= 1) {
                        $CR5= 'Bajo';
                    } elseif ($CR2 >= 0) {
                        $CR5= 'Sin Riesgo';
                    }
        }; //Claridad de rol 
        if ($validacionA  != 1) { 
             if ($C3 >= 50.1) {
                        $C5= 'Muy Alto';
                    } elseif ($C3 >= 25.1) {
                        $C5= 'Alto';
                    } elseif ($C3 >= 16.8) {
                        $C5= 'Medio';
                    } elseif ($C3 >= 1) {
                        $C5= 'Bajo';
                    } elseif ($C3 >= 0) {
                        $C5= 'Sin Riesgo';
                    }
        } else { $C4 = $C2; 
            if ($C2 >= 50.1) {
                        $C5= 'Muy Alto';
                    } elseif ($C2 >= 33.4) {
                        $C5= 'Alto';
                    } elseif ($C2 >= 16.8) {
                        $C5= 'Medio';
                    } elseif ($C2 >= 1) {
                        $C5= 'Bajo';
                    } elseif ($C2 >= 0) {
                        $C5= 'Sin Riesgo';
                    }
        }; //Capacitación 
        if ($validacionA  != 1) { 
             if ($PM3 >= 58.4) {
                        $PM5= 'Muy Alto';
                    } elseif ($PM3 >= 41.8) {
                        $PM5= 'Alto';
                    } elseif ($PM3 >= 33.4) {
                        $PM5= 'Medio';
                    } elseif ($PM3 >= 16.8) {
                        $PM5= 'Bajo';
                    } elseif ($PM3 >= 0) {
                        $PM5= 'Sin Riesgo';
                    }
        } else { $PM4 = $PM2; 
             if ($PM2 >= 50.1) {
                        $PM5= 'Muy Alto';
                    } elseif ($PM2 >= 37.6) {
                        $PM5= 'Alto';
                    } elseif ($PM2 >= 25.1) {
                        $PM5= 'Medio';
                    } elseif ($PM2 >= 12.6) {
                        $PM5= 'Bajo';
                    } elseif ($PM2 >= 0) {
                        $PM5= 'Sin Riesgo';
                    }
        }; //Participación y manejo del cambio
        if ($validacionA  != 1) {
            if ($PD3 >= 56.4) {
                        $PD5= 'Muy Alto';
                    } elseif ($PD3 >= 37.6) {
                        $PD5= 'Alto';
                    } elseif ($PD3 >= 25.1) {
                        $PD5= 'Medio';
                    } elseif ($PD3 >= 12.6) {
                        $PD5= 'Bajo';
                    } elseif ($PD3 >= 0) {
                        $PD5= 'Sin Riesgo';
                    }
        } else { $PD4 = $PD2; 
             if ($PD2 >= 31.4) {
                        $PD5= 'Muy Alto';
                    } elseif ($PD2 >= 18.9) {
                        $PD5= 'Alto';
                    } elseif ($PD2 >= 6.4) {
                        $PD5= 'Medio';
                    } elseif ($PD2 >= 1) {
                        $PD5= 'Bajo';
                    } elseif ($PD2 >= 0) {
                        $PD5= 'Sin Riesgo';
                    }
        }; //Oportunidades para el uso y desarrollo de habiIidades y conocimientos
        if ($validacionA  != 1) { 
             if ($CA3 >= 75.1) {
                        $CA5= 'Muy Alto';
                    } elseif ($CA3 >= 66.8) {
                        $CA5= 'Alto';
                    } elseif ($CA3 >= 50.1) {
                        $CA5= 'Medio';
                    } elseif ($CA3 >= 33.4) {
                        $CA5= 'Bajo';
                    } elseif ($CA3 >= 0) {
                        $CA5= 'Sin Riesgo';
                    }
        } else { $CA4 = $CA2; 
            if ($CA2 >= 58.4) {
                        $CA5= 'Muy Alto';
                    } elseif ($CA2 >= 41.8) {
                        $CA5= 'Alto';
                    } elseif ($CA2 >= 25.1) {
                        $CA5= 'Medio';
                    } elseif ($CA2 >= 8.4) {
                        $CA5= 'Bajo';
                    } elseif ($CA2 >= 0) {
                        $CA5= 'Sin Riesgo';
                    }
        }; //Control y autonomía sobre eI trabajo
        if ($validacionA  != 1) {  
            if ($CT3 >= 43.2) {
                        $CT5= 'Muy Alto';
                    } elseif ($CT3  >= 34.8) {
                        $CT5= 'Alto';
                    } elseif ($CT3  >= 26.5) {
                        $CT5= 'Medio';
                    } elseif ($CT3  >= 19.5) {
                        $CT5= 'Bajo';
                    } elseif ($CT3  >= 0) {
                        $CT5= 'Sin Riesgo';
                    }
        } else { $CT4 = $CT2; 
            if ($CT2 >= 40.6) {
                        $CT5= 'Muy Alto';
                    } elseif ($CT2  >= 29.9) {
                        $CT5= 'Alto';
                    } elseif ($CT2  >= 19.1) {
                        $CT5= 'Medio';
                    } elseif ($CT2  >= 10.8) {
                        $CT5= 'Bajo';
                    } elseif ($CT2  >= 0) {
                        $CT5= 'Sin Riesgo';
                    }
        }; //DOMINIO Control sobre el trabajo 
        if ($validacionA  != 1) {  
             if ($DAE3 >= 48) {
                        $DAE5= 'Muy Alto';
                    } elseif ($DAE3 >= 39.7) {
                        $DAE5= 'Alto';
                    } elseif ($DAE3 >= 31.4) {
                        $DAE5= 'Medio';
                    } elseif ($DAE3 >= 23) {
                        $DAE5= 'Bajo';
                    } elseif ($DAE3 >= 0) {
                        $DAE5= 'Sin Riesgo';
                    }
        } else { $DAE4 = $DAE2; 
             if ($DAE2 >= 39.7) {
                        $DAE5= 'Muy Alto';
                    } elseif ($DAE2 >= 31.4) {
                        $DAE5= 'Alto';
                    } elseif ($DAE2 >= 23) {
                        $DAE5= 'Medio';
                    } elseif ($DAE2 >= 14.7) {
                        $DAE5= 'Bajo';
                    } elseif ($DAE2 >= 0) {
                        $DAE5= 'Sin Riesgo';
                    }
        }; //Demandas ambientales y de esfuerzo físico
        if ($validacionA  != 1) { 
            if ($DE3 >= 47.3) {
                        $DE5= 'Muy Alto';
                    } elseif ($DE3 >= 39) {
                        $DE5= 'Alto';
                    } elseif ($DE3 >= 27.9) {
                        $DE5= 'Medio';
                    } elseif ($DE3 >= 19.5) {
                        $DE5= 'Bajo';
                    } elseif ($DE3 >= 0) {
                        $DE5= 'Sin Riesgo';
                    }
        } else { $DE4 = $DE2; 
            if ($DE2 >= 47.3) {
                        $DE5= 'Muy Alto';
                    } elseif ($DE2> 33.4) {
                        $DE5= 'Alto';
                    } elseif ($DE2 >= 25.1) {
                        $DE5= 'Medio';
                    } elseif ($DE2 >= 14) {
                        $DE5= 'Bajo';
                    } elseif ($DE2 >= 0) {
                        $DE5= 'Sin Riesgo';
                    }
        }; //Demandas emocionales
        if ($validacionA  != 1) { 
             if ($DC3 >= 50.1) {
                        $DC5= 'Muy Alto';
                    } elseif ($DC3 >= 41.8) {
                        $DC5= 'Alto';
                    } elseif ($DC3 >= 33.4) {
                        $DC5= 'Medio';
                    } elseif ($DC3 >= 16.8) {
                        $DC5= 'Bajo';
                    } elseif ($DC3 >= 0) {
                        $DC5= 'Sin Riesgo';
                    }
        } else { $DC4 = $DC2; 
             if ($DC2 >= 54.3) {
                        $DC5= 'Muy Alto';
                    } elseif ($DC2> 45.9) {
                        $DC5= 'Alto';
                    } elseif ($DC2 >= 33.4) {
                        $DC5= 'Medio';
                    } elseif ($DC2 >= 25.1) {
                        $DC5= 'Bajo';
                    } elseif ($DC2 >= 0) {
                        $DC5= 'Sin Riesgo';
                    }
        }; //Demandas cuantitativas
        if ($validacionA  != 1) { 
             if ($IT3 >= 50.1) {
                        $IT5= 'Muy Alto';
                    } elseif ($IT3 >= 31.4) {
                        $IT5= 'Alto';
                    } elseif ($IT3 >= 25.1) {
                        $IT5= 'Medio';
                    } elseif ($IT3 >= 12.6) {
                        $IT5= 'Bajo';
                    } elseif ($IT3 >= 0) {
                        $IT5= 'Sin Riesgo';
                    }
        } else { $IT4 = $IT2; 
            if ($IT2 >= 50.1) {
                        $IT5= 'Muy Alto';
                    } elseif ($IT2 >= 43.9) {
                        $IT5= 'Alto';
                    } elseif ($IT2 >= 31.4) {
                        $IT5= 'Medio';
                    } elseif ($IT2 >= 18.9) {
                        $IT5= 'Bajo';
                    } elseif ($IT2 >= 0) {
                        $IT5= 'Sin Riesgo';
                    }
        }; //Influencia del trabajo sobre eI entorno extralaboral
        if ($validacionA  != 1) { 
                         $ER5= 'No evalúa';
        } else { $ER4 = $ER2; 
            if ($ER2 >= 79.3) {
                        $ER5= 'Muy Alto';
                    } elseif ($ER2 >= 66.8) {
                        $ER5= 'Alto';
                    } elseif ($ER2 >= 54.3) {
                        $ER5= 'Medio';
                    } elseif ($ER2 >= 37.6) {
                        $ER5= 'Bajo';
                    } elseif ($ER2 >= 0) {
                        $ER5= 'Sin Riesgo';
                    }
        }; //Exigencias de responsabilidad deI cargo
        if ($validacionA  != 1) {  
             if ($DCM3 >= 85.1) {
                        $DCM5= 'Muy Alto';
                    } elseif ($DCM3 >= 75.1) {
                        $DCM5= 'Alto';
                    } elseif ($DCM3 >= 65.1) {
                        $DCM5= 'Medio';
                    } elseif ($DCM3 >= 50.1) {
                        $DCM5= 'Bajo';
                    } elseif ($DCM3 >= 0) {
                        $DCM5= 'Sin Riesgo';
                    }
        } else { $DCM4 = $DCM2; 
             if ($DCM2 >= 90.1) {
                        $DCM5= 'Muy Alto';
                    } elseif ($DCM2 >= 80.1) {
                        $DCM5= 'Alto';
                    } elseif ($DCM2 >= 70.1) {
                        $DCM5= 'Medio';
                    } elseif ($DCM2 >= 60.1) {
                        $DCM5= 'Bajo';
                    } elseif ($DCM2 >= 0) {
                        $DCM5= 'Sin Riesgo';
                    }
        }; //Demandas de carga mental
        if ($validacionA  != 1) { 
                        $CRL5= 'No Evalúa';
        } else { $CRL4 = $CRL2; 
            if ($CRL2 >= 45.1) {
                        $CRL5= 'Muy Alto';
                    } elseif ($CRL2 >= 35.1) {
                        $CRL5= 'Alto';
                    } elseif ($CRL2 >= 25.1) {
                        $CRL5= 'Medio';
                    } elseif ($CRL2 >= 15.1) {
                        $CRL5= 'Bajo';
                    } elseif ($CRL2 >= 0) {
                        $CRL5= 'Sin Riesgo';
                    }
        }; //Consistencia del rol
        if ($validacionA  != 1) { 
            if ($DJT3 >= 58.4) {
                        $DJT5= 'Muy Alto';
                    } elseif ($DJT3 >= 45.9) {
                        $DJT5= 'Alto';
                    } elseif ($DJT3 >= 37.6) {
                        $DJT5= 'Medio';
                    } elseif ($DJT3 >= 25.1) {
                        $DJT5= 'Bajo';
                    } elseif ($DJT3 >= 0) {
                        $DJT5= 'Sin Riesgo';
                    }
        } else { $DJT4 = $DJT2; 
            if ($DJT2 >= 50.1) {
                        $DJT5= 'Muy Alto';
                    } elseif ($DJT2 >= 33.4) {
                        $DJT5= 'Alto';
                    } elseif ($DJT2 >= 25.1) {
                        $DJT5= 'Medio';
                    } elseif ($DJT2 >= 8.4) {
                        $DJT5= 'Bajo';
                    } elseif ($DJT2 >= 0) {
                        $DJT5= 'Sin Riesgo';
                    }
        }; //Demandas de la jornada de trabajo
        if ($validacionA  != 1) { 
            if ($DT3 >= 44.3) {
                        $DT5= 'Muy Alto';
                    } elseif ($DT3  >= 37.9) {
                        $DT5= 'Alto';
                    } elseif ($DT3  >= 33.4) {
                        $DT5= 'Medio';
                    } elseif ($DT3  >= 27) {
                        $DT5= 'Bajo';
                    } elseif ($DT3  >= 0) {
                        $DT5= 'Sin Riesgo';
                    }
        } else { $DT4 = $DT2; 
             if ($DT2 >= 47.6) {
                        $DT5= 'Muy Alto';
                    } elseif ($DT2  >= 41.6) {
                        $DT5= 'Alto';
                    } elseif ($DT2  >= 35.1) {
                        $DT5= 'Medio';
                    } elseif ($DT2  >= 28.6) {
                        $DT5= 'Bajo';
                    } elseif ($DT2  >= 0) {
                        $DT5= 'Sin Riesgo';
                    }
        }; //DOMINIO Demandas del trabajo 
        if ($validacionA  != 1) { 
             if ($RP3 >= 18.9) {
                        $RP5= 'Muy Alto';
                    } elseif ($RP3 >= 12.6) {
                        $RP5= 'Alto';
                    } elseif ($RP3 >= 6.4) {
                        $RP5= 'Medio';
                    } elseif ($RP3 >= 1) {
                        $RP5= 'Bajo';
                    } elseif ($RP3 >= 0) {
                        $RP5= 'Sin Riesgo';
                    }
        } else { $RP4 = $RP2; 
             if ($RP2 >= 20.1) {
                        $RP5= 'Muy Alto';
                    } elseif ($RP2 >= 10.1) {
                        $RP5= 'Alto';
                    } elseif ($RP2 >= 5.1) {
                        $RP5= 'Medio';
                    } elseif ($RP2 >= 1) {
                        $RP5= 'Bajo';
                    } elseif ($RP2 >= 0) {
                        $RP5= 'Sin Riesgo';
                    }
        }; //Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza
        if ($validacionA  != 1) {  
             if ($RYC3 >= 37.6) {
                        $RYC5= 'Muy Alto';
                    } elseif ($RYC3 >= 25.1) {
                        $RYC5= 'Alto';
                    } elseif ($RYC3 >= 12.6) {
                        $RYC5= 'Medio';
                    } elseif ($RYC3 >= 1) {
                        $RYC5= 'Bajo';
                    } elseif ($RYC3 >= 0) {
                        $RYC5= 'Sin Riesgo';
                    }
        } else { $RYC4 = $RYC2; 
             if ($RYC2 >= 37.6) {
                        $RYC5= 'Muy Alto';
                    } elseif ($RYC2 >= 25.1) {
                        $RYC5= 'Alto';
                    } elseif ($RYC2 >= 16.8) {
                        $RYC5= 'Medio';
                    } elseif ($RYC2 >= 4.3) {
                        $RYC5= 'Bajo';
                    } elseif ($RYC2 >= 0) {
                        $RYC5= 'Sin Riesgo';
                    }
        }; //Reconocimiento y compensación
        if ($validacionA  != 1) { 
            if ($R3 >= 27.6) {
                        $R5= 'Muy Alto';
                    } elseif ($R3  >= 17.6) {
                        $R5= 'Alto';
                    } elseif ($R3  >= 10.7) {
                        $R5= 'Medio';
                    } elseif ($R3  >= 2.6) {
                        $R5= 'Bajo';
                    } elseif ($R3  >= 0) {
                        $R5= 'Sin Riesgo';
                    }
        } else { $R4 = $R2; 
            if ($R2 >= 29.6) {
                        $R5= 'Muy Alto';
                    } elseif ($R2  >= 20.6) {
                        $R5= 'Alto';
                    } elseif ($R2  >= 11.5) {
                        $R5= 'Medio';
                    } elseif ($R2  >= 4.6) {
                        $R5= 'Bajo';
                    } elseif ($R2  >= 0) {
                        $R5= 'Sin Riesgo';
                    }
        }; //Recompensas 
    ?>
<style>
  @font-face {
        font-family: Roman;
        src: url(../fonts/times.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Romanbd;
        src: url(../fonts/timesbd.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Narrow;
        src: url(../fonts/Narrow.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdana;
        src: url(../fonts/verdana.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanab;
        src: url(../fonts/verdanab.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanabi;
        src: url(../fonts/verdanabi.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanai;
        src: url(../fonts/verdanai.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family:Verdanal;
        src: url(../fonts/verdanal.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moriston;
        src: url(../fonts/Moriston.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonl;
        src: url(../fonts/Moristonl.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Moristonb;
        src: url(../fonts/Moristonbd.otf);
        font-weight: normal;
        font-style: normal;
    } 
    @font-face {
        font-family: elmessiri;
        src: url(../fonts/elmessiri.otf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Raleway;
        src: url(../fonts/Raleway.ttf);
        font-weight: normal;
        font-style: normal;
    }
    @font-face {
        font-family: Ralewaym;
        src: url(../fonts/Ralewaym.ttf);
        font-weight: normal;
        font-style: normal;
    }
    body {
        color: #797979;
        font-family: Verdana;
        line-height: 3rem;
        padding: 0px !important;
        margin: 0px !important;
        text-rendering: optimizeLegibility;
        overflow-x: hidden;
        background: url("../imagine/tapiz10.jpg");
        background-size: 450px 450px;
        font-family: arial, sans-serif;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('../imagine/') 50% 50% no-repeat #ffffff;
    }
    ul li {
        list-style: none;
    }
    a, a:hover, a:focus, button, input, textarea {
        text-decoration: none;
        outline: none;
        resize: none;
        outline:none !important;
        outline-width: 0 !important;
        box-shadow: none;
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
    }
    .btn-theme:hover,
    .btn-theme:focus,
    .btn-theme:active,
    .btn-theme.active,
    .open .dropdown-toggle.btn-theme {
      color: #fff;
      background-color: #48bcb4;
      border-color: #48bcb4;
    }
    hr {
      margin-top: 20px;
      margin-bottom: 20px;
      border: 0;
      border-top: 1px solid #797979;
    }
    .centered {
    	text-align: center;
    }
    .goleft {
    	text-align: left;
    }
    .goright {
    	text-align: right;
    }
    .no-padding {
    	padding: 0 !important;
    }
    .no-margin {
    	margin: 0 !important;
    }
    .label-theme {
    	background-color: #c8c5e2;
    }
    .bg-theme {
    	background-color: #c8c5e2;
    }
    .top-menu {
        margin-top:1.5em;
    }
     ul.top-menu > li > .logout {
    	color:#2f323a;
    	font-family:verdana;
    	font-size: 22px;
    	border-radius:0!important;
    	-webkit-border-radius: 4px;
    	border: 1px solid #c8c5e2 !important;
    	padding: 6px;
    	padding-top: 2px!important;
    	padding-bottom: 2px!important;
    	background: #c8c5e2;
    	transition: all 0.5s ease;
    	margin-right:-4px;
    }
    #sidebar {
        width: 210px;
        position: fixed;
        z-index:1;
    }
    #sidebar h5 {
    	color: #f2f2f2;
    	font-weight: 700;
    	   
    }
    #sidebar ul li span {
        position: relative;
        font-size:14px;
    	font-family:verdana;
    	
    }
    #sidebar .sub-menu > .sub li  {
        padding-left: 32px;
        font-size:14px;
    }
    #sidebar .sub-menu > .sub li:last-child {
        padding-bottom: 10px;
        font-size:14px;
    }

    ul.sidebar-menu , ul.sidebar-menu li ul.sub{
        margin: -2px 0 0;
        padding: 0;
    }
    ul.sidebar-menu {
        margin-top: 75px;
    }
    #sidebar > ul > li > ul.sub {
        display: none;
    }
    #sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
        display: block;
        font-size:14px;
    }
    ul.sidebar-menu li ul.sub li{
        background: #2f323a;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 0;
    }
    ul.sidebar-menu li ul.sub li:last-child{
        border-radius: 0 0 4px 4px;
        -webkit-border-radius: 0 0 4px 4px;
    }
    ul.sidebar-menu li ul.sub li a {
        font-size: 12px;
        padding: 6px 0;
        line-height: 35px;
        height: 35px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        color: #aeb2b7;
    }
    ul.sidebar-menu li ul.sub li a:hover {
    	color: white;
    	background: transparent;
    }
    ul.sidebar-menu li ul.sub li.active a {
        color: #c8c5e2;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
        display: block;
    }
    ul.sidebar-menu li{
        /*line-height: 20px !important;*/
        margin-bottom: 5px;
        margin-left:10px;
        margin-right:10px;
    }
    ul.sidebar-menu li.sub-menu{
        line-height: 15px;
    }
    ul.sidebar-menu li a span{
        display: inline-block;
        font-family:verdana;
    }
    ul.sidebar-menu li a{
        color:#ffffff;
        text-decoration: none;
        display: block;
        padding: 15px 0 15px 10px;
        font-size: 12px;
        outline: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
        background: #c8c5e2;
        color: #000000;
        display: block;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    ul.sidebar-menu li a i {
        font-size: 15px;
        padding-right: 6px;
        color:#fff;
    }
    ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {
        color:#000000;;
    }
    ul.sidebar-menu li a.active i {
        color:#000000;;
    }
    .mail-info, .mail-info:hover {
        margin: -3px 6px 0 0;
        font-size: 11px;
    }
    #main-content {
        margin-left: 210px;
    }
    .header,
    .footer {
        min-height: 60px;
        padding: 0 15px;
    }
    .header {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 1002;
        height:3em;
    }
    .black-bg {
        background: #22242a;
        z-index: 3 !important;
    }
    .wrapper {
        display: inline-block;
        margin-top: 60px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        padding-top: 0px;
        width: 100%;
    }
    a.logo {
        font-family: narrow;
        font-size: 20px;
        letter-spacing: 1px;
        color: #f2f2f2;
        float: left;
        margin-top: 15px;
    }
    a.logo b {
        font-weight: 900;
    }
    a.logo:hover,
    a.logo:focus {
        text-decoration: none;
        outline: none;
    }
    a.logo span {
        color: #a9d312;
    }
    .notify-row {
        float: left;
        margin-left: 92px;
        color: #ffffff;
        font-family: verdana;
        font-size: 20px;
        display: block !important;
        margin-top: 0.7em;
    }
    ul.top-menu > li > a {
        color: #666666;
        font-size: 16px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        border: 1px solid #666666 !important;
        padding: 2px 6px;
        margin-right: 15px;
    }
    ul.top-menu > li > a:hover,
    ul.top-menu > li > a:focus {
        border: 1px solid #b6b6b6 !important;
        background-color: transparent !important;
        border-color: #b6b6b6 !important;
        text-decoration: none;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        color: #b6b6b6 !important;
    }
    .sidebar-toggle-box {
        float: left;
        padding-right: 15px;
        margin-top: 18px;
    }
    .contact-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin: 15px 0;
    }
    .contact-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin: 15px 0;
    }
    #copyrights {
      background: #222222;
      padding: 20px 0;
      text-align: center;
    }
    #copyrights p {
      margin-bottom: 5px;
      color: #fff;
    }
    #copyrights a {
      color: #fff;
    }
    #piezas {
        font-family:verdana;
        font-size:14px;
        padding:0.4em;
        background: #22242a;
    }
    .toggle-custom {
        position: absolute !important;
        top: 0;
        right: 0;
        background:#ffffff!important;
    }
    .toggle-custom[aria-expanded='true'] .glyphicon-plus:before {
        content: "\2212";                
    }
    #td {
        font-size:13px;
        padding:4px;
    }
    table{
    table-layout: fixed;
    }
    .titulo {
        background:#ffffff!important;
        font-family:verdanab;
        color:#333333!important;
        font-size:13px;
        line-height: 2.8rem;
    }
    .N {
        color:#278b85;
        font-size:14px;
    }
    .enlace:link, .enlace:visited {
        font-size:13px;
        color:#333333!important;
        font-family:verdanab;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .enlace:hover, .enlaces:active {
        color:#000000;
        transition: font-family 1s, opacity 0.6s linear;
    }
    .glyphicon-plus {
        color:#333333;
        font-size:16px;
    }
    .fa-paperclip {
        font-size:24px!important;
    }
    .fa-cloud-upload {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:24px!important;
        padding-top:1em;
        text-decoration:none!important;
    } 
    .task-download,
    .task-delete,
    .task-delete4 {
        background:transparent!important;
        color: #333333;
        border:0;
        margin:0!important;
        padding:0!important;
        font-size:20px!important;
        padding-top:1em;
        text-decoration:none!important;
    }
    input[type="file"].inputfile {
        width: 0.1px;
        height: 0.1px;
        color:#000000!important;
        overflow: hidden;
        z-index: -1; 
    }
    .inputfile-8 + label {
        color: #333333;
        font-family:verdana;
        letter-spacing:0.5px;
        border:0;
        font-family:verdanab!important;
    }
    .inputfile-8 + label span {
        padding: 4px;
        margin:0!important;
        font-size:13px;
    }
    @media screen and (max-width: 50em) {
        .inputfile-8 + label strong {
            display: block;
        }
    }
    input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
    }
    .controles {
        min-height: 30px;
        max-width: 50px;
        margin-top:10px;
     
    }
    .controles-inner, .controles-inner:after, .controles-inner:before {
        background-color: #333333;
        position: absolute;
        width: 20px;
        height: 2px;
        border-radius: 5px;
        content: '';
        transition-timing-function: ease;
        transition-duration: .2s;
        transition-property: opacity,-webkit-transform;
        transition-property: transform,opacity;
        transition-property: transform,opacity,-webkit-transform;
    }
    .controles-inner:before {
        top: 6px;
    }
    .controles-inner:after {
        top: 12px;
    }
    .controles.open .controles-inner {
        -webkit-transform: translate3d(0,6px,0) rotate(45deg);
        transform: translate3d(0,6px,0) rotate(45deg);
    }
    .controles.open .controles-inner:after {
        -webkit-transform: translate3d(0,-12px,0) rotate(-90deg);
        transform: translate3d(0,-12px,0) rotate(-90deg);
    }
    .controles.open .controles-inner:before {
        -webkit-transform: translate3d(0,-12px,0) rotate(90deg);
        transform: translate3d(0,-12px,0) rotate(90deg);
        opacity: 0;
    }
    .fullscreen-modal .modal-dialog {
      margin: 0;
      margin-right: auto;
      margin-left: auto;
      width: 80%;
      height: 80%;
      text-align:center;
    }

    .container-fluid {
        position:fixed!important;
        right:0;
        bottom:0!important;
        z-index:3!important;
    }

    .etiqueta {
        font-size:13px;
        font-family:verdanab;
        display:none;
    }
    .etiqueta2 {
        font-size:13px!important;
        font-family:verdanab;
    }
    #nav-accordion{
        margin-top:4.5em!important;
        margin:0;
        padding:0.2em;
        opacity:0.9;
        background: -webkit-linear-gradient(to right, #4f5463,#f58634);  
        background: linear-gradient(to right, #4f5463, #17181c);
    }
    .nav {
        text-align:left;
    }
    .fa-angle-up {
        font-size:50px;
        color:#000000;
        opacity:0.5;
        text-align:center;
    }
    nav {
        position:fixed;
        left: 0;
        right: 0; 
        bottom:0;
        text-align:center;
    }
    .lista th {
         background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        font-size:14px;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #f58634!important;
    }
    .lista td {
        background:#eaeaea;
        color:#333333;
        margin-top:2em;
        border:1px solid #333333!important;
        height:5em;
    }
    .delete {
        width:7em;
        height: 36px;
        font-family:verdanab;
        background:#ffffff;
        color: #666666;
        border: 1px solid #f58634;
        font-size:14px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .delete:hover {
        color:#f58634;
        background: #ffffff; 
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     }
    .nuevo1,
    .nuevo {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #f58634;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .nuevo1 {
        background:#ffffff!important;
    }
    .nuevo2 {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#ffffff;
        color: #999999;
        border: 1px solid #999999;
        font-size:14px;
        border-radius:0!important;
    }
    .nuevo3 {
        width:12em;
        height: 36px;
        padding:0!important;
        margin:0!important;
        font-family:Moristonb;
        background:#eaeaea;
        color: #666666;
        border: 1px solid #00cc00;
        font-size:14px;
        border-radius:0!important;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    .nuevo3:hover, .submit:hover,
    .nuevo1:hover, .submit:hover,
    .nuevo:hover, .submit:hover {
        border: 1px solid #f58634;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #tdbd {
        padding:1em;
        color:#000000;
        padding-right:0;
        text-align:left!important;
        font-family:Moristonb;
        color:#666666;
    }
    #btn2{
        width:36px;
        height: 36px;
        color: #666666;
        border: 1px solid #333333;
        background:#eaeaea;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
     } 
    #btn2:hover, .submit:hover {
        border: 1px solid #f58634;
        font-size:18px;
        color: #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    #search{
        height: 36px;
        width:16.5em;
        padding-top:1px;
        border: 1px solid #333333!important;
        background:#eaeaea;
        border-bottom-color: #ccc; 
        transition: 0.4s;
        margin:0!important;
        border-radius:0;
        padding:4px;
        padding-left:40px;
        font-family:verdana!important;
    }
    #search:focus{
        padding-top:1px;
        transition: 0.4s;
        padding:4px;
        padding-left:40px;
        border: 2px solid #f58634;
        background:#f1f2f4;
    }
    #search ~ .focus-border{
        position: absolute; 
        height: 36px; 
        right: 0; 
        width: 0;
        transition: 0.5s;
        margin-right:2px;
    }
    #search:focus ~ .focus-border{
        float:left!important;
        margin-right:-0.4px;
        width: 14em; 
        transition: 0.4s; 
        border: 2px solid #f58634;
    }
    .col-22{
        width:229px; 
        position: relative;
    } 
     #label {
        position: absolute;
        width: 35px;
        height: 48px;
        line-height: 35px;
        text-align: center;  
        font-size:18px;
    }
    #titulo_empresa {
        font-size:24px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #captura {
        font-size:28px;
        font-family:verdanab;
        color:#666666;
        text-align:center;
    }
    #nregistro {
        float:left;
        margin-top:1em;
    }
    .table {
        table-layout: fixed;
        border:hidden!importnat;
        color:#000000;
    }
    .table th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: linear-gradient(to top, #4f5463, #17181c);
        color:#ffffff;
        font-family:Verdanab;
        width:100%;
        text-align:center;
        padding:0.6em!important;
        border:1px solid #f58634!important;
    }
    .table td {
        text-align:left;
        padding:1em;
        border:1px solid #333333!important;
        vertical-align:middle!important;
    }
    .tablaintra {
        background:#eaeaea;
        text-align:center;
        width:100%;
        font-family:verdanab;
        line-height:2.5rem;
        color:#333333;
        font-size:13px;
        border:1px solid #f58634!important
    }
    .tablaintra th {
        background: -webkit-linear-gradient(to top, #4f5463,#f58634);  
        background: #c6c9d2;
        color:#333333;
        font-family:Verdanab;
        text-align:center;
        border:1px solid #f58634!important;
    }
    .tablaintra td {
        padding:10px;
    }
    #borderout {
        background:transparent!important;
        border:0!important;
        width:30%!important;
    }
    .task-item {
        font-size:14px;
        font-family:verdanab;
        color:#333333;
        background:transparent;
        padding:6px;
        margin:0;
        border:0;
        transition: font-size 0.6s linear
    }
    .task-item:hover, .submit:hover{
        font-size:15px;
        transition: font-size 0.6s linear;
    }
    .task-estres,
    .task-extra,
    .task-intraA,
    .task-delete, .submit,
    .task-editar, .submit {
        width:36px;
        height: 36px;
        font-family:Moristonb;
        color: #666666;
        background:#eaeaea;
        border: 1px solid #333333;
        font-size:18px;
        border-radius:0;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-estres:hover, .submit:hover,
    .task-extra:hover, .submit:hover,
    .task-intraA:hover, .submit:hover {
        color: #006080;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-editar:hover, .submit:hover {
        color:#e69900;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    } 
    .task-delete:hover, .submit:hover{
        color: #cc0000;
        border: 1px solid #333333;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
    #registro label {
        position: absolute;
        display: block;
        width: 35px;
        height: 48px;
        line-height: 35px;
        margin-left:0.5em;
        font-size:16px;
    }
    #registro input {
        width: 270px;
        height: 35px;
        padding-left: 15px;
        background:#ffffff;
        border-radius:0px;
        border-color:#333333!important;
        border-width:1px!important;
    }
    #registro select {
        width: 270px;
        height: 35px;
        padding-left: 2px;
        padding-right: 2px;
        background:#ffffff;
        border-radius:0px;
        border-color:#333333!important;
        border-width:1px!important;
    }
    #boton_editar_riesgo,
    #boton_admin,
    #boton {
        transform-style: preserve-3d;
        border-radius:0;
        background:#000000;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #boton_editar_riesgo:hover,
    #boton_admin:hover,
    #boton:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIBe,
    #botonIB,
    #botonIA,
    #botonIAe,
    #botonE,
    #botonEe,
    #botonES,
    #botonESe,
    #botonIA1,
    #botonIA2,
    #botonIA3,
    #botonIA4,
    #botonIA5,
    #botonIA6,
    #botonIA7,
    #botonIA8,
    #botonIA9,
    #botonIA10 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
    
    }
    #botonIBe:hover,
    #botonIB:hover,
    #boton1A:hover,
    #botonIAe:hover,
    #botonE:hover,
    #botonEe:hover,
    #botonES:hover,
    #botonESe:hover,
    #botonIA1:hover, 
    #botonIA2:hover,
    #botonIA3:hover,
    #botonIA4:hover,
    #botonIA5:hover,
    #botonIA6:hover,
    #botonIA7:hover,
    #botonIA8:hover,
    #botonIA9:hover,
    #botonIA10:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #botonIB1,
    #botonIB2 {
        width: 270px;
        height: 35px;
        transform-style: preserve-3d;
        border:0!important;
        border-radius:0;
        background:#000000!important;
        color:#ffffff;
        transition: background 0.6s, opacity 0.6s linear;
        margin-top:2em;
    }
    #botonIB1:hover,
    #botonIB2:hover {
        transform-origin: center bottom;
        transform: rotateX(0deg) translateY(0%)!important;
        border: 1px solid #f58634!important;
        background:#fafecd!important;
        color:#000000!important;
        transition: background 0.6s, opacity 0.6s linear;
    }
    #tasks2 td,
    #tasks td{
        font-family:verdana;
        font-size:14px;
        padding:0.8em;
    }
    input[type="radio"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        visibility:hidden;
    }
    #check1::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #333333;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check1::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#f58634;
        margin-top:-1.2em;
        margin-left:1.2em;
    }
    #check11::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 20px;
        height: 20px;
        background-color:#ffffff;
        border:1px solid #f58634;
        text-align:center;
        margin-top:-1.6em;
        margin-left:2.2em;
    }
    #check11::after {
        display: inline-block;
        position: absolute;
        margin-top:-0.2em;
        font-size:30px!important;
        color:#f58634;
        margin-top:-1.2em;
        margin-left:1.2em;
        
    }
    .radio input[type="radio"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
    } 
    .tableIA {
        width: 90%;
    }
    .tableIA th {
        font-family:Verdanab;
        width:4em!important;
        text-align:center;
        padding:8px;
        border:1px solid #333333!important;
    }
    .tableIA td {
        width:100%;
        text-align:left;
        padding:8px;
        border:none;
        vertical-align:middle!important;
    }
    .nIA {
        font-family:Verdanab!important;
        font-size:18px!important;
    }
    .tablabdm td{
        width:50%;
        font-size:14px;
        border:1px solid #333333!important;
        font-family:Verdana!important; 
        padding:8px;
    }
    .borderout2 {
        font-family:Verdanab!important;
        text-align:left;
        padding:10px;
    }
    .table_consolidados {
        text-align:center;
        table-layout: fixed;
        border:1px solid #f58634!important;
        font-size:12px;
    }
    .table_consolidados th {
        color:#000000;
        font-family:Verdanab;
        text-align:center;
        line-height: 1.8rem!important;
        width:100%;
        padding:0.6em!important;
        border:1px solid #f58634!important;
    }
    .table_consolidados td {
        color:#333333;
    }
    .subt2{
        display:none;
    }  
    .col-md-12 p {
        color:#333333;
    } 
    #tdimension {
        text-align:center;
        font-family:verdanab;
        font-size:13px;
    }
    #tdimension1 {
        text-align:left;
        padding-left:6px;
        font-family:verdana;
        font-size:13px;
    }
    #tablas td{
        padding:4px;
        margin-left:30px;
    }
    .panel-body {
        background:#eaeaea;
        font-size:14px;
        line-height: 2.8rem;
    }
    #registro textarea {
        border: none;
        width:100%!important;
        text-align:justify;
        font-family:verdana;
        background:#ebf9fa;
        padding:1.8em;
        color:#000000;
        border:1px solid #333333!important
    }
    .cuadroseleccion {
        float:right;
        font-family:Verdanab;
        color:#666666;
        margin-right:2em;
    }
    @media screen and (max-width: 800px) {
        table {
            width:100%; 
        }
        tbody td {
            display: block;
            text-align:center;
            width:100%;
            height:3em!important;
            margin-top:-1px!important;
        }
        tbody td:before {               
            text-align:center;
        }
        tbody th {
            text-align:center;
        }
        tbody th:before {
            content: attr(data-th);
            text-align:center;
        }
        #panel_consolidados {
            padding-left:0!important;
            padding-right:0!important;
        }
        .tablaintra th,
        .table_consolidados th,
        .table th,
        .lista th {
            display:none!important;
        }
        .lista td {
            height:auto!important;
        }
        .table {
            width:100%!important;
        }
        .table td,
        .tablaintra td,
        .table_consolidados td {
            display:block!important;
            font-size:14px;
            width:100%!important;
            height:auto!important;
            padding:8px!important;
            text-align:center!important;
         }
         .table_consolidados {
            width:100%!important;
         }
        .subt2{
            display:block!important;
            font-family:verdana;
            color:#333333;
        } 
        #tdbd {
            padding:0!important;
            font-size:14px!important;
        }
        tbody #borderout {
            display: inline!important;
            text-align:center;
        }
        #buscar td{
            display:inline!important;
        }
        #btn2 {
            margin-top:0!important;
        }
        #nregistro {
            text-align:center!important;
            width:100%!important;
        }
        .task-estres,
        .task-extra,
        .task-intraA,
        .task-delete, .submit,
        .task-editar, .submit {
            margin-top:6px!important;
            margin-bottom:18px!important;
        } 
        .formxlsx {
            margin-right:0!important;
        }
        .tableIA {
            width: 100%!important;
        }
        .cuadroseleccion {
             margin-right:0!important;
        }
        .liker {
            font-size:11px!important;
        }
        #check1::before,
        #check11::before {
            width: 22px!important;
            height: 22px!important;
        }
        .title {
            margin-bottom:0.8em!important;
        }
        .top-menu {
        	margin-top:-4.15em!important;
        }
        .notify-row {
            margin-top:-1.5em;
        }
        .tablabdm td{
            width:100%!important;
            height:4em!important;
            text-align:center!important;
        }
         .lista td{
            text-align:center!important;
        }
        .etiquetas td {
            display:inline!important;
        }
        #dominio {
            display:none!important;
        }
        #dominio2 {
            display:inline!important;
        }
    }
    @media screen and (max-width: 480px) {
        .collapse {
            margin-top:0!important;
        } 
        .fullscreen-modal .modal-dialog {
            width: 100%!important;
        }
        .etiqueta {
            display:inline!important;
        }
        #costumModal1 .modal-lg,
        #costumModal2 .modal-lg,
        #costumModal3 .modal-lg,
        #costumModal5 .modal-m,
        #costumModal6 .modal-m,
        #costumModal7 .modal-m,
        #costumModal8 .modal-m,
        #costumModal9 .modal-m,
        #costumModal10 .modal-m,
        #costumModal11 .modal-lg {
            margin:0!important;
            padding:0!important;
            width:100%!important;
        }
    }
    .title {
        font-family:verdanab;
        margin-bottom:2em;
    }
    .muyalto {
        font-family:Verdanab;
        font-size:14px;
        color:#9d3715;
        text-align:center;
    }
    .ralto {
        font-family:Verdanab;
        font-size:14px;
        color:#e7744f;
        text-align:center;
    }
    .rmedio {
        font-family:Verdanab;
        font-size:14px;
        color:#666666;
        text-align:center;
    }
    .rbajo {
        font-family:Verdanab;
        font-size:14px;
        color:#99cc00;
        text-align:center;
    }
    .muybajo {
        font-family:Verdanab;
        font-size:14px;
        color:#394d00;
        text-align:center;
    }
    #dominio {
        font-family:Verdanab;
    }
    #dominio2 {
        font-family:Verdanab;
        display:none;
        text-align:center!important;
    }
    .pagination {
        text-align:center;
    }
    .pagination li a{
        width:2.1em;
        height:2.1em;
        color: #000000;
        background:transparent;
        border: 1px solid #333333;
        font-size:19px;
        border-radius:0;
        padding:6px;
        transition: color 0.6s, border 0.6s, opacity 0.6s linear;
    }
     [data-title]:hover:after {
        opacity: 1;
        transition: all 0.1s ease 0.5s;
        visibility: visible;
    }
    [data-title]:after {
        content: attr(data-title);
        width:10em!important;
        background-color: #ffffff;
        color: #333333;
        font-size: 14px;
        font-family: verdanab;
        position: absolute;
        padding:6px;
        top: -3em;
        right: 100%;
        text-align:center;
        box-shadow: 1px 1px 3px #222222;
        opacity: 0;
        border: 1px solid #333333;
        z-index: 99999;
        visibility: hidden;
        border-radius:0;
    }
    [data-title] {
        position: relative;
    }
     input[type="checkbox"] { 
        -webkit-appearance: none;
        -moz-appearance: none;
        width:0px;
        height:0px;
        visibility:hidden;
    }
    #check2::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 21px;
        height: 21px;
        background-color:transparent;
        border:1px solid #71788e;
        text-align:center;
    }
    #check2::after {
        display: inline-block;
        position: absolute;
        font-size:25px!important;
        color:#e7744f;
        margin-left:0px;
        margin-top:-4px;
    }
    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
        font-size: 18px!important;
    } 
  
  /* ===== ESTILO VIBRANTE CON COLOR #e0ebad - VERSIÓN 4 COLUMNAS ===== */
    /* Fondo transparente y sin border-radius */

    .tablabdm {
        width: 100%;
        max-width: 950px;
        margin: 0 auto;
        border-spacing: 0 6px;
        font-family: Verdana;
        font-size: 0.95rem;
        line-height: 1.5;
        color: #2d3a1f;
    }

    /* ===== FILAS ===== */
    .tablabdm tr {
        background: transparent;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tablabdm tr:hover {
        transform: translateY(-2px);
    }

    /* ===== CELDAS ===== */
    .tablabdm td {
        padding: 12px 16px;
        vertical-align: middle;
        background: transparent;
        border: none;
    }

    /* ===== ETIQUETAS (columna 1 y 3) ===== */
    .tablabdm td:nth-child(1),
    .tablabdm td:nth-child(3) {
        font-family:Verdanab!important;
        color: #2d3a1f;
        font-size: 13px;
        background: #fbf3fb;
        width: 22%;
    }

    /* ===== VALORES (columna 2 y 4) ===== */
    .tablabdm td:nth-child(2),
    .tablabdm td:nth-child(4) {
        font-family: Verdana;
        color: #1f2a14;
        font-size: 13px;
        background: #ffffff;
        width: 32%;
        text-align:left;
    }

    /* ===== BADGE PARA LOS VALORES (puntitos verdes) ===== */
    .tablabdm td:nth-child(2)::before,
    .tablabdm td:nth-child(4)::before {
        content: '';
        display: inline-block;
        width: 6px;
        height: 6px;
        background: #d4e3a3;
        border-radius: 50%;
        margin-right: 10px;
        opacity: 0.6;
        vertical-align: middle;
        flex-shrink: 0;
    }

    .tablabdm tr:hover td:nth-child(2)::before,
    .tablabdm tr:hover td:nth-child(4)::before {
        opacity: 1;
        background: #b8cb7a;
        box-shadow: 0 0 0 3px rgba(224, 235, 173, 0.3);
    }

    /* ===== QUITAR BADGE EN VALORES VACÍOS ===== */
    .tablabdm td:nth-child(2):empty::before,
    .tablabdm td:nth-child(4):empty::before {
        content: '—';
        color: #9aaa7a;
        opacity: 0.6;
        background: none;
        width: auto;
        height: auto;
        margin-right: 0;
        box-shadow: none;
        border-radius: 0;
    }

    /* ===== RESPONSIVE: TABLA EN TARJETAS ===== */
    @media (max-width: 768px) {
        .tablabdm {
            border-spacing: 0 8px;
            font-size: 0.85rem;
            max-width: 100%;
        }
        .tablabdm tr {
            display: block;
            background: transparent;
        }
        .tablabdm tr:hover {
            transform: translateY(-3px);
        }
        .tablabdm td {
            display: block;
            width: 100% !important;
            padding: 8px 14px;
            border: none !important;
            white-space: normal !important;
        }
        /* Etiquetas */
        .tablabdm td:nth-child(1),
        .tablabdm td:nth-child(3) {
            background: rgba(224, 235, 173, 0.20);
            padding-top: 10px;
            padding-bottom: 4px;
            font-size: 12px;
            font-weight: 700;
            border-bottom: 1px solid rgba(224, 235, 173, 0.4);
        }
        /* Valores */
        .tablabdm td:nth-child(2),
        .tablabdm td:nth-child(4) {
            background: transparent;
            padding-top: 4px;
            padding-bottom: 10px;
            font-size: 14px;
        }
        .tablabdm td:nth-child(2)::before,
        .tablabdm td:nth-child(4)::before {
            margin-right: 8px;
            width: 5px;
            height: 5px;
        }
        .borderout1,
        .borderout2 {
            font-size:14px!important;
            text-align:center!important;
        }
        /* Por defecto en celulares, el sidebar está visible */
        #sidebar {
            margin-left: 0 !important;
        }
        #main-content {
            margin-left: 210px !important; /* O 0 si prefieres que el contenido ocupe todo el ancho de fondo */
        }
    
        /* Cuando se le dé clic a la hamburguesa y se active la clase, se oculta */
        body.sidebar-closed #sidebar {
            margin-left: -210px !important;
        }
        body.sidebar-closed #main-content {
            margin-left: 0 !important;
        }
    }
    @media (max-width: 480px) {
        .tablabdm td {
            padding: 6px 12px;
        }

        .tablabdm td:nth-child(1),
        .tablabdm td:nth-child(3) {
            font-size: 11px;
        }

        .tablabdm td:nth-child(2),
        .tablabdm td:nth-child(4) {
            font-size: 13px;
        }
    }

    /* ===== ANIMACIÓN SUTIL AL CARGAR ===== */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tablabdm tr {
        animation: fadeInUp 0.4s ease forwards;
        opacity: 0;
    }

    .tablabdm tr:nth-child(1) { animation-delay: 0.02s; }
    .tablabdm tr:nth-child(2) { animation-delay: 0.04s; }
    .tablabdm tr:nth-child(3) { animation-delay: 0.06s; }
    .tablabdm tr:nth-child(4) { animation-delay: 0.08s; }

    @media (prefers-reduced-motion: reduce) {
        .tablabdm tr {
            animation: none;
            opacity: 1;
        }
    }
</style>
</head>
<body>
<div class="loader"></div>
<div style="display:none"></span><span id="Profesional"></span> <span id="Tarjeta"></span> <span id="Licencia"></span> <span id="Expedicion"></span> <span id="Archivo2"></span></div>
<header class="header black-bg" style="display: flex; align-items: center; justify-content: space-between;margin-top:-8px">
    <div id="etiqueta1" style="flex: 0 0 auto; margin-left: 15px; text-align:left!important;margin-bottom:4px">
           <?php if ($Activo == 1) { ?>
                <a href="#costumModal3" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } else { ?>
                <a href="#" data-toggle="modal" class="logo">Cedisalud<span style="color:#f9ecf9"> IPS</span></a>
            <?php } ?>
    </div>
    <div style="margin-left: auto; margin-right: 15px;">
            <a href="<?php echo RUTA_PSICOSOCIAL ?>" data-toggle="modal" style="color: #ffffff; text-decoration: none; font-family: verdana; font-size: 14px; display: inline-flex; align-items: center; gap: 6px;margin-top:16px">
                <i class="fa fa-pencil-square-o" style="font-size: 16px; color: #ffffff"></i>
                <span>Inicio</span>
            </a>
    </div>
</header>
<div class="container" style="min-height:50em;text-align:center;color:#333333"><br><br><br>
   <p style="font-family:verdanab;font-size:20px;color:#333333;text-align:center">RESULTADO INTRALABORAL INDIVIDUAL</p><br>
    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:2px;text-align:center;">DATOS GENERALES DEL TRABAJADOR</p><br>
    <table class="tablabdm table-sm" align="center">
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Nombre:</td>
            <td class="borderout1"><?php echo $Nombre.' '.$Apellido1.' '.$Apellido2 ?></td>
            <td class="borderout2" style="font-family:Verdanab">Documento de identidad:</td>
            <td class="borderout1"><?php echo $Cedula ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Cargo:</td>
            <td class="borderout1"><?php echo $Cargo ?></td>
            <td class="borderout2" style="font-family:Verdanab">Area:</td>
            <td class="borderout1"><?php echo $Seccion ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab"><?php  echo $etiqueta; ?>:</td>
            <td class="borderout1"><?php  echo $dato; ?></td>
            <td class="borderout2" style="font-family:Verdanab">Género:</td>
            <td class="borderout1"<?php echo $Genero ?></td>
        </tr>
        <tr>
            <td class="borderout2" style="font-family:Verdanab">Empresa:</td>
            <td class="borderout1"><?php echo $Empresa ?></td>
            <td class="borderout2" style="font-family:Verdanab">Fecha de aplicación:</td>
            <td class="borderout1"><?php 
                $Date = $Fecha_prueba;
                $newDate = date("d/m/Y", strtotime($Date));
                echo $newDate;
            ?></td>
        </tr>
    </table><br>
    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:2px;text-align:center;">RESULTADOS DEL CUESTIONARIO</p><br>
    <table class="table table-sm" id="total" style="width:76%" align="center">
        <tr>
            <td style="font-family:Verdanab;text-align:center">INTRALABORAL - <span id="formaA"style="color:#e7744f;letter-spacing:2px">FORMA A</span><span id="formaB"style="color:#e7744f;letter-spacing:2px">FORMA B</span></td>
            <td style="padding:0;width:31.3%"><div style="height:100%" id="G2" class="G2"></div><div style="height:100%" id="G3" class="G3"></div></td>
            <td style="width:18%"><div class="G2 GR">
                <?php
                    if ($G2 >= 38.1) {
                        $G2t= 'Muy Alto';
                        $G2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($G2 >= 31.6) {
                        $G2t= 'Alto';
                        $G2c= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($G2 >= 25.9) {
                        $G2t= 'Medio';
                        $G2c= '102, 102, 102';
                        echo "<p class='rmedio'>Medio</p>";
                    } elseif ($G2 >= 19.8) {
                        $G2t= 'Bajo';
                        $G2c= '115, 153, 0';
                        echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($G2 >= 0) {
                        $G2t= 'Sin Riesgo';
                        $G2c= '57, 77, 0';
                        echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="G3 GR">
                <?php
                    if ($G3 >= 38.8) {
                        $G3t= 'Muy Alto';
                        $G3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($G3 >= 31.3) {
                        $G3t= 'Alto';
                        $G3c= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($G3 >= 26.1) {
                        $G3t= 'Medio';
                        $G3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($G3 >= 20.7) {
                        $G3t= 'Bajo';
                        $G3c= '115, 153, 0';
                        echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($G3 >= 0) {
                        $G3t= 'Sin Riesgo';
                        $G3c= '57, 77, 0';
                        echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>  
            </td>
        </tr>
    </table><br>   
   
    <table class="table table-sm" align="center">
        <tr id="trdatos">
            <th style="width:50%">Dominios</th>
            <th>Dimensiones</th>
            <th style="width:60%">Puntaje</th>
            <th style="width:40%">Nivel del Riesgo</th>
        </tr>
        <tr>
            <td ROWSPAN=4 style="font-family:Verdanab;text-align:center;background:#f0f4f5">Liderazgo y relaciones sociales en el trabajo</td>
            <td>Características del liderazgo</td>
            <td style="padding:0"><div style="height:100%" id="CL2" class="CL2"></div><div style="height:100%" id="CL3" class="CL3"></div></td>
            <td><div class="CL2 GR">
                <?php
                    if ($CL2 >= 46.3) {
                        $CL2t= 'Muy Alto';
                        $CL2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CL2 >= 30.9) {
                        $CL2t= 'Alto';
                        $CL2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CL2 >= 15.5) {
                        $CL2t= 'Medio';
                        $CL2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CL2 >= 3.9 ) {
                        $CL2t= 'Bajo';
                        $CL2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CL2 >= 0) {
                        $CL2t= 'Sin Riesgo';
                        $CL2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="CL3 GR">
                <?php
                    if ($CL3 >= 38.6) {
                        $CL3t= 'Muy Alto';
                        $CL3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CL3 >= 25.1) {
                        $CL3t= 'Alto';
                        $CL3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CL3 >= 13.6) {
                        $CL3t= 'Medio';
                        $CL3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CL3 >= 3.9 ) {
                        $CL3t= 'Bajo';
                        $CL3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CL3 >= 0) {
                        $CL3t= 'Sin Riesgo';
                        $CL3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>  
            </td>
        </tr>
        <tr>
            <td>Relaciones sociales en el trabajo</td>
            <td style="padding:0"><div style="height:100%" id="RS2" class="RS2"></div><div style="height:100%" id="RS3" class="RS3"></div></td>
            <td><div class="RS2 GR">
                <?php
                    if ($RS2 >= 37.6) {
                        $RS2t= 'Muy Alto';
                        $RS2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RS2 >= 25.1) {
                        $RS2t= 'Alto';
                        $RS2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RS2 >= 16.2) {
                        $RS2t= 'Medio';
                        $RS2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RS2 >= 5.5) {
                        $RS2t= 'Bajo';
                        $RS2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RS2 >= 0) {
                        $RS2t= 'Sin Riesgo';
                        $RS2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="RS3 GR">
                <?php
                    if ($RS3 >= 37.6) {
                        $RS3t= 'Muy Alto';
                        $RS3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RS3 >= 27.2) {
                        $RS3t= 'Alto';
                        $RS3c= '231, 116, 79';
                        echo "<p class='ralto'>Alto</p>";
                    } elseif ($RS3 >= 14.7) {
                        $RS3t= 'Medio';
                        $RS3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RS3 >= 6.4) {
                        $RS3t= 'Bajo';
                        $RS3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RS3 >= 0) {
                        $RS3t= 'Sin Riesgo';
                        $RS3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>   
            </td>
        </tr>    
        <tr>
            <td>Retroalimentación del desempeño</td>
            <td style="padding:0"><div style="height:100%" id="RD2" class="RD2"></div><div style="height:100%" id="RD3" class="RD3"></div></td>
            <td><div class="RD2 GR">
                <?php
                    if ($RD2 >= 55.1) {
                        $RD2t= 'Muy Alto';
                        $RD2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RD2 >= 40.1) {
                        $RD2t= 'Alto';
                        $RD2c= '231, 116, 79';
                        echo "<p class='ralto' >Alto</p>";
                    } elseif ($RD2 >= 25.1) {
                        $RD2t= 'Medio';
                        $RD2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RD2 >= 10.1) {
                        $RD2t= 'Bajo';
                        $RD2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RD2 >= 0) {
                        $RD2t= 'Sin Riesgo';
                        $RD2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
                <div class="RD3 GR">
                <?php
                    if ($RD3 >= 50.1) {
                        $RD3t= 'Muy Alto';
                        $RD3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RD3 >= 30.1) {
                        $RD3t= 'Alto';
                        $RD3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RD3 >= 20.1) {
                        $RD3t= 'Medio';
                        $RD3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RD3 >= 5.1) {
                        $RD3t= 'Bajo';
                        $RD3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RD3 >= 0) {
                        $RD3t= 'Sin Riesgo';
                        $RD3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?>    
            </td></div>
        </tr>
        <tr>
            <td>Relación con los colaboradores (subordinados)</td>
            <td style="padding:0"><div style="height:100%" id="RC2" class="RC2"></div><div style="text-align:center;font-family:verdanab;color:#999999;font-size:16px" class="RC3 GR">No aplica</div></td>
            <td><div class="RC2 GR">
                <?php
                    if ($RC2 >= 47.3) {
                        $RC2t= 'Muy Alto';
                        $RC2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RC2 >= 33.4) {
                        $RC2t= 'Alto';
                        $RC2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RC2 >= 25.1) {
                        $RC2t= 'Medio';
                        $RC2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RC2 >= 14) {
                        $RC2t= 'Bajo';
                        $RC2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RC2 >= 0) {
                        $RC2t= 'Sin Riesgo';
                        $RC2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
                <div class="RC3 GR" >
                    <?php
                        echo "<div style='text-align:center;font-family:verdanab;color:#999999;font-size:16px'>No aplica</div>";
                    ?>
                </div> 
            </td>
        </tr>
        <tr>
            <td COLSPAN=2 style="font-family:Verdanab;text-align:left"><span id="dominio">LIDERAZGO Y RELACIONES SOCIALES EN EL TRABAJO</span><span id="dominio2">Puntuación del dominio:</span></td>
            <td style="padding:0"><div style="height:100%" id="LR2" class="LR2"></div><div style="height:100%;margin:0!important;padding:0" id="LR3" class="LR3"></div></td>
            <td><div class="LR2 GR">
                <?php
                    if ($LR2 >= 34.9) {
                        $LR2t= 'Muy Alto';
                        $LR2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($LR2 >= 25.7) {
                        $LR2t= 'Alto';
                        $LR2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($LR2 >= 17.8) {
                        $LR2t= 'Medio';
                        $LR2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($LR2 >= 9.2) {
                        $LR2t= 'Bajo';
                        $LR2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($LR2 >= 0) {
                        $LR2t= 'Sin Riesgo';
                        $LR2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="LR3 GR">
                <?php
                    if ($LR3 >= 38.4) {
                        $LR3t= 'Muy Alto';
                        $LR3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($LR3 >= 26.8) {
                        $LR3t= 'Muy Alto';
                        $LR3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($LR3 >= 17.6) {
                        $LR3t= 'Medio';
                        $LR3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($LR3 >= 8.4) {
                        $LR3t= 'Bajo';
                        $LR3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($LR3 >= 0) {
                        $LR3t= 'Sin Riesgo';
                        $LR3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr>
        <tr>
            <td ROWSPAN=5 style="font-family:Verdanab;text-align:center;background:#f0f4f5">Control sobre el trabajo</td>
            <td>Claridad de rol</td>
            <td style="padding:0"><div style="height:100%" id="CR2" class="CR2"></div><div style="height:100%;margin:0!important;padding:0" id="CR3" class="CR3"></div></td>
            <td><div class="CR2 GR">
                <?php
                    if ($CR2 >= 39.4) {
                        $CR2t= 'Muy Alto';
                        $CR2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CR2 >= 21.5) {
                        $CR2t= 'Alto';
                        $CR2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CR2 >= 10.8) {
                        $CR2t= 'Medio';
                        $CR2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CR2 >= 1) {
                        $CR2t= 'Bajo';
                        $CR2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CR2 >= 0) {
                        $CR2t= 'Sin Riesgo';
                        $CR2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="CR3 GR">
                <?php
                    if ($CR3 >= 30.1) {
                        $CR3t= 'Muy Alto';
                        $CR3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CR3 >= 15.1) {
                        $CR3t= 'Alto';
                        $CR3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CR3 >= 5.1) {
                        $CR3t= 'Medio';
                        $CR3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CR3 >= 1) {
                        $CR3t= 'Bajo';
                        $CR3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CR3 >= 0) {
                        $CR3t= 'Sin Riesgo';
                        $CR3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr>    
        <tr>
            <td>Capacitación</td>
            <td style="padding:0"><div style="height:100%" id="C2" class="C2"></div><div style="height:100%;margin:0!important;padding:0" id="C3" class="C3"></div></td>
            <td><div class="C2 GR">
                <?php
                    if ($C2 >= 50.1) {
                        $C2t= 'Muy Alto';
                        $C2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($C2 >= 33.4) {
                        $C2t= 'Alto';
                        $C2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($C2 >= 16.8) {
                        $C2t= 'Medio';
                        $C2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($C2 >= 1) {
                        $C2t= 'Bajo';
                        $C2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($C2 >= 0) {
                        $C2t= 'Sin Riesgo';
                        $C2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>   
                <div class="C3 GR">
                <?php
                    if ($C3 >= 50.1) {
                        $C3t= 'Muy Alto';
                        $C3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($C3 >= 25.1) {
                        $C3t= 'Alto';
                        $C3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($C3 >= 16.8) {
                        $C3t= 'Medio';
                        $C3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($C3 >= 1) {
                        $C3t= 'Bajo';
                        $C3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($C3 >= 0) {
                        $C3t= 'Sin Riesgo';
                        $C3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr>
        <tr>
            <td>Participación y manejo del cambio</td>
            <td style="padding:0"><div style="height:100%" id="PM2" class="PM2"></div><div style="height:100%;margin:0!important;padding:0" id="PM3" class="PM3"></div></td>
            <td><div class="PM2 GR">
                <?php
                    if ($PM2 >= 50.1) {
                        $PM2t= 'Muy Alto';
                        $PM2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($PM2 >= 37.6) {
                        $PM2t= 'Alto';
                        $PM2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($PM2 >= 25.1) {
                        $PM2t= 'Medio';
                        $PM2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($PM2 >= 12.6) {
                        $PM2t= 'Bajo';
                        $PM2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($PM2 >= 0) {
                        $PM2t= 'Sin Riesgo';
                        $PM2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
                <div class="PM3 GR">
                <?php
                    if ($PM3 >= 58.4) {
                        $PM3t= 'Muy Alto';
                        $PM3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($PM3 >= 41.8) {
                        $PM3t= 'Alto';
                        $PM3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($PM3 >= 33.4) {
                        $PM3t= 'Medio';
                        $PM3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($PM3 >= 16.8) {
                        $PM3t= 'Bajo';
                        $PM3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($PM3 >= 0) {
                        $PM3t= 'Sin Riesgo';
                        $PM3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
            </td>
        </tr>
        <tr>
            <td>Oportunidades para el uso y desarrollo de habiIidades y conocimientos</td>
            <td style="padding:0"><div style="height:100%" id="PD2" class="PD2"></div><div style="height:100%;margin:0!important;padding:0" id="PD3" class="PD3"></div></td>
            <td><div class="PD2 GR">
                <?php
                    if ($PD2 >= 31.4) {
                        $PD2t= 'Muy Alto';
                        $PD2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($PD2 >= 18.9) {
                        $PD2t= 'Alto';
                        $PD2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($PD2 >= 6.4) {
                        $PD2t= 'Medio';
                        $PD2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($PD2 >= 1) {
                        $PD2t= 'Bajo';
                        $PD2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($PD2 >= 0) {
                        $PD2t= 'Sin Riesgo';
                        $PD2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>  
                <div class="PD3 GR">
                <?php
                    if ($PD3 >= 56.4) {
                        $PD3t= 'Muy Alto';
                        $PD3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($PD3 >= 37.6) {
                        $PD3t= 'Alto';
                        $PD3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($PD3 >= 25.1) {
                        $PD3t= 'Medio';
                        $PD3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($PD3 >= 12.6) {
                        $PD3t= 'Bajo';
                        $PD3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($PD3 >= 0) {
                        $PD3t= 'Sin Riesgo';
                        $PD3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
            </td>
        </tr>    
        <tr>
            <td>Control y autonomía sobre el trabajo</td>
            <td style="padding:0"><div style="height:100%" id="CA2" class="CA2"></div><div style="height:100%;margin:0!important;padding:0" id="CA3" class="CA3"></div></td>
            <td><div class="CA2 GR">
                <?php
                    if ($CA2 >= 58.4) {
                        $CA2t= 'Muy Alto';
                        $CA2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CA2 >= 41.8) {
                        $CA2t= 'Alto';
                        $CA2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CA2 >= 25.1) {
                        $CA2t= 'Medio';
                        $CA2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CA2 >= 8.4) {
                        $CA2t= 'Bajo';
                        $CA2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CA2 >= 0) {
                        $CA2t= 'Sin Riesgo';
                        $CA2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>  
                <div class="CA3 GR">
                <?php
                    if ($CA3 >= 75.1) {
                        $CA3t= 'Muy Alto';
                        $CA3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CA3 >= 66.8) {
                        $CA3t= 'Alto';
                        $CA3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CA3 >= 50.1) {
                        $CA3t= 'Medio';
                        $CA3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CA3 >= 33.4) {
                        $CA3t= 'Bajo';
                        $CA3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CA3 >= 0) {
                        $CA3t= 'Sin Riesgo';
                        $CA3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
            </td>
        </tr>
        <tr>
            <td COLSPAN=2 style="font-family:Verdanab;text-align:left"><span id="dominio">CONTROL SOBRE EL TRABAJO</span><span id="dominio2">Puntuación del dominio:</span></td>
            <td style="padding:0"><div style="height:100%" id="CT2" class="CT2"></div><div style="height:100%;margin:0!important;padding:0" id="CT3" class="CT3"></div></td>
            <td><div class="CT2 GR">
                <?php
                    if ($CT2 >= 40.6) {
                        $CT2t= 'Muy Alto';
                        $CT2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CT2  >= 29.9) {
                        $CT2t= 'Alto';
                        $CT2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CT2  >= 19.1) {
                        $CT2t= 'Medio';
                        $CT2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CT2  >= 10.8) {
                        $CT2t= 'Bajo';
                        $CT2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CT2  >= 0) {
                        $CT2t= 'Sin Riesgo';
                        $CT2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
                <div class="CT3 GR">
                <?php
                    if ($CT3 >= 43.2) {
                        $CT3t= 'Muy Alto';
                        $CT3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CT3  >= 34.8) {
                        $CT3t= 'Alto';
                        $CT3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CT3  >= 26.5) {
                        $CT3t= 'Medio';
                        $CT3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CT3  >= 19.5) {
                        $CT3t= 'Bajo';
                        $CT3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CT3  >= 0) {
                        $CT3t= 'Sin Riesgo';
                        $CT3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
            </td>
        </tr>
        <tr>
            <td ROWSPAN=8 style="font-family:Verdanab;text-align:center;background:#f0f4f5">Demandas del trabajo</td>
            <td>Demandas ambientales y de esfuerzo físico</td>
            <td style="padding:0"><div style="height:100%" id="DAE2" class="DAE2"></div><div style="height:100%;margin:0!important;padding:0" id="DAE3" class="DAE3"></div></td>
            <td><div class="DAE2 GR">
                <?php
                    if ($DAE2 >= 39.7) {
                        $DAE2t= 'Muy Alto';
                        $DAE2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DAE2 >= 31.4) {
                        $DAE2t= 'Alto';
                        $DAE2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DAE2 >= 23) {
                        $DAE2t= 'Medio';
                        $DAE2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DAE2 >= 14.7) {
                        $DAE2t= 'Bajo';
                        $DAE2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DAE2 >= 0) {
                        $DAE2t= 'Sin Riesgo';
                        $DAE2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
                <div class="DAE3 GR">
                <?php
                    if ($DAE3 >= 48) {
                        $DAE3t= 'Muy Alto';
                        $DAE3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DAE3 >= 39.7) {
                        $DAE3t= 'Alto';
                        $DAE3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DAE3 >= 31.4) {
                        $DAE3t= 'Medio';
                        $DAE3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DAE3 >= 23) {
                        $DAE3t= 'Bajo';
                        $DAE3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DAE3 >= 0) {
                        $DAE3t= 'Sin Riesgo';
                        $DAE3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>  
            </td>
        </tr> 
         <tr>
            <td>Demandas emocionales</td>
            <td style="padding:0"><div style="height:100%" id="DE2" class="DE2"></div><div style="height:100%;margin:0!important;padding:0" id="DE3" class="DE3"></div></td>
            <td><div class="DE2 GR">
                <?php
                    if ($DE2 >= 47.3) {
                        $DE2t= 'Muy Alto';
                        $DE2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DE2> 33.4) {
                        $DE2t= 'Alto';
                        $DE2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DE2 >= 25.1) {
                        $DE2t= 'Medio';
                        $DE2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DE2 >= 14) {
                        $DE2t= 'Bajo';
                        $DE2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DE2 >= 0) {
                        $DE2t= 'Sin Riesgo';
                        $DE2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>  
                <div class="DE3 GR">
                <?php
                    if ($DE3 >= 47.3) {
                        $DE3t= 'Muy Alto';
                        $DE3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DE3 >= 39) {
                        $DE3t= 'Alto';
                        $DE3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DE3 >= 27.9) {
                        $DE3t= 'Medio';
                        $DE3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DE3 >= 19.5) {
                        $DE3t= 'Bajo';
                        $DE3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DE3 >= 0) {
                        $DE3t= 'Sin Riesgo';
                        $DE3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr>
         <tr>
            <td>Demandas cuantitativas</td>
            <td style="padding:0"><div style="height:100%" id="DC2" class="DC2"></div><div style="height:100%;margin:0!important;padding:0" id="DC3" class="DC3"></div></td>
            <td><div class="DC2 GR">
                <?php
                    if ($DC2 >= 54.3) {
                        $DC2t= 'Muy Alto';
                        $DC2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DC2> 45.9) {
                        $DC2t= 'Alto';
                        $DC2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DC2 >= 33.4) {
                        $DC2t= 'Medio';
                        $DC2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DC2 >= 25.1) {
                        $DC2t= 'Bajo';
                        $DC2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DC2 >= 0) {
                        $DC2t= 'Sin Riesgo';
                        $DC2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
                <div class="DC3 GR">
                <?php
                    if ($DC3 >= 50.1) {
                        $DC3t= 'Muy Alto';
                        $DC3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DC3 >= 41.8) {
                        $DC3t= 'Alto';
                        $DC3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DC3 >= 33.4) {
                        $DC3t= 'Medio';
                        $DC3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DC3 >= 16.8) {
                        $DC3t= 'Bajo';
                        $DC3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DC3 >= 0) {
                        $DC3t= 'Sin Riesgo';
                        $DC3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
            </td>
        </tr>
         <tr>
            <td>Influencia del trabajo sobre el entorno extralaboral</td>
            <td style="padding:0"><div style="height:100%" id="IT2" class="IT2"></div><div style="height:100%;margin:0!important;padding:0" id="IT3" class="IT3"></div></td>
            <td><div class="IT2 GR">
                <?php
                    if ($IT2 >= 50.1) {
                        $IT2t= 'Muy Alto';
                        $IT2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($IT2 >= 43.9) {
                        $IT2t= 'Alto';
                        $IT2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($IT2 >= 31.4) {
                        $IT2t= 'Medio';
                        $IT2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($IT2 >= 18.9) {
                        $IT2t= 'Bajo';
                        $IT2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($IT2 >= 0) {
                        $IT2t= 'Sin Riesgo';
                        $IT2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="IT3 GR">
                <?php
                    if ($IT3 >= 50.1) {
                        $IT3t= 'Muy Alto';
                        $IT3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($IT3 >= 31.4) {
                        $IT3t= 'Alto';
                        $IT3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($IT3 >= 25.1) {
                        $IT3t= 'Medio';
                        $IT3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($IT3 >= 12.6) {
                        $IT3t= 'Bajo';
                        $IT3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($IT3 >= 0) {
                        $IT3t= 'Sin Riesgo';
                        $IT3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>
            </td>
        </tr>
        <tr>
            <td>Exigencias de responsabilidad del cargo</td>
            <td style="padding:0"><div style="height:100%" id="ER2" class="ER2"></div><div id="ER3" style="text-align:center;font-family:verdanab;color:#999999;font-size:16px" class="ER3 GR">No evalúa</div></td>
            <td><div class="ER2 GR">
                <?php
                    if ($ER2 >= 79.3) {
                        $ER2t= 'Muy Alto';
                        $ER2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($ER2 >= 66.8) {
                        $ER2t= 'Alto';
                        $ER2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($ER2 >= 54.3) {
                        $ER2t= 'Medio';
                        $ER2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($ER2 >= 37.6) {
                        $ER2t= 'Bajo';
                        $ER2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($ER2 >= 0) {
                        $ER2t= 'Sin Riesgo';
                        $ER2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div><div class="ER3 GR">
                    <?php
                        echo "<div style='text-align:center;font-family:verdanab;color:#999999;font-size:16px'>No evalúa</div>";
                    ?> 
                   </div>
            </td>
        </tr>
         <tr>
            <td>Demandas de carga mental</td>
            <td style="padding:0"><div style="height:100%" id="DCM2" class="DCM2"></div><div style="height:100%;margin:0!important;padding:0" id="DCM3" class="DCM3"></div></td>
            <td><div class="DCM2 GR">
                <?php
                    if ($DCM2 >= 90.1) {
                        $DCM2t= 'Muy Alto';
                        $DCM2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DCM2 >= 80.1) {
                        $DCM2t= 'Alto';
                        $DCM2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DCM2 >= 70.1) {
                        $DCM2t= 'Medio';
                        $DCM2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DCM2 >= 60.1) {
                        $DCM2t= 'Bajo';
                        $DCM2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DCM2 >= 0) {
                        $DCM2t= 'Sin Riesgo';
                        $DCM2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
                <div class="DCM3 GR">
                <?php
                    if ($DCM3 >= 85.1) {
                        $DCM3t= 'Muy Alto';
                        $DCM3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DCM3 >= 75.1) {
                        $DCM3t= 'Alto';
                        $DCM3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DCM3 >= 65.1) {
                        $DCM3t= 'Medio';
                        $DCM3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DCM3 >= 50.1) {
                        $DCM3t= 'Bajo';
                        $DCM3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DCM3 >= 0) {
                        $DCM3t= 'Sin Riesgo';
                        $DCM3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
            </td>
        </tr>
        <tr>
            <td>Consistencias del rol</td>
            <td style="padding:0"><div style="height:100%" id="CRL2" class="CRL2"></div><div id="CRL3" style="text-align:center;font-family:verdanab;color:#999999;font-size:16px" class="CRL3 GR">No evalúa</div></td>
            <td><div class="CRL2 GR">
                <?php
                    if ($CRL2 >= 45.1) {
                        $CRL2t= 'Muy Alto';
                        $CRL2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($CRL2 >= 35.1) {
                        $CRL2t= 'Alto';
                        $CRL2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($CRL2 >= 25.1) {
                        $CRL2t= 'Medio';
                        $CRL2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($CRL2 >= 15.1) {
                        $CRL2t= 'Bajo';
                        $CRL2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($CRL2 >= 0) {
                        $CRL2t= 'Sin Riesgo';
                        $CRL2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="CRL3 GR">
                    <?php
                        echo "<div style='text-align:center;font-family:verdanab;color:#999999;font-size:16px'>No evalúa</div>";
                    ?> 
                </div>
            </td>
        </tr>
         <tr>
            <td>Demandas de la jornada de trabajo</td>
            <td style="padding:0"><div style="height:100%" id="DJT2" class="DJT2"></div><div style="height:100%;margin:0!important;padding:0" id="DJT3" class="DJT3"></div></td>
            <td><div class="DJT2 GR">
                <?php
                    if ($DJT2 >= 50.1) {
                        $DJT2t= 'Muy Alto';
                        $DJT2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DJT2 >= 33.4) {
                        $DJT2t= 'Alto';
                        $DJT2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DJT2 >= 25.1) {
                        $DJT2t= 'Medio';
                        $DJT2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DJT2 >= 8.4) {
                        $DJT2t= 'Bajo';
                        $DJT2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DJT2 >= 0) {
                        $DJT2t= 'Sin Riesgo';
                        $DJT2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div> 
                <div class="DJT3 GR">
                <?php
                    if ($DJT3 >= 58.4) {
                        $DJT3t= 'Muy Alto';
                        $DJT3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DJT3 >= 45.9) {
                        $DJT3t= 'Alto';
                        $DJT3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DJT3 >= 37.6) {
                        $DJT3t= 'Medio';
                        $DJT3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DJT3 >= 25.1) {
                        $DJT3t= 'Bajo';
                        $DJT3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DJT3 >= 0) {
                        $DJT3t= 'Sin Riesgo';
                        $DJT3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>
            </td>
        </tr>
            <tr>
            <td COLSPAN=2 style="font-family:Verdanab;text-align:left"><span id="dominio">DEMANDAS DEL TRABAJO</span><span id="dominio2">Puntuación del dominio:</span></td>
            <td style="padding:0"><div style="height:100%" id="DT2" class="DT2"></div><div style="height:100%;margin:0!important;padding:0" id="DT3" class="DT3"></div></td>
            <td><div class="DT2 GR">
                <?php
                    if ($DT2 >= 47.6) {
                        $DT2t= 'Muy Alto';
                        $DT2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DT2  >= 41.6) {
                        $DT2t= 'Alto';
                        $DT2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DT2  >= 35.1) {
                        $DT2t= 'Medio';
                        $DT2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DT2  >= 28.6) {
                        $DT2t= 'Bajo';
                        $DT2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DT2  >= 0) {
                        $DT2t= 'Sin Riesgo';
                        $DT2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div>  
                <div class="DT3 GR">
                <?php
                    if ($DT3 >= 44.3) {
                        $DT3t= 'Muy Alto';
                        $DT3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($DT3  >= 37.9) {
                        $DT3t= 'Alto';
                        $DT3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($DT3  >= 33.4) {
                        $DT3t= 'Medio';
                        $DT3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($DT3  >= 27) {
                        $DT3t= 'Bajo';
                        $DT3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($DT3  >= 0) {
                        $DT3t= 'Sin Riesgo';
                        $DT3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?> </div> 
            </td>
        </tr>
        <tr>
            <td ROWSPAN=2 style="font-family:Verdanab;text-align:center;background:#f0f4f5">Recompensas</td>
            <td>Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza</td>
            <td style="padding:0"><div style="height:100%" id="RP2" class="RP2"></div><div style="height:100%;margin:0!important;padding:0" id="RP3" class="RP3"></div></td>
            <td><div class="RP2 GR">
                <?php
                    if ($RP2 >= 20.1) {
                        $RP2t= 'Muy Alto';
                        $RP2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RP2 >= 10.1) {
                        $RP2t= 'Alto';
                        $RP2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RP2 >= 5.1) {
                        $RP2t= 'Medio';
                        $RP2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RP2 >= 1) {
                        $RP2t= 'Bajo';
                        $RP2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RP2 >= 0) {
                        $RP2t= 'Sin Riesgo';
                        $RP2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="RP3 GR">
                <?php
                    if ($RP3 >= 18.9) {
                        $RP3t= 'Muy Alto';
                        $RP3c='157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RP3 >= 12.6) {
                        $RP3t= 'Alto';
                        $RP3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RP3 >= 6.4) {
                        $RP3t= 'Medio';
                        $RP3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RP3 >= 1) {
                        $RP3t= 'Bajo';
                        $RP3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RP3 >= 0) {
                        $RP3t= 'Sin Riesgo';
                        $RP3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr> 
        <tr>
            <td>Recompensa y compensación</td>
            <td style="padding:0"><div style="height:100%" id="RYC2" class="RYC2"></div><div style="height:100%;margin:0!important;padding:0" id="RYC3" class="RYC3"></div></td>
            <td><div class="RYC2 GR">
                <?php
                    if ($RYC2 >= 37.6) {
                        $RYC2t= 'Muy Alto';
                        $RYC2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RYC2 >= 25.1) {
                        $RYC2t= 'Alto';
                        $RYC2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RYC2 >= 16.8) {
                        $RYC2t= 'Medio';
                        $RYC2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RYC2 >= 4.3) {
                        $RYC2t= 'Bajo';
                        $RYC2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RYC2 >= 0) {
                        $RYC2t= 'Sin Riesgo';
                        $RYC2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="RYC3 GR">
                <?php
                    if ($RYC3 >= 37.6) {
                        $RYC3t= 'Muy Alto';
                        $RYC3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($RYC3 >= 25.1) {
                        $RYC3t= 'Alto';
                        $RYC3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($RYC3 >= 12.6) {
                        $RYC3t= 'Medio';
                        $RYC3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($RYC3 >= 1) {
                        $RYC3t= 'Bajo';
                        $RYC3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($RYC3 >= 0) {
                        $RYC3t= 'Sin Riesgo';
                        $RYC3c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
            </td>
        </tr>
        </tr>
            <tr>
            <td COLSPAN=2 style="font-family:Verdanab;text-align:left"><span id="dominio">RECOMPENSAS</span><span id="dominio2">Puntuación del dominio:</span></td>
            <td style="padding:0"><div style="height:100%" id="R2" class="R2"></div><div style="height:100%;margin:0!important;padding:0" id="R3" class="R3"></div></td>
            <td><div class="R2 GR">
                <?php
                    if ($R2 >= 29.6) {
                        $R2t= 'Muy Alto';
                        $R2c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($R2  >= 20.6) {
                        $R2t= 'Alto';
                        $R2c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($R2  >= 11.5) {
                        $R2t= 'Medio';
                        $R2c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($R2  >= 4.6) {
                        $R2t= 'Bajo';
                        $R2c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($R2  >= 0) {
                        $R2t= 'Sin Riesgo';
                        $R2c= '57, 77, 0';
                         echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div> 
                <div class="R3 GR">
                <?php
                    if ($R3 >= 27.6) {
                        $R3t= 'Muy Alto';
                        $R3c= '157, 55, 21';
                        echo "<p class='muyalto'>Muy Alto</p>";
                    } elseif ($R3  >= 17.6) {
                        $R3t= 'Alto';
                        $R3c= '231, 116, 79';
                         echo "<p class='ralto' >Alto</p>";
                    } elseif ($R3  >= 10.7) {
                        $R3t= 'Medio';
                        $R3c= '102, 102, 102';
                         echo "<p class='rmedio'>Medio</p>";
                    } elseif ($R3  >= 2.6) {
                        $R3t= 'Bajo';
                        $R3c= '115, 153, 0';
                         echo "<p class='rbajo'>Bajo</p>";
                    } elseif ($R3  >= 0) {
                        $R3t= 'Sin Riesgo';
                        $R3c= '57, 77, 0';
                       echo "<p class='muybajo'>Sin Riesgo</p>";
                    }
                ?></div>  
            </td>
        </tr>
    </table><br>
    <div class="col-md-12"> 
        <div class="col-md-8" align="center" style="padding:0!important">
             <form>
                <div class="row" id="registro" align="center" style="min-height:10em">
                    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:1px;text-align:center">OBSERVACIONES Y COMENTARIOS:</p><br>
                <?php
                    if ($validacionA == 1) { ?>
                       <p id="observacionesv" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                       <button class="task-editar" id="btnobservaciones" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                       <textarea type="text" id="observaciones" class="form-control" rows="6" name="Texto" placeholder=""></textarea><br>
                       <input id="botonIA1" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
                       <div style="display:none" id="fecha_A"></div><br>
                   <?php }; 
                    if ($validacionB == 1) { ?>
                        <p id="observacionesv2" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                        <button class="task-editar" id="btnobservaciones2" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                        <textarea type="text" id="observaciones2" class="form-control" rows="6" name="Texto" placeholder=""></textarea><br>
                        <input id="botonIB1" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
                        <div style="display:none" id="fecha_B"></div><br>  
                    <?php } ?>
                </form>
            </div>
            <form name="formI2">
                <div class="row" id="registro" align="center">
                    <p style="font-size:20px;line-height:1em;font-family:Narrow;letter-spacing:1px;text-align:center">RECOMENDACIONES PARTICULARES:</p><br>
                <?php
                    if ($validacionA == 1) { ?>
                        <p id="recomendacionesv" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                        <button class="task-editar" id="btnrecomendaciones" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                        <textarea type="text" id="recomendaciones" class="form-control" rows="6" name="Texto" placeholder=""></textarea></p><br>
                        <input id="botonIA2" type="submit" class="btn btn btn-default btn-block" style="width:12em"/><br>
                   <?php }; 
                    if ($validacionB == 1) { ?>
                        <p id="recomendacionesv2" style="text-align:left;font-family:verdana;background:#ebf9fa;padding:1em;color:#000000"></p>
                        <button class="task-editar" id="btnrecomendaciones2" title="Editar" style="float:right"><span class="fa fa-pencil"></span></button>
                        <textarea type="text" id="recomendaciones2" class="form-control" rows="6" name="Texto" placeholder=""></textarea></p><br>
                        <input id="botonIB2" type="submit" class="btn btn btn-default btn-block" style="width:12em"/>
                        <br>   
                    <?php } ?>
            </form> 
            </div>  
        </div> 
        <div class="col-md-4" align="right">
            <table id="tablaresultados">
                <tr>
                    <td>
                        <button type="submit" id="export_all" name="login" class="nuevo" style="width:12em!important">Crear PDF</button><br><br>
                        <div style="text-align:center" id="content"></div>
                    </td>
                </tr>
                <!--<tr>
                    <td>
                        <button type="submit" name="login" class="nuevo" style="width:12em!important;border: 1px solid #666666!important;color:#666666">Guardar PDF</button>  
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="login" class="nuevo" style="width:12em!important;border: 1px solid #666666!important;color:#666666">Enviar PDF</button>
                    </td>
                </tr>-->
            </table>
        </div> 
    </div>  
</div>
<div class="container" style="text-align:center"><br>
<?php switch ($id) {
    case 1: ?>
        <ul class="pagination" >
        <li><a href="<?php echo RUTA_TOTAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li class="active"><a href="<?php echo RUTA__INTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li><a href="<?php echo RUTA__EXTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="<?php echo RUTA__ESTRES.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
    case 2: ?>
        <ul class="pagination" >
        <li><a href="<?php echo RUTA_TOTAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li class="active"><a href="<?php echo RUTA__INTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li><a href="<?php echo RUTA__EXTRALABORAL.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="<?php echo RUTA__ESTRES.'?xl4zyw6='.$id7.'#bl8ytm5' ?>" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
    default: ?>
    <ul class="pagination" >
        <li><a href="" style="border: 1px solid #333333" data-title="Total"><span class="fa fa-bar-chart"></span></a></li>
        <li><a href="" data-title="Intralaboral"><span class="fa fa-puzzle-piece"></span></a></li> 
        <li><a href="" data-title="Extralaboral"><span class="fa fa-home"></span></a></li> 
        <li><a href="" data-title="Estrés"><span class="fa fa-link"></span></a></li> 
    </ul>
    <?php break;
} ?>

</div>
<nav>
    <a href="#container" class="scroll"><i class="fa fa-angle-up"></i></a>
</nav>
<div class="container"><br>
    <div class="col-lg-4 col-lg-push-8" align="center">
        <p style="font-family:Narrow;color:#666666;font-size:20px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL &nbsp</span><a id="certificado" title="Certificado SSL" href="#costumModal4" style="padding-top:0px;padding-bottom:0" data-toggle="modal" target="_blank" aria-hidden="true"><img src="https://www.cedisalud.com.co/imagine/certificado.png" width="52" height="50"/></a></p>
    </div>
    <div class="col-lg-8 col-lg-pull-4">
        <span style="font-family:verdana;padding-left:3%;color:#333333!important">Diseño y desarrollo web:&nbsp<a href="https://www.perfilar.com.co" >PERFILAR</a></span><br> 
        <span style="font-family:verdana;padding-left:3%;color:#333333!important">Copyright © 2020 - Medellín (Colombia)</span>
    </div>
</div>
<div id="costumModal3" class="modal fullscreen-modal" data-easein="slideRightIn" data-backdrop="static"> 
    <div class="modal-dialog modal-lg" align="justify" style="border-radius:0px;background-color:#ffffff;z-index:9999;height:auto">
        <div class="modal-header">
            <button type="button" class="close" id="btn_delete" data-dismiss="modal"  name="modal4"><span style=" font-size:22px!important" class="fa fa-times"></button>
        </div>
        <div class="modal-body" style="text-align:center;padding:3em">
        <p style="font-family:verdanab;font-size:22px">LISTA DE CLIENTES</p>
        <table class="lista" style="width:100%"><br>
            <thead>
                <tr>
                    <th style="font-family:Verdanab">NIT</th>
                    <th>Razón Social</th>
                    <th>Contacto</th>
                    <th>Celular</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>    
            <tbody style="border:0!important;font-family:verdana;font-size:14px" id="admin01" align="center"></tbody>
        </table>
        </div>
        <div class="modal-footer">
            <br> 
        </div>
    </div>
</div>
<div id="costumModal4" class="modal" data-easein="flipBounceYIn" data-backdrop="static">  
    <div class="modal-dialog modal-title" style="box-shadow:0px 4px 3px rgba(0,0,0,.4)">
        <div class="modal-content" align="justify" style="border-radius:0px;background-color:#ffffff">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span style=" font-size:22px!important" class="fa fa-times"></button>
            </div>
            <div class="row" align="center" style="padding-left:10%;padding-right:10%"><br>
                <p style="line-height:1em;font-family:Narrow;color:#666666;font-size:30px;letter-spacing:1px;">Certificado <span style="color:#e7744f">SSL</span></p>
                <p style="color:#999999;font-size:16px">Secure Sockets Layer (Capa de Conexión Segura)</p><br><br><p align="justify" style="line-height:1.8em">Es un protocolo que proporciona seguridad e integridad de datos en la comunicación en redes como la Internet. Los datos enviados vía una conexión SSL están protegidos por un cifrado, un mecanismo que evita el espionaje y manipulación de los datos transmitidos. Tener un SSL en su sitio hace que los usuarios no tengan desconfianza de proporcionar su información confidencial en un sitio web, por ej. número de tarjeta de crédito u otros datos de pagos para sitios web de comercio electrónico, u otra información personal que se comparte al registrarse en servicios habituales en línea.</span></p><br>
            </div>
            <div class="modal-footer">
                <br>
            </div>
        </div>               
    </div>
</div>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script src="<?php echo RUTA_JS ?>zlib.js"></script>
<script src="<?php echo RUTA_JS ?>png.js"></script>
<script src="<?php echo RUTA_JS ?>addimage.js"></script>
<script src="<?php echo RUTA_JS ?>filesaver.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.min.js"></script>
<script src="<?php echo RUTA_JS ?>base64.js"></script>
<script src="<?php echo RUTA_JS ?>autotable.js"></script>
<script src="<?php echo RUTA_JS ?>default_vfs.js"></script>
<script src="<?php echo RUTA_JS ?>jspdf.customfonts.min.js"></script>
<script src="<?php echo RUTA_JS ?>bootstrap.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.min.js"></script>
<script src="<?php echo RUTA_JS ?>velocity.ui.min.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.flexslider.js"></script>
<script src="<?php echo RUTA_JS ?>main.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo RUTA_JS ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo RUTA_JS ?>common-scripts.js"></script>
<script src="<?php echo RUTA_JS ?>custom-file-input.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<script src="https://code.highcharts.com/11.0.0/highcharts.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/exporting.js"></script>
<script src="https://code.highcharts.com/11.0.0/modules/offline-exporting.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg2pdf.js/2.1.2/svg2pdf.umd.min.js"></script>
<script>
    $(".loader").fadeOut("slow");
    $(document).ready(function () {
        $('nav .scroll[href^="#"]').click(function () {
            var destino = $(this.hash);
            if (destino.length == 0) {
                destino = $('a[name="' + this.hash.substr(1) + '"]');
            }
            if (destino.length == 0) {
                destino = $('html');
            }
            $('html, body').animate({scrollTop: destino.offset().top}, 500);
            return false;
        });
    });
    $(".modal").each(function () {
        $(this).on("show.bs.modal", function () {
        var o = $(this).attr("data-easein");
        "shake" == o ? $(".modal-dialog").velocity("callout." + o) : "pulse" == o ? $(".modal-dialog").velocity("callout." + o) : "tada" == o ? $(".modal-dialog").velocity("callout." + o) : "flash" == o ? $(".modal-dialog").velocity("callout." + o) : "bounce" == o ? $(".modal-dialog").velocity("callout." + o) : "swing" == o ? $(".modal-dialog").velocity("callout." + o) : $(".modal-dialog").velocity("transition." + o)
        })
    });
    $("#btnobservaciones").click(function(e){
        e.preventDefault();
        $('#observacionesv').slideUp(1);
        $('#observaciones').slideDown(1);
        $('#botonIA1').slideDown(1);
        $('#botonIB1').slideDown(1);
        $('#btnobservaciones').slideUp(1);
    });
     $("#btnrecomendaciones").click(function(e){
        e.preventDefault();
        $('#recomendacionesv').slideUp(1);
        $('#recomendaciones').slideDown(1);
        $('#botonIA2').slideDown(1);
        $('#botonIB2').slideDown(1);
        $('#btnrecomendaciones').slideUp(1);
    });
     $("#btnobservaciones2").click(function(e){
        e.preventDefault();
        $('#observacionesv2').slideUp(1);
        $('#observaciones2').slideDown(1);
        $('#botonIA1').slideDown(1);
        $('#botonIB1').slideDown(1);
        $('#btnobservaciones2').slideUp(1);
    });
     $("#btnrecomendaciones2").click(function(e){
        e.preventDefault();
        $('#recomendacionesv2').slideUp(1);
        $('#recomendaciones2').slideDown(1);
        $('#botonIA2').slideDown(1);
        $('#botonIB2').slideDown(1);
        $('#btnrecomendaciones2').slideUp(1);
    });
    
    $(document).ready(function () {
        fetchTasks();
        $('#observaciones').hide();
        $('#recomendaciones').hide();
        $('#observaciones2').hide();
        $('#recomendaciones2').hide();
        $('#botonIA1').hide();
        $('#botonIB1').hide();
        $('#botonIA2').hide();
        $('#botonIB2').hide();
        //Escribir comentarios
        $(document).on('click', '#botonIA1', (e) => {
            e.preventDefault();
            const postData1 = {
                idIA1:'<?php echo $id_usuarioA  ?>',
                observaciones1:$('#observaciones').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData1, (response) => {
               fetchTasks();
               $('#observaciones').slideUp(1);
               $('#botonIA1').slideUp(1);
      	       $('#observacionesv').slideDown(1);
               $('#btnobservaciones').slideDown(1);
            });
        });
        $(document).on('click', '#botonIB1', (e) => {
            e.preventDefault();
            const postData2 = {
                idIB1:'<?php echo $id_usuarioB ?>',
                observaciones2:$('#observaciones2').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData2, (response) => {
               fetchTasks();
               $('#observaciones2').slideUp(1);
      	       $('#botonIB1').slideUp(1);
      	       $('#observacionesv2').slideDown(1);
               $('#btnobservaciones2').slideDown(1);
            });
        });
        //Escribir recomendaciones
        $(document).on('click', '#botonIA2', (e) => {
            e.preventDefault();
            const postData3 = {
                idIA2:'<?php echo $id_usuarioA  ?>',
                recomendaciones1: $('#recomendaciones').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData3, (response) => {
               fetchTasks();
               $('#recomendaciones').slideUp(1);
               $('#botonIA2').slideUp(1);
      	       $('#recomendacionesv').slideDown(1);
               $('#btnrecomendaciones').slideDown(1);
            });
        });
        $(document).on('click', '#botonIB2', (e) => {
            e.preventDefault();
            const postData4 = {
                idIB2:'<?php echo $id_usuarioB ?>',
                recomendaciones2: $('#recomendaciones2').val(),
            };
            const url = '../editarbdg.php';
             $.post(url,  postData4, (response) => {
                 fetchTasks();
                $('#recomendaciones2').slideUp(1);
      	        $('#botonIB2').slideUp(1);
      	        $('#recomendacionesv2').slideDown(1);
                $('#btnrecomendaciones2').slideDown(1);
            });
        });
        
    //Editar comentarios
    function fetchTasks() {    
        var idIA ='<?php echo $id_usuarioA ?>';
        var idIB ='<?php echo $id_usuarioB?>';
        $.ajax({
            type: "post",
            url: "../recobservaciones.php",
            data: "idIA=" + idIA,
            befforesed: function(){
    		},
            success: function (response) {
                const tasksIA2 = JSON.parse(response);
                let idIA2= '';
                let Fecha2= '';
                let Observaciones2 = '';
                let Recomendaciones2 = '';
                tasksIA2.forEach(taskIA2 => {
                        idIA2 += `${taskIA2.idIA2}`
                        Fecha2 += `${taskIA2.Fecha_registro2}`
                        Observaciones2 += `${taskIA2.Observaciones2}`
                        Recomendaciones2 += `${taskIA2.Recomendaciones2}`
                });    
                    var FechaA = (moment(Fecha2).format('DD/MM/YYYY'));
                    document.getElementById('fecha_A').innerHTML = FechaA;
                    var Observaciones3= Observaciones2.replace(/<br [/][>]/g, "");
                    document.getElementById('observaciones').innerHTML = Observaciones3;
                    document.getElementById('observacionesv').innerHTML = Observaciones2;
                    var Recomendaciones3= Recomendaciones2.replace(/<br [/][>]/g, "");
                    document.getElementById('recomendaciones').innerHTML = Recomendaciones3;
                    document.getElementById('recomendacionesv').innerHTML = Recomendaciones2;
            },   
        });
        $.ajax({
            type: "post",
            url: "../recobservacionesb.php",
            data: "idIB=" + idIB,
            befforesed: function(){
    		},
            success: function (response) {
                const tasksIB2 = JSON.parse(response);
                let idIb2= '';
                let Fecha3= '';
                let ObservacionesB2 = '';
                let RecomendacionesB2 = '';
                tasksIB2.forEach(taskIB2 => {
                        idIb2 += `${taskIB2.idIb2}`
                        Fecha3 += `${taskIB2.Fecha_registro3}`
                        ObservacionesB2 += `${taskIB2.Observacionesb2}`
                        RecomendacionesB2 += `${taskIB2.Recomendacionesb2}`
                });
                
                    var FechaB = (moment(Fecha3).format('DD/MM/YYYY'));
                    document.getElementById('fecha_B').innerHTML = FechaB;
                    var ObservacionesB3= ObservacionesB2.replace(/<br [/][>]/g, "");
                    document.getElementById('observaciones2').innerHTML = ObservacionesB3;
                    document.getElementById('observacionesv2').innerHTML = ObservacionesB2;
                    var RecomendacionesB3= RecomendacionesB2.replace(/<br [/][>]/g, "");
                    document.getElementById('recomendaciones2').innerHTML = RecomendacionesB3;
                    document.getElementById('recomendacionesv2').innerHTML = RecomendacionesB2;
            },   
        });
        }
    });
     function limpiar() {
        document.formI.reset();
        return false;
    }

    //Graficar en JSPDF con Canvas
    $(document).ready(function() {
        $('#export_all').click(function() {
            $('#content').html('<div class="loading"><img src="../imagine/descarga.gif" class="img_carga" width="50"/></div>');
            setTimeout(function(){
                pdf2();
            },1000);
        });
        (function(API){
            API.myText = function(txt, options, x, y) {
                options = options ||{};
                if( options.align == "center" ){
                    var fontSize = this.internal.getFontSize();
                    var pageWidth = this.internal.pageSize.width;
                    txtWidth = this.getStringUnitWidth(txt)*fontSize/this.internal.scaleFactor;
                    x = ( pageWidth - txtWidth ) / 2;
                }
                this.text(txt,x,y);
        };
        })(jsPDF.API);
         // Función auxiliar para convertir cualquier gráfica de Highcharts a Base64 usando Promesas
        function obtenerImagenGrafica(selector) {
            return new Promise(function(resolve, reject) {
                var chartObj = $(selector).highcharts();
                if (!chartObj) {
                    return reject("No se encontró la gráfica para el selector: " + selector);
                }
                var svgData = chartObj.getSVG({
                    chart: {
                        width: 400,
                        backgroundColor: '#ffffff'
                    }
                });
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                var img = new Image();
                img.onload = function() {
                    canvas.width = img.width;
                    canvas.height = img.height;
                    ctx.drawImage(img, 0, 0);
                    resolve(canvas.toDataURL('image/png'));
                };
                img.onerror = function() {
                    reject("Error al cargar la imagen SVG de la gráfica: " + selector);
                };
                img.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgData)));
            });
        }
        async function pdf2() {
            var doc = new jsPDF({orientation: 'p',unit: 'pt',format: 'letter',compress: true});
            var img = new Image()
            img.src = '../imagine/logo.png'
            doc.addImage(img, 'png', 200, 80, 220, 180)
            var img2 = new Image();
            img2.src = '../imagine/informe6.png';
            doc.addImage(img2, 'png', 45, 370, 530, 22);
            if ('<?php echo $Genero ?>' == 'Masculino') {
                var nombre = 'Sr. '+'<?php echo $Nombre." ".$Apellido1." ".$Apellido2 ?>';
            } else {
                var nombre = 'Sra. '+'<?php echo $Nombre. " ".$Apellido1." ".$Apellido2 ?>';
            }
            var columns = [""];
            var data = [[nombre]];
            doc.autoTable(columns, data, { 
                margin: { top: 580, right: 100, left: 100 },  
                styles: { 
                    cellWidth: 'wrap', 
                    valign: 'middle', 
                    halign: 'center', 
                    fillColor: false,
                    textColor: [0, 0, 0]  // COLOR NEGRO
                }, 
                columnStyles: { 
                    0: { 
                        lineWidth: 0, 
                        fontSize: 16, 
                        font: 'helvetica', 
                        fontStyle: 'bold',
                        textColor: [0, 0, 0]  // COLOR NEGRO TAMBIÉN EN columnStyles
                    } 
                } 
            });
            var columns = [""];
            var data = [["I"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 }, 
                styles: { cellWidth: 10, halign: 'center', fillColor: [255, 255, 255], cellPadding: 20 }, 
                drawRow: function (row, data) { row.height = 50; },
                columnStyles: { 
                    0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 
                    1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'bold', fillColor: [230, 230, 230], halign: 'right' } 
                }
            });  
           
            doc.addPage();

            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(60, 40, nombre);
            
            var f = new Date();
            var f2 = (f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
            doc.text(400, 40, "Fecha de elaboración:  " + f2);
            doc.setLineWidth(3); 
            doc.setDrawColor(204, 204, 204);
            doc.line(0, 50, 650, 50);
            
          // DATOS - SIN REMITIDO
        var data = [
            ["N° de identificación:", "<?php echo $Cedula ?>"],
            ["Cargo:", "<?php echo $Cargo ?>"],
            ["Departamento o sección:", "<?php echo $Seccion ?>"],
            ["<?php echo $etiqueta ?>", "<?php echo $dato ?>"],
            ["Género:", "<?php echo $Genero ?>"],
            ["Nombre de la empresa:", "<?php echo $Empresa ?>"],
            ["Fecha de aplicación del cuestionario:", "<?php echo $newDate ?>"]
        ];
        
        // COLUMNAS VACÍAS
        var columns = ["", ""];
        
        // GENERAR TABLA
        doc.autoTable(columns, data, {
            margin: { top: 85, right: 45, left: 45, bottom: 20 },
            
            styles: {
                overflow: 'linebreak',
                halign: 'left',
                valign: 'middle',
                fontSize: 10,
                textColor: [50, 50, 50],
                lineColor: [180, 180, 180],
                lineWidth: 0.5,
                cellPadding: 8
            },
            
            // ENCABEZADO BLANCO QUE CUBRE LA PRIMERA FILA
            headStyles: {
                fillColor: [255, 255, 255],    // Fondo blanco
                textColor: [255, 255, 255],    // Texto blanco (invisible)
                fontSize: 0.1,
                fontStyle: 'normal',
                lineColor: [255, 255, 255],    // Borde blanco (invisible)
                lineWidth: 0,
                halign: 'left',
                valign: 'middle'
            },
            
            bodyStyles: {
                fontSize: 10,
                textColor: [40, 40, 40],
                lineColor: [180, 180, 180],
                lineWidth: 0.5
            },
            
            columnStyles: {
                0: {
                    fontStyle: 'bold',
                    fillColor: [243, 253, 232],
                    cellWidth: 45,
                    textColor: [0, 0, 0],
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                },
                1: {
                    fillColor: [255, 255, 255],
                    cellWidth: 110,
                    textColor: [30, 30, 30],
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                }
            },
            
            alternateRowStyles: {
                fillColor: [248, 248, 248],
                lineColor: [180, 180, 180],
                lineWidth: 0.5
            },
            
            tableLineColor: [180, 180, 180],
            tableLineWidth: 0.5,
            theme: 'plain',
            cellPadding: 8,
            showHead: false
        });
        
        // Línea decorativa
        doc.setDrawColor(243, 253, 232);
        doc.setLineWidth(2);
        doc.line(50, 55, 200, 55);
        
        // LÍNEA BLANCA EN LA POSICIÓN Y = 70
        doc.setFillColor(255, 255, 255);
        doc.rect(0, 84, doc.internal.pageSize.width, 20, 'F');
    
        var esUsuarioA = ('<?php echo $id_usuarioA ?>' != "");
        var selector1 = esUsuarioA ? '.EGA' : '.EGB';
        var selector2 = esUsuarioA ? '.G2' : '.G3';
        var selector3 = '.E';
        var selector4 = esUsuarioA ? '.ES' : '.ES2';
            
        try {
            // 2. GRÁFICA 2: INTRALABORAL
            doc.setTextColor(77, 77, 77);
            doc.setFontSize(12);
            doc.text(100, 310, 'INTRALABORAL - ' + '<?php echo $formaIN ?>');
            
            if ('<?php echo $id_usuarioA ?>' != "") {
                var dataURL2 = await obtenerImagenGrafica('.G2');
                doc.addImage(dataURL2, 'PNG', 314, 295, 130, 22);
                doc.text(446, 310, '<?php echo $G2 ?>');
                doc.setTextColor(<?php echo $G2c ?>);
                doc.text(485, 310, '<?php echo $G2t ?>');
            } else {
                var dataURL2 = await obtenerImagenGrafica('.G3');
                doc.addImage(dataURL2, 'PNG', 314, 295, 130, 22);
                doc.text(446, 310, '<?php echo $G3 ?>');
                doc.setTextColor(<?php echo $G3c ?>);
                doc.text(485, 310, '<?php echo $G3t ?>');
            }
            //Encabezado puntaje
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(135, 350, 'DOMINIOS -'); 
            doc.setFontType("italic");
            doc.setTextColor(51, 51, 51);            
            doc.text(195, 350, 'Dimensiones'); 
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0);
            doc.text(370, 350, 'PUNTAJE'); 
            doc.text(500, 350, 'NIVEL'); 
            //Características del liderazgo 
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 374, 'Características del liderazgo');
            if ('<?php echo $id_usuarioA ?>' != "") {
                var dataURL2 = await obtenerImagenGrafica('.CL2');
                doc.addImage(dataURL2, 'PNG', 314, 361, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 374, '<?php echo $CL2?>');
                doc.setTextColor(<?php echo $CL2c ?>);
                doc.text(485, 374, '<?php echo $CL2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.CL3');
                doc.addImage(dataURL2, 'PNG', 314, 361, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 374, '<?php echo $CL3?>');
                doc.setTextColor(<?php echo $CL3c ?>);
                doc.text(485, 374, '<?php echo $CL3t ?>');
            }; 
            
            //Relaciones sociales en el trabajo
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 398, 'Relaciones sociales en el trabajo');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.RS2');
                doc.addImage(dataURL2, 'PNG', 314, 385, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 398, '<?php echo $RS2?>');
                doc.setTextColor(<?php echo $RS2c ?>);
                doc.text(485, 398, '<?php echo $RS2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.RS3');
                doc.addImage(dataURL2, 'PNG', 314, 385, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 398, '<?php echo $RS3?>');
                doc.setTextColor(<?php echo $RS3c ?>);
                doc.text(485, 398, '<?php echo $RS3t ?>');
            };
            
            //Retroalimentación del desempeño
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 422, 'Retroalimentación del desempeño');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.RD2');
                doc.addImage(dataURL2, 'PNG', 314, 409, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 422, '<?php echo $RD2?>');
                doc.setTextColor(<?php echo $RD2c ?>);
                doc.text(485, 422, '<?php echo $RD2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.RD3');
                doc.addImage(dataURL2, 'PNG', 314, 409, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 422, '<?php echo $RD3?>');
                doc.setTextColor(<?php echo $RD3c ?>);
                doc.text(485, 422, '<?php echo $RD3t ?>');
            };
            
            //Relación con los colaboradores
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 446, 'Relación con los colaboradores');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                if ('<?php echo $RC2 ?>' == 0) {  
                    doc.setTextColor(100);
                    doc.text(320, 446, 'No Registra');
                    doc.text(485, 446, 'No Registra'); 
                } else {
                    var dataURL2 = await obtenerImagenGrafica('.RC2');
                    doc.addImage(dataURL2, 'PNG', 314, 433, 130, 22);
                    doc.setTextColor(0, 0, 0);
                    doc.text(446, 446, '<?php echo $RC2?>');
                    doc.setTextColor(<?php echo $RC2c ?>);
                    doc.text(485, 446, '<?php echo $RC2t ?>');
                }
            } else { 
                doc.setFontType("bold");
                doc.setTextColor(100);
                doc.text(320, 446, 'No Aplica');
                doc.text(485, 446, 'No Aplica');
            };
            
            //DOMINIO Liderazgo y relaciones sociales en el trabajo  
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(64, 470, 'LIDERAZGO Y RELACIONES SOCIALES');
            var selectorLR = '.LR2';
            var dataURL_LR = await obtenerImagenGrafica(selectorLR);
            doc.addImage(dataURL_LR, 'PNG', 300, 257, 130, 18);
            
            if ("<?php echo $validacionA ?>" > 0) {
                doc.text(465, 271, '<?php echo $LR2 ?>');
                doc.setTextColor(<?php echo $LR2c ?>);
                doc.text(505, 270, '<?php echo $LR2t ?>');
            } else {
                doc.text(465, 270, '<?php echo $LR2 ?>');
                doc.setTextColor(<?php echo $LR2c ?>);
                doc.text(505, 270, '<?php echo $LR2t ?>');
            }
            
            //Claridad de rol
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 494, 'Claridad de rol');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.CR2');
                doc.addImage(dataURL2, 'PNG', 314, 481, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 494, '<?php echo $CR2?>');
                doc.setTextColor(<?php echo $CR2c ?>);
                doc.text(485, 494, '<?php echo $CR2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.CR3');
                doc.addImage(dataURL2, 'PNG', 314, 481, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 494, '<?php echo $CR3?>');
                doc.setTextColor(<?php echo $CR3c ?>);
                doc.text(485, 494, '<?php echo $CR3t ?>');
            };
            
            //Capacitación
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 518, 'Capacitación');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.C2');
                doc.addImage(dataURL2, 'PNG', 314, 505, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 518, '<?php echo $C2?>');
                doc.setTextColor(<?php echo $C2c ?>);
                doc.text(485, 518, '<?php echo $C2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.C3');
                doc.addImage(dataURL2, 'PNG', 314, 505, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 518, '<?php echo $C3?>');
                doc.setTextColor(<?php echo $C3c ?>);
                doc.text(485, 518, '<?php echo $C3t ?>');
            };
            
            //Participación y manejo del cambio
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 542, 'Participación y manejo del cambio');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.PM2');
                doc.addImage(dataURL2, 'PNG', 314, 529, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 542, '<?php echo $PM2?>');
                doc.setTextColor(<?php echo $PM2c ?>);
                doc.text(485, 542, '<?php echo $PM2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.PM3');
                doc.addImage(dataURL2, 'PNG', 314, 529, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 542, '<?php echo $PM3?>');
                doc.setTextColor(<?php echo $PM3c ?>);
                doc.text(485, 542, '<?php echo $PM3t ?>');
            };
            
            //Oportunidades para el uso y desarrollo de habilidades y conocimientos
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 561, 'Oportunidades para el uso y desarrollo de habilidades \ny conocimientos');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.PD2');
                doc.addImage(dataURL2, 'PNG', 314, 553, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 566, '<?php echo $PD2?>');
                doc.setTextColor(<?php echo $PD2c ?>);
                doc.text(485, 566, '<?php echo $PD2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.PD3');
                doc.addImage(dataURL2, 'PNG', 314, 553, 130, 22);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(446, 566, '<?php echo $PD3?>');
                doc.setTextColor(<?php echo $PD3c ?>);
                doc.text(485, 566, '<?php echo $PD3t ?>');
            };
            
            //Control y autonomía sobre el trabajo
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 590, 'Control y autonomía sobre el trabajo');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.CA2');
                doc.addImage(dataURL2, 'PNG', 314, 577, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 590, '<?php echo $CA2?>');
                doc.setTextColor(<?php echo $CA2c ?>);
                doc.text(485, 590, '<?php echo $CA2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.CA3');
                doc.addImage(dataURL2, 'PNG', 314, 577, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 590, '<?php echo $CA3?>');
                doc.setTextColor(<?php echo $CA3c ?>);
                doc.text(485, 590, '<?php echo $CA3t ?>');
            };
            
            //DOMINIO Control sobre el trabajo 
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(64, 614, 'CONTROL SOBRE EL TRABAJO');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.CT2');
                doc.addImage(dataURL2, 'PNG', 314, 601, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 614, '<?php echo $CT2?>');
                doc.setTextColor(<?php echo $CT2c ?>);
                doc.text(485, 614, '<?php echo $CT2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.CT3');
                doc.addImage(dataURL2, 'PNG', 314, 601, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 614, '<?php echo $CT3?>');
                doc.setTextColor(<?php echo $CT3c ?>);
                doc.text(485, 614, '<?php echo $CT3t ?>');  
            };
            
            //Demandas ambientales y de esfuerzo físico
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 637, 'Demandas ambientales y de esfuerzo físico');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.DAE2');
                doc.addImage(dataURL2, 'PNG', 314, 625, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 637, '<?php echo $DAE2?>');
                doc.setTextColor(<?php echo $DAE2c ?>);
                doc.text(485, 637, '<?php echo $DAE2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.DAE3');
                doc.addImage(dataURL2, 'PNG', 314, 625, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 637, '<?php echo $DAE3?>');
                doc.setTextColor(<?php echo $DAE3c ?>);
                doc.text(485, 637, '<?php echo $DAE3t ?>');
            };
            
            //Demandas emocionales
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 661, 'Demandas emocionales');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                if ('<?php echo $DE2 ?>' == 0) {  
                    doc.setTextColor(100);
                    doc.text(320, 661, 'No Registra');
                    doc.text(485, 661, 'No Registra'); 
                } else {
                    var dataURL2 = await obtenerImagenGrafica('.DE2');
                    doc.addImage(dataURL2, 'PNG', 314, 649, 130, 22);
                    doc.setTextColor(0, 0, 0);
                    doc.text(446, 661, '<?php echo $DE2?>');
                    doc.setTextColor(<?php echo $DE2c ?>);
                    doc.text(485, 661, '<?php echo $DE2t ?>');
                }  
            } else { 
                if ('<?php echo $DE3 ?>' == 0) {  
                    doc.setTextColor(100);
                    doc.text(320, 661, 'No Registra');
                    doc.text(485, 661, 'No Registra'); 
                } else {
                    var dataURL2 = await obtenerImagenGrafica('.DE3');
                    doc.addImage(dataURL2, 'PNG', 314, 649, 130, 22);
                    doc.setTextColor(0, 0, 0);
                    doc.text(446, 661, '<?php echo $DE3?>');
                    doc.setTextColor(<?php echo $DE3c ?>);
                    doc.text(485, 661, '<?php echo $DE3t ?>');
                }
            };
            
            //Demandas cuantitativas
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 685, 'Demandas cuantitativas');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.DC2');
                doc.addImage(dataURL2, 'PNG', 314, 673, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 685, '<?php echo $DC2?>');
                doc.setTextColor(<?php echo $DC2c ?>);
                doc.text(485, 685, '<?php echo $DC2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.DC3');
                doc.addImage(dataURL2, 'PNG', 314, 673, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 685, '<?php echo $DC3?>');
                doc.setTextColor(<?php echo $DC3c ?>);
                doc.text(485, 685, '<?php echo $DC3t ?>');
            };
            
            //Influencia del trabajo sobre el entorno extralaboral
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 709, 'Influencia del trabajo sobre el entorno extralaboral');
            if ('<?php echo $id_usuarioA ?>' != "") { 
                var dataURL2 = await obtenerImagenGrafica('.IT2');
                doc.addImage(dataURL2, 'PNG', 314, 697, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 709, '<?php echo $IT2?>');
                doc.setTextColor(<?php echo $IT2c ?>);
                doc.text(485, 709, '<?php echo $IT2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.IT3');
                doc.addImage(dataURL2, 'PNG', 314, 697, 130, 22);
                doc.setTextColor(0, 0, 0);
                doc.text(446, 709, '<?php echo $IT3?>');
                doc.setTextColor(<?php echo $IT3c ?>);
                doc.text(485, 709, '<?php echo $IT3t ?>');
            };
            
            var columns = [""];
            var data = [["1 de 3"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 },
                styles: { cellWidth: 10, halign: 'center', fillColor: false, cellPadding: 20 },
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });
            
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0); 
            doc.myText('DATOS GENERALES DEL TRABAJADOR', { align: "center" }, 0, 90);
            doc.myText('RESULTADOS DE LOS CUESTIONARIOS', { align: "center" }, 0, 280);
            
            doc.addPage();
            
            doc.setFont("helvetica");
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(102, 102, 102);
            doc.text(60, 40, nombre);
            doc.text(400, 40, "Fecha de elaboración:  " + f2);
            doc.setLineWidth(3); 
            doc.setDrawColor(204, 204, 204);
            doc.line(0, 50, 650, 50);
            
            //Exigencias de responsabilidad del cargo
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 85, 'Exigencias de responsabilidad del cargo');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.ER2');
                doc.addImage(dataURL2, 'PNG', 314, 72, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 85, '<?php echo $ER2?>');
                doc.setTextColor(<?php echo $ER2c ?>);
                doc.text(490, 85, '<?php echo $ER2t ?>');
            } else { 
                doc.setFontType("bold");
                doc.setTextColor(100);
                doc.text(320, 85, 'No Evalúa');
                doc.text(490, 85, 'No Evalúa');       
            };
            
            //Demandas de carga mental
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 109, 'Demandas de carga mental');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.DCM2');
                doc.addImage(dataURL2, 'PNG', 314, 96, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 109, '<?php echo $DCM2?>');
                doc.setTextColor(<?php echo $DCM2c ?>);
                doc.text(490, 109, '<?php echo $DCM2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.DCM3');
                doc.addImage(dataURL2, 'PNG', 314, 96, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 109, '<?php echo $DCM3?>');
                doc.setTextColor(<?php echo $DCM3c ?>);
                doc.text(490, 109, '<?php echo $DCM3t ?>');       
            }; 
            
            //Consistencia del rol
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 133, 'Consistencia del rol');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.CRL2');
                doc.addImage(dataURL2, 'PNG', 314, 120, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 133, '<?php echo $CRL2?>');
                doc.setTextColor(<?php echo $CRL2c ?>);
                doc.text(490, 133, '<?php echo $CRL2t ?>');
            } else { 
                doc.setFontType("bold");
                doc.setTextColor(100);
                doc.text(320, 133, 'No Evalúa');
                doc.text(490, 133, 'No Evalúa');       
            };  
            
            //Demandas de la jornada de trabajo
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 157, 'Demandas de la jornada de trabajo');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.DJT2');
                doc.addImage(dataURL2, 'PNG', 314, 144, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 157, '<?php echo $DJT2?>');
                doc.setTextColor(<?php echo $DJT2c ?>);
                doc.text(490, 157, '<?php echo $DJT2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.DJT3');
                doc.addImage(dataURL2, 'PNG', 314, 144, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 157, '<?php echo $DJT3?>');
                doc.setTextColor(<?php echo $DJT3c ?>);
                doc.text(490, 157, '<?php echo $DJT3t ?>');       
            }; 
            
            //DOMINIO Demandas del trabajo 
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(64, 181, 'DEMANDAS DEL TRABAJO');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.DT2');
                doc.addImage(dataURL2, 'PNG', 314, 168, 130, 18);
                doc.setTextColor(0, 0, 0);
                doc.text(450, 181, '<?php echo $DT2?>');
                doc.setTextColor(<?php echo $DT2c ?>);
                doc.text(490, 181, '<?php echo $DT2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.DT3');
                doc.addImage(dataURL2, 'PNG', 314, 168, 130, 18);
                doc.setTextColor(0, 0, 0);
                doc.text(450, 181, '<?php echo $DT3?>');
                doc.setTextColor(<?php echo $DT3c ?>);
                doc.text(490, 181, '<?php echo $DT3t ?>');  
            };
            
            //Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 199, 'Recompensas derivadas de la pertenencia a la \norganización y del trabajo que se realiza');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.RP2');
                doc.addImage(dataURL2, 'PNG', 314, 192, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 205, '<?php echo $RP2?>');
                doc.setTextColor(<?php echo $RP2c ?>);
                doc.text(490, 205, '<?php echo $RP2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.RP3');
                doc.addImage(dataURL2, 'PNG', 314, 192, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 205, '<?php echo $RP3?>');
                doc.setTextColor(<?php echo $RP3c ?>);
                doc.text(490, 205, '<?php echo $RP3t ?>');       
            }; 
            
            //Reconocimiento y compensación
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(51, 51, 51);
            doc.text(64, 229, 'Reconocimiento y compensación');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.RYC2');
                doc.addImage(dataURL2, 'PNG', 314, 216, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 229, '<?php echo $RYC2?>');
                doc.setTextColor(<?php echo $RYC2c ?>);
                doc.text(490, 229, '<?php echo $RYC2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.RYC3');
                doc.addImage(dataURL2, 'PNG', 314, 216, 130, 18);
                doc.setFontType("bold");
                doc.setTextColor(0, 0, 0);
                doc.text(450, 229, '<?php echo $RYC3?>');
                doc.setTextColor(<?php echo $RYC3c ?>);
                doc.text(490, 229, '<?php echo $RYC3t ?>');       
            };   
            
            //DOMINIO Recompensas 
            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(10);
            doc.setTextColor(0, 0, 0);
            doc.text(64, 253, 'RECOMPENSAS');
            if (<?php echo $validacionA ?> > 0) { 
                var dataURL2 = await obtenerImagenGrafica('.R2');
                doc.addImage(dataURL2, 'PNG', 314, 240, 130, 18);
                doc.setTextColor(0, 0, 0);
                doc.text(450, 253, '<?php echo $R2?>');
                doc.setTextColor(<?php echo $R2c ?>);
                doc.text(490, 253, '<?php echo $R2t ?>');
            } else { 
                var dataURL2 = await obtenerImagenGrafica('.R3');
                doc.addImage(dataURL2, 'PNG', 314, 240, 130, 18);
                doc.setTextColor(0, 0, 0);
                doc.text(450, 253, '<?php echo $R3?>');
                doc.setTextColor(<?php echo $R3c ?>);
                doc.text(490, 253, '<?php echo $R3t ?>');  
            }; 

            var columns = [""];
            var data = [["2 de 3"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 },
                styles: { cellWidth: 10, halign: 'center', fillColor: false, cellPadding: 20 },
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });
            doc.addPage();
            
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(102, 102, 102);
            doc.text(60, 40, nombre);
            doc.text(400, 40, "Fecha de elaboración:  " + f2);
            doc.setLineWidth(3); 
            doc.setDrawColor(204, 204, 204);
            doc.line(0, 50, 650, 50);
            var Profesional = document.getElementById("Profesional").innerHTML;
            var Tarjeta= document.getElementById("Tarjeta").innerHTML;
            var Licencia= document.getElementById("Licencia").innerHTML;
            var Expedicion= document.getElementById("Expedicion").innerHTML;
            var Archivo2 = document.getElementById("Archivo2").innerHTML;
            // DATOS - SIN REMITIDO (como la primera tabla)
            var data = [
                ["Empresa:", 'SG Integrados'],
                ["Teléfono:", "4446604"],
                ["Psicologo Especialista:", Profesional],
                ["N° Tarjeta Profesional:", Tarjeta],
                ["N° Licencia en SST:", Licencia],
                ["Fecha de expedición de Licencia:", Expedicion]
            ];
            
            // COLUMNAS VACÍAS
            var columns = ["", ""];
            
            // GENERAR TABLA - IDÉNTICA A LA PRIMERA
            doc.autoTable(columns, data, {
                margin: { top: 85, right: 45, left: 45, bottom: 20 },  // MISMO MARGEN
                
                styles: {
                    overflow: 'linebreak',
                    halign: 'left',
                    valign: 'middle',
                    fontSize: 10,
                    textColor: [50, 50, 50],
                    lineColor: [180, 180, 180],     // MISMO COLOR DE BORDE
                    lineWidth: 0.5,
                    cellPadding: 8
                },
                
                // ENCABEZADO BLANCO QUE CUBRE LA PRIMERA FILA
                headStyles: {
                    fillColor: [255, 255, 255],    // Fondo blanco
                    textColor: [255, 255, 255],    // Texto blanco (invisible)
                    fontSize: 0.1,
                    fontStyle: 'normal',
                    lineColor: [255, 255, 255],    // Borde blanco (invisible)
                    lineWidth: 0,
                    halign: 'left',
                    valign: 'middle'
                },
                
                bodyStyles: {
                    fontSize: 10,
                    textColor: [40, 40, 40],
                    lineColor: [180, 180, 180],     // MISMO COLOR DE BORDE
                    lineWidth: 0.5
                },
                
                columnStyles: {
                    0: {
                        fontStyle: 'bold',
                        fillColor: [243, 253, 232], // #f3fde8 (VERDE)
                        cellWidth: 45,
                        textColor: [0, 0, 0],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    },
                    1: {
                        fillColor: [255, 255, 255], // FONDO BLANCO
                        cellWidth: 110,
                        textColor: [30, 30, 30],
                        lineColor: [180, 180, 180],
                        lineWidth: 0.5
                    }
                },
                
                alternateRowStyles: {
                    fillColor: [248, 248, 248],     // FILAS ALTERNADAS GRIS CLARO
                    lineColor: [180, 180, 180],
                    lineWidth: 0.5
                },
                
                tableLineColor: [180, 180, 180],    // MISMO COLOR DE BORDE
                tableLineWidth: 0.5,
                theme: 'plain',
                cellPadding: 8,
                showHead: false
            });
            
            // Línea decorativa (como la primera tabla)
            doc.setDrawColor(243, 253, 232);
            doc.setLineWidth(2);
            doc.line(50, 55, 200, 55);

            // LÍNEA BLANCA EN LA POSICIÓN Y = 70
            doc.setFillColor(255, 255, 255);
            doc.rect(0, 84, doc.internal.pageSize.width, 20, 'F');
            doc.setFont("helvetica");
            doc.setFontSize(12);
            doc.setFontType("bold");
            doc.setTextColor(0, 0, 0); 
            doc.myText('DATOS DEL EVALUADOR', { align: "center" }, 0, 90);
            function getInnerText(id) {
                var el = document.getElementById(id);
                return el ? el.innerHTML : "";
            }
            var observacionespdf   = getInnerText("observacionesv").replace(/<br>/g, "\n");
            var observacionespdf2  = observacionespdf; // ya viene con los <br> reemplazados
            var recomendacionespdf  = getInnerText("recomendacionesv").replace(/<br>/g, "\n");
            var recomendacionespdf2 = recomendacionespdf; // ya viene con los <br> reemplazados
            var Fecha_registro = getInnerText("fecha_A");
            var columns = [""];
            var data = [
            ['OBSERVACIONES Y COMENTARIOS DEL EVALUADOR'],
            [observacionespdf2 +'\n'],
            ['RECOMENDACIONES PARTICULARES'],                     
            [recomendacionespdf2]];
            doc.autoTable(columns,data, { 
            margin:{top: 250, right: 60, left: 60 },  
            styles: {font: 'helvetica', fontStyle:'bold',overflow: 'linebreak', overflowColumns: 'linebreak',lineWidth:0, textColor:[0,0,0], fillColor: false}, 
            bodyStyles:{textColor:[0,0,0], fontStyle:'normal', fontSize:10}, 
            alternateRowStyles:{ textColor:[0,0,0], lineWidth:0, fontStyle:'bold',fontSize:11},
            //drawRow: function (row, data) {row.height = 20}
            });
            var img = new Image();
            img.src = '../admin/' + Archivo2;
            // Agregar imagen con mejor posicionamiento y tamaño
            doc.addImage(img, 'png', 270, 567, 80, 80);
            // Línea decorativa antes de la firma
            doc.setDrawColor(74, 86, 112);
            doc.setLineWidth(0.5);
            doc.line(200, 625, 420, 625);
            // Estilo para el nombre del psicólogo
            doc.setFontType("bolditalic");
            doc.setFontSize(14);
            doc.setTextColor(40, 50, 80);
            doc.myText('Jeovani Alexánder Durango Sánchez', { align: "center" }, 0, 645);
            // Estilo para el título profesional
            doc.setFontType("italic");
            doc.setFontSize(11);
            doc.setTextColor(74, 86, 112);
            doc.myText('Psicólogo con T.P. N° 174510', { align: "center" }, 0, 660);
            // Estilo para la especialización
            doc.setFontType("italic");
            doc.setFontSize(10);
            doc.setTextColor(100, 100, 120);
            doc.myText('Especialista en Gerencia en Riesgos Laborales, SST', { align: "center" }, 0, 673);
            // Línea decorativa inferior
            doc.setDrawColor(200, 200, 210);
            doc.setLineWidth(0.3);
            doc.line(230, 685, 390, 685);
            var columns = [""];
            var data = [["4 de 4"]];
            doc.autoTable(columns,data,
            {margin:{top: 720, right: 0, left: 0, bottom:0 }, styles: {cellWidth:10, halign: 'center', fillColor: [255, 255, 255], cellPadding:20}, 
            drawRow: function (row, data) {row.height = 50},
            columnStyles: {0: {textColor:[0,0,0], fontSize:10, font: 'helvetica', fontStyle:'bold', lineColor:[103, 142, 152], lineWidth:0, fillColor: [230, 230, 230]}, 1: {textColor:[51,51,51], fontSize:10, fontStyle:'italic',fillColor: [230, 230, 230],halign: 'right'}}});  
       
            var columns = [""];
            var data = [["3 de 3"]];
            doc.autoTable(columns, data, {
                margin: { top: 720, right: 0, left: 0, bottom: 0 },
                styles: { cellWidth: 10, halign: 'center', fillColor: false, cellPadding: 20 },
                drawRow: function (row, data) { row.height = 50 },
                columnStyles: { 0: { textColor: [0, 0, 0], fontSize: 10, font: 'helvetica', fontStyle: 'bold', lineColor: [103, 142, 152], lineWidth: 0, fillColor: [230, 230, 230] }, 1: { textColor: [51, 51, 51], fontSize: 10, fontStyle: 'italic', fillColor: [230, 230, 230], halign: 'right' } }
            });

        

            // Guardar PDF final
            doc.save('<?php echo $Nombre ?>_' + '<?php echo $Apellido1 ?>' + '_TOTAL.pdf');
        } catch (error) {
            console.error("Error al generar las gráficas en el PDF:", error);
        }    
            
        };
    });
    $(document).ready(function() {
    if('<?php echo $id_usuarioA ?>') {
         $('.CL3').hide();
         $('.RS3').hide();
         $('.RD3').hide();
         $('.RC3').hide();
         $('.LR3').hide();
         $('.CR3').hide();
         $('.C3').hide();
         $('.PM3').hide();
         $('.PD3').hide();
         $('.CA3').hide();
         $('.CT3').hide();
         $('.DAE3').hide();
         $('.DE3').hide();
         $('.DC3').hide();
         $('.IT3').hide();
         $('.ER3').hide();
         $('.DCM3').hide();
         $('.CRL3').hide();
         $('.DCM3').hide();
         $('.CRL3').hide();
         $('.DJT3').hide();
         $('.DT3').hide();
         $('.RP3').hide();
         $('.RYC3').hide();
         $('.R3').hide();
         $('.G3').hide();
         $('#formaB').hide();
    };
     if('<?php echo $id_usuarioB ?>') {
         $('.CL2').hide();
         $('.RS2').hide();
         $('.RD2').hide();
         $('.RC2').hide();
         $('.LR2').hide();
         $('.CR2').hide();
         $('.C2').hide();
         $('.PM2').hide();
         $('.PD2').hide();
         $('.CA2').hide();
         $('.CT2').hide();
         $('.DAE2').hide();
         $('.DE2').hide();
         $('.DC2').hide();
         $('.IT2').hide();
         $('.ER2').hide();
         $('.DCM2').hide();
         $('.CRL2').hide();
         $('.DCM2').hide();
         $('.CRL2').hide();
         $('.DJT2').hide();
         $('.DT2').hide();
         $('.RP2').hide();
         $('.RYC2').hide();
         $('.R2').hide();
         $('.G2').hide();
         $('#formaA').hide();
        }
    });
//GENERAL
//INTRALABORAL A
$(function () {
    var chart;
    var inputG2 = [<?php echo $G2 ?>],
    dataG2 = [],
    categories = [''];

    $.each(inputG2, function(index, value) {
        var color;
        var originalColor;
        if (value >= 38.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.9) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 19.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        dataG2.push({
            y: value,
            color: color,
            url: "https://www.sgintegrados.net",
            borderRadius: 16
        });
    });

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "G2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: dataG2
            }]
        });
    });
});
//INTRALABORAL B
$(function () {
    var chart;
    var inputG3 = [<?php echo $G3 ?>],
    dataG3 = [],
    categories = [''];

    $.each(inputG3, function(index, value) {
        var color;
        var originalColor;
        if (value >= 38.8) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.3) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 26.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 20.7) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        dataG3.push({
            y: value,
            color: color,
            url: "https://www.sgintegrados.net",
            borderRadius: 16
        });
    });

    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "G3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: dataG3
            }]
        });
    });
});
//GRAFICAS DOMINIOS Y DIMENSIONES
// Características del liderazgo (CL2)
$(function () {
    var chart;
    var input1 = [<?php echo $CL2 ?>],
    data1 = [],
    categories = [''];
    $.each(input1, function(index, value){
    var color;
    var originalColor;
    if (value >= 46.3) {
        originalColor = "#9d3715";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 30.9) {
        originalColor = "#e7744f";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 15.5) {
        originalColor = "#666666";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 3.9) {
        originalColor = "#ace600";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
            ]
        };
    } else if (value >= 0) {
        originalColor = "#394d00";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
            ]
        };
    }
    data1.push({
        y: value,
        color: color,
        url: "https://www.perfilar.com.co"
    });
    });
    $(document).ready(function() {
    chart = new Highcharts.Chart({
    chart: {
        renderTo: "CL2",
        type: "bar",
        backgroundColor: false,
        height: 36,
        padding: -1,
        margin: -1
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: categories,
    },
    yAxis: {
        title: {
          text: ''
        },
    min: 0, minRange: 100, maxPadding: 0, 
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
            stacking: 'normal',
            pointWidth: 30,
            borderRadius: 16
        }
    },
    series: [{
    name: '',
    data: data1
    }]
    });
    });
});

// Características del liderazgo (CL3)
$(function () {
    var chart;
    var input31 = [<?php echo $CL3 ?>],
    data31 = [],
    categories = [''];
    $.each(input31, function(index, value){
    var color;
    var originalColor;
    if (value >= 38.6) {
        originalColor = "#9d3715";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 25.1) {
        originalColor = "#e7744f";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 13.6) {
        originalColor = "#666666";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
            ]
        };
    } else if (value >= 3.9) {
        originalColor = "#ace600";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
            ]
        };
    } else if (value >= 0) {
        originalColor = "#394d00";
        color = {
            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
            stops: [
                [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
            ]
        };
    }
    data31.push({
        y: value,
        color: color,
        url: "https://www.perfilar.com.co"
    });
    });
    $(document).ready(function() {
    chart = new Highcharts.Chart({
    chart: {
        renderTo: "CL3",
        type: "bar",
        backgroundColor: false,
        height: 36,
        padding: -1,
        margin: -1
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: categories,
    },
    yAxis: {
        title: {
          text: ''
        },
    min: 0, minRange: 100, maxPadding: 0, 
    },
    legend: {
        enabled: false,
    },
    credits: {
        enabled: false
    },
    exporting: { 
        enabled: false 
    },
    plotOptions: {
        series: {
            stacking: 'normal',
            pointWidth: 30,
            borderRadius: 16
        }
    },
    series: [{
    name: '',
    data: data31
    }]
    });
    });
});
//Relaciones sociales en el trabajo  
$(function () {
    var chart;
    var input2 = [<?php echo $RS2 ?>],
    data2 = [],
    categories = [''];
    $.each(input2, function(index, value){
        var color;
        var originalColor;
        if (value >= 37.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.2) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 5.5) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data2.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RS2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data2
            }]
        });
    });
});
//Relaciones sociales en el trabajo (RS3)
$(function () {
    var chart;
    var input32 = [<?php echo $RS3 ?>],
    data32 = [],
    categories = [''];
    $.each(input32, function(index, value){
        var color;
        var originalColor;
        if (value >= 37.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 27.2) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 14.7) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 6.4) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data32.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RS3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data32
            }]
        });
    });
});
$(function () {
    var chart;
    var input3 = [<?php echo $RD2 ?>],
    data3 = [],
    categories = [''];
    $.each(input3, function(index, value){
        var color;
        var originalColor;
        if (value >= 55.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 40.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data3.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RD2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data3
            }]
        });
    });
});
$(function () {
    var chart;
    var input33 = [<?php echo $RD3 ?>],
    data33 = [],
    categories = [''];
    $.each(input33, function(index, value){
        var color;
        var originalColor;
        if (value >= 55.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 40.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else if (value >= 0) {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data33.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RD3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data33
            }]
        });
    });
});
//Relación con los colaboradores
$(function () {
    var chart;
    var input2 = [<?php echo $RC2 ?>],
    data2 = [],
    categories = [''];
    $.each(input2, function(index, value){
        var color;
        var originalColor;
        if (value >= 44.5) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 32.2) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 20.0) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 7.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data2.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RC2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data2
            }]
        });
    });
});
// Liderazgo y relaciones en el trabajo (LR2)
$(function () {
    var chart;
    var input5 = [<?php echo $LR2 ?>],
    data5 = [],
    categories = [''];
    $.each(input5, function(index, value){
        var color;
        var originalColor;
        if (value >= 34.9) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.7) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 17.8) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 9.2) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data5.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "LR2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data5
            }]
        });
    });
});

// Claridad de rol (CR2)
$(function () {
    var chart;
    var input6 = [<?php echo $CR2 ?>],
    data6 = [],
    categories = [''];
    $.each(input6, function(index, value){
        var color;
        var originalColor;
        if (value >= 39.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 21.5) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.8) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data6.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CR2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data6
            }]
        });
    });
});

// Claridad de rol (CR3)
$(function () {
    var chart;
    var input36 = [<?php echo $CR3 ?>],
    data36 = [],
    categories = [''];
    $.each(input36, function(index, value){
        var color;
        var originalColor;
        if (value >= 30.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 15.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 5.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data36.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CR3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data36
            }]
        });
    });
});

// Capacitacion (C2)
$(function () {
    var chart;
    var input7 = [<?php echo $C2 ?>],
    data7 = [],
    categories = [''];
    $.each(input7, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data7.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "C2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data7
            }]
        });
    });
});

// Capacitacion (C3)
$(function () {
    var chart;
    var input37 = [<?php echo $C3 ?>],
    data37 = [],
    categories = [''];
    $.each(input37, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data37.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "C3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data37
            }]
        });
    });
});

// Participación y manejo del cambio (PM2)
$(function () {
    var chart;
    var input8 = [<?php echo $PM2 ?>],
    data8 = [],
    categories = [''];
    $.each(input8, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 37.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 12.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data8.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "PM2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data8
            }]
        });
    });
});

// Participación y manejo del cambio (PM3)
$(function () {
    var chart;
    var input38 = [<?php echo $PM3 ?>],
    data38 = [],
    categories = [''];
    $.each(input38, function(index, value){
        var color;
        var originalColor;
        if (value >= 58.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 41.8) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data38.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "PM3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data38
            }]
        });
    });
});
// Oportunidades para el uso y desarrollo de habilidades y conocimientos (PD2)
$(function () {
    var chart;
    var input9 = [<?php echo $PD2 ?>],
    data9 = [],
    categories = [''];
    $.each(input9, function(index, value){
        var color;
        var originalColor;
        if (value >= 31.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 18.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 6.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data9.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "PD2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data9
            }]
        });
    });
});

// Oportunidades para el uso y desarrollo de habilidades y conocimientos (PD3)
$(function () {
    var chart;
    var input39 = [<?php echo $PD3 ?>],
    data39 = [],
    categories = [''];
    $.each(input39, function(index, value){
        var color;
        var originalColor;
        if (value >= 56.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 37.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 12.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data39.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "PD3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data39
            }]
        });
    });
});
// Control y autonomía sobre el trabajo (CA2)
$(function () {
    var chart;
    var input10 = [<?php echo $CA2 ?>],
    data10 = [],
    categories = [''];
    $.each(input10, function(index, value){
        var color;
        var originalColor;
        if (value >= 58.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 41.8) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 8.4) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data10.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CA2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data10
            }]
        });
    });
});
// Control y autonomía sobre el trabajo (CA3)
$(function () {
    var chart;
    var input40 = [<?php echo $CA3 ?>],
    data40 = [],
    categories = [''];
    $.each(input40, function(index, value){
        var color;
        var originalColor;
        if (value >= 75.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 66.8) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 50.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data40.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CA3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data40
            }]
        });
    });
});
// DOMINIO Control sobre el trabajo (CT2)
$(function () {
    var chart;
    var input11 = [<?php echo $CT2 ?>],
    data11 = [],
    categories = [''];
    $.each(input11, function(index, value){
        var color;
        var originalColor;
        if (value >= 40.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 29.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 19.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data11.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CT2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data11
            }]
        });
    });
});

// DOMINIO Control sobre el trabajo (CT3)
$(function () {
    var chart;
    var input41 = [<?php echo $CT3 ?>],
    data41 = [],
    categories = [''];
    $.each(input41, function(index, value){
        var color;
        var originalColor;
        if (value >= 48) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 39.7) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 23) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data41.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CT3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data41
            }]
        });
    });
});
// Demandas ambientales y de esfuerzo físico (DAE2)
$(function () {
    var chart;
    var input12 = [<?php echo $DAE2 ?>],
    data12 = [],
    categories = [''];
    $.each(input12, function(index, value){
        var color;
        var originalColor;
        if (value >= 39.7) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.4) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 23) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 14.7) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data12.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DAE2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data12
            }]
        });
    });
});

// Demandas ambientales y de esfuerzo físico (DAE3)
$(function () {
    var chart;
    var input42 = [<?php echo $DAE3 ?>],
    data42 = [],
    categories = [''];
    $.each(input42, function(index, value){
        var color;
        var originalColor;
        if (value >= 48) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 39.7) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 23) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data42.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DAE3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data42
            }]
        });
    });
});
// Demandas emocionales (DE2)
$(function () {
    var chart;
    var input13 = [<?php echo $DE2 ?>],
    data13 = [],
    categories = [''];
    $.each(input13, function(index, value){
        var color;
        var originalColor;
        if (value >= 47.3) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data13.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DE2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data13
            }]
        });
    });
});

// Demandas emocionales (DE3)
$(function () {
    var chart;
    var input43 = [<?php echo $DE3 ?>],
    data43 = [],
    categories = [''];
    $.each(input43, function(index, value){
        var color;
        var originalColor;
        if (value >= 47.3) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 39) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 27.9) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 19.5) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data43.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DE3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data43
            }]
        });
    });
});
// Demandas cuantitativas (DC2)
$(function () {
    var chart;
    var input14 = [<?php echo $DC2 ?>],
    data14 = [],
    categories = [''];
    $.each(input14, function(index, value){
        var color;
        var originalColor;
        if (value >= 54.3) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 45.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data14.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DC2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data14
            }]
        });
    });
});

// Demandas cuantitativas (DC3)
$(function () {
    var chart;
    var input44 = [<?php echo $DC3 ?>],
    data44 = [],
    categories = [''];
    $.each(input44, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 41.8) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data44.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DC3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data44
            }]
        });
    });
});
// Influencia del trabajo sobre el entorno extralaboral (IT2)
$(function () {
    var chart;
    var input15 = [<?php echo $IT2 ?>],
    data15 = [],
    categories = [''];
    $.each(input15, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 43.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 18.9) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data15.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "IT2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data15
            }]
        });
    });
});

// Influencia del trabajo sobre el entorno extralaboral (IT3)
$(function () {
    var chart;
    var input45 = [<?php echo $IT3 ?>],
    data45 = [],
    categories = [''];
    $.each(input45, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 31.4) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 12.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data45.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "IT3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data45
            }]
        });
    });
});
// Exigencias de responsabilidad del cargo (ER2)
$(function () {
    var chart;
    var input16 = [<?php echo $ER2 ?>],
    data16 = [],
    categories = [''];
    $.each(input16, function(index, value){
        var color;
        var originalColor;
        if (value >= 79.3) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 66.8) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 54.3) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 37.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data16.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "ER2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data16
            }]
        });
    });
});
// Demandas de carga mental (DCM2)
$(function () {
    var chart;
    var input17 = [<?php echo $DCM2 ?>],
    data17 = [],
    categories = [''];
    $.each(input17, function(index, value){
        var color;
        var originalColor;
        if (value >= 90.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 80.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 70.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 60.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data17.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DCM2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data17
            }]
        });
    });
});

// Demandas de carga mental (DCM3)
$(function () {
    var chart;
    var input47 = [<?php echo $DCM3 ?>],
    data47 = [],
    categories = [''];
    $.each(input47, function(index, value){
        var color;
        var originalColor;
        if (value >= 85.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 75.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 65.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 50.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data47.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DCM3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data47
            }]
        });
    });
});
// Consistencia del rol (CRL2)
$(function () {
    var chart;
    var input18 = [<?php echo $CRL2 ?>],
    data18 = [],
    categories = [''];
    $.each(input18, function(index, value){
        var color;
        var originalColor;
        if (value >= 45.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 35.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 15.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data18.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "CRL2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data18
            }]
        });
    });
});
// Demandas de la jornada de trabajo (DJT2)
$(function () {
    var chart;
    var input19 = [<?php echo $DJT2 ?>],
    data19 = [],
    categories = [''];
    $.each(input19, function(index, value){
        var color;
        var originalColor;
        if (value >= 50.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 8.4) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data19.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DJT2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data19
            }]
        });
    });
});

// Demandas de la jornada de trabajo (DJT3)
$(function () {
    var chart;
    var input49 = [<?php echo $DJT3 ?>],
    data49 = [],
    categories = [''];
    $.each(input49, function(index, value){
        var color;
        var originalColor;
        if (value >= 58.4) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 45.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 37.6) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data49.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DJT3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data49
            }]
        });
    });
});
// DOMINIO Demandas del trabajo (DT2)
$(function () {
    var chart;
    var input20 = [<?php echo $DT2 ?>],
    data20 = [],
    categories = [''];
    $.each(input20, function(index, value){
        var color;
        var originalColor;
        if (value >= 47.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 41.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 35.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 28.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data20.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DT2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data20
            }]
        });
    });
});

// DOMINIO Demandas del trabajo (DT3)
$(function () {
    var chart;
    var input50 = [<?php echo $DT3 ?>],
    data50 = [],
    categories = [''];
    $.each(input50, function(index, value){
        var color;
        var originalColor;
        if (value >= 44.3) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 37.9) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 33.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 27) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data50.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "DT3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data50
            }]
        });
    });
});
// Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza (RP2)
$(function () {
    var chart;
    var input21 = [<?php echo $RP2 ?>],
    data21 = [],
    categories = [''];
    $.each(input21, function(index, value){
        var color;
        var originalColor;
        if (value >= 20.1) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 5.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data21.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RP2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data21
            }]
        });
    });
});

// Recompensas derivadas de la pertenencia a la organización y del trabajo que se realiza (RP3)
$(function () {
    var chart;
    var input51 = [<?php echo $RP3 ?>],
    data51 = [],
    categories = [''];
    $.each(input51, function(index, value){
        var color;
        var originalColor;
        if (value >= 18.9) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 12.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 6.4) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data51.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RP3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data51
            }]
        });
    });
});
// Reconocimiento y compensación (RYC2)
$(function () {
    var chart;
    var input22 = [<?php echo $RYC2 ?>],
    data22 = [],
    categories = [''];
    $.each(input22, function(index, value){
        var color;
        var originalColor;
        if (value >= 37.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 16.8) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 4.3) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data22.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RYC2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data22
            }]
        });
    });
});

// Reconocimiento y compensación (RYC3)
$(function () {
    var chart;
    var input52 = [<?php echo $RYC3 ?>],
    data52 = [],
    categories = [''];
    $.each(input52, function(index, value){
        var color;
        var originalColor;
        if (value >= 37.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 25.1) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 12.6) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 1) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data52.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "RYC3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data52
            }]
        });
    });
});
// DOMINIO Recompensas (R2)
$(function () {
    var chart;
    var input23 = [<?php echo $R2 ?>],
    data23 = [],
    categories = [''];
    $.each(input23, function(index, value){
        var color;
        var originalColor;
        if (value >= 29.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 20.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 11.5) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 4.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data23.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "R2",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data23
            }]
        });
    });
});

// DOMINIO Recompensas (R3)
$(function () {
    var chart;
    var input53 = [<?php echo $R3 ?>],
    data53 = [],
    categories = [''];
    $.each(input53, function(index, value){
        var color;
        var originalColor;
        if (value >= 27.6) {
            originalColor = "#9d3715";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 17.6) {
            originalColor = "#e7744f";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 10.1) {
            originalColor = "#666666";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.3).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.2).get('rgba')]
                ]
            };
        } else if (value >= 2.6) {
            originalColor = "#ace600";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.2).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(0.05).get('rgba')]
                ]
            };
        } else {
            originalColor = "#394d00";
            color = {
                linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                stops: [
                    [0, Highcharts.color(originalColor).brighten(0.15).get('rgba')],
                    [1, Highcharts.color(originalColor).brighten(-0.1).get('rgba')]
                ]
            };
        }
        data53.push({
            y: value,
            color: color,
            url: "https://www.perfilar.com.co",
            borderRadius: 16
        });
    });
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: "R3",
                type: "bar",
                backgroundColor: false,
                height: 36,
                padding: -1,
                margin: -1
            },
            title: { text: '' },
            xAxis: {
                categories: categories,
            },
            yAxis: {
                title: { text: '' },
                min: 0, minRange: 100, maxPadding: 0, 
            },
            legend: { enabled: false },
            credits: { enabled: false },
            exporting: { enabled: false },
            plotOptions: {
                series: {
                    stacking: 'normal',
                    pointWidth: 30,
                    borderRadius: 16
                }
            },
            series: [{
                name: '',
                data: data53
            }]
        });
    });
});

    $(document).ready(function() {
        $.ajax({
            type: "post",
            url: "../codigo.php",
            success: function(response) {
                const tasksR = JSON.parse(response);
                let id_codigo = '';
                tasksR.forEach(taskR => {
                    id_codigo += `${taskR.id_admin}`
                });
                console.log(id_codigo)
                $.ajax({
                    type: "post",
                    url: "../logo.php",
                    data: "id_codigo=" + id_codigo,
                    success: function (response) {
                        const tasks2 = JSON.parse(response);
                        let Profesional= '';
                        let Tarjeta= '';
                        let Licencia= '';
                        let Expedicion= '';
                        let Archivo2= '';
                        let Razon= '';
                        let Nit= '';
                        let Archivo1= '';
                        tasks2.forEach(task2 => {
                            Razon += `${task2.Razon}`,
                            Nit += `${task2.Nit}`,
                            Archivo1 += `${task2.Archivo1}`
                            Profesional += `${task2.Profesional}`
                            Tarjeta += `${task2.Tarjeta}`
                            Licencia += `${task2.Licencia}`
                            Expedicion += `${task2.Expedicion}`
                            Archivo2 += `${task2.Archivo2}`
                        });
                        $('#Profesional').html(Profesional);
                        $('#Tarjeta').html(Tarjeta);
                        $('#Licencia').html(Licencia);
                        $('#Expedicion').html(Expedicion);
                        $('#Archivo2').html(Archivo2);
                        $('#Razon_').html(Razon);
                        $('#Nit_').html(Nit);
                        $('#contenido_').html('<img src="../admin/'+Archivo1+'" width="100%" height="100%"></a></div>');
                    }
                });
            }
        });
    }) 
</script>
</body>
</html>
