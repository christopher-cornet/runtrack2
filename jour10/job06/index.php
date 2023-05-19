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
    $db = new PDO('mysql:host=localhost;dbname=jour09', 'root', '');

    $sql = "SELECT COUNT(*) FROM etudiants";
    $result = $db->query($sql);
    
    echo "<table border=1>";
    echo "<tr>
            <th>Nombre d'étudiants</th>
        </tr>";

    foreach ($result as $total -> fetch()) {
        echo "<tr>
            <td>" . $total . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>