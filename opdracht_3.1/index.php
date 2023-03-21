<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    date_default_timezone_set("Europe/Amsterdam");
     
$date = date("l j F Y");
echo "Het is vandaag: " . $date .   ".";
$daycount = date("z");
echo "<p>vandaag is de $daycount'e dag van het jaar.</p>";
$day = date("l");
$week = date("w");
echo "<p>$day is de week'dag van de week.</p>"  ; 

$month = date("F");

$daymonth = date("j"); 
echo "<p> De maand $month heeft in totaal $daymonth dagen.</p>";
$year = date("Y"); 
$leapyear = date("L");
if ($leapyear ==1) 
$lyear = ("wel een ");
if ($leapyear == 0)
$lyear = ("geen");
echo "<p>Het jaar  $year is $lyear schrikkeljaar.</p>";

?>

</body>
</html>