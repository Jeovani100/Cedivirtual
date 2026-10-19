<?php
include_once 'repositorioadmin.inc.php';
class validadorloginusuario {
    private $usuario;
    private $error;
    public function __construct($Cedula, $conexion) {
        $this -> error = "";
        if (!$this -> variable_iniciada($Cedula)) {
            $this -> usuario = null;
            $this -> error = "Debes escribir un <span style='font-family:verdanab'>número de cédula</span>";
        } else {
            $this -> usuario = repositorioadmin::Cedula_existe_usuario2($conexion, $Cedula);
            if ($this -> usuario == false) {
                $this -> error = "Este número de cédula aún no ha sido registrado en el sistema.  Por favor, comuníquese al <a href='https://api.whatsapp.com/send?phone=573115602702' target='_blank' style='color:#adebad;font-family:verdanab;font-size:14px'>&nbsp3115602702</a> para poder iniciar.";                        
            }         
        }
    }
    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    public function obtener_usuario() {
        return $this -> usuario;
    }
    public function obtener_error() {
        return $this -> error;
    }
    public function  mostrar_error() {
        if ($this->error !== '') {
            echo "<br><div class='alert alert-danger' role='alert'>";
            echo $this -> error;
            echo "</div>";            
        }
    }    
}





