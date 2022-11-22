<?php
    function calcule($a, $operation, $b) {

        if ($operation == "+") {
                $c = $a + $b;
                echo $c;
            }

        elseif ($operation == "-") {
                $c = $a - $b;
                echo $c;
            }

        elseif ($operation == "/") {
                $c = $a / $b;
                echo $c;
            }

        elseif ($operation == "%") {
                $c = $a % $b;
                echo $c;
            }
    }

    calcule(2, "+", 4);

?>