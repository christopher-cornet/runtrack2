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
    function occurrences($str="Il y a celui qui veux rattraper le meilleur et celui qui veut dépasser le meilleur. C'est cette différence qui fait la victoire.", $char="a") {
        $nbchar = 0;
        for ($x = 0; isset($str[$x]); $x++) {
            if ($str[$x] == $char) {
                $nbchar++;
            }
        }
        echo "<p>", $str, "</p>", "<br />";
        echo "<p>", "Nombre d'occurences de '$char' dans Str: ", $nbchar, "</p>", "<br />";
        echo "<p>", "Nombre de lettres dans Str: ", $x, "</p>";
    }

    occurrences()
?>
</body>
</html>