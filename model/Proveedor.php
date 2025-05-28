<?php
class Proveedor {
    private $idproveedor;
    private $nombre;
    private $ruc;
    private $telefono;
    private $direccion;

    // Getters
    public function getIdproveedor() {
        return $this->idproveedor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getRuc() {
        return $this->ruc;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    // Setters
    public function setIdproveedor($idproveedor) {
        $this->idproveedor = $idproveedor;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setRuc($ruc) {
        $this->ruc = $ruc;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
}
?>