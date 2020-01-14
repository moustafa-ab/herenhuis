<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>bieden</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Montserrat|Montserrat+Subrayada" rel="stylesheet">
    <link href="css.css" type="text/css" rel="stylesheet">
</head>
<style>
    body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6,
    pre, form, fieldset, input, textarea, p, blockquote, th, td {
        padding:0;
        margin:0;}

    fieldset, img {border:0}

    ol, ul, li {list-style:none}

    :focus {outline:none}

 
    input,
    textarea,
    select {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #4c4c4c;
    }

    p {
        font-size: 12px;
        width: 150px;
        display: inline-block;
        margin-left: 18px;
    }
    h1 {
        font-size: 32px;
        font-weight: 300;
        color: #4c4c4c;
        text-align: center;
        padding-top: 10px;
        margin-bottom: 10px;
    }

    .testbox {
        margin: 60px auto;
        width: 343px;
        height: 464px;
        -webkit-border-radius: 8px/7px;
        -moz-border-radius: 8px/7px;
        border-radius: 8px/7px;
        background-color: #ebebeb;
        -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
        -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
        box-shadow: 1px 2px 5px rgba(0,0,0,.31);
        border: solid 1px #cbc9c9;
    }

    input[type=radio] {
        visibility: hidden;
    }

    form{
        margin: 0 50px;
        padding-left: 30px;
    }


    input[type=text],input[type=date]{
        width: 200px;
        height: 39px;
        -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
        -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px;
        border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
        background-color: #fff;
        -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
        -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
        box-shadow: 1px 2px 5px rgba(0,0,0,.09);
        border: solid 1px #cbc9c9;
        margin-left: -5px;
        margin-top: 13px;
        padding-left: 10px;
    }

    input[type=date]{
        margin-bottom: 25px;
    }

    .accounttype{
        margin-left: 8px;
        margin-top: 20px;
    }

    .button1 {
        font-size: 20px;
        font-weight: 600;
        color: white;
        padding: 6px 25px 30px 20px;
        margin: 10px 8px 20px 20px;
        display: block;
        float: revert;
        text-decoration: none;
        width: 150px; height: 27px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 50px;
        background-color: #3a57af;
        -webkit-box-shadow: 0 3px rgba(58,87,175,.75);
        -moz-box-shadow: 0 3px rgba(58,87,175,.75);
        box-shadow: 0 3px rgba(58,87,175,.75);
        transition: all 0.1s linear 0s;
        top: 8px;
        position: relative;
    }



</style>
<body>
<div class="background"></div>
<div class="wrapper">

    <!-- Navigatie bar -->

    <div class="nav">

        <div class="nav-item-home">
            <a href="index.html">HOME</a>
        </div>

        <div class="nav-item">
            <a href="toerpagina.html">VIRTUAL TOUR</a>
        </div>

        <div class="nav-item">
            <a href="bid.php">BIEDEN</a>
        </div>

        <div class="nav-item" style="padding-right: 20px;">
            <a href="contactpagina.html">CONTACT</a>
        </div>

    </div>
<div class="testbox">
    <h1>Bieden</h1>

    <form action="test.php" method="post" >

        <br>
        <label  for="name"><i></i></label>
        <input type="text" name="Voornaam" id="Voornaam" placeholder="Voornaam" required/>

        <label  for="name"><i></i></label>
        <input type="text" name="Achternaam" id="Achternaam" placeholder="Achternaam" required/>

        <label  for="name"><i></i></label>
        <input type="text" name="Bieden" id="Bieden" placeholder="Bedrag" required/>

        <label  for="name"><i>Datum</i></label>
        <input type="date" name="Datum" id="Datum" placeholder="Datum" required/>

        <br>
        <br>
        <input type="submit" name="submit" value="Plaats bod" class="button1">

    </form>
    <br>
    <br>
    <br>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.inc.php");

$query = "SELECT * FROM bid ORDER BY bieden DESC LIMIT 6";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result)== 0) {
    echo "<p>er zijn geen resultaten gevonden.</p>";
}

else{

    //maak een tabel (Buiten de while_lus!)
    echo "<table border='1' style='color: black; background-color: #ebebeb; border-radius: 2px;' >";
    echo "<h2>Alle biedingen</h2>";
    echo "</br>";
    echo "</tr>";
    echo "<td style='color: black'><strong>Voornaam:</strong></td>";
    echo "<td style='color: black'><strong>Achternaam:</strong></td>";
    echo "<td style='color: black'><strong>Biedingen:</strong></td>";
    echo "<td style='color: black'><strong>Datum:jjjj/mm/dd </strong></td>";
    echo "</tr>";

    //via een while worden alle rijen uitgelezen en getoond
    while ($rij = mysqli_fetch_array($result)){

        echo "</tr>";
        echo "<td> ".$rij ['Voornaam'] . "</td>";
        echo "<td> ".$rij ['Achternaam'] . "</td>";
        echo "<td> €".$rij['Bieden'] . "</td>";
        echo "<td> ".$rij ['Datum'] . "</td>";
        }
}
//while ($row = mysqli_fetch_array($result)) {
//    echo("Naam: {$row['Voornaam']}<br>");
//    echo("Bod: {$row['Bieden']}<br>");
//
//}
?>

</body>

</html>
