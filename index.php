<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

        include("clases/miembro.php");
        include("clases/alumno.php");
        include("clases/profesor.php");
        include("clases/asignatura.php");

        $a = new Alumno(0, "", "", "", 0);
        $alumnos = $a->crearAlumnosDeMuestra();
        $b = new Profesor(0, "", "", "", "");
        $profesores = $b->crearProfesoresDeMuestra();
        $c = new Asignatura(0, "", 0);
        $asignaturas = $c->crearAsignaturasDeMuestra();

        ?>

        <h2>Alumnos</h2>
        <ul>
            <?php
            foreach($alumnos as $alumno) {
                echo "<li>" . $alumno->toString() . "</li>";
            }
            ?>
        </ul>

        <h2>Profesores</h2>
        <ul>
            <?php
            foreach($profesores as $profesor) {
                echo "<li>" . $profesor->toString() . "</li>";
            }
            ?>
        </ul>

        <h2>Asignaturas</h2>
        <ul>
            <?php
            foreach($asignaturas as $asignatura) {
                echo "<li>" . $asignatura->toString() . "</li>";
            }
            ?>
        </ul>
    </body>
</html>