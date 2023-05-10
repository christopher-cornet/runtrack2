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
    $i = 1;
    while ($i <= 100) {
        echo "<p>", $i, "</p>", "<br>";
        $i++;
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<p>", "FizzBuzz", "</p>", "<br>";
            $i++;
        }
        if ($i % 3 == 0) {
            echo "<p>", "Fizz", "</p>", "<br>";
            $i++;
        }
        if ($i % 5 == 0) {
            echo "<p>", "Buzz", "</p>", "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>