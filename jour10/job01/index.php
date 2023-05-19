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

    $query = "SELECT * FROM etudiants";
    $execute = $db->query($query);
    
    echo "<table border=1>";
    echo "<tr>
            <th>ID</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>";

    while ($row = $execute -> fetch()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["prenom"] . "</td>
            <td>" . $row["nom"] . "</td>
            <td>" . $row["naissance"] . "</td>
            <td>" . $row["sexe"] . "</td>
            <td>" . $row["email"] . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>