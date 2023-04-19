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
if(isset($_POST['submit'])) {
 $invoer = $_POST['invoer'];
 $eindget = $invoer * $invoer * $invoer;
 echo " $invoer x $invoer x $invoer, is $eindget";
 }
 ?>
 <form method="POST">
<label for="Invoer">Invoernummer</label><br>
<input type="number" id="invoer" name="invoer" required><br>
<input type="submit" name="submit" value="Bereken">
</body>
</html>