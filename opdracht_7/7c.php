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
function powerOfThree($number) {
return $number * $number * $number;
}
for ($i = 1; $i <= 25; $i++) {
$result = powerOfThree($i);
echo "$i x $i x $i is: $result<br>";
}
?>
</body>
</html>