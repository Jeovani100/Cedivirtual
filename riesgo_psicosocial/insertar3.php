<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['id'])) {
       $id=$_POST["id"];
       $Nacimiento=$_POST["Nacimiento"];
       $Civil=$_POST["Civil"];
       $Escolaridad=$_POST["Escolaridad"];
       $Anon=$_POST["Anon"];
       $Edad=$_POST["Edad"];
       $Ocupacion=$_POST["Ocupacion"];
       $Departamentor=$_POST["Departamentor"];
       $Municipior=$_POST["Municipior"];
       $Estrato=$_POST["Estrato"];
       $Vivienda=$_POST["Vivienda"];
       $Dependencia=$_POST["Dependencia"];
       $Departamentot=$_POST["Departamentot"];
       $Municipiot=$_POST["Municipiot"];
       $Anose=$_POST["Añose"];
       $Anosc=$_POST["Añosc"];
       $Tipo=$_POST["Tipo"];
       $Horas=$_POST["Horas"];
       $Salario=$_POST["Salario"];
       $Fecha_prueba = date('d-m-Y h:i:s');
       $sql = "UPDATE datosg SET  Nacimiento = '$Nacimiento',  Anon= '$Anon', Edad= '$Edad', Civil= '$Civil',  Escolaridad= '$Escolaridad',  Ocupacion= '$Ocupacion',  
       Departamentor= '$Departamentor', Municipior= '$Municipior',  Estrato= '$Estrato',  Vivienda= '$Vivienda',  Dependencia= '$Dependencia',  Departamentot= '$Departamentot',  Municipiot= '$Municipiot', 
       Añose = '$Anose', Añosc= '$Anosc',  Tipo= '$Tipo',  Horas= '$Horas',  Salario= '$Salario', Fecha_prueba = '$Fecha_prueba' WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
    }
    if(isset($_POST['id2'])) {
       $id=$_POST["id2"];
       $Fecha_prueba = date('d-m-Y h:i:s');
       $sql = "UPDATE datosg SET   Fecha_prueba = '$Fecha_prueba' WHERE id = '$id'";
       $resultado = $mysqli->query($sql);
}
?>


