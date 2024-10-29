<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

        $libros = [  
            "libro1" => [  
                "titulo" => "PHP para Principiantes",  
                "autor" => "Carlos Ruiz",  
                "precio" => 19.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro2" => [  
                "titulo" => "JavaScript Avanzado",  
                "autor" => "Laura García",  
                "precio" => 25.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro3" => [  
                "titulo" => "Algoritmos en Python",  
                "autor" => "Miguel Fernández",  
                "precio" => 29.99,  
                "categoria" => "Algoritmos"  
            ]  
        ];



        ?>

        <h2>Información de todos los libros</h2>

        <table border=1>
            <thead>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Categoría</th>
            </thead>
            <?php

            foreach($libros as $libro) {
                echo "<tr>";

                echo "<td>" . $libro["titulo"] . "</td>";
                echo "<td>" . $libro["autor"] . "</td>";
                echo "<td>" . $libro["precio"] . "€</td>";
                echo "<td>" . $libro["categoria"] . "</td>";

                echo "</tr>";
            }

            ?>
        </table>

        <h2>Libros de la categoría 'Desarrollo Web'</h2>

        <ul>
        <?php
            $librosDW = array_filter($libros, function($libro){
                return $libro["categoria"] == "Desarrollo web";
            });

            foreach($librosDW as $libro) {
                echo "<li>" . $libro["titulo"] . "</li>";
            }
            ?>
        </ul>
    </body>
</html>