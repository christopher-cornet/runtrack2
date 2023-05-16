<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function leetSpeak($str="Il y a celui qui veux rattraper le meilleur et celui qui veut dépasser le meilleur. C'est cette différence qui fait la victoire.") {
        echo "<p>", $str, "</p>", "<br />";
        for ($x = 0; isset($str[$x]); $x++) {
            if ($str[$x] == 'a' || $str[$x] == 'A') {
                $str[$x] = '4';
            }
            if ($str[$x] == 'b' || $str[$x] == 'B') {
                $str[$x] = '8';
            }
            if ($str[$x] == 'e' || $str[$x] == 'E') {
                $str[$x] = '3';
            }
            if ($str[$x] == 'g' || $str[$x] == 'G') {
                $str[$x] = '6';
            }
            if ($str[$x] == 'l' || $str[$x] == 'L') {
                $str[$x] = '1';
            }
            if ($str[$x] == 's' || $str[$x] == 'S') {
                $str[$x] = '5';
            }
            if ($str[$x] == 't' || $str[$x] == 'T') {
                $str[$x] = '7';
            }
        }
        echo "<p>", $str, "</p>", "<br />";
    }

    leetSpeak()
?>
</body>
</html>