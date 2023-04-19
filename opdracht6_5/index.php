<!DOCTYPE html>

<html>

<head>

    <title>Remsysteem</title>

</head>

<body>




<?php

    // Functie om snelheid te berekenen

    function berekenSnelheid($lengte, $remvertraging = 5.5) {

        $snelheid = sqrt(2 * $remvertraging * $lengte);

        $snelheid = ($snelheid * 3600) / 1000;

        return round($snelheid, 2);

    }




    // Controleer of het formulier is ingevuld en bereken de snelheid

    if(isset($_POST['submit'])) {

        $lengte = $_POST['lengte'];

        $remvertraging = $_POST['remvertraging'];




        // Controleer of beide velden zijn ingevuld

        if(empty($lengte) || empty($remvertraging)) {

            echo "<p>Beide velden zijn verplicht in te vullen</p>";

        } else {

            $snelheid = berekenSnelheid($lengte, $remvertraging);

            echo "<p>De snelheid is " . $snelheid . " km/u</p>";

        }

    }

?>




<!-- Formulier om lengte remspoor en remvertraging op te geven -->

<form method="post" action="">

    <label for="lengte">Lengte remspoor (in meters):</label><br>

    <input type="number" id="lengte" name="lengte" required><br>




    <label for="remvertraging">Remvertraging:</label><br>

    <input type="number" id="remvertraging" name="remvertraging" value="5.5" required><br>




    <input type="submit" name="submit" value="Bereken snelheid">

</form>

</body>