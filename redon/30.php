<html lang="en">
<head>
    <title>Operatorët e vargjeve</title>
</head>
<body>

<?php
$x = array("a" => "E kuqe", "b" => "E gjelbër", "c" => "E kaltër");
$y = array("u" => "E verdhë", "v" => "Portokalli", "w" => "E kaftë");
$z = $x + $y; // Bashkimi i $x dhe $y
var_dump($z);
echo "<hr>";

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
?>
</body>
</html>