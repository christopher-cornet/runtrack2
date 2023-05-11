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
    $tableau = [200, 204, 173, 98, 171, 404, 459];
    foreach ($tableau as $x) {
        if ($x % 2 == 0) {
            echo $x, " est ", "pair.", "<br />";
        }
        else {
            echo $x, " est ", "impair.", "<br />";
        }
    }
    ?>
</body>
</html>