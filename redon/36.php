<html lang="en">
<head>
    <title>Përdorimi i operatorit ternar me funk.isset()</title>
</head>
<body>

<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'anonim';
echo $name;
?>

</body>
</html>
