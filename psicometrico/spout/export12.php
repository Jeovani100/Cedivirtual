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

    $sql = "SELECT * FROM formulario_somnolencia ORDER BY id DESC LIMIT 100";
    $resultado = $mysqli->query($sql);    

    $dia = date('d');
    $mes = date('m');
    $year = date('Y');
    $fecha = $dia.'-'.$mes.'-'.$year;
    $writer = WriterFactory::create(Type::XLSX);
    $filename = 'Somnolencia_'.$fecha.'.xlsx';
    $writer -> openToBrowser($filename);
    
    $header = ['Nombre','Cedula','Edad','Genero','Edad','Estado','Empresa','Sede','Cargo,','Sentado y leyendo','Viendo la TV','Sentado, inactivo en un lgar público (cine, teatro, conferencia, etc)','Como pasajero de un coche en un viaje de 1 hora sin paradas','Estirado para descansar al mediodía cuando las circunstancias lo permiten','Sentado y hablando con otra persona','Sentado tranquilamente después de una comida sin alcohol','En un coche, estando parado por el tránsito unos minutos (ej: semáforo, retención,...)','TOTAL','Fecha de la prueba'];      
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
      
        $Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8;
        
        $writer->addRow([$libro2['Nombre'],$libro2['Cedula'],$libro2['Edad'],$libro2['Genero'],$libro2['Edad'],$libro2['Estado'],$libro2['Empresa'],$Sede,$libro2['Cargo'],$libro['Item1'],$libro['Item2'],$libro['Item3'],$libro['Item4'],$libro['Item5'],$libro['Item6'],$libro['Item7'],$libro['Item8'],$libro['Items'],$libro['Fecha_registro']]);
    } 
    $writer->close();  
?>