<?php

if (isset($_POST ['submit'])) {
    // voeg de koppeling naar de database toe
    require 'config.inc.php';

    //lees het formulier uit

    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Email = $_POST['Email'];
    $Telefoon = $_POST['Telefoon'];
    $Woonplaats = $_POST['Woonplaats'];
    $Bericht = $_POST['Bericht'];

    //maak de query:

    $query = "INSERT INTO formherenhuis
           VALUES (NULL,'$Voornaam', '$Achternaam', '$Email', '$Telefoon','$Woonplaats','$Bericht')";

    //TEST: Schrijf de query naar het scherm (tijdelijke Code)
    $result = mysqli_query($mysqli, $query);
    echo $query;

    //Als de opdracht goed wordt uitgevoerd:
    if ($result) {
        header("location: contactpagina.html");
    } else {
        die("Error");
    }
}
else
{
    echo "<p>Geen gegevens ontvangen...</p>";
}