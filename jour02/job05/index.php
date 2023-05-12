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
    $x = 1000;

    for ($i = 2; $i <= $x; $i++) {
        $prime_num = true;
        for ($j = 2; $j <= ($i / 2); $j++) {
            if ($i % $j == 0) {
                $prime_num = false;
            }
        }

        if ($prime_num == true) {
            echo $i, "<br />";
        }	
    }
    ?>
</body>
</html>