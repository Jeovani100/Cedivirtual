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
    
    $fecha = date("Y-m-d");

    $sql = "SELECT * FROM agenda WHERE Fecha = '$fecha' && Ips != 'Cedisalud IPS (Medellín)' && Ips != 'Cedisalud IPS (Apartadó)' ORDER BY id DESC"; 
    $resultado = $mysqli->query($sql);

    $writer = WriterFactory::create(Type::XLSX);
    $filename = 'Agenda_red_nacional_'.$fecha.'.xlsx';
    $writer -> openToBrowser($filename);
    $header = ['Sede','Tipo específico de exámen','Observaciones','Identificacion','Primer nombre','Segundo nombre','Primer apellidos','Segundo apellido','Tipo de documento','Correo electrónico','Fecha de nacimiento','Sexo (M/F)','Dirección','Teléfono','Celular','Composición familiar','Estrato','CODEPAQ','CODEMPMIS','CODEXAM','CODATE','Cargo','Servicios','Observaciones especiales'];        
    $writer->addRow($header); 

    while( $libro = mysqli_fetch_assoc($resultado)) {
        $Observaciones2_ = $libro['Observaciones2'];
        if ($Observaciones2_ == '') {
            $Observaciones2 = $Observaciones2_;
        } else {
            $Observaciones2 = 'N/R';
        }
        $writer->addRow([$libro['Ips'],$libro['Especifico'],$libro['Observaciones'],$libro['Documento'], $libro['Nombre'], $libro['Nombre'], $libro['Apellidos'], $libro['Apellidos'],1, $libro['Email'], $libro['Nacimiento'], $libro['Genero'], '', '', $libro['Celular'], '','','','','','',$libro['Cargo'], '',$libro['Observaciones2']]);
    } 
    $writer->close();  
            
            
?>