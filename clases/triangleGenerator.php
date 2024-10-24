<?php

class TriangleGenerator {

    public function generateTriangle($altura) {
        for ($i = 0; $i < $altura; $i++) {
            $frase = "";
            for ($j = $altura - ($i + 1); $j > 0; $j--) {
                $frase = $frase . "&nbsp;";
            }
            for ($j = 1; $j <= ($i * 2) + 1; $j++) {
                $frase = $frase . "*";
            }
            echo "<p style=font-family:monospace>" . $frase . "</p>";
        }
    }

}

?>