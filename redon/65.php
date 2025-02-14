<html lang="en">
<head>
    <title>Kthimi i vlerave nga një funksion PHP</title>
</head>
<body>
<?php
// Përcaktimi i funksionit
function pjestimi ($ipjestueshmi, $pjestuesi){
    $herësi= $ipjestueshmi/$pjestuesi;
    $grupi= array ($ipjestueshmi, $pjestuesi, $herësi);
    return $grupi;
}
list($ipjestueshmi, $pjestuesi, $herësi)= pjestimi (10, 2);
echo $ipjestueshmi. "<br>";  // 10
echo $pjestuesi. "<br>";   // 2
echo $herësi;  // 5
?>
</body>
</html>
