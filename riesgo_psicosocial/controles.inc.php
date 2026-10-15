<?php
    include_once 'app/conexion.inc.php';
    include_once 'app/config.inc.php';
    
    
     if(isset($_POST['modulo'])) {
       $modulo=$_POST["modulo"];
       $Codigo=$_POST["Codigo"];
       $sql = "INSERT INTO controles_modulos (id_admin, Modulo,Fecha_registro) VALUES ('$Codigo','$modulo', NOW())";
       $resultado = $mysqli->query($sql);
       
       
    }
     if(isset($_POST['certificada_crear'])) {
       $certificada=$_POST["certificada"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET certificada_crear_eliminar = 1 WHERE Autor= '$id_admin'";
       $resultado = $mysqli->query($sql);
       $sql = "UPDATE controles SET certificada_existe = '#e7744f', certificada_crear_eliminar = 'certificada_eliminar' WHERE id_admin= '$id_admin' && Certificada = '$certificada'";
       $result = $mysqli->query($sql);
    }
    if(isset($_POST['certificada_eliminar'])) {
       $certificada=$_POST["certificada"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET certificada_crear_eliminar = '0' WHERE Autor= '$id_admin'";
       $resultado = $mysqli->query($sql);
       $sql = "UPDATE controles SET certificada_existe = '#666666', certificada_crear_eliminar = 'certificada_crear' WHERE id_admin= '$id_admin' && Certificada = '$certificada'";
       $result = $mysqli->query($sql);
    }
    if(isset($_POST['sede_crear'])) {
       $sede=$_POST["sede"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET sede_crear_eliminar = 1 WHERE Autor= '$id_admin'";
       $resultado = $mysqli->query($sql);
       $sql = "UPDATE controles SET sede_existe = '#e7744f', sede_crear_eliminar = 'sede_eliminar' WHERE id_admin= '$id_admin' && Sede = '$sede'";
       $result = $mysqli->query($sql);
    }
    if(isset($_POST['sede_eliminar'])) {
       $sede=$_POST["sede"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET sede_crear_eliminar = '0' WHERE Autor= '$id_admin'";
       $result = $mysqli->query($sql);
       $sql = "UPDATE controles SET sede_existe = '#666666', sede_crear_eliminar = 'sede_crear' WHERE id_admin= '$id_admin' && Sede = '$sede'";
       $result = $mysqli->query($sql);
    }
    if(isset($_POST['area_crear'])) {
       $area=$_POST["area"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET area_crear_eliminar = 1 WHERE Autor= '$id_admin'";
       $resultado = $mysqli->query($sql);
       $sql = "UPDATE controles SET area_existe = '#e7744f', area_crear_eliminar = 'area_eliminar' WHERE id_admin= '$id_admin' && Area = '$area'";
       $result = $mysqli->query($sql);
    }
    if(isset($_POST['area_eliminar'])) {
       $area=$_POST["area"];
       $id_admin=$_POST["id_admin"];
       $sql = "UPDATE datosg SET area_crear_eliminar = 0 WHERE Autor= '$id_admin'"; 
       $result = $mysqli->query($sql);
       $sql = "UPDATE controles SET area_existe = '#666666', area_crear_eliminar = 'area_crear' WHERE id_admin = '$id_admin' && Area = '$area'";
       $result = $mysqli->query($sql);
    }
     if(isset($_POST['centro_eliminar'])) {
       $id_centro=$_POST["id_centro"];
       $sql = "UPDATE controles_ausentismo2 SET Centro_existe = '#666666', Centro_crear_eliminar = 'centro_crear' WHERE id = '$id_centro'"; 
       $result = $mysqli->query($sql);
       //$sql = "UPDATE datosg SET centro_existe = '#666666', centro_crear_eliminar = 'centro_crear' WHERE Autor= '$id_admin' && Centro = '$centro'";
       //$result = $mysqli->query($sql);
    }
    if(isset($_POST['centro_crear'])) {
       $id_centro=$_POST["id_centro"];
       $sql = "UPDATE controles_ausentismo2 SET Centro_existe = '#e7744f', Centro_crear_eliminar = 'centro_eliminar' WHERE id = '$id_centro'"; 
       $resultado = $mysqli->query($sql);
       //$sql = "UPDATE datosg SET centro_existe = '#e7744f', centro_crear_eliminar = 'centro_eliminar' WHERE Autor= '$id_admin' && Centro = '$centro'";
       //$result = $mysqli->query($sql);
    }
    if(isset($_POST['eliminar_centro'])) {
       $id_admin=$_POST["id_admin"];
       $Centro=$_POST["Centro"];
       $sql = "DELETE FROM controles_ausentismo2 WHERE id_admin = '$id_admin' && Centro_ = '$Centro'";  
       $result = $mysqli->query($sql);;
    }
     if(isset($_POST['eliminar_area'])) {
       $id=$_POST["id"];
       $sql = "DELETE FROM controles WHERE id = '$id'"; 
       $result = $mysqli->query($sql);;
    }
     if(isset($_POST['eliminar_sede'])) {
       $id=$_POST["id"];
       $sql = "DELETE FROM controles WHERE id = '$id'"; 
       $result = $mysqli->query($sql);;
    }
     if(isset($_POST['eliminar_certificada'])) {
       $id=$_POST["id"];
       $sql = "DELETE FROM controles WHERE id = '$id'"; 
       $result = $mysqli->query($sql);;
    }
     if(isset($_POST['year'])) {
       $id_admin=$_POST["id_admin"];
       $year=$_POST["year"];
       $sql = "UPDATE admin SET Ausentismo2 = $year WHERE id= $id_admin";
       $resultado = $mysqli->query($sql);
    }
?>