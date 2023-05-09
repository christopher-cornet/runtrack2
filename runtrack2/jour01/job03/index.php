<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 3</title>
</head>
<body>
    <?php
    $eat = false;
    $fries = 10;
    $company = "Burger King";
    $water = 1.5;

    // Définir le nom des variables
    $$eat = "eat";
    $$fries = "fries";
    $$company = "company";
    $$water = "water";

    // Table
    echo "<table border=3>";


    // Titre des colonnes
    echo "<tr>";
    echo "<th>", "Type", "</th>";
    echo "<th>", "Nom", "</th>";
    echo "<th>", "Valeur", "</th>";
    echo "</tr>";

    // Eat
    echo "<tr>";
    echo "<td>", gettype($eat), "</td>";
    echo "<td>", $$eat, "</td>";
    echo "<td>", var_dump($eat), "</td>"; // j'utilise var_dump car sinon la case est vide.
    echo "</tr>";

    // Fries
    echo "<tr>";
    echo "<td>", gettype($fries), "</td>";
    echo "<td>", $$fries, "</td>";
    echo "<td>", $fries, "</td>";
    echo "</tr>";

    // Company
    echo "<tr>";
    echo "<td>", gettype($company), "</td>";
    echo "<td>", $$company, "</td>";
    echo "<td>", $company, "</td>";
    echo "</tr>";

    // Water
    echo "<tr>";
    echo "<td>", gettype($water), "</td>";
    echo "<td>", $$water, "</td>";
    echo "<td>", $water, "</td>";
    echo "</tr>";

    echo "</table>";
    ?>
</body>
</html>