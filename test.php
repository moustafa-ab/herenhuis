<?php
	require_once("config.inc.php");

	$Voornaam = $_POST['Voornaam'];
	$Achternaam= $_POST['Achternaam'];
	$Bieden = $_POST['Bieden'];
	$Datum = $_POST['Datum'];

	$query = "INSERT INTO bid (Voornaam, Achternaam, Bieden, Datum)
			  VALUES ('$Voornaam', '$Achternaam', '$Bieden', '$Datum')";
	$result = mysqli_query($mysqli, $query);

	if ($result) {
		header("location: bid.php");
	} else {
		die("Error");
	}