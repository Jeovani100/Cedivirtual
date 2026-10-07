<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['mes'])) {
       $mes =$_POST["mes"];
       $valor =$_POST["valor"];
       $sql = "UPDATE controles_agenda SET $mes = '$valor'  WHERE id = 1";
       $resultado = $mysqli->query($sql);
       if ($resultado) {
           $valor_1 = $valor;
           echo $valor_1;
       }
    }
    if(isset($_POST['aliados'])) {
       $aliados =$_POST["aliados"];
       $sql = "UPDATE controles_agenda SET Aliados = '$aliados' WHERE id = 1";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['vistos'])) {
       $vistos =$_POST["vistos"];
       $sql = "UPDATE controles_agenda SET Vistos = '$vistos' WHERE id = 1";
       $resultado = $mysqli->query($sql);
    }
?>  









