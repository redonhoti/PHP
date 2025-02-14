<html lang="en">
<head>
    <title>Fjala kyçe Global PHP</title>
</head>
<body>
<?php
$libri= "Bëhu i sinqert!". "<br>";
// Funksioni përcaktues
function test(){
    global $libri;
    echo $libri;
} 
test (); // Bëhu i sinqert!
echo $libri; // Bëhu i sinqert!
// Cakto një vlerë të re për variabël
$libri = "Mirupafshim". "<br>";
test (); // Mirupafshim
echo $libri; // Mirupafshim
?>
</body>
</html>
