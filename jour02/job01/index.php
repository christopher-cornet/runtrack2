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
    while ($i <= 1337) {
        echo "<p>", $i, "</p>", "<br>";
        $i++;
        if ($i == 42) {
            echo "<p>", "<b>", "<u>", $i, "</u>", "</b>", "</p>", "<br>";
        }
    }
    ?>
</body>
</html>