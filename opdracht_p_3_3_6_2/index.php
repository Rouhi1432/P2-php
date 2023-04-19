<!DOCTYPE html>
<html lang="nl">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>jens rakan</title>
</head>
<body>
 <form action="#" method="post">
 <label for="age">Leeftijd:</label>
<input id='number' type="number" name="number"> <br>
 <label for="stemvrg">Heeft u een stempas?</label><br>
 <input id='stempasja' type="radio" name="stempasja">ja</input><br>
 <input id='stempasnee' type="radio" name="stempasnee">nee</input><br>
 <input type="submit" name="verzend">
</form>
 <?php
if (isset($_POST['verzend'])) {
$age = $_POST['number'];
 if ($age >= 16) {
 echo "Je mag rijexamen voor je scooterrijbewijs doen.";
 } elseif ($age < 16) {
 echo "Je bent te jong om uw scooterrijbewijs te halen";
}
 };
 if (isset($_POST['stempasja']) && $age >= 18) {
 echo "<br> Je mag stemmen";
 }
 elseif (isset($_POST['stempasnee']) && $age <= 17) {
 echo "<br> Je mag niet stemmen";
 }
 elseif (isset($_POST['stempasja']) && $age <= 17) {
 echo "<br> Je mag niet stemmen";
 }
?>

</body>




</html>