<html lang="en">
<head>
    <title>Marrja e datës së ardhëshme</title>
</head>
<body>
<?php
// Kthimi i datës së ardhëshme
$data = mktime(0,0,0,date("m")+30,date("d"),date("Y"));
echo date("d/m/Y", $data);
?>
</body>
</html>
