<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    $connect = new PDO("mysql:host=localhost;dbname=cedisalud_usuario", "cedisalud_jeovani", "Jeovani_0313");
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect -> exec("SET CHARACTER SET utf8");
    $mysqli = new mysqli('localhost', 'cedisalud_jeovani', 'Jeovani_0313','cedisalud_usuario');
    mysqli_set_charset($mysqli, "utf8"); 
    if(isset($_POST['Cedula'])) {
       $id_admin=$_POST["id_admin"];
       $Razon=$_POST["Razon"];
       echo $Cedula=$_POST["Cedula"];
       $Nombre=$_POST["Nombre"];
       $Apellido1=$_POST["Apellido1"];
       $Apellido2=$_POST["Apellido2"];
       $CargoIn=$_POST["CargoIn"];
       $SeccionIn=$_POST["SeccionIn"];
       $ContratoIn=$_POST["ContratoIn"];
       $CentroIn=$_POST["CentroIn"];
       $MesIn=$_POST["MesIn"];
       $TipoIn=$_POST["TipoIn"];
       $InicioIn=$_POST["InicioIn"];
       $TerminacionIn=$_POST["TerminacionIn"];
       $DiasIn=$_POST["DiasIn"];
       $ProrrogaIn=$_POST["ProrrogaIn"];
       $TotalIn=$_POST["TotalIn"];
       $CargadosIn=$_POST["CargadosIn"];
       $CodigoIn=$_POST["CodigoIn"];
       $DiagnosticoIn=$_POST["DiagnosticoIn"];
       $Salariob=$_POST["Salariob"];
       $Asegurados_AT=$_POST["Asegurados_AT"];
       $Asegurados_AC_EG=$_POST["Asegurados_AC_EG"];
       $Asegurados_AFP=$_POST["Asegurados_AFP"];
       $Asumidos_AC_EG=$_POST["Asumidos_AC_EG"];
       $Mes_=$_POST["Mes"];
       $Ano=$_POST["Ano"];
        switch ($Mes_) {
            case 1:
                $Mes = '01';
                break;
            case 2:
                $Mes = '02';
                break;
            case 3:
                $Mes = '03';
                break;
            case 4:
                $Mes = '04';
                break;
            case 5:
                $Mes = '05';
                break;
            case 6:
                $Mes = '06';
                break;
            case 7:
                $Mes = '07';
                break;
            case 8:
                $Mes = '08';
                break;
            case 9:
                $Mes = '09';
                break;
            case 10:
                $Mes = '10';
                break;
            case 11:
                $Mes = '11';
                break;
            case 12:
                $Mes = '12';
                break;    
        }
       
       $sql = "INSERT INTO reg_ausentismo (id_admin2, Cedula, Nombre, Apellido1, Apellido2, Cargo, Seccion, Mes, Tipo, Inicio, Terminacion, Dias, Prorroga, Total, Cargados, Codigo, Diagnostico, Salario, Asegurados_AT, Asegurados_AC_EG, Asumidos_AC_EG, Asegurados_AFP, Contrato, Empresa, Centro, Mes0, Ano0, Fecha_registro) 
       VALUES ('$id_admin','$Cedula','$Nombre', '$Apellido1', '$Apellido2', '$CargoIn', '$SeccionIn', '$MesIn', '$TipoIn', '$InicioIn', '$TerminacionIn', '$DiasIn', '$ProrrogaIn', '$TotalIn', '$CargadosIn', '$CodigoIn', '$DiagnosticoIn', '$Salariob', '$Asegurados_AT', '$Asegurados_AC_EG', '$Asumidos_AC_EG', '$Asegurados_AFP', '$ContratoIn', '$Razon', '$CentroIn', '$Mes','$Ano', NOW())";
       $resultado = $mysqli->query($sql);
}
?>