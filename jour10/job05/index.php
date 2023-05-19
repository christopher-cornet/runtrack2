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

    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance >= DATE '2005-05-19'";
    $result = $db->query($sql);
    
    echo "<table border=1>";
    echo "<tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>";

    while ($row = $result -> fetch()) {
        echo "<tr>
            <td>" . $row["prenom"] . "</td>
            <td>" . $row["nom"] . "</td>
            <td>" . $row["naissance"] . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>