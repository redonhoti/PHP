<html lang="en">
<head>
    <title>Unaza foreach PHP</title>
</head>
<body>

<?php
$ora = array (
    "emri" => "Ardian Tahiri" ,
    "email" => "ardiantahiri@mail.com" ,
    "mosha" => 45
);
 
// Kaloni nëpër grupin e superheronjve
foreach ( $ora as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>

</body>
</html>
