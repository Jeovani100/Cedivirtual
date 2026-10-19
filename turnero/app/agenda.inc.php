<?php
class usuario_agenda {
    private $id;
    private $Nombre;
    private $Clave;
    private $Activo;
    public function __construct($id, $Nombre, $Clave, $Activo) {
        $this -> id = $id;
        $this -> Nombre = $Nombre;
        $this -> Clave = $Clave;
        $this -> Activo = $Activo;
    }
    public function obtener_id() {
        return $this -> id;
    }
    public function obtener_Nombre() {
        return $this -> Nombre;
    }
    public function obtener_Clave() {
        return $this -> Clave;
    }
    public function obtener_Activo() {
        return $this -> Activo;
    }
}
