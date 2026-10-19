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

    $sql = "SELECT * FROM formulario_eysenck ORDER BY id DESC LIMIT 100";
    $resultado = $mysqli->query($sql);    

    $dia = date('d');
    $mes = date('m');
    $year = date('Y');
    $fecha = $dia.'-'.$mes.'-'.$year;
    $writer = WriterFactory::create(Type::XLSX);
    $filename = 'Eysenck_'.$fecha.'.xlsx';
    $writer -> openToBrowser($filename);
    
    $header = ['Nombre','Cedula','Edad','Genero','Edad','Estado','Empresa','Sede','Cargo,','Le gusta abundancia de excitación y bullicio a su alrededor?','¿Tiene a menudo un sentimiento de intranquilidad, como si quisiera algo, pero sin saber que?','¿Tiene casi siempre una contestación lista a la mano cuando se le habla?','¿Se siente algunas veces feliz, algunas veces triste, sin una razón real?',' ¿Permanece usualmente retraído (a) en fiestas y reuniones?','Cuando era niño(a) ¿hacia siempre inmediatamente lo que le decían, sin refunfuñar?','¿Se enfada o molesta a menudo?','Cuando lo(a) meten a una pelea ¿prefiere sacar los trapitos al aire de una vez por todas, en vez de quedar callado(a) esperando que las cosas se calmen solas?','¿Es usted triste, melancólico (a)?','¿le gusta mezclarse con la gente?','¿Ha perdido a menudo el sueño por sus preocupaciones?','¿Se pone a veces malhumorado (a)?','¿Se catalogaría a si mismo(a) como despreocupado (a) o confiado a su buena suerte?','¿Se decide a menudo demasiado tarde?','¿Le gusta trabajar solo (a)?','¿Se ha sentido a menudo apático (a) y cansado(a) sin razón?','¿Es por lo contrario animado(a) y jovial?','¿Se ríe a menudo de chistes groseros?','¿Se siente a menudo hastiado(a), harto, fastidiado?','¿Se siente incomodo(a) con vestidos que no son del diario?','¿Se distrae (vaga su mente) a menudo cuando trata de prestar atención a algo?',' ¿Puede expresar en palabras fácilmente lo que piensa?','¿Se abstrae (se pierde en sus pensamientos) a menudo?','¿Esta completamente libre de prejuicios de cualquier tipo?','¿Le gusta las bromas?','¿Piensa a menudo en su pasado?','¿Le gusta mucho la buena comida?','Cuándo se fastidia ¿necesita algún(a) amigo(a) para hablar sobre ello?','¿Le molesta vender cosas o pedir dinero a la gente para alguna buena causa?','¿Alardea (se jacta) un poco a veces?','¿Es usted muy susceptible (sensible) por algunas cosas?','¿Le gusta mas quedarse en casa, que ir a una fiesta aburrida?','¿Se pone a menudo tan inquieto(a) que no puede permanecer sentado(a) durante mucho rato en una silla?','¿Le gusta planear las cosas, con mucha anticipación?','¿Tiene a menudo mareos (vértigos)?','¿Contesta siempre una mensaje personal, tan pronto como puede, después de haberla leído?','¿Hace usted usualmente las cosas mejor resolviéndolas solo(a) que hablando a otra persona sobre ello?','¿Le falta frecuentemente aire, sin haber hecho un trabajo pesado?','¿Es usted generalmente una persona tolerante, que no se molesta si las cosas no están perfectas?','¿Sufre de los nervios?','¿Le gustaría mas planear cosas, que hacer cosas?','¿Deja algunas veces para mañana, lo que debería hacer hoy día?','¿Se pone nervioso(a) en lugares tales como ascensores, trenes o túneles?','Cuando hace nuevos amigos(as) ¿es usted usualmente quien inicia la relación o invita a que se produzca?','¿Sufre fuertes dolores de cabeza?','¿Siente generalmente que las cosas se arreglaran por si solas y que terminaran bien de algún modo?','¿Le cuesta trabajo coger el sueño al acostarse en las noches?','¿Ha dicho alguna vez mentiras en su vida?','¿Dice algunas veces lo primero que se le viene a la cabeza?','¿Se preocupa durante un tiempo demasiado largo, después de una experiencia embarazosa?','¿Se mantiene usualmente hérnico(a) o encerrado (a) en si mismo(a), excepto con amigos muy íntimos?','¿Se crea a menudo problemas, por hacer cosas sin pensar?','¿Le gusta contar chistes y referir historias graciosas a sus amigos?','¿Se le hace más fácil ganar que perder un juego?','¿Se siente a menudo demasiado consciente de si mismo(a) o poco natural cuando esta con sus superiores?','Cuando todas las posibilidades están contra usted, ¿piensa aun usualmente que vale la pena intentar?','¿Siente “sensaciones” en el abdomen, antes de un hecho importante?','TOTAL','Fecha de la prueba'];      
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
        $Item17 = $libro['Item17'];
        $Item18 = $libro['Item18'];
        $Item19 = $libro['Item19'];
        $Item20 = $libro['Item20'];
        $Item21 = $libro['Item21'];
        $Item22 = $libro['Item22'];
        $Item23 = $libro['Item23'];
        $Item24 = $libro['Item24'];
        $Item25 = $libro['Item25'];
        $Item26 = $libro['Item26'];
        $Item27 = $libro['Item27'];
        $Item28 = $libro['Item28'];
        $Item29 = $libro['Item29'];
        $Item30 = $libro['Item30'];
        $Item31 = $libro['Item31'];
        $Item32 = $libro['Item32'];
        $Item33 = $libro['Item33'];
        $Item34 = $libro['Item34'];
        $Item35 = $libro['Item35'];
        $Item36 = $libro['Item36'];
        $Item37 = $libro['Item37'];
        $Item38 = $libro['Item38'];
        $Item39 = $libro['Item39'];
        $Item40 = $libro['Item40'];
        $Item41 = $libro['Item41'];
        $Item42 = $libro['Item42'];
        $Item43 = $libro['Item43'];
        $Item44 = $libro['Item44'];
        $Item45 = $libro['Item45'];
        $Item46 = $libro['Item46'];
        $Item47 = $libro['Item47'];
        $Item48 = $libro['Item48'];
        $Item49 = $libro['Item49'];
        $Item50 = $libro['Item50'];
        $Item51 = $libro['Item51'];
        $Item52 = $libro['Item52'];
        $Item53 = $libro['Item53'];
        $Item54 = $libro['Item54'];
        $Item55 = $libro['Item55'];
        $Item56 = $libro['Item56'];
        $Item57 = $libro['Item57'];
        
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
      
        $Items = $Item1 + $Item2 + $Item3 + $Item4 + $Item5 + $Item6 + $Item7 + $Item8 + $Item9 + $Item10 + $Item11 + $Item12 + $Item13 + $Item14 + $Item15 + $Item16 + $Item17 + $Item18 + $Item19 + $Item20 + $Item21 + $Item22 + $Item23 + $Item24 + $Item25 + $Item26 + $Item27 + $Item28 + $Item29 + $Item30 + $Item31 + $Item32 + $Item33 + $Item34 + $Item35 + $Item36 + $Item37 + $Item38 + $Item39 + $Item40 + $Item41 + $Item42 + $Item43 + $Item44 + $Item45 + $Item46 + $Item47 + $Item48 + $Item49 + $Item50 + $Item51 + $Item52 + $Item53 + $Item54 + $Item55 + $Item56 + $Item57;
        
        $writer->addRow([$libro2['Nombre'],$libro2['Cedula'],$libro2['Edad'],$libro2['Genero'],$libro2['Edad'],$libro2['Estado'],$libro2['Empresa'],$Sede,$libro2['Cargo'],$libro['Item1'],$libro['Item2'],$libro['Item3'],$libro['Item4'],$libro['Item5'],$libro['Item6'],$libro['Item7'],$libro['Item8'],$libro['Item9'],$libro['Item10'],$libro['Item11'],$libro['Item12'],$libro['Item13'],$libro['Item14'],$libro['Item15'],$libro['Item16'],$libro['Item17'],$libro['Item18'],$libro['Item19'],$libro['Item20'],$libro['Item21'],$libro['Item22'],$libro['Item23'],$libro['Item24'],$libro['Item25'],$libro['Item26'],$libro['Item27'],$libro['Item28'],$libro['Item29'],$libro['Item30'],$libro['Item31'],$libro['Item32'],$libro['Item33'],$libro['Item34'],$libro['Item35'],$libro['Item36'],$libro['Item37'],$libro['Item38'],$libro['Item39'],$libro['Item40'],$libro['Item41'],$libro['Item42'],$libro['Item43'],$libro['Item44'],$libro['Item45'],$libro['Item46'],$libro['Item47'],$libro['Item48'],$libro['Item49'],$libro['Item50'],$libro['Item51'],$libro['Item52'],$libro['Item53'],$libro['Item54'],$libro['Item55'],$libro['Item56'],$libro['Item57'],$libro['Items'],$libro['Fecha_registro']]);
    } 
    $writer->close();  
?>