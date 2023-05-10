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
        switch ($i) {
            case 26:
                echo "<br>";
                $i++;
                break;
            case 37:
                echo "<br>";
                $i++;
                break;
            case 88:
                echo "<br>";
                $i++;
                break;
            case 1111:
                echo "<br>";
                $i++;
                break;
            case 3233:
                echo "<br>";
                $i++;
                break;
            default:
                echo "<p>", $i, "</p>", "<br>";
                $i++;
        }
    }
    ?>
</body>
</html>