<?php

class Alumno extends Miembro {

    private $asignaturas;
    private $cursoAbonado;

    public function __construct($id, $nombre, $apellidos, $email, $edad, $cursoAbonado) {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->cursoAbonado = $cursoAbonado;
        $this->asignaturas = array();
    }

    public function abonarCurso() {
        $this->cursoAbonado = true;
    }

    public function matricularseEnAsignatura($asignatura) {
        foreach ($this->asignaturas as $element) {
            if ($element->id == $asignatura->id) {
                return;
            }
        }
        $this->asignaturas[] = $asignatura;
    }

    public function bajaEnAsignatura($asignatura) {
        unset($this->asignaturas[$asignatura]);
    }

}

?>