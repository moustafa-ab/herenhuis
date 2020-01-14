<?php
/**
 * Created by PhpStorm.
 * User: 83799
 * Date: 13/03/2019
 * Time: 15:44
 */


/*Configuration voor database connectie*/

$db_hostname   = "localhost";           // de naam van de host
$db_username   = "mous";         // jouw gebrukersnaam voor PHPMyAdmin
$db_password   = "Denhaag_20";            // jouw wachtwoord voor PHPMYAdmin
$db_database   = "dbschool1";         // de naam van jouw database

//maak de database -verbinding
$mysqli = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

//het object $mysqli bevat de verbinding met de database
//die gebruiken we in de PHP-pagina

//als de verbinding niet gemaakt kan worden: geef een melding

if (!$mysqli) {
    echo "Fout: geen connectie naar database .<br>";
    echo 'Errno:' . mysqli_connect_error() . "<br/>";
    echo 'Errno:' . mysqli_connect_error() . "<br/>";
    exit;
}

//zet foutmelding aan!
error_reporting(E_ALL);
ini_set('display_errors', '1')




?>