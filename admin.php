
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herenhuis</title>
</head>
<style>
    body{
        background: lightblue;
    }
    label {
        display: block;
        margin: 5px 0;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    td,
    th {
        padding: 5px;
        border-bottom: 1px solid #aaa;
    }
</style>
<body>
<h1>Alle aanmeldingen van de Herenhuis</h1>




<?php
/**
 * Created by PhpStorm.
 * User: 83799
 * Date: 27/03/2019
 * Time: 16:19
 */

//voeg het bestand config.php toe:
require 'config.inc.php';

//Maak een query
$query = "SELECT * FROM formherenhuis";

//voeg het resultaat van de query op in 'resultaat'
$resulaat = mysqli_query($mysqli, $query);

//als het resultaat uit 0 rijen bestaat:
if (mysqli_num_rows($resulaat)== 0)
{
    echo "<p>er zijn geen resultaten gevonden.</p>";
}
//als er wel rijden zijn gevonden:
else {

    //maak een tabel (Buiten de while_lus!)
    echo "<h2>Resulaten</h2>";

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Voornaam</th>";
    echo "<th>Achternaam</th>";
    echo "<td><strong>Details:</strong></td>";
    echo "</tr>";
    echo "</thead>";
    echo "<body>";

    while ($rij = mysqli_fetch_array($resulaat)) {

        echo "</tr>";
        echo "<td>" . $rij["ID"] . "</td>";
        echo "<td>" . $rij['Voornaam'] . "</td>";
        echo "<td>" . $rij['Achternaam'] . "</td>";
        echo "<td> <a href='heren_detail.php?id=" . $rij['ID'] . "'>Detail</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</body>";
}
?>




</html>
