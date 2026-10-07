<?php
class validadoradmin {
    private $aviso_inicio;
    private $aviso_cierre;
    
    private $Nit;
    private $Razon;
    private $Clave1;
    private $Clave2;
    private $Economica;
    private $Telefono;
    private $Email;
    private $Direccion;
    private $Departamento;
    private $Ciudad;
    private $Sede;
    private $PersonaC;
    private $TelefonoC;
    
    private $error_Nit;
    private $error_Razon;
    private $error_Clave1;
    private $error_Clave2;
    private $error_Economica;
    private $error_Telefono;
    private $error_Email;
    private $error_Direccion;
    private $error_Departamento;
    private $error_Ciudad;
    private $error_Sede;
    private $error_PersonaC;
    private $error_TelefonoC;
    private $error_EmailC;
  
    public function __construct($Nit, $Razon, $Clave1, $Clave2, $Economica, $Telefono, $Email, $Direccion, $Departamento, $Ciudad, $Sede, $PersonaC, $TelefonoC, $conexion) {

        $this->aviso_inicio = "<br><div class='alert alert-danger' Habilitacione='alert'>";
        $this->aviso_cierre = "</div>";

        $this->Nit = "";
        $this->Razon = "";
        $this->Clave = "";
        $this->Economica = "";
        $this->Telefono = "";
        $this->Email = "";
        $this->Direccion = "";
        $this->Departamento = "";
        $this->Ciudad = "";
        $this->Sede = "";
        $this->PersonaC = "";
        $this->TelefonoC = "";

        $this->error_Nit = $this->validar_Nit($Nit);
        $this->error_Razon = $this->validar_Razon($Razon);
        $this->error_Clave1 = $this->validar_Clave1($Clave1);
        $this->error_Clave2 = $this->validar_Clave2($Clave1, $Clave2);
        $this->error_Economica = $this->validar_Economica($Economica);
        $this->error_Telefono = $this->validar_Telefono($Telefono);
        $this->error_Email = $this->validar_Email($conexion, $Email);
        $this->error_Direccion = $this->validar_Direccion($Direccion);
        $this->error_Departamento = $this->validar_Departamento($Departamento);
        $this->error_Ciudad = $this->validar_Ciudad($Ciudad);
        $this->error_Sede = $this->validar_Sede($Sede);
        $this->error_PersonaC = $this->validar_PersonaC($PersonaC);
        $this->error_TelefonoC = $this->validar_TelefonoC($TelefonoC);

        if ($this->error_Clave1 === "" && $this->error_Clave2 === "") {
            $this->Clave = $Clave1;
        }
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    private function validar_Nit($Nit) {
        if (!$this->variable_iniciada($Nit)) {
            return "Por favor, escriba el Nit de la Empresa";
        } else {
            $this->Nit = $Nit;
        }
        return "";
    }
    private function validar_Razon($Razon) {
        if (!$this->variable_iniciada($Razon)) {
            return "Por favor, escriba la razón social de la Empresa";
        } else {
            $this->Razon = $Razon;
        }
        return "";
    }
    private function validar_Clave1($Clave1) {
        if (!$this->variable_iniciada($Clave1)) {
            return "Escriba una contrañesa";
        }
        return "";
    }
    private function validar_Clave2($Clave1, $Clave2) {
        if (!$this->variable_iniciada($Clave1)) {
            return "Primero debe escribir la contraseña";
        }
        if (!$this->variable_iniciada($Clave2)) {
            return "Debe repetir tu contraseña";
        }
        if ($Clave1 !== $Clave2) {
            return "Ambas contraseñas deben coincidir";
        }
        return "";
    }
     private function validar_Economica($Economica) {
        if (!$this->variable_iniciada($Economica)) {
            return "Especifique la actividad económica de la Empresa";
        } else {
            $this->Economica = $Economica;
        }
        return "";
    }
    private function validar_Telefono($Telefono) {
        if (!$this->variable_iniciada($Telefono)) {
            return "Escriba el N° telefónico de la Empresa";
        } else {
            $this->Telefono = $Telefono;
        }
        return "";
    }
    private function validar_Email($conexion, $Email) {
        if (!$this->variable_iniciada($Email)) {
            return "Escriba una dirección de correo electrónico";
        } else {
            $this->Email = $Email;
        }
        if (repositorioadmin :: Email_existe($conexion, $Email)) {
            return "Este correo ya está en uso, por favor pruebe con otro.";
        }
        return "";
    }
    private function validar_Direccion($Direccion) {
        if (!$this->variable_iniciada($Direccion)) {
            return "Escriba la dirección de la Empresa";
        } else {
            $this->Direccion = $Direccion;
        }
        return "";
    }
    private function validar_Departamento($Departamento) {
        if (!$this->variable_iniciada($Departamento)) {
            return "¿En qué departamento se encuentra ubicada la Empresa?";
        } else {
            $this->Departamento = $Departamento;
        }
        return "";
    }
     private function validar_Ciudad($Ciudad) {
        if (!$this->variable_iniciada($Ciudad)) {
            return "¿En qué ciudad se encuentra ubicada la Empresa?";
        } else {
            $this->Ciudad = $Ciudad;
        }
        return "";
    }
    private function validar_PersonaC($PersonaC) {
        if (!$this->variable_iniciada($PersonaC)) {
            return "Escriba el nombre y el primer apellido de un contacto";
        } else {
            $this->PersonaC = $PersonaC;
        }
        return "";
    }
     private function validar_TelefonoC($TelefonoC) {
        if (!$this->variable_iniciada($TelefonoC)) {
            return "Escriba el número celular del contacto";
        } else {
            $this->TelefonoC = $TelefonoC;
        }
        return "";
    }
     private function validar_Sede($Sede) {
        if (!$this->variable_iniciada($Sede)) {
            return "Escriba la sede de la empresa";
        } else {
            $this->Sede = $Sede;
        }
        return "";
    }
    
    public function obtener_Nit() {
        return $this->Nit;
    }
    public function obtener_Razon() {
        return $this->Razon;
    }
    public function obtener_Clave() {
        return $this->Clave;
    }
    public function obtener_Economica() {
        return $this->Economica;
    }
    public function obtener_Telefono() {
        return $this->Telefono;
    }
    public function obtener_Email() {
        return $this->Email;
    }
    public function obtener_Direccion() {
        return $this->Direccion;
    }
    public function obtener_Departamento() {
        return $this->Departamento;
    }
    public function obtener_Ciudad() {
        return $this->Ciudad;
    }
    public function obtener_PersonaC() {
        return $this->PersonaC;
    }
    public function obtener_TelefonoC() {
        return $this->TelefonoC;
    }
    public function obtener_Sede() {
        return $this->Sede;
    }
    
    
    public function mostrar_Nit() {
        if ($this->Nit !== "") {
            echo $this->Nit;
        }
    }
    public function mostrar_Razon() {
        if ($this->Razon !== "") {
            echo $this->Razon;
        }
    }
      public function mostrar_Economica() {
        if ($this->Economica !== "") {
            echo $this->Economica;
        }
    }
      public function mostrar_Telefono() {
        if ($this->Telefono !== "") {
            echo $this->Telefono;
        }
    }
    public function mostrar_Email() {
        if ($this->Email !== "") {
            echo $this->Email;
        }
    }
    public function mostrar_Direccion() {
        if ($this->Direccion !== "") {
            echo $this->Direccion;
        }
    }
    public function mostrar_Departamento() {
        if ($this->Departamento !== "") {
            echo $this->Departamento;
        }
    }
    public function mostrar_Ciudad() {
        if ($this->Ciudad !== "") {
            echo $this->Ciudad;
        }
    }
    public function mostrar_PersonaC() {
        if ($this->PersonaC !== "") {
            echo $this->PersonaC;
        }
    }
    public function mostrar_TelefonoC() {
        if ($this->TelefonoC !== "") {
            echo $this->TelefonoC;
        }
    }
    public function mostrar_Sede() {
        if ($this->Sede !== "") {
            echo $this->Sede;
        }
    }
    
    
    public function obtener_error_Nit() {
        return $this->error_Nit;
    }
    public function obtener_error_Email() {
        return $this->error_Email;
    }
    public function mostrar_error_Nit() {
        if ($this->error_Nit !== "") {
            echo $this->aviso_inicio . $this->error_Nit . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Email() {
        if ($this->error_Email !== "") {
            echo $this->aviso_inicio . $this->error_Email . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Telefono() {
        if ($this->error_Telefono !== "") {
            echo $this->aviso_inicio . $this->error_Telefono . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Razon() {
        if ($this->error_Razon !== "") {
            echo $this->aviso_inicio . $this->error_Razon . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Clave1() {
        if ($this->error_Clave1 !== "") {
            echo $this->aviso_inicio . $this->error_Clave1 . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Clave2() {
        if ($this->error_Clave2 !== "") {
            echo $this->aviso_inicio . $this->error_Clave2 . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Economica() {
        if ($this->error_Economica !== "") {
            echo $this->aviso_inicio . $this->error_Economica . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Direccion() {
        if ($this->error_Direccion !== "") {
            echo $this->aviso_inicio . $this->error_Direccion . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Departamento() {
        if ($this->error_Departamento !== "") {
            echo $this->aviso_inicio . $this->error_Departamento . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Ciudad() {
        if ($this->error_Ciudad !== "") {
            echo $this->aviso_inicio . $this->error_Ciudad . $this->aviso_cierre;
        }
    }
    public function mostrar_error_PersonaC() {
        if ($this->error_PersonaC !== "") {
            echo $this->aviso_inicio . $this->error_PersonaC . $this->aviso_cierre;
        }
    }
    public function mostrar_error_TelefonoC() {
        if ($this->error_TelefonoC !== "") {
            echo $this->aviso_inicio . $this->error_TelefonoC . $this->aviso_cierre;
        }
    }
    public function mostrar_error_Sede() {
        if ($this->error_Sede !== "") {
            echo $this->aviso_inicio . $this->error_Sede . $this->aviso_cierre;
        }
    }
    public function registro_valido() {
        if (    
                $this->error_Nit === "" &&
                $this->error_Razon === "" &&
                $this->error_Clave1 === "" &&
                $this->error_Clave2 === "" &&
                $this->error_Economica === "" &&
                $this->error_Telefono === "" &&
                $this->error_Email === "" &&
                $this->error_Direccion === "" &&
                $this->error_Departamento === "" &&
                $this->error_Ciudad === "" &&
                $this->error_Sede === "" &&
                $this->error_PersonaC === "" &&
                $this->error_TelefonoC === "") {
            return true;
        } else {
            return false;
        }
    }
}
