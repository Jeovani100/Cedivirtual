 <?php 
   include_once 'app/conexion.inc.php';
   include_once 'app/config.inc.php';
   
    if(isset($_POST['id3bdg'])) {
        $id = $_POST['id3bdg'];
        $Cedula = $_POST['Cedulabdg'];
        $Nombre = $_POST['Nombrebdg'];
        $Apellido1 = $_POST['Apellido1bdg'];
        $Apellido2 = $_POST['Apellido2bdg'];
        $Genero = $_POST['Generobdg'];
        $Anon = $_POST['Anonbdg'];
        $Edad = $_POST['Edadbdg'];
        $Civil = $_POST['Civilbdg'];
        $Escolaridad = $_POST['Escolaridadbdg'];
        $Ocupacion = $_POST['Ocupacionbdg'];
        $Departamentor = $_POST['Departamentorbdg'];
        $Municipior = $_POST['Municipiorbdg'];
        $Estrato = $_POST['Estratobdg'];
        $Vivienda = $_POST['Viviendabdg'];
        $Dependencia = $_POST['Dependenciabdg'];
        $Departamentot = $_POST['Departamentotbdg'];
        $Municipiot = $_POST['Municipiotbdg'];
        $Anose = $_POST['Añosebdg'];
        $Cargo = $_POST['Cargobdg'];
        $Nivel = $_POST['Nivelbdg'];
        $Anosc = $_POST['Añoscbdg'];
        $Tipo = $_POST['Tipobdg'];
        $Horas = $_POST['Horasbdg'];
        $Salario = $_POST['Salariobdg'];
        $Fecha_prueba = $_POST['Fecha_pruebabdg'];
        $Email = $_POST['Emailbdg'];
        $Celular = $_POST['Celularbdg'];
       
       $sql = "UPDATE datosg SET Cedula = $Cedula, Nombre = '$Nombre',  Apellido1 = '$Apellido1', Apellido2 = '$Apellido2' , Genero = '$Genero', Anon= '$Anon', Edad= $Edad, Civil= '$Civil',  Escolaridad= '$Escolaridad',  Ocupacion= '$Ocupacion',  Departamentor= '$Departamentor', Municipior= '$Municipior',  Estrato= '$Estrato',  Vivienda= '$Vivienda',  Dependencia= '$Dependencia',  Departamentot= '$Departamentot',  Municipiot= '$Municipiot', Añose = '$Anose', Cargo= '$Cargo', Nivel= '$Nivel',  Añosc= '$Anosc',  Tipo= '$Tipo',  Horas= '$Horas',  Salario= '$Salario', Fecha_prueba = '$Fecha_prueba', Email = '$Email', Celular = $Celular WHERE id = '$id'";
       $result = $mysqli->query($sql);
    };
     if(isset($_POST['id4bdg'])) {
        $id = $_POST['id4bdg'];
        $Email = $_POST['Emailbdg'];
        $Celular = $_POST['Celularbdg'];
       $sql = "UPDATE datosg SET Email = '$Email', Celular = $Celular WHERE id = '$id'";
       $result = $mysqli->query($sql);
    };
    if(isset($_POST['id_notificaciones'])) {
        $id = $_POST['id_notificaciones'];
        $Nombre = $_POST['Nombre'];
        $Empresa = $_POST['Empresa'];
        $Celular = $_POST['Celular'];
        $Email = $_POST['Email'];
        $Dia = $_POST['Dia'];
        $Hora = $_POST['Hora'];
        $Observaciones = $_POST['Observaciones'];

        $sql = "UPDATE notificaciones SET Nombre = '$Nombre',  Empresa = '$Empresa', Celular = '$Celular' , Email = '$Email', Dia= '$Dia', Hora= '$Hora', Observaciones= '$Observaciones' WHERE id = $id";
        $result = $mysqli->query($sql);
    };
