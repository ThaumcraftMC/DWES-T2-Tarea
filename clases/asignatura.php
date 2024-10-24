<?php

class Asignatura {

    private $id;
    private $nombre;
    private $creditos;

    public function __construct($id, $nombre, $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

}

?>