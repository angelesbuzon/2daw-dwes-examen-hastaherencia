<?php
require_once 'conexion.php';

abstract class Usuario {
    public string $id;
    public string $nombre;
    public string $email;

    function __construct($id, $nombre, $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    abstract function getTipo(): string;

    function getInfo(): string {
        return $this->getTipo() . " " . $this->nombre . " - " . $this->email;
    }

    abstract function guardar(): bool;

}