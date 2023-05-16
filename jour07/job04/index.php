<?php
    function calcul($nb1=10, $operation="-", $nb2=2) {
        if ($operation == "*") {
            $result = $nb1 * $nb2;
            echo "Résultat: $result";
        }
        else if ($operation == "+") {
            $result = $nb1 + $nb2;
            echo "Résultat: $result";
        }
        else if ($operation == "-") {
            $result = $nb1 - $nb2;
            echo "Résultat: $result";
        }
        else if ($operation == "/") {
            $result = $nb1 / $nb2;
            echo "Résultat: $result";
        }
        else if ($operation == "%") {
            $result = $nb1 % $nb2;
            echo "Résultat: $result";
        }
    }

    calcul()
?>