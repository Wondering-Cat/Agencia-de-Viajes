<?php
class PaqueteViaje {
    public $nombreHotel;
    public $ciudad;
    public $pais;
    public $fecha;
    public $duracion;

    public function __construct($nombreHotel, $ciudad, $pais, $fecha, $duracion) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fecha = $fecha;
        $this->duracion = $duracion;
    }

    public function mostrarDetalle() {
        return "Hotel: $this->nombreHotel, Ciudad: $this->ciudad, País: $this->pais, Fecha: $this->fecha, Duración: $this->duracion días.";
    }
}
?>
