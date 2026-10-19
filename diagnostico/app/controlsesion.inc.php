<?php
class controlsesion {
    public static function  iniciar_sesion($id, $Nit, $Razon ) {
        if (session_id() == '') {
            session_start();          
        }
        $_SESSION['id'] = $id;
        $_SESSION['Nit'] = $Nit; 
        $_SESSION['Razon'] = $Razon;
    }
    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if (isset($_SESSION['Nit'])) {
            unset($_SESSION['Nit']);
        }
        if (isset($_SESSION['Razon'])) {
            unset($_SESSION['Razon']);
        }
        session_destroy(); 
    }
    public static function sesion_iniciada() {
        if (session_id() == '') {
            session_start();
        }
        if ( isset($_SESSION['id']) &&  isset($_SESSION['Nit']) && isset($_SESSION['Razon'])){
            return true;
        } else {
            return false;
        }
    }
} 