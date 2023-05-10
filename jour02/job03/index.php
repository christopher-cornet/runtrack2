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
    $i = 0;
    while ($i <= 100) {
        if ($i <= 20) {
            echo "<p>", "<i>", $i, "</i>", "</p>", "<br>";
            $i++;
        }
        if ($i >= 25 && $i <= 50) {
            echo "<p>", "<u>", $i, "</u>", "</p>", "<br>";
            $i++;
        }
        if ($i == 42) {
            echo "<p>", "La Plateforme_", "</p>", "<br>";
            $i++;
        }

        // Si les premières conditions ne sont plus correctes.
        if ($i > 20 && $i < 25) {
            echo "<p>", $i, "</p>", "<br>";
            $i++;
        }
        if ($i > 50) {
            echo "<p>", $i, "</p>", "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>