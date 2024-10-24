<?php

class Profesor extends Miembro {

    private $titular;
    private $asignatura;

    public function __construct($id, $nombre, $apellidos, $email, $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->titular = false;
        $this->asignatura = $asignatura;
    }

    public static function crearProfesoresDeMuestra() {
        return array(
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES"),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW")
        );
    }

}

?>