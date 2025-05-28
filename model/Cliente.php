<?php
class Cliente {
    private $idcliente;
    private $nombres;
    private $apellidos;
    private $dni;
    private $celular;
    private $direccion;

    // Getters
    public function getIdcliente() {
        return $this->idcliente;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    // Setters
    public function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}
?>