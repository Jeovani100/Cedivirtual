<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    
    if(isset($_POST['Direccion'])) {
        $Direccion = $_POST['Direccion'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Direccion = '$Direccion' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Celular'])) {
        $Celular = $_POST['Celular'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Celular = '$Celular' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Email'])) {
        $Email = $_POST['Email'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Email = '$Email' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto1'])) {
        $Texto1 = $_POST['Texto1'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto1 = '$Texto1' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto2'])) {
        $Texto2 = $_POST['Texto2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto2 = '$Texto2' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto3'])) {
        $Texto3 = $_POST['Texto3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto3 = '$Texto3' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto4'])) {
        $Texto4 = $_POST['Texto4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto4 = '$Texto4' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto5'])) {
        $Texto5 = $_POST['Texto5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto5 = '$Texto5' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto6'])) {
        $Texto6 = $_POST['Texto6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto6 = '$Texto6' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto7'])) {
        $Texto7 = $_POST['Texto7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto7 = '$Texto7' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto8'])) {
        $Texto8 = $_POST['Texto8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto8 = '$Texto8' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto9'])) {
        $Texto9 = $_POST['Texto9'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto9 = '$Texto9' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto10'])) {
        $Texto10 = $_POST['Texto10'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto10 = '$Texto10' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto11'])) {
        $Texto11 = $_POST['Texto11'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto11 = '$Texto11' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto12'])) {
        $Texto12 = $_POST['Texto12'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto12 = '$Texto12' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto13'])) {
        $Texto13 = $_POST['Texto13'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto13 = '$Texto13' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Texto15'])) {
        $Texto15 = $_POST['Texto15'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto15 = '$Texto15' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Texto16'])) {
        $Texto16 = $_POST['Texto16'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto16 = '$Texto16' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
     if(isset($_POST['Texto14'])) {
        $Texto14 = $_POST['Texto14'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Texto14 = '$Texto14' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item1'])) {
        $Item1 = $_POST['Item1'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item1 = $Item1 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item2'])) {
        $Item2 = $_POST['Item2'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item2 = $Item2 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item3'])) {
        $Item3 = $_POST['Item3'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item3 = $Item3 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item4'])) {
        $Item4 = $_POST['Item4'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item4 = $Item4 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item5'])) {
        $Item5 = $_POST['Item5'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item5 = $Item5 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item6'])) {
        $Item6 = $_POST['Item6'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item6 = $Item6 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item7'])) {
        $Item7 = $_POST['Item7'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item7 = $Item7 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item8'])) {
        $Item8 = $_POST['Item8'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item8 = $Item8 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item9'])) {
        $Item9 = $_POST['Item9'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item9 = $Item9 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item10'])) {
        $Item10 = $_POST['Item10'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item10 = $Item10 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item11'])) {
        $Item11 = $_POST['Item11'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item11 = '$Item11' WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item12'])) {
        $Item12 = $_POST['Item12'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item12 = $Item12 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item13'])) {
        $Item13 = $_POST['Item13'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item13 = $Item13 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    if(isset($_POST['Item14'])) {
        $Item14 = $_POST['Item14'];
        $Codigo = $_POST['Codigo'];
        $sql = "UPDATE formulario_pilates SET Item14 = $Item14 WHERE Codigo = '$Codigo'";
        $result = $mysqli->query($sql);
    }
    