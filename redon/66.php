<html lang="en">
<head>
    <title>Kalimi i argumenteve me referencë</title>
</head>
<body>
<?php
/* Përcaktimi i një funksioni që shumëzon një numër dhe kthen vlerën e re */
function shumëzo (&$numër){
    $numër *= $numër;
    return $numër;
}
$numri= 5;
echo $numri. "<br>"; // 5
shumëzo ($numri);
echo $numri; // 25
?>
</body>
</html>
