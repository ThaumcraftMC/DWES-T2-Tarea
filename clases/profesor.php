<?php

class Profesor extends Miembro {

    private $titular;
    private $asignatura;

    public function __construct($id, $nombre, $apellidos, $email, $edad, $titular, $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->titular = $titular;
        $this->asignatura = $asignatura;
    }

}

?>