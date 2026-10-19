<?php
    require 'src/Spout/Autoloader/autoload.php';
    use Box\Spout\Writer\WriterFactory;
    use Box\Spout\Common\Type;
    use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
    use Box\Spout\Common\Entity\Style\CellAlignment;
    use Box\Spout\Common\Entity\Style\Color;
    use Box\Spout\Common\Entity\Style\Border;
    
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 

    $sql = "SELECT * FROM formulario_neurotoxicos ORDER BY id DESC LIMIT 100";
    $resultado = $mysqli->query($sql);    
    
    $dia = date('d');
    $mes = date('m');
    $year = date('Y');
    $fecha = $dia.'-'.$mes.'-'.$year;
    $writer = WriterFactory::create(Type::XLSX);
    $filename = 'Neurotoxico_'.$fecha.'.xlsx';
    $writer -> openToBrowser($filename);
    
    $header = ['Nombre','Cedula','Edad','Genero','Edad','Estado','Empresa','Sede','Cargo,','¿Ha tenido alteracion en la memorio en las ultimas semanas olvidadizo(a)?','¿Le han dicho sus familiares y/o amigos que es olvidadizo(a)?','¿A menudo se le olvida realizar actividades que considera importantes?','¿Le es difícil entender las noticias, programas o novelas que ve en TV o escucha en la radio?','¿Tiene a menudo dificultad para concentrarse?',' ¿Se siente a menudo enojado(a) sin motivo?','¿Se siente a menudo abatido(a) o triste sin motivo?',' ¿Le cuesta decidirse realizar actividades que Ud. sabe debe realizar?','¿Se siente anormalmente cansado?',' ¿Siente a veces una presión sobre el pecho?','¿Ha sentido de pronto como que se va a caer al estar de pie o caminando?','¿Siente a menudo punzadas dolorosas, adormecimiento u hormigueo en alguna parte del cuerpo?','¿Le resulta difícil abrocharse los botones?','¿Siente que ha perdido fuerza en sus brazos o en sus piernas?','¿Ahora siente menos que antes en sus manos o pies?','¿A menudo se despierta, costándole luego conciliar el sueño?','TOTAL','Fecha de la prueba'];      
    $writer->addRow($header); 

    while( $libro = mysqli_fetch_assoc($resultado)) {
        $id_admin = $libro['id_admin'];
        $Item1 = $libro['Item1'];
        $Item2 = $libro['Item2'];
        $Item3 = $libro['Item3'];
        $Item4 = $libro['Item4'];
        $Item5 = $libro['Item5'];
        $Item6 = $libro['Item6'];
        $Item7 = $libro['Item7'];
        $Item8 = $libro['Item8'];
        $Item9 = $libro['Item9'];
        $Item10 = $libro['Item10'];
        $Item11 = $libro['Item11'];
        $Item12 = $libro['Item12'];
        $Item13 = $libro['Item13'];
        $Item14 = $libro['Item14'];
        $Item15 = $libro['Item15'];
        $Item16 = $libro['Item16'];
        
         $sql = "SELECT * FROM reg_psicologica WHERE Codigo = '$id_admin'";
        $resultado2 = $mysqli->query($sql);
        $libro2 = $resultado2->fetch_array(MYSQLI_ASSOC);

        $Sede0 = $libro2['Sede'];
        if($Sede0 == 1) {
            $Sede = 'Medellín';
        } elseif ($Sede0 == 2) {
            $Sede = 'Apartadó';
        } elseif ($Sede0 == 2) {
            $Sede = 'Otras';
        }
        $Fecha_registro = $libro2['Fecha_registro'];
      
        $Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8 + $Item9 + $Item10 + $Item11 + $Item12 + $Item13 + $Item14 + $Item15 + $Item16;
        
        $writer->addRow([$libro2['Nombre'],$libro2['Cedula'],$libro2['Edad'],$libro2['Genero'],$libro2['Edad'],$libro2['Estado'],$libro2['Empresa'],$Sede,$libro2['Cargo'],$libro['Item1'],$libro['Item2'],$libro['Item3'],$libro['Item4'],$libro['Item5'],$libro['Item6'],$libro['Item7'],$libro['Item8'],$libro['Item9'],$libro['Item10'],$libro['Item11'],$libro['Item12'],$libro['Item13'],$libro['Item14'],$libro['Item15'],$libro['Item16'],$libro['Items'],$libro['Fecha_registro']]);
    } 
    $writer->close();  
?>