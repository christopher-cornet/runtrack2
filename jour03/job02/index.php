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
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    for ($x = 0; isset($str[$x]); $x++) {
        if ($x % 2 == 0) {
            echo $str[$x];
        }
        else {
            echo "";
        }
    }
    ?>
</body>
</html>