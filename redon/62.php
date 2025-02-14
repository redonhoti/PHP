<html lang="en">
<head>
    <title>Funksioni me parametera opsional PHP</title>
</head>
<body>
<?php
// Përcaktimi i funksionit
function Fonti($font, $size= 1.5){
    echo "<p style=\"font-family: $font ; font-size: { $size } em ;\">Përshëndetje, Ardian!</p>";
}
// Thirrja e funksionit
Fonti ("Arial", 2);
Fonti ("Times", 3);
Fonti ("Kourier");
?>
</body>
</html>
