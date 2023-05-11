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
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    for ($x = 0; isset($str[$x]); $x++) {
        if ($str[$x] == 'a' || $str[$x] == 'e' || $str[$x] == 'i' || $str[$x] == 'o' || $str[$x] == 'u' || $str[$x] == 'y' || $str[$x] == 'I') {
            echo $str[$x];
        }
    }
    ?>
</body>
</html>