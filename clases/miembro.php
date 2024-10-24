<?php

abstract class Miembro {

    private $id;
    private $nombre;
    private $apellidos;
    private $email;

    public function __construct($id, $nombre, $apellidos, $email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}

?>