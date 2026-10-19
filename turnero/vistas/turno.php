<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Turnos Cedisalud</title>
<?php
    $id = $_GET['id'];
    /*$sql = "SELECT * FROM turnero2 WHERE id = $id && Valor = 1 ORDER BY id DESC LIMIT 1";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
    $Nombre = $row['Nombre'];
    $Dependencia = $row['Dependencia'];
    $llamado = $Nombre.' en '.$Dependencia;*/
?>
<script src="<?php echo RUTA_JS ?>jquery.min.js"></script>
<script>
    $(document).ready(function () {
        let textoAEscuchar = '<?php echo $id ?>';
        let mensaje = new SpeechSynthesisUtterance();
        mensaje.lang = 'es-ES';
        mensaje.volume = 1;
        mensaje.rate = 1;
        mensaje.text = textoAEscuchar;
        mensaje.pitch = 1;
        speechSynthesis.speak(mensaje);

   });
</script>