<?php

if (isset($_POST ['submit'])) {
    // voeg de koppeling naar de database toe
    require 'config.inc.php';

    //lees het formulier uit

    $Voornaam = $_POST['Voornaam'];
    $Achternaam = $_POST['Achternaam'];
    $Bieden = $_POST['Bieden'];
    $Datum = $_POST['Datum'];

    //maak de query:

    $query = "INSERT INTO `bid`(`ID`, `Voornaam`, `Achternaam`, `Bieden`,`Datum`) 
          VALUES (NULL , '$Voornaam' , '$Achternaam' , '$Bieden', '$Datum')";

    //TEST: Schrijf de query naar het scherm (tijdelijke Code)
    $result = mysqli_query($mysqli, $query);
    echo $query;

    //Als de opdracht goed wordt uitgevoerd:
	if ($result) {
		header("location: bid.php");
	} else {
		die("Error");
	}
}
else
{
    echo "<p>Geen gegevens ontvangen...</p>";
}
