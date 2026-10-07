<?php
class usuario {
    private $id;
    private $Nit;
    private $Razon;
    private $Clave;
    private $Economica;
    private $Telefono;
    private $Email;
    private $Direccion;
    private $Departamento;
    private $Ciudad;
    private $Sede;
    private $PersonaC;
    private $TelefonoC;
    private $Activo;
    private $Activo2;
    private $Activo3;
    private $Activo4;
    private $Activo5;
    private $Fecha;
    public function __construct($id,  $Nit, $Razon, $Clave, $Economica, $Telefono, $Email, $Direccion, $Departamento, $Ciudad, $Sede, $PersonaC, $TelefonoC, $Activo, $Activo2, $Activo3, $Activo4, $Activo5) {
        $this -> id = $id;
        $this -> Nit = $Nit;
        $this -> Razon = $Razon;
        $this -> Clave = $Clave;
        $this -> Economica = $Economica;
        $this -> Telefono = $Telefono;
        $this -> Email = $Email;
        $this -> Direccion = $Direccion;
        $this -> Departamento = $Departamento;
        $this -> Ciudad = $Ciudad;
        $this -> Sede = $Sede;
        $this -> PersonaC = $PersonaC;
        $this -> TelefonoC = $TelefonoC;
        $this -> Activo = $Activo;
        $this -> Activo2 = $Activo2;
        $this -> Activo3 = $Activo3;
        $this -> Activo4 = $Activo4;
        $this -> Activo5 = $Activo5;
    }

    public function obtener_id() {
            return $this -> id;
    }
    public function obtener_Nit() {
            return $this -> Nit;
    }
    public function obtener_Razon() {
            return $this -> Razon;
    }
    public function obtener_Clave() {
            return $this -> Clave;
    }
    public function obtener_Economica() {
            return $this -> Economica;
    }
    public function obtener_Telefono() {
            return $this -> Telefono;
    }
    public function obtener_Email() {
            return $this -> Email;
    }
    public function obtener_Direccion() {
            return $this -> Direccion;
    }
    public function obtener_Departamento() {
            return $this -> Departamento;
    }
    public function obtener_Ciudad() {
            return $this -> Ciudad;
    }
    public function obtener_Sede() {
            return $this -> Sede;
    }
    public function obtener_PersonaC() {
            return $this -> PersonaC;             
    }
	public function obtener_TelefonoC() {
            return $this -> TelefonoC;
    }
    public function obtener_Activo() {
            return $this -> Activo;
    }
    public function obtener_Activo2() {
            return $this -> Activo2;
    }
    public function obtener_Activo3() {
            return $this -> Activo3;
    }
    public function obtener_Activo4() {
            return $this -> Activo4;
    }
    public function obtener_Activo5() {
            return $this -> Activo5;
    }
    public function obtener_Fecha() {
            return $this -> Fecha;
    }	   
}
