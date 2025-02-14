<html lang="en">
<head>
    <title>Konvertimi i Timestamp në format të lexueshëm</title>
</head>
<body>
<?php
$timestamp = time();
echo($timestamp);
echo "<br>";
echo(date("F d, Y h:i:s", $timestamp));
?>
</body>
</html>