if(isset($_POST['idIA1'])) {
        $id1 = $_POST['idIA1'];
        $Observaciones1 = $_POST['observaciones1'];
  $sql = "UPDATE intralaboralA SET Observaciones = '$Observaciones1' WHERE id_usuario = '$id1'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idIB1'])) {
        $id2 = $_POST['idIB1'];
        $Observaciones2 = $_POST['observaciones2'];
  $sql = "UPDATE intralaboralB SET Observaciones = '$Observaciones2' WHERE id_usuario = '$id2'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idE'])) {
        $idE = $_POST['idE'];
        $ObservacionesE = $_POST['observacionesE'];
  $sql = "UPDATE extralaboral SET Observaciones = '$ObservacionesE' WHERE id_usuario = '$idE'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idG'])) {
        $idG = $_POST['idG'];
        $ObservacionesG = $_POST['observacionesG'];
  $sql = "UPDATE datosg SET Observaciones = '$ObservacionesG' WHERE id = '$idG'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idEST'])) {
        $idEST = $_POST['idEST'];
        $ObservacionesEST = $_POST['observacionesEST'];
  $sql = "UPDATE estres SET Observaciones = '$ObservacionesEST' WHERE id_usuario = '$idEST'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idIA2'])) {
        $id3 = $_POST['idIA2'];
        $Recomendaciones1 = $_POST['recomendaciones1'];
  $sql = "UPDATE intralaboralA SET Recomendaciones = '$Recomendaciones1' WHERE id_usuario = '$id3'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idIB2'])) {
        $id4 = $_POST['idIB2'];
        $Recomendaciones2 = $_POST['recomendaciones2'];
  $sql = "UPDATE intralaboralB SET Recomendaciones = '$Recomendaciones2' WHERE id_usuario = '$id4'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idER'])) {
        $idER = $_POST['idER'];
        $RecomendacionesE = $_POST['recomendacionesE'];
  $sql = "UPDATE extralaboral SET Recomendaciones = '$RecomendacionesE' WHERE id_usuario = '$idER'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idG2'])) {
        $idG2 = $_POST['idG2'];
        $RecomendacionesG2 = $_POST['recomendacionesG2'];
  $sql = "UPDATE datosg SET Recomendaciones = '$RecomendacionesG2' WHERE id = '$idG2'";
  $result = $mysqli->query($sql);
};
if(isset($_POST['idEST2'])) {
        $idEST2 = $_POST['idEST2'];
        $RecomendacionesEST2 = $_POST['recomendacionesEST2'];
  $sql = "UPDATE estres SET Recomendaciones = '$RecomendacionesEST2' WHERE id_usuario = '$idEST2'";
  $result = $mysqli->query($sql);
};
    if(isset($_POST['idbdg'])) {
        $id = $_POST['idbdg'];
        $Cedula = $_POST['Cedulabdg'];
        $Nombre = $_POST['Nombrebdg'];
        $Genero = $_POST['Generobdg'];
        $Celular = $_POST['Celularbdg'];
        $Email = $_POST['Emailbdg'];
        $Empresa = $_POST['Empresabdg'];
        $Cargo = $_POST['Cargobdg'];
        $Centro = $_POST['Centrobdg'];
        $Ciudad = $_POST['Ciudadbdg'];
        $sql = "UPDATE empleados SET Cedula = '$Cedula', Nombre = '$Nombre', Genero = '$Genero', Celular = '$Celular',  Email = '$Email', Empresa = '$Empresa', Cargo= '$Cargo' , Centro= '$Centro', Ciudad= '$Ciudad' WHERE id = $id";
        $result = $mysqli->query($sql);
   };
   if(isset($_POST['id_respuesta'])) {
        $id = $_POST['id_respuesta'];
        $sql = "SELECT * FROM respuestas WHERE id = '$id'";
        $resultado = $mysqli->query($sql);
        $row = $resultado->fetch_array(MYSQLI_ASSOC);
        $Activo0 = $row['Activo'];
        if ($Activo0 == 1) {
            $Activo = 0;
        } else {
            $Activo = 1;
        }
        $sql = "UPDATE respuestas SET Activo = '$Activo' WHERE id = $id";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['boton_delete'])) {
        $boton_delete = $_POST['boton_delete'];
        $id_boton = $_POST['id_boton'];
        $sql = "UPDATE datosg SET boton_delete = '$boton_delete' WHERE Autor = $id_boton";
        $result = $mysqli->query($sql);
    };
    
    if(isset($_POST['id_send'])) {
        $id_send = $_POST['id_send'];
        $boton_send = $_POST['boton_send'];
        $sql = "UPDATE datosg SET boton_send = $boton_send WHERE id = $id_send";
        $result = $mysqli->query($sql);
    };
?>
