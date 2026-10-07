<?php
        include '../phpspreadsheet/vendor/autoload.php';
        $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
        $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect -> exec("SET CHARACTER SET utf8");
        $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
        mysqli_set_charset($mysqli, "utf8"); 

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
            
        require 'src/Exception.php';
        require 'src/PHPMailer.php';
        require 'src/SMTP.php';

    $id_send = $_POST['id_send'];
    
    $sql = "SELECT * FROM reg_agenda WHERE id = $id_send";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Usuario = $row['Usuario'];
    $Razon = $row['Razon'];
    $Nombre = $row['Nombre'];
    $Email = $row['Email'];
    $Clave = $row['Clave'];
    $Activo = $row['Activo'];

    $mail = new PHPMailer(true); 
        //$mail->SMTPDebug = 4;                               // Habilitar el debug
        $mail->isSMTP();                                      // Usar SMTP
        $mail->Host = 'cedisalud.com.co';                     // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
        $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
        $mail->Username = 'agendamiento1@cedisalud.com.co';          // Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
        $mail->Password = 'Paulino0404';                      // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
        $mail->SMTPSecure = 'ssl';                            // Habilitar encriptacion
        $mail->Port = 465;                                    // Puerto SMTP                     
        $mail->Timeout =   30;
        $mail->AuthType = 'LOGIN';
                
    //Recipients   
     $mail->setFrom('agendamiento1@cedisalud.com.co', 'Agendamiento');    //Direccion de correo remitente (DEBE SER EL MISMO "Username")
     $mail->addAddress($Email);     // Agregar el destinatario
              
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'AGENDAMIENTO DE CITAS CEDISALUD IPS/ '.$Razon;
    $mail->Body  = '
    <p style="font-size:20px">Cordial saludo Sr./ra. '.$Nombre.':</b></p><br> 
    <p style="font-size:20px">Bienvenido(a) a nuestra sitio de citas médicas online. Puede acceder mediante el siguiente enlace: <a href="https://www.cedisalud.com.co/login_agenda">agenda de citas médicas</a> ingresando la clave: <b>'.$Clave.'</b>  En el adjunto encontrará instrucciones de uso para que pueda agendar correctamente.</b></p><br><br>
    <p style="font-size:18px">Cualquier inquietud comunicarse al <b>4446604 EXT 101-102-103</b>, al celular <b>3178939907</b> o al correo <a href="mailto:atencionalusuario@cedisalud.com">atencionalusuario@cedisalud.com</a></p><br>
    <p style="font-size:18px">Este es un mensaje generado por el sistema automático de agendamiento de Cedisalud IPS.  Por favor, no responsa este correo.</p><br><br>  
    <p style="text-align:center"><a href="https://www.cedisalud.com"><img src="https://www.cedisalud.com.co/imagine/logo.png" style="width:180px"></a></p>';
                
 /*   $documentos = "../phpspreadsheet/instructivo_agendamiento.pdf";
    $documentos2 = "../phpspreadsheet/instructivo_pagina_web.pdf";
    move_uploaded_file($_FILES['data']['tmp_name'], $documentos);
            
    $mail->AddAttachment($documentos,'instructivo_agendamiento.pdf');    
    $mail->AddAttachment($documentos2,'instructivo_pagina_web.pdf');  */
    $mail->CharSet = 'UTF-8';
    $mail->send();
?>