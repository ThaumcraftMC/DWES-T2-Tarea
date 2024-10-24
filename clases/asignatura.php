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

    public static function crearAsignaturasDeMuestra() {
        return array(
            new Asignatura(1, "DWES", 7),
            new Asignatura(2, "DWEC", 6),
            new Asignatura(3, "DIW", 4),
            new Asignatura(4, "DAW", 4)
        );
    }

}

?>