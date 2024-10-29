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

        $alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
        $alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
        $alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
        $alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
        $alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
        $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
        $alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
        $alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
        $alumnos[9]->matricularEnAsignatura($asignaturas[0]);

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

        <h2>Alumnos <= 23</h2>
        <ul>
            <?php
            $alumnosMenor = array_filter($alumnos, function($alumno){
                return $alumno->getEdad() <= 23;
            });

            foreach($alumnosMenor as $alumno) {
                echo "<li>" . $alumno->toString() . "</li>";
            }
            ?>
        </ul>

        <h2>Alumnos con al menos 2 asignaturas</h2>
        <ul>
            <?php
            $alumnosAsig = array_filter($alumnos, function($alumno){
                return count($alumno->getAsignaturas()) >= 2;
            });

            foreach($alumnosAsig as $alumno) {
                echo "<li>" . $alumno->toString() . "</li>";
            }
            ?>
        </ul>

        <h2>Asignaturas con algun alumno matriculado</h2>
        <ul>
            <?php
            foreach($asignaturas as $asig) {
                foreach($alumnos as $alum) {
                    if (in_array($asig, $alum->getAsignaturas())) {
                        echo "<li>" . $asig->toString() . "</li>";
                        break;
                    }
                }
            }
            ?>
        </ul>
    </body>
</html>