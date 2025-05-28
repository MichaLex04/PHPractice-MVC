<?php
class Categoria {
    private $idcategoria;
    private $nombre;
    private $idfamilia;

    // Getters
    public function getIdcategoria() {
        return $this->idcategoria;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getIdfamilia() {
        return $this->idfamilia;
    }

    // Setters
    public function setIdcategoria($idcategoria) {
        $this->idcategoria = $idcategoria;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setIdfamilia($idfamilia) {
        $this->idfamilia = $idfamilia;
    }
}
?>