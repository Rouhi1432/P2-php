<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 5</title>
</head>

<body>
    <form method="POST" action="">
        <label for ="voornaam">Voornaam:</label><br> 
        <input type="text" id="voornaam" name="voornaam" required><br>
        <label for="achternaam">Achternaam:</label><br>
        <input type="text" id="achternaam" name="achternaam" required><br>
        <label for="geslacht">Geslacht:</label><br>
        <input type="radio" id="geslacht" name="geslacht" value="man">Man<br>
        <input type="radio" id="geslacht" name="geslacht" value="vrouw">Vrouw<br>
        <label for="straat">Straat en huisnummer:</label><br>
        <input type="text" id="straat" name="straat"><br>
        <label for="stad">Stad:</label><br>
        <input type="text" id="stad" name="stad" required><br>
        <label for="land">Land:</label><br>
        <select id="land" name="land" required>
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Duitsland">Duitsland</option>
            <option value="Frankrijk">Frankrijk</option>
            <option value="Spanje">Spanje</option>
        </select><br>
        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord"><br>
        <input type="submit" value="Verzenden">

    </form>

</body>

</html>