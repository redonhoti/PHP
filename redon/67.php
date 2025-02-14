<html lang="en">
<head>
    <title>Kalimi i argumenteve me referencë</title>
</head>
<body>
<?php
function mbledhja (&$numri){
    $numri += $numri;
    return $numri;
}
$numri= 7;
mbledhja ($numri);
echo $numri; 
?>
</body>
</html>