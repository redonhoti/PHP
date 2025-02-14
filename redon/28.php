<html lang="en">
<head>
    <title>Operatorët logjikë</title>
</head>
<body>

<?php
$year = 2014;
// Vitet e brishtë ndahen me 400 ose me 4 por jo me 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
?>

</body>
</html>
