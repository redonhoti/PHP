<!DOCTYPE html>
<html lang="en">
<head>
    <title>Filtrimi i stringut në PHP</title>
</head>
<body>
<?php
// Shembull i komentit të përdoruesit
$koment = "<h1>Përshëndetje! Si po kaloni sot?</h1>";
// Filtroni dhe printoni vargun e komenteve
$filtrimi = filter_var($koment, FILTER_SANITIZE_STRING);
echo $filtrimi;
?>
</body>
</html>   
