<?php
class controlsesion5 {
    public static function  iniciar_sesion($Codigo) {
        if (session_id() == '') {
            session_start();          
        }
        $_SESSION['Codigo'] = $Codigo; 
    }
    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['Codigo'])) {
            unset($_SESSION['Codigo']);
        }
        session_destroy(); 
    }
    public static function sesion_iniciada() {
        if (session_id() == '') {
            session_start();
        }
        if ( isset($_SESSION['Codigo'])){
            return true;
        } else {
            return false;
        }
    }
} 