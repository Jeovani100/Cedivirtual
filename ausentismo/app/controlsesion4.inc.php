<?php
class controlsesion4 {
    public static function  iniciar_sesion($Clave) {
        if (session_id() == '') {
            session_start();          
        }
        $_SESSION['Clave'] = $Clave; 
    }
    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }
        if (isset($_SESSION['Clave'])) {
            unset($_SESSION['Clave']);
        }
        session_destroy(); 
    }
    public static function sesion_iniciada() {
        if (session_id() == '') {
            session_start();
        }
        if ( isset($_SESSION['Clave'])){
            return true;
        } else {
            return false;
        }
    }
} 