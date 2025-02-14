<html lang="en">
<head>
    <title>Zavendësimi i tekstit brenda vargut</title>
</head>
<body>

<?php
$dora= 'Nëse faktet nuk përputhen me teorinë, ndryshoni faktet.';
 
// Kryeni zavendësimin e vargut
str_replace("faktet", "e verteta", $dora, $count);
 
// Shfaq numrin e zëvendësimeve të kryera
echo "Teksti u zëvendësia $count herë.";
?>

</body>
</html>
