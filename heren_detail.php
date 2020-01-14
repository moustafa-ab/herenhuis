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
<?php
/**
 * Created by PhpStorm.
 * User: 83799
 * Date: 27/03/2019
 * Time: 16:19
 */

//voeg het bestand config.php toe:
require 'config.inc.php';

$Details = $_GET['id'];

//Maak een query
$query = "SELECT * FROM formherenhuis WHERE ID =" .$Details;

//voeg het resultaat van de query op in 'resultaat'
$resulaat = mysqli_query($mysqli, $query);

//als het resultaat uit 0 rijen bestaat:
if (mysqli_num_rows($resulaat)== 0)
{
    echo "<p>Er zijn geen resultaten gevonden in $Details.</p>";
}
//als er wel rijden zijn gevonden:
else{
    //haal de rij (Details) uit het resultaat
    $rij = mysqli_fetch_array($resulaat);
    //zet de gegevens van de user in het tabel
    echo "<h2>Gegevens van $Details:</h2>";
    echo "<table border='1'>";
    echo "<tr><td><strong>Voornaam:</strong></td>";
    echo        "<td>" .$rij['Voornaam']. "</td></tr>";
    echo "<tr><td><strong>Achternaam:</strong></td>";
    echo        "<td>" .$rij['Achternaam']. "</td></tr>";
    echo "<tr><td><strong>Email:</strong></td>";
    echo        "<td>" .$rij['Email']. "</td></tr>";
    echo "<tr><td><strong>Telefoon nummer:</strong></td>";
    echo        "<td>" .$rij['Telefoon']. "</td></tr>";
    echo "<tr><td><strong>Woonplaats:</strong></td>";
    echo        "<td>" .$rij['Woonplaats']. "</td></tr>";
    echo "<tr><td><strong>Bericht:</strong></td>";
    echo        "<td>" .$rij['Bericht']. "</td></tr>";

    echo "</table>";
}

echo "<p> Terug naar <a href='admin.php?'>overzicht</a></td></p> ";

?>
