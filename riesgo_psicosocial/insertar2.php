<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Cedula'])) {
       $Autor=$_POST["Autor"];
       $Cedula=$_POST["Cedula"];
       $Nombre=$_POST["Nombre"];
       $Apellido1=$_POST["Apellido1"];
       $Apellido2_0=$_POST["Apellido2"];
       $Genero=$_POST["Genero"];
       $Nacimiento_0=$_POST["Nacimiento"];
       $Civil_0=$_POST["Civil"];
       $Escolaridad_0=$_POST["Escolaridad"];
       $Anon_0=$_POST["Anon"];
       $Edad_0=$_POST["Edad"];
       $Ocupacion_0=$_POST["Ocupacion"];
       $Departamentor_0=$_POST["Departamentor"];
       $Municipior_0=$_POST["Municipior"];
       $Estrato_0=$_POST["Estrato"];
       $Vivienda_0=$_POST["Vivienda"];
       $Dependencia_0=$_POST["Dependencia"];
       $Departamentot_0=$_POST["Departamentot"];
       $Municipiot_0=$_POST["Municipiot"];
       $Empresa=$_POST["Empresa"];
       $Certificada=$_POST["Certificada"];
       $Sede=$_POST["Sede"];
       $Area=$_POST["Area"];
       $Anose_0=$_POST["Añose"];
       $Cargo=$_POST["Cargo"];
       $Nivel=$_POST["Nivel"];
       $Anosc_0=$_POST["Añosc"];
       $Tipo_0=$_POST["Tipo"];
       $Horas_0=$_POST["Horas"];
       $Salario_0=$_POST["Salario"];
       $Email_0=$_POST["Email"];
       $Celular_0=$_POST["Celular"];
       $Fecha_prueba=$_POST["Fecha_prueba"];
       
       if($Apellido2_0 == '') {
           $Apellido2 = 0;
       } else {
          $Apellido2 = $Apellido2_0;
       }
       if($Nacimiento_0 == '') {
           $Nacimiento = 0;
       } else {
          $Nacimiento = $Nacimiento_0;
       }
       if($Civil_0 == '') {
           $Civil = 0;
       } else {
          $Civil = $Civil_0;
       }
       if($Escolaridad_0 == '') {
           $Escolaridad = 0;
       } else {
          $Escolaridad = $Escolaridad_0;
       }
       if($Anon_0 == '') {
           $Anon = 0;
       } else {
          $Anon = $Anon_0;
       }
       if($Edad_0 == '') {
           $Edad = 0;
       } else {
          $Edad = $Edad_0;
       }
       if($Ocupacion_0 == '') {
           $Ocupacion = 0;
       } else {
          $Ocupacion = $Ocupacion_0;
       }
       if($Departamentor_0 == '') {
           $Departamentor = 0;
       } else {
          $Departamentor = $Departamentor_0;
       }
       if($Municipior_0 == '') {
           $Municipior = 0;
       } else {
          $Municipior = $Municipior_0;
       }
       if($Estrato_0 == '') {
           $Estrato = 0;
       } else {
          $Estrato = $Estrato_0;
       }
       if($Vivienda_0 == '') {
           $Vivienda = 0;
       } else {
          $Vivienda = $Vivienda_0;
       }
       if($Dependencia_0 == '') {
           $Dependencia = 0;
       } else {
          $Dependencia = $Dependencia_0;
       }
        if($Departamentot_0 == '') {
           $Departamentot = 0;
       } else {
          $Departamentot = $Departamentot_0;
       }
       if($Municipiot_0 == '') {
           $Municipiot = 0;
       } else {
          $Municipiot = $Municipiot_0;
       }
        if($Anose_0 == '') {
           $Anose = 0;
       } else {
          $Anose = $Anose_0;
       }
       if($Anosc_0 == '') {
           $Anosc = 0;
       } else {
          $Anosc = $Anosc_0;
       }
        if($Tipo_0 == '') {
           $Tipo = 0;
       } else {
          $Tipo = $Tipo_0;
       }
       if($Horas_0 == '') {
           $Horas = 0;
       } else {
          $Horas = $Horas_0;
       }
        if($Salario_0 == '') {
           $Salario = 0;
       } else {
          $Salario = $Salario_0;
       }
       if($Email_0 == '') {
           $Email = 0;
       } else {
          $Email = $Email_0;
       }
        if($Celular_0 == '') {
           $Celular = 0;
       } else {
          $Celular = $Celular_0;
       }
     
       $sql = "INSERT INTO datosg (Autor, Cedula, Nombre, Apellido1, Apellido2, Genero, Nacimiento, Anon, Edad, Civil, Escolaridad, Ocupacion, Departamentor, Municipior, Estrato, Vivienda, Dependencia, Departamentot, Municipiot, Empresa, Certificada, Sede, Area, Añose, Cargo, Nivel, Añosc, Tipo, Horas, Salario, Email, Celular, Fecha_prueba, Fecha_registro, boton_send) 
       VALUES ('$Autor', '$Cedula','$Nombre', '$Apellido1', '$Apellido2', '$Genero', '$Nacimiento', '$Anon', '$Edad', '$Civil', '$Escolaridad', '$Ocupacion', '$Departamentor', '$Municipior', '$Estrato', '$Vivienda', '$Dependencia', '$Departamentot', '$Municipiot', '$Empresa', '$Certificada', '$Sede', '$Area', '$Anose', '$Cargo', '$Nivel', '$Anosc', '$Tipo', '$Horas', '$Salario', '$Email','$Celular','$Fecha_prueba', NOW(), 1)";
       $resultado = $mysqli->query($sql);
}
?>